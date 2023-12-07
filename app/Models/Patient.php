<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 
        'nombres', 
        'apellidos', 
        'telefono', 
        'email', 
        'direccion',
        'fecha_nacimiento'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public function Appoitnment()
    {
        return $this->hasMany(Appointment::class);
    }
}
