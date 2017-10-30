<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cemental extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Cemental','Id_Raza','Id_Conejo','Status'];
    protected $table='Conejo_Cemental';
    protected $primaryKey='Id_Cemental';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }    
}
