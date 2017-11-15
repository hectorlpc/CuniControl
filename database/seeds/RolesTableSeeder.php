<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(['Id_Rol'=>'ROLALU','Nombre_Rol'=>'Alumno','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROLADM','Nombre_Rol'=>'Administrador','Descripcion_Rol'=>'']);

        Rol::create(['Id_Rol'=>'ROLEMO','Nombre_Rol'=>'Encargado del Modulo','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROLPRO','Nombre_Rol'=>'Producción','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROLPRF','Nombre_Rol'=>'Profesor','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROLPEN','Nombre_Rol'=>'Profesor encargado','Descripcion_Rol'=>'']);
        //Rol::create(['Id_Rol'=>'ROLJEF','Nombre_Rol'=>'Jefe CEA','Descripcion_Rol'=>'']);
        //Rol::create(['Id_Rol'=>'ROLTCA','Nombre_Rol'=>'Encargado Taller de Carnes','Descripcion_Rol'=>'']);
        //Rol::create(['Id_Rol'=>'ROLINC','Nombre_Rol'=>'Encargado Incinerador','Descripcion_Rol'=>'']);
    }
}
