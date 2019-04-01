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
    public function reconocimientos()
    {
        return $this->belongsToMany(reconocimiento::class, 'beneficios', 'proyect_id', 'beneficio_id')
        ->withPivot('proyect_id','beneficio_id','fecha_gen','beneficio','status','num_pago','mes_pago');
    }
    public function beneficios()
    {
      return $this->hasMany(beneficio::class, 'proyect_id');
    }
}