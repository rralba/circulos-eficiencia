@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}" 
                        class="btn btn-sm btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID </th>
                                <th width>Role</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Roles as $Role)
                                <tr>
                                    <td>{{ $Role->id }}</td>
                                    <td>{{ $Role->name }}</td>
                                        @can('roles.show')
                                        <td width="10px">
                                            <a  href="{{ route('roles.show', $Role->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Ver
                                            </a>
                                        </td>
                                        @endcan
                                        @can('roles.edit')
                                        <td width="10px">
                                            <a href="{{ route('roles.edit', $Role->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Editar
                                            </a>
                                        </td>
                                        @endcan
                                        @can('roles.destroy')
                                        <td width="10px">
                                            {!! Form::open(['route' => ['roles.destroy', $Role->id],
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
                   {{ $Roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection