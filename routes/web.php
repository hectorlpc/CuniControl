<?php

use Illuminate\Http\Request;

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

Route::get('/acercaDe','AcercaController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Rutas de montas
Route::get('monta/', 'MontaController@index');
Route::get('/monta/create','MontaController@create');
Route::post('/monta', 'MontaController@store');
Route::get('/monta/{id_monta}/edit', 'MontaController@edit');
Route::patch('/monta/{id_monta}', 'MontaController@update');
Route::delete('/monta/{id_monta}', 'MontaController@delete');
Route::post('/montas/obtener-sementales', 'MontaController@obtener_semental');
Route::post('/monta/obtener-fechas', 'MontaController@obtener_fechas');

// Rutas de partos
Route::get('parto/', 'PartoController@index');
Route::get('/parto/create', 'PartoControllerp@create');
Route::post('/parto', 'PartoController@store');
Route::get('/parto/{id_parto}/edit', 'PartoController@edit');
Route::patch('/parto/{id_parto}', 'PartoController@update');
Route::delete('/parto/{id_parto}', 'PartoController@delete');
Route::post('/parto/obtener-fecha', 'PartoController@obtener_fecha');

// Rutas de destetes
Route::get('destete/', 'DesteteController@index');
Route::get('/destete/create', 'DesteteController@create');
Route::post('destete/', 'DesteteController@store');
Route::get('/destete/{id_destete}/edit', 'DesteteController@edit');
Route::patch('/destete/{id_destete}', 'DesteteController@update');
Route::delete('/destete/{id_destete}', 'DesteteController@delete');
Route::post('/destete/obtener-datos', 'DesteteController@obtener_datos');
Route::post('/destete/obtener-adoptados', 'DesteteController@obtener_adoptados');
Route::post('/destete/obtener-notas','DesteteController@obtener_notas');

//Rutas de tatuajes
Route::get('tatuaje/','TatuajeController@index');
Route::get('/tatuaje/create', 'TatuajeController@create');
Route::post('/tatuaje', 'TatuajeController@store');
Route::get('/tatuaje/{id_conejo}/edit', 'TatuajeController@edit');
Route::patch('/tatuaje/{id_conejo}', 'TatuajeController@update');
Route::delete('/tatuaje/{id_conejo}', 'TatuajeController@delete');
Route::post('/tatuaje/obtener-datos', 'TatuajeController@obtener_datos');

//Rutas de donación
Route::get('/donacion', 'DonacionController@index');
Route::get('/donacion/create', 'DonacionController@create');
Route::post('/donacion', 'DonacionController@store');
Route::get('/donacion/{id_donacion}/edit', 'DonacionController@edit');
Route::patch('/donacion/{id_donacion}', 'DonacionController@update');
Route::delete('/donacion/{id_donacion}', 'DonacionController@delete');
Route::post('/donacion/obtener-receptores','DonacionController@obtener_receptores');

//Rutas de conejos enfermos
Route::get('/enfermo', 'EnfermoController@index');
Route::get('/enfermo/create', 'EnfermoController@create');
Route::post('/enfermo', 'EnfermoController@store');
Route::get('/enfermo/{id_conejo}/edit', 'EnfermoController@edit');
Route::patch('/enfermo/{id_conejo}', 'EnfermoController@update');
Route::delete('/enfermo/{id_conejo}', 'EnfermoController@delete');

//Rutas de horas

Route::get('/horas', 'HorasController@index');
Route::get('/horas/create', 'HorasController@create');
Route::post('/horas', 'HorasController@store');
//Route::get('/horas/{id_destete}/edit', 'HorasController@edit');
Route::delete('/horas/{id_horas}', 'HorasController@delete');
Route::get('/Horas/pdf', function() {
	$usuario = Auth::user();
	$alumno = App\Alumno::where('CURP_Alumno', $usuario->CURP)->get();
	$solicitudes = App\SolicitudHoras::where('CURP_Alumno', $alumno[0]->CURP_Alumno)->get();
	$horas = App\Horas::where('Id_Solicitud', $solicitudes[0]->Id_Solicitud)->get();
	$conteohoras = App\Horas::select(DB::raw("id_solicitud, SUM(Hora_Salida - Hora_Entrada) as total"))
    ->where('Status', '=', 'Aceptado')
    ->groupBy('id_solicitud')->get();
	$pdf = PDF::loadView('Horas/pdf', ['horas' => $horas, 'usuario' => $usuario, 'alumno' =>$alumno, 'solicitud' => $solicitudes, 'conteohoras' => $conteohoras]);
	return $pdf->download('HorasCumplidas.pdf');
});

//rutas validacion de horas
Route::get('/validacion', 'ValidacionController@index');
Route::patch('/validacion/{id_horas}', 'ValidacionController@update');

//Rutas solicitud de horas
Route::get('/solicitudHoras/create', 'SolicitudHorasController@create');
Route::get('/solicitudHoras','SolicitudHorasController@index');
Route::delete('/SolicitudHoras/{id_solicitud}', 'SolicitudHorasController@delete');
Route::post('/solicitudHoras', 'SolicitudHorasController@store');

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

//Rutas de conejos de Engorda
Route::get('/engorda', 'EngordaController@index');
Route::get('/engorda/create', 'EngordaController@create');
Route::post('/engorda', 'EngordaController@store');
Route::get('/engorda/{id_engorda}/edit', 'EngordaController@edit');
Route::patch('/engorda/{id_engorda}', 'EngordaController@update');
Route::delete('/engorda/{id_engorda}', 'EngordaController@delete');


Route::get('/engorda/pdf', function() {
	$desechos = App\Desecho::all();
	$pdf = PDF::loadView('ConejoDesecho/pdf', ['desechos' => $desechos]);
	return $pdf->download('Censo_de_desecho.pdf');
});

//Rutas de jaulas
Route::get('/jaula', 'JaulaController@index');
Route::get('/jaula/create', 'JaulaController@create');
Route::post('/jaula', 'JaulaController@store');
Route::get('/jaula/{id_jaula}/edit', 'JaulaController@edit');
Route::patch('/jaula/{id_jaula}', 'JaulaController@update');
Route::delete('/jaula/{id_jaula}', 'JaulaController@delete');

//Rutas de Conejo Adquirido
Route::get('/adquirido', 'AdquiridoController@index');
Route::get('/adquirido/create', 'AdquiridoController@create');
Route::post('/adquirido', 'AdquiridoController@store');
Route::get('/adquirido/{id_adquirido}/edit', 'AdquiridoController@edit');
Route::patch('/adquirido/{id_adquirido}', 'AdquiridoController@update');
Route::delete('/adquirido/{id_adquirido}', 'AdquiridoController@delete');

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

//Rutas de carreras
Route::get('/carrera', 'CarreraController@index');
Route::get('/carrera/create', 'CarreraController@create');
Route::post('/carrera', 'CarreraController@store');
Route::get('/carrera/{id_carrera}/edit', 'CarreraController@edit');
Route::patch('/carrera/{id_carrera}', 'CarreraController@update');
Route::delete('/carrera/{id_carrera}','CarreraController@delete');

//Rutas de grupos
Route::get('/grupo', 'GrupoController@index');
Route::get('/grupo/create', 'GrupoController@create');
Route::post('/grupo', 'GrupoController@store');
Route::get('/grupo/{id_grupo}/edit', 'GrupoController@edit');
Route::patch('/grupo/{id_grupo}', 'GrupoController@update');
Route::delete('/grupo/{id_grupo}','GrupoController@delete');

//Rutas de periodos
Route::get('/periodo', 'PeriodoController@index');
Route::get('/periodo/create', 'PeriodoController@create');
Route::post('/periodo', 'PeriodoController@store');
Route::get('/periodo/{id_periodo}/edit', 'PeriodoController@edit');
Route::patch('/periodo/{id_periodo}', 'PeriodoController@update');
Route::delete('/periodo/{id_periodo}','PeriodoController@delete');

//Rutas de Alumnos
Route::get('/alumno/create', 'AlumnoController@create');
Route::get('/alumno/edit','AlumnoController@edit');
Route::post('/alumno','AlumnoController@store');
Route::patch('/alumno/{CURP_Alumno}', 'AlumnoController@update');

//Rutas de Profesores
Route::get('/profesor/create', 'ProfesorController@create');
Route::get('/profesor/edit','ProfesorController@edit');
Route::post('/profesor','ProfesorController@store');
Route::patch('/profesor/{CURP_Profesor}', 'ProfesorController@update');

//Rutas de materias
Route::get('/materia', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia', 'MateriaController@store');
Route::delete('/materia/{id_materia}','MateriaController@delete');
Route::post('/grupos/obtener-grupos', 'MateriaController@obtener_grupo');

//Rutas De Enfermedad
Route::get('/enfermedad', 'EnfermedadController@index');
Route::get('/enfermedad/create', 'EnfermedadController@create');
Route::post('/enfermedad', 'EnfermedadController@store');
Route::get('/enfermedad/{id_enfermedad}/edit', 'EnfermedadController@edit');
Route::patch('/enfermedad/{id_enfermedad}', 'EnfermedadController@update');
Route::delete('/enfermedad/{id_enfermedad}','EnfermedadController@delete');

//Rutas De Medicamento
Route::get('/medicamento', 'MedicamentoController@index');
Route::get('/medicamento/create', 'MedicamentoController@create');
Route::post('/medicamento', 'MedicamentoController@store');
Route::get('/medicamento/{id_medicamento}/edit', 'MedicamentoController@edit');
Route::patch('/medicamento/{id_medicamento}', 'MedicamentoController@update');
Route::delete('/medicamento/{id_medicamento}','MedicamentoController@delete');

//Rutas De Raza
Route::get('/raza', 'RazaController@index');
Route::get('/raza/create', 'RazaController@create');
Route::post('/raza', 'RazaController@store');
Route::get('/raza/{id_raza}/edit', 'RazaController@edit');
Route::patch('/raza/{id_raza}', 'RazaController@update');
Route::delete('/raza/{id_raza}','RazaController@delete');


//Rutas De Área
Route::get('/area', 'AreaController@index');
Route::get('/area/create', 'AreaController@create');
Route::post('/area', 'AreaController@store');
Route::get('/area/{id_area}/edit', 'AreaController@edit');
Route::patch('/area/{id_area}', 'AreaController@update');
Route::delete('/area/{id_area}','AreaController@delete');

//Rutas de censo general vivos
Route::get('/censo-general-vivos', 'CensoController@index_vivos');
Route::get('/censo-general-vivos/pdf', 'CensoController@vivos_pdf');

//Rutas de censo muertos
Route::get('/censo-general-muertos', 'CensoController@index_muertos');
Route::get('/censo-general-muertos/pdf', 'CensoController@muertos_pdf');

//Rutas de censo de jaulas
Route::get('/censo-jaulas', 'JaulaController@index_jaulas');

//Confirmacion de Correo
Route::get('/Usuario/activacion/{code}','Auth\RegisterController@activarcode');
