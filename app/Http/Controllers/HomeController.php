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

}
