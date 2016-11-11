<?php
   include "../../php/ABT-T000-conexion-U.php";
	
	$Example=$_GET['dato']; 
	
	    $consulta = "SELECT 
		DATE_FORMAT(MAX(FLC_C_FECHA),'%m/%Y'),
		DATE_FORMAT(MAX(FLC_C_FECHA),'%b/%y'),
		FLC_C_PERIODICIDAD,
		
		 CASE WHEN (SUM(FLC_C_URBANISMO_INTERNO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_URBANISMO_INTERNO)*  CONS_UNI_PRE) END FLC_C_URBANISMO_INTERNO,
	     CASE WHEN (SUM(FLC_C_UI_PRESUPUESTO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_UI_PRESUPUESTO)*  CONS_UNI_PRE) END FLC_C_UI_PRESUPUESTO,
	     CASE WHEN (SUM(FLC_C_UI_INCREMENTOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_UI_INCREMENTOS)*  CONS_UNI_PRE) END FLC_C_UI_INCREMENTOS,
	     CASE WHEN (SUM(FLC_C_COSTOS_MATERIALES_MANO_OBRA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTOS_MATERIALES_MANO_OBRA)*  CONS_UNI_PRE) END FLC_C_COSTOS_MATERIALES_MANO_OBRA,
	     CASE WHEN (SUM(FLC_C_CM_PRESUPUESTO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CM_PRESUPUESTO)*  CONS_UNI_PRE) END FLC_C_CM_PRESUPUESTO,
	     CASE WHEN (SUM(FLC_C_CM_INCREMENTOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CM_INCREMENTOS)*  CONS_UNI_PRE) END FLC_C_CM_INCREMENTOS,
	     CASE WHEN (SUM(FLC_C_GASTOS_IMPREVISTOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GASTOS_IMPREVISTOS)*  CONS_UNI_PRE) END FLC_C_GASTOS_IMPREVISTOS,
	     CASE WHEN (SUM(FLC_C_COSTOS_POSTVENTA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTOS_POSTVENTA)*  CONS_UNI_PRE) END FLC_C_COSTOS_POSTVENTA,
	     CASE WHEN (SUM(FLC_C_COSTO_DIRECTO_CONSTRUCCION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTO_DIRECTO_CONSTRUCCION)*  CONS_UNI_PRE) END FLC_C_COSTO_DIRECTO_CONSTRUCCION,
	     CASE WHEN (SUM(FLC_C_HONORARIOS_CONSTRUCCION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HONORARIOS_CONSTRUCCION)*  CONS_UNI_PRE) END FLC_C_HONORARIOS_CONSTRUCCION,
	     CASE WHEN (SUM(FLC_C_HC_HONORARIOS_CONSTRUCCION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HC_HONORARIOS_CONSTRUCCION)*  CONS_UNI_PRE) END FLC_C_HC_HONORARIOS_CONSTRUCCION,
	     CASE WHEN (SUM(FLC_C_HC_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HC_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) END FLC_C_HC_GASTOS_REEMBOLSABLES,
	     CASE WHEN (SUM(FLC_C_HONORARIOS_INTERVENTORIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HONORARIOS_INTERVENTORIA)*  CONS_UNI_PRE) END FLC_C_HONORARIOS_INTERVENTORIA,
	     CASE WHEN (SUM(FLC_C_HI_HONORARIOS_INTERVENTORIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HI_HONORARIOS_INTERVENTORIA)*  CONS_UNI_PRE) END FLC_C_HI_HONORARIOS_INTERVENTORIA,
	     CASE WHEN (SUM(FLC_C_HI_GASTOS_REEMBOSABLES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HI_GASTOS_REEMBOSABLES)*  CONS_UNI_PRE) END FLC_C_HI_GASTOS_REEMBOSABLES,
	     CASE WHEN (SUM(FLC_C_OTROS_HONORARIOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OTROS_HONORARIOS)*  CONS_UNI_PRE) END FLC_C_OTROS_HONORARIOS,
	     CASE WHEN (SUM(FLC_C_OH_OTROS_HONORARIOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OH_OTROS_HONORARIOS)*  CONS_UNI_PRE) END FLC_C_OH_OTROS_HONORARIOS,
	     CASE WHEN (SUM(FLC_C_OH_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OH_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) END FLC_C_OH_GASTOS_REEMBOLSABLES,
	     CASE WHEN (SUM(FLC_C_IMPUESTOS_Y_DERECHOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IMPUESTOS_Y_DERECHOS)*  CONS_UNI_PRE) END FLC_C_IMPUESTOS_Y_DERECHOS,
	     CASE WHEN (SUM(FLC_C_COSTO_TOTAL_CONSTRUCCION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTO_TOTAL_CONSTRUCCION)*  CONS_UNI_PRE) END FLC_C_COSTO_TOTAL_CONSTRUCCION,
	     CASE WHEN (SUM(FLC_C_HONORARIOS_GERENCIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HONORARIOS_GERENCIA)*  CONS_UNI_PRE) END FLC_C_HONORARIOS_GERENCIA,
	     CASE WHEN (SUM(FLC_C_HG_HONORARIOS_GERENCIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HG_HONORARIOS_GERENCIA)*  CONS_UNI_PRE) END FLC_C_HG_HONORARIOS_GERENCIA,
	     CASE WHEN (SUM(FLC_C_HG_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HG_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) END FLC_C_HG_GASTOS_REEMBOLSABLES,
	     CASE WHEN (SUM(FLC_C_HONORARIOS_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HONORARIOS_VENTAS)*  CONS_UNI_PRE) END FLC_C_HONORARIOS_VENTAS,
	     CASE WHEN (SUM(FLC_C_HV_HONORARIOS_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HV_HONORARIOS_VENTAS)*  CONS_UNI_PRE) END FLC_C_HV_HONORARIOS_VENTAS,
	     CASE WHEN (SUM(FLC_C_HV_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_HV_GASTOS_REEMBOLSABLES)*  CONS_UNI_PRE) END FLC_C_HV_GASTOS_REEMBOLSABLES,
	     CASE WHEN (SUM(FLC_C_COSTOS_PROMOCION_Y_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTOS_PROMOCION_Y_VENTAS)*  CONS_UNI_PRE) END FLC_C_COSTOS_PROMOCION_Y_VENTAS,
	     CASE WHEN (SUM(FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO)*  CONS_UNI_PRE) END FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO,
	     CASE WHEN (SUM(FLC_C_CP_GASTOS_PUBLICIDAD)*  CONS_UNI_PRE)= 0 THEN '' ELSE (SUM(FLC_C_CP_GASTOS_PUBLICIDAD)*  CONS_UNI_PRE) END FLC_C_CP_GASTOS_PUBLICIDAD,
	     CASE WHEN (SUM(FLC_C_CP_GASTOS_SALA_DE_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CP_GASTOS_SALA_DE_VENTAS)*  CONS_UNI_PRE) END FLC_C_CP_GASTOS_SALA_DE_VENTAS,
	     CASE WHEN (SUM(FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR)*  CONS_UNI_PRE) END FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR,
	     CASE WHEN (SUM(FLC_C_CP_COMISIONES_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CP_COMISIONES_VENTAS)*  CONS_UNI_PRE) END FLC_C_CP_COMISIONES_VENTAS,
	     CASE WHEN (SUM(FLC_C_GASTOS_LEGALES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GASTOS_LEGALES)*  CONS_UNI_PRE) END FLC_C_GASTOS_LEGALES,
	     CASE WHEN (SUM(FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR)*  CONS_UNI_PRE) END FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR,
	     CASE WHEN (SUM(FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS)*  CONS_UNI_PRE) END FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS,
	     CASE WHEN (SUM(FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA)*  CONS_UNI_PRE) END FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA,
	     CASE WHEN (SUM(FLC_C_GL_IMPUESTO_ICA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GL_IMPUESTO_ICA)*  CONS_UNI_PRE) END FLC_C_GL_IMPUESTO_ICA,
	     CASE WHEN (SUM(FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS)*  CONS_UNI_PRE) END FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS,
	     CASE WHEN (SUM(FLC_C_VALOR_TERRENO_URBANIZADO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_VALOR_TERRENO_URBANIZADO)*  CONS_UNI_PRE) END FLC_C_VALOR_TERRENO_URBANIZADO,
	     CASE WHEN (SUM(FLC_C_VT_VALOR_ADQUISICION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_VT_VALOR_ADQUISICION)*  CONS_UNI_PRE) END FLC_C_VT_VALOR_ADQUISICION,
	     CASE WHEN (SUM(FLC_C_VT_COSTOS_URBANISMO_Y_OTROS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_VT_COSTOS_URBANISMO_Y_OTROS)*  CONS_UNI_PRE) END FLC_C_VT_COSTOS_URBANISMO_Y_OTROS,
	     CASE WHEN (SUM(FLC_C_COMISIONES_FIDUCIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COMISIONES_FIDUCIA)*  CONS_UNI_PRE) END FLC_C_COMISIONES_FIDUCIA,
	     CASE WHEN (SUM(FLC_C_CF_PREVENTAS_Y_ADMINISTRACION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CF_PREVENTAS_Y_ADMINISTRACION)*  CONS_UNI_PRE) END FLC_C_CF_PREVENTAS_Y_ADMINISTRACION,
	     CASE WHEN (SUM(FLC_C_CF_NUEVOGAR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_CF_NUEVOGAR)*  CONS_UNI_PRE) END FLC_C_CF_NUEVOGAR,
	     CASE WHEN (SUM(FLC_C_GASTOS_FINANCIEROS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GASTOS_FINANCIEROS)*  CONS_UNI_PRE) END FLC_C_GASTOS_FINANCIEROS,
	     CASE WHEN (SUM(FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR)*  CONS_UNI_PRE) END FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR,
	     CASE WHEN (SUM(FLC_C_GF_OTROS_COSTOS_CREDITO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GF_OTROS_COSTOS_CREDITO)*  CONS_UNI_PRE) END FLC_C_GF_OTROS_COSTOS_CREDITO,
	     CASE WHEN (SUM(FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION)*  CONS_UNI_PRE) END FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION,
	     CASE WHEN (SUM(FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)*  CONS_UNI_PRE) END FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF,
	     CASE WHEN (SUM(FLC_C_OTROS_COSTOS_Y_GASTOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OTROS_COSTOS_Y_GASTOS)*  CONS_UNI_PRE) END FLC_C_OTROS_COSTOS_Y_GASTOS,
	     CASE WHEN (SUM(FLC_C_OC_COSTOS_GASTOS1)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OC_COSTOS_GASTOS1)*  CONS_UNI_PRE) END FLC_C_OC_COSTOS_GASTOS1,
	     CASE WHEN (SUM(FLC_C_OC_COSTOS_GASTOS2)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OC_COSTOS_GASTOS2)*  CONS_UNI_PRE) END FLC_C_OC_COSTOS_GASTOS2,
	     CASE WHEN (SUM(FLC_C_OC_COSTOS_GASTOS3)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OC_COSTOS_GASTOS3)*  CONS_UNI_PRE) END FLC_C_OC_COSTOS_GASTOS3,
	     CASE WHEN (SUM(FLC_C_REINTEGROS_IVA_PROYECTOS_VIS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_REINTEGROS_IVA_PROYECTOS_VIS)*  CONS_UNI_PRE) END FLC_C_REINTEGROS_IVA_PROYECTOS_VIS,
	     CASE WHEN (SUM(FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)*  CONS_UNI_PRE) END FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS,
	     CASE WHEN (SUM(FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)*  CONS_UNI_PRE) END FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA,
	     CASE WHEN (SUM(FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)*  CONS_UNI_PRE) END FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO,
	     CASE WHEN (SUM(FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)*  CONS_UNI_PRE) END FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO,
	     CASE WHEN (SUM(FLC_C_INGRESOS_POR_VENTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_INGRESOS_POR_VENTAS)*  CONS_UNI_PRE) END FLC_C_INGRESOS_POR_VENTAS,
	     CASE WHEN (SUM(FLC_C_IV_ABONOS_SEPARACION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_ABONOS_SEPARACION)*  CONS_UNI_PRE) END FLC_C_IV_ABONOS_SEPARACION,
	     CASE WHEN (SUM(FLC_C_IV_CARTERA_CUOTA_INICIAL)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_CARTERA_CUOTA_INICIAL)*  CONS_UNI_PRE) END FLC_C_IV_CARTERA_CUOTA_INICIAL,
	     CASE WHEN (SUM(FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)*  CONS_UNI_PRE) END FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA,
	     CASE WHEN (SUM(FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)*  CONS_UNI_PRE) END FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO,
	     CASE WHEN (SUM(FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES)*  CONS_UNI_PRE) END FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES,
	     CASE WHEN (SUM(FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)*  CONS_UNI_PRE) END FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES,
	     CASE WHEN (SUM(FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)*  CONS_UNI_PRE) END FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS,
	     CASE WHEN (SUM(FLC_C_OTROS_INGRESOS_VENTAS_INTERESES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OTROS_INGRESOS_VENTAS_INTERESES)*  CONS_UNI_PRE) END FLC_C_OTROS_INGRESOS_VENTAS_INTERESES,
	     CASE WHEN (SUM(FLC_C_OI_INTERESES_SUBROGACION)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_INTERESES_SUBROGACION)*  CONS_UNI_PRE) END FLC_C_OI_INTERESES_SUBROGACION,
	     CASE WHEN (SUM(FLC_C_OI_INTERESES_MORA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_INTERESES_MORA)*  CONS_UNI_PRE) END FLC_C_OI_INTERESES_MORA,
	     CASE WHEN (SUM(FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)*  CONS_UNI_PRE) END FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS,
	     CASE WHEN (SUM(FLC_C_RENDIMIENTOS_FIDEICOMISO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_RENDIMIENTOS_FIDEICOMISO)*  CONS_UNI_PRE) END FLC_C_RENDIMIENTOS_FIDEICOMISO,
	     CASE WHEN (SUM(FLC_C_OTROS_INGRESOS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OTROS_INGRESOS)*  CONS_UNI_PRE) END FLC_C_OTROS_INGRESOS,
	     CASE WHEN (SUM(FLC_C_OI_INGRESOS1)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_INGRESOS1)*  CONS_UNI_PRE) END FLC_C_OI_INGRESOS1,
	     CASE WHEN (SUM(FLC_C_OI_INGRESOS2)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_INGRESOS2)*  CONS_UNI_PRE) END FLC_C_OI_INGRESOS2,
	     CASE WHEN (SUM(FLC_C_OI_INGRESOS3)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_OI_INGRESOS3)*  CONS_UNI_PRE) END FLC_C_OI_INGRESOS3,
	     CASE WHEN (SUM(FLC_C_INGRESOS_TOTALES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_INGRESOS_TOTALES)*  CONS_UNI_PRE) END FLC_C_INGRESOS_TOTALES,
	     CASE WHEN (SUM(FLC_C_FLUJO_NETO_CAJA_CT)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_FLUJO_NETO_CAJA_CT)*  CONS_UNI_PRE) END FLC_C_FLUJO_NETO_CAJA_CT,
	     CASE WHEN (SUM(FLC_C_FLUJO_ACUMULADO_CAJA_CT)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_FLUJO_ACUMULADO_CAJA_CT)*  CONS_UNI_PRE) END FLC_C_FLUJO_ACUMULADO_CAJA_CT,
	     CASE WHEN (SUM(FLC_C_COSTO_CREDITOS_TESORERIA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_COSTO_CREDITOS_TESORERIA)*  CONS_UNI_PRE) END FLC_C_COSTO_CREDITOS_TESORERIA,
	     CASE WHEN (SUM(FLC_C_IMPUESTO_DE_RENTA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_IMPUESTO_DE_RENTA)*  CONS_UNI_PRE) END FLC_C_IMPUESTO_DE_RENTA,
	     CASE WHEN (SUM(FLC_C_FLUJO_NETO_CAJA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_FLUJO_NETO_CAJA)*  CONS_UNI_PRE) END FLC_C_FLUJO_NETO_CAJA,
	     CASE WHEN (SUM(FLC_C_FLUJO_ACUMULADO_CAJA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_FLUJO_ACUMULADO_CAJA)*  CONS_UNI_PRE) END FLC_C_FLUJO_ACUMULADO_CAJA,
	     CASE WHEN (SUM(FLC_C_PROYECCION_VENTAS_UNIDADES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PROYECCION_VENTAS_UNIDADES)*  CONS_UNI_PRE) END FLC_C_PROYECCION_VENTAS_UNIDADES,
	     CASE WHEN (SUM(FLC_C_VENTAS_BRUTAS)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_VENTAS_BRUTAS)*  CONS_UNI_PRE) END FLC_C_VENTAS_BRUTAS,
	     CASE WHEN (SUM(FLC_C_PRECIO_PROMEDIO)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PRECIO_PROMEDIO)*  CONS_UNI_PRE) END FLC_C_PRECIO_PROMEDIO,
	     CASE WHEN (SUM(FLC_C_PROYECCION_ENTREGAS_UNIDADES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PROYECCION_ENTREGAS_UNIDADES)*  CONS_UNI_PRE) END FLC_C_PROYECCION_ENTREGAS_UNIDADES,
	     CASE WHEN (SUM(FLC_C_PROYECCION_ESCRITURAS_VALOR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PROYECCION_ESCRITURAS_VALOR)*  CONS_UNI_PRE) END FLC_C_PROYECCION_ESCRITURAS_VALOR,
	     CASE WHEN (SUM(FLC_C_PROYECCION_ESCRITURAS_UNIDADES)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PROYECCION_ESCRITURAS_UNIDADES)*  CONS_UNI_PRE) END FLC_C_PROYECCION_ESCRITURAS_UNIDADES,
	     CASE WHEN (SUM(FLC_C_PROYECCION_SUBROGACIONES_VALOR)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_PROYECCION_SUBROGACIONES_VALOR)*  CONS_UNI_PRE) END FLC_C_PROYECCION_SUBROGACIONES_VALOR,
	     CASE WHEN (SUM(FLC_C_VPN)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_VPN)*  CONS_UNI_PRE) END FLC_C_VPN,
	     CASE WHEN (SUM(FLC_C_TIR_EA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_TIR_EA)*  CONS_UNI_PRE) END FLC_C_TIR_EA,
	     CASE WHEN (SUM(FLC_C_TIR_EM)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_TIR_EM)*  CONS_UNI_PRE) END FLC_C_TIR_EM,
	     CASE WHEN (SUM(FLC_C_TIR_MOD_EA)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_TIR_MOD_EA)*  CONS_UNI_PRE) END FLC_C_TIR_MOD_EA,
	     CASE WHEN (SUM(FLC_C_C_TIR_MOD_EM)*  CONS_UNI_PRE) = 0 THEN '' ELSE (SUM(FLC_C_C_TIR_MOD_EM)*  CONS_UNI_PRE) END FLC_C_C_TIR_MOD_EM
	    FROM tb_c_flujo_caja
		     ,tb_consolidados
 	     WHERE FLC_C_CONS_ID = CONS_ID
		 AND FLC_C_CONS_ID = '$Example'
		 GROUP BY FLC_C_PERIODICIDAD";
		 
		 
		 $cons="SELECT RES_C_VENTAS_BRUTAS,RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO FROM tb_c_resumen WHERE RES_C_CONS_ID = '$Example'"; 


	$resultado = $conexion->query($consulta);
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
		
		// CALCULOS TIR Y VPN
		#VPN: WACC  (ultimo, indicadores) VPN: VNA(WACC; FLUJO NETO CAJA)
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
						case '1':
							$periodo = 12;
							break;
						case '2':
							$periodo = 6;
							break;
						case '3':
							$periodo = 4;
							break;
						case '6':
							$periodo = 2;
							break;	
						case '12':
							$periodo = 1;
							break;
						case 'Quinquenio':
							$periodo = 5;
							break;
							
					}
					
					
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
		
		
		// FIN CALCULOS TIR Y VPN
		
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0) 
					 ->setCellValue($columnas[$c].'2',  '1/'.$fila["DATE_FORMAT(MAX(FLC_C_FECHA),'%m/%Y')"])
				     ->setCellValue($columnas[$c].'3',   $fila["DATE_FORMAT(MAX(FLC_C_FECHA),'%b/%y')"])	
					 ->setCellValue($columnas[$c].'5',   $fila['FLC_C_URBANISMO_INTERNO']/$moneda)
					 ->setCellValue($columnas[$c].'6',   $fila['FLC_C_UI_PRESUPUESTO']/$moneda)
					 ->setCellValue($columnas[$c].'7',   $fila['FLC_C_UI_INCREMENTOS']/$moneda)
					 ->setCellValue($columnas[$c].'8',   $fila['FLC_C_COSTOS_MATERIALES_MANO_OBRA']/$moneda)
					 ->setCellValue($columnas[$c].'9',   $fila['FLC_C_CM_PRESUPUESTO']/$moneda)
					 ->setCellValue($columnas[$c].'10',  $fila['FLC_C_CM_INCREMENTOS']/$moneda)
					 ->setCellValue($columnas[$c].'11',  $fila['FLC_C_GASTOS_IMPREVISTOS']/$moneda)
					 ->setCellValue($columnas[$c].'12',  $fila['FLC_C_COSTOS_POSTVENTA']/$moneda)
					 ->setCellValue($columnas[$c].'13',  $fila['FLC_C_COSTO_DIRECTO_CONSTRUCCION']/$moneda)
					 ->setCellValue($columnas[$c].'14',  $fila['FLC_C_HONORARIOS_CONSTRUCCION']/$moneda)
					 ->setCellValue($columnas[$c].'15',  $fila['FLC_C_HC_HONORARIOS_CONSTRUCCION']/$moneda)
					 ->setCellValue($columnas[$c].'16',  $fila['FLC_C_HC_GASTOS_REEMBOLSABLES']/$moneda)
					 ->setCellValue($columnas[$c].'17',  $fila['FLC_C_HONORARIOS_INTERVENTORIA']/$moneda)
					 ->setCellValue($columnas[$c].'18',  $fila['FLC_C_HI_HONORARIOS_INTERVENTORIA']/$moneda)
					 ->setCellValue($columnas[$c].'19',  $fila['FLC_C_HI_GASTOS_REEMBOSABLES']/$moneda)
					 ->setCellValue($columnas[$c].'20',  $fila['FLC_C_OTROS_HONORARIOS']/$moneda)
					 ->setCellValue($columnas[$c].'21',  $fila['FLC_C_OH_OTROS_HONORARIOS']/$moneda)
					 ->setCellValue($columnas[$c].'22',  $fila['FLC_C_OH_GASTOS_REEMBOLSABLES']/$moneda)
					 ->setCellValue($columnas[$c].'23',  $fila['FLC_C_IMPUESTOS_Y_DERECHOS']/$moneda)
					 ->setCellValue($columnas[$c].'24',  $fila['FLC_C_COSTO_TOTAL_CONSTRUCCION']/$moneda)
					 ->setCellValue($columnas[$c].'25',  $fila['FLC_C_HONORARIOS_GERENCIA']/$moneda)
					 ->setCellValue($columnas[$c].'26',  $fila['FLC_C_HG_HONORARIOS_GERENCIA']/$moneda)
					 ->setCellValue($columnas[$c].'27',  $fila['FLC_C_HG_GASTOS_REEMBOLSABLES']/$moneda)
					 ->setCellValue($columnas[$c].'28',  $fila['FLC_C_HONORARIOS_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'29',  $fila['FLC_C_HV_HONORARIOS_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'30',  $fila['FLC_C_HV_GASTOS_REEMBOLSABLES']/$moneda)
					 ->setCellValue($columnas[$c].'31',  $fila['FLC_C_COSTOS_PROMOCION_Y_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'32',  $fila['FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO']/$moneda)
					 ->setCellValue($columnas[$c].'33',  $fila['FLC_C_CP_GASTOS_PUBLICIDAD']/$moneda)
					 ->setCellValue($columnas[$c].'34',  $fila['FLC_C_CP_GASTOS_SALA_DE_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'35',  $fila['FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR']/$moneda)
					 ->setCellValue($columnas[$c].'36',  $fila['FLC_C_CP_COMISIONES_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'37',  $fila['FLC_C_GASTOS_LEGALES']/$moneda)
					 ->setCellValue($columnas[$c].'38',  $fila['FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR']/$moneda)
					 ->setCellValue($columnas[$c].'39',  $fila['FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'40',  $fila['FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA']/$moneda)
					 ->setCellValue($columnas[$c].'41',  $fila['FLC_C_GL_IMPUESTO_ICA']/$moneda)
					 ->setCellValue($columnas[$c].'42',  $fila['FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS']/$moneda)
					 ->setCellValue($columnas[$c].'43',  $fila['FLC_C_VALOR_TERRENO_URBANIZADO']/$moneda)
					 ->setCellValue($columnas[$c].'44',  $fila['FLC_C_VT_VALOR_ADQUISICION']/$moneda)
					 ->setCellValue($columnas[$c].'45',  $fila['FLC_C_VT_COSTOS_URBANISMO_Y_OTROS']/$moneda)
					 ->setCellValue($columnas[$c].'46',  $fila['FLC_C_COMISIONES_FIDUCIA']/$moneda)
					 ->setCellValue($columnas[$c].'47',  $fila['FLC_C_CF_PREVENTAS_Y_ADMINISTRACION']/$moneda)
					 ->setCellValue($columnas[$c].'48',  $fila['FLC_C_CF_NUEVOGAR']/$moneda)
					 ->setCellValue($columnas[$c].'49',  $fila['FLC_C_GASTOS_FINANCIEROS']/$moneda)
					 ->setCellValue($columnas[$c].'50',  $fila['FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR']/$moneda)
					 ->setCellValue($columnas[$c].'51',  $fila['FLC_C_GF_OTROS_COSTOS_CREDITO']/$moneda)
					 ->setCellValue($columnas[$c].'52',  $fila['FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION']/$moneda)
					 ->setCellValue($columnas[$c].'53',  $fila['FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF']/$moneda)
					 ->setCellValue($columnas[$c].'54',  $fila['FLC_C_OTROS_COSTOS_Y_GASTOS']/$moneda)
					 ->setCellValue($columnas[$c].'55',  $fila['FLC_C_OC_COSTOS_GASTOS1']/$moneda)
					 ->setCellValue($columnas[$c].'56',  $fila['FLC_C_OC_COSTOS_GASTOS2']/$moneda)
					 ->setCellValue($columnas[$c].'57',  $fila['FLC_C_OC_COSTOS_GASTOS3']/$moneda)
					 ->setCellValue($columnas[$c].'58',  $fila['FLC_C_REINTEGROS_IVA_PROYECTOS_VIS']/$moneda)
					 ->setCellValue($columnas[$c].'59',  $fila['FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS']/$moneda)
					 ->setCellValue($columnas[$c].'60',  $fila['FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA']/$moneda)
					 ->setCellValue($columnas[$c].'61',  $fila['FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO']/$moneda)
					 ->setCellValue($columnas[$c].'62',  $fila['FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO']/$moneda)
					 ->setCellValue($columnas[$c].'63',  $fila['FLC_C_INGRESOS_POR_VENTAS']/$moneda)
					 ->setCellValue($columnas[$c].'64',  $fila['FLC_C_IV_ABONOS_SEPARACION']/$moneda)
					 ->setCellValue($columnas[$c].'65',  $fila['FLC_C_IV_CARTERA_CUOTA_INICIAL']/$moneda)
					 ->setCellValue($columnas[$c].'66',  $fila['FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA']/$moneda)
					 ->setCellValue($columnas[$c].'67',  $fila['FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO']/$moneda)
					 ->setCellValue($columnas[$c].'68',  $fila['FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES']/$moneda)
					 ->setCellValue($columnas[$c].'69',  $fila['FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES']/$moneda)
					 ->setCellValue($columnas[$c].'70',  $fila['FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS']/$moneda)
					 ->setCellValue($columnas[$c].'71',  $fila['FLC_C_OTROS_INGRESOS_VENTAS_INTERESES']/$moneda)
					 ->setCellValue($columnas[$c].'72',  $fila['FLC_C_OI_INTERESES_SUBROGACION']/$moneda)
					 ->setCellValue($columnas[$c].'73',  $fila['FLC_C_OI_INTERESES_MORA']/$moneda)
					 ->setCellValue($columnas[$c].'74',  $fila['FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS']/$moneda)
					 ->setCellValue($columnas[$c].'75',  $fila['FLC_C_RENDIMIENTOS_FIDEICOMISO']/$moneda)
					 ->setCellValue($columnas[$c].'76',  $fila['FLC_C_OTROS_INGRESOS']/$moneda)
					 ->setCellValue($columnas[$c].'77',  $fila['FLC_C_OI_INGRESOS1']/$moneda)
					 ->setCellValue($columnas[$c].'78',  $fila['FLC_C_OI_INGRESOS2']/$moneda)
					 ->setCellValue($columnas[$c].'79',  $fila['FLC_C_OI_INGRESOS3']/$moneda)
					 ->setCellValue($columnas[$c].'80',  $fila['FLC_C_INGRESOS_TOTALES']/$moneda)
					 ->setCellValue($columnas[$c].'81',  $fila['FLC_C_FLUJO_NETO_CAJA_CT']/$moneda)
					 ->setCellValue($columnas[$c].'82',  $fila['FLC_C_FLUJO_ACUMULADO_CAJA_CT']/$moneda)
					 ->setCellValue($columnas[$c].'83',  $fila['FLC_C_COSTO_CREDITOS_TESORERIA']/$moneda)
					 ->setCellValue($columnas[$c].'84',  $fila['FLC_C_IMPUESTO_DE_RENTA']/$moneda)
					 ->setCellValue($columnas[$c].'85',  $fila['FLC_C_FLUJO_NETO_CAJA']/$moneda)
					 ->setCellValue($columnas[$c].'86',  $fila['FLC_C_FLUJO_ACUMULADO_CAJA']/$moneda)
					 ->setCellValue($columnas[$c].'91',  $fila['FLC_C_PROYECCION_VENTAS_UNIDADES']/$moneda)
					 ->setCellValue($columnas[$c].'92',  $fila['FLC_C_VENTAS_BRUTAS']/$moneda)
					 ->setCellValue($columnas[$c].'93',  $fila['FLC_C_PRECIO_PROMEDIO']/$moneda)
					 ->setCellValue($columnas[$c].'94',  $fila['FLC_C_PROYECCION_ENTREGAS_UNIDADES']/$moneda)
					 ->setCellValue($columnas[$c].'95',  $fila['FLC_C_PROYECCION_ESCRITURAS_VALOR']/$moneda)
					 ->setCellValue($columnas[$c].'96',  $fila['FLC_C_PROYECCION_ESCRITURAS_UNIDADES']/$moneda)
					 ->setCellValue($columnas[$c].'97',  $fila['FLC_C_PROYECCION_SUBROGACIONES_VALOR']/$moneda)
					 
					 ->setCellValue('B88',  'VPN (1054%  ea)')
					 ->setCellValue('B89', '=NPV('.$indicador.'%,E86:XFD86,E2:XFD2)')
					 
					 ->setCellValue('C88',  'TIR  (ea)')
					->setCellValue('C89', '=XIRR(E85:XFD85,E2:XFD2)')
					 
					 ->setCellValue('D88',  'TIR (em)')
					 ->setCellValue('D89',  '=C89/'.$periodo)
					 
					 ->setCellValue('E88',  'TIR mod (ea)')
					 ->setCellValue('E89', '=MIRR(E85:XFD85,'.$indicador.'%,0)')
					
					 ->setCellValue('F88',  'TIR mod (em)')			 
					 ->setCellValue('F89',  '=E89/'.$periodo)
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
			
			
			$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'2')
					->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
			
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
					 ->setCellValue('B97', '=SUM(E97:'.$columnas[$c].'97)') 
					 
					 ->setCellValue('C5', '=B5/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C6', '=B6/'.$ven_bru.'*'.$moneda)
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
					 ->setCellValue('C40', '=B40/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C41', '=B41/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C42', '=B42/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C43', '=B43/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C44', '=B44/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C45', '=B45/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C46', '=B46/'.$ven_bru.'*'.$moneda)
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
					 ->setCellValue('C80', '=B80/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C81', '=B81/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C82', '=B82/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C83', '=B83/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C84', '=B84/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C85', '=B85/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C86', '=B86/'.$ven_bru.'*'.$moneda)
					 
					 ->setCellValue('C91', '=B91/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C92', '=B92/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C93', '=B93/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C94', '=B94/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C95', '=B95/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C96', '=B96/'.$ven_bru.'*'.$moneda)
					 ->setCellValue('C97', '=B97/'.$ven_bru.'*'.$moneda);
	
	//Formato miles Con separador.
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
    ->getNumberFormat()->setFormatCode('#,##0');
	
	$objPHPExcel->getActiveSheet()->getStyle('C5:C97')
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

	$objPHPExcel->getActiveSheet()->getStyle('A42:'.$columnas[$c].'42')->applyFromArray($styleArray);

	
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
	
	// $objPHPExcel->getActiveSheet()->getStyle('E2:PXD2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
	
	
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
								
			
		$objPHPExcel->getActiveSheet()->getStyle('C89:G89')
				 ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
	
		
		
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
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T055-informesExcel-D.php';</script>";
	}
?>