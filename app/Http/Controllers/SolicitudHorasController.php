<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\SolicitudHoras;
use App\Materia;
use App\Carrera;
use App\Grupo;

class SolicitudHorasController extends Controller
{
    public function create(){
    	$materias = Materia::all();
    	$carreras = Carrera::all();
    	$grupos = Grupo::all();
    	return view("/solicitudHoras/create",[
    		'materias' => $materias,
    		'carreras' => $carreras,
    		'grupos' => $grupos
    	]);
	}
	public function store (Request $request){
		try{
			$solicitudHoras = new SolicitudHoras;
			$solicitudHoras->CURP_Alumno = Auth::user()->CURP;
			$solicitudHoras->Id_Grupo = $request->input('Id_Grupo');
			$solicitudHoras->Fecha_Solicitud = $request->input('Fecha_Solicitud');
			$solicitudHoras->Id_Materia = $request->input('Id_Materia');
			$solicitudHoras->Horas_Totales = $request->input('Horas_Totales');
			$solicitudHoras->Id_Solicitud = strtoupper(substr($solicitudHoras->CURP_Alumno,0,4) . $solicitudHoras->Fecha_Solicitud);
			$solicitudHoras->save();
      		session()->flash("Exito","Solicitud realizada correctamente");
			return redirect('/solicitudHoras');
		}catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, solicitud activa");
            return redirect('/solicitudHoras');
        }
	}
	public function index (Request $request)
	{
       $CURP = Auth::user()->CURP;
        $solicitudes = SolicitudHoras::where('CURP_Alumno', $CURP)->get();
        return view('solicitudHoras/index',[
            'solicitudes' => $solicitudes
        ]);		
	}
    public function delete ($id_solicitud){ 
        try{
            $solicitud = SolicitudHoras::where('Id_Solicitud', $id_solicitud)->first();
            $solicitud->delete();
            session()->flash("Exito","Solicitud cancelada");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar esa Solicitud");
            return redirect()->back();
        }
    }
}
