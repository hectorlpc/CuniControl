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

    	Conejo::create(['Id_Conejo' => '123456', 'Tatuaje_Derecho' => '123', 'Tatuaje_Izquierdo' => '456', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Macho', 'Peso_Conejo' => '100', 'Status_Conejo' => false ]);
    	Conejo::create(['Id_Conejo' => '666999', 'Tatuaje_Derecho' => '666', 'Tatuaje_Izquierdo' => '999', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Macho', 'Peso_Conejo' => '100', 'Status_Conejo' => false ]);    	
    	Conejo::create(['Id_Conejo' => '565232', 'Tatuaje_Derecho' => '565', 'Tatuaje_Izquierdo' => '232', 'Id_Raza' => $raza->Id_Raza, 'Genero' =>'Macho', 'Peso_Conejo' => '100', 'Status_Conejo' => false ]);    	     
    }
}
