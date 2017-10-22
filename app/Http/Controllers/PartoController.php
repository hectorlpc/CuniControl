<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Parto;
use App\Monta;

class PartoController extends Controller
{
    public function create(){
        $conejos = Conejo::all();
        $fecha_monta = Monta::all();
        return view('Parto/create',['conejos' => $conejos,'fecha_monta' =>$fecha_monta]);
    }

     public function edit($id_parto)
    {
    	return view('Parto/edit');
    }

    public function delete($id_parto)
    {
    	return redirect()->back();
    }
    public function store(Request $request){
        $parto = new Parto;
        $parto->Fecha_Parto = $request->input('Fecha_Parto');
        $parto->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
        $parto->Fecha_Monta = $request->input('Fecha_Monta');
        $parto->Numero_Vivos = $request->input('Numero_Vivos');
        $parto->Numero_Muertos = $request->input('Numero_Muertos');
        $parto->Peso_Nacer = $request->input('Peso_Nacer');
        $parto->Id_Parto = $parto->Fecha_Parto . $parto->Id_Conejo_Hembra;
        $parto->save();
        return redirect('/home');
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Hembra)
        {
            $partos = Parto::where('Id_Conejo_Hembra', $request->Id_Conejo_Hembra)->get();
        } else {
            $partos = Parto::all();
        }
        return view('Parto.index', ['partos' => $partos]);
    }
}
