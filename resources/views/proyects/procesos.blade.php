@extends('layouts.app')

@section('content')
<div class="container">
  <br>
    <h1>Proyectos en proceso de pago</h1>
    <button type="button" class="btn btn-outline-primary btn-lg float-right ml-2" data-toggle="modal" data-target="#proceso" title="Proceso de Pago">  Agregar Beneficios</button> 
    <button type="button" class="btn btn-outline-primary btn-lg float-right" data-toggle="modal" data-target="#addbenef" title="Reporte de Pago">  Reporte de Pago</button> 
        <div class="table-responsive">
          <br>
          <table id="grid-basic" class="w3-table-all w3-card-4">
            <thead>
              <tr>
                <th data-column-id="proyect_id">Proyecto</th>
                <th data-column-id="id" data-visible="false">Beneficio Id</th>
                <th data-column-id="fecha_gen" data-visible="false">Fecha de Gz</th>
                <th data-column-id="beneficio" data-visible="false">Beneficio</th>
                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $beneficio)
                <tr>
                  <td>{{ $beneficio->proyecto }}</td>
                  <td>{{ $beneficio->id }}</td>
                  <td></td>
                  <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>  
  </div>
<div class="modal fade" id="proceso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seleccionar Mes a Pagar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('procesos.indexb') }}" method = "POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <br>
                    <div class="row float-left col-12"> 
                        <div class="col col-6"></div>
                        <div class="col m-0 p-0 col-3">  
                            <label for="recipient-name" class="col-form-label float-right pr-2">Mes de Pago:</label>
                        </div>
                        <div class="col m-0 p-0 col-3">
                            <input class="form-control form-control-sm monthYearPicker" name="mes" type="text" id="mes" required>
                        </div>
                    </div>    
                    <br>
                    <div class="row float-left col-5">
                    <button type="submit" class="btn btn-primary ml-4">Ejecutar</button>  
                    </div>
                    <br>
                    <br>
                </div>  
            </form>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
  <div id="delete" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title">Edicion de Proceso</h5>
          <div class="center">
             <span onclick="document.getElementById('delete').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
       </div>
       <form class="container" action="{{ route('procesos.destroy') }}  " method="POST">
       {{ csrf_field() }}
       <input type="hidden" id="pinn" name="pinn">
       <input type="hidden" id="proyestat" name="proyestat" value="4">
          <div class="modal-body">
             <input type="hidden" id="del_id" name="del_id">
             <p>Seguro que deseas eliminar del proceso de pago el proyecto: <br> <strong id ="delete_name"></strong> ?</p>
             <button type="submit" class="btn btn-primary small"> Delete </button>
          </div>
       </form>
       <div class="modal-footer">
          <button onclick="document.getElementById('delete').style.display='none'" type="submit" class="btn btn-secundary">Cancel</button>
       </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="addbenef" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reporte de Pago Circulos de Eficiencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('procesos.print') }}" method = "POST">
           {{ csrf_field() }}
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Folio de Pago:</label>
            <select class="form-control" id="folio" name="folio" required>
              @foreach($folios as $folios)
                <option value="{{ $folios->foliopago }}">{{ $folios->mes_pago }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
      </div>    
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger small" data-dismiss="modal">Close</button>
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
            return "<button onclick=\"document.getElementById('delete').style.display='block'\" data-id=\"" + row.id + "\" data-proyect_id=\"" + row.proyect_id + "\" data-beneficio1=\"" + row.beneficio1 + "\" class=\"btn btn-sm btn-outline-danger delete\"><span class=\"fa fa-trash\"></span></button>"; 
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