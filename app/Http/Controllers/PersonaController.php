<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Persona;
use App\Models\Plan;
use App\Models\Suscripcion;
use App\Http\Controller\SuscripcionController;
class PersonaController extends Controller
{
    
    /**
     * @return Illuminate\Http\Response
     */
    public function index(){
        $personas = Persona::all();
        return response()->json([
            'personas'=>$personas
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->save();
        return response()->json([
            'msg'=>'persona agregada correctamente',
            'persona'=>$persona
        ],201);
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
    public function storeWeb(Request $request){
        
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nac = $request->fecha_nac;
        
        if($persona->save()){
            //guardar la suscripcion una vez
            //se guarde la persona
            $plan = json_decode( $request->plan);
            $suscripcion = New Suscripcion();
            $suscripcion->estado=1;
            $suscripcion->fecha_ini=Date('Y-m-d');
            $suscripcion->id_plan=$plan->id;
            $suscripcion->id_persona=$persona->id;
            
            if($suscripcion->save()){
                return redirect()->route('personas.get');
            }
            
        }else{
            return redirect()->route('personas.create');
        }

    }


    /**
     * @return Illuminate\Http\Response
     */
    public function createWeb(){
        $planes = Plan::all();

        return view('personaCreate',['planes' =>$planes])->render();
    }
    
}
