<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class integrantes_propuesta extends Model
{
    protected $fillable = [
    'id','propuesta_id','empleado_id','rol'
  ];
}
