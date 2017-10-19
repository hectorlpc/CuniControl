<?php

use Illuminate\Database\Seeder;
use App\Medicamento;
class MedicamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamento::create(['Id_Medicamento' => '1', 'Nombre_Medicamento' => 'Cloroformo', 'Cantidad' => '100']);
        Medicamento::create(['Id_Medicamento' => '2', 'Nombre_Medicamento' => 'Penicilina', 'Cantidad' => '200']);        
        Medicamento::create(['Id_Medicamento' => '3', 'Nombre_Medicamento' => 'Diclofenaco', 'Cantidad' => '300']);        
    }
}
