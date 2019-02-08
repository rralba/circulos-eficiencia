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
      ->withPivot('rol');
    } 
}
