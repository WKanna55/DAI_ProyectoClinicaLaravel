<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Diagnosis;
use App\Models\Doctor;
use App\Models\Shift;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class DoctorController extends Controller
{
    public function citas() {
        $user = Auth::user();
        $doctor = $user->Doctor;
    
        // Citas del doctor para el día de hoy
        $fechaActual = now()->toDateString();
        $citasHoy = $doctor->Appointment()
            ->join('shifts', 'appointments.shift_id', '=', 'shifts.id')
            ->join('schedules', 'shifts.schedule_id', '=', 'schedules.id')
            ->join('patients', 'appointments.patient_id', '=', 'patients.id')
            ->whereDate('shifts.fecha', $fechaActual)
            ->select(
                'shifts.fecha',
                'schedules.horario',  
                'appointments.id',
                'patients.nombres',
                'patients.apellidos',
                'appointments.condicion'
            )
            ->orderBy('schedules.horario')
            ->get();
        
        return view('doctor.doctor', ['doctor' => $doctor, 'citasHoy' => $citasHoy]);
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



        // variables para GREENAPI
        $cita = Appointment::find($appointment_id);

        $patient = Patient::find($cita->patient_id);
        $patient_telefono = $patient->telefono;

        $doctor = Doctor::find($cita->doctor_id);

        $shift = Shift::find($cita->shift_id);


        if($condicion_cita == 'pendiente'){
            $diagnostico = new Diagnosis;
            $diagnostico->alergias = $request->input('alergias');
            $diagnostico->sintomas = $request->input('sintomas');
            $diagnostico->operAnteriores = $request->input('operAnteriores');
            $diagnostico->valoracion = $request->input('valoracion');
            $diagnostico->receta = $request->input('receta');
            $tel = $patient->telefono;
            dd($tel);
            $diagnostico->appointment_id = $appointment_id;
            $diagnostico->save();

            $appointment_update = Appointment::find($appointment_id);
            $appointment_update->condicion = "finalizado";
            $appointment_update->save();

            $url = 'https://api.green-api.com/waInstance7103884220/SendMessage/2d9c7260f7104a38bc298c10a1dd3189d890484d331040e0ba';
            $data = [
                "chatId" => "51".$patient_telefono."@c.us",
                "message" =>  'Hola *'.$patient->nombres.' '.$patient->apellidos.'*,
Tu cita médica con el *Dr. '.$doctor->nombres.' '.$doctor->apellidos.'* en Clinica Tecsana ha finalizado✅.
*Detalles:*
    🗓️ *Fecha:* '.$shift->fecha.'
    👨‍⚕️ *Especializacion:* '.$doctor->Specialty->nombre.'
    📋 *Diagnostico:* '.$diagnostico->valoracion.'
    📝 *Receta Médica:* '.$diagnostico->receta.'
Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos.
¡Gracias!'
            ];
            $options = array(
                'http' => array(
                    'method'  => 'POST',
                    'content' => json_encode($data),
                    'header' =>  "Content-Type: application/json\r\n" .
                        "Accept: application/json\r\n"
                )
            );
        
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $response = json_decode($result);

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

            $url = 'https://api.green-api.com/waInstance7103884220/SendMessage/2d9c7260f7104a38bc298c10a1dd3189d890484d331040e0ba';
            $data = [
                "chatId" => "51".$patient_telefono."@c.us",
                "message" =>  'Hola *'.$patient->nombres.' '.$patient->apellidos.'*,
Tu cita médica con el *Dr. '.$doctor->nombres.' '.$doctor->apellidos.'* en Clinica Tecsana ha sido actualizada✅.
*Nuevos Detalles:*
    🗓️ *Fecha:* '.$shift->fecha.'
    👨‍⚕️ *Especializacion:* '.$doctor->Specialty->nombre.'
    📋 *Diagnostico:* '.$diagnostico_update->valoracion.'
    📝 *Receta Médica:* '.$diagnostico_update->receta.'
Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos.
¡Gracias!'
            ];
            $options = array(
                'http' => array(
                    'method'  => 'POST',
                    'content' => json_encode($data),
                    'header' =>  "Content-Type: application/json\r\n" .
                        "Accept: application/json\r\n"
                )
            );
        
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $response = json_decode($result);
        }



        return redirect()->route('citas');
    }
}
