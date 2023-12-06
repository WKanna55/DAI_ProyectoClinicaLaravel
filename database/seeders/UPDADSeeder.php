<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Diagnosis;
use App\Models\Schedule;
use App\Models\Shift;
use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UPDADSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $speciality1 = new Specialty;
        $speciality1-> nombre = "medicina general";
        $speciality1-> costo = 100;
        $speciality1-> descripcion = "atender cita de medicina general";
        $speciality1-> img_source = "medicinaGenral.jpg";
        $speciality1->save();


        $rol1 = new Role;
        $rol1->nombre = "paciente";
        $rol1->save();

        $rol2 = new Role;
        $rol2->nombre = "doctor";
        $rol2->save();

        $rol3 = new Role;
        $rol3->nombre = "administrador";
        $rol3->save();
        
        $user1 = new User;
        $user1->dni = "54545454";
        $user1->password = "123456789";
        $user1->rol_id = $rol1->id;
        $user1->save();

        $user1ID = $user1->id;

        $paciente = new Patient;
        $paciente->nombres = "Roberto";
        $paciente->apellidos = "Martinez";
        $paciente->telefono = "999888777";
        $paciente->direccion = "Arequipa, JLBR av EEUU N312";
        $paciente->email = "rmartinez12@gmail.com";
        $paciente->fecha_nacimiento = "2000-01-12";
        $paciente->usuario_id = $user1ID;
        $paciente->save();


        $user2 = new User;
        $user2->dni = "12121212";
        $user2->password = "123456789";
        $user2->rol_id = $rol2->id;
        $user2->save();

        $user2ID = $user2->id;

        $doctor = new Doctor;
        $doctor->nombres = "juan";
        $doctor->apellidos = "perez";
        $doctor->CMP = 1234;
        $doctor->consultorio = "consultorio medicina general";
        $doctor->img_source = "jperez.jpg";
        $doctor->usuario_id = $user2ID;
        $doctor->especialidad_id = $speciality1->id;
        $doctor->save();

        $user3 = new User;
        $user3->dni = "89898989";
        $user3->password = "123456789";
        $user3->rol_id = $rol3->id;
        $user3->save();

        $appointment1 = new Appointment;
        $appointment1->horario ="10:00:00";
        $appointment1->fecha ="2023-11-05";
        $appointment1->edad =25;
        $appointment1->condicion ="finalizado";
        $appointment1->paciente_id =$user1ID;
        $appointment1->doctor_id =$user2ID;
        $appointment1->save();

        $appointment1ID = $appointment1->id;

        $diagnoses = new Diagnosis;
        $diagnoses->alergias = "Mani";
        $diagnoses->sintomas = "Fiebre - tos";
        $diagnoses->operAnteriores = "Extirpacion de apendice";
        $diagnoses->valoracion = "Amigdalitis";
        $diagnoses->receta = "sulfacid balsamico cada 12h, apronax cada 12h";
        $diagnoses->cita_id = $appointment1ID;
        $diagnoses->save();

        $appointment2 = new Appointment;
        $appointment2->horario ="08:00:00";
        $appointment2->fecha ="2023-12-05";
        $appointment2->edad =25;
        $appointment2->condicion ="pendiente";
        $appointment2->paciente_id =$user1ID;
        $appointment2->doctor_id =$user2ID;
        $appointment2->save();

        $schedul1 = new Schedule;
        $schedul1->horario = "08:00:00";
        $schedul1->save();

        $schedul2 = new Schedule;
        $schedul2->horario = "08:30:00";
        $schedul2->save();

        $schedul3 = new Schedule;
        $schedul3->horario = "09:00:00";
        $schedul3->save();

        $schedul4 = new Schedule;
        $schedul4->horario = "09:30:00";
        $schedul4->save();

        $schedul5 = new Schedule;
        $schedul5->horario = "10:00:00";
        $schedul5->save();

        $schedul6 = new Schedule;
        $schedul6->horario = "10:30:00";
        $schedul6->save();

        $schedul7 = new Schedule;
        $schedul7->horario = "11:00:00";
        $schedul7->save();

        $schedul8 = new Schedule;
        $schedul8->horario = "11:30:00";
        $schedul8->save();

        $schedul9 = new Schedule;
        $schedul9->horario = "12:00:00";
        $schedul9->save();

        $schedul10 = new Schedule;
        $schedul10->horario = "12:30:00";
        $schedul10->save();

        $schedul11 = new Schedule;
        $schedul11->horario = "14:00:00";
        $schedul11->save();

        $schedul12 = new Schedule;
        $schedul12->horario = "14:30:00";
        $schedul12->save();

        $schedul13 = new Schedule;
        $schedul13->horario = "15:00:00";
        $schedul13->save();

        $schedul14 = new Schedule;
        $schedul14->horario = "15:30:00";
        $schedul14->save();

        $schedul15 = new Schedule;
        $schedul15->horario = "16:00:00";
        $schedul15->save();

        $schedul16 = new Schedule;
        $schedul16->horario = "16:30:00";
        $schedul16->save();



        $shift1 = new Shift;
        $shift1->disponible = 1;
        $shift1->doctor_id = $user2ID;
        $shift1->horario_id = $schedul1->id;
        $shift1->save();

        $shift2 = new Shift;
        $shift2->disponible = 1;
        $shift2->doctor_id = $user2ID;
        $shift2->horario_id = $schedul2->id;
        $shift2->save();

        $shift3 = new Shift;
        $shift3->disponible = 1;
        $shift3->doctor_id = $user2ID;
        $shift3->horario_id = $schedul3->id;
        $shift3->save();

        $shift4 = new Shift;
        $shift4->disponible = 1;
        $shift4->doctor_id = $user2ID;
        $shift4->horario_id = $schedul4->id;
        $shift4->save();

        $shift5 = new Shift;
        $shift5->disponible = 1;
        $shift5->doctor_id = $user2ID;
        $shift5->horario_id = $schedul5->id;
        $shift5->save();

        $shift6 = new Shift;
        $shift6->disponible = 1;
        $shift6->doctor_id = $user2ID;
        $shift6->horario_id = $schedul6->id;
        $shift6->save();

        $shift7 = new Shift;
        $shift7->disponible = 1;
        $shift7->doctor_id = $user2ID;
        $shift7->horario_id = $schedul7->id;
        $shift7->save();

        $shift8 = new Shift;
        $shift8->disponible = 1;
        $shift8->doctor_id = $user2ID;
        $shift8->horario_id = $schedul8->id;
        $shift8->save();

        $shift9 = new Shift;
        $shift9->disponible = 1;
        $shift9->doctor_id = $user2ID;
        $shift9->horario_id = $schedul9->id;
        $shift9->save();

        $shift10 = new Shift;
        $shift10->disponible = 1;
        $shift10->doctor_id = $user2ID;
        $shift10->horario_id = $schedul10->id;
        $shift10->save();

        $shift11 = new Shift;
        $shift11->disponible = 1;
        $shift11->doctor_id = $user2ID;
        $shift11->horario_id = $schedul11->id;
        $shift11->save();

        $shift12 = new Shift;
        $shift12->disponible = 1;
        $shift12->doctor_id = $user2ID;
        $shift12->horario_id = $schedul12->id;
        $shift12->save();

        $shift13 = new Shift;
        $shift13->disponible = 1;
        $shift13->doctor_id = $user2ID;
        $shift13->horario_id = $schedul13->id;
        $shift13->save();

        $shift14 = new Shift;
        $shift14->disponible = 1;
        $shift14->doctor_id = $user2ID;
        $shift14->horario_id = $schedul14->id;
        $shift14->save();

        $shift15 = new Shift;
        $shift15->disponible = 1;
        $shift15->doctor_id = $user2ID;
        $shift15->horario_id = $schedul15->id;
        $shift15->save();

        $shift16 = new Shift;
        $shift16->disponible = 1;
        $shift16->doctor_id = $user2ID;
        $shift16->horario_id = $schedul16->id;
        $shift16->save();

    }
}
