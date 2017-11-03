<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;

class EngordaController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo) {
            $conejos = Conejo::where('Id_Conejo', $Id_Conejo)->get();
            $numero_conejos = count($conejos);
			dd($numero_conejos);
        } else {
            $conejos = Conejo::all(); 
        }
        return view('CensoEngorda/index',['conejos' => $conejos]);
    }
}