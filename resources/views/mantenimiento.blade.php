@extends('layouts.appm')

@section('content')
<h1>Limpiar</h1>
<h5>Procesos de mantenimiento y actualizacion de sistema</h5>
<hr>
<br>
<a href="{{ route('cache') }}" class="btn btn-primary btn-lg m-2">Cache</a>
<a href="{{ route('routes') }}" class="btn btn-primary btn-lg m-2">routes</a>
<a href="{{ route('config') }}" class="btn btn-primary btn-lg m-2">config</a>
<a href="{{ route('view') }}" class="btn btn-primary btn-lg m-2">view</a>
@endsection