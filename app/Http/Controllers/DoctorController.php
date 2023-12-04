<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function citas() {
        return view('doctor.doctor');
    }

    public function atencion(){
        return view('doctor.atencion');
    }
}
