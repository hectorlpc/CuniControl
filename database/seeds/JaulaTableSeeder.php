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
        Jaula::create(['Id_Jaula' => 'A1']);
        Jaula::create(['Id_Jaula' => 'A2']);
        Jaula::create(['Id_Jaula' => 'A3']);
        Jaula::create(['Id_Jaula' => 'B1']);
        Jaula::create(['Id_Jaula' => 'B4']);      
        Jaula::create(['Id_Jaula' => 'G11']);
    }
}
