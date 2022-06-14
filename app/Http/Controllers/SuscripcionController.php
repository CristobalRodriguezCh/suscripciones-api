<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    /**
     * @return Illuminate\Http\Response
     */
    public function index(){
        $suscripciones = Suscripcion::all();
        return response()->json([
            'Suscripciones'=>$suscripciones
        ],200);
    }
}
