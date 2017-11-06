<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raza;

class RazaController extends Controller
{
    //
        public function create()
    {
    	return view('Raza.create');
    }

    public function edit($id_raza)
    {
        $raza = Raza::where('Id_Raza', $id_raza)->first();

        return view('Raza/edit',['raza' => $raza]);        
    }

    public function update(Request $request, $id_raza)
    {
        $raza = Raza::where('Id_Raza', $id_raza)->first();
        $raza->Nombre_Raza = $request->input('Nombre_Raza');
        $raza->Descripcion_Raza = $request->input('Descripcion_Raza');
        $raza->save();

        return redirect('/raza');
    }

    public function delete($id_raza)
    {   
        $raza = Raza::where('Id_Raza', $id_raza)->first();
        $raza->delete();
    	return redirect()->back();
    }

    public function store(Request $request)
    {
        $raza = new Raza;
        $raza->Nombre_Raza = $request->input('Nombre_Raza');
        $raza->Id_Raza = strtoupper(substr($request->input('Nombre_Raza'),0,3) . substr($request->input('Nombre_Raza'),-2));
        $raza->Descripcion_Raza = $request->input('Descripcion_Raza');
        $raza->save();
        return redirect('/raza');
    }

    public function index(Request $request)
    {
        if($request->Id_Raza)
        {   
            $razas = Raza::where('Nombre_Raza', $request->Id_Raza)->get();
        } else {
            $razas = Raza::all();
        }
        return view ('Raza.index',['razas'=> $razas]);
    }
}
