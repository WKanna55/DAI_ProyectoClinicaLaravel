<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->hasOne(User::class);
    }
}
