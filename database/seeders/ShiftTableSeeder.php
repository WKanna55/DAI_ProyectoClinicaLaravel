<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shift1 = new Shift;
        $shift1->disponible = 1;
        $shift1->doctor_id = 1;
        $shift1->horario_id = 1;
        $shift1->save();

        $shift2 = new Shift;
        $shift2->disponible = 1;
        $shift2->doctor_id = 1;
        $shift2->horario_id = 2;
        $shift2->save();

        $shift3 = new Shift;
        $shift3->disponible = 1;
        $shift3->doctor_id = 1;
        $shift3->horario_id = 3;
        $shift3->save();

        $shift4 = new Shift;
        $shift4->disponible = 1;
        $shift4->doctor_id = 1;
        $shift4->horario_id = 4;
        $shift4->save();

        $shift5 = new Shift;
        $shift5->disponible = 1;
        $shift5->doctor_id = 1;
        $shift5->horario_id = 5;
        $shift5->save();

        $shift6 = new Shift;
        $shift6->disponible = 1;
        $shift6->doctor_id = 1;
        $shift6->horario_id = 6;
        $shift6->save();

        $shift7 = new Shift;
        $shift7->disponible = 1;
        $shift7->doctor_id = 1;
        $shift7->horario_id = 7;
        $shift7->save();

        $shift8 = new Shift;
        $shift8->disponible = 1;
        $shift8->doctor_id = 1;
        $shift8->horario_id = 8;
        $shift8->save();

        $shift9 = new Shift;
        $shift9->disponible = 1;
        $shift9->doctor_id = 1;
        $shift9->horario_id = 9;
        $shift9->save();

        $shift10 = new Shift;
        $shift10->disponible = 1;
        $shift10->doctor_id = 1;
        $shift10->horario_id = 10;
        $shift10->save();

        $shift11 = new Shift;
        $shift11->disponible = 1;
        $shift11->doctor_id = 1;
        $shift11->horario_id = 11;
        $shift11->save();

        $shift12 = new Shift;
        $shift12->disponible = 1;
        $shift12->doctor_id = 1;
        $shift12->horario_id = 12;
        $shift12->save();

        $shift13 = new Shift;
        $shift13->disponible = 1;
        $shift13->doctor_id = 1;
        $shift13->horario_id = 13;
        $shift13->save();

        $shift14 = new Shift;
        $shift14->disponible = 1;
        $shift14->doctor_id = 1;
        $shift14->horario_id = 14;
        $shift14->save();

        $shift15 = new Shift;
        $shift15->disponible = 1;
        $shift15->doctor_id = 1;
        $shift15->horario_id = 15;
        $shift15->save();

        $shift16 = new Shift;
        $shift16->disponible = 1;
        $shift16->doctor_id = 1;
        $shift16->horario_id = 16;
        $shift16->save();
    }
}
