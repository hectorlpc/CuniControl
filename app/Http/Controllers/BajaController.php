<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;

class BajaController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo) {
            $conejos = Conejo::where('Id_Conejo', $Id_Conejo)->get();
        } else {
            $conejos = Conejo::all(); 
        }
        return view('CensoMuerte/index',['conejos' => $conejos]);
    }
}

