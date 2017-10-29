<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;
use App\Parto;
use App\Productora;
use Illuminate\Support\Facades\DB;
class TatuajeController extends Controller
{
    public function index(Request $request)
    {
        if($request->Id_Conejo)
        {
            $conejos = Conejo::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
            $conejos = Conejo::all();
        }
        return view('/tatuaje.index',['conejos' => $conejos]);
    }

    public function create()
    {
        $razas = Raza::all();
        $conejos = Conejo::all();
    	return view('Tatuaje.create',['conejos' => $conejos, 'razas' => $razas]);
    }

    public function store(Request $request)
    {

/*        Conejo::create($request->all()); //solicita todos los campos para guardar
*/
		$productora = new Productora;
        $conejo = new Conejo;
        $partos = Parto::with('monta')->where('Monta.Id_Conejo_Hembra',$request->Id_Conejo_Hembra)->get();

        /*$i=0;
        foreach ($partos as $parto) {
            if($parto->monta->Id_Conejo_Hembra == $request->Id_Conejo_Hembra){
                    $partoSelect[$i] = $parto;
                    $i++;
                    dd($i);
           }
       
       }*/
       dd($partos);
        $productora =DB::table('Coneja_Productora')->where ('Id_Conejo','=',($request->input('Tatuaje_Hembra')))->get();
        $conejoRaza=DB::table('Conejo')->where ('Id_Conejo','=',($request->input('Tatuaje_Hembra')))->get();
        
        $raza = $request->input('Tatuaje_Hembra')[0];
        $numero_productora = $productora[0]->Numero_Conejo; 
        $numero_hijo = $request->input('Consecutivo_de_Conejo'); 
        $conejo->Tatuaje_Derecho = $raza . $numero_productora . $numero_hijo;
        $fecha = $parto->Fecha_Parto;
        $dia = substr($fecha, -2, 2);
        $mes = substr($fecha, 5, 2);
        $anio = $fecha[3];
        $conejo->Tatuaje_Izquierdo = $dia . $mes . $anio;
        $conejo->Genero = $request->input('Genero');
        $conejo->Id_Raza = $conejoRaza[0]->Id_Raza;
        // $conejo->Peso_Conejo = $request->input('Peso');
        $conejo->Status_Conejo = $request->input('Status_Conejo');
        $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
        $conejo->save();

        // return 'Id_Conejo' . $conejo->Tatuaje_Derecho;
        
        
        //dd($conejo, $numero_hijo);  
        return redirect('/tatuaje');      
    }


    // public function edit($id_conejo)
    // {
    //     return view('Tatuaje.edit');
    // }

    // public function delete($id_conejo)
    // {
    //     return redirect()->back();
    // }    
}