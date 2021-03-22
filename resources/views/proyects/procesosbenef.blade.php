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
                <input type="hidden" id="fechabenef" name="fechabenef" value="{{ $beneficio->fecha_gen }}">
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
                    <div class="row float-left col-12"> 
                        <div class="col col-6"></div>
                        <div class="col m-0 p-0 col-3">  
                            <label for="recipient-name" class="col-form-label float-right pr-2">Folio:</label>
                        </div>
                        <div class="col m-0 p-0 col-3">
                            <input class="form-control form-control-sm tomayus" name="folio" type="text" id="folio" required>
                        </div>
                    </div>
                    <br>
                    <div class="row float-left col-5 ml-2">
                    <button type="submit" class="btn btn-primary">Ejecutar</button>  
                    </div>
                    <br>
                    <br>
                </div>  
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
  <script>
  $( document ).ready(function(){
      $("#grid-basic").bootgrid({
       })
    });  
  </script>
@endsection