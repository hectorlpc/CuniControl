<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;
use App\Monta;
use App\Parto;
use App\Productora;
use App\Destete;
use Illuminate\Support\Facades\DB;

class TatuajeController extends Controller
{
    public function create()
    {
        $destetes = Destete::all();

        return view('/tatuaje/create', ['destetes' => $destetes]);
    }

    public function store(Request $request){
        try{
        $conejo = new Conejo;
// Generar tatuaje derecho
        $conejo->Id_Raza = $request->input('Id_Raza');
        $numero = $request->input('Numero_Conejo');
        $consecutivo = (int)$request->input('Consecutivo');
        if($consecutivo < 10) {
            $consecutivo = 0 . $consecutivo;
        }
        $conejo->Tatuaje_Derecho = $conejo->Id_Raza . $numero . $consecutivo;
// Generar tatuaje izquierdo
        $fecha = $request->input('Fecha_Nacimiento');
        $d = substr($fecha, -2, 2);
        $m = substr($fecha, 5, 2);
        $a = $fecha[3];
        $conejo->Tatuaje_Izquierdo = $d . $m . $a;
// Generar Id conejo
        $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
// Insertar los demás campos
        $conejo->Status = 'Vivo';
        $conejo->Fecha_Nacimiento = $fecha;
        $conejo->Genero = $request->input('Genero');
        $destete = Destete::where('Id_Destete', $request->input('Id_Destete'))->first();
        $destete->Tatuados += 1;
//Guardar conejo
        $conejo->save();
        $destete->save();

        session()->flash("Exito","Conejo Registrado con tatuajes: Derecho: " . $conejo->Tatuaje_Derecho . " Izquierdo: ". $conejo->Tatuaje_Izquierdo);
        	return redirect ('/tatuaje');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible registrar, Datos incompletos o duplicados");
        	return redirect('/tatuaje');
        }
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo) {
            $conejos = Conejo::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
            $conejos = Conejo::all();
        }
        return view('tatuaje/index',['conejos' => $conejos]);
    }

    public function edit($id_conejo)
    {
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        return view('/tatuaje/edit', ['conejo' => $conejo]);
    }

    public function update(Request $request, $id_conejo)
    {
      try{
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        $conejo->Genero = $request->input('Genero');
        $conejo->Status = $request->input('Status');
        $conejo->Engorda = $request->input('Engorda');
        $conejo->save();

        return redirect('/tatuaje');
      }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar");
        return redirect('/tatuaje');
      }
    }

    public function delete($id_conejo)
    {
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        $conejo->delete();
        return redirect()->back();
    }

    public function obtener_datos (Request $request) {
        $opcion = Destete::find($request->numero);
        $numero_consecutivo = $opcion->Tatuados += 1;
        $numero_conejo = $opcion->parto->monta->conejo->productora->Numero_Conejo;
        $fecha_parto = $opcion->parto->Fecha_Parto;
        $raza = $opcion->parto->monta->conejo->Id_Raza;

        $respuesta = [
            'numero_consecutivo' => $numero_consecutivo,
            'numero_conejo' => $numero_conejo,
            'fecha_parto' => $fecha_parto,
            'raza' => $raza
        ];

        return response()->json($respuesta);
    }
}
