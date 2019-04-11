<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
   protected $fillable =[
      'proydato_id','idbeneficio','beneficio','status_pago','fecha_gen','num_pago'
   ]; 
    public function integrantes()
    {
      return $this->hasMany(integrant::class, 'proyect_id', 'proydato_id');
    }
    public function datos()
    {
      return $this->hasOne(proydato::class, 'id', 'proydato_id');
    }
    public function reconocimientos()
    {
        return $this->hasMany(reconocimiento::class, 'beneficio_id', 'idbeneficio');
    }
}