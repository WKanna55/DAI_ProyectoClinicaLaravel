<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

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

        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'dermatologia');
                    })
                    ->get();
        return view('generico.especialidades.dermatologia', compact('doctors'));
    }

    public function gastroenterologia(){
        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'gastroenterologia');
                    })
                    ->get();
        return view('generico.especialidades.gastroenterologia', compact('doctors'));   
    }

    public function ginecologia(){
        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'ginecologia');
                    })
                    ->get();
        return view('generico.especialidades.ginecologia', compact('doctors'));   
    }

    public function medicina_general(){
        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'Medicina general');
                    })
                    ->get();
        return view('generico.especialidades.medicina_general', compact('doctors'));   
    }
    
    public function odontologia(){
        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'odontologia');
                    })
                    ->get();
        return view('generico.especialidades.odontologia', compact('doctors'));    
    }
    
    public function oftalmologia(){
        $doctors = Doctor::with('specialty')
                    ->whereHas('specialty', function ($query) {
                        $query->where('nombre', 'oftalmologia');
                    })
                    ->get();
        return view('generico.especialidades.oftalmologia', compact('doctors'));   
    }
}
