@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <button type="button" class="btn btn-primary btn-lg float-right fa fa-user-plus" data-toggle="modal" data-target="#addproy"></button>
    <div class="table-responsive">
        <table id="grid-basic" data-toggle="bootgrid" class="table table-bordered table-condensed table-hover table-striped" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th data-column-id="id" data-type="numeric">Id</th>
                    <th data-column-id="proyecto">Proyecto</th>
                    <th data-column-id="registro">Registro</th>
                    <th data-column-id="nivel">Nivel</th>
                    <th data-column-id="departamento">Departamento</th>
                    <th data-column-id="asesor">Asesor</th>
                    <th data-column-id="comite">Comite</th>
                    <th data-column-id="metodologia">Metodologia</th>
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                </tr>
            </thead>
            <tbody>  
                @foreach($proyect as $proyectos) 
                    <tr>
                        <td>{{ $proyectos->id }}</td>
                        <td>{{ $proyectos->proyecto }}</td> 
                        <td>{{ $proyectos->fecha_reg }}</td>
                        <td>{{ $proyectos->nivel }}</td>
                        <td>{{ $proyectos->depto }}</td>
                        <td>{{ $proyectos->asesor }}</td>
                        <td>{{ $proyectos->comite }}</td>
                        <td>{{ $proyectos->metodologia }}</td> 
                    </tr>
                @endforeach   
            </tbody>
        </table>
        {{-- {{ $proyect->render() }}   --}}
    </div>
</div>
  <script>
    $( document ).ready(function(){
        $("#grid-basic").bootgrid({
          formatters: {
            "actions": function(column, row)
            {
              return "<button onclick=\"window.open('{{ route('proyects.show', $proyectos->id) }}', '_self').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-file-text-o\"></span></button> " +
                   "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-ban\"></span></button>";
            }
          }}).on("loaded.rs.jquery.bootgrid", function (){
            /* Executes after data is loaded and rendered */
            $(this).find(".edit").click(function (e) {
              $('#pin').val($(this).data("pin"));
              $('#proy_id').val($(this).data("proyect_id")); 
              $('#edit_id').val($(this).data("id"));
              $('#fname').val($(this).data("nombre"));
              $('#lname').val($(this).data("departamento"));
              $('#gender').val($(this).data("posicion"));
              $('#email').val($(this).data("nivel"));
              $('#country').val($(this).data("rol"));
              $('#salary').val($(this).data("direccion"));
              $('#cia').val($(this).data("cia"));
            });
            $(this).find(".delete").click(function (e) {
              $('#pinn').val($(this).data("pin")); 
              $('#proye_id').val($(this).data("proyect_id"));
              $('#del_id').val($(this).data("id"));
              $('#asig').val($(this).data("rol"));
              $('#delete_name').html($(this).data("id"));
            });
          });
        });
        
</script>
{{-- <div class="container">
<br>
    @can('proyects.create')
        <a href="{{ route('proyects.create') }}" 
        class="btn btn-sm btn-primary float-right">
            Crear
        </a>
    @endcan
<br>
<br>
   <table class="table table-striped table-hover">
        <thead class="">
            <tr>
                <th data-column-id="id" width="10px">ID</th>
                <th width="400px">Nombre</th>
                <th>Fecha de Registro</th>
                <th>Nivel</th>
                <th>Departamento</th>
                <th colspan="3">&nbsp;</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($proyects as $proyect)
                <tr>
                    <td>{{ $proyect->id }}</td>
                    <td>{{ $proyect->proyecto }}</td>
                    <td>{{ $proyect->fecha_reg }}</td>
                    <td>{{ $proyect->nivel }}</td>
                    <td>{{ $proyect->depto }}</td>
                        @can('proyects.show')
                        <td width="10px">
                            <a  href="{{ route('proyects.show', $proyect->id) }}"
                            class="btn btn-sm btn-primary">
                                Ver
                            </a>
                        </td>
                        @endcan
                        @can('proyects.edit')
                        <td width="10px">
                            <a href="{{ route('proyects.edit', $proyect->id) }}"
                            class="btn btn-sm btn-primary">
                                Editar
                            </a>
                        </td>
                        @endcan
                        @can('proyects.destroy')
                        <td width="10px">
                            {!! Form::open(['route' => ['proyects.destroy', $proyect->id],
                            'method' => 'delete']) !!} 
                                <button class="btn btn-sm btn-danger">
                                    Cancelar
                                </button>
                            {!! Form::close() !!}
                        </td>    
                        @endcan
                </tr>
            @endforeach
        </tbody>
   </table>
   {{ $proyects->render() }}  
</div> --}}
@endsection