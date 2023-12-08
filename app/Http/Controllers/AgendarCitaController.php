<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Shift;
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
        $doctor_id = $request->input('doctor_id');
        $fechas = Shift::where('doctor_id', $doctor_id)->select('fecha')->distinct()->get();
        return view('paciente.agendar_fecha', compact('fechas'));
    }

    public function showHorarios(Request $request){
        $horario_id = $request->input('schedule_id');
        $horarios = Schedule::where('id', $horario_id)->get();
        return view('paciente.agendar_horario', compact('horarios'));
    }
}
