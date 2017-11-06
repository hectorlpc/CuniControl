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
        $area = Area::where('Id_Area', $id_area)->first();
        $area->Nombre_Area = $request->input('Nombre_Area');
        $area->Descripcion_Area = $request->input('Descripcion_Area');
        $area->save();

        return redirect('/area');
    }

    public function delete($id_area)
    {   
        $area = Area::where('Id_Area', $id_area)->first();
        $area->delete();
    	return redirect()->back();
    }

    public function store(Request $request)
    {
        $area = new Area;
        $area->Nombre_Area = $request->input('Nombre_Area');
        $area->Id_Area = strtoupper(substr($request->input('Nombre_Area'),0,3) . substr($request->input('Nombre_Area'),-2));
        $area->Descripcion_Area = $request->input('Descripcion_Area');
        $area->save();
        return redirect('/area');
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
