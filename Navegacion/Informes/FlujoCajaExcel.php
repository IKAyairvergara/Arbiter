<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: FlujoCajaExcel.php

==> DESCRIPCION: Codigo fuente para generacion de informes de flujo caja en formato excel

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->
<?php
   include "../../php/conexion.php";
	
	$Example=$_GET['dato']; 
	
	    $consulta = "SELECT FLC_C_CONS_ID,DATE_FORMAT(FLC_C_FECHA,'%b/%y') , FLC_C_URBANISMO_INTERNO, 
		FLC_C_UI_PRESUPUESTO, FLC_C_UI_INCREMENTOS, FLC_C_COSTOS_MATERIALES_MANO_OBRA, 
		FLC_C_CM_PRESUPUESTO, FLC_C_CM_INCREMENTOS, FLC_C_GASTOS_IMPREVISTOS, FLC_C_COSTOS_POSTVENTA, 
		FLC_C_COSTO_DIRECTO_CONSTRUCCION, FLC_C_HONORARIOS_CONSTRUCCION, FLC_C_HC_HONORARIOS_CONSTRUCCION, 
		FLC_C_HC_GASTOS_REEMBOLSABLES, FLC_C_HONORARIOS_INTERVENTORIA, FLC_C_HI_HONORARIOS_INTERVENTORIA, 
		FLC_C_HI_GASTOS_REEMBOSABLES, FLC_C_OTROS_HONORARIOS, FLC_C_OH_OTROS_HONORARIOS, FLC_C_OH_GASTOS_REEMBOLSABLES, 
		FLC_C_IMPUESTOS_Y_DERECHOS, FLC_C_COSTO_TOTAL_CONSTRUCCION, FLC_C_HONORARIOS_GERENCIA, FLC_C_HG_HONORARIOS_GERENCIA, 
		FLC_C_HG_GASTOS_REEMBOLSABLES, FLC_C_HONORARIOS_VENTAS, FLC_C_HV_HONORARIOS_VENTAS, FLC_C_HV_GASTOS_REEMBOLSABLES, 
		FLC_C_COSTOS_PROMOCION_Y_VENTAS, FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO, FLC_C_CP_GASTOS_PUBLICIDAD, 
		FLC_C_CP_GASTOS_SALA_DE_VENTAS, FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR, FLC_C_CP_COMISIONES_VENTAS, 
		FLC_C_GASTOS_LEGALES, FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR, FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS, 
		FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA, FLC_C_GL_IMPUESTO_ICA, FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS, 
		FLC_C_VALOR_TERRENO_URBANIZADO, FLC_C_VT_VALOR_ADQUISICION, FLC_C_VT_COSTOS_URBANISMO_Y_OTROS, FLC_C_COMISIONES_FIDUCIA, 
		FLC_C_CF_PREVENTAS_Y_ADMINISTRACION, FLC_C_CF_NUEVOGAR, FLC_C_GASTOS_FINANCIEROS, FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR, 
		FLC_C_GF_OTROS_COSTOS_CREDITO, FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION, FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF, 
		FLC_C_OTROS_COSTOS_Y_GASTOS, FLC_C_OC_COSTOS_GASTOS1, FLC_C_OC_COSTOS_GASTOS2, FLC_C_OC_COSTOS_GASTOS3, 
		FLC_C_REINTEGROS_IVA_PROYECTOS_VIS, FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS, FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA, 
		FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO, FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO, 
		FLC_C_INGRESOS_POR_VENTAS, FLC_C_IV_ABONOS_SEPARACION, FLC_C_IV_CARTERA_CUOTA_INICIAL, 
		FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA, FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO, 
		FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES, FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES, 
		FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS, FLC_C_OTROS_INGRESOS_VENTAS_INTERESES, 
		FLC_C_OI_INTERESES_SUBROGACION, FLC_C_OI_INTERESES_MORA, FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS, 
		FLC_C_RENDIMIENTOS_FIDEICOMISO, FLC_C_OTROS_INGRESOS, FLC_C_OI_INGRESOS1, FLC_C_OI_INGRESOS2, 
		FLC_C_OI_INGRESOS3, FLC_C_INGRESOS_TOTALES, FLC_C_FLUJO_NETO_CAJA_CT, FLC_C_FLUJO_ACUMULADO_CAJA_CT, 
		FLC_C_COSTO_CREDITOS_TESORERIA, FLC_C_IMPUESTO_DE_RENTA, FLC_C_FLUJO_NETO_CAJA, FLC_C_FLUJO_ACUMULADO_CAJA, 
		FLC_C_PROYECCION_VENTAS_UNIDADES, FLC_C_VENTAS_BRUTAS, FLC_C_PRECIO_PROMEDIO, FLC_C_PROYECCION_ENTREGAS_UNIDADES, 
		FLC_C_PROYECCION_ESCRITURAS_VALOR, FLC_C_PROYECCION_ESCRITURAS_UNIDADES, FLC_C_PROYECCION_SUBROGACIONES_VALOR, 
		FLC_C_VPN, FLC_C_TIR_EA, FLC_C_TIR_EM, FLC_C_TIR_MOD_EA, FLC_C_C_TIR_MOD_EM FROM tb_c_flujo_caja WHERE FLC_C_CONS_ID='$Example'";

	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
		
	
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../PHPExcel/Classes/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();
		
			$BStyle = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);

	$colorLetra = array(
    'font'  => array(
        'color' => array('rgb' => '918080'),
        
    ));

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("IKA") //Autor
							 ->setLastModifiedBy("IKA") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel Flujo Caja")
							 ->setSubject("Reporte Excel Flujo Caja")
							 ->setDescription("Reporte Excel Flujo Caja")
							 ->setKeywords("Reporte Excel Flujo Caja")
							 ->setCategory("Reporte excel");

		$tituloReporte = "FLUJO DE CAJA CONSOLIDADO-  Miles de Pesos";
		$titulosColumnas = array('Urbanismo Interno - Costo Materiales y Mano Obra (no aplica)',
			'   Presupuesto',
			'   Incrementos ',
			'Costo Materiales y Mano Obra',
			'   Presupuesto',
			'   Incrementos ',
			'Gastos Imprevistos',
			'Costos de Post Ventas',
			'COSTO DIRECTO DE CONSTRUCCION',
			'Honorarios Construcción',
			'   Honorarios Construccion ',
			'   Gastos reembolsables',
			'Honorarios Interventoria',
			'   Honorarios Interventoria',
			'   Gastos reembolsables',
			'Otros Honorarios (diseños otros)',
			'   Otros Honorarios (diseños otros)',
			'   Gastos reembolsables',
			'Impuestos y Derechos (licconstruccion otros)',
			'COSTO TOTAL DE CONSTRUCCION',
			'Honorarios de Gerencia',
			'   Honorarios de Gerencia',
			'   Gastos reembolsables',
			'Honorarios de Ventas',
			'   Honorarios de Ventas',
			'   Gastos reembolsables',
			'Costos de Promocion y Ventas',
			'   Sala de Ventas y Unidades Modelo (construccion)',
			'   Gastos de Publicidad ',
			'   Gastos Sala de Ventas',
			'   Administración unidades x entregar',
			'   Comisiones de Ventas',
			'Gastos Legales',
			'   Hipotecas crédito constructor',
			'   Notariales y de Registro de Ventas (t y n)',
			'   Impuesto Predial Inmuebles por escriturar y entregar',
			'   Impuesto ICA (t y n)',
			'COSTO TOTAL ANTES TERRENO Y FINANCIEROS',
			'Valor del Terreno Urbanizado',
			'   Valor Adquisición ',
			'   Costos de Urbanismo y Otros (legales financieros otros)',
			'Comisiones Fiducia',
			'   Preventas y Administración',
			'   NUEVOGAR',
			'Gastos Financieros ',
			'   Intereses Créditos Constructor', 
			'   Otros Costos del Crédito',
			'   Correccion Monetaria Construcción (no es egreso de caja)',
			'   Impto Transacciones Financieras (ITF)', 
			'Otros Costos y Gastos',
			'   Costos y Gastos 1',
			'   Costos y Gastos 2',
			'   Costos y Gastos 3',
			'- Reintegros IVA (proyectos VIS)',
			'COSTO TOTAL (directos e indirectos)',
			'TOTAL EGRESOS (sin correccion monetaria)',
			'Desembolsos Creditos Constructor y Terreno',
			'Abonos Extraordinarios Créditos Constructor y Terreno (-)',
			'Ingresos por Ventas',
			'   Abonos a la Separación (t)',
			'   Cartera Cuota Inicial (t y n)',
			'   Saldo Cuota Inicial (n) y Abono Escritura (t)',
			'   Subsidio VIS y Ahorro Programado (t)',
			'   Excedentes Crédito Compradores (t y n)',
			'   Giros directos créditos otras entidades  (n apl)',
			'   Ingresos por recibir ventas realizadas (napl)',
			'Otros Ingresos por ventas (intereses)',
			'   Intereses de Subrogación ',
			'   Intereses de mora (no aplica)',
			'   Ofertas comerciales y otros ingresos (napl)',
			'Rendimientos Fideicomiso',
			'Otros Ingresos',
			'   Ingresos 1',
			'   Ingresos 2',
			'   Ingresos 3',
			'INGRESOS TOTALES',
			'FLUJO NETO DE CAJA (ai y créditos tesorería)',
			'FLUJO ACUMULADO DE CAJA',
			'Costo créditos de tesorería', 
			'Impuesto de renta ',
			'FLUJO NETO DE CAJA ',
			'FLUJO ACUMULADO DE CAJA',
			'Proyección Ventas - Unidades',
			'Ventas Brutas',
			'Precio Promedio',
			'Proyeccion Entregas - Unidades',
			'Proyección Escrituras - Valor',
			'Proyección Escrituras - Unidades',
			'Proyección Subrogaciones- Valor'
			);
		
				
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A3',$tituloReporte)
        		     ->setCellValue('A5',  $titulosColumnas[0])
					 ->setCellValue('A6',  $titulosColumnas[1])
					 ->setCellValue('A7',  $titulosColumnas[2])
					 ->setCellValue('A8',  $titulosColumnas[3])
					 ->setCellValue('A9',  $titulosColumnas[4])
					 ->setCellValue('A10',  $titulosColumnas[5])
					 ->setCellValue('A11',  $titulosColumnas[6])
					 ->setCellValue('A12',  $titulosColumnas[7])
					 ->setCellValue('A13',  $titulosColumnas[8])
					 ->setCellValue('A14',  $titulosColumnas[9])
					 ->setCellValue('A15',  $titulosColumnas[10])
					 ->setCellValue('A16',  $titulosColumnas[11])
					 ->setCellValue('A17',  $titulosColumnas[12])
					 ->setCellValue('A18',  $titulosColumnas[13])
					 ->setCellValue('A19',  $titulosColumnas[14])
					 ->setCellValue('A20',  $titulosColumnas[15])
					 ->setCellValue('A21',  $titulosColumnas[16])
					 ->setCellValue('A22',  $titulosColumnas[17])
					 ->setCellValue('A23',  $titulosColumnas[18])
					 ->setCellValue('A24',  $titulosColumnas[19])
					 ->setCellValue('A25',  $titulosColumnas[20])
					 ->setCellValue('A26',  $titulosColumnas[21])
					 ->setCellValue('A27',  $titulosColumnas[22])
					 ->setCellValue('A28',  $titulosColumnas[23])
					 ->setCellValue('A29',  $titulosColumnas[24])
					 ->setCellValue('A30',  $titulosColumnas[25])
					 ->setCellValue('A31',  $titulosColumnas[26])
					 ->setCellValue('A32',  $titulosColumnas[27])
					 ->setCellValue('A33',  $titulosColumnas[28])
					 ->setCellValue('A34',  $titulosColumnas[29])
					 ->setCellValue('A35',  $titulosColumnas[30])
					 ->setCellValue('A36',  $titulosColumnas[31])
					 ->setCellValue('A37',  $titulosColumnas[32])
					 ->setCellValue('A38',  $titulosColumnas[33])
					 ->setCellValue('A39',  $titulosColumnas[34])
					 ->setCellValue('A40',  $titulosColumnas[35])
					 ->setCellValue('A41',  $titulosColumnas[36])
					 ->setCellValue('A42',  $titulosColumnas[37])
					 ->setCellValue('A43',  $titulosColumnas[38])
					 ->setCellValue('A44',  $titulosColumnas[39])
					 ->setCellValue('A45',  $titulosColumnas[40])
					 ->setCellValue('A46',  $titulosColumnas[41])
					 ->setCellValue('A47',  $titulosColumnas[42])
					 ->setCellValue('A48',  $titulosColumnas[43])
					 ->setCellValue('A49',  $titulosColumnas[44])
					 ->setCellValue('A50',  $titulosColumnas[45])
					 ->setCellValue('A51',  $titulosColumnas[46]) 
					 ->setCellValue('A52',  $titulosColumnas[47])
					 ->setCellValue('A53',  $titulosColumnas[48])
					 ->setCellValue('A54',  $titulosColumnas[49])
					 ->setCellValue('A55',  $titulosColumnas[50])
					 ->setCellValue('A56',  $titulosColumnas[51])
					 ->setCellValue('A57',  $titulosColumnas[52])
					 ->setCellValue('A58',  $titulosColumnas[53])
					 ->setCellValue('A59',  $titulosColumnas[54])
					 ->setCellValue('A60',  $titulosColumnas[55])
					 ->setCellValue('A61',  $titulosColumnas[56])
					 ->setCellValue('A62',  $titulosColumnas[57])
					 ->setCellValue('A63',  $titulosColumnas[58])
					 ->setCellValue('A64',  $titulosColumnas[59])
					 ->setCellValue('A65',  $titulosColumnas[60])
					 ->setCellValue('A66',  $titulosColumnas[61])
					 ->setCellValue('A67',  $titulosColumnas[62])
					 ->setCellValue('A68',  $titulosColumnas[63])
					 ->setCellValue('A69',  $titulosColumnas[64])
					 ->setCellValue('A70',  $titulosColumnas[65])
					 ->setCellValue('A71',  $titulosColumnas[66])
					 ->setCellValue('A72',  $titulosColumnas[67])
					 ->setCellValue('A73',  $titulosColumnas[68])
					 ->setCellValue('A74',  $titulosColumnas[69])
					 ->setCellValue('A75',  $titulosColumnas[70])
					 ->setCellValue('A76',  $titulosColumnas[71])
					 ->setCellValue('A77',  $titulosColumnas[72])
					 ->setCellValue('A78',  $titulosColumnas[73])
			         ->setCellValue('A79',  $titulosColumnas[74])
					 ->setCellValue('A80',  $titulosColumnas[75])
					 ->setCellValue('A81',  $titulosColumnas[76])
					 ->setCellValue('A82',  $titulosColumnas[77])
					 ->setCellValue('A83',  $titulosColumnas[78])
					 ->setCellValue('A84',  $titulosColumnas[79])
					 ->setCellValue('A85',  $titulosColumnas[80])
					 ->setCellValue('A86',  $titulosColumnas[81])
					 
					 
					 ->setCellValue('A91',  $titulosColumnas[82])
					 ->setCellValue('A92',  $titulosColumnas[83])
					 ->setCellValue('A93',  $titulosColumnas[84])
					 ->setCellValue('A94',  $titulosColumnas[85])
					 ->setCellValue('A95',  $titulosColumnas[86])
					 ->setCellValue('A96',  $titulosColumnas[87])
					 ->setCellValue('A97',  $titulosColumnas[88])
					 ;
		
		//Se agregan los datos 
		$i = 4;
		
		
		
		
		$columnas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
							'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ',
							'BA','BB','BC','BD','BE','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ',
							'CA','CB','CC','CD','CE','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ',
							'DA','DB','DC','DD','DE','DF','DG','DH','DI','DJ','DK','DL','DM','DN','DO','DP','DQ','DR','DS','DT','DU','DV','DW','DX','DY','DZ',
							'EA','EB','EC','ED','EE','EF','EG','EH','EI','EJ','EK','EL','EM','EN','EO','EP','EQ','ER','ES','ET','EU','EV','EW','EX','EY','EZ',
							'FA','FB','FC','FD','FE','FF','FG','FH','FI','FJ','FK','FL','FM','FN','FO','FP','FQ','FR','FS','FT','FU','FV','FW','FX','FY','FZ',
							'GA','GB','GC','GD','GE','GF','GG','GH','GI','GJ','GK','GL','GM','GN','GO','GP','GQ','GR','GS','GT','GU','GV','GW','GX','GY','GZ',
							'HA','HB','HC','HD','HE','HF','HG','HH','HI','HJ','HK','HL','HM','HN','HO','HP','HQ','HR','HS','HT','HU','HV','HW','HX','HY','HZ',
							'IA','IB','IC','ID','IE','IF','IG','IH','II','IJ','IK','IL','IM','IN','IO','IP','IQ','IR','IS','IT','IU','IV','IW','IX','IY','IZ');
				
		$c=4;
		
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setName('Arial');
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0) 
				     ->setCellValue($columnas[$c].'3',   $fila["DATE_FORMAT(FLC_C_FECHA,'%b/%y')"])	
					 ->setCellValue($columnas[$c].'5',   $fila['FLC_C_URBANISMO_INTERNO'])
					 ->setCellValue($columnas[$c].'6',   $fila['FLC_C_UI_PRESUPUESTO'])
					 ->setCellValue($columnas[$c].'7',   $fila['FLC_C_UI_INCREMENTOS'])
					 ->setCellValue($columnas[$c].'8',   $fila['FLC_C_COSTOS_MATERIALES_MANO_OBRA'])
					 ->setCellValue($columnas[$c].'9',   $fila['FLC_C_CM_PRESUPUESTO'])
					 ->setCellValue($columnas[$c].'10',  $fila['FLC_C_CM_INCREMENTOS'])
					 ->setCellValue($columnas[$c].'11',  $fila['FLC_C_GASTOS_IMPREVISTOS'])
					 ->setCellValue($columnas[$c].'12',  $fila['FLC_C_COSTOS_POSTVENTA'])
					 ->setCellValue($columnas[$c].'13',  $fila['FLC_C_COSTO_DIRECTO_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'14',  $fila['FLC_C_HONORARIOS_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'15',  $fila['FLC_C_HC_HONORARIOS_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'16',  $fila['FLC_C_HC_GASTOS_REEMBOLSABLES'])
					 ->setCellValue($columnas[$c].'17',  $fila['FLC_C_HONORARIOS_INTERVENTORIA'])
					 ->setCellValue($columnas[$c].'18',  $fila['FLC_C_HI_HONORARIOS_INTERVENTORIA'])
					 ->setCellValue($columnas[$c].'19',  $fila['FLC_C_HI_GASTOS_REEMBOSABLES'])
					 ->setCellValue($columnas[$c].'20',  $fila['FLC_C_OTROS_HONORARIOS'])
					 ->setCellValue($columnas[$c].'21',  $fila['FLC_C_OH_OTROS_HONORARIOS'])
					 ->setCellValue($columnas[$c].'22',  $fila['FLC_C_OH_GASTOS_REEMBOLSABLES'])
					 ->setCellValue($columnas[$c].'23',  $fila['FLC_C_IMPUESTOS_Y_DERECHOS'])
					 ->setCellValue($columnas[$c].'24',  $fila['FLC_C_COSTO_TOTAL_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'25',  $fila['FLC_C_HONORARIOS_GERENCIA'])
					 ->setCellValue($columnas[$c].'26',  $fila['FLC_C_HG_HONORARIOS_GERENCIA'])
					 ->setCellValue($columnas[$c].'27',  $fila['FLC_C_HG_GASTOS_REEMBOLSABLES'])
					 ->setCellValue($columnas[$c].'28',  $fila['FLC_C_HONORARIOS_VENTAS'])
					 ->setCellValue($columnas[$c].'29',  $fila['FLC_C_HV_HONORARIOS_VENTAS'])
					 ->setCellValue($columnas[$c].'30',  $fila['FLC_C_HV_GASTOS_REEMBOLSABLES'])
					 ->setCellValue($columnas[$c].'31',  $fila['FLC_C_COSTOS_PROMOCION_Y_VENTAS'])
					 ->setCellValue($columnas[$c].'32',  $fila['FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO'])
					 ->setCellValue($columnas[$c].'33',  $fila['FLC_C_CP_GASTOS_PUBLICIDAD'])
					 ->setCellValue($columnas[$c].'34',  $fila['FLC_C_CP_GASTOS_SALA_DE_VENTAS'])
					 ->setCellValue($columnas[$c].'35',  $fila['FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR'])
					 ->setCellValue($columnas[$c].'36',  $fila['FLC_C_CP_COMISIONES_VENTAS'])
					 ->setCellValue($columnas[$c].'37',  $fila['FLC_C_GASTOS_LEGALES'])
					 ->setCellValue($columnas[$c].'38',  $fila['FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR'])
					 ->setCellValue($columnas[$c].'39',  $fila['FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS'])
					 ->setCellValue($columnas[$c].'40',  $fila['FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA'])
					 ->setCellValue($columnas[$c].'41',  $fila['FLC_C_GL_IMPUESTO_ICA'])
					 ->setCellValue($columnas[$c].'42',  $fila['FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS'])
					 ->setCellValue($columnas[$c].'43',  $fila['FLC_C_VALOR_TERRENO_URBANIZADO'])
					 ->setCellValue($columnas[$c].'44',  $fila['FLC_C_VT_VALOR_ADQUISICION'])
					 ->setCellValue($columnas[$c].'45',  $fila['FLC_C_VT_COSTOS_URBANISMO_Y_OTROS'])
					 ->setCellValue($columnas[$c].'46',  $fila['FLC_C_COMISIONES_FIDUCIA'])
					 ->setCellValue($columnas[$c].'47',  $fila['FLC_C_CF_PREVENTAS_Y_ADMINISTRACION'])
					 ->setCellValue($columnas[$c].'48',  $fila['FLC_C_CF_NUEVOGAR'])
					 ->setCellValue($columnas[$c].'49',  $fila['FLC_C_GASTOS_FINANCIEROS'])
					 ->setCellValue($columnas[$c].'50',  $fila['FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR'])
					 ->setCellValue($columnas[$c].'51',  $fila['FLC_C_GF_OTROS_COSTOS_CREDITO'])
					 ->setCellValue($columnas[$c].'52',  $fila['FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'53',  $fila['FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'])
					 ->setCellValue($columnas[$c].'54',  $fila['FLC_C_OTROS_COSTOS_Y_GASTOS'])
					 ->setCellValue($columnas[$c].'55',  $fila['FLC_C_OC_COSTOS_GASTOS1'])
					 ->setCellValue($columnas[$c].'56',  $fila['FLC_C_OC_COSTOS_GASTOS2'])
					 ->setCellValue($columnas[$c].'57',  $fila['FLC_C_OC_COSTOS_GASTOS3'])
					 ->setCellValue($columnas[$c].'58',  $fila['FLC_C_REINTEGROS_IVA_PROYECTOS_VIS'])
					 ->setCellValue($columnas[$c].'59',  $fila['FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS'])
					 ->setCellValue($columnas[$c].'60',  $fila['FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA'])
					 ->setCellValue($columnas[$c].'61',  $fila['FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO'])
					 ->setCellValue($columnas[$c].'62',  $fila['FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO'])
					 ->setCellValue($columnas[$c].'63',  $fila['FLC_C_INGRESOS_POR_VENTAS'])
					 ->setCellValue($columnas[$c].'64',  $fila['FLC_C_IV_ABONOS_SEPARACION'])
					 ->setCellValue($columnas[$c].'65',  $fila['FLC_C_IV_CARTERA_CUOTA_INICIAL'])
					 ->setCellValue($columnas[$c].'66',  $fila['FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA'])
					 ->setCellValue($columnas[$c].'67',  $fila['FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO'])
					 ->setCellValue($columnas[$c].'68',  $fila['FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES'])
					 ->setCellValue($columnas[$c].'69',  $fila['FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES'])
					 ->setCellValue($columnas[$c].'70',  $fila['FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS'])
					 ->setCellValue($columnas[$c].'71',  $fila['FLC_C_OTROS_INGRESOS_VENTAS_INTERESES'])
					 ->setCellValue($columnas[$c].'72',  $fila['FLC_C_OI_INTERESES_SUBROGACION'])
					 ->setCellValue($columnas[$c].'73',  $fila['FLC_C_OI_INTERESES_MORA'])
					 ->setCellValue($columnas[$c].'74',  $fila['FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS'])
					 ->setCellValue($columnas[$c].'75',  $fila['FLC_C_RENDIMIENTOS_FIDEICOMISO'])
					 ->setCellValue($columnas[$c].'76',  $fila['FLC_C_OTROS_INGRESOS'])
					 ->setCellValue($columnas[$c].'77',  $fila['FLC_C_OI_INGRESOS1'])
					 ->setCellValue($columnas[$c].'78',  $fila['FLC_C_OI_INGRESOS2'])
					 ->setCellValue($columnas[$c].'79',  $fila['FLC_C_OI_INGRESOS3'])
					 ->setCellValue($columnas[$c].'80',  $fila['FLC_C_INGRESOS_TOTALES'])
					 ->setCellValue($columnas[$c].'81',  $fila['FLC_C_FLUJO_NETO_CAJA_CT'])
					 ->setCellValue($columnas[$c].'82',  $fila['FLC_C_FLUJO_ACUMULADO_CAJA_CT'])
					 ->setCellValue($columnas[$c].'83',  $fila['FLC_C_COSTO_CREDITOS_TESORERIA'])
					 ->setCellValue($columnas[$c].'84',  $fila['FLC_C_IMPUESTO_DE_RENTA'])
					 ->setCellValue($columnas[$c].'85',  $fila['FLC_C_FLUJO_NETO_CAJA'])
					 ->setCellValue($columnas[$c].'86',  $fila['FLC_C_FLUJO_ACUMULADO_CAJA'])
					 ->setCellValue($columnas[$c].'91',  $fila['FLC_C_PROYECCION_VENTAS_UNIDADES'])
					 ->setCellValue($columnas[$c].'92',  $fila['FLC_C_VENTAS_BRUTAS'])
					 ->setCellValue($columnas[$c].'93',  $fila['FLC_C_PRECIO_PROMEDIO'])
					 ->setCellValue($columnas[$c].'94',  $fila['FLC_C_PROYECCION_ENTREGAS_UNIDADES'])
					 ->setCellValue($columnas[$c].'95',  $fila['FLC_C_PROYECCION_ESCRITURAS_VALOR'])
					 ->setCellValue($columnas[$c].'96',  $fila['FLC_C_PROYECCION_ESCRITURAS_UNIDADES'])
					 ->setCellValue($columnas[$c].'97',  $fila['FLC_C_PROYECCION_SUBROGACIONES_VALOR'])
					 
					 ->setCellValue('B88',  'VPN (1054%  ea)')
					 ->setCellValue('B89',  $fila['FLC_C_VPN'])
					 
					 ->setCellValue('C88',  'TIR  (ea)')
					 ->setCellValue('C89',  $fila['FLC_C_TIR_EA'])
					 
					 ->setCellValue('D88',  'TIR (em)')
					 ->setCellValue('D89',  $fila['FLC_C_TIR_EM'])
					 
					 ->setCellValue('E88',  'TIR mod (ea)')
					 ->setCellValue('E89',  $fila['FLC_C_TIR_MOD_EA'])
					 
					 ->setCellValue('F88',  'TIR mod (em)')			 
					 ->setCellValue('F89',  $fila['FLC_C_C_TIR_MOD_EM'])
					 ;
				
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
					array(
					'fill' => array(
						'type' => PHPExcel_Style_Fill::FILL_SOLID,
							'color' => array('rgb' => 'F2F2F2'))));	
							
					
									
									
					
 $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'5:'.$columnas[$c].'86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'81:'.$columnas[$c].'82')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'85:'.$columnas[$c].'86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'91:'.$columnas[$c].'93')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'94:'.$columnas[$c].'96')->applyFromArray($BStyle);
					
		$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'6:'.$columnas[$c].'7')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'9:'.$columnas[$c].'10')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'15:'.$columnas[$c].'16')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'18:'.$columnas[$c].'19')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'21:'.$columnas[$c].'22')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'26:'.$columnas[$c].'27')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'29:'.$columnas[$c].'30')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'32:'.$columnas[$c].'36')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'38:'.$columnas[$c].'41')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'44:'.$columnas[$c].'45')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'47:'.$columnas[$c].'48')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'50:'.$columnas[$c].'53')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'55:'.$columnas[$c].'57')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'64:'.$columnas[$c].'70')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'72:'.$columnas[$c].'74')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'77:'.$columnas[$c].'79')->applyFromArray($colorLetra);
					
					
				//Formato Separador con comas
				  $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
					 ->getNumberFormat()->setFormatCode('#,##0');
					
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
			
					 $i++;
					 $c++;
					 
					
			}
		
		$objPHPExcel->setActiveSheetIndex(0) 
					 ->setCellValue('A1',  'MODELO C')
					 ->setCellValue('B3',  'TOTALES')
					 ->setCellValue('C3',  '%')
					 ->setCellValue('C4',  'Ventas')
					  ;
					 
					 
		
