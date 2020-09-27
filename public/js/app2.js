 $(document).ready(function(){
        //validacio 
        $('#aprobadavalid').hide();
        $('#observalid').hide();
        $('#observacioness').prop("required", false);
        $('#valor').prop("required", true);
            $('#desperdicio').prop("required", true);
        $("#aprobada1").on( "click", function() {
            $('#aprobada1').hide();
            $('#aprobadavalid').show();
            $('#observalid').show();
            $('#observacioness').prop("required", true);
            $('#valorvalid').hide();
            $('#desperdiciovalid').hide();
            $('#valor').prop("required", false);
            $('#desperdicio').prop("required", false);
        });

        var results = document.getElementById("var").value;
        if (results == "Defectos") { 
                document.getElementById("Defectos").checked = true;
            }
        if (results == "Transportacion") { 
                document.getElementById("Transportacion").checked = true;
            }
        if (results == "Sobreprocesamiento") { 
                document.getElementById("Sobreprocesamiento").checked = true;
            }
        if (results == "Movimiento") { 
                document.getElementById("Movimiento").checked = true;
            }
        if (results == "Espera") { 
                document.getElementById("Espera").checked = true;
            }
        if (results == "Inventario") { 
                document.getElementById("Inventario").checked = true;
            }
        if (results == "Sobreproduccion") { 
                document.getElementById("Sobreproduccion").checked = true;
            }
        if (results == "Talentos") { 
                document.getElementById("Talentos").checked = true;
            }
        if (results == "Metodo de Trabajo") { 
                document.getElementById("Metodo de Trabajo").checked = true;
            }
        if (results == "Productividad") { 
                document.getElementById("Productividad").checked = true;
            }
        if (results == "Disponibilidad de Equipos") { 
                document.getElementById("Disponibilidad de Equipos").checked = true;
            }
        if (results == "Costos") { 
                document.getElementById("Costos").checked = true;
            }
        if (results == "Ahorro de Energia") { 
                document.getElementById("Ahorro de Energia").checked = true;
            }
        if (results == "Ahorro de Suministros") { 
                document.getElementById("Ahorro de Suministros").checked = true;
            }  
        if (results == "Consumo de Refacciones") { 
                document.getElementById("Consumo de Refacciones").checked = true;
            }  
        if (results == "Demoras") { 
                document.getElementById("Demoras").checked = true;
            }  
        if (results == "Demoras y Accidentes") { 
                document.getElementById("Demoras y Accidentes").checked = true;
            }  
        if (results == "Desperdicio de Agua") { 
                document.getElementById("Desperdicio de Agua").checked = true;
            }  
        if (results == "Medio Ambiente") { 
                document.getElementById("Medio Ambiente").checked = true;
            }

            });          

            