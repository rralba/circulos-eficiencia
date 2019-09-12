@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <br>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-ahmsa-tab" data-toggle="tab" href="#nav-ahmsa" role="tab" aria-controls="nav-ahmsa" aria-selected="true">Empleados de Confianza</a>
            <a class="nav-item nav-link" id="nav-sid1-tab" data-toggle="tab" href="#nav-sid1" role="tab" aria-controls="nav-sid1" aria-selected="false">Sindicalizados Sid. 1</a>
            <a class="nav-item nav-link" id="nav-sid2-tab" data-toggle="tab" href="#nav-sid2" role="tab" aria-controls="nav-sid2" aria-selected="false">Sindicalizados Sid. 2</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-ahmsa" role="tabpanel" aria-labelledby="nav-home-tab">
            <br>
    <div id="imprimible">
        <div class="conta">
            <div class="left col-md-2 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center" alt="Logo de circulos de eficiencia" width="170" height="60">
            </div>
            <div class="center col-md-8 m-0 p-0">
                <h3 class="text-center">RECONOCIMENTO CIRCULOS DE EFICIENCIA NIVEL 1 y 2</h3>
                <h3 class="text-center">EMPLEADOS AHMSA Y CORPORATIVO</h3>
            </div>
            <div class="right col-md-2 m-0 p-0">
                <div class="row float-right">
                    <div class="col col-md-3 m-0 p-0">
                        <label for="recipient-name" class="col-form-label">Fecha:</label>
                    </div>
                    <div class="col col-md-9 float-left ml-0 pl-0">
                        <input class="form-control form-control-sm" name="fecha" type="text" id="fecha" value="<?php echo date("d/M/Y"); ?>" / readonly>
                    </div>
                </div>
                <div class="row float-right"> 
                    <div class="col m-0 p-0">  
                        <label for="recipient-name" class="col-form-label">Mes Pago:</label>
                    </div>
                    <div class="col m-0 p-0">
                        <input class="form-control form-control-sm col-11" name="mes" type="month" id="mes" required>
                    </div>
                </div>    
                <div class="row float-right">
                    <div class="col col-md-3 m-0 p-0">
                        <label for="recipient-name" class="col-form-label">Folio:</label>
                    </div>
                    <div class="col col-md-9 float-left ml-0 pl-0">
                        <input class="form-control form-control-sm" name="folio" type="text" id="folio" maxlength="10" required>
                    </div>
                </div>   
            </div>    
        </div>
        <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th width="5%">Ficha</th>
                    <th width="20%">Nombre</th>
                    <th width="20%">Posicion</th>
                    <th width="20%">Departamento</th>
                    <th width="20%">Proyecto</th>
                    <th width="5%">Beneficio</th>
                    <th width="5px">Pago</th>
                    <th width="5px">Mes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nproy as $proyect)
                    @if ((($proyect->cia)<> 1000)&&(($proyect->cia)<> 2000))
                    <tr>
                        <td>{{ $proyect->empleado_id }}</td>
                        <td>{{ $proyect->nombre }}</td>
                        <td>{{ $proyect->posicion }}</td>
                        <td>{{ $proyect->depto }}</td>
                        <td class="ellipsis">{{ $proyect->proyecto }}</td>
                        @if (($proyect->pago)==0)
                            <td>{{ 0 }}</td>
                        @else
                        @if (($proyect->nivel)==1)
                            @if (($proyect->rol)==1)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.3),0, '.', ',')) }}</td>
                            @endif    
                            @if (($proyect->rol)==2)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.14),0, '.', ',')) }}</td>
                            @endif    
                            @if (($proyect->rol)==3)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.06),0, '.', ',')) }}</td>
                            @endif
                        @endif
                        @if (($proyect->nivel)==2)
                            @if (($proyect->rol)==1)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.15),0, '.', ',')) }}</td>
                            @endif
                            @if (($proyect->rol)==2)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.07),0, '.', ',')) }}</td>
                            @endif
                            @if (($proyect->rol)==3)
                                <td>{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.03),0, '.', ',')) }}</td>
                            @endif
                        @endif
                        @endif
                        <td>{{ (($proyect->num_pago)+1) }}</td>
                        <td>{{ \carbon\carbon::parse($proyect->fecha_gen)->format('M-Y') }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
       </table>
    </div>
    </div>
<footer>
    <div class="container-fluid m-o p-0">
        <div class="row">
            <div class="col-xs-12 col-md-4 m-0 p-0">
                <h6 class="text-muted lead text-center">Atentamente:</h6>
                <br>
                <h6 class="text-muted text-center">
                Lic. Virginia Lozano Guajardo<br>
                Gerente de Capacitación<br>
                </h6>
            </div>
            <div class="col-xs-12 col-md-4 m-0 p-0">
                    <h6 class="text-muted lead text-center">Vo.Bo.:</h6>
                    <br>
                    <h6 class="text-muted text-center">
                    Lic. Fernando Monroy Guajardo<br>
                    Director Corporativo de Recursos Humanos<br>
                    </h6>
                </div>
                <div class="col-xs-12 col-md-4 m-0 p-0">
                        <h6 class="text-muted lead text-center">Autorización:</h6>
                        <br>
                        <h6 class="text-muted text-center   ">
                        N/A<br>
                        <br>
                        </h6>
                    </div>
        </div>  
    </div>
</footer>
    <br>
    <div id="botones">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-floppy-o" data-toggle="modal" data-target="#addbenef" title="agregar Beneficio"> Grabar</button>
            </div>
            <div class="col-xs-12 col-md-6">        
                <a class="imprimir btn btn-outline-primary btn-lg fa fa-print" href="#">Imprimir</a>
            </div>
        </div>        
    </div>
    <br>
        </div>
        <div class="tab-pane fade" id="nav-sid1" role="tabpanel" aria-labelledby="nav-sid1-tab">
                <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover table-bordered">
                            <thead class="">
                                <tr>
                                    <th width="10px">Ficha</th>
                                    <th>Nombre</th>
                                    <th>Posicion</th>
                                    <th>Departamento</th>
                                    <th>Proyecto</th>
                                    <th>Beneficio</th>
                                    <th>Pago</th>
                                    <th>Mes</th>
                                </tr>
                            </thead>
                            <tbody id="developers">
                                @foreach($nproy as $proyect)
                                    @if (($proyect->cia)== 1000)
                                    <tr>
                                        <td>{{ $proyect->empleado_id }}</td>
                                        <td>{{ $proyect->nombre }}</td>
                                        <td>{{ $proyect->posicion }}</td>
                                        <td>{{ $proyect->depto }}</td>
                                        <td>{{ $proyect->proyecto }}</td>
                                        <td>{{ $proyect->beneficio }}</td>
                                        <td>{{ $proyect->num_pago }}</td>
                                        <td>{{ $proyect->fecha_gen }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                       </table>
                    </div>
        </div>
        <div class="tab-pane fade" id="nav-sid2" role="tabpanel" aria-labelledby="nav-sid2-tab">
                <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover table-bordered">
                            <thead class="">
                                <tr>
                                    <th width="10px">Ficha</th>
                                    <th>Nombre</th>
                                    <th>Posicion</th>
                                    <th>Departamento</th>
                                    <th>Proyecto</th>
                                    <th>Beneficio</th>
                                    <th>Pago</th>
                                    <th>Mes</th>
                                </tr>
                            </thead>
                            <tbody id="developers">
                                @foreach($nproy as $proyect)
                                @if (($proyect->cia)== 2000)
                                    <tr>
                                        <td>{{ $proyect->empleado_id }}</td>
                                        <td>{{ $proyect->nombre }}</td>
                                        <td>{{ $proyect->posicion }}</td>
                                        <td>{{ $proyect->depto }}</td>
                                        <td>{{ $proyect->proyecto }}</td>
                                        <td>{{ $proyect->beneficio }}</td>
                                        <td>{{ $proyect->num_pago }}</td>
                                        <td>{{ $proyect->fecha_gen }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                       </table>
                    </div>
            </div>
    </div>    
</div>
<div class="modal fade" id="addbenef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Guardar Reconocimientos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="{{ route('procesos.store') }}" method = "POST">
             {{ csrf_field() }}
        <div class="modal-body">
            @foreach($nproy as $proyect)
            @if ((($proyect->cia)<> 1000)&&(($proyect->cia)<> 2000))
            <input type="hidden" id="id" name="id[]" value="{{ $proyect->empleado_id }}">
            <input type="hidden" id="beneficio" name="beneficio[]" value="{{ $proyect->id }}">
                @if (($proyect->pago)==0)
                <input type="hidden" id="pago" name="pago[]" value="{{ 0 }}">
                @else
                @if (($proyect->nivel)==1)
                    @if (($proyect->rol)==1)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.3),0, '.', ',')) }}">
                    @endif    
                    @if (($proyect->rol)==2)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.14),0, '.', ',')) }}">
                    @endif    
                    @if (($proyect->rol)==3)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.1)*.06),0, '.', ',')) }}">
                    @endif
                @endif
                @if (($proyect->nivel)==2)
                    @if (($proyect->rol)==1)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.15),0, '.', ',')) }}">
                    @endif
                    @if (($proyect->rol)==2)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.07),0, '.', ',')) }}">
                    @endif
                    @if (($proyect->rol)==3)
                    <input type="hidden" id="pago" name="pago[]" value="{{ sprintf('$ %s', number_format(((($proyect->beneficio)*0.05)*.03),0, '.', ',')) }}">
                    @endif
                @endif
                @endif
                <input type="hidden" id="nump" name="nump[]" value="{{ (($proyect->num_pago)+ 1) }}">
            @endif
        @endforeach
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>    
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>
  <script>
    $('.imprimir').click(function(){
        window.print();
        return false;
    });
  </script>
@endsection