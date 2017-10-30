<?php

use Illuminate\Database\Seeder;
use App\Conejo;
use App\Raza;

class ConejoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$raza = Raza::first();

    	Conejo::create(['Id_Conejo' => '1401001046', 'Tatuaje_Derecho' => '14010', 'Tatuaje_Izquierdo' => '01046','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '1', 'Genero' =>'Hembra', 'Status' => 'Vivo' ]);
    	Conejo::create(['Id_Conejo' => '2100121126', 'Tatuaje_Derecho' => '21001', 'Tatuaje_Izquierdo' => '21126','Fecha_Nacimiento' => '2016-12-21', 'Id_Raza' => '2' , 'Genero' =>'Macho', 'Status' => 'Vivo' ]);    	
    	Conejo::create(['Id_Conejo' => '3120801056', 'Tatuaje_Derecho' => '31208', 'Tatuaje_Izquierdo' => '01056','Fecha_Nacimiento' => '2016-05-01', 'Id_Raza' => '3', 'Genero' =>'Hembra', 'Status' => 'Vivo' ]);    	     
    }
}
