<?php
session_start();

  include "../../php/ABT-T000-conexion-U.php";
	
	$Example=$_SESSION['VAR']; 
	
	    $consulta = "SELECT 
		DATE_FORMAT(OFL_C_FECHA,'%m/%Y'),
			 DATE_FORMAT(OFL_C_FECHA,'%b/%y'),
			 CASE WHEN OFL_C_COSTO_CONSTRUCCION = 0 THEN '' ELSE OFL_C_COSTO_CONSTRUCCION END OFL_C_COSTO_CONSTRUCCION,
			 CASE WHEN OFL_C_HONORARIOS_COLPATRIA = 0 THEN '' ELSE OFL_C_HONORARIOS_COLPATRIA END OFL_C_HONORARIOS_COLPATRIA,
			 CASE WHEN OFL_C_GASTOS_OPERACION_COLPATRIA = 0 THEN '' ELSE OFL_C_GASTOS_OPERACION_COLPATRIA END OFL_C_GASTOS_OPERACION_COLPATRIA,
			 CASE WHEN OFL_C_GO_PROMOTORA_OPERACION = 0 THEN '' ELSE OFL_C_GO_PROMOTORA_OPERACION END OFL_C_GO_PROMOTORA_OPERACION,
			 CASE WHEN OFL_C_GO_PROMOTORA_OVERHEAD = 0 THEN '' ELSE OFL_C_GO_PROMOTORA_OVERHEAD END OFL_C_GO_PROMOTORA_OVERHEAD,
			 CASE WHEN OFL_C_GO_CONSTRUCTORA_OPERACION = 0 THEN '' ELSE OFL_C_GO_CONSTRUCTORA_OPERACION END OFL_C_GO_CONSTRUCTORA_OPERACION,
			 CASE WHEN OFL_C_GO_CONSTRUCTORA_OVERHEAD = 0 THEN '' ELSE OFL_C_GO_CONSTRUCTORA_OVERHEAD END OFL_C_GO_CONSTRUCTORA_OVERHEAD,
			 CASE WHEN OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION = 0 THEN '' ELSE OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION END OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION,
			 CASE WHEN OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD = 0 THEN '' ELSE OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD END OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD,
			 CASE WHEN OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA = 0 THEN '' ELSE OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA END OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA,
			 CASE WHEN OFL_C_VALOR_TERRENO = 0 THEN '' ELSE OFL_C_VALOR_TERRENO END OFL_C_VALOR_TERRENO,
			 CASE WHEN OFL_C_EGRESOS_CREDITO_CONSTRUCTOR = 0 THEN '' ELSE OFL_C_EGRESOS_CREDITO_CONSTRUCTOR END OFL_C_EGRESOS_CREDITO_CONSTRUCTOR,
			 CASE WHEN OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA = 0 THEN '' ELSE OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA END OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA,
			 CASE WHEN OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA = 0 THEN '' ELSE OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA END OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA,
			 CASE WHEN OFL_C_OTROS_COSTOS_Y_GASTOS = 0 THEN '' ELSE OFL_C_OTROS_COSTOS_Y_GASTOS END OFL_C_OTROS_COSTOS_Y_GASTOS,
			 CASE WHEN OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS = 0 THEN '' ELSE OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS END OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS,
			 CASE WHEN OFL_C_REINTEGROS_IVA = 0 THEN '' ELSE OFL_C_REINTEGROS_IVA END OFL_C_REINTEGROS_IVA,
			 CASE WHEN OFL_C_SUBTOTAL_EGRESOS_COLPATRIA = 0 THEN '' ELSE OFL_C_SUBTOTAL_EGRESOS_COLPATRIA END OFL_C_SUBTOTAL_EGRESOS_COLPATRIA,
			 CASE WHEN OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES = 0 THEN '' ELSE OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES END OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES,
			 CASE WHEN OFL_C_INGRESOS_VENTAS_COLPATRIA = 0 THEN '' ELSE OFL_C_INGRESOS_VENTAS_COLPATRIA END OFL_C_INGRESOS_VENTAS_COLPATRIA,
			 CASE WHEN OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO = 0 THEN '' ELSE OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO END OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO,
			 CASE WHEN OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS = 0 THEN '' ELSE OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS END OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS,
			 CASE WHEN OFL_C_OTROS_INGRESOS = 0 THEN '' ELSE OFL_C_OTROS_INGRESOS END OFL_C_OTROS_INGRESOS,
			 CASE WHEN OFL_C_APORTES_DE_SOCIOS = 0 THEN '' ELSE OFL_C_APORTES_DE_SOCIOS END OFL_C_APORTES_DE_SOCIOS,
			 CASE WHEN OFL_C_SUBTOTAL_INGRESOS = 0 THEN '' ELSE OFL_C_SUBTOTAL_INGRESOS END OFL_C_SUBTOTAL_INGRESOS,
			 CASE WHEN OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS = 0 THEN '' ELSE OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS END OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS,
			 CASE WHEN OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS = 0 THEN '' ELSE OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS END OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS,
			 CASE WHEN OFL_C_FLUJO_NETO_CAJA_CT = 0 THEN '' ELSE OFL_C_FLUJO_NETO_CAJA_CT END OFL_C_FLUJO_NETO_CAJA_CT,
			 CASE WHEN OFL_C_FLUJO_ACUMULADO = 0 THEN '' ELSE OFL_C_FLUJO_ACUMULADO END OFL_C_FLUJO_ACUMULADO,
			 CASE WHEN OFL_C_COSTO_CREDITO_TESORERIA = 0 THEN '' ELSE OFL_C_COSTO_CREDITO_TESORERIA END OFL_C_COSTO_CREDITO_TESORERIA,
			 CASE WHEN OFL_C_IMPUESTO_RENTA = 0 THEN '' ELSE OFL_C_IMPUESTO_RENTA END OFL_C_IMPUESTO_RENTA,
			 CASE WHEN OFL_C_FLUJO_NETO_CAJA = 0 THEN '' ELSE OFL_C_FLUJO_NETO_CAJA END OFL_C_FLUJO_NETO_CAJA,
			 CASE WHEN OFL_C_FLUJO_ACUMULADO_CAJA = 0 THEN '' ELSE OFL_C_FLUJO_ACUMULADO_CAJA END OFL_C_FLUJO_ACUMULADO_CAJA,
			 CASE WHEN OFL_C_VPN = 0 THEN '' ELSE OFL_C_VPN END OFL_C_VPN,
			 CASE WHEN OFL_C_TIR_EA = 0 THEN '' ELSE OFL_C_TIR_EA END OFL_C_TIR_EA,
			 CASE WHEN OFL_C_TIR_EM = 0 THEN '' ELSE OFL_C_TIR_EM END OFL_C_TIR_EM,
			 CASE WHEN OFL_C_TIR_MOD_EA = 0 THEN '' ELSE OFL_C_TIR_MOD_EA END OFL_C_TIR_MOD_EA,
			 CASE WHEN OFL_C_TIR_MOD_EM = 0 THEN '' ELSE OFL_C_TIR_MOD_EM END OFL_C_TIR_MOD_EM,
			 CASE WHEN OFL_C_VALOR_TOTAL_VENTAS = 0 THEN '' ELSE OFL_C_VALOR_TOTAL_VENTAS END OFL_C_VALOR_TOTAL_VENTAS,
			 CASE WHEN OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON = 0 THEN '' ELSE OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON END OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON,
			 CASE WHEN OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR = 0 THEN '' ELSE OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR END OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR,
			 CASE WHEN OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS = 0 THEN '' ELSE OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS END OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS,
			 CASE WHEN OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO = 0 THEN '' ELSE OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO END OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO,
			 CASE WHEN OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA = 0 THEN '' ELSE OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA END OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA,
			 CASE WHEN OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA = 0 THEN '' ELSE OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA END OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA,
			 CASE WHEN OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA = 0 THEN '' ELSE OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA END OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA,
			 CASE WHEN OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON = 0 THEN '' ELSE OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON END OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON,
			 CASE WHEN OFL_C_COMISION_FIDUCIARIA_NUEVOGAR = 0 THEN '' ELSE OFL_C_COMISION_FIDUCIARIA_NUEVOGAR END OFL_C_COMISION_FIDUCIARIA_NUEVOGAR,
			 CASE WHEN OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS = 0 THEN '' ELSE OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS END OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS,
			 CASE WHEN OFL_C_SUBTOTAL_EGRESOS = 0 THEN '' ELSE OFL_C_SUBTOTAL_EGRESOS END OFL_C_SUBTOTAL_EGRESOS,
			 CASE WHEN OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR = 0 THEN '' ELSE OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR END OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR,
			 CASE WHEN OFL_C_INGRESOS_VENTAS = 0 THEN '' ELSE OFL_C_INGRESOS_VENTAS END OFL_C_INGRESOS_VENTAS,
			 CASE WHEN OFL_C_IV_ABONOS_SEPARACION = 0 THEN '' ELSE OFL_C_IV_ABONOS_SEPARACION END OFL_C_IV_ABONOS_SEPARACION,
			 CASE WHEN OFL_C_IV_CARTERA_CUOTA_INICIAL = 0 THEN '' ELSE OFL_C_IV_CARTERA_CUOTA_INICIAL END OFL_C_IV_CARTERA_CUOTA_INICIAL,
			 CASE WHEN OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA = 0 THEN '' ELSE OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA END OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA,
			 CASE WHEN OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO = 0 THEN '' ELSE OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO END OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO,
			 CASE WHEN OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES = 0 THEN '' ELSE OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES END OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES,
			 CASE WHEN OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES = 0 THEN '' ELSE OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES END OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES,
			 CASE WHEN OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS = 0 THEN '' ELSE OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS END OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS,
			 CASE WHEN OFL_C_OTROS_INGRESOS_POR_VENTAS = 0 THEN '' ELSE OFL_C_OTROS_INGRESOS_POR_VENTAS END OFL_C_OTROS_INGRESOS_POR_VENTAS,
			 CASE WHEN OFL_C_OI_INTERESES_SUBROGACION = 0 THEN '' ELSE OFL_C_OI_INTERESES_SUBROGACION END OFL_C_OI_INTERESES_SUBROGACION,
			 CASE WHEN OFL_C_OI_INTERESES_MORA = 0 THEN '' ELSE OFL_C_OI_INTERESES_MORA END OFL_C_OI_INTERESES_MORA,
			 CASE WHEN OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS = 0 THEN '' ELSE OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS END OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS,
			 CASE WHEN OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO = 0 THEN '' ELSE OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO END OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO,
			 CASE WHEN OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS = 0 THEN '' ELSE OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS END OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS,
			 CASE WHEN OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION = 0 THEN '' ELSE OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION END OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION,
			 CASE WHEN OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS = 0 THEN '' ELSE OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS END OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS,
			 CASE WHEN OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS = 0 THEN '' ELSE OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS END OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS,
			 CASE WHEN OFL_C_RENDIMIENTOS_FIDEICOMISO = 0 THEN '' ELSE OFL_C_RENDIMIENTOS_FIDEICOMISO END OFL_C_RENDIMIENTOS_FIDEICOMISO,
			 CASE WHEN OFL_C_FLUJO_NETO_FIDUCIARIA = 0 THEN '' ELSE OFL_C_FLUJO_NETO_FIDUCIARIA END OFL_C_FLUJO_NETO_FIDUCIARIA,
			 CASE WHEN OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION = 0 THEN '' ELSE OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION END OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION,
			 CASE WHEN OFL_C_FLUJO_ACUMULADO_FIDUCIARIA = 0 THEN '' ELSE OFL_C_FLUJO_ACUMULADO_FIDUCIARIA END OFL_C_FLUJO_ACUMULADO_FIDUCIARIA    
			 FROM tb_c_otros_flujos
			 WHERE OFL_C_CONS_ID = '$Example'";
			 
			 	$cons="SELECT RES_C_VENTAS_BRUTAS,RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO FROM tb_c_resumen WHERE RES_C_CONS_ID = '$Example'"; 


	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../PHPExcel/Classes/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("IKA") //Autor
							 ->setLastModifiedBy("IKA") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel Flujo Caja")
							 ->setSubject("Reporte Excel Flujo Caja")
							 ->setDescription("Reporte Excel Flujo Caja")
							 ->setKeywords("Reporte Excel Flujo Caja")
							 ->setCategory("Reporte excel");

		$tituloReporte = "OTROS FLUJOS DE CAJA - CONSOLIDADO  -  Miles de Pesos";
		$titulosColumnas = array('Costo Construccion + Honorarios + GVentas + GLegales',
			' - Honorarios Colpatria',
			 '+ Gastos de Operación COLPATRIA',
			'    Promotora - Operación',
			'    Promotora - Overhead',
			'    Constructora - Operación',
			'    Constructora - Overhead',
			'    Transacciones Inmobiliarias - Operación',
			'    Transacciones Inmobiliarias - Overhead',
			'  - Otros pagos efectuados por Fiducia',
			'Valor terreno (neto de pagos fiducia)',
			'Egresos crédito constructor (sin fiducia admon) y abonos crédito terreno',
			'Impto Transacciones Financieras (ITF) ',
			'Comision Fiduciaria NUEVOGAR (proyectos sin otras fiducias)',
			'Otros Costos y Gastos',
			'Aportes en efectivo COLPATRIA a Fideicomisos (fiducias admon)',
			'Reintegros IVA (proyectos VIS)',
			'SUB - TOTAL EGRESOS',
			'Traslados Fiducias e Ingresos Totales proyectos sin fiducia',
			'Ingresos por ventas (desmonte fiducia preventas)',
			'Desembolsoso crédito constructor (fiducias preventa) y terreno',
			'Traslados liquidaciones fideicomisos ',
			'Otros Ingresos (proyectos con fiducia)',
			'Aportes de Socios  (en efectivo) a terreno y sub-proyectos',
			'SUB - TOTAL INGRESOS',
			'FLUJO DE CAJA ANTES DE REINTEGROS A SOCIOS',
			'Reintegros de aportes y utilidades a socios',
			'FLUJO NETO DE CAJA (ai  y costo creditos tesorería)',
			'FLUJO ACUMULADO ',
			'Costo créditos de tesorería' ,
			'Impuesto de renta ',
			'FLUJO NETO DE CAJA ',
			'FLUJO ACUMULADO DE CAJA',
			'Pagos efectuados por fiducia administración',
			'    - Intereses Crédito Constructor',
			'    - Honorarios Visitas Obra y otros gastos de crédito',
			'    - Abonos extraordinarios al crédito',
			'    - Pagos del Terreno efectuados por Fiducia',
			'    - Otros pagos efectuados por Fiducia',
			'- Traslados de Fondos de Fiducia a Constructora',
			'- Comision Fiduciaria - Preventas y Admón (si aplica)',
			'- Comision Fiduciaria - NUEVOGAR',
			'- Impuesto Transacciones financieras (ITF)',
			'SUB - TOTAL EGRESOS',
			'+ Desembolsos Credito Constructor',
			'+ Ingresos por Ventas',
			'    + Abonos a la Separación (t)',
			'    + Cartera Cuota Inicial (t y n)',
			'    + Saldo Cuota Inicial (n) y Abono Escritura (t)',
			'    + Subsidio VIS y Ahorro Programado (t)',
			'    + Excedentes Crédito Compradores (t y n)',
			'    + Giros directos créditos otras entidades  (n apl)',
			'    + Ingresos por recibir ventas realizadas (napl)',
			'+ Otros ingresos por ventas (intereses otros)',
			'    + Intereses de Subrogación ',
			'    + Intereses de mora (no aplica)',
			'    + Ofertas comerciales y otros ingresos (napl)',
			'+ Aportes en efectivo de COLPATRIA al Fideicomiso',
			'+ Aportes Otros Socios Inversionistas',
			'+ Rendimientos Fideicomiso - capitalizacion',
			'SUB - TOTAL INGRESOS ANTES DE RENDIMIENTOS',
			'FLUJO NETO SIN RENDIMIENTOS',
			'+ Rendimientos Fideicomiso',
			'FLUJO NETO FIDUCIARIA',
			' - Traslado Saldo Final Fiducia (liquidación)',
			'FLUJO ACUMULADO FIDUCIARIA');
		
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
	
	// CALCULOS TIR Y VPN
		#VPN: WACC  (ultimo, indicadores ) VPN: VNA(WACC; FLUJO NETO CAJA)
					 #Calculo VPN
					 $wacc = "SELECT IND_VALOR FROM tb_indicador ORDER BY IND_FECHA";
					 $datos= $mysqli->query($wacc);
					 
					 if ($datos) {
						  while ($fila = $datos->fetch_row()) {  
							  $indicador = $fila[0];
						  }
					 }
					else{
						 $indicador = 0;
					 }
					#TIR Efeciva Mensual
					 #C52 / CONS_PER (Mensual, 12, Bimensal, 6, Trimestral, 4, Anual, 1, Quinquenio, 
						 $periodo = "SELECT CONS_PER,CONS_IND_VALOR_REE FROM tb_consolidados WHERE CONS_ID ='$Example'";
					 $consulta= $mysqli->query($periodo);
					 $moneda=1;					 
				     if ($consulta) {
						  while ($fila = $consulta->fetch_row()) {  
							  $periodicidad = $fila[0];
							  $moneda=$fila[1];
						  }
					 }
					else{
						 $periodicidad = 0;
					 }
					 if($moneda==0){
						 $moneda=1;
					 }
					 
					 switch ($periodicidad) {
						case 'Mensual':
							$periodo = 12;
							break;
						case 'Bimensual':
							$periodo = 6;
							break;
						case 'Trimestral':
							$periodo = 4;
							break;
						case 'Anual':
							$periodo = 1;
							break;
						case 'Quinquenio':
							$periodo = 5;
							break;
							
					}
		
		
		// FIN CALCULOS TIR Y VPN
	
	
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
					 }
					 
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A3',$tituloReporte)
        		     ->setCellValue('A7',  $titulosColumnas[0])
					 ->setCellValue('A8',  $titulosColumnas[1])
					 ->setCellValue('A9',  $titulosColumnas[2])
					 ->setCellValue('A10',  $titulosColumnas[3])
					 ->setCellValue('A11',  $titulosColumnas[4])
					 ->setCellValue('A12',  $titulosColumnas[5])
					 ->setCellValue('A13',  $titulosColumnas[6])
					 ->setCellValue('A14',  $titulosColumnas[7])
					 ->setCellValue('A15',  $titulosColumnas[8])
					 ->setCellValue('A16',  $titulosColumnas[9])
					 ->setCellValue('A17',  $titulosColumnas[10])
					 ->setCellValue('A18',  $titulosColumnas[11])
					 ->setCellValue('A19',  $titulosColumnas[12])
					 ->setCellValue('A20',  $titulosColumnas[13])
					 ->setCellValue('A21',  $titulosColumnas[14])
					 ->setCellValue('A22',  $titulosColumnas[15])
					 ->setCellValue('A23',  $titulosColumnas[16])
					 ->setCellValue('A24',  $titulosColumnas[17])
					 ->setCellValue('A25',  $titulosColumnas[18])
					 ->setCellValue('A26',  $titulosColumnas[19])
					 ->setCellValue('A27',  $titulosColumnas[20])
					 ->setCellValue('A28',  $titulosColumnas[21])
					 ->setCellValue('A29',  $titulosColumnas[22])
					 ->setCellValue('A30',  $titulosColumnas[23])
					 ->setCellValue('A31',  $titulosColumnas[24])
					 ->setCellValue('A32',  $titulosColumnas[25])
					 ->setCellValue('A33',  $titulosColumnas[26])
					 ->setCellValue('A34',  $titulosColumnas[27])
					 ->setCellValue('A35',  $titulosColumnas[28])
					 ->setCellValue('A36',  $titulosColumnas[29])
					 ->setCellValue('A37',  $titulosColumnas[30])
					 ->setCellValue('A38',  $titulosColumnas[31])
					 ->setCellValue('A39',  $titulosColumnas[32])
					 ->setCellValue('A47',  $titulosColumnas[33])
					 ->setCellValue('A48',  $titulosColumnas[34])
					
					 ->setCellValue('A49',  $titulosColumnas[35])
					 ->setCellValue('A50',  $titulosColumnas[36])
					 ->setCellValue('A51',  $titulosColumnas[37])
					 ->setCellValue('A52',  $titulosColumnas[38])
					 ->setCellValue('A53',  $titulosColumnas[39]) 
					 ->setCellValue('A54',  $titulosColumnas[40])
					 ->setCellValue('A55',  $titulosColumnas[41])
					 ->setCellValue('A56',  $titulosColumnas[42])
					 ->setCellValue('A57',  $titulosColumnas[43])
					 ->setCellValue('A58',  $titulosColumnas[44])
					 ->setCellValue('A59',  $titulosColumnas[45])
					 ->setCellValue('A60',  $titulosColumnas[46])
					 ->setCellValue('A61',  $titulosColumnas[47])
					 ->setCellValue('A62',  $titulosColumnas[48])
					 ->setCellValue('A63',  $titulosColumnas[49])
					 ->setCellValue('A64',  $titulosColumnas[50])
					 ->setCellValue('A65',  $titulosColumnas[51])
					 ->setCellValue('A66',  $titulosColumnas[52])
					 ->setCellValue('A67',  $titulosColumnas[53])
					 ->setCellValue('A68',  $titulosColumnas[54])
					 ->setCellValue('A69',  $titulosColumnas[55])
					 ->setCellValue('A70',  $titulosColumnas[56])
					 ->setCellValue('A71',  $titulosColumnas[57])
					 ->setCellValue('A72',  $titulosColumnas[58])
					 ->setCellValue('A73',  $titulosColumnas[59])
					 ->setCellValue('A74',  $titulosColumnas[60])
					 ->setCellValue('A75',  $titulosColumnas[61])
					 ->setCellValue('A76',  $titulosColumnas[62])
					 ->setCellValue('A77',  $titulosColumnas[63])
					 ->setCellValue('A78',  $titulosColumnas[64])
					 ->setCellValue('A79',  $titulosColumnas[65]);
		
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
			
			
			 // ->setCellValue($columnas[$c].'2',  '1/'.$fila["DATE_FORMAT(OFL_C_FECHA,'%m/%Y')"])
					
				     ->setCellValue($columnas[$c].'3',   $fila["DATE_FORMAT(OFL_C_FECHA,'%b/%y')"])	
		
					 ->setCellValue($columnas[$c].'7',$fila['OFL_C_COSTO_CONSTRUCCION']/$moneda)
					->setCellValue($columnas[$c].'8',$fila['OFL_C_HONORARIOS_COLPATRIA']/$moneda)
					->setCellValue($columnas[$c].'9',$fila['OFL_C_GASTOS_OPERACION_COLPATRIA']/$moneda)
					->setCellValue($columnas[$c].'10',$fila['OFL_C_GO_PROMOTORA_OPERACION']/$moneda)
					->setCellValue($columnas[$c].'11',$fila['OFL_C_GO_PROMOTORA_OVERHEAD']/$moneda)
					->setCellValue($columnas[$c].'12',$fila['OFL_C_GO_CONSTRUCTORA_OPERACION']/$moneda)
					->setCellValue($columnas[$c].'13',$fila['OFL_C_GO_CONSTRUCTORA_OVERHEAD']/$moneda)
					->setCellValue($columnas[$c].'14',$fila['OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION']/$moneda)
					->setCellValue($columnas[$c].'15',$fila['OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD']/$moneda)
					->setCellValue($columnas[$c].'16',$fila['OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA']/$moneda)
					->setCellValue($columnas[$c].'17',$fila['OFL_C_VALOR_TERRENO']/$moneda)
					->setCellValue($columnas[$c].'18',$fila['OFL_C_EGRESOS_CREDITO_CONSTRUCTOR']/$moneda)
					->setCellValue($columnas[$c].'19',$fila['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA']/$moneda)
					->setCellValue($columnas[$c].'20',$fila['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA']/$moneda)
					->setCellValue($columnas[$c].'21',$fila['OFL_C_OTROS_COSTOS_Y_GASTOS']/$moneda)
					->setCellValue($columnas[$c].'22',$fila['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS']/$moneda)
					->setCellValue($columnas[$c].'23',$fila['OFL_C_REINTEGROS_IVA']/$moneda)
					->setCellValue($columnas[$c].'24',$fila['OFL_C_SUBTOTAL_EGRESOS_COLPATRIA']/$moneda)
					->setCellValue($columnas[$c].'25',$fila['OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES']/$moneda)
					->setCellValue($columnas[$c].'26',$fila['OFL_C_INGRESOS_VENTAS_COLPATRIA']/$moneda)
					->setCellValue($columnas[$c].'27',$fila['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO']/$moneda)
					->setCellValue($columnas[$c].'28',$fila['OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS']/$moneda)
					->setCellValue($columnas[$c].'29',$fila['OFL_C_OTROS_INGRESOS']/$moneda)
					->setCellValue($columnas[$c].'30',$fila['OFL_C_APORTES_DE_SOCIOS']/$moneda)
					->setCellValue($columnas[$c].'31',$fila['OFL_C_SUBTOTAL_INGRESOS']/$moneda)
					->setCellValue($columnas[$c].'32',$fila['OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS']/$moneda)
					->setCellValue($columnas[$c].'33',$fila['OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS']/$moneda)
					->setCellValue($columnas[$c].'34',$fila['OFL_C_FLUJO_NETO_CAJA_CT']/$moneda)
					->setCellValue($columnas[$c].'35',$fila['OFL_C_FLUJO_ACUMULADO']/$moneda)
					->setCellValue($columnas[$c].'36',$fila['OFL_C_COSTO_CREDITO_TESORERIA']/$moneda)
					->setCellValue($columnas[$c].'37',$fila['OFL_C_IMPUESTO_RENTA']/$moneda)
					->setCellValue($columnas[$c].'38',$fila['OFL_C_FLUJO_NETO_CAJA']/$moneda)
					->setCellValue($columnas[$c].'39',$fila['OFL_C_FLUJO_ACUMULADO_CAJA']/$moneda)
					->setCellValue($columnas[$c].'47',$fila['OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON']/$moneda)
					->setCellValue($columnas[$c].'48',$fila['OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR']/$moneda)
					->setCellValue($columnas[$c].'49',$fila['OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS']/$moneda)
					->setCellValue($columnas[$c].'50',$fila['OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO']/$moneda)
					->setCellValue($columnas[$c].'51',$fila['OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA']/$moneda)
					->setCellValue($columnas[$c].'52',$fila['OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA']/$moneda)
					->setCellValue($columnas[$c].'53',$fila['OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA']/$moneda)
					->setCellValue($columnas[$c].'54',$fila['OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON']/$moneda)
					->setCellValue($columnas[$c].'55',$fila['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR']/$moneda)
					->setCellValue($columnas[$c].'56',$fila['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS']/$moneda)
					->setCellValue($columnas[$c].'57',$fila['OFL_C_SUBTOTAL_EGRESOS']/$moneda)
					->setCellValue($columnas[$c].'58',$fila['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR']/$moneda)
					->setCellValue($columnas[$c].'59',$fila['OFL_C_INGRESOS_VENTAS']/$moneda)
					->setCellValue($columnas[$c].'60',$fila['OFL_C_IV_ABONOS_SEPARACION']/$moneda)
					->setCellValue($columnas[$c].'61',$fila['OFL_C_IV_CARTERA_CUOTA_INICIAL']/$moneda)
					->setCellValue($columnas[$c].'62',$fila['OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA']/$moneda)
					->setCellValue($columnas[$c].'63',$fila['OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO']/$moneda)
					->setCellValue($columnas[$c].'64',$fila['OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES']/$moneda)
					->setCellValue($columnas[$c].'65',$fila['OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES']/$moneda)
					->setCellValue($columnas[$c].'66',$fila['OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS']/$moneda)
					->setCellValue($columnas[$c].'67',$fila['OFL_C_OTROS_INGRESOS_POR_VENTAS']/$moneda)
					->setCellValue($columnas[$c].'68',$fila['OFL_C_OI_INTERESES_SUBROGACION']/$moneda)
					->setCellValue($columnas[$c].'69',$fila['OFL_C_OI_INTERESES_MORA']/$moneda)
					->setCellValue($columnas[$c].'70',$fila['OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS']/$moneda)
					->setCellValue($columnas[$c].'71',$fila['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO']/$moneda)
					->setCellValue($columnas[$c].'72',$fila['OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS']/$moneda)
					->setCellValue($columnas[$c].'73',$fila['OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION']/$moneda)
					->setCellValue($columnas[$c].'74',$fila['OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS']/$moneda)
					->setCellValue($columnas[$c].'75',$fila['OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS']/$moneda)
					->setCellValue($columnas[$c].'76',$fila['OFL_C_RENDIMIENTOS_FIDEICOMISO']/$moneda)
					->setCellValue($columnas[$c].'77',$fila['OFL_C_FLUJO_NETO_FIDUCIARIA']/$moneda)
					->setCellValue($columnas[$c].'78',$fila['OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION']/$moneda)
					->setCellValue($columnas[$c].'79',$fila['OFL_C_FLUJO_ACUMULADO_FIDUCIARIA']/$moneda)
					
					->setCellValue('B41','VPN(10.54%ea)')
					->setCellValue('B42','=NPV('.$indicador.'%,E38:XFD38)')
					
					->setCellValue('C41','TIR(ea)')
					->setCellValue('C42', '=(IFERROR(XIRR(E38:XFD38,E2:EFD2),0))')
					
					->setCellValue('D41','TIR(em)')
					// ->setCellValue('D42', $periodo)
					->setCellValue('D42','=C42/'.$periodo)
					
					->setCellValue('E41','TIRmod(ea)')
					#->setCellValue('E42','=MIRR(G48:XFD38,B12,0)')
					->setCellValue('E42', '=MIRR(E38:XFD38,'.$indicador.'%,0)')
					 
					
					->setCellValue('F41','TIRmod(em)')
						
					
					
					 ->setCellValue('F42', '=E42/'.$periodo)
					;
					
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
					array(
					'fill'=>array(
						'type'=>PHPExcel_Style_Fill::FILL_SOLID,
							'color'=>array('rgb'=>'F2F2F2'))));	
							
					
									
					
		
									
				//Formato Separador con comas
				  $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
					 ->getNumberFormat()->setFormatCode('#,##0');
					 
					$objPHPExcel->getActiveSheet()->getStyle('C42:H42')
				 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
			
 	$objPHPExcel->getActiveSheet()->getStyle('C7:C79')
				 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
			
					
					 
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'4')->applyFromArray($BStyle);
	
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'6:'.$columnas[$c].'39')->applyFromArray($BStyle);
				
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'47:'.$columnas[$c].'79')->applyFromArray($BStyle);
					 //----Gris
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'10:'.$columnas[$c].'15')->applyFromArray($colorLetra);
				
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'48:'.$columnas[$c].'52')->applyFromArray($colorLetra);
				
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'60:'.$columnas[$c].'66')->applyFromArray($colorLetra);
	
				$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'68:'.$columnas[$c].'70')->applyFromArray($colorLetra);
				
				$objPHPExcel->getActiveSheet()->getStyle('A10:A15')->applyFromArray($colorLetra);
					
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
					 ->setCellValue('A6',  'FLUJO ACUMULADO DE CAJA')
					 ->setCellValue('A46',  'FLUJO DE CAJA  FIDUCIARIA')
					 ;
					 
					 
		
