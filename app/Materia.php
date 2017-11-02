<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Materia','Nombre_Materia','Id_Grupo'];
    protected $table='Materia';
    protected $primaryKey='Id_Materia';

    public function grupo ()
    {
    	return $this->belongsTo(Grupo::class,'Id_Grupo','Id_Grupo');
    }
}