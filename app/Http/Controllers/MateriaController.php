<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Grupo;
use App\Materia;

class MateriaController extends Controller
{
	public function create ()
	{
		$carreras = Carrera::all();
		$grupos = Grupo::all();

		return view('materia/create', [
			'carreras' => $carreras,
			'grupos' => $grupos]);
	}

	public function store (Request $request)
	{
		$materia = new Materia;
		$materia->Id_Materia = $request->input('Id_Materia');
		$materia->Nombre_Materia = $request->input('Nombre_Materia');
		$materia->Id_Grupo = $request->input('Id_Grupo');
		$materia->save();

		return redirect('/materia/');
	}

	public function index (Request $request)
	{
        if($request->Id_Materia)
        {
            $materias = Materia::where('Id_Materia', $request->Id_Materia)->get();
        } else {
            $materias = Materia::all();
        }
        return view('materia/index', ['materias' => $materias]);		
	}

	public function edit ($id_materia)
	{
		$carreras = Carrera::all();
		$materias = Materia::all();
		$materia = Materia::where('Id_Materia', $id_materia)->first();

		return view('materia/edit', [
			'materia' => $materia,
			'carreras' => $carreras
		]);
	}

	public function update (Request $request, $id_materia)
	{
		$materia = Materia::where('Id_Materia', $id_materia)->first();
		$materia->Id_Materia = $request->input('Id_Materia');
		$materia->Nombre_Materia = $request->input('Nombre_Materia');
		$materia->save();

		return redirect('/materia');
	}

	public function delete ($id_materia)
	{
		$materia = Materia::where('Id_Materia', $id_materia)->first();
		$materia->delete();

		return redirect()->back();
	}

    public function obtener_grupo(Request $request) {
        $opciones = Grupo::where('Id_Carrera', $request->clave)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Id_Grupo;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];
        return response()->json($respuesta);	
    }
}
