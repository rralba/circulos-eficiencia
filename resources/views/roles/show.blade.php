@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>
                <div class="card-body">     
                    <p><strong>Nombre</strong> {{ $Role->name }}</p>
                    <p><strong>Slug</strong> {{ $Role->slug }}</p>
                    <p><strong>Descripcion</strong> {{ $Role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 