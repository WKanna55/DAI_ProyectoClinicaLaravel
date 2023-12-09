<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilPacienteController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $user_id = Auth::user()->id;
        $patients = Patient::where('user_id', $user_id)->get();
        $patient = $patients[0];

        $cita = Appointment::where('patient_id', $patient->id)
                ->where('condicion', 'pendiente')
                ->with('doctor.specialty', 'shift.schedule')
                ->get();

        $cita_historial = Appointment::where('patient_id', $patient->id)
                ->where('condicion', 'finalizado')
                ->with('doctor.specialty', 'shift.schedule', 'diagnosis')
                ->get();

                //dd($cita_historial);
        return view('paciente.perfilPaciente', compact('patient', 'cita', 'cita_historial'));


    }

    //public function citas() {
    //    $user = Auth::user();
    //    $doctor = $user->Doctor;
    //    return view('doctor.doctor', ['doctor' => $doctor]);
    //}

    public function update(Request $request) {

        $patient = Patient::findOrFail($request->id);
        $patient->update([
            'dni' => $request->input('dni'),
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'email' => $request->input('email'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
        ]);

        return redirect()->route('perfilPaciente');
    }


}

