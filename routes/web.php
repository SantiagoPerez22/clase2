<?php

use App\Http\Controllers\VerdurasController;
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
    return view('welcome');
});

route::get('/registro/{nombre?}/{edad?}', function ($nombre, $edad){
    return view('registro')
    ->with('nombre', '$nombre')
    ->with('edad', '$edad')
    ->with('frutas', array('Naranja', 'Pera','manzana'));
});

/*
Importante prestar atencion al get y post

Otra forma de llamar al controlador es con la ubicacion exacta de la carpeta
-> Route::get('/verduras', 'App\Http\Controllers\VerdurasController@index');

Route::get('/verduras', [VerdurasController::class, 'index']);
Route::get('/verdurasAgregar', [VerdurasController::class, 'agregar']);
Route::get('/verdurasEliminar', [VerdurasController::class, 'eliminar']);
*/

Route::get('/verduras', 'App\Http\Controllers\VerdurasController@index');
Route::get('/verdurasAgregar', 'App\Http\Controllers\VerdurasController@agregar')->name('AgregarVerduras');
Route::get('/verdurasEliminar', 'App\Http\Controllers\VerdurasController@eliminar')->name('EliminarVerduras');
Route::post('/verdurasGuardar', 'App\Http\Controllers\VerdurasController@guardar');
?>