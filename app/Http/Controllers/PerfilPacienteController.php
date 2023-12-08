<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilPacienteController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $patient = $user->Patient;

        return view('paciente.perfilPaciente', ['patient' => $patient]);
    }

    //public function citas() {
    //    $user = Auth::user();
    //    $doctor = $user->Doctor;
    //    return view('doctor.doctor', ['doctor' => $doctor]);
    //}
}

