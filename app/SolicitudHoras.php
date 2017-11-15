<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudHoras extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Solicitud','CURP_Alumno','Fecha_Solicitud','Horas_Totales','Id_Materia','Id_Grupo'];
    protected $table='solicitud_horas';
    protected $primaryKey='Id_Solicitud';

public function alumno()
    {
    	return $this->belongsTo(Usuario::class,'CURP','CURP_Alumno');
    	//return $this->belongsTo('App\Conejo','Id_Conejo_Hembra','Id_Conejo_Hembra');
    }
     public function horas(){
    	return $this->hasMany('Horas_Alumno');
    }	
}