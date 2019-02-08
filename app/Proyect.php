<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
   protected $fillable =[
    'id','proyecto','fecha_reg','nivel','depto','asesor','fecha_ini','fecha_fin','comite','valor'
    ,'metodologia','ahorro_anual_proy'
   ]; 
     public function empleados()
        {
            return $this->belongsToMany(empleado::class, 'integrants', 'proyect_id', 'empleado_id')
            ->withPivot('rol');
        }
}
