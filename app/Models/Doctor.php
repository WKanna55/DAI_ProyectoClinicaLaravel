<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function Appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function Shift()
    {
        return $this->hasMany(Shift::class);
    }
    
}
