<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cemental extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Conejo_Macho','Id_Raza','Status'];
    protected $table='Conejo_Cemental';
    protected $primaryKey='Id_Conejo_Macho';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }    
}
