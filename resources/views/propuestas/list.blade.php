@extends('layouts.appm')

@section('content')
<span class="contact100-form-title">
    <h1 class="text-center">Propuestas de Círculo de Eficiencia</h1>
    <hr>
</span> 
    <div class="container-fluid">
        <div class="row">
            <div class="input-group justify-content-center">
                <div class="form-check form-check-inline m-2 p-2">
                    <input class="form-check-input" type="radio" name="identificador" id="nivel1" value="1" required>
                  	<label class="form-check-label" for="inlineRadio1"><h6 class="p-0 m-0">Propuestas CE Nivel 1 y 2 Sin Asignar</h6></label>
                </div>
                <div class="form-check form-check-inline m-2 p-2">
                  	<input class="form-check-input" type="radio" name="identificador" id="nivel2" value="2" required>
                  	<label class="form-check-label" for="inlineRadio2"><h6 class="p-0 m-0">Propuestas CE Nivel 3 Sin Asignar</h6></label>
                </div>  
                <div class="form-check form-check-inline m-2 p-2">
                    <input class="form-check-input" type="radio" name="identificador" id="nivel3" value="3" required>
                  	<label class="form-check-label" for="inlineRadio3"><h6 class="p-0 m-0">Propustas CE Nivel 1 y 2 Asignadas</h6></label>
                </div>
                <div class="form-check form-check-inline m-2 p-2">
                  	<input class="form-check-input" type="radio" name="identificador" id="nivel4" value="4" required>
                  	<label class="form-check-label" for="inlineRadio4"><h6 class="p-0 m-0">Propuestas CE Nivel 3 Asignadas</h6></label>
                </div>
            </div>  
        </div>
        <div class="table-responsive" id="prop3sa">
          	<table id="grid-basic" class="table table-condensed table-hover table-striped">
            	<thead>
		            <tr>
		            	<th data-column-id="id">FOLIO</th>
		                <th data-column-id="registro">REGISTRO</th>
		                <th data-column-id="direccion">DIRECCION</th>
		                <th data-column-id="depto">DEPARTAMENTO</th>
		                <th data-column-id="inicio">INICIO</th>
		                <th data-column-id="final">FINAL</th>
		                <th data-column-id="contacto">CONTACTO</th>
		                <th data-column-id="objetivo">OBJETIVO</th>
		                <th data-column-id="solucion">SOLUCION</th>
		                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
		            </tr>
	            </thead>
            	<tbody>
	              	@foreach($propuesta as $propuesta)
                    @if(($propuesta->identificador) == (2))
	                	<tr>
	                  		<td>{{ $propuesta->id }}</td>
	                  		<td>{{ \carbon\carbon::parse($propuesta->registro)->format('M-Y') }}</td>
	                  		<td>{{ $propuesta->direccion }}</td>
	                  		<td>{{ $propuesta->departamento }}</td>
	                  		<td>{{ \carbon\carbon::parse($propuesta->inicio)->format('M-Y') }}</td>
	                  		<td>{{ \carbon\carbon::parse($propuesta->final)->format('M-Y') }}</td>
	                  		<td>{{ $propuesta->contacto }}</td>
	                  		<td>{{ $propuesta->objetivo }}</td>
	                  		<td>{{ $propuesta->solucion }}</td>
	                	</tr>
                    @endif
	                @endforeach
            	</tbody>
            </table>
        </div>
  	</div>
<script>
  	$( document ).ready(function(){
      	$("#grid-basic").bootgrid({
        	formatters: {
          	"actions": function(column, row)
          	{
            return "<button onclick=\"document.getElementById('asignar').style.display='block'\" data-id=\"" + row.id + "\" class=\"btn btn-sm btn-outline-primary small edit\"><span class=\"fa fa-pencil  \"></span></button>"; 
          	}
        }}).on("loaded.rs.jquery.bootgrid", function (){
        	/* Executes after data is loaded and rendered */
        	$(this).find(".delete").click(function (e) {
            	$('#pinn').val($(this).data("id")); 
            	$('#del_id').val($(this).data("id"));
            	$('#delete_name').html($(this).data("proyect_id"));
        	});
      	});
    });  
</script>
@endsection