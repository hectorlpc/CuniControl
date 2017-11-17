<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profesor;

class ProfesorController extends Controller
{
    //
    public function create(){
    	return view("Profesor/create");
	}
	public function store(Request $request){
		try{
			Profesor::create($request->all());
			session()->flash("Exito","Datos Registrados Exitosamente");
		}catch(\Illuminate\Database\QueryException $e){
			session()->flash("Error","Datos existentes o invalidos");
		}
		return redirect('/home');
	}
	public function edit()
    {
    	$CURP = Auth::user()->CURP;
        $profesor = Profesor::where('CURP_Profesor', $CURP)->first();

        return view('Profesor/edit',['profesor' => $profesor]);
    }

	public function update(Request $request,$profesor){
		$CURP = Auth::user()->CURP;
		try{
			$profesor = Profesor::where('CURP_Alumno', $CURP)->first();
		    $profesor->Seguro_Axxa = $request->input('Seguro_Axxa');
		    $profesor->Seguro_Facultativo = $request->input('Seguro_Facultativo');
		    $profesor->Numero_Cuenta = $request->input('Numero_Cuenta');
		    $profesor->save();
		    session()->flash("Exito","Datos actualizados Exitosamente");
		}catch(\Illuminate\Database\QueryException $e){
			session()->flash("Error","Datos invalidos o nulos");
		}
        return redirect('/home');

	}
}
