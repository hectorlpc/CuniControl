<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicamento;

class MedicamentoController extends Controller
{
    //
    public function create()
    {
    	return view('Medicamento.create');
    }

    public function edit($id_medicamento)
    {
        $medicamento = Medicamento::where('Id_Medicamento', $id_medicamento)->first();

        return view('Medicamento/edit',['medicamento' => $medicamento]);        
    }

    public function update(Request $request, $id_medicamento)
    {
        $medicamento = Medicamento::where('Id_Medicamento', $id_medicamento)->first();
        $medicamento->Nombre_Medicamento = $request->input('Nombre_Medicamento');
        $medicamento->Cantidad = $request->input('Cantidad');
        $medicamento->save();

        return redirect('/medicamento');
    }

    public function delete($id_medicamento)
    {   
        $medicamento = Medicamento::where('Id_Medicamento', $id_medicamento)->first();
        $medicamento->delete();
    	return redirect()->back();
    }

    public function store(Request $request)
    {
        $medicamento = new Medicamento;
        $medicamento->Nombre_Medicamento = $request->input('Nombre_Medicamento');
        $medicamento->Id_Medicamento = strtoupper(substr($request->input('Nombre_Medicamento'),0,3) . substr($request->input('Nombre_Medicamento'),-3));
        $medicamento->Cantidad = $request->input('Cantidad');
        $medicamento->save();
        return redirect('/medicamento');
    }

    public function index(Request $request)
    {
        if($request->Id_Medicamento)
        {   
            $medicamentos = Medicamento::where('Nombre_Medicamento', $request->Id_Medicamento)->get();
        } else {
            $medicamentos = Medicamento::all();
        }
        return view ('Medicamento.index',['medicamentos'=> $medicamentos]);
    }
}
