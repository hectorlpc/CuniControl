<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Conejo;
use App\Engorda;
Use App\Jaula;

class EngordaController extends Controller
{
    public function create () {
    	$conejos = Conejo::Select('Id_Conejo')
            ->leftJoin('Conejo_Engorda','Conejo.Id_Conejo','=','Conejo_Engorda.Id_Conejo_Engorda')
            ->leftJoin('Conejo_Cemental','Conejo.Id_Conejo','=','Conejo_Cemental.Id_Conejo_Macho')
            ->leftJoin('Coneja_Productora','Conejo.Id_Conejo','=','Coneja_Productora.Id_Conejo_Hembra')
            ->whereNull('Conejo_Engorda.Id_Conejo_Engorda')
            ->whereNull('Conejo_Cemental.Id_Conejo_Macho')
            ->whereNull('Coneja_Productora.Id_Conejo_Hembra')
            ->orderBy('Id_Conejo')
            ->get();
        return view('Engorda.create',['conejos' => $conejos]);            
    }

    public function edit($id_engorda)
    {   
        $jaulas = Jaula::all();
        $engorda = Conejo::where('Id_Conejo', $id_engorda)->first();

    	return view('Engorda.edit',[
            'engorda' => $engorda,
            'jaulas' => $jaulas
        ]);
    }

    public function update(Request $request, $id_engorda)
    {
        try{
            $conejo = Conejo::where('Id_Conejo', $id_engorda)->first();
            $engorda = Engorda::where('Id_Conejo_Engorda', $id_engorda)->first();
            $engorda->Status = $request->input('Status');
            if ($engorda->Status == 'Muerto') {
                $conejo->Status = 'Muerto';
                $conejo->Fecha_Muerte = $request->input('Fecha_Muerte');
                $engorda->Status = 'Baja';
                $conejo->save();
                $engorda->save();
                session()->flash("Exito","Conejo actualizado");
                return redirect('/engorda');
            }else if ($engorda->Status = 'Vivo') {
                $conejo->Id_Jaula = $request->input('Id_Jaula');
                $conejo->save();
                session()->flash("Exito","Conejo actualizado");
                return redirect('/engorda');
            }
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible acutualizar");
            return redirect('/engorda');
        }
    }    

    public function delete($id_engorda)
    {
        try{
        $engorda = Engorda::where('Id_Conejo_Engorda', $id_engorda)->first();
        $engorda->delete();
        session()->flash("Exito","conejo eliminado");
        return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){

        session()->flash("Error","No es posible eliminar este conejo");
        return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try{
            $engorda = new Engorda;
            $engorda->Id_Raza = $request->input('Id_Conejo_Engorda')[0];
            $engorda->Id_Conejo_Engorda = $request->input('Id_Conejo_Engorda');
            $engorda->Fecha_Alta = $request->input('Fecha_Alta');
            $engorda->Status = 'Activo';
            $engorda->Creador = Auth::user()->CURP;            
            $engorda->save();
            session()->flash("Exito","Conejo registrado");

            return redirect('/engorda');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, Conejo existente");
            return redirect('/engorda');
        }
    }    

    public function index(Request $request) {

        if ($request->Id_Conejo) {
           $engordas = Conejo::where('Id_Conejo_Engorda', $request->Id_Conejo_Engorda)->get();
        } else {
            $engordas = Conejo::Select('Id_Jaula','Id_Conejo','Conejo.Id_Raza','Fecha_Nacimiento','Conejo_Engorda.Status','Conejo.Creador','Conejo.Modificador')
                ->join('Conejo_Engorda','Conejo.Id_Conejo','=','Conejo_Engorda.Id_Conejo_Engorda')
                ->orderBy('Id_Conejo')
                ->get();            
        } 
        return view('Engorda.index', ['engordas' => $engordas]);
    }
    
}