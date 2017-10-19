<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorasController extends Controller
{
    public function create()
    {
     //   $conejos=Conejo::all();
       // return view('Monta/create',["conejos"=>$conejos]);
    	return view('horas/create');
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
