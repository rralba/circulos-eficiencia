@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $proyect->proyecto }}</h1> <br>
    <button type="button" class="btn btn-outline-secondary btn-lg float-right fa fa-calculator" data-toggle="modal" data-target="#reconocimientos" title="calcular reconocimientos">  Calcular Reconocimiento</button>
    <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-user-plus" data-toggle="modal" data-target="#adduser" title="agregar Beneficio">  Agregar Beneficio</button>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline1" name="status" value="0">
        <label class="custom-control-label" for="defaultInline1">Pendiente de Pago</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline2" name="status1" value="1" checked>
        <label class="custom-control-label" for="defaultInline2">Pagado</label>
      </div>  
        <div class="table-responsive">
            <table id="grid-basic" class="w3-table-all w3-card-4">
                <thead>
                    <tr>
                        <th data-column-id="proyect_id">Id</th>
                        <th data-column-id="rol">Beneficio Id</th>
                        <th data-column-id="id">Fecha de Registro</th>
                        <th data-column-id="nombre">Beneficio</th>
                        <th data-column-id="departamento">Status</th>
                        <th data-column-id="posicion">'#' pago</th>
                        <th data-column-id="nivel">Mes de Pago</th> 
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyect->beneficios as $beneficio)
                    @if (($beneficio->status)==1)
                        <tr>
                            <td>{{ $beneficio->proyect_id }}</td>
                            <td>{{ $beneficio->id }}</td>
                            <td>{{ $beneficio->fecha_gen }}</td>
                            <td>{{ $beneficio->beneficio }}</td>
                            <td>{{ $beneficio->status }}</td>
                            <td>{{ $beneficio->num_pago }}</td>
                            <td>{{ $beneficio->mes_pago }}</td>
                        </tr>
                    @endif    
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
<div class="modal fade" id="reconocimientos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reconocimientos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('reconocimientos.index', $proyect->id) }}" method = "GET">
             {{ csrf_field() }}
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Id sap:</label>
                <input type="text" class="form-control" id="id" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" readonly>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Departamento:</label>
                <input type="text" class="form-control" id="depto" readonly>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Posicion:</label>
                <input type="text" class="form-control" id="posicion" readonly>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nivel:</label>
                <input type="text" class="form-control" id="nivel" readonly>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Rol:</label>
                <select class="form-control" id="rol" required>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Direccion:</label>
                <input type="select" class="form-control" id="direccion" readonly>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Compañia:</label>
                <input type="text" class="form-control" id="cia" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>
        $( document ).ready(function(){   
            $("#grid-basic").bootgrid({
              formatters: {
                "actions": function(column, row)
                {
                  return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-primary small edit\" title=\"Editar\"><span class=\"fa fa-pencil\"></span></button> " +
                  "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\" title=\"Eliminar\"><span class=\"fa fa-trash\"></span></button> " +
                  "<button onclick=\"document.getElementById('reconocimientos').style.display='block'\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-secondary small edit\" title=\"Calcular Reconocimiento\" data-toggle=\"modal\" data-target=\"#reconocimientos\"><span class=\"fa fa-calculator\"></span></button> ";
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

