<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conejo extends Model
{

    public $incrementing=false;
    public $fillable=['Id_Conejo','Tatuaje_Derecho','Tatuaje_Izquierdo','Fecha_Nacimiento','Id_Raza','Genero','Status','Desecho','Engorda','Productora','Id_Jaula','Semental','Creador','Modificador'];
    protected $table='Conejo';
    protected $primaryKey='Id_Conejo';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }

    public function productora()
    {
    	return $this->belongsTo(Productora::class,'Id_Conejo','Id_Conejo_Hembra');
    }
}
