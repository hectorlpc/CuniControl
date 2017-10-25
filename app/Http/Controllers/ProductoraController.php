<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConejaProductora;
use App\Conejo;

class ProductoraController extends Controller{
    //
     public function create(){
        $conejos = Conejo::all();
    	return view('ConejaProductora.create',['conejos' => $conejos]);
    }

    public function edit($id_productora){
    	return view('ConejaProductora.edit');
    }

    public function delete($id_productora){   
        $productora = ConejaProductora::where('Id_Conejo',$id_productora)->first();
        $productora->delete();
    	return redirect()->back();
    }

    public function store(Request $request){
    	$productora = new ConejaProductora;
        $productora->Id_Raza = $request->input('Id_Conejo')[0];
        $productora->Id_Conejo = $request->input('Id_Conejo');
        $productora->Numero_Conejo = $request->input('Numero_Conejo');
    	$productora->save();

        
        //dd($productora);

        return redirect('/productora');
    }

    public function index(Request $request){
        if($request->Id_Productora)
        {   
            $productoras = ConejaProductora::where('Id_Productora', $request->Id_Conejo)->get();
        } else {
            $productoras = ConejaProductora::all();
        }
        return view ('ConejaProductora.index',['productoras'=> $productoras]);
    }
}
