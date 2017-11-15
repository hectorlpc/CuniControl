<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;

class HorasController extends Controller
{
    public function create()
    {
     //   $conejos=Conejo::all();
       // return view('Monta/create',["conejos"=>$conejos]);
        $actividades=Actividad::all();
    	return view('horas/create',[
            'actividades' => $actividades
        ]);
    }

    public function edit($id_horas)
    {
        return view('horas/edit');
    }

    public function delete($id_horas)
    {
        return redirect()->back();
    }
}
