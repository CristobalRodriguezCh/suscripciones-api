<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Suscripcion;
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


    //se puede realizar varios pagos a una suscripcion
    public function suscripcion(){
        return $this->belongsTo(Suscripcion::class,'id_suscripcion');
    }
}
