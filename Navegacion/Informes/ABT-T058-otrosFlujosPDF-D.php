<?php
session_start();
	include "../../php/ABT-T000-conexion-U.php";
    #$conexion = new mysqli("localhost", "u517611460_ika", "Colombia2016*", "arbiter",3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	
	$Example=$_SESSION['VAR']; 
	    $consulta = "SELECT OFL_C_CONS_ID,
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
					 
					  $c47=0;
					 $c48=0;
					 $c49=0;
					 $c50=0;
					 $c51=0;
					 $c52=0;
					 $c53=0;
					 $c54=0;
					 $c55=0;
					 $c56=0;
					 $c57=0;
					 $c58=0;
					 $c59=0;
					 $c60=0;
					 $c61=0;
					 $c62=0;
					 $c63=0;
					 $c64=0;
					 $c65=0;
					 $c66=0;
					 $c67=0;
					 $c68=0;
					 $c69=0;
					 $c70=0;
					 $c71=0;
					 $c72=0;
					 $c73=0;
					 $c74=0;
					 $c75=0;
					 $c76=0;
					 $c77=0;
					 $c78=0;
					 $c79=0;
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					;
		
		//Se agregan los datos 
		$i = 0;
		
		
			while ($fila1 = $resultado1->fetch_array()) {
					$c7= $c7    +$fila1['OFL_C_COSTO_CONSTRUCCION'];
					$c8= $c8    +$fila1['OFL_C_HONORARIOS_COLPATRIA'];
					$c9= $c9    +$fila1['OFL_C_GASTOS_OPERACION_COLPATRIA'];
					$c10= $c10    +$fila1['OFL_C_GO_PROMOTORA_OPERACION'];
					$c11= $c11    +$fila1['OFL_C_GO_PROMOTORA_OVERHEAD'];
					$c12= $c12    +$fila1['OFL_C_GO_CONSTRUCTORA_OPERACION'];
					$c13= $c13    +$fila1['OFL_C_GO_CONSTRUCTORA_OVERHEAD'];
					$c14= $c14    +$fila1['OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION'];
					$c15= $c15    +$fila1['OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD'];
					$c16= $c16    +$fila1['OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA'];
					$c17= $c17    +$fila1['OFL_C_VALOR_TERRENO'];
					$c18= $c18    +$fila1['OFL_C_EGRESOS_CREDITO_CONSTRUCTOR'];
					$c19= $c19    +$fila1['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA'];
					$c20= $c20    +$fila1['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA'];
					$c21= $c21    +$fila1['OFL_C_OTROS_COSTOS_Y_GASTOS'];
					$c22= $c22    +$fila1['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS'];
					$c23= $c23    +$fila1['OFL_C_REINTEGROS_IVA'];
					$c24= $c24    +$fila1['OFL_C_SUBTOTAL_EGRESOS_COLPATRIA'];
					$c25= $c25    +$fila1['OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES'];
					$c26= $c26    +$fila1['OFL_C_INGRESOS_VENTAS_COLPATRIA'];
					$c27= $c27    +$fila1['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO'];
					$c28= $c28    +$fila1['OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS'];
					$c29= $c29    +$fila1['OFL_C_OTROS_INGRESOS'];
					$c30= $c30    +$fila1['OFL_C_APORTES_DE_SOCIOS'];
					$c31= $c31    +$fila1['OFL_C_SUBTOTAL_INGRESOS'];
					$c32= $c32    +$fila1['OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS'];
					$c33= $c33    +$fila1['OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS'];
					$c34= $c34    +$fila1['OFL_C_FLUJO_NETO_CAJA_CT'];
					$c35= $c35    +$fila1['OFL_C_FLUJO_ACUMULADO'];
					$c36= $c36    +$fila1['OFL_C_COSTO_CREDITO_TESORERIA'];
					$c37= $c37    +$fila1['OFL_C_IMPUESTO_RENTA'];
					$c38= $c38    +$fila1['OFL_C_FLUJO_NETO_CAJA'];
					$c39= $c39    +$fila1['OFL_C_FLUJO_ACUMULADO_CAJA'];
					$c47= $c47    +$fila1['OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON'];
					$c48= $c48   +$fila1['OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR'];
					$c49= $c49    +$fila1['OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS'];
					$c50= $c50    +$fila1['OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO'];
					$c51= $c51    +$fila1['OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA'];
					$c52= $c52    +$fila1['OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA'];
					$c53= $c53    +$fila1['OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA'];
					$c54= $c54    +$fila1['OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON'];
					$c55= $c55    +$fila1['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR'];
					$c56= $c56    +$fila1['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS'];
					$c57= $c57    +$fila1['OFL_C_SUBTOTAL_EGRESOS'];
					$c58= $c58    +$fila1['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR'];
					$c59= $c59    +$fila1['OFL_C_INGRESOS_VENTAS'];
					$c60= $c60    +$fila1['OFL_C_IV_ABONOS_SEPARACION'];
					$c61= $c61    +$fila1['OFL_C_IV_CARTERA_CUOTA_INICIAL'];
					$c62= $c62    +$fila1['OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA'];
					$c63= $c63    +$fila1['OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO'];
					$c64= $c64    +$fila1['OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES'];
					$c65= $c65    +$fila1['OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES'];
					$c66= $c66    +$fila1['OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS'];
					$c67= $c67    +$fila1['OFL_C_OTROS_INGRESOS_POR_VENTAS'];
					$c68= $c68    +$fila1['OFL_C_OI_INTERESES_SUBROGACION'];
					$c69= $c69    +$fila1['OFL_C_OI_INTERESES_MORA'];
					$c70= $c70    +$fila1['OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS'];
					$c71= $c71    +$fila1['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO'];
					$c72= $c72    +$fila1['OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS'];
					$c73= $c73    +$fila1['OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION'];
					$c74= $c74    +$fila1['OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS'];
					$c75= $c75    +$fila1['OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS'];
					$c76= $c76    +$fila1['OFL_C_RENDIMIENTOS_FIDEICOMISO'];
					$c77= $c77    +$fila1['OFL_C_FLUJO_NETO_FIDUCIARIA'];
					$c78= $c78    +$fila1['OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION'];
					$c79= $c79    +$fila1['OFL_C_FLUJO_ACUMULADO_FIDUCIARIA'];
				
			}
		
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
				$objPHPExcel->setActiveSheetIndex($i) 
			
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
					  ->setCellValue('B47', $c47)
					 ->setCellValue('B48', $c48)
					 ->setCellValue('B49', $c49)
					 ->setCellValue('B50', $c50)
					 ->setCellValue('B51', $c51)
					 ->setCellValue('B52', $c52)
					 ->setCellValue('B53', $c53)
					 ->setCellValue('B54', $c54)
					 ->setCellValue('B55', $c55)
					 ->setCellValue('B56', $c56)
					 ->setCellValue('B57', $c57)
					 ->setCellValue('B58', $c58)
					 ->setCellValue('B59', $c59)
					 ->setCellValue('B60', $c60)
					 ->setCellValue('B61', $c61)
					 ->setCellValue('B62', $c62)
					 ->setCellValue('B63', $c63)
					 ->setCellValue('B64', $c64)
					 ->setCellValue('B65', $c65)
					 ->setCellValue('B66', $c66)
					 ->setCellValue('B67', $c67)
					 ->setCellValue('B68', $c68)
					 ->setCellValue('B69', $c69)
					 ->setCellValue('B70', $c70)
					 ->setCellValue('B71', $c71)
					 ->setCellValue('B72', $c72)
					 ->setCellValue('B73', $c73)
					 ->setCellValue('B74', $c74)
					 ->setCellValue('B75', $c75)
					 ->setCellValue('B76', $c76)
					 ->setCellValue('B77', $c77)
					 ->setCellValue('B78', $c78)
					 ->setCellValue('B79', $c79)
			
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
					 ->setCellValue('A79',  $titulosColumnas[65])
					 
					 
				     ->setCellValue($columnas[$c].'3',   $fila["DATE_FORMAT(OFL_C_FECHA,'%b/%y')"])	
		
					 ->setCellValue($columnas[$c].'7',$fila['OFL_C_COSTO_CONSTRUCCION'])
					->setCellValue($columnas[$c].'8',$fila['OFL_C_HONORARIOS_COLPATRIA'])
					->setCellValue($columnas[$c].'9',$fila['OFL_C_GASTOS_OPERACION_COLPATRIA'])
					->setCellValue($columnas[$c].'10',$fila['OFL_C_GO_PROMOTORA_OPERACION'])
					->setCellValue($columnas[$c].'11',$fila['OFL_C_GO_PROMOTORA_OVERHEAD'])
					->setCellValue($columnas[$c].'12',$fila['OFL_C_GO_CONSTRUCTORA_OPERACION'])
					->setCellValue($columnas[$c].'13',$fila['OFL_C_GO_CONSTRUCTORA_OVERHEAD'])
					->setCellValue($columnas[$c].'14',$fila['OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION'])
					->setCellValue($columnas[$c].'15',$fila['OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD'])
					->setCellValue($columnas[$c].'16',$fila['OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA'])
					->setCellValue($columnas[$c].'17',$fila['OFL_C_VALOR_TERRENO'])
					->setCellValue($columnas[$c].'18',$fila['OFL_C_EGRESOS_CREDITO_CONSTRUCTOR'])
					->setCellValue($columnas[$c].'19',$fila['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA'])
					->setCellValue($columnas[$c].'20',$fila['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA'])
					->setCellValue($columnas[$c].'21',$fila['OFL_C_OTROS_COSTOS_Y_GASTOS'])
					->setCellValue($columnas[$c].'22',$fila['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS'])
					->setCellValue($columnas[$c].'23',$fila['OFL_C_REINTEGROS_IVA'])
					->setCellValue($columnas[$c].'24',$fila['OFL_C_SUBTOTAL_EGRESOS_COLPATRIA'])
					->setCellValue($columnas[$c].'25',$fila['OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES'])
					->setCellValue($columnas[$c].'26',$fila['OFL_C_INGRESOS_VENTAS_COLPATRIA'])
					->setCellValue($columnas[$c].'27',$fila['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO'])
					->setCellValue($columnas[$c].'28',$fila['OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS'])
					->setCellValue($columnas[$c].'29',$fila['OFL_C_OTROS_INGRESOS'])
					->setCellValue($columnas[$c].'30',$fila['OFL_C_APORTES_DE_SOCIOS'])
					->setCellValue($columnas[$c].'31',$fila['OFL_C_SUBTOTAL_INGRESOS'])
					->setCellValue($columnas[$c].'32',$fila['OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS'])
					->setCellValue($columnas[$c].'33',$fila['OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS'])
					->setCellValue($columnas[$c].'34',$fila['OFL_C_FLUJO_NETO_CAJA_CT'])
					->setCellValue($columnas[$c].'35',$fila['OFL_C_FLUJO_ACUMULADO'])
					->setCellValue($columnas[$c].'36',$fila['OFL_C_COSTO_CREDITO_TESORERIA'])
					->setCellValue($columnas[$c].'37',$fila['OFL_C_IMPUESTO_RENTA'])
					->setCellValue($columnas[$c].'38',$fila['OFL_C_FLUJO_NETO_CAJA'])
					->setCellValue($columnas[$c].'39',$fila['OFL_C_FLUJO_ACUMULADO_CAJA'])
					->setCellValue($columnas[$c].'47',$fila['OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON'])
					->setCellValue($columnas[$c].'48',$fila['OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR'])
					->setCellValue($columnas[$c].'49',$fila['OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS'])
					->setCellValue($columnas[$c].'50',$fila['OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO'])
					->setCellValue($columnas[$c].'51',$fila['OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA'])
					->setCellValue($columnas[$c].'52',$fila['OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA'])
					->setCellValue($columnas[$c].'53',$fila['OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA'])
					->setCellValue($columnas[$c].'54',$fila['OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON'])
					->setCellValue($columnas[$c].'55',$fila['OFL_C_COMISION_FIDUCIARIA_NUEVOGAR'])
					->setCellValue($columnas[$c].'56',$fila['OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS'])
					->setCellValue($columnas[$c].'57',$fila['OFL_C_SUBTOTAL_EGRESOS'])
					->setCellValue($columnas[$c].'58',$fila['OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR'])
					->setCellValue($columnas[$c].'59',$fila['OFL_C_INGRESOS_VENTAS'])
					->setCellValue($columnas[$c].'60',$fila['OFL_C_IV_ABONOS_SEPARACION'])
					->setCellValue($columnas[$c].'61',$fila['OFL_C_IV_CARTERA_CUOTA_INICIAL'])
					->setCellValue($columnas[$c].'62',$fila['OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA'])
					->setCellValue($columnas[$c].'63',$fila['OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO'])
					->setCellValue($columnas[$c].'64',$fila['OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES'])
					->setCellValue($columnas[$c].'65',$fila['OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES'])
					->setCellValue($columnas[$c].'66',$fila['OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS'])
					->setCellValue($columnas[$c].'67',$fila['OFL_C_OTROS_INGRESOS_POR_VENTAS'])
					->setCellValue($columnas[$c].'68',$fila['OFL_C_OI_INTERESES_SUBROGACION'])
					->setCellValue($columnas[$c].'69',$fila['OFL_C_OI_INTERESES_MORA'])
					->setCellValue($columnas[$c].'70',$fila['OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS'])
					->setCellValue($columnas[$c].'71',$fila['OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO'])
					->setCellValue($columnas[$c].'72',$fila['OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS'])
					->setCellValue($columnas[$c].'73',$fila['OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION'])
					->setCellValue($columnas[$c].'74',$fila['OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS'])
					->setCellValue($columnas[$c].'75',$fila['OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS'])
					->setCellValue($columnas[$c].'76',$fila['OFL_C_RENDIMIENTOS_FIDEICOMISO'])
					->setCellValue($columnas[$c].'77',$fila['OFL_C_FLUJO_NETO_FIDUCIARIA'])
					->setCellValue($columnas[$c].'78',$fila['OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION'])
					->setCellValue($columnas[$c].'79',$fila['OFL_C_FLUJO_ACUMULADO_FIDUCIARIA'])
					
					->setCellValue('B41','VPN(10.54%ea)')
					->setCellValue('B42',$fila['OFL_C_VPN'])
					
					->setCellValue('C41','TIR(ea)')
					->setCellValue('C42','=TIR.NO.PER(E38:'.$columnas[$c].'38;E6:'.$columnas[$c].'6)')
					
					->setCellValue('D41','TIR(em)')
					->setCellValue('D42','=TIR.NO.PER(E38:'.$columnas[$c].'38;E6:'.$columnas[$c].'6)')
					
					->setCellValue('E41','TIRmod(ea)')
					->setCellValue('E42','=TIR.NO.PER(E38:'.$columnas[$c].'38;E6:'.$columnas[$c].'6)')
					
					->setCellValue('F41','TIRmod(em)')
					->setCellValue('F42','=TIR.NO.PER(E38:'.$columnas[$c].'38;E6:'.$columnas[$c].'6)')
					
					
					
					
					 ->setCellValue('A1',  'MODELO C')
					 ->setCellValue('B3',  'TOTALES')
					 ->setCellValue('C3',  '%')
					 ->setCellValue('C4',  'Ventas') 
					 ->setCellValue('A6',  'FLUJO ACUMULADO DE CAJA')
					 ->setCellValue('A46',  'FLUJO DE CAJA  FIDUCIARIA')
					
					;
					
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
					array(
					'fill'=>array(
						'type'=>PHPExcel_Style_Fill::FILL_SOLID,
							'color'=>array('rgb'=>'F2F2F2'))));	
							
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'39')->applyFromArray(
								array('borders'=>array(
									'allborders'=>array(
									'style'=>PHPExcel_Style_Border::BORDER_THIN
									))));
									
									
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'46:'.$columnas[$c].'79')->applyFromArray(
								array('borders'=>array(
									'allborders'=>array(
									'style'=>PHPExcel_Style_Border::BORDER_THIN
									))));	
		
									
				//Formato Separador con comas
				  $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
					
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
			
					
					 
					 
					 	$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
    ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
	
		
	
	//Dimension de columnas
	
	
	
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


	$objPHPExcel->getActiveSheet()->getStyle('A3:A39')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B3:B39')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A46:A79')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B46:B79')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C39')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C46:C79')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B41:F41')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B42:F42')->applyFromArray($styleArray);
		
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
	
	$objPHPExcel->getActiveSheet()->getStyle('A60:A66')->applyFromArray($colorLetra);
	
	$objPHPExcel->getActiveSheet()->getStyle('A68:A70')->applyFromArray($colorLetra);
	
		
	
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
		$objPHPExcel->getActiveSheet()->getStyle('A7:'.$columnas[$c].'7')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A8:'.$columnas[$c].'8')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A9:'.$columnas[$c].'9')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A16:'.$columnas[$c].'16')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A17:'.$columnas[$c].'17')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A18:'.$columnas[$c].'18')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A19:'.$columnas[$c].'19')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A20:'.$columnas[$c].'20')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A21:'.$columnas[$c].'21')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A22:'.$columnas[$c].'22')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A23:'.$columnas[$c].'23')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A25:'.$columnas[$c].'25')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A26:'.$columnas[$c].'26')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A28:'.$columnas[$c].'28')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A29:'.$columnas[$c].'29')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A30:'.$columnas[$c].'30')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A33:'.$columnas[$c].'33')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A36:'.$columnas[$c].'36')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A37:'.$columnas[$c].'37')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A51:'.$columnas[$c].'51')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A52:'.$columnas[$c].'52')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A53:'.$columnas[$c].'53')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A54:'.$columnas[$c].'54')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A55:'.$columnas[$c].'55')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A56:'.$columnas[$c].'56')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A58:'.$columnas[$c].'58')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A59:'.$columnas[$c].'59')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A67:'.$columnas[$c].'67')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A71:'.$columnas[$c].'71')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A72:'.$columnas[$c].'72')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A73:'.$columnas[$c].'73')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A76:'.$columnas[$c].'76')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A78:'.$columnas[$c].'78')->applyFromArray(
					$negrilla);	
		
		
		
		
		
				
		
		//Combinar Celdas
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A3:A4');
	
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A1:C1');
											
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('B3:B4');
								
		
					 $c++;
					 
					 if($c==10){ 
			$c=4;		
			$i++;
		$objWorkSheet = $objPHPExcel->createSheet($i);
			}
			}
		
	
	//Formato miles Con separador.
	
	
	
		
		
		
		PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);		
	
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Otros Flujos');

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
		header('Content-Disposition: attachment;filename="OtrosFlujos.pdf"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
		$objWriter->writeAllSheets();
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T056-informesPDF-D.php';</script>";
	}
?>