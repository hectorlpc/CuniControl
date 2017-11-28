<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Donacion;
use App\Parto;


class DonacionController extends Controller{
    public function create()
    {
        $partos = Parto::Select('Parto.Id_Parto')
            ->leftJoin('Destete','Parto.Id_Parto','=','Destete.Id_Parto')
            ->whereNull('Destete.Id_Parto')
            ->get();
    	return view('Donacion.create',['partos' => $partos]);
    }

    public function index(Request $request)
    {
        if ($request->input('Id_Conejo_Hembra')) {
            $donaciones = Donacion::where('Id_Donacion', 'LIKE', $request->input('Id_Conejo_Hembra') . '%')->get();
        } else {
            $donaciones = Donacion::all();
        }

        return view('Donacion.index', ['donaciones'=> $donaciones]);
    }

    public function store(Request $request){
        try{
            $donador = Parto::find($request->input('Id_Parto_Donante'));
            $donador->Numero_Vivos;
            $cantidad = $request->input('Donados');
            if($cantidad <= $donador->Numero_Vivos) {
                $donacion = new Donacion;
                $donacion->Fecha = $request->input('Fecha');
                $donacion->Id_Parto_Donante = $request->input('Id_Parto_Donante');
                $donacion->Id_Parto_Donatorio = $request->input('Id_Parto_Donatorio');
                $donacion->Id_Donacion = $donacion->Id_Parto_Donante . $donacion->Id_Parto_Donatorio;
                $donacion->Donados = $request->input('Donados');
                $donacion->Notas = $request->input('Notas');
                $donacion->Creador = Auth::user()->CURP;
                $donacion->save();
                session()->flash("Exito","Donación registrada");
                return redirect('/donacion');                
            } else {
                return redirect('donacion/create');
            }
        }catch (\Illuminate\Database\QueryException $e){
             session()->flash("Error","No es posible registrar, donación existente");
             return redirect('/donacion');
        }
    }

    public function delete($id_donacion)
    {
        try{

            $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();
            $donacion->delete();
            session()->flash("Exito","Donación eliminada");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar esa Donación");
            return redirect()->back();
    }
}

    public function edit($id_donacion)
    {
        $donaciones = Donacion::all();
        $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();

        return view('Donacion.edit', ['donacion' => $donacion]);
    }

    public function update(Request $request, $id_donacion)
    {
        $donador = substr($id_donacion,0,30);
        //dd($donador);
        try{
            $donador = Parto::where('Id_Parto',$donador)->first();
            $donador->Numero_Vivos;
            $cantidad = $request->input('Donados');
            if($cantidad <= $donador->Numero_Vivos) {
                $donacion = Donacion::where('Id_Donacion',$id_donacion)->first();
                $donacion->Donados = $cantidad;
                $donacion->Notas = $request->input('Notas');
                $donacion->Modificador = Auth::user()->CURP;
                $donacion->save();
                session()->flash("Exito","Donación actualizada");
                return redirect('/donacion');                
            } else {
                return redirect('donacion/');
                session()->flash("Error","No puede donar más conejos de los que existen");
            }
        }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar esa Donación");
          return redirect('/donacion');
        }
    }

    public function obtener_receptores (Request $request) {
        $opciones = Parto::Select('Parto.Id_Parto')
            ->leftJoin('Destete','Parto.Id_Parto','=','Destete.Id_Parto')
            ->whereNull('Destete.Id_Parto')
            ->get();
        
        $i = 0;
        $arrayOptions = [];
        foreach ($opciones as $opcion) {
            $arrayOptions[$i] =[
                'Id_Parto' => $opcion->Id_Parto
            ];
            $i++;
        }
        $respuesta = ['opciones' => $arrayOptions];

        return response()->json($respuesta);
    }
}
