<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cemental;
use App\Conejo;
use App\Monta;
use App\Desecho;

class CementalController extends Controller
{
     public function create()
     {
        $conejos = Conejo::Select('Conejo.Id_Conejo')
            ->leftJoin('Conejo_Cemental','Conejo.Id_Conejo','=','Conejo_Cemental.Id_Conejo_Macho')
            ->leftJoin('Conejo_Engorda','Conejo.Id_Conejo','=','Conejo_Engorda.Id_Conejo_Engorda')
            ->leftJoin('Transferencia_Conejo','Conejo.Id_Conejo','=','Transferencia_Conejo.Id_Conejo')
            ->where('Conejo.Genero','Macho')
            ->whereNull('Transferencia_Conejo.Id_Conejo')
            ->whereNull('Conejo_Cemental.Id_Conejo_Macho')
            ->whereNull('Conejo_Engorda.Id_Conejo_Engorda')
            ->get();
    	return view('ConejoCemental/create',['conejos' => $conejos]);
    }

    public function edit($id_cemental)
    {
        $cemental = Cemental::all();
        $cemental = Cemental::where('Id_Conejo_Macho', $id_cemental)->first();

    	return view('ConejoCemental/edit',['cemental' => $cemental]);
    }

    public function update(Request $request, $id_cemental)
    {
        try{
        $cemental = Cemental::where('Id_Conejo_Macho', $id_cemental)->first();

        $cemental->Status = $request->input('Status');
        if ($cemental->Status == 'Desecho') {
            $cemental->Status = 'Desecho';
            $cemental->save();
        } else if ($cemental->Status == 'Muerto') {
            $conejo = Conejo::where('Id_Conejo', $id_cemental)->first();
            $conejo->Status = $request->input('Status');
            $conejo->Fecha_Muerte = $request->input('Fecha_Muerte');
            $cemental->Status = 'Baja';
            $conejo->save();
            $cemental->save();
            session()->flash("Exito","Semental dado de baja");
        }
        return redirect('/cemental');
      }catch (\Illuminate\Database\QueryException $e){

      session()->flash("Error","No es posible Modificar este Semental");
      return redirect('/cemental');
      }
    }

    public function delete($id_cemental)
    {
        try{

        $cemental = Cemental::where('Id_Conejo_Macho', $id_cemental)->first();
        $cemental->delete();
        session()->flash("Exito","Semental eliminado");
        return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar este Semental");
        return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try{
            $cemental = new Cemental;
            $cemental->Id_Raza = $request->input('Id_Conejo_Macho')[0];
            $cemental->Id_Conejo_Macho = $request->input('Id_Conejo_Macho');
            $cemental->Fecha_Activo = $request->input('Fecha_Activo');
            $cemental->Status = 'Activo';
            $cemental->save();
            session()->flash("Exito","Semental registrado");

            return redirect('/cemental');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, Semental existente");
            return redirect('/cemental');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Macho)
        {
            $cementales = Cemental::where('Id_Conejo_Macho', $request->Id_Conejo_Macho)->get();
        } else {
            $cementales = Cemental::all();
        }
        return view ('ConejoCemental.index',['cementales'=> $cementales]);
    }
}
