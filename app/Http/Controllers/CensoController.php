<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Conejo;
use App\Engorda;
use App\Cemental;
use App\Productora;
use App\Parto;

class CensoController extends Controller
{

	public function index_vivos(Request $request) {

		return view('CensoGeneralVivos.index');
	}

	public function vivos_pdf(Request $request) {
		$grupo_vivos = [
	// Gazapos vivos por raza    		
			'Gazapos' => Parto::select(\DB::raw('Raza.Nombre_Raza, SUM(Parto.Numero_Vivos) AS Vivos'))
			    ->join('Monta', 'Parto.Id_Monta', '=', 'Monta.Id_Monta')
			    ->join('Conejo', 'Monta.Id_Conejo_Hembra', '=', 'Conejo.Id_Conejo')
			    ->join('Raza', 'Conejo.Id_Raza', '=', 'Raza.Id_Raza')
			    ->whereBetween('Parto.Fecha_Parto',[$request->input('Fecha_Inicio'), $request->input('Fecha_Fin')])
			    ->groupBy('Raza.Nombre_Raza')
			    ->orderBy('Raza.Id_Raza')
			    ->get(),	
	 // Conejos vivos de engorda por raza
			'Conejos de engorda' =>  Engorda::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Vivos'))
	    		->join('Raza','Conejo_Engorda.Id_Raza','=','Raza.Id_Raza')
	    		->where('Status', 'Activo')
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos vivos productores por raza
			'Conejas productoras' =>  Productora::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Vivos'))
	    		->join('Raza','Coneja_Productora.Id_Raza','=','Raza.Id_Raza')
	    		->where('Status', 'Activo')
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos vivos sementales por raza
			'Conejos sementales' =>  Cemental::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Vivos'))
	    		->join('Raza','Conejo_Cemental.Id_Raza','=','Raza.Id_Raza')
	    		->where('Status', 'Activo')
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos vivos productores de desecho por raza
			'Conejas productora de desecho' => Productora::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Vivos'))
	    		->join('Raza','Coneja_Productora.Id_Raza','=','Raza.Id_Raza')
	    		->where('Status', 'Desecho')
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos vivos sementales de desecho por raza
			'Conejos sementales de desecho' => Cemental::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Vivos'))
	    		->join('Raza','Conejo_Cemental.Id_Raza','=','Raza.Id_Raza')
	    		->where('Status', 'Desecho')
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get()
	    ];
		$pdf = PDF::loadView('CensoGeneralVivos/pdf', ['grupo_vivos' => $grupo_vivos]);
		return $pdf->download('Censo_General_Vivos.pdf');    
	}

	public function index_muertos (Request $request) {

		return view('CensoGeneralMuertos.index');
	}

	public function muertos_pdf(Request $request) {
		$grupo_muertos = [		
	// Gazapos muertos por raza    		
			'Gazapos' => Parto::select(\DB::raw('Raza.Nombre_Raza, SUM(Parto.Numero_Muertos) AS Muertos'))
			    ->join('Monta', 'Parto.Id_Monta', '=', 'Monta.Id_Monta')
			    ->join('Conejo', 'Monta.Id_Conejo_Hembra', '=', 'Conejo.Id_Conejo')
			    ->join('Raza', 'Conejo.Id_Raza', '=', 'Raza.Id_Raza')
			    ->whereBetween('Parto.Fecha_Parto',[$request->input('Fecha_Inicio'), $request->input('Fecha_Fin')])
			    ->groupBy('Raza.Nombre_Raza')
			    ->orderBy('Raza.Id_Raza')
			    ->get(),	
	 // Conejos muertos de engorda por raza
			'Conejos de engorda' => Engorda::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Muertos'))
				->join('Conejo','Conejo_Engorda.Id_Raza','=','Conejo.Id_Raza')
	    		->join('Raza','Conejo_Engorda.Id_Raza','=','Raza.Id_Raza')
	    		->where('Conejo_Engorda.Status', 'Baja')
	    		->whereBetween('Conejo.Fecha_Muerte',[$request->input('Fecha_Inicio'), $request->input('Fecha_Fin')])
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos muertos productores de desecho por raza
			'Conejas productoras' => Productora::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Muertos'))
	    		->join('Conejo','Coneja_Productora.Id_Raza','=','Conejo.Id_Raza')
	    		->join('Raza','Coneja_Productora.Id_Raza','=','Raza.Id_Raza')
	    		->where('Coneja_Productora.Status', 'Baja')
	    		->whereBetween('Conejo.Fecha_Muerte',[$request->input('Fecha_Inicio'), $request->input('Fecha_Fin')])
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get(),
	// Conejos muertos sementales de desecho por raza
			'Conejos sementales' => Cemental::select(\DB::raw('Raza.Nombre_Raza, COUNT(*) AS Muertos'))
	    		->join('Conejo','Conejo_Cemental.Id_Raza','=','Conejo.Id_Raza')
	    		->join('Raza','Conejo_Cemental.Id_Raza','=','Raza.Id_Raza')
	    		->where('Conejo_Cemental.Status', 'Baja')
	    		->whereBetween('Conejo.Fecha_Muerte',[$request->input('Fecha_Inicio'), $request->input('Fecha_Fin')])
	    		->groupBy('Raza.Nombre_Raza')
	    		->orderBy('Raza.Id_Raza')
	    		->get()
		];	    		
		$pdf = PDF::loadView('CensoGeneralMuertos/pdf', ['grupo_muertos' => $grupo_muertos]);
		return $pdf->download('Censo_General_Muertos.pdf');
	}
}
