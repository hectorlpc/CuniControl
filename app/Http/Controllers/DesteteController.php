<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesteteController extends Controller
{
    public function create()
    {
    	return view('Destete.create');
    }

        public function edit($id_destete)
    {
    	return view('Destete.edit');
    }

        public function delete($id_destete)
    {
    	return redirect()->back();
    }
}
