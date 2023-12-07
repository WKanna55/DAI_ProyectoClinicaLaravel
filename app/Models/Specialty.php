<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public function Doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
