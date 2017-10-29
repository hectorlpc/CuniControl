<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    public $incrementing=true;
    public $fillable=['Id_Baja','Id_Conejo','Id_Area', 'Fecha_Area'];
    protected $table='Baja_Conejo';
    protected $primaryKey='Id_Baja';

    public function area()
    {
    	return $this->belongsTo(Area::class,'Id_Area','Id_Area');
    }
}
