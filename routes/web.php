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
Route::get('/destete/{id_destete}/edit', 'DesteteController@edit');
Route::patch('/destete/{id_destete}', 'DesteteController@update');
Route::delete('/destete/{id_destete}', 'DesteteController@delete');

//Rutas de tatuajes
Route::get('/tatuaje/','TatuajeController@index');
Route::get('/tatuaje/create', 'TatuajeController@create');
Route::post('/tatuaje', 'TatuajeController@store');
Route::get('/tatuaje/{id_conejo}/edit', 'TatuajeController@edit');
Route::patch('/tatuaje/{id_conejo}', 'TatuajeController@update');
Route::delete('/tatuaje/{id_conejo}', 'TatuajeController@delete');

//Rutas de donación
Route::get('/donacion', 'DonacionController@index');
Route::get('/donacion/create', 'DonacionController@create');
Route::post('/donacion', 'DonacionController@store');
Route::get('/donacion/{id_donacion}/edit', 'DonacionController@edit');
Route::patch('/donacion/{id_donacion}', 'DonacionController@update');
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

//Rutas de Conejo Cemental
Route::get('/cemental', 'CementalController@index');
Route::get('/cemental/create', 'CementalController@create');
Route::post('/cemental', 'CementalController@store');
Route::get('/cemental/{id_cemental}/edit', 'CementalController@edit');
Route::patch('/cemental/{id_cemental}', 'CementalController@update');
Route::delete('/cemental/{id_cemental}', 'CementalController@delete');

//Rutas de Coneja Productora
Route::get('/productora', 'ProductoraController@index');
Route::get('/productora/create', 'ProductoraController@create');
Route::post('/productora', 'ProductoraController@store');
Route::get('/productora/{id_productora}/edit', 'ProductoraController@edit');
Route::patch('/productora/{id_productora}', 'ProductoraController@update');
Route::delete('/productora/{id_productora}', 'ProductoraController@delete');

//Rutas de Conejo Adquirido
Route::get('/adquirido', 'AdquiridoController@index');
Route::get('/adquirido/create', 'AdquiridoController@create');
Route::post('/adquirido', 'AdquiridoController@store');
Route::get('/adquirido/{id_productora}', 'AdquiridoController@edit');
Route::delete('/adquirido/{id_productora}', 'AdquiridoController@delete');

//Rutas de Adquisicion
Route::get('/adquisicion', 'AdquisicionController@index');
Route::get('/adquisicion/create', 'AdquisicionController@create');
Route::post('/adquisicion', 'AdquisicionController@store');
Route::get('/adquisicion/{id_adquisicion}/edit', 'AdquisicionController@edit');
Route::patch('/adquisicion/{id_adquisicion}', 'AdquisicionController@update');
Route::delete('/adquisicion/{id_adquisicion}','AdquisicionController@delete');

//Rutas de Baja por transferencias
Route::get('/transferencia', 'TransferenciaController@index');
Route::get('/transferencia/create', 'TransferenciaController@create');
Route::post('/transferencia', 'TransferenciaController@store');
Route::get('/transferencia/{id_transferencia}/edit', 'TransferenciaController@edit');
Route::patch('/transferencia/{id_transferencia}', 'TransferenciaController@update');
Route::delete('/transferencia/{id_transferencia}','TransferenciaController@delete');

Route::post('/montas/obtener-sementales', 'MontaController@obtener_semental');