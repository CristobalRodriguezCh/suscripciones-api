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
}
