<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    public function Appointment()
    {
        //return $this->hasOne(Appointment::class);
        return $this->belongsTo(Appointment::class);
    }
}
