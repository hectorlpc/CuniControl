<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productora;
use App\Conejo;
use App\Desecho;

class ProductoraController extends Controller{

    public function create(){
        $conejos = Conejo::Select('Conejo.Id_Conejo')
            ->leftJoin('Coneja_Productora','Conejo.Id_Conejo','=','Coneja_Productora.Id_Conejo_Hembra')
            ->leftJoin('Conejo_Engorda','Conejo.Id_Conejo','=','Conejo_Engorda.Id_Conejo_Engorda')
            ->leftJoin('Transferencia_Conejo','Conejo.Id_Conejo','=','Transferencia_Conejo.Id_Conejo')            
            ->where('Conejo.Genero','Hembra')
            ->whereNull('Coneja_Productora.Id_Conejo_Hembra')
            ->whereNull('Conejo_Engorda.Id_Conejo_Engorda')
            ->whereNull('Transferencia_Conejo.Id_Conejo')
            ->get();  

    	return view('ConejaProductora/create',['conejos' => $conejos]);
    }

    public function edit($id_productora){
        $productora = Productora::all();
        $productora = Productora::where('Id_Conejo_Hembra', $id_productora)->first();
    	return view('ConejaProductora/edit',['productora' => $productora]);
    }

    public function update(Request $request, $id_productora)
    {
      try{
        $productora = Productora::where('Id_Conejo_Hembra', $id_productora)->first();

        $productora->Status = $request->input('Status');
        if ($productora->Status == 'Desecho') {
            $productora->Status = 'Desecho';
            $productora->save();
        } else if ($productora->Status == 'Muerto') {
            $conejo = Conejo::where('Id_Conejo', $id_productora)->first();
            $conejo->Status = $request->input('Status');
            $conejo->Fecha_Muerte = $request->input('Fecha_Muerte');
            $productora->Status = 'Baja';
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
            $productora = Productora::where('Id_Conejo_Hembra', $id_productora)->first();
            $productora->delete();
            session()->flash("Exito","Coneja Productora eliminada");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar esa Coneja Productora");
            return redirect()->back();
        }
    }

    public function store(Request $request) {
        try{
            $raza = $request->input('Id_Conejo_Hembra')[0];
            $numero = $request->input('Numero_Conejo');
            $encontrar_numero = Productora::Select('Numero_Conejo')
                ->where('Id_Raza', $raza)
                ->where('Numero_Conejo', $numero)
                ->where('Status','Activo')
                ->first();
            if (is_null($encontrar_numero)) {
                $productora = new Productora;
                $productora->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
                $productora->Id_Raza = $raza;
                $productora->Numero_Conejo = $numero;
                $productora->Fecha_Activo = $request->input('Fecha_Activo');
                $productora->Status = 'Activo';
                $productora->save();
                session()->flash("Exito","Coneja Productora Registrada");
                return redirect('/productora');
            }
            session()->flash("Error","No es posible registrar productora, el número está ocupado");
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
