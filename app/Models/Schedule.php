<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function Shift()
    {
        return $this->hasMany(Shift::class);
    }
}