$objPHPExcel->setActiveSheetIndex(0) 
				
				     ->setCellValue('B5', '=SUM(E5:'.$columnas[$c].'5)')
					 ->setCellValue('B6', '=SUM(E6:'.$columnas[$c].'6)')
					 ->setCellValue('B7', '=SUM(E7:'.$columnas[$c].'7)')
					 ->setCellValue('B8', '=SUM(E8:'.$columnas[$c].'8)')
					 ->setCellValue('B9', '=SUM(E9:'.$columnas[$c].'9)')
					 ->setCellValue('B10', '=SUM(E10:'.$columnas[$c].'10)')
					 ->setCellValue('B11', '=SUM(E11:'.$columnas[$c].'11)')
					 ->setCellValue('B12', '=SUM(E12:'.$columnas[$c].'12)')
					 ->setCellValue('B13', '=SUM(E13:'.$columnas[$c].'13)')
					 ->setCellValue('B14', '=SUM(E14:'.$columnas[$c].'14)')
					 ->setCellValue('B15', '=SUM(E15:'.$columnas[$c].'15)')
					 ->setCellValue('B16', '=SUM(E16:'.$columnas[$c].'16)')
					 ->setCellValue('B17', '=SUM(E17:'.$columnas[$c].'17)')
					 ->setCellValue('B18', '=SUM(E18:'.$columnas[$c].'18)')
					 ->setCellValue('B19', '=SUM(E19:'.$columnas[$c].'19)')
					 ->setCellValue('B20', '=SUM(E20:'.$columnas[$c].'20)')
					 ->setCellValue('B21', '=SUM(E21:'.$columnas[$c].'21)')
					 ->setCellValue('B22', '=SUM(E22:'.$columnas[$c].'22)')
					 ->setCellValue('B23', '=SUM(E23:'.$columnas[$c].'23)')
					 ->setCellValue('B24', '=SUM(E24:'.$columnas[$c].'24)')
					 ->setCellValue('B25', '=SUM(E25:'.$columnas[$c].'25)')
					 ->setCellValue('B26', '=SUM(E26:'.$columnas[$c].'26)')
					 ->setCellValue('B27', '=SUM(E27:'.$columnas[$c].'27)')
					 ->setCellValue('B28', '=SUM(E28:'.$columnas[$c].'28)')
					 ->setCellValue('B29', '=SUM(E29:'.$columnas[$c].'29)')
					 ->setCellValue('B30', '=SUM(E30:'.$columnas[$c].'30)')
					 ->setCellValue('B31', '=SUM(E31:'.$columnas[$c].'31)')
					 ->setCellValue('B32', '=SUM(E32:'.$columnas[$c].'32)')
					 ->setCellValue('B33', '=SUM(E33:'.$columnas[$c].'33)')
					 ->setCellValue('B34', '=SUM(E34:'.$columnas[$c].'34)')
					 ->setCellValue('B35', '=SUM(E35:'.$columnas[$c].'35)')
					 ->setCellValue('B36', '=SUM(E36:'.$columnas[$c].'36)')
					 ->setCellValue('B37', '=SUM(E37:'.$columnas[$c].'37)')
					 ->setCellValue('B38', '=SUM(E38:'.$columnas[$c].'38)')
					 ->setCellValue('B39', '=SUM(E39:'.$columnas[$c].'39)')
					 ->setCellValue('B40', '=SUM(E40:'.$columnas[$c].'40)')
					 ->setCellValue('B41', '=SUM(E41:'.$columnas[$c].'41)')
					 ->setCellValue('B42', '=SUM(E42:'.$columnas[$c].'42)')
					 ->setCellValue('B43', '=SUM(E43:'.$columnas[$c].'43)')
					 ->setCellValue('B44', '=SUM(E44:'.$columnas[$c].'44)')
					 ->setCellValue('B45', '=SUM(E45:'.$columnas[$c].'45)')
					 ->setCellValue('B46', '=SUM(E46:'.$columnas[$c].'46)')
					 ->setCellValue('B47', '=SUM(E47:'.$columnas[$c].'47)')
					 ->setCellValue('B48', '=SUM(E48:'.$columnas[$c].'48)')
					 ->setCellValue('B49', '=SUM(E49:'.$columnas[$c].'49)')
					  ->setCellValue('B50', '=SUM(E50:'.$columnas[$c].'50)')
					 ->setCellValue('B51', '=SUM(E51:'.$columnas[$c].'51)')
					 ->setCellValue('B52', '=SUM(E52:'.$columnas[$c].'52)')
					 ->setCellValue('B53', '=SUM(E53:'.$columnas[$c].'53)')
					 ->setCellValue('B54', '=SUM(E54:'.$columnas[$c].'54)')
					 ->setCellValue('B55', '=SUM(E55:'.$columnas[$c].'55)')
					 ->setCellValue('B56', '=SUM(E56:'.$columnas[$c].'56)')
					 ->setCellValue('B57', '=SUM(E57:'.$columnas[$c].'57)')
					 ->setCellValue('B58', '=SUM(E58:'.$columnas[$c].'58)')
					 ->setCellValue('B59', '=SUM(E59:'.$columnas[$c].'59)')
					 ->setCellValue('B60', '=SUM(E60:'.$columnas[$c].'60)')
					 ->setCellValue('B61', '=SUM(E61:'.$columnas[$c].'61)')
					 ->setCellValue('B62', '=SUM(E62:'.$columnas[$c].'62)')
					 ->setCellValue('B63', '=SUM(E63:'.$columnas[$c].'63)')
					 ->setCellValue('B64', '=SUM(E64:'.$columnas[$c].'64)')
					 ->setCellValue('B65', '=SUM(E65:'.$columnas[$c].'65)')
					 ->setCellValue('B66', '=SUM(E66:'.$columnas[$c].'66)')
					 ->setCellValue('B67', '=SUM(E67:'.$columnas[$c].'67)')
					 ->setCellValue('B68', '=SUM(E68:'.$columnas[$c].'68)')
					 ->setCellValue('B69', '=SUM(E69:'.$columnas[$c].'69)')
					 ->setCellValue('B70', '=SUM(E70:'.$columnas[$c].'70)')
					 ->setCellValue('B71', '=SUM(E71:'.$columnas[$c].'71)')
					 ->setCellValue('B72', '=SUM(E72:'.$columnas[$c].'72)')
					 ->setCellValue('B73', '=SUM(E73:'.$columnas[$c].'73)')
					 ->setCellValue('B74', '=SUM(E74:'.$columnas[$c].'74)')
					 ->setCellValue('B75', '=SUM(E75:'.$columnas[$c].'75)')
					 ->setCellValue('B76', '=SUM(E76:'.$columnas[$c].'76)')
					 ->setCellValue('B77', '=SUM(E77:'.$columnas[$c].'77)')
					 ->setCellValue('B78', '=SUM(E78:'.$columnas[$c].'78)')
					 ->setCellValue('B79', '=SUM(E79:'.$columnas[$c].'79)')
					 ->setCellValue('B80', '=SUM(E80:'.$columnas[$c].'80)')
					 ->setCellValue('B81', '=SUM(E81:'.$columnas[$c].'81)')
					 ->setCellValue('B82', '=SUM(E82:'.$columnas[$c].'82)')
					 ->setCellValue('B83', '=SUM(E83:'.$columnas[$c].'83)')
					 ->setCellValue('B84', '=SUM(E84:'.$columnas[$c].'84)')
					 ->setCellValue('B85', '=SUM(E85:'.$columnas[$c].'85)')
					 ->setCellValue('B86', '=SUM(E86:'.$columnas[$c].'86)')
					 
					 ->setCellValue('B91', '=SUM(E91:'.$columnas[$c].'91)')
					 ->setCellValue('B92', '=SUM(E92:'.$columnas[$c].'92)')
					 ->setCellValue('B93', '=SUM(E93:'.$columnas[$c].'93)')
					 ->setCellValue('B94', '=SUM(E94:'.$columnas[$c].'94)')
					 ->setCellValue('B95', '=SUM(E95:'.$columnas[$c].'95)')
					 ->setCellValue('B96', '=SUM(E96:'.$columnas[$c].'96)')
					 ->setCellValue('B97', '=SUM(E97:'.$columnas[$c].'97)') ;
	
	//Formato miles Con separador.
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
    ->getNumberFormat()->setFormatCode('#,##0');
	
		
	
	//Dimension de columnas
	
	$nCols = 500; //set the number of columns

    foreach (range(3, $nCols) as $col) {
        $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(true);                
    }
	
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
	
	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setWidth(16);

	//Bordes
	 $abc = array(
		  'borders' => array(
			  'allborders' => array(
				  'style' => PHPExcel_Style_Border::BORDER_NONE
			  )
		  )
	  );
	$objPHPExcel->getDefaultStyle()->applyFromArray($abc);

	$BStyle = array(
	  'borders' => array(
		'outline' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);
	
	$styleArray = array(
	  'borders' => array(
		'allborders' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);

	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A5:A86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A81:A82')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A91:A93')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A94:A96')->applyFromArray($BStyle);
	
	//B
	
	$objPHPExcel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B5:B86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B81:B82')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B85:B86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B91:B93')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B94:B96')->applyFromArray($BStyle);
	
	//C
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C5:C86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C81:C82')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C85:C86')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C91:C93')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C94:C96')->applyFromArray($BStyle);
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B88:B89')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C88:C89')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('D88:D89')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('E88:E89')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('F88:F89')->applyFromArray($BStyle);
	
	
//------------

	
	$objPHPExcel->getActiveSheet()->getStyle('A13:'.$columnas[$c].'13')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A59:'.$columnas[$c].'59')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A60:'.$columnas[$c].'60')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A80:'.$columnas[$c].'80')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A97:'.$columnas[$c].'97')->applyFromArray($styleArray);

	
	
	//Cambio color Letra
	$blanco  = array(
    'font'  => array(
        'color' => array('rgb' => '000000'),
        
    ));
	
	
	

	
	//--------Blanco
	
	$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A13')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	
	
	$objPHPExcel->getActiveSheet()->getStyle('A24')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A42')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A59:A60')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A80:A82')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	
	//-----------Gris
	
	$objPHPExcel->getActiveSheet()->getStyle('A6:A7')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A9:A10')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A15:A16')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A18:A19')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A21:A22')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A26:A27')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A29:A30')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A32:A36')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A38:A41')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A44:A45')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A47:A48')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A50:A53')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A55:A57')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A64:A70')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A72:A74')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A77:A79')->applyFromArray($colorLetra);
	
		$objPHPExcel->getActiveSheet()->getStyle('B6:B7')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B9:B10')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B15:B16')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B18:B19')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B21:B22')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B26:B27')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B29:B30')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B32:B36')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B38:B41')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B44:B45')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B47:B48')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B50:B53')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B55:B57')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B64:B70')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B72:B74')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B77:B79')->applyFromArray($colorLetra);
	
	
		//Cambio Color Celdas
		$objPHPExcel->getActiveSheet()->getStyle('B88:F88')->applyFromArray(
					array(
					'fill' => array(
						'type' => PHPExcel_Style_Fill::FILL_SOLID,
							'color' => array('rgb' => 'F2F2F2'))));	
							
		$objPHPExcel->getActiveSheet()->getStyle('B89:F89')->applyFromArray(
					array(
					'fill' => array(
						'type' => PHPExcel_Style_Fill::FILL_SOLID,
							'color' => array('rgb' => 'F2F2F2'))));					
		
		$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '366092'))));			
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));	
		
			
		
		$objPHPExcel->getActiveSheet()->getStyle('A13')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));	

		$objPHPExcel->getActiveSheet()->getStyle('A24')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			
				
		$objPHPExcel->getActiveSheet()->getStyle('A42')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));		

		$objPHPExcel->getActiveSheet()->getStyle('A59:A60')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '366092'))));				
				
				
		$objPHPExcel->getActiveSheet()->getStyle('A80:A82')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));						
		
		$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			

		
		$objPHPExcel->getActiveSheet()->getStyle('B3:B86')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'DCE6F1'))));
			
		$objPHPExcel->getActiveSheet()->getStyle('B91:B97')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'DCE6F1'))));		
		

		
		//Negrilla

		
		$negrilla = array(
			'font' => array(
				'bold' => true
			)
		);
		
		$objPHPExcel->getActiveSheet()->getStyle('A13:'.$columnas[$c].'13')->applyFromArray(
					$negrilla);	
							
		$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A42:'.$columnas[$c].'42')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A59:'.$columnas[$c].'59')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A60:'.$columnas[$c].'60')->applyFromArray(
					$negrilla);
					
		$objPHPExcel->getActiveSheet()->getStyle('A80:'.$columnas[$c].'80')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A81:'.$columnas[$c].'81')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A82:'.$columnas[$c].'82')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A85:'.$columnas[$c].'85')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A86:'.$columnas[$c].'86')->applyFromArray(
					$negrilla);	
		
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A91:'.$columnas[$c].'91')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A92:'.$columnas[$c].'92')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A93:'.$columnas[$c].'93')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A94:'.$columnas[$c].'94')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A95:'.$columnas[$c].'95')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A96:'.$columnas[$c].'96')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A97:'.$columnas[$c].'97')->applyFromArray(
					$negrilla);	
		
		
		
				
		//Combinar Celdas
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A3:A4');
	
	$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:C1');
											
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('B3:B4');
								
			
		
		
		
		PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);		
	
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Flujo Caja');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReporteFlujoCaja.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='informesExcel.php';</script>";
	}
?>