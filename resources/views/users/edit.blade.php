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
                {!! Form::model($User, ['route' => ['users.update', $User->id],
                'method' => 'PUT']) !!}
                    @include('users.partials.form')
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 