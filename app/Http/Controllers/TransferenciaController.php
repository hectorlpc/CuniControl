<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Conejo;
use App\Area;
use App\Transferencia;

class TransferenciaController extends Controller{
	public function create(){
		$areas = Area::all();
		$conejos = Conejo::all();
		return view('Transferencia/create', [
			'conejos' => $conejos,
			'areas' => $areas
		]);
	}

	public function store(Request $request){
		try{
			$transferencia = new Transferencia;
			$transferencia->Id_Conejo = $request->input('Id_Conejo');
			$transferencia->Id_Area = $request->input('Id_Area');
			$transferencia->Fecha_Baja = $request->input('Fecha_Baja');
			$transferencia->Creador = Auth::user()->CURP;

			$conejo = Conejo::where('Id_Conejo', $request->input('Id_Conejo'))->first();
			$conejo->Status = 'Transferido';

			$conejo->save();
			$transferencia->save();

			session()->flash("Exito","Transferencia creada");
			return redirect('/transferencia');
		}catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, Transferencia existente");
            return redirect('/transferencia');
        }
	}

	public function index(Request $request){
     	if($request->Id_Conejo)
        {
          $transferencias = Transferencia::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
          $transferencias = Transferencia::all();
        }
        return view('Transferencia/index', ['transferencias' => $transferencias]);
	}

	public function edit($id_transferencia){
		$areas = Area::all();
		$conejos = Conejo::all();
		$transferencia = Transferencia::where('Id_Transferencia', $id_transferencia)->first();

		return view('Transferencia/edit', [
			'conejos' => $conejos,
			'areas' => $areas,
			'transferencia' => $transferencia
		]);
	}

	public function update(Request $request, $id_transferencia){
		try{
		$transferencia = Transferencia::where('Id_Transferencia', $id_transferencia)->first();
		$transferencia->Id_Area = $request->input('Id_Area');
		$transferencia->Modificador = Auth::user()->CURP;
		$transferencia->save();

		return redirect('/transferencia');
	}catch (\Illuminate\Database\QueryException $e){
					session()->flash("Error","No es posible Modificar Transferencia");
					return redirect('/transferencia');
			}
	}

	public function delete($id_transferencia){
		try{
			$transferencia = Transferencia::where('Id_Transferencia',$id_transferencia)->first();
			$transferencia->delete();
	        session()->flash("Exito","Transferencia eliminada");
			return redirect()->back();
		}catch (\Illuminate\Database\QueryException $e){
	        session()->flash("Error","No es posible eliminar esa Transferencia");
	        return redirect()->back();
    }
	}
}
