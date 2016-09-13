<?php
    $conexion = new mysqli("localhost", "u517611460_ika", "Colombia2016*", "arbiter",3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	
	$Example=$_GET['dato']; 
	
	    $consulta = "SELECT RES_C_CONS_ID, RES_C_FECHA, RES_C_TOTAL_UNIDADES, RES_C_AREA_PROMEDIO_UNIDAD, RES_C_TOTAL_AREA_CONSTRUIDA, 
		RES_C_TOTAL_AREA_VENDIBLE, RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO, RES_C_DENSIDAD_INDICE_OCUPACION, 
		RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO, RES_C_NUMERO_PARQUEOS, RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD, 
		RES_C_NUMERO_DEPOSITOS, RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS, RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION, 
		RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO, RES_C_PUNTO_EQUILIBRIO_UNIDADES, RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS, 
		RES_C_PORCENTAJE_VENTAS_NUEVOGAR, RES_C_FECHA_PRESUPUESTO, RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO, RES_C_RESULTADOS, 
		RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA, RES_C_PRESUPUESTO, RES_C_INCREMENTOS, RES_C_COSTO_MATERIALES_MANO_OBRA, 
		RES_C_PRESUPUESTO2, RES_C_INCREMENTOS2, RES_C_GASTOS_IMPREVISTOS, RES_C_COSTOS_POST_VENTAS, RES_C_COSTO_DIRECTO_CONSTRUCCION, 
		RES_C_HONORARIOS_CONSTRUCCION, RES_C_HONORARIOS_CONSTRUCCION2, RES_C_GASTOS_REEMBOLSABLES, RES_C_HONORARIOS_INTERVENTORIA, 
		RES_C_HONORARIOS_INTERVENTORIA2, RES_C_GASTOS_REEMBOLSABLES2, RES_C_OTROS_HONORARIOS_DISENOS_OTROS, RES_C_OTROS_HONORARIOS_DISENOS_OTROS2, 
		RES_C_GASTOS_REEMBOLSABLES3, RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION, RES_C_COSTO_TOTAL_CONSTRUCCION, RES_C_HONORARIOS_GERENCIA, 
		RES_C_HONORARIOS_GERENCIA2, RES_C_GASTOS_REEMBOLSABLES4, RES_C_HONORARIOS_VENTAS, RES_C_HONORARIOS_VENTAS2, RES_C_GASTOS_REEMBOLSABLES5, 
		RES_C_COSTOS_PROMOCION_Y_VENTAS, RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION, RES_C_GASTOS_PUBLICIDAD, RES_C_GASTOS_SALA_VENTAS, 
		RES_C_ADMON_UNIDADES_POR_ENTREGAR, RES_C_COMISIONES_VENTAS, RES_C_GASTOS_LEGALES, RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR, 
		RES_C_NOTARIALES_REGISTRO_DE_VENTAS, RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR, RES_C_IMPUESTO_ICA, RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS, 
		RES_C_VALOR_TERENO_URBANIZADO, RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO, RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION, RES_C_COMISIONES_FIDUCIA, 
		RES_C_PREVENTAS_Y_ADMON, RES_C_NUEVOGAR, RES_C_GASTOS_FINANCIEROS, RES_C_INTERESES_CREDITO_CONSTRUCTOR, RES_C_OTROS_COSTOS_CREDITO, 
		RES_C_CORRECCION_MONETARIA, RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF, RES_C_OTROS_COSTOS_Y_GASTOS, RES_C_GASTO1, RES_C_GASTO2, 
		RES_C_GASTO3, RES_C_REINTEGROS_IVA_PROYECTOS_VIS, RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS, RES_C_VENTAS_BRUTAS, RES_C_OTROS_INGRESOS_VENTAS, 
		RES_C_INTERESES_SUBROGACION, RES_C_INTERESES_MORA, RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS, RES_C_RENDIMIENTOS_FIDEICOMISO, 
		RES_C_OTROS_INGRESOS, RES_C_INGRESOS1, RES_C_INGRESOS2, RES_C_INGRESOS3, RES_C_INGRESOS_TOTALES, RES_C_UTILIDAD_PROYECTO, 
		RES_C_COSTO_CREDITO_TESORERIA, RES_C_IMPUESTO_RENTA, RES_C_UTILIDAD_PROYECTO2, RES_C_COSTO_VENTAS_GESTION, RES_C_VALOR_TERRENO_LIBROS, 
		RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES, RES_C_TIR_EA, RES_C_TIR_EM, RES_C_VPN_TASA_DESCUENTO, RES_C_UTILIDAD_COLPATRIA, RES_C_CONSTRUCTORA, 
		RES_C_TRANSACCIONES_INMOBILIARIAS, RES_C_PROMOTORA, RES_C_TIR_COLAPTRIA_EA, RES_C_TIR_COLPATRIA_EM, RES_C_VPN_COLPATRIA_TASA_DESCUENTO, 
		RES_C_PORCENTAJE_VENTAS, RES_C_VALOR_M2_VENDIBLE, RES_C_VALOR_M2_CONSTRUIDO, RES_C_VALOR_UNIDAD, RES_C_EJECUCION_AL_CORTE, RES_C_PORCENTAJE_TOTAL, 
		RES_C_MODELOID2, RES_C_PORC_VEN_UI, RES_C_PORC_VEN_UIP, RES_C_PORC_VEN_UII, RES_C_PORC_VEN_CM, RES_C_PORC_VEN_CMP, RES_C_PORC_VEN_CMI, RES_C_PORC_VEN_GI, 
		RES_C_PORC_VEN_CP, RES_C_PORC_VEN_CD, RES_C_PORC_VEN_CD_HC, RES_C_PORC_VEN_CD_HC_HC, RES_C_PORC_VEN_CD_HC_GR, RES_C_PORC_VEN_CD_HI, RES_C_PORC_VEN_CD_HI_HI, 
		RES_C_PORC_VEN_CD_HI_GR, RES_C_PORC_VEN_CD_OH, RES_C_PORC_VEN_CD_OH_OH, RES_C_PORC_VEN_CD_OH_GR, RES_C_PORC_VEN_CD_ID, RES_C_PORC_VEN_CT, 
		RES_C_PORC_VEN_CT_HG, RES_C_PORC_VEN_CT_HG_HG, RES_C_PORC_VEN_CT_HG_GR, RES_C_PORC_VEN_CT_HV, RES_C_PORC_VEN_CT_HV_HV, RES_C_PORC_VEN_CT_HV_GR, 
		RES_C_PORC_VEN_CT_CP, RES_C_PORC_VEN_CT_CP_SV, RES_C_PORC_VEN_CT_CP_GP, RES_C_PORC_VEN_CT_CP_GS, RES_C_PORC_VEN_CT_CP_AU, RES_C_PORC_VEN_CT_CP_CV, 
		RES_C_PORC_VEN_CT_GL, RES_C_PORC_VEN_CT_GL_HC, RES_C_PORC_VEN_CT_GL_NR, RES_C_PORC_VEN_CT_GL_IP, RES_C_PORC_VEN_CT_GL_IC, RES_C_PORC_VEN_CA, 
		RES_C_PORC_VEN_CA_VT, RES_C_PORC_VEN_CA_VT_PV, RES_C_PORC_VEN_CA_VT_OP, RES_C_PORC_VEN_CA_CF, RES_C_PORC_VEN_CA_CF_PA, RES_C_PORC_VEN_CA_CF_NH, 
		RES_C_PORC_VEN_CA_GF, RES_C_PORC_VEN_CA_GF_IC, RES_C_PORC_VEN_CA_GF_OC, RES_C_PORC_VEN_CA_GF_CM, RES_C_PORC_VEN_CA_GF_IT, RES_C_PORC_VEN_CA_OC, 
		RES_C_PORC_VEN_CA_OC_OC1, RES_C_PORC_VEN_CA_OC_OC2, RES_C_PORC_VEN_CA_OC_OC3, RES_C_PORC_VEN_CA_RI, RES_C_PORC_VEN_CI, RES_C_PORC_VEN_CI_VB, 
		RES_C_PORC_VEN_CI_OV, RES_C_PORC_VEN_CI_OV_IS, RES_C_PORC_VEN_CI_OV_IM, RES_C_PORC_VEN_CI_OV_OC, RES_C_PORC_VEN_CI_RF, RES_C_PORC_VEN_CI_OI, 
		RES_C_PORC_VEN_CI_OI_OI1, RES_C_PORC_VEN_CI_OI_OI2, RES_C_PORC_VEN_CI_OI_OI3, RES_C_PORC_VEN_IT, RES_C_PORC_VEN_UP, RES_C_PORC_VEN_UP_CC, 
		RES_C_PORC_VEN_UP_IR, RES_C_PORC_VEN_UP2, RES_C_PORC_VEN_CV, RES_C_PORC_VEN_VT, RES_C_PORC_VEN_CVG, RES_C_PORC_VEN_TIR, RES_C_PORC_VEN_VPN, 
		RES_C_PORC_VEN_UC, RES_C_PORC_VEN_UC_CO, RES_C_PORC_VEN_UC_TI, RES_C_PORC_VEN_UC_PR, RES_C_PORC_VEN_TIR_C, RES_C_PORC_VEN_VPN_C, 
		RES_C_VR_M_CON_UI, RES_C_VR_M_CON_UIP, RES_C_VR_M_CON_UII, RES_C_VR_M_CON_CM, RES_C_VR_M_CON_CMP, RES_C_VR_M_CON_CMI, RES_C_VR_M_CON_GI, 
		RES_C_VR_M_CON_CP, RES_C_VR_M_CON_CD, RES_C_VR_M_CON_CD_HC, RES_C_VR_M_CON_CD_HC_HC, RES_C_VR_M_CON_CD_HC_GR, RES_C_VR_M_CON_CD_HI, 
		RES_C_VR_M_CON_CD_HI_HI, RES_C_VR_M_CON_CD_HI_GR, RES_C_VR_M_CON_CD_OH, RES_C_VR_M_CON_CD_OH_OH, RES_C_VR_M_CON_CD_OH_GR, RES_C_VR_M_CON_CD_ID, 
		RES_C_VR_M_CON_CT, RES_C_VR_M_CON_CT_HG, RES_C_VR_M_CON_CT_HG_HG, RES_C_VR_M_CON_CT_HG_GR, RES_C_VR_M_CON_CT_HV, RES_C_VR_M_CON_CT_HV_HV, 
		RES_C_VR_M_CON_CT_HV_GR, RES_C_VR_M_CON_CT_CP, RES_C_VR_M_CON_CT_CP_SV, RES_C_VR_M_CON_CT_CP_GP, RES_C_VR_M_CON_CT_CP_GS, RES_C_VR_M_CON_CT_CP_AU, 
		RES_C_VR_M_CON_CT_CP_CV, RES_C_VR_M_CON_CT_GL, RES_C_VR_M_CON_CT_GL_HC, RES_C_VR_M_CON_CT_GL_NR, RES_C_VR_M_CON_CT_GL_IP, RES_C_VR_M_CON_CT_GL_IC, 
		RES_C_VR_M_CON_CA, RES_C_VR_M_CON_CA_VT, RES_C_VR_M_CON_CA_VT_PV, RES_C_VR_M_CON_CA_VT_OP, RES_C_VR_M_CON_CA_CF, RES_C_VR_M_CON_CA_CF_PA, 
		RES_C_VR_M_CON_CA_CF_NH, RES_C_VR_M_CON_CA_GF, RES_C_VR_M_CON_CA_GF_IC, RES_C_VR_M_CON_CA_GF_OC, RES_C_VR_M_CON_CA_GF_CM, RES_C_VR_M_CON_CA_GF_IT, 
		RES_C_VR_M_CON_CA_OC, RES_C_VR_M_CON_CA_OC_OC1, RES_C_VR_M_CON_CA_OC_OC2, RES_C_VR_M_CON_CA_OC_OC3, RES_C_VR_M_CON_CA_RI, RES_C_VR_M_CON_CI, 
		RES_C_VR_M_CON_CI_VB, RES_C_VR_M_CON_CI_OV, RES_C_VR_M_CON_CI_OV_IS, RES_C_VR_M_CON_CI_OV_IM, RES_C_VR_M_CON_CI_OV_OC, RES_C_VR_M_CON_CI_RF, 
		RES_C_VR_M_CON_CI_OI, RES_C_VR_M_CON_CI_OI_OI1, RES_C_VR_M_CON_CI_OI_OI2, RES_C_VR_M_CON_CI_OI_OI3, RES_C_VR_M_CON_IT, RES_C_VR_M_CON_UP, 
		RES_C_VR_M_CON_UP_CC, RES_C_VR_M_CON_UP_IR, RES_C_VR_M_CON_UP2, RES_C_VR_M_CON_CV, RES_C_VR_M_CON_VT, RES_C_VR_M_CON_CVG, RES_C_VR_M_CON_TIR, 
		RES_C_VR_M_CON_VPN, RES_C_VR_M_CON_UC, RES_C_VR_M_CON_UC_CO, RES_C_VR_M_CON_UC_TI, RES_C_VR_M_CON_UC_PR, RES_C_VR_M_CON_TIR_C, RES_C_VR_M_CON_VPN_C, 
		RES_C_VR_M_VEN_UI, RES_C_VR_M_VEN_UIP, RES_C_VR_M_VEN_UII, RES_C_VR_M_VEN_CM, RES_C_VR_M_VEN_CMP, RES_C_VR_M_VEN_CMI, RES_C_VR_M_VEN_GI, 
		RES_C_VR_M_VEN_CP, RES_C_VR_M_VEN_CD, RES_C_VR_M_VEN_CD_HC, RES_C_VR_M_VEN_CD_HC_HC, RES_C_VR_M_VEN_CD_HC_GR, RES_C_VR_M_VEN_CD_HI, 
		RES_C_VR_M_VEN_CD_HI_HI, RES_C_VR_M_VEN_CD_HI_GR, RES_C_VR_M_VEN_CD_OH, RES_C_VR_M_VEN_CD_OH_OH, RES_C_VR_M_VEN_CD_OH_GR, RES_C_VR_M_VEN_CD_ID, 
		RES_C_VR_M_VEN_CT, RES_C_VR_M_VEN_CT_HG, RES_C_VR_M_VEN_CT_HG_HG, RES_C_VR_M_VEN_CT_HG_GR, RES_C_VR_M_VEN_CT_HV, RES_C_VR_M_VEN_CT_HV_HV, 
		RES_C_VR_M_VEN_CT_HV_GR, RES_C_VR_M_VEN_CT_CP, RES_C_VR_M_VEN_CT_CP_SV, RES_C_VR_M_VEN_CT_CP_GP, RES_C_VR_M_VEN_CT_CP_GS, RES_C_VR_M_VEN_CT_CP_AU, 
		RES_C_VR_M_VEN_CT_CP_CV, RES_C_VR_M_VEN_CT_GL, RES_C_VR_M_VEN_CT_GL_HC, RES_C_VR_M_VEN_CT_GL_NR, RES_C_VR_M_VEN_CT_GL_IP, RES_C_VR_M_VEN_CT_GL_IC, 
		RES_C_VR_M_VEN_CA, RES_C_VR_M_VEN_CA_VT, RES_C_VR_M_VEN_CA_VT_PV, RES_C_VR_M_VEN_CA_VT_OP, RES_C_VR_M_VEN_CA_CF, RES_C_VR_M_VEN_CA_CF_PA, 
		RES_C_VR_M_VEN_CA_CF_NH, RES_C_VR_M_VEN_CA_GF, RES_C_VR_M_VEN_CA_GF_IC, RES_C_VR_M_VEN_CA_GF_OC, RES_C_VR_M_VEN_CA_GF_CM, RES_C_VR_M_VEN_CA_GF_IT, 
		RES_C_VR_M_VEN_CA_OC, RES_C_VR_M_VEN_CA_OC_OC1, RES_C_VR_M_VEN_CA_OC_OC2, RES_C_VR_M_VEN_CA_OC_OC3, RES_C_VR_M_VEN_CA_RI, RES_C_VR_M_VEN_CI, 
		RES_C_VR_M_VEN_CI_VB, RES_C_VR_M_VEN_CI_OV, RES_C_VR_M_VEN_CI_OV_IS, RES_C_VR_M_VEN_CI_OV_IM, RES_C_VR_M_VEN_CI_OV_OC, RES_C_VR_M_VEN_CI_RF, 
		RES_C_VR_M_VEN_CI_OI, RES_C_VR_M_VEN_CI_OI_OI1, RES_C_VR_M_VEN_CI_OI_OI2, RES_C_VR_M_VEN_CI_OI_OI3, RES_C_VR_M_VEN_IT, RES_C_VR_M_VEN_UP, 
		RES_C_VR_M_VEN_UP_CC, RES_C_VR_M_VEN_UP_IR, RES_C_VR_M_VEN_UP2, RES_C_VR_M_VEN_CV, RES_C_VR_M_VEN_VT, RES_C_VR_M_VEN_CVG, RES_C_VR_M_VEN_TIR, 
		RES_C_VR_M_VEN_VPN, RES_C_VR_M_VEN_UC, RES_C_VR_M_VEN_UC_CO, RES_C_VR_M_VEN_UC_TI, RES_C_VR_M_VEN_UC_PR, RES_C_VR_M_VEN_TIR_C, RES_C_VR_M_VEN_VPN_C, 
		RES_C_VR_UNI_UI, RES_C_VR_UNI_UIP, RES_C_VR_UNI_UII, RES_C_VR_UNI_CM, RES_C_VR_UNI_CMP, RES_C_VR_UNI_CMI, RES_C_VR_UNI_GI, RES_C_VR_UNI_CP, 
		RES_C_VR_UNI_CD, RES_C_VR_UNI_CD_HC, RES_C_VR_UNI_CD_HC_HC, RES_C_VR_UNI_CD_HC_GR, RES_C_VR_UNI_CD_HI, RES_C_VR_UNI_CD_HI_HI, RES_C_VR_UNI_CD_HI_GR, 
		RES_C_VR_UNI_CD_OH, RES_C_VR_UNI_CD_OH_OH, RES_C_VR_UNI_CD_OH_GR, RES_C_VR_UNI_CD_ID, RES_C_VR_UNI_CT, RES_C_VR_UNI_CT_HG, RES_C_VR_UNI_CT_HG_HG, 
		RES_C_VR_UNI_CT_HG_GR, RES_C_VR_UNI_CT_HV, RES_C_VR_UNI_CT_HV_HV, RES_C_VR_UNI_CT_HV_GR, RES_C_VR_UNI_CT_CP, RES_C_VR_UNI_CT_CP_SV, RES_C_VR_UNI_CT_CP_GP, 
		RES_C_VR_UNI_CT_CP_GS, RES_C_VR_UNI_CT_CP_AU, RES_C_VR_UNI_CT_CP_CV, RES_C_VR_UNI_CT_GL, RES_C_VR_UNI_CT_GL_HC, RES_C_VR_UNI_CT_GL_NR, RES_C_VR_UNI_CT_GL_IP, 
		RES_C_VR_UNI_CT_GL_IC, RES_C_VR_UNI_CA, RES_C_VR_UNI_CA_VT, RES_C_VR_UNI_CA_VT_PV, RES_C_VR_UNI_CA_VT_OP, RES_C_VR_UNI_CA_CF, RES_C_VR_UNI_CA_CF_PA, 
		RES_C_VR_UNI_CA_CF_NH, RES_C_VR_UNI_CA_GF, RES_C_VR_UNI_CA_GF_IC, RES_C_VR_UNI_CA_GF_OC, RES_C_VR_UNI_CA_GF_CM, RES_C_VR_UNI_CA_GF_IT, RES_C_VR_UNI_CA_OC, 
		RES_C_VR_UNI_CA_OC_OC1, RES_C_VR_UNI_CA_OC_OC2, RES_C_VR_UNI_CA_OC_OC3, RES_C_VR_UNI_CA_RI, RES_C_VR_UNI_CI, RES_C_VR_UNI_CI_VB, RES_C_VR_UNI_CI_OV, 
		RES_C_VR_UNI_CI_OV_IS, RES_C_VR_UNI_CI_OV_IM, RES_C_VR_UNI_CI_OV_OC, RES_C_VR_UNI_CI_RF, RES_C_VR_UNI_CI_OI, RES_C_VR_UNI_CI_OI_OI1, 
		RES_C_VR_UNI_CI_OI_OI2, RES_C_VR_UNI_CI_OI_OI3, RES_C_VR_UNI_IT, RES_C_VR_UNI_UP, RES_C_VR_UNI_UP_CC, RES_C_VR_UNI_UP_IR, RES_C_VR_UNI_UP2, 
		RES_C_VR_UNI_CV, RES_C_VR_UNI_VT, RES_C_VR_UNI_CVG, RES_C_VR_UNI_TIR, RES_C_VR_UNI_VPN, RES_C_VR_UNI_UC, RES_C_VR_UNI_UC_CO, RES_C_VR_UNI_UC_TI, 
		RES_C_VR_UNI_UC_PR, RES_C_VR_UNI_TIR_C, RES_C_VR_UNI_VPN_C, RES_C_EJE_UI, RES_C_EJE_UII, RES_C_EJE_CM, RES_C_EJE_CMP, RES_C_EJE_CMI, RES_C_EJE_GI, 
		RES_C_EJE_CP, RES_C_EJE_CD, RES_C_EJE_CD_HC, RES_C_EJE_CD_HC_HC, RES_C_EJE_CD_HC_GR, RES_C_EJE_CD_HI, RES_C_EJE_CD_HI_HI, RES_C_EJE_CD_HI_GR, 
		RES_C_EJE_CD_OH, RES_C_EJE_CD_OH_OH, RES_C_EJE_CD_OH_GR, RES_C_EJE_CD_ID, RES_C_EJE_CT, RES_C_EJE_CT_HG, RES_C_EJE_CT_HG_HG, RES_C_EJE_CT_HG_GR, 
		RES_C_EJE_CT_HV, RES_C_EJE_CT_HV_HV, RES_C_EJE_CT_HV_GR, RES_C_EJE_CT_CP, RES_C_EJE_CT_CP_SV, RES_C_EJE_CT_CP_GP, RES_C_EJE_CT_CP_GS, 
		RES_C_EJE_CT_CP_AU, RES_C_EJE_CT_CP_CV, RES_C_EJE_CT_GL, RES_C_EJE_CT_GL_HC, RES_C_EJE_CT_GL_NR, RES_C_EJE_CT_GL_IP, RES_C_EJE_CT_GL_IC, 
		RES_C_EJE_CA, RES_C_EJE_CA_VT, RES_C_EJE_CA_VT_PV, RES_C_EJE_CA_VT_OP, RES_C_EJE_CA_CF, RES_C_EJE_CA_CF_PA, RES_C_EJE_CA_CF_NH, RES_C_EJE_CA_GF, 
		RES_C_EJE_CA_GF_IC, RES_C_EJE_CA_GF_OC, RES_C_EJE_CA_GF_CM, RES_C_EJE_CA_GF_IT, RES_C_EJE_CA_OC, RES_C_EJE_CA_OC_OC1, RES_C_EJE_CA_OC_OC2, 
		RES_C_EJE_CA_OC_OC3, RES_C_EJE_CA_RI, RES_C_EJE_CI, RES_C_EJE_CI_VB, RES_C_EJE_CI_OV, RES_C_EJE_CI_OV_IS, RES_C_EJE_CI_OV_IM, RES_C_EJE_CI_OV_OC, 
		RES_C_EJE_CI_RF, RES_C_EJE_CI_OI, RES_C_EJE_CI_OI_OI1, RES_C_EJE_CI_OI_OI2, RES_C_EJE_CI_OI_OI3, RES_C_EJE_IT, RES_C_EJE_UP, RES_C_EJE_UP_CC, 
		RES_C_EJE_UP_IR, RES_C_EJE_UP2, RES_C_EJE_CV, RES_C_EJE_VT, RES_C_EJE_CVG,RES_C_EJE_UIP FROM tb_c_resumen
		

		WHERE RES_C_CONS_ID='$Example'";

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
		
		
		
		while ($fila = $resultado->fetch_array()) {
			
					$objPHPExcel->setActiveSheetIndex(0) 
					 ->setCellValue('A1',   'RESUMEN')
					 ->setCellValue('B6',   $fila['RES_C_TOTAL_UNIDADES'])
					 ->setCellValue('B7',   $fila['RES_C_AREA_PROMEDIO_UNIDAD'])
					 ->setCellValue('B8',   $fila['RES_C_TOTAL_AREA_CONSTRUIDA'])
					 ->setCellValue('B9',   $fila['RES_C_TOTAL_AREA_VENDIBLE']) 
					 ->setCellValue('B10',   $fila['RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO'])
					 ->setCellValue('B11',  $fila['RES_C_DENSIDAD_INDICE_OCUPACION'])
					 ->setCellValue('B12',  $fila['RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO'])
					 ->setCellValue('B13',  $fila['RES_C_NUMERO_PARQUEOS'])
					 ->setCellValue('B14',  $fila['RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD'])
					 ->setCellValue('B15',  $fila['RES_C_NUMERO_DEPOSITOS'])
					 ->setCellValue('B16',  $fila['RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS'])
					 ->setCellValue('B17',  $fila['RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION'])
					 ->setCellValue('B18',  $fila['RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO'])
					 ->setCellValue('B19',  $fila['RES_C_PUNTO_EQUILIBRIO_UNIDADES'])
					 ->setCellValue('B20',  $fila['RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS'])
					 ->setCellValue('B21',  $fila['RES_C_PORCENTAJE_VENTAS_NUEVOGAR'])
					 ->setCellValue('B22',  $fila['RES_C_FECHA_PRESUPUESTO'])
					 ->setCellValue('B23',  $fila['RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO'])
					 
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
					 
					  ->setCellValue('C27',  $fila['RES_C_PORC_VEN_UI'])
					 ->setCellValue('C28',  $fila['RES_C_PORC_VEN_UIP'])
					 ->setCellValue('C29',  $fila['RES_C_PORC_VEN_UII'])
					 ->setCellValue('C30',  $fila['RES_C_PORC_VEN_CM'])
					 ->setCellValue('C31',  $fila['RES_C_PORC_VEN_CMP'])
					 ->setCellValue('C32',  $fila['RES_C_PORC_VEN_CMI'])
					 ->setCellValue('C33',  $fila['RES_C_PORC_VEN_GI'])
					 ->setCellValue('C34',  $fila['RES_C_PORC_VEN_CP'])
					 ->setCellValue('C35',  $fila['RES_C_PORC_VEN_CD'])
					 ->setCellValue('C36',  $fila['RES_C_PORC_VEN_CD_HC'])
					 ->setCellValue('C37',  $fila['RES_C_PORC_VEN_CD_HC_HC'])
					 ->setCellValue('C38',  $fila['RES_C_PORC_VEN_CD_HC_GR'])
					 ->setCellValue('C39',  $fila['RES_C_PORC_VEN_CD_HI'])
					 ->setCellValue('C40',  $fila['RES_C_PORC_VEN_CD_HI_HI'])
					 ->setCellValue('C41',  $fila['RES_C_PORC_VEN_CD_HI_GR'])
					 ->setCellValue('C42',  $fila['RES_C_PORC_VEN_CD_OH'])
					 ->setCellValue('C43',  $fila['RES_C_PORC_VEN_CD_OH_OH'])
					 ->setCellValue('C44',  $fila['RES_C_PORC_VEN_CD_OH_GR'])
					 ->setCellValue('C45',  $fila['RES_C_PORC_VEN_CD_ID'])
					 ->setCellValue('C46',  $fila['RES_C_PORC_VEN_CT'])
					 ->setCellValue('C47',  $fila['RES_C_PORC_VEN_CT_HG'])
					 ->setCellValue('C48',  $fila['RES_C_PORC_VEN_CT_HG_HG'])
					 ->setCellValue('C49',  $fila['RES_C_PORC_VEN_CT_HG_GR'])
					 ->setCellValue('C50',  $fila['RES_C_PORC_VEN_CT_HV'])
					 ->setCellValue('C51',  $fila['RES_C_PORC_VEN_CT_HV_HV'])
					 ->setCellValue('C52',  $fila['RES_C_PORC_VEN_CT_HV_GR'])
					 ->setCellValue('C53',  $fila['RES_C_PORC_VEN_CT_CP'])
					 ->setCellValue('C54',  $fila['RES_C_PORC_VEN_CT_CP_SV'])
					 ->setCellValue('C55',  $fila['RES_C_PORC_VEN_CT_CP_GP'])
					 ->setCellValue('C56',  $fila['RES_C_PORC_VEN_CT_CP_GS'])
					 ->setCellValue('C57',  $fila['RES_C_PORC_VEN_CT_CP_AU'])
					 ->setCellValue('C58',  $fila['RES_C_PORC_VEN_CT_CP_CV'])
					 ->setCellValue('C59',  $fila['RES_C_PORC_VEN_CT_GL'])
					 ->setCellValue('C60',  $fila['RES_C_PORC_VEN_CT_GL_HC'])
					 ->setCellValue('C61',  $fila['RES_C_PORC_VEN_CT_GL_NR'])
					 ->setCellValue('C62',  $fila['RES_C_PORC_VEN_CT_GL_IP'])
					 ->setCellValue('C63',  $fila['RES_C_PORC_VEN_CT_GL_IC'])
					 ->setCellValue('C64',  $fila['RES_C_PORC_VEN_CA'])
					 ->setCellValue('C65',  $fila['RES_C_PORC_VEN_CA_VT'])
					 ->setCellValue('C66',  $fila['RES_C_PORC_VEN_CA_VT_PV'])
					 ->setCellValue('C67',  $fila['RES_C_PORC_VEN_CA_VT_OP'])
					 ->setCellValue('C68',  $fila['RES_C_PORC_VEN_CA_CF'])
					 ->setCellValue('C69',  $fila['RES_C_PORC_VEN_CA_CF_PA'])
					 ->setCellValue('C70',  $fila['RES_C_PORC_VEN_CA_CF_NH'])
					 ->setCellValue('C71',  $fila['RES_C_PORC_VEN_CA_GF'])
					 ->setCellValue('C72',  $fila['RES_C_PORC_VEN_CA_GF_IC'])
					 ->setCellValue('C73',  $fila['RES_C_PORC_VEN_CA_GF_OC'])
					 ->setCellValue('C74',  $fila['RES_C_PORC_VEN_CA_GF_CM'])
					 ->setCellValue('C75',  $fila['RES_C_PORC_VEN_CA_GF_IT'])
					 ->setCellValue('C76',  $fila['RES_C_PORC_VEN_CA_OC'])
					 ->setCellValue('C77',  $fila['RES_C_PORC_VEN_CA_OC_OC1'])
					 ->setCellValue('C78',  $fila['RES_C_PORC_VEN_CA_OC_OC2'])
					 ->setCellValue('C79',  $fila['RES_C_PORC_VEN_CA_OC_OC3'])
					 ->setCellValue('C80',  $fila['RES_C_PORC_VEN_CA_RI'])
					 ->setCellValue('C81',  $fila['RES_C_PORC_VEN_CI'])
					 ->setCellValue('C82',  $fila['RES_C_PORC_VEN_CI_VB'])
					 ->setCellValue('C83',  $fila['RES_C_PORC_VEN_CI_OV'])
					 ->setCellValue('C84',  $fila['RES_C_PORC_VEN_CI_OV_IS'])
					 ->setCellValue('C85',  $fila['RES_C_PORC_VEN_CI_OV_IM'])
					 ->setCellValue('C86',  $fila['RES_C_PORC_VEN_CI_OV_OC'])
					 ->setCellValue('C87',  $fila['RES_C_PORC_VEN_CI_RF'])
					 ->setCellValue('C88',  $fila['RES_C_PORC_VEN_CI_OI'])
					 ->setCellValue('C89',  $fila['RES_C_PORC_VEN_CI_OI_OI1'])
					 ->setCellValue('C90',  $fila['RES_C_PORC_VEN_CI_OI_OI2'])
					 ->setCellValue('C91',  $fila['RES_C_PORC_VEN_CI_OI_OI3'])
					 ->setCellValue('C92',  $fila['RES_C_PORC_VEN_IT'])
					 ->setCellValue('C93',  $fila['RES_C_PORC_VEN_UP'])
					 ->setCellValue('C94',  $fila['RES_C_PORC_VEN_UP_CC'])
					 ->setCellValue('C95',  $fila['RES_C_PORC_VEN_UP_IR'])
					 ->setCellValue('C96',  $fila['RES_C_PORC_VEN_UP2'])

					 ->setCellValue('C98',  $fila['RES_C_PORC_VEN_CV'])
					 ->setCellValue('C99',  $fila['RES_C_PORC_VEN_VT'])
					 ->setCellValue('C100',  $fila['RES_C_PORC_VEN_CVG'])
					 
										 
					 ->setCellValue('C102',  $fila['RES_C_PORC_VEN_TIR'])
					 ->setCellValue('C103',  $fila['RES_C_PORC_VEN_VPN'])
					 ->setCellValue('C105',  $fila['RES_C_PORC_VEN_UC'])
					 ->setCellValue('C106',  $fila['RES_C_PORC_VEN_UC_CO'])
					 ->setCellValue('C107',  $fila['RES_C_PORC_VEN_UC_TI'])
					 
					 ->setCellValue('C108',  $fila['RES_C_PORC_VEN_UC_PR'])
					 ->setCellValue('C110',  $fila['RES_C_PORC_VEN_TIR_C'])
					 ->setCellValue('C111',  $fila['RES_C_PORC_VEN_VPN_C'])
					 
					 
				
					 ->setCellValue('D27',  $fila['RES_C_VR_M_CON_UI'])
					 ->setCellValue('D28',  $fila['RES_C_VR_M_CON_UIP'])
					 ->setCellValue('D29',  $fila['RES_C_VR_M_CON_UII'])
					 ->setCellValue('D30',  $fila['RES_C_VR_M_CON_CM'])
					 ->setCellValue('D31',  $fila['RES_C_VR_M_CON_CMP'])
					 ->setCellValue('D32',  $fila['RES_C_VR_M_CON_CMI'])
					 ->setCellValue('D33',  $fila['RES_C_VR_M_CON_GI'])
					 ->setCellValue('D34',  $fila['RES_C_VR_M_CON_CP'])
					 ->setCellValue('D35',  $fila['RES_C_VR_M_CON_CD'])
					 ->setCellValue('D36',  $fila['RES_C_VR_M_CON_CD_HC'])
					 ->setCellValue('D37',  $fila['RES_C_VR_M_CON_CD_HC_HC'])
					 ->setCellValue('D38',  $fila['RES_C_VR_M_CON_CD_HC_GR'])
					 ->setCellValue('D39',  $fila['RES_C_VR_M_CON_CD_HI'])
					 ->setCellValue('D40',  $fila['RES_C_VR_M_CON_CD_HI_HI'])
					 ->setCellValue('D41',  $fila['RES_C_VR_M_CON_CD_HI_GR'])
					 ->setCellValue('D42',  $fila['RES_C_VR_M_CON_CD_OH'])
					 ->setCellValue('D43',  $fila['RES_C_VR_M_CON_CD_OH_OH'])
					 ->setCellValue('D44',  $fila['RES_C_VR_M_CON_CD_OH_GR'])
					 ->setCellValue('D45',  $fila['RES_C_VR_M_CON_CD_ID'])
					 ->setCellValue('D46',  $fila['RES_C_VR_M_CON_CT'])
					 ->setCellValue('D47',  $fila['RES_C_VR_M_CON_CT_HG'])
					 ->setCellValue('D48',  $fila['RES_C_VR_M_CON_CT_HG_HG'])
					 ->setCellValue('D49',  $fila['RES_C_VR_M_CON_CT_HG_GR'])
					 ->setCellValue('D50',  $fila['RES_C_VR_M_CON_CT_HV'])
					 ->setCellValue('D51',  $fila['RES_C_VR_M_CON_CT_HV_HV'])
					 ->setCellValue('D52',  $fila['RES_C_VR_M_CON_CT_HV_GR'])
					 ->setCellValue('D53',  $fila['RES_C_VR_M_CON_CT_CP'])
					 ->setCellValue('D54',  $fila['RES_C_VR_M_CON_CT_CP_SV'])
					 ->setCellValue('D55',  $fila['RES_C_VR_M_CON_CT_CP_GP'])
					 ->setCellValue('D56',  $fila['RES_C_VR_M_CON_CT_CP_GS'])
					 ->setCellValue('D57',  $fila['RES_C_VR_M_CON_CT_CP_AU'])
					 ->setCellValue('D58',  $fila['RES_C_VR_M_CON_CT_CP_CV'])
					 ->setCellValue('D59',  $fila['RES_C_VR_M_CON_CT_GL'])
					 ->setCellValue('D60',  $fila['RES_C_VR_M_CON_CT_GL_HC'])
					 ->setCellValue('D61',  $fila['RES_C_VR_M_CON_CT_GL_NR'])
					 ->setCellValue('D62',  $fila['RES_C_VR_M_CON_CT_GL_IP'])
					 ->setCellValue('D63',  $fila['RES_C_VR_M_CON_CT_GL_IC'])
					 ->setCellValue('D64',  $fila['RES_C_VR_M_CON_CA'])
					 ->setCellValue('D65',  $fila['RES_C_VR_M_CON_CA_VT'])
					 ->setCellValue('D66',  $fila['RES_C_VR_M_CON_CA_VT_PV'])
					 ->setCellValue('D67',  $fila['RES_C_VR_M_CON_CA_VT_OP'])
					 ->setCellValue('D68',  $fila['RES_C_VR_M_CON_CA_CF'])
					 ->setCellValue('D69',  $fila['RES_C_VR_M_CON_CA_CF_PA'])
					 ->setCellValue('D70',  $fila['RES_C_VR_M_CON_CA_CF_NH'])
					 ->setCellValue('D71',  $fila['RES_C_VR_M_CON_CA_GF'])
					 ->setCellValue('D72',  $fila['RES_C_VR_M_CON_CA_GF_IC'])
					 ->setCellValue('D73',  $fila['RES_C_VR_M_CON_CA_GF_OC'])
					 ->setCellValue('D74',  $fila['RES_C_VR_M_CON_CA_GF_CM'])
					 ->setCellValue('D75',  $fila['RES_C_VR_M_CON_CA_GF_IT'])
					 ->setCellValue('D76',  $fila['RES_C_VR_M_CON_CA_OC'])
					 ->setCellValue('D77',  $fila['RES_C_VR_M_CON_CA_OC_OC1'])
					 ->setCellValue('D78',  $fila['RES_C_VR_M_CON_CA_OC_OC2'])
					 ->setCellValue('D79',  $fila['RES_C_VR_M_CON_CA_OC_OC3'])
					 ->setCellValue('D80',  $fila['RES_C_VR_M_CON_CA_RI'])
					 ->setCellValue('D81',  $fila['RES_C_VR_M_CON_CI'])
					 ->setCellValue('D82',  $fila['RES_C_VR_M_CON_CI_VB'])
					 ->setCellValue('D83',  $fila['RES_C_VR_M_CON_CI_OV'])
					 ->setCellValue('D84',  $fila['RES_C_VR_M_CON_CI_OV_IS'])
					 ->setCellValue('D85',  $fila['RES_C_VR_M_CON_CI_OV_IM'])
					 ->setCellValue('D86',  $fila['RES_C_VR_M_CON_CI_OV_OC'])
					 ->setCellValue('D87',  $fila['RES_C_VR_M_CON_CI_RF'])
					 ->setCellValue('D88',  $fila['RES_C_VR_M_CON_CI_OI'])
					 ->setCellValue('D89',  $fila['RES_C_VR_M_CON_CI_OI_OI1'])
					 ->setCellValue('D90',  $fila['RES_C_VR_M_CON_CI_OI_OI2'])
					 ->setCellValue('D91',  $fila['RES_C_VR_M_CON_CI_OI_OI3'])
					 ->setCellValue('D92',  $fila['RES_C_VR_M_CON_IT'])
					 ->setCellValue('D93',  $fila['RES_C_VR_M_CON_UP'])
					 ->setCellValue('D94',  $fila['RES_C_VR_M_CON_UP_CC'])
					 ->setCellValue('D95',  $fila['RES_C_VR_M_CON_UP_IR'])
					 ->setCellValue('D96',  $fila['RES_C_VR_M_CON_UP2'])

					 ->setCellValue('D98',  $fila['RES_C_VR_M_CON_CV'])
					 ->setCellValue('D99',  $fila['RES_C_VR_M_CON_VT'])
					 ->setCellValue('D100',  $fila['RES_C_VR_M_CON_CVG'])
					 
										 
					 ->setCellValue('D102',  $fila['RES_C_VR_M_CON_TIR'])
					 ->setCellValue('D103',  $fila['RES_C_VR_M_CON_VPN'])
					 
					 ->setCellValue('D105',  $fila['RES_C_VR_M_CON_UC'])
					 ->setCellValue('D106',  $fila['RES_C_VR_M_CON_UC_CO'])
					 ->setCellValue('D107',  $fila['RES_C_VR_M_CON_UC_TI'])
					 ->setCellValue('D108',  $fila['RES_C_VR_M_CON_UC_PR'])
					 
					 ->setCellValue('D110',  $fila['RES_C_VR_M_CON_TIR_C'])
					 ->setCellValue('D111',  $fila['RES_C_VR_M_CON_VPN_C'])
					 
					 ->setCellValue('E27',  $fila['RES_C_VR_M_VEN_UI'])
					 ->setCellValue('E28',  $fila['RES_C_VR_M_VEN_UIP'])
					 ->setCellValue('E29',  $fila['RES_C_VR_M_VEN_UII'])
					 ->setCellValue('E30',  $fila['RES_C_VR_M_VEN_CM'])
					 ->setCellValue('E31',  $fila['RES_C_VR_M_VEN_CMP'])
					 ->setCellValue('E32',  $fila['RES_C_VR_M_VEN_CMI'])
					 ->setCellValue('E33',  $fila['RES_C_VR_M_VEN_GI'])
					 ->setCellValue('E34',  $fila['RES_C_VR_M_VEN_CP'])
					 ->setCellValue('E35',  $fila['RES_C_VR_M_VEN_CD'])
					 ->setCellValue('E36',  $fila['RES_C_VR_M_VEN_CD_HC'])
					 ->setCellValue('E37',  $fila['RES_C_VR_M_VEN_CD_HC_HC'])
					 ->setCellValue('E38',  $fila['RES_C_VR_M_VEN_CD_HC_GR'])
					 ->setCellValue('E39',  $fila['RES_C_VR_M_VEN_CD_HI'])
					 ->setCellValue('E40',  $fila['RES_C_VR_M_VEN_CD_HI_HI'])
					 ->setCellValue('E41',  $fila['RES_C_VR_M_VEN_CD_HI_GR'])
					 ->setCellValue('E42',  $fila['RES_C_VR_M_VEN_CD_OH'])
					 ->setCellValue('E43',  $fila['RES_C_VR_M_VEN_CD_OH_OH'])
					 ->setCellValue('E44',  $fila['RES_C_VR_M_VEN_CD_OH_GR'])
					 ->setCellValue('E45',  $fila['RES_C_VR_M_VEN_CD_ID'])
					 ->setCellValue('E46',  $fila['RES_C_VR_M_VEN_CT'])
					 ->setCellValue('E47',  $fila['RES_C_VR_M_VEN_CT_HG'])
					 ->setCellValue('E48',  $fila['RES_C_VR_M_VEN_CT_HG_HG'])
					 ->setCellValue('E49',  $fila['RES_C_VR_M_VEN_CT_HG_GR'])
					 ->setCellValue('E50',  $fila['RES_C_VR_M_VEN_CT_HV'])
					 ->setCellValue('E51',  $fila['RES_C_VR_M_VEN_CT_HV_HV'])
					 ->setCellValue('E52',  $fila['RES_C_VR_M_VEN_CT_HV_GR'])
					 ->setCellValue('E53',  $fila['RES_C_VR_M_VEN_CT_CP'])
					 ->setCellValue('E54',  $fila['RES_C_VR_M_VEN_CT_CP_SV'])
					 ->setCellValue('E55',  $fila['RES_C_VR_M_VEN_CT_CP_GP'])
					 ->setCellValue('E56',  $fila['RES_C_VR_M_VEN_CT_CP_GS'])
					 ->setCellValue('E57',  $fila['RES_C_VR_M_VEN_CT_CP_AU'])
					 ->setCellValue('E58',  $fila['RES_C_VR_M_VEN_CT_CP_CV'])
					 ->setCellValue('E59',  $fila['RES_C_VR_M_VEN_CT_GL'])
					 ->setCellValue('E60',  $fila['RES_C_VR_M_VEN_CT_GL_HC'])
					 ->setCellValue('E61',  $fila['RES_C_VR_M_VEN_CT_GL_NR'])
					 ->setCellValue('E62',  $fila['RES_C_VR_M_VEN_CT_GL_IP'])
					 ->setCellValue('E63',  $fila['RES_C_VR_M_VEN_CT_GL_IC'])
					 ->setCellValue('E64',  $fila['RES_C_VR_M_VEN_CA'])
					 ->setCellValue('E65',  $fila['RES_C_VR_M_VEN_CA_VT'])
					 ->setCellValue('E66',  $fila['RES_C_VR_M_VEN_CA_VT_PV'])
					 ->setCellValue('E67',  $fila['RES_C_VR_M_VEN_CA_VT_OP'])
					 ->setCellValue('E68',  $fila['RES_C_VR_M_VEN_CA_CF'])
					 ->setCellValue('E69',  $fila['RES_C_VR_M_VEN_CA_CF_PA'])
					 ->setCellValue('E70',  $fila['RES_C_VR_M_VEN_CA_CF_NH'])
					 ->setCellValue('E71',  $fila['RES_C_VR_M_VEN_CA_GF'])
					 ->setCellValue('E72',  $fila['RES_C_VR_M_VEN_CA_GF_IC'])
					 ->setCellValue('E73',  $fila['RES_C_VR_M_VEN_CA_GF_OC'])
					 ->setCellValue('E74',  $fila['RES_C_VR_M_VEN_CA_GF_CM'])
					 ->setCellValue('E75',  $fila['RES_C_VR_M_VEN_CA_GF_IT'])
					 ->setCellValue('E76',  $fila['RES_C_VR_M_VEN_CA_OC'])
					 ->setCellValue('E77',  $fila['RES_C_VR_M_VEN_CA_OC_OC1'])
					 ->setCellValue('E78',  $fila['RES_C_VR_M_VEN_CA_OC_OC2'])
					 ->setCellValue('E79',  $fila['RES_C_VR_M_VEN_CA_OC_OC3'])
					 ->setCellValue('E80',  $fila['RES_C_VR_M_VEN_CA_RI'])
					 ->setCellValue('E81',  $fila['RES_C_VR_M_VEN_CI'])
					 ->setCellValue('E82',  $fila['RES_C_VR_M_VEN_CI_VB'])
					 ->setCellValue('E83',  $fila['RES_C_VR_M_VEN_CI_OV'])
					 ->setCellValue('E84',  $fila['RES_C_VR_M_VEN_CI_OV_IS'])
					 ->setCellValue('E85',  $fila['RES_C_VR_M_VEN_CI_OV_IM'])
					 ->setCellValue('E86',  $fila['RES_C_VR_M_VEN_CI_OV_OC'])
					 ->setCellValue('E87',  $fila['RES_C_VR_M_VEN_CI_RF'])
					 ->setCellValue('E88',  $fila['RES_C_VR_M_VEN_CI_OI'])
					 ->setCellValue('E89',  $fila['RES_C_VR_M_VEN_CI_OI_OI1'])
					 ->setCellValue('E90',  $fila['RES_C_VR_M_VEN_CI_OI_OI2'])
					 ->setCellValue('E91',  $fila['RES_C_VR_M_VEN_CI_OI_OI3'])
					 ->setCellValue('E92',  $fila['RES_C_VR_M_VEN_IT'])
					 ->setCellValue('E93',  $fila['RES_C_VR_M_VEN_UP'])
					 ->setCellValue('E94',  $fila['RES_C_VR_M_VEN_UP_CC'])
					 ->setCellValue('E95',  $fila['RES_C_VR_M_VEN_UP_IR'])
					 ->setCellValue('E96',  $fila['RES_C_VR_M_VEN_UP2'])

					 ->setCellValue('E98',  $fila['RES_C_VR_M_VEN_CV'])
					 ->setCellValue('E99',  $fila['RES_C_VR_M_VEN_VT'])
					 ->setCellValue('E100',  $fila['RES_C_VR_M_VEN_CVG'])
					 
										 
					 ->setCellValue('E102',  $fila['RES_C_VR_M_VEN_TIR'])
					 ->setCellValue('E103',  $fila['RES_C_VR_M_VEN_VPN'])
					 
					 ->setCellValue('E105',  $fila['RES_C_VR_M_VEN_UC'])
					 ->setCellValue('E106',  $fila['RES_C_VR_M_VEN_UC_CO'])
					 ->setCellValue('E107',  $fila['RES_C_VR_M_VEN_UC_TI'])
					 ->setCellValue('E108',  $fila['RES_C_VR_M_VEN_UC_PR'])
					 
					 ->setCellValue('E110',  $fila['RES_C_VR_M_VEN_TIR_C'])
					 ->setCellValue('E111',  $fila['RES_C_VR_M_VEN_VPN_C']) 
					 

					 
					 ->setCellValue('F27',  $fila['RES_C_VR_UNI_UI'])
					 ->setCellValue('F28',  $fila['RES_C_VR_UNI_UIP'])
					 ->setCellValue('F29',  $fila['RES_C_VR_UNI_UII'])
					 ->setCellValue('F30',  $fila['RES_C_VR_UNI_CM'])
					 ->setCellValue('F31',  $fila['RES_C_VR_UNI_CMP'])
					 ->setCellValue('F32',  $fila['RES_C_VR_UNI_CMI'])
					 ->setCellValue('F33',  $fila['RES_C_VR_UNI_GI'])
					 ->setCellValue('F34',  $fila['RES_C_VR_UNI_CP'])
					 ->setCellValue('F35',  $fila['RES_C_VR_UNI_CD'])
					 ->setCellValue('F36',  $fila['RES_C_VR_UNI_CD_HC'])
					 ->setCellValue('F37',  $fila['RES_C_VR_UNI_CD_HC_HC'])
					 ->setCellValue('F38',  $fila['RES_C_VR_UNI_CD_HC_GR'])
					 ->setCellValue('F39',  $fila['RES_C_VR_UNI_CD_HI'])
					 ->setCellValue('F40',  $fila['RES_C_VR_UNI_CD_HI_HI'])
					 ->setCellValue('F41',  $fila['RES_C_VR_UNI_CD_HI_GR'])
					 ->setCellValue('F42',  $fila['RES_C_VR_UNI_CD_OH'])
					 ->setCellValue('F43',  $fila['RES_C_VR_UNI_CD_OH_OH'])
					 ->setCellValue('F44',  $fila['RES_C_VR_UNI_CD_OH_GR'])
					 ->setCellValue('F45',  $fila['RES_C_VR_UNI_CD_ID'])
					 ->setCellValue('F46',  $fila['RES_C_VR_UNI_CT'])
					 ->setCellValue('F47',  $fila['RES_C_VR_UNI_CT_HG'])
					 ->setCellValue('F48',  $fila['RES_C_VR_UNI_CT_HG_HG'])
					 ->setCellValue('F49',  $fila['RES_C_VR_UNI_CT_HG_GR'])
					 ->setCellValue('F50',  $fila['RES_C_VR_UNI_CT_HV'])
					 ->setCellValue('F51',  $fila['RES_C_VR_UNI_CT_HV_HV'])
					 ->setCellValue('F52',  $fila['RES_C_VR_UNI_CT_HV_GR'])
					 ->setCellValue('F53',  $fila['RES_C_VR_UNI_CT_CP'])
					 ->setCellValue('F54',  $fila['RES_C_VR_UNI_CT_CP_SV'])
					 ->setCellValue('F55',  $fila['RES_C_VR_UNI_CT_CP_GP'])
					 ->setCellValue('F56',  $fila['RES_C_VR_UNI_CT_CP_GS'])
					 ->setCellValue('F57',  $fila['RES_C_VR_UNI_CT_CP_AU'])
					 ->setCellValue('F58',  $fila['RES_C_VR_UNI_CT_CP_CV'])
					 ->setCellValue('F59',  $fila['RES_C_VR_UNI_CT_GL'])
					 ->setCellValue('F60',  $fila['RES_C_VR_UNI_CT_GL_HC'])
					 ->setCellValue('F61',  $fila['RES_C_VR_UNI_CT_GL_NR'])
					 ->setCellValue('F62',  $fila['RES_C_VR_UNI_CT_GL_IP'])
					 ->setCellValue('F63',  $fila['RES_C_VR_UNI_CT_GL_IC'])
					 ->setCellValue('F64',  $fila['RES_C_VR_UNI_CA'])
					 ->setCellValue('F65',  $fila['RES_C_VR_UNI_CA_VT'])
					 ->setCellValue('F66',  $fila['RES_C_VR_UNI_CA_VT_PV'])
					 ->setCellValue('F67',  $fila['RES_C_VR_UNI_CA_VT_OP'])
					 ->setCellValue('F68',  $fila['RES_C_VR_UNI_CA_CF'])
					 ->setCellValue('F69',  $fila['RES_C_VR_UNI_CA_CF_PA'])
					 ->setCellValue('F70',  $fila['RES_C_VR_UNI_CA_CF_NH'])
					 ->setCellValue('F71',  $fila['RES_C_VR_UNI_CA_GF'])
					 ->setCellValue('F72',  $fila['RES_C_VR_UNI_CA_GF_IC'])
					 ->setCellValue('F73',  $fila['RES_C_VR_UNI_CA_GF_OC'])
					 ->setCellValue('F74',  $fila['RES_C_VR_UNI_CA_GF_CM'])
					 ->setCellValue('F75',  $fila['RES_C_VR_UNI_CA_GF_IT'])
					 ->setCellValue('F76',  $fila['RES_C_VR_UNI_CA_OC'])
					 ->setCellValue('F77',  $fila['RES_C_VR_UNI_CA_OC_OC1'])
					 ->setCellValue('F78',  $fila['RES_C_VR_UNI_CA_OC_OC2'])
					 ->setCellValue('F79',  $fila['RES_C_VR_UNI_CA_OC_OC3'])
					 ->setCellValue('F80',  $fila['RES_C_VR_UNI_CA_RI'])
					 ->setCellValue('F81',  $fila['RES_C_VR_UNI_CI'])
					 ->setCellValue('F82',  $fila['RES_C_VR_UNI_CI_VB'])
					 ->setCellValue('F83',  $fila['RES_C_VR_UNI_CI_OV'])
					 ->setCellValue('F84',  $fila['RES_C_VR_UNI_CI_OV_IS'])
					 ->setCellValue('F85',  $fila['RES_C_VR_UNI_CI_OV_IM'])
					 ->setCellValue('F86',  $fila['RES_C_VR_UNI_CI_OV_OC'])
					 ->setCellValue('F87',  $fila['RES_C_VR_UNI_CI_RF'])
					 ->setCellValue('F88',  $fila['RES_C_VR_UNI_CI_OI'])
					 ->setCellValue('F89',  $fila['RES_C_VR_UNI_CI_OI_OI1'])
					 ->setCellValue('F90',  $fila['RES_C_VR_UNI_CI_OI_OI2'])
					 ->setCellValue('F91',  $fila['RES_C_VR_UNI_CI_OI_OI3'])
					 ->setCellValue('F92',  $fila['RES_C_VR_UNI_IT'])
					 ->setCellValue('F93',  $fila['RES_C_VR_UNI_UP'])
					 ->setCellValue('F94',  $fila['RES_C_VR_UNI_UP_CC'])
					 ->setCellValue('F95',  $fila['RES_C_VR_UNI_UP_IR'])
					 ->setCellValue('F96',  $fila['RES_C_VR_UNI_UP2'])

					 ->setCellValue('F98',  $fila['RES_C_VR_UNI_CV'])
					 ->setCellValue('F99',  $fila['RES_C_VR_UNI_VT'])
					 ->setCellValue('F100',  $fila['RES_C_VR_UNI_CVG'])
					 
										 
					 ->setCellValue('F102',  $fila['RES_C_VR_UNI_TIR'])
					 ->setCellValue('F103',  $fila['RES_C_VR_UNI_VPN'])
					 
					 ->setCellValue('F105',  $fila['RES_C_VR_UNI_UC'])
					 ->setCellValue('F106',  $fila['RES_C_VR_UNI_UC_CO'])
					 ->setCellValue('F107',  $fila['RES_C_VR_UNI_UC_TI'])
					 ->setCellValue('F108',  $fila['RES_C_VR_UNI_UC_PR'])
					 
					 ->setCellValue('F110',  $fila['RES_C_VR_UNI_TIR_C'])
					 ->setCellValue('F111',  $fila['RES_C_VR_UNI_VPN_C'])
				
					
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
					 
					
							 ->setCellValue('H27',div($fila['RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_EJE_UI']))
					->setCellValue('H28',div($fila['RES_C_PRESUPUESTO'],$fila['RES_C_EJE_UIP']))
					->setCellValue('H29',div($fila['RES_C_INCREMENTOS'],$fila['RES_C_EJE_UII']))
					->setCellValue('H30',div($fila['RES_C_COSTO_MATERIALES_MANO_OBRA'],$fila['RES_C_EJE_CM']))
					->setCellValue('H31',div($fila['RES_C_PRESUPUESTO2'],$fila['RES_C_EJE_CMP']))
					->setCellValue('H32',div($fila['RES_C_INCREMENTOS2'],$fila['RES_C_EJE_CMI']))
					->setCellValue('H33',div($fila['RES_C_GASTOS_IMPREVISTOS'],$fila['RES_C_EJE_GI']))
					->setCellValue('H34',div($fila['RES_C_COSTOS_POST_VENTAS'],$fila['RES_C_EJE_CP']))
					->setCellValue('H35',div($fila['RES_C_COSTO_DIRECTO_CONSTRUCCION'],$fila['RES_C_EJE_CD']))
					->setCellValue('H36',div($fila['RES_C_HONORARIOS_CONSTRUCCION'],$fila['RES_C_EJE_CD_HC']))
					->setCellValue('H37',div($fila['RES_C_HONORARIOS_CONSTRUCCION2'],$fila['RES_C_EJE_CD_HC_HC']))
					->setCellValue('H38',div($fila['RES_C_GASTOS_REEMBOLSABLES'],$fila['RES_C_EJE_CD_HC_GR']))
					->setCellValue('H39',div($fila['RES_C_HONORARIOS_INTERVENTORIA'],$fila['RES_C_EJE_CD_HI']))
					->setCellValue('H40',div($fila['RES_C_HONORARIOS_INTERVENTORIA2'],$fila['RES_C_EJE_CD_HI_HI']))
					->setCellValue('H41',div($fila['RES_C_GASTOS_REEMBOLSABLES2'],$fila['RES_C_EJE_CD_HI_GR']))
					->setCellValue('H42',div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS'],$fila['RES_C_EJE_CD_OH']))
					->setCellValue('H43',div($fila['RES_C_OTROS_HONORARIOS_DISENOS_OTROS2'],$fila['RES_C_EJE_CD_OH_OH']))
					->setCellValue('H44',div($fila['RES_C_GASTOS_REEMBOLSABLES3'],$fila['RES_C_EJE_CD_OH_GR']))
					->setCellValue('H45',div($fila['RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION'],$fila['RES_C_EJE_CD_ID']))
					->setCellValue('H46',div($fila['RES_C_COSTO_TOTAL_CONSTRUCCION'],$fila['RES_C_EJE_CT']))
					->setCellValue('H47',div($fila['RES_C_HONORARIOS_GERENCIA'],$fila['RES_C_EJE_CT_HG']))
					->setCellValue('H48',div($fila['RES_C_HONORARIOS_GERENCIA2'],$fila['RES_C_EJE_CT_HG_HG']))
					->setCellValue('H49',div($fila['RES_C_GASTOS_REEMBOLSABLES4'],$fila['RES_C_EJE_CT_HG_GR']))
					->setCellValue('H50',div($fila['RES_C_HONORARIOS_VENTAS'],$fila['RES_C_EJE_CT_HV']))
					->setCellValue('H51',div($fila['RES_C_HONORARIOS_VENTAS2'],$fila['RES_C_EJE_CT_HV_HV']))
					->setCellValue('H52',div($fila['RES_C_GASTOS_REEMBOLSABLES5'],$fila['RES_C_EJE_CT_HV_GR']))
					->setCellValue('H53',div($fila['RES_C_COSTOS_PROMOCION_Y_VENTAS'],$fila['RES_C_EJE_CT_CP']))
					->setCellValue('H54',div($fila['RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION'],$fila['RES_C_EJE_CT_CP_SV']))
					->setCellValue('H55',div($fila['RES_C_GASTOS_PUBLICIDAD'],$fila['RES_C_EJE_CT_CP_GP']))
					->setCellValue('H56',div($fila['RES_C_GASTOS_SALA_VENTAS'],$fila['RES_C_EJE_CT_CP_GS']))
					->setCellValue('H57',div($fila['RES_C_ADMON_UNIDADES_POR_ENTREGAR'],$fila['RES_C_EJE_CT_CP_AU']))
					->setCellValue('H58',div($fila['RES_C_COMISIONES_VENTAS'],$fila['RES_C_EJE_CT_CP_CV']))
					->setCellValue('H59',div($fila['RES_C_GASTOS_LEGALES'],$fila['RES_C_EJE_CT_GL']))
					->setCellValue('H60',div($fila['RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR'],$fila['RES_C_EJE_CT_GL_HC']))
					->setCellValue('H61',div($fila['RES_C_NOTARIALES_REGISTRO_DE_VENTAS'],$fila['RES_C_EJE_CT_GL_NR']))
					->setCellValue('H62',div($fila['RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR'],$fila['RES_C_EJE_CT_GL_IP']))
					->setCellValue('H63',div($fila['RES_C_IMPUESTO_ICA'],$fila['RES_C_EJE_CT_GL_IC']))
					->setCellValue('H64',div($fila['RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS'],$fila['RES_C_EJE_CA']))
					->setCellValue('H65',div($fila['RES_C_VALOR_TERENO_URBANIZADO'],$fila['RES_C_EJE_CA_VT']))
					->setCellValue('H66',div($fila['RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO'],$fila['RES_C_EJE_CA_VT_PV']))
					->setCellValue('H67',div($fila['RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION'],$fila['RES_C_EJE_CA_VT_OP']))
					->setCellValue('H68',div($fila['RES_C_COMISIONES_FIDUCIA'],$fila['RES_C_EJE_CA_CF']))
					->setCellValue('H69',div($fila['RES_C_PREVENTAS_Y_ADMON'],$fila['RES_C_EJE_CA_CF_PA']))
					->setCellValue('H70',div($fila['RES_C_NUEVOGAR'],$fila['RES_C_EJE_CA_CF_NH']))
					->setCellValue('H71',div($fila['RES_C_GASTOS_FINANCIEROS'],$fila['RES_C_EJE_CA_GF']))
					->setCellValue('H72',div($fila['RES_C_INTERESES_CREDITO_CONSTRUCTOR'],$fila['RES_C_EJE_CA_GF_IC']))
					->setCellValue('H73',div($fila['RES_C_OTROS_COSTOS_CREDITO'],$fila['RES_C_EJE_CA_GF_OC']))
					->setCellValue('H74',div($fila['RES_C_CORRECCION_MONETARIA'],$fila['RES_C_EJE_CA_GF_CM']))
					->setCellValue('H75',div($fila['RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF'],$fila['RES_C_EJE_CA_GF_IT']))
					->setCellValue('H76',div($fila['RES_C_OTROS_COSTOS_Y_GASTOS'],$fila['RES_C_EJE_CA_OC']))
					->setCellValue('H77',div($fila['RES_C_GASTO1'],$fila['RES_C_EJE_CA_OC_OC1']))
					->setCellValue('H78',div($fila['RES_C_GASTO2'],$fila['RES_C_EJE_CA_OC_OC2']))
					->setCellValue('H79',div($fila['RES_C_GASTO3'],$fila['RES_C_EJE_CA_OC_OC3']))
					->setCellValue('H80',div($fila['RES_C_REINTEGROS_IVA_PROYECTOS_VIS'],$fila['RES_C_EJE_CA_RI']))
					->setCellValue('H81',div($fila['RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS'],$fila['RES_C_EJE_CI']))
					->setCellValue('H82',div($fila['RES_C_VENTAS_BRUTAS'],$fila['RES_C_EJE_CI_VB']))
					->setCellValue('H83',div($fila['RES_C_OTROS_INGRESOS_VENTAS'],$fila['RES_C_EJE_CI_OV']))
					->setCellValue('H84',div($fila['RES_C_INTERESES_SUBROGACION'],$fila['RES_C_EJE_CI_OV_IS']))
					->setCellValue('H85',div($fila['RES_C_INTERESES_MORA'],$fila['RES_C_EJE_CI_OV_IM']))
					->setCellValue('H86',div($fila['RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS'],$fila['RES_C_EJE_CI_OV_OC']))
					->setCellValue('H87',div($fila['RES_C_RENDIMIENTOS_FIDEICOMISO'],$fila['RES_C_EJE_CI_RF']))
					->setCellValue('H88',div($fila['RES_C_OTROS_INGRESOS'],$fila['RES_C_EJE_CI_OI']))
					->setCellValue('H89',div($fila['RES_C_INGRESOS1'],$fila['RES_C_EJE_CI_OI_OI1']))
					->setCellValue('H90',div($fila['RES_C_INGRESOS2'],$fila['RES_C_EJE_CI_OI_OI2']))
					->setCellValue('H91',div($fila['RES_C_INGRESOS3'],$fila['RES_C_EJE_CI_OI_OI3']))
					->setCellValue('H92',div($fila['RES_C_INGRESOS_TOTALES'],$fila['RES_C_EJE_IT']))
					->setCellValue('H93',div($fila['RES_C_UTILIDAD_PROYECTO'],$fila['RES_C_EJE_UP']))
					->setCellValue('H94',div($fila['RES_C_COSTO_CREDITO_TESORERIA'],$fila['RES_C_EJE_UP_CC']))
					->setCellValue('H95',div($fila['RES_C_IMPUESTO_RENTA'],$fila['RES_C_EJE_UP_IR']))
					->setCellValue('H96',div($fila['RES_C_UTILIDAD_PROYECTO2'],$fila['RES_C_EJE_UP2']))
					 
					
							
					;
									
									
					
									
				//Formato Separador con comas
				  $objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
					
					$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
					->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);
			
					 $i++;
					 $c++;
			}
		
	
					  
					 
					 
		//Formato miles Con separador.
	
	
	$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
    ->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
	
		
	
	//Dimension de columnas
	
	
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
	
	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setWidth(16);

	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(2)->setWidth(16);

	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(3)->setWidth(16);

	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(4)->setWidth(16);
	 
	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(5)->setWidth(16);

	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(6)->setWidth(16);
	 
	 $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(7)->setWidth(16);
	//Bordes
	
	$styleArray = array(
	  'borders' => array(
		'allborders' => array(
		  'style' => PHPExcel_Style_Border::BORDER_THIN
		)
	  )
	);


	$objPHPExcel->getActiveSheet()->getStyle('A5:A23')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('A25:A108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('A110:A111')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B5:B23')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('B25:B108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('B110:B111')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('C25:C108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('C110:C111')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('D25:D108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('D110:D111')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('E25:E108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('E110:E111')->applyFromArray($styleArray);

	$objPHPExcel->getActiveSheet()->getStyle('F25:F108')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('F110:F111')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('G25:G100')->applyFromArray($styleArray);
	
	$objPHPExcel->getActiveSheet()->getStyle('H25:H100')->applyFromArray($styleArray);

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
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReporteResumen.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='informesExcel.php';</script>";
	}
	function div($a,$b){
		if($b==0){
			return 0;
		}
		else{
			return ($a/$b);
		}
		
	}
?>