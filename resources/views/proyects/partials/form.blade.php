<div class="form-group">
    {{ Form::label('proyecto', 'Nombre del proyecto') }}
    {{ Form::text('proyecto', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_reg', 'Fecha de registro del proyecto') }}
    {{ Form::text('fecha_reg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('nivel', 'nivel del proyecto') }}
    {{ Form::text('nivel', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('depto', 'Departamento del proyecto') }}
    {{ Form::text('depto', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('asesor', 'Asesor asignado al proyecto') }}
    {{ Form::text('asesor', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_ini', 'Fecha de inicio del proyecto') }}
    {{ Form::text('fecha_ini', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_fin', 'Fecha fin del proyecto') }}
    {{ Form::text('fecha_fin', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('comite', 'Numero de comite') }}
    {{ Form::text('comite', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('valor', 'Valor corporativo del proyecto') }}
    {{ Form::text('valor', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('metodologia', 'Metodologia del proyecto') }}
    {{ Form::text('metodologia', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('ahorro_anual_proy', 'Ahorro anual proyectado') }}
    {{ Form::text('ahorro_anual_proy', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>