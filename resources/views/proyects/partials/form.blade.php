<div class="form-group">
    {{ Form::hidden('id', null) }}
</div>
<div class="form-group">
    {{ Form::label('proyecto', 'Nombre del proyecto') }}
    {{ Form::text('proyecto', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_reg', 'Fecha de registro del proyecto') }}
    {{ Form::date('fecha_reg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('depto', 'Departamento del proyecto') }}
    {{ Form::select('depto', ['ACERACION B.O.F Y COLADA CONTI S2'=>'ACERACION B.O.F Y COLADA CONTI S2',
    'ACERACION B.O.F. S1'=>'ACERACION B.O.F. S1',
    'ACERIAS'=>'ACERIAS',
    'ACERO'=>'ACERO',
    'ADMINISTRACION MINAS'=>'ADMINISTRACION MINAS',
    'ADMINISTRACION SAP RH'=>'ADMINISTRACION SAP RH',
    'ALMACENES'=>'ALMACENES',
    'ALTO HORNO S2'=>'ALTO HORNO S2',
    'ALTOS HORNOS S1'=>'ALTOS HORNOS S1',
    'ANTAIR'=>'ANTAIR',
    'AUDITORIA INTERNA'=>'AUDITORIA INTERNA',
    'AUTOMATIZACION SISTEMAS Y CTRL'=>'AUTOMATIZACION SISTEMAS Y CTRL',
    'CAPACITACION'=>'CAPACITACION',
    'COMBUSTION E INSTRUMENTOS S1'=>'COMBUSTION E INSTRUMENTOS S1',
    'COMERCIALIZACION Y MERCADOTECNIA'=>'COMERCIALIZACION Y MERCADOTECNIA',
    'COMUNICACION SOCIAL Y REL PUBLICAS'=>'COMUNICACION SOCIAL Y REL PUBLICAS',
    'CONCURSOS Y CONTRATOS'=>'CONCURSOS Y CONTRATOS',
    'CONSEJO'=>'CONSEJO',
    'CONTRALORIA'=>'CONTRALORIA',
    'COQUE Y SUB-PRODUCTOS S1'=>'COQUE Y SUB-PRODUCTOS S1',
    'CORP OP CONTROL CAL ING M SERV TEC'=>'CORP OP CONTROL CAL ING M SERV TEC',
    'CORP OP ING PROYECTOS'=>'CORP OP ING PROYECTOS',
    'CORP OP INGENIERIA METALURGICA Y SERV T'=>'CORP OP INGENIERIA METALURGICA Y SERV T',
    'CORP OP INV Y DESARROLLO'=>'CORP OP INV Y DESARROLLO',
    'CORP OP PLANEACION Y DESARROLLO'=>'CORP OP PLANEACION Y DESARROLLO',
    'CORP OPERACIONES'=>'CORP OPERACIONES',
    'CORP. FINANZAS Y PLCN'=>'CORP. FINANZAS Y PLCN',
    'CORPORATIVO DE COMPRAS'=>'CORPORATIVO DE COMPRAS',
    'CORPORATIVO DE PLANEACION Y CONTROL'=>'CORPORATIVO DE PLANEACION Y CONTROL',
    'CORPORATIVO DE RECURSOS HUMANOS'=>'CORPORATIVO DE RECURSOS HUMANOS',
    'CTRL INVERSIONES'=>'CTRL INVERSIONES',
    'D. CORPORATIVO DE ABASTECIMIENTOS'=>'D. CORPORATIVO DE ABASTECIMIENTOS',
    'D. LAM EN CALIENTE Y NO PLANOS'=>'D. LAM EN CALIENTE Y NO PLANOS',
    'D. LAM MANTENIMIENTOS Y SERVICIOS'=>'D. LAM MANTENIMIENTOS Y SERVICIOS',
    'DIRECCIÓN GRAL'=>'DIRECCIÓN GRAL',
    'ESCARFEO'=>'ESCARFEO',
    'GRAL ADJ DE ADMINISTRACION Y FINANZAS'=>'GRAL ADJ DE ADMINISTRACION Y FINANZAS',
    'GRAL ADJ DE OPERACIONES'=>'GRAL ADJ DE OPERACIONES',
    'HIGIENE Y ECOLOGIA'=>'HIGIENE Y ECOLOGIA',
    'JURIDICO CORPORATIVO'=>'JURIDICO CORPORATIVO',
    'LADRILLO REFRACTARIO S1'=>'LADRILLO REFRACTARIO S1',
    'LAM NO PLANOS'=>'LAM NO PLANOS',
    'LAMINADORA EN FRIO S1'=>'LAMINADORA EN FRIO S1',
    'LAMINADORA EN FRIO S2'=>'LAMINADORA EN FRIO S2',
    'LOGISTICA Y SERVICIO A CLIENTES'=>'LOGISTICA Y SERVICIO A CLIENTES',
    'MANT. ELECTRICO CENTRAL S1'=>'MANT. ELECTRICO CENTRAL S1',
    'MANTENIEMIENTO CAMPO 2'=>'MANTENIEMIENTO CAMPO 2',
    'MANTENIMIENTO DE CAMPO'=>'MANTENIMIENTO DE CAMPO',
    'MANTENIMIENTO LAMINADORA EN CALIENTE'=>'MANTENIMIENTO LAMINADORA EN CALIENTE',
    'MANTENIMIENTO MECANICO GRUAS ELECTRICAS'=>'MANTENIMIENTO MECANICO GRUAS ELECTRICAS',
    'MANTENIMIENTO PREVENTIVO Y PREDICTIVO'=>'MANTENIMIENTO PREVENTIVO Y PREDICTIVO',
    'MEDICINA DEL TRABAJO'=>'MEDICINA DEL TRABAJO',
    'MERCADOTECNIA'=>'MERCADOTECNIA',
    'MIMOSA'=>'MIMOSA',
    'MOLINO STECKEL'=>'MOLINO STECKEL',
    'MTTO MECANICO CENTRAL'=>'MTTO MECANICO CENTRAL',
    'NEGOCIOS ESPECIALES COMEDOR INDUSTRIAL'=>'NEGOCIOS ESPECIALES COMEDOR INDUSTRIAL',
    'NORMALIZADO'=>'NORMALIZADO',
    'OPERACIÓN LAMINADORA EN CALIENTE'=>'OPERACIÓN LAMINADORA EN CALIENTE',
    'OPERACIONES INTERNACIONALES'=>'OPERACIONES INTERNACIONALES',
    'PERFILES LIGEROS'=>'PERFILES LIGEROS',
    'PERFILES PESADOS'=>'PERFILES PESADOS',
    'PLAN ESTRATEGICA'=>'PLAN ESTRATEGICA',
    'PLANEACION Y DESARROLLO'=>'PLANEACION Y DESARROLLO',
    'PLANTA COQUIZADORA S2'=>'PLANTA COQUIZADORA S2',
    'PLANTA DE FUERZA 5 S2'=>'PLANTA DE FUERZA 5 S2',
    'PLANTA DE SINTERIZACION NO.2'=>'PLANTA DE SINTERIZACION NO.2',
    'PLANTA PELETIZADORA'=>'PLANTA PELETIZADORA',
    'PLANTAS DE FUERZA'=>'PLANTAS DE FUERZA',
    'PROTECCION INDUSTRIAL'=>'PROTECCION INDUSTRIAL',
    'PROYECTO FENIX'=>'PROYECTO FENIX',
    'PROYECTOES EXTERNOS'=>'PROYECTOES EXTERNOS',
    'RECURSOS HUMANOS OFICINAS MEXICO'=>'RECURSOS HUMANOS OFICINAS MEXICO',
    'REFRIGERACION'=>'REFRIGERACION',
    'REL INSTITUCIONALES Y PRAC COMERCIALES'=>'REL INSTITUCIONALES Y PRAC COMERCIALES',
    'RELACIONES INDUSTRIALES (JURIDICO=> REL.'=>'RELACIONES INDUSTRIALES (JURIDICO, REL.',
    'RELACIONES LABORALES SID. 1'=>'RELACIONES LABORALES SID. 1',
    'RELACIONES LABORALES SID. 2'=>'RELACIONES LABORALES SID. 2',
    'S. MTTO Y SERVICIOS'=>'S. MTTO Y SERVICIOS',
    'SEG CAP MEDIO AMBIENTE Y CAL'=>'SEG CAP MEDIO AMBIENTE Y CAL',
    'SEG INDUSTRIAL'=>'SEG INDUSTRIAL',
    'SERV HAB=> ANCON=> ADMIN. RANCHOS'=>'SERV HAB, ANCON, ADMIN. RANCHOS',
    'SERVICIOS DE APOYO S1'=>'SERVICIOS DE APOYO S1',
    'SISTEMAS DE CALIDAD'=>'SISTEMAS DE CALIDAD',
    'SISTEMAS DE INFORMACION'=>'SISTEMAS DE INFORMACION',
    'SUPERVISION DE OBRAS'=>'SUPERVISION DE OBRAS',
    'SUPTCIA ALTO HORNO 5 Y PTA COQUIZADORA S'=>'SUPTCIA ALTO HORNO 5 Y PTA COQUIZADORA S',
    'SUPTCIA. ABASTECIMIENTO INTERIOR'=>'SUPTCIA. ABASTECIMIENTO INTERIOR',
    'SUPTCIA. MTTO LAM PLANOS EN FRIO y TASK'=>'SUPTCIA. MTTO LAM PLANOS EN FRIO y TASK',
    'SUPTCIA. TRANSPORTE FERROVIARIO - OPERAC'=>'SUPTCIA. TRANSPORTE FERROVIARIO - OPERAC',
    'SUPTICA. PLANTAS DE OXIGENO S1 Y S2'=>'SUPTICA. PLANTAS DE OXIGENO S1 Y S2',
    'TALLER CENTRAL DE MENTENIMIENTO'=>'TALLER CENTRAL DE MENTENIMIENTO',
    'TESORERIA'=>'TESORERIA',
    'TRATAMIENTO DE AGUA S1 y S2 Y AGUAS NEGR'=>'TRATAMIENTO DE AGUA S1 y S2 Y AGUAS NEGR',
    'VENTAS DISTRIBUCION'=>'VENTAS DISTRIBUCION',
    'VENTAS INDUSTRIALES'=>'VENTAS INDUSTRIALES',
    'VICEPRESIDENCIA DEL CONSEJO'=>'VICEPRESIDENCIA DEL CONSEJO'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('nivel', 'Nivel asignado al proyecto') }}
    {{ Form::select('nivel', ['1'=>'1','2'=>'2'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('comite', 'Comite de aprobación') }}
    {{ Form::select('comite', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('asesor', 'Asesor asignado al proyecto') }}
    {{ Form::select('asesor', ['Ing. Cinthya Rodriguez'=>'Ing. Cinthya Rodriguez', 
    'Ing. Isabela San Miguel'=>'Ing. Isabela San Miguel', 
    'Ing. Edith Ramos'=>'Ing. Edith Ramos', 
    'Ing. Orlando Guerra'=>'Ing. Orlando Guerra', 
    'Ing. Sergio Camacho'=>'Ing. Sergio Camacho'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_ini', 'Fecha de inicio del proyecto') }}
    {{ Form::date('fecha_ini', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_fin', 'Fecha fin del proyecto') }}
    {{ Form::date('fecha_fin', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('valor', 'Valor corporativo del proyecto') }}
    {{ Form::select('valor', ['Productividad'=>'Productividad', 'Calidad'=>'Calidad', 'Costos'=>'Costos', 'Productividad y Costos'=>'Productividad y Costos','Productividad, calidad y Costos'=>'Productividad, calidad y Costos'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('metodologia', 'Metodologia del proyecto') }}
    {{ Form::select('metodologia', ['DMAIC'=>'DMAIC', 'PDCA'=>'PDCA', 'QC-STORY 1'=>'QC-STORY 1', 'QC-STORY 2'=>'QC-STORY 2', 'DMADV'=>'DMADV'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('ahorro_anual_proy', 'Ahorro anual proyectado') }}
    {{ Form::number('ahorro_anual_proy', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('metrico_primario', 'Metrico primario del proyecto') }}
    {{ Form::text('metrico_primario', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('metrico_secundario', 'metrico Secundario del proyecto') }}
    {{ Form::text('metrico_secundario', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('empresa', 'Empresa donde se desarrolla el proyecto') }}
    {{ Form::select('empresa', ['AHMSA 1'=>'AHMSA 1','AHMSA 2'=>'AHMSA 2','NASA'=>'NASA','MICARE'=>'MICARE','MIMOSA'=>'MIMOSA','HERCULES'=>'HERCULES'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('desc_proy', 'Proyecto sujeto a descuentos') }}
    {{ Form::select('desc_proy', ['0'=>'Con descuento','1'=>'Sin descuento'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('proy_status', 'Status del proyecto') }}
    {{ Form::select('proy_status', ['0'=>'Cancelado','1'=>'Activo','2'=>'Terminado'], null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>