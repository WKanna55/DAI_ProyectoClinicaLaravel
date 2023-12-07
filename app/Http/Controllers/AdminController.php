<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function adminShow() {
        return view('admin.admin');
    }

    public function register() {
        return view('admin.registroCitas');
    }

    public function listar() {

        $fechaActual = Carbon::now()->toDateString();
        
        // Obtener las citas desde la fecha actual con todas las relaciones necesarias
        $appointment = Appointment::whereHas('shift.schedule', function ($query) use ($fechaActual) {
            $query->where('fecha', '>=', $fechaActual);
            })
            ->with(['patient:id,nombrePaciente,apellidoPaciente', 'doctor:id,nombreDoctor,especialidad_id', 'doctor.especialidad:id,especialidad', 'shift.schedule:id,horario'])
            ->get();
        
        dd($appointment);

        // return view('admin.listaCitas', ['citas' => $appointment]);
    }


    
}
