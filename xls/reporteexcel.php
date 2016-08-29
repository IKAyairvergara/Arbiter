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
		FROM 	TB_C_FLUJO_CAJA_TERRENO";

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
        		    ->mergeCells('A1:AS3');
						
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
            		 ->setCellValue('A'.$i,  $fila['Valor de Adquisición (pagos)'])
					 ->setCellValue('B'.$i,  $fila['Anticipo y otros pagos no asociados con ventas'])
					 ->setCellValue('C'.$i,  $fila['Abonos pactados como % ventas'])
					 ->setCellValue('D'.$i,  $fila['Costo de Urbanismo (Materiales y Mano Obra)'])
					 ->setCellValue('E'.$i,  $fila['Presupuesto (Jun-2014)'])
					 ->setCellValue('F'.$i,  $fila['Incrementos '])
					 ->setCellValue('G'.$i,  $fila['Costo de Infraestructura (Materiales y Mano Obra) - no aplica'])
					 ->setCellValue('H'.$i,  $fila['Presupuesto (Jan-2014)'])
					 ->setCellValue('I'.$i,  $fila['Incrementos '])
					 ->setCellValue('J'.$i,  $fila['Recuperacion de Costos '])
					 ->setCellValue('K'.$i,  $fila['Gastos Imprevistos'])
					 ->setCellValue('L'.$i,  $fila['COSTO DIRECTO URBANISMO'])
					 ->setCellValue('M'.$i,  $fila['Honorarios Construccion'])
					 ->setCellValue('N'.$i,  $fila['Honorarios Interventoria'])
					 ->setCellValue('O'.$i,  $fila['Otros honorarios de terceros (diseños y otros)'])
					 ->setCellValue('P'.$i,  $fila['Licencia urbanismo y otros costos'])
					 ->setCellValue('Q'.$i,  $fila['Gastos Legales'])
					 ->setCellValue('R'.$i,  $fila['Hipoteca crédito compra terreno'])
					 ->setCellValue('S'.$i,  $fila['Gastos Notariales y registro compra terreno'])
					 ->setCellValue('T'.$i,  $fila['Impuesto Predial'])
					 ->setCellValue('U'.$i,  $fila['Gastos Financieros'])
					 ->setCellValue('V'.$i,  $fila['Intereses crédito terreno'])
					 ->setCellValue('W'.$i,  $fila['Corrección Monetaria (no es egreso de caja)'])
					 ->setCellValue('X'.$i,  $fila['Otros costos crédito terreno'])
					 ->setCellValue('Y'.$i,  $fila['Impto Transacciones Financieras (ITF) '])
					 ->setCellValue('Z'.$i,  $fila['Otros Costos'])
					 ->setCellValue('AA'.$i,  $fila['OTROS 1'])
					 ->setCellValue('AB'.$i,  $fila['OTROS 2'])
					 ->setCellValue('AC'.$i,  $fila['VALOR TERRENO URBANIZADO'])
					 ->setCellValue('AD'.$i,  $fila['Otros Gastos'])
					 ->setCellValue('AE'.$i,  $fila['<<<descripcion concepto de gasto>>>'])
					 ->setCellValue('AF'.$i,  $fila['<<<descripcion concepto de gasto>>>'])
					 ->setCellValue('AG'.$i,  $fila['VALOR TOTAL TERRENO'])
					 ->setCellValue('AH'.$i,  $fila['TOTAL EGRESOS  sin corrección monetaria'])
					 ->setCellValue('AI'.$i,  $fila['Desembolsos credito terreno '])
					 ->setCellValue('AJ'.$i,  $fila['Abonos al crédito  (-)'])
					 ->setCellValue('AK'.$i,  $fila['Abonos programados credito terreno'])
					 ->setCellValue('AL'.$i,  $fila['Abonos s/ disponibilidad caja y para cancelación'])
					 ->setCellValue('AM'.$i,  $fila['Otros Ingresos'])
					 ->setCellValue('AN'.$i,  $fila['<<<descripcion concepto de ingreso>>>'])
					 ->setCellValue('AO'.$i,  $fila['<<<descripcion concepto de ingreso>>>'])
					 ->setCellValue('AP'.$i,  $fila['Traslados de Terreno a Sub-proyectos'])
					 ->setCellValue('AQ'.$i,  $fila['TOTAL INGRESOS'])
					 ->setCellValue('AR'.$i,  $fila['FLUJO NETO CAJA '])
					 ->setCellValue('AS'.$i,  utf8_encode($fila['FLUJO ACUMULADO']));
					 $i++;
			}
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF220835')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 90,
        		'startcolor' => array(
            		'rgb' => 'c47cf2'
        		),
        		'endcolor'   => array(
            		'argb' => 'FF431a5d'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFd9b7f4')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:AS1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:AS3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:AS".($i-1));
				
		for($i = 'A'; $i <= 'AS'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
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