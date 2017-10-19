<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TatuajeController extends Controller
{
    //
    public function create()
    {
    	return view('Tatuaje.create');
    }

        public function edit($id_destete)
    {
    	return view('Tatuaje.edit');
    }

        public function delete($id_destete)
    {
    	return redirect()->back();
    }
}
