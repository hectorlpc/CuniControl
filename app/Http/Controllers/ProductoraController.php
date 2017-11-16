<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productora;
use App\Conejo;
use App\Desecho;

class ProductoraController extends Controller{

    public function create(){
        $conejos = Conejo::all();
    	return view('ConejaProductora/create',['conejos' => $conejos]);
    }

    public function edit($id_productora){
        $productora = Productora::all();
        $productora = Productora::where('Id_Conejo_Hembra', $id_productora)->first();
    	return view('/ConejaProductora/edit',['productora' => $productora]);
    }

    public function update(Request $request, $id_productora)
    {
      try{
        $productora = Productora::where('Id_Conejo_Hembra', $id_productora)->first();

        $productora->Status = $request->input('Status');
        if ($productora->Status == 'Desecho') {
            $conejo = Conejo::where('Id_Conejo', $id_productora)->first();
            $productora->Status = 'Inactivo';
            $conejo->Desecho = 'Si';
            $conejo->save();
            $productora->save();            

            $desecho = new Desecho;
            $desecho->Id_Conejo_Desecho = $request->input('Id_Conejo_Hembra');
            $desecho->Id_Raza = $request->input('Id_Conejo_Hembra')[0];
            $desecho->Procedencia = 'Productora';
            $desecho->save();
        } else if ($productora->Status == 'Muerto') {
            $conejo = Conejo::where('Id_Conejo', $id_productora)->first();
            $conejo->Status = $request->input('Status');
            $conejo->Fecha_Muerte = $request->input('Fecha_Muerte');
            $conejo->Desecho = 'Si';

            $desecho = Desecho::where('Id_Conejo_Desecho', $id_productora)->first();
            if(is_null($desecho)) {
                
            }   else {
                $desecho->delete();
            }
            $conejo->save();
            $productora->save();     
        }   
        return redirect('/productora');
      }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar Coneja productora");
          return redirect('/productora');
      }
    }

    public function delete($id_productora){
        try{
            $productora = Productora::where('id_Productora', $id_productora)->first();
            $productora->delete();
            session()->flash("Exito","Coneja Productora eliminada");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar esa Coneja Productora");
            return redirect()->back();
        }
    }

    public function store(Request $request){
        try{
            $productora = new Productora;
            $productora->Id_Raza = $request->input('Id_Conejo_Hembra')[0];
            $productora->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
            $productora->Numero_Conejo = $request->input('Numero_Conejo');
            $productora->Fecha_Activo = $request->input('Fecha_Activo');
            $productora->Status = 'Activo';

            // $productoras = Productora::all();
            // for ($i=0; $i < 50; $i++) { 
            //     if ($productora->Numero_Conejo != $productoras[$i]->Numero_Conejo) {
            //         dd($productoras);
            //         $productora->Numero_Conejo = $request->input('Numero_Conejo');
            //     } else {
            //         return redirect()->back();
            //         session()->flash('Error', 'Numero de productora duplicado');
            //     }
            // }

            $productora->save();

            $conejo = Conejo::where('Id_Conejo', $request->input('Id_Conejo_Hembra'))->first();
            $conejo->Desecho = 'No';
            $conejo->Engorda = 'No';
            $conejo->Productora = 'Si';
            $conejo->Semental = 'No';
            $conejo->save();

            session()->flash("Exito","Coneja Productora Registrada");

            return redirect('/productora');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, Coneja productora existente");
            return redirect('/productora');
        }
    }

    public function index(Request $request){
        if($request->Id_Conejo_Hembra){
            $productoras = Productora::where('Id_Conejo_Hembra', $request->Id_Conejo_Hembra)->get();
        } else {
            $productoras = Productora::all();
        }
        return view ('ConejaProductora.index',['productoras'=> $productoras]);
    }
}
