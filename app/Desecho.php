<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desecho extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Desecho','Id_Raza','Id_Conejo_Desecho','Status'];
    protected $table='Conejo_Desecho';
    protected $primaryKey='Id_Desecho';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }    
}
