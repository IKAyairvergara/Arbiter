<?php
include "../../php/ABT-T000-conexion-U.php";



include "ABT-T063-selects-D.php";

$cons="SELECT RES_C_VENTAS_BRUTAS,RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO FROM tb_c_resumen WHERE RES_C_CONS_ID = '$Example'"; 



$resultado = $conexion->query($consulta_flujo_caja_terreno);


if($resultado->num_rows > 0){
	
	
	
	
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
        		    ->setCellValue('A49',  $titulosColumnas[44]);
        		    
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
        		    	'IA','IB','IC','ID','IE','IF','IG','IH','II','IJ','IK','IL','IM','IN','IO','IP','IQ','IR','IS','IT','IU','IV','IW','IX','IY','IZ',
        		    	'JA','JB','JC','JD','JE','JF','JG','JH','JI','JJ','JK','JL','JM','JN','JO','JP','JQ','JR','JS','JT','JU','JV','JW','JX','JY','JZ',
        		    	'KA','KB','KC','KD','KE','KF','KG','KH','KI','KJ','KK','KL','KM','KN','KO','KP','KQ','KR','KS','KT','KU','KV','KW','KX','KY','KZ',
        		    	'LA','LB','LC','LD','LE','LF','LG','LH','LI','LJ','LK','LL','LM','LN','LO','LP','LQ','LR','LS','LT','LU','LV','LW','LX','LY','LZ');		
        		    $c=6;
        		    
                          
        		    
		// RESUMEN
        		    
        		    $consulta1= $mysqli->query($cons); 
        		    if ($consulta1) {
        		    	while ($fila1 = $consulta1->fetch_row()) {  
        		    		$ven_bru = $fila1[0];
        		    		$util_ter= $fila1[1];
        		    	}
        		    }
        		    else{
        		    	$ven_bru = 0;
        		    	$util_ter = 0;
        		    }
        		    
        		    
        		    
        		    $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setName('Arial');
        		    $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
        		    while ($fila = $resultado->fetch_array()) {
        		    	$objPHPExcel->setActiveSheetIndex(0) 
        		    	->setCellValue($columnas[$c].'3',  $fila["DATE_FORMAT(MAX(FCT_C_FECHA),'%b/%y')"])			
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
        		    	->setCellValue('B51', 'VPN');
        		    	
        		    	
        		    	
					//Color Gris
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
        		    		array(
        		    			'fill' => array(
        		    				'type' => PHPExcel_Style_Fill::FILL_SOLID,
        		    				'color' => array('rgb' => 'F2F2F2'))));	
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'4')->applyFromArray($BStyle);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'49')->applyFromArray($BStyle);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'4')->applyFromArray($BStyle);

        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'6:'.$columnas[$c].'7')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'9:'.$columnas[$c].'10')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'12:'.$columnas[$c].'14')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'22:'.$columnas[$c].'24')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'26:'.$columnas[$c].'29')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'31:'.$columnas[$c].'32')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'35:'.$columnas[$c].'36')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'41:'.$columnas[$c].'42')->applyFromArray($colorLetra);
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'44:'.$columnas[$c].'45')->applyFromArray($colorLetra);
        		    	
        		    	
				//Formato Separador con comas
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'49')
        		    	->getNumberFormat()->setFormatCode('#,##0');
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
        		    	->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
        		    	
        		    	
        		    	$fct_fecha=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($columnas[$c], 3)->getValue();
        		    	
        		    	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'2')
        		    	->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
        		    	
        		    	
        		    	$i++;
        		    	$c++;

        		    	$objPHPExcel->setActiveSheetIndex(0) 
                              ->setCellValue('A1',  'MODELO C')
                              ->setCellValue('B3',  'TOTALES')
                              
                              ->setCellValue('D5',  'Vr/M2 Util Terreno')
                              ->setCellValue('D5',  'Vr/M2 Util Terreno')
                              ->setCellValue('E5', '=B5/'.$util_ter)
                              
                              
                              ->setCellValue('D8',  'Vr/M2 Util urbanismo')
                              ->setCellValue('E8', '=B8/'.$util_ter)
                              
                              ->setCellValue('D33',  'Vr/M2 Util Terreno Urbanizado')
                              ->setCellValue('E33', '=B33/'.$util_ter)
                              
                              ->setCellValue('C3',  '%')
                              ->setCellValue('C4',  'Ventas')
                              ->setCellValue('D3',  'Indicadores y P Relevante')
                              ->setCellValue('D4',  'Descripcion')
                              ->setCellValue('E4',  'Valor')
					 // ->setCellValue('E1',  $Example)
                              ->setCellValue('B51', 'VPN')
                              ->setCellValue('B52', '=NPV('.$fila['CONS_IND_VALOR_REE'].'%,G48:PXD48,G2:PXD2)')
                              ->setCellValue('C51', 'TIR (ea)')
                              ->setCellValue('C52', '=XIRR(G48:PXD48,G2:PXD2)')
                              ->setCellValue('D51', 'TIR(em)')
                              
                              ->setCellValue('D52', '=C52/'.$fila['CONS_PER'])
					 // ->setCellValue('C53', '=C52/'.$periodo)
                              ->setCellValue('E51', 'TIR mod(ea)') 
                              ->setCellValue('E52', '=MIRR(E48:XFD48,'.$fila['CONS_IND_VALOR_REE'].'%,0)')
                              
                              ->setCellValue('G51', 'TIR mod(em)')
                              ->setCellValue('G52', '=E52/'.$fila['CONS_PER'])
                              ;
                              
                      }
                      
                      
                      
                      
                      
				// $fct=$objPHPExcel->getActiveSheet()->getCell(C52)->getValue();
                      
				// $valt=$fct/12;
                      
			// $objPHPExcel->setActiveSheetIndex(0) 
					 // ->setCellValue('D52',  $valt);
                      
                      
                      $objPHPExcel->setActiveSheetIndex(0) 
                      
                      ->setCellValue('B5', '=SUM(F5:'.$columnas[$c].'5)')
                      ->setCellValue('B6', '=SUM(F6:'.$columnas[$c].'6)')
                      ->setCellValue('B7', '=SUM(F7:'.$columnas[$c].'7)')
                      ->setCellValue('B8', '=SUM(F8:'.$columnas[$c].'8)')
                      ->setCellValue('B9', '=SUM(F9:'.$columnas[$c].'9)')
                      ->setCellValue('B10', '=SUM(F10:'.$columnas[$c].'10)')
                      ->setCellValue('B11', '=SUM(F11:'.$columnas[$c].'11)')
                      ->setCellValue('B12', '=SUM(F12:'.$columnas[$c].'12)')
                      ->setCellValue('B13', '=SUM(F13:'.$columnas[$c].'13)')
                      ->setCellValue('B14', '=SUM(F14:'.$columnas[$c].'14)')
                      ->setCellValue('B15', '=SUM(F15:'.$columnas[$c].'15)')
                      ->setCellValue('B16', '=SUM(F16:'.$columnas[$c].'16)')
                      ->setCellValue('B17', '=SUM(F17:'.$columnas[$c].'17)')
                      ->setCellValue('B18', '=SUM(F18:'.$columnas[$c].'18)')
                      ->setCellValue('B19', '=SUM(F19:'.$columnas[$c].'19)')
                      ->setCellValue('B20', '=SUM(F20:'.$columnas[$c].'20)')
                      ->setCellValue('B21', '=SUM(F21:'.$columnas[$c].'21)')
                      ->setCellValue('B22', '=SUM(F22:'.$columnas[$c].'22)')
                      ->setCellValue('B23', '=SUM(F23:'.$columnas[$c].'23)')
                      ->setCellValue('B24', '=SUM(F24:'.$columnas[$c].'24)')
                      ->setCellValue('B25', '=SUM(F25:'.$columnas[$c].'25)')
                      ->setCellValue('B26', '=SUM(F26:'.$columnas[$c].'26)')
                      ->setCellValue('B27', '=SUM(F27:'.$columnas[$c].'27)')
                      ->setCellValue('B28', '=SUM(F28:'.$columnas[$c].'28)')
                      ->setCellValue('B29', '=SUM(F29:'.$columnas[$c].'29)')
                      ->setCellValue('B30', '=SUM(F30:'.$columnas[$c].'30)')
                      ->setCellValue('B31', '=SUM(F31:'.$columnas[$c].'31)')
                      ->setCellValue('B32', '=SUM(F32:'.$columnas[$c].'32)')
                      ->setCellValue('B33', '=SUM(F33:'.$columnas[$c].'33)')
                      ->setCellValue('B34', '=SUM(F34:'.$columnas[$c].'34)')
                      ->setCellValue('B35', '=SUM(F35:'.$columnas[$c].'35)')
                      ->setCellValue('B36', '=SUM(F36:'.$columnas[$c].'36)')
                      ->setCellValue('B37', '=SUM(F37:'.$columnas[$c].'37)')
                      ->setCellValue('B38', '=SUM(F38:'.$columnas[$c].'38)')
                      ->setCellValue('B39', '=SUM(F39:'.$columnas[$c].'39)')
                      ->setCellValue('B40', '=SUM(F40:'.$columnas[$c].'40)')
                      ->setCellValue('B41', '=SUM(F41:'.$columnas[$c].'41)')
                      ->setCellValue('B42', '=SUM(F42:'.$columnas[$c].'42)')
                      ->setCellValue('B43', '=SUM(F43:'.$columnas[$c].'43)')
                      ->setCellValue('B44', '=SUM(F44:'.$columnas[$c].'44)')
                      ->setCellValue('B45', '=SUM(F45:'.$columnas[$c].'45)')
                      ->setCellValue('B46', '=SUM(F46:'.$columnas[$c].'46)')
                      ->setCellValue('B47', '=SUM(F47:'.$columnas[$c].'47)')
                      ->setCellValue('B48', '=SUM(F48:'.$columnas[$c].'48)')
                      ->setCellValue('B49', '=SUM(F49:'.$columnas[$c].'49)')
                      
                      
                      ->setCellValue('C5', '=B5/'.$ven_bru)
                      ->setCellValue('C6', '=B6/'.$ven_bru)
                      ->setCellValue('C7', '=B7/'.$ven_bru)
                      ->setCellValue('C8', '=B8/'.$ven_bru)
                      ->setCellValue('C9', '=B9/'.$ven_bru)
                      ->setCellValue('C10', '=B10/'.$ven_bru)
                      ->setCellValue('C11', '=B11/'.$ven_bru)
                      ->setCellValue('C12', '=B12/'.$ven_bru)
                      ->setCellValue('C13', '=B13/'.$ven_bru)
                      ->setCellValue('C14', '=B14/'.$ven_bru)
                      ->setCellValue('C15', '=B15/'.$ven_bru)
                      ->setCellValue('C16', '=B16/'.$ven_bru)
                      ->setCellValue('C17', '=B17/'.$ven_bru)
                      ->setCellValue('C18', '=B18/'.$ven_bru)
                      ->setCellValue('C19', '=B19/'.$ven_bru)
                      ->setCellValue('C20', '=B20/'.$ven_bru)
                      ->setCellValue('C21', '=B21/'.$ven_bru)
                      ->setCellValue('C22', '=B22/'.$ven_bru)
                      ->setCellValue('C23', '=B23/'.$ven_bru)
                      ->setCellValue('C24', '=B24/'.$ven_bru)
                      ->setCellValue('C25', '=B25/'.$ven_bru)
                      ->setCellValue('C26', '=B26/'.$ven_bru)
                      ->setCellValue('C27', '=B27/'.$ven_bru)
                      ->setCellValue('C28', '=B28/'.$ven_bru)
                      ->setCellValue('C29', '=B29/'.$ven_bru)
                      ->setCellValue('C30', '=B30/'.$ven_bru)
                      ->setCellValue('C31', '=B31/'.$ven_bru)
                      ->setCellValue('C32', '=B32/'.$ven_bru)
                      ->setCellValue('C33', '=B33/'.$ven_bru)
                      ->setCellValue('C34', '=B34/'.$ven_bru)
                      ->setCellValue('C35', '=B35/'.$ven_bru)
                      ->setCellValue('C36', '=B36/'.$ven_bru)
                      ->setCellValue('C37', '=B37/'.$ven_bru)
                      ->setCellValue('C38', '=B38/'.$ven_bru)
                      ->setCellValue('C39', '=B39/'.$ven_bru)
                      ->setCellValue('C40', '=B40/'.$ven_bru)
                      ->setCellValue('C41', '=B41/'.$ven_bru)
                      ->setCellValue('C42', '=B42/'.$ven_bru)
                      ->setCellValue('C43', '=B43/'.$ven_bru)
                      ->setCellValue('C44', '=B44/'.$ven_bru)
                      ->setCellValue('C45', '=B45/'.$ven_bru)
                      ->setCellValue('C46', '=B46/'.$ven_bru)
                      ->setCellValue('C47', '=B47/'.$ven_bru)
                      ->setCellValue('C48', '=B48/'.$ven_bru)
                      ->setCellValue('C49', '=B49/'.$ven_bru);
                      
                      
                      
                      
	//Formato miles Con separador.
                      
                      
                      $objPHPExcel->getActiveSheet()->getStyle('B5:B52')
                      ->getNumberFormat()->setFormatCode('#,##0');
                      
                      $objPHPExcel->getActiveSheet()->getStyle('E5:E49')
                      ->getNumberFormat()->setFormatCode('#,##0');
                      
                      $objPHPExcel->getActiveSheet()->getStyle('C5:C52')
                      ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
                      
                      $objPHPExcel->getActiveSheet()->getStyle('C52:H52')
                      ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
                      
                      
                      
                      
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
	
	
	$styleArray = array(
		'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);
	
	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A5:A49')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B5:B49')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C5:C49')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('D3:D4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('D5:D49')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('E3:E4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('E5:E49')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B51:B52')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C51:C52')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('D51:D52')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('E51:E52')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('G51:G52')->applyFromArray($BStyle);
//-------

	$objPHPExcel->getActiveSheet()->getStyle('A16:'.$columnas[$c].'16')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A33:'.$columnas[$c].'33')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A37:'.$columnas[$c].'37')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A38:'.$columnas[$c].'38')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A47:'.$columnas[$c].'47')->applyFromArray($styleArray);

	
	
	//Cambio color Letra
	$blanco  = array(
		'font'  => array(
			'color' => array('rgb' => '000000'),
			
			));
	
	
	
	
	
	//--------Blanco
	
	// $objPHPExcel->getActiveSheet()->getStyle('G2:PXD2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
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
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B6:B7')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B9:B10')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B12:B14')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B22:B24')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B26:B29')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B31:B32')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B35:B36')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B41:B42')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B44:B45')->applyFromArray($colorLetra);
	
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
	
	
		//Combinar Celdas
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('A3:A4');
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('D3:E3');			
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('A1:C1');
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('B3:B4');
	
	
	
	
	//Negrilla
	$negrilla = array(
		'font' => array(
			'bold' => true
			)
		);
	
	
	
	
	$objPHPExcel->getActiveSheet()->getStyle('A16:'.$columnas[$c].'16')->applyFromArray(
		$negrilla);	
	
	
	$objPHPExcel->getActiveSheet()->getStyle('A33:'.$columnas[$c].'33')->applyFromArray(
		$negrilla);			
	
	
	$objPHPExcel->getActiveSheet()->getStyle('A37:'.$columnas[$c].'37')->applyFromArray(
		$negrilla);	

	$objPHPExcel->getActiveSheet()->getStyle('A38:'.$columnas[$c].'38')->applyFromArray(
		$negrilla);			
	
	$objPHPExcel->getActiveSheet()->getStyle('A47:'.$columnas[$c].'47')->applyFromArray(
		$negrilla);		

	$objPHPExcel->getActiveSheet()->getStyle('A48:'.$columnas[$c].'48')->applyFromArray(
		$negrilla);						
	
	$objPHPExcel->getActiveSheet()->getStyle('A49:'.$columnas[$c].'49')->applyFromArray(
		$negrilla);
	
	
	
	
		//Combinar Celdas
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('A3:A4');
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('D3:E3');			
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('A1:C1');
	
	$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('B3:B4');
	
	
		// Se asigna el nombre a la hoja
	$objPHPExcel->getActiveSheet()->setTitle('Flujo Caja Terreno');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
	$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="ReporteFlujoCajaTerreno.xlsx"');
	header('Cache-Control: max-age=0');

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
	exit;
	
}
else{
	print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T055-informesExcel-D.php';</script>";
}
?>
