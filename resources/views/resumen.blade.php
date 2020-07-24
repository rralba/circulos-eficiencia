@extends('layouts.appm')

@section('content')
<form class="contact100-form validate-form">
  <span class="contact100-form-title">
    <h1 class="text-center">Registro de Propuesta de Círculo de Eficiencia</h1>
  </span>
      <span class="contact100-form-title">
        <h3 class="text-left">Solicitud guardada con Éxito, con número de Folio <strong>{{$r->id}}</strong>, Detallada a continuación:</h3>
      </span>
      <h1>{{ $r }}</h1>
  <div class="container-contact100-form-btn">
    <a class="contact100-form-btn" href="/propuesta" type="submit">
      <span>
        Salir
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </a>
  </div>
</form>       
@endsection