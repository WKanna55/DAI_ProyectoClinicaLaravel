<?php

namespace Database\Seeders;

use App\Models\Appointment;
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
        $appointment1->horario ="08:00:00";
        $appointment1->fecha ="2023-12-05";
        $appointment1->edad =25;
        $appointment1->condicion ="pendiente";
        $appointment1->paciente_id =1;
        $appointment1->doctor_id =1;
        $appointment1->save();
    }
}
