<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
use App\Models\Plan;
use App\Models\Pagos;
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

    public function persona(){//relacion de 1 a 1
        return $this->belongsTo(Persona::class,'id_persona','id');
    }

    // un plan puede estar en muchas suscripciones
    public function plan(){
        return $this->belongsTo(Plan::class,'id_plan');
    }

    //una suscripcion puede tener muchos pagos
    public function pagos(){
        return $this->hasMany(Pagos::class,'id_suscripcion');
    }
}
