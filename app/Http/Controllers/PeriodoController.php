<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    public function create ()
	{
		return view('Periodo.create');
	}

	public function store (Request $request){
		try{
			Periodo::create($request->all());
			session()->flash("Exito","Periodo Registrado Exitosamente");
			return redirect('/periodo');
		}catch(\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, periodo existente");
            return redirect('/periodo');
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
        return view('Periodo.index', ['periodos' => $periodos]);
	}

	public function edit ($id_periodo)
	{
		$periodo = Periodo::where('Id_Periodo', $id_periodo)->first();

		return view('Periodo.edit', ['periodo' => $periodo]);
	}

	public function update (Request $request, $id_periodo)
	{
		try{
		$periodo = Periodo::where('Id_Periodo', $id_periodo)->first();
		$periodo->Id_Periodo = $request->input('Id_Periodo');
		$periodo->Fecha_Inicio = $request->input('Fecha_Inicio');
		$periodo->Fecha_Termino = $request->input('Fecha_Termino');
		$periodo->save();
		session()->flash("Exito", "Periodo Actualizado");
		return redirect('/periodo');
	}catch (\Illuminate\Database\QueryException $e){
			session()->flash("Error","No es posible Modificar ese periodo");
			return redirect('/periodo');
		}
	}

	public function delete ($id_periodo)
	{
		try{
		$periodo = Periodo::where('Id_Periodo', $id_periodo)->first();
		$periodo->delete();
		session()->flash("Exito","Periodo eliminado");
		return redirect()->back();
		}catch (\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar ese periodo");
        return redirect()->back();
    	}
	}
}
