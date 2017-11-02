<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfermedad;

class EnfermedadController extends Controller
{
    //
      public function create()
    {
    	return view('Enfermedad.create');
    }

    public function edit($id_enfermedad)
    {
        $enfermedad = Enfermedad::where('Id_Enfermedad', $id_enfermedad)->first();

        return view('Enfermedad/edit',['enfermedad' => $enfermedad]);        
    }

    public function update(Request $request, $id_enfermedad)
    {
        $enfermedad = Enfermedad::where('Id_Enfermedad', $id_enfermedad)->first();
        $enfermedad->Nombre_Enfermedad = $request->input('Nombre_Enfermedad');
        $enfermedad->Descripcion_Enfermedad = $request->input('Descripcion_Enfermedad');
        $enfermedad->save();

        return redirect('/enfermedad');
    }

    public function delete($id_enfermedad)
    {   
        $enfermedad = Enfermedad::where('Id_Enfermedad', $id_enfermedad)->first();
        $enfermedad->delete();
    	return redirect()->back();
    }

    public function store(Request $request)
    {
        $enfermedad = new Enfermedad;
        $enfermedad->Nombre_Enfermedad = $request->input('Nombre_Enfermedad');
        $enfermedad->Id_Enfermedad = strtoupper(substr($request->input('Nombre_Enfermedad'),0,3) . substr($request->input('Nombre_Enfermedad'),-3));
        $enfermedad->Descripcion_Enfermedad = $request->input('Descripcion_Enfermedad');
        $enfermedad->save();
        return redirect('/enfermedad');
    }

    public function index(Request $request)
    {
        if($request->Id_Enfermedad)
        {   
            $enfermedades = Enfermedad::where('Nombre_Enfermedad', $request->Id_Enfermedad)->get();
        } else {
            $enfermedades = Enfermedad::all();
        }
        return view ('Enfermedad.index',['enfermedades'=> $enfermedades]);
    }
}
