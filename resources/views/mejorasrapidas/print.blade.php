@extends('layouts.appm')

@section('content')
	<div class="imprimir">
		<div class="conta">
            <div class="left col-md-4 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center" alt="Logo de circulos de eficiencia" width="330" height="120">
            </div>
            <div class="center col-md-8 m-0 p-0">
                <h1 id="titulo" class="text-center mt-5">REGISTRO CIRCULOS DE EFICIENCIA NIVEL 3</h1>
            </div>   
        </div>
        <br>
        <br>
        <hr>
        <div class="row mt-3">
	        <div class="form-group col-md-10"></div>
	        <div class="form-group row col-md-2">
	          <label for="inputEmail4"><h3>Folio</h3></label>
	          <input type="text" class="form-control ml-4" style="width: 100px" id="direccion" name="direccion" value="{{ $mejora->id }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-5">
	        	<label for="inputEmail4"><h3>Asesor</h3></label>
	        	<input type="text" class="form-control ml-4" style="width: 70%" id="direccion" name="direccion" value="{{ $mejora->asesor }}" readonly>	
	        </div>
	        <div class="col-md-2"></div>
	        <div class="form-group row col-md-5">
	         	<label for="inputEmail4"><h3>Fecha de Registro</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ \carbon\carbon::parse($mejora->registro)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-5">
	        	<label for="inputEmail4"><h3>Direccion</h3></label>
	        	<input type="text" class="form-control ml-4" style="width: 70%" id="direccion" name="direccion" value="{{ $mejora->direccion }}" readonly>	
	        </div>
	        <div class="col-md-2"></div>
	        <div class="form-group row col-md-5">
	         	<label for="inputEmail4"><h3>Departamento</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $mejora->departamento }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-5">
	        	<label for="inputEmail4"><h3>Subdireccion</h3></label>
	        	<input type="text" class="form-control ml-4" style="width: 70%" id="direccion" name="direccion" value="{{ $mejora->subdireccion }}" readonly>	
	        </div>
	        <div class="col-md-2"></div>
	        <div class="form-group row col-md-5">
	         	<label for="inputEmail4"><h3>Valor Corporativo</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $mejora->valor }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="col-md-7"></div>
	        <div class="form-group row col-md-5">
	         	<label for="inputEmail4"><h3>Fecha de Inicio</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ \carbon\carbon::parse($mejora->inicio)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="col-md-7"></div>
	        <div class="form-group row col-md-5">
	         	<label for="inputEmail4"><h3>Fecha Final</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ \carbon\carbon::parse($mejora->final)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-6">
	         	<label for="inputEmail4"><h3>Desperdicios Lean Manufacturing (Mudas):</h3></label>
	        </div> 
	        <div class="col-md-6"></div>	
	  </div>  
	  <br>   
	<input type="hidden" id="var" name="var" value="{{ $mejora->desperdicio }}">	
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Transportacion" value="Transporacion" disabled>
					<label class="custom-control-label ml-4 p-3" for="Transportacion"><h3>Transportación</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Sobreprocesamiento" value="Sobreprocesamiento" disabled>
					<label class="custom-control-label ml-4 p-3" for="Sobreprocesamiento"><h3>Sobreprocesamiento</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Movimiento" value="Movimiento" disabled>
					<label class="custom-control-label ml-4 p-3" for="Movimiento"><h3>Movimiento</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Espera" value="Espera" disabled>
					<label class="custom-control-label ml-4 p-3" for="Espera"><h3>Espera</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Inventario" value="Inventario" disabled>
					<label class="custom-control-label ml-4 p-3" for="Inventario"><h3>Inventario</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Sobreproduccion" value="Sobreproduccion" disabled>
					<label class="custom-control-label ml-4 p-3" for="Sobreproduccion"><h3>Sobreproducción</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Defectos" value="Defectos" disabled>
					<label class="custom-control-label ml-4 p-3" for="Defectos"><h3>Defectos</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Talentos" value="Talentos" disabled>
					<label class="custom-control-label ml-4 p-3" for="Talentos"><h3>Talentos</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Metodo de Trabajo" value="Metodo de Trabajo" disabled>
					<label class="custom-control-label ml-4 p-3" for="Metodo de Trabajo"><h3>Método de Trabajo</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Productividad" value="Productividad" disabled>
					<label class="custom-control-label ml-4 p-3" for="Productividad"><h3>Productividad</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Disponibilidad de Equipos" value="Disponibilidad de Equipos" disabled>
					<label class="custom-control-label ml-4 p-3" for="Disponibilidad de Equipos"><h3>Disponibilidad de Equipos</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Costos" value="Costos" disabled>
					<label class="custom-control-label ml-4 p-3" for="Costos"><h3>Costos</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Ahorro de Energia" value="Ahorro de Energia" disabled>
					<label class="custom-control-label ml-4 p-3" for="Ahorro de Energia"><h3>Ahorro de Energia</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Ahorro de Suministros" value="Ahorro de Suministros" disabled>
					<label class="custom-control-label ml-4 p-3" for="Ahorro de Suministros"><h3>Ahorro de Suministros</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Consumo de Refacciones" value="Consumo de Refacciones" disabled>
					<label class="custom-control-label ml-4 p-3" for="Consumo de Refacciones"><h3>Consumo de Refacciones</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Demoras" value="Demoras" disabled>
					<label class="custom-control-label ml-4 p-3" for="Demoras"><h3>Demoras</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Demoras y Accidentes" value="Demoras y Accidentes" disabled>
					<label class="custom-control-label ml-4 p-3" for="Demoras y Accidentes"><h3>Demoras y Accidentes</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Desperdicio de Agua" value="Desperdicio de Agua" disabled>
					<label class="custom-control-label ml-4 p-3" for="Desperdicio de Agua"><h3>Desperdicio de Agua</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-md-3">
					<input class="custom-control-input" type="checkbox" id="Medio Ambiente" value="Medio Ambiente" disabled>
					<label class="custom-control-label ml-4 p-3" for="Medio Ambiente"><h3>Medio Ambiente</h3></label>
				</div>
      </div>
      <?php $x=0;?>
      @foreach($mejora->empleadoss as $integrante)
      	<?php $x=$x+1 ?>
      	@if($x == 1)
      <div class="row">
	        <div class="form-group row col-md-5">
	        	<label for="inputEmail4"><h3>Autor:</h3></label>
	        	<input type="text" class="form-control ml-4" style="width: 70%" id="direccion" name="direccion" value="{{ $integrante->nombre }}" readonly>	
	        </div>
	        <div class="form-group row col-md-3">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $integrante->pivot->empleado_id }}" readonly>
	        </div>
	        <div class="form-group row col-md-1">
	         	<label for="inputEmail4"><h3>S</h3></label>
	         	<label for="inputEmail4" class="ml-4"><h3>NS</h3></label>
	        </div>
	        <div class="form-group row col-md-2">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $integrante->cia }}" readonly>
	        </div>
      </div>
      @else
      <div class="row">
	        <div class="form-group row col-md-5">
	        	<label for="inputEmail4"><h3>Integrante:</h3></label>
	        	<input type="text" class="form-control ml-4" style="width: 70%" id="direccion" name="direccion" value="{{ $integrante->nombre }}" readonly>	
	        </div>
	        <div class="form-group row col-md-3">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $integrante->pivot->empleado_id }}" readonly>
	        </div>
	        <div class="form-group row col-md-1">
	         	<label for="inputEmail4"><h3>S</h3></label>
	         	<label for="inputEmail4" class="ml-4"><h3>NS</h3></label>
	        </div>
	        <div class="form-group row col-md-2">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	<input type="text" class="form-control ml-4" style="width: 60%" id="direccion" name="direccion" value="{{ $integrante->cia }}" readonly>
	        </div>
      </div>
      @endif
      @endforeach
      <div class="row">
	        <div class="form-group row col-md-12">
	        	<label for="recipient-name" class="col-form-label"><h3>¿Que debe mejorase?</h3></label>
	        	<textarea class="form-control ml-4" rows="4" id="direccion" name="direccion" readonly>{{ $mejora->amejorar }}</textarea>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-12">
	        	<label for="recipient-name" class="col-form-label"><h3>Objetivo</h3></label>
	        	<textarea class="form-control ml-4" rows="4" id="direccion" name="direccion" readonly>{{ $mejora->objetivo }}</textarea>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-md-12">
	        	<label for="recipient-name" class="col-form-label"><h3>Solución</h3></label>
	        	<textarea class="form-control ml-4" rows="4" id="direccion" name="direccion" readonly>{{ $mejora->solucion }}</textarea>
	        </div>
      </div>
      <div class="row">
      	    <div class="col-md-4"></div>
      	    <div class="col-md-4 text-center">
      	    	<label for="recipient-name" class="col-form-label m-0 p-0" id="idjefe"><i>{{ $mejora->id_autoriza }}</i></label>
      	    	<label for="recipient-name" class="col-form-label m-0 p-0"><i>{{ $mejora->jefes->nombre }}</i></label>
      	    	<hr class="m-1 p-1">
      	    	<label for="recipient-name" class="col-form-label m-0 p-0"><h3>Nombre y Firma</h3></label>
      	    	<label for="recipient-name" class="col-form-label"><h3>Superintendente del Área</h3></label>
      	    </div>
      	    <div class="col-md-4"></div>
      </div>
      <div class="row">
      	    <div class="col-md-10"></div>
      	    <div class="col-md-2 text-center">
      	    	<label for="recipient-name" class="col-form-label"><h4>RHC-02-F-03</h4></label>
      	    </div>
      </div>
	</div>
	<div class="row" id="botones">
		<div class="container-contact100-form-btn col-md-12">
    		<button class="contact100-form-btn imprimir">
      			<span>
        			Imprimir
        			<i class="imprimir fa fa-print m-l-7" aria-hidden="true"></i>
      			</span>
    		</button>
    	</div>
    </div>
  <script>
    $('.imprimir').click(function(){
        window.print();
        return false;
    });       
  </script>
@endsection