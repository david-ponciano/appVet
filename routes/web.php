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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('productos', 'productosController');


Route::resource('usuarios', 'usuariosController');

Route::resource('mascotas', 'mascotaController');

Route::resource('historials', 'historialController');

Route::resource('razas', 'razaController');

Route::resource('servicios', 'servicioController');



Route::resource('citas', 'citasController');