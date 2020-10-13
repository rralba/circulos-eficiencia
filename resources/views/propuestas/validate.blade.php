@extends('layouts.appm')

@section('content')
<span class="contact100-form-title">
  <h1 class="text-center">Propuesta de Círculo de Eficiencia</h1>
</span>
<form id="validate" name="validate" action="{{ route('propuesta.accept') }}" method = "POST" enctype="multipart/form-data">
   {{ csrf_field() }}
  
    <input type="hidden" id="id" name="id" value="{{ $propuesta->id }}">
    <input type="hidden" id="identificador" name="identificador" value="{{ $propuesta->identificador }}">
    <input type="hidden" id="registro" name="registro" value="{{ date("Y-m-d") }}">
      <div class="row">
        <div class="form-group col-md-4">
          <label for="inputEmail4"><h6>Dirección</h6></label>
          <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $propuesta->direccion }}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4"><h6>Subdirección</h6></label>
          <input type="text" class="form-control" id="subdireccion" name="subdireccion" value="{{ $propuesta->subdireccion }}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4"><h6>Departamento</h6></label>
          <input type="text" class="form-control" id="depto" name="depto" value="{{ $propuesta->departamento }}" readonly>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4"><h6>Contacto</h6></label>
          <input type="text" class="form-control" value="{{ $propuesta->contacto }}" readonly>
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4"><h6>Telefono</h6></label>
          <input type="text" class="form-control" value="{{ $propuesta->clave }}" readonly>
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4"><h6>Extensión</h6></label>
          <input type="text" class="form-control" value="{{ $propuesta->extension }}" readonly>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-1">
          <label for="inputEmail4"><h6>Ficha</h6></label>
          <input type="text" class="form-control" id="employeeid" name="id_jefe" value="{{ $propuesta->id_autoriza }}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4"><h6>Nombre</h6></label>
          <input type="text" class="form-control" id="employee_search" value="{{ $propuesta->jefe->nombre }}">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4"><h6>Posición</h6></label>
          <input type="text" class="form-control" id="employeedepto" value="{{ $propuesta->jefe->posicion }}" readonly>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-8">
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4"><h6>Fecha Inicio</h6></label>
          <input type="text" class="form-control datepicker" style="width: 100px;" id="inicio" name="inicio" value="{{ $propuesta->inicio }}">
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4"><h6>Fecha Final</h6></label>
          <input type="text" class="form-control datepicker" style="width: 100px;" id="final" name="final" value="{{ $propuesta->final }}">
        </div>
      </div>
         <br>
        
         <div class="row">
          <div class="col-md-10"></div>
          <div class=" form-group col-md-2">  
            <label for="to" class="col-form-label"><h4 class="p-0 m-0">Asesor:</h4></label>
            <input type="text" class="form-control" id="asesor" name="asesor" value="{{ $propuesta->asesor }}" readonly>
          </div>
        </div>
        <br>
        <div class="row" id="valor">
          <div class="col-md-5"></div>
          <div class=" form-group col-md-3" id="valorvalid">  
            <label for="to" class="col-form-label"><h4 class="p-0 m-0">Valor Corporativo:</h4></label>
            <select type="text" class="form-control" id="valor" name="valor">
                <option value=""></option>
                <option value="Calidad">Calidad</option>
                <option value="Costos">Costos</option>
                <option value="Cuidado al Medio Ambiente">Cuidado al Medio Ambiente</option>
                <option value="Medio Ambiente">Medio Ambiente</option>
                <option value="Método de Trabajo">Método de Trabajo</option>
                <option value="Productividad">Productividad</option>
                <option value="productividad y Calidad">productividad y Calidad</option>
                <option value="Productividad y Costos">Productividad y Costos</option>
                <option value="Productividad, Calidad y Costos">Productividad, Calidad y Costos</option>
                <option value="Seguridad">Seguridad</option>
              </select>
          </div>
          <div class=" form-group col-md-4" id="desperdiciovalid">  
            <label for="to" class="col-form-label"><h4 class="p-0 m-0">Desperdicios Lean Manufacturing:</h4></label>
            <select type="text" style="width: 70%;" class="form-control" id="desperdicio" name="desperdicio">
                <option value=""></option>
                <option value="Ahorro de Energia">Ahorro de Energia</option>
                <option value="Ahorro de Suministros">Ahorro de Suministros</option>
                <option value="Consumo de Refacciones">Consumo de Refacciones</option>
                <option value="Costos">Costos</option>
                <option value="Defectos">Defectos</option>
                <option value="Demoras">Demoras</option>
                <option value="Demoras y Accidentes">Demoras y Accidentes</option>
                <option value="Desperdicio de Agua">Desperdicio de Agua</option>
                <option value="Disponibilidad de Equipos">Disponibilidad de Equipos</option>
                <option value="Espera">Espera</option>
                <option value="Inventario">Inventario</option>
                <option value="Medio Ambiente">Medio Ambiente</option>
                <option value="Metodo de Trabajo">Método de Trabajo</option>
                <option value="Movimiento">Movimiento</option>
                <option value="Productividad">Productividad</option>
                <option value="Sobreprocesamiento">Sobreprocesamiento</option>
                <option value="Sobreproduccion">Sobreproduccion</option>
                <option value="Talentos">Talentos</option>
                <option value="Transporacion">Transporación</option>
              </select>
          </div>
        </div>
       <br>
      @if (($propuesta->identificador) == (3))
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>Nombre del Proyecto</h6></label>
            <input type="text" class="form-control" id="proyecto" name="proyecto" value="{{ $propuesta->proyecto }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Porqué consideras que el proyecto es creativo y/o innovador?</h6></label>
            <textarea type="text" class="form-control" rows="4" id="creativo" name="creativo">{{ $propuesta->creativo }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Qué áreas deben participar en el desarrollo del proyecto?</h6></label>
            <input type="text" class="form-control" id="areas" name="areas" value="{{ $propuesta->areas_part }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Qué conocimientos, especialidades y/o habilidades se requieren de los integrantes?</h6></label>
            <input type="text" class="form-control" id="skills" name="skills" value="{{ $propuesta->skills_integ }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Cuáles son las principales actividades a realizar por el equipo?</h6></label>
            <input type="text" class="form-control" id="principales" name="principales" value="{{ $propuesta->principales_act }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Cuál es el conocimiento crítico requerido para el desarrollo del proyecto?</h6></label>
            <input type="text" class="form-control" id="critico" name="critico" value="{{ $propuesta->conocimiento_critico }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>¿Cómo participa el personal sindicalizado?</h6></label>
            <input type="text" class="form-control" id="sindicalizados" name="sindicalizados" value="{{ $propuesta->sindicalizados }}">
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-10">
          </div>
          <div class="form-group col-md-2 ">
            <label for="inputEmail4"><h6>Beneficio Económico</h6></label>
            <input type="text" class="form-control" id="beneficio" name="beneficio" value="{{ $propuesta->beneficio_eco }}">
          </div> 
        </div>   
      @else 
      @if (($propuesta->identificador) == (4))
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>A Mejorar</h6></label>
            <textarea class="form-control" id="mejorar" name="mejorar" rows="3">{{ $propuesta->mejorar }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>Objetivo</h6></label>
            <textarea type="text" class="form-control" id="objetivo" name="objetivo">{{ $propuesta->objetivo }}</textarea>
          </div> 
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>Solución</h6></label>
            <textarea type="text" class="form-control" id="solucion" name="solucion">{{ $propuesta->solucion }}</textarea>
          </div> 
        </div>
         {{--  <div class="form-group col-md-12">
            <label for="inputEmail4"><h6>Archivos Adjuntos:</h6></label>
              <div class="row">
                @foreach($propuesta->attach as $attached)
                  <a><img src="{{ asset('/../storage/app/'.$attached->attach_path) }}"  height="90px" width="90px"></a>
                @endforeach
              </div>  
          </div>  --}}
      @endif
      @endif
      <?php $x=0;?>
      @foreach($propuesta->empleadosol as $integrante)
        <?php $x=$x+1 ?>
        <div class="row">
          <div class="form-group col-md-2">
          </div>
          <div class="form-group col-md-1">
            <label for="inputEmail4"><h6>Ficha</h6></label>
            <input type="text" class="form-control" id="employeeid{{$x}}" name="integ[]" value="{{ $integrante->id }}" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4"><h6>Nombre</h6></label>
            <input type="text" class="form-control" id="employee_search{{$x}}" value="{{ $integrante->nombre }}">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4"><h6>Posición</h6></label>
            <input type="text" class="form-control" id="employeedepto{{$x}}" value="{{ $integrante->posicion }}" readonly>
          </div>  
          @if($propuesta->identificador == 4)
            @if($x == 1)
            <div class="form-group col-md-1">
              <label for="inputPassword4"><h6>Rol</h6></label>
              <input type="text" class="form-control intmra" id="rol" name="rol" value="autor" readonly>
            </div>
          @else
            <div class="form-group col-md-1">
            <label for="inputPassword4"><h6>Rol</h6></label>
            <input type="text" class="form-control intmri" id="rol" name="rol" value="integrante" readonly>
          </div>
          @endif
          @endif
          @if($propuesta->identificador == 3)
            @if($x == 1)
            <div class="form-group col-md-1">
              <label for="inputPassword4"><h6>Rol</h6></label>
              <select type="text" class="form-control" id="rol" name="rol[]">
                <option value="0"></option>
                <option value="1">Autor</option>
                <option value="2">Implementador A</option>
                <option value="3">Implementador B</option>
              </select>
            </div>
            @endif
            @if($x == 2)
            <div class="form-group col-md-1">
              <label for="inputPassword4"><h6>Rol</h6></label>
              <select type="text" class="form-control" id="rol" name="rol[]">
                <option value="0"></option>
                <option value="2">Implementador A</option>
                <option value="3">Implementador B</option>
              </select>
            </div>
            @endif
            @if($x == 3)
            <div class="form-group col-md-1">
              <label for="inputPassword4"><h6>Rol</h6></label>
              <select type="text" class="form-control" id="rol" name="rol[]">
                <option value="0"></option>
                <option value="2">Implementador A</option>
                <option value="3">Implementador B</option>
              </select>
            </div>
            @endif
            @if($x > 3)
            <div class="form-group col-md-1">
              <label for="inputPassword4"><h6>Rol</h6></label>
              <select type="text" class="form-control" id="rol" name="rol[]">
                <option value="0"></option>
                <option value="3">Implementador B</option>
              </select>
            </div>
            @endif
          @endif
        </div>
      @endforeach
  <div class="row" id="observalid">
      <div class="form-group col-md-12">
          <label for="inputEmail4"><h6>Observaciones</h6></label>
          <textarea type="text" class="form-control" rows="4" maxlength="299" id="observacioness" name="observaciones"></textarea>
      </div> 
  </div>
  <br> 
  <div class="row" id="botones">
  <div class="container-contact100-form-btn">
    <button class="contact100-form-btn col-6" type="submit" id="aprobada" name="aprobada" value="0">
      <span>
        Aprobada
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </button>
    <button class="contact100-form-btn col-6" type="button" id="aprobada1" name="aprobada1">
      <span>
        Rechazada
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </button>
    <button class="contact100-form-btn col-6" type="submit" id="aprobadavalid" name="aprobada" value="1">
      <span>
        Rechazar
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </button>
  </div> 
</div>
</form> 
<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#employee_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search').val(ui.item.label); // display the selected text
           $('#employeeid').val(ui.item.value); // save selected id to input
           $('#employeedepto').val(ui.item.depto);
           return false;
        }
      });

      $( "#employee_search1" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search1').val(ui.item.label); // display the selected text
           $('#employeeid1').val(ui.item.value); // save selected id to input
           $('#employeedepto1').val(ui.item.depto);
           return false;
        }
      });

      $( "#employee_search2" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search2').val(ui.item.label); // display the selected text
           $('#employeeid2').val(ui.item.value); // save selected id to input
           $('#employeedepto2').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search3" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search3').val(ui.item.label); // display the selected text
           $('#employeeid3').val(ui.item.value); // save selected id to input
           $('#employeedepto3').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search4" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search4').val(ui.item.label); // display the selected text
           $('#employeeid4').val(ui.item.value); // save selected id to input
           $('#employeedepto4').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search5" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search5').val(ui.item.label); // display the selected text
           $('#employeeid5').val(ui.item.value); // save selected id to input
           $('#employeedepto5').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search6" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search6').val(ui.item.label); // display the selected text
           $('#employeeid6').val(ui.item.value); // save selected id to input
           $('#employeedepto6').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search7" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search7').val(ui.item.label); // display the selected text
           $('#employeeid7').val(ui.item.value); // save selected id to input
           $('#employeedepto7').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search8" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search8').val(ui.item.label); // display the selected text
           $('#employeeid8').val(ui.item.value); // save selected id to input
           $('#employeedepto8').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search9" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search9').val(ui.item.label); // display the selected text
           $('#employeeid9').val(ui.item.value); // save selected id to input
           $('#employeedepto9').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_search10" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('propuesta.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search10').val(ui.item.label); // display the selected text
           $('#employeeid10').val(ui.item.value); // save selected id to input
           $('#employeedepto10').val(ui.item.depto);
           return false;
        }
      });
    });
    </script>
@endsection