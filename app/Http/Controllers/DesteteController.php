<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destete;
use App\Parto;

class DesteteController extends Controller{ 

    public function create()
    {
        $partos = Parto::all();
    	return view('Destete.create',['partos' => $partos]);
    }

    public function edit($id_destete)
    {
        $destete = Destete::all();
        $destete = Destete::where('Id_Destete', $id_destete)->first();
    	
        return view('Destete.edit',[
            'destete' => $destete ]);
    }

    public function update(Request $request, $id_destete)
    {
        $destete = Destete::where('Id_Destete', $id_destete)->first();
        $destete->Numero_Destetados = $request->input('Numero_Destetados');
        $destete->Peso_Destete = $request->input('Peso_Destete');
        $destete->save();

        return redirect('/destete');
    }

    public function delete($id_destete)
    {   
        try{

        $destete = Destete::where('Id_Destete', $id_destete)->first();
        $destete->delete();
        session()->flash("Exito","Destete eliminado");
        return redirect()->back();   
        }catch (\Illuminate\Database\QueryException $e){
        session()->flash("Error","No es posible eliminar ese destete");
        return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $destete = new Destete;
        $destete->Id_Parto = $request->input('Id_Parto');
        $destete->Fecha_Destete = $request->input('Fecha_Destete');
        $destete->Id_Destete = $destete->Id_Parto .  $destete->Fecha_Destete; 
        $destete->Numero_Destetados = $request->input('Numero_Destetados');
        $destete->Peso_Destete = $request->input('Peso_Destete');
        $destete->save();
        return redirect('/destete');
    }

    public function index(Request $request)
    {
        if($request->Id_Parto)
        {   
            $destetes = Destete::where('Id_Parto', $request->Id_Parto)->get();
        } else {
            $destetes = Destete::all();
        }
        return view ('Destete.index',['destetes'=> $destetes]);
    }

    public function obtener_vivos (Request $request) {
        $opciones = Parto::where('Id_Parto', $request->numero)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Numero_Vivos;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];

        return response()->json($respuesta);
    }

    public function obtener_peso (Request $request) {
        $opciones = Parto::where('Id_Parto', $request->peso)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Peso_Nacer;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];

        return response()->json($respuesta);
    }          
}
