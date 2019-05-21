<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
   protected $fillable =[
    'id','proyecto','fecha_reg','nivel','depto','asesor','fecha_ini','fecha_fin','comite','valor'
    ,'metodologia','ahorro_anual_proy','proy_status'
   ]; 
    public function empleados()
        {
            return $this->belongsToMany(empleado::class, 'integrants', 'proyect_id', 'empleado_id')
            ->withPivot('id','proyect_id', 'empleado_id','rol');
        }
    // public function beneficios()
    //     {
    //         return $this->belongsToMany(beneficio::class, 'reconocimientos', 'proyect_id', 'beneficio_id')
    //         ->withPivot('id','proyect_id','beneficio_id','empleado','pago');
    //     }
    public function beneficios()
    {
        return $this->hasMany(beneficio::class, 'proyect_id', 'id');
    }
}