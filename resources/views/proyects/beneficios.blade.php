@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $proyect->proyecto }}</h1> <br>
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
              <th colspan="3">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($proyect->beneficios as $beneficio)
            {{--  @if (($beneficio->status)==0)  --}}
              <tr>
                <td>{{ $beneficio->proyect_id }}</td>
                <td>{{ $beneficio->id }}</td>
                <td>{{ $beneficio->fecha_gen }}</td>
                <td>{{ $beneficio->beneficio }}</td>
                <td>{{ $beneficio->status }}</td>
                <td>{{ $beneficio->num_pago }}</td>
                <td>{{ $beneficio->mes_pago }}</td>
                  @if (($beneficio->status)==0)
                    @can('beneficios.edit')
                      <td width="10px">
                        <a href="{{ route('beneficios.edit', $beneficio->id) }}" class="btn btn-outline-primary btn-lg float-right fa fa-pencil openbtn" title="Editar reconocimiento" data-target="#edit"></a>
                      </td>
                    @endcan
                  @else
                    @can('beneficios.edit')
                      <td width="10px">
                        <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-pencil" disabled="disabled" data-toggle="modal" data-target="#edit" title="Editar reconocimiento"></button>
                      </td>
                    @endcan
                  @endif
                  @can('beneficios.edit')
                    <td width="10px">
                      <button type="button" class="btn btn-outline-secondary btn-lg float-right fa fa-calculator" data-toggle="modal" data-target="#reconocimientos" title="Editar reconocimiento"></button>
                    </td>
                  @endcan
                  @can('beneficios.edit')
                    <td width="10px">
                      <button type="button" class="btn btn-outline-danger btn-lg float-right fa fa-trash" data-toggle="modal" data-target="#reconocimientos" title="Editar reconocimiento"></button>
                    </td>
                  @endcan
              </tr>
              {{--  @endif      --}}
             
            @endforeach
          </tbody>
        </table>
      </div>  
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <form action="{{ route('beneficios.update', $beneficio->id) }}" method = "POST">
                        {{ csrf_field() }}
                         <input type="hidden" name="proyect_id" value="{{ $beneficio->proyect_id }}">
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Beneficio '#':</label>
                         <input type="text" class="form-control" name="id" value="{{ $beneficio->id }}" readonly>
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Fecha de Registro:</label>
                         <input type="text" class="form-control" name="fecha_gen" value="{{ $beneficio->fecha_gen }}" required>
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Beneficio:</label>
                         <input type="text" class="form-control" name="beneficio" value="{{ $beneficio->beneficio }}" required>
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Status:</label>
                         <input type="text" class="form-control" name="status" value="{{ $beneficio->status }}" readonly>
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Numero de Pago:</label>
                         <input type="select" class="form-control" name="num_pago" value="{{ $beneficio->num_pago }}" readonly>
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Mes de Pago:</label>
                         <input type="text" class="form-control" name="mes_pago" value="{{ $beneficio->mes_pago }}" readonly>
                     </div>
                       <button type="submit" class="btn btn-primary">Guardar</button>
                     </form>
                {{--  @include('proyects.modals.editben-modal')  --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
            </div>
          </div>
        </div>
</div>
<script>
$(document).ready(function(){ 
  $('.openbtn').on('click',function(){
   
      $('#edit').modal({show:true});
  
  });
});  
</script>
{{--  <script>
    $(document).ready(function(){
        $(".openbtn").click(function(){
            $("#edit").modal("show");
        });
    });
    </script>  --}}
@endsection

