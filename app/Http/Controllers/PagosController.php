<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
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
}
