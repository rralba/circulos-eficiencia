<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    protected $fillable =[
        'proyect_id','beneficio_id','fecha_gen','beneficio','status','num_pago','mes_pago'
    ];
}
