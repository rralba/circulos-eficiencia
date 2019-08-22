<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descuento extends Model
{
    protected $fillable =[
        'id','beneficio_id','sap_id','descuento','concepto'
    ];
    public function beneficios()
    {
        return $this->hasOne(beneficio::class, 'id', 'beneficio_id');
    }
}
