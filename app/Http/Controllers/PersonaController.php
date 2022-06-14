<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
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
    
}
