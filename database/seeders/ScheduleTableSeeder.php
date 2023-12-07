<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
/*use Illuminate\Support\Facades\DB;*/

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

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


        /*
        DB::table('schedules')->insert([
            ['horario' => '08:00:00'],
            ['horario' => '08:30:00'],
            ['horario' => '09:00:00'],
            ['horario' => '09:30:00'],
            ['horario' => '10:00:00'],
            ['horario' => '10:30:00'],
            ['horario' => '11:00:00'],
            ['horario' => '11:30:00'],
            ['horario' => '12:00:00'],
            ['horario' => '12:30:00'],
            ['horario' => '14:00:00'],
            ['horario' => '14:30:00'],
            ['horario' => '15:00:00'],
            ['horario' => '15:30:00'],
            ['horario' => '16:00:00'],
            ['horario' => '16:30:00']
        ]);
        */
    }
}
