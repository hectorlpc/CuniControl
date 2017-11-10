<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Desecho;

class DesechoController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo_Desecho)
        {   
            $conejos = Desecho::where('Id_Conejo_Desecho', $request->Id_Conejo_Desecho)->get();
        } else {
            $conejos = Desecho::all();
        }
        return view ('ConejoDesecho/index',['conejos'=> $conejos]);
    }	

	public function create ()
	{
		$conejos = Conejo::all();

		return view('ConejoDesecho/create',['conejos' => $conejos]);		
	}

    public function store(Request $request)
    {
        $conejo = new Desecho;
        $conejo->Id_Raza = $request->input('Id_Conejo_Desecho')[0];
        $conejo->Id_Conejo_Desecho = $request->input('Id_Conejo_Desecho');
        $conejo->save();
        return redirect('/desecho');
    }
}
