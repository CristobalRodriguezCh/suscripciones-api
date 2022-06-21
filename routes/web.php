<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/personas','personas')->name('personas');
#Route::get('/personas','personas')->name('personas');
// podemos user uno de los dos pero el metodo view es mas rapido
// 

// Route::get('personas','App\Http\Controllers\PersonaController@indexWeb');

/** Rutas del modelo persona */
Route::get('/personas','App\Http\Controllers\PersonaController@indexWeb')->name('personas.get');
Route::get('/personas/create','App\Http\Controllers\PersonaController@createWeb')->name('personas.create');
Route::get('personas/{id}','App\Http\Controllers\PersonaController@showWeb')->name('persona.show');
Route::post('/personas','App\Http\Controllers\PersonaController@storeWeb')->name('persona.store');

/**Rutas de suscripciones */
Route::get('/suscripciones','App\Http\Controllers\SuscripcionController@indexweb')->name('suscripciones.get');
Route::view('/suscripciones/create','suscripcionesCreate')->name('suscripciones.create');
Route::post('/suscripciones','App\Http\Controllers\SuscripcionController@storeWeb')->name('suscripciones.store');

/** Ruta pagos */
Route::get('/pagos','App\Http\Controllers\PagosController@indexWeb')->name('pagos.get');
Route::get('/pagos/create','App\Http\Controllers\PagosController@createWeb')->name('pagos.create');
Route::post('/pagos','App\Http\Controllers\PagosController@storeWeb')->name('pagos.store');