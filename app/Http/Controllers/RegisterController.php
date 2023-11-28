<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Patient;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class RegisterController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return view('paciente.agendar');
        }
        return view('auth.register');
    }

    // public function register(RegisterRequest $request) {
    //     $user = User::create($request->validated());
    //     // Redireccion a login
    //     return redirect('/login')->with('success','Account created succesfully');
    // }

    public function register(RegisterRequest $request)
    {

        // try {
        //     $user = User::create([
        //         'dni' => $request->input('dni'),
        //         'password' => $request->input('password'), 
        //         'rol_id' => 1
        //     ]);
    
        //     // Obtener el ID del usuario recién creado
        //     $userId = $user->id;
    
        //     // Crear el registro en la tabla "patients"
        //     $patient = Patient::create([
        //         'usuario_id' => $userId, // Asignar la clave foránea
        //         'nombres' => $request->input('nombres'),
        //         'apellidos' => $request->input('apellidos'),
        //         'telefono' => $request->input('telefono'),
        //         'email' => $request->input('email'),
        //         'direccion' => $request->input('direccion'),
        //         'fecha_nacimiento' => $request->input('fecha'),
        //     ]);
    
        //         // Redirigir o devolver una respuesta exitosa
        //     return redirect()->route('home');

        // } catch (Exception $e){
        //     return redirect()->route('reg');
        // }
        

        // try {
        //     $user = new User();
        //     $user->dni = $request->input('dni');
        //     $user->password = $request->input('password');
        //     $user->rol_id = 1;
        //     $user->save();

        //     $userId = $user->id;

        //     $patient = new Patient();
        //     $patient->usuario_id = $userId;
        //     $patient->nombres = $request->input('nombres');
        //     $patient->apellidos = $request->input('apellidos');
        //     $patient->telefono = $request->input('telefono');
        //     $patient->email = $request->input('email');
        //     $patient->direccion = $request->input('direccion');
        //     $patient->fecha_nacimiento = $request->input('fecha');
        //     $patient->save();

        //     return redirect()->route('home');

        // } catch (Exception $e){
        //     return redirect()->route('reg');
        // }
        
        $user = new User();
            $user->dni = $request->input('dni');
            $user->password = $request->input('password');
            $user->rol_id = 1;
            $user->save();

            $userId = $user->id;

            $patient = new Patient();
            $patient->usuario_id = $userId;
            $patient->nombres = $request->input('nombres');
            $patient->apellidos = $request->input('apellidos');
            $patient->telefono = $request->input('telefono');
            $patient->email = $request->input('email');
            $patient->direccion = $request->input('direccion');
            $patient->fecha_nacimiento = $request->input('fecha');
            $patient->save();

            return redirect()->route('home');
    }
}
