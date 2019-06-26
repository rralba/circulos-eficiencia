<div class="modal fade" id="edit{{ $beneficio->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>