<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\CalcuFechaFin;
use App\Models\Suscripcion;
use App\Models\Plan;

class SuscripcionController extends Controller{
    use CalcuFechaFin;
    /**
     * @return Illuminate\Http\Response
     */
    public function index(){
        $suscripciones = Suscripcion::with('plan','persona')->get();
        return response()->json([
            'Suscripciones'=>$suscripciones
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request){
        
        $suscripcion = new Suscripcion();
        $suscripcion->estado = 1;
        $suscripcion->fecha_ini = Date('Y-m-d');// Y-- 4 digitos del año m --mes --dia en numeros
        $suscripcion->id_persona = $request->id_persona;
        $suscripcion->id_plan = $request->id_plan;
        
        $plan=Plan::find($request->id_plan);//traer todo los datos del plan
        
        $suscripcion->fecha_fin = $this->CfechaFin($plan);

        //dd($suscripcion->fecha_fin);
        $suscripcion->save();
        
        return response()->json([
            'msg'=>'suscripcion creada exitosamente',
            'suscripcion'=>$suscripcion,
            'plan'=>$plan
        ],200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id){
        //$suscripcion = Suscripcion::find($id);
        // $suscripcion = DB::table('suscripciones')
        // ->join('planes','suscripciones.id_plan','=','planes.id')
        // ->select('suscripciones.*','planes.*')
        // ->where('suscripciones.id','=',$id)
        // ->get();

        $sql = "select s.*,p.*  from suscripciones as s, planes as p where s.id_plan = p.id and s.id ={$id}";
        $suscripcion = DB::select($sql);
        //dd($suscripcion);
        
        return response()->json([
            'suscripcion'=>$suscripcion
        ]);
    }


    public function indexWeb(){
        $suscripciones = Suscripcion::all();
        return view('suscripciones', ['suscripciones'=>$suscripciones])->render();
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWeb(Request  $request){
        
        $suscripcion = new Suscripcion();
        $suscripcion->estado = 1;
        $suscripcion->fecha_ini = Date('Y-m-d');// Y-- 4 digitos del año m --mes --dia en numeros
        $suscripcion->id_persona = $request->id_persona;
        $suscripcion->id_plan = $request->id_plan;
        $plan=Plan::find($request->id_plan);//traer todo los datos del plan
    
        $suscripcion->fecha_fin = $this->CfechaFin($plan);

        if($suscripcion->save()){
            return redirect()->Route('suscripciones.get');
        }

    }
}
