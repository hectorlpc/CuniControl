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
        Privilegio::create(['Id_Privilegio'=>'SOLPRA','Nombre_Privilegio'=>'Solicitar Horas Practicas','Descripcion_Privilegio'=>'']);
        
        Privilegio::create(['Id_Privilegio'=>'REGPRA','Nombre_Privilegio'=>'Registro Practica','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'ABRCUR','Nombre_Privilegio'=>'Abrir Cursos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'TATJOS','Nombre_Privilegio'=>'tatuado de conejos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPNTA','Nombre_Privilegio'=>'Supervision de la monta','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAION','Nombre_Privilegio'=>'realiza diagnostico de gestacion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPION','Nombre_Privilegio'=>'supervision de gestacion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'SUPRTO','Nombre_Privilegio'=>'supervision del parto','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGPOS','Nombre_Privilegio'=>'registro de destete de gazapos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGJOS','Nombre_Privilegio'=>'registro de donacion de conejos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGRMO','Nombre_Privilegio'=>'registro de conejo enfermo','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REGCIA','Nombre_Privilegio'=>'registro de baja de conejos por transferencia','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'AUTHOR','Nombre_Privilegio'=>'autoriza solicitud de horas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'AUTPRA','Nombre_Privilegio'=>'autorizar horas practicas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CALACT','Nombre_Privilegio'=>'calendarizar actividades','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CENENG','Nombre_Privilegio'=>'censo de engorda','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAINS','Nombre_Privilegio'=>'realiza solicitud de compra de insumos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REACAR','Nombre_Privilegio'=>'realiza solicitud de transferencia al taller de carnes','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REAINC','Nombre_Privilegio'=>'realiza solicitud de transferencia de incinerador','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'CENMUE','Nombre_Privilegio'=>'censo de muerte','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'REAPRO','Nombre_Privilegio'=>'realiza censo de produccion','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'VERALU','Nombre_Privilegio'=>'verifica las horas cumplidas por el alumno','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'VALPRA','Nombre_Privilegio'=>'Validar Practica','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'GESCAT','Nombre_Privilegio'=>'gestion de catalogo','Descripcion_Privilegio'=>'']);

        Privilegio::create(['Id_Privilegio'=>'GESROL','Nombre_Privilegio'=>'gestiom de roles','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'INSCUR','Nombre_Privilegio'=>'inscripcion a cursos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'PROMON','Nombre_Privilegio'=>'programa montas','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REACOM','Nombre_Privilegio'=>'realiza requerimiento de compra','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REVTRA','Nombre_Privilegio'=>'revisa el numero de conejos transferidos','Descripcion_Privilegio'=>'']);
        Privilegio::create(['Id_Privilegio'=>'REVINC','Nombre_Privilegio'=>'revisa el numero de conejos transferidos al incinerador','Descripcion_Privilegio'=>'']);
    }
}
