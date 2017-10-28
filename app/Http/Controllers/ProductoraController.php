<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productora;
use App\Conejo;

class ProductoraController extends Controller{
    //
     public function create()
     {
        $conejos = Conejo::all();
    	return view('ConejaProductora/create',['conejos' => $conejos]);
    }

    public function edit($id_productora)
    {
        $productora = Productora::all();
        $productora = Productora::where('Id_Productora', $id_productora)->first();

    	return view('/ConejaProductora/edit',['productora' => $productora]);
    }

    public function update(Request $request, $id_productora)
    {
        $productora = Productora::where('id_Productora', $id_productora)->first();
        $productora->Numero_Conejo = $request->input('Numero_Conejo');
        $productora->save();
        return redirect('/productora');
    }


    public function delete($id_productora)
    {   
        $productora = Productora::where('id_Productora', $id_productora)->first();
        $productora->delete();

    	return redirect()->back();
    }

    public function store(Request $request)
    {
    	$productora = new Productora;
        $productora->Id_Raza = $request->input('Id_Conejo_Hembra')[0];
        $productora->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
        $productora->Numero_Conejo = $request->input('Numero_Conejo');
    	$productora->save();
        return redirect('/productora');
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Hembra)
        {   
            $productoras = Productora::where('Id_Conejo_Hembra', $request->Id_Conejo_Hembra)->get();
        } else {
            $productoras = Productora::all();
        }
        return view ('ConejaProductora.index',['productoras'=> $productoras]);
    }
}
