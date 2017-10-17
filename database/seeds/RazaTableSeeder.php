<?php

use Illuminate\Database\Seeder;
use App\Raza;

class RazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
    	Raza::create(['Id_Raza' => '1', 'Nombre_Raza' => 'Blanco', 'Descripcion_Raza' => 'Raza aria']);
    	Raza::create(['Id_Raza' => '2', 'Nombre_Raza' => 'Negro', 'Descripcion_Raza' => 'Raza humilde']);
    	Raza::create(['Id_Raza' => '3', 'Nombre_Raza' => 'Cafe', 'Descripcion_Raza' => 'Raza chida']);
    	Raza::create(['Id_Raza' => '4', 'Nombre_Raza' => 'Gris', 'Descripcion_Raza' => 'Raza bonita']);
    	Raza::create(['Id_Raza' => '5', 'Nombre_Raza' => 'Rojo', 'Descripcion_Raza' => 'Raza mutante']);
        //
    }
}
