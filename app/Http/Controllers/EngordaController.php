<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Conejo;

class EngordaController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo) {
            $conejos = Conejo::where('Id_Conejo', $Id_Conejo)->get();
        } else {
            $conejos = Conejo::all(); 
        }
        return view('CensoEngorda/index',['conejos' => $conejos]);
    }
}