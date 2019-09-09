@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Proyectos en proceso de pago</h1>
    <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-usd" data-toggle="modal" data-target="#proceso" title="Proceso de Pago">  Proceso de Pago</button>
        <div class="table-responsive">
          <br>
          <table id="grid-basic" class="w3-table-all w3-card-4">
            <thead>
              <tr>
                <th data-column-id="proyect_id">Proyecto</th>
                <th data-column-id="id">Beneficio Id</th>
                <th data-column-id="fecha_gen" data-visible="false">Fecha de Gz</th>
                <th data-column-id="beneficio" data-visible="false">Beneficio</th>
                <th data-column-id="fecha_gen1">Fecha de Generacion</th>
                <th data-column-id="beneficio1">Beneficio</th>
                <th data-column-id="status">Status</th>
                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $beneficio)
                <tr>
                  <td>{{ $beneficio->proyecto }}</td>
                  <td>{{ $beneficio->id }}</td>
                  <td>{{ $beneficio->fecha_gen }}</td>
                  <td>{{ $beneficio->beneficio }}</td>
                  <td>{{ \carbon\carbon::parse($beneficio->fecha_gen)->format('M-Y') }}</td>
                  <td>{{ sprintf('$ %s', number_format($beneficio->beneficio,0, '.', ',')) }}</td>
                  <td>{{ $beneficio->status }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>  
  </div>
<div class="modal fade" id="proceso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Proceso de Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('procesos.create') }}" method = "POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h3>Lista de proyectos para proceso de pago</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Proyectos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $beneficio)
                                <tr>
                                    <td>*{{ $beneficio->proyecto }}</td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <br> 
                    <button type="submit" class="btn btn-primary">Ejecutar</button>  
                </div>  
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
       <input type="hidden" id="proyestat" name="proyestat" value="0">
          <div class="modal-body">
             <input type="hidden" id="del_id" name="del_id">
             <p>Seguro que deseas eliminar del proceso de pago el proyecto: <br> <strong id ="delete_name"></strong> ?</p>
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