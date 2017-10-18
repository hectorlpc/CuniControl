<?php

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
    return redirect()->guest('/login');
    // return view('welcome');
});

Route::get('/cuentas', 'UsuarioController@index');
Route::get('/cuentas/{curp}', 'UsuarioController@show');
Route::post('/cuentas/{curp}/rol', 'UsuarioController@store_rol');
Route::delete('/cuentas/{curp}/rol/{idrol}', 'UsuarioController@destroy_rol');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas de montas
Route::get('/monta/create','MontaController@create');
Route::get('/monta/{id_monta}', 'MontaController@edit');
Route::get('/monta/{id_monta}', 'MontaController@delete');

// Rutas de gestaciones
Route::get('/gestacion/create', 'GestacionController@create');
Route::get('/gestacion/{id_gestacion}', 'GestacionController@edit');
Route::delete('/gestacion/{id_gestacion}', 'GestacionController@delete');

// Rutas de partos
Route::get('/parto/create', 'PartoController@create');
Route::get('/parto/{id_parto}', 'PartoController@edit');
Route::delete('/parto/{id_parto}', 'PartoController@delete');

// Rutas de destetes
Route::get('/destete/create', 'DesteteController@create');
Route::get('/destete/{id_destete}', 'DesteteController@edit');
Route::delete('/destete/{id_destete}', 'DesteteController@delete');

//Rutas de conejos enfermos
Route::get('/enfermo/create', 'EnfermoController@create');
Route::get('/enfermo/{id_destete}', 'EnfermoController@edit');
Route::delete('/enfermo/{id_destete}', 'EnfermoController@delete');

//Rutas de horas
Route::get('/horas/create', 'HorasController@create');
Route::get('/horas/{id_destete}', 'HorasController@edit');
Route::delete('/horas/{id_destete}', 'HorasController@delete');
