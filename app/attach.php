<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attach extends Model
{
	protected $fillable =[
        'id','propuestas_id','attach_path'
    ];
    public function proyecattach()
    {
        return $this->hasOne(Proyect::class, 'id', 'propuestas_id');
    }
}
