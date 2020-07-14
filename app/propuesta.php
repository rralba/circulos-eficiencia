<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propuesta extends Model
{
    protected $fillable = [
        'id','identificador','registro','direccion','subdireccion','departamento','contacto','clave','extension','id_autoriza','mejorar','objetivo','solucion','proyecto','creativo','areas_part','skills_integ','principales_act','conocimiento_critico','sindicalizados','beneficio_eco','inicio','final'
   ]; 
   public function empleadosol()
        {
            return $this->belongsToMany(empleado::class, 'integrantes_propuesta', 'propuesta_id', 'empleado_id')
            ->withPivot('id','propuesta_id', 'empleado_id','rol');
        }
    public function attach()
	    {
	        return $this->hasMany(attach::class, 'propuestas_id', 'id');
	    }
}
