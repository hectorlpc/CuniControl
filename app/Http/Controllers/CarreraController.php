<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class CarreraController extends Controller
{
	public function create ()
	{
		$carreras = Carrera::all();

		return view('carrera/create');
	}

	public function store (Request $request)
	{
		$carrera = new Carrera;
		$carrera->Id_Carrera = $request->input('Id_Carrera');
		$carrera->Nombre_Carrera = $request->input('Nombre_Carrera');
		$carrera->save();

		return redirect('/carrera');
	}

	public function index (Request $request)
	{
        if($request->Id_Carrera)
        {
            $carreras = Carrera::where('Id_Carrera', $request->Id_Carrera)->get();
        } else {
            $carreras = Carrera::all();
        }
        return view('carrera/index', ['carreras' => $carreras]);		
	}

	public function edit ($id_carrera)
	{
		$carreras = Carrera::all();
		$carrera = Carrera::where('Id_Carrera', $id_carrera)->first();

		return view('carrera/edit', ['carrera' => $carrera]);
	}

	public function update (Request $request, $id_carrera)
	{
		$carrera = Carrera::where('Id_Carrera', $id_carrera)->first();
		$carrera->Nombre_Carrera = $request->input('Nombre_Carrera');
		$carrera->save();

		return redirect('/carrera');
	}

	public function delete ($id_carrera)
	{
		$carrera = Carrera::where('Id_Carrera', $id_carrera)->first();
		$carrera->delete();

		return redirect()->back();
	}
}
