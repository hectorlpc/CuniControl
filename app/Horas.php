<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Horas','Id_Solicitud','Id_Actividad','Fecha','Hora_Entrada','Hora_Salida','Status'];
    protected $table='Horas_Alumno';
    protected $primaryKey='Id_Horas';    
}
