@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                       Proyecto
                </div>
                <div class="card-group">
                    <div class="card">   
                        <h5>
                        <a>Nombre del Proyecto</a> &nbsp;
                        <small class="text-muted">{{ $proyect->proyecto }}</small>
                        </h5>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <h5>
                        <a>Fecha de Registro</a>
                        <small class="text-muted">{{ $proyect->fecha_reg }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Nivel del Proyecto</a>
                        <small class="text-muted">{{ $proyect->nivel }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Asesor Asignado</a>
                        <small class="text-muted">{{ $proyect->asesor }}</small>
                        </h5>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">    
                        <h5>
                        <a>Fecha de Inicio del Proyecto</a>
                        <small class="text-muted">{{ $proyect->fecha_ini }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Fecha Fin del Proyecto</a>
                        <small class="text-muted">{{ $proyect->fecha_fin }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Comite Evaluador</a>
                        <small class="text-muted">{{ $proyect->comite }}</small>
                        </h5>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card"> 
                        <h5>
                        <a>Valor Corporativo</a>
                        <small class="text-muted">{{ $proyect->valor }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Metodologia Aplicada</a>
                        <small class="text-muted">{{ $proyect->metodologia }}</small>
                        </h5>
                    </div>
                    <div class="card">
                        <h5>
                        <a>Ahorro Anual Proyectado</a>
                        <small class="text-muted">{{ $proyect->ahorro_anual_proy }}</small>
                        </h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                      Integrantes
                </div>
                <div class="card-body">   
                    <table class="table table-striped table-hover" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Posicion</th>
                            <th>Nivel</th>
                            <th>Rol</th>
                            <th>Direccion</th>
                            <th>Compañia</th>
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
                                </tr>
                            @endforeach
                            {{--@foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->id }}</td>
                                </tr>            
                            @endforeach
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->nombre }}</td>
                                </tr>   
                            @endforeach     
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->depto }}</td>
                                </tr>    
                            @endforeach     
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->posicion }}</td>
                                </tr>    
                            @endforeach     
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->nivel }}</td>
                                </tr>    
                            @endforeach     
                            @foreach ($proyect->integrantes as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->rol }}</td>
                                </tr>    
                            @endforeach     
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->direccion }}</td>
                                </tr>    
                            @endforeach     
                            @foreach ($proyect->empleados as $Integrant)
                                <tr>
                                    <td>{{ $Integrant->cia }}</td>
                                </tr>    
                            @endforeach--}}     
                    </tbody>
                    </table>
            </div>
        </div>
    </div>  
</div>
@endsection    