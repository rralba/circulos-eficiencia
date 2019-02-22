@extends('layouts.app')

@section('content')

<div class="container">
    
            <table id="grid-basic" class="table-all card-4">
                <thead>
                    <tr class="w3-cyan">
                        <th data-column-id="id" data-type="numeric" data-order="asc">Id</th>
                        <th data-column-id="nombre">Nombre</th>
                        <th data-column-id="departamento">Departamento</th>
                        <th data-column-id="posicion">Posicion</th>
                        <th data-column-id="nivel">Nivel</th>
                        <th data-column-id="rol">Rol</th>
                        <th data-column-id="direccion">Direccion</th>
                        <th data-column-id="compañia">Compañia</th>
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>  
                        @foreach($proyect->empleados as $integrante) 
                            <tr>
                                <td>{{ $integrante->id }}</td>
                                <td>{{ $integrante->nombre }}</td>
                                <td>{{ $integrante->depto }}</td>
                                <td>{{ $integrante->posicion }}</td>
                                <td>{{ $integrante->nivel }}</td>
                                <td>{{ $integrante->pivot->rol }}</td> 
                                <td>{{ $integrante->direccion }}</td>
                                <td>{{ $integrante->cia }}</td> 
                                <td></td>
                            </tr>
                        @endforeach   
                </tbody>
            </table>
            <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
            </div>
</div>
<div id="edit" class="modal">
    <div class="modal-dialog">
    <div class="modal-content animate-zoom" style="max-width:600px">
       <div class="center"><br>
          <span onclick="document.getElementById('edit').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
       </div>
       <header class="container w3-text-indigo w3-margin-top-64">
          <h1>Edit Details</h1>
       </header>
       <form class="container" action="/save" method = "POST">
         {{ csrf_field() }}
         <input type="hidden" id="edit_id" name="edit_id">
          <div class="section">
             <div class="w3-row">
                <div class="w3-col s4"><label><b>Nombre</b></label></div>
                <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="fname" type="text" placeholder="Id Sap" name="firstname" required>
                </div>
             </div>
             <div class="w3-row">
                <div class="w3-col s4">
                   <label><b>Departamento</b></label>
                </div>
                <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="lname" type="text" placeholder="Departamento" name="lastname" required></div>
             </div>
             <div class="w3-row">
                <div class="w3-col s4">
                   <label><b>Email</b></label>
                </div>
                <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="email" type="email" placeholder="Enter Email" name="email" required></div>
             </div>
             <div class="w3-row">
                <div class="w3-col s4">
                   <label><b>Country</b></label>
                </div>
                <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="country" type="text" placeholder="Enter Country" name="country" required></div>
             </div>
             <div class="w3-row">
                <div class="w3-col s4">
                   <label><b>Salary</b></label>
                </div>
                <div class="w3-col s8"><input class="w3-input w3-border" id="salary" type="text" placeholder="Enter Salary" name="salary" required></div>
             </div>
             <button class="w3-btn-block w3-indigo w3-section w3-padding" type="submit">Save</button>
          </div>
       </form>
       <div class="container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('edit').style.display='none'" type="button" class="btn btn-danger small">Cancel</button>
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
              return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-departamento=\"" + row.departamento + "\" data-email=\"" + row.email + "\" data-gender=\"" + row.gender + "\" data-country=\"" + row.country + "\" data-salary=\"" + row.salary + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-pencil\"></span></button> " +
              "<button onclick=\"document.getElementById('delete').style.display='block'\" data-first_name=\"" + row.first_name + "\" data-last_name=\"" + row.last_name + "\" data-id=\"" + row.id + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-remove\"></span></button>";
            }
          }}).on("loaded.rs.jquery.bootgrid", function (){
            /* Executes after data is loaded and rendered */
            $(this).find(".edit").click(function (e) {
              $('#edit_id').val($(this).data("id"));
              $('#fname').val($(this).data("nombre"));
              $('#lname').val($(this).data("departamento"));
              $('#gender').val($(this).data("gender"));
              $('#email').val($(this).data("email"));
              $('#country').val($(this).data("country"));
              $('#salary').val($(this).data("salary"));
            });
            $(this).find(".delete").click(function (e) {
              $('#del_id').val($(this).data("id"));
              $('#delete_name').html($(this).data("first_name") +" "+ $(this).data("last_name"));
            });
          });
        });
        
</script>
@endsection 