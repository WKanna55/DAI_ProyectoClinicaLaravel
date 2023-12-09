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
        //dd($doctor);
        return view('doctor.doctor', ['doctor' => $doctor]);

    }

    public function atencion(Request $request)
    {
        $appointment_id = $request->input('appointment_id');
        $doctor_id = $request->input('doctor_id');
        
        //$cita = Appointment::with('patient','doctor.specialty', 'diagnosis','shift.schedule')->find(1);
        $appointment = Appointment::find($appointment_id);
        //dd($appointment->patient_id);
        $patient = Patient::find($appointment->patient_id);
        //dd($patient);
        $doctor = Doctor::find($doctor_id);
        //dd($doctor);
        
        $condicion_cita = $appointment->condicion;
        if($condicion_cita == 'pendiente'){
            return view('doctor.atencion', compact('appointment', 'patient', 'doctor'));
        }
        elseif($condicion_cita == 'finalizado'){
            $diagnostico = Diagnosis::where('appointment_id', $appointment_id)->get();
            return view('doctor.atencion', compact('appointment', 'patient', 'doctor', 'diagnostico'));
        }
    }

    // public function doc_citas(){
    //     $doctor = Appointment::with('doctor', 'patient', 'shift.schedule');
    //     return view('doctor.doctor', compact('doctor'));
    // }

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

        $condicion_cita = Appointment::find($appointment_id)->condicion;

        if($condicion_cita == 'pendiente'){
            $diagnostico = new Diagnosis;
            $diagnostico->alergias = $request->input('alergias');
            $diagnostico->sintomas = $request->input('sintomas');
            $diagnostico->operAnteriores = $request->input('operAnteriores');
            $diagnostico->valoracion = $request->input('valoracion');
            $diagnostico->receta = $request->input('receta');
            
            $diagnostico->appointment_id = $appointment_id;
            $diagnostico->save();

            $appointment_update = Appointment::find($appointment_id);
            $appointment_update->condicion = "finalizado";
            $appointment_update->save();
        }
        elseif($condicion_cita == 'finalizado'){
            $diagnostico_id = $request->input('diagnostico_id');
            $diagnostico_update = Diagnosis::find($diagnostico_id);
            $diagnostico_update->alergias = $request->input('alergias');
            $diagnostico_update->sintomas = $request->input('sintomas');
            $diagnostico_update->operAnteriores = $request->input('operAnteriores');
            $diagnostico_update->valoracion = $request->input('valoracion');
            $diagnostico_update->receta = $request->input('receta');
            $diagnostico_update->save();
        }
        return redirect()->route('citas');
    }
}
