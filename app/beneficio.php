<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    protected $fillable =[
        'id','fecha_gen','beneficio','status','num_pago','mes_pago'
    ];
    // public function proy()
    //     {
    //         return $this->belongsToMany(Proyect::class, 'reconocimientos', 'beneficio_id', 'proyect_id')
    //         ->withPivot('id','proyect_id','beneficio_id','empleado','pago');
    //     }  
    public function proyec()
    {
        return $this->hasOne(Proyect::class, 'id', 'proyect_id');
    }
    public function reco()
    {
        return $this->hasMany(reconocimiento::class, 'beneficio_id', 'id');
    }
    public function descuento()
    {
        return $this->hasMany(descuento::class, 'beneficio_id', 'id');
    }
}
