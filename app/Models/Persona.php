<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table="personas";
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nac'
    ];

    public function suscripcion(){
        return $this->hasOne('App\Suscripcion','id_persona','local_key');
    }
    
    
}
