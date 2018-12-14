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
                    <p><strong>Nombre</strong> {{ $User->name }}</p>
                    <p><strong>Email</strong> {{ $User->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    