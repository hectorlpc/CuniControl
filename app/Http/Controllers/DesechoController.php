<?php

namespace App\Http\Controllers;

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
        try{
            $conejo = new Desecho;
            $conejo->Id_Raza = $request->input('Id_Conejo_Desecho')[0];
            $conejo->Id_Conejo_Desecho = $request->input('Id_Conejo_Desecho');
            $conejo->save();

            $conejo_desecho = Conejo::where('Id_Conejo',$request->input('Id_Conejo_Desecho'))->first();
            $conejo_desecho->Status = 'Muerto';
            $conejo_desecho->Desecho = 'Si';
            $conejo_desecho->Engorda = 'No';
            $conejo_desecho->Productora = 'No';
            $conejo_desecho->Semental = 'No';
            $conejo_desecho->save();

            session()->flash("Exito","Conejo de desecho registrado");
            
            return redirect('/desecho');    
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible crear, conejo de desecho existente");
            return redirect('/desecho');
        }
    }
}
