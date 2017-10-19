<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonacionController extends Controller
{
    //
     public function create()
    {
    	return view('Donacion.create');
    }

        public function edit($id_destete)
    {
    	return view('Donacion.edit');
    }

        public function delete($id_destete)
    {
    	return redirect()->back();
    }
}
