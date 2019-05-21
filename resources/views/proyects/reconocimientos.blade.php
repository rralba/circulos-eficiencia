@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>{{ $proyect->proyecto }}</h1>
    <div class="table-responsive">
        <table id="grid-basic" class="w3-table-all w3-card-4">
            <thead>
                <tr>
                    <th data-column-id="proyect_id">proyect_id</th>
                    <th data-column-id="id">Benefico</th>
                    <th data-column-id="nombre">Empleado</th>
                    <th data-column-id="departamento">Pago</th>
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                  @if (($data->id)==($proyect->id))
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->beneficio_id }}</td>
                      <td>{{ $data->empleado }}</td>
                      <td>{{ $data->pago }}</td>
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
                    return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-pencil\"></span></button> " +
                    "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-trash\"></span></button>";
                  }
                }}).on("loaded.rs.jquery.bootgrid", function (){
                  /* Executes after data is loaded and rendered */
                  $(this).find(".edit").click(function (e) {
                    $('#proyect_id').val($(this).data("proyect_id")); 
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
                    $('#pin').val($(this).data("pin")); 
                    $('#proy_id').val($(this).data("proyect_id"));
                    $('#del_id').val($(this).data("id"));
                    $('#rol').val($(this).data("rol"));
                    $('#delete_name').html($(this).data("id"));
                  });
                });
              });
              
      </script>         
@endsection

