<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RazaTableSeeder::class);
        $this->call(ConejoTableSeeder::class);
        //$this->call(CarreraTableSeeder::class);
        $this->call(EnfermedadTableSeeder::class);
        //$this->call(MateriaTableSeeder::class);
        //$this->call(GrupoTableSeeder::class);
        $this->call(JaulaTableSeeder::class);
        $this->call(ActividadTableSeeder::class);
        $this->call(MedicamentoTableSeeder::class);
        $this->call(AreaTableSeeder::class);



    
        //$this->call(PrivilegiosTableSeeder::class); 
    }
}
