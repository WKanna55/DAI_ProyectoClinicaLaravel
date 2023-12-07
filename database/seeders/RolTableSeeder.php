<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = new Role;
        $rol1->nombre = "paciente";
        $rol1->save();

        $rol2 = new Role;
        $rol2->nombre = "doctor";
        $rol2->save();

        $rol3 = new Role;
        $rol3->nombre = "administrador";
        $rol3->save();

    }
}
