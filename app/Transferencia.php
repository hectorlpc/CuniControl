<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
	
class Transferencia extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo','Id_Area','Fecha_Baja','Creador','Modificador'];
    protected $table='Transferencia_Conejo';
    protected $primaryKey='Id_Transferencia';

    public function area()
    {
    	return $this->belongsTo(Area::class,'Id_Area','Id_Area');
    }
}
