@extends('layouts.appm')

@section('content')
@section('submenu')
    <h1 class="text-center">Circulos de Eficiencia Nivel 3</h1>
@endsection
<div class="container-fluid">   
    <button type="button" class="btn btn-outline-primary btn-lg float-right fa fa-user-plus mb-3" data-toggle="modal" data-target="#addmr"></button>
    <div class="table-responsive">
            <table id="grid-basic" class="w3-table-all w3-card-4">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="des">ID</th>
                        <th data-column-id="registro">REGISTRO</th>
                        <th data-column-id="direccion">DIRECCION</th>
                        <th data-column-id="subdireccion" data-visible="false">SUBDIRECCION</th>
                        <th data-column-id="departamento">DEPARTAMENTO</th>
                        <th data-column-id="seccion">SECCION</th>
                        <th data-column-id="valor" data-visible="false">VALOR</th>
                        <th data-column-id="desperdicio" data-visible="false">DESPERDICIO</th>
                        <th data-column-id="inicio">INICIO</th>
                        <th data-column-id="final">FINAL</th>
                        <th data-column-id="asesor">ASESOR</th>
                        <th data-column-id="amejorar" data-visible="false">A MEJORAR</th>
                        <th data-column-id="objetivo">OBJETIVO</th>
                        <th data-column-id="solucion" data-visible="false">SOLUCION</th>
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>  
                        @foreach($mejoras as $mejoras) 
                            <tr>
                                <td>{{ $mejoras->id }}</td>
                                <td>{{ $mejoras->registro }}</td> 
                                <td>{{ $mejoras->direccion }}</td>
                                <td>{{ $mejoras->subdireccion }}</td>
                                <td>{{ $mejoras->departamento }}</td>
                                <td>{{ $mejoras->seccion }}</td>
                                <td>{{ $mejoras->valor }}</td>
                                <td>{{ $mejoras->desperdicio }}</td>
                                <td>{{ $mejoras->inicio }}</td>
                                <td>{{ $mejoras->final }}</td>
                                <td>{{ $mejoras->asesor }}</td>
                                <td>{{ $mejoras->amejorar }}</td> 
                                <td>{{ $mejoras->objetivo }}</td>
                                <td>{{ $mejoras->solucion }}</td> 
                            </tr>
                        @endforeach   
                </tbody>
            </table>
    </div>
