<?php
    $conexion = new mysqli("localhost", "u517611460_ika", "Colombia2016*", "arbiter",3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	} 
	
	$Example=$_GET['dato']; 
	
	
	
	    $consulta = "SELECT
		DATE_FORMAT(FCT_C_FECHA,'%b/%y'),
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
		FCT_C_FLUJO_ACUMULADO,
		FCT_C_VPN,
		FCT_C_TIR_EA,
		FCT_C_TIR_EM,
		FCT_C_TIR_MOD_EA,
		FCT_C_TIR_MOD_EM
		FROM 	TB_C_FLUJO_CAJA_TERRENO WHERE FCT_C_CONS_ID='$Example'";

		$resultado = $conexion->query($consulta);
		$resultado1 = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../PHPExcel/Classes/PHPExcel.php';

		
		//	Change these values to select the Rendering library that you wish to use
//		and its directory location on your server
//$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
$rendererLibrary = 'mPDF5.7';
//$rendererLibrary = 'dompdf';
$rendererLibraryPath = dirname(__FILE__).'/' . $rendererLibrary;
		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("IKA") //Autor
							 ->setLastModifiedBy("IKA") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel Flujo Caja Terreno")
							 ->setSubject("Reporte Excel Flujo Caja Terreno")
							 ->setDescription("FLUJO DE CAJA TERRENO")
							 ->setKeywords("FLUJO DE CAJA TERRENO")
							 ->setCategory("Reporte excel");

		$tituloReporte = "FLUJO DE CAJA TERRENO  -  Miles de Pesos";
		$titulosColumnas = array('Valor de Adquisición (pagos)',
			'    Anticipo y otros pagos no asociados con ventas',
			'    Abonos pactados como % ventas',
			'Costo de Urbanismo (Materiales y Mano Obra)',
			'    Presupuesto (Jun-2014)',
			'    Incrementos ',
			'Costo de Infraestructura (Materiales y Mano Obra) - no aplica',
			'    Presupuesto (Jan-2014)',
			'    Incrementos ',
			'    Recuperacion de Costos ',
			'Gastos Imprevistos',
			'COSTO DIRECTO URBANISMO',
			'Honorarios Construccion',
			'Honorarios Interventoria',
			'Otros honorarios de terceros (diseños y otros)',
			'Licencia urbanismo y otros costos',
			'Gastos Legales',
			'    Hipoteca crédito compra terreno',
			'    Gastos Notariales y registro compra terreno',
			'    Impuesto Predial',
			'Gastos Financieros',
			'    Intereses crédito terreno',
			'    Corrección Monetaria (no es egreso de caja)',
			'    Otros costos crédito terreno',
			'    Impto Transacciones Financieras (ITF) ',
			'Otros Costos',
			'    OTROS 1',
			'    OTROS 2',
			'VALOR TERRENO URBANIZADO',
			'Otros Gastos',
			'    <<<descripcion concepto de gasto>>>',
			'    <<<descripcion concepto de gasto>>>',
			'VALOR TOTAL TERRENO',
			'TOTAL EGRESOS  sin corrección monetaria',
			'Desembolsos credito terreno ',
			'Abonos al crédito  (-)',
			'    Abonos programados credito terreno',
			'    Abonos s/ disponibilidad caja y para cancelación',
			'Otros Ingresos',
			'    <<<descripcion concepto de ingreso>>>',
			'    <<<descripcion concepto de ingreso>>>',
			'Traslados de Terreno a Sub-proyectos',
			'TOTAL INGRESOS',
			'FLUJO NETO CAJA ',
			'FLUJO ACUMULADO');
		//Combinar Celdas
		/*$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:AS1');
			*/		
		$c5=0;
					 $c6=0;
					 $c7=0;
					 $c8=0;
					 $c9=0;
					 $c10=0;
					 $c11=0;
					 $c12=0;
					 $c13=0;
					 $c14=0;
					 $c15=0;
					 $c16=0;
					 $c17=0;
					 $c18=0;
					 $c19=0;
					 $c20=0;
					 $c21=0;
					 $c22=0;
					 $c23=0;
					 $c24=0;
					 $c25=0;
					 $c26=0;
					 $c27=0;
					 $c28=0;
					 $c29=0;
					 $c30=0;
					 $c31=0;
					 $c32=0;
					 $c33=0;
					 $c34=0;
					 $c35=0;
					 $c36=0;
					 $c37=0;
					 $c38=0;
					 $c39=0;
					 $c40=0;
					 $c41=0;
					 $c42=0;
					 $c43=0;
					 $c44=0;
					 $c45=0;
					 $c46=0;
					 $c47=0;
					 $c48=0;
					 $c49=0;
				
						
		// Se agregan los titulos del reporte
		
		
		while ($fila1 = $resultado1->fetch_array()) {
		
					 $c5= $c5    +  $fila1['FCT_C_VALOR_ADQUISICION_PAGOS'];
					 $c6= $c6    +  $fila1['FCT_C_VAP_ANTICIPO_OTROS_PAGOS'];
					 $c7= $c7    +  $fila1['FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS'];
					 $c8= $c8    +  $fila1['FCT_C_COSTOS_URBANISMO'];
					 $c9= $c9    +  $fila1['FCT_C_CU_PRESUPUESTO'];
					 $c10= $c10    +  $fila1['FCT_C_CU_INCREMENTOS'];
					 $c11= $c11    +  $fila1['FCT_C_COSTOS_INFRAESTRUCTURA'];
					 $c12= $c12    +  $fila1['FCT_C_CI_PRESUPUESTO'];
					 $c13= $c13    +  $fila1['FCT_C_CI_INCREMENTOS'];
					 $c14= $c14    +  $fila1['FCT_C_CI_RECUPERACION_COSTOS'];
					 $c15= $c15    +  $fila1['FCT_C_GASTOS_IMPREVISTOS'];
					 $c16= $c16    +  $fila1['FCT_C_COSTO_DIRECTO_URBANISMO'];
					 $c17= $c17    +  $fila1['FCT_C_HONORARIOS_CONSTRUCCION'];
					 $c18= $c18    +  $fila1['FCT_C_HONORARIOS_INTERVENTORIA'];
					 $c19= $c19    +  $fila1['FCT_C_OTROS_HONORARIOS_TERCEROS'];
					 $c20= $c20    +  $fila1['FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS'];
					 $c21= $c21    +  $fila1['FCT_C_GASTOS_LEGALES'];
					 $c22= $c22    +  $fila1['FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO'];
					 $c23= $c23    +  $fila1['FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO'];
					 $c24= $c24    +  $fila1['FCT_C_GL_IMPUESTO_PREDIAL'];
					 $c25= $c25    +  $fila1['FCT_C_GASTOS_FINANCIEROS'];
					 $c26= $c26    +  $fila1['FCT_C_GF_INTERESES_CREDITO_TERRENO'];
					 $c27= $c27    +  $fila1['FCT_C_GF_CORRECION_MONETARIA'];
					 $c28= $c28    +  $fila1['FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO'];
					 $c29= $c29    +  $fila1['FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS'];
					 $c30= $c30    +  $fila1['FCT_C_OTROS_COSTOS'];
					 $c31= $c31    +  $fila1['FCT_C_OC_COSTOS1'];
					 $c32= $c32    +  $fila1['FCT_C_OC_COSTOS2'];
					 $c33= $c33    +  $fila1['FCT_C_VALOR_TERRENO_URBANIZADO'];
					 $c34= $c34    +  $fila1['FCT_C_OTROS_GASTOS'];
					 $c35= $c35    +  $fila1['FCT_C_OG_OTROS_GASTOS1'];
					 $c36= $c36    +  $fila1['FCT_C_OG_OTROS_GASTOS2'];
					 $c37= $c37    +  $fila1['FCT_C_VALOR_TOTAL_TERRENO'];
					 $c38= $c38    +  $fila1['FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA'];
					 $c39= $c39    +  $fila1['FCT_C_DESEMBOLSOS_CREDITO_TERRENO'];
					 $c40= $c40    +  $fila1['FCT_C_ABONOS_AL_CREDITO'];
					 $c41= $c41    +  $fila1['FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO'];
					 $c42= $c42    +  $fila1['FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION'];
					 $c43= $c43    +  $fila1['FCT_C_OTROS_INGRESOS'];
					 $c44= $c44    +  $fila1['FCT_C_OI_OTROS_INGRESOS1'];
					 $c45= $c45    +  $fila1['FCT_C_OI_OTROS_INGRESOS2'];
					 $c46= $c46    +  $fila1['FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS'];
					 $c47= $c47    +  $fila1['FCT_C_TOTAL_INGRESOS'];
					 $c48= $c48    +  $fila1['FCT_C_FLUJO_NETO_CAJA'];
					 $c49= $c49    +  $fila1['FCT_C_FLUJO_ACUMULADO'];
		}
		
		
		
		//Se agregan los datos 
		$i = 0;
		
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
				
		$c=6;
		
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setName('Arial');
		$objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
		
		
		while ($fila = $resultado->fetch_array()) {
				$objPHPExcel->setActiveSheetIndex($i) 
			
			
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
					 
					  ->setCellValue('A1',  'MODELO C')
					 ->setCellValue('B3',  'TOTALES')
					 ->setCellValue('C3',  '%')
					 ->setCellValue('C4',  'Ventas')
					 ->setCellValue('D3',  'Indicadores y P Relevante')
					 ->setCellValue('D4',  'Descripcion')
					 ->setCellValue('E4',  'Valor')
					 
					 
					 
					
					   ->setCellValue('B5', $c5)
					 ->setCellValue('B6', $c6)
					 ->setCellValue('B7', $c7)
					 ->setCellValue('B8', $c8)
					 ->setCellValue('B9', $c9)
					 ->setCellValue('B10', $c10)
					 ->setCellValue('B11', $c11)
					 ->setCellValue('B12', $c12)
					 ->setCellValue('B13', $c13)
					 ->setCellValue('B14', $c14)
					 ->setCellValue('B15', $c15)
					 ->setCellValue('B16', $c16)
					 ->setCellValue('B17', $c17)
					 ->setCellValue('B18', $c18)
					 ->setCellValue('B19', $c19)
					 ->setCellValue('B20', $c20)
					 ->setCellValue('B21', $c21)
					 ->setCellValue('B22', $c22)
					 ->setCellValue('B23', $c23)
					 ->setCellValue('B24', $c24)
					 ->setCellValue('B25', $c25)
					 ->setCellValue('B26', $c26)
					 ->setCellValue('B27', $c27)
					 ->setCellValue('B28', $c28)
					 ->setCellValue('B29', $c29)
					 ->setCellValue('B30', $c30)
					 ->setCellValue('B31', $c31)
					 ->setCellValue('B32', $c32)
					 ->setCellValue('B33', $c33)
					 ->setCellValue('B34', $c34)
					 ->setCellValue('B35', $c35)
					 ->setCellValue('B36', $c36)
					 ->setCellValue('B37', $c37)
					 ->setCellValue('B38', $c38)
					 ->setCellValue('B39', $c39)
					 ->setCellValue('B40', $c40)
					 ->setCellValue('B41', $c41)
					 ->setCellValue('B42', $c42)
					 ->setCellValue('B43', $c43)
					 ->setCellValue('B44', $c44)
					 ->setCellValue('B45', $c45)
					 ->setCellValue('B46', $c46)
					 ->setCellValue('B47', $c47)
					 ->setCellValue('B48', $c48)
					 ->setCellValue('B49', $c49)
				
					 ->setCellValue($columnas[$c].'3',  $fila["DATE_FORMAT(FCT_C_FECHA,'%b/%y')"])			
				     ->setCellValue($columnas[$c].'5',  $fila['FCT_C_VALOR_ADQUISICION_PAGOS'])
					 ->setCellValue($columnas[$c].'6',  $fila['FCT_C_VAP_ANTICIPO_OTROS_PAGOS'])
					 ->setCellValue($columnas[$c].'7',  $fila['FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS'])
					 ->setCellValue($columnas[$c].'8',  $fila['FCT_C_COSTOS_URBANISMO'])
					 ->setCellValue($columnas[$c].'9',  $fila['FCT_C_CU_PRESUPUESTO'])
					 ->setCellValue($columnas[$c].'10',  $fila['FCT_C_CU_INCREMENTOS'])
					 ->setCellValue($columnas[$c].'11',  $fila['FCT_C_COSTOS_INFRAESTRUCTURA'])
					 ->setCellValue($columnas[$c].'12',  $fila['FCT_C_CI_PRESUPUESTO'])
					 ->setCellValue($columnas[$c].'13',  $fila['FCT_C_CI_INCREMENTOS'])
					 ->setCellValue($columnas[$c].'14',  $fila['FCT_C_CI_RECUPERACION_COSTOS'])
					 ->setCellValue($columnas[$c].'15',  $fila['FCT_C_GASTOS_IMPREVISTOS'])
					 ->setCellValue($columnas[$c].'16',  $fila['FCT_C_COSTO_DIRECTO_URBANISMO'])
					 ->setCellValue($columnas[$c].'17',  $fila['FCT_C_HONORARIOS_CONSTRUCCION'])
					 ->setCellValue($columnas[$c].'18',  $fila['FCT_C_HONORARIOS_INTERVENTORIA'])
					 ->setCellValue($columnas[$c].'19',  $fila['FCT_C_OTROS_HONORARIOS_TERCEROS'])
					 ->setCellValue($columnas[$c].'20',  $fila['FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS'])
					 ->setCellValue($columnas[$c].'21',  $fila['FCT_C_GASTOS_LEGALES'])
					 ->setCellValue($columnas[$c].'22',  $fila['FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO'])
					 ->setCellValue($columnas[$c].'23',  $fila['FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO'])
					 ->setCellValue($columnas[$c].'24',  $fila['FCT_C_GL_IMPUESTO_PREDIAL'])
					 ->setCellValue($columnas[$c].'25',  $fila['FCT_C_GASTOS_FINANCIEROS'])
					 ->setCellValue($columnas[$c].'26',  $fila['FCT_C_GF_INTERESES_CREDITO_TERRENO'])
					 ->setCellValue($columnas[$c].'27',  $fila['FCT_C_GF_CORRECION_MONETARIA'])
					 ->setCellValue($columnas[$c].'28',  $fila['FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO'])
					 ->setCellValue($columnas[$c].'29',  $fila['FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS'])
					 ->setCellValue($columnas[$c].'30',  $fila['FCT_C_OTROS_COSTOS'])
					 ->setCellValue($columnas[$c].'31',  $fila['FCT_C_OC_COSTOS1'])
					 ->setCellValue($columnas[$c].'32',  $fila['FCT_C_OC_COSTOS2'])
					 ->setCellValue($columnas[$c].'33',  $fila['FCT_C_VALOR_TERRENO_URBANIZADO'])
					 ->setCellValue($columnas[$c].'34',  $fila['FCT_C_OTROS_GASTOS'])
					 ->setCellValue($columnas[$c].'35',  $fila['FCT_C_OG_OTROS_GASTOS1'])
					 ->setCellValue($columnas[$c].'36',  $fila['FCT_C_OG_OTROS_GASTOS2'])
					 ->setCellValue($columnas[$c].'37',  $fila['FCT_C_VALOR_TOTAL_TERRENO'])
					 ->setCellValue($columnas[$c].'38',  $fila['FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA'])
					 ->setCellValue($columnas[$c].'39',  $fila['FCT_C_DESEMBOLSOS_CREDITO_TERRENO'])
					 ->setCellValue($columnas[$c].'40',  $fila['FCT_C_ABONOS_AL_CREDITO'])
					 ->setCellValue($columnas[$c].'41',  $fila['FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO'])
					 ->setCellValue($columnas[$c].'42',  $fila['FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION'])
					 ->setCellValue($columnas[$c].'43',  $fila['FCT_C_OTROS_INGRESOS'])
					 ->setCellValue($columnas[$c].'44',  $fila['FCT_C_OI_OTROS_INGRESOS1'])
					 ->setCellValue($columnas[$c].'45',  $fila['FCT_C_OI_OTROS_INGRESOS2'])
					 ->setCellValue($columnas[$c].'46',  $fila['FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS'])
					 ->setCellValue($columnas[$c].'47',  $fila['FCT_C_TOTAL_INGRESOS'])
					 ->setCellValue($columnas[$c].'48',  $fila['FCT_C_FLUJO_NETO_CAJA'])
					 ->setCellValue($columnas[$c].'49',  $fila['FCT_C_FLUJO_ACUMULADO'])
					 ->setCellValue('B51', 'VPN')
					 ->setCellValue('B52',  $fila['FCT_C_VPN'])
					 ->setCellValue('C51', 'TIR (ea)')
					 ->setCellValue('C52',  $fila['FCT_C_TIR_EA'])
					 ->setCellValue('D51', 'TIR(em)')
					 ->setCellValue('D52',  $fila['FCT_C_TIR_EM'])
					 ->setCellValue('E51', 'TIR mod(ea)')
					 ->setCellValue('E52',  $fila['FCT_C_TIR_MOD_EA'])
					 ->setCellValue('G51', 'TIR mod(em)')
					 ->setCellValue('G52',  $fila['FCT_C_TIR_MOD_EM']) ;
					
					
					//Color Gris
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
					array(
					'fill' => array(
						'type' => PHPExcel_Style_Fill::FILL_SOLID,
							'color' => array('rgb' => 'F2F2F2'))));	
							
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'49')->applyFromArray(
								array('borders' => array(
									'allborders' => array(
									'style' => PHPExcel_Style_Border::BORDER_THIN
									))));
				//Formato Separador con comas
				  $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'49')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
					
				 $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
				 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
			
			
			$objPHPExcel->getActiveSheet()->getStyle('B5:B49')
    ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
	
	
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
							
							
							
							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setWidth(16);

	//Bordes
	
	$styleArray = array(
	  'borders' => array(
		'allborders' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);


	$objPHPExcel->getActiveSheet()->getStyle('A3:A49')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B3:B49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B51:F51')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B52:F52')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('D3:D49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('E3:E49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('G51:G52')->applyFromArray($styleArray);
	
	//Cambio color Letra
	$blanco  = array(
    'font'  => array(
        'color' => array('rgb' => '000000'),
        
    ));
	
	
	
	$colorLetra = array(
    'font'  => array(
        'color' => array('rgb' => '918080'),
        
    ));
	
	//--------Blanco
	
	$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A16')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A33')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A37:A38')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A47:A49')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	//-----------Gris
	
	$objPHPExcel->getActiveSheet()->getStyle('A6:A7')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A9:A10')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A12:A14')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A22:A24')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A26:A29')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A31:A32')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A35:A36')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A41:A42')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A44:A45')->applyFromArray($colorLetra);
	
	
	
	
		//Cambio Color Celdas
		$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));	
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A16')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));	

		$objPHPExcel->getActiveSheet()->getStyle('A33')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			
				
		$objPHPExcel->getActiveSheet()->getStyle('A37:A38')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));		

		$objPHPExcel->getActiveSheet()->getStyle('A47:A49')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));						
			
		$objPHPExcel->getActiveSheet()->getStyle('B3:B49')->applyFromArray(
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
		
	
	$objPHPExcel->getActiveSheet()->getStyle('A5:'.$columnas[$c].'5')->applyFromArray(
      $negrilla);	
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A8:'.$columnas[$c].'8')->applyFromArray(
       $negrilla);			
		
		
		$objPHPExcel->getActiveSheet()->getStyle('A11:'.$columnas[$c].'11')->applyFromArray(
        $negrilla);	

		$objPHPExcel->getActiveSheet()->getStyle('A19:'.$columnas[$c].'19')->applyFromArray(
       $negrilla);			
				
		$objPHPExcel->getActiveSheet()->getStyle('A20:'.$columnas[$c].'20')->applyFromArray(
        $negrilla);		

		$objPHPExcel->getActiveSheet()->getStyle('A21:'.$columnas[$c].'21')->applyFromArray(
       $negrilla);						
			
		$objPHPExcel->getActiveSheet()->getStyle('A25:'.$columnas[$c].'25')->applyFromArray(
       $negrilla);
	   
	   	$objPHPExcel->getActiveSheet()->getStyle('A30:'.$columnas[$c].'30')->applyFromArray(
       $negrilla);
	   
	   	$objPHPExcel->getActiveSheet()->getStyle('A34:'.$columnas[$c].'34')->applyFromArray(
       $negrilla);
	   
	   	$objPHPExcel->getActiveSheet()->getStyle('A43:'.$columnas[$c].'43')->applyFromArray(
       $negrilla);
	   
	   	$objPHPExcel->getActiveSheet()->getStyle('A46:'.$columnas[$c].'46')->applyFromArray(
       $negrilla);
				
		//Combinar Celdas
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A3:A4');
					
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('D3:E3');			
					
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A1:C1');
											
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('B3:B4');
	
								$c++;
			if($c==12){ 
			$c=4;		
			$i++;
		$objWorkSheet = $objPHPExcel->createSheet($i);
			}
			
			
			}
			
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Flujo Caja Terreno');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
			if (!PHPExcel_Settings::setPdfRenderer(
		$rendererName,
		$rendererLibraryPath
	)) {
	die(
		'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		'<br />' .
		'at the top of this script as appropriate for your directory structure'
	);
}
		
		
		
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment;filename="FlujoCajaTerreno.pdf"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
		$objWriter->writeAllSheets();
		$objWriter->save('php://output');
		exit;
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='informesPDF.php';</script>";
	}
?>