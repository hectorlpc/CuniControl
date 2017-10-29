<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conejo extends Model
{

    public $incrementing=false;
    public $fillable=['Id_Conejo','Tatuaje_Derecho','Tatuaje_Izquierdo','Id_Raza','Genero','Status_Conejo'];
    protected $table='Conejo';
    protected $primaryKey='Id_Conejo';
    }

 	
 	// public function raza()
 	// {
 	// 	return $this->belongsTo(Raza::class,'Id_Raza');
 	// }  
