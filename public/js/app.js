 $( document ).ready(function(){
        $("#grid-basic").bootgrid({
          formatters: {
            "actions": function(column, row)
            {
              return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-registro=\"" + row.registro + "\" data-direccion=\"" + row.direccion + "\" data-subdireccion=\"" + row.subdireccion + "\" data-departamento=\"" + row.departamento + "\" data-seccion=\"" + row.seccion + "\" data-valor=\"" + row.valor + "\" data-desperdicio=\"" + row.desperdicio + "\" data-inicio=\"" + row.inicio + "\" data-final=\"" + row.final + "\" data-asesor=\"" + row.asesor + "\" data-amejorar=\"" + row.amejorar + "\" data-objetivo=\"" + row.objetivo + "\" data-solucion=\"" + row.solucion + "\" class=\"btn btn-outline-primary small edit\" data-toggle=\"modal\" data-target=\"#edit\"><span class=\"fa fa-pencil\"></span></button> " +
                   "<button onclick=\"document.getElementById('delete').style.display='block'\" data-pin=\"" + row.pin + "\" data-proyect_id=\"" + row.proyect_id + "\" data-id=\"" + row.id + "\" data-rol=\"" + row.rol + "\" class=\"btn btn-outline-danger smalll delete\"><span class=\"fa fa-trash\"></span></button>";
            }
          }}).on("loaded.rs.jquery.bootgrid", function (){
            /* Executes after data is loaded and rendered */
            $(this).find(".edit").click(function (e) {
              $($(this).attr("data-target")).modal("show");
              $('#id').val($(this).data("id"));
              $('#registro').val($(this).data("registro")); 
              $('#direccion').val($(this).data("direccion"));
              $('#subdireccion').val($(this).data("subdireccion"));
              $('#departamento').val($(this).data("departamento"));
              $('#seccion').val($(this).data("seccion"));
              $('#valor').val($(this).data("valor"));
              $('#desperdicio').val($(this).data("desperdicio"));
              $('#inicio').val($(this).data("inicio"));
              $('#final').val($(this).data("final"));
              $('#amejorar').val($(this).data("amejorar"));
              $('#objetivo').val($(this).data("objetivo"));
              $('#data-solucion').val($(this).data("data-solucion"));
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

    var options = {
      CONSEJO : ["","AREA ADMINISTRATIVA OFICINAS MEXICO"],
      'DIRECCION GENERAL' : ["","N/A"],
      'COMUNICACION SOCIAL Y REL PUBLICAS' : ["","N/A "],
      'GENERAL ADJUNTA DE OPERACIONES' : ["","N/A  "],
      ACERO : ["","N/A   ","ACERO"],
      'LAMINACION MANTENIMIENTOS Y SERVICIOS' : ["","MANTENIMIENTOS Y SERVICIOS","LAMINACION EN CALIENTE Y NO PLANOS","LAMINACION PLANOS EN FRIO"],
      'GRAL ADJ DE ADMINISTRACION Y FINANZAS' : ["","AUDITORIA INTERNA"],
      'COMERCIALIZACION Y MERCADOTECNIA' : ["","N/A    ","LOGISTICA Y SERVICIO A CLIENTES","REL INSTITUCIONALES Y PRAC COMERCIALES","SERVICIO TECNICO Y NUEVOS PRODUCTOS","VENTAS DISTRIBUCION","VENTAS INDUSTRIALES"],
      'CORPORATIVO DE ABASTECIMIENTOS' : ["","N/A     ","CORPORATIVO DE COMPRAS","CORPORATIVO DE PLANEACION Y CONTROL","SUPERVISION DE OBRAS"],
      'CONTRALORIA Y SISTEMAS' : [""," N/A","CONTRALORIA","SISTEMAS DE INFORMACION"],
      'CORPORATIVO DE RECURSOS HUMANOS' : ["","  N/A"],
      'CORPORATIVO DE RELACIONES INDUSTRIALES' : ["","   N/A","RELACIONES LABORALES"],
      'SEGURIDAD Y MEDIO AMBIENTE' : ["","    N/A","MEDIO AMBIENTE"],
      'JURIDICO CORPORATIVO' : ["","     N/A","JURIDICO CORPORATIVO","JURIDICO MINAS Y ENERGIA"],
      'VICEPRESIDENCIA DEL CONSEJO' : ["      N/A"],
      'PLANEACION FINANCIERA Y TESORERIA' : ["","PLANEACION ESTRATEGICA","TESORERIA"],
      'CORPORATIVO DE FINANZAS Y PLANEACION' : ["","FINANZAS MEXICO"],
      'CORPORATIVA DE OPERACIONES' : ["","CTRL DE CAL ING MET Y SERV TECNICO","INGENIERIA DE PROYECTOS","INVESTIGACION Y DESARROLLO","PLANEACION Y DESARROLLO","PROCESOS DE PRODUCCION"]
    }

    var option = {
      'AREA ADMINISTRATIVA OFICINAS MEXICO' : ["","N/A"],
      'N/A' : ["","NEGOCIOS ESPECIALES"],
      'N/A  ' : ["","N/A"],
      'N/A ' : ["","COMUNICACION SOCIAL","COMUNICACION SOCIAL OFICINAS MEXICO","RELACIONES PUBLICAS","BOLETOS Y RESERVACIONES DE AVION","AUDIOVISUAL Y DISEÑO"],
      'N/A   ' : ["","OPERACION ALTO HORNO 5","MANTENIMIENTO ALTO HORNO 5","CONTROL PROCESOS ALTO HORNO 5","PATIO MINERALES Y DESULF ALTO HORNO 5","OPERACION ALTO HORNO 6","MANTENIMIENTO ALTO HORNO 6","CONTROL PROCESOS ALTO HORNO 6","OPERACION PLANTA PELETIZADORA","MANTENIMIENTO PLANTA PELETIZADORA","CONTROL PROCESOS PLANTA PELETIZADORA","PLANTA DE SINTER","MANTENIMIENTO PLANTA SINTER","CONTROL DE PROCESO PLANTA DE SINTER","BATERIAS Y COQUE COQUIZADORA 2","MANTENIMIENTO COQUIZADORA 2","AREA CARBON COQUIZADORA 2","AREA SUBPRODUCTOS COQUIZADORA 2","CONTROL DE PROCESO COQUIZADORA 2","BATERIAS COQUIZADORA SID 1","MANTENIMIENTO COQUIZADORA SID 1","REHABILITACION COQUIZADORA SID 1"],
      ACERO : ["","ACERACION BOF 1","ESCARFEO","OPERACION ACERIA ELECTRICA","MANTENIMIENTO ACERIA ELECTRICA","OPERACION BOF Y COLADA CONTINUA","MANTENIMIENTO BOF Y CC","MOLDES Y SEGMENTOS","LADRILLO REFRACTARIO"],
      'MANTENIMIENTOS Y SERVICIOS' : ["","MANTENIMIENTO DE CAMPO","MANTENIMIENTO MECANICO GRUAS ELECTRICAS","MANTENIMIENTO PREVENTIVO Y PREDICTIVO","TALLER CENTRAL DE MANTENIMIENTO","AUTOMATIZACION SISTEMAS Y CONTROL","INSTRUMENTACION Y SISTEMAS DE PESAJE","MANTENIMIENTO CENTRAL ELECTRICO","RED ALTA TENSION","PLANTAS DE FUERZA","SERVICIOS PLANTA","TRANSPORTE FERROVIARIO","TRATAMIENTO Y SUMINISTRO DE AGUA"],
      'LAMINACION EN CALIENTE Y NO PLANOS' : ["","OPERACION LAMINACION EN CALIENTE","MANTENIMIENTO LAMINACION EN CALIENTE","MOLINO STECKEL","NORMALIZADO","LAMINACION NO PLANOS"],
      'LAMINACION PLANOS EN FRIO' : ["","MANTENIMIENTO LAMINACION PLANOS EN FRIO","OP LAM EN FRIO SID 1","OP LAM EN FRIO SID 2"],
      'AUDITORIA INTERNA' : ["","AUDITORIA AHMSA","AUDITORIA MINAS Y FILIALES"],
      'N/A    ' : ["","MERCADOTECNIA","PRODUCTOS LAMINADOS","ADMINISTRATIVO","VENTAS EXPORTACION"],
      'LOGISTICA Y SERVICIO A CLIENTES' : ["","INSPECCION Y EMBARQUE","PLANEACION DE VENTAS","PROGRAMACION","SERVICIO A CLIENTES","SERVICIO CAMIONERO Y MAQUILAS"],
      'REL INSTITUCIONALES Y PRAC COMERCIALES' : ["","N/A"],
      'SERVICIO TECNICO Y NUEVOS PRODUCTOS' : ["","N/A"],
      'VENTAS DISTRIBUCION' : ["","VENTAS DISTRIBUIDORES NORTE","VENTAS DISTRIBUIDORES SUR","VENTAS INVENTARIOS","VENTAS PROCESADORES NORESTE","VENTAS PROCESADORES NORTE"],
      'VENTAS INDUSTRIALES' : ["","VENTAS INDUSTRIALES DESARROLLO","VENTAS INDUSTRIALES PROCESO","VENTAS INDUSTRIALES TECNICOS"],
      'N/A     ' : ["","ANTAIR","PROYECTOS EXTERNOS","SERVICIOS GENERALES MEXICO","ADMON DE INVENTARIOS MATERIAS PRIMAS","ALMACEN EQUIPOS Y MATERIALES","BIENES INMUEBLES Y APOYOS EXTERNOS","OPERACION ALMACEN MATERIAS PRIMAS","SISTEMAS Y ADMINISTRACION"],
      'CORPORATIVO DE COMPRAS' : ["","COMPRAS MATERIALES EQUIPOS Y REFACCIONES","COMPRAS SERVICIOS","COMPRAS TALLERES","CONCURSOS Y CONTRATOS","DESARROLLO DE PROVEEDORES"],
      'CORPORATIVO DE PLANEACION Y CONTROL' : ["","COMPRAS CHATARRA","COMPRAS ENERGETICOS","COMPRAS MATERIAS PRIMAS","SENIOR DE ABASTECIMIENTOS SAP","TRANSPORTES Y LOGISTICA"],
      'SUPERVISION DE OBRAS' : ["","CONSTRUCCIONES GENERALES","OBRA CIVIL","PROYECTOS PROCESOS PRIMARIOS"],
      ' N/A' : ["","INFO FINANCIERA Y ATN INVERSIONISTAS"],
      'CONTRALORIA' : ["","CONTABILIDAD","CONTROL INTERNO","CONTROL PLANTA","IMPUESTOS Y DERECHOS","REVISION Y CONTROL PAGOS","SENIOR DE FINANZAS SAP","FACTURACION"],
      'SISTEMAS DE INFORMACION' : ["","CONECTIVIDAD Y SEGURIDAD","INFORMATICA MEXICO","MODULO BASIS/SAP","SISTEMAS","SOPORTE TECNICO","TECNOLOGIA"],
       '  N/A' : ["","ADMINISTRACION DE PERSONAL DE CONFIANZA","ADMINISTRACION SAP RH","ADMINISTRATIVO","CAPACITACION","COMPENSACION EJECUTIVA","CONTRATACION DE SERVICIOS","ORGANIZACION","PLANEACION Y DESARROLLO","PROTECCION INDUSTRIAL","RECURSOS HUMANOS OFICINAS MEXICO","SUELDOS Y PRESTACIONES"],
       '   N/A' : ["","ADMINISTRACION SAP RI","ASUNTOS JURIDICOS LABORALES"],
       'RELACIONES LABORALES' : ["","PROMOCIONES DEPORTIVAS Y CULTURALES","RELACIONES LABORALES SIDERURGICA 1","RELACIONES LABORALES SIDERURGICA 2"],
       '    N/A' : ["","MEDICINA DEL TRABAJO","SEGURIDAD INDUSTRIAL","SISTEMAS DE CALIDAD Y AMBIENTAL"],
       'MEDIO AMBIENTE' : ["","HIGIENE Y ECOLOGIA"],
       '     N/A' : ["","JURIDICO CONTENCIOSO"],
       'JURIDICO CORPORATIVO' : ["","ADMINISTRATIVO","JURIDICO FISCAL"],
       'JURIDICO MINAS Y ENERGIA' : ["","N/A"],
       '      N/A' : ["","N/A"],
       'PLANEACION ESTRATEGICA' : ["","CONTROL DE INVERSIONES","PLANEACION FINANCIERA"],
       'TESORERIA' : ["","CORPORATIVO DE FINANCIAMIENTOS","CREDITO Y COBRANZAS","FIN AL COMERCIO EXT Y DIVISAS OFIC MEX","TESORERIA"],
       'FINANZAS MEXICO' : ["","N/A"],
       'CTRL DE CAL ING MET Y SERV TECNICO' : ["","CONTROL DE CALIDAD ACERIAS","CONTROL DE CALIDAD LAMINADOS EN FRIO","CTRL DE CAL LAM EN CALIENTE Y NO PLANOS","ING METALURGICA CALIENTE Y FRIO","LABORATORIOS PRUEBAS FISICA Y MAT PRIMAS","SERVICIO TECNICO"],
       'INGENIERIA DE PROYECTOS' : ["","ADMINISTRACION Y CONTROL PROYECTOS","PROYECTOS ARRABIO Y ACERO","PROYECTOS LAMINACION"],
       'INVESTIGACION Y DESARROLLO' : ["","INV Y DESARROLLO ACERIAS Y CC","INV Y DESARROLLO AREA PROCESOS PRIMARIOS","INV Y DESARROLLO LAMINACION","LABORATORIO DE INVESTIGACION","POT GRADE"],
       'PLANEACION Y DESARROLLO' : ["","DESARROLLO DE PROCESOS","INGENIERIA INDUSTRIAL","PLANEACION PLANTAS","SISTEMAS CAD","TECNOLOGIA"],
       'PROCESOS DE PRODUCCION' : ["","N/A"]
    }

    $(function(){
      var fillSecondary = (function(){
        var selected = $('#direccion').val();
        $('#subdireccion').empty()
        options[selected].forEach(function(element,index){
          $('#subdireccion').append('<option value="'+element+'">'+element+'</option>');
        });
      });
      $('#direccion').change(fillSecondary);
      fillSecondary();
    });

    $(function(){
      var fillSecondar = (function(){
        var selecte = $('#subdireccion').val();
        $('#departamento').empty()
        option[selecte].forEach(function(element,index){
          $('#departamento').append('<option value="'+element+'">'+element+'</option>');
        });
      });
      $('#subdireccion').change(fillSecondar);
      fillSecondar();
    });