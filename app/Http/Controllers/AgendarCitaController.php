<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
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
        // Validar que se haya seleccionado una especialidad
        $request->validate([
            'specialty_id' => 'required|exists:specialties,id',
        ]);
    
        $especialidad_id = $request->input('specialty_id');
    
        // Resto de la lógica para obtener doctores
        $doctores = Doctor::where('specialty_id', $especialidad_id)->get();
    
        if ($doctores->isEmpty()) {
            // Si no hay doctores disponibles para la especialidad seleccionada
            return back()->withInput()->withErrors(['specialty_id' => 'No hay doctores disponibles para la especialidad seleccionada.']);
        }
    
        return view('paciente.agendar_doctor', compact('doctores'));
    }
    
    public function showFechas(Request $request){
         // Validar que se haya seleccionado una fecha
        
        $doctor_id = $request->input('doctor_id');
        $fechaInicio = now()->subDay(); // Primero día del mes actual
        $fechaFin = now()->addDays(30); // Último día del mes actual

        $fechas = Shift::where('doctor_id', $doctor_id)
            ->where('disponible', 1)
            ->whereDate('fecha', '>=', now()->toDateString()) // Filtra fechas mayores o iguales al día actual
            ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Filtra por el rango de fechas del mes actual
            ->orderBy('fecha', 'asc')
            ->select('fecha', 'doctor_id')
            ->distinct()
            ->get();
        
        return view('paciente.agendar_fecha', compact('fechas'));
    }

    public function showHorarios(Request $request){
        // Validar que se haya seleccionado una fecha
        $request->validate([
            'fecha' => 'required|date',
            'id_doctor' => 'required|exists:doctors,id',
        ]);
    
        // Verificar si se ha seleccionado una fecha
        if ($request->filled('fecha')) {
            $fecha = $request->input('fecha');
            $id_doctor = $request->input('id_doctor');
            $doctor = Doctor::find($id_doctor);
            
            // Resto de la lógica para obtener horarios
            $horarios = Shift::where('fecha', $fecha)->where('doctor_id', $id_doctor)->where('disponible', 1)
                ->join('schedules', 'schedule_id', '=', 'schedules.id')
                ->select('schedules.horario', 'doctor_id', 'schedule_id', 'shifts.id')->get();
            
            // Retornar la vista correspondiente
            return view('paciente.agendar_horario', compact('horarios', 'doctor'));
        } else {
            // Si no se ha seleccionado una fecha, permanecer en la misma vista
            return redirect()->route('showFechas')->withInput()->withErrors(['fecha' => 'Por favor, selecciona una fecha.']);
            return redirect()->route('agendar_fecha')->withErrors(['fecha' => 'Por favor, selecciona una fecha.']);

        }
    }
}



