<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionController;


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

Route::get('/', HomeController::class);

//Grupo de rutas con el mismo controlador
Route::controller(InscripcionController::class)->group(function(){
    Route::get('inscripciones', 'index');
    Route::get('inscripciones/create', 'create');
    Route::get('inscripciones/{inscripcion}', 'show');
});


