<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudHoras extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Solicitud','CURP_Alumno','Fecha_Solicitud','Horas_Totales','Id_Materia','Id_Grupo', 'CURP_Profesor'];
    protected $table='solicitud_horas';
    protected $primaryKey='Id_Solicitud';

public function alumno()
    {
    	return $this->belongsTo(Usuario::class,'CURP_Alumno','CURP');
    }
     public function horas(){
    	return $this->hasMany('Horas_Alumno');
    }	
     public function grupo(){
        return $this->belongsTo(Grupo::class,'Id_Grupo','Id_Grupo');
    }   
     public function materia(){
        return $this->belongsTo(Materia::class,'Id_Materia','Id_Materia');
    }   
    public function profesor()
    {
        return $this->belongsTo(Profesor::class,'CURP_Profesor','CURP_Profesor');
    }
}