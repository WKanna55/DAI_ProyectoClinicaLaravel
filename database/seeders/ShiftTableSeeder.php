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
        $shift1->disponible = 0;
        $shift1->doctor_id = 1;
        $shift1->fecha = '2023-12-11';
        $shift1->schedule_id = 1;
        $shift1->save();

        $shift2 = new Shift;
        $shift2->disponible = 0;
        $shift2->doctor_id = 1;
        $shift2->fecha = '2023-12-11';
        $shift2->schedule_id = 2;
        $shift2->save();

        $shift3 = new Shift;
        $shift3->disponible = 1;
        $shift3->doctor_id = 1;
        $shift3->fecha = '2023-12-11';
        $shift3->schedule_id = 3;
        $shift3->save();

        $shift4 = new Shift;
        $shift4->disponible = 1;
        $shift4->doctor_id = 1;
        $shift4->fecha = '2023-12-11';
        $shift4->schedule_id = 4;
        $shift4->save();

        $shift5 = new Shift;
        $shift5->disponible = 1;
        $shift5->doctor_id = 1;
        $shift5->fecha = '2023-12-11';
        $shift5->schedule_id = 5;
        $shift5->save();

        $shift6 = new Shift;
        $shift6->disponible = 1;
        $shift6->doctor_id = 1;
        $shift6->fecha = '2023-12-11';
        $shift6->schedule_id = 6;
        $shift6->save();

        $shift7 = new Shift;
        $shift7->disponible = 1;
        $shift7->doctor_id = 1;
        $shift7->fecha = '2023-12-11';
        $shift7->schedule_id = 7;
        $shift7->save();

        $shift8 = new Shift;
        $shift8->disponible = 1;
        $shift8->doctor_id = 1;
        $shift8->fecha = '2023-12-11';
        $shift8->schedule_id = 8;
        $shift8->save();

        $shift9 = new Shift;
        $shift9->disponible = 1;
        $shift9->doctor_id = 1;
        $shift9->fecha = '2023-12-11';
        $shift9->schedule_id = 9;
        $shift9->save();

        $shift10 = new Shift;
        $shift10->disponible = 1;
        $shift10->doctor_id = 1;
        $shift10->fecha = '2023-12-11';
        $shift10->schedule_id = 10;
        $shift10->save();

        $shift11 = new Shift;
        $shift11->disponible = 1;
        $shift11->doctor_id = 1;
        $shift11->fecha = '2023-12-11';
        $shift11->schedule_id = 11;
        $shift11->save();

        $shift12 = new Shift;
        $shift12->disponible = 1;
        $shift12->doctor_id = 1;
        $shift12->fecha = '2023-12-11';
        $shift12->schedule_id = 12;
        $shift12->save();

        $shift13 = new Shift;
        $shift13->disponible = 1;
        $shift13->doctor_id = 1;
        $shift13->fecha = '2023-12-11';
        $shift13->schedule_id = 13;
        $shift13->save();

        $shift14 = new Shift;
        $shift14->disponible = 1;
        $shift14->doctor_id = 1;
        $shift14->fecha = '2023-12-11';
        $shift14->schedule_id = 14;
        $shift14->save();

        $shift15 = new Shift;
        $shift15->disponible = 1;
        $shift15->doctor_id = 1;
        $shift15->fecha = '2023-12-11';
        $shift15->schedule_id = 15;
        $shift15->save();

        $shift16 = new Shift;
        $shift16->disponible = 1;
        $shift16->doctor_id = 1;
        $shift16->fecha = '2023-12-11';
        $shift16->schedule_id = 16;
        $shift16->save();
    }
}
