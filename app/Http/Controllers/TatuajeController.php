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
        Conejo::create([],)
    }


}
