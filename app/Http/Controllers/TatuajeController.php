<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;
use App\Monta;
use App\Parto;
use App\Productora;

use Illuminate\Support\Facades\DB;
class TatuajeController extends Controller
{
    public function create() 
    {
        $partos = Parto::all();
        
        return view('/tatuaje/create', ['partos' => $partos]);
    }

    public function store(Request $request)
    {   

        $conejo = new Conejo;
// Generar tatuaje derecho
        $conejo->Id_Raza = $request->input('Id_Raza');        
        $numero = $request->input('Numero_Conejo');
        $consecutivo = $request->input('Consecutivo');
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
        $conejo->Fecha_Nacimiento = $fecha;
        $conejo->Genero = $request->input('Genero');
        $conejo->Status = $request->input('Status');
//Guardar conejo
        $conejo->save();
        return redirect ('/tatuaje');
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo) {
            $conejos = Conejo::where('Id_Conejo'. $Id_Conejo)->get();
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
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        $conejo->Genero = $request->input('Genero');
        $conejo->Status = $request->input('Status');
        $conejo->save();

        return redirect('/tatuaje');
    }

    public function delete($id_conejo)
    {        
        $conejo = Conejo::where('Id_Conejo', $id_conejo)->first();
        $conejo->delete();
        return redirect()->back();
    }

}    