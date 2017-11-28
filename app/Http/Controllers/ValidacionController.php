<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horas;

class ValidacionController extends Controller
{
    //
    public function index (Request $request)
	{
        $horas = Horas::where('Status',"Pendiente")->get();
        return view('ValidacionHoras.index',[
            'horas' => $horas
        ]);		
	}
	public function update(Request $request, $id_horas)
    {
      try{
        $hora = Horas::where('Id_Horas', $id_horas)->first();
        $hora->Status = $request->input('Status');
        $hora->save();
       	if($request->input('Status') == "Aceptado"){
       		session()->flash("Exito","Actividades Validadas");	
       	}else{
       		session()->flash("Peligro","Actividades RECHAZADAS");
       	}
        return redirect('/validacion');
      }catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible validar");
          return redirect('/validacion');
      }
    }

}
