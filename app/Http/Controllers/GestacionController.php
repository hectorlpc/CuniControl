<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestacionController extends Controller
{
    //
    public function create()
    {
        return view('Gestacion/create');
    }

    public function edit()
    {
    	return view('Gestacion/edit');
    }

    public function delete()
    {
    	return view('Gestacion/delete');
    }
}
