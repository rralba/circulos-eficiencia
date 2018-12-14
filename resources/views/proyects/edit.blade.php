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
                {!! Form::model($proyect, ['route' => ['proyects.update', $proyect->id],
                'method' => 'PUT']) !!}
                    @include('proyects.partials.form')
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 