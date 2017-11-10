<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;
use App\Parto;


class DonacionController extends Controller{
    //
    public function create()
    {
        $partos = Parto::all();
    	return view('Donacion.create',['partos' => $partos]);
    }

    public function index(Request $request)
    {
        if ($request->Id_Parto_Donante) {
            $donaciones = Donacion::where('Id_Parto_Donante', $request->Id_Parto_Donante)->get();
        } else {
            $donaciones = Donacion::all();
        }

        return view('Donacion.index', ['donaciones'=> $donaciones]);
    }

    public function store(Request $request){
        $donacion = new Donacion;
        $donacion->Id_Parto_Donante = $request->input('Id_Parto_Donante');
        $donacion->Id_Parto_Donatorio = $request->input('Id_Parto_Donatorio');
        $donacion->Id_Donacion = $donacion->Id_Parto_Donante . $donacion->Id_Parto_Donatorio;
        $donacion->Cantidad_Gazapos = $request->input('Cantidad_Gazapos');
        $donacion->save();
        
        return redirect('/donacion');
    }

    public function delete($id_donacion)
    {
        try{

        $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();
        $donacion->delete();
        session()->flash("Exito","Donación eliminada");
        return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
        session()->flash("Error","No es posible eliminar esa Donación");
        return redirect()->back();
    }
}

    public function edit($id_donacion)
    {
        $donaciones = Donacion::all();
        $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();

        return view('donacion/edit', ['donacion' => $donacion]);
    }

    public function update(Request $request, $id_donacion)
    {
        $donacion = Donacion::where('Id_Donacion', $id_donacion)->first();
        $donacion->Cantidad_Gazapos = $request->input('Cantidad_Gazapos');
        $donacion->save();

        return redirect('/donacion');
    }
}
