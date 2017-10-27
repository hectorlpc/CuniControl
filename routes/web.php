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
Route::get('monta/', 'MontaController@index');
Route::get('/monta/create','MontaController@create');
Route::post('/monta', 'MontaController@store');
Route::get('/monta/{id_monta}/edit', 'MontaController@edit');
Route::patch('/monta/{id_monta}', 'MontaController@update');
Route::delete('/monta/{id_monta}', 'MontaController@delete');

// Rutas de partos
Route::get('parto/', 'PartoController@index');
Route::get('/parto/create', 'PartoControllerp@create');
Route::post('/parto', 'PartoController@store');
Route::get('/parto/{id_parto}/edit', 'PartoController@edit');
Route::patch('/parto/{id_parto}', 'PartoController@update');
Route::delete('/parto/{id_parto}', 'PartoController@delete');


// Rutas de destetes
Route::get('destete/', 'DesteteController@index');
Route::get('/destete/create', 'DesteteController@create');
Route::post('destete/', 'DesteteController@store');
Route::get('/destete/{id_destete}', 'DesteteController@edit');
Route::delete('/destete/{id_destete}', 'DesteteController@delete');

//Rutas de tatuajes
Route::get('/tatuaje/','TatuajeController@index');
Route::get('/tatuaje/create', 'TatuajeController@create');
Route::post('/tatuaje', 'TatuajeController@store');
Route::get('/tatuaje/{id_conejo}', 'TatuajeController@edit');
Route::delete('/tatuaje/{id_conejo}', 'TatuajeController@delete');

//Rutas de donación
Route::get('/donacion', 'DonacionController@index');
Route::get('/donacion/create', 'DonacionController@create');
Route::post('/donacion', 'DonacionController@store');
Route::get('/donacion/{id_conejo}', 'DonacionController@edit');
Route::delete('/donacion/{id_donacion}', 'DonacionController@delete');

//Rutas de conejos enfermos
Route::get('/enfermo', 'EnfermoController@index');
Route::get('/enfermo/create', 'EnfermoController@create');
Route::post('/enfermo', 'EnfermoController@store');
Route::get('/enfermo/{id_conejo}/edit', 'EnfermoController@edit');
Route::patch('/enfermo/{id_conejo}', 'EnfermoController@update');
Route::delete('/enfermo/{id_conejo}', 'EnfermoController@delete');

//Rutas de horas
Route::get('/horas/create', 'HorasController@create');
Route::get('/horas/{id_destete}', 'HorasController@edit');
Route::delete('/horas/{id_destete}', 'HorasController@delete');

//Rutas de parto
Route::get('/parto/create', 'PartoController@create');
Route::get('/parto/{id_parto}', 'PartoController@edit');
Route::delete('/parto/{id_parto}', 'PartoController@delete');


//Rutas de Coneja Productora
Route::get('/productora', 'ProductoraController@index');
Route::get('/productora/create', 'ProductoraController@create');
Route::post('/productora', 'ProductoraController@store');
Route::get('/productora/{id_productora}', 'ProductoraController@edit');
Route::delete('/productora/{id_productora}', 'ProductoraController@delete');