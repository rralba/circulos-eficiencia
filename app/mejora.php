<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mejora extends Model
{
    protected $fillable =[
    	'id','registro','direccion','subdireccion','departamento','seccion','valor','desperdicio','inicio','final','asesor','entrego','gpago','status','mes_terminacion','reprogramada','amejorar','objetivo','solucion'
    ];
    public function empleadoss()
        {
            return $this->belongsToMany(empleado::class, 'integrants', 'mejora_id', 'empleado_id')
            ->withPivot('id','mejora_id', 'empleado_id','rol');
        }
    public function beneficios()
    	{
        	return $this->hasMany(beneficio::class, 'mejora_id', 'id');
    	}
        public function jefes()
      {
          return $this->hasOne(empleado::class, 'id', 'id_autoriza');
      }
}
