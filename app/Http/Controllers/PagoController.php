<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Shift;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PagoController extends Controller
{
    public function pago() {
        if(Auth::check()) {
            return view('paciente.pago');
        }
        return view('auth.register');
    }

    public function payment(Request $request) {

        // Para pasar info
        $condicion = 'pendiente';
        $user_id = Auth::user()->id;
        $patient = Patient::where('user_id', $user_id)->get();
        $patient_id = $patient[0]->id;
        $doctor_id = $request->input('id_doctor');
        $shift_id = $request->input('id_shift');
        $monto = $request->input('precio');

        session(['cita' => ['condicion' => $condicion,
                            'user_id' => $user_id,
                            'patient_id' => $patient_id,
                            'doctor_id' => $doctor_id,
                            'shift_id' => $shift_id]]);

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal')); 
        $paypalToken = $provider->getAccessToken();

        $response =  $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->precio
                    ]
                
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach($response['links'] as $link) {
                echo $link['rel'];
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }

        } else {
            return redirect()->route('paypal_cancel');
        }
        
    }

    public function success(Request $request) {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal')); 
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()->route('paypal_aviso');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel(Request $request) {
        return 'Se ha cancelado el proceso de pago';
    }

    public function aviso() {

        $condicion = session('cita')['condicion'];
        $user_id = session('cita')['user_id'];
        $patient_id = session('cita')['patient_id'];
        $doctor_id = session('cita')['doctor_id'];
        $shift_id = session('cita')['shift_id'];

        $cita = New Appointment();
        $cita->condicion = $condicion;
        $cita->patient_id = $patient_id;
        $cita->doctor_id = $doctor_id;
        $cita->shift_id = $shift_id;
        $cita->save();

        $shift = Shift::find($shift_id);
        $shift->disponible = 0;
        $shift->save();
        return view('paciente.pago_exitoso');
    }
}
