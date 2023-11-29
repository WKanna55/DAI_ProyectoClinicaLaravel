<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagoController extends Controller
{
    public function pago() {
        if(Auth::check()) {
            return view('paciente.pago');
        }
        return view('auth.register');
    }
}
