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
        
        



        //Doctores-Medicina_general
        $user3 = new User;
        $user3->dni = "23232323";
        $user3->password = "123456789";
        $user3->role_id = 2;
        $user3->save();

        $doctor = new Doctor;
        $doctor->nombres = "pedro";
        $doctor->apellidos = "lopez";
        $doctor->CMP = 4321;
        $doctor->consultorio = "consultorio medicina general";
        $doctor->img_source = "plopez.jpg";
        $doctor->user_id = 3;
        $doctor->specialty_id = 1;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "12121212";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "juan";
        $doctor->apellidos = "perez";
        $doctor->CMP = 1234;
        $doctor->consultorio = "consultorio medicina general";
        $doctor->img_source = "jperez.jpg";
        $doctor->user_id = 4;
        $doctor->specialty_id = 1;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "20202020";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Sofia";
        $doctor->apellidos = "Montes";
        $doctor->CMP = 7645;
        $doctor->consultorio = "consultorio medicina general";
        $doctor->img_source = "smontes.jpg";
        $doctor->user_id = 5;
        $doctor->specialty_id = 1;
        $doctor->save();

        //Doctores-Ginecologia
        $user2 = new User;
        $user2->dni = "21212121";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Carlos";
        $doctor->apellidos = "Ticona";
        $doctor->CMP = 8180;
        $doctor->consultorio = "consultorio ginecología";
        $doctor->img_source = "cticona.jpg";
        $doctor->user_id = 6;
        $doctor->specialty_id = 2;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "22222222";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Mari";
        $doctor->apellidos = "Arapa";
        $doctor->CMP = 8181;
        $doctor->consultorio = "consultorio ginecología";
        $doctor->img_source = "marapa.jpg";
        $doctor->user_id = 7;
        $doctor->specialty_id = 2;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "23232323";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Geraldine";
        $doctor->apellidos = "Berrocal";
        $doctor->CMP = 8182;
        $doctor->consultorio = "consultorio ginecología";
        $doctor->img_source = "gberrocal.jpg";
        $doctor->user_id = 8;
        $doctor->specialty_id = 2;
        $doctor->save();

        //doctores-Dermtologia
        $user2 = new User;
        $user2->dni = "24242424";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Jose";
        $doctor->apellidos = "Manrrique";
        $doctor->CMP = 8183;
        $doctor->consultorio = "consultorio dermatología";
        $doctor->img_source = "jmanrrique.jpg";
        $doctor->user_id = 9;
        $doctor->specialty_id = 3;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "25252525";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Edwin";
        $doctor->apellidos = "LLanos";
        $doctor->CMP = 8184;
        $doctor->consultorio = "consultorio dermatología";
        $doctor->img_source = "ellanos.jpg";
        $doctor->user_id = 10;
        $doctor->specialty_id = 3;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "26262626";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Karina";
        $doctor->apellidos = "Zapata";
        $doctor->CMP = 8185;
        $doctor->consultorio = "consultorio dermatología";
        $doctor->img_source = "kzapata.jpg";
        $doctor->user_id = 11;
        $doctor->specialty_id = 3;
        $doctor->save();

        //doctores-Odontologia
        $user2 = new User;
        $user2->dni = "27272727";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Mauricio";
        $doctor->apellidos = "Ponce";
        $doctor->CMP = 8186;
        $doctor->consultorio = "consultorio odontología";
        $doctor->img_source = "mponce.jpg";
        $doctor->user_id = 12;
        $doctor->specialty_id = 4;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "28282828";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Elizabeth";
        $doctor->apellidos = "Torres";
        $doctor->CMP = 8187;
        $doctor->consultorio = "consultorio odontología";
        $doctor->img_source = "etorres.jpg";
        $doctor->user_id = 13;
        $doctor->specialty_id = 4;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "29292929";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Diego";
        $doctor->apellidos = "Solar";
        $doctor->CMP = 8188;
        $doctor->consultorio = "consultorio odontología";
        $doctor->img_source = "dsolar.jpg";
        $doctor->user_id = 14;
        $doctor->specialty_id = 4;
        $doctor->save();

        //doctores-Gastroenterologia

        $user2 = new User;
        $user2->dni = "30303030";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Dina";
        $doctor->apellidos = "Aquino";
        $doctor->CMP = 8189;
        $doctor->consultorio = "consultorio gastroenterología";
        $doctor->img_source = "daquino.jpg";
        $doctor->user_id = 15;
        $doctor->specialty_id = 5;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "31313131";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Alejandor";
        $doctor->apellidos = "Momtier";
        $doctor->CMP = 8190;
        $doctor->consultorio = "consultorio gastroenterología";
        $doctor->img_source = "amontier.jpg";
        $doctor->user_id = 16;
        $doctor->specialty_id = 5;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "32323232";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Victor";
        $doctor->apellidos = "Solis";
        $doctor->CMP = 8191;
        $doctor->consultorio = "consultorio gastroenterología";
        $doctor->img_source = "vsolis.jpg";
        $doctor->user_id = 17;
        $doctor->specialty_id = 5;
        $doctor->save();

        //doctores-Oftalmologia

        $user2 = new User;
        $user2->dni = "33333333";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Manuel";
        $doctor->apellidos = "Monte";
        $doctor->CMP = 8192;
        $doctor->consultorio = "consultorio oftalmología";
        $doctor->img_source = "mmonte.jpg";
        $doctor->user_id = 18;
        $doctor->specialty_id = 6;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "34343434";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Claudio";
        $doctor->apellidos = "Olanda";
        $doctor->CMP = 8193;
        $doctor->consultorio = "consultorio oftalmología";
        $doctor->img_source = "colanda.jpg";
        $doctor->user_id = 19;
        $doctor->specialty_id = 6;
        $doctor->save();

        $user2 = new User;
        $user2->dni = "35353535";
        $user2->password = "123456789";
        $user2->role_id = 2;
        $user2->save();

        $doctor = new Doctor;
        $doctor->nombres = "Gonzalo";
        $doctor->apellidos = "Gonzales";
        $doctor->CMP = 8194;
        $doctor->consultorio = "consultorio oftalmología";
        $doctor->img_source = "ggonzales.jpg";
        $doctor->user_id = 20;
        $doctor->specialty_id = 6;
        $doctor->save();


    }
}
