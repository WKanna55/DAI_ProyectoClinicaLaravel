<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->dni = "54545454";
        $user1->password = "123456789";
        $user1->rol_id = 1;
        $user1->save();

        $paciente = new Patient;
        $paciente->nombres = "Roberto";
        $paciente->apellidos = "Martinez";
        $paciente->telefono = "999888777";
        $paciente->direccion = "Arequipa, JLBR av EEUU N312";
        $paciente->email = "rmartinez12@gmail.com";
        $paciente->fecha_nacimiento = "2000-01-12";
        $paciente->usuario_id = 1;
        $paciente->save();


        $user2 = new User;
        $user2->dni = "12121212";
        $user2->password = "123456789";
        $user2->rol_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "juan";
        $doctor->apellidos = "perez";
        $doctor->CMP = 1234;
        $doctor->consultorio = "consultorio medicina general";
        $doctor->img_source = "jperez.jpg";
        $doctor->usuario_id = 2;
        $doctor->especialidad_id = 1;
        $doctor->save();

        $user3 = new User;
        $user3->dni = "89898989";
        $user3->password = "123456789";
        $user3->rol_id = 3;
        $user3->save();
        
    }
}
