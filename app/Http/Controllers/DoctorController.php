<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Diagnosis;
use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function citas() {
        $user = Auth::user();

        $doctor = $user->Doctor;
        return view('doctor.doctor', ['doctor' => $doctor]);

    }

    public function atencion()
    {
        
        $cita = Appointment::with('patient','doctor.specialty', 'diagnosis')->find(1);
        return view('doctor.atencion', compact('cita'));

    }

    public function post_consulta(Request $request)
    {
        $request->validate([
            'alergias' => 'required',
            'sintomas' => 'required',
            'operAnteriores' => 'required',
            'valoracion' => 'required',
            'receta' => 'required',
            'appointment_id' => 'required',  
        ]);
        $appointment_id = $request->input('appointment_id');
        $doctor_id = 
        $diagnostico = new Diagnosis;
        $diagnostico->alergias = $request->input('alergias');
        $diagnostico->sintomas = $request->input('sintomas');
        $diagnostico->operAnteriores = $request->input('operAnteriores');
        $diagnostico->valoracion = $request->input('valoracion');
        $diagnostico->receta = $request->input('receta');
        
        $diagnostico->appointment_id = $appointment_id;
        $diagnostico->save();
        return view('doctor.doctor');
    }
}
        



