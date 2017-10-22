<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destete;
use App\Parto;

class DesteteController extends Controller{    
    public function create(){
        $partos = Parto::all();
    	return view('Destete.create',['partos' => $partos]);
    }

    public function edit($id_destete){
    	return view('Destete.edit');
    }

        public function delete($id_destete){
    	return redirect()->back();
    }
    public function store(Request $request){
        $destete = new Destete;
        $destete->Id_Parto = $request->input('Id_Parto');
        $destete->Fecha_Destete = $request->input('Fecha_Destete');
        $destete->Id_Destete = $destete->Id_Parto .  $destete->Fecha_Destete; 
        $destete->Numero_Destetados = $request->input('Numero_Destetados');
        $destete->Peso_Destete = $request->input('Peso_Destete');
        $destete->save();
        return redirect('/home');
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
}
