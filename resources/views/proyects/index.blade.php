@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Proyectos
                    @can('proyects.create')
                        <a href="{{ route('proyects.create') }}" 
                        class="btn btn-sm btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th width="400px">Nombre</th>
                                <th>Fecha de Registro</th>
                                <th>Nivel</th>
                                <th>Departamento</th>
                                <th colspan="3">&nbsp;</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proyects as $proyect)
                                <tr>
                                    <td>{{ $proyect->proydato_id }}</td>
                                    <td>{{ $proyect->proyecto }}</td>
                                    <td>{{ $proyect->fecha_reg }}</td>
                                    <td>{{ $proyect->nivel }}</td>
                                    <td>{{ $proyect->depto }}</td>
                                        @can('proyects.show')
                                        <td width="10px">
                                            <a  href="{{ route('proyects.show', $proyect->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Ver
                                            </a>
                                        </td>
                                        @endcan
                                        @can('proyects.edit')
                                        <td width="10px">
                                            <a href="{{ route('proyects.edit', $proyect->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Editar
                                            </a>
                                        </td>
                                        @endcan
                                        @can('proyects.destroy')
                                        <td width="10px">
                                            {!! Form::open(['route' => ['proyects.destroy', $proyect->id],
                                            'method' => 'delete']) !!} 
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>    
                                        @endcan
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection