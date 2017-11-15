<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parto extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Parto','Fecha_Parto','Id_Monta','Numero_Vivos','Numero_Muertos','Total_Vivos','Peso_Nacer','Activado','Creador','Modificador'];
    protected $table='Parto';
    protected $primaryKey='Id_Parto';    

    public function monta()
    {
    	return $this->belongsTo(Monta::class,'Id_Monta','Id_Monta');
    //	return $this->belongsTo('App\Monta','Id_Monta','Id_Monta');
    }
}

