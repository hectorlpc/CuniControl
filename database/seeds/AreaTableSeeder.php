<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Area::create(['Id_Area' => '1', 'Nombre_Area' => 'Venta', 'Descripcion_Area' => 'Area de ventas']);
    	Area::create(['Id_Area' => '2', 'Nombre_Area' => 'Donacion', 'Descripcion_Area' => 'Donacion de conejos']);
		Area::create(['Id_Area' => '3', 'Nombre_Area' => 'Incinerador', 'Descripcion_Area' => 'Conejos que mueren']);    	
    }
}
