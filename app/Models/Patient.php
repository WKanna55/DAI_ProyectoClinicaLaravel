<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

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


    public function Appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
