<?php
    $conexion = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model",3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	//$consulta = "SELECT concat(paterno,' ', materno, ' ' , nombre) AS alumno, fechanac, sexo, carrera FROM alumno INNER JOIN carrera ON alumno.idcarrera = carrera.idcarrera ORDER BY carrera, nombre";
$consulta = "SELECT
		FCT_C_VALOR_ADQUISICION_PAGOS,
		FCT_C_VAP_ANTICIPO_OTROS_PAGOS,
		FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS,
		FCT_C_COSTOS_URBANISMO,
		FCT_C_CU_PRESUPUESTO,
		FCT_C_CU_INCREMENTOS,
		FCT_C_COSTOS_INFRAESTRUCTURA,
		FCT_C_CI_PRESUPUESTO,
		FCT_C_CI_INCREMENTOS,
		FCT_C_CI_RECUPERACION_COSTOS,
		FCT_C_GASTOS_IMPREVISTOS,
		FCT_C_COSTO_DIRECTO_URBANISMO,
		FCT_C_HONORARIOS_CONSTRUCCION,
		FCT_C_HONORARIOS_INTERVENTORIA,
		FCT_C_OTROS_HONORARIOS_TERCEROS,
		FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS,
		FCT_C_GASTOS_LEGALES,
		FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO,
		FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO,
		FCT_C_GL_IMPUESTO_PREDIAL,
		FCT_C_GASTOS_FINANCIEROS,
		FCT_C_GF_INTERESES_CREDITO_TERRENO,
		FCT_C_GF_CORRECION_MONETARIA,
		FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO,
		FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS,
		FCT_C_OTROS_COSTOS,
		FCT_C_OC_COSTOS1,
		FCT_C_OC_COSTOS2,
		FCT_C_VALOR_TERRENO_URBANIZADO,
		FCT_C_OTROS_GASTOS,
		FCT_C_OG_OTROS_GASTOS1,
		FCT_C_OG_OTROS_GASTOS2,
		FCT_C_VALOR_TOTAL_TERRENO,
		FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA,
		FCT_C_DESEMBOLSOS_CREDITO_TERRENO,
		FCT_C_ABONOS_AL_CREDITO,
		FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO,
		FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION,
		FCT_C_OTROS_INGRESOS,
		FCT_C_OI_OTROS_INGRESOS1,
		FCT_C_OI_OTROS_INGRESOS2,
		FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS,
		FCT_C_TOTAL_INGRESOS,
		FCT_C_FLUJO_NETO_CAJA,
		FCT_C_FLUJO_ACUMULADO
		FROM 	tb_c_flujo_caja_terreno";

	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once 'lib/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Codedrinks") //Autor
							 ->setLastModifiedBy("Codedrinks") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel con PHP y MySQL")
							 ->setSubject("Reporte Excel con PHP y MySQL")
							 ->setDescription("FLUJO DE CAJA TERRENO")
							 ->setKeywords("FLUJO DE CAJA TERRENO")
							 ->setCategory("Reporte excel");

		$tituloReporte = "FLUJO DE CAJA TERRENO  -  Miles de Pesos";
		$titulosColumnas = array('Valor de Adquisición (pagos)',
			'Anticipo y otros pagos no asociados con ventas',
			'Abonos pactados como % ventas',
			'Costo de Urbanismo (Materiales y Mano Obra)',
			'Presupuesto (Jun-2014)',
			'Incrementos ',
			'Costo de Infraestructura (Materiales y Mano Obra) - no aplica',
			'Presupuesto (Jan-2014)',
			'Incrementos ',
			'Recuperacion de Costos ',
			'Gastos Imprevistos',
			'COSTO DIRECTO URBANISMO',
			'Honorarios Construccion',
			'Honorarios Interventoria',
			'Otros honorarios de terceros (diseños y otros)',
			'Licencia urbanismo y otros costos',
			'Gastos Legales',
			'Hipoteca crédito compra terreno',
			'Gastos Notariales y registro compra terreno',
			'Impuesto Predial',
			'Gastos Financieros',
			'Intereses crédito terreno',
			'Corrección Monetaria (no es egreso de caja)',
			'Otros costos crédito terreno',
			'Impto Transacciones Financieras (ITF) ',
			'Otros Costos',
			'OTROS 1',
			'OTROS 2',
			'VALOR TERRENO URBANIZADO',
			'Otros Gastos',
			'<<<descripcion concepto de gasto>>>',
			'<<<descripcion concepto de gasto>>>',
			'VALOR TOTAL TERRENO',
			'TOTAL EGRESOS  sin corrección monetaria',
			'Desembolsos credito terreno ',
			'Abonos al crédito  (-)',
			'Abonos programados credito terreno',
			'Abonos s/ disponibilidad caja y para cancelación',
			'Otros Ingresos',
			'<<<descripcion concepto de ingreso>>>',
			'<<<descripcion concepto de ingreso>>>',
			'Traslados de Terreno a Sub-proyectos',
			'TOTAL INGRESOS',
			'FLUJO NETO CAJA ',
			'FLUJO ACUMULADO');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:AS1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		     ->setCellValue('A3',  $titulosColumnas[0])
					 ->setCellValue('B3',  $titulosColumnas[1])
					 ->setCellValue('C3',  $titulosColumnas[2])
					 ->setCellValue('D3',  $titulosColumnas[3])
					 ->setCellValue('E3',  $titulosColumnas[4])
					 ->setCellValue('F3',  $titulosColumnas[5])
					 ->setCellValue('G3',  $titulosColumnas[6])
					 ->setCellValue('H3',  $titulosColumnas[7])
					 ->setCellValue('I3',  $titulosColumnas[8])
					 ->setCellValue('J3',  $titulosColumnas[9])
					 ->setCellValue('K3',  $titulosColumnas[10])
					 ->setCellValue('L3',  $titulosColumnas[11])
					 ->setCellValue('M3',  $titulosColumnas[12])
					 ->setCellValue('N3',  $titulosColumnas[13])
					 ->setCellValue('O3',  $titulosColumnas[14])
					 ->setCellValue('P3',  $titulosColumnas[15])
					 ->setCellValue('Q3',  $titulosColumnas[16])
					 ->setCellValue('R3',  $titulosColumnas[17])
					 ->setCellValue('S3',  $titulosColumnas[18])
					 ->setCellValue('T3',  $titulosColumnas[19])
					 ->setCellValue('U3',  $titulosColumnas[20])
					 ->setCellValue('V3',  $titulosColumnas[21])
					 ->setCellValue('W3',  $titulosColumnas[22])
					 ->setCellValue('X3',  $titulosColumnas[23])
					 ->setCellValue('Y3',  $titulosColumnas[24])
					 ->setCellValue('Z3',  $titulosColumnas[25])
					 ->setCellValue('AA3',  $titulosColumnas[26])
					 ->setCellValue('AB3',  $titulosColumnas[27])
					 ->setCellValue('AC3',  $titulosColumnas[28])
					 ->setCellValue('AD3',  $titulosColumnas[29])
					 ->setCellValue('AE3',  $titulosColumnas[30])
					 ->setCellValue('AF3',  $titulosColumnas[31])
					 ->setCellValue('AG3',  $titulosColumnas[32])
					 ->setCellValue('AH3',  $titulosColumnas[33])
					 ->setCellValue('AI3',  $titulosColumnas[34])
					 ->setCellValue('AJ3',  $titulosColumnas[35])
					 ->setCellValue('AK3',  $titulosColumnas[36])
					 ->setCellValue('AL3',  $titulosColumnas[37])
					 ->setCellValue('AM3',  $titulosColumnas[38])
					 ->setCellValue('AN3',  $titulosColumnas[39])
					 ->setCellValue('AO3',  $titulosColumnas[40])
					 ->setCellValue('AP3',  $titulosColumnas[41])
					 ->setCellValue('AQ3',  $titulosColumnas[42])
					 ->setCellValue('AR3',  $titulosColumnas[43])
					 ->setCellValue('AS3',  $titulosColumnas[44]);
		
		//Se agregan los datos 
		$i = 4;
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)  
					 ->setCellValue('A'.$i,  $fila['FCT_C_VALOR_ADQUISICION_PAGOS'])
					 ->setCellValue('B'.$i,  $fila['FCT_C_VAP_ANTICIPO_OTROS_PAGOS'])
					 ->setCellValue('C'.$i,  $fila['FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS'])
					 ->setCellValue('D'.$i,  $fila['FCT_C_COSTOS_URBANISMO'])
					 ->setCellValue('E'.$i,  $fila['FCT_C_CU_PRESUPUESTO'])
					 ->setCellValue('F'.$i,  $fila['FCT_C_CU_INCREMENTOS'])
					 ->setCellValue('G'.$i,  $fila['FCT_C_COSTOS_INFRAESTRUCTURA'])
					 ->setCellValue('H'.$i,  $fila['FCT_C_CI_PRESUPUESTO'])
					 ->setCellValue('I'.$i,  $fila['FCT_C_CI_INCREMENTOS'])
					 ->setCellValue('J'.$i,  $fila['FCT_C_CI_RECUPERACION_COSTOS'])
					 ->setCellValue('K'.$i,  $fila['FCT_C_GASTOS_IMPREVISTOS'])
					 ->setCellValue('L'.$i,  $fila['FCT_C_COSTO_DIRECTO_URBANISMO'])
					 ->setCellValue('M'.$i,  $fila['FCT_C_HONORARIOS_CONSTRUCCION'])
					 ->setCellValue('N'.$i,  $fila['FCT_C_HONORARIOS_INTERVENTORIA'])
					 ->setCellValue('O'.$i,  $fila['FCT_C_OTROS_HONORARIOS_TERCEROS'])
					 ->setCellValue('P'.$i,  $fila['FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS'])
					 ->setCellValue('Q'.$i,  $fila['FCT_C_GASTOS_LEGALES'])
					 ->setCellValue('R'.$i,  $fila['FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO'])
					 ->setCellValue('S'.$i,  $fila['FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO'])
					 ->setCellValue('T'.$i,  $fila['FCT_C_GL_IMPUESTO_PREDIAL'])
					 ->setCellValue('U'.$i,  $fila['FCT_C_GASTOS_FINANCIEROS'])
					 ->setCellValue('V'.$i,  $fila['FCT_C_GF_INTERESES_CREDITO_TERRENO'])
					 ->setCellValue('W'.$i,  $fila['FCT_C_GF_CORRECION_MONETARIA'])
					 ->setCellValue('X'.$i,  $fila['FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO'])
					 ->setCellValue('Y'.$i,  $fila['FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS'])
					 ->setCellValue('Z'.$i,  $fila['FCT_C_OTROS_COSTOS'])
					 ->setCellValue('AA'.$i,  $fila['FCT_C_OC_COSTOS1'])
					 ->setCellValue('AB'.$i,  $fila['FCT_C_OC_COSTOS2'])
					 ->setCellValue('AC'.$i,  $fila['FCT_C_VALOR_TERRENO_URBANIZADO'])
					 ->setCellValue('AD'.$i,  $fila['FCT_C_OTROS_GASTOS'])
					 ->setCellValue('AE'.$i,  $fila['FCT_C_OG_OTROS_GASTOS1'])
					 ->setCellValue('AF'.$i,  $fila['FCT_C_OG_OTROS_GASTOS2'])
					 ->setCellValue('AG'.$i,  $fila['FCT_C_VALOR_TOTAL_TERRENO'])
					 ->setCellValue('AH'.$i,  $fila['FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA'])
					 ->setCellValue('AI'.$i,  $fila['FCT_C_DESEMBOLSOS_CREDITO_TERRENO'])
					 ->setCellValue('AJ'.$i,  $fila['FCT_C_ABONOS_AL_CREDITO'])
					 ->setCellValue('AK'.$i,  $fila['FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO'])
					 ->setCellValue('AL'.$i,  $fila['FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION'])
					 ->setCellValue('AM'.$i,  $fila['FCT_C_OTROS_INGRESOS'])
					 ->setCellValue('AN'.$i,  $fila['FCT_C_OI_OTROS_INGRESOS1'])
					 ->setCellValue('AO'.$i,  $fila['FCT_C_OI_OTROS_INGRESOS2'])
					 ->setCellValue('AP'.$i,  $fila['FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS'])
					 ->setCellValue('AQ'.$i,  $fila['FCT_C_TOTAL_INGRESOS'])
					 ->setCellValue('AR'.$i,  $fila['FCT_C_FLUJO_NETO_CAJA'])
					 ->setCellValue('AS'.$i,  $fila['FCT_C_FLUJO_ACUMULADO']);
					 $i++;
			}
		
		
				
	
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('flujo');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Reportedealumnos.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>