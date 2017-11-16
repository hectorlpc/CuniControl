<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monta extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Monta','Fecha_Monta','Id_Conejo_Hembra','Id_Conejo_Macho','Fecha_Diagnostico','Resultado_Diagnostico','Fecha_Parto','Id_Jaula','Activado','Creador','Modificador'];
    protected $table='Monta';
    protected $primaryKey='Id_Monta';

	public function conejo()
    {
    	return $this->belongsTo(Conejo::class,'Id_Conejo_Hembra','Id_Conejo');
    	//return $this->belongsTo('App\Conejo','Id_Conejo_Hembra','Id_Conejo_Hembra');
    }

    public function jaula()
    {
        return $this->belongsTo(Jaula::class,'Id_Jaula','Id_Jaula');
    }
}