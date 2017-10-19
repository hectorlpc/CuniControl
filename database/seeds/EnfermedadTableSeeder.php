<?php

use Illuminate\Database\Seeder;
use App\Enfermedad;

class EnfermedadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enfermedad::create(['Id_Enfermedad' => '1', 'Nombre_Enfermedad' => 'Mastitis', 'Descripcion_Enfermedad' => 'Dificultad de mamas']);
        Enfermedad::create(['Id_Enfermedad' => '2', 'Nombre_Enfermedad' => 'Pulgas', 'Descripcion_Enfermedad' => 'Insectos']);        
        Enfermedad::create(['Id_Enfermedad' => '3', 'Nombre_Enfermedad' => 'Sarna', 'Descripcion_Enfermedad' => 'Sarna en orejas']);    
    }
}
