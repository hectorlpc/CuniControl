<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Alumno;
use App\Usuario;

class AlumnoController extends Controller
{
    //
	public function create(){
		try{
			return view("Alumno/create");
		}catch(\Exception $e){
			session()->flash("Error","No se puede acceder a esta vista");
		}

    	

	}
	public function store(Request $request){
		try{
			Alumno::create($request->all());
			session()->flash("Exito","Datos Registrados Exitosamente");
		}catch(\Illuminate\Database\QueryException $e){
			session()->flash("Error","Datos existentes o invalidos");
		}
		return redirect('/home');
	}
	public function edit()
    {
    	try{
    		$CURP = Auth::user()->CURP;
        	$alumno = Alumno::where('CURP_Alumno', $CURP)->first();

        return view('Alumno/edit',['alumno' => $alumno]);	
    	}catch(\Exception $e){
    		session()->flash("Error","Necesitas crear tus datos de alumno");
			return redirect('/home');
    	}
    	
    }

	public function update(Request $request,$alumno){
		$CURP = Auth::user()->CURP;
		try{
			$alumno = Alumno::where('CURP_Alumno', $CURP)->first();
		    $alumno->Seguro_Axxa = $request->input('Seguro_Axxa');
		    $alumno->Seguro_Facultativo = $request->input('Seguro_Facultativo');
		    $alumno->Numero_Cuenta = $request->input('Numero_Cuenta');
		    $alumno->save();
		    session()->flash("Exito","Datos actualizados Exitosamente");
		}catch(\Illuminate\Database\QueryException $e){
			session()->flash("Error","Datos invalidos o nulos");
		}
        return redirect('/home');

	}
}
