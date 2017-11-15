<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\SolicitudHoras;
use App\Actividad;
use App\Horas;

class HorasController extends Controller
{
    public function create()
    {
        $actividades=Actividad::all();
    	return view('horas/create',[
            'actividades' => $actividades
        ]);
    }

    public function edit($id_horas)
    {
        return view('horas/edit');
    }

    public function delete($id_horas)
    {
        return redirect()->back();
    }
    public function index(Request $request)
    {
        if($request->Fecha)
        {
            $solicitudhoras = SolicitudHoras::where('CURP_Alumno',Auth::user()->CURP)->first();
            $horas = Horas::where('Id_Solicitud', $solicitudhoras->Id_Solicitud)->where('Fecha', $request->Fecha)->get();
        } else {
            $solicitudhoras = SolicitudHoras::where('CURP_Alumno',Auth::user()->CURP)->first();
            $horas = Horas::where('Id_Solicitud', $solicitudhoras->Id_Solicitud)->get();
        }
        return view ('Horas.index',['horas'=> $horas]);
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
            $solicitud =  SolicitudHoras::where('CURP_Alumno', Auth::user()->CURP)->first();
            $hora->Id_Solicitud = $solicitud->Id_Solicitud;
            $hora->Id_Horas = strtoupper(substr($hora->Id_Solicitud,0,4) . $hora->Fecha_Solicitud . $hora->Hora_Entrada . $hora->Hora_Salida);

            $hora->save();
            session()->flash("Exito","Horas practicas registradas");
            return redirect('/horas');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","Tus Horas practicas ya han sido registradas");
            return redirect('/horas');
        }
    }

}
