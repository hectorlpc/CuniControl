<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Usuario::class, 1)->create();
       $user =Usuario::where('CURP',"ADMINCONEJO")->first();
       $user->roles()->attach('ROLADM');
       $user->save();


    }
}
