<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Shift;
use App\Models\Specialty;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\text;

class AdminController extends Controller
{

    public function show() {
        return view('admin.admin');
    }
    
    public function showAgendar() {
        return view('admin.agendar');
    }

    public function agendar(Request $request) {
        $dni = $request->input('dni');
        $user = User::where('dni', $dni)->get();
        $paciente = Patient::where('user_id', $user[0]->id)->get();
        session(['admin'=>['paciente_id'=>$paciente[0]]]);
        $especialidades = Specialty::all();
        return view('paciente.agendar_especialidad', compact('especialidades'));
        
    }

    public function citas(Request $request) {
        // $texto = trim($request->get('texto'));
        // $patient = DB::table('appointment')
        //                 ->select('id','apellidos','nombre')
        //                 ->where('apellidos', 'LIKE','%'.$texto.'%' )
        //                 ->orWhere('apellidos', 'LIKE','%'.$texto.'%' )
        //                 ->orderBy('apellidos', 'ASC');
                        
        $texto = trim($request->get('texto'));
        $patient = Appointment::with('patient', 'doctor.specialty', 'shift.schedule')->get();
        //     ->where(function ($query) use ($texto) {
        //         $query->where('apellidos', 'LIKE', '%' . $texto . '%')
        //             ->orWhere('nombre', 'LIKE', '%' . $texto . '%');
        // })
        // ->orderBy('apellidos', 'ASC');
    

        return view('admin.agenda', compact('patient'));
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

    public function destroy(Request $request){
        
        $id = $request->input('id');
        $eliminar = Appointment::findOrFail($id);
        $turno = Shift::find($eliminar->shift_id);
        $turno->disponible = 1;
        $turno->save();
        $eliminar->delete();
        return redirect()->route('citasAdmin')->with('success', 'Cita eliminada correctamente');
    }


    
}
