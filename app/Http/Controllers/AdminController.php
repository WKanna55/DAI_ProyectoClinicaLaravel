<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function show() {
        return view('admin.admin');
    }

    public function agendar() {
        return view('admin.agenda');
    }

    public function citas() {
        return view('/');
    }

    public function listar() {

        $fechaActual = Carbon::now()->toDateString();
        
        // Obtener las citas desde la fecha actual con todas las relaciones necesarias
        $appointment = Appointment::whereHas('shift.schedule', function ($query) use ($fechaActual) {
            $query->where('fecha', '>=', $fechaActual);
            })
            ->with(['patient:id,nombres,apellidos', 'doctor:id,nombres,specialty_id', 'doctor.specialty:id,nombre', 'shift.schedule:id,horario'])
            ->get();

        return view('admin.citas')->with('citas', $appointment);
    
    }


    
}
