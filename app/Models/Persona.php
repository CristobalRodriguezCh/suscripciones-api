<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suscripcion;

class Persona extends Model
{
    use HasFactory;
    protected $table="personas";
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nac'
    ];

    public function suscripcion(){// una persona puede tener una suscripcion
        return $this->hasOne(Suscripcion::class,'id_persona','id');
    }
    
    
}
