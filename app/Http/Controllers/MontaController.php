<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Monta;
use App\Productora;
use App\Cemental;
use App\Raza;

class MontaController extends Controller
{
    public function create()    
    {   
        $razas = Raza::all();
        $cementales = Cemental::all();
        $productoras = Productora::all();
     
        return view('Monta/create',[
            'cementales' => $cementales,
            'productoras' => $productoras,
            'razas' => $razas
        ]);   
    }

    public function edit($id_monta)
    {
        $montas = Monta::all();
        $conejos = Conejo::all();

        $monta = Monta::where('Id_Monta', $id_monta)->first();

        return view('Monta/edit', [
            'monta' => $montas,
            'conejos' => $conejos,
            'monta' => $monta
        ]);
    }

    public function update(Request $request, $id_monta)
    {
        $monta = Monta::where('Id_Monta', $id_monta)->first();
        $monta->Fecha_Diagnostico = $request->input('Fecha_Diagnostico');
        $monta->Resultado_Diagnostico = $request->input('Resultado_Diagnostico');
        $monta->Fecha_Parto = $request->input('Fecha_Parto');
        $monta->save();

        return redirect('/monta');         
    }

    public function delete($id_monta)
    {
        $monta = Monta::where('Id_Monta', $id_monta)->first();
        $monta->delete();
        return redirect()->back();
    }

    public function store (Request $request)
    {
        $monta = new Monta;
        $monta->Fecha_Monta = $request->input('Fecha_Monta');
        $monta->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
        $monta->Id_Conejo_Macho = $request->input('Id_Conejo_Macho');    
        $monta->Fecha_Monta = $request->input('Fecha_Monta');
        $monta->Id_Monta = $monta->Id_Conejo_Hembra . $monta->Fecha_Monta;
        $monta->save();
        return redirect('/monta');
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Hembra)
        {
            $montas = Monta::where('Id_Conejo_Hembra', $request->Id_Conejo_Hembra)->get();
        } else {
            $montas = Monta::all();
        }
        return view('Monta.index', ['montas' => $montas]);
    }  

    public function obtener_semental(Request $request) {
        $opciones = Cemental::where('Id_Raza', $request->raza)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Id_Conejo_Macho;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];

        return response()->json($respuesta);

    }  
}

