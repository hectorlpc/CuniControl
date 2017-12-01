<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adquirido;
use App\Adquisicion;
use App\Raza;
use App\Conejo;
use App\Jaula;

class AdquiridoController extends Controller{
    //
    public function create()
    {
        $adquiridos = Adquirido::all();
        $adquisiciones = Adquisicion::all();
        $razas = Raza::all();
        $jaulas = Jaula::all();

    	return view('ConejoAdquirido.create',[
            'adquisiciones' => $adquisiciones,
            'adquiridos' => $adquiridos,
            'razas' => $razas,
            'jaulas' => $jaulas
            ]);
    }

    public function edit($id_adquirido)
    {
        $adquiridos = Adquirido::all();
        $adquisiciones = Adquisicion::all();
        $conejoAdquirido = Adquirido::where('Id_Adquirido', $id_adquirido)->first();
        $conejoA = Conejo::where('Id_Conejo',$conejoAdquirido->Id_Conejo)->first();
        $razas = Raza::all();

        return view('ConejoAdquirido.edit',[
            'conejoAdquirido' => $conejoAdquirido,
            'adquisiciones' => $adquisiciones,
            'adquiridos' => $adquiridos,
            'conejoA' => $conejoA,
            'razas' => $razas
             ]);
    }

    public function update(Request $request, $id_adquirido)
    {
      try{
        $conejoAdquirido = Adquirido::where('Id_Adquirido', $id_adquirido)->first();
        $conejoAdquirido->Id_Adquisicion = $request->input('Id_Adquisicion');
        $conejoAdquirido->Fecha_Adquisicion = $request->input('Fecha_Adquisicion');
        $conejoAdquirido->save();
        return redirect('/adquirido');
      }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar");
          return redirect('/adquirido');
      }
    }

    public function delete($id_adquirido)
    {
        try{
        $conejoAdquirido = Adquirido::where('Id_Adquirido', $id_adquirido)->first();
        $conejoAdquirido->delete();
        session()->flash("Exito","Conejo eliminado");
        return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar este conejo");
        return redirect()->back();
    }
    }

    public function store(Request $request)
    {
        try{
            $conejoAdquirido = new Adquirido;
            $conejo = new Conejo;
            $conejo->Tatuaje_Derecho = $request->input('Tatuaje_Derecho');
            $conejo->Tatuaje_Izquierdo = $request->input('Tatuaje_Izquierdo');
            $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
            $conejo->Id_Raza = $request->input('Id_Raza');
            $conejo->Fecha_Nacimiento = $request->input('Fecha_Adquisicion');
            $conejo->Genero = $request->input('Genero');
            $conejo->Status = 'Vivo';
            $conejo->Id_Jaula = $request->input('Id_Jaula'); 
            $conejo->save();
            $conejoAdquirido->Id_Conejo = $conejo->Id_Conejo;
            $conejoAdquirido->Id_Adquisicion = $request->input('Id_Adquisicion');
            $conejoAdquirido->Fecha_Adquisicion = $conejo->Fecha_Nacimiento;
            $conejoAdquirido->Id_Adquirido = $conejoAdquirido->Id_Conejo . $conejoAdquirido->Id_Adquisicion;
            $conejoAdquirido->save();
            session()->flash("Exito","Conejo Adquirido creado");
            return redirect('/adquirido');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, conejo con tatuajes iguales existente");
            return redirect('/adquirido');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo)
        {
            $adquiridos = Adquirido::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
            $adquiridos = Adquirido::all();
        }
        return view ('ConejoAdquirido.index',['adquiridos'=> $adquiridos]);
    }

}
