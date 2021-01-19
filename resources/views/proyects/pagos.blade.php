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
    <div class="imprimible">
        <div id="wrapper">
        <div class="conta">
            <div class="left col-md-2 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center" alt="Logo de circulos de eficiencia" width="170" height="60">
            </div>
            <div class="center col-md-8 m-0 p-0">
                <h4 id="titulo" class="text-center">RECONOCIMENTO CIRCULOS DE EFICIENCIA NIVEL 1 y 2</h4>
                <h4 id="titulo" class="text-center">EMPLEADOS AHMSA Y CORPORATIVO</h4>
            </div>
            <div class="right col-md-2 m-0 p-0">
                <div class="row float-right m-0 p-0">
                    <div class="input-group input-group-sm mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" type="text"  value="<?php echo date("d/M/Y"); ?>" / readonly>
                    </div>
                </div>
                <div class="row float-right m-0 p-0"> 
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Mes Pago</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="mes" type="month" value="{{ \carbon\carbon::parse($mes1)->format('M-Y') }}" maxlength="10" readonly>
                </div>
                </div>    
                <div class="row float-right m-0 p-0">
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Folio</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="folio" type="text"  maxlength="10" required>
                </div>
                </div>   
            </div>    
        </div>
        <section>
        <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered tabla-pagos">
            <thead>
                <tr>
                    <th width="5%" class="text-center">FICHA</th>
                    <th width="20%" class="text-center">NOMBRE</th>
                    <th width="20%" class="text-center">POSICION</th>
                    <th width="20%" class="text-center">DEPARTAMENTO</th>
                    <th width="22.5%" class="text-center">PROYECTO</th>
                    <th width="5%" class="text-center">BENEFICIO</th>
                    <th width="3%" class="text-center">PAGO</th>
                    <th width="4.5%" class="text-center">PAGO</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php $y=0; ?>
                <?php $r=0; ?>
                <?php $pagosuma=0; ?>
                @foreach(json_decode($json) as $proyect)
                    @if ((($proyect->cia)<> 1000)&&(($proyect->cia)<> 2000))
                        @if (($proyect->pago) == 1)
                    <tr>
                        <td>{{ $proyect->empleado_id }}</td>
                        <td>{{ $proyect->nombre }}</td>
                        <td>{{ $proyect->posicion }}</td>
                        <td>{{ $proyect->depto }}</td>
                        <td class="ellipsis">{{ $proyect->proyecto }}</td>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($proyect->beneficio),0, '.', ',')) }}</td>
                        <td>{{ $proyect->num_pago }}</td>
                        <?php
                        if (($x) == ($proyect->empleado_id))
                        {
                            if (($y) <= ($proyect->beneficio))
                            {
                                $r = $proyect->beneficio;
                                $pagosuma = $pagosuma + $r;
                            }
                            else
                            { 
                                $r = 0;
                            }
                        }    
                        else 
                        {
                            $r=($proyect->beneficio);
                            $x=$proyect->empleado_id;
                            $y=$proyect->beneficio;
                            $pagosuma = $pagosuma + $r;
                        } 
                        ?>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($r),0, '.', ',')) }}</td>
                    </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
       </table>
   </div>
        <div class="col col-md-2 row float-right">
            <div class="col col-md-6 float-left m-0 p-0">
                <p class="font-weight-bold float-right">Total de Pago:</p>
            </div>
            <div class="col col-md-6 float-left ml-0 p-3">
                <div class="font-weight-bold float-right">{{ sprintf('$ %s', number_format(($pagosuma),0, '.', ',')) }}</div>
            </div>
        </div>
        </section>
    <br>
    <br>
    <br>
    </div>
