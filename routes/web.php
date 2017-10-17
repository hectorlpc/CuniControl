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
Route::post('/cuentas/{curp}/roles', 'UsuarioController@store_rol');
Route::delete('/cuentas/{curp}/roles/{idrol}', 'UsuarioController@destroy_rol');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas de montas
Route::get('/montas/create','MontaController@create');
Route::get('/montas/{id_monta}', 'MontaController@edit');
Route::get('/montas/{id_monta}', 'MontaController@delete');

// Rutas de gestaciones
Route::get('/gestacion/create', 'GestacionController@create');
Route::get('/gestacion/{id_gestacion}', 'GestacionController@edit');
Route::get('/gestacion/{id_gestacion}', 'GestacionController@delete');

// Rutas de partos
Route::get('/parto/create', 'PartoController@create');
Route::get('/parto/{id_parto}', 'PartoController@edit');
Route::delete('/parto/{id_parto}', 'PartoController@delete');

// Rutas de destetes
Route::get('/destete/create', 'DesteteController@create');
Route::get('/destete/{id_destete}', 'DesteteController@edit');
Route::get('/destete/{id_destete}', 'DesteteController@delete');