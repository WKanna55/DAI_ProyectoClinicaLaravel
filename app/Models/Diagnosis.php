<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Diagnosis extends Model
{
    use HasFactory;

    protected $table = 'diagnoses'; // Nombre de tu tabla en la base de datos
    protected $fillable = ['alergias', 'operaciones_anteriores', 'sintomas', 'valoracion', 'receta'];


    public function Appointments()
    {
        //return $this->hasOne(Appointment::class);
        return $this->belongsTo(Appointment::class);
    }
}
