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
Route::get('/montas/edit', 'MontaController@edit');
Route::get('/montas/delete', 'MontaController@delete');

// Rutas de gestaciones
Route::get('/gestacion/create', 'GestacionController@create');
Route::get('/gestacion/edit', 'GestacionController@edit');
Route::get('/gestacion/delete', 'GestacionController@delete');

// Rutas de partos
Route::get('/parto/create', 'PartoController@create');
Route::get('/parto/edit', 'PartoController@edit');
Route::get('/parto/delete', 'PartoController@delete');

// Rutas de destetes
Route::get('/destete/create', 'DesteteController@create');
Route::get('/destete/edit', 'DesteteController@edit');
Route::get('/destete/delete', 'DesteteController@delete');