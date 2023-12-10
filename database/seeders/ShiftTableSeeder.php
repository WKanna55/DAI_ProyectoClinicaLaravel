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
        $fecha = now();
        for ($i = 1; $i <= 30; $i++){ // se itera las fechas
            for($j = 1; $j <= 18; $j++){ // se itera los doctores
                for($k = 1; $k <= 16;$k++){ // se itera los turnos
                    $shift = new Shift;
                    $shift->disponible =  1; // Primeros dos no disponibles, los demás disponibles
                    $shift->doctor_id = $j;
                    $shift->fecha = $fecha;
                    $shift->schedule_id = $k;
                    $shift->save();
                }
            }
            $fecha = $fecha->addDay();
        }
    }
}
