<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index() {
    //     return view('home.index');
    // }
    public function nosotros() { 
        return view('generico.nosotros');
    }

    public function especialidades() { 
        return view('generico.especialidades');
    }
    
    public function dermatologia() {
        return view('generico.especialidades.dermatologia');
    }

    public function gastroenterologia(){
        return view('generico.especialidades.gastroenterologia');    
    }

    public function ginecologia(){
        return view('generico.especialidades.ginecologia');
    }

    public function medicina_general(){
        return view('generico.especialidades.medicina_general');
    }
    
    public function odontologia(){
        return view('generico.especialidades.odontologia');  
    }
    
    public function oftalmologia(){
        return view('generico.especialidades.oftalmologia');
    }
}
