<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;
use App\Monta;
use App\Parto;
use App\Productora;
use App\Destete;
use App\Jaula;
use App\Engorda;
use Illuminate\Support\Facades\DB;

class TatuajeController extends Controller
{
    public function create()
    {   
        $jaulas = Jaula::all();
        $destetes = Destete::all();

        return view('Tatuaje.create', ['destetes' => $destetes]);
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
        $conejo->Id_Jaula = $request->input('Id_Jaula');
        $conejo->Status = 'Vivo';
        $conejo->Fecha_Nacimiento = $fecha;
        $conejo->Genero = $request->input('Genero');

        $destete = Destete::where('Id_Destete', $request->input('Id_Destete'))->first();
        $destete->Tatuados += 1;
//Guardar conejo
        $conejo->Creador = Auth::user()->CURP;
        $conejo->save();
        $destete->save();
//Guardar conejo de engorda por defecto
        $engorda = new Engorda;
        $engorda->Id_Conejo_Engorda = $conejo->Id_Conejo;
        $engorda->Id_Raza = $conejo->Id_Raza;
        $engorda->Fecha_Alta = $conejo->Fecha_Nacimiento;
        $engorda->Status = 'Activo';
        $engorda->Creador = Auth::user()->CURP;
        $engorda->save();
        
        session()->flash("Exito","Conejo Registrado con tatuajes: Derecho: " . $conejo->Tatuaje_Derecho . " Izquierdo: ". $conejo->Tatuaje_Izquierdo);
        	return redirect ('/tatuaje');
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible registrar, Datos incompletos o duplicados");
        	return redirect('/tatuaje');
        }
    }

    public function index(Request $request)
    {
        if ($request->Id_Conejo) {
           $conejos = Conejo::where('Conejo.Id_Conejo', $request->Id_Conejo)->get();
        } else {
          $conejos = Conejo::Select('Fecha_Nacimiento','Conejo.Id_Conejo','Conejo.Id_Raza','Id_Jaula','Conejo.Genero','Conejo.Creador','Conejo.Modificador')
            ->leftJoin('Conejo_Cemental','Conejo.Id_Conejo','=','Conejo_Cemental.Id_Conejo_Macho')
            ->leftJoin('Coneja_Productora','Conejo.Id_Conejo','=','Coneja_Productora.Id_Conejo_Hembra')
            ->leftJoin('Conejo_Engorda','Conejo.Id_Conejo','=','Conejo_Engorda.Id_Conejo_Engorda')
            ->leftJoin('Transferencia_Conejo','Conejo.Id_Conejo','=','Transferencia_Conejo.Id_Conejo')
            ->whereNull('Conejo_Cemental.Id_Conejo_Macho')
            ->whereNull('Coneja_Productora.Id_Conejo_Hembra')
            ->whereNull('Conejo_Engorda.Id_Conejo_Engorda')
            ->whereNull('Transferencia_Conejo.Id_Conejo')
            ->orderBy('Id_Conejo')
            ->get();            
        }
        return view('Tatuaje.index',['conejos' => $conejos]);
    }

    public function edit($id_conejo)
    {
        $jaulas = Jaula::all();
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        return view('Tatuaje.edit', ['conejo' => $conejo, 'jaulas' => $jaulas]);
    }

    public function update(Request $request, $id_conejo) {
      try{
        $situacion = $request->input('Status');
        if ($situacion == 'Vivo') {
            $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
            $conejo->Genero = $request->input('Genero');
            $conejo->Id_Jaula = $request->input('Id_Jaula');
            $conejo->Modificador = Auth::user()->CURP;
            $conejo->save();
            session()->flash("Exito","Datos del conejo actualizados");
            return redirect('/tatuaje');
        } else if ($situacion == 'Muerto') {
            $conejo = Conejo::where('Id_Conejo', $request->Id_Conejo)->first();
            $conejo->Genero = $request->input('Genero');
            $conejo->Id_Jaula = $request->input('Id_Jaula');
            $conejo->Status = 'Muerto';
            $conejo->Fecha_Muerte = $request->input('Fecha_Muerte');
            $conejo->Modificador = Auth::user()->CURP;
            $engorda = Engorda::where('Id_Conejo_Engorda', $id_conejo)->first();
            if (is_null($engorda)) {
                session()->flash("Exito","Datos del conejo actualizados");
                return redirect('/tatuaje');
            }
            $engorda->Status = 'Baja';
            $conejo->save();
            $engorda->save();
            session()->flash("Exito","Datos del conejo actualizados");
            return redirect('/tatuaje');
        }
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
        $numero_jaula = $opcion->parto->monta->Id_Jaula;

        $respuesta = [
            'numero_consecutivo' => $numero_consecutivo,
            'numero_conejo' => $numero_conejo,
            'fecha_parto' => $fecha_parto,
            'raza' => $raza,
            'numero_jaula' => $numero_jaula
        ];

        return response()->json($respuesta);
    }
}
