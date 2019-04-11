<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reconocimiento extends Model
{
    protected $fillable = [
        'beneficio_a','beneficio_b','beneficio_c','pago_total'
    ];
    public function proy()
    {
      return $this->hasOne(proyect::class, 'idbeneficio', 'beneficio_id');
    }
}
