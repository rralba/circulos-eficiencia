<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $fillable = [
        'proyecto', 'fecha_reg', 'nivel', 'depto', 'asesor', 'fecha_ini', 'fecha_fin', 'comite', 'valor', 'metodologia', 'ahorro_anual_proy',
    ];
}
