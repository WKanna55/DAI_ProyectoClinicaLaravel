<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Http\Request;

class AgendarCitaController extends Controller
{
    public function showEspecialidad(){
        $especialidades = Specialty::all();
        return view('paciente.agendar_especialidad', compact('especialidades'));
    }

    public function showDoctores(Request $request){
        $especialidad_id = $request->input('specialty_id');
        $doctores  = Doctor::where('specialty_id', $especialidad_id)->get();
        return view('paciente.agendar_doctor', compact('doctores'));
    }
    
    public function showFechas(Request $request){
        
        return view('paciente.agendar_fecha');
    }

    public function showHorarios(){
        return view('paciente.agendar_horario');
    }
}
