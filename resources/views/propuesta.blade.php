@extends('layouts.appm')

@section('content')
    <span class="contact100-form-title">
      <h1 class="text-center">Registro de Propuesta de Círculo de Eficiencia</h1>
      <hr>
    </span> 
      <div>
        <br>
          <form id="mr" class="mr" action="{{ route('propuesta.store') }}" method = "POST">
            {{ csrf_field() }}
              <div class="row">
                <br>
              <div class="input-group col-md-4">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="identificador" id="nivel1" value="1" required>
                  <label class="form-check-label" for="inlineRadio1"><h4 class="p-0 m-0">Proyecto de Innovación o Mejora</h4></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="identificador" id="nivel2" value="2" required>
                  <label class="form-check-label" for="inlineRadio2"><h4 class="p-0 m-0">Mejora Rápida</h4></label>
                </div>
               </div> 
              <div class="col-md-6">
               </div> 
                <div class="col-md-2">
                  <label for="registro"><h4 class="p-0 m-0">Registro:</h4></label>
                  <input type="text" class="form-control" id="registro" name="registro" style="width: 100px;" value="{{ date("Y-m-d") }}" readonly>
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="row mb-4"> 
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Dirección:</h4></label>
                  <select class="form-control" id="direccion" name="direccion" required>
                      <option value=""></option>
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
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Subdirección:</h4></label>
                  <select class="form-control" id="subdireccion" name="subdireccion" required>
                  </select>
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Departamento:</h4></label>
                  <select class="form-control" id="departamento" name="departamento" required>
                  </select>
                </div>  
              </div>
              <br>
              <div class="row mt-4 mb-4">
                <br>
                <div class="col-md-8"></div>
                <div class="col-md-4">
                  <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><h4 class="p-0 m-0">Contacto:</h4></span>
                    </div>
                    <input type="text" class="form-control contenido" id="contacto" name="contacto" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="99" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>
                  <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><h4 class="p-0 m-0">Teléfono:</h4></span>
                    </div>
                    <input type="text" class="form-control validar contenido" id="clave" name="clave" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="10" required>
                  </div>
                  <div class="input-group input-group-sm mb-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm"><h4 class="p-0 m-0">Extensión:</h4></span>
                    </div>
                    <input type="text" class="form-control validar contenido" id="extension" name="extension" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="5" required>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <h3 class="text-center mt-4 mb-2">¿Quién Autoriza el Proyecto?</h3>
              <br>
              <div class="row mb-4">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label" style="display: none;"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control" id="employeeid" name="id_autoriza" required="required" style="display: none;">
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control" id="employee_search" name="nom_jefe" placeholder="Escribe el nombre del Superintendente que autoriza el proyecto" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control" id="employeedepto" name="puesto_jefe" readonly>
                </div>  
              </div>
              <br>
              <br>
              <h3 class="text-center mt-4 mb-2">Preguntas de inicio de proyecto</h3>
              <br>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <label for="from" class="col-form-label"><h4 class="p-0 m-0">Fecha Inicio:</h4></label>
                  <input type="text" class="form-control datepicker" id="inicio" name="inicio" style="width: 100px" required>
                </div>
                <div class="col-md-2">  
                  <label for="to" class="col-form-label"><h4 class="p-0 m-0">Fecha Final:</h4></label>
                  <input type="text" class="form-control datepicker" id="final" name="final" style="width: 100px" required>
                </div>
              </div>
              <br>
              <br>
              <div id="filanivel1">
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre del Proyecto</h4></label>
                    <input type="text" class="form-control requeridon1" id="proyecto" name="proyecto" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Porqué consideras que el proyecto es creativo y/o innovador?</h4></label>
                    <textarea class="form-control requeridon1" rows="4" id="creativo" name="creativo" maxlength="499" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Qué áreas deben participar en el desarrollo del proyecto?</h4></label>
                    <input type="text" class="form-control requeridon1" id="areas_part" name="areas_part" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Qué conocimientos, especialidades y/o habilidades se requieren de los integrantes?</h4></label>
                    <input type="text" class="form-control requeridon1" id="skills_integ" name="skills_integ" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Cuál es el conocimiento crítico requerido para el desarrollo del proyecto?</h4></label>
                    <input type="text" class="form-control requeridon1" id="conocimiento_critico" name="conocimiento_critico" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Cómo participa el personal sindicalizado?</h4></label>
                    <input type="text" class="form-control requeridon1" id="sindicalizados" name="sindicalizados" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Cuáles son las principales actividades a realizar por el equipo?</h4></label>
                    <input type="text" class="form-control requeridon1" id="principales_act" name="principales_act" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-10"></div>
                  <div class="col-md-2">
                    <label for="recipient-name" class="col-form-label"><h5 class="p-0 m-0">Beneficio Económico</h5></label>
                    <input type="text" class="form-control requeridon1 validar" id="currency-field" name="currency-field" placeholder="$1,000,000.00" maxlength="10">
                    <input type="hidden" class="form-control requeridon1 validar" id="beneficio_eco" name="beneficio_eco" value="#currency-field">
                  </div>  
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="integrantes" id="nivel3" value="2">
                      <label class="form-check-label" for="inlineRadio1"><h4 class="p-0 m-0">¿Deseas agregar integrantes?</h4></label>
                    </div>
                  </div> 
                </div>
              </div>
              <br>
              <div id="filaper1">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp1" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp1" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop1" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp2" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp2" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop2" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp3" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp3" onkeyup="javascript:this.value=this.value.toUpperCase();" name=""placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop3" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp4" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp4" onkeyup="javascript:this.value=this.value.toUpperCase();" name=""placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop4" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp5" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp5" onkeyup="javascript:this.value=this.value.toUpperCase();" name=""placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop5" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp6" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp6" onkeyup="javascript:this.value=this.value.toUpperCase();" name=""placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop6" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp7" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp7" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop7" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp8" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp8" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop8" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp9" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp9" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop9" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intpy" id="employeeidp10" name="integp[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intpy" id="employee_searchp10" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intpy" id="employeedeptop10" name="" readonly>
                </div>  
              </div>
              </div>  
              <br>
              <div id="filanivel2">
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">¿Qué se debe mejorar?</h4></label>
                  <textarea class="form-control requeridon2" id="mejorar" name="mejorar" rows="4" maxlength="249" placeholder="Escribe una breve descripcion del problema" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Objetivo:</h4></label>
                  <textarea class="form-control requeridon2" id="objetivo" name="objetivo" rows="4" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Solución:</h4></label>
                  <textarea class="form-control requeridon2" id="solucion" name="solucion" rows="4" maxlength="249" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div> 
              </div>
              <br>
              <br>
             {{--  <h4>¿Deseas adjuntar imagenes?</h4>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="savejpg" name="savejpg" lang="es">
                    <label class="custom-file-label" for="customFileLang"><h4 class="p-0 m-0">Seleccionar Archivo</h4></label>
                </div>
                </div>
              </div> --}}
              <br>
               <div class="row">
                  <div class="col-md-4">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="integrantes" id="nivel4" value="3">
                      <label class="form-check-label" for="inlineRadio1"><h4 class="p-0 m-0"><h4 class="p-0 m-0">¿Deseas agregar integrantes?</h4></label>
                    </div>
                  </div> 
                </div>
              </div>
              <br>
              <div id="filaper2">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intmr" id="employeeidm1" name="integm[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intmr" id="employee_searchm1" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intmr" id="employeedeptom1" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intmr" id="employeeidm2" name="integm[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intmr" id="employee_searchm2" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intmr" id="employeedeptom2" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intmr" id="employeeidm3" name="integm[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intmr" id="employee_searchm3" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intmr" id="employeedeptom3" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intmr" id="employeeidm4" name="integm[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intmr" id="employee_searchm4" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intmr" id="employeedeptom4" name="" readonly>
                </div>  
              </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Ficha</h4></label>
                  <input type="text" class="form-control intmr" id="employeeidm5" name="integm[]" value="0" readonly>
                </div>  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Nombre</h4></label>
                  <input type="text" class="form-control intmr" id="employee_searchm5" onkeyup="javascript:this.value=this.value.toUpperCase();" name="" placeholder="Escribe el nombre del empleado y selecciona una de las opciones">
                </div>
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label"><h4 class="p-0 m-0">Posición</h4></label>
                  <input type="text" class="form-control intmr" id="employeedeptom5" name="" readonly>
                </div>  
              </div>
              <br>
              </div>
             <br>
            <div class="container-contact100-form-btn">
              <button class="contact100-form-btn" type="submit">
                <span>
                  Guardar
                  <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                </span>
              </button>
            </div>
          </form>
          <br>
           <!-- Script -->
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

      $( "#employee_searchm1" ).autocomplete({
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
           $('#employee_searchm1').val(ui.item.label); // display the selected text
           $('#employeeidm1').val(ui.item.value); // save selected id to input
           $('#employeedeptom1').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchm2" ).autocomplete({
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
           $('#employee_searchm2').val(ui.item.label); // display the selected text
           $('#employeeidm2').val(ui.item.value); // save selected id to input
           $('#employeedeptom2').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchm3" ).autocomplete({
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
           $('#employee_searchm3').val(ui.item.label); // display the selected text
           $('#employeeidm3').val(ui.item.value); // save selected id to input
           $('#employeedeptom3').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchm4" ).autocomplete({
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
           $('#employee_searchm4').val(ui.item.label); // display the selected text
           $('#employeeidm4').val(ui.item.value); // save selected id to input
           $('#employeedeptom4').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchm5" ).autocomplete({
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
           $('#employee_searchm5').val(ui.item.label); // display the selected text
           $('#employeeidm5').val(ui.item.value); // save selected id to input
           $('#employeedeptom5').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp1" ).autocomplete({
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
           $('#employee_searchp1').val(ui.item.label); // display the selected text
           $('#employeeidp1').val(ui.item.value); // save selected id to input
           $('#employeedeptop1').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp2" ).autocomplete({
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
           $('#employee_searchp2').val(ui.item.label); // display the selected text
           $('#employeeidp2').val(ui.item.value); // save selected id to input
           $('#employeedeptop2').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp3" ).autocomplete({
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
           $('#employee_searchp3').val(ui.item.label); // display the selected text
           $('#employeeidp3').val(ui.item.value); // save selected id to input
           $('#employeedeptop3').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp4" ).autocomplete({
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
           $('#employee_searchp4').val(ui.item.label); // display the selected text
           $('#employeeidp4').val(ui.item.value); // save selected id to input
           $('#employeedeptop4').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp5" ).autocomplete({
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
           $('#employee_searchp5').val(ui.item.label); // display the selected text
           $('#employeeidp5').val(ui.item.value); // save selected id to input
           $('#employeedeptop5').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp6" ).autocomplete({
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
           $('#employee_searchp6').val(ui.item.label); // display the selected text
           $('#employeeidp6').val(ui.item.value); // save selected id to input
           $('#employeedeptop6').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp7" ).autocomplete({
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
           $('#employee_searchp7').val(ui.item.label); // display the selected text
           $('#employeeidp7').val(ui.item.value); // save selected id to input
           $('#employeedeptop7').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp8" ).autocomplete({
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
           $('#employee_searchp8').val(ui.item.label); // display the selected text
           $('#employeeidp8').val(ui.item.value); // save selected id to input
           $('#employeedeptop8').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp9" ).autocomplete({
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
           $('#employee_searchp9').val(ui.item.label); // display the selected text
           $('#employeeidp9').val(ui.item.value); // save selected id to input
           $('#employeedeptop9').val(ui.item.depto);
           return false;
        }
      });
      $( "#employee_searchp10" ).autocomplete({
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
           $('#employee_searchp10').val(ui.item.label); // display the selected text
           $('#employeeidp10').val(ui.item.value); // save selected id to input
           $('#employeedeptop10').val(ui.item.depto);
           return false;
        }
      });

    });
    </script>
      </div>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection