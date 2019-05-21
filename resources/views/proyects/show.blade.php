@extends('layouts.app')

@section('content')
    <div id="wrapper" class="d-flex" >
        <!-- Sidebar -->
        <div class="bg-light border" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="{{ url('/home') }}" class="list-group-item list-group-item-action bg-light">Inicio</a>
                @can('integrants.edit')
                <a href="{{ route('proyects.editinteg', $proyect->id) }}" class="list-group-item list-group-item-action bg-light">Editar integrantes</a>
                @endcan
                @can('beneficios.index')
                <a href="{{ route('beneficios.index', $proyect->id) }}" class="list-group-item list-group-item-action bg-light">Beneficios</a>
                @endcan
                @can('reconocimientos.index')
                <a href="{{ route('reconocimientos.index', $proyect->id) }}" class="list-group-item list-group-item-action bg-light">reconocimientos</a>
                @endcan
                @can('proceso.index')
                <a href="#" class="list-group-item list-group-item-action bg-light">Proceso de Pago</a>
                @endcan
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>
        <div class="container-fluid">
          <div class="">   
                <h1>{{ $proyect->proyecto }}</h1>  
            <div class="card">
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
        <br>
        <div class="col-md-12">  
            <table class="table table-striped table-hover" style="width:100%">
                <thead>
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
            </tbody>
            </table>
        </div>
    </div>
</div>  
@endsection    