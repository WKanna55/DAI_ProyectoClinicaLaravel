<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function citas() {
        $user = Auth::user();

        $doctor = $user->Doctor;
        return view('doctor.doctor', ['doctor' => $doctor]);

    }

    public function atencion(){
        return view('doctor.atencion');
    }
}
