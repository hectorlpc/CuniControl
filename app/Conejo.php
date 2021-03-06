<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conejo extends Model
{

    public $incrementing=false;
    public $fillable=['Id_Conejo','Tatuaje_Derecho','Tatuaje_Izquierdo','Fecha_Nacimiento','Fecha_Muerte','Id_Raza','Genero','Status','Id_Jaula','Creador','Modificador'];
    protected $table='Conejo';
    protected $primaryKey='Id_Conejo';

    public function raza()
    {
    	return $this->belongsTo(Raza::class,'Id_Raza','Id_Raza');
    }

    public function productora()
    {
    	return $this->belongsTo(Productora::class,'Id_Conejo','Id_Conejo_Hembra');
    }

    public function scopeNumeroDe($query, $status = 'Vivo') {
        return $query->select(\DB::raw('Nombre_Raza, COUNT(*) AS Numero'))
            ->join('Raza', 'Conejo.Id_Raza', '=', 'Raza.Id_Raza')
            ->where('Status', $status)
            ->groupBy('Nombre_Raza');
    }
}
