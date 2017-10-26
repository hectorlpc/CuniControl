<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Monta;

class MontaController extends Controller
{
    public function create()    
    {
        $conejos = Conejo::all();
        return view('Monta/create',['conejos' => $conejos]);
        
    }

    public function edit($id_monta)
    {
        return view('Monta/edit');
    }

    public function delete($id_monta)
    {
        $monta = Monta::where('Id_Monta', $id_monta)->first();
        //dd(\DB::getQueryLog());
        //dd($monta);
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
        if($request->Fecha_Monta)
        {
            $montas = Monta::where('Fecha_Monta', $request->Fecha_Monta)->get();
        } else {
            $montas = Monta::all();
        }
        return view('Monta.index', ['montas' => $montas]);
    }    
}

