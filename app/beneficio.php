<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    protected $fillable =[
        'fecha_gen','beneficio','status','num_pago','mes_pago'
    ];
    public function proy()
    {
        return $this->belongsToMany(Proyect::class, 'reconocimientos', 'beneficio_id', 'proyect_id')
        ->withPivot('proyect_id', 'beneficio_id', 'beneficio_a', 'beneficio_b', 'beneficio_c', 'pago_total');
    }
}
