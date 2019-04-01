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
        return $this->belongsToMany(Proyect::class, 'beneficios', 'beneficio_id', 'proyect_id')
        ->withPivot('proyect_id','beneficio_id','fecha_gen','beneficio','status','num_pago','mes_pago');
    }
}
