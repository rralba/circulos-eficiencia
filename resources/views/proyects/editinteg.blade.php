@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h1>{{ $proyect->proyecto }}</h1>
    <button type="button" class="btn btn-primary btn-lg float-right fa fa-user-plus" data-toggle="modal" data-target="#adduser"></button>
    <div class="table-responsive">
            <table id="grid-basic" class="w3-table-all w3-card-4">
                <thead>
                    <tr>
                        <th data-column-id="pin" data-visible="false">pin</th>
                        <th data-column-id="proyect_id" data-visible="false">proyect_id</th>
                        <th data-column-id="id" data-type="numeric">Id</th>
                        <th data-column-id="nombre">Nombre</th>
                        <th data-column-id="departamento">Departamento</th>
                        <th data-column-id="posicion">Posicion</th>
                        <th data-column-id="nivel">Nivel</th>
                        <th data-column-id="rol" data-order="des">Rol</th>
                        <th data-column-id="direccion">Direccion</th>
                        <th data-column-id="cia">Compañia</th>
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>  
                        @foreach($proyect->empleados as $integrante) 
                            <tr>
                                <td>{{ $integrante->pivot->id }}</td>
                                <td>{{ $integrante->pivot->proyect_id }}</td> 
                                <td>{{ $integrante->id }}</td>
                                <td>{{ $integrante->nombre }}</td>
                                <td>{{ $integrante->depto }}</td>
                                <td>{{ $integrante->posicion }}</td>
                                <td>{{ $integrante->nivel }}</td>
                                <td>{{ $integrante->pivot->rol }}</td> 
                                <td>{{ $integrante->direccion }}</td>
                                <td>{{ $integrante->cia }}</td> 
                            </tr>
                        @endforeach   
                </tbody>
            </table>
            {{--  <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
            </div>  --}}
    </div>
</div>
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agreragr integrante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('integrants.store') }}" method = "POST">
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
              "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-trash\"></span></button>";
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