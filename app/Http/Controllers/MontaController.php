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
        return redirect()->back();
    }
    public function store (Request $request)
    {
        Monta::create($request->all());
        return redirect('/home');
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

