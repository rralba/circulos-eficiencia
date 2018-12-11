@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Proyecto
                </div>
                <div class="card-body">
                    <p><strong>Proyecto</strong> {{ $proyect->proyecto }}</p>
                    <p><strong>Fecha de registro</strong> {{ $proyect->fecha_reg }}</p>
                    <p><strong>Nivel</strong> {{ $proyect->nivel }}</p>
                    <p><strong>Departamento</strong> {{ $proyect->depto }}</p>
                    <p><strong>Asesor</strong> {{ $proyect->asesor }}</p>
                    <p><strong>Fecha de inicio</strong> {{ $proyect->fecha_ini }}</p>
                    <p><strong>Fecha fin</strong> {{ $proyect->fecha_fin }}</p>
                    <p><strong>Comite</strong> {{ $proyect->comite }}</p>
                    <p><strong>Valor</strong> {{ $proyect->valor }}</p>
                    <p><strong>Metodologia</strong> {{ $proyect->metodologia }}</p>
                    <p><strong>Ahorro anual</strong> {{ $proyect->ahorro_anual_proy }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    