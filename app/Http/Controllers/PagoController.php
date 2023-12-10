<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Payment;
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
        $telefono = $patient[0]->telefono;
        $nombres = $patient[0]->nombres;
        $apellidos = $patient[0]->apellidos;
        $doctor_id = $request->input('id_doctor');
        $specialty = Doctor::with('specialty')->where('id', $doctor_id)->get();
        $especialidad = $specialty[0]->specialty->nombre;
        $doctorNombres = Doctor::find($doctor_id)['nombres'];
        $doctorApellidos = Doctor::find($doctor_id)['apellidos'];
        $shift_id = $request->input('id_shift');
        $fecha = Shift::find($shift_id)['fecha'];
        $consultorio = Doctor::find($doctor_id)['consultorio'];

        // Hora
        $schedule = Shift::with('schedule')->where('id', $shift_id)->get();
        $hora = $schedule[0]->schedule->horario;
        $carbonHora = Carbon::parse($hora);
        $hora24 = $carbonHora->format('H:i');

        // Fecha
        $carbonFecha = Carbon::parse($fecha);
        $fechaFormateada = $carbonFecha->format('d-m'); // número del día

        $monto = $request->input('precio');

        session(['cita' => ['condicion' => $condicion,
                            'user_id' => $user_id,
                            'patient_id' => $patient_id,
                            'telefono' => $telefono,
                            'doctor_id' => $doctor_id,
                            'shift_id' => $shift_id,
                            'nombres' => $nombres,
                            'apellidos' => $apellidos,
                            'fechaFormateada' => $fechaFormateada,
                            'hora' => $hora24,
                            'fecha' => $fechaFormateada,
                            'doctorNombres' => $doctorNombres,
                            'doctorApellidos' => $doctorApellidos,
                            'especialidad' => $especialidad,
                            'consultorio' => $consultorio,
                            'monto' => $monto]]);

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
        return view('paciente.pago_cancelado');
    }

    public function aviso() {
        // Verificar si la sesión existe
        if (session()->has('cita')) {
            // Recuperar datos de la sesión
            $condicion = session('cita')['condicion'];
            $user_id = session('cita')['user_id'];
            $patient_id = session('cita')['patient_id'];
            $doctor_id = session('cita')['doctor_id'];
            $shift_id = session('cita')['shift_id'];
            $telefono = session('cita')['telefono'];
            $nombres = session('cita')['nombres'];
            $apellidos = session('cita')['apellidos'];
            $fechaFormateada = session('cita')['fechaFormateada'];
            $hora = session('cita')['hora'];
            $consultorio = session('cita')['consultorio'];
            $doctorNombres = session('cita')['doctorNombres'];
            $doctorApellidos = session('cita')['doctorApellidos'];
            $especialidad = session('cita')['especialidad'];
    
            // Crear registros solo si la sesión está presente
            $cita = new Appointment();
            $cita->condicion = $condicion;
            $cita->patient_id = $patient_id;
            $cita->doctor_id = $doctor_id;
            $cita->shift_id = $shift_id;
            $cita->save();
    
            $payment = new Payment();
            $cita_id = $cita->id;
            $monto = session('cita')['monto'];
            $payment->monto = $monto;
            $payment->appointment_id = $cita_id;
            $payment->save();
    
            $shift = Shift::find($shift_id);
            $shift->disponible = 0;
            $shift->save();
            

            // Conexion a la green api para enviar informacion

            $url = 'https://api.green-api.com/waInstance7103884220/SendMessage/2d9c7260f7104a38bc298c10a1dd3189d890484d331040e0ba';
            $data = [
                // "51999999999@c.us",
                // "51".$persona->celular."@c.us",
                // "title" => "Clinica Vida", 
                "chatId" => "51967660693"."@c.us",
                "message" =>  'Estimado(a) *'.strtoupper($nombres).' '.strtoupper($apellidos).'*, se confirma el registro de su cita para el dia 🗓️ *'.strtoupper($fechaFormateada).'* en el horario 🕒  *'.strtoupper($hora).'*'. ' para la especialidad de *'. strtoupper($especialidad).'* con el doctor 👨‍⚕️ *'.strtoupper($doctorNombres).' '.strtoupper($doctorApellidos).'*, en el consultorio'. ' *'.strtoupper($consultorio).'* '.'recuerda presentarte con tiempo a tus citas.'
            ];

            $options = array(
                'http' => array(
                    'method'  => 'POST',
                    'content' => json_encode($data),
                    'header' =>  "Content-Type: application/json\r\n" .
                        "Accept: application/json\r\n"
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            // Limpiar la sesión después de crear los registros
            session()->forget('cita');
    
            return view('paciente.pago_exitoso');
        } else {
            // La sesión no está presente, realizar alguna acción de manejo de error
            return redirect()->route('home'); // Reemplaza 'ruta_del_error' con la ruta real
        }

        

        

        return view('paciente.pago_exitoso');

    }
}
