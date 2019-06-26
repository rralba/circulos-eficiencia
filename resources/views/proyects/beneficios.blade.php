@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $proyect->proyecto }}</h1> <br>
    <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-user-plus" data-toggle="modal" data-target="#addbenef" title="agregar Beneficio">  Agregar Beneficio</button>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline1" name="status" value="0">
        <label class="custom-control-label" for="defaultInline1">Pendiente de Pago</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline2" name="status1" value="1" checked>
        <label class="custom-control-label" for="defaultInline2">Pagado</label>
      </div>  
      <div class="table-responsive">
        <br>
        <table id="grid-basic" class="w3-table-all w3-card-4">
          <thead>
            <tr>
              <th data-column-id="proyect_id">Id</th>
              <th data-column-id="id">Beneficio Id</th>
              <th data-column-id="fecha_gen">Fecha de Registro</th>
              <th data-column-id="beneficio">Beneficio</th>
              <th data-column-id="status">Status</th>
              <th data-column-id="num_pago">'#' pago</th>
              <th data-column-id="mes_pago">Mes de Pago</th> 
              <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($proyect->beneficios as $beneficio)
              <tr>
                <td>{{ $beneficio->proyect_id }}</td>
                <td>{{ $beneficio->id }}</td>
                <td>{{ $beneficio->fecha_gen }}</td>
                <td>{{ $beneficio->beneficio }}</td>
                <td>{{ $beneficio->status }}</td>
                <td>{{ $beneficio->num_pago }}</td>
                <td>{{ $beneficio->mes_pago }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>  
</div>
<div class="modal fade" id="addbenef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agreragr Beneficio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('beneficios.store') }}" method = "POST">
           {{ csrf_field() }}
          <div class="form-group">
              <input type="hidden" id="proyect_id" name="proyect_id" value="{{ $beneficio->proyect_id }}">
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label"> Fecha de Registro:</label>
              <input type="date" class="form-control" id="fecha_gen" name="fecha_gen" required>
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Beneficio:</label>
              <input type="text" class="form-control" id="beneficio" name="beneficio" required>
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
<div id="edit" class="modal">
<div class="modal-dialog">
<div class="modal-content">
   <div class="modal-header">
      <h5 class="modal-title">Editar Integrante</h5>
      <div class="center">
        <span onclick="document.getElementById('edit').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
   </div>
   <form class="container" action="{{ route('integrants.save') }}" method = "post">
     {{ csrf_field() }}
     <input type="hidden" id="pin" name="pin">
     <input type="hidden" id="proyect_id" name="proyect_id">
      <div class="modal-body">
           <div class="row">
              <div class="col clearfix">
               <div class="col-xs-2"><label><b>Id SAP</b></label></div>
               <div class="col-xs-4"><input class="form-control form-control-sm" id="edit_id" type="text" placeholder="Numero de ficha" name="edit_id" required></div>
              </div>
            </div>
         <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Nombre</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="fname" type="text" placeholder="Nombre de empleado" name="" required readonly>
            </div>
           </div>
         </div>
         <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Departamento</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="lname" type="text" placeholder="Departamento" name="" required readonly></div>
           </div>
        </div>
        <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Posicion</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="gender" type="text" placeholder="posicion" name="" required readonly></div>
           </div>
        </div>
        <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Nivel</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="email" type="email" placeholder="nivel" name="" required readonly></div>
           </div>
        </div>
         <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Rol</b></label></div>
            <div class="col-xs-4"><select class="form-control form-control-sm" id="country" placeholder="Rol" name="country" required>  
              <option>1</option>
              <option>2</option>
              </select>
           </div>
           </div>
        </div>  
         <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Direccion</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="salary" type="text" placeholder="Direccion" name="" required readonly></div>
           </div>
        </div>
         <div class="row">
           <div class="col clearfix">
            <div class="col-xs-2"><label><b>Compañia</b></label></div>
            <div class="col-xs-4"><input class="form-control form-control-sm" id="cia" type="text" placeholder="Compañia" name="" required readonly></div>
           </div>
        </div> 
        <button class="btn btn-primary small" type="submit">Save</button>  
  </div>
</form>
  <div class="modal-footer">
     
     <button onclick="document.getElementById('edit').style.display='none'" type="button" class="btn btn-secundary small">Cancel</button>
  </div>
</div>
</div>
</div>
<div id="delete" class="modal">
<div class="modal-dialog">
  <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <div class="center">
           <span onclick="document.getElementById('delete').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
     </div>
     <form class="container" action="{{ route('integrants.delete') }}  " method="POST">
     {{ csrf_field() }}
     <input type="hidden" id="pin" name="pin">
     <input type="hidden" id="proy_id" name="proy_id">
     <input type="hidden" id="rol" name="rol">
        <div class="modal-body">
           <input type="hidden" id="del_id" name="del_id">
           <p>Seguro que deseas borrar al empleado Id <span id ="delete_name"></span> ?</p>
           <button type="submit" class="btn btn-primary small"> Delete </button>
        </div>
     </form>
     <div class="modal-footer">
        <button onclick="document.getElementById('delete').style.display='none'" type="button" class="btn btn-secundary small">Cancel</button>
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
          return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-pencil\"></span></button> " +
          "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-trash\"></span></button> " +
          "<button onclick=\"document.getElementById('reconocimientos').style.display='block'\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-posicion=\"" + row.posicion + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-secondary small edit\" title=\"Calcular Reconocimiento\" data-toggle=\"modal\" data-target=\"#reconocimientos\"><span class=\"fa fa-calculator\"></span></button>";
        }
      }}).on("loaded.rs.jquery.bootgrid", function (){
        /* Executes after data is loaded and rendered */
        $(this).find(".edit").click(function (e) {
          $('#pin').val($(this).data("pin"));
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

