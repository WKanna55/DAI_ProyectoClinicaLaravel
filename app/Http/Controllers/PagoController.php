<?php

namespace App\Http\Controllers;

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
        
        return view('paciente.pago_exitoso');
    }
}
