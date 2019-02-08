@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                                @foreach($proyect->empleados as $integrant)
                                    <tr>
                                        <td>{{ $integrant->id }}</td>
                                        <td>{{ $integrant->nombre }}</td>
                                        <td>{{ $integrant->depto }}</td>
                                        <td>{{ $integrant->posicion }}</td>
                                        <td>{{ $integrant->nivel }}</td>
                                        <td>{{ $integrant->rol }}</td>
                                        <td>{{ $integrant->direccion }}</td>
                                        <td>{{ $integrant->cia }}</td> 
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