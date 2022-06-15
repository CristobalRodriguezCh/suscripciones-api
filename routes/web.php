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

Route::get('/', function () {
    return view('home');
});

// Route::view('/personas','personas')->name('personas');
#Route::get('/personas','personas')->name('personas');
// podemos user uno de los dos pero el metodo view es mas rapido
// 

// Route::get('personas','App\Http\Controllers\PersonaController@indexWeb');

/** Rutas del modelo persona */
Route::get('/personas','App\Http\Controllers\PersonaController@indexWeb')->name('personas.get');
Route::view('/personas/create','personaCreate')->name('personas.create');
Route::post('/personas','App\Http\Controllers\PersonaController@storeWeb')->name('persona.store');