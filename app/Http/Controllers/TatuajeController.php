<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Raza;
use App\Parto;
use App\ConejaProductora;
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
        // $conejo = new Conejo;
        // $parto = DB::table('Parto')->where('Id_Conejo_Hembra',$request->input('Tatuaje_Hembra'));*/
        // $parto = DB::table('Parto')->where ('Id_Conejo_Hembra','=',$request->input('Tatuaje_Hembra'))->get();
        // $productora =DB::table('Coneja_Productora')->where ('Id_Conejo','=',($request->input('Tatuaje_Hembra')))->get();
        // $conejoRaza =DB::table('Conejo')->where ('Id_Conejo','=',$request->input('Tatuaje_Hembra'))->get();*/
        // $conejo->Tatuaje_Derecho = $conejoRaza->Id_Raza . $productora->Numero_Conejo;
        // $conejo->Tatuaje_Izquierdo = $parto->Fecha_Parto;
        // $conejo->Id_Raza = $conejoRaza->Id_Raza;
        // $conejo->Genero = $request->input('Genero');
        // $conejo->Peso_Conejo = $request->input('Peso');
        // $conejo->Status_Conejo = $request->input('Status_Conejo');
        // $conejo->Id_Conejo = $conejo->Tatuaje_Derecho . $conejo->Tatuaje_Izquierdo;
        // $conejo->save();

        // return 'Id_Conejo' . $conejo->Tatuaje_Derecho;
        
        $raza = $request->input('Tatuaje_Hembra')[0];
        $numero_productora = '30'; // remplazar con valor de consulta
        $numero_hijo = '10'; // viene de quien sabe donde
        $tatuaje_derecho = $raza . $numero_productora . $numero_hijo;

        $fecha = $request->input('fecha');
        $dia = substr($fecha, -2, 2);
        $mes = substr($fecha, 5, 2);
        $anio = $fecha[3];
        $tatuaje_izquierdo = $dia . $mes . $anio;
        dd($tatuaje_derecho, $tatuaje_izquierdo);        
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