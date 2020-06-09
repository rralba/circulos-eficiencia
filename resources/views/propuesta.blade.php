@extends('layouts.appm')

@section('content')
@section('submenu')
    <h1 class="text-center">Registro de propuesta de Circulo de Eficiencia</h1>
@endsection      
      <div class="container">
          <form id="mr" action="{{ route('mr.store') }}" method = "POST">
            {{ csrf_field() }}
              <div class="row">  
                <div class="col-md-4">
                  <label for="registro">Registro:</label>
                  <input type="date" class="form-control" id="registro" name="" required>
                </div>
                <div class="col-md-8">  
                  <label for="recipient-name" class="col-form-label">Direccion:</label>
                  <select class="form-control" id="direccion" name="">
                      <option value="CONSEJO">CONSEJO</option>
                      <option value="DIRECCIONGENERAL">DIRECCION GENERAL</option>
                      <option value="COMUNICACION SOCIAL Y REL PUBLICAS">COMUNICACION SOCIAL Y REL PUBLICAS</option>
                      <option value="GENERAL ADJUNTA DE OPERACIONES">GENERAL ADJUNTA DE OPERACIONES</option>
                      <option value="ACERO">ACERO</option>
                      <option value="LAMINACION MANTENIMIENTOS Y SERVICIOS">LAMINACION MANTENIMIENTOS Y SERVICIOS</option>
                      <option value="GRAL ADJ DE ADMINISTRACION Y FINANZAS">GRAL ADJ DE ADMINISTRACION Y FINANZAS</option>
                      <option value="COMERCIALIZACION Y MERCADOTECNIA">COMERCIALIZACION Y MERCADOTECNIA</option>
                      <option value="CORPORATIVO DE ABASTECIMIENTOS">CORPORATIVO DE ABASTECIMIENTOS</option>
                      <option value="CONTRALORIA Y SISTEMAS">CONTRALORIA Y SISTEMAS</option>
                      <option value="CORPORATIVO DE RECURSOS HUMANOS">CORPORATIVO DE RECURSOS HUMANOS</option>
                      <option value="CORPORATIVO DE RELACIONES INDUSTRIALES">CORPORATIVO DE RELACIONES INDUSTRIALES</option>
                      <option value="SEGURIDAD Y MEDIO AMBIENTE">SEGURIDAD Y MEDIO AMBIENTE</option>
                      <option value="JURIDICO CORPORATIVO">JURIDICO CORPORATIVO</option>
                      <option value="VICEPRESIDENCIA DEL CONSEJO">VICEPRESIDENCIA DEL CONSEJO</option>
                      <option value="PLANEACION FINANCIERA Y TESORERIA">PLANEACION FINANCIERA Y TESORERIA</option>
                      <option value="CORPORATIVO DE FINANZAS Y PLANEACION">CORPORATIVO DE FINANZAS Y PLANEACION</option>
                      <option value="CORPORATIVA DE OPERACIONES">CORPORATIVA DE OPERACIONES</option>
                  </select>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-6">
                  <label for="recipient-name" class="col-form-label">Subdireccion:</label>
                  <select class="form-control" id="subdireccion" name="">
                  </select>
                </div>
                <div class="col-md-6">  
                  <label for="recipient-name" class="col-form-label">Departamento:</label>
                  <input type="text" class="form-control" id="departamento" name="" required>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label">Seccion:</label>
                  <input type="text" class="form-control" id="seccion" name="">
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Valor:</label>
                  <input type="text" class="form-control" id="valor" name="" required>
                </div>  
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Desperdicio:</label>
                  <input type="text" class="form-control" id="desperdicio" name="" required>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label">Inicio:</label>
                  <input type="date" class="form-control" id="inicio" name="">
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Final:</label>
                  <input type="date" class="form-control" id="final" name="" required>
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Asesor:</label>
                  <input type="text" class="form-control" id="asesor" name="" required>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">A Mejorar:</label>
                  <textarea class="form-control" id="amejorar" name="" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">Objetivo:</label>
                  <textarea class="form-control" id="objetivo" name="" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">Solucion:</label>
                  <textarea class="form-control" id="solucion" name="" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
            <br>
            <button class="btn btn-primary small" type="submit">Guardar</button>
          </form>
      </div>
<script>
	 var options = {
      CONSEJO : ["AREA ADMINISTRATIVA OFICINAS MEXICO"],
      DIRECCIONGENERAL : ["N/A"]
    }

    $(function(){
      var fillSecondary = function(){
        var selected = $('#direccion').val();
        $('#subdireccion').empty();
        options[selected].forEach(function(element,index){
          $('#subdireccion').append('<option value="'+element+'">'+element+'</option>');
        });
      }
      $('#direccion').change(fillSecondary);
      fillSecondary();
    });
</script>
@endsection