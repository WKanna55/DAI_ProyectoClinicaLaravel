<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Diagnosis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointment1 = new Appointment;
        $appointment1->condicion ="finalizado";
        $appointment1->patient_id =1;
        $appointment1->doctor_id =1;
        $appointment1->shift_id = 1;
        $appointment1->save();

        $diagnoses = new Diagnosis;
        $diagnoses->alergias = "Mani";
        $diagnoses->sintomas = "Fiebre - tos";
        $diagnoses->operAnteriores = "Extirpacion de apendice";
        $diagnoses->valoracion = "Amigdalitis";
        $diagnoses->receta = "sulfacid balsamico cada 12h, apronax cada 12h";
        $diagnoses->appointment_id = 1;
        $diagnoses->save();

        $appointment2 = new Appointment;
        $appointment2->condicion ="pendiente";
        $appointment2->patient_id =1;
        $appointment2->doctor_id =1;
        $appointment2->shift_id = 2;
        $appointment2->save();
    }
}
