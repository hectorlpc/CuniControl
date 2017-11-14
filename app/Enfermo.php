<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermo extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Conejo_Enfermo','Id_Conejo','Fecha_Inicio','Fecha_Fin','Creador','Modificador'];
    protected $table='Conejo_Enfermo';
    protected $primaryKey='Id_Conejo_Enfermo';

   	public function enfermedades() {
   		return $this->belongsToMany(Enfermedad::class, 'Tratamiento', 'Id_Conejo_Enfermo', 'Id_Enfermedad')
   			->withPivot('Id_Medicamento')
   			->withTimestamps();
   	}

   	public function tratamientos() {
   		return $this->join('Tratamiento', 'Conejo_Enfermo.Id_Conejo_Enfermo', '=', 'Tratamiento.Id_Conejo_Enfermo')
   								->join('Enfermedad', 'Tratamiento.Id_Enfermedad', '=', 'Enfermedad.Id_Enfermedad')
   								->join('Medicamento', 'Tratamiento.Id_Medicamento', '=', 'Medicamento.Id_Medicamento')
   								->select(['Conejo_Enfermo.*', 'Enfermedad.Id_Enfermedad', 'Enfermedad.Nombre_Enfermedad', 'Medicamento.Id_Medicamento', 'Medicamento.Nombre_Medicamento'])
   									->where('Tratamiento.Id_Conejo_Enfermo', '=', $this->Id_Conejo_Enfermo)->get();
   	}
}
