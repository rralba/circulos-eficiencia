@extends('layouts.app')

@section('content')
{{--  <div class="container-fluid">
    <div class="table-responsive">
        <table id="grid-basic" data-toggle="bootgrid" class="table table-bordered table-condensed table-hover table-striped" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th data-column-id="id">Id</th>
                    <th data-column-id="proyecto">Proyecto</th>
                    <th data-column-id="registro">Registro</th>
                    <th data-column-id="nivel">Nivel</th>
                    <th data-column-id="departamento">Departamento</th>
                    <th data-column-id="asesor">Asesor</th>
                    <th data-column-id="comite">Comite</th>
                    <th data-column-id="metodologia">Metodologia</th>
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                </tr>
            </thead>
            <tbody>  
                @foreach($proye as $proyectos) 
                    <tr>
                        <td>{{ $proyectos->id }}</td>
                        <td>{{ $proyectos->proyecto }}</td> 
                        <td>{{ $proyectos->fecha_reg }}</td>
                        <td>{{ $proyectos->nivel }}</td>
                        <td>{{ $proyectos->depto }}</td>
                        <td>{{ $proyectos->asesor }}</td>
                        <td>{{ $proyectos->comite }}</td>
                        <td>{{ $proyectos->metodologia }}</td> 
                    </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>
<div id="addproy" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title">Agregar Proyecto</h5>
          <div class="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
         </div>
       </div>
       <form class="container" action="{{ route('proyects.store') }}" method = "post">
         {{ csrf_field() }}
          <div class="modal-body">
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Proyecto:</label>
                  <input type="text" class="form-control" id="proyecto" name="proyecto" maxlength="150" required>
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de Registro:</label>
                  <input type="date" class="form-control" id="fecha_reg" name="fecha_reg" required>
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nivel:</label>
                  <select class="form-control" id="nivel" name="nivel" required>
                      <option value="1">1</option>
                      <option value="2">2</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Departamento:</label>
                  <select class="form-control" id="depto" name="depto" required>
                    <option value="MANTENIMIENTO MECANICO GRUAS ELECTRICAS">MANTENIMIENTO MECANICO GRUAS ELECTRICAS</option>
                    <option value="PROTECCION INDUSTRIAL">PROTECCION INDUSTRIAL</option>
                    <option value="LADRILLO REFRACTARIO S1">LADRILLO REFRACTARIO S1</option>
                    <option value="COQUE Y SUB-PRODUCTOS S1">COQUE Y SUB-PRODUCTOS S1</option>
                    <option value="CORPORATIVO DE COMPRAS">CORPORATIVO DE COMPRAS</option>
                    <option value="LOGISTICA Y SERVICIO A CLIENTES">LOGISTICA Y SERVICIO A CLIENTES</option>
                    <option value="ALMACENES">ALMACENES</option>
                    <option value="ACERACION B.O.F Y COLADA CONTI S2">ACERACION B.O.F Y COLADA CONTI S2</option>
                    <option value="SUPTCIA. TRANSPORTE FERROVIARIO OPERAC">SUPTCIA. TRANSPORTE FERROVIARIO OPERAC</option>
                    <option value="LAMINADORA EN FRIO S1">LAMINADORA EN FRIO S1</option>
                    <option value="OPERACI�N LAMINADORA EN CALIENTE">OPERACI�N LAMINADORA EN CALIENTE</option>
                    <option value="PLANTAS DE FUERZA">PLANTAS DE FUERZA</option>
                    <option value="ALTO HORNO S2">ALTO HORNO S2</option>
                    <option value="SISTEMAS DE INFORMACION">SISTEMAS DE INFORMACION</option>
                    <option value="SISTEMAS DE CALIDAD">SISTEMAS DE CALIDAD</option>
                    <option value="MOLINO STECKEL">MOLINO STECKEL</option>
                    <option value="PERFILES PESADOS">PERFILES PESADOS</option>
                    <option value="ALTOS HORNOS S1">ALTOS HORNOS S1</option>
                    <option value="COMBUSTION E INSTRUMENTOS S1">COMBUSTION E INSTRUMENTOS S1</option>
                    <option value="SUPTCIA. ABASTECIMIENTO INTERIOR">SUPTCIA. ABASTECIMIENTO INTERIOR</option>
                    <option value="RELACIONES LABORALES SID. 1">RELACIONES LABORALES SID. 1</option>
                    <option value="LAMINADORA EN FRIO S2">LAMINADORA EN FRIO S2</option>
                    <option value="CORP OP INV Y DESARROLLO">CORP OP INV Y DESARROLLO</option>
                    <option value="REFRIGERACION">REFRIGERACION</option>
                    <option value="CORP OP CONTROL CAL ING M SERV TEC">CORP OP CONTROL CAL ING M SERV TEC</option>
                    <option value="PLANTA DE FUERZA 5 S2">PLANTA DE FUERZA 5 S2</option>
                    <option value="MANTENIEMIENTO CAMPO 2">MANTENIEMIENTO CAMPO 2</option>
                    <option value="ACERACION B.O.F. S1">ACERACION B.O.F. S1</option>
                    <option value="SUPTICA. PLANTAS DE OXIGENO S1 Y S2">SUPTICA. PLANTAS DE OXIGENO S1 Y S2</option>
                    <option value="ANTAIR">ANTAIR</option>
                    <option value="CORPORATIVO DE RECURSOS HUMANOS">CORPORATIVO DE RECURSOS HUMANOS</option>
                    <option value="ACERIAS">ACERIAS</option>
                    <option value="JURIDICO CORPORATIVO">JURIDICO CORPORATIVO</option>
                    <option value="CORP OPERACIONES">CORP OPERACIONES</option>
                    <option value="MANT. ELECTRICO CENTRAL S1">MANT. ELECTRICO CENTRAL S1</option>
                    <option value="TALLER CENTRAL DE MENTENIMIENTO">TALLER CENTRAL DE MENTENIMIENTO</option>
                    <option value="CORP OP INGENIERIA METALURGICA Y SERV T">CORP OP INGENIERIA METALURGICA Y SERV T</option>
                    <option value="MANTENIMIENTO PREVENTIVO Y PREDICTIVO">MANTENIMIENTO PREVENTIVO Y PREDICTIVO</option>
                    <option value="NORMALIZADO">NORMALIZADO</option>
                    <option value="RELACIONES LABORALES SID. 2">RELACIONES LABORALES SID. 2</option>
                    <option value="HIGIENE Y ECOLOGIA">HIGIENE Y ECOLOGIA</option>
                    <option value="SUPTCIA. MTTO LAM PLANOS EN FRIO y TASK">SUPTCIA. MTTO LAM PLANOS EN FRIO y TASK</option>
                    <option value="MANTENIMIENTO LAMINADORA EN CALIENTE">MANTENIMIENTO LAMINADORA EN CALIENTE</option>
                    <option value="GRAL ADJ DE ADMINISTRACION Y FINANZAS">GRAL ADJ DE ADMINISTRACION Y FINANZAS</option>
                    <option value="MANTENIMIENTO DE CAMPO">MANTENIMIENTO DE CAMPO</option>
                    <option value="CORP OP ING PROYECTOS">CORP OP ING PROYECTOS</option>
                    <option value="CAPACITACION">CAPACITACION</option>
                    <option value="TRATAMIENTO DE AGUA S1 y S2 Y AGUAS NEGR">TRATAMIENTO DE AGUA S1 y S2 Y AGUAS NEGR</option>
                    <option value="D. CORPORATIVO DE ABASTECIMIENTOS">D. CORPORATIVO DE ABASTECIMIENTOS</option>
                    <option value="COMUNICACION SOCIAL Y REL PUBLICAS">COMUNICACION SOCIAL Y REL PUBLICAS</option>
                    <option value="PLANTA PELETIZADORA">PLANTA PELETIZADORA</option>
                    <option value="MERCADOTECNIA">MERCADOTECNIA</option>
                    <option value="REL INSTITUCIONALES Y PRAC COMERCIALES">REL INSTITUCIONALES Y PRAC COMERCIALES</option>
                    <option value="TESORERIA">TESORERIA</option>
                    <option value="PLANTA COQUIZADORA S2">PLANTA COQUIZADORA S2</option>
                    <option value="PLANTA DE SINTERIZACION NO.2">PLANTA DE SINTERIZACION NO.2</option>
                    <option value="COMERCIALIZACION Y MERCADOTECNIA">COMERCIALIZACION Y MERCADOTECNIA</option>
                    <option value="CONTRALORIA">CONTRALORIA</option>
                    <option value="SEG INDUSTRIAL">SEG INDUSTRIAL</option>
                    <option value="CORPORATIVO DE PLANEACION Y CONTROL">CORPORATIVO DE PLANEACION Y CONTROL</option>
                    <option value="RECURSOS HUMANOS OFICINAS MEXICO">RECURSOS HUMANOS OFICINAS MEXICO</option>
                    <option value="CONSEJO">CONSEJO</option>
                    <option value="GRAL ADJ DE OPERACIONES">GRAL ADJ DE OPERACIONES</option>
                    <option value="VENTAS DISTRIBUCION">VENTAS DISTRIBUCION</option>
                    <option value="SUPERVISION DE OBRAS">SUPERVISION DE OBRAS</option>
                    <option value="CORP OP PLANEACION Y DESARROLLO">CORP OP PLANEACION Y DESARROLLO</option>
                    <option value="OPERACIONES INTERNACIONALES">OPERACIONES INTERNACIONALES</option>
                    <option value="ESCARFEO">ESCARFEO</option>
                    <option value="VICEPRESIDENCIA DEL CONSEJO">VICEPRESIDENCIA DEL CONSEJO</option>
                    <option value="ACERO">ACERO</option>
                    <option value="CORP. FINANZAS Y PLCN">CORP. FINANZAS Y PLCN</option>
                    <option value="SUPTCIA ALTO HORNO 5 Y PTA COQUIZADORA S">SUPTCIA ALTO HORNO 5 Y PTA COQUIZADORA S</option>
                    <option value="MEDICINA DEL TRABAJO">MEDICINA DEL TRABAJO</option>
                    <option value="VENTAS INDUSTRIALES">VENTAS INDUSTRIALES</option>
                    <option value="DIRECCI�N GRAL">DIRECCI�N GRAL</option>
                    <option value="PROYECTOES EXTERNOS">PROYECTOES EXTERNOS</option>
                    <option value="D. LAM EN CALIENTE Y NO PLANOS">D. LAM EN CALIENTE Y NO PLANOS</option>
                    <option value="PLAN ESTRATEGICA">PLAN ESTRATEGICA</option>
                    <option value="NEGOCIOS ESPECIALES COMEDOR INDUSTRIAL">NEGOCIOS ESPECIALES COMEDOR INDUSTRIAL</option>
                    <option value="CTRL INVERSIONES">CTRL INVERSIONES</option>
                    <option value="PROYECTO FENIX">PROYECTO FENIX</option>
                    <option value="RELACIONES INDUSTRIALES JURIDICO REL.">RELACIONES INDUSTRIALES JURIDICO REL.</option>
                    <option value="AUDITORIA INTERNA">AUDITORIA INTERNA</option>
                    <option value="SERV HAB ANCON ADMIN. RANCHOS">SERV HAB ANCON ADMIN. RANCHOS</option>
                    <option value="AUTOMATIZACION SISTEMAS Y CTRL">AUTOMATIZACION SISTEMAS Y CTRL</option>
                    <option value="MTTO MECANICO CENTRAL">MTTO MECANICO CENTRAL</option>
                    <option value="CONCURSOS Y CONTRATOS">CONCURSOS Y CONTRATOS</option>
                    <option value="ADMINISTRACION MINAS">ADMINISTRACION MINAS</option>
                    <option value="PLANEACION Y DESARROLLO">PLANEACION Y DESARROLLO</option>
                    <option value="D. LAM MANTENIMIENTOS Y SERVICIOS">D. LAM MANTENIMIENTOS Y SERVICIOS</option>
                    <option value="PERFILES LIGEROS">PERFILES LIGEROS</option>
                    <option value="LAM NO PLANOS">LAM NO PLANOS</option>
                    <option value="SERVICIOS DE APOYO S1">SERVICIOS DE APOYO S1</option>
                    <option value="SEG CAP MEDIO AMBIENTE Y CAL">SEG CAP MEDIO AMBIENTE Y CAL</option>
                    <option value="SD. LAM PLANOS EN FRIO">SD. LAM PLANOS EN FRIO</option>
                    <option value="ADMINISTRACION SAP RH">ADMINISTRACION SAP RH</option>
                    <option value="MIMOSA">MIMOSA</option>
                    <option value="S. MTTO Y SERVICIOS">S. MTTO Y SERVICIOS</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Asesor:</label>
                  <select class="form-control" id="asesor" name="asesor" required>
                      <option value="119314">Ing. Cinthya Rodriguez</option>
                      <option value="117192">Ing. Isabela San Miguel</option>
                      <option value="115672">Ing. Edith Ramos</option>
                      <option value="115664">Ing. Orlando Guerra</option>
                      <option value="115668">Ing. Sergio Camacho</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha Inicio:</label>
                  <input type="date" class="form-control" id="fecha_ini" name="fecha_ini" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Fecha Fin:</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Valor:</label>
                <select class="form-control" id="valor" name="valor" required>
                    <option value="Productividad">Productividad</option>
                    <option value="Calidad">Calidad</option>
                    <option value="Costos">Costos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Metodologia:</label>
                <select class="form-control" id="metodologia" name="metodologia" required>
                    <option value="DMAIC">DMAIC</option>
                    <option value="PDCA">PDCA</option>
                    <option value="QC-STORY 1">QC-STORY 1</option>
                    <option value="QC-STORY 2">QC-STORY 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Ahorro Anual Proyectado:</label>
                <input type="number" class="form-control" id="ahorro_anual_proy" name="ahorro_anual_proy" required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Metrico Primario:</label>
                <textarea class="form-control" id="metrico_primario" name="metrico_primario" rows="3" maxlength="150"></textarea>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Metrico Secundario:</label>
                <textarea class="form-control" id="metrico_secundario" name="metrico_secundario" rows="3" maxlength="150"></textarea>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Empresa:</label>
                <select class="form-control" id="empresa" name="empresa" required>
                    <option value="AHMSA 1">AHMSA 1</option>
                    <option value="AHMSA 2">AHMSA 2</option>
                    <option value="MICARE">MICARE</option>
                    <option value="MIMOSA">MIMOSA</option>
                    <option value="NASA">NASA</option>
                </select>
            </div>  
            <button class="btn btn-primary small" type="submit">Save</button>  
      </div>
   </form>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
 </div>
 <script>
        $( document ).ready(function(){
            $("#grid-basic").bootgrid({
              formatters: {
                "actions": function(column, row)
                {
                  return "<button onclick=\"window.open('{{ route('proyects.show', $proyectos->id) }}', '_self').style.display='block'\" data-id=\"" + row.id + "\" data-proyecto=\"" + row.proyecto + "\" data-registro=\"" + row.registro + "\" data-nivel=\"" + row.nivel + "\" data-departamento=\"" + row.departamento + "\" data-asesor=\"" + row.asesor + "\" data-comite=\"" + row.comite + "\" data-metodologia=\"" + row.metodologia + "\" class=\"btn btn-primary small edit\"><span class=\"fa fa-file-text-o\"></span></button> " +
                       "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-danger smalll delete\"><span class=\"fa fa-ban\"></span></button>";
                }
              }}).on("loaded.rs.jquery.bootgrid", function (){
                /* Executes after data is loaded and rendered */
                $(this).find(".edit").click(function (e) {
                    $('#id').val($(this).data("id"));
                    $('#proyecto').val($(this).data("proyecto")); 
                    $('#fecha_reg').val($(this).data("registro"));
                    $('#nivel').val($(this).data("nivel"));
                    $('#depto').val($(this).data("departamento"));
                    $('#asesor').val($(this).data("asesor"));
                    $('#comite').val($(this).data("comite"));
                    $('#metodologia').val($(this).data("metodologia"));
                  });
                $(this).find(".delete").click(function (e) {
                  $('#pinn').val($(this).data("pin")); 
                  $('#proye_id').val($(this).data("proyect_id"));
                  $('#del_id').val($(this).data("id"));
                  $('#asig').val($(this).data("rol"));
                  $('#delete_name').html($(this).data("id"));
                });
              });
            });
    </script>  --}}
@endsection 
