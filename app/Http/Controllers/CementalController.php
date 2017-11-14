<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cemental;
use App\Conejo;
use App\Desecho;

class CementalController extends Controller
{
     public function create()
     {
        $conejos = Conejo::all();
    	return view('ConejoCemental/create',['conejos' => $conejos]);
    }

    public function edit($id_cemental)
    {
        $cemental = Cemental::all();
        $cemental = Cemental::where('Id_Conejo_Macho', $id_cemental)->first();

    	return view('/ConejoCemental/edit',['cemental' => $cemental]);
    }

    public function update(Request $request, $id_cemental)
    {
        try{
        $cemental = Cemental::where('Id_Conejo_Macho', $id_cemental)->first();
        $cemental->Status = 'Inactivo';
        $cemental->save();

        $conejo = Conejo::where('Id_Conejo', $id_cemental)->first();
        $conejo->Desecho = 'Si';
        $conejo->save();

        $desecho = new Desecho;
        $desecho->Id_Conejo_Desecho = $request->input('Id_Conejo_Macho');
        $desecho->Id_Raza = $request->input('Id_Conejo_Macho')[0];
        $desecho->Procedencia = 'Semental';
        $desecho->save();
        return redirect('/cemental');
      }catch (\Illuminate\Database\QueryException $e){

      session()->flash("Error","No es posible Modificar este Semental");
      return redirect('/cemental');
      }
    }

    public function delete($id_cemental)
    {
        try{

        $cemental = Cemental::where('Id_Cemental', $id_cemental)->first();
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
            $cemental->Status = 'Activo';
            $cemental->save();

            $conejo = Conejo::where('Id_Conejo', $request->input('Id_Conejo_Macho'))->first();
            $conejo->Desecho = 'No';
            $conejo->Engorda = 'No';
            $conejo->Productora = 'No';
            $conejo->Semental = 'Si';
            $conejo->save();

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
