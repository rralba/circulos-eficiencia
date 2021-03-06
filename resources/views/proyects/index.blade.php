@extends('layouts.app')

@section('content')
<div class="container-fluid">
<br>
<h1 align="center">Proyectos Activos, Nivel 1 y 2</h1>
<br>
    @can('proyects.create')
        <a href="{{ route('proyects.create') }}" 
        class="btn btn-sm btn-outline-primary float-right fa fa-file-o" title="Agregar Proyecto">
        </a>
    @endcan
<br>
<br>
<div class="table-responsive">
   <table class="table table-striped table-hover table-bordered">
        <thead class="">
            <tr>
                <th data-column-id="id" width="10px">Id</th>
                <th width="400px">Nombre</th>
                <th>Registro</th>
                <th>Nivel</th>
                <th>Departamento</th>
                <th>Asesor</th>
                <th>Comite</th>
                <th>Metodologia</th>
                <th>Proyeccion Anual</th>
                <th colspan="3">&nbsp;</th> 
            </tr>
        </thead>
        <tbody id="developers">
            @foreach($proyects as $proyect)
                <tr>
                    <td>{{ $proyect->id }}</td>
                    <td>{{ $proyect->proyecto }}</td>
                    <td>{{ \carbon\carbon::parse($proyect->fecha_reg)->format('M-Y') }}</td>
                    <td>{{ $proyect->nivel }}</td>
                    <td>{{ $proyect->depto }}</td>
                    <td>{{ $proyect->asesor }}</td>
                    <td>{{ $proyect->comite }}</td>
                    <td>{{ $proyect->metodologia }}</td>
                    <td>{{ sprintf('$ %s', number_format($proyect->ahorro_anual_proy,0, '.', ',')) }}</td>
                        @can('proyects.show')
                        <td width="07px">
                            <a  href="{{ route('proyects.show', $proyect->id) }}"
                            class="btn btn-sm btn-outline-primary fa fa-info-circle" title="Detalles del Proyecto">
                            </a>
                        </td>
                        @endcan
                        @can('proyects.edit')
                        @if ($proyect->comite == 0) 
                            <td width="07px">
                                <a href="{{ route('proyects.edit', $proyect->id) }}"
                                class="btn btn-sm btn-outline-primary fa fa-pencil-square-o" title="Editar Proyecto">
                                </a>
                            </td> 
                        @else
                            <td width="07px">
                                <a href="{{ route('proyects.edit', $proyect->id) }}"
                                class="btn btn-sm btn-outline-primary fa fa-pencil-square-o disabled" title="Editar Proyecto">
                                </a>
                            </td>
                        @endif
                        @endcan
                        @can('proyects.destroy')
                            <td width="07px">
                                <a href="{{ route('proyects.destroy', $proyect->id)  }}"
                                class="btn btn-sm btn-outline-danger fa fa-ban" title="Cancelar Proyecto">
                                </a>
                            </td>    
                        @endcan
                </tr>
            @endforeach
        </tbody>
   </table>
</div>
</div>
@endsection