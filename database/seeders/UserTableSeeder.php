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

        //Pacientes
        $user1 = new User;
        $user1->dni = "54545454";
        $user1->password = "123456789";
        $user1->role_id = 1;
        $user1->save();

        $paciente = new Patient;
        $paciente->nombres = "Roberto";
        $paciente->apellidos = "Martinez";
        $paciente->telefono = "999888777";
        $paciente->direccion = "Arequipa, JLBR av EEUU N312";
        $paciente->email = "rmartinez12@gmail.com";
        $paciente->fecha_nacimiento = "2000-01-12";
        $paciente->user_id = 1;
        $paciente->save();


        

        //Administrador
        $user3 = new User;
        $user3->dni = "89898989";
        $user3->password = "123456789";
        $user3->role_id = 3;
        $user3->save();
        
        



        // Doctores-Medicina_general ------------------------------

        // Doctor 01 --------------------
        $user3 = new User;
        $user3->dni = "23232323";
        $user3->password = "123456789";
        $user3->role_id = 2;
        $user3->save();

        $doctor = new Doctor;
        $doctor->nombres = "Pedro";
        $doctor->apellidos = "Lopez";
        $doctor->CMP = 4321;
        $doctor->consultorio = "MG01";
        $doctor->img_source = "doctor1.webp";
        $doctor->user_id = 3;
        $doctor->specialty_id = 1;
        $doctor->save();

        // Doctor 02 --------------------
        $user2 = new User;
        $user2->dni = "12121212";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Juan";
        $doctor->apellidos = "Pérez";
        $doctor->CMP = 1234;
        $doctor->consultorio = "MG02";
        $doctor->img_source = "doctor2.webp";
        $doctor->user_id = 4;
        $doctor->specialty_id = 1;
        $doctor->save();

        // Doctor 03 --------------------
        $user2 = new User;
        $user2->dni = "20202020";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Sofia";
        $doctor->apellidos = "Montes";
        $doctor->CMP = 7645;
        $doctor->consultorio = "MG03";
        $doctor->img_source = "doctor3.webp";
        $doctor->user_id = 5;
        $doctor->specialty_id = 1;
        $doctor->save();


        // Doctores-Ginecologia -------------------------------------------

        // Doctor 04 --------------------
        $user2 = new User;
        $user2->dni = "21212121";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Carlos";
        $doctor->apellidos = "Ticona";
        $doctor->CMP = 8180;
        $doctor->consultorio = "G01";
        $doctor->img_source = "doctor4.webp";
        $doctor->user_id = 6;
        $doctor->specialty_id = 2;
        $doctor->save();

        // Doctor 05 --------------------
        $user2 = new User;
        $user2->dni = "22222222";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Mari";
        $doctor->apellidos = "Arapa";
        $doctor->CMP = 8181;
        $doctor->consultorio = "G02";
        $doctor->img_source = "doctor5.webp";
        $doctor->user_id = 7;
        $doctor->specialty_id = 2;
        $doctor->save();

        // Doctor 06 --------------------
        $user2 = new User;
        $user2->dni = "23232323";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Geraldine";
        $doctor->apellidos = "Berrocal";
        $doctor->CMP = 8182;
        $doctor->consultorio = "G03";
        $doctor->img_source = "doctor6.webp";
        $doctor->user_id = 8;
        $doctor->specialty_id = 2;
        $doctor->save();

        // Doctores-Dermatologia -----------------------------------------

        // Doctor 07 --------------------
        $user2 = new User;
        $user2->dni = "24242424";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Jose";
        $doctor->apellidos = "Manrrique";
        $doctor->CMP = 8183;
        $doctor->consultorio = "D01";
        $doctor->img_source = "doctor7.webp";
        $doctor->user_id = 9;
        $doctor->specialty_id = 3;
        $doctor->save();

        // Doctor 08 --------------------
        $user2 = new User;
        $user2->dni = "25252525";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Karina";
        $doctor->apellidos = "LLanos";
        $doctor->CMP = 8184;
        $doctor->consultorio = "D02";
        $doctor->img_source = "doctor8.webp";
        $doctor->user_id = 10;
        $doctor->specialty_id = 3;
        $doctor->save();

        // Doctor 09 --------------------
        $user2 = new User;
        $user2->dni = "26262626";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Edwin";
        $doctor->apellidos = "Zapata";
        $doctor->CMP = 8185;
        $doctor->consultorio = "D03";
        $doctor->img_source = "doctor9.webp";
        $doctor->user_id = 11;
        $doctor->specialty_id = 3;
        $doctor->save();

        // Doctores-Odontologia --------------------------------------------

        // Doctor 10 --------------------
        $user2 = new User;
        $user2->dni = "27272727";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Elizabeth";
        $doctor->apellidos = "Ponce";
        $doctor->CMP = 8186;
        $doctor->consultorio = "OD01";
        $doctor->img_source = "doctor10.webp";
        $doctor->user_id = 12;
        $doctor->specialty_id = 4;
        $doctor->save();

        // Doctor 11 --------------------
        $user2 = new User;
        $user2->dni = "28282828";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Mauricio";
        $doctor->apellidos = "Torres";
        $doctor->CMP = 8187;
        $doctor->consultorio = "OD02";
        $doctor->img_source = "doctor11.webp";
        $doctor->user_id = 13;
        $doctor->specialty_id = 4;
        $doctor->save();

        // Doctor 12 --------------------
        $user2 = new User;
        $user2->dni = "29292929";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Dina";
        $doctor->apellidos = "Solar";
        $doctor->CMP = 8188;
        $doctor->consultorio = "OD03";
        $doctor->img_source = "doctor12.webp";
        $doctor->user_id = 14;
        $doctor->specialty_id = 4;
        $doctor->save();

        // Doctores-Gastroenterologia -------------------------------------

        // Doctor 13 --------------------
        $user2 = new User;
        $user2->dni = "30303030";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Diego";
        $doctor->apellidos = "Aquino";
        $doctor->CMP = 8189;
        $doctor->consultorio = "G01";
        $doctor->img_source = "doctor13.webp";
        $doctor->user_id = 15;
        $doctor->specialty_id = 5;
        $doctor->save();

        // Doctor 14 --------------------
        $user2 = new User;
        $user2->dni = "31313131";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Alejandro";
        $doctor->apellidos = "Momtier";
        $doctor->CMP = 8190;
        $doctor->consultorio = "G02";
        $doctor->img_source = "doctor14.webp";
        $doctor->user_id = 16;
        $doctor->specialty_id = 5;
        $doctor->save();

        // Doctor 15 --------------------
        $user2 = new User;
        $user2->dni = "32323232";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Victor";
        $doctor->apellidos = "Solis";
        $doctor->CMP = 8191;
        $doctor->consultorio = "G03";
        $doctor->img_source = "doctor15.webp";
        $doctor->user_id = 17;
        $doctor->specialty_id = 5;
        $doctor->save();

        // Doctores-Oftalmologia --------------------------------------------

        // Doctor 16 --------------------
        $user2 = new User;
        $user2->dni = "33333333";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Manuela";
        $doctor->apellidos = "Monte";
        $doctor->CMP = 8192;
        $doctor->consultorio = "OF01";
        $doctor->img_source = "doctor16.webp";
        $doctor->user_id = 18;
        $doctor->specialty_id = 6;
        $doctor->save();

        // Doctor 17 --------------------
        $user2 = new User;
        $user2->dni = "34343434";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Claudia";
        $doctor->apellidos = "Benites";
        $doctor->CMP = 8193;
        $doctor->consultorio = "OF02";
        $doctor->img_source = "doctor17.webp";
        $doctor->user_id = 19;
        $doctor->specialty_id = 6;
        $doctor->save();

        // Doctor 18 --------------------
        $user2 = new User;
        $user2->dni = "35353535";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Alicia";
        $doctor->apellidos = "Bernal";
        $doctor->CMP = 8194;
        $doctor->consultorio = "OF03";
        $doctor->img_source = "doctor18.webp";
        $doctor->user_id = 20;
        $doctor->specialty_id = 6;
        $doctor->save();


    }
}
