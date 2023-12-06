<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    public function Appointments()
    {
        //return $this->hasOne(Appointment::class);
        return $this->belongsTo(Appointment::class);
    }
}
