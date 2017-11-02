<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productora extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Productora','Id_Raza','Id_Conejo','Numero_Conejo','Status'];
    protected $table='Coneja_Productora';
    protected $primaryKey='Id_Productora';		
    
    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }

    // public function numero()
    // {
    // 	return $this->belongsTo(Conejo::class,'Id_Conejo','Id_Conejo');
    // }
}    