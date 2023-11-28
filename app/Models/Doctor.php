<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Specialties()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function Appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function Shifts()
    {
        return $this->hasMany(Shift::class);
    }
}
