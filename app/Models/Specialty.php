<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public function Doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
