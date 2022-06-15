<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
class PlanController extends Controller
{
    /**
     * 
     * @return Illuminate\Http\Response
     */
    public function index(){
        $planes = Plan::all();
        return response()->json([
            'planes'=>$planes
        ],200);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        $plan = new Plan();
        $plan->nombre =  $request->nombre;
        $plan->precio = $request->precio;
        $plan->descuento = $request->descuento;
        $plan->descripcion = $request->descripcion;
        $plan->cantidad_personas = $request->cantidad_personas;
        $plan->duracion = $request->duracion;

        $plan->save();

        return response()->json([
            'msg'=>'plan creado exitosamente',
            'plan'=>$plan
        ],201);
    }

    
}
