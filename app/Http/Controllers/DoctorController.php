<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;

class DoctorController extends Controller
{
    public function citas() {
        $user = Auth::user();

        $doctor = $user->Doctor;
        return view('doctor.doctor', ['doctor' => $doctor]);

    }


    public function atencion(){

        return view('doctor.atencion');
    }

    public function guardarAtencion(Request $request)
    {
        // Obtener los datos del formulario
        $alergias = $request->input('alergias');
        $sintomas = $request->input('sintomas');
        $operaciones = $request->input('operaciones');
        $valoracion = $request->input('valoracion');
        $medicamentos = $request->input('medicamentos');
        $instrucciones = $request->input('instrucciones');

        $receta = "Medicamentos: " . $medicamentos . "\nInstrucciones: " . $instrucciones;

        // Guardar en la base de datos
        $diagnosis = new diagnoses();
        $diagnosis->alergias = $alergias;
        $diagnosis->sintomas = $sintomas;
        $diagnosis->OperAnteriores = $operaciones;
        $diagnosis->valoracion = $valoracion;
        $diagnosis->receta = $receta;
        $diagnosis->save();

        // Lógica para enviar por Green API a WhatsApp del paciente
        // ...

        // Redirigir o enviar una respuesta de éxito
        return redirect()->back()->with('success', 'Diagnóstico guardado correctamente.');
    }


}