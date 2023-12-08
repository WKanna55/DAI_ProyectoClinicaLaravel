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
        
        if ($user->role_id == 2) {
            return redirect()->route('citas');
        } elseif ($user->role_id == 3) {
            return view('admin.admin');
        } elseif ($user->role_id == 1) {
            return redirect()->route('perfilPaciente');
        } else {
            return redirect('/');
        }
        
    }
}