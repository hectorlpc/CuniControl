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
        Rol::create(['Id_Rol'=>'ROL001','Nombre_Rol'=>'Alumno','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL002','Nombre_Rol'=>'Administrador','Descripcion_Rol'=>'']);

        Rol::create(['Id_Rol'=>'ROL003','Nombre_Rol'=>'Encargado del Modulo','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL004','Nombre_Rol'=>'Profesor','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL005','Nombre_Rol'=>'Profesor encargado','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL006','Nombre_Rol'=>'Jefe CEA','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL007','Nombre_Rol'=>'Encargado Taller de Carnes','Descripcion_Rol'=>'']);
        Rol::create(['Id_Rol'=>'ROL008','Nombre_Rol'=>'Encargado Incinerador','Descripcion_Rol'=>'']);
    }
}
