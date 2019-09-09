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
    <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="">
                <tr>
                    <th width="5%">Ficha</th>
                    <th width="25%">Nombre</th>
                    <th width="15%">Posicion</th>
                    <th width="20%">Departamento</th>
                    <th width="20%">Proyecto</th>
                    <th width="5%">Beneficio</th>
                    <th width="5px">Pago</th>
                    <th width="5px">Mes</th>
                </tr>
            </thead>
            <tbody id="developers">
                @foreach($nproy as $proyect)
                    @if ((($proyect->cia)<> 1000)&&(($proyect->cia)<> 2000))
                    <tr>
                        <td>{{ $proyect->empleado_id }}</td>
                        <td>{{ $proyect->nombre }}</td>
                        <td>{{ $proyect->posicion }}</td>
                        <td>{{ $proyect->depto }}</td>
                        <td>{{ $proyect->proyecto }}</td>
                        @if (($proyect->nivel)==1)
                        @if (($proyect->rol)==1)
                            <td>{{ ((($proyect->beneficio)*0.1)*.3) }}</td>
                        @if (($proyect->rol)==2)
                            <td>{{ ((($proyect->beneficio)*0.1)*.14 }}</td>
                        @if (($proyect->rol)==3)
                            <td>{{ ((($proyect->beneficio)*0.1)*.06 }}</td>
                            @else 
                        @if (($proyect->rol)==1)
                            <td>{{ ((($proyect->beneficio)*0.1)*.15) }}</td>
                        @if (($proyect->rol)==2)
                            <td>{{ ((($proyect->beneficio)*0.1)*.07 }}</td>
                        @if (($proyect->rol)==3)
                            <td>{{ ((($proyect->beneficio)*0.1)*.03 }}</td>
                        @endif
                        <td>{{ $proyect->num_pago }}</td>
                        <td>{{ $proyect->fecha_gen }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
       </table>
    </div>
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
{{--  <script>
        function ellipsis_box(elemento, max_chars)
        {
        limite_text = $(elemento).text();
        if (limite_text.length > max_chars)
        {
        limite = limite_text.substr(0, max_chars)+" ...";
        $(elemento).text(limite);
        }
        }
        $(function()
        {
        ellipsis_box(".limitado", 40);
        });
        </script>  --}}
@endsection