<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Grupo;
use App\Materia;
use Carbon\Carbon;
use App\Periodo;

class MateriaController extends Controller
{
	public function create ()
	{
	
		$carreras = Carrera::all();
		$grupos = Grupo::all();
		$periodo = Periodo::whereDate('Fecha_Inicio',"<=",Carbon::now()->format('Y-m-d'))->whereDate('Fecha_Termino',">=",Carbon::now()->format('Y-m-d'))->first();

		return view('Materia.create', [
			'carreras' => $carreras,
			'grupos' => $grupos, 
			'periodo' => $periodo]);	
	}

	public function store (Request $request){
		try{
			$materia = new Materia;
			$materia->Nombre_Materia = $request->input('Nombre_Materia');
			$materia->Id_Periodo = $request->input('Id_Periodo');
			$materia->Id_Carrera = $request->input('Id_Carrera');
			$materia->Id_Materia = strtoupper(substr($materia->Nombre_Materia,0,2) . substr($materia->Nombre_Materia,-2) . $materia->Id_Periodo . substr($materia->Id_Carrera,0,2) . substr($materia->Id_Carrera,-2)); 
			$materia->save();
      		session()->flash("Exito","Materia Registrada");
			return redirect('/materia');
		}catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, materia existente");
            return redirect('/materia');
    }
	}

	public function index (Request $request)
	{
        $periodo = Periodo::whereDate('Fecha_Inicio',"<=",Carbon::now()->format('Y-m-d'))->whereDate('Fecha_Termino',">=",Carbon::now()->format('Y-m-d'))->first();

        if($request->Nombre_Materia)
        {
            $materias = Materia::where('Nombre_Materia', $request->Nombre_Materia)->get();
        } else {
            $materias = Materia::where('Id_Periodo', $periodo->Id_Periodo)->get();
        }
        
        return view('Materia.index', ['materias' => $materias, 
			'periodo' => $periodo]);
	}

	

	public function delete ($id_materia){
		try{
			$materia = Materia::where('Id_Materia', $id_materia)->first();
			$materia->delete();
	        session()->flash("Exito","Materia eliminada");
			return redirect()->back();
		}catch (\Illuminate\Database\QueryException $e){
	        session()->flash("Error","No es posible eliminar esa Materia");
	        return redirect()->back();
  		}
	}

    public function obtener_grupo(Request $request) {
        $opciones = Grupo::where('Id_Carrera', $request->clave)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Id_Grupo;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];
        return response()->json($respuesta);
    }
    public function grupos(){
    	return $this->belongsToMany(Grupo::class,'Materia_Grupo','Id_Materia','Id_Grupo');
    }

}
