<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }

    public function authenticated(Request $request, $user) {
        
        //\Log::debug($user); //recibir parametros del usuario mediante debug
        if ($user->role_id == 2) {
            // Utilizamos la relación 'Doctors' definida en el modelo User
            $doctor = $user->Doctor;
            return view('doctor.doctor', ['doctor' => $doctor]);
        }

        elseif ($user->role_id == 3){ // Agregado
            return view('admin.admin');
        }
        return redirect('/');
    }
}