<footer>
    <div class="container-fluid m-o p-0 piepag">
        <div class="row">
            <div class="col-xs-12 col-md-4 m-0 p-0">
                <h4 class="text-muted lead text-center">Atentamente:</h4>
                <br>
                <h4 class="text-muted text-center">
                Lic. Virginia Lozano Guajardo<br>
                Gerente de Capacitación<br>
                </h4>
            </div>
            <div class="col-xs-12 col-md-4 m-0 p-0">
                    <h4 class="text-muted lead text-center">Vo.Bo.:</h4>
                    <br>
                    <h4 class="text-muted text-center">
                    Lic. Fernando Monroy Guajardo<br>
                    Director Corporativo de Recursos Humanos<br>
                    </h4>
                </div>
                <div class="col-xs-12 col-md-4 m-0 p-0">
                        <h4 class="text-muted lead text-center">Autorización:</h4>
                        <br>
                        <h4 class="text-muted text-center   ">
                        N/A<br>
                        <br>
                        </h4>
                    </div>
        </div>  
    </div>
    <br>
    <div id="botones">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-floppy-o" data-toggle="modal" data-target="#addbenef" title="agregar Beneficio"> Grabar</button>
            </div>
            <div class="col-xs-12 col-md-6">        
                <a class="imprimir btn btn-outline-primary btn-lg float-left fa fa-print" href="#">Imprimir</a>
            </div>
        </div>        
    </div>
    </footer>
</div>
    <br>
        </div>
        <div class="tab-pane fade" id="nav-sid1" role="tabpanel" aria-labelledby="nav-sid1-tab">
              <br>
    <div id="imprimible">
        <div id="wrapper">
        <div class="conta">
            <div class="left col-md-2 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center" alt="Logo de circulos de eficiencia" width="170" height="60">
            </div>
            <div class="center col-md-8 m-0 p-0">
                <h4 id="titulo" class="text-center">RECONOCIMENTO CIRCULOS DE EFICIENCIA NIVEL 1 y 2</h4>
                <h4 id="titulo" class="text-center">PERSONAL SINDICALIZADOS SIDERURGICA 1</h4>
            </div>
            <div class="right col-md-2 m-0 p-0">
                <div class="row float-right m-0 p-0">
                    <div class="input-group input-group-sm mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" type="text" value="<?php echo date("d/M/Y"); ?>" / readonly>
                    </div>
                </div>
                <div class="row float-right m-0 p-0"> 
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Mes Pago</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="mes" type="month" value="{{ \carbon\carbon::parse($mes1)->format('M-Y') }}" maxlength="10" readonly>
                </div>
                </div>    
                <div class="row float-right m-0 p-0">
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Folio</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="folio" type="text" maxlength="10" required>
                </div>
                </div>   
            </div>    
        </div>
        <section>
        <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered tabla-pagos">
            <thead>
                <tr>
                    <th width="5%" class="text-center">FICHA</th>
                    <th width="20%" class="text-center">NOMBRE</th>
                    <th width="20%" class="text-center">POSICION</th>
                    <th width="20%" class="text-center">DEPARTAMENTO</th>
                    <th width="22.5%" class="text-center">PROYECTO</th>
                    <th width="5%" class="text-center">BENEFICIO</th>
                    <th width="3%" class="text-center">PAGO</th>
                    <th width="4.5%" class="text-center">PAGO</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php $y=0; ?>
                <?php $r=0; ?>
                <?php $pagosuma=0; ?>
                @foreach(json_decode($json) as $proyect)
                    @if (($proyect->cia) == 1000)
                        @if (($proyect->pago) == 1)
                    <tr>
                        <td>{{ $proyect->empleado_id }}</td>
                        <td>{{ $proyect->nombre }}</td>
                        <td>{{ $proyect->posicion }}</td>
                        <td>{{ $proyect->depto }}</td>
                        <td class="ellipsis">{{ $proyect->proyecto }}</td>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($proyect->beneficio),0, '.', ',')) }}</td>
                        <td>{{ $proyect->num_pago }}</td>
                        <?php
                        if (($x) == ($proyect->empleado_id))
                        {
                            if (($y) <= ($proyect->beneficio))
                            {
                                $r = $proyect->beneficio;
                                $pagosuma = $pagosuma + $r;
                            }
                            else
                            { 
                                $r = 0;
                            }
                        }    
                        else 
                        {
                            $r=($proyect->beneficio);
                            $x=$proyect->empleado_id;
                            $y=$proyect->beneficio;
                            $pagosuma = $pagosuma + $r;
                        } 
                        ?>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($r),0, '.', ',')) }}</td>
                    </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
       </table>
   </div>
        <div class="col col-md-2 row float-right">
            <div class="col col-md-6 float-left m-0 p-0">
                <p class="font-weight-bold float-right">Total de Pago:</p>
            </div>
            <div class="col col-md-6 float-left ml-0 p-0">
                <div class="font-weight-bold float-right">{{ sprintf('$ %s', number_format(($pagosuma),0, '.', ',')) }}</div>
            </div>
        </div>
        </section>
    <br>
    <br>
    <br>
    </div>
