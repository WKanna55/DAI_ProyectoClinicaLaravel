<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function Diagnosis()
    {
        //return $this->belongsTo(Diagnosis::class);
        return $this->hasOne(Diagnosis::class);
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function Shift()
    {
        return $this->belongsTo(Shift::class);
    }

}
