@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $proyect->proyecto }}</h1>
    <div class="table-responsive">
        <table id="grid-basic" class="w3-table-all w3-card-4">
            <thead>
                <tr>
                    <th data-column-id="proyect_id" data-visible="false">proyect_id</th>
                    <th data-column-id="id" data-visible="false">Benefico</th>
                    <th data-column-id="fecha_gen">Fecha del Beneficio</th>
                    <th data-column-id="nombre">Empleado</th>
                    <th data-column-id="reconocimiento">Pago</th>
                    <th data-column-id="ajuste">Ajustado</th>
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                  
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->beneficio_id }}</td>
                      <td>{{ \carbon\carbon::parse($data->fecha_gen)->format('M-Y') }}</td>
                      <td>{{ $data->nombre }}</td>
                      <td class="text-right">{{ sprintf('$ %s', number_format(($data->pago),0, '.', ',')) }}</td>
                      <td class="text-right">{{ sprintf('$ %s', number_format(($data->ajuste),0, '.', ',')) }}</td>
                    </tr>
                  
                @endforeach
            </tbody>
        </table> 
    </div>
</div>   

<div id="edit" class="modal">
<div class="modal-dialog">
<div class="modal-content">
   <div class="modal-header">
      <h5 class="modal-title">Editar Reconocimiento</h5>
      <div class="center">
        <span onclick="document.getElementById('edit').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
   </div>
   <form class="container" action="{{ route('reconocimientos.update') }}" method = "post">
     {{ csrf_field() }}
     <input type="hidden" id="proyect_id" name="proyect_id">
     <input type="hidden" id="id" name="id">
      <div class="modal-body">
          <div class="form-group">
            <label><b>Reconocimiento</b></label>
            <input type="text" class="form-control form-control-sm" id="reco" placeholder="Beneficio Economico" name="reco" required>
          </div>
      </div>
        <button class="btn btn-primary small" type="submit">Save</button>  
</form>
<div class="modal-footer">
    <button onclick="document.getElementById('edit').style.display='none'" type="submit" class="btn btn-danger small">Cancel</button>
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
                    return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-nombre=\"" + row.nombre + "\" data-reconocimiento=\"" + row.reconocimiento + "\" data-recoid=\"" + row.recoid + "\" data-nivel=\"" + row.nivel + "\" data-rol=\"" + row.rol + "\" data-direccion=\"" + row.direccion + "\" data-cia=\"" + row.cia + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-pencil\"></span></button> ";
                  }
                }}).on("loaded.rs.jquery.bootgrid", function (){
                  /* Executes after data is loaded and rendered */
                  $(this).find(".edit").click(function (e) {
                    $('#proyect_id').val($(this).data("proyect_id")); 
                    $('#id').val($(this).data("id"));
                    $('#fname').val($(this).data("nombre"));
                    $('#reco').val($(this).data("reconocimiento"));
                    $('#recoid').val($(this).data("recoid"));
                    $('#email').val($(this).data("nivel"));
                    $('#country').val($(this).data("rol"));
                    $('#salary').val($(this).data("direccion"));
                    $('#cia').val($(this).data("cia"));
                  });
                });
              });
              
      </script>         
@endsection

