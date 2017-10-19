<?php

use Illuminate\Database\Seeder;
use App\Conejo;
use App\ConejaProductora;
use App\Raza;

class ConejaProductoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$raza = Raza::first();
    	$conejo = Conejo::first();
    	ConejaProductora::create(['Id_Raza' => $raza->Id_Raza,'Id_Conejo' => $conejo->Id_Conejo,'Numero_Conejo' => '49', 'Status' => false, 'Fecha' => '2010-09-10']);
    	ConejaProductora::create(['Id_Raza' => $raza->Id_Raza,'Id_Conejo' => $conejo->Id_Conejo,'Numero_Conejo' => '45', 'Status' => false, 'Fecha' => '2010-08-10']);
    	ConejaProductora::create(['Id_Raza' => $raza->Id_Raza,'Id_Conejo' => $conejo->Id_Conejo,'Numero_Conejo' => '42', 'Status' => false, 'Fecha' => '2010-10-10']);
    }
}