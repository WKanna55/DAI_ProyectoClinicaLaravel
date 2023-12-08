<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Shift;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //$fechas = Shift::where('doctor_id', $doctor_id)->select('fecha')->distinct()->get();
        $fechas = Shift::where('doctor_id', $doctor_id)->where('disponible', 1)
        ->select('fecha', 'doctor_id')->distinct()->get();
        
        return view('paciente.agendar_fecha', compact('fechas'));
    }

    public function showHorarios(Request $request){
        $fecha = $request->input('fecha');
        $id_doctor = $request->input('id_doctor');
        //dd($id_doctor);
        //$turno = Shift::where('fecha', $fecha)->get();
        //dd($turno);
        
        $horarios = Shift::where('fecha', $fecha)->where('doctor_id', $id_doctor)->where('disponible', 1)
            ->join('schedules', 'schedule_id', '=', 'schedules.id')
            ->select('schedules.horario', 'doctor_id', 'schedule_id', 'shifts.id')->get();
        //dd($horarios);
        return view('paciente.agendar_horario', compact('horarios'));
    }

    public function agendarCita(Request $request){
        $edad = 20;
        $condicion = 'pendiente';
        $patient_id = Auth::user()->id;
        $doctor_id = $request->input('id_doctor');
        $shift_id = $request->input('id_shift');

        $cita = New Appointment();
        $cita->edad = $edad;
        $cita->condicion = $condicion;
        $cita->patient_id = $patient_id;
        $cita->doctor_id = $doctor_id;
        $cita->shift_id = $shift_id;
        $cita->save();

        $shift = Shift::find($shift_id);

        $shift->disponible = 0;
        $shift->save();

        return redirect()->route('home');
    }


}
