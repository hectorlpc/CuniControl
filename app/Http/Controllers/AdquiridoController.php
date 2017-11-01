<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adquirido;
use App\Adquisicion;
use App\Raza;
use App\Conejo;

class AdquiridoController extends Controller{
    //
    public function create()
    {
        $adquiridos = Adquirido::all();
        $adquisiciones = Adquisicion::all();
        $razas = Raza::all();

    	return view('ConejoAdquirido.create',[
            'adquisiciones' => $adquisiciones,
            'adquiridos' => $adquiridos,
            'razas' => $razas
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
        $conejoAdquirido = Adquirido::where('Id_Adquirido', $id_adquirido)->first();
        $conejoAdquirido->Id_Adquisicion = $request->input('Id_Adquisicion');
        $conejoAdquirido->Fecha_Adquisicion = $request->input('Fecha_Adquisicion');
        $conejoAdquirido->save();

        return redirect('/adquirido');
    }

    public function delete($id_adquirido)
    {   
        $conejoAdquirido = Adquirido::where('Id_Adquirido', $id_adquirido)->first();
        $conejoAdquirido->delete();
    	return redirect()->back();
    }

    public function store(Request $request)
    {
        $conejoAdquirido = new Adquirido;
        $conejo = new Conejo;
        $conejo->Tatuaje_Derecho = $request->input('Tatuaje_Derecho');
        $conejo->Tatuaje_Izquierdo = $request->input('Tatuaje_Izquierdo');
        $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
        $conejo->Id_Raza = $request->input('Id_Raza');
        $conejo->Fecha_Nacimiento = $request->input('Fecha_Adquisicion');
        $conejo->Genero = $request->input('Genero');
        $conejo->Status = $request->input('Status');
        $conejo->save();
        $conejoAdquirido->Id_Conejo = $conejo->Id_Conejo;
        $conejoAdquirido->Id_Adquisicion = $request->input('Id_Adquisicion');
        $conejoAdquirido->Fecha_Adquisicion = $conejo->Fecha_Nacimiento;
        $conejoAdquirido->Id_Adquirido = $conejoAdquirido->Id_Conejo . $conejoAdquirido->Id_Adquisicion;
        $conejoAdquirido->save();
        return redirect('/adquirido');
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
