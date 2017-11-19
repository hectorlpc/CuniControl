<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Destete;
use App\Parto;
use App\Donacion;

class DesteteController extends Controller{

    public function create()
    {
        $partos = Parto::all();

    	return view('Destete.create',['partos' => $partos]);
    }

    public function edit($id_destete)
    {
        $destete = Destete::all();
        $destete = Destete::where('Id_Destete', $id_destete)->first();

        return view('Destete.edit',[
            'destete' => $destete ]);
    }

    public function update(Request $request, $id_destete)
    {
        try{
          $destete = Destete::where('Id_Destete', $id_destete)->first();
          $destete->Destetados = $request->input('Destetados');
          $destete->Peso_Destete = $request->input('Peso_Destete');
          $destete->Modificador = Auth::user()->CURP;
          $destete->save();
          return redirect('/destete');
        }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar ese destete");
          return redirect('/destete');
        }
    }

    public function delete($id_destete)
    {
        try{
            $destete = Destete::where('Id_Destete', $id_destete)->first();
            $destete->delete();
            session()->flash("Exito","Destete eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar ese destete");
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try{
            $destete = new Destete;
            $destete->Id_Parto = $request->input('Id_Parto');
            $destete->Fecha_Destete = $request->input('Fecha_Destete');
            $destete->Id_Destete = $destete->Id_Parto .  $destete->Fecha_Destete;
            $destete->Destetados = $request->input('Destetados');
            $destete->No_Destetados = $request->input('No_Destetados');
            $destete->Adoptados_Destetados = $request->input('Adoptados_Destetados');
            $destete->Adoptados_No_Destetados = $request->input('Adoptados_No_Destetados');
            $destete->Peso_Destete = $request->input('Peso_Destete');
            $destete->Notas = $request->input('Notas');
            $destete->Creador = Auth::user()->CURP;

            $parto = Parto::where('Id_Parto', $request->input('Id_Parto'))->first();
            $parto->Activado = 1;

            if($destete->Adoptados_No_Destetados > 0) {
                $donante = Parto::find($request->input('Parto_Donante'));
                $donante->Total_Vivos -= $destete->Adoptados_No_Destetados;
                $donante->save();
            }
            $destete->save();
            $parto->save();

            session()->flash("Exito","Destete creado");
            return redirect('/destete');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, destete existente");
            return redirect('/destete');
        }
    }

    public function index(Request $request)
    {
        if ($request->input('Id_Conejo_Hembra')) {
            $destetes = Destete::where('Id_Destete', 'LIKE', $request->input('Id_Conejo_Hembra') . '%')->get();
        } else {
            $destetes = Destete::select()->latest('Fecha_Destete')->get();
        }
        return view ('Destete.index',['destetes'=> $destetes]);
    }

    public function obtener_datos (Request $request) {
        $opcion = Parto::find($request->datos);
        $cantidad = $opcion->Total_Vivos;
        $no_destetados = $opcion->Numero_Muertos;
        $peso = $opcion->Peso_Nacer;
        $fechaDeParto = $opcion->Fecha_Parto;

        $fecha_destete = date_create($fechaDeParto);
        date_add($fecha_destete, date_interval_create_from_date_string('35 days'));
        $fechaDeParto = date_format($fecha_destete, 'Y-m-d');

        $respuesta = [
            'cantidad' => $cantidad,
            'no_destetados' => $no_destetados,
            'peso' => $peso,
            'fechaDeParto' => $fechaDeParto
        ];

        return response()->json($respuesta);
    }

    public function obtener_adoptados(Request $request) {
        $opcion = Donacion::where('Id_Parto_Donatorio', $request->conejo)->first();
        if(is_null($opcion)) {
            $adoptados = 0;
            $donador = 0;
        } else {
            $adoptados = $opcion->Donados;
            $donador = $opcion->Id_Parto_Donante;
        }
        $respuesta = [
            'adoptados' => $adoptados,
            'donador' => $donador
        ];
        return response()->json($respuesta);
    }

    public function obtener_notas(Request $request) {
        $opcion = Donacion::where('Id_Parto_Donante', $request->donador)->first();
        if(is_null($opcion)) {
            $notas = 'No hay notas';
        } else {
            $notas = $opcion->Notas;
        }
        $respuesta = ['notas' => $notas];
        return response()->json($respuesta);        
    }
}