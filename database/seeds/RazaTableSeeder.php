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
    	Raza::create(['Id_Raza' => '1', 'Nombre_Raza' => 'Nueva Zelanda', 'Descripcion_Raza' => 'Raza tipo 1']);
    	Raza::create(['Id_Raza' => '2', 'Nombre_Raza' => 'California', 'Descripcion_Raza' => 'Raza tipo 2']);
    	Raza::create(['Id_Raza' => '3', 'Nombre_Raza' => 'Chinchilla', 'Descripcion_Raza' => 'Raza tipo 3']);
    	Raza::create(['Id_Raza' => '4', 'Nombre_Raza' => 'Linea FESC', 'Descripcion_Raza' => 'Raza tipo 4']);
    	Raza::create(['Id_Raza' => '5', 'Nombre_Raza' => 'Rex', 'Descripcion_Raza' => 'Raza tipo 5']);
        //
    }
}
