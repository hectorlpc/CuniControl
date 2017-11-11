<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Enfermedad;
use App\Medicamento;
use App\Enfermo;

use Illuminate\Support\Facades\DB;

class EnfermoController extends Controller

{    
    public function create()
    {
        $medicamentos = Medicamento::all();
        $enfermedades = Enfermedad::all();
        $conejos = Conejo::all();

        return view('Enfermo/create', [
            'conejos' => $conejos,
            'enfermedades' => $enfermedades,
            'medicamentos' => $medicamentos
        ]);
    }
    public function store(Request $request){
        try{
            $enfermo = new Enfermo;
            $enfermo->Id_Conejo = $request->input('Id_Conejo');
            $enfermo->Fecha_Inicio = $request->input('Fecha_Inicio');
            $enfermo->Fecha_Fin = $request->input('Fecha_Fin');    
            $enfermo->Id_Conejo_Enfermo = $enfermo->Id_Conejo . $enfermo->Fecha_Inicio;
            $enfermo->save();
            session()->flash("Exito","Conejo Enfermo registrado");
            $enfermo->enfermedades()->attach($request->input('Id_Enfermedad'), 
                ['Id_Medicamento' => $request->input('Id_Medicamento')]);
            return redirect('/enfermo');    
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible registrar este enfermo");
            return redirect('/enfermo');
        }
        
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo)
        {
            $enfermos = Enfermo::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
            $enfermos = Enfermo::all();
        }

        return view('Enfermo.index', ['enfermos' => $enfermos]);
    }

    public function edit($id_conejo)
    {
        $medicamentos = Medicamento::all();
        $enfermedades = Enfermedad::all();
        $conejos = Conejo::all();

        $enfermo = Enfermo::where('Id_Conejo', $id_conejo)->first();
        $tratamiento = $enfermo->tratamientos()->last();

        return view('Enfermo/edit', [
            'conejos' => $conejos,
            'enfermedades' => $enfermedades,
            'medicamentos' => $medicamentos,
            'enfermo' => $enfermo,
            'tratamiento' => $tratamiento
        ]);        
    }

    public function delete($id_conejo)
    {
        try{
            $enfermo = Enfermo::where('Id_Conejo', $id_conejo)->first();
            $enfermo->delete();
            session()->flash("Exito","Conejo enfermo eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar este conejo enfermo");
            return redirect()->back();
        }
        
    }

    public function update(Request $request, $id_conejo)
    {
        $enfermo = Enfermo::where('Id_Conejo', $id_conejo)->first();
        $enfermo->Fecha_Fin = $request->input('Fecha_Fin');
        $enfermo->Id_Enfermedad = $request->input('Id_Enfermedad');
        $enfermo->Id_Medicamento = $request->input('Id_Medicamento');
        //dd($request->all());
        $enfermo->save();

        return redirect('/enfermo');        
    }
}