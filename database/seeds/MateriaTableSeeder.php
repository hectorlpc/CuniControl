<?php

use Illuminate\Database\Seeder;
use App\Materia;
use App\Carrera;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carrera = Carrera::first();

        Materia::create(['Id_Materia' => '1', 'Nombre_Materia' => 'Conejos', 'Id_Carrera' => $carrera->Id_Carrera]);
        Materia::create(['Id_Materia' => '2', 'Nombre_Materia' => 'Produccion', 'Id_Carrera' => $carrera->Id_Carrera]);        
        Materia::create(['Id_Materia' => '3', 'Nombre_Materia' => 'Crianza', 'Id_Carrera' => $carrera->Id_Carrera]);
    }
}
