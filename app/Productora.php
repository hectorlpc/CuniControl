<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productora extends Model
{   
    public $incrementing=false;
    public $fillable=['Id_Conejo_Hembra','Id_Raza','Numero_Conejo','Fecha_Activo','Fecha_Ultima_Monta','Status','Numero_Monta','Monta_Positiva'];
    protected $table='Coneja_Productora';
    protected $primaryKey='Id_Conejo_Hembra';      	

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }

    // public function numero()
    // {
    // 	return $this->belongsTo(Conejo::class,'Id_Conejo','Id_Conejo');
    // }
}    