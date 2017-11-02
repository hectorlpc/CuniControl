<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Grupo', 'Id_Carrera'];
    protected $table='Grupo';
    protected $primaryKey='Id_Grupo';        

    public function carrera ()
    {
    	return $this->belongsTo(Carrera::class,'Id_Carrera', 'Id_Carrera');
    }
}
