<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engorda extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Engorda','Fecha_Alta','Id_Raza','Status','Creador','Modificador'];
    protected $table='Conejo_Engorda';
    protected $primaryKey='Id_Conejo_Engorda';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }

    // public function conejo()
    // {
    // 	return $this->belongsTo(Conejo::class,'Id_Conejo','Id_Conejo_Engorda');
    // }
}
