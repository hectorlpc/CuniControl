<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Grupo;

class GrupoController extends Controller
{
	public function create ()
	{
		$carreras = Carrera::all();

		return view('grupo/create', ['carreras' => $carreras]);
	}

	public function store (Request $request)
	{
		$grupo = new Grupo;
		$grupo->Id_Grupo = $request->input('Id_Grupo');
		$grupo->Id_Carrera = $request->input('Id_Carrera');
		$grupo->save();

		return redirect('/grupo');
	}

	public function index (Request $request)
	{
        if($request->Id_Grupo)
        {
            $grupos = Grupo::where('Id_Grupo', $request->Id_Grupo)->get();
        } else {
            $grupos = Grupo::all();
        }
        return view('grupo/index', ['grupos' => $grupos]);		
	}

	public function edit ($id_grupo)
	{
		$grupos = Grupo::all();
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();

		return view('grupo/edit', ['grupo' => $grupo]);
	}

	public function update (Request $request, $id_grupo)
	{
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();
		$grupo->Id_Grupo = $request->input('Id_Grupo');
		$grupo->save();

		return redirect('/grupo');
	}

	public function delete ($id_grupo)
	{
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();
		$grupo->delete();

		return redirect()->back();
	}
}
