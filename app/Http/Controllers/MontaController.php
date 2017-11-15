<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Conejo;
use App\Monta;
use App\Productora;
use App\Cemental;
use App\Raza;
use App\Jaula;

class MontaController extends Controller{
    public function create(){
        $razas = Raza::all();
        $cementales = Cemental::all();
        $productoras = Productora::all();
        $jaulas = Jaula::all();
        return view('Monta/create',[
            'cementales' => $cementales,
            'productoras' => $productoras,
            'razas' => $razas,
            'jaulas' => $jaulas
        ]);
    }

    public function edit($id_monta){
        $montas = Monta::all();
        $conejos = Conejo::all();
        $monta = Monta::where('Id_Monta', $id_monta)->first();

        return view('Monta/edit', [
            'monta' => $montas,
            'conejos' => $conejos,
            'monta' => $monta
        ]);
    }

    public function update(Request $request, $id_monta){
      try{
        $monta = Monta::where('Id_Monta', $id_monta)->first();
        //$intervalo = date_diff($fecha_monta, $fecha_parto);
        //dd($intervalo);
        $monta->Fecha_Diagnostico = $request->input('Fecha_Diagnostico');
        $monta->Resultado_Diagnostico = $request->input('Resultado_Diagnostico');
        $monta->Fecha_Parto = $request->input('Fecha_Parto');
        //dd($monta->Resultado_Diagnostico);
        if($monta->Resultado_Diagnostico == 'Positivo') {
            $semental = Cemental::where('Id_Conejo_Macho', $request->input('Id_Conejo_Macho'))->first();
            $semental->Monta_Positiva += 1;

            $productora = Productora::where('Id_Conejo_Hembra', $request->input('Id_Conejo_Hembra'))->first();
            $productora->Monta_Positiva += 1;
            $semental->save();
            $productora->save();
        }
        $monta->Modificador = Auth::user()->CURP;
        $monta->save();
        return redirect('/monta');
      }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar Monta");
          return redirect('/monta');
      }
    }

    public function delete($id_monta){
        try{
            $monta = Monta::where('Id_Monta', $id_monta)->first();
            $monta->delete();
            session()->flash("Exito","Monta eliminada");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar esa Monta");
            return redirect()->back();
        }
    }

    public function store (Request $request){
        try{
            $monta = new Monta;
            $monta->Fecha_Monta = $request->input('Fecha_Monta');
            $monta->Id_Conejo_Hembra = $request->input('Id_Conejo_Hembra');
            $monta->Id_Conejo_Macho = $request->input('Id_Conejo_Macho');
            $monta->Fecha_Monta = $request->input('Fecha_Monta');
            $monta->Id_Monta = $monta->Id_Conejo_Hembra . $monta->Fecha_Monta;
            $monta->Id_Jaula = $request->input('Id_Jaula');
            $monta->Creador = Auth::user()->CURP;

            $fecha_diagnostico = date_create($monta->Fecha_Monta);
            date_add($fecha_diagnostico, date_interval_create_from_date_string('15 days'));
            $monta->Fecha_Diagnostico = date_format($fecha_diagnostico, 'Y-m-d');

            $fecha_parto = date_create($monta->Fecha_Diagnostico);
            date_add($fecha_parto, date_interval_create_from_date_string('15 days'));
            $monta->Fecha_Parto = date_format($fecha_parto, 'Y-m-d');

            $semental = Cemental::where('Id_Conejo_Macho', $request->input('Id_Conejo_Macho'))->first();
            $semental->Fecha_Ultima_Monta = $monta->Fecha_Monta;
            $semental->Numero_Monta += 1;

            $productora = Productora::where('Id_Conejo_Hembra', $request->input('Id_Conejo_Hembra'))->first();
            $productora->Fecha_Ultima_Monta = $monta->Fecha_Monta;
            $productora->Numero_Monta += 1;

            $jaula = Jaula::where('Id_Jaula', $request->input('Id_Jaula'))->first();
            $jaula->Activa = 1;

            $jaula->save();
            $semental->save();
            $productora->save();
            $monta->save();

            session()->flash("Exito","Monta registrada");
            return redirect('/monta');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible registrar, monta existente");
            return redirect('/monta');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Hembra)
        {
            $montas = Monta::where('Id_Conejo_Hembra', $request->Id_Conejo_Hembra)->get();
        } else {
            $montas = Monta::all();
        }
        return view('Monta.index', ['montas' => $montas]);
    }

    public function obtener_semental(Request $request) {
        $opciones = Cemental::where('Id_Raza', $request->raza)->get();
        $i = 0;
        $arrayOpcionesId = [];
        foreach ($opciones as $opcion) {
            $arrayOpcionesId[$i] = $opcion->Id_Conejo_Macho;
            $i++;
        }
        $respuesta = ['opciones' =>$arrayOpcionesId];

        return response()->json($respuesta);
    }

    public function obtener_fechas(Request $request) {
        $opcion = Monta::find($request->datosMonta);
        $fecha_diagnostico = $opcion->Fecha_Parto;


        $respuesta = ['fecha_diagnostico' => $fecha_diagnostico];

        return response()->json($respuesta);
    }
}
