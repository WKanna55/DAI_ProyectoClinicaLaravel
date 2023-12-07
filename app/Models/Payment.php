<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function Appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
