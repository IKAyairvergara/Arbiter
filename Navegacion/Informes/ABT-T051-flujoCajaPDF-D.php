<?php
	include "../../php/ABT-T000-conexion-U.php";

    #$conexion = new mysqli("localhost", "u517611460_ika", "Colombia2016*", "arbiter",3306);
	if (mysqli_connect_errno()) {
     	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	
	$Example=$_GET['dato']; 
	
	   $consulta = "SELECT FLC_C_CONS_ID,
	     DATE_FORMAT(FLC_C_FECHA, '%b/%y'),
	     CASE WHEN FLC_C_URBANISMO_INTERNO = 0 THEN '' ELSE FLC_C_URBANISMO_INTERNO END FLC_C_URBANISMO_INTERNO,
	     CASE WHEN FLC_C_UI_PRESUPUESTO = 0 THEN '' ELSE FLC_C_UI_PRESUPUESTO END FLC_C_UI_PRESUPUESTO,
	     CASE WHEN FLC_C_UI_INCREMENTOS = 0 THEN '' ELSE FLC_C_UI_INCREMENTOS END FLC_C_UI_INCREMENTOS,
	     CASE WHEN FLC_C_COSTOS_MATERIALES_MANO_OBRA = 0 THEN '' ELSE FLC_C_COSTOS_MATERIALES_MANO_OBRA END FLC_C_COSTOS_MATERIALES_MANO_OBRA,
	     CASE WHEN FLC_C_CM_PRESUPUESTO = 0 THEN '' ELSE FLC_C_CM_PRESUPUESTO END FLC_C_CM_PRESUPUESTO,
	     CASE WHEN FLC_C_CM_INCREMENTOS = 0 THEN '' ELSE FLC_C_CM_INCREMENTOS END FLC_C_CM_INCREMENTOS,
	     CASE WHEN FLC_C_GASTOS_IMPREVISTOS = 0 THEN '' ELSE FLC_C_GASTOS_IMPREVISTOS END FLC_C_GASTOS_IMPREVISTOS,
	     CASE WHEN FLC_C_COSTOS_POSTVENTA = 0 THEN '' ELSE FLC_C_COSTOS_POSTVENTA END FLC_C_COSTOS_POSTVENTA,
	     CASE WHEN FLC_C_COSTO_DIRECTO_CONSTRUCCION = 0 THEN '' ELSE FLC_C_COSTO_DIRECTO_CONSTRUCCION END FLC_C_COSTO_DIRECTO_CONSTRUCCION,
	     CASE WHEN FLC_C_HONORARIOS_CONSTRUCCION = 0 THEN '' ELSE FLC_C_HONORARIOS_CONSTRUCCION END FLC_C_HONORARIOS_CONSTRUCCION,
	     CASE WHEN FLC_C_HC_HONORARIOS_CONSTRUCCION = 0 THEN '' ELSE FLC_C_HC_HONORARIOS_CONSTRUCCION END FLC_C_HC_HONORARIOS_CONSTRUCCION,
	     CASE WHEN FLC_C_HC_GASTOS_REEMBOLSABLES = 0 THEN '' ELSE FLC_C_HC_GASTOS_REEMBOLSABLES END FLC_C_HC_GASTOS_REEMBOLSABLES,
	     CASE WHEN FLC_C_HONORARIOS_INTERVENTORIA = 0 THEN '' ELSE FLC_C_HONORARIOS_INTERVENTORIA END FLC_C_HONORARIOS_INTERVENTORIA,
	     CASE WHEN FLC_C_HI_HONORARIOS_INTERVENTORIA = 0 THEN '' ELSE FLC_C_HI_HONORARIOS_INTERVENTORIA END FLC_C_HI_HONORARIOS_INTERVENTORIA,
	     CASE WHEN FLC_C_HI_GASTOS_REEMBOSABLES = 0 THEN '' ELSE FLC_C_HI_GASTOS_REEMBOSABLES END FLC_C_HI_GASTOS_REEMBOSABLES,
	     CASE WHEN FLC_C_OTROS_HONORARIOS = 0 THEN '' ELSE FLC_C_OTROS_HONORARIOS END FLC_C_OTROS_HONORARIOS,
	     CASE WHEN FLC_C_OH_OTROS_HONORARIOS = 0 THEN '' ELSE FLC_C_OH_OTROS_HONORARIOS END FLC_C_OH_OTROS_HONORARIOS,
	     CASE WHEN FLC_C_OH_GASTOS_REEMBOLSABLES = 0 THEN '' ELSE FLC_C_OH_GASTOS_REEMBOLSABLES END FLC_C_OH_GASTOS_REEMBOLSABLES,
	     CASE WHEN FLC_C_IMPUESTOS_Y_DERECHOS = 0 THEN '' ELSE FLC_C_IMPUESTOS_Y_DERECHOS END FLC_C_IMPUESTOS_Y_DERECHOS,
	     CASE WHEN FLC_C_COSTO_TOTAL_CONSTRUCCION = 0 THEN '' ELSE FLC_C_COSTO_TOTAL_CONSTRUCCION END FLC_C_COSTO_TOTAL_CONSTRUCCION,
	     CASE WHEN FLC_C_HONORARIOS_GERENCIA = 0 THEN '' ELSE FLC_C_HONORARIOS_GERENCIA END FLC_C_HONORARIOS_GERENCIA,
	     CASE WHEN FLC_C_HG_HONORARIOS_GERENCIA = 0 THEN '' ELSE FLC_C_HG_HONORARIOS_GERENCIA END FLC_C_HG_HONORARIOS_GERENCIA,
	     CASE WHEN FLC_C_HG_GASTOS_REEMBOLSABLES = 0 THEN '' ELSE FLC_C_HG_GASTOS_REEMBOLSABLES END FLC_C_HG_GASTOS_REEMBOLSABLES,
	     CASE WHEN FLC_C_HONORARIOS_VENTAS = 0 THEN '' ELSE FLC_C_HONORARIOS_VENTAS END FLC_C_HONORARIOS_VENTAS,
	     CASE WHEN FLC_C_HV_HONORARIOS_VENTAS = 0 THEN '' ELSE FLC_C_HV_HONORARIOS_VENTAS END FLC_C_HV_HONORARIOS_VENTAS,
	     CASE WHEN FLC_C_HV_GASTOS_REEMBOLSABLES = 0 THEN '' ELSE FLC_C_HV_GASTOS_REEMBOLSABLES END FLC_C_HV_GASTOS_REEMBOLSABLES,
	     CASE WHEN FLC_C_COSTOS_PROMOCION_Y_VENTAS = 0 THEN '' ELSE FLC_C_COSTOS_PROMOCION_Y_VENTAS END FLC_C_COSTOS_PROMOCION_Y_VENTAS,
	     CASE WHEN FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO = 0 THEN '' ELSE FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO END FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO,
	     CASE WHEN FLC_C_CP_GASTOS_PUBLICIDAD = 0 THEN '' ELSE FLC_C_CP_GASTOS_PUBLICIDAD END FLC_C_CP_GASTOS_PUBLICIDAD,
	     CASE WHEN FLC_C_CP_GASTOS_SALA_DE_VENTAS = 0 THEN '' ELSE FLC_C_CP_GASTOS_SALA_DE_VENTAS END FLC_C_CP_GASTOS_SALA_DE_VENTAS,
	     CASE WHEN FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR = 0 THEN '' ELSE FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR END FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR,
	     CASE WHEN FLC_C_CP_COMISIONES_VENTAS = 0 THEN '' ELSE FLC_C_CP_COMISIONES_VENTAS END FLC_C_CP_COMISIONES_VENTAS,
	     CASE WHEN FLC_C_GASTOS_LEGALES = 0 THEN '' ELSE FLC_C_GASTOS_LEGALES END FLC_C_GASTOS_LEGALES,
	     CASE WHEN FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR = 0 THEN '' ELSE FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR END FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR,
	     CASE WHEN FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS = 0 THEN '' ELSE FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS END FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS,
	     CASE WHEN FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA = 0 THEN '' ELSE FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA END FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA,
	     CASE WHEN FLC_C_GL_IMPUESTO_ICA = 0 THEN '' ELSE FLC_C_GL_IMPUESTO_ICA END FLC_C_GL_IMPUESTO_ICA,
	     CASE WHEN FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS = 0 THEN '' ELSE FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS END FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS,
	     CASE WHEN FLC_C_VALOR_TERRENO_URBANIZADO = 0 THEN '' ELSE FLC_C_VALOR_TERRENO_URBANIZADO END FLC_C_VALOR_TERRENO_URBANIZADO,
	     CASE WHEN FLC_C_VT_VALOR_ADQUISICION = 0 THEN '' ELSE FLC_C_VT_VALOR_ADQUISICION END FLC_C_VT_VALOR_ADQUISICION,
	     CASE WHEN FLC_C_VT_COSTOS_URBANISMO_Y_OTROS = 0 THEN '' ELSE FLC_C_VT_COSTOS_URBANISMO_Y_OTROS END FLC_C_VT_COSTOS_URBANISMO_Y_OTROS,
	     CASE WHEN FLC_C_COMISIONES_FIDUCIA = 0 THEN '' ELSE FLC_C_COMISIONES_FIDUCIA END FLC_C_COMISIONES_FIDUCIA,
	     CASE WHEN FLC_C_CF_PREVENTAS_Y_ADMINISTRACION = 0 THEN '' ELSE FLC_C_CF_PREVENTAS_Y_ADMINISTRACION END FLC_C_CF_PREVENTAS_Y_ADMINISTRACION,
	     CASE WHEN FLC_C_CF_NUEVOGAR = 0 THEN '' ELSE FLC_C_CF_NUEVOGAR END FLC_C_CF_NUEVOGAR,
	     CASE WHEN FLC_C_GASTOS_FINANCIEROS = 0 THEN '' ELSE FLC_C_GASTOS_FINANCIEROS END FLC_C_GASTOS_FINANCIEROS,
	     CASE WHEN FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR = 0 THEN '' ELSE FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR END FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR,
	     CASE WHEN FLC_C_GF_OTROS_COSTOS_CREDITO = 0 THEN '' ELSE FLC_C_GF_OTROS_COSTOS_CREDITO END FLC_C_GF_OTROS_COSTOS_CREDITO,
	     CASE WHEN FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION = 0 THEN '' ELSE FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION END FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION,
	     CASE WHEN FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF = 0 THEN '' ELSE FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF END FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF,
	     CASE WHEN FLC_C_OTROS_COSTOS_Y_GASTOS = 0 THEN '' ELSE FLC_C_OTROS_COSTOS_Y_GASTOS END FLC_C_OTROS_COSTOS_Y_GASTOS,
	     CASE WHEN FLC_C_OC_COSTOS_GASTOS1 = 0 THEN '' ELSE FLC_C_OC_COSTOS_GASTOS1 END FLC_C_OC_COSTOS_GASTOS1,
	     CASE WHEN FLC_C_OC_COSTOS_GASTOS2 = 0 THEN '' ELSE FLC_C_OC_COSTOS_GASTOS2 END FLC_C_OC_COSTOS_GASTOS2,
	     CASE WHEN FLC_C_OC_COSTOS_GASTOS3 = 0 THEN '' ELSE FLC_C_OC_COSTOS_GASTOS3 END FLC_C_OC_COSTOS_GASTOS3,
	     CASE WHEN FLC_C_REINTEGROS_IVA_PROYECTOS_VIS = 0 THEN '' ELSE FLC_C_REINTEGROS_IVA_PROYECTOS_VIS END FLC_C_REINTEGROS_IVA_PROYECTOS_VIS,
	     CASE WHEN FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS = 0 THEN '' ELSE FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS END FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS,
	     CASE WHEN FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA = 0 THEN '' ELSE FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA END FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA,
	     CASE WHEN FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO = 0 THEN '' ELSE FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO END FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO,
	     CASE WHEN FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO = 0 THEN '' ELSE FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO END FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO,
	     CASE WHEN FLC_C_INGRESOS_POR_VENTAS = 0 THEN '' ELSE FLC_C_INGRESOS_POR_VENTAS END FLC_C_INGRESOS_POR_VENTAS,
	     CASE WHEN FLC_C_IV_ABONOS_SEPARACION = 0 THEN '' ELSE FLC_C_IV_ABONOS_SEPARACION END FLC_C_IV_ABONOS_SEPARACION,
	     CASE WHEN FLC_C_IV_CARTERA_CUOTA_INICIAL = 0 THEN '' ELSE FLC_C_IV_CARTERA_CUOTA_INICIAL END FLC_C_IV_CARTERA_CUOTA_INICIAL,
	     CASE WHEN FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA = 0 THEN '' ELSE FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA END FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA,
	     CASE WHEN FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO = 0 THEN '' ELSE FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO END FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO,
	     CASE WHEN FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES = 0 THEN '' ELSE FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES END FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES,
	     CASE WHEN FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES = 0 THEN '' ELSE FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES END FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES,
	     CASE WHEN FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS = 0 THEN '' ELSE FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS END FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS,
	     CASE WHEN FLC_C_OTROS_INGRESOS_VENTAS_INTERESES = 0 THEN '' ELSE FLC_C_OTROS_INGRESOS_VENTAS_INTERESES END FLC_C_OTROS_INGRESOS_VENTAS_INTERESES,
	     CASE WHEN FLC_C_OI_INTERESES_SUBROGACION = 0 THEN '' ELSE FLC_C_OI_INTERESES_SUBROGACION END FLC_C_OI_INTERESES_SUBROGACION,
	     CASE WHEN FLC_C_OI_INTERESES_MORA = 0 THEN '' ELSE FLC_C_OI_INTERESES_MORA END FLC_C_OI_INTERESES_MORA,
	     CASE WHEN FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS = 0 THEN '' ELSE FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS END FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS,
	     CASE WHEN FLC_C_RENDIMIENTOS_FIDEICOMISO = 0 THEN '' ELSE FLC_C_RENDIMIENTOS_FIDEICOMISO END FLC_C_RENDIMIENTOS_FIDEICOMISO,
	     CASE WHEN FLC_C_OTROS_INGRESOS = 0 THEN '' ELSE FLC_C_OTROS_INGRESOS END FLC_C_OTROS_INGRESOS,
	     CASE WHEN FLC_C_OI_INGRESOS1 = 0 THEN '' ELSE FLC_C_OI_INGRESOS1 END FLC_C_OI_INGRESOS1,
	     CASE WHEN FLC_C_OI_INGRESOS2 = 0 THEN '' ELSE FLC_C_OI_INGRESOS2 END FLC_C_OI_INGRESOS2,
	     CASE WHEN FLC_C_OI_INGRESOS3 = 0 THEN '' ELSE FLC_C_OI_INGRESOS3 END FLC_C_OI_INGRESOS3,
	     CASE WHEN FLC_C_INGRESOS_TOTALES = 0 THEN '' ELSE FLC_C_INGRESOS_TOTALES END FLC_C_INGRESOS_TOTALES,
	     CASE WHEN FLC_C_FLUJO_NETO_CAJA_CT = 0 THEN '' ELSE FLC_C_FLUJO_NETO_CAJA_CT END FLC_C_FLUJO_NETO_CAJA_CT,
	     CASE WHEN FLC_C_FLUJO_ACUMULADO_CAJA_CT = 0 THEN '' ELSE FLC_C_FLUJO_ACUMULADO_CAJA_CT END FLC_C_FLUJO_ACUMULADO_CAJA_CT,
	     CASE WHEN FLC_C_COSTO_CREDITOS_TESORERIA = 0 THEN '' ELSE FLC_C_COSTO_CREDITOS_TESORERIA END FLC_C_COSTO_CREDITOS_TESORERIA,
	     CASE WHEN FLC_C_IMPUESTO_DE_RENTA = 0 THEN '' ELSE FLC_C_IMPUESTO_DE_RENTA END FLC_C_IMPUESTO_DE_RENTA,
	     CASE WHEN FLC_C_FLUJO_NETO_CAJA = 0 THEN '' ELSE FLC_C_FLUJO_NETO_CAJA END FLC_C_FLUJO_NETO_CAJA,
	     CASE WHEN FLC_C_FLUJO_ACUMULADO_CAJA = 0 THEN '' ELSE FLC_C_FLUJO_ACUMULADO_CAJA END FLC_C_FLUJO_ACUMULADO_CAJA,
	     CASE WHEN FLC_C_PROYECCION_VENTAS_UNIDADES = 0 THEN '' ELSE FLC_C_PROYECCION_VENTAS_UNIDADES END FLC_C_PROYECCION_VENTAS_UNIDADES,
	     CASE WHEN FLC_C_VENTAS_BRUTAS = 0 THEN '' ELSE FLC_C_VENTAS_BRUTAS END FLC_C_VENTAS_BRUTAS,
	     CASE WHEN FLC_C_PRECIO_PROMEDIO = 0 THEN '' ELSE FLC_C_PRECIO_PROMEDIO END FLC_C_PRECIO_PROMEDIO,
	     CASE WHEN FLC_C_PROYECCION_ENTREGAS_UNIDADES = 0 THEN '' ELSE FLC_C_PROYECCION_ENTREGAS_UNIDADES END FLC_C_PROYECCION_ENTREGAS_UNIDADES,
	     CASE WHEN FLC_C_PROYECCION_ESCRITURAS_VALOR = 0 THEN '' ELSE FLC_C_PROYECCION_ESCRITURAS_VALOR END FLC_C_PROYECCION_ESCRITURAS_VALOR,
	     CASE WHEN FLC_C_PROYECCION_ESCRITURAS_UNIDADES = 0 THEN '' ELSE FLC_C_PROYECCION_ESCRITURAS_UNIDADES END FLC_C_PROYECCION_ESCRITURAS_UNIDADES,
	     CASE WHEN FLC_C_PROYECCION_SUBROGACIONES_VALOR = 0 THEN '' ELSE FLC_C_PROYECCION_SUBROGACIONES_VALOR END FLC_C_PROYECCION_SUBROGACIONES_VALOR,
	     CASE WHEN FLC_C_VPN = 0 THEN '' ELSE FLC_C_VPN END FLC_C_VPN,
	     CASE WHEN FLC_C_TIR_EA = 0 THEN '' ELSE FLC_C_TIR_EA END FLC_C_TIR_EA,
	     CASE WHEN FLC_C_TIR_EM = 0 THEN '' ELSE FLC_C_TIR_EM END FLC_C_TIR_EM,
	     CASE WHEN FLC_C_TIR_MOD_EA = 0 THEN '' ELSE FLC_C_TIR_MOD_EA END FLC_C_TIR_MOD_EA,
	     CASE WHEN FLC_C_C_TIR_MOD_EM = 0 THEN '' ELSE FLC_C_C_TIR_MOD_EM END FLC_C_C_TIR_MOD_EM
	     FROM tb_c_flujo_caja
 	     WHERE FLC_C_CONS_ID = '$Example'";

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
		$i = 0;
		
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
					 $c80=0;
					 $c81=0;
					 $c82=0;
					 $c83=0;
					 $c84=0;
					 $c85=0;
					 $c86=0;
					 $c91=0;
					 $c92=0;
					 $c93=0;
					 $c94=0;
					 $c95=0;
					 $c96=0;
					 $c97=0;
					 $c98=0;
		
		
		
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
		
		while ($fila1 = $resultado1->fetch_array()) {
		
					 $c5=$c5    +   $fila1['FLC_C_URBANISMO_INTERNO'];
					 $c6=$c6    +   $fila1['FLC_C_UI_PRESUPUESTO'];
					 $c7=$c7    +   $fila1['FLC_C_UI_INCREMENTOS'];
					 $c8=$c8    +   $fila1['FLC_C_COSTOS_MATERIALES_MANO_OBRA'];
					 $c9=$c9    +   $fila1['FLC_C_CM_PRESUPUESTO'];
					 $c10=$c10   +  $fila1['FLC_C_CM_INCREMENTOS'];
					 $c11=$c11    +  $fila1['FLC_C_GASTOS_IMPREVISTOS'];
					 $c12=$c12    +  $fila1['FLC_C_COSTOS_POSTVENTA'];
					 $c13=$c13    +  $fila1['FLC_C_COSTO_DIRECTO_CONSTRUCCION'];
					 $c14=$c14    +  $fila1['FLC_C_HONORARIOS_CONSTRUCCION'];
					 $c15=$c15    +  $fila1['FLC_C_HC_HONORARIOS_CONSTRUCCION'];
					 $c16=$c16    +  $fila1['FLC_C_HC_GASTOS_REEMBOLSABLES'];
					 $c17=$c17    +  $fila1['FLC_C_HONORARIOS_INTERVENTORIA'];
					 $c18=$c18    +  $fila1['FLC_C_HI_HONORARIOS_INTERVENTORIA'];
					 $c19=$c19    +  $fila1['FLC_C_HI_GASTOS_REEMBOSABLES'];
					 $c20=$c20    +  $fila1['FLC_C_OTROS_HONORARIOS'];
					 $c21=$c21    +  $fila1['FLC_C_OH_OTROS_HONORARIOS'];
					 $c22=$c22    +  $fila1['FLC_C_OH_GASTOS_REEMBOLSABLES'];
					 $c23=$c23    +  $fila1['FLC_C_IMPUESTOS_Y_DERECHOS'];
					 $c24=$c24    +  $fila1['FLC_C_COSTO_TOTAL_CONSTRUCCION'];
					 $c25=$c25    +  $fila1['FLC_C_HONORARIOS_GERENCIA'];
					 $c26=$c26    +  $fila1['FLC_C_HG_HONORARIOS_GERENCIA'];
					 $c27=$c27    +  $fila1['FLC_C_HG_GASTOS_REEMBOLSABLES'];
					 $c28=$c28    +  $fila1['FLC_C_HONORARIOS_VENTAS'];
					 $c29=$c29    +  $fila1['FLC_C_HV_HONORARIOS_VENTAS'];
					 $c30=$c30    +  $fila1['FLC_C_HV_GASTOS_REEMBOLSABLES'];
					 $c31=$c31    +  $fila1['FLC_C_COSTOS_PROMOCION_Y_VENTAS'];
					 $c32=$c32    +  $fila1['FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO'];
					 $c33=$c33    +  $fila1['FLC_C_CP_GASTOS_PUBLICIDAD'];
					 $c34=$c34    +  $fila1['FLC_C_CP_GASTOS_SALA_DE_VENTAS'];
					 $c35=$c35    +  $fila1['FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR'];
					 $c36=$c36    +  $fila1['FLC_C_CP_COMISIONES_VENTAS'];
					 $c37=$c37    +  $fila1['FLC_C_GASTOS_LEGALES'];
					 $c38=$c38    +  $fila1['FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR'];
					 $c39=$c39    +  $fila1['FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS'];
					 $c40=$c40    +  $fila1['FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA'];
					 $c41=$c41    +  $fila1['FLC_C_GL_IMPUESTO_ICA'];
					 $c42=$c42    +  $fila1['FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS'];
					 $c43=$c43    +  $fila1['FLC_C_VALOR_TERRENO_URBANIZADO'];
					 $c44=$c44    +  $fila1['FLC_C_VT_VALOR_ADQUISICION'];
					 $c45=$c45    +  $fila1['FLC_C_VT_COSTOS_URBANISMO_Y_OTROS'];
					 $c46=$c46    +  $fila1['FLC_C_COMISIONES_FIDUCIA'];
					 $c47=$c47    +  $fila1['FLC_C_CF_PREVENTAS_Y_ADMINISTRACION'];
					 $c48=$c48    +  $fila1['FLC_C_CF_NUEVOGAR'];
					 $c49=$c49    +  $fila1['FLC_C_GASTOS_FINANCIEROS'];
					 $c50=$c50    +  $fila1['FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR'];
					 $c51=$c51    +  $fila1['FLC_C_GF_OTROS_COSTOS_CREDITO'];
					 $c52=$c52    +  $fila1['FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION'];
					 $c53=$c53    +  $fila1['FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'];
					 $c54=$c54    +  $fila1['FLC_C_OTROS_COSTOS_Y_GASTOS'];
					 $c55=$c55    +  $fila1['FLC_C_OC_COSTOS_GASTOS1'];
					 $c56=$c56    +  $fila1['FLC_C_OC_COSTOS_GASTOS2'];
					 $c57=$c57    +  $fila1['FLC_C_OC_COSTOS_GASTOS3'];
					 $c58=$c58    +  $fila1['FLC_C_REINTEGROS_IVA_PROYECTOS_VIS'];
					 $c59=$c59    +  $fila1['FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS'];
					 $c60=$c60    +  $fila1['FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA'];
					 $c61=$c61    +  $fila1['FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO'];
					 $c62=$c62    +  $fila1['FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO'];
					 $c63=$c63    +  $fila1['FLC_C_INGRESOS_POR_VENTAS'];
					 $c64=$c64    +  $fila1['FLC_C_IV_ABONOS_SEPARACION'];
					 $c65=$c65    +  $fila1['FLC_C_IV_CARTERA_CUOTA_INICIAL'];
					 $c66=$c66    +  $fila1['FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA'];
					 $c67=$c67    +  $fila1['FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO'];
					 $c68=$c68    +  $fila1['FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES'];
					 $c69=$c69    +  $fila1['FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES'];
					 $c70=$c70    +  $fila1['FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS'];
					 $c71=$c71    +  $fila1['FLC_C_OTROS_INGRESOS_VENTAS_INTERESES'];
					 $c72=$c72    +  $fila1['FLC_C_OI_INTERESES_SUBROGACION'];
					 $c73=$c73    +  $fila1['FLC_C_OI_INTERESES_MORA'];
					 $c74=$c74    +  $fila1['FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS'];
					 $c75=$c75    +  $fila1['FLC_C_RENDIMIENTOS_FIDEICOMISO'];
					 $c76=$c76    +  $fila1['FLC_C_OTROS_INGRESOS'];
					 $c77=$c77    +  $fila1['FLC_C_OI_INGRESOS1'];
					 $c78=$c78    +  $fila1['FLC_C_OI_INGRESOS2'];
					 $c79=$c79    +  $fila1['FLC_C_OI_INGRESOS3'];
					 $c80=$c80    +  $fila1['FLC_C_INGRESOS_TOTALES'];
					 $c81=$c81    +  $fila1['FLC_C_FLUJO_NETO_CAJA_CT'];
					 $c82=$c82    +  $fila1['FLC_C_FLUJO_ACUMULADO_CAJA_CT'];
					 $c83=$c83    +  $fila1['FLC_C_COSTO_CREDITOS_TESORERIA'];
					 $c84=$c84    +  $fila1['FLC_C_IMPUESTO_DE_RENTA'];
					 $c85=$c85    +  $fila1['FLC_C_FLUJO_NETO_CAJA'];
					 $c86=$c86    +  $fila1['FLC_C_FLUJO_ACUMULADO_CAJA'];
					 $c91=$c91    +  $fila1['FLC_C_PROYECCION_VENTAS_UNIDADES'];
					 $c92=$c92    +  $fila1['FLC_C_VENTAS_BRUTAS'];
					 $c93=$c93    +  $fila1['FLC_C_PRECIO_PROMEDIO'];
					 $c94=$c94    +  $fila1['FLC_C_PROYECCION_ENTREGAS_UNIDADES'];
					 $c95=$c95    +  $fila1['FLC_C_PROYECCION_ESCRITURAS_VALOR'];
					 $c96=$c96    +  $fila1['FLC_C_PROYECCION_ESCRITURAS_UNIDADES'];
					 $c97=$c97    +  $fila1['FLC_C_PROYECCION_SUBROGACIONES_VALOR'];
		}
		
		
		
		
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
					 ->setCellValue('B80', $c80)
					 ->setCellValue('B81', $c81)
					 ->setCellValue('B82', $c82)
					 ->setCellValue('B83', $c83)
					 ->setCellValue('B84', $c84)
					 ->setCellValue('B85', $c85)
					 ->setCellValue('B86', $c86)
					 
					 ->setCellValue('B91', $c91)
					 ->setCellValue('B92', $c92)
					 ->setCellValue('B93', $c93)
					 ->setCellValue('B94', $c94)
					 ->setCellValue('B95', $c95)
					 ->setCellValue('B96', $c96)
					 ->setCellValue('B97', $c97)
					 
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
					 
					 ->setCellValue('A1',  'MODELO C')
					 ->setCellValue('B3',  'TOTALES')
					 ->setCellValue('C3',  '%')
					 ->setCellValue('C4',  'Ventas')
					 
					 
							
					
					
					; 
					
					$objPHPExcel->getActiveSheet() ->getStyle($columnas[$c].'3')->applyFromArray(
					array(
					'fill' => array(
						'type' => PHPExcel_Style_Fill::FILL_SOLID,
							'color' => array('rgb' => 'F2F2F2'))));
						
						
					  $objPHPExcel->getActiveSheet() ->getStyle($columnas[$c].'3:'.$columnas[$c].'86')->applyFromArray(
								array('borders' => array(
									'allborders' => array(
									'style' => PHPExcel_Style_Border::BORDER_THIN
									))));
					 
					$objPHPExcel->getActiveSheet() ->getStyle($columnas[$c].'91:'.$columnas[$c].'97')->applyFromArray(
								array('borders' => array(
									'allborders' => array(
									'style' => PHPExcel_Style_Border::BORDER_THIN
									))));
									
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1)	;			
					

					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);					
					 
					$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
					
					
					
										
					
					$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
			
					 $styleArray = array(
	  'borders' => array(
		'allborders' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);


	$objPHPExcel->getActiveSheet()->getStyle('A3:A86')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B3:B86')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A91:A97')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B91:B97')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C3:C86')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A91:C97')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B51:F51')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B52:F52')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('E3:E49')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('G51:G52')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B88:F88')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B89:F89')->applyFromArray($styleArray);
	
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
	
	$objPHPExcel->getActiveSheet()->getStyle('A13')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('A24')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	$objPHPExcel->getActiveSheet()->getStyle('42')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
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


		/*
		$negrilla = array(
			'font' => array(
				'bold' => true
			)
		);
		
		$objPHPExcel->getActiveSheet()->getStyle('A5:'.$columnas[$c].'5')->applyFromArray(
					$negrilla);	
							
		$objPHPExcel->getActiveSheet()->getStyle('A8:'.$columnas[$c].'8')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A11:'.$columnas[$c].'A11')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A14:'.$columnas[$c].'14')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A17:'.$columnas[$c].'17')->applyFromArray(
					$negrilla);
					
		$objPHPExcel->getActiveSheet()->getStyle('A20:'.$columnas[$c].'20')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A23:'.$columnas[$c].'21')->applyFromArray(
					$negrilla);	
					
		$objPHPExcel->getActiveSheet()->getStyle('A25:'.$columnas[$c].'25')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A28:'.$columnas[$c].'28')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A31:'.$columnas[$c].'31')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A37:'.$columnas[$c].'37')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A43:'.$columnas[$c].'43')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A46:'.$columnas[$c].'46')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A49:'.$columnas[$c].'49')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A54:'.$columnas[$c].'54')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A58:'.$columnas[$c].'58')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A61:'.$columnas[$c].'61')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A62:'.$columnas[$c].'62')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A63:'.$columnas[$c].'63')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A71:'.$columnas[$c].'71')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A75:'.$columnas[$c].'75')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A76:'.$columnas[$c].'76')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A83:'.$columnas[$c].'83')->applyFromArray(
					$negrilla);	
		
		$objPHPExcel->getActiveSheet()->getStyle('A84:'.$columnas[$c].'84')->applyFromArray(
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

*/
					
		//Combinar Celdas
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A3:A4');
	
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('A1:C1');
											
		$objPHPExcel->getActiveSheet()
        		    ->mergeCells('B3:B4');
					 
					$c++;
					 
			if($c==10)
			{ 
			$c=4;		
			$i++;
		$objWorkSheet = $objPHPExcel->createSheet($i);
			}
			}
	
	
		PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);		
	
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Flujo Caja');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		// Redirect output to a client’s web browser (PDF)
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
header('Content-Disposition: attachment;filename="FlujoCajaPDF.pdf"');
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