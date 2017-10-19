<?php

use Illuminate\Database\Seeder;
use App\Actividad;

class ActividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividad::create(['Id_Actividad' => '1', 'Nombre_Actividad' => 'Destete', 'Descripcion_Actividad' => 'Destetar conejos']);
        Actividad::create(['Id_Actividad' => '2', 'Nombre_Actividad' => 'Monta', 'Descripcion_Actividad' => 'Monta de conejos']);
        Actividad::create(['Id_Actividad' => '3', 'Nombre_Actividad' => 'Medicar', 'Descripcion_Actividad' => 'Administrar Medicamentos']);


    }
}
