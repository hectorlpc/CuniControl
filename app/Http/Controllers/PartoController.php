<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartoController extends Controller
{
    public function create()
    {
    	return view('Parto/create');
    }

        public function edit()
    {
    	return view('Parto/edit');
    }

        public function delete()
    {
    	return view('Parto/delete');
    }
}
