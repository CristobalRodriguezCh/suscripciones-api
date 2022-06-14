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

    public function indexWeb(){
        $personas = DB::table('personas')->get();
        return view('personas',['personas' =>$personas]);
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



    
}
