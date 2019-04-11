<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proydato extends Model
{
    protected $fillable =[
        'id','proyecto','fecha_reg','nivel','depto','asesor','fecha_ini','fecha_fin','comite','valor'
    ,'metodologia','ahorro_anual_proy','status_proy'
    ];
    public function proye()
    {
      return $this->hasMany(Proyect::class, 'proydato_id', 'id');
    }
    public function empleados()
    {
        return $this->belongsToMany(empleado::class, 'integrants', 'proydato_id', 'empleado_id')
        ->withPivot('id', 'proydato_id', 'empleado_id','rol');
    }
}
