<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Parto;
use App\Monta;

class PartoController extends Controller{
    public function create(){
        $montas = Monta::all();
        return view('Parto/create',['montas' =>$montas]);
    }

    public function edit($id_parto){
        $parto = Parto::all();
        $parto = Parto::where('Id_Parto', $id_parto)->first();        
        
        return view('Parto/edit',['parto' => $parto]);
    }

    public function delete($id_parto){
        try{
            $parto = Parto::where('Id_Parto', $id_parto)->first();
            $parto->delete();
            session()->flash("Exito","Parto eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){ 
            session()->flash("Error","No es posible eliminar ese parto");
            return redirect()->back();
        }
    }

    public function store(Request $request){
        try{
            $parto = new Parto;
            $parto->Fecha_Parto = $request->input('Fecha_Parto');
            $parto->Id_Monta = $request->input('Id_Monta');
            $parto->Numero_Vivos = $request->input('Numero_Vivos');
            $parto->Numero_Muertos = $request->input('Numero_Muertos');
            $parto->Peso_Nacer = $request->input('Peso_Nacer');
            $parto->Id_Parto =  $parto->Id_Monta . $parto->Fecha_Parto ;
            $parto->save();

            $monta = Monta::where('Id_Monta', $request->input('Id_Monta'))->first();
            $monta->Activado = 1;
            $monta->save();

            session()->flash("Exito","Parto Registrado");
            return redirect('/parto');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible registrar, parto registrado con anterioridad");
            return redirect('/parto');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Hembra)
        {
           $partos = Parto::with('monta')->get();
           $i=0;
           foreach ($partos as $parto) {

               if($parto->monta->Id_Conejo_Hembra == $request->Id_Conejo_Hembra){
                    $partoSelect[$i] = $parto;
                    $i++;
               }
           }
           $partos=$partoSelect;
           //:)
        } else {
            $partos = Parto::with('monta')->get();
        }
        return view('Parto.index', ['partos' => $partos]);
    }

    public function update(Request $request, $id_parto)
    {
        $parto = Parto::where('Id_Parto', $id_parto)->first();
        $parto->Numero_Vivos = $request->input('Numero_Vivos');
        $parto->Numero_Muertos = $request->input('Numero_Muertos');
        $parto->Peso_Nacer = $request->input('Peso_Nacer');
        $parto->save();

        return redirect('/parto');
    }

    public function obtener_fecha (Request $request) {
        $opcion = Monta::find($request->fecha);
        $fecha_parto = $opcion->Fecha_Parto;

        $respuesta = ['fecha_parto' => $fecha_parto];

        return response()->json($respuesta);
    }        
}
