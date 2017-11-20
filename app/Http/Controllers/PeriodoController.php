<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    public function create ()
	{
		return view('Periodo/create');
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
        if($request->Id_Periodo)
        {
            $periodos = Periodo::where('Id_Periodo', $request->Id_Periodo)->get();
        } else {
            $periodos = Periodo::all();
        }
        return view('Periodo/index', ['periodos' => $periodos]);
	}

	public function edit ($id_grupo)
	{
		$grupos = Grupo::all();
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();

		return view('Grupo/edit', ['grupo' => $grupo]);
	}

	public function update (Request $request, $id_grupo)
	{
		try{
		$grupo = Grupo::where('Id_Grupo', $id_grupo)->first();
		$grupo->Id_Grupo = $request->input('Id_Grupo');
		$grupo->save();
		return redirect('/grupo');
	}catch (\Illuminate\Database\QueryException $e){
			session()->flash("Error","No es posible Modificar ese grupo");
			return redirect('/grupo');
		}
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
