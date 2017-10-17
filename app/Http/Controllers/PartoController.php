<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartoController extends Controller
{
    public function create()
    {
    	return view('Parto/create');
    }

        public function edit($id_parto)
    {
    	return view('Parto/edit');
    }

        public function delete($id_parto)
    {
    	return redirect()->back();
    }
}
