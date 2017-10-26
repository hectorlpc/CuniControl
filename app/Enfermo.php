<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Enfermo','Id_Conejo','Fecha_Inicio','Fecha_Fin'];
    protected $table='Conejo_Enfermo';
    protected $primaryKey='Id_Conejo_Enfermo';
    //

   	public function enfermedades() {
   		return $this->belongsToMany(Enfermedad::class, 'Tratamiento', 'Id_Conejo_Enfermo', 'Id_Enfermedad')->withPivot('Id_Medicamento');
   	}
}
