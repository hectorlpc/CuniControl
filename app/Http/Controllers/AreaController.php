<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    //
       public function create()
    {
    	return view('Area.create');
    }

    public function edit($id_area)
    {
        $area = Area::where('Id_Area', $id_area)->first();

        return view('Area/edit',['area' => $area]);
    }

    public function update(Request $request, $id_area)
    {
      try{
        $area = Area::where('Id_Area', $id_area)->first();
        $area->Nombre_Area = $request->input('Nombre_Area');
        $area->Descripcion_Area = $request->input('Descripcion_Area');
        $area->save();
        return redirect('/area');
      }catch(\Illuminate\Database\QueryException $e){
        session()->flash("Error","No es posible Modificar esta Área");
        return redirect('/area');
      }
    }

    public function delete($id_area)
    {
        try{

        $area = Area::where('Id_Area', $id_area)->first();
        $area->delete();
        session()->flash("Exito","Área eliminada");
        return redirect()->back();
        }catch(\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar esta Área");
        return redirect()->back();
     }
    }

    public function store(Request $request)
    {
        try{
            $area = new Area;
            $area->Nombre_Area = $request->input('Nombre_Area');
            $area->Id_Area = strtoupper(substr($request->input('Nombre_Area'),0,3) . substr($request->input('Nombre_Area'),-2));
            $area->Descripcion_Area = $request->input('Descripcion_Area');
            $area->save();
            session()->flash("Exito","Area de destino creada");
            return redirect('/area');
        }catch (\Illuminate\Database\QueryException $e){

            session()->flash("Error","No es posible crear,área de destino existente");
            return redirect('/area');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Area)
        {
            $areas = Area::where('Nombre_Area', $request->Id_Area)->get();
        } else {
            $areas = Area::all();
        }
        return view ('Area.index',['areas'=> $areas]);
    }
}
