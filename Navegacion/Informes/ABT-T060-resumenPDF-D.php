<?php
include "../../php/ABT-T000-conexion-U.php";


include "ABT-T063-selects-D.php";




$resultado1 = $conexion->query($consulta_resumen_1);

$su="SELECT 
PRO_DESCRIPCION,
SEL_DET_ETAPA
FROM tb_consolidados, tb_seleccion, tb_proyecto, tb_resumen
WHERE CONS_ID = '$Example'
AND CONS_ID = SEL_CONS_ID
AND SEL_DET_PRO_ID = PRO_ID
AND SEL_DET_ETAPA = RES_DET_ETAPA
AND SEL_MODELO = RES_MODELO
AND PRO_ID = RES_DET_PRO_ID";


$sum=0;



$resultado = $conexion->query($su);

while ($fila = $resultado->fetch_array()) {
	$sum=$sum+1;
}
if($resultado1->num_rows > 0 ){
	
	
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
							 ->setTitle("Resumen")
							 ->setSubject("Resumen")
							 ->setDescription("Resumen")
							 ->setKeywords("Resumen")
							 ->setCategory("Resumen");

							 
							 
							 
							 
		// Se agregan los titulos del reporte
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->setCellValue('B25','TOTALES')
							 ->setCellValue('C25','%')
							 ->setCellValue('C26','Ventas')
							 ->setCellValue('D25','Vr/M2')
							 ->setCellValue('D26','Construido')
							 ->setCellValue('E25','Vr/M2')
							 ->setCellValue('E26','Vendible')
							 ->setCellValue('F25','Valor/Unidad')
							 
							 
							 ->setCellValue('A5','INFORMACION GENERAL')
							 ->setCellValue('A6','Total Unidades')
							 ->setCellValue('A7','Area Promedio / Unidad  (aplica en vivienda)')
							 ->setCellValue('A8','Total Area Construída')
							 ->setCellValue('A9','Total Area Vendible')
							 ->setCellValue('A10','Area Util Lote (asignada a subproyecto)')
							 ->setCellValue('A11','Densidad  (Unidades / Ha) ó indice ocupación')
							 ->setCellValue('A12','Vr / M2 Lote Urbanizado')
							 ->setCellValue('A13','No Parqueos')
							 ->setCellValue('A14','Relacion Parqueos (# parqueos/un)')
							 ->setCellValue('A15','No Depósitos')
							 ->setCellValue('A16','Fecha Inicio y terminacion Ventas')
							 ->setCellValue('A17','Fecha Inicio y terminacion Construccion')
							 ->setCellValue('A18','Ritmo de ventas (mensual promedio)')
							 ->setCellValue('A19','Punto equilibrio (unidades) no aplica')
							 ->setCellValue('A20','Tasa promedio de incremento precios')
							 ->setCellValue('A21','% ventas NUEVOGAR')
							 ->setCellValue('A22','Fecha de Presupuesto (mat mo) ')
							 ->setCellValue('A23','Tasa promedio de incremento presupuesto')

							 ->setCellValue('A25','RESULTADOS PROYECTO  - Miles de Pesos')

							 ->setCellValue('A27','Urbanismo Interno - Costo Materiales y Mano Obra (no aplica) ')
							 ->setCellValue('A28','    Presupuesto')
							 ->setCellValue('A29','    Incrementos ')
							 ->setCellValue('A30','Costo Materiales y Mano de Obra')
							 ->setCellValue('A31','   Presupuesto')
							 ->setCellValue('A32','   Incrementos ')
							 ->setCellValue('A33','Gastos Imprevistos')
							 ->setCellValue('A34','Costos de Post Ventas')
							 ->setCellValue('A35','COSTO DIRECTO DE CONSTRUCCION')
							 ->setCellValue('A36','Honorarios Construccion ')
							 ->setCellValue('A37','    Honorarios Construcción')
							 ->setCellValue('A38','    Gastos Reembolsables')
							 ->setCellValue('A39','Honorarios Interventoría ')
							 ->setCellValue('A40','    Honorarios Interventoría ')
							 ->setCellValue('A41','    Gastos Reembolsables')
							 ->setCellValue('A42','Otros Honorarios (diseños otros)')
							 ->setCellValue('A43','Otros Honorarios (diseños otros)')
							 ->setCellValue('A44','Gastos Reembolsables')
							 ->setCellValue('A45','Impuestos y Derechos (licconstruccion otros)')
							 ->setCellValue('A46','COSTO TOTAL DE CONSTRUCCION')
							 ->setCellValue('A47','Honorarios de Gerencia')
							 ->setCellValue('A48','    Honorarios de Gerencia')
							 ->setCellValue('A49','    Gastos Reembolsables')
							 ->setCellValue('A50','Honorarios de Ventas')
							 ->setCellValue('A51','    Honorarios de Ventas')
							 ->setCellValue('A52','    Gastos Reembolsables')
							 ->setCellValue('A53','Costos de Promocion y Ventas')
							 ->setCellValue('A54','    Sala de Ventas y Unidades Modelo (construccion)')
							 ->setCellValue('A55','    Gastos de Publicidad')
							 ->setCellValue('A56','    Gastos Sala de Ventas')
							 ->setCellValue('A57','    Administración unidades x entregar')
							 ->setCellValue('A58','    Comisiones de Ventas')
							 ->setCellValue('A59','Gastos Legales')
							 ->setCellValue('A60','Hipotecas crédito constructor')
							 ->setCellValue('A61','Notariales y de Registro de Ventas (t y n)')
							 ->setCellValue('A62','Impuesto Predial Inmuebles por escriturar y entregar')
							 ->setCellValue('A63','Impuesto ICA (t y n)')
							 ->setCellValue('A64','COSTO TOTAL ANTES TERRENO Y FINANCIEROS')
							 ->setCellValue('A65','Valor Terreno Urbanizado')
							 ->setCellValue('A66','Pagos como % ventas (netos anticipo)')
							 ->setCellValue('A67','Otros pagos y costos + Valorizacion (vr Asignado)')
							 ->setCellValue('A68','Comisiones Fiducia')
							 ->setCellValue('A69','Preventas y Administración')
							 ->setCellValue('A70','NUEVOGAR')
							 ->setCellValue('A71','Gastos Financieros')
							 ->setCellValue('A72','Intereses Crédito Constructor')
							 ->setCellValue('A73','Otros costos crédito')
							 ->setCellValue('A74','Correccion Monetaria (no es egreso de caja)')
							 ->setCellValue('A75','Impto Transacciones Financieras (ITF) ')
							 ->setCellValue('A76','Otros Costos y Gastos')
							 ->setCellValue('A77','Otros Costos y Gastos 1')
							 ->setCellValue('A78','Otros Costos y Gastos 2')
							 ->setCellValue('A79','Otros Costos y Gastos 3')
							 ->setCellValue('A80','Reintegros IVA (proyectos VIS)')
							 ->setCellValue('A81','COSTO TOTAL (directos e indirectos)')
							 ->setCellValue('A82','Ventas Brutas')
							 ->setCellValue('A83','Otros ingresos por ventas (intereses otros)')
							 ->setCellValue('A84','Intereses de Subrogación ')
							 ->setCellValue('A85','Intereses de mora (no aplica)')
							 ->setCellValue('A86','Ofertas comerciales y otros ingresos (napl)')
							 ->setCellValue('A87','Rendimientos Fideicomiso')
							 ->setCellValue('A88','Otros Ingresos')
							 ->setCellValue('A89','Otros Ingresos 1')
							 ->setCellValue('A90','Otros Ingresos 2')
							 ->setCellValue('A91','Otros Ingresos 3')
							 ->setCellValue('A92','INGRESOS TOTALES ')
							 ->setCellValue('A93','UTILIDAD PROYECTO (ai y créditos tesorería)')
							 ->setCellValue('A94','Costo créditos de tesorería ')
							 ->setCellValue('A95','Impuesto de renta ')
							 ->setCellValue('A96','UTILIDAD PROYECTO (di y créditos tesorería)')

							 ->setCellValue('A98','COSTO DE VENTAS (gestión)')
							 ->setCellValue('A99','Valor del terreno en Libros')
							 ->setCellValue('A100','COSTO DE VENTAS (gestión sin intereses credito constructor)')

							 ->setCellValue('A102','TIR (mensual y anual)')
							 ->setCellValue('A103','VPN y Tasa Descuento')

							 ->setCellValue('A105','UTILIDAD COLPATRIA (ai)')
							 ->setCellValue('A106','CONSTRUCTORA')
							 ->setCellValue('A107','TRANSACCIONES INMOBILIARIAS')
							 ->setCellValue('A108','PROMOTORA')

							 ->setCellValue('A110','TIR COLPATRIA  (mensual y anual)')
							 ->setCellValue('A111','VPN COLPATRIA y Tasa Descuento')
							 
							 ->setCellValue('G25','Ejecución Al corte')
							 
							 ->setCellValue('H25','% Total');

							 
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
							 
							 $c=1;
							 
							 $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setName('Arial');
							 $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
							 
							 
							 
							 while ($fila = $resultado1->fetch_array()) {
							 	$fct_fecha=$fila["CONS_FEC_PRE_DES"];
							 	$fct_fecha2=cambiarFecha1($fct_fecha);
							 	
							 	$ven_des=$fila["CONS_FEC_VEN_DES"];
							 	$ven_des=cambiarFecha1($ven_des);
							 	
							 	$ven_has=$fila["CONS_FEC_VEN_HAS"];
							 	$ven_has=cambiarFecha1($ven_has);
							 	
							 	$con_des=$fila["CONS_FEC_CON_DES"];
							 	$con_des=cambiarFecha1($con_des);
							 	
							 	$con_has=$fila["CONS_FEC_CON_HAS"];
							 	$con_has=cambiarFecha1($con_has);
							 	
							 	$fct_fecha=$fct_fecha2;
							 	$venta=$ven_des.' A '.$ven_has;
							 	if($venta==' A '){
							 		$venta=' ';
							 	}
							 	$cons=$con_des.' A '.$con_has;
							 	if($cons==' A '){
							 		$cons=' ';
							 	}
							 	$objPHPExcel->setActiveSheetIndex(0) 
							 	->setCellValue('A1',  'RESUMEN - '.$fila['CONS_DESCRIPCION'])
							 	->setCellValue('B5',  'INFORMACION GENERAL')
							 	->setCellValue('B6',   $fila['RES_C_TOTAL_UNIDADES'])
							 	->setCellValue('B7',   div($fila['RES_C_TOTAL_AREA_VENDIBLE'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('B8',   $fila['RES_C_TOTAL_AREA_CONSTRUIDA'])
							 	->setCellValue('B9',   $fila['RES_C_TOTAL_AREA_VENDIBLE']) 
							 	->setCellValue('B10',  $fila['RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO'])
							 	->setCellValue('B11',  (($fila['RES_C_TOTAL_UNIDADES']*10000)/$fila['RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO']))
							 	->setCellValue('B12',  ($fila['RES_C_VALOR_TERENO_URBANIZADO']/$fila['RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO']))
							 	->setCellValue('B13',  $fila['RES_C_NUMERO_PARQUEOS'])
							 	->setCellValue('B14',  $fila['RES_C_NUMERO_PARQUEOS']/$fila['RES_C_NUMERO_PARQUEOS'])
							 	->setCellValue('B15',  $fila['RES_C_NUMERO_DEPOSITOS'])
							 	
							 	->setCellValue('B16',  $venta)
							 	->setCellValue('B17',  $cons)
							 	->setCellValue('B18',  $fila['CONS_RIT_VEN'])
							 	->setCellValue('B19',  ' ')
							 	->setCellValue('B20',  ' ')
							 	->setCellValue('B21',  $fila['CONS_POR_VTA_NHO'])
							 	->setCellValue('B22',  $fct_fecha)
							 	->setCellValue('B23',  ' ')
							 	
							 	->setCellValue('B27',  $fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'])
							 	->setCellValue('B28',  $fila['RES_C_PRESUPUESTO'])
							 	->setCellValue('B29',  $fila['RES_C_INCREMENTOS'])
							 	->setCellValue('B30',  $fila['RES_C_COSTO_MATERIALES_MANO_OBRA'])
							 	->setCellValue('B31',  $fila['RES_C_PRESUPUESTO2'])
							 	->setCellValue('B32',  $fila['RES_C_INCREMENTOS2'])
							 	->setCellValue('B33',  $fila['RES_C_GASTOS_IMPREVISTOS'])
							 	->setCellValue('B34',  $fila['RES_C_COSTOS_POST_VENTAS'])
							 	->setCellValue('B35',  $fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'])
							 	->setCellValue('B36',  $fila['RES_C_HONORARIOS_CONSTRUCCION'])
							 	->setCellValue('B37',  $fila['RES_C_HONORARIOS_CONSTRUCCION2'])
							 	->setCellValue('B38',  $fila['RES_C_GASTOS_REEMBOLSABLES'])
							 	->setCellValue('B39',  $fila['RES_C_HONORARIOS_INTERVENTORIA'])
							 	->setCellValue('B40',  $fila['RES_C_HONORARIOS_INTERVENTORIA2'])
							 	->setCellValue('B41',  $fila['RES_C_GASTOS_REEMBOLSABLES2'])
							 	->setCellValue('B42',  $fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'])
							 	->setCellValue('B43',  $fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'])
							 	->setCellValue('B44',  $fila['RES_C_GASTOS_REEMBOLSABLES3'])
							 	->setCellValue('B45',  $fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'])
							 	->setCellValue('B46',  $fila['RES_C_COSTO_TOTAL_CONSTRUCCION'])
							 	->setCellValue('B47',  $fila['RES_C_HONORARIOS_GERENCIA'])
							 	->setCellValue('B48',  $fila['RES_C_HONORARIOS_GERENCIA2'])
							 	->setCellValue('B49',  $fila['RES_C_GASTOS_REEMBOLSABLES4'])
							 	->setCellValue('B50',  $fila['RES_C_HONORARIOS_VENTAS'])
							 	->setCellValue('B51',  $fila['RES_C_HONORARIOS_VENTAS2'])
							 	->setCellValue('B52',  $fila['RES_C_GASTOS_REEMBOLSABLES5'])
							 	->setCellValue('B53',  $fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'])
							 	->setCellValue('B54',  $fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'])
							 	->setCellValue('B55',  $fila['RES_C_GASTOS_PUBLICIDAD'])
							 	->setCellValue('B56',  $fila['RES_C_GASTOS_SALA_VENTAS'])
							 	->setCellValue('B57',  $fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'])
							 	->setCellValue('B58',  $fila['RES_C_COMISIONES_VENTAS'])
							 	->setCellValue('B59',  $fila['RES_C_GASTOS_LEGALES'])
							 	->setCellValue('B60',  $fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'])
							 	->setCellValue('B61',  $fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'])
							 	->setCellValue('B62',  $fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'])
							 	->setCellValue('B63',  $fila['RES_C_IMPUESTO_ICA'])
							 	->setCellValue('B64',  $fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'])
							 	->setCellValue('B65',  $fila['RES_C_VALOR_TERENO_URBANIZADO'])
							 	->setCellValue('B66',  $fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'])
							 	->setCellValue('B67',  $fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'])
							 	->setCellValue('B68',  $fila['RES_C_COMISIONES_FIDUCIA'])
							 	->setCellValue('B69',  $fila['RES_C_PREVENTAS_Y_ADMON'])
							 	->setCellValue('B70',  $fila['RES_C_NUEVOGAR'])
							 	->setCellValue('B71',  $fila['RES_C_GASTOS_FINANCIEROS'])
							 	->setCellValue('B72',  $fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'])
							 	->setCellValue('B73',  $fila['RES_C_OTROS_COSTOS_CREDITO'])
							 	->setCellValue('B74',  $fila['RES_C_CORRECCION_MONETARIA'])
							 	->setCellValue('B75',  $fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'])
							 	->setCellValue('B76',  $fila['RES_C_OTROS_COSTOS_Y_GASTOS'])
							 	->setCellValue('B77',  $fila['RES_C_GASTO1'])
							 	->setCellValue('B78',  $fila['RES_C_GASTO2'])
							 	->setCellValue('B79',  $fila['RES_C_GASTO3'])
							 	->setCellValue('B80',  $fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'])
							 	->setCellValue('B81',  $fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'])
							 	->setCellValue('B82',  $fila['RES_C_VENTAS_BRUTAS'])
							 	->setCellValue('B83',  $fila['RES_C_OTROS_INGRESOS_VENTAS'])
							 	->setCellValue('B84',  $fila['RES_C_INTERESES_SUBROGACION'])
							 	->setCellValue('B85',  $fila['RES_C_INTERESES_MORA'])
							 	->setCellValue('B86',  $fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'])
							 	->setCellValue('B87',  $fila['RES_C_RENDIMIENTOS_FIDEICOMISO'])
							 	->setCellValue('B88',  $fila['RES_C_OTROS_INGRESOS'])
							 	->setCellValue('B89',  $fila['RES_C_INGRESOS1'])
							 	->setCellValue('B90',  $fila['RES_C_INGRESOS2'])
							 	->setCellValue('B91',  $fila['RES_C_INGRESOS3'])
							 	->setCellValue('B92',  $fila['RES_C_INGRESOS_TOTALES'])
							 	->setCellValue('B93',  $fila['RES_C_UTILIDAD_PROYECTO'])
							 	->setCellValue('B94',  $fila['RES_C_COSTO_CREDITO_TESORERIA'])
							 	->setCellValue('B95',  $fila['RES_C_IMPUESTO_RENTA'])
							 	->setCellValue('B96',  $fila['RES_C_UTILIDAD_PROYECTO2'])

							 	->setCellValue('B98',  $fila['RES_C_COSTO_VENTAS_GESTION'])
							 	->setCellValue('B99',  $fila['RES_C_VALOR_TERRENO_LIBROS'])
							 	->setCellValue('B100',  $fila['RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES'])
							 	
							 	
							 	->setCellValue('B102',  $fila['RES_C_TIR_EM'])
							 	->setCellValue('B103',  $fila['RES_C_VPN_TASA_DESCUENTO'])
							 	
							 	->setCellValue('B105',  $fila['RES_C_UTILIDAD_COLPATRIA'])
							 	->setCellValue('B106',  $fila['RES_C_CONSTRUCTORA'])
							 	->setCellValue('B107',  $fila['RES_C_TRANSACCIONES_INMOBILIARIAS'])
							 	->setCellValue('B108',  $fila['RES_C_PROMOTORA'])
							 	
							 	->setCellValue('B110',  $fila['RES_C_TIR_COLPATRIA_EM'])
							 	->setCellValue('B111',  $fila['RES_C_VPN_COLPATRIA_TASA_DESCUENTO'])
							 	
							 	->setCellValue('C27', div($fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C28', div($fila['RES_C_PRESUPUESTO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C29', div($fila['RES_C_INCREMENTOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C30', div($fila['RES_C_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C31', div($fila['RES_C_PRESUPUESTO2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C32', div($fila['RES_C_INCREMENTOS2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C33', div($fila['RES_C_GASTOS_IMPREVISTOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C34', div($fila['RES_C_COSTOS_POST_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C35', div($fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C36', div($fila['RES_C_HONORARIOS_CONSTRUCCION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C37', div($fila['RES_C_HONORARIOS_CONSTRUCCION2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C38', div($fila['RES_C_GASTOS_REEMBOLSABLES'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C39', div($fila['RES_C_HONORARIOS_INTERVENTORIA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C40', div($fila['RES_C_HONORARIOS_INTERVENTORIA2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C41', div($fila['RES_C_GASTOS_REEMBOLSABLES2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C42', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C43', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C44', div($fila['RES_C_GASTOS_REEMBOLSABLES3'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C45', div($fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C46', div($fila['RES_C_COSTO_TOTAL_CONSTRUCCION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C47', div($fila['RES_C_HONORARIOS_GERENCIA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C48', div($fila['RES_C_HONORARIOS_GERENCIA2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C49', div($fila['RES_C_GASTOS_REEMBOLSABLES4'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C50', div($fila['RES_C_HONORARIOS_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C51', div($fila['RES_C_HONORARIOS_VENTAS2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C52', div($fila['RES_C_GASTOS_REEMBOLSABLES5'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C53', div($fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C54', div($fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C55', div($fila['RES_C_GASTOS_PUBLICIDAD'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C56', div($fila['RES_C_GASTOS_SALA_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C57', div($fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C58', div($fila['RES_C_COMISIONES_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C59', div($fila['RES_C_GASTOS_LEGALES'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C60', div($fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C61', div($fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C62', div($fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C63', div($fila['RES_C_IMPUESTO_ICA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C64', div($fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C65', div($fila['RES_C_VALOR_TERENO_URBANIZADO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C66', div($fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C67', div($fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C68', div($fila['RES_C_COMISIONES_FIDUCIA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C69', div($fila['RES_C_PREVENTAS_Y_ADMON'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C70', div($fila['RES_C_NUEVOGAR'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C71', div($fila['RES_C_GASTOS_FINANCIEROS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C72', div($fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C73', div($fila['RES_C_OTROS_COSTOS_CREDITO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C74', div($fila['RES_C_CORRECCION_MONETARIA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C75', div($fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C76', div($fila['RES_C_OTROS_COSTOS_Y_GASTOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C77', div($fila['RES_C_GASTO1'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C78', div($fila['RES_C_GASTO2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C79', div($fila['RES_C_GASTO3'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C80', div($fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C81', div($fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C82', div($fila['RES_C_VENTAS_BRUTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C83', div($fila['RES_C_OTROS_INGRESOS_VENTAS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C84', div($fila['RES_C_INTERESES_SUBROGACION'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C85', div($fila['RES_C_INTERESES_MORA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C86', div($fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C87', div($fila['RES_C_RENDIMIENTOS_FIDEICOMISO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C88', div($fila['RES_C_OTROS_INGRESOS'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C89', div($fila['RES_C_INGRESOS1'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C90', div($fila['RES_C_INGRESOS2'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C91', div($fila['RES_C_INGRESOS3'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C92', div($fila['RES_C_INGRESOS_TOTALES'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C93', div($fila['RES_C_UTILIDAD_PROYECTO'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C94', div($fila['RES_C_COSTO_CREDITO_TESORERIA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C95', div($fila['RES_C_IMPUESTO_RENTA'],$fila['RES_C_VENTAS_BRUTAS']) )
							 	->setCellValue('C96', div($fila['RES_C_UTILIDAD_PROYECTO2'],$fila['RES_C_VENTAS_BRUTAS']) )

							 	->setCellValue('C98', div($fila['RES_C_COSTO_VENTAS_GESTION'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C99',  div($fila['RES_C_VALOR_TERRENO_LIBROS'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C100',  div($fila['RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES'],$fila['RES_C_VENTAS_BRUTAS']))
							 	
							 	
							 	->setCellValue('C102',  div($fila['RES_C_TIR_EM'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C103',  div($fila['RES_C_VPN_TASA_DESCUENTO'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C105', div($fila['RES_C_UTILIDAD_COLPATRIA'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C106',  div($fila['RES_C_CONSTRUCTORA'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C107',  div($fila['RES_C_TRANSACCIONES_INMOBILIARIAS'],$fila['RES_C_VENTAS_BRUTAS']))
							 	
							 	->setCellValue('C108',  div($fila['RES_C_PROMOTORA'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C110',  div($fila['RES_C_TIR_COLPATRIA_EM'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('C111',  div($fila['RES_C_VPN_COLPATRIA_TASA_DESCUENTO'],$fila['RES_C_VENTAS_BRUTAS']))
							 	
							 	
							 	
							 	->setCellValue('D27', div($fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D28', div($fila['RES_C_PRESUPUESTO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D29', div($fila['RES_C_INCREMENTOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D30', div($fila['RES_C_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D31', div($fila['RES_C_PRESUPUESTO2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D32', div($fila['RES_C_INCREMENTOS2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D33', div($fila['RES_C_GASTOS_IMPREVISTOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D34', div($fila['RES_C_COSTOS_POST_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D35', div($fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D36', div($fila['RES_C_HONORARIOS_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D37', div($fila['RES_C_HONORARIOS_CONSTRUCCION2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D38', div($fila['RES_C_GASTOS_REEMBOLSABLES'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D39', div($fila['RES_C_HONORARIOS_INTERVENTORIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D40', div($fila['RES_C_HONORARIOS_INTERVENTORIA2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D41', div($fila['RES_C_GASTOS_REEMBOLSABLES2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D42', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D43', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D44', div($fila['RES_C_GASTOS_REEMBOLSABLES3'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D45', div($fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D46', div($fila['RES_C_COSTO_TOTAL_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D47', div($fila['RES_C_HONORARIOS_GERENCIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D48', div($fila['RES_C_HONORARIOS_GERENCIA2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D49', div($fila['RES_C_GASTOS_REEMBOLSABLES4'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D50', div($fila['RES_C_HONORARIOS_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D51', div($fila['RES_C_HONORARIOS_VENTAS2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D52', div($fila['RES_C_GASTOS_REEMBOLSABLES5'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D53', div($fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D54', div($fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D55', div($fila['RES_C_GASTOS_PUBLICIDAD'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D56', div($fila['RES_C_GASTOS_SALA_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D57', div($fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D58', div($fila['RES_C_COMISIONES_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D59', div($fila['RES_C_GASTOS_LEGALES'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D60', div($fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D61', div($fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D62', div($fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D63', div($fila['RES_C_IMPUESTO_ICA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D64', div($fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D65', div($fila['RES_C_VALOR_TERENO_URBANIZADO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D66', div($fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D67', div($fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D68', div($fila['RES_C_COMISIONES_FIDUCIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D69', div($fila['RES_C_PREVENTAS_Y_ADMON'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D70', div($fila['RES_C_NUEVOGAR'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D71', div($fila['RES_C_GASTOS_FINANCIEROS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D72', div($fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D73', div($fila['RES_C_OTROS_COSTOS_CREDITO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D74', div($fila['RES_C_CORRECCION_MONETARIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D75', div($fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D76', div($fila['RES_C_OTROS_COSTOS_Y_GASTOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D77', div($fila['RES_C_GASTO1'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D78', div($fila['RES_C_GASTO2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D79', div($fila['RES_C_GASTO3'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D80', div($fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D81', div($fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D82', div($fila['RES_C_VENTAS_BRUTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D83', div($fila['RES_C_OTROS_INGRESOS_VENTAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D84', div($fila['RES_C_INTERESES_SUBROGACION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D85', div($fila['RES_C_INTERESES_MORA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D86', div($fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D87', div($fila['RES_C_RENDIMIENTOS_FIDEICOMISO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D88', div($fila['RES_C_OTROS_INGRESOS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D89', div($fila['RES_C_INGRESOS1'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D90', div($fila['RES_C_INGRESOS2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D91', div($fila['RES_C_INGRESOS3'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D92', div($fila['RES_C_INGRESOS_TOTALES'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D93', div($fila['RES_C_UTILIDAD_PROYECTO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D94', div($fila['RES_C_COSTO_CREDITO_TESORERIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D95', div($fila['RES_C_IMPUESTO_RENTA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )
							 	->setCellValue('D96', div($fila['RES_C_UTILIDAD_PROYECTO2'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']) )

							 	->setCellValue('D98', div($fila['RES_C_COSTO_VENTAS_GESTION'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D99',  div($fila['RES_C_VALOR_TERRENO_LIBROS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D100',  div($fila['RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	
							 	
							 	->setCellValue('D102',  div($fila['RES_C_TIR_EM'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D103',  div($fila['RES_C_VPN_TASA_DESCUENTO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D105', div($fila['RES_C_UTILIDAD_COLPATRIA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D106',  div($fila['RES_C_CONSTRUCTORA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D107',  div($fila['RES_C_TRANSACCIONES_INMOBILIARIAS'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	
							 	->setCellValue('D108',  div($fila['RES_C_PROMOTORA'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D110',  div($fila['RES_C_TIR_COLPATRIA_EM'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	->setCellValue('D111',  div($fila['RES_C_VPN_COLPATRIA_TASA_DESCUENTO'],$fila['RES_C_TOTAL_AREA_CONSTRUIDA']))
							 	
							 	
							 	->setCellValue('E27', div($fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E28', div($fila['RES_C_PRESUPUESTO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E29', div($fila['RES_C_INCREMENTOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E30', div($fila['RES_C_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E31', div($fila['RES_C_PRESUPUESTO2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E32', div($fila['RES_C_INCREMENTOS2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E33', div($fila['RES_C_GASTOS_IMPREVISTOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E34', div($fila['RES_C_COSTOS_POST_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E35', div($fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E36', div($fila['RES_C_HONORARIOS_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E37', div($fila['RES_C_HONORARIOS_CONSTRUCCION2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E38', div($fila['RES_C_GASTOS_REEMBOLSABLES'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E39', div($fila['RES_C_HONORARIOS_INTERVENTORIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E40', div($fila['RES_C_HONORARIOS_INTERVENTORIA2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E41', div($fila['RES_C_GASTOS_REEMBOLSABLES2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E42', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E43', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E44', div($fila['RES_C_GASTOS_REEMBOLSABLES3'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E45', div($fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E46', div($fila['RES_C_COSTO_TOTAL_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E47', div($fila['RES_C_HONORARIOS_GERENCIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E48', div($fila['RES_C_HONORARIOS_GERENCIA2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E49', div($fila['RES_C_GASTOS_REEMBOLSABLES4'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E50', div($fila['RES_C_HONORARIOS_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E51', div($fila['RES_C_HONORARIOS_VENTAS2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E52', div($fila['RES_C_GASTOS_REEMBOLSABLES5'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E53', div($fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E54', div($fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E55', div($fila['RES_C_GASTOS_PUBLICIDAD'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E56', div($fila['RES_C_GASTOS_SALA_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E57', div($fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E58', div($fila['RES_C_COMISIONES_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E59', div($fila['RES_C_GASTOS_LEGALES'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E60', div($fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E61', div($fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E62', div($fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E63', div($fila['RES_C_IMPUESTO_ICA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E64', div($fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E65', div($fila['RES_C_VALOR_TERENO_URBANIZADO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E66', div($fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E67', div($fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E68', div($fila['RES_C_COMISIONES_FIDUCIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E69', div($fila['RES_C_PREVENTAS_Y_ADMON'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E70', div($fila['RES_C_NUEVOGAR'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E71', div($fila['RES_C_GASTOS_FINANCIEROS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E72', div($fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E73', div($fila['RES_C_OTROS_COSTOS_CREDITO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E74', div($fila['RES_C_CORRECCION_MONETARIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E75', div($fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E76', div($fila['RES_C_OTROS_COSTOS_Y_GASTOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E77', div($fila['RES_C_GASTO1'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E78', div($fila['RES_C_GASTO2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E79', div($fila['RES_C_GASTO3'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E80', div($fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E81', div($fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E82', div($fila['RES_C_VENTAS_BRUTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E83', div($fila['RES_C_OTROS_INGRESOS_VENTAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E84', div($fila['RES_C_INTERESES_SUBROGACION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E85', div($fila['RES_C_INTERESES_MORA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E86', div($fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E87', div($fila['RES_C_RENDIMIENTOS_FIDEICOMISO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E88', div($fila['RES_C_OTROS_INGRESOS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E89', div($fila['RES_C_INGRESOS1'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E90', div($fila['RES_C_INGRESOS2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E91', div($fila['RES_C_INGRESOS3'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E92', div($fila['RES_C_INGRESOS_TOTALES'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E93', div($fila['RES_C_UTILIDAD_PROYECTO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E94', div($fila['RES_C_COSTO_CREDITO_TESORERIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E95', div($fila['RES_C_IMPUESTO_RENTA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )
							 	->setCellValue('E96', div($fila['RES_C_UTILIDAD_PROYECTO2'],$fila['RES_C_TOTAL_AREA_VENDIBLE']) )

							 	->setCellValue('E98', div($fila['RES_C_COSTO_VENTAS_GESTION'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E99',  div($fila['RES_C_VALOR_TERRENO_LIBROS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E100',  div($fila['RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	
							 	
							 	->setCellValue('E102',  div($fila['RES_C_TIR_EM'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E103',  div($fila['RES_C_VPN_TASA_DESCUENTO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E105', div($fila['RES_C_UTILIDAD_COLPATRIA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E106',  div($fila['RES_C_CONSTRUCTORA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E107',  div($fila['RES_C_TRANSACCIONES_INMOBILIARIAS'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	
							 	->setCellValue('E108',  div($fila['RES_C_PROMOTORA'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E110',  div($fila['RES_C_TIR_COLPATRIA_EM'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	->setCellValue('E111',  div($fila['RES_C_VPN_COLPATRIA_TASA_DESCUENTO'],$fila['RES_C_TOTAL_AREA_VENDIBLE']))
							 	

							 	
							 	->setCellValue('F27', div($fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F28', div($fila['RES_C_PRESUPUESTO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F29', div($fila['RES_C_INCREMENTOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F30', div($fila['RES_C_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F31', div($fila['RES_C_PRESUPUESTO2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F32', div($fila['RES_C_INCREMENTOS2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F33', div($fila['RES_C_GASTOS_IMPREVISTOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F34', div($fila['RES_C_COSTOS_POST_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F35', div($fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F36', div($fila['RES_C_HONORARIOS_CONSTRUCCION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F37', div($fila['RES_C_HONORARIOS_CONSTRUCCION2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F38', div($fila['RES_C_GASTOS_REEMBOLSABLES'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F39', div($fila['RES_C_HONORARIOS_INTERVENTORIA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F40', div($fila['RES_C_HONORARIOS_INTERVENTORIA2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F41', div($fila['RES_C_GASTOS_REEMBOLSABLES2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F42', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F43', div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F44', div($fila['RES_C_GASTOS_REEMBOLSABLES3'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F45', div($fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F46', div($fila['RES_C_COSTO_TOTAL_CONSTRUCCION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F47', div($fila['RES_C_HONORARIOS_GERENCIA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F48', div($fila['RES_C_HONORARIOS_GERENCIA2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F49', div($fila['RES_C_GASTOS_REEMBOLSABLES4'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F50', div($fila['RES_C_HONORARIOS_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F51', div($fila['RES_C_HONORARIOS_VENTAS2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F52', div($fila['RES_C_GASTOS_REEMBOLSABLES5'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F53', div($fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F54', div($fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F55', div($fila['RES_C_GASTOS_PUBLICIDAD'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F56', div($fila['RES_C_GASTOS_SALA_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F57', div($fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F58', div($fila['RES_C_COMISIONES_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F59', div($fila['RES_C_GASTOS_LEGALES'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F60', div($fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F61', div($fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F62', div($fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F63', div($fila['RES_C_IMPUESTO_ICA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F64', div($fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F65', div($fila['RES_C_VALOR_TERENO_URBANIZADO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F66', div($fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F67', div($fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F68', div($fila['RES_C_COMISIONES_FIDUCIA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F69', div($fila['RES_C_PREVENTAS_Y_ADMON'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F70', div($fila['RES_C_NUEVOGAR'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F71', div($fila['RES_C_GASTOS_FINANCIEROS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F72', div($fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F73', div($fila['RES_C_OTROS_COSTOS_CREDITO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F74', div($fila['RES_C_CORRECCION_MONETARIA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F75', div($fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F76', div($fila['RES_C_OTROS_COSTOS_Y_GASTOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F77', div($fila['RES_C_GASTO1'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F78', div($fila['RES_C_GASTO2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F79', div($fila['RES_C_GASTO3'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F80', div($fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F81', div($fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F82', div($fila['RES_C_VENTAS_BRUTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F83', div($fila['RES_C_OTROS_INGRESOS_VENTAS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F84', div($fila['RES_C_INTERESES_SUBROGACION'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F85', div($fila['RES_C_INTERESES_MORA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F86', div($fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F87', div($fila['RES_C_RENDIMIENTOS_FIDEICOMISO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F88', div($fila['RES_C_OTROS_INGRESOS'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F89', div($fila['RES_C_INGRESOS1'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F90', div($fila['RES_C_INGRESOS2'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F91', div($fila['RES_C_INGRESOS3'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F92', div($fila['RES_C_INGRESOS_TOTALES'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F93', div($fila['RES_C_UTILIDAD_PROYECTO'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F94', div($fila['RES_C_COSTO_CREDITO_TESORERIA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F95', div($fila['RES_C_IMPUESTO_RENTA'],$fila['RES_C_TOTAL_UNIDADES']) )
							 	->setCellValue('F96', div($fila['RES_C_UTILIDAD_PROYECTO2'],$fila['RES_C_TOTAL_UNIDADES']) )

							 	->setCellValue('F98', div($fila['RES_C_COSTO_VENTAS_GESTION'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F99',  div($fila['RES_C_VALOR_TERRENO_LIBROS'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F100',  div($fila['RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES'],$fila['RES_C_TOTAL_UNIDADES']))
							 	
							 	
							 	->setCellValue('F102',  div($fila['RES_C_TIR_EM'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F103',  div($fila['RES_C_VPN_TASA_DESCUENTO'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F105', div($fila['RES_C_UTILIDAD_COLPATRIA'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F106',  div($fila['RES_C_CONSTRUCTORA'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F107',  div($fila['RES_C_TRANSACCIONES_INMOBILIARIAS'],$fila['RES_C_TOTAL_UNIDADES']))
							 	
							 	->setCellValue('F108',  div($fila['RES_C_PROMOTORA'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F110',  div($fila['RES_C_TIR_COLPATRIA_EM'],$fila['RES_C_TOTAL_UNIDADES']))
							 	->setCellValue('F111',  div($fila['RES_C_VPN_COLPATRIA_TASA_DESCUENTO'],$fila['RES_C_TOTAL_UNIDADES']))
							 	
							 	
							 	
							 	->setCellValue('G27',  $fila['RES_C_EJE_UI'])
							 	->setCellValue('G28',  $fila['RES_C_EJE_UIP'])
							 	->setCellValue('G29',  $fila['RES_C_EJE_UII'])
							 	->setCellValue('G30',  $fila['RES_C_EJE_CM'])
							 	->setCellValue('G31',  $fila['RES_C_EJE_CMP'])
							 	->setCellValue('G32',  $fila['RES_C_EJE_CMI'])
							 	->setCellValue('G33',  $fila['RES_C_EJE_GI'])
							 	->setCellValue('G34',  $fila['RES_C_EJE_CP'])
							 	->setCellValue('G35',  $fila['RES_C_EJE_CD'])
							 	->setCellValue('G36',  $fila['RES_C_EJE_CD_HC'])
							 	->setCellValue('G37',  $fila['RES_C_EJE_CD_HC_HC'])
							 	->setCellValue('G38',  $fila['RES_C_EJE_CD_HC_GR'])
							 	->setCellValue('G39',  $fila['RES_C_EJE_CD_HI'])
							 	->setCellValue('G40',  $fila['RES_C_EJE_CD_HI_HI'])
							 	->setCellValue('G41',  $fila['RES_C_EJE_CD_HI_GR'])
							 	->setCellValue('G42',  $fila['RES_C_EJE_CD_OH'])
							 	->setCellValue('G43',  $fila['RES_C_EJE_CD_OH_OH'])
							 	->setCellValue('G44',  $fila['RES_C_EJE_CD_OH_GR'])
							 	->setCellValue('G45',  $fila['RES_C_EJE_CD_ID'])
							 	->setCellValue('G46',  $fila['RES_C_EJE_CT'])
							 	->setCellValue('G47',  $fila['RES_C_EJE_CT_HG'])
							 	->setCellValue('G48',  $fila['RES_C_EJE_CT_HG_HG'])
							 	->setCellValue('G49',  $fila['RES_C_EJE_CT_HG_GR'])
							 	->setCellValue('G50',  $fila['RES_C_EJE_CT_HV'])
							 	->setCellValue('G51',  $fila['RES_C_EJE_CT_HV_HV'])
							 	->setCellValue('G52',  $fila['RES_C_EJE_CT_HV_GR'])
							 	->setCellValue('G53',  $fila['RES_C_EJE_CT_CP'])
							 	->setCellValue('G54',  $fila['RES_C_EJE_CT_CP_SV'])
							 	->setCellValue('G55',  $fila['RES_C_EJE_CT_CP_GP'])
							 	->setCellValue('G56',  $fila['RES_C_EJE_CT_CP_GS'])
							 	->setCellValue('G57',  $fila['RES_C_EJE_CT_CP_AU'])
							 	->setCellValue('G58',  $fila['RES_C_EJE_CT_CP_CV'])
							 	->setCellValue('G59',  $fila['RES_C_EJE_CT_GL'])
							 	->setCellValue('G60',  $fila['RES_C_EJE_CT_GL_HC'])
							 	->setCellValue('G61',  $fila['RES_C_EJE_CT_GL_NR'])
							 	->setCellValue('G62',  $fila['RES_C_EJE_CT_GL_IP'])
							 	->setCellValue('G63',  $fila['RES_C_EJE_CT_GL_IC'])
							 	->setCellValue('G64',  $fila['RES_C_EJE_CA'])
							 	->setCellValue('G65',  $fila['RES_C_EJE_CA_VT'])
							 	->setCellValue('G66',  $fila['RES_C_EJE_CA_VT_PV'])
							 	->setCellValue('G67',  $fila['RES_C_EJE_CA_VT_OP'])
							 	->setCellValue('G68',  $fila['RES_C_EJE_CA_CF'])
							 	->setCellValue('G69',  $fila['RES_C_EJE_CA_CF_PA'])
							 	->setCellValue('G70',  $fila['RES_C_EJE_CA_CF_NH'])
							 	->setCellValue('G71',  $fila['RES_C_EJE_CA_GF'])
							 	->setCellValue('G72',  $fila['RES_C_EJE_CA_GF_IC'])
							 	->setCellValue('G73',  $fila['RES_C_EJE_CA_GF_OC'])
							 	->setCellValue('G74',  $fila['RES_C_EJE_CA_GF_CM'])
							 	->setCellValue('G75',  $fila['RES_C_EJE_CA_GF_IT'])
							 	->setCellValue('G76',  $fila['RES_C_EJE_CA_OC'])
							 	->setCellValue('G77',  $fila['RES_C_EJE_CA_OC_OC1'])
							 	->setCellValue('G78',  $fila['RES_C_EJE_CA_OC_OC2'])
							 	->setCellValue('G79',  $fila['RES_C_EJE_CA_OC_OC3'])
							 	->setCellValue('G80',  $fila['RES_C_EJE_CA_RI'])
							 	->setCellValue('G81',  $fila['RES_C_EJE_CI'])
							 	->setCellValue('G82',  $fila['RES_C_EJE_CI_VB'])
							 	->setCellValue('G83',  $fila['RES_C_EJE_CI_OV'])
							 	->setCellValue('G84',  $fila['RES_C_EJE_CI_OV_IS'])
							 	->setCellValue('G85',  $fila['RES_C_EJE_CI_OV_IM'])
							 	->setCellValue('G86',  $fila['RES_C_EJE_CI_OV_OC'])
							 	->setCellValue('G87',  $fila['RES_C_EJE_CI_RF'])
							 	->setCellValue('G88',  $fila['RES_C_EJE_CI_OI'])
							 	->setCellValue('G89',  $fila['RES_C_EJE_CI_OI_OI1'])
							 	->setCellValue('G90',  $fila['RES_C_EJE_CI_OI_OI2'])
							 	->setCellValue('G91',  $fila['RES_C_EJE_CI_OI_OI3'])
							 	->setCellValue('G92',  $fila['RES_C_EJE_IT'])
							 	->setCellValue('G93',  $fila['RES_C_EJE_UP'])
							 	->setCellValue('G94',  $fila['RES_C_EJE_UP_CC'])
							 	->setCellValue('G95',  $fila['RES_C_EJE_UP_IR'])
							 	->setCellValue('G96',  $fila['RES_C_EJE_UP2'])

							 	->setCellValue('G98',  $fila['RES_C_EJE_CV'])
							 	->setCellValue('G99',  $fila['RES_C_EJE_VT'])
							 	->setCellValue('G100',  $fila['RES_C_EJE_CVG'])
							 	
							 	
							 	->setCellValue('H27',div($fila['RES_C_EJE_UI'],$fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA']))
							 	->setCellValue('H28',div($fila['RES_C_EJE_UIP'],$fila['RES_C_PRESUPUESTO']))
							 	->setCellValue('H29',div($fila['RES_C_EJE_UII'],$fila['RES_C_INCREMENTOS']))
							 	->setCellValue('H30',div($fila['RES_C_EJE_CM'],$fila['RES_C_COSTO_MATERIALES_MANO_OBRA']))
							 	->setCellValue('H31',div($fila['RES_C_EJE_CMP'],$fila['RES_C_PRESUPUESTO2']))
							 	->setCellValue('H32',div($fila['RES_C_EJE_CMI'],$fila['RES_C_INCREMENTOS2']))
							 	->setCellValue('H33',div($fila['RES_C_EJE_GI'],$fila['RES_C_GASTOS_IMPREVISTOS']))
							 	->setCellValue('H34',div($fila['RES_C_EJE_CP'],$fila['RES_C_COSTOS_POST_VENTAS']))
							 	->setCellValue('H35',div($fila['RES_C_EJE_CD'],$fila['RES_C_COSTO_DIRECTO_CONSTRUCCION']))
							 	->setCellValue('H36',div($fila['RES_C_EJE_CD_HC'],$fila['RES_C_HONORARIOS_CONSTRUCCION']))
							 	->setCellValue('H37',div($fila['RES_C_EJE_CD_HC_HC'],$fila['RES_C_HONORARIOS_CONSTRUCCION2']))
							 	->setCellValue('H38',div($fila['RES_C_EJE_CD_HC_GR'],$fila['RES_C_GASTOS_REEMBOLSABLES']))
							 	->setCellValue('H39',div($fila['RES_C_EJE_CD_HI'],$fila['RES_C_HONORARIOS_INTERVENTORIA']))
							 	->setCellValue('H40',div($fila['RES_C_EJE_CD_HI_HI'],$fila['RES_C_HONORARIOS_INTERVENTORIA2']))
							 	->setCellValue('H41',div($fila['RES_C_EJE_CD_HI_GR'],$fila['RES_C_GASTOS_REEMBOLSABLES2']))
							 	->setCellValue('H42',div($fila['RES_C_EJE_CD_OH'],$fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS']))
							 	->setCellValue('H43',div($fila['RES_C_EJE_CD_OH_OH'],$fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2']))
							 	->setCellValue('H44',div($fila['RES_C_EJE_CD_OH_GR'],$fila['RES_C_GASTOS_REEMBOLSABLES3']))
							 	->setCellValue('H45',div($fila['RES_C_EJE_CD_ID'],$fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION']))
							 	->setCellValue('H46',div($fila['RES_C_EJE_CT'],$fila['RES_C_COSTO_TOTAL_CONSTRUCCION']))
							 	->setCellValue('H47',div($fila['RES_C_EJE_CT_HG'],$fila['RES_C_HONORARIOS_GERENCIA']))
							 	->setCellValue('H48',div($fila['RES_C_EJE_CT_HG_HG'],$fila['RES_C_HONORARIOS_GERENCIA2']))
							 	->setCellValue('H49',div($fila['RES_C_EJE_CT_HG_GR'],$fila['RES_C_GASTOS_REEMBOLSABLES4']))
							 	->setCellValue('H50',div($fila['RES_C_EJE_CT_HV'],$fila['RES_C_HONORARIOS_VENTAS']))
							 	->setCellValue('H51',div($fila['RES_C_EJE_CT_HV_HV'],$fila['RES_C_HONORARIOS_VENTAS2']))
							 	->setCellValue('H52',div($fila['RES_C_EJE_CT_HV_GR'],$fila['RES_C_GASTOS_REEMBOLSABLES5']))
							 	->setCellValue('H53',div($fila['RES_C_EJE_CT_CP'],$fila['RES_C_COSTOS_PROMOCION_Y_VENTAS']))
							 	->setCellValue('H54',div($fila['RES_C_EJE_CT_CP_SV'],$fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION']))
							 	->setCellValue('H55',div($fila['RES_C_EJE_CT_CP_GP'],$fila['RES_C_GASTOS_PUBLICIDAD']))
							 	->setCellValue('H56',div($fila['RES_C_EJE_CT_CP_GS'],$fila['RES_C_GASTOS_SALA_VENTAS']))
							 	->setCellValue('H57',div($fila['RES_C_EJE_CT_CP_AU'],$fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR']))
							 	->setCellValue('H58',div($fila['RES_C_EJE_CT_CP_CV'],$fila['RES_C_COMISIONES_VENTAS']))
							 	->setCellValue('H59',div($fila['RES_C_EJE_CT_GL'],$fila['RES_C_GASTOS_LEGALES']))
							 	->setCellValue('H60',div($fila['RES_C_EJE_CT_GL_HC'],$fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR']))
							 	->setCellValue('H61',div($fila['RES_C_EJE_CT_GL_NR'],$fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS']))
							 	->setCellValue('H62',div($fila['RES_C_EJE_CT_GL_IP'],$fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR']))
							 	->setCellValue('H63',div($fila['RES_C_EJE_CT_GL_IC'],$fila['RES_C_IMPUESTO_ICA']))
							 	->setCellValue('H64',div($fila['RES_C_EJE_CA'],$fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS']))
							 	->setCellValue('H65',div($fila['RES_C_EJE_CA_VT'],$fila['RES_C_VALOR_TERENO_URBANIZADO']))
							 	->setCellValue('H66',div($fila['RES_C_EJE_CA_VT_PV'],$fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO']))
							 	->setCellValue('H67',div($fila['RES_C_EJE_CA_VT_OP'],$fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION']))
							 	->setCellValue('H68',div($fila['RES_C_EJE_CA_CF'],$fila['RES_C_COMISIONES_FIDUCIA']))
							 	->setCellValue('H69',div($fila['RES_C_EJE_CA_CF_PA'],$fila['RES_C_PREVENTAS_Y_ADMON']))
							 	->setCellValue('H70',div($fila['RES_C_EJE_CA_CF_NH'],$fila['RES_C_NUEVOGAR']))
							 	->setCellValue('H71',div($fila['RES_C_EJE_CA_GF'],$fila['RES_C_GASTOS_FINANCIEROS']))
							 	->setCellValue('H72',div($fila['RES_C_EJE_CA_GF_IC'],$fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR']))
							 	->setCellValue('H73',div($fila['RES_C_EJE_CA_GF_OC'],$fila['RES_C_OTROS_COSTOS_CREDITO']))
							 	->setCellValue('H74',div($fila['RES_C_EJE_CA_GF_CM'],$fila['RES_C_CORRECCION_MONETARIA']))
							 	->setCellValue('H75',div($fila['RES_C_EJE_CA_GF_IT'],$fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF']))
							 	->setCellValue('H76',div($fila['RES_C_EJE_CA_OC'],$fila['RES_C_OTROS_COSTOS_Y_GASTOS']))
							 	->setCellValue('H77',div($fila['RES_C_EJE_CA_OC_OC1'],$fila['RES_C_GASTO1']))
							 	->setCellValue('H78',div($fila['RES_C_EJE_CA_OC_OC2'],$fila['RES_C_GASTO2']))
							 	->setCellValue('H79',div($fila['RES_C_EJE_CA_OC_OC3'],$fila['RES_C_GASTO3']))
							 	->setCellValue('H80',div($fila['RES_C_EJE_CA_RI'],$fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS']))
							 	->setCellValue('H81',div($fila['RES_C_EJE_CI'],$fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS']))
							 	->setCellValue('H82',div($fila['RES_C_EJE_CI_VB'],$fila['RES_C_VENTAS_BRUTAS']))
							 	->setCellValue('H83',div($fila['RES_C_EJE_CI_OV'],$fila['RES_C_OTROS_INGRESOS_VENTAS']))
							 	->setCellValue('H84',div($fila['RES_C_EJE_CI_OV_IS'],$fila['RES_C_INTERESES_SUBROGACION']))
							 	->setCellValue('H85',div($fila['RES_C_EJE_CI_OV_IM'],$fila['RES_C_INTERESES_MORA']))
							 	->setCellValue('H86',div($fila['RES_C_EJE_CI_OV_OC'],$fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS']))
							 	->setCellValue('H87',div($fila['RES_C_EJE_CI_RF'],$fila['RES_C_RENDIMIENTOS_FIDEICOMISO']))
							 	->setCellValue('H88',div($fila['RES_C_EJE_CI_OI'],$fila['RES_C_OTROS_INGRESOS']))
							 	->setCellValue('H89',div($fila['RES_C_EJE_CI_OI_OI1'],$fila['RES_C_INGRESOS1']))
							 	->setCellValue('H90',div($fila['RES_C_EJE_CI_OI_OI2'],$fila['RES_C_INGRESOS2']))
							 	->setCellValue('H91',div($fila['RES_C_EJE_CI_OI_OI3'],$fila['RES_C_INGRESOS3']))
							 	->setCellValue('H92',div($fila['RES_C_EJE_IT'],$fila['RES_C_INGRESOS_TOTALES']))
							 	->setCellValue('H93',div($fila['RES_C_EJE_UP'],$fila['RES_C_UTILIDAD_PROYECTO']))
							 	->setCellValue('H94',div($fila['RES_C_EJE_UP_CC'],$fila['RES_C_COSTO_CREDITO_TESORERIA']))
							 	->setCellValue('H95',div($fila['RES_C_EJE_UP_IR'],$fila['RES_C_IMPUESTO_RENTA']))
							 	->setCellValue('H96',div($fila['RES_C_EJE_UP2'],$fila['RES_C_UTILIDAD_PROYECTO2']));
							 	
//Formato Separador con comas
							 	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
							 	->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
							 	
							 	$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
							 	->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
							 	
							 	$i++;
							 	
							 }
							 
							 
							 
							 
							 
		//Formato miles Con separador.
							 
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B5:B111')
							 ->getNumberFormat()->setFormatCode('#,##0');
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C5:C111')
							 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D5:D111')
							 ->getNumberFormat()->setFormatCode('#,##0');
							 
							 $objPHPExcel->getActiveSheet()->getStyle('E5:E111')
							 ->getNumberFormat()->setFormatCode('#,##0');
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F5:F111')
							 ->getNumberFormat()->setFormatCode('#,##0');
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G5:G111')
							 ->getNumberFormat()->setFormatCode('#,##0');
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H5:H111')
							 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
							 

							 
							 
	//Dimension de columnas
							 
							 
							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
							 
							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setAutoSize(true);

							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(2)->setWidth(16);

							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(3)->setWidth(16);

							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(4)->setWidth(16);
							 
							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(5)->setWidth(16);

							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(6)->setWidth(16);
							 
							 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(7)->setWidth(16);
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
							 
								//Null
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($abc);

							 $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($abc);

							 $objPHPExcel->getActiveSheet()->getStyle('A3:H3')->applyFromArray($abc);

							 $objPHPExcel->getActiveSheet()->getStyle('A4:H4')->applyFromArray($abc);

	//Alrededor

							 
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A6:A9')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A10:A12')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A13:A15')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A16:A21')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A22:A23')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A27:A34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A36:A45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A47:A63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A65:A80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A82:A91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A94:A95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('A106:A108')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B6:B9')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B10:B12')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B13:B15')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B16:B21')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B22:B23')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B27:B34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B36:B45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B47:B63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B65:B80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B82:B91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B94:B95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('B106:B108')->applyFromArray($BStyle);



							 $objPHPExcel->getActiveSheet()->getStyle('C27:C34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C36:C45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C47:C63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C65:C80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C82:C91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C94:C95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('C106:C108')->applyFromArray($BStyle);



							 $objPHPExcel->getActiveSheet()->getStyle('D27:D34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D36:D45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D47:D63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D65:D80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D82:D91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D94:D95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('D106:D108')->applyFromArray($BStyle);


							 $objPHPExcel->getActiveSheet()->getStyle('E27:E34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E36:E45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E47:E63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E65:E80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E82:E91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E94:E95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('E106:E108')->applyFromArray($BStyle);



							 $objPHPExcel->getActiveSheet()->getStyle('F27:F34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F36:F45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F47:F63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F65:F80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F82:F91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F94:F95')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('F106:F108')->applyFromArray($BStyle);



							 $objPHPExcel->getActiveSheet()->getStyle('G27:G34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('G36:G45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('G47:G63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('G65:G80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('G82:G91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('G94:G95')->applyFromArray($BStyle);




							 $objPHPExcel->getActiveSheet()->getStyle('H27:H34')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('H36:H45')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('H47:H63')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('H65:H80')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('H82:H91')->applyFromArray($BStyle);

							 $objPHPExcel->getActiveSheet()->getStyle('H94:H95')->applyFromArray($BStyle);


	//LINEA CONTINUA

							 $objPHPExcel->getActiveSheet()->getStyle('A25:H25')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A26:H26')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A35:H35')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A46:H46')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A64:H64')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A81:H81')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A92:H92')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A93:H93')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A96:H96')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A98:G98')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A99:G99')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A100:G100')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A102:F102')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A103:F103')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A105:F105')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A110:F110')->applyFromArray($styleArray);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A111:F111')->applyFromArray($styleArray);
							 
							 
							 
							 
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
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A5')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A25')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A35')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A46')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A64')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A81')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A92:A93')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A96')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A102:A103')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A105')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A110:A111')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
							 
							 
	//-----------Gris
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A28:A29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A31:A32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A37:A38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A40:A41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A48:A49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A51:A52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A54:A58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A60:A63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A66:A67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A69:A70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A72:A75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A77:A79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A84:A86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A89:A91')->applyFromArray($colorLetra);
							 
	//-------
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B28:B29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B31:B32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B37:B38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B40:B41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B48:B49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B51:B52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B54:B58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B60:B63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B66:B67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B69:B70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B72:B75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B77:B79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B84:B86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B89:B91')->applyFromArray($colorLetra);
							 
	//-----
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C28:C29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C31:C32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C37:C38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C40:C41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C48:C49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C51:C52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C54:C58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C60:C63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C66:C67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C69:C70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C72:C75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C77:C79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C84:C86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C89:C91')->applyFromArray($colorLetra);
							 
	//------
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D28:D29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D31:D32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D37:D38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D40:D41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D48:D49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D51:D52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D54:D58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D60:D63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D66:D67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D69:D70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D72:D75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D77:D79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D84:D86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D89:D91')->applyFromArray($colorLetra);
	//------
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F28:F29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F31:F32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F37:F38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F40:F41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F48:F49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F51:F52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F54:F58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F60:F63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F66:F67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F69:F70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F72:F75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F77:F79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F84:F86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F89:F91')->applyFromArray($colorLetra);
							 
	//-----
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G28:G29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G31:G32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G37:G38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G40:G41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G48:G49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G51:G52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G54:G58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G60:G63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G66:G67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G69:G70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G72:G75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G77:G79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G84:G86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('G89:G91')->applyFromArray($colorLetra);
							 
	//--
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H28:H29')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H31:H32')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H37:H38')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H40:H41')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H48:H49')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H51:H52')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H54:H58')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H60:H63')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H66:H67')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H69:H70')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H72:H75')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H77:H79')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H84:H86')->applyFromArray($colorLetra);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H89:H91')->applyFromArray($colorLetra);
							 
							 
							 
		//Cambio Color Celdas
							 
							 $celdaGris=array(
							 	'fill' => array(
							 		'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 		'color' => array('rgb' => 'F2F2F2')));	
							 
							 $celdaAzulClaro=array(
							 	'fill' => array(
							 		'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 		'color' => array('rgb' => '4C82B8')));	
							 
							 $celdaAzulOscuro=array(
							 	'fill' => array(
							 		'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 		'color' => array('rgb' => '366092')));	

							 $objPHPExcel->getActiveSheet()->getStyle('B5:B23')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('B25:B108')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B110:B111')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('C25:C108')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('C110:C111')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('D25:D108')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('D110:D111')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('E25:E108')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('E110:E111')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('F25:F108')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('F110:F111')->applyFromArray($celdaGris);

							 $objPHPExcel->getActiveSheet()->getStyle('G25:G100')->applyFromArray($celdaGris);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('H25:H100')->applyFromArray($celdaGris);					
							 
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($celdaAzulOscuro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($celdaAzulOscuro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A25:A26')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A35')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A46')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A64')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A81')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A92:A93')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A96')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A102:A103')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A105')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A110:A111')->applyFromArray($celdaAzulClaro);			
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B5:B23')->applyFromArray(
							 	array(
							 		'fill' => array(
							 			'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 			'color' => array('rgb' => 'DCE6F1'))));

							 $objPHPExcel->getActiveSheet()->getStyle('B25:B108')->applyFromArray(
							 	array(
							 		'fill' => array(
							 			'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 			'color' => array('rgb' => 'DCE6F1'))));
							 
							 $objPHPExcel->getActiveSheet()->getStyle('B110:B111')->applyFromArray(
							 	array(
							 		'fill' => array(
							 			'type' => PHPExcel_Style_Fill::FILL_SOLID,
							 			'color' => array('rgb' => 'DCE6F1'))));
							 $negrilla = array(
							 	'font' => array(
							 		'bold' => true
							 		)
							 	);	
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A35:H35')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A46:H46')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A64:H64')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A81:H81')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A92:H92')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A93:H93')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A96:H96')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A102:H102')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A103:H103')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A105:H105')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A110:H110')->applyFromArray($negrilla);
							 
							 $objPHPExcel->getActiveSheet()->getStyle('A111:H111')->applyFromArray($negrilla);
							 
		//Combinar Celdas
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('A25:A26');
							 
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('A1:C1');
							 
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('A5:B5');					
							 
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('B25:B26');
							 
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('F25:F26');					
							 
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('G25:G26');	
							 $objPHPExcel->setActiveSheetIndex(0)
							 ->mergeCells('H25:H26');					
							 PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);		
							 
							 
		// Se asigna el nombre a la hoja
							 $objPHPExcel->getActiveSheet()->setTitle('Resumen');

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
							header('Content-Disposition: attachment;filename="Resumen.pdf"');
							header('Cache-Control: max-age=0');

							$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
							$objWriter->writeAllSheets();
							$objWriter->save('php://output');
							exit;
						}
						else{
							print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T055-informesExcel-D.php';</script>";
						}
						function div($a,$b){
							if($b==0){
								return 0;
							}
							else{
								return ($a/$b);
							}
							
						}
						
						function cambiarFecha($fecha){
							
							list($dia,$mes,$anio) = explode("-",$fecha);
							switch ($mes) {
								case '01':
								$fechaF = "Ene/".$anio;
								return $fechaF;
								break;
								case '02':
								$fechaF = "Feb/".$anio;
								return $fechaF;
								break;
								case '03':
								$fechaF = "Mar/".$anio;
								return $fechaF;
								break;
								case '04':
								$fechaF = "Abr/".$anio;
								return $fechaF;
								break;
								case '05':
								$fechaF = "May/".$anio;
								return $fechaF;
								break;
								case '06':
								$fechaF = "Jun/".$anio;
								return $fechaF;
								break;
								case '07':
								$fechaF = "Jul/".$anio;
								return $fechaF;
								break;
								case '08':
								$fechaF = "Ago/".$anio;
								return $fechaF;
								break;
								case '09':
								$fechaF = "Sep/".$anio;
								return $fechaF;
								break;
								case '10':
								$fechaF = "Oct/".$anio;
								return $fechaF;
								break;
								case '11':
								$fechaF = "Nov/".$anio;
								return $fechaF;
								break;
								case '12':
								$fechaF = "Dec/".$anio;
								return $fechaF;
								break;
								default:
								$fechaF = "";
								return $fechaF;
								break;
							}

						}
						
						function cambiarFecha1($fecha){
							
							list($anio,$mes,$dia) = explode("-",$fecha);
							switch ($mes) {
								case '01':
								$fechaF = "Ene/".$anio;
								return $fechaF;
								break;
								case '02':
								$fechaF = "Feb/".$anio;
								return $fechaF;
								break;
								case '03':
								$fechaF = "Mar/".$anio;
								return $fechaF;
								break;
								case '04':
								$fechaF = "Abr/".$anio;
								return $fechaF;
								break;
								case '05':
								$fechaF = "May/".$anio;
								return $fechaF;
								break;
								case '06':
								$fechaF = "Jun/".$anio;
								return $fechaF;
								break;
								case '07':
								$fechaF = "Jul/".$anio;
								return $fechaF;
								break;
								case '08':
								$fechaF = "Ago/".$anio;
								return $fechaF;
								break;
								case '09':
								$fechaF = "Sep/".$anio;
								return $fechaF;
								break;
								case '10':
								$fechaF = "Oct/".$anio;
								return $fechaF;
								break;
								case '11':
								$fechaF = "Nov/".$anio;
								return $fechaF;
								break;
								case '12':
								$fechaF = "Dec/".$anio;
								return $fechaF;
								break;
								default:
								$fechaF = "";
								return $fechaF;
								break;
							}

						}
						?>