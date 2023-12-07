<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function Appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
