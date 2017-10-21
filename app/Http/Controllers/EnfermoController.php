<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Enfermedad;
use App\Medicamento;
use App\Enfermo;

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
    public function store(Request $request) 
    {
        $enfermo = new Enfermo;
        $enfermo->Id_Conejo = $request->input('Id_Conejo');
        $enfermo->Fecha_Inicio = $request->input('Fecha_Inicio');
        $enfermo->Fecha_Fin = $request->input('Fecha_Fin');
        $enfermo->Id_Enfermedad = $request->input('Id_Enfermedad');
        $enfermo->Id_Medicamento = $request->input('Id_Medicamento');      
        $enfermo->Id_Conejo_Enfermo = $enfermo->Id_Conejo . $enfermo->Fecha_Inicio;
        //dd($request->all());
        $enfermo->save();

        return redirect('/home');
    }

    public function index()
    {
        $medicamentos = Medicamento::all();
        $enfermedades = Enfermedad::all();
        $enfermos = Enfermo::all();

        return view('Enfermo.index', [
            'enfermos' => $enfermos,
            'enfermedades' => $enfermedades,
            'medicamentos' => $medicamentos
        ]);
    }

       // $enfermos = \DB::table('Conejo_Enfermo')->select('Id_Conejo_Enfermo','Id_Conejo', 'Fecha_Inicio', 'Fecha_Fin', 'Id_Enfermedad', 'Id_Medicamento')->get();
       //  return $enfermos;
}


    //     public function edit($id_conejo)
    // {
    //     return view('Enfermo/edit');
    // }

    //     public function delete($id_conejo)
    // {
    //     return redirect()->back();
    // }
