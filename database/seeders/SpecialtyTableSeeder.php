<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialty1 = new Specialty;
        $specialty1-> nombre = "Medicina General";
        $specialty1-> costo = 40;
        $specialty1-> descripcion = "atender cita de medicina general";
        $specialty1-> img_source = "medicinaGenral.jpg";
        $specialty1->save();

        $specialty2 = new Specialty;
        $specialty2-> nombre = "Ginecología";
        $specialty2-> costo = 100;
        $specialty2-> descripcion = "atender cita de ginecologia";
        $specialty2-> img_source = "ginecologia.jpg";
        $specialty2->save();

        $specialty3 = new Specialty;
        $specialty3-> nombre = "Dermatología";
        $specialty3-> costo = 90;
        $specialty3-> descripcion = "atender cita de dermatologia";
        $specialty3-> img_source = "dermatologia.jpg";
        $specialty3->save();

        $specialty4 = new Specialty;
        $specialty4-> nombre = "Odontología";
        $specialty4-> costo = 60;
        $specialty4-> descripcion = "atender cita odontologia";
        $specialty4-> img_source = "odontologia.jpg";
        $specialty4->save();

        $specialty5 = new Specialty;
        $specialty5-> nombre = "Gastroenterología";
        $specialty5-> costo = 90;
        $specialty5-> descripcion = "atender cita gastroenterologia";
        $specialty5-> img_source = "gastroenterologia.jpg";
        $specialty5->save();

        $specialty6 = new Specialty;
        $specialty6-> nombre = "Oftalmología";
        $specialty6-> costo = 80;
        $specialty6-> descripcion = "atender cita oftalmolofia";
        $specialty6-> img_source = "oftalmologia.jpg";
        $specialty6->save();
    }
}
