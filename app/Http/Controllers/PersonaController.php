<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
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
            return redirect()->route('personas.get');
        }else{
            return redirect()->route('personas.create');
        }

    }

    
}
