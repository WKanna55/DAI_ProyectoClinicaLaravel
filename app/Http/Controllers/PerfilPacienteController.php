<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use App\Models\User;
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

        $citas = Appointment::where('patient_id', $patient->id)
            ->where('condicion', 'pendiente')
            ->with('doctor.specialty', 'shift.schedule')
            ->get()
            ->sortBy(function ($cita) {
                return $cita->shift->schedule->horario;
            });

        $cita_historial = Appointment::where('patient_id', $patient->id)
            ->where('condicion', 'finalizado')
            ->with('doctor.specialty', 'shift.schedule', 'diagnosis')
            ->get();

        return view('paciente.perfilPaciente', compact('patient', 'citas', 'cita_historial'));
    }

    //public function citas() {
    //    $user = Auth::user();
    //    $doctor = $user->Doctor;
    //    return view('doctor.doctor', ['doctor' => $doctor]);
    //}

    public function update(Request $request) {
        $request->validate([
            'dni' => 'required|digits:8',
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|numeric|digits:9',
            'direccion' => 'required|string',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required|date',
        ]);
    
        $patient = Patient::findOrFail($request->id);
        $user = $patient->user;
        $user->update([
            'dni' => $request->input('dni'),
        ]);
    
        $patient->update([
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

