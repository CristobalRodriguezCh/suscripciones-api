<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;
    protected $table = "suscripciones";
    public $timestamps = false;
    protected $fillable = [
        'estado',
        'fecha_ini',
        'fecha_fin',
        'id_persona',
        'id_plan'
    ];
}
