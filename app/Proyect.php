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
            ->withPivot('id', 'proyect_id', 'empleado_id','rol');
        }
    public function integrantes()
    {
      return $this->hasMany(integrant::class, 'proyect_id');
    }
    public function beneficios()
    {
        return $this->belongsToMany(beneficio::class, 'reconocimientos', 'proyect_id', 'beneficio_id')
        ->withPivot('proyect_id', 'beneficio_id', 'beneficio_a', 'beneficio_b', 'beneficio_c', 'pago_total');
    }
    public function reconocimientos()
    {
      return $this->hasMany(reconocimiento::class, 'proyect_id');
    }
}