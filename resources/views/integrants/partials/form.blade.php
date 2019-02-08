<div class="form-group">
    {{ Form::label('id', 'Id de usuario SAP') }}
    {{ Form::text('id', null, ['class' => 'form-control']) }}
 </div>
 <div class="form-group">    
    {{ Form::label('nombre', 'Nombre de empleado') }}
    {{ Form::label('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('depto', 'Departamento') }}
    {{ Form::label('depto', null, ['class' => 'form-control']) }}
</div>
<div class="form-depto">
    {{ Form::label('posicion', 'Posicion') }}
    {{ Form::label('posicion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('nivel', 'Nivel') }}
    {{ Form::label('nivel', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('rol', 'Rol en el proyecto') }}
    {{ Form::text('rol', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('direccion', 'Direccion') }}
    {{ Form::label('direccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('cia', 'Compañia') }}
    {{ Form::label('cia', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>