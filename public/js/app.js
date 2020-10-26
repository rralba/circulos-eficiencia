 $(document).ready(function(){
        $('.validar').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });

        $(function() { 
            $(".datepicker").datepicker({
              dateFormat: "yy-mm-dd",
              language: "es",
              autoclose: true,
              defaultDate: "+1w",
              changeMonth: true,
              numberOfMonths: 2
            }); 
        }); 

            //seccion de ocultar y mostrar contenido en formulario de propuestas

            $('#filanivel1').hide(); //ocultar mediante id
            $('#filanivel2').hide(); //ocultar mediante id
            $('#filaper1').hide(); //ocultar mediante id
            $('#filaper2').hide(); //ocultar mediante id

             $("#nivel1").on( "click", function() {
            $('#filanivel1').show(); //muestro mediante id
            $('#filanivel2').hide(); //muestro mediante id
            $('#filaper2').hide(); //muestro mediante id
            $('.requeridon1').prop("required", true);
            $('.requeridon2').prop("required", false);
            $('.requeridon1').val("");
            $('.intpy').val("");
            $('.intpyn').val("0");
        });
        $("#nivel2").on( "click", function() {
            $('#filanivel1').hide(); //oculto mediante id
            $('#filanivel2').show(); //muestro mediante id
            $('#filaper1').hide(); //muestro mediante id
            $('.requeridon2').prop("required", true);
            $('.requeridon1').prop("required", false);
            $('.requeridon2').val("");
            $('.intmr').val("");
            $('.intmrn').val("0");
            $('.intmra').val("Autor");
            $('.intmri').val("Integrante");
        });
        $("#nivel3").on( "click", function() {
            $('#filaper1').show(); //muestro mediante id
        });
        $("#nivel4").on( "click", function() {
            $('#filaper2').show(); //muestro mediante id
        });

        //seccion de ocultar y mostrar contenido en asignacion de propuestas

        $('#prop3sa').hide(); //ocultar mediante id
        $('#prop12sa').hide(); //ocultar mediante id
        $('#idjefe').hide(); //ocultar ficha del jefe que autoriza la mejora en el formato de impresion mediante id



         $("#currency-field").keyup(function () {
        var value = $(this).val();
        $("#beneficio_eco").val(value);
    });


  $("#inicio").on("change", function(){ 
    startDate = $(this).datepicker("getDate"); 
    $("#final").datepicker("option", "minDate", startDate); 
  }); 
  
  $("#final").on("change", function(){ 
    endDate = $(this).datepicker("getDate"); 
    $("#inicio").datepicker("option", "maxDate", endDate); 
  }); 
});

 

//funciones de conversion a mayusculas

$(function() {
       $('.tomayus').change(function() {
           this.value = this.value.toLocaleUpperCase();
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

     $("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

// Formato de moneda

document.getElementById("currency-field").onblur =function (){    
  this.value = parseFloat(this.value.replace(/,/g, ""))
    .toFixed(2)
    .toString()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
