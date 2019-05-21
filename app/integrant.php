<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class integrant extends Model
{
  protected $fillable = [
    'id,proyect_id','empleado_id','rol'
  ];
}