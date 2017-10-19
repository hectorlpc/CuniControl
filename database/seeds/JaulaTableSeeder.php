<?php

use Illuminate\Database\Seeder;
use App\Jaula;

class JaulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jaula::create(['Id_Jaula' => 'A1', 'Status' => true]);
        Jaula::create(['Id_Jaula' => 'A2', 'Status' => false]);
        Jaula::create(['Id_Jaula' => 'A3', 'Status' => true]);
        Jaula::create(['Id_Jaula' => 'B1', 'Status' => false]);
        Jaula::create(['Id_Jaula' => 'B4', 'Status' => true]);      
        Jaula::create(['Id_Jaula' => 'G11', 'Status' => false]);
    }
}
