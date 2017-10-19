<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;

class EnfermoController extends Controller
{    
    public function create()
    {
        $conejos=Conejo::all();
        return view('Enfermo/create',["conejos"=>$conejos]);
    }

        public function edit($id_conejo)
    {
    	return view('Enfermo/edit');
    }

        public function delete($id_conejo)
    {
    	return redirect()->back();
    }
}
