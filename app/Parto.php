<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parto extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Parto','Fecha_Parto','Id_Conejo_Hembra','Fecha_Monta','Numero_Vivos','Numero_Muertos','Peso_Nacer'];
    protected $table='Parto';
    protected $primaryKey='Id_Parto';    
}