<footer>
    <div class="container-fluid m-o p-0 piepag">
        <div class="row">
            <div class="col-xs-12 col-md-4 m-0 p-0">
                <h4 class="text-muted lead text-center">Atentamente:</h4>
                <br>
                <h4 class="text-muted text-center">
                Lic. Virginia Lozano Guajardo<br>
                Gerente de Capacitación<br>
                </h4>
            </div>
            <div class="col-xs-12 col-md-4 m-0 p-0">
                    <h4 class="text-muted lead text-center">Vo.Bo.:</h4>
                    <br>
                    <h4 class="text-muted text-center">
                    Lic. Fernando Monroy Guajardo<br>
                    Director Corporativo de Recursos Humanos<br>
                    </h4>
                </div>
                <div class="col-xs-12 col-md-4 m-0 p-0">
                            <h4 class="text-muted lead text-center">Autorización:</h4>
                            <br>
                            <h4 class="text-muted text-center">
                            Lic. Enrique Rivera Gómez <br>
                            Director Relaciones Industriales <br>
                            </h4>
                    </div>
        </div>  
    </div>
    <br>
    <div id="botones">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">        
                <a class="imprimir btn btn-outline-primary btn-lg fa fa-print" href="#">Imprimir</a>
            </div>
        </div>        
    </div>
    </footer>
