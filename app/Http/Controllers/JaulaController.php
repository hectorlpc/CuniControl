<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jaula;
use App\Conejo;

class JaulaController extends Controller
{
	public function index (Request $request)
	{
		if($request->Id_Jaula) {
			$jaulas = Jaula::where('Id_Jaula', $Id_Jaula)->get();
		} else {
			$jaulas = Jaula::all();
		}
		return view('Jaula.index', ['jaulas' => $jaulas]);
	}

	public function create ()
	{
		$jaulas = Jaula::all();
		return view('Jaula.create', ['jaulas' => $jaulas]);
	}

	public function store (Request $request){
		try{
			$jaula = new Jaula;
			$jaula->Id_Jaula = $request->input('Id_Jaula');
			$jaula->save();
	        session()->flash("Exito","Raza creada");
			return redirect('/jaula');
		}catch (\Illuminate\Database\QueryException $e){
	        session()->flash("Error","No es posible crear esa jaula");
	        return redirect('/jaula');
	    }

	}

	public function delete (Request $request, $id_jaula){
		try{
			$jaula = Jaula::where('Id_Jaula', $id_jaula)->first();
			$jaula->delete();
      		session()->flash("Exito","Jaula eliminada");
			return redirect()->back();
		}catch (\Illuminate\Database\QueryException $e){
	        session()->flash("Error","No es posible eliminar esa jaula");
	        return redirect()->back();
	    }
	}

	public function edit($id_jaula)	
	{
        $jaula = Jaula::where('Id_Jaula', $id_jaula)->first();
        return view('Jaula.edit', ['jaula' => $jaula]);
	}

	public function update(Request $request, $id_jaula)	{
		try {
			$jaula = Jaula::where('Id_Jaula', $id_jaula)->first();
			$jaula->Status = $request->input('Status');
			$jaula->save();
			return redirect('/jaula');
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('/jaula');
		}
	}

	public function index_jaulas () {
			$grupo_jaulas = [
				'Jaula' => Conejo::Select(\DB::raw('Id_Jaula, COUNT(*) AS Conejos'))
					->where('Status','Vivo')
					->groupBy('Id_Jaula')
					->orderBy('Id_Jaula')
					->get()
			];			
		return view('CensoJaulas.index',['grupo_jaulas' => $grupo_jaulas]);
	}	
}
