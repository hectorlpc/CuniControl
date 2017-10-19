<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Carrera::create(['Id_Carrera' => '1', 'Nombre_Carrera' => 'MVZ']);
    	Carrera::create(['Id_Carrera' => '2', 'Nombre_Carrera' => 'Informatica']);
    	Carrera::create(['Id_Carrera' => '3', 'Nombre_Carrera' => 'IME']);
    }
}
