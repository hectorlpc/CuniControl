<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Materia','Nombre_Materia','Id_Carrera','Id_Periodo'];
    protected $table='Materia';
    protected $primaryKey='Id_Materia';

    public function carrera ()
    {
    	return $this->belongsTo(Carrera::class,'Id_Carrera','Id_Carrera');
    }
 	public function periodo ()
    {
    	return $this->belongsTo(Periodo::class,'Id_Periodo','Id_Periodo');
    }
    public function grupos (){
    	return $this->belongsToMany(Grupo::class,'Materia_Grupo','Id_Materia','Id_Grupo');
    }
       
}