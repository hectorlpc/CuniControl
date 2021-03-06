<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\SolicitudHoras;
use App\Actividad;
use App\Horas;

class HorasController extends Controller
{
    public function create()
    {
        $actividades=Actividad::all();
    	return view('Horas.create',[
            'actividades' => $actividades
        ]);
    }

    public function edit($id_horas)
    {
        try{
            return view('Horas/edit');    
        }catch(\Illuminate\Database\QueryException $e){
            session()->flash("Error","Necesitas registrar tu solicitud de horas antes");
            return redirect('/home');
        }
    }

    public function delete($id_horas)
    {
        try{
        $hora = Horas::where('Id_Horas', $id_horas)->first();
        $hora->delete();
        session()->flash("Exito","Horas Practicas eliminadas");
        return redirect()->back();

    }catch (\Illuminate\Database\QueryException $e){
        session()->flash("Error","No es posible eliminar");
        return redirect()->back();
    }

    }
    public function index(Request $request)
    {
        $solicitudhoras = SolicitudHoras::where('CURP_Alumno',Auth::user()->CURP)->first();
        if($solicitudhoras){
            if($request->Fecha)
            {
                $horas = Horas::where('Id_Solicitud', $solicitudhoras->Id_Solicitud)->where('Fecha', $request->Fecha)->get();
            } else {
                $solicitudhoras = SolicitudHoras::where('CURP_Alumno',Auth::user()->CURP)->get();
                $horas = Horas::where('Id_Solicitud', $solicitudhoras[count($solicitudhoras)-1]->Id_Solicitud)->get();
                $conteohoras = Horas::select(DB::raw("id_solicitud, SUM(Hora_Salida - Hora_Entrada) as total"))
        ->where('Status', '=', 'Aceptado')
        ->groupBy('Id_Solicitud')->get();
            }

        }else{
            $horas=null;
            $conteohoras=null;
            
        }    
        
        return view ('Horas.index',['horas'=> $horas , 'conteohoras' => $conteohoras]);
    }

     public function store(Request $request)
    {
        try{
            $hora = new Horas;
            $hora->Fecha = $request->input('Fecha');
            $hora->Hora_Entrada = $request->input('Hora_Entrada');
            $hora->Hora_Salida = $request->input('Hora_Salida');
            $hora->Id_Actividad = $request->input('Id_Actividad');
            $hora->Status = "Pendiente";
            $solicitud =  SolicitudHoras::where('CURP_Alumno', Auth::user()->CURP)->get();
            $hora->Id_Solicitud = $solicitud[count($solicitud)-1]->Id_Solicitud;
            $hora->Id_Horas = strtoupper($hora->Id_Solicitud . $hora->Fecha . $hora->Hora_Entrada . $hora->Hora_Salida);
            $hora->save();
            session()->flash("Exito","Horas practicas registradas");
            return redirect('/horas');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","Tus Horas practicas ya han sido registradas");
            return redirect('/horas');
        }
    }

}
