<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reconocimiento extends Model
{	
    protected $fillable = [
        'id','beneficio_id','empleado','previo','pago','ajuste'
    ];
    
    public function benef()
    {
        return $this->hasOne(beneficio::class, 'id', 'beneficio_id');
    }
}
