<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;

class GestacionController extends Controller
{
    public function create()
    {
        $conejos=Conejo::all();
        return view('Gestacion/create',['conejos'=>$conejos]);
    }

    public function edit($id_gestacion)
    {
    	return view('Gestacion/edit');
    }

    public function delete($id_gestacion)
    {
    	return redirect()->back();
    }
}
