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

    	Conejo::create(['Id_Conejo' => '1401019107', 'Tatuaje_Derecho' => '14010', 'Tatuaje_Izquierdo' => '19107', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Hembra', 'Peso_Conejo' => '100', 'Status_Conejo' => 'Vivo' ]);
    	Conejo::create(['Id_Conejo' => '2100118107', 'Tatuaje_Derecho' => '21001', 'Tatuaje_Izquierdo' => '18107', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Macho', 'Peso_Conejo' => '100', 'Status_Conejo' => 'Vivo' ]);    	
    	Conejo::create(['Id_Conejo' => '4120809107', 'Tatuaje_Derecho' => '41208', 'Tatuaje_Izquierdo' => '09107', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Hembra', 'Peso_Conejo' => '100', 'Status_Conejo' => 'Muerto' ]);    	     
    }
}
