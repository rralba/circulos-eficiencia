<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
   protected $fillable = [
        'id','nombre','posicion','depto','cia','direccion','nivel'
   ]; 
   public function proyects()
    {
      return $this->belongsToMany(proydato::class, 'integrants', 'empleado_id', 'proydato_id')
      ->withPivot('id','proydato_id', 'empleado_id', 'rol');
    }
}
