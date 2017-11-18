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
    	Conejo::create(['Id_Conejo' => '1100121126', 'Tatuaje_Derecho' => '11001', 'Tatuaje_Izquierdo' => '21126','Fecha_Nacimiento' => '2016-12-21', 'Id_Raza' => '1' , 'Genero' =>'Macho', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '1100201024', 'Tatuaje_Derecho' => '11002', 'Tatuaje_Izquierdo' => '01024','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '1', 'Genero' =>'Hembra', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '1111112119', 'Tatuaje_Derecho' => '11111', 'Tatuaje_Izquierdo' => '12119','Fecha_Nacimiento' => '2016-12-21', 'Id_Raza' => '1' , 'Genero' =>'Macho', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '2301001046', 'Tatuaje_Derecho' => '23010', 'Tatuaje_Izquierdo' => '01046','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '2', 'Genero' =>'Macho', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '2131001046', 'Tatuaje_Derecho' => '21310', 'Tatuaje_Izquierdo' => '01046','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '2', 'Genero' =>'Hembra', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '2222210100', 'Tatuaje_Derecho' => '22222', 'Tatuaje_Izquierdo' => '10100','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '2', 'Genero' =>'Macho', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '2102112129', 'Tatuaje_Derecho' => '21021', 'Tatuaje_Izquierdo' => '12129','Fecha_Nacimiento' => '2016-04-01', 'Id_Raza' => '2', 'Genero' =>'Hembra', 'Status' => 'Vivo' ]);
        Conejo::create(['Id_Conejo' => '3100210076', 'Tatuaje_Derecho' => '31002', 'Tatuaje_Izquierdo' => '10076', 'Fecha_Nacimiento' => '2016-07-10','Id_Raza' => '3', 'Genero' => 'Macho', 'Status' => 'Vivo']);
        Conejo::create(['Id_Conejo' => '3201028017', 'Tatuaje_Derecho' => '32010', 'Tatuaje_Izquierdo' => '28017', 'Fecha_Nacimiento' => '2017-01-28','Id_Raza' => '3', 'Genero' => 'Hembra', 'Status' => 'Vivo']);
        Conejo::create(['Id_Conejo' => '3331312018', 'Tatuaje_Derecho' => '33313', 'Tatuaje_Izquierdo' => '12018', 'Fecha_Nacimiento' => '2016-07-10','Id_Raza' => '3', 'Genero' => 'Macho', 'Status' => 'Vivo']);
        Conejo::create(['Id_Conejo' => '3181923041', 'Tatuaje_Derecho' => '31819', 'Tatuaje_Izquierdo' => '23041', 'Fecha_Nacimiento' => '2017-01-28','Id_Raza' => '3', 'Genero' => 'Hembra', 'Status' => 'Vivo']);
    }
}
