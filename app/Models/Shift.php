<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    public function Doctors()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Schedules()
    {
        return $this->belongsTo(Schedule::class);
    }
}
