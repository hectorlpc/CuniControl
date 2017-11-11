<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Conejo;
use App\Cemental;
use App\Desecho;

class DesechoController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo_Desecho)
        {   
            $desechos = Desecho::where('Id_Conejo_Desecho', $request->Id_Conejo_Desecho)->get();
        } else {
            $desechos = Desecho::all();
        }
        return view ('ConejoDesecho/index',['desechos'=> $desechos]);
    }	

	public function create ()
	{
		$conejos = Conejo::all();

		return view('ConejoDesecho/create',['conejos' => $conejos]);		
	}

    public function store(Request $request)
    {
        try{
            $desecho = new Desecho;
            $desecho->Id_Raza = $request->input('Id_Conejo_Desecho')[0];
            $desecho->Id_Conejo_Desecho = $request->input('Id_Conejo_Desecho');
            $desecho->save();

            $conejo = Conejo::where('Id_Conejo',$request->input('Id_Conejo_Desecho'))->first();
            $conejo->Status = 'Muerto';
            $conejo->Desecho = 'Si';
            $conejo->Engorda = 'No';
            $conejo->Productora = 'No';
            $conejo->Semental = 'No';
            $conejo->save();

            session()->flash("Exito","Conejo de desecho registrado");
            
            return redirect('/desecho');    
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, conejo de desecho existente");
            return redirect('/desecho');
        }
    }
}