</div>
    <br>
        </div>    
        <div class="tab-pane fade" id="nav-sid2" role="tabpanel" aria-labelledby="nav-sid2-tab">
            <br>
    <div id="imprimible">
        <div id="wrapper">
        <div class="conta">
            <div class="left col-md-2 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center" alt="Logo de circulos de eficiencia" width="170" height="60">
            </div>
            <div class="center col-md-8 m-0 p-0">
                <h4 id="titulo" class="text-center">RECONOCIMENTO CIRCULOS DE EFICIENCIA NIVEL 1 y 2</h4>
                <h4 id="titulo" class="text-center">PERSONAL SINDICALIZADOS SIDERURGICA 2</h4>
            </div>
            <div class="right col-md-2 m-0 p-0">
                <div class="row float-right m-0 p-0">
                    <div class="input-group input-group-sm mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" type="text" value="<?php echo date("d/M/Y"); ?>" / readonly>
                    </div>
                </div>
                <div class="row float-right m-0 p-0"> 
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Mes Pago</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="mes" type="month" value="{{ \carbon\carbon::parse($mes1)->format('M-Y') }}" maxlength="10" readonly>
                </div>
                </div>    
                <div class="row float-right m-0 p-0">
                <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Folio</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="folio" type="text" maxlength="10" required>
                </div>
                </div>   
            </div>    
        </div>
        <section>
        <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered tabla-pagos">
            <thead>
                <tr>
                    <th width="5%" class="text-center">FICHA</th>
                    <th width="20%" class="text-center">NOMBRE</th>
                    <th width="20%" class="text-center">POSICION</th>
                    <th width="20%" class="text-center">DEPARTAMENTO</th>
                    <th width="22.5%" class="text-center">PROYECTO</th>
                    <th width="5%" class="text-center">BENEFICIO</th>
                    <th width="3%" class="text-center">PAGO</th>
                    <th width="4.5%" class="text-center">PAGO</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php $y=0; ?>
                <?php $r=0; ?>
                <?php $pagosuma=0; ?>
                @foreach(json_decode($json) as $proyect)
                    @if (($proyect->cia) == 2000)
                        @if (($proyect->pago) == 1)
                    <tr>
                        <td>{{ $proyect->empleado_id }}</td>
                        <td>{{ $proyect->nombre }}</td>
                        <td>{{ $proyect->posicion }}</td>
                        <td>{{ $proyect->depto }}</td>
                        <td class="ellipsis">{{ $proyect->proyecto }}</td>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($proyect->beneficio),0, '.', ',')) }}</td>
                        <td>{{ $proyect->num_pago }}</td>
                        <?php
                        if (($x) == ($proyect->empleado_id))
                        {
                            if (($y) <= ($proyect->beneficio))
                            {
                                $r = $proyect->beneficio;
                                $pagosuma = $pagosuma + $r;
                            }
                            else
                            { 
                                $r = 0;
                            }
                        }    
                        else 
                        {
                            $r=($proyect->beneficio);
                            $x=$proyect->empleado_id;
                            $y=$proyect->beneficio;
                            $pagosuma = $pagosuma + $r;
                        } 
                        ?>
                        <td class="text-right">{{ sprintf('$ %s', number_format(($r),0, '.', ',')) }}</td>
                    </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
       </table>
   </div>
        <div class="col col-md-2 row float-right">
            <div class="col col-md-6 float-left m-0 p-0">
                <p class="font-weight-bold float-right">Total de Pago:</p>
            </div>
            <div class="col col-md-6 float-left ml-0 p-0">
                <div class="font-weight-bold float-right">{{ sprintf('$ %s', number_format(($pagosuma),0, '.', ',')) }}</div>
            </div>
        </div>
        </section>
    <br>
    <br>
    <br>
    </div>
<footer>
    <div class="firmas container-fluid m-o p-0 piepag">
        <div class="row">
            <div class="col-xs-12 col-md-4 m-0 p-0">
                <h4 class="text-muted lead text-center">Atentamente:</h4>
                <br>
                <h4 class="text-muted text-center">
                Lic. Virginia Lozano Guajardo<br>
                Gerente de Capacitación<br>
                </h4>
            </div>
            <div class="col-xs-12 col-md-4 m-0 p-0">
                    <h4 class="text-muted lead text-center">Vo.Bo.:</h4>
                    <br>
                    <h4 class="text-muted text-center">
                    Lic. Fernando Monroy Guajardo<br>
                    Director Corporativo de Recursos Humanos<br>
                    </h4>
                </div>
                <div class="col-xs-12 col-md-4 m-0 p-0">
                            <h4 class="text-muted lead text-center">Autorización:</h4>
                            <br>
                            <h4 class="text-muted text-center">
                            Lic. Enrique Rivera Gómez <br>
                            Director Relaciones Industriales <br>
                            </h4>
                    </div>
        </div>  
    </div>

    <br>
    <div id="botones">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">        
                <a class="imprimir btn btn-outline-primary btn-lg fa fa-print" href="#">Imprimir</a>
            </div>
        </div>        
    </div>
        </footer>
</div>
    <br>   
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
            @foreach(json_decode($json) as $proyect)
                    <input type="hidden" name="beneficio[]" value="{{ $proyect->id }}">
                    <input type="hidden" name="empleado[]" value="{{ $proyect->empleado_id }}">
                    <input type="hidden" name="pago[]" value="{{ number_format(($proyect->beneficio),0, '.', '') }}">
                    <input type="hidden" name="mes_pago" value="{{ $mes1 }}">
                    <input type="hidden" name="num_pago[]" value="{{ (($proyect->num_pago)+1) }}">
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