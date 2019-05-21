<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reconocimiento extends Model
{
    protected $fillable = [
        'id','proyect_id','beneficio_id','empleado','pago'
    ];
    public function benef()
    {
        return $this->hasOne(beneficio::class, 'id', 'beneficio_id');
    }
}