$objPHPExcel->setActiveSheetIndex(0) 
				
				  
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
					 
					 ->setCellValue('C7', '=B7/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C8', '=B8/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C9', '=B9/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C10', '=B10/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C11', '=B11/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C12', '=B12/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C13', '=B13/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C14', '=B14/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C15', '=B15/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C16', '=B16/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C17', '=B17/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C18', '=B18/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C19', '=B19/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C20', '=B20/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C21', '=B21/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C22', '=B22/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C23', '=B23/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C24', '=B24/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C25', '=B25/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C26', '=B26/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C27', '=B27/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C28', '=B28/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C29', '=B29/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C30', '=B30/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C31', '=B31/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C32', '=B32/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C33', '=B33/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C34', '=B34/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C35', '=B35/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C36', '=B36/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C37', '=B37/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C38', '=B38/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C39', '=B39/'.$ven_bru.'*'.$moneda)
					 
					 ->setCellValue('C47', '=B47/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C48', '=B48/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C49', '=B49/'.$ven_bru.'*'.$moneda)
					 
					 ->setCellValue('C50', '=B50/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C51', '=B51/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C52', '=B52/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C53', '=B53/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C54', '=B54/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C55', '=B55/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C56', '=B56/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C57', '=B57/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C58', '=B58/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C59', '=B59/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C60', '=B60/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C61', '=B61/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C62', '=B62/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C63', '=B63/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C64', '=B64/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C65', '=B65/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C66', '=B66/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C67', '=B67/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C68', '=B68/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C69', '=B69/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C70', '=B70/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C71', '=B71/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C72', '=B72/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C73', '=B73/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C74', '=B74/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C75', '=B75/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C76', '=B76/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C77', '=B77/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C78', '=B78/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C79', '=B79/'.$ven_bru.'*'.$moneda)
					 				 
									 
				 ;
	
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
	
	
	$styleArray = array(
	  'borders' => array(
		'allborders' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);

	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A6:A39')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('A46:A79')->applyFromArray($BStyle);
	

	$objPHPExcel->getActiveSheet()->getStyle('B6:B39')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C6:C39')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($BStyle);
	
	//-----
	
	$objPHPExcel->getActiveSheet()->getStyle('B41:B42')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('C41:C42')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('D41:D42')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('E41:E42')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('F41:F42')->applyFromArray($styleArray);
	
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B47:B79')->applyFromArray($BStyle);
	
	$objPHPExcel->getActiveSheet()->getStyle('C47:C79')->applyFromArray($BStyle);
	
	

	
	//----------------
	
	$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A31:'.$columnas[$c].'31')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A32:'.$columnas[$c].'32')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A57:'.$columnas[$c].'57')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A74:'.$columnas[$c].'74')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A77:'.$columnas[$c].'77')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A79:'.$columnas[$c].'79')->applyFromArray($styleArray);

	
	
		
	//Cambio color Letra
	$blanco  = array(
    'font'  => array(
        'color' => array('rgb' => '000000'),
        
    ));
	
	
	
	
	
	//--------Blanco
	// $objPHPExcel->getActiveSheet()->getStyle('E2:PPP2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	
	$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A24')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A31:A32')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A34:A35')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A38:A39')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A46')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A57')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A74:A75')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A77')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A79')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	//-----------Gris
	
	$objPHPExcel->getActiveSheet()->getStyle('A10:A15')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A48:A52')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A60:A66')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A68:A70')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B10:B15')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B48:B52')->applyFromArray($colorLetra);
		
	$objPHPExcel->getActiveSheet()->getStyle('B60:B66')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('B68:B70')->applyFromArray($colorLetra);
	
		
	
		//Cambio Color Celdas
		
							
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
		
			
		
		$objPHPExcel->getActiveSheet()->getStyle('A6')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));	

		$objPHPExcel->getActiveSheet()->getStyle('A24')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			
				
		$objPHPExcel->getActiveSheet()->getStyle('A31:A32')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));		

		$objPHPExcel->getActiveSheet()->getStyle('A34:A35')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));				
				
				
		$objPHPExcel->getActiveSheet()->getStyle('A38:A39')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));						
		
		$objPHPExcel->getActiveSheet()->getStyle('A46')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			

		$objPHPExcel->getActiveSheet()->getStyle('A57')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));
		
		$objPHPExcel->getActiveSheet()->getStyle('A74:A75')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));			
		
		$objPHPExcel->getActiveSheet()->getStyle('A77')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));

		$objPHPExcel->getActiveSheet()->getStyle('A79')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '4C82B8'))));				
				
		$objPHPExcel->getActiveSheet()->getStyle('B3:B39')->applyFromArray(
        array(
		'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'DCE6F1'))));
				
		$objPHPExcel->getActiveSheet()->getStyle('B47:B79')->applyFromArray(
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
		$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A31:'.$columnas[$c].'31')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A32:'.$columnas[$c].'32')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A34:'.$columnas[$c].'34')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A35:'.$columnas[$c].'35')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A38:'.$columnas[$c].'38')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A39:'.$columnas[$c].'39')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A57:'.$columnas[$c].'57')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A74:'.$columnas[$c].'74')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A75:'.$columnas[$c].'75')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A77:'.$columnas[$c].'77')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A79:'.$columnas[$c].'79')->applyFromArray(
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
		$objPHPExcel->getActiveSheet()->setTitle('Otros Flujos');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReporteOtrosFlujos.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T055-informesExcel-D.php';</script>";
	}
?>