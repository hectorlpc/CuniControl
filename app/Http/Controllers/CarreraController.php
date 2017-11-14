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
		try{
			$carrera = new Carrera;
			$carrera->Clave_Carrera = $request->input('Clave_Carrera');
			$carrera->Nombre_Carrera = $request->input('Nombre_Carrera');
			$carrera->Id_Carrera = strtoupper(substr($request->input('Nombre_Carrera'),0,3) . substr($request->input('Nombre_Carrera'),-3));
			$carrera->save();
            session()->flash("Exito","Carrera creada");
			return redirect('/carrera');
		}catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, Carrera existente");
            return redirect('/carrera');
        }

	}

	public function index (Request $request)
	{
        if($request->Nombre_Carrera)
        {
            $carreras = Carrera::where('Nombre_Carrera', $request->Nombre_Carrera)->get();
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
		try{
			$carrera = Carrera::where('Id_Carrera', $id_carrera)->first();
			$carrera->Nombre_Carrera = $request->input('Nombre_Carrera');
			$carrera->save();
			return redirect('/carrera');
		}catch (\Illuminate\Database\QueryException $e){

			session()->flash("Error","No es posible Modificar esa carrera");
			return redirect('/carrera');
		}
	}

	public function delete ($id_carrera)
	{
		try{
			$carrera = Carrera::where('Id_Carrera', $id_carrera)->first();
		$carrera->delete();
		session()->flash("Exito","Carrera Eliminada");
		return redirect()->back();
		}catch (\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar esa carrera");
        return redirect()->back();
    }

	}
}
