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
    return view('inicio');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('medicos', medicoController::class);


Route::resource('servicios', servicioController::class);


Route::resource('colaboradors', colaboradorController::class);


Route::resource('reservacions', reservacionController::class);


Route::resource('medicamentos', medicamentoController::class);


Route::resource('recetas', recetaController::class);


Route::resource('encuestas', encuestaController::class);
