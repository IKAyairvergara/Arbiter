BEGIN
    DECLARE v_fct_c_cons_id 					VARCHAR(12);
  DECLARE v_fecha 						DATE;
  DECLARE v_fct_c_valor_adquisicion_pagos 			DECIMAL(10,0);
  DECLARE v_fct_c_vap_anticipo_otros_pagos 			DECIMAL(10,0);
  DECLARE v_fct_c_vap_abonos_pactados_por_ventas 		DECIMAL(10,0);
  DECLARE v_fct_c_costos_urbanismo 				DECIMAL(10,0);
  DECLARE v_fct_c_cu_presupuesto 				DECIMAL(10,0);
  DECLARE v_fct_c_cu_incrementos 				DECIMAL(10,0);
  DECLARE v_fct_c_costos_infraestructura 			DECIMAL(10,0);
  DECLARE v_fct_c_ci_presupuesto 				DECIMAL(10,0);
  DECLARE v_fct_c_ci_incrementos 				DECIMAL(10,0);
  DECLARE v_fct_c_ci_recuperacion_costos 			DECIMAL(10,0);
  DECLARE v_fct_c_gastos_imprevistos 				DECIMAL(10,0);
  DECLARE v_fct_c_costo_directo_urbanismo 			DECIMAL(10,0);
  DECLARE v_fct_c_honorarios_construccion 			DECIMAL(10,0);
  DECLARE v_fct_c_honorarios_interventoria 			DECIMAL(10,0);
  DECLARE v_fct_c_otros_honorarios_terceros 			DECIMAL(10,0);
  DECLARE v_fct_c_licencia_urbanismo_otros_costos 		DECIMAL(10,0);
  DECLARE v_fct_c_gastos_legales 				DECIMAL(10,0);
  DECLARE v_fct_c_gl_hipoteca_credito_compra_terreno 		DECIMAL(10,0);
  DECLARE v_fct_c_gl_gastos_notariales_registro_compra_terreno 	DECIMAL(10,0);
  DECLARE v_fct_c_gl_impuesto_predial 				DECIMAL(10,0);
  DECLARE v_fct_c_gastos_financieros 				DECIMAL(10,0);
  DECLARE v_fct_c_gf_intereses_credito_terreno 			DECIMAL(10,0);
  DECLARE v_fct_c_gf_correcion_monetaria 			DECIMAL(10,0);
  DECLARE v_fct_c_gf_otros_costos_credito_terreno 		DECIMAL(10,0);
  DECLARE v_fct_c_gf_impuesto_transacciones_financieras 	DECIMAL(10,0);
  DECLARE v_fct_c_otros_costos 					DECIMAL(10,0);
  DECLARE v_fct_c_oc_costos1 					DECIMAL(10,0);
  DECLARE v_fct_c_oc_costos2 					DECIMAL(10,0);
  DECLARE v_fct_c_valor_terreno_urbanizado 			DECIMAL(10,0);
  DECLARE v_fct_c_otros_gastos 					DECIMAL(10,0);
  DECLARE v_fct_c_og_otros_gastos1 				DECIMAL(10,0);
  DECLARE v_fct_c_og_otros_gastos2 				DECIMAL(10,0);
  DECLARE v_fct_c_valor_total_terreno 				DECIMAL(10,0);
  DECLARE v_fct_c_total_egresos_sin_correccion_monetaria 	DECIMAL(10,0);
  DECLARE v_fct_c_desembolsos_credito_terreno 			DECIMAL(10,0);
  DECLARE v_fct_c_abonos_al_credito 				DECIMAL(10,0);
  DECLARE v_fct_c_aal_abonos_programados_credito_terreno 	DECIMAL(10,0);
  DECLARE v_fct_c_aal_abonos_disponibilidad_caja_y_cancelacion 	DECIMAL(10,0);
  DECLARE v_fct_c_otros_ingresos 				DECIMAL(10,0);
  DECLARE v_fct_c_oi_otros_ingresos1 				DECIMAL(10,0);
  DECLARE v_fct_c_oi_otros_ingresos2 				DECIMAL(10,0);
  DECLARE v_fct_c_traslado_terreno_a_subproyectos 		DECIMAL(10,0);
  DECLARE v_fct_c_total_ingresos 				DECIMAL(10,0);
  DECLARE v_fct_c_flujo_neto_caja 				DECIMAL(10,0);
  DECLARE v_fct_c_flujo_acumulado 				DECIMAL(10,0);
  DECLARE v_fct_c_vpn 						DECIMAL(10,0);
  DECLARE v_fct_c_tir_ea 					DECIMAL(10,0);
  DECLARE v_fct_c_tir_em 					DECIMAL(10,0);
  DECLARE v_fct_c_tir_mod_ea 					DECIMAL(10,0);
  DECLARE v_fct_c_tir_mod_em 					DECIMAL(10,0);
  DECLARE v_finished integer 					DEFAULT 0;

    DECLARE c_flujo_caja_terreno CURSOR FOR
	
	 SELECT CONS.CONS_ID
        ,CONS.FCT_C_FECHA
  	,SUM(CONS.FCT_C_VALOR_ADQUISICION_PAGOS)
  	,SUM(CONS.FCT_C_VAP_ANTICIPO_OTROS_PAGOS)
  	,SUM(CONS.FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS)
  	,SUM(CONS.FCT_C_COSTOS_URBANISMO)
  	,SUM(CONS.FCT_C_CU_PRESUPUESTO)
  	,SUM(CONS.FCT_C_CU_INCREMENTOS)
  	,SUM(CONS.FCT_C_COSTOS_INFRAESTRUCTURA)
  	,SUM(CONS.FCT_C_CI_PRESUPUESTO)
  	,SUM(CONS.FCT_C_CI_INCREMENTOS)
  	,SUM(CONS.FCT_C_CI_RECUPERACION_COSTOS)
  	,SUM(CONS.FCT_C_GASTOS_IMPREVISTOS)
  	,SUM(CONS.FCT_C_COSTO_DIRECTO_URBANISMO)
  	,SUM(CONS.FCT_C_HONORARIOS_CONSTRUCCION)
  	,SUM(CONS.FCT_C_HONORARIOS_INTERVENTORIA)
  	,SUM(CONS.FCT_C_OTROS_HONORARIOS_TERCEROS)
  	,SUM(CONS.FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS)
  	,SUM(CONS.FCT_C_GASTOS_LEGALES)
  	,SUM(CONS.FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO)
  	,SUM(CONS.FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO)
  	,SUM(CONS.FCT_C_GL_IMPUESTO_PREDIAL)
  	,SUM(CONS.FCT_C_GASTOS_FINANCIEROS)
  	,SUM(CONS.FCT_C_GF_INTERESES_CREDITO_TERRENO)
  	,SUM(CONS.FCT_C_GF_CORRECION_MONETARIA)
  	,SUM(CONS.FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO)
  	,SUM(CONS.FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS)
  	,SUM(CONS.FCT_C_OTROS_COSTOS)
  	,SUM(CONS.FCT_C_OC_COSTOS1)
  	,SUM(CONS.FCT_C_OC_COSTOS2)
  	,SUM(CONS.FCT_C_VALOR_TERRENO_URBANIZADO)
  	,SUM(CONS.FCT_C_OTROS_GASTOS)
  	,SUM(CONS.FCT_C_OG_OTROS_GASTOS1)
  	,SUM(CONS.FCT_C_OG_OTROS_GASTOS2)
  	,SUM(CONS.FCT_C_VALOR_TOTAL_TERRENO)
  	,SUM(CONS.FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)
  	,SUM(CONS.FCT_C_DESEMBOLSOS_CREDITO_TERRENO)
  	,SUM(CONS.FCT_C_ABONOS_AL_CREDITO)
  	,SUM(CONS.FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO)
  	,SUM(CONS.FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION)
  	,SUM(CONS.FCT_C_OTROS_INGRESOS)
  	,SUM(CONS.FCT_C_OI_OTROS_INGRESOS1)
  	,SUM(CONS.FCT_C_OI_OTROS_INGRESOS2)
  	,SUM(CONS.FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS)
  	,SUM(CONS.FCT_C_TOTAL_INGRESOS)
  	,SUM(CONS.FCT_C_FLUJO_NETO_CAJA)
  	,SUM(CONS.FCT_C_FLUJO_ACUMULADO)
	
	
	
  FROM(SELECT CONS_ID
        ,FCT_FECHA									FCT_C_FECHA
  	,SUM(FCT_VALOR_ADQUISICION_PAGOS) 				FCT_C_VALOR_ADQUISICION_PAGOS
  	,SUM(FCT_VAP_ANTICIPO_OTROS_PAGOS) 				FCT_C_VAP_ANTICIPO_OTROS_PAGOS
  	,SUM(FCT_VAP_ABONOS_PACTADOS_POR_VENTAS) 			FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS
  	,SUM(FCT_COSTOS_URBANISMO) 					FCT_C_COSTOS_URBANISMO
  	,SUM(FCT_CU_PRESUPUESTO) 					FCT_C_CU_PRESUPUESTO
  	,SUM(FCT_CU_INCREMENTOS) 					FCT_C_CU_INCREMENTOS
  	,SUM(FCT_COSTOS_INFRAESTRUCTURA) 				FCT_C_COSTOS_INFRAESTRUCTURA
  	,SUM(FCT_CI_PRESUPUESTO) 					FCT_C_CI_PRESUPUESTO
  	,SUM(FCT_CI_INCREMENTOS) 					FCT_C_CI_INCREMENTOS
  	,SUM(FCT_CI_RECUPERACION_COSTOS) 				FCT_C_CI_RECUPERACION_COSTOS
  	,SUM(FCT_GASTOS_IMPREVISTOS) 					FCT_C_GASTOS_IMPREVISTOS
  	,SUM(FCT_COSTO_DIRECTO_URBANISMO) 				FCT_C_COSTO_DIRECTO_URBANISMO
  	,SUM(FCT_HONORARIOS_CONSTRUCCION) 				FCT_C_HONORARIOS_CONSTRUCCION
  	,SUM(FCT_HONORARIOS_INTERVENTORIA) 				FCT_C_HONORARIOS_INTERVENTORIA
  	,SUM(FCT_OTROS_HONORARIOS_TERCEROS) 				FCT_C_OTROS_HONORARIOS_TERCEROS
  	,SUM(FCT_LICENCIA_URBANISMO_OTROS_COSTOS) 			FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS
  	,SUM(FCT_GASTOS_LEGALES) 					FCT_C_GASTOS_LEGALES
  	,SUM(FCT_GL_HIPOTECA_CREDITO_COMPRA_TERRENO) 			FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO
  	,SUM(FCT_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO) 		FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO
  	,SUM(FCT_GL_IMPUESTO_PREDIAL) 					FCT_C_GL_IMPUESTO_PREDIAL
  	,SUM(FCT_GASTOS_FINANCIEROS) 					FCT_C_GASTOS_FINANCIEROS
  	,SUM(FCT_GF_INTERESES_CREDITO_TERRENO) 				FCT_C_GF_INTERESES_CREDITO_TERRENO
  	,SUM(FCT_GF_CORRECION_MONETARIA) 				FCT_C_GF_CORRECION_MONETARIA
  	,SUM(FCT_GF_OTROS_COSTOS_CREDITO_TERRENO) 			FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO
  	,SUM(FCT_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS) 		FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS
  	,SUM(FCT_OTROS_COSTOS) 						FCT_C_OTROS_COSTOS
  	,SUM(FCT_OC_COSTOS1) 						FCT_C_OC_COSTOS1
  	,SUM(FCT_OC_COSTOS2) 						FCT_C_OC_COSTOS2
  	,SUM(FCT_VALOR_TERRENO_URBANIZADO) 				FCT_C_VALOR_TERRENO_URBANIZADO
  	,SUM(FCT_OTROS_GASTOS) 						FCT_C_OTROS_GASTOS
  	,SUM(FCT_OG_OTROS_GASTOS1) 					FCT_C_OG_OTROS_GASTOS1
  	,SUM(FCT_OG_OTROS_GASTOS2) 					FCT_C_OG_OTROS_GASTOS2
  	,SUM(FCT_VALOR_TOTAL_TERRENO) 					FCT_C_VALOR_TOTAL_TERRENO
  	,SUM(FCT_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA) 		FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
  	,SUM(FCT_DESEMBOLSOS_CREDITO_TERRENO) 				FCT_C_DESEMBOLSOS_CREDITO_TERRENO
  	,SUM(FCT_ABONOS_AL_CREDITO) 					FCT_C_ABONOS_AL_CREDITO
  	,SUM(FCT_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO) 		FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO
  	,SUM(FCT_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION) 		FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION
  	,SUM(FCT_OTROS_INGRESOS) 					FCT_C_OTROS_INGRESOS
  	,SUM(FCT_OI_OTROS_INGRESOS1) 					FCT_C_OI_OTROS_INGRESOS1
  	,SUM(FCT_OI_OTROS_INGRESOS2) 					FCT_C_OI_OTROS_INGRESOS2
  	,SUM(FCT_TRASLADO_TERRENO_A_SUBPROYECTOS) 			FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS
  	,SUM(FCT_TOTAL_INGRESOS) 					FCT_C_TOTAL_INGRESOS
  	,SUM(FCT_FLUJO_NETO_CAJA) 					FCT_C_FLUJO_NETO_CAJA
  	,SUM(FCT_FLUJO_ACUMULADO) 					FCT_C_FLUJO_ACUMULADO
      FROM tb_seleccion
          ,tb_flujo_caja_terreno
          ,tb_consolidados
     WHERE SEL_DET_PRO_ID IS NOT NULL
       AND SEL_DET_PRO_ID = FCT_DET_PRO_ID
       AND SEL_DET_ETAPA  = FCT_DET_ETAPA
       AND SEL_MODELO 	  = FCT_MODELO
       AND CONS_CONS      = 'N'
       AND SEL_CONS_ID  = 'N'
       AND FCT_FECHA BETWEEN CASE CONS_FEC_GEN_DES
       			     WHEN '0000-00-00' THEN FCT_FECHA 
       			     ELSE CONS_FEC_GEN_DES
                             END
       AND CASE CONS_FEC_GEN_HAS
       			     WHEN '0000-00-00' THEN FCT_FECHA 
       			     ELSE CONS_FEC_GEN_HAS
                             END
  GROUP BY FCT_FECHA
  
  UNION ALL 
  
  SELECT CONS_ID
        ,FCT_C_FECHA							FCT_C_FECHA
  	,SUM(FCT_C_VALOR_ADQUISICION_PAGOS) 				FCT_C_VALOR_ADQUISICION_PAGOS
  	,SUM(FCT_C_VAP_ANTICIPO_OTROS_PAGOS) 				FCT_C_VAP_ANTICIPO_OTROS_PAGOS
  	,SUM(FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS) 			FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS
  	,SUM(FCT_C_COSTOS_URBANISMO) 					FCT_C_COSTOS_URBANISMO
  	,SUM(FCT_C_CU_PRESUPUESTO) 					FCT_C_CU_PRESUPUESTO
  	,SUM(FCT_C_CU_INCREMENTOS) 					FCT_C_CU_INCREMENTOS
  	,SUM(FCT_C_COSTOS_INFRAESTRUCTURA) 				FCT_C_COSTOS_INFRAESTRUCTURA
  	,SUM(FCT_C_CI_PRESUPUESTO) 					FCT_C_CI_PRESUPUESTO
  	,SUM(FCT_C_CI_INCREMENTOS) 					FCT_C_CI_INCREMENTOS
  	,SUM(FCT_C_CI_RECUPERACION_COSTOS) 				FCT_C_CI_RECUPERACION_COSTOS
  	,SUM(FCT_C_GASTOS_IMPREVISTOS) 					FCT_C_GASTOS_IMPREVISTOS
  	,SUM(FCT_C_COSTO_DIRECTO_URBANISMO) 				FCT_C_COSTO_DIRECTO_URBANISMO
  	,SUM(FCT_C_HONORARIOS_CONSTRUCCION) 				FCT_C_HONORARIOS_CONSTRUCCION
  	,SUM(FCT_C_HONORARIOS_INTERVENTORIA) 				FCT_C_HONORARIOS_INTERVENTORIA
  	,SUM(FCT_C_OTROS_HONORARIOS_TERCEROS) 				FCT_C_OTROS_HONORARIOS_TERCEROS
  	,SUM(FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS) 			FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS
  	,SUM(FCT_C_GASTOS_LEGALES) 					FCT_C_GASTOS_LEGALES
  	,SUM(FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO) 			FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO
  	,SUM(FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO) 		FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO
  	,SUM(FCT_C_GL_IMPUESTO_PREDIAL) 					FCT_C_GL_IMPUESTO_PREDIAL
  	,SUM(FCT_C_GASTOS_FINANCIEROS) 					FCT_C_GASTOS_FINANCIEROS
  	,SUM(FCT_C_GF_INTERESES_CREDITO_TERRENO) 				FCT_C_GF_INTERESES_CREDITO_TERRENO
  	,SUM(FCT_C_GF_CORRECION_MONETARIA) 				FCT_C_GF_CORRECION_MONETARIA
  	,SUM(FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO) 			FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO
  	,SUM(FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS) 		FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS
  	,SUM(FCT_C_OTROS_COSTOS) 						FCT_C_OTROS_COSTOS
  	,SUM(FCT_C_OC_COSTOS1) 						FCT_C_OC_COSTOS1
  	,SUM(FCT_C_OC_COSTOS2) 						FCT_C_OC_COSTOS2
  	,SUM(FCT_C_VALOR_TERRENO_URBANIZADO) 				FCT_C_VALOR_TERRENO_URBANIZADO
  	,SUM(FCT_C_OTROS_GASTOS) 						FCT_C_OTROS_GASTOS
  	,SUM(FCT_C_OG_OTROS_GASTOS1) 					FCT_C_OG_OTROS_GASTOS1
  	,SUM(FCT_C_OG_OTROS_GASTOS2) 					FCT_C_OG_OTROS_GASTOS2
  	,SUM(FCT_C_VALOR_TOTAL_TERRENO) 					FCT_C_VALOR_TOTAL_TERRENO
  	,SUM(FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA) 		FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
  	,SUM(FCT_C_DESEMBOLSOS_CREDITO_TERRENO) 				FCT_C_DESEMBOLSOS_CREDITO_TERRENO
  	,SUM(FCT_C_ABONOS_AL_CREDITO) 					FCT_C_ABONOS_AL_CREDITO
  	,SUM(FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO) 		FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO
  	,SUM(FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION) 		FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION
  	,SUM(FCT_C_OTROS_INGRESOS) 					FCT_C_OTROS_INGRESOS
  	,SUM(FCT_C_OI_OTROS_INGRESOS1) 					FCT_C_OI_OTROS_INGRESOS1
  	,SUM(FCT_C_OI_OTROS_INGRESOS2) 					FCT_C_OI_OTROS_INGRESOS2
  	,SUM(FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS) 			FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS
  	,SUM(FCT_C_TOTAL_INGRESOS) 					FCT_C_TOTAL_INGRESOS
  	,SUM(FCT_C_FLUJO_NETO_CAJA) 					FCT_C_FLUJO_NETO_CAJA
  	,SUM(FCT_C_FLUJO_ACUMULADO) 					FCT_C_FLUJO_ACUMULADO
      FROM tb_seleccion
          ,tb_c_flujo_caja_terreno
          ,tb_consolidados
	   WHERE SEL_C_CONS_ID IS NOT NULL
	   AND SEL_C_CONS_ID=FCT_C_CONS_ID
	   AND CONS_CONS      = 'N'
       AND SEL_CONS_ID  = 'N'
       AND FCT_C_FECHA BETWEEN CASE CONS_FEC_GEN_DES
       			     WHEN '0000-00-00' THEN FCT_C_FECHA 
       			     ELSE CONS_FEC_GEN_DES
                             END
       AND CASE CONS_FEC_GEN_HAS
       			     WHEN '0000-00-00' THEN FCT_C_FECHA 
       			     ELSE CONS_FEC_GEN_HAS
                             END
  GROUP BY FCT_C_FECHA) CONS
  GROUP BY CONS.FCT_C_FECHA;
  
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

  OPEN C_FLUJO_CAJA_TERRENO;
  obtener_c_flujo_caja_terreno: LOOP
  FETCH C_FLUJO_CAJA_TERRENO INTO v_fct_c_cons_id,
  				  v_fecha,
      				  v_fct_c_valor_adquisicion_pagos,
				  v_fct_c_vap_anticipo_otros_pagos,
				  v_fct_c_vap_abonos_pactados_por_ventas,
				  v_fct_c_costos_urbanismo,
				  v_fct_c_cu_presupuesto,
				  v_fct_c_cu_incrementos,
				  v_fct_c_costos_infraestructura,
				  v_fct_c_ci_presupuesto,
				  v_fct_c_ci_incrementos,
				  v_fct_c_ci_recuperacion_costos,
				  v_fct_c_gastos_imprevistos,
				  v_fct_c_costo_directo_urbanismo,
				  v_fct_c_honorarios_construccion,
				  v_fct_c_honorarios_interventoria,
				  v_fct_c_otros_honorarios_terceros,
				  v_fct_c_licencia_urbanismo_otros_costos,
				  v_fct_c_gastos_legales,
				  v_fct_c_gl_hipoteca_credito_compra_terreno,
				  v_fct_c_gl_gastos_notariales_registro_compra_terreno,
				  v_fct_c_gl_impuesto_predial,
				  v_fct_c_gastos_financieros,
				  v_fct_c_gf_intereses_credito_terreno,
				  v_fct_c_gf_correcion_monetaria,
				  v_fct_c_gf_otros_costos_credito_terreno,
				  v_fct_c_gf_impuesto_transacciones_financieras,
				  v_fct_c_otros_costos,
				  v_fct_c_oc_costos1,
				  v_fct_c_oc_costos2,
				  v_fct_c_valor_terreno_urbanizado,
				  v_fct_c_otros_gastos,
				  v_fct_c_og_otros_gastos1,
				  v_fct_c_og_otros_gastos2,
				  v_fct_c_valor_total_terreno,
				  v_fct_c_total_egresos_sin_correccion_monetaria,
				  v_fct_c_desembolsos_credito_terreno,
				  v_fct_c_abonos_al_credito,
				  v_fct_c_aal_abonos_programados_credito_terreno,
				  v_fct_c_aal_abonos_disponibilidad_caja_y_cancelacion,
				  v_fct_c_otros_ingresos,
				  v_fct_c_oi_otros_ingresos1,
				  v_fct_c_oi_otros_ingresos2,
				  v_fct_c_traslado_terreno_a_subproyectos,
				  v_fct_c_total_ingresos,
				  v_fct_c_flujo_neto_caja,
				  v_fct_c_flujo_acumulado;
  IF v_finished = 1 THEN
     LEAVE obtener_c_flujo_caja_terreno;
  END IF;   

  INSERT INTO tb_c_flujo_caja_terreno (FCT_C_CONS_ID
  				      ,FCT_C_FECHA
  				      ,FCT_C_VALOR_ADQUISICION_PAGOS
  				      ,FCT_C_VAP_ANTICIPO_OTROS_PAGOS
  				      ,FCT_C_VAP_ABONOS_PACTADOS_POR_VENTAS
  				      ,FCT_C_COSTOS_URBANISMO
  				      ,FCT_C_CU_PRESUPUESTO
  				      ,FCT_C_CU_INCREMENTOS
  				      ,FCT_C_COSTOS_INFRAESTRUCTURA
  				      ,FCT_C_CI_PRESUPUESTO
  				      ,FCT_C_CI_INCREMENTOS
  				      ,FCT_C_CI_RECUPERACION_COSTOS
  				      ,FCT_C_GASTOS_IMPREVISTOS
  				      ,FCT_C_COSTO_DIRECTO_URBANISMO
  				      ,FCT_C_HONORARIOS_CONSTRUCCION
  				      ,FCT_C_HONORARIOS_INTERVENTORIA
  				      ,FCT_C_OTROS_HONORARIOS_TERCEROS
  				      ,FCT_C_LICENCIA_URBANISMO_OTROS_COSTOS
  				      ,FCT_C_GASTOS_LEGALES
  				      ,FCT_C_GL_HIPOTECA_CREDITO_COMPRA_TERRENO
  				      ,FCT_C_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO
  				      ,FCT_C_GL_IMPUESTO_PREDIAL
  				      ,FCT_C_GASTOS_FINANCIEROS
  				      ,FCT_C_GF_INTERESES_CREDITO_TERRENO
  				      ,FCT_C_GF_CORRECION_MONETARIA
  				      ,FCT_C_GF_OTROS_COSTOS_CREDITO_TERRENO
  				      ,FCT_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS
  				      ,FCT_C_OTROS_COSTOS
  				      ,FCT_C_OC_COSTOS1
  				      ,FCT_C_OC_COSTOS2
  				      ,FCT_C_VALOR_TERRENO_URBANIZADO
  				      ,FCT_C_OTROS_GASTOS
  				      ,FCT_C_OG_OTROS_GASTOS1
  				      ,FCT_C_OG_OTROS_GASTOS2
  				      ,FCT_C_VALOR_TOTAL_TERRENO
  				      ,FCT_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
  				      ,FCT_C_DESEMBOLSOS_CREDITO_TERRENO
  				      ,FCT_C_ABONOS_AL_CREDITO
  				      ,FCT_C_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO
  				      ,FCT_C_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION
  				      ,FCT_C_OTROS_INGRESOS
  				      ,FCT_C_OI_OTROS_INGRESOS1
  				      ,FCT_C_OI_OTROS_INGRESOS2
  				      ,FCT_C_TRASLADO_TERRENO_A_SUBPROYECTOS
  				      ,FCT_C_TOTAL_INGRESOS
  				      ,FCT_C_FLUJO_NETO_CAJA
  				      ,FCT_C_FLUJO_ACUMULADO)
                               VALUES (v_fct_c_cons_id
                               	      ,v_fecha
                               	      ,v_fct_c_valor_adquisicion_pagos
                               	      ,v_fct_c_vap_anticipo_otros_pagos
                               	      ,v_fct_c_vap_abonos_pactados_por_ventas
                               	      ,v_fct_c_costos_urbanismo
                               	      ,v_fct_c_cu_presupuesto
                               	      ,v_fct_c_cu_incrementos
                               	      ,v_fct_c_costos_infraestructura
                               	      ,v_fct_c_ci_presupuesto
                               	      ,v_fct_c_ci_incrementos
                               	      ,v_fct_c_ci_recuperacion_costos
                               	      ,v_fct_c_gastos_imprevistos
                               	      ,v_fct_c_costo_directo_urbanismo
                               	      ,v_fct_c_honorarios_construccion
                               	      ,v_fct_c_honorarios_interventoria
                               	      ,v_fct_c_otros_honorarios_terceros
                               	      ,v_fct_c_licencia_urbanismo_otros_costos
                               	      ,v_fct_c_gastos_legales
                               	      ,v_fct_c_gl_hipoteca_credito_compra_terreno
                               	      ,v_fct_c_gl_gastos_notariales_registro_compra_terreno
                               	      ,v_fct_c_gl_impuesto_predial
                               	      ,v_fct_c_gastos_financieros
                               	      ,v_fct_c_gf_intereses_credito_terreno
                               	      ,v_fct_c_gf_correcion_monetaria
                               	      ,v_fct_c_gf_otros_costos_credito_terreno
                               	      ,v_fct_c_gf_impuesto_transacciones_financieras
                               	      ,v_fct_c_otros_costos
                               	      ,v_fct_c_oc_costos1
                               	      ,v_fct_c_oc_costos2
                               	      ,v_fct_c_valor_terreno_urbanizado
                               	      ,v_fct_c_otros_gastos
                               	      ,v_fct_c_og_otros_gastos1
                               	      ,v_fct_c_og_otros_gastos2
                               	      ,v_fct_c_valor_total_terreno
                               	      ,v_fct_c_total_egresos_sin_correccion_monetaria
                               	      ,v_fct_c_desembolsos_credito_terreno
                               	      ,v_fct_c_abonos_al_credito
                               	      ,v_fct_c_aal_abonos_programados_credito_terreno
                               	      ,v_fct_c_aal_abonos_disponibilidad_caja_y_cancelacion
                               	      ,v_fct_c_otros_ingresos
                               	      ,v_fct_c_oi_otros_ingresos1
                               	      ,v_fct_c_oi_otros_ingresos2
                               	      ,v_fct_c_traslado_terreno_a_subproyectos
                               	      ,v_fct_c_total_ingresos
                               	      ,v_fct_c_flujo_neto_caja
                               	      ,v_fct_c_flujo_acumulado);
  END LOOP obtener_c_flujo_caja_terreno;				  
  CLOSE C_FLUJO_CAJA_TERRENO; 
END