<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = "planes";
    protected $fillable = [
        'nombre',
        'precio',
        'descuento',
        'descripcion',
        'cantidad_personas',
        'duracion'
    ];

    public function suscripcion(){
        return $this->hasMany('App\Suscripcion');
    }
}
