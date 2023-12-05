<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->hasOne(User::class);
    }
}
