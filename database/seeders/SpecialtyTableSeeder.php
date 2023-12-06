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
        

        $speciality2 = new Specialty;
        $speciality2-> nombre = "ginecologia";
        $speciality2-> costo = 150;
        $speciality2-> descripcion = "atender cita de ginecologia";
        $speciality2-> img_source = "ginecologia.jpg";
        $speciality2->save();

        $speciality3 = new Specialty;
        $speciality3-> nombre = "dermatologia";
        $speciality3-> costo = 200;
        $speciality3-> descripcion = "atender cita de dermatologia";
        $speciality3-> img_source = "dermatologia.jpg";
        $speciality3->save();

        $speciality4 = new Specialty;
        $speciality4-> nombre = "odontologia";
        $speciality4-> costo = 250;
        $speciality4-> descripcion = "atender cita odontologia";
        $speciality4-> img_source = "odontologia.jpg";
        $speciality4->save();

        $speciality5 = new Specialty;
        $speciality5-> nombre = "gastroenterologia";
        $speciality5-> costo = 300;
        $speciality5-> descripcion = "atender cita gastroenterologia";
        $speciality5-> img_source = "gastroenterologia.jpg";
        $speciality5->save();

        $speciality6 = new Specialty;
        $speciality6-> nombre = "oftalmologia";
        $speciality6-> costo = 350;
        $speciality6-> descripcion = "atender cita oftalmolofia";
        $speciality6-> img_source = "oftalmologia.jpg";
        $speciality6->save();
    }
}
