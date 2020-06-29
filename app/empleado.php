<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
   protected $fillable = [
        'nombre','posicion','depto','cia','direccion','nivel'
   ]; 
   public function proyects()
    	{
      		return $this->belongsToMany(Proyect::class, 'integrants', 'empleado_id', 'proyect_id')
      		->withPivot('id','proyect_id', 'empleado_id', 'rol');
    	}
   	public function mejoras()
    	{
      		return $this->belongsToMany(mejora::class, 'integrants', 'empleado_id', 'mejora_id')
      		->withPivot('id','mejora_id', 'empleado_id', 'rol');
    	}
      public function propuesta()
      {
          return $this->belongsToMany(Proyect::class, 'integrantes_propuesta', 'empleado_id', 'propuesta_id')
          ->withPivot('id','propuesta_id', 'empleado_id', 'rol');
      }
}
