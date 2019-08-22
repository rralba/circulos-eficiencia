@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $proyect->proyecto }}</h1> <br>
    <form action="{{ route('descuentos.edit', $proyect->id) }}" method = "post">
            {{ csrf_field() }}
<div class="table-responsive">
        <table class="w3-table-all w3-card-4">
            <thead>
                <tr>
                    <th data-column-id="beneficiod" width="8%">Beneficio</th>
                    <th data-column-id="fecha_gend" width="15%">Generado</th>
                    <th data-column-id="id_sapd" width="12%">Id Sap</th>
                    <th data-column-id="nombred">Nombre</th>
                    <th data-column-id="descuentod" width="10%">Descuentos</th>
                    <th data-column-id="conceptod">Concepto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dat as $beneficio)
                    <tr>
                        <td><input type="text" class="form-control" id="benefif" name="benefif[]" value="{{ $beneficio->id }}" readonly></td>
                        <td><input type="text" class="form-control" id="" name="" value="{{ $beneficio->fecha_gen }}" readonly></td>
                        <td><input type="text" class="form-control" id="sapid" name="sapid[]" value="{{ $beneficio->empleado_id }}" readonly></td>
                        <td><input type="text" class="form-control" id="" name="" value="{{ $beneficio->nombre }}" readonly></td>
                        @if (($desctot)>0)
                        @if (($beneficio->empleado_id)==($beneficio->sap_id))
                        <td><input type="text" class="form-control" id="descu" name="descu[]" value="{{ $beneficio->descuento }}"  required></td>
                        <td><input type="text" class="form-control" id="concep" name="concep[]" value="{{ $beneficio->concepto }}"></td>
                        @else
                        <td><input type="text" class="form-control" id="descu" name="descu[]" required></td>
                        <td><input type="text" class="form-control" id="concep" name="concep[]"></td>
                        @endif
                        @else 
                        <td><input type="text" class="form-control" id="descu" name="descu[]" required></td>
                        <td><input type="text" class="form-control" id="concep" name="concep[]"></td>
                        @endif
                    </tr>  
                @endforeach
            </tbody>
        </table>
        <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            <a  href="javascript:history.go(-1)" class="btn btn-xl btn-danger">Atras</a>
      </div>
    </form>
</div>
@endsection   