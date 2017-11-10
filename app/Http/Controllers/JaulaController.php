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

	public function store (Request $request)
	{
		$jaula = new Jaula;
		$jaula->Id_Jaula = $request->input('Id_Jaula');
		$jaula->save();

		return redirect('/jaula');
	}

	public function delete (Request $request, $id_jaula)
	{
		$jaula = Jaula::where('Id_Jaula', $id_jaula)->first();
		$jaula->delete();

		return redirect()->back();
	}
}