</div>
<div class="modal fade" id="addmr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alta de Mejora Rapida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('mr.store') }}" method = "POST">
            {{ csrf_field() }}
              <div class="row">  
                <div class="col-md-4">
                  <label for="registro">Registro:</label>
                  <input type="date" class="form-control" id="registro" name="registro" required>
                </div>
                <div class="col-md-8">  
                  <label for="recipient-name" class="col-form-label">Direccion:</label>
                  <select class="form-control" id="direccion" name="direccion" required>
                      <option value="CONSEJO">CONSEJO</option>
                      <option value="DIRECCION GENERAL">DIRECCION GENERAL</option>
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
                  <select class="form-control" id="subdireccion" name="subdireccion">
                  </select>
                </div>
                <div class="col-md-6">  
                  <label for="recipient-name" class="col-form-label">Departamento:</label>
                  <select class="form-control" id="departamento" name="departamento" required>
                  </select>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label">Seccion:</label>
                  <select class="form-control" id="seccion" name="seccion" required>
                    <option value="mantenimiento">MANTENIMIENTO</option>
                    option
                  </select>
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Valor:</label>
                  <select class="form-control" id="valor" name="valor" required>
                    <option value="calidad">CALIDAD</option>
                    <option value="costos">COSTOS</option>
                    <option value="cuidado al medio ambiente">CUIDADO AL MEDIO AMBIENTE</option>
                    <option value="metodo de trabajo">METODO DE TRABAJO</option>
                    <option value="productividad">PRODUCTIVIDAD</option>
                    <option value="productividad y costos">PRODUCTIVIDAD Y COSTOS</option>
                    <option value="productividad y calidad">PRODUCTIVIDAD Y CALIDAD</option>
                    <option value="seguridad">SEGURIDAD</option>
                    <option value="productividad, costos y calidad">PRODUCTIVIDAD, COSTOS Y CALIDAD</option>
                    option
                  </select>
                </div>  
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Desperdicio:</label>
                  <select class="form-control" id="desperdicio" name="desperdicio" required>
                    <option value="ahorro de energia">AHORRO DE ENERGIA</option>
                    <option value="ahorro de suministros">AHORRO DE SUMINISTROS</option>
                    <option value="consumo de refacciones">CONSUMO DE REFACCIONES</option>
                    <option value="costos">COSTOS</option>
                    <option value="defectos">DEFECTOS</option>
                    <option value="demoras">DEMORAS</option>
                    <option value="desperdicio de agua">DESPERDICIO DE AGUA</option>
                    <option value="espera">ESPERA</option>
                    <option value="inventario">INVENTARIO</option>
                    <option value="medio ambiente">MEDIO AMBIENTE</option>
                    <option value="metodo de trabajo">METODO DE TRABAJO</option>
                    <option value="movimiento">MOVIMIENTO</option>
                    <option value="sobreprocesamiento">SOBREPROCESAMIENTO</option>
                    <option value="sobreproduccion">SOBREPRODUCCION</option>
                    <option value="talentos">TALENTOS</option>
                    <option value="transportacion">TRANSPORTACION</option>
                  </select>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label">Inicio:</label>
                  <input type="date" class="form-control" id="inicio" name="inicio">
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Final:</label>
                  <input type="date" class="form-control" id="final" name="final" required>
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Asesor:</label>
                  <select class="form-control" id="asesor" name="asesor" required>
                    <option value="Ing. Adriana Reyes">Ing. Adriana Reyes</option>
                    <option value="Ing. Isabela San Miguel">Ing. Isabela San Miguel</option>
                    <option value="Ing. Edith ramos">Ing. Edith ramos</option>
                    <option value="Ing. Orlando Guerra">Ing. Orlando Guerra</option>
                    <option value="Ing. Sergio Camacho">Ing. Sergio Camacho</option>
                    <option value="Ing. Patricia Alvarez">Ing. Patricia Alvarez</option>
                    <option value="Ing. Oscar Rios">Ing. Oscar Rios</option>
                    <option value="Ing. Gerardo Rodriguez">Ing. Gerardo Rodriguez</option>
                    option
                  </select>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">A Mejorar:</label>
                  <textarea class="form-control" id="amejorar" name="amejorar" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">Objetivo:</label>
                  <textarea class="form-control" id="objetivo" name="objetivo" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
              <div class="row">  
                <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">Solucion:</label>
                  <textarea class="form-control" id="solucion" name="solucion" rows="4" maxlength="249"></textarea>
                </div> 
              </div>
            <br>
            <button class="btn btn-primary small" type="submit">Guardar</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Mejora Rapida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('mr.store') }}" method = "POST">
            {{ csrf_field() }}
              <input type="hidden" id="id" name="">
              <div class="row">  
                <div class="col-md-4">
                  <label for="registro">Registro:</label>
                  <input type="date" class="form-control" id="registro" name="" required>
                </div>
                <div class="col-md-8">  
                  <label for="recipient-name" class="col-form-label">Direccion:</label>
                  <select class="form-control" id="direccion" name="" required>
                      <option value="CONSEJO">CONSEJO</option>
                      <option value="DIRECCION GENERAL">DIRECCION GENERAL</option>
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
                  <select class="form-control" id="departamento" name="" required>
                  </select>
                </div>  
              </div>
              <div class="row">  
                <div class="col-md-4">
                  <label for="recipient-name" class="col-form-label">Seccion:</label>
                  <select class="form-control" id="seccion" name="" required>
                    <option value="mantenimiento">MANTENIMIENTO</option>
                    option
                  </select>
                </div>
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Valor:</label>
                  <select class="form-control" id="valor" name="" required>
                    <option value="calidad">CALIDAD</option>
                    <option value="costos">COSTOS</option>
                    <option value="cuidado al medio ambiente">CUIDADO AL MEDIO AMBIENTE</option>
                    <option value="metodo de trabajo">METODO DE TRABAJO</option>
                    <option value="productividad">PRODUCTIVIDAD</option>
                    <option value="productividad y costos">PRODUCTIVIDAD Y COSTOS</option>
                    <option value="productividad y calidad">PRODUCTIVIDAD Y CALIDAD</option>
                    <option value="seguridad">SEGURIDAD</option>
                    <option value="productividad, costos y calidad">PRODUCTIVIDAD, COSTOS Y CALIDAD</option>
                    option
                  </select>
                </div>  
                <div class="col-md-4">  
                  <label for="recipient-name" class="col-form-label">Desperdicio:</label>
                  <select class="form-control" id="desperdicio" name="" required>
                    <option value="ahorro de energia">AHORRO DE ENERGIA</option>
                    <option value="ahorro de suministros">AHORRO DE SUMINISTROS</option>
                    <option value="consumo de refacciones">CONSUMO DE REFACCIONES</option>
                    <option value="costos">COSTOS</option>
                    <option value="defectos">DEFECTOS</option>
                    <option value="demoras">DEMORAS</option>
                    <option value="desperdicio de agua">DESPERDICIO DE AGUA</option>
                    <option value="espera">ESPERA</option>
                    <option value="inventario">INVENTARIO</option>
                    <option value="medio ambiente">MEDIO AMBIENTE</option>
                    <option value="metodo de trabajo">METODO DE TRABAJO</option>
                    <option value="movimiento">MOVIMIENTO</option>
                    <option value="sobreprocesamiento">SOBREPROCESAMIENTO</option>
                    <option value="sobreproduccion">SOBREPRODUCCION</option>
                    <option value="talentos">TALENTOS</option>
                    <option value="transportacion">TRANSPORTACION</option>
                  </select>
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
                  <select class="form-control" id="asesor" name="" required>
                    <option value="Ing. Adriana Reyes">Ing. Adriana Reyes</option>
                    <option value="Ing. Isabela San Miguel">Ing. Isabela San Miguel</option>
                    <option value="Ing. Edith ramos">Ing. Edith ramos</option>
                    <option value="Ing. Orlando Guerra">Ing. Orlando Guerra</option>
                    <option value="Ing. Sergio Camacho">Ing. Sergio Camacho</option>
                    <option value="Ing. Patricia Alvarez">Ing. Patricia Alvarez</option>
                    <option value="Ing. Oscar Rios">Ing. Oscar Rios</option>
                    <option value="Ing. Gerardo Rodriguez">Ing. Gerardo Rodriguez</option>
                    option
                  </select>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection