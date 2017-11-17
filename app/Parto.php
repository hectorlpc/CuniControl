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

    public function scopeNumeroGazapos($query, $status = 'Vivos') {
        $columna = $status == 'Vivos' ? 'Numero_Vivos' : 'Numero_Muertos';

        return $query->select(\DB::raw('Raza.Nombre_Raza, SUM(Parto.' . $columna . ') AS Numero'))
            ->join('Monta', 'Parto.Id_Monta', '=', 'Monta.Id_Monta')
            ->join('Conejo', 'Monta.Id_Conejo_Hembra', '=', 'Conejo.Id_Conejo')
            ->join('Raza', 'Conejo.Id_Raza', '=', 'Raza.Id_Raza')
            ->groupBy('Raza.Nombre_Raza');
    }
}

