<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**rutas del modelo Persona */
Route::get('personas','App\Http\Controllers\PersonaController@index');

/**rutas del modelo Plan */
Route::get('planes','App\Http\Controllers\PlanController@index');

/**rutas del modelo Suscripciones */
Route::get('suscripciones','App\Http\Controllers\SuscripcionController@index');

/**rutas del modelo pagos */
Route::get('pagos','App\Http\Controllers\PagosController@index');