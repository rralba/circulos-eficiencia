
@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped table-hover">
         <thead class="thead-dark">
             <tr>
                 <th>Id</th>
                 <th>Fecha de Registro</th>
                 <th>Beneficio</th>
                 <th>Status</th>
                 <th>'#' pago</th>
                 <th>Mes de Pago</th> 
             </tr>
         </thead>
         <tbody>
             @foreach($beneficios as $beneficio)
             @if (($beneficio->status)==1)
                 <tr>
                     <td>{{ $beneficio->proyect_id }}</td>
                     <td>{{ $beneficio->fecha_gen }}</td>
                     <td>{{ $beneficio->beneficio }}</td>
                     <td>{{ $beneficio->status }}</td>
                     <td>{{ $beneficio->num_pago }}</td>
                     <td>{{ $beneficio->mes_pago }}</td>
                 </tr>
             @endif    
             @endforeach
         </tbody>
    </table>
    {{ $beneficios->render() }}
</div>
@endsection

