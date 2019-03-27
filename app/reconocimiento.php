<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reconocimiento extends Model
{
    protected $fillable = [
        'proyect_id','beneficio_id','beneficio_a','beneficio_b','beneficio_c','pago_total'
    ];
}
