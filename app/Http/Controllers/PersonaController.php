<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Models
use App\Models\Persona;
use App\Models\Plan;
use App\Models\Suscripcion;
//Controllers
use App\Http\Controller\SuscripcionController;
//Requets
use App\Http\Requests\StorePersonaRequest;
//Traits
use App\Traits\CalcuFechaFin;

class PersonaController extends Controller
{
    use CalcuFechaFin;
    /**
     * @return Illuminate\Http\Response
     */
    public function index(){
        $personas = Persona::all();
        return response()->json([
            'personas'=>$personas
        ],200);
    }

    public function showWeb(int $id){


        $persona = Persona::findorfail($id);
        
        if(!$persona){
            return response()->json([
                'success'=>'true',
                'msg'=>'no existe un reguistro asociado a es id'
            ],404);
        }

        return response()->json([
            'persona'=>$persona
        ],200);
    }


    public function store(StorePersonaRequest $request){

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nac = $request->fecha_nac;
        
        if($persona->save()){
            return response()->json([
                'success'=>'true',
                'persona'=>$persona
            ],201);
        }
            
        return response()->json([
            'success'=>'false',
        ],200);
    }

    

    //** funciones para las peticiones via web */

    public function indexWeb(){
        $personas = Persona::all();
        return view('personas',['personas' =>$personas])->render(); 
    }


    /**
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function storeWeb(StorePersonaRequest $request){
        
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nac = $request->fecha_nac;
        $plan = json_decode( $request->plan);
        if($persona->save()){
            //guardar la suscripcion una vez
            //se guarde la persona
            $plan = json_decode( $request->plan);//esto por quee sta en formato json
            $suscripcion = New Suscripcion();
            $suscripcion->estado=1;
            $suscripcion->fecha_ini=Date('Y-m-d');
            $suscripcion->id_plan=$plan->id;
            $suscripcion->id_persona=$persona->id;
            $suscripcion->fecha_fin = $this->CfechaFin($plan);
            if($suscripcion->save()){
                return redirect()->route('personas.get');
            }
        }
        
        return redirect()->route('personas.create');
        
    }


    /**
     * @return Illuminate\Http\Response
     */
    public function createWeb(){
        $planes = Plan::all();

        return view('personaCreate',['planes' =>$planes])->render();
    }
    
}
