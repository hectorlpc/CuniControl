<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Donacion;
use App\Parto;


class DonacionController extends Controller{
    //
    public function create()
    {
        $partos = Parto::all();
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
            $donacion = new Donacion;
            $donacion->Fecha = $request->input('Fecha');
            $donacion->Id_Parto_Donante = $request->input('Id_Parto_Donante');
            $donacion->Id_Parto_Donatorio = $request->input('Id_Parto_Donatorio');
            $donacion->Id_Donacion = $donacion->Id_Parto_Donante . $donacion->Id_Parto_Donatorio;
            $donacion->Cantidad_Gazapos = $request->input('Cantidad_Gazapos');
            $donacion->Creador = Auth::user()->CURP;

            $parto = Parto::where('Id_Parto', $request->input('Id_Parto_Donante'))->first();
            if($donacion->Cantidad_Gazapos <= $parto->Numero_Vivos) {
                $donacion->save();
            } else {
                return redirect()->back();
            }
             session()->flash("Exito","Donación registrada");
             return redirect('/donacion');
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

        return view('donacion/edit', ['donacion' => $donacion]);
    }

    public function update(Request $request, $id_donacion)
    {
        try{
          $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();
          $donacion->Cantidad_Gazapos = $request->input('Cantidad_Gazapos');
          $donacion->Modificador = Auth::user()->CURP;
          $donacion->save();
          return redirect('/donacion');
        }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar esa Donación");
          return redirect('/donacion');
        }
    }

    public function obtener_receptores (Request $request) {
        $opciones = Parto::where('Activado', '=', '0')->where('Numero_Vivos', '>', '0')->get();
        $i = 0;
        $arrayOptions = [];
        foreach ($opciones as $opcion) {
            $arrayOptions[$i] =[
                'Id_Parto' => $opcion->Id_Parto,
                'Id_Conejo_Hembra' => $opcion->monta->Id_Conejo_Hembra
            ];
            $i++;
        }
        $respuesta = ['opciones' => $arrayOptions];

        return response()->json($respuesta);
    }
}
