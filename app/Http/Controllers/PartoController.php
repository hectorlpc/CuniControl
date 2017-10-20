<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Parto;

class PartoController extends Controller
{
    public function create(Request $request){

        $conejos = Conejo::all();
        $parto = new Parto;
        $parto->Fecha_Parto = $request->input('Fecha_Parto');
        $parto->Id_Conejo_Hembra = $request->input('Tatuaje_Hembra');
        $parto->Id_Parto = $parto->Id_Conejo_Hembra . $parto->Fecha_Parto; 
        $parto->Fecha_Monta = $request->input('Fecha_Monta');
        $parto->Numero_Vivos = $request->input('Vivos');
        $parto->Numero_Muertos = $request->input('Muertos');
        $parto->Peso_Nacer = $request->input('Peso_Nacer');
        $parto->save();
    	return Parto::create();
    }

     public function edit($id_parto)
    {
    	return view('Parto/edit');
    }

    public function delete($id_parto)
    {
    	return redirect()->back();
    }
}
