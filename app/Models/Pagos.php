<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pagos';
    protected $fillable = [
        'valor',
        'fecha',
        'id_suscripcion',
        'adjunto'
    ];
}
