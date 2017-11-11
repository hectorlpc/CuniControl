<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jaula;

class JaulaController extends Controller
{
	public function index (Request $request)
	{
		if($request->Id_Jaula) {
			$jaulas = Jaula::where('Id_Jaula', $Id_Jaula)->get();
		} else {
			$jaulas = Jaula::all();
		}
		return view('Jaula/index', ['jaulas' => $jaulas]);
	}

	public function create ()
	{
		$jaulas = Jaula::all();
		return view('jaula/create', ['jaulas' => $jaulas]);
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
}
