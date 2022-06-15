<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use App\Models\Suscripcion;

class PagosController extends Controller
{
    /**
     * @return Illuminate\Http\Response
     */
    public function index(){
        $pagos = Pagos::all();
        return response()->json([
            'pagos'=>$pagos,
        ],200);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        $pago = new Pagos();

        $pago->valor = $request->valor;
        $pago->fecha = Date('Y-m-d');
        $pago->id_suscripcion = $request->id_suscripcion;
        $pago->adjunto= $request->adjunto;

        //$plan = Suscripcion::find($pago->id_suscripcion)->id_plan;}

        //$plan = 

        //dd($plan);
        $pago->save();

        return response()->json([
            'msg'=>'pago agregado correctamente',
            'pago'=>$pago
        ],201);
    }

    public function ComprobarMonto(){

    }


}
