@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                        @can('users.show')
                                        <td width="10px">
                                            <a  href="{{ route('users.show', $user->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Ver
                                            </a>
                                        </td>
                                        @endcan
                                        @can('users.edit')
                                        <td width="10px">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-sm btn-primary">
                                                Editar
                                            </a>
                                        </td>
                                        @endcan
                                        @can('users.destroy')
                                        <td width="10px">
                                            {!! Form::open(['route' => ['users.destroy', $user->id],
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
                   {{ $Users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection