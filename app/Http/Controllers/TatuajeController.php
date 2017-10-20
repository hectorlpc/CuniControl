<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;

class TatuajeController extends Controller
{
    public function create()
    {
        $razas = Raza::all();
        $conejos = Conejo::all();
    	return view('Tatuaje.create',['conejos' => $conejos, 'razas' => $razas]);
    }

    public function edit($id_conejo)
    {
    	return view('Tatuaje.edit');
    }

    public function delete($id_conejo)
    {
    	return redirect()->back();
    }

    public function store(Request $request)
    {
/*        Conejo::create($request->all()); //solicita todos los campos para guardar
*/
        $conejo = new Conejo;
        $conejo->Tatuaje_Derecho = $request->input('Tatuaje_Derecho');
        $conejo->Tatuaje_Izquierdo = $request->input('Tatuaje_Izquierdo');
        $conejo->Id_Raza = $request->input('Raza');
        $conejo->Genero = $request->input('Genero');
        $conejo->Peso_Conejo = $request->input('Peso');
        $conejo->Status_Conejo = $request->input('Status_Conejo');
        $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
        $conejo->save();

        return 'Conejo registrado xD';
    }
}
