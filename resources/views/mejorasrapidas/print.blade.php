@extends('layouts.appm')

@section('content')
<style>
	.row{
		margin-left: 0px;
		margin-right: 0px;
	}
</style>
	<div class="imprime">
		<div class="conta">
            <div class="left col-sm-4 m-0 p-0">
                <img src="{!! asset('jpg/logoce.jpg') !!}" class="float-center imagen1" alt="Logo de circulos de eficiencia" width="320" height="90">
            </div>
            <div class="center col-sm-8 m-0 p-0">
                <h1 id="titulo" class="text-right mt-5">REGISTRO CIRCULOS DE EFICIENCIA NIVEL 3</h1>
            </div>   
        </div>
        <hr>
        <div class="row">
	        <div class="form-group row col-sm-4 justify-content-end">
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	          <label for="inputEmail4"><h3>Folio</h3></label>
	          <input type="text" class="form-control mr-5 ml-3" style="width: 30%;"  id="id" name="id" value="{{ $mejora->id }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Asesor</h3></label>	
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	        	<input type="text" class="form-control mr-5" id="asesor" name="asesor" value="{{ $mejora->asesor }}" readonly>	
	        </div>
	        <div class="form-group row col-sm-2 justify-content-end">
	         	<label for="inputEmail4"><h3>Fecha de Registro</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	         	<input type="text" class="form-control mr-5" id="registro" name="registro" value="{{ \carbon\carbon::parse($mejora->registro)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Dirección</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	        	<input type="text" class="form-control mr-5" id="direccion" name="direccion" value="{{ $mejora->direccion }}" readonly>	
	        </div>
	        <div class="form-group row col-sm-2 justify-content-end">
	         	<label for="inputEmail4"><h3>Departamento</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	         	<input type="text" class="form-control mr-5" id="departamento" name="departamento" value="{{ $mejora->departamento }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Subdirección</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	        	<input type="text" class="form-control mr-5" id="direccion" name="direccion" value="{{ $mejora->subdireccion }}" readonly>	
	        </div>
	        <div class="form-group row col-sm-2 justify-content-end">
	         	<label for="inputEmail4"><h3>Valor Corporativo</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	         	<input type="text" class="form-control mr-5" id="direccion" name="direccion" value="{{ $mejora->valor }}" readonly>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	        </div>
	        <div class="form-group row col-sm-2 justify-content-end">
	         	<label for="inputEmail4"><h3>Fecha de Inicio</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	         	<input type="text" class="form-control mr-5" id="direccion" name="direccion" value="{{ \carbon\carbon::parse($mejora->inicio)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>
      <div class="row">
      	<div class="form-group row col-sm-1 justify-content-end">
	        </div>
	        <div class="form-group row col-sm-5 justify-content-start">
	         	<label for="inputEmail4"><h3>Desperdicios Lean Manufacturing (Mudas):</h3></label>
	        </div>
	        <div class="form-group row col-sm-2 justify-content-end">
	         	<label for="inputEmail4"><h3>Fecha Final</h3></label>
	        </div>
	        <div class="form-group row col-sm-4 justify-content-end">
	         	<input type="text" class="form-control mr-5" id="direccion" name="direccion" value="{{ \carbon\carbon::parse($mejora->final)->format('d   F   Y ') }}" readonly>
	        </div>
      </div>  
	  <br>   
	<input type="hidden" id="var" name="var" value="{{ $mejora->desperdicio }}">	
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Transportacion" value="Transporacion" disabled>
					<label class="custom-control-label  p-3" for="Transportacion"><h3>Transportación</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Sobreprocesamiento" value="Sobreprocesamiento" disabled>
					<label class="custom-control-label  p-3" for="Sobreprocesamiento"><h3>Sobreprocesamiento</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Movimiento" value="Movimiento" disabled>
					<label class="custom-control-label  p-3" for="Movimiento"><h3>Movimiento</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Espera" value="Espera" disabled>
					<label class="custom-control-label  p-3" for="Espera"><h3>Espera</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Inventario" value="Inventario" disabled>
					<label class="custom-control-label  p-3" for="Inventario"><h3>Inventario</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Sobreproduccion" value="Sobreproduccion" disabled>
					<label class="custom-control-label  p-3" for="Sobreproduccion"><h3>Sobreproducción</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Defectos" value="Defectos" disabled>
					<label class="custom-control-label  p-3" for="Defectos"><h3>Defectos</h3></label>
				</div>
				<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Talentos" value="Talentos" disabled>
					<label class="custom-control-label  p-3" for="Talentos"><h3>Talentos</h3></label>
				</div>
      </div>
      <div class="row">
	         	<div class="custom-control custom-checkbox checkbox-xl col-sm-3">
					<input class="custom-control-input" type="checkbox" id="Metodo de Trabajo" value="Metodo de Trabajo" disabled>
					<label class="custom-control-label  p-3" for="Metodo de Trabajo"><h3>Método de Trabajo</h3></label>
				</div>
				<div class="form-group row col-sm-7">
					<label for="inputEmail4" class=" p-3"><h3>Otros Conceptos:</h3></label>
					<label for="inputEmail4" class=" m-0 pl-0 pt-3"><h3>{{ $mejora->desperdicio }}</h3></label>
				</div>
      </div>
      <br>
      <?php $x=0;?>
      @foreach($mejora->empleadoss as $integrante)
      	<?php $x=$x+1 ?>
      	@if((($integrante->pivot->empleado_id)==0))
      	@if($x == 1)
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Autor</h3></label>
	        </div>
	        <div class="form-group row col-sm-4">
	        	<input type="text" class="form-control  mr-2" style="width: 90%" id="direccion" name="direccion" readonly>	
	        </div>
	        <div class="form-group row col-sm-2">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-3" style="width: 50%" id="direccion" name="direccion" readonly>
	        </div>
	        <div class="form-group row col-sm-1">
	        	@if((($integrante->cia)==1000 or ($integrante->cia)==2000))
	         		<label for="inputEmail4"><h3 style="background: gray">S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3>NS</h3></label>
	         	@else
	         		<label for="inputEmail4"><h3>S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3 style="background: gray">NS</h3></label>
	         	@endif
	        </div>
	        <div class="form-group row col-sm-3">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	@if((($integrante->cia)==1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)==2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)>2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)<1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	        </div>
      </div>
      @else
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Integrante</h3></label>
	        </div>
	        <div class="form-group row col-sm-4">
	        	<input type="text" class="form-control  mr-2" style="width: 90%" id="direccion" name="direccion" readonly>	
	        </div>
	        <div class="form-group row col-sm-2">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-3" style="width: 50%" id="direccion" name="direccion" readonly>
	        </div>
	        <div class="form-group row col-sm-1">
	         	@if((($integrante->cia)==1000 or ($integrante->cia)==2000))
	         		<label for="inputEmail4"><h3 style="background: gray">S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3>NS</h3></label>
	         	@else
	         		<label for="inputEmail4"><h3>S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3 style="background: gray">NS</h3></label>
	         	@endif
	        </div>
	        <div class="form-group row col-sm-3">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	@if((($integrante->cia)==1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)==2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)>2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	         	@if((($integrante->cia)<1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" readonly>
	         	@endif
	        </div>
	        <div class="col-sm-1"></div>
      </div>
      @endif
      @else
      	@if($x == 1)
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Autor</h3></label>
	        </div>
	        <div class="form-group row col-sm-4">
	        	<input type="text" class="form-control  mr-2" style="width: 90%" id="direccion" name="direccion" value="{{ $integrante->nombre }}" readonly>	
	        </div>
	        <div class="form-group row col-sm-2">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-3" style="width: 50%" id="direccion" name="direccion" value="{{ $integrante->pivot->empleado_id }}" readonly>
	        </div>
	        <div class="form-group row col-sm-1">
	        	@if((($integrante->cia)==1000 or ($integrante->cia)==2000))
	         		<label for="inputEmail4"><h3 style="background: gray">S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3>NS</h3></label>
	         	@else
	         		<label for="inputEmail4"><h3>S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3 style="background: gray">NS</h3></label>
	         	@endif
	        </div>
	        <div class="form-group row col-sm-3">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	@if((($integrante->cia)==1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="AHMSA SIDERURGICA 1" readonly>
	         	@endif
	         	@if((($integrante->cia)==2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="AHMSA SIDERURGICA 2" readonly>
	         	@endif
	         	@if((($integrante->cia)>2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="SERVICIOS CORPORATIVOS AHMSA" readonly>
	         	@endif
	         	@if((($integrante->cia)<1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="SERVICIOS MONCLOVA" readonly>
	         	@endif
	        </div>
      </div>
      @else
      <div class="row">
	        <div class="form-group row col-sm-2 justify-content-end">
	        	<label for="inputEmail4"><h3>Integrante</h3></label>
	        </div>
	        <div class="form-group row col-sm-4">
	        	<input type="text" class="form-control  mr-2" style="width: 90%" id="direccion" name="direccion" value="{{ $integrante->nombre }}" readonly>	
	        </div>
	        <div class="form-group row col-sm-2">
	         	<label for="inputEmail4"><h3>Ficha</h3></label>
	         	<input type="text" class="form-control ml-3" style="width: 50%" id="direccion" name="direccion" value="{{ $integrante->pivot->empleado_id }}" readonly>
	        </div>
	        <div class="form-group row col-sm-1">
	         	@if((($integrante->cia)==1000 or ($integrante->cia)==2000))
	         		<label for="inputEmail4"><h3 style="background: gray">S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3>NS</h3></label>
	         	@else
	         		<label for="inputEmail4"><h3>S</h3></label>
	         		<label for="inputEmail4" class="ml-2"><h3 style="background: gray">NS</h3></label>
	         	@endif
	        </div>
	        <div class="form-group row col-sm-3">
	         	<label for="inputEmail4"><h3>Cia.</h3></label>
	         	@if((($integrante->cia)==1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="AHMSA SIDERURGICA 1" readonly>
	         	@endif
	         	@if((($integrante->cia)==2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="AHMSA SIDERURGICA 2" readonly>
	         	@endif
	         	@if((($integrante->cia)>2000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="SERVICIOS CORPORATIVOS AHMSA" readonly>
	         	@endif
	         	@if((($integrante->cia)<1000))
	         		<input type="text" class="form-control ml-3" style="width: 70%" id="direccion" name="direccion" value="SERVICIOS MONCLOVA" readonly>
	         	@endif
	        </div>
	        <div class="col-sm-1"></div>
      </div>
      @endif
      @endif
      @endforeach
      <br>
      <br>
      <div class="row">
	        <div class="form-group row col-sm-12">
	        	<label for="recipient-name" class="col-form-label "><h3>¿Qué debe mejorarse?</h3></label>
	        	<textarea class="form-control " rows="3" id="direccion" name="direccion" readonly>{{ $mejora->amejorar }}</textarea>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-12">
	        	<label for="recipient-name" class="col-form-label "><h3>Objetivo</h3></label>
	        	<textarea class="form-control " rows="3" id="direccion" name="direccion" readonly>{{ $mejora->objetivo }}</textarea>
	        </div>
      </div>
      <div class="row">
	        <div class="form-group row col-sm-12">
	        	<label for="recipient-name" class="col-form-label "><h3>Solución</h3></label>
	        	<textarea class="form-control " rows="3" id="direccion" name="direccion" readonly>{{ $mejora->solucion }}</textarea>
	        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="piepag">
      <div class="row mt-5">
      	    <div class="col-sm-3"></div>
      	    <div class="col-sm-6 text-center">
      	    	<hr class="m-1 p-1">
      	    	<label for="recipient-name" class="col-form-label m-0 p-0" id="idjefe"><i>{{ $mejora->id_autoriza }}</i></label>
      	    	<label for="recipient-name" class="col-form-label m-0 p-0"><h3>{{ $mejora->jefes->nombre }}</h3></label> <br>
      	    	<label for="recipient-name" class="col-form-label m-0 p-0"><h3>{{ $mejora->jefes->posicion }}</h3></label>
      	    </div>
      	    <div class="col-sm-3"></div>
      </div>
      <div class="row">
      	    <div class="col-sm-10"></div>
      	    <div class="col-sm-2 text-center">
      	    	<label for="recipient-name" class="col-form-label"><h3>RHC-02-F-03</h3></label>
      	    </div>
      </div>
      </div>
      {{-- <div class="saltoDePagina"></div> --}}
	</div>
	<div class="row" id="botones">
		<div class="container-contact100-form-btn col-sm-12">
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