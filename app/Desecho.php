<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desecho extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Desecho','Id_Raza','Procedencia'];
    protected $table='Conejo_Desecho';
    protected $primaryKey='Id_Conejo_Desecho';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }    
}
