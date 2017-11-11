<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Adquisicion;

class AdquisicionController extends Controller
{
    //
     public function create()
    {
    	return view('Adquisicion.create');
    }

    public function edit($id_adquisicion)
    {
        $adquisicion = Adquisicion::where('Id_Adquisicion', $id_adquisicion)->first();

        return view('Adquisicion/edit',['adquisicion' => $adquisicion]);        
    }

    public function update(Request $request, $id_adquisicion)
    {
        $adquisicion = Adquisicion::where('Id_Adquisicion', $id_adquisicion)->first();
        $adquisicion->Nombre_Adquisicion = $request->input('Nombre_Adquisicion');
        $adquisicion->Descripcion_Adquisicion = $request->input('Descripcion_Adquisicion');
        $adquisicion->save();

        return redirect('/adquisicion');
    }

    public function delete($id_adquisicion)
    {   
        try{
        $adquisicion = Adquisicion::where('Id_Adquisicion', $id_adquisicion)->first();
        $adquisicion->delete();
        session()->flash("Exito","Tipo de adquisicion eliminada");
        return redirect()->back();   
        }catch (\Illuminate\Database\QueryException $e){
        
        session()->flash("Error","No es posible eliminar este tipo de adquisición");
        return redirect()->back();
    }
    }

    public function store(Request $request)
    {
        try{

            $adquisicion = new Adquisicion;
            $adquisicion->Nombre_Adquisicion = $request->input('Nombre_Adquisicion');
            $adquisicion->Id_Adquisicion = strtoupper(substr($request->input('Nombre_Adquisicion'),0,3) . substr($request->input('Nombre_Adquisicion'),-3));
            $adquisicion->Descripcion_Adquisicion = $request->input('Descripcion_Adquisicion');
            $adquisicion->save();
            session()->flash("Exito","Tipo de adquisición creado");
            return redirect('/adquisicion');   
        }catch (\Illuminate\Database\QueryException $e){
            
            session()->flash("Error","No es posible crear, tipo de adquisición existente");
            return redirect('/adquisicion');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Adquisicion)
        {   
            $adquisiciones = Adquisicion::where('Id_Adquisicion', $request->Id_Adquisicion)->get();
        } else {
            $adquisiciones = Adquisicion::all();
        }
        return view ('Adquisicion.index',['adquisiciones'=> $adquisiciones]);
    }
}
