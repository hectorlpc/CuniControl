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

	public function store (Request $request){
		try{
			$grupo = new Grupo;
			$grupo->Clave_Grupo = $request->input('Clave_Grupo');
			$grupo->Id_Carrera = $request->input('Id_Carrera');
			$grupo->Id_Grupo = $grupo->Clave_Grupo. '-' . $grupo->Id_Carrera; 
			$grupo->save();
            session()->flash("Exito","Grupo creado");
			return redirect('/grupo');
		}catch(\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, grupo existente");
            return redirect('/grupo');
        }
		
	}

	public function index (Request $request)
	{
        if($request->Clave_Grupo)
        {
            $grupos = Grupo::where('Clave_Grupo', $request->Clave_Grupo)->get();
        } else {
            $grupos = Grupo::all();
        }
        return view('Grupo/index', ['grupos' => $grupos]);		
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
		try{
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();
		$grupo->delete();
		session()->flash("Exito","Grupo eliminado");
		return redirect()->back();	
		}catch (\Illuminate\Database\QueryException $e){
        
        session()->flash("Error","No es posible eliminar ese grupo");
        return redirect()->back();
    	}
	}
}
