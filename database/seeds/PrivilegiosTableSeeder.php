<?php

use Illuminate\Database\Seeder;
use App\Privilegio;

class PrivilegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Privilegio::create(['Id_Privilegio'=>'SOLPRA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'Solicitar Horas Practicas','Descripcion_Privilegio'=>'']);
        
        Privilegio::create(['Id_Privilegio'=>'REGPRA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'Registro Practica','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'ABRCUR','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'Abrir Cursos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'TATJOS','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'tatuado de conejos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPNTA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'Supervision de la monta','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAION','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza diagnostico de gestacion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPION','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'supervision de gestacion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPRTO','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'supervision del parto','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGPOS','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'registro de destete de gazapos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGJOS','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'registro de donacion de conejos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGRMO','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'registro de conejo enfermo','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGCIA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'registro de baja de conejos por transferencia','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'AUTHOR','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'autoriza solicitud de horas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'AUTPRA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'autorizar horas practicas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CALACT','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'calendarizar actividades','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CENENG','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'censo de engorda','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAINS','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza solicitud de compra de insumos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REACAR','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza solicitud de transferencia al taller de carnes','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAINC','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza solicitud de transferencia de incinerador','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CENMUE','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'censo de muerte','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'REAPRO','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza censo de produccion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'VERALU','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'verifica las horas cumplidas por el alumno','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'VALPRA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'Validar Practica','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'GESCAT','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'gestion de catalogo','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'GESROL','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'gestiom de roles','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'INSCUR','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'inscripcion a cursos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'PROMON','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'programa montas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REACOM','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'realiza requerimiento de compra','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REVTRA','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'revisa el numero de conejos transferidos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REVINC','Id_Rol'=>'Alumno','Nombre_Privilegio'=>'revisa el numero de conejos transferidos al incinerador','Descripcion_Privilegio'=>'']);
    }
}
