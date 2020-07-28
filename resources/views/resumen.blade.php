@extends('layouts.appm')

@section('content')
<span class="contact100-form-title">
  <h1 class="text-center">Registro de Propuesta de Círculo de Eficiencia</h1>
</span>
<form>
  <fieldset disabled>
    <span class="contact100-form-title">
      <h3 class="text-left">Solicitud guardada con Éxito, con número de Folio <strong>{{$propuesta->id}}</strong>, Detallada a continuación:</h3>
    </span>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Dirección</label>
          <input type="text" class="form-control" value="{{ $propuesta->direccion }}">
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">Subdirección</label>
          <input type="text" class="form-control" value="{{ $propuesta->subdireccion }}">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Departamento</label>
          <input type="text" class="form-control" value="{{ $propuesta->departamento }}">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Contacto</label>
          <input type="text" class="form-control" value="{{ $propuesta->contacto }}">
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4">Telefono</label>
          <input type="text" class="form-control" value="{{ $propuesta->clave }}">
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">Extensión</label>
          <input type="text" class="form-control" value="{{ $propuesta->extension }}">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-1">
          <label for="inputEmail4">Ficha</label>
          <input type="text" class="form-control" value="{{ $propuesta->id_autoriza }}">
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">Nombre</label>
          <input type="text" class="form-control" value="{{ $propuesta->jefe->nombre }}">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Posición</label>
          <input type="text" class="form-control" value="{{ $propuesta->jefe->posicion }}">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-10">
        </div>
        <div class="form-group col-md-1">
          <label for="inputEmail4">Fecha Inicio</label>
          <input type="text" class="form-control" value="{{ $propuesta->inicio }}">
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">Fecha Final</label>
          <input type="text" class="form-control" value="{{ $propuesta->final }}">
        </div>
      </div>
      @if (($propuesta->identificador) == (1))
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Nombre del Proyecto</label>
            <input type="text" class="form-control" value="{{ $propuesta->proyecto }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Porqué consideras que el proyecto es creativo y/o innovador?</label>
            <textarea type="text" class="form-control" rows="4">{{ $propuesta->creativo }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Qué áreas deben participar en el desarrollo del proyecto?</label>
            <input type="text" class="form-control" value="{{ $propuesta->areas_part }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Qué conocimientos, especialidades y/o habilidades se requieren de los integrantes?</label>
            <input type="text" class="form-control" value="{{ $propuesta->skills_integ }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Cuáles son las principales actividades a realizar por el equipo?</label>
            <input type="text" class="form-control" value="{{ $propuesta->principales_act }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Cuál es el conocimiento crítico requerido para el desarrollo del proyecto?</label>
            <input type="text" class="form-control" value="{{ $propuesta->conocimiento_critico }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">¿Cómo participa el personal sindicalizado?</label>
            <input type="text" class="form-control" value="{{ $propuesta->sindicalizados }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-10">
          </div>
          <div class="form-group col-md-2">
            <label for="inputEmail4">Beneficio Económico</label>
            <input type="text" class="form-control" value="{{ $propuesta->beneficio_eco }}">
          </div> 
        </div>    
      @else
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">A Mejorar</label>
            <textarea class="form-control" rows="3">{{ $propuesta->mejorar }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Objetivo</label>
            <textarea type="text" class="form-control">{{ $propuesta->objetivo }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Solución</label>
            <textarea type="text" class="form-control">{{ $propuesta->solucion }}</textarea>
          </div> 
        </div>
      @endif  
      @foreach($propuesta->empleadosol as $integrante)
        <div class="row">
          <div class="form-group col-md-3">
          </div>
          <div class="form-group col-md-1">
            <label for="inputEmail4">Ficha</label>
            <input type="text" class="form-control" value="{{ $integrante->id }}">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control" value="{{ $integrante->nombre }}">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Posición</label>
            <input type="text" class="form-control" value="{{ $integrante->posicion }}">
          </div>
        </div>
      @endforeach
  </fieldset>
  <div class="container-contact100-form-btn">
    <button class="contact100-form-btn" onclick="location.href='132.132.14.226/capacitacion/index.php/propuesta' " type="submit">
      <span>
        Salir
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </button>
  </div>    
</form>       
@endsection