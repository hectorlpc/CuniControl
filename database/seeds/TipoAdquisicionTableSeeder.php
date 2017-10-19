<?php

use Illuminate\Database\Seeder;
use App\TipoAdquisicion;

class TipoAdquisicionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAdquisicion::creae(['Id_Adquisicion' => '1', 'Nombre_Adquisicion' => 'Donacion']);
        TipoAdquisicion::creae(['Id_Adquisicion' => '2', 'Nombre_Adquisicion' => 'Transferencia']);
        TipoAdquisicion::creae(['Id_Adquisicion' => '3', 'Nombre_Adquisicion' => 'Adopcion']);
    }
}
