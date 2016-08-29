CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_CONS_FLUJO_CAJA_TERRENO`()
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
  SELECT CONS_ID
        ,FCT_FECHA							FCT_C_FECHA
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
      FROM TB_SELECCION
          ,TB_FLUJO_CAJA_TERRENO
          ,TB_CONSOLIDADOS
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
  GROUP BY FCT_FECHA;
  
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

  INSERT INTO TB_C_FLUJO_CAJA_TERRENO (FCT_C_CONS_ID
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_CONS_OTROS_FLUJOS`()
BEGIN
   DECLARE v_ofl_c_cons_id  				VARCHAR(12);
 DECLARE v_ofl_fecha 					DATE;
 DECLARE v_ofl_costo_construccion			DECIMAL(10,0); 
 DECLARE v_ofl_honorarios_colpatria			DECIMAL(10,0); 
 DECLARE v_ofl_gastos_operacion_colpatria		DECIMAL(10,0); 
 DECLARE v_ofl_go_promotora_operacion			DECIMAL(10,0); 
 DECLARE v_ofl_go_promotora_overhead			DECIMAL(10,0); 
 DECLARE v_ofl_go_constructora_operacion		DECIMAL(10,0); 
 DECLARE v_ofl_go_constructora_overhead			DECIMAL(10,0); 
 DECLARE v_ofl_go_transacciones_inmobiliarias_operacion	DECIMAL(10,0); 
 DECLARE v_ofl_go_transacciones_inmobliarias_overhead	DECIMAL(10,0); 
 DECLARE v_ofl_otros_pagos_efectuados_por_fiducia	DECIMAL(10,0); 
 DECLARE v_ofl_valor_terreno				DECIMAL(10,0); 
 DECLARE v_ofl_intereses_credito_constructor		DECIMAL(10,0); 
 DECLARE v_ofl_egresos_credito_constructor		DECIMAL(10,0); 
 DECLARE v_ofl_impuesto_transacciones_financieras_colpatria	DECIMAL(10,0); 
 DECLARE v_ofl_comision_fiduciaria_nuevogar_sin_fiduciaria	DECIMAL(10,0); 
 DECLARE v_ofl_otros_costos_y_gastos			DECIMAL(10,0); 
 DECLARE v_ofl_aportes_efectivo_colpatria_fideicomisos	DECIMAL(10,0); 
 DECLARE v_ofl_reintegros_iva				DECIMAL(10,0); 
 DECLARE v_ofl_subtotal_egresos_colpatria		DECIMAL(10,0); 
 DECLARE v_ofl_traslados_fiducias_e_ingresos_totales	DECIMAL(10,0); 
 DECLARE v_ofl_ingresos_ventas_colpatria		DECIMAL(10,0); 
 DECLARE v_ofl_desembolsos_credito_constructor_terreno	DECIMAL(10,0); 
 DECLARE v_ofl_traslados_liquidaciones_fideicomisos	DECIMAL(10,0); 
 DECLARE v_ofl_otros_ingresos				DECIMAL(10,0); 
 DECLARE v_ofl_aportes_de_socios			DECIMAL(10,0); 
 DECLARE v_ofl_subtotal_ingresos			DECIMAL(10,0); 
 DECLARE v_ofl_flujo_caja_antes_de_reintegro_socios	DECIMAL(10,0); 
 DECLARE v_ofl_reintegro_aportes_utilidades_socios	DECIMAL(10,0); 
 DECLARE v_ofl_flujo_neto_caja_ct			DECIMAL(10,0); 
 DECLARE v_ofl_flujo_acumulado				DECIMAL(10,0); 
 DECLARE v_ofl_costo_credito_tesoreria			DECIMAL(10,0); 
 DECLARE v_ofl_impuesto_renta				DECIMAL(10,0); 
 DECLARE v_ofl_flujo_neto_caja				DECIMAL(10,0); 
 DECLARE v_ofl_flujo_acumulado_caja			DECIMAL(10,0); 
 DECLARE v_ofl_vpn					DECIMAL(10,0); 
 DECLARE v_ofl_tir_ea					DECIMAL(10,0); 
 DECLARE v_ofl_tir_em					DECIMAL(10,0); 
 DECLARE v_ofl_tir_mod_ea				DECIMAL(10,0); 
 DECLARE v_ofl_tir_mod_em				DECIMAL(10,0); 
 DECLARE v_ofl_valor_total_ventas			DECIMAL(10,0); 
 DECLARE v_ofl_pagos_efectuados_fiducia_admon		DECIMAL(10,0); 
 DECLARE v_ofl_pe_intereses_credito_constructor		DECIMAL(10,0); 
 DECLARE v_ofl_pe_honorarios_visitas_obra_otros		DECIMAL(10,0); 
 DECLARE v_ofl_pe_abonos_extraordinarios_credito	DECIMAL(10,0); 
 DECLARE v_ofl_pe_pagos_terreno_efectuados_fiducia	DECIMAL(10,0); 
 DECLARE v_ofl_pe_otros_pagos_efectuados_fiducia	DECIMAL(10,0); 
 DECLARE v_ofl_traslados_fondos_fiducia_constructora	DECIMAL(10,0); 
 DECLARE v_ofl_comision_fiduciaria_prreventas_admon	DECIMAL(10,0); 
 DECLARE v_ofl_comision_fiduciaria_nuevogar		DECIMAL(10,0); 
 DECLARE v_ofl_impuesto_transacciones_financieras	DECIMAL(10,0); 
 DECLARE v_ofl_subtotal_egresos				DECIMAL(10,0); 
 DECLARE v_ofl_desembolsos_credito_constructor		DECIMAL(10,0); 
 DECLARE v_ofl_ingresos_ventas				DECIMAL(10,0); 
 DECLARE v_ofl_iv_abonos_separacion			DECIMAL(10,0); 
 DECLARE v_ofl_iv_cartera_cuota_inicial			DECIMAL(10,0); 
 DECLARE v_ofl_iv_saldo_cuota_inicial_abono_escritura	DECIMAL(10,0); 
 DECLARE v_ofl_iv_subsidio_vis_y_ahorro_programado	DECIMAL(10,0); 
 DECLARE v_ofl_iv_excedentes_credito_compradores	DECIMAL(10,0); 
 DECLARE v_ofl_iv_giros_directos_creditos_otras_entidades	DECIMAL(10,0); 
 DECLARE v_ofl_iv_ingresos_por_recibir_ventas_realizadas	DECIMAL(10,0); 
 DECLARE v_ofl_otros_ingresos_por_ventas		DECIMAL(10,0); 
 DECLARE v_ofl_oi_intereses_subrogacion			DECIMAL(10,0); 
 DECLARE v_ofl_oi_intereses_mora			DECIMAL(10,0); 
 DECLARE v_ofl_oi_ofertas_comerciales_y_otros_ingresos	DECIMAL(10,0); 
 DECLARE v_ofl_aportes_efectivo_colpatria_fideicomiso	DECIMAL(10,0);
 DECLARE v_ofl_aportes_otros_socios_inversionistas	DECIMAL(10,0); 
 DECLARE v_ofl_rendimientos_fideicomiso_capitalizacion	DECIMAL(10,0); 
 DECLARE v_ofl_subtotal_ingresos_antes_rendimientos	DECIMAL(10,0); 
 DECLARE v_ofl_flujo_neto_sin_rendimientos		DECIMAL(10,0); 
 DECLARE v_ofl_rendimientos_fideicomiso			DECIMAL(10,0); 
 DECLARE v_ofl_flujo_neto_fiduciaria			DECIMAL(10,0); 
 DECLARE v_ofl_traslado_saldo_final_fiducia_liquidacion	DECIMAL(10,0); 
 DECLARE v_ofl_flujo_acumulado_fiduciaria		DECIMAL(10,0);
 DECLARE v_finished 					INTEGER DEFAULT 0;

    DECLARE c_otros_flujos CURSOR FOR
  SELECT CONS_ID
        ,OFL_FECHA						OFL_C_FECHA
 	,SUM(OFL_COSTO_CONSTRUCCION)				OFL_C_COSTO_CONSTRUCCION
 	,SUM(OFL_HONORARIOS_COLPATRIA)				OFL_C_HONORARIOS_COLPATRIA
 	,SUM(OFL_GASTOS_OPERACION_COLPATRIA)			OFL_C_GASTOS_OPERACION_COLPATRIA
 	,SUM(OFL_GO_PROMOTORA_OPERACION)			OFL_C_GO_PROMOTORA_OPERACION
 	,SUM(OFL_GO_PROMOTORA_OVERHEAD)				OFL_C_GO_PROMOTORA_OVERHEAD
 	,SUM(OFL_GO_CONSTRUCTORA_OPERACION)			OFL_C_GO_CONSTRUCTORA_OPERACIONOFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_GO_CONSTRUCTORA_OVERHEAD)			OFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION)	OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION
 	,SUM(OFL_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD)	OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD
 	,SUM(OFL_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA)		OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA
 	,SUM(OFL_VALOR_TERRENO)					OFL_C_VALOR_TERRENO
 	,SUM(OFL_INTERESES_CREDITO_CONSTRUCTOR)			OFL_C_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_EGRESOS_CREDITO_CONSTRUCTOR)			OFL_C_EGRESOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA)	OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA
 	,SUM(OFL_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA)	OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA
 	,SUM(OFL_OTROS_COSTOS_Y_GASTOS)				OFL_C_OTROS_COSTOS_Y_GASTOS
 	,SUM(OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS)	OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS
 	,SUM(OFL_REINTEGROS_IVA)				OFL_C_REINTEGROS_IVA
 	,SUM(OFL_SUBTOTAL_EGRESOS_COLPATRIA)			OFL_C_SUBTOTAL_EGRESOS_COLPATRIA
 	,SUM(OFL_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES)		OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES
 	,SUM(OFL_INGRESOS_VENTAS_COLPATRIA)			OFL_C_INGRESOS_VENTAS_COLPATRIA
 	,SUM(OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO)	OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO
 	,SUM(OFL_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS)		OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS
 	,SUM(OFL_OTROS_INGRESOS)				OFL_C_OTROS_INGRESOS
 	,SUM(OFL_APORTES_DE_SOCIOS)				OFL_C_APORTES_DE_SOCIOS
 	,SUM(OFL_SUBTOTAL_INGRESOS)				OFL_C_SUBTOTAL_INGRESOS
 	,SUM(OFL_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS)		OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS
 	,SUM(OFL_REINTEGRO_APORTES_UTILIDADES_SOCIOS)		OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS
 	,SUM(OFL_FLUJO_NETO_CAJA_CT)				OFL_C_FLUJO_NETO_CAJA_CT
 	,SUM(OFL_FLUJO_ACUMULADO)				OFL_C_FLUJO_ACUMULADO
 	,SUM(OFL_COSTO_CREDITO_TESORERIA)			OFL_C_COSTO_CREDITO_TESORERIA
 	,SUM(OFL_IMPUESTO_RENTA)				OFL_C_IMPUESTO_RENTA
 	,SUM(OFL_FLUJO_NETO_CAJA)				OFL_C_FLUJO_NETO_CAJA
 	,SUM(OFL_FLUJO_ACUMULADO_CAJA)				OFL_C_FLUJO_ACUMULADO_CAJA
 	,SUM(OFL_VPN)						OFL_C_VPN
 	,SUM(OFL_TIR_EA)					OFL_C_TIR_EA
 	,SUM(OFL_TIR_EM)					OFL_C_TIR_EM
 	,SUM(OFL_TIR_MOD_EA)					OFL_C_TIR_MOD_EA
 	,SUM(OFL_TIR_MOD_EM)					OFL_C_TIR_MOD_EM
 	,SUM(OFL_VALOR_TOTAL_VENTAS)				OFL_C_VALOR_TOTAL_VENTAS
 	,SUM(OFL_PAGOS_EFECTUADOS_FIDUCIA_ADMON)		OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON
 	,SUM(OFL_PE_INTERESES_CREDITO_CONSTRUCTOR)		OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_PE_HONORARIOS_VISITAS_OBRA_OTROS)		OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS
 	,SUM(OFL_PE_ABONOS_EXTRAORDINARIOS_CREDITO)		OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO
 	,SUM(OFL_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA)		OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA
 	,SUM(OFL_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA)		OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA
 	,SUM(OFL_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA)		OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA
 	,SUM(OFL_COMISION_FIDUCIARIA_PRREVENTAS_ADMON)		OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON
 	,SUM(OFL_COMISION_FIDUCIARIA_NUEVOGAR)			OFL_C_COMISION_FIDUCIARIA_NUEVOGAR
 	,SUM(OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS)		OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS
 	,SUM(OFL_SUBTOTAL_EGRESOS)				OFL_C_SUBTOTAL_EGRESOS
 	,SUM(OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR)		OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_INGRESOS_VENTAS)				OFL_C_INGRESOS_VENTAS
 	,SUM(OFL_IV_ABONOS_SEPARACION)				OFL_C_IV_CARTERA_CUOTA_INICIAL
 	,SUM(OFL_IV_CARTERA_CUOTA_INICIAL)			OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA
 	,SUM(OFL_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA)	OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
 	,SUM(OFL_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)		OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES
 	,SUM(OFL_IV_EXCEDENTES_CREDITO_COMPRADORES)		OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
 	,SUM(OFL_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)	OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
 	,SUM(OFL_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)	OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_OTROS_INGRESOS_POR_VENTAS)			OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_OI_INTERESES_SUBROGACION)			OFL_C_OI_INTERESES_SUBROGACION
 	,SUM(OFL_OI_INTERESES_MORA)				OFL_C_OI_INTERESES_MORA
 	,SUM(OFL_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS)	OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS
 	,SUM(OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO)	OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO
 	,SUM(OFL_APORTES_OTROS_SOCIOS_INVERSIONISTAS)		OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS
 	,SUM(OFL_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION)	OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION
 	,SUM(OFL_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS)		OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS
 	,SUM(OFL_FLUJO_NETO_SIN_RENDIMIENTOS)			OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS
 	,SUM(OFL_RENDIMIENTOS_FIDEICOMISO)			OFL_C_RENDIMIENTOS_FIDEICOMISO
 	,SUM(OFL_FLUJO_NETO_FIDUCIARIA)				OFL_C_FLUJO_NETO_FIDUCIARIA
 	,SUM(OFL_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION)	OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION
 	,SUM(OFL_FLUJO_ACUMULADO_FIDUCIARIA)			OFL_C_FLUJO_ACUMULADO_FIDUCIARIA 
      FROM TB_SELECCION
          ,TB_OTROS_FLUJOS
          ,TB_CONSOLIDADOS
     WHERE SEL_DET_PRO_ID IS NOT NULL
       AND SEL_DET_PRO_ID = OFL_DET_PRO_ID
       AND SEL_DET_ETAPA  = OFL_DET_ETAPA
       AND SEL_MODELO 	  = OFL_MODELO
       AND CONS_CONS      = 'N'    
       AND SEL_CONS_ID  = 'N'
       AND OFL_FECHA BETWEEN CASE CONS_FEC_GEN_DES
       			     WHEN '0000-00-00' THEN OFL_FECHA 
       			     ELSE CONS_FEC_GEN_DES
                             END
       AND CASE CONS_FEC_GEN_HAS
       			     WHEN '0000-00-00' THEN OFL_FECHA 
       			     ELSE CONS_FEC_GEN_HAS
                             END
  GROUP BY OFL_FECHA;
  
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

  OPEN C_OTROS_FLUJOS;  
  obtener_c_otros_flujos: LOOP
  FETCH C_OTROS_FLUJOS INTO v_ofl_c_cons_id,
			    v_ofl_fecha,
			    v_ofl_costo_construccion, 
			    v_ofl_honorarios_colpatria, 
			    v_ofl_gastos_operacion_colpatria, 
			    v_ofl_go_promotora_operacion, 
			    v_ofl_go_promotora_overhead, 
			    v_ofl_go_constructora_operacion, 
			    v_ofl_go_constructora_overhead, 
			    v_ofl_go_transacciones_inmobiliarias_operacion, 
			    v_ofl_go_transacciones_inmobliarias_overhead, 
			    v_ofl_otros_pagos_efectuados_por_fiducia, 
			    v_ofl_valor_terreno, 
			    v_ofl_intereses_credito_constructor, 
			    v_ofl_egresos_credito_constructor, 
			    v_ofl_impuesto_transacciones_financieras_colpatria, 
			    v_ofl_comision_fiduciaria_nuevogar_sin_fiduciaria, 
			    v_ofl_otros_costos_y_gastos, 
			    v_ofl_aportes_efectivo_colpatria_fideicomisos, 
			    v_ofl_reintegros_iva, 
			    v_ofl_subtotal_egresos_colpatria, 
			    v_ofl_traslados_fiducias_e_ingresos_totales, 
			    v_ofl_ingresos_ventas_colpatria, 
			    v_ofl_desembolsos_credito_constructor_terreno, 
			    v_ofl_traslados_liquidaciones_fideicomisos, 
			    v_ofl_otros_ingresos, v_ofl_aportes_de_socios, 
			    v_ofl_subtotal_ingresos, 
			    v_ofl_flujo_caja_antes_de_reintegro_socios, 
			    v_ofl_reintegro_aportes_utilidades_socios, 
			    v_ofl_flujo_neto_caja_ct, 
			    v_ofl_flujo_acumulado, 
			    v_ofl_costo_credito_tesoreria, 
			    v_ofl_impuesto_renta, 
			    v_ofl_flujo_neto_caja, 
			    v_ofl_flujo_acumulado_caja, 
			    v_ofl_vpn, 
			    v_ofl_tir_ea, 
			    v_ofl_tir_em, 
			    v_ofl_tir_mod_ea, 
			    v_ofl_tir_mod_em, 
			    v_ofl_valor_total_ventas, 
			    v_ofl_pagos_efectuados_fiducia_admon, 
			    v_ofl_pe_intereses_credito_constructor, 
			    v_ofl_pe_honorarios_visitas_obra_otros, 
			    v_ofl_pe_abonos_extraordinarios_credito, 
			    v_ofl_pe_pagos_terreno_efectuados_fiducia, 
			    v_ofl_pe_otros_pagos_efectuados_fiducia, 
			    v_ofl_traslados_fondos_fiducia_constructora, 
			    v_ofl_comision_fiduciaria_prreventas_admon, 
			    v_ofl_comision_fiduciaria_nuevogar, 
			    v_ofl_impuesto_transacciones_financieras, 
			    v_ofl_subtotal_egresos, 
			    v_ofl_desembolsos_credito_constructor, 
			    v_ofl_ingresos_ventas, v_ofl_iv_abonos_separacion, 
			    v_ofl_iv_cartera_cuota_inicial, 
			    v_ofl_iv_saldo_cuota_inicial_abono_escritura, 
			    v_ofl_iv_subsidio_vis_y_ahorro_programado, 
			    v_ofl_iv_excedentes_credito_compradores, 
			    v_ofl_iv_giros_directos_creditos_otras_entidades, 
			    v_ofl_iv_ingresos_por_recibir_ventas_realizadas, 
			    v_ofl_otros_ingresos_por_ventas, 
			    v_ofl_oi_intereses_subrogacion, 
			    v_ofl_oi_intereses_mora, 
			    v_ofl_oi_ofertas_comerciales_y_otros_ingresos, 
			    v_ofl_aportes_efectivo_colpatria_fideicomiso,
			    v_ofl_aportes_otros_socios_inversionistas, 
			    v_ofl_rendimientos_fideicomiso_capitalizacion, 
			    v_ofl_subtotal_ingresos_antes_rendimientos, 
			    v_ofl_flujo_neto_sin_rendimientos, 
			    v_ofl_rendimientos_fideicomiso, 
			    v_ofl_flujo_neto_fiduciaria, 
			    v_ofl_traslado_saldo_final_fiducia_liquidacion, 
			    v_ofl_flujo_acumulado_fiduciaria;
  IF v_finished = 1 THEN
     LEAVE obtener_c_otros_flujos;
  END IF;

  INSERT INTO TB_C_OTROS_FLUJOS(OFL_C_CONS_ID,
  				OFL_C_FECHA,
  				OFL_C_COSTO_CONSTRUCCION,
  				OFL_C_HONORARIOS_COLPATRIA,
  				OFL_C_GASTOS_OPERACION_COLPATRIA,
  				OFL_C_GO_PROMOTORA_OPERACION,
  				OFL_C_GO_PROMOTORA_OVERHEAD,
  				OFL_C_GO_CONSTRUCTORA_OPERACION,
  				OFL_C_GO_CONSTRUCTORA_OVERHEAD,
  				OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION,
  				OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD,
  				OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA,
  				OFL_C_VALOR_TERRENO,
  				OFL_C_EGRESOS_CREDITO_CONSTRUCTOR,
  				OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA,
  				OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA,
  				OFL_C_OTROS_COSTOS_Y_GASTOS,
  				OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS,
  				OFL_C_REINTEGROS_IVA,
  				OFL_C_SUBTOTAL_EGRESOS_COLPATRIA,
  				OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES,
  				OFL_C_INGRESOS_VENTAS_COLPATRIA,
  				OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO,
  				OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS,
  				OFL_C_OTROS_INGRESOS,
  				OFL_C_APORTES_DE_SOCIOS,
  				OFL_C_SUBTOTAL_INGRESOS,
  				OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS,
  				OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS,
  				OFL_C_FLUJO_NETO_CAJA_CT,
  				OFL_C_FLUJO_ACUMULADO,
  				OFL_C_COSTO_CREDITO_TESORERIA,
  				OFL_C_IMPUESTO_RENTA,
  				OFL_C_FLUJO_NETO_CAJA,
  				OFL_C_FLUJO_ACUMULADO_CAJA,
  				OFL_C_VPN, OFL_C_TIR_EA,
  				OFL_C_TIR_EM,
  				OFL_C_TIR_MOD_EA,
  				OFL_C_TIR_MOD_EM,
  				OFL_C_VALOR_TOTAL_VENTAS,
  				OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON,
  				OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR,
  				OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS,
  				OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO,
  				OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA,
  				OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA,
  				OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA,
  				OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON,
  				OFL_C_COMISION_FIDUCIARIA_NUEVOGAR,
  				OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS,
  				OFL_C_SUBTOTAL_EGRESOS,
  				OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR,
  				OFL_C_INGRESOS_VENTAS,
  				OFL_C_IV_ABONOS_SEPARACION,
  				OFL_C_IV_CARTERA_CUOTA_INICIAL,
  				OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA,
  				OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO,
  				OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES,
  				OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES,
  				OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS,
  				OFL_C_OTROS_INGRESOS_POR_VENTAS,
  				OFL_C_OI_INTERESES_SUBROGACION,
  				OFL_C_OI_INTERESES_MORA,
  				OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS,
  				OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO,
  				OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS,
  				OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION,
  				OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS,
  				OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS,
  				OFL_C_RENDIMIENTOS_FIDEICOMISO,
  				OFL_C_FLUJO_NETO_FIDUCIARIA,
  				OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION,
  				OFL_C_FLUJO_ACUMULADO_FIDUCIARIA)
 			VALUES (v_ofl_c_cons_id,
 				v_ofl_fecha,
 				v_ofl_costo_construccion,
 				v_ofl_honorarios_colpatria, 
				v_ofl_gastos_operacion_colpatria, 
				v_ofl_go_promotora_operacion, 
				v_ofl_go_promotora_overhead, 
				v_ofl_go_constructora_operacion, 
				v_ofl_go_constructora_overhead, 
				v_ofl_go_transacciones_inmobiliarias_operacion, 
				v_ofl_go_transacciones_inmobliarias_overhead, 
				v_ofl_otros_pagos_efectuados_por_fiducia, 
				v_ofl_valor_terreno, 
				v_ofl_egresos_credito_constructor, 
				v_ofl_impuesto_transacciones_financieras_colpatria, 
				v_ofl_comision_fiduciaria_nuevogar_sin_fiduciaria, 
				v_ofl_otros_costos_y_gastos, 
				v_ofl_aportes_efectivo_colpatria_fideicomisos, 
				v_ofl_reintegros_iva, 
				v_ofl_subtotal_egresos_colpatria, 
				v_ofl_traslados_fiducias_e_ingresos_totales, 
				v_ofl_ingresos_ventas_colpatria, 
				v_ofl_desembolsos_credito_constructor_terreno, 
				v_ofl_traslados_liquidaciones_fideicomisos, 
				v_ofl_otros_ingresos, v_ofl_aportes_de_socios, 
				v_ofl_subtotal_ingresos, 
				v_ofl_flujo_caja_antes_de_reintegro_socios, 
				v_ofl_reintegro_aportes_utilidades_socios, 
				v_ofl_flujo_neto_caja_ct, 
				v_ofl_flujo_acumulado, 
				v_ofl_costo_credito_tesoreria, 
				v_ofl_impuesto_renta, 
				v_ofl_flujo_neto_caja, 
				v_ofl_flujo_acumulado_caja, 
				v_ofl_vpn, 
				v_ofl_tir_ea, 
				v_ofl_tir_em, 
				v_ofl_tir_mod_ea, 
				v_ofl_tir_mod_em, 
				v_ofl_valor_total_ventas, 
				v_ofl_pagos_efectuados_fiducia_admon, 
				v_ofl_pe_intereses_credito_constructor, 
				v_ofl_pe_honorarios_visitas_obra_otros, 
				v_ofl_pe_abonos_extraordinarios_credito, 
				v_ofl_pe_pagos_terreno_efectuados_fiducia, 
				v_ofl_pe_otros_pagos_efectuados_fiducia, 
				v_ofl_traslados_fondos_fiducia_constructora, 
				v_ofl_comision_fiduciaria_prreventas_admon, 
				v_ofl_comision_fiduciaria_nuevogar, 
				v_ofl_impuesto_transacciones_financieras, 
				v_ofl_subtotal_egresos, 
				v_ofl_desembolsos_credito_constructor, 
				v_ofl_ingresos_ventas, v_ofl_iv_abonos_separacion, 
				v_ofl_iv_cartera_cuota_inicial, 
				v_ofl_iv_saldo_cuota_inicial_abono_escritura, 
				v_ofl_iv_subsidio_vis_y_ahorro_programado, 
				v_ofl_iv_excedentes_credito_compradores, 
				v_ofl_iv_giros_directos_creditos_otras_entidades, 
				v_ofl_iv_ingresos_por_recibir_ventas_realizadas, 
				v_ofl_otros_ingresos_por_ventas, 
				v_ofl_oi_intereses_subrogacion, 
				v_ofl_oi_intereses_mora, 
				v_ofl_oi_ofertas_comerciales_y_otros_ingresos, 
				v_ofl_aportes_efectivo_colpatria_fideicomiso,
				v_ofl_aportes_otros_socios_inversionistas, 
				v_ofl_rendimientos_fideicomiso_capitalizacion, 
				v_ofl_subtotal_ingresos_antes_rendimientos, 
				v_ofl_flujo_neto_sin_rendimientos, 
				v_ofl_rendimientos_fideicomiso, 
				v_ofl_flujo_neto_fiduciaria, 
				v_ofl_traslado_saldo_final_fiducia_liquidacion, 
				v_ofl_flujo_acumulado_fiduciaria);
  END LOOP obtener_c_otros_flujos;				  
  CLOSE C_OTROS_FLUJOS; 
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_CONS_RESUMEN`()
BEGIN

 DECLARE v_res_c_cons_id  				VARCHAR(12);
 DECLARE v_res_fecha 					VARCHAR(10);
 DECLARE v_res_total_unidades  DECIMAL (10,0);
 DECLARE v_res_area_promedio_unidad  DECIMAL (10,0); 
 DECLARE v_res_total_area_construida  DECIMAL (10,0);
 DECLARE v_res_total_area_vendible  DECIMAL (10,0); 
 DECLARE v_res_area_util_lote_asignada_subproyecto  DECIMAL (10,0);
 DECLARE v_res_densidad_indice_ocupacion  DECIMAL (10,0); 
 DECLARE v_res_valor_metro_cuadrado_lote_urbanizado  DECIMAL (10,0); 
 DECLARE v_res_numero_parqueos  DECIMAL (10,0); 
 DECLARE v_res_relacion_parqueos_numero_parqueos_por_unidad  DECIMAL (10,0);
 DECLARE v_res_numero_depositos  DECIMAL (10,0); 
 DECLARE v_res_fecha_inicio_y_terminacion_ventas  VARCHAR (16);
 DECLARE v_res_fecha_inicio_y_terminacion_construccion  VARCHAR (16);
 DECLARE v_res_ritmo_ventas_mensual_promedio  DECIMAL (10,0);
 DECLARE v_res_punto_equilibrio_unidades  DECIMAL (10,0);
 DECLARE v_res_tasa_promedio_incremento_precios  DECIMAL (10,0);
 DECLARE v_res_porcentaje_ventas_nuevogar  DECIMAL (10,0);
 DECLARE v_res_fecha_presupuesto  VARCHAR (10);
 DECLARE v_res_tasa_promedio_incremento_presupuesto  DECIMAL (10,0);
 DECLARE v_res_c_tot_ui  DECIMAL (10,0);
 DECLARE v_res_c_tot_uip  DECIMAL (10,0); 
 DECLARE v_res_c_tot_uii  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cm  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cmp  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cmi  DECIMAL (10,0);
 DECLARE v_res_c_tot_gi  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cp  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_hc  DECIMAL (10,0);
 DECLARE v_res_c_tot_cd_hc_hc  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_hc_gr  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_hi  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_hi_hi  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_hi_gr  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_oh  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cd_oh_oh  DECIMAL (10,0);
 DECLARE v_res_c_tot_cd_oh_gr  DECIMAL (10,0);
 DECLARE v_res_c_tot_cd_id  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_hg  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_hg_hg  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_hg_gr  DECIMAL (10,0);
 DECLARE v_res_c_tot_ct_hv  DECIMAL (10,0);
 DECLARE v_res_c_tot_ct_hv_hv  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_hv_gr  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_cp  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_cp_sv  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_cp_gp  DECIMAL (10,0);
 DECLARE v_res_c_tot_ct_cp_gs  DECIMAL (10,0);
 DECLARE v_res_c_tot_ct_cp_au  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_cp_cv  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_gl  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_gl_hc  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_gl_nr  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_tot_ct_gl_ic  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ca  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ca_vt  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ca_vt_pv  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_vt_op  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_cf  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ca_cf_pa  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_cf_nh  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_gf  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ca_gf_ic  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_gf_oc  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_gf_cm  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_gf_it  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_oc  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_oc_oc1  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_oc_oc2  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_oc_oc3  DECIMAL (10,0);
 DECLARE v_res_c_tot_ca_ri  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ci  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ci_vb  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_ov  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ci_ov_is  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_ov_im  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_ov_oc  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_rf  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_oi  DECIMAL (10,0);
 DECLARE v_res_c_tot_ci_oi_oi1  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ci_oi_oi2  DECIMAL (10,0); 
 DECLARE v_res_c_tot_ci_oi_oi3  DECIMAL (10,0); 
 DECLARE v_res_c_tot_it  DECIMAL (10,0); 
 DECLARE v_res_c_tot_up  DECIMAL (10,0); 
 DECLARE v_res_c_tot_up_cc  DECIMAL (10,0);
 DECLARE v_res_c_tot_up_ir  DECIMAL (10,0);
 DECLARE v_res_c_tot_up2  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cv  DECIMAL (10,0); 
 DECLARE v_res_c_tot_vt  DECIMAL (10,0); 
 DECLARE v_res_c_tot_cvg  DECIMAL (10,0); 
 DECLARE v_res_c_tot_tir  DECIMAL (10,0); 
 DECLARE v_res_c_tot_vpn  DECIMAL (10,0); 
 DECLARE v_res_c_tot_uc  DECIMAL (10,0); 
 DECLARE v_res_c_tot_uc_co  DECIMAL (10,0); 
 DECLARE v_res_c_tot_uc_ti  DECIMAL (10,0); 
 DECLARE v_res_c_tot_uc_pr  DECIMAL (10,0);
 DECLARE v_res_c_tot_tir_c  DECIMAL (10,0);
 DECLARE v_res_c_tot_vpn_c  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ui  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_uip  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_uii  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cm  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_cmp  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_cmi  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_gi  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cp  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_hc  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_cd_hc_hc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_hc_gr  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_hi  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_hi_hi  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_hi_gr  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_oh  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_oh_oh  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cd_oh_gr  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_cd_id  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hg  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hg_hg  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hg_gr  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hv  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hv_hv  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_hv_gr  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp_sv  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp_gp  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp_gs  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp_au  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ct_cp_cv  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ct_gl  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ct_gl_hc  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ct_gl_nr  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ct_gl_ic  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_vt  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_vt_pv  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_vt_op  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_cf  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_cf_pa  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_cf_nh  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_gf  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ca_gf_ic  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_gf_oc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_gf_cm  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_gf_it  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_oc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_oc_oc1  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ca_oc_oc2  DECIMAL (10,0);
  DECLARE v_res_c_porc_vent_ca_oc_oc3  DECIMAL (10,0);
DECLARE v_res_c_porc_vent_ca_ri  DECIMAL (10,0); 
DECLARE v_res_c_porc_vent_ci  DECIMAL (10,0); 
DECLARE v_res_c_porc_vent_ci_vb  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ci_ov  DECIMAL (10,0);
 DECLARE v_res_c_porc_vent_ci_ov_is  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_ov_im  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_ov_oc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_rf  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_oi  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_oi_oi1  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_oi_oi2  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_ci_oi_oi3  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_it  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_up  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_up_cc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_up_ir  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_up2  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cv  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_vt  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_cvg  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_tir  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_vpn  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_uc  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_uc_co  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_uc_ti  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_uc_pr  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_tir_c  DECIMAL (10,0); 
 DECLARE v_res_c_porc_vent_vpn_c  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_ui  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_uip  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_uii  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cm  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cmp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cmi  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_gi  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cp  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cd  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cd_hc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cd_hc_hc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_hc_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_hi  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cd_hi_hi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_hi_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_oh  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_con_cd_oh_oh  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_oh_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cd_id  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hg_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hg_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hv_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_hv_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp_sv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp_gp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp_gs  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp_au  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_cp_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_gl  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_gl_hc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_gl_nr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ct_gl_ic  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_vt  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_vt_pv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_vt_op  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_cf  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_cf_pa  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_cf_nh  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_gf  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_gf_ic  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_gf_oc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_gf_cm  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_gf_it  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_oc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_oc_oc1  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_oc_oc2  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_oc_oc3  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ca_ri  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_vb  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_ov  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_ov_is  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_ov_im  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_ov_oc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_rf  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_oi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_oi_oi1  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_oi_oi2  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_ci_oi_oi3  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_it  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_up  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_up_cc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_up_ir  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_up2  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_con_vt  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ui  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_uip  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_uii  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cm  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cmp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cmi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_gi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hc_hc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hc_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hi_hi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_hi_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_oh  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_oh_oh  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_oh_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cd_id  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hg_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hg_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hv_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_hv_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp_sv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp_gp  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp_gs  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp_au  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_cp_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_gl  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_gl_hc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_gl_nr  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ct_gl_ic  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ca  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_vt  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_vt_pv  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_vt_op  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_cf  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_cf_pa  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_cf_nh  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_gf  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_gf_ic  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_gf_oc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_gf_cm  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_gf_it  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_oc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_oc_oc1  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_oc_oc2  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_oc_oc3  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ca_ri  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_vb  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_ov  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_ov_is  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_ov_im  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_ov_oc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_ci_rf  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ci_oi  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ci_oi_oi1  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ci_oi_oi2  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_ci_oi_oi3  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_it  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_up  DECIMAL (10,0); 
 DECLARE v_res_c_vr_m_ven_up_cc  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_up_ir  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_up2  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_m_ven_vt  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ui  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_uip  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_uii  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_cm  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cmp  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_cmi  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_gi  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cp  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_hc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_hc_hc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_hc_gr  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_hi  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_hi_hi  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_cd_hi_gr  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_oh  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cd_oh_oh  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_cd_oh_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_cd_id  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ct  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hg_hg  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hg_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hv_hv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_hv_gr  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp_sv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp_gp  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp_gs  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp_au  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_cp_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_gl  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_gl_hc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ct_gl_nr  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ct_gl_ic  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_vt  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_vt_pv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_vt_op  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_cf  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_cf_pa  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_cf_nh  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_gf  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_gf_ic  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_gf_oc  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_gf_cm  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_gf_it  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ca_oc  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_oc_oc1  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_oc_oc2  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_oc_oc3  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ca_ri  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ci  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_ci_vb  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_ov  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_ov_is  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_ov_im  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_ov_oc  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_rf  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_oi  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_oi_oi1  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_oi_oi2  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_ci_oi_oi3  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_it  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_up  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_up_cc  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_up_ir  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_up2  DECIMAL (10,0); 
 DECLARE v_res_c_vr_uni_cv  DECIMAL (10,0);
 DECLARE v_res_c_vr_uni_vt  DECIMAL (10,0);
 DECLARE v_res_c_eje_ui  DECIMAL (10,0);
 DECLARE v_res_c_eje_uip  DECIMAL (10,0); 
 DECLARE v_res_c_eje_uii  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cm  DECIMAL (10,0);
 DECLARE v_res_c_eje_cmp  DECIMAL (10,0);
 DECLARE v_res_c_eje_cmi  DECIMAL (10,0);
 DECLARE v_res_c_eje_gi  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cp  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hc  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hc_hc  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hc_gr  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hi  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hi_hi  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_hi_gr  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_oh  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_oh_oh  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_oh_gr  DECIMAL (10,0); 
 DECLARE v_res_c_eje_cd_id  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ct  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_hg  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ct_hg_hg  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_hg_gr  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_hv  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_hv_hv  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_hv_gr  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp_sv  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp_gp  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp_gs  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp_au  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_cp_cv  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_gl  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_gl_hc  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_gl_nr  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_gl_ip  DECIMAL (10,0);
 DECLARE v_res_c_eje_ct_gl_ic  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_vt  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_vt_pv  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_vt_op  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_cf  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_cf_pa  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ca_cf_nh  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_gf  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_gf_ic  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ca_gf_oc  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_gf_cm  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ca_gf_it  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ca_oc  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_oc_oc1  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_oc_oc2  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_oc_oc3  DECIMAL (10,0);
 DECLARE v_res_c_eje_ca_ri  DECIMAL (10,0); 
 DECLARE v_res_c_eje_ci  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_vb  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_ov  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_ov_is  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_ov_im  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_ov_oc  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_rf  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_oi  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_oi_oi1  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_oi_oi2  DECIMAL (10,0);
 DECLARE v_res_c_eje_ci_oi_oi3  DECIMAL (10,0);
 DECLARE v_res_c_eje_it  DECIMAL (10,0);
 DECLARE v_res_c_eje_up  DECIMAL (10,0);
 DECLARE v_res_c_eje_up_cc  DECIMAL (10,0);
 DECLARE v_res_c_eje_up_ir  DECIMAL (10,0);
 DECLARE v_res_c_eje_up2  DECIMAL (10,0);
 DECLARE v_res_c_eje_cv  DECIMAL (10,0);
 DECLARE v_res_c_eje_vt  DECIMAL (10,0);
 DECLARE v_res_c_eje_cvg  DECIMAL (10,0);
 DECLARE v_finished 	INTEGER DEFAULT 0;


  DECLARE c_resumen_consolidado CURSOR FOR
  SELECT CONS_ID
    ,RES_FECHA              RES_C_FECHA
 ,SUM(RES_TOTAL_UNIDADES)                             				 RES_C_TOTAL_UNIDADES          
 ,SUM(RES_AREA_PROMEDIO_UNIDAD)                                    	 RES_C_AREA_PROMEDIO_UNIDAD   
 ,SUM(RES_TOTAL_AREA_CONSTRUIDA)                                     RES_C_TOTAL_AREA_CONSTRUIDA
 ,SUM(RES_TOTAL_AREA_VENDIBLE)                                       RES_C_TOTAL_AREA_VENDIBLE
 ,SUM(RES_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO)                       RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO
 ,SUM(RES_DENSIDAD_INDICE_OCUPACION)                                 RES_C_DENSIDAD_INDICE_OCUPACION      
 ,SUM(RES_VALOR_METRO_CUADRADO_LOTE_URBANIZADO)                      RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO
 ,SUM(RES_NUMERO_PARQUEOS)                                           RES_C_NUMERO_PARQUEOS
 ,SUM(RES_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD)              RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD                         
 ,SUM(RES_NUMERO_DEPOSITOS)                                       	 RES_C_NUMERO_DEPOSITOS
 ,RES_FECHA_INICIO_Y_TERMINACION_VENTAS                         RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS              
 ,RES_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION                                       RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION
 ,SUM(RES_RITMO_VENTAS_MENSUAL_PROMEDIO)                                       RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO
 ,SUM(RES_PUNTO_EQUILIBRIO_UNIDADES)                                       RES_C_PUNTO_EQUILIBRIO_UNIDADES
 ,SUM(RES_TASA_PROMEDIO_INCREMENTO_PRECIOS)                                       RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS
 ,SUM(RES_PORCENTAJE_VENTAS_NUEVOGAR)                                       RES_C_PORCENTAJE_VENTAS_NUEVOGAR
 ,RES_FECHA_PRESUPUESTO                                     RES_C_FECHA_PRESUPUESTO
 ,SUM(RES_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO)                                       RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO
 ,SUM(RES_C_TOT_UI)                                       RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA
 ,SUM(RES_C_TOT_UIP)                                       RES_C_PRESUPUESTO
 ,SUM(RES_C_TOT_UII)                                       RES_C_INCREMENTOS
 ,SUM(RES_C_TOT_CM)                                       RES_C_COSTO_MATERIAL
 ,SUM(RES_C_TOT_CMP)                                       RES_C_PRESUPUESTO2
 ,SUM(RES_C_TOT_CMI)                                       RES_C_INCREMENTOS2
 ,SUM(RES_C_TOT_GI)                                       RES_C_GASTOS_IMPREVISTOS
 ,SUM(RES_C_TOT_CP)                                       RES_C_COSTOS_POST_VENTAS
 ,SUM(RES_C_TOT_CD)                                       RES_C_COSTO_DIRECTO_CONSTRUCCION
 ,SUM(RES_C_TOT_CD_HC)                                      RES_C_HONORARIOS_CONSTRUCCION
 ,SUM(RES_C_TOT_CD_HC_HC)                                      RES_C_HONORARIOS_CONSTRUCCION2
 ,SUM(RES_C_TOT_CD_HC_GR)                                       RES_C_GASTOS_REEMBOLSABLES
 ,SUM(RES_C_TOT_CD_HI)                                       RES_C_HONORARIOS_INTERVENTORIA
 ,SUM(RES_C_TOT_CD_HI_HI)                                      RES_C_HONORARIOS_INTERVENTORIA2
 ,SUM(RES_C_TOT_CD_HI_GR)                                       RES_C_GASTOS_REEMBOLSABLES2
 ,SUM(RES_C_TOT_CD_OH)                                       RES_C_OTROS_HONORARIOS_DISENOS_OTROS
 ,SUM(RES_C_TOT_CD_OH_OH)                                       RES_C_OTROS_HONORARIOS_DISENOS_OTROS2
 ,SUM(RES_C_TOT_CD_OH_GR)                                       RES_C_GASTOS_REEMBOLSABLES3
 ,SUM(RES_C_TOT_CD_ID)                                       RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION
 ,SUM(RES_C_TOT_CT)                                       RES_C_COSTO_TOTAL_CONSTRUCCION
 ,SUM(RES_C_TOT_CT_HG)                                       RES_C_HONORARIOS_GERENCIA
 ,SUM(RES_C_TOT_CT_HG_HG)                                       RES_C_HONORARIOS_GERENCIA2
 ,SUM(RES_C_TOT_CT_HG_GR)                                       RES_C_GASTOS_REEMBOLSABLES4
 ,SUM(RES_C_TOT_CT_HV)                                       RES_C_HONORARIOS_VENTAS
 ,SUM(RES_C_TOT_CT_HV_HV)                                       RES_C_HONORARIOS_VENTAS2
 ,SUM(RES_C_TOT_CT_HV_GR)                                       RES_C_GASTOS_REEMBOLSABLES5
 ,SUM(RES_C_TOT_CT_CP)                                       RES_C_COSTOS_PROMOCION_Y_VENTAS
 ,SUM(RES_C_TOT_CT_CP_SV)                                      RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION
 ,SUM(RES_C_TOT_CT_CP_GP)                                       RES_C_GASTOS_PUBLICIDAD
 ,SUM(RES_C_TOT_CT_CP_GS)                                       RES_C_GASTOS_SALA_VENTAS
 ,SUM(RES_C_TOT_CT_CP_AU)                                       RES_C_ADMON_UNIDADES_POR_ENTREGAR
 ,SUM(RES_C_TOT_CT_CP_CV)                                       RES_C_COMISIONES_VENTAS
 ,SUM(RES_C_TOT_CT_GL)                                       RES_C_GASTOS_LEGALES
 ,SUM(RES_C_TOT_CT_GL_HC)                                       RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR
 ,SUM(RES_C_TOT_CT_GL_NR)                                       RES_C_NOTARIALES_REGISTRO_DE_VENTAS
 ,SUM(RES_C_TOT_CT_GL_IP)                                       RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR
 ,SUM(RES_C_TOT_CT_GL_IC)                                       RES_C_IMPUESTO_ICA
 ,SUM(RES_C_TOT_CA)                                       RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS
 ,SUM(RES_C_TOT_CA_VT)                                       RES_C_VALOR_TERENO_URBANIZADO
 ,SUM(RES_C_TOT_CA_VT_PV)                                       RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO
 ,SUM(RES_C_TOT_CA_VT_OP)                                       RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION
 ,SUM(RES_C_TOT_CA_CF)                                       RES_C_COMISIONES_FIDUCIA
 ,SUM(RES_C_TOT_CA_CF_PA)                                       RES_C_PREVENTAS_Y_ADMON
 ,SUM(RES_C_TOT_CA_CF_NH)                                       RES_C_NUEVOGAR
 ,SUM(RES_C_TOT_CA_GF)                                       RES_C_GASTOS_FINANCIEROS
 ,SUM(RES_C_TOT_CA_GF_IC)                                       RES_C_INTERESES_CREDITO_CONSTRUCTOR
 ,SUM(RES_C_TOT_CA_GF_OC)                                       RES_C_OTROS_COSTOS_CREDITO
 ,SUM(RES_C_TOT_CA_GF_CM)                                       RES_C_CORRECCION_MONETARIA
 ,SUM(RES_C_TOT_CA_GF_IT)                                      RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF
 ,SUM(RES_C_TOT_CA_OC)                                       RES_C_OTROS_COSTOS_Y_GASTOS
 ,SUM(RES_C_TOT_CA_OC_OC1)                                       RES_C_GASTO1
 ,SUM(RES_C_TOT_CA_OC_OC2)                                       RES_C_GASTO2
 ,SUM(RES_C_TOT_CA_OC_OC3)                                       RES_C_GASTO3
 ,SUM(RES_C_TOT_CA_RI)                                      RES_C_REINTEGROS_IVA_PROYECTOS_VIS
 ,SUM(RES_C_TOT_CI)                                       RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS
 ,SUM(RES_C_TOT_CI_VB)                                       RES_C_VENTAS_BRUTAS
 ,SUM(RES_C_TOT_CI_OV)                                       RES_C_OTROS_INGRESOS_VENTAS
 ,SUM(RES_C_TOT_CI_OV_IS)                                       RES_C_INTERESES_SUBROGACION
 ,SUM(RES_C_TOT_CI_OV_IM)                                       RES_C_INTERESES_MORA
 ,SUM(RES_C_TOT_CI_OV_OC)                                       RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS
 ,SUM(RES_C_TOT_CI_RF)                                       RES_C_RENDIMIENTOS_FIDEICOMISO
 ,SUM(RES_C_TOT_CI_OI)                                       RES_C_OTROS_INGRESOS
 ,SUM(RES_C_TOT_CI_OI_OI1)                                       RES_C_INGRESOS1
 ,SUM(RES_C_TOT_CI_OI_OI2)                                      RES_C_INGRESOS2
 ,SUM(RES_C_TOT_CI_OI_OI3)                                       RES_C_INGRESOS3
 ,SUM(RES_C_TOT_IT)                                       RES_C_INGRESOS_TOTALES
 ,SUM(RES_C_TOT_UP)                                       RES_C_UTILIDAD_PROYECTO
 ,SUM(RES_C_TOT_UP_CC)                                       RES_C_COSTO_CREDITO_TESORERIA
 ,SUM(RES_C_TOT_UP_IR)                                       RES_C_IMPUESTO_RENTA
 ,SUM(RES_C_TOT_UP2)                                      RES_C_UTILIDAD_PROYECTO2
 ,SUM(RES_C_TOT_CV)                                       RES_C_COSTO_VENTAS_GESTION
 ,SUM(RES_C_TOT_VT)                                       RES_C_VALOR_TERRENO_LIBROS
 ,SUM(RES_C_TOT_CVG)                                       RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES
 ,SUM(RES_C_TOT_TIR)                                       RES_C_TIR_EA
 ,SUM(RES_C_TOT_VPN)                                       RES_C_VPN_TASA_DESCUENTO
 ,SUM(RES_C_TOT_UC)                                       RES_C_UTILIDAD_COLPATRIA
 ,SUM(RES_C_TOT_UC_CO)                                       RES_C_CONSTRUCTORA
 ,SUM(RES_C_TOT_UC_TI)                                       RES_C_TRANSACCIONES_INMOBILIARIAS
 ,SUM(RES_C_TOT_UC_PR)                                       RES_C_PROMOTORA
 ,SUM(RES_C_TOT_TIR_C)                                       RES_C_TIR_COLAPTRIA_EA
 ,SUM(RES_C_TOT_VPN_C)                                       RES_C_TIR_COLPATRIA_EM
 ,SUM(RES_C_PORC_VENT_UI)                                    RES_C_PORC_VEN_UI   
 ,SUM(RES_C_PORC_VENT_UIP)                                       RES_C_PORC_VEN_UIP
 ,SUM(RES_C_PORC_VENT_UII)                                       RES_C_PORC_VEN_UII
 ,SUM(RES_C_PORC_VENT_CM)                                       RES_C_PORC_VEN_CM
 ,SUM(RES_C_PORC_VENT_CMP)                                       RES_C_PORC_VEN_CMP
 ,SUM(RES_C_PORC_VENT_CMI)                                       RES_C_PORC_VEN_CMI
 ,SUM(RES_C_PORC_VENT_GI)                                      RES_C_PORC_VEN_GI
 ,SUM(RES_C_PORC_VENT_CP)                                       RES_C_PORC_VEN_CP
 ,SUM(RES_C_PORC_VENT_CD)                                       RES_C_PORC_VEN_CD
 ,SUM(RES_C_PORC_VENT_CD_HC)                                       RES_C_PORC_VEN_CD_HC
 ,SUM(RES_C_PORC_VENT_CD_HC_HC)                                      RES_C_PORC_VEN_CD_HC_HC
 ,SUM(RES_C_PORC_VENT_CD_HC_GR)                                      RES_C_PORC_VEN_CD_HC_GR
 ,SUM(RES_C_PORC_VENT_CD_HI)                                      RES_C_PORC_VEN_CD_HI
 ,SUM(RES_C_PORC_VENT_CD_HI_HI)                                      RES_C_PORC_VEN_CD_HI_HI
 ,SUM(RES_C_PORC_VENT_CD_HI_GR)                                      RES_C_PORC_VEN_CD_HI_GR
,SUM(RES_C_PORC_VENT_CD_OH)                                      RES_C_PORC_VEN_CD_OH
,SUM(RES_C_PORC_VENT_CD_OH_OH)                                      RES_C_PORC_VEN_CD_OH_OH
,SUM(RES_C_PORC_VENT_CD_OH_GR)                                      RES_C_PORC_VEN_CD_OH_GR
,SUM(RES_C_PORC_VENT_CD_ID)                                      RES_C_PORC_VEN_CD_ID
,SUM(RES_C_PORC_VENT_CT)                                      RES_C_PORC_VEN_CT
,SUM(RES_C_PORC_VENT_CT_HG)                                      RES_C_PORC_VEN_CT_HG
,SUM(RES_C_PORC_VENT_CT_HG_HG)                                      RES_C_PORC_VEN_CT_HG_HG
,SUM(RES_C_PORC_VENT_CT_HG_GR)                                      RES_C_PORC_VEN_CT_HG_GR
,SUM(RES_C_PORC_VENT_CT_HV)                                      RES_C_PORC_VEN_CT_HV
,SUM(RES_C_PORC_VENT_CT_HV_HV)                                      RES_C_PORC_VEN_CT_HV_HV
,SUM(RES_C_PORC_VENT_CT_HV_GR)                                      RES_C_PORC_VEN_CT_HV_GR
,SUM(RES_C_PORC_VENT_CT_CP)                                      RES_C_PORC_VEN_CT_CP
,SUM(RES_C_PORC_VENT_CT_CP_SV)                                      RES_C_PORC_VEN_CT_CP_SV
,SUM(RES_C_PORC_VENT_CT_CP_GP)                                      RES_C_PORC_VEN_CT_CP_GP
,SUM(RES_C_PORC_VENT_CT_CP_GS)                                      RES_C_PORC_VEN_CT_CP_GS
,SUM(RES_C_PORC_VENT_CT_CP_AU)                                      RES_C_PORC_VEN_CT_CP_AU
,SUM(RES_C_PORC_VENT_CT_CP_CV)                                      RES_C_PORC_VEN_CT_CP_CV
,SUM(RES_C_PORC_VENT_CT_GL)                                      RES_C_PORC_VEN_CT_GL
,SUM(RES_C_PORC_VENT_CT_GL_HC)                                      RES_C_PORC_VEN_CT_GL_HC
,SUM(RES_C_PORC_VENT_CT_GL_NR)                                      RES_C_PORC_VEN_CT_GL_NR
,SUM(RES_C_PORC_VENT_CT_GL_IP)                                      RES_C_PORC_VEN_CT_GL_IP
,SUM(RES_C_PORC_VENT_CT_GL_IC)                                      RES_C_PORC_VEN_CT_GL_IC
,SUM(RES_C_PORC_VENT_CA)                                      RES_C_PORC_VEN_CA
,SUM(RES_C_PORC_VENT_CA_VT)                                      RES_C_PORC_VEN_CA_VT
,SUM(RES_C_PORC_VENT_CA_VT_PV)                                      RES_C_PORC_VEN_CA_VT_PV
,SUM(RES_C_PORC_VENT_CA_VT_OP)                                      RES_C_PORC_VEN_CA_VT_OP
,SUM(RES_C_PORC_VENT_CA_CF)                                      RES_C_PORC_VEN_CA_CF
,SUM(RES_C_PORC_VENT_CA_CF_PA)                                      RES_C_PORC_VEN_CA_CF_PA
,SUM(RES_C_PORC_VENT_CA_CF_NH)                                      RES_C_PORC_VEN_CA_CF_NH
,SUM(RES_C_PORC_VENT_CA_GF)                                      RES_C_PORC_VEN_CA_GF
,SUM(RES_C_PORC_VENT_CA_GF_IC)                                      RES_C_PORC_VEN_CA_GF_IC
,SUM(RES_C_PORC_VENT_CA_GF_OC)                                      RES_C_PORC_VEN_CA_GF_OC
,SUM(RES_C_PORC_VENT_CA_GF_CM)                                      RES_C_PORC_VEN_CA_GF_CM
,SUM(RES_C_PORC_VENT_CA_GF_IT)                                      RES_C_PORC_VEN_CA_GF_IT
,SUM(RES_C_PORC_VENT_CA_OC)                                      RES_C_PORC_VEN_CA_OC
,SUM(RES_C_PORC_VENT_CA_OC_OC1)                                      RES_C_PORC_VEN_CA_OC_OC1
,SUM(RES_C_PORC_VENT_CA_OC_OC2)                                      RES_C_PORC_VEN_CA_OC_OC2
,SUM(RES_C_PORC_VENT_CA_OC_OC3)                                      RES_C_PORC_VEN_CA_OC_OC3
,SUM(RES_C_PORC_VENT_CA_RI)                                      RES_C_PORC_VEN_CA_RI
,SUM(RES_C_PORC_VENT_CI)                                      RES_C_PORC_VEN_CI
,SUM(RES_C_PORC_VENT_CI_VB)                                      RES_C_PORC_VEN_CI_VB
,SUM(RES_C_PORC_VENT_CI_OV)                                      RES_C_PORC_VEN_CI_OV
,SUM(RES_C_PORC_VENT_CI_OV_IS)                                      RES_C_PORC_VEN_CI_OV_IS
,SUM(RES_C_PORC_VENT_CI_OV_IM)                                      RES_C_PORC_VEN_CI_OV_IM
,SUM(RES_C_PORC_VENT_CI_OV_OC)                                      RES_C_PORC_VEN_CI_OV_OC
,SUM(RES_C_PORC_VENT_CI_RF)                                      RES_C_PORC_VEN_CI_RF
,SUM(RES_C_PORC_VENT_CI_OI)                                      RES_C_PORC_VEN_CI_OI
,SUM(RES_C_PORC_VENT_CI_OI_OI1)                                      RES_C_PORC_VEN_CI_OI_OI1
,SUM(RES_C_PORC_VENT_CI_OI_OI2)                                      RES_C_PORC_VEN_CI_OI_OI2
,SUM(RES_C_PORC_VENT_CI_OI_OI3)                                      RES_C_PORC_VEN_CI_OI_OI3
,SUM(RES_C_PORC_VENT_IT)                                      RES_C_PORC_VEN_IT
,SUM(RES_C_PORC_VENT_UP)                                      RES_C_PORC_VEN_UP
,SUM(RES_C_PORC_VENT_UP_CC)                                      RES_C_PORC_VEN_UP_CC
,SUM(RES_C_PORC_VENT_UP_IR)                                      RES_C_PORC_VEN_UP_IR
,SUM(RES_C_PORC_VENT_UP2)                                      RES_C_PORC_VEN_UP2
,SUM(RES_C_PORC_VENT_CV)                                      RES_C_PORC_VEN_CV
,SUM(RES_C_PORC_VENT_VT)                                      RES_C_PORC_VEN_VT
,SUM(RES_C_PORC_VENT_CVG)                                      RES_C_PORC_VEN_CVG
,SUM(RES_C_PORC_VENT_TIR)                                      RES_C_PORC_VEN_TIR
,SUM(RES_C_PORC_VENT_VPN)                                      RES_C_PORC_VEN_VPN
,SUM(RES_C_PORC_VENT_UC)                                      RES_C_PORC_VEN_UC
,SUM(RES_C_PORC_VENT_UC_CO)                                      RES_C_PORC_VEN_UC_CO
,SUM(RES_C_PORC_VENT_UC_TI)                                      RES_C_PORC_VEN_UC_TI
,SUM(RES_C_PORC_VENT_UC_PR)                                      RES_C_PORC_VEN_UC_PR
,SUM(RES_C_PORC_VENT_TIR_C)                                      RES_C_PORC_VEN_TIR_C
,SUM(RES_C_PORC_VENT_VPN_C)                                      RES_C_PORC_VEN_VPN_C
,SUM(RES_C_VR_M_CON_UI)                                      RES_C_VR_M_CON_UI
,SUM(RES_C_VR_M_CON_UIP)                                      RES_C_VR_M_CON_UIP
,SUM(RES_C_VR_M_CON_UII)                                      RES_C_VR_M_CON_UII
,SUM(RES_C_VR_M_CON_CM)                                      RES_C_VR_M_CON_CM
,SUM(RES_C_VR_M_CON_CMP)                                      RES_C_VR_M_CON_CMP
,SUM(RES_C_VR_M_CON_CMI)                                      RES_C_VR_M_CON_CMI
,SUM(RES_C_VR_M_CON_GI)                                      RES_C_VR_M_CON_GI
,SUM(RES_C_VR_M_CON_CP)                                      RES_C_VR_M_CON_CP
,SUM(RES_C_VR_M_CON_CD)                                      RES_C_VR_M_CON_CD
,SUM(RES_C_VR_M_CON_CD_HC)                                      RES_C_VR_M_CON_CD_HC
,SUM(RES_C_VR_M_CON_CD_HC_HC)                                      RES_C_VR_M_CON_CD_HC_HC
,SUM(RES_C_VR_M_CON_CD_HC_GR)                                      RES_C_VR_M_CON_CD_HC_GR
,SUM(RES_C_VR_M_CON_CD_HI)                                      RES_C_VR_M_CON_CD_HI
,SUM(RES_C_VR_M_CON_CD_HI_HI)                                      RES_C_VR_M_CON_CD_HI_HI
,SUM(RES_C_VR_M_CON_CD_HI_GR)                                      RES_C_VR_M_CON_CD_HI_GR
,SUM(RES_C_VR_M_CON_CD_OH)                                      RES_C_VR_M_CON_CD_OH
,SUM(RES_C_VR_M_CON_CD_OH_OH)                                      RES_C_VR_M_CON_CD_OH_OH
,SUM(RES_C_VR_M_CON_CD_OH_GR)                                      RES_C_VR_M_CON_CD_OH_GR
,SUM(RES_C_VR_M_CON_CD_ID)                                      RES_C_VR_M_CON_CD_ID
,SUM(RES_C_VR_M_CON_CT)                                      RES_C_VR_M_CON_CT
,SUM(RES_C_VR_M_CON_CT_HG)                                      RES_C_VR_M_CON_CT_HG
,SUM(RES_C_VR_M_CON_CT_HG_HG)                                      RES_C_VR_M_CON_CT_HG_HG
,SUM(RES_C_VR_M_CON_CT_HG_GR)                                      RES_C_VR_M_CON_CT_HG_GR
,SUM(RES_C_VR_M_CON_CT_HV)                                      RES_C_VR_M_CON_CT_HV
,SUM(RES_C_VR_M_CON_CT_HV_HV)                                      RES_C_VR_M_CON_CT_HV_HV
,SUM(RES_C_VR_M_CON_CT_HV_GR)                                      RES_C_VR_M_CON_CT_HV_GR
,SUM(RES_C_VR_M_CON_CT_CP)                                      RES_C_VR_M_CON_CT_CP
,SUM(RES_C_VR_M_CON_CT_CP_SV)                                      RES_C_VR_M_CON_CT_CP_SV
,SUM(RES_C_VR_M_CON_CT_CP_GP)                                      RES_C_VR_M_CON_CT_CP_GP
,SUM(RES_C_VR_M_CON_CT_CP_GS)                                      RES_C_VR_M_CON_CT_CP_GS
,SUM(RES_C_VR_M_CON_CT_CP_AU)                                      RES_C_VR_M_CON_CT_CP_AU
,SUM(RES_C_VR_M_CON_CT_CP_CV)                                      RES_C_VR_M_CON_CT_CP_CV
,SUM(RES_C_VR_M_CON_CT_GL)                                      RES_C_VR_M_CON_CT_GL
,SUM(RES_C_VR_M_CON_CT_GL_HC)                                      RES_C_VR_M_CON_CT_GL_HC
,SUM(RES_C_VR_M_CON_CT_GL_NR)                                      RES_C_VR_M_CON_CT_GL_NR
,SUM(RES_C_VR_M_CON_CT_GL_IP)                                      RES_C_VR_M_CON_CT_GL_IP
,SUM(RES_C_VR_M_CON_CT_GL_IC)                                      RES_C_VR_M_CON_CT_GL_IC
,SUM(RES_C_VR_M_CON_CA)                                      RES_C_VR_M_CON_CA
,SUM(RES_C_VR_M_CON_CA_VT)                                      RES_C_VR_M_CON_CA_VT
,SUM(RES_C_VR_M_CON_CA_VT_PV)                                      RES_C_VR_M_CON_CA_VT_PV
,SUM(RES_C_VR_M_CON_CA_VT_OP)                                      RES_C_VR_M_CON_CA_VT_OP
,SUM(RES_C_VR_M_CON_CA_CF)                                      RES_C_VR_M_CON_CA_CF
,SUM(RES_C_VR_M_CON_CA_CF_PA)                                      RES_C_VR_M_CON_CA_CF_PA
,SUM(RES_C_VR_M_CON_CA_CF_NH)                                      RES_C_VR_M_CON_CA_CF_NH
,SUM(RES_C_VR_M_CON_CA_GF)                                      RES_C_VR_M_CON_CA_GF
,SUM(RES_C_VR_M_CON_CA_GF_IC)                                      RES_C_VR_M_CON_CA_GF_IC
,SUM(RES_C_VR_M_CON_CA_GF_OC)                                      RES_C_VR_M_CON_CA_GF_OC
,SUM(RES_C_VR_M_CON_CA_GF_CM)                                      RES_C_VR_M_CON_CA_GF_CM
,SUM(RES_C_VR_M_CON_CA_GF_IT)                                      RES_C_VR_M_CON_CA_GF_IT
,SUM(RES_C_VR_M_CON_CA_OC)                                      RES_C_VR_M_CON_CA_OC
,SUM(RES_C_VR_M_CON_CA_OC_OC1)                                      RES_C_VR_M_CON_CA_OC_OC1
,SUM(RES_C_VR_M_CON_CA_OC_OC2)                                      RES_C_VR_M_CON_CA_OC_OC2
,SUM(RES_C_VR_M_CON_CA_OC_OC3)                                      RES_C_VR_M_CON_CA_OC_OC3
,SUM(RES_C_VR_M_CON_CA_RI)                                      RES_C_VR_M_CON_CA_RI
,SUM(RES_C_VR_M_CON_CI)                                      RES_C_VR_M_CON_CI
,SUM(RES_C_VR_M_CON_CI_VB)                                      RES_C_VR_M_CON_CI_VB
,SUM(RES_C_VR_M_CON_CI_OV)                                      RES_C_VR_M_CON_CI_OV
,SUM(RES_C_VR_M_CON_CI_OV_IS)                                      RES_C_VR_M_CON_CI_OV_IS
,SUM(RES_C_VR_M_CON_CI_OV_IM)                                      RES_C_VR_M_CON_CI_OV_IM
,SUM(RES_C_VR_M_CON_CI_OV_OC)                                      RES_C_VR_M_CON_CI_OV_OC
,SUM(RES_C_VR_M_CON_CI_RF)                                      RES_C_VR_M_CON_CI_RF
,SUM(RES_C_VR_M_CON_CI_OI)                                      RES_C_VR_M_CON_CI_OI
,SUM(RES_C_VR_M_CON_CI_OI_OI1)                                      RES_C_VR_M_CON_CI_OI_OI1
,SUM(RES_C_VR_M_CON_CI_OI_OI2)                                      RES_C_VR_M_CON_CI_OI_OI2
,SUM(RES_C_VR_M_CON_CI_OI_OI3)                                      RES_C_VR_M_CON_CI_OI_OI3
,SUM(RES_C_VR_M_CON_IT)                                      RES_C_VR_M_CON_IT
,SUM(RES_C_VR_M_CON_UP)                                      RES_C_VR_M_CON_UP
,SUM(RES_C_VR_M_CON_UP_CC)                                      RES_C_VR_M_CON_UP_CC
,SUM(RES_C_VR_M_CON_UP_IR)                                      RES_C_VR_M_CON_UP_IR
,SUM(RES_C_VR_M_CON_UP2)                                      RES_C_VR_M_CON_UP2
,SUM(RES_C_VR_M_CON_CV)                                      RES_C_VR_M_CON_CV
,SUM(RES_C_VR_M_CON_VT)                                      RES_C_VR_M_CON_VT
,SUM(RES_C_VR_M_VEN_UI)                                      RES_C_VR_M_VEN_UI
,SUM(RES_C_VR_M_VEN_UIP)                                      RES_C_VR_M_VEN_UIP
,SUM(RES_C_VR_M_VEN_UII)                                      RES_C_VR_M_VEN_UII
,SUM(RES_C_VR_M_VEN_CM)                                      RES_C_VR_M_VEN_CM
,SUM(RES_C_VR_M_VEN_CMP)                                      RES_C_VR_M_VEN_CMP
,SUM(RES_C_VR_M_VEN_CMI)                                      RES_C_VR_M_VEN_CMI
,SUM(RES_C_VR_M_VEN_GI)                                      RES_C_VR_M_VEN_GI
,SUM(RES_C_VR_M_VEN_CP)                                      RES_C_VR_M_VEN_CP
,SUM(RES_C_VR_M_VEN_CD)                                      RES_C_VR_M_VEN_CD
,SUM(RES_C_VR_M_VEN_CD_HC)                                      RES_C_VR_M_VEN_CD_HC
,SUM(RES_C_VR_M_VEN_CD_HC_HC)                                      RES_C_VR_M_VEN_CD_HC_HC
,SUM(RES_C_VR_M_VEN_CD_HC_GR)                                      RES_C_VR_M_VEN_CD_HC_GR
,SUM(RES_C_VR_M_VEN_CD_HI)                                      RES_C_VR_M_VEN_CD_HI
,SUM(RES_C_VR_M_VEN_CD_HI_HI)                                      RES_C_VR_M_VEN_CD_HI_HI
,SUM(RES_C_VR_M_VEN_CD_HI_GR)                                      RES_C_VR_M_VEN_CD_HI_GR
,SUM(RES_C_VR_M_VEN_CD_OH)                                      RES_C_VR_M_VEN_CD_OH
,SUM(RES_C_VR_M_VEN_CD_OH_OH)                                      RES_C_VR_M_VEN_CD_OH_OH
,SUM(RES_C_VR_M_VEN_CD_OH_GR)                                      RES_C_VR_M_VEN_CD_OH_GR
,SUM(RES_C_VR_M_VEN_CD_ID)                                      RES_C_VR_M_VEN_CD_ID
,SUM(RES_C_VR_M_VEN_CT)                                      RES_C_VR_M_VEN_CT
,SUM(RES_C_VR_M_VEN_CT_HG)                                      RES_C_VR_M_VEN_CT_HG
,SUM(RES_C_VR_M_VEN_CT_HG_HG)                                      RES_C_VR_M_VEN_CT_HG_HG
,SUM(RES_C_VR_M_VEN_CT_HG_GR)                                      RES_C_VR_M_VEN_CT_HG_GR
,SUM(RES_C_VR_M_VEN_CT_HV)                                      RES_C_VR_M_VEN_CT_HV
,SUM(RES_C_VR_M_VEN_CT_HV_HV)                                      RES_C_VR_M_VEN_CT_HV_HV
,SUM(RES_C_VR_M_VEN_CT_HV_GR)                                      RES_C_VR_M_VEN_CT_HV_GR
,SUM(RES_C_VR_M_VEN_CT_CP)                                      RES_C_VR_M_VEN_CT_CP
,SUM(RES_C_VR_M_VEN_CT_CP_SV)                                      RES_C_VR_M_VEN_CT_CP_SV
,SUM(RES_C_VR_M_VEN_CT_CP_GP)                                      RES_C_VR_M_VEN_CT_CP_GP
,SUM(RES_C_VR_M_VEN_CT_CP_GS)                                      RES_C_VR_M_VEN_CT_CP_GS
,SUM(RES_C_VR_M_VEN_CT_CP_AU)                                      RES_C_VR_M_VEN_CT_CP_AU
,SUM(RES_C_VR_M_VEN_CT_CP_CV)                                      RES_C_VR_M_VEN_CT_CP_CV
,SUM(RES_C_VR_M_VEN_CT_GL)                                      RES_C_VR_M_VEN_CT_GL
,SUM(RES_C_VR_M_VEN_CT_GL_HC)                                      RES_C_VR_M_VEN_CT_GL_HC
,SUM(RES_C_VR_M_VEN_CT_GL_NR)                                      RES_C_VR_M_VEN_CT_GL_NR
,SUM(RES_C_VR_M_VEN_CT_GL_IP)                                      RES_C_VR_M_VEN_CT_GL_IP
,SUM(RES_C_VR_M_VEN_CT_GL_IC)                                      RES_C_VR_M_VEN_CT_GL_IC
,SUM(RES_C_VR_M_VEN_CA)                                      RES_C_VR_M_VEN_CA
,SUM(RES_C_VR_M_VEN_CA_VT)                                      RES_C_VR_M_VEN_CA_VT
,SUM(RES_C_VR_M_VEN_CA_VT_PV)                                      RES_C_VR_M_VEN_CA_VT_PV
,SUM(RES_C_VR_M_VEN_CA_VT_OP)                                      RES_C_VR_M_VEN_CA_VT_OP
,SUM(RES_C_VR_M_VEN_CA_CF)                                      RES_C_VR_M_VEN_CA_CF
,SUM(RES_C_VR_M_VEN_CA_CF_PA)                                      RES_C_VR_M_VEN_CA_CF_PA
,SUM(RES_C_VR_M_VEN_CA_CF_NH)                                      RES_C_VR_M_VEN_CA_CF_NH
,SUM(RES_C_VR_M_VEN_CA_GF)                                      RES_C_VR_M_VEN_CA_GF
,SUM(RES_C_VR_M_VEN_CA_GF_IC)                                      RES_C_VR_M_VEN_CA_GF_IC
,SUM(RES_C_VR_M_VEN_CA_GF_OC)                                      RES_C_VR_M_VEN_CA_GF_OC
,SUM(RES_C_VR_M_VEN_CA_GF_CM)                                      RES_C_VR_M_VEN_CA_GF_CM
,SUM(RES_C_VR_M_VEN_CA_GF_IT)                                      RES_C_VR_M_VEN_CA_GF_IT
,SUM(RES_C_VR_M_VEN_CA_OC)                                      RES_C_VR_M_VEN_CA_OC
,SUM(RES_C_VR_M_VEN_CA_OC_OC1)                                      RES_C_VR_M_VEN_CA_OC_OC1
,SUM(RES_C_VR_M_VEN_CA_OC_OC2)                                      RES_C_VR_M_VEN_CA_OC_OC2
,SUM(RES_C_VR_M_VEN_CA_OC_OC3)                                      RES_C_VR_M_VEN_CA_OC_OC3
,SUM(RES_C_VR_M_VEN_CA_RI)                                      RES_C_VR_M_VEN_CA_RI
,SUM(RES_C_VR_M_VEN_CI)                                      RES_C_VR_M_VEN_CI
,SUM(RES_C_VR_M_VEN_CI_VB)                                      RES_C_VR_M_VEN_CI_VB
,SUM(RES_C_VR_M_VEN_CI_OV)                                      RES_C_VR_M_VEN_CI_OV
,SUM(RES_C_VR_M_VEN_CI_OV_IS)                                      RES_C_VR_M_VEN_CI_OV_IS
,SUM(RES_C_VR_M_VEN_CI_OV_IM)                                      RES_C_VR_M_VEN_CI_OV_IM
,SUM(RES_C_VR_M_VEN_CI_OV_OC)                                      RES_C_VR_M_VEN_CI_OV_OC
,SUM(RES_C_VR_M_VEN_CI_RF)                                      RES_C_VR_M_VEN_CI_RF
,SUM(RES_C_VR_M_VEN_CI_OI)                                      RES_C_VR_M_VEN_CI_OI
,SUM(RES_C_VR_M_VEN_CI_OI_OI1)                                      RES_C_VR_M_VEN_CI_OI_OI1
,SUM(RES_C_VR_M_VEN_CI_OI_OI2)                                      RES_C_VR_M_VEN_CI_OI_OI2
,SUM(RES_C_VR_M_VEN_CI_OI_OI3)                                      RES_C_VR_M_VEN_CI_OI_OI3
,SUM(RES_C_VR_M_VEN_IT)                                      RES_C_VR_M_VEN_IT
,SUM(RES_C_VR_M_VEN_UP)                                      RES_C_VR_M_VEN_UP
,SUM(RES_C_VR_M_VEN_UP_CC)                                      RES_C_VR_M_VEN_UP_CC
,SUM(RES_C_VR_M_VEN_UP_IR)                                      RES_C_VR_M_VEN_UP_IR
,SUM(RES_C_VR_M_VEN_UP2)                                      RES_C_VR_M_VEN_UP2
,SUM(RES_C_VR_M_VEN_CV)                                      RES_C_VR_M_VEN_CV
,SUM(RES_C_VR_M_VEN_VT)                                      RES_C_VR_M_VEN_VT
,SUM(RES_C_VR_UNI_UI)                                      RES_C_VR_UNI_UI
,SUM(RES_C_VR_UNI_UIP)                                      RES_C_VR_UNI_UIP
,SUM(RES_C_VR_UNI_UII)                                      RES_C_VR_UNI_UII
,SUM(RES_C_VR_UNI_CM)                                      RES_C_VR_UNI_CM
,SUM(RES_C_VR_UNI_CMP)                                      RES_C_VR_UNI_CMP
,SUM(RES_C_VR_UNI_CMI)                                      RES_C_VR_UNI_CMI
,SUM(RES_C_VR_UNI_GI)                                      RES_C_VR_UNI_GI
,SUM(RES_C_VR_UNI_CP)                                      RES_C_VR_UNI_CP
,SUM(RES_C_VR_UNI_CD)                                      RES_C_VR_UNI_CD
,SUM(RES_C_VR_UNI_CD_HC)                                      RES_C_VR_UNI_CD_HC
,SUM(RES_C_VR_UNI_CD_HC_HC)                                      RES_C_VR_UNI_CD_HC_HC
,SUM(RES_C_VR_UNI_CD_HC_GR)                                      RES_C_VR_UNI_CD_HC_GR
,SUM(RES_C_VR_UNI_CD_HI)                                      RES_C_VR_UNI_CD_HI
,SUM(RES_C_VR_UNI_CD_HI_HI)                                      RES_C_VR_UNI_CD_HI_HI
,SUM(RES_C_VR_UNI_CD_HI_GR)                                      RES_C_VR_UNI_CD_HI_GR
,SUM(RES_C_VR_UNI_CD_OH)                                      RES_C_VR_UNI_CD_OH
,SUM(RES_C_VR_UNI_CD_OH_OH)                                      RES_C_VR_UNI_CD_OH_OH
,SUM(RES_C_VR_UNI_CD_OH_GR)                                      RES_C_VR_UNI_CD_OH_GR
,SUM(RES_C_VR_UNI_CD_ID)                                      RES_C_VR_UNI_CD_ID
,SUM(RES_C_VR_UNI_CT)                                      RES_C_VR_UNI_CT
,SUM(RES_C_VR_UNI_CT_HG)                                      RES_C_VR_UNI_CT_HG
,SUM(RES_C_VR_UNI_CT_HG_HG)                                      RES_C_VR_UNI_CT_HG_HG
,SUM(RES_C_VR_UNI_CT_HG_GR)                                      RES_C_VR_UNI_CT_HG_GR
,SUM(RES_C_VR_UNI_CT_HV)                                      RES_C_VR_UNI_CT_HV
,SUM(RES_C_VR_UNI_CT_HV_HV)                                      RES_C_VR_UNI_CT_HV_HV
,SUM(RES_C_VR_UNI_CT_HV_GR)                                      RES_C_VR_UNI_CT_HV_GR
,SUM(RES_C_VR_UNI_CT_CP)                                      RES_C_VR_UNI_CT_CP
,SUM(RES_C_VR_UNI_CT_CP_SV)                                      RES_C_VR_UNI_CT_CP_SV
,SUM(RES_C_VR_UNI_CT_CP_GP)                                      RES_C_VR_UNI_CT_CP_GP
,SUM(RES_C_VR_UNI_CT_CP_GS)                                      RES_C_VR_UNI_CT_CP_GS
,SUM(RES_C_VR_UNI_CT_CP_AU)                                      RES_C_VR_UNI_CT_CP_AU
,SUM(RES_C_VR_UNI_CT_CP_CV)                                      RES_C_VR_UNI_CT_CP_CV
,SUM(RES_C_VR_UNI_CT_GL)                                      RES_C_VR_UNI_CT_GL
,SUM(RES_C_VR_UNI_CT_GL_HC)                                      RES_C_VR_UNI_CT_GL_HC
,SUM(RES_C_VR_UNI_CT_GL_NR)                                      RES_C_VR_UNI_CT_GL_NR
,SUM(RES_C_VR_UNI_CT_GL_IP)                                      RES_C_VR_UNI_CT_GL_IP
,SUM(RES_C_VR_UNI_CT_GL_IC)                                      RES_C_VR_UNI_CT_GL_IC
,SUM(RES_C_VR_UNI_CA)                                      RES_C_VR_UNI_CA
,SUM(RES_C_VR_UNI_CA_VT)                                      RES_C_VR_UNI_CA_VT
,SUM(RES_C_VR_UNI_CA_VT_PV)                                      RES_C_VR_UNI_CA_VT_PV
,SUM(RES_C_VR_UNI_CA_VT_OP)                                      RES_C_VR_UNI_CA_VT_OP
,SUM(RES_C_VR_UNI_CA_CF)                                      RES_C_VR_UNI_CA_CF
,SUM(RES_C_VR_UNI_CA_CF_PA)                                      RES_C_VR_UNI_CA_CF_PA
,SUM(RES_C_VR_UNI_CA_CF_NH)                                      RES_C_VR_UNI_CA_CF_NH
,SUM(RES_C_VR_UNI_CA_GF)                                      RES_C_VR_UNI_CA_GF
,SUM(RES_C_VR_UNI_CA_GF_IC)                                      RES_C_VR_UNI_CA_GF_IC
,SUM(RES_C_VR_UNI_CA_GF_OC)                                      RES_C_VR_UNI_CA_GF_OC
,SUM(RES_C_VR_UNI_CA_GF_CM)                                      RES_C_VR_UNI_CA_GF_CM
,SUM(RES_C_VR_UNI_CA_GF_IT)                                      RES_C_VR_UNI_CA_GF_IT
,SUM(RES_C_VR_UNI_CA_OC)                                      RES_C_VR_UNI_CA_OC
,SUM(RES_C_VR_UNI_CA_OC_OC1)                                      RES_C_VR_UNI_CA_OC_OC1
,SUM(RES_C_VR_UNI_CA_OC_OC2)                                      RES_C_VR_UNI_CA_OC_OC2
,SUM(RES_C_VR_UNI_CA_OC_OC3)                                      RES_C_VR_UNI_CA_OC_OC3
,SUM(RES_C_VR_UNI_CA_RI)                                      RES_C_VR_UNI_CA_RI
,SUM(RES_C_VR_UNI_CI)                                      RES_C_VR_UNI_CI
,SUM(RES_C_VR_UNI_CI_VB)                                      RES_C_VR_UNI_CI_VB
,SUM(RES_C_VR_UNI_CI_OV)                                      RES_C_VR_UNI_CI_OV
,SUM(RES_C_VR_UNI_CI_OV_IS)                                      RES_C_VR_UNI_CI_OV_IS
,SUM(RES_C_VR_UNI_CI_OV_IM)                                      RES_C_VR_UNI_CI_OV_IM
,SUM(RES_C_VR_UNI_CI_OV_OC)                                      RES_C_VR_UNI_CI_OV_OC
,SUM(RES_C_VR_UNI_CI_RF)                                      RES_C_VR_UNI_CI_RF
,SUM(RES_C_VR_UNI_CI_OI)                                      RES_C_VR_UNI_CI_OI
,SUM(RES_C_VR_UNI_CI_OI_OI1)                                      RES_C_VR_UNI_CI_OI_OI1
,SUM(RES_C_VR_UNI_CI_OI_OI2)                                      RES_C_VR_UNI_CI_OI_OI2
,SUM(RES_C_VR_UNI_CI_OI_OI3)                                      RES_C_VR_UNI_CI_OI_OI3
,SUM(RES_C_VR_UNI_IT)                                      RES_C_VR_UNI_IT
,SUM(RES_C_VR_UNI_UP)                                      RES_C_VR_UNI_UP
,SUM(RES_C_VR_UNI_UP_CC)                                      RES_C_VR_UNI_UP_CC
,SUM(RES_C_VR_UNI_UP_IR)                                      RES_C_VR_UNI_UP_IR
,SUM(RES_C_VR_UNI_UP2)                                      RES_C_VR_UNI_UP2
,SUM(RES_C_VR_UNI_CV)                                      RES_C_VR_UNI_CV
,SUM(RES_C_VR_UNI_VT)                                      RES_C_VR_UNI_VT
,SUM(RES_C_EJE_UI)                                      RES_C_EJE_UI
,SUM(RES_C_EJE_UIP)                                     RES_C_EJE_UIP 
,SUM(RES_C_EJE_UII)                                      RES_C_EJE_UII
,SUM(RES_C_EJE_CM)                                      RES_C_EJE_CM
,SUM(RES_C_EJE_CMP)                                      RES_C_EJE_CMP
,SUM(RES_C_EJE_CMI)                                      RES_C_EJE_CMI
,SUM(RES_C_EJE_GI)                                      RES_C_EJE_GI
,SUM(RES_C_EJE_CP)                                      RES_C_EJE_CP
,SUM(RES_C_EJE_CD)                                      RES_C_EJE_CD
,SUM(RES_C_EJE_CD_HC)                                      RES_C_EJE_CD_HC
,SUM(RES_C_EJE_CD_HC_HC)                                      RES_C_EJE_CD_HC_HC
,SUM(RES_C_EJE_CD_HC_GR)                                      RES_C_EJE_CD_HC_GR
,SUM(RES_C_EJE_CD_HI)                                      RES_C_EJE_CD_HI
,SUM(RES_C_EJE_CD_HI_HI)                                      RES_C_EJE_CD_HI_HI
,SUM(RES_C_EJE_CD_HI_GR)                                      RES_C_EJE_CD_HI_GR
,SUM(RES_C_EJE_CD_OH)                                      RES_C_EJE_CD_OH
,SUM(RES_C_EJE_CD_OH_OH)                                      RES_C_EJE_CD_OH_OH
,SUM(RES_C_EJE_CD_OH_GR)                                      RES_C_EJE_CD_OH_GR
,SUM(RES_C_EJE_CD_ID)                                      RES_C_EJE_CD_ID
,SUM(RES_C_EJE_CT)                                      RES_C_EJE_CT
,SUM(RES_C_EJE_CT_HG)                                      RES_C_EJE_CT_HG
,SUM(RES_C_EJE_CT_HG_HG)                                      RES_C_EJE_CT_HG_HG
,SUM(RES_C_EJE_CT_HG_GR)                                      RES_C_EJE_CT_HG_GR
,SUM(RES_C_EJE_CT_HV)                                      RES_C_EJE_CT_HV
,SUM(RES_C_EJE_CT_HV_HV)                                      RES_C_EJE_CT_HV_HV
,SUM(RES_C_EJE_CT_HV_GR)                                      RES_C_EJE_CT_HV_GR
,SUM(RES_C_EJE_CT_CP)                                      RES_C_EJE_CT_CP
,SUM(RES_C_EJE_CT_CP_SV)                                      RES_C_EJE_CT_CP_SV
,SUM(RES_C_EJE_CT_CP_GP)                                      RES_C_EJE_CT_CP_GP
,SUM(RES_C_EJE_CT_CP_GS)                                      RES_C_EJE_CT_CP_GS
,SUM(RES_C_EJE_CT_CP_AU)                                      RES_C_EJE_CT_CP_AU
,SUM(RES_C_EJE_CT_CP_CV)                                      RES_C_EJE_CT_CP_CV
,SUM(RES_C_EJE_CT_GL)                                      RES_C_EJE_CT_GL
,SUM(RES_C_EJE_CT_GL_HC)                                      RES_C_EJE_CT_GL_HC
,SUM(RES_C_EJE_CT_GL_NR)                                      RES_C_EJE_CT_GL_NR
,SUM(RES_C_EJE_CT_GL_IP)                                      RES_C_EJE_CT_GL_IP
,SUM(RES_C_EJE_CT_GL_IC)                                      RES_C_EJE_CT_GL_IC
,SUM(RES_C_EJE_CA)                                      RES_C_EJE_CA
,SUM(RES_C_EJE_CA_VT)                                      RES_C_EJE_CA_VT
,SUM(RES_C_EJE_CA_VT_PV)                                      RES_C_EJE_CA_VT_PV
,SUM(RES_C_EJE_CA_VT_OP)                                      RES_C_EJE_CA_VT_OP
,SUM(RES_C_EJE_CA_CF)                                      RES_C_EJE_CA_CF
,SUM(RES_C_EJE_CA_CF_PA)                                      RES_C_EJE_CA_CF_PA
,SUM(RES_C_EJE_CA_CF_NH)                                      RES_C_EJE_CA_CF_NH
,SUM(RES_C_EJE_CA_GF)                                      RES_C_EJE_CA_GF
,SUM(RES_C_EJE_CA_GF_IC)                                      RES_C_EJE_CA_GF_IC
,SUM(RES_C_EJE_CA_GF_OC)                                      RES_C_EJE_CA_GF_OC
,SUM(RES_C_EJE_CA_GF_CM)                                      RES_C_EJE_CA_GF_CM
,SUM(RES_C_EJE_CA_GF_IT)                                      RES_C_EJE_CA_GF_IT
,SUM(RES_C_EJE_CA_OC)                                      RES_C_EJE_CA_OC
,SUM(RES_C_EJE_CA_OC_OC1)                                      RES_C_EJE_CA_OC_OC1
,SUM(RES_C_EJE_CA_OC_OC2)                                      RES_C_EJE_CA_OC_OC2
,SUM(RES_C_EJE_CA_OC_OC3)                                      RES_C_EJE_CA_OC_OC3
,SUM(RES_C_EJE_CA_RI)                                      RES_C_EJE_CA_RI
,SUM(RES_C_EJE_CI)                                      RES_C_EJE_CI
,SUM(RES_C_EJE_CI_VB)                                      RES_C_EJE_CI_VB
,SUM(RES_C_EJE_CI_OV)                                      RES_C_EJE_CI_OV
,SUM(RES_C_EJE_CI_OV_IS)                                      RES_C_EJE_CI_OV_IS
,SUM(RES_C_EJE_CI_OV_IM)                                      RES_C_EJE_CI_OV_IM
,SUM(RES_C_EJE_CI_OV_OC)                                      RES_C_EJE_CI_OV_OC
,SUM(RES_C_EJE_CI_RF)                                      RES_C_EJE_CI_RF
,SUM(RES_C_EJE_CI_OI)                                      RES_C_EJE_CI_OI
,SUM(RES_C_EJE_CI_OI_OI1)                                      RES_C_EJE_CI_OI_OI1
,SUM(RES_C_EJE_CI_OI_OI2)                                      RES_C_EJE_CI_OI_OI2
,SUM(RES_C_EJE_CI_OI_OI3)                                      RES_C_EJE_CI_OI_OI3
,SUM(RES_C_EJE_IT)                                      RES_C_EJE_IT
,SUM(RES_C_EJE_UP)                                      RES_C_EJE_UP
,SUM(RES_C_EJE_UP_CC)                                      RES_C_EJE_UP_CC
,SUM(RES_C_EJE_UP_IR)                                      RES_C_EJE_UP_IR
,SUM(RES_C_EJE_UP2)                                      RES_C_EJE_UP2
,SUM(RES_C_EJE_CV)                                      RES_C_EJE_CV
,SUM(RES_C_EJE_VT)                                      RES_C_EJE_VT
,SUM(RES_C_EJE_CVG)                                      RES_C_EJE_CVG
         
   
   FROM TB_SELECCION
          ,TB_RESUMEN
          ,TB_CONSOLIDADOS
	      WHERE SEL_DET_PRO_ID IS NOT NULL
      AND SEL_DET_PRO_ID = RES_DET_PRO_ID
      AND SEL_DET_ETAPA  = RES_DET_ETAPA
      AND SEL_MODELO  = RES_MODELO
	    AND CONS_CONS      = 'N'
       AND SEL_CONS_ID  = 'N'
      AND RES_FECHA BETWEEN CASE CONS_FEC_GEN_DES
          WHEN '0000-00-00' THEN RES_FECHA 
          ELSE CONS_FEC_GEN_DES
                            END
      AND CASE CONS_FEC_GEN_HAS
          WHEN '0000-00-00' THEN RES_FECHA 
          ELSE CONS_FEC_GEN_HAS
                            END
							
							GROUP BY RES_FECHA;
 
 DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

   OPEN c_resumen_consolidado;
   obtener_c_resumen_consolidado: LOOP
   FETCH c_resumen_consolidado INTO 
   
v_res_c_cons_id				,
v_res_fecha,
v_res_total_unidades,
v_res_area_promedio_unidad,
v_res_total_area_construida,
v_res_total_area_vendible,
v_res_area_util_lote_asignada_subproyecto,
v_res_densidad_indice_ocupacion,
v_res_valor_metro_cuadrado_lote_urbanizado,
v_res_numero_parqueos,
v_res_relacion_parqueos_numero_parqueos_por_unidad,
v_res_numero_depositos,
v_res_fecha_inicio_y_terminacion_ventas,
v_res_fecha_inicio_y_terminacion_construccion,
v_res_ritmo_ventas_mensual_promedio,
v_res_punto_equilibrio_unidades,
v_res_tasa_promedio_incremento_precios,
v_res_porcentaje_ventas_nuevogar,
v_res_fecha_presupuesto,
v_res_tasa_promedio_incremento_presupuesto,
v_res_c_tot_ui,
v_res_c_tot_uip,
v_res_c_tot_uii,
v_res_c_tot_cm,
v_res_c_tot_cmp,
v_res_c_tot_cmi,
v_res_c_tot_gi,
v_res_c_tot_cp,
v_res_c_tot_cd,
v_res_c_tot_cd_hc,
v_res_c_tot_cd_hc_hc,
v_res_c_tot_cd_hc_gr,
v_res_c_tot_cd_hi,
v_res_c_tot_cd_hi_hi,
v_res_c_tot_cd_hi_gr,
v_res_c_tot_cd_oh,
v_res_c_tot_cd_oh_oh,
v_res_c_tot_cd_oh_gr,
v_res_c_tot_cd_id,
v_res_c_tot_ct,
v_res_c_tot_ct_hg,
v_res_c_tot_ct_hg_hg,
v_res_c_tot_ct_hg_gr,
v_res_c_tot_ct_hv,
v_res_c_tot_ct_hv_hv,
v_res_c_tot_ct_hv_gr,
v_res_c_tot_ct_cp,
v_res_c_tot_ct_cp_sv,
v_res_c_tot_ct_cp_gp,
v_res_c_tot_ct_cp_gs,
v_res_c_tot_ct_cp_au,
v_res_c_tot_ct_cp_cv,
v_res_c_tot_ct_gl,
v_res_c_tot_ct_gl_hc,
v_res_c_tot_ct_gl_nr,
v_res_c_tot_ct_gl_ip,
v_res_c_tot_ct_gl_ic,
v_res_c_tot_ca,
v_res_c_tot_ca_vt,
v_res_c_tot_ca_vt_pv,
v_res_c_tot_ca_vt_op,
v_res_c_tot_ca_cf,
v_res_c_tot_ca_cf_pa,
v_res_c_tot_ca_cf_nh,
v_res_c_tot_ca_gf,
v_res_c_tot_ca_gf_ic,
v_res_c_tot_ca_gf_oc,
v_res_c_tot_ca_gf_cm,
v_res_c_tot_ca_gf_it,
v_res_c_tot_ca_oc,
v_res_c_tot_ca_oc_oc1,
v_res_c_tot_ca_oc_oc2,
v_res_c_tot_ca_oc_oc3,
v_res_c_tot_ca_ri,
v_res_c_tot_ci,
v_res_c_tot_ci_vb,
v_res_c_tot_ci_ov,
v_res_c_tot_ci_ov_is,
v_res_c_tot_ci_ov_im,
v_res_c_tot_ci_ov_oc,
v_res_c_tot_ci_rf,
v_res_c_tot_ci_oi,
v_res_c_tot_ci_oi_oi1,
v_res_c_tot_ci_oi_oi2,
v_res_c_tot_ci_oi_oi3,
v_res_c_tot_it,
v_res_c_tot_up,
v_res_c_tot_up_cc,
v_res_c_tot_up_ir,
v_res_c_tot_up2,
v_res_c_tot_cv,
v_res_c_tot_vt,
v_res_c_tot_cvg,
v_res_c_tot_tir,
v_res_c_tot_vpn,
v_res_c_tot_uc,
v_res_c_tot_uc_co,
v_res_c_tot_uc_ti,
v_res_c_tot_uc_pr,
v_res_c_tot_tir_c,
v_res_c_tot_vpn_c,
v_res_c_porc_vent_ui,
v_res_c_porc_vent_uip,
v_res_c_porc_vent_uii,
v_res_c_porc_vent_cm,
v_res_c_porc_vent_cmp,
v_res_c_porc_vent_cmi,
v_res_c_porc_vent_gi,
v_res_c_porc_vent_cp,
v_res_c_porc_vent_cd,
v_res_c_porc_vent_cd_hc,
v_res_c_porc_vent_cd_hc_hc,
v_res_c_porc_vent_cd_hc_gr,
v_res_c_porc_vent_cd_hi,
v_res_c_porc_vent_cd_hi_hi,
v_res_c_porc_vent_cd_hi_gr,
v_res_c_porc_vent_cd_oh,
v_res_c_porc_vent_cd_oh_oh,
v_res_c_porc_vent_cd_oh_gr,
v_res_c_porc_vent_cd_id,
v_res_c_porc_vent_ct,
v_res_c_porc_vent_ct_hg,
v_res_c_porc_vent_ct_hg_hg,
v_res_c_porc_vent_ct_hg_gr,
v_res_c_porc_vent_ct_hv,
v_res_c_porc_vent_ct_hv_hv,
v_res_c_porc_vent_ct_hv_gr,
v_res_c_porc_vent_ct_cp,
v_res_c_porc_vent_ct_cp_sv,
v_res_c_porc_vent_ct_cp_gp,
v_res_c_porc_vent_ct_cp_gs,
v_res_c_porc_vent_ct_cp_au,
v_res_c_porc_vent_ct_cp_cv,
v_res_c_porc_vent_ct_gl,
v_res_c_porc_vent_ct_gl_hc,
v_res_c_porc_vent_ct_gl_nr,
v_res_c_porc_vent_ct_gl_ip,
v_res_c_porc_vent_ct_gl_ic,
v_res_c_porc_vent_ca,
v_res_c_porc_vent_ca_vt,
v_res_c_porc_vent_ca_vt_pv,
v_res_c_porc_vent_ca_vt_op,
v_res_c_porc_vent_ca_cf,
v_res_c_porc_vent_ca_cf_pa,
v_res_c_porc_vent_ca_cf_nh,
v_res_c_porc_vent_ca_gf,
v_res_c_porc_vent_ca_gf_ic,
v_res_c_porc_vent_ca_gf_oc,
v_res_c_porc_vent_ca_gf_cm,
v_res_c_porc_vent_ca_gf_it,
v_res_c_porc_vent_ca_oc,
v_res_c_porc_vent_ca_oc_oc1,
v_res_c_porc_vent_ca_oc_oc2,
v_res_c_porc_vent_ca_oc_oc3,
v_res_c_porc_vent_ca_ri,
v_res_c_porc_vent_ci,
v_res_c_porc_vent_ci_vb,
v_res_c_porc_vent_ci_ov,
v_res_c_porc_vent_ci_ov_is,
v_res_c_porc_vent_ci_ov_im,
v_res_c_porc_vent_ci_ov_oc,
v_res_c_porc_vent_ci_rf,
v_res_c_porc_vent_ci_oi,
v_res_c_porc_vent_ci_oi_oi1,
v_res_c_porc_vent_ci_oi_oi2,
v_res_c_porc_vent_ci_oi_oi3,
v_res_c_porc_vent_it,
v_res_c_porc_vent_up,
v_res_c_porc_vent_up_cc,
v_res_c_porc_vent_up_ir,
v_res_c_porc_vent_up2,
v_res_c_porc_vent_cv,
v_res_c_porc_vent_vt,
v_res_c_porc_vent_cvg,
v_res_c_porc_vent_tir,
v_res_c_porc_vent_vpn,
v_res_c_porc_vent_uc,
v_res_c_porc_vent_uc_co,
v_res_c_porc_vent_uc_ti,
v_res_c_porc_vent_uc_pr,
v_res_c_porc_vent_tir_c,
v_res_c_porc_vent_vpn_c,
v_res_c_vr_m_con_ui,
v_res_c_vr_m_con_uip,
v_res_c_vr_m_con_uii,
v_res_c_vr_m_con_cm,
v_res_c_vr_m_con_cmp,
v_res_c_vr_m_con_cmi,
v_res_c_vr_m_con_gi,
v_res_c_vr_m_con_cp,
v_res_c_vr_m_con_cd,
v_res_c_vr_m_con_cd_hc,
v_res_c_vr_m_con_cd_hc_hc,
v_res_c_vr_m_con_cd_hc_gr,
v_res_c_vr_m_con_cd_hi,
v_res_c_vr_m_con_cd_hi_hi,
v_res_c_vr_m_con_cd_hi_gr,
v_res_c_vr_m_con_cd_oh,
v_res_c_vr_m_con_cd_oh_oh,
v_res_c_vr_m_con_cd_oh_gr,
v_res_c_vr_m_con_cd_id,
v_res_c_vr_m_con_ct,
v_res_c_vr_m_con_ct_hg,
v_res_c_vr_m_con_ct_hg_hg,
v_res_c_vr_m_con_ct_hg_gr,
v_res_c_vr_m_con_ct_hv,
v_res_c_vr_m_con_ct_hv_hv,
v_res_c_vr_m_con_ct_hv_gr,
v_res_c_vr_m_con_ct_cp,
v_res_c_vr_m_con_ct_cp_sv,
v_res_c_vr_m_con_ct_cp_gp,
v_res_c_vr_m_con_ct_cp_gs,
v_res_c_vr_m_con_ct_cp_au,
v_res_c_vr_m_con_ct_cp_cv,
v_res_c_vr_m_con_ct_gl,
v_res_c_vr_m_con_ct_gl_hc,
v_res_c_vr_m_con_ct_gl_nr,
v_res_c_vr_m_con_ct_gl_ip,
v_res_c_vr_m_con_ct_gl_ic,
v_res_c_vr_m_con_ca,
v_res_c_vr_m_con_ca_vt,
v_res_c_vr_m_con_ca_vt_pv,
v_res_c_vr_m_con_ca_vt_op,
v_res_c_vr_m_con_ca_cf,
v_res_c_vr_m_con_ca_cf_pa,
v_res_c_vr_m_con_ca_cf_nh,
v_res_c_vr_m_con_ca_gf,
v_res_c_vr_m_con_ca_gf_ic,
v_res_c_vr_m_con_ca_gf_oc,
v_res_c_vr_m_con_ca_gf_cm,
v_res_c_vr_m_con_ca_gf_it,
v_res_c_vr_m_con_ca_oc,
v_res_c_vr_m_con_ca_oc_oc1,
v_res_c_vr_m_con_ca_oc_oc2,
v_res_c_vr_m_con_ca_oc_oc3,
v_res_c_vr_m_con_ca_ri,
v_res_c_vr_m_con_ci,
v_res_c_vr_m_con_ci_vb,
v_res_c_vr_m_con_ci_ov,
v_res_c_vr_m_con_ci_ov_is,
v_res_c_vr_m_con_ci_ov_im,
v_res_c_vr_m_con_ci_ov_oc,
v_res_c_vr_m_con_ci_rf,
v_res_c_vr_m_con_ci_oi,
v_res_c_vr_m_con_ci_oi_oi1,
v_res_c_vr_m_con_ci_oi_oi2,
v_res_c_vr_m_con_ci_oi_oi3,
v_res_c_vr_m_con_it,
v_res_c_vr_m_con_up,
v_res_c_vr_m_con_up_cc,
v_res_c_vr_m_con_up_ir,
v_res_c_vr_m_con_up2,
v_res_c_vr_m_con_cv,
v_res_c_vr_m_con_vt,
v_res_c_vr_m_ven_ui,
v_res_c_vr_m_ven_uip,
v_res_c_vr_m_ven_uii,
v_res_c_vr_m_ven_cm,
v_res_c_vr_m_ven_cmp,
v_res_c_vr_m_ven_cmi,
v_res_c_vr_m_ven_gi,
v_res_c_vr_m_ven_cp,
v_res_c_vr_m_ven_cd,
v_res_c_vr_m_ven_cd_hc,
v_res_c_vr_m_ven_cd_hc_hc,
v_res_c_vr_m_ven_cd_hc_gr,
v_res_c_vr_m_ven_cd_hi,
v_res_c_vr_m_ven_cd_hi_hi,
v_res_c_vr_m_ven_cd_hi_gr,
v_res_c_vr_m_ven_cd_oh,
v_res_c_vr_m_ven_cd_oh_oh,
v_res_c_vr_m_ven_cd_oh_gr,
v_res_c_vr_m_ven_cd_id,
v_res_c_vr_m_ven_ct,
v_res_c_vr_m_ven_ct_hg,
v_res_c_vr_m_ven_ct_hg_hg,
v_res_c_vr_m_ven_ct_hg_gr,
v_res_c_vr_m_ven_ct_hv,
v_res_c_vr_m_ven_ct_hv_hv,
v_res_c_vr_m_ven_ct_hv_gr,
v_res_c_vr_m_ven_ct_cp,
v_res_c_vr_m_ven_ct_cp_sv,
v_res_c_vr_m_ven_ct_cp_gp,
v_res_c_vr_m_ven_ct_cp_gs,
v_res_c_vr_m_ven_ct_cp_au,
v_res_c_vr_m_ven_ct_cp_cv,
v_res_c_vr_m_ven_ct_gl,
v_res_c_vr_m_ven_ct_gl_hc,
v_res_c_vr_m_ven_ct_gl_nr,
v_res_c_vr_m_ven_ct_gl_ip,
v_res_c_vr_m_ven_ct_gl_ic,
v_res_c_vr_m_ven_ca,
v_res_c_vr_m_ven_ca_vt,
v_res_c_vr_m_ven_ca_vt_pv,
v_res_c_vr_m_ven_ca_vt_op,
v_res_c_vr_m_ven_ca_cf,
v_res_c_vr_m_ven_ca_cf_pa,
v_res_c_vr_m_ven_ca_cf_nh,
v_res_c_vr_m_ven_ca_gf,
v_res_c_vr_m_ven_ca_gf_ic,
v_res_c_vr_m_ven_ca_gf_oc,
v_res_c_vr_m_ven_ca_gf_cm,
v_res_c_vr_m_ven_ca_gf_it,
v_res_c_vr_m_ven_ca_oc,
v_res_c_vr_m_ven_ca_oc_oc1,
v_res_c_vr_m_ven_ca_oc_oc2,
v_res_c_vr_m_ven_ca_oc_oc3,
v_res_c_vr_m_ven_ca_ri,
v_res_c_vr_m_ven_ci,
v_res_c_vr_m_ven_ci_vb,
v_res_c_vr_m_ven_ci_ov,
v_res_c_vr_m_ven_ci_ov_is,
v_res_c_vr_m_ven_ci_ov_im,
v_res_c_vr_m_ven_ci_ov_oc,
v_res_c_vr_m_ven_ci_rf,
v_res_c_vr_m_ven_ci_oi,
v_res_c_vr_m_ven_ci_oi_oi1,
v_res_c_vr_m_ven_ci_oi_oi2,
v_res_c_vr_m_ven_ci_oi_oi3,
v_res_c_vr_m_ven_it,
v_res_c_vr_m_ven_up,
v_res_c_vr_m_ven_up_cc,
v_res_c_vr_m_ven_up_ir,
v_res_c_vr_m_ven_up2,
v_res_c_vr_m_ven_cv,
v_res_c_vr_m_ven_vt,
v_res_c_vr_uni_ui,
v_res_c_vr_uni_uip,
v_res_c_vr_uni_uii,
v_res_c_vr_uni_cm,
v_res_c_vr_uni_cmp,
v_res_c_vr_uni_cmi,
v_res_c_vr_uni_gi,
v_res_c_vr_uni_cp,
v_res_c_vr_uni_cd,
v_res_c_vr_uni_cd_hc,
v_res_c_vr_uni_cd_hc_hc,
v_res_c_vr_uni_cd_hc_gr,
v_res_c_vr_uni_cd_hi,
v_res_c_vr_uni_cd_hi_hi,
v_res_c_vr_uni_cd_hi_gr,
v_res_c_vr_uni_cd_oh,
v_res_c_vr_uni_cd_oh_oh,
v_res_c_vr_uni_cd_oh_gr,
v_res_c_vr_uni_cd_id,
v_res_c_vr_uni_ct,
v_res_c_vr_uni_ct_hg,
v_res_c_vr_uni_ct_hg_hg,
v_res_c_vr_uni_ct_hg_gr,
v_res_c_vr_uni_ct_hv,
v_res_c_vr_uni_ct_hv_hv,
v_res_c_vr_uni_ct_hv_gr,
v_res_c_vr_uni_ct_cp,
v_res_c_vr_uni_ct_cp_sv,
v_res_c_vr_uni_ct_cp_gp,
v_res_c_vr_uni_ct_cp_gs,
v_res_c_vr_uni_ct_cp_au,
v_res_c_vr_uni_ct_cp_cv,
v_res_c_vr_uni_ct_gl,
v_res_c_vr_uni_ct_gl_hc,
v_res_c_vr_uni_ct_gl_nr,
v_res_c_vr_uni_ct_gl_ip,
v_res_c_vr_uni_ct_gl_ic,
v_res_c_vr_uni_ca,
v_res_c_vr_uni_ca_vt,
v_res_c_vr_uni_ca_vt_pv,
v_res_c_vr_uni_ca_vt_op,
v_res_c_vr_uni_ca_cf,
v_res_c_vr_uni_ca_cf_pa,
v_res_c_vr_uni_ca_cf_nh,
v_res_c_vr_uni_ca_gf,
v_res_c_vr_uni_ca_gf_ic,
v_res_c_vr_uni_ca_gf_oc,
v_res_c_vr_uni_ca_gf_cm,
v_res_c_vr_uni_ca_gf_it,
v_res_c_vr_uni_ca_oc,
v_res_c_vr_uni_ca_oc_oc1,
v_res_c_vr_uni_ca_oc_oc2,
v_res_c_vr_uni_ca_oc_oc3,
v_res_c_vr_uni_ca_ri,
v_res_c_vr_uni_ci,
v_res_c_vr_uni_ci_vb,
v_res_c_vr_uni_ci_ov,
v_res_c_vr_uni_ci_ov_is,
v_res_c_vr_uni_ci_ov_im,
v_res_c_vr_uni_ci_ov_oc,
v_res_c_vr_uni_ci_rf,
v_res_c_vr_uni_ci_oi,
v_res_c_vr_uni_ci_oi_oi1,
v_res_c_vr_uni_ci_oi_oi2,
v_res_c_vr_uni_ci_oi_oi3,
v_res_c_vr_uni_it,
v_res_c_vr_uni_up,
v_res_c_vr_uni_up_cc,
v_res_c_vr_uni_up_ir,
v_res_c_vr_uni_up2,
v_res_c_vr_uni_cv,
v_res_c_vr_uni_vt,
v_res_c_eje_ui,
v_res_c_eje_uip,
v_res_c_eje_uii,
v_res_c_eje_cm,
v_res_c_eje_cmp,
v_res_c_eje_cmi,
v_res_c_eje_gi,
v_res_c_eje_cp,
v_res_c_eje_cd,
v_res_c_eje_cd_hc,
v_res_c_eje_cd_hc_hc,
v_res_c_eje_cd_hc_gr,
v_res_c_eje_cd_hi,
v_res_c_eje_cd_hi_hi,
v_res_c_eje_cd_hi_gr,
v_res_c_eje_cd_oh,
v_res_c_eje_cd_oh_oh,
v_res_c_eje_cd_oh_gr,
v_res_c_eje_cd_id,
v_res_c_eje_ct,
v_res_c_eje_ct_hg,
v_res_c_eje_ct_hg_hg,
v_res_c_eje_ct_hg_gr,
v_res_c_eje_ct_hv,
v_res_c_eje_ct_hv_hv,
v_res_c_eje_ct_hv_gr,
v_res_c_eje_ct_cp,
v_res_c_eje_ct_cp_sv,
v_res_c_eje_ct_cp_gp,
v_res_c_eje_ct_cp_gs,
v_res_c_eje_ct_cp_au,
v_res_c_eje_ct_cp_cv,
v_res_c_eje_ct_gl,
v_res_c_eje_ct_gl_hc,
v_res_c_eje_ct_gl_nr,
v_res_c_eje_ct_gl_ip,
v_res_c_eje_ct_gl_ic,
v_res_c_eje_ca,
v_res_c_eje_ca_vt,
v_res_c_eje_ca_vt_pv,
v_res_c_eje_ca_vt_op,
v_res_c_eje_ca_cf,
v_res_c_eje_ca_cf_pa,
v_res_c_eje_ca_cf_nh,
v_res_c_eje_ca_gf,
v_res_c_eje_ca_gf_ic,
v_res_c_eje_ca_gf_oc,
v_res_c_eje_ca_gf_cm,
v_res_c_eje_ca_gf_it,
v_res_c_eje_ca_oc,
v_res_c_eje_ca_oc_oc1,
v_res_c_eje_ca_oc_oc2,
v_res_c_eje_ca_oc_oc3,
v_res_c_eje_ca_ri,
v_res_c_eje_ci,
v_res_c_eje_ci_vb,
v_res_c_eje_ci_ov,
v_res_c_eje_ci_ov_is,
v_res_c_eje_ci_ov_im,
v_res_c_eje_ci_ov_oc,
v_res_c_eje_ci_rf,
v_res_c_eje_ci_oi,
v_res_c_eje_ci_oi_oi1,
v_res_c_eje_ci_oi_oi2,
v_res_c_eje_ci_oi_oi3,
v_res_c_eje_it,
v_res_c_eje_up,
v_res_c_eje_up_cc,
v_res_c_eje_up_ir,
v_res_c_eje_up2,
v_res_c_eje_cv,
v_res_c_eje_vt,
v_res_c_eje_cvg;
 IF v_finished = 1 THEN
                LEAVE obtener_c_resumen_consolidado;
            END IF;   
INSERT INTO tb_c_resumen(RES_C_CONS_ID, 
RES_C_FECHA, 
RES_C_TOTAL_UNIDADES, 
RES_C_AREA_PROMEDIO_UNIDAD, 
RES_C_TOTAL_AREA_CONSTRUIDA, 
RES_C_TOTAL_AREA_VENDIBLE, 
RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO, 
RES_C_DENSIDAD_INDICE_OCUPACION, 
RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO, 
RES_C_NUMERO_PARQUEOS, 
RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD, 
RES_C_NUMERO_DEPOSITOS, 
RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS, 
RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION, 
RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO, 
RES_C_PUNTO_EQUILIBRIO_UNIDADES, 
RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS, 
RES_C_PORCENTAJE_VENTAS_NUEVOGAR, 
RES_C_FECHA_PRESUPUESTO, 
RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO, 
RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA, 
RES_C_PRESUPUESTO, 
RES_C_INCREMENTOS, 
RES_C_COSTO_MATERIALES_MANO_OBRA, 
RES_C_PRESUPUESTO2, 
RES_C_INCREMENTOS2, 
RES_C_GASTOS_IMPREVISTOS, 
RES_C_COSTOS_POST_VENTAS, 
RES_C_COSTO_DIRECTO_CONSTRUCCION, 
RES_C_HONORARIOS_CONSTRUCCION, 
RES_C_HONORARIOS_CONSTRUCCION2, 
RES_C_GASTOS_REEMBOLSABLES, 
RES_C_HONORARIOS_INTERVENTORIA, 
RES_C_HONORARIOS_INTERVENTORIA2, 
RES_C_GASTOS_REEMBOLSABLES2, 
RES_C_OTROS_HONORARIOS_DISENOS_OTROS, 
RES_C_OTROS_HONORARIOS_DISENOS_OTROS2, 
RES_C_GASTOS_REEMBOLSABLES3, 
RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION, 
RES_C_COSTO_TOTAL_CONSTRUCCION, 
RES_C_HONORARIOS_GERENCIA, 
RES_C_HONORARIOS_GERENCIA2, 
RES_C_GASTOS_REEMBOLSABLES4, 
RES_C_HONORARIOS_VENTAS, 
RES_C_HONORARIOS_VENTAS2, 
RES_C_GASTOS_REEMBOLSABLES5, 
RES_C_COSTOS_PROMOCION_Y_VENTAS, 
RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION, 
RES_C_GASTOS_PUBLICIDAD, 
RES_C_GASTOS_SALA_VENTAS, 
RES_C_ADMON_UNIDADES_POR_ENTREGAR, 
RES_C_COMISIONES_VENTAS, 
RES_C_GASTOS_LEGALES, 
RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR, 
RES_C_NOTARIALES_REGISTRO_DE_VENTAS, 
RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR, 
RES_C_IMPUESTO_ICA, 
RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS, 
RES_C_VALOR_TERENO_URBANIZADO, 
RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO, 
RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION, 
RES_C_COMISIONES_FIDUCIA, 
RES_C_PREVENTAS_Y_ADMON, 
RES_C_NUEVOGAR, 
RES_C_GASTOS_FINANCIEROS, 
RES_C_INTERESES_CREDITO_CONSTRUCTOR, 
RES_C_OTROS_COSTOS_CREDITO, 
RES_C_CORRECCION_MONETARIA, 
RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF, 
RES_C_OTROS_COSTOS_Y_GASTOS, 
RES_C_GASTO1, 
RES_C_GASTO2, 
RES_C_GASTO3, 
RES_C_REINTEGROS_IVA_PROYECTOS_VIS, 
RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS, 
RES_C_VENTAS_BRUTAS, 
RES_C_OTROS_INGRESOS_VENTAS, 
RES_C_INTERESES_SUBROGACION, 
RES_C_INTERESES_MORA, 
RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS, 
RES_C_RENDIMIENTOS_FIDEICOMISO, 
RES_C_OTROS_INGRESOS, 
RES_C_INGRESOS1, 
RES_C_INGRESOS2, 
RES_C_INGRESOS3, 
RES_C_INGRESOS_TOTALES, 
RES_C_UTILIDAD_PROYECTO, 
RES_C_COSTO_CREDITO_TESORERIA, 
RES_C_IMPUESTO_RENTA, 
RES_C_UTILIDAD_PROYECTO2, 
RES_C_COSTO_VENTAS_GESTION, 
RES_C_VALOR_TERRENO_LIBROS, 
RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES, 
RES_C_TIR_EM, 
RES_C_VPN_TASA_DESCUENTO, 
RES_C_UTILIDAD_COLPATRIA, 
RES_C_CONSTRUCTORA, 
RES_C_TRANSACCIONES_INMOBILIARIAS, 
RES_C_PROMOTORA, 
RES_C_TIR_COLAPTRIA_EA, 
RES_C_VPN_COLPATRIA_TASA_DESCUENTO, 
RES_C_PORC_VEN_UI, 
RES_C_PORC_VEN_UIP, 
RES_C_PORC_VEN_UII, 
RES_C_PORC_VEN_CM, 
RES_C_PORC_VEN_CMP, 
RES_C_PORC_VEN_CMI, 
RES_C_PORC_VEN_GI, 
RES_C_PORC_VEN_CP, 
RES_C_PORC_VEN_CD, 
RES_C_PORC_VEN_CD_HC, 
RES_C_PORC_VEN_CD_HC_HC, 
RES_C_PORC_VEN_CD_HC_GR, 
RES_C_PORC_VEN_CD_HI, 
RES_C_PORC_VEN_CD_HI_HI, 
RES_C_PORC_VEN_CD_HI_GR, 
RES_C_PORC_VEN_CD_OH, 
RES_C_PORC_VEN_CD_OH_OH, 
RES_C_PORC_VEN_CD_OH_GR, 
RES_C_PORC_VEN_CD_ID, 
RES_C_PORC_VEN_CT, 
RES_C_PORC_VEN_CT_HG, 
RES_C_PORC_VEN_CT_HG_HG, 
RES_C_PORC_VEN_CT_HG_GR, 
RES_C_PORC_VEN_CT_HV, 
RES_C_PORC_VEN_CT_HV_HV, 
RES_C_PORC_VEN_CT_HV_GR, 
RES_C_PORC_VEN_CT_CP, 
RES_C_PORC_VEN_CT_CP_SV, 
RES_C_PORC_VEN_CT_CP_GP, 
RES_C_PORC_VEN_CT_CP_GS, 
RES_C_PORC_VEN_CT_CP_AU, 
RES_C_PORC_VEN_CT_CP_CV, 
RES_C_PORC_VEN_CT_GL, 
RES_C_PORC_VEN_CT_GL_HC, 
RES_C_PORC_VEN_CT_GL_NR, 
RES_C_PORC_VEN_CT_GL_IP, 
RES_C_PORC_VEN_CT_GL_IC, 
RES_C_PORC_VEN_CA, 
RES_C_PORC_VEN_CA_VT, 
RES_C_PORC_VEN_CA_VT_PV, 
RES_C_PORC_VEN_CA_VT_OP, 
RES_C_PORC_VEN_CA_CF, 
RES_C_PORC_VEN_CA_CF_PA, 
RES_C_PORC_VEN_CA_CF_NH, 
RES_C_PORC_VEN_CA_GF, 
RES_C_PORC_VEN_CA_GF_IC, 
RES_C_PORC_VEN_CA_GF_OC, 
RES_C_PORC_VEN_CA_GF_CM, 
RES_C_PORC_VEN_CA_GF_IT, 
RES_C_PORC_VEN_CA_OC, 
RES_C_PORC_VEN_CA_OC_OC1, 
RES_C_PORC_VEN_CA_OC_OC2, 
RES_C_PORC_VEN_CA_OC_OC3, 
RES_C_PORC_VEN_CA_RI, 
RES_C_PORC_VEN_CI, 
RES_C_PORC_VEN_CI_VB, 
RES_C_PORC_VEN_CI_OV, 
RES_C_PORC_VEN_CI_OV_IS, 
RES_C_PORC_VEN_CI_OV_IM, 
RES_C_PORC_VEN_CI_OV_OC, 
RES_C_PORC_VEN_CI_RF, 
RES_C_PORC_VEN_CI_OI, 
RES_C_PORC_VEN_CI_OI_OI1, 
RES_C_PORC_VEN_CI_OI_OI2, 
RES_C_PORC_VEN_CI_OI_OI3, 
RES_C_PORC_VEN_IT, 
RES_C_PORC_VEN_UP, 
RES_C_PORC_VEN_UP_CC, 
RES_C_PORC_VEN_UP_IR, 
RES_C_PORC_VEN_UP2, 
RES_C_PORC_VEN_CV, 
RES_C_PORC_VEN_VT, 
RES_C_PORC_VEN_CVG, 
RES_C_PORC_VEN_TIR, 
RES_C_PORC_VEN_VPN, 
RES_C_PORC_VEN_UC, 
RES_C_PORC_VEN_UC_CO, 
RES_C_PORC_VEN_UC_TI, 
RES_C_PORC_VEN_UC_PR, 
RES_C_PORC_VEN_TIR_C, 
RES_C_PORC_VEN_VPN_C, 
RES_C_VR_M_CON_UI, 
RES_C_VR_M_CON_UIP, 
RES_C_VR_M_CON_UII, 
RES_C_VR_M_CON_CM, 
RES_C_VR_M_CON_CMP, 
RES_C_VR_M_CON_CMI, 
RES_C_VR_M_CON_GI, 
RES_C_VR_M_CON_CP, 
RES_C_VR_M_CON_CD, 
RES_C_VR_M_CON_CD_HC, 
RES_C_VR_M_CON_CD_HC_HC, 
RES_C_VR_M_CON_CD_HC_GR, 
RES_C_VR_M_CON_CD_HI, 
RES_C_VR_M_CON_CD_HI_HI, 
RES_C_VR_M_CON_CD_HI_GR, 
RES_C_VR_M_CON_CD_OH, 
RES_C_VR_M_CON_CD_OH_OH, 
RES_C_VR_M_CON_CD_OH_GR, 
RES_C_VR_M_CON_CD_ID, 
RES_C_VR_M_CON_CT, 
RES_C_VR_M_CON_CT_HG, 
RES_C_VR_M_CON_CT_HG_HG, 
RES_C_VR_M_CON_CT_HG_GR, 
RES_C_VR_M_CON_CT_HV, 
RES_C_VR_M_CON_CT_HV_HV, 
RES_C_VR_M_CON_CT_HV_GR, 
RES_C_VR_M_CON_CT_CP, 
RES_C_VR_M_CON_CT_CP_SV, 
RES_C_VR_M_CON_CT_CP_GP, 
RES_C_VR_M_CON_CT_CP_GS, 
RES_C_VR_M_CON_CT_CP_AU, 
RES_C_VR_M_CON_CT_CP_CV, 
RES_C_VR_M_CON_CT_GL, 
RES_C_VR_M_CON_CT_GL_HC, 
RES_C_VR_M_CON_CT_GL_NR, 
RES_C_VR_M_CON_CT_GL_IP, 
RES_C_VR_M_CON_CT_GL_IC, 
RES_C_VR_M_CON_CA, 
RES_C_VR_M_CON_CA_VT, 
RES_C_VR_M_CON_CA_VT_PV, 
RES_C_VR_M_CON_CA_VT_OP, 
RES_C_VR_M_CON_CA_CF, 
RES_C_VR_M_CON_CA_CF_PA, 
RES_C_VR_M_CON_CA_CF_NH, 
RES_C_VR_M_CON_CA_GF, 
RES_C_VR_M_CON_CA_GF_IC, 
RES_C_VR_M_CON_CA_GF_OC, 
RES_C_VR_M_CON_CA_GF_CM, 
RES_C_VR_M_CON_CA_GF_IT, 
RES_C_VR_M_CON_CA_OC, 
RES_C_VR_M_CON_CA_OC_OC1, 
RES_C_VR_M_CON_CA_OC_OC2, 
RES_C_VR_M_CON_CA_OC_OC3, 
RES_C_VR_M_CON_CA_RI, 
RES_C_VR_M_CON_CI, 
RES_C_VR_M_CON_CI_VB, 
RES_C_VR_M_CON_CI_OV, 
RES_C_VR_M_CON_CI_OV_IS, 
RES_C_VR_M_CON_CI_OV_IM, 
RES_C_VR_M_CON_CI_OV_OC, 
RES_C_VR_M_CON_CI_RF, 
RES_C_VR_M_CON_CI_OI, 
RES_C_VR_M_CON_CI_OI_OI1, 
RES_C_VR_M_CON_CI_OI_OI2, 
RES_C_VR_M_CON_CI_OI_OI3, 
RES_C_VR_M_CON_IT, 
RES_C_VR_M_CON_UP, 
RES_C_VR_M_CON_UP_CC, 
RES_C_VR_M_CON_UP_IR, 
RES_C_VR_M_CON_UP2, 
RES_C_VR_M_CON_CV, 
RES_C_VR_M_CON_VT, 
RES_C_VR_M_VEN_UI, 
RES_C_VR_M_VEN_UIP, 
RES_C_VR_M_VEN_UII, 
RES_C_VR_M_VEN_CM, 
RES_C_VR_M_VEN_CMP, 
RES_C_VR_M_VEN_CMI, 
RES_C_VR_M_VEN_GI, 
RES_C_VR_M_VEN_CP, 
RES_C_VR_M_VEN_CD, 
RES_C_VR_M_VEN_CD_HC, 
RES_C_VR_M_VEN_CD_HC_HC, 
RES_C_VR_M_VEN_CD_HC_GR, 
RES_C_VR_M_VEN_CD_HI, 
RES_C_VR_M_VEN_CD_HI_HI, 
RES_C_VR_M_VEN_CD_HI_GR, 
RES_C_VR_M_VEN_CD_OH, 
RES_C_VR_M_VEN_CD_OH_OH, 
RES_C_VR_M_VEN_CD_OH_GR, 
RES_C_VR_M_VEN_CD_ID, 
RES_C_VR_M_VEN_CT, 
RES_C_VR_M_VEN_CT_HG, 
RES_C_VR_M_VEN_CT_HG_HG, 
RES_C_VR_M_VEN_CT_HG_GR, 
RES_C_VR_M_VEN_CT_HV, 
RES_C_VR_M_VEN_CT_HV_HV, 
RES_C_VR_M_VEN_CT_HV_GR, 
RES_C_VR_M_VEN_CT_CP, 
RES_C_VR_M_VEN_CT_CP_SV, 
RES_C_VR_M_VEN_CT_CP_GP, 
RES_C_VR_M_VEN_CT_CP_GS, 
RES_C_VR_M_VEN_CT_CP_AU, 
RES_C_VR_M_VEN_CT_CP_CV, 
RES_C_VR_M_VEN_CT_GL, 
RES_C_VR_M_VEN_CT_GL_HC, 
RES_C_VR_M_VEN_CT_GL_NR, 
RES_C_VR_M_VEN_CT_GL_IP, 
RES_C_VR_M_VEN_CT_GL_IC, 
RES_C_VR_M_VEN_CA, 
RES_C_VR_M_VEN_CA_VT, 
RES_C_VR_M_VEN_CA_VT_PV, 
RES_C_VR_M_VEN_CA_VT_OP, 
RES_C_VR_M_VEN_CA_CF, 
RES_C_VR_M_VEN_CA_CF_PA, 
RES_C_VR_M_VEN_CA_CF_NH, 
RES_C_VR_M_VEN_CA_GF, 
RES_C_VR_M_VEN_CA_GF_IC, 
RES_C_VR_M_VEN_CA_GF_OC, 
RES_C_VR_M_VEN_CA_GF_CM, 
RES_C_VR_M_VEN_CA_GF_IT, 
RES_C_VR_M_VEN_CA_OC, 
RES_C_VR_M_VEN_CA_OC_OC1, 
RES_C_VR_M_VEN_CA_OC_OC2, 
RES_C_VR_M_VEN_CA_OC_OC3, 
RES_C_VR_M_VEN_CA_RI, 
RES_C_VR_M_VEN_CI, 
RES_C_VR_M_VEN_CI_VB, 
RES_C_VR_M_VEN_CI_OV, 
RES_C_VR_M_VEN_CI_OV_IS, 
RES_C_VR_M_VEN_CI_OV_IM, 
RES_C_VR_M_VEN_CI_OV_OC, 
RES_C_VR_M_VEN_CI_RF, 
RES_C_VR_M_VEN_CI_OI, 
RES_C_VR_M_VEN_CI_OI_OI1, 
RES_C_VR_M_VEN_CI_OI_OI2, 
RES_C_VR_M_VEN_CI_OI_OI3, 
RES_C_VR_M_VEN_IT, 
RES_C_VR_M_VEN_UP, 
RES_C_VR_M_VEN_UP_CC, 
RES_C_VR_M_VEN_UP_IR, 
RES_C_VR_M_VEN_UP2, 
RES_C_VR_M_VEN_CV, 
RES_C_VR_M_VEN_VT, 
RES_C_VR_UNI_UI, 
RES_C_VR_UNI_UIP, 
RES_C_VR_UNI_UII, 
RES_C_VR_UNI_CM, 
RES_C_VR_UNI_CMP, 
RES_C_VR_UNI_CMI, 
RES_C_VR_UNI_GI, 
RES_C_VR_UNI_CP, 
RES_C_VR_UNI_CD, 
RES_C_VR_UNI_CD_HC, 
RES_C_VR_UNI_CD_HC_HC, 
RES_C_VR_UNI_CD_HC_GR, 
RES_C_VR_UNI_CD_HI, 
RES_C_VR_UNI_CD_HI_HI, 
RES_C_VR_UNI_CD_HI_GR, 
RES_C_VR_UNI_CD_OH, 
RES_C_VR_UNI_CD_OH_OH, 
RES_C_VR_UNI_CD_OH_GR, 
RES_C_VR_UNI_CD_ID, 
RES_C_VR_UNI_CT, 
RES_C_VR_UNI_CT_HG, 
RES_C_VR_UNI_CT_HG_HG, 
RES_C_VR_UNI_CT_HG_GR, 
RES_C_VR_UNI_CT_HV, 
RES_C_VR_UNI_CT_HV_HV, 
RES_C_VR_UNI_CT_HV_GR, 
RES_C_VR_UNI_CT_CP, 
RES_C_VR_UNI_CT_CP_SV, 
RES_C_VR_UNI_CT_CP_GP, 
RES_C_VR_UNI_CT_CP_GS, 
RES_C_VR_UNI_CT_CP_AU, 
RES_C_VR_UNI_CT_CP_CV, 
RES_C_VR_UNI_CT_GL, 
RES_C_VR_UNI_CT_GL_HC, 
RES_C_VR_UNI_CT_GL_NR, 
RES_C_VR_UNI_CT_GL_IP, 
RES_C_VR_UNI_CT_GL_IC, 
RES_C_VR_UNI_CA, 
RES_C_VR_UNI_CA_VT, 
RES_C_VR_UNI_CA_VT_PV, 
RES_C_VR_UNI_CA_VT_OP, 
RES_C_VR_UNI_CA_CF, 
RES_C_VR_UNI_CA_CF_PA, 
RES_C_VR_UNI_CA_CF_NH, 
RES_C_VR_UNI_CA_GF, 
RES_C_VR_UNI_CA_GF_IC, 
RES_C_VR_UNI_CA_GF_OC, 
RES_C_VR_UNI_CA_GF_CM, 
RES_C_VR_UNI_CA_GF_IT, 
RES_C_VR_UNI_CA_OC, 
RES_C_VR_UNI_CA_OC_OC1, 
RES_C_VR_UNI_CA_OC_OC2, 
RES_C_VR_UNI_CA_OC_OC3, 
RES_C_VR_UNI_CA_RI, 
RES_C_VR_UNI_CI, 
RES_C_VR_UNI_CI_VB, 
RES_C_VR_UNI_CI_OV, 
RES_C_VR_UNI_CI_OV_IS, 
RES_C_VR_UNI_CI_OV_IM, 
RES_C_VR_UNI_CI_OV_OC, 
RES_C_VR_UNI_CI_RF, 
RES_C_VR_UNI_CI_OI, 
RES_C_VR_UNI_CI_OI_OI1, 
RES_C_VR_UNI_CI_OI_OI2, 
RES_C_VR_UNI_CI_OI_OI3, 
RES_C_VR_UNI_IT, 
RES_C_VR_UNI_UP, 
RES_C_VR_UNI_UP_CC, 
RES_C_VR_UNI_UP_IR, 
RES_C_VR_UNI_UP2, 
RES_C_VR_UNI_CV, 
RES_C_VR_UNI_VT, 
RES_C_EJE_UI, 
RES_C_EJE_UIP, 
RES_C_EJE_UII, 
RES_C_EJE_CM, 
RES_C_EJE_CMP, 
RES_C_EJE_CMI, 
RES_C_EJE_GI, 
RES_C_EJE_CP, 
RES_C_EJE_CD, 
RES_C_EJE_CD_HC, 
RES_C_EJE_CD_HC_HC, 
RES_C_EJE_CD_HC_GR, 
RES_C_EJE_CD_HI, 
RES_C_EJE_CD_HI_HI, 
RES_C_EJE_CD_HI_GR, 
RES_C_EJE_CD_OH, 
RES_C_EJE_CD_OH_OH, 
RES_C_EJE_CD_OH_GR, 
RES_C_EJE_CD_ID, 
RES_C_EJE_CT, 
RES_C_EJE_CT_HG, 
RES_C_EJE_CT_HG_HG, 
RES_C_EJE_CT_HG_GR, 
RES_C_EJE_CT_HV, 
RES_C_EJE_CT_HV_HV, 
RES_C_EJE_CT_HV_GR, 
RES_C_EJE_CT_CP, 
RES_C_EJE_CT_CP_SV, 
RES_C_EJE_CT_CP_GP, 
RES_C_EJE_CT_CP_GS, 
RES_C_EJE_CT_CP_AU, 
RES_C_EJE_CT_CP_CV, 
RES_C_EJE_CT_GL, 
RES_C_EJE_CT_GL_HC, 
RES_C_EJE_CT_GL_NR, 
RES_C_EJE_CT_GL_IP, 
RES_C_EJE_CT_GL_IC, 
RES_C_EJE_CA, 
RES_C_EJE_CA_VT, 
RES_C_EJE_CA_VT_PV, 
RES_C_EJE_CA_VT_OP, 
RES_C_EJE_CA_CF, 
RES_C_EJE_CA_CF_PA, 
RES_C_EJE_CA_CF_NH, 
RES_C_EJE_CA_GF, 
RES_C_EJE_CA_GF_IC, 
RES_C_EJE_CA_GF_OC, 
RES_C_EJE_CA_GF_CM, 
RES_C_EJE_CA_GF_IT, 
RES_C_EJE_CA_OC, 
RES_C_EJE_CA_OC_OC1, 
RES_C_EJE_CA_OC_OC2, 
RES_C_EJE_CA_OC_OC3, 
RES_C_EJE_CA_RI, 
RES_C_EJE_CI, 
RES_C_EJE_CI_VB, 
RES_C_EJE_CI_OV, 
RES_C_EJE_CI_OV_IS, 
RES_C_EJE_CI_OV_IM, 
RES_C_EJE_CI_OV_OC, 
RES_C_EJE_CI_RF, 
RES_C_EJE_CI_OI, 
RES_C_EJE_CI_OI_OI1, 
RES_C_EJE_CI_OI_OI2, 
RES_C_EJE_CI_OI_OI3, 
RES_C_EJE_IT, 
RES_C_EJE_UP, 
RES_C_EJE_UP_CC, 
RES_C_EJE_UP_IR, 
RES_C_EJE_UP2, 
RES_C_EJE_CV, 
RES_C_EJE_VT, 
RES_C_EJE_CVG) 
VALUES(v_res_c_cons_id,
v_res_fecha,
v_res_total_unidades,
v_res_area_promedio_unidad,
v_res_total_area_construida,
v_res_total_area_vendible,
v_res_area_util_lote_asignada_subproyecto,
v_res_densidad_indice_ocupacion,
v_res_valor_metro_cuadrado_lote_urbanizado,
v_res_numero_parqueos,
v_res_relacion_parqueos_numero_parqueos_por_unidad,
v_res_numero_depositos,
v_res_fecha_inicio_y_terminacion_ventas,
v_res_fecha_inicio_y_terminacion_construccion,
v_res_ritmo_ventas_mensual_promedio,
v_res_punto_equilibrio_unidades,
v_res_tasa_promedio_incremento_precios,
v_res_porcentaje_ventas_nuevogar,
v_res_fecha_presupuesto,
v_res_tasa_promedio_incremento_presupuesto,
v_res_c_tot_ui,
v_res_c_tot_uip,
v_res_c_tot_uii,
v_res_c_tot_cm,
v_res_c_tot_cmp,
v_res_c_tot_cmi,
v_res_c_tot_gi,
v_res_c_tot_cp,
v_res_c_tot_cd,
v_res_c_tot_cd_hc,
v_res_c_tot_cd_hc_hc,
v_res_c_tot_cd_hc_gr,
v_res_c_tot_cd_hi,
v_res_c_tot_cd_hi_hi,
v_res_c_tot_cd_hi_gr,
v_res_c_tot_cd_oh,
v_res_c_tot_cd_oh_oh,
v_res_c_tot_cd_oh_gr,
v_res_c_tot_cd_id,
v_res_c_tot_ct,
v_res_c_tot_ct_hg,
v_res_c_tot_ct_hg_hg,
v_res_c_tot_ct_hg_gr,
v_res_c_tot_ct_hv,
v_res_c_tot_ct_hv_hv,
v_res_c_tot_ct_hv_gr,
v_res_c_tot_ct_cp,
v_res_c_tot_ct_cp_sv,
v_res_c_tot_ct_cp_gp,
v_res_c_tot_ct_cp_gs,
v_res_c_tot_ct_cp_au,
v_res_c_tot_ct_cp_cv,
v_res_c_tot_ct_gl,
v_res_c_tot_ct_gl_hc,
v_res_c_tot_ct_gl_nr,
v_res_c_tot_ct_gl_ip,
v_res_c_tot_ct_gl_ic,
v_res_c_tot_ca,
v_res_c_tot_ca_vt,
v_res_c_tot_ca_vt_pv,
v_res_c_tot_ca_vt_op,
v_res_c_tot_ca_cf,
v_res_c_tot_ca_cf_pa,
v_res_c_tot_ca_cf_nh,
v_res_c_tot_ca_gf,
v_res_c_tot_ca_gf_ic,
v_res_c_tot_ca_gf_oc,
v_res_c_tot_ca_gf_cm,
v_res_c_tot_ca_gf_it,
v_res_c_tot_ca_oc,
v_res_c_tot_ca_oc_oc1,
v_res_c_tot_ca_oc_oc2,
v_res_c_tot_ca_oc_oc3,
v_res_c_tot_ca_ri,
v_res_c_tot_ci,
v_res_c_tot_ci_vb,
v_res_c_tot_ci_ov,
v_res_c_tot_ci_ov_is,
v_res_c_tot_ci_ov_im,
v_res_c_tot_ci_ov_oc,
v_res_c_tot_ci_rf,
v_res_c_tot_ci_oi,
v_res_c_tot_ci_oi_oi1,
v_res_c_tot_ci_oi_oi2,
v_res_c_tot_ci_oi_oi3,
v_res_c_tot_it,
v_res_c_tot_up,
v_res_c_tot_up_cc,
v_res_c_tot_up_ir,
v_res_c_tot_up2,
v_res_c_tot_cv,
v_res_c_tot_vt,
v_res_c_tot_cvg,
v_res_c_tot_tir,
v_res_c_tot_vpn,
v_res_c_tot_uc,
v_res_c_tot_uc_co,
v_res_c_tot_uc_ti,
v_res_c_tot_uc_pr,
v_res_c_tot_tir_c,
v_res_c_tot_vpn_c,
v_res_c_porc_vent_ui,
v_res_c_porc_vent_uip,
v_res_c_porc_vent_uii,
v_res_c_porc_vent_cm,
v_res_c_porc_vent_cmp,
v_res_c_porc_vent_cmi,
v_res_c_porc_vent_gi,
v_res_c_porc_vent_cp,
v_res_c_porc_vent_cd,
v_res_c_porc_vent_cd_hc,
v_res_c_porc_vent_cd_hc_hc,
v_res_c_porc_vent_cd_hc_gr,
v_res_c_porc_vent_cd_hi,
v_res_c_porc_vent_cd_hi_hi,
v_res_c_porc_vent_cd_hi_gr,
v_res_c_porc_vent_cd_oh,
v_res_c_porc_vent_cd_oh_oh,
v_res_c_porc_vent_cd_oh_gr,
v_res_c_porc_vent_cd_id,
v_res_c_porc_vent_ct,
v_res_c_porc_vent_ct_hg,
v_res_c_porc_vent_ct_hg_hg,
v_res_c_porc_vent_ct_hg_gr,
v_res_c_porc_vent_ct_hv,
v_res_c_porc_vent_ct_hv_hv,
v_res_c_porc_vent_ct_hv_gr,
v_res_c_porc_vent_ct_cp,
v_res_c_porc_vent_ct_cp_sv,
v_res_c_porc_vent_ct_cp_gp,
v_res_c_porc_vent_ct_cp_gs,
v_res_c_porc_vent_ct_cp_au,
v_res_c_porc_vent_ct_cp_cv,
v_res_c_porc_vent_ct_gl,
v_res_c_porc_vent_ct_gl_hc,
v_res_c_porc_vent_ct_gl_nr,
v_res_c_porc_vent_ct_gl_ip,
v_res_c_porc_vent_ct_gl_ic,
v_res_c_porc_vent_ca,
v_res_c_porc_vent_ca_vt,
v_res_c_porc_vent_ca_vt_pv,
v_res_c_porc_vent_ca_vt_op,
v_res_c_porc_vent_ca_cf,
v_res_c_porc_vent_ca_cf_pa,
v_res_c_porc_vent_ca_cf_nh,
v_res_c_porc_vent_ca_gf,
v_res_c_porc_vent_ca_gf_ic,
v_res_c_porc_vent_ca_gf_oc,
v_res_c_porc_vent_ca_gf_cm,
v_res_c_porc_vent_ca_gf_it,
v_res_c_porc_vent_ca_oc,
v_res_c_porc_vent_ca_oc_oc1,
v_res_c_porc_vent_ca_oc_oc2,
v_res_c_porc_vent_ca_oc_oc3,
v_res_c_porc_vent_ca_ri,
v_res_c_porc_vent_ci,
v_res_c_porc_vent_ci_vb,
v_res_c_porc_vent_ci_ov,
v_res_c_porc_vent_ci_ov_is,
v_res_c_porc_vent_ci_ov_im,
v_res_c_porc_vent_ci_ov_oc,
v_res_c_porc_vent_ci_rf,
v_res_c_porc_vent_ci_oi,
v_res_c_porc_vent_ci_oi_oi1,
v_res_c_porc_vent_ci_oi_oi2,
v_res_c_porc_vent_ci_oi_oi3,
v_res_c_porc_vent_it,
v_res_c_porc_vent_up,
v_res_c_porc_vent_up_cc,
v_res_c_porc_vent_up_ir,
v_res_c_porc_vent_up2,
v_res_c_porc_vent_cv,
v_res_c_porc_vent_vt,
v_res_c_porc_vent_cvg,
v_res_c_porc_vent_tir,
v_res_c_porc_vent_vpn,
v_res_c_porc_vent_uc,
v_res_c_porc_vent_uc_co,
v_res_c_porc_vent_uc_ti,
v_res_c_porc_vent_uc_pr,
v_res_c_porc_vent_tir_c,
v_res_c_porc_vent_vpn_c,
v_res_c_vr_m_con_ui,
v_res_c_vr_m_con_uip,
v_res_c_vr_m_con_uii,
v_res_c_vr_m_con_cm,
v_res_c_vr_m_con_cmp,
v_res_c_vr_m_con_cmi,
v_res_c_vr_m_con_gi,
v_res_c_vr_m_con_cp,
v_res_c_vr_m_con_cd,
v_res_c_vr_m_con_cd_hc,
v_res_c_vr_m_con_cd_hc_hc,
v_res_c_vr_m_con_cd_hc_gr,
v_res_c_vr_m_con_cd_hi,
v_res_c_vr_m_con_cd_hi_hi,
v_res_c_vr_m_con_cd_hi_gr,
v_res_c_vr_m_con_cd_oh,
v_res_c_vr_m_con_cd_oh_oh,
v_res_c_vr_m_con_cd_oh_gr,
v_res_c_vr_m_con_cd_id,
v_res_c_vr_m_con_ct,
v_res_c_vr_m_con_ct_hg,
v_res_c_vr_m_con_ct_hg_hg,
v_res_c_vr_m_con_ct_hg_gr,
v_res_c_vr_m_con_ct_hv,
v_res_c_vr_m_con_ct_hv_hv,
v_res_c_vr_m_con_ct_hv_gr,
v_res_c_vr_m_con_ct_cp,
v_res_c_vr_m_con_ct_cp_sv,
v_res_c_vr_m_con_ct_cp_gp,
v_res_c_vr_m_con_ct_cp_gs,
v_res_c_vr_m_con_ct_cp_au,
v_res_c_vr_m_con_ct_cp_cv,
v_res_c_vr_m_con_ct_gl,
v_res_c_vr_m_con_ct_gl_hc,
v_res_c_vr_m_con_ct_gl_nr,
v_res_c_vr_m_con_ct_gl_ip,
v_res_c_vr_m_con_ct_gl_ic,
v_res_c_vr_m_con_ca,
v_res_c_vr_m_con_ca_vt,
v_res_c_vr_m_con_ca_vt_pv,
v_res_c_vr_m_con_ca_vt_op,
v_res_c_vr_m_con_ca_cf,
v_res_c_vr_m_con_ca_cf_pa,
v_res_c_vr_m_con_ca_cf_nh,
v_res_c_vr_m_con_ca_gf,
v_res_c_vr_m_con_ca_gf_ic,
v_res_c_vr_m_con_ca_gf_oc,
v_res_c_vr_m_con_ca_gf_cm,
v_res_c_vr_m_con_ca_gf_it,
v_res_c_vr_m_con_ca_oc,
v_res_c_vr_m_con_ca_oc_oc1,
v_res_c_vr_m_con_ca_oc_oc2,
v_res_c_vr_m_con_ca_oc_oc3,
v_res_c_vr_m_con_ca_ri,
v_res_c_vr_m_con_ci,
v_res_c_vr_m_con_ci_vb,
v_res_c_vr_m_con_ci_ov,
v_res_c_vr_m_con_ci_ov_is,
v_res_c_vr_m_con_ci_ov_im,
v_res_c_vr_m_con_ci_ov_oc,
v_res_c_vr_m_con_ci_rf,
v_res_c_vr_m_con_ci_oi,
v_res_c_vr_m_con_ci_oi_oi1,
v_res_c_vr_m_con_ci_oi_oi2,
v_res_c_vr_m_con_ci_oi_oi3,
v_res_c_vr_m_con_it,
v_res_c_vr_m_con_up,
v_res_c_vr_m_con_up_cc,
v_res_c_vr_m_con_up_ir,
v_res_c_vr_m_con_up2,
v_res_c_vr_m_con_cv,
v_res_c_vr_m_con_vt,
v_res_c_vr_m_ven_ui,
v_res_c_vr_m_ven_uip,
v_res_c_vr_m_ven_uii,
v_res_c_vr_m_ven_cm,
v_res_c_vr_m_ven_cmp,
v_res_c_vr_m_ven_cmi,
v_res_c_vr_m_ven_gi,
v_res_c_vr_m_ven_cp,
v_res_c_vr_m_ven_cd,
v_res_c_vr_m_ven_cd_hc,
v_res_c_vr_m_ven_cd_hc_hc,
v_res_c_vr_m_ven_cd_hc_gr,
v_res_c_vr_m_ven_cd_hi,
v_res_c_vr_m_ven_cd_hi_hi,
v_res_c_vr_m_ven_cd_hi_gr,
v_res_c_vr_m_ven_cd_oh,
v_res_c_vr_m_ven_cd_oh_oh,
v_res_c_vr_m_ven_cd_oh_gr,
v_res_c_vr_m_ven_cd_id,
v_res_c_vr_m_ven_ct,
v_res_c_vr_m_ven_ct_hg,
v_res_c_vr_m_ven_ct_hg_hg,
v_res_c_vr_m_ven_ct_hg_gr,
v_res_c_vr_m_ven_ct_hv,
v_res_c_vr_m_ven_ct_hv_hv,
v_res_c_vr_m_ven_ct_hv_gr,
v_res_c_vr_m_ven_ct_cp,
v_res_c_vr_m_ven_ct_cp_sv,
v_res_c_vr_m_ven_ct_cp_gp,
v_res_c_vr_m_ven_ct_cp_gs,
v_res_c_vr_m_ven_ct_cp_au,
v_res_c_vr_m_ven_ct_cp_cv,
v_res_c_vr_m_ven_ct_gl,
v_res_c_vr_m_ven_ct_gl_hc,
v_res_c_vr_m_ven_ct_gl_nr,
v_res_c_vr_m_ven_ct_gl_ip,
v_res_c_vr_m_ven_ct_gl_ic,
v_res_c_vr_m_ven_ca,
v_res_c_vr_m_ven_ca_vt,
v_res_c_vr_m_ven_ca_vt_pv,
v_res_c_vr_m_ven_ca_vt_op,
v_res_c_vr_m_ven_ca_cf,
v_res_c_vr_m_ven_ca_cf_pa,
v_res_c_vr_m_ven_ca_cf_nh,
v_res_c_vr_m_ven_ca_gf,
v_res_c_vr_m_ven_ca_gf_ic,
v_res_c_vr_m_ven_ca_gf_oc,
v_res_c_vr_m_ven_ca_gf_cm,
v_res_c_vr_m_ven_ca_gf_it,
v_res_c_vr_m_ven_ca_oc,
v_res_c_vr_m_ven_ca_oc_oc1,
v_res_c_vr_m_ven_ca_oc_oc2,
v_res_c_vr_m_ven_ca_oc_oc3,
v_res_c_vr_m_ven_ca_ri,
v_res_c_vr_m_ven_ci,
v_res_c_vr_m_ven_ci_vb,
v_res_c_vr_m_ven_ci_ov,
v_res_c_vr_m_ven_ci_ov_is,
v_res_c_vr_m_ven_ci_ov_im,
v_res_c_vr_m_ven_ci_ov_oc,
v_res_c_vr_m_ven_ci_rf,
v_res_c_vr_m_ven_ci_oi,
v_res_c_vr_m_ven_ci_oi_oi1,
v_res_c_vr_m_ven_ci_oi_oi2,
v_res_c_vr_m_ven_ci_oi_oi3,
v_res_c_vr_m_ven_it,
v_res_c_vr_m_ven_up,
v_res_c_vr_m_ven_up_cc,
v_res_c_vr_m_ven_up_ir,
v_res_c_vr_m_ven_up2,
v_res_c_vr_m_ven_cv,
v_res_c_vr_m_ven_vt,
v_res_c_vr_uni_ui,
v_res_c_vr_uni_uip,
v_res_c_vr_uni_uii,
v_res_c_vr_uni_cm,
v_res_c_vr_uni_cmp,
v_res_c_vr_uni_cmi,
v_res_c_vr_uni_gi,
v_res_c_vr_uni_cp,
v_res_c_vr_uni_cd,
v_res_c_vr_uni_cd_hc,
v_res_c_vr_uni_cd_hc_hc,
v_res_c_vr_uni_cd_hc_gr,
v_res_c_vr_uni_cd_hi,
v_res_c_vr_uni_cd_hi_hi,
v_res_c_vr_uni_cd_hi_gr,
v_res_c_vr_uni_cd_oh,
v_res_c_vr_uni_cd_oh_oh,
v_res_c_vr_uni_cd_oh_gr,
v_res_c_vr_uni_cd_id,
v_res_c_vr_uni_ct,
v_res_c_vr_uni_ct_hg,
v_res_c_vr_uni_ct_hg_hg,
v_res_c_vr_uni_ct_hg_gr,
v_res_c_vr_uni_ct_hv,
v_res_c_vr_uni_ct_hv_hv,
v_res_c_vr_uni_ct_hv_gr,
v_res_c_vr_uni_ct_cp,
v_res_c_vr_uni_ct_cp_sv,
v_res_c_vr_uni_ct_cp_gp,
v_res_c_vr_uni_ct_cp_gs,
v_res_c_vr_uni_ct_cp_au,
v_res_c_vr_uni_ct_cp_cv,
v_res_c_vr_uni_ct_gl,
v_res_c_vr_uni_ct_gl_hc,
v_res_c_vr_uni_ct_gl_nr,
v_res_c_vr_uni_ct_gl_ip,
v_res_c_vr_uni_ct_gl_ic,
v_res_c_vr_uni_ca,
v_res_c_vr_uni_ca_vt,
v_res_c_vr_uni_ca_vt_pv,
v_res_c_vr_uni_ca_vt_op,
v_res_c_vr_uni_ca_cf,
v_res_c_vr_uni_ca_cf_pa,
v_res_c_vr_uni_ca_cf_nh,
v_res_c_vr_uni_ca_gf,
v_res_c_vr_uni_ca_gf_ic,
v_res_c_vr_uni_ca_gf_oc,
v_res_c_vr_uni_ca_gf_cm,
v_res_c_vr_uni_ca_gf_it,
v_res_c_vr_uni_ca_oc,
v_res_c_vr_uni_ca_oc_oc1,
v_res_c_vr_uni_ca_oc_oc2,
v_res_c_vr_uni_ca_oc_oc3,
v_res_c_vr_uni_ca_ri,
v_res_c_vr_uni_ci,
v_res_c_vr_uni_ci_vb,
v_res_c_vr_uni_ci_ov,
v_res_c_vr_uni_ci_ov_is,
v_res_c_vr_uni_ci_ov_im,
v_res_c_vr_uni_ci_ov_oc,
v_res_c_vr_uni_ci_rf,
v_res_c_vr_uni_ci_oi,
v_res_c_vr_uni_ci_oi_oi1,
v_res_c_vr_uni_ci_oi_oi2,
v_res_c_vr_uni_ci_oi_oi3,
v_res_c_vr_uni_it,
v_res_c_vr_uni_up,
v_res_c_vr_uni_up_cc,
v_res_c_vr_uni_up_ir,
v_res_c_vr_uni_up2,
v_res_c_vr_uni_cv,
v_res_c_vr_uni_vt,
v_res_c_eje_ui,
v_res_c_eje_uip,
v_res_c_eje_uii,
v_res_c_eje_cm,
v_res_c_eje_cmp,
v_res_c_eje_cmi,
v_res_c_eje_gi,
v_res_c_eje_cp,
v_res_c_eje_cd,
v_res_c_eje_cd_hc,
v_res_c_eje_cd_hc_hc,
v_res_c_eje_cd_hc_gr,
v_res_c_eje_cd_hi,
v_res_c_eje_cd_hi_hi,
v_res_c_eje_cd_hi_gr,
v_res_c_eje_cd_oh,
v_res_c_eje_cd_oh_oh,
v_res_c_eje_cd_oh_gr,
v_res_c_eje_cd_id,
v_res_c_eje_ct,
v_res_c_eje_ct_hg,
v_res_c_eje_ct_hg_hg,
v_res_c_eje_ct_hg_gr,
v_res_c_eje_ct_hv,
v_res_c_eje_ct_hv_hv,
v_res_c_eje_ct_hv_gr,
v_res_c_eje_ct_cp,
v_res_c_eje_ct_cp_sv,
v_res_c_eje_ct_cp_gp,
v_res_c_eje_ct_cp_gs,
v_res_c_eje_ct_cp_au,
v_res_c_eje_ct_cp_cv,
v_res_c_eje_ct_gl,
v_res_c_eje_ct_gl_hc,
v_res_c_eje_ct_gl_nr,
v_res_c_eje_ct_gl_ip,
v_res_c_eje_ct_gl_ic,
v_res_c_eje_ca,
v_res_c_eje_ca_vt,
v_res_c_eje_ca_vt_pv,
v_res_c_eje_ca_vt_op,
v_res_c_eje_ca_cf,
v_res_c_eje_ca_cf_pa,
v_res_c_eje_ca_cf_nh,
v_res_c_eje_ca_gf,
v_res_c_eje_ca_gf_ic,
v_res_c_eje_ca_gf_oc,
v_res_c_eje_ca_gf_cm,
v_res_c_eje_ca_gf_it,
v_res_c_eje_ca_oc,
v_res_c_eje_ca_oc_oc1,
v_res_c_eje_ca_oc_oc2,
v_res_c_eje_ca_oc_oc3,
v_res_c_eje_ca_ri,
v_res_c_eje_ci,
v_res_c_eje_ci_vb,
v_res_c_eje_ci_ov,
v_res_c_eje_ci_ov_is,
v_res_c_eje_ci_ov_im,
v_res_c_eje_ci_ov_oc,
v_res_c_eje_ci_rf,
v_res_c_eje_ci_oi,
v_res_c_eje_ci_oi_oi1,
v_res_c_eje_ci_oi_oi2,
v_res_c_eje_ci_oi_oi3,
v_res_c_eje_it,
v_res_c_eje_up,
v_res_c_eje_up_cc,
v_res_c_eje_up_ir,
v_res_c_eje_up2,
v_res_c_eje_cv,
v_res_c_eje_vt,
v_res_c_eje_cvg
  );			
			
			
 END LOOP obtener_c_resumen_consolidado;         
  CLOSE c_resumen_consolidado; 
 
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_FLUJO_CAJA`()
BEGIN
  DECLARE v_fcc_cons_id                                                                                VARCHAR(12);
  DECLARE v_fcc_fecha                                                                                  date;
  DECLARE v_fcc_urbanismo_interno_materiales_mobra                                       			   DECIMAL(10,0);
  DECLARE v_fcc_urbanismo_presupuesto                                            					   DECIMAL(10,0);
  DECLARE v_fcc_urbanismo_incrementos                                          						   DECIMAL(10,0);
  DECLARE v_fcc_costo_materiales_mano_obra                                           				   DECIMAL(10,0);
  DECLARE v_fcc_costo_materiales_presupuesto                                                     	   DECIMAL(10,0);
  DECLARE v_fcc_costo_materiales_incremento                                            				   DECIMAL(10,0);
  DECLARE v_fcc_gastos_imprevistos                                               					   DECIMAL(10,0);
  DECLARE v_fcc_costos_post_ventas                                                 					   DECIMAL(10,0);
  DECLARE v_fcc_costo_directo_construccion                                           				   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_construccion                                            					   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_construccion_honorarios_construccion                              		   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_construccion_gastos_reembolsables                                  		   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_interventoria                                 							   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_interventoria_honorarios_interventoria                    				   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_interventoria_gastos_reembolsables                      					   DECIMAL(10,0);
  DECLARE v_fcc_otros_honorarios_disenios_otros                              						   DECIMAL(10,0);
  DECLARE v_fcc_otros_honorarios_disenios_otros_otros_honorarios_disenios_otros            			   DECIMAL(10,0);
  DECLARE v_fcc_otros_honorarios_disenios_otros_gastos_reembolsables                   				   DECIMAL(10,0);
  DECLARE v_fcc_impuestos_y_derechos                                   								   DECIMAL(10,0);
  DECLARE v_fcc_costo_total_de_construccion                                							   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_gerencia                                 								   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_gerencia_honorarios_gerencia                       					   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_gerencia_gastos_reembolsables                        					   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_ventas                                   								   DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_ventas_honorarios_ventas                         					       DECIMAL(10,0);
  DECLARE v_fcc_honorarios_de_ventas_gastos_reembolsables                        					   DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas                                  							   DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas_sala_ventas_unidades_modelo                                    DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas_gastos_publicidad                                              DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas_gastos_sala_ventas                       				       DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas_administracion_unidades_x_entregar               			   DECIMAL(10,0);
  DECLARE v_fcc_costos_promocion_ventas_comisiones_de_ventas                       				   	   DECIMAL(10,0);
  DECLARE v_fcc_gastos_legales                                     									   DECIMAL(10,0);
  DECLARE v_fcc_gastos_legales_hipotecas_credito_constructor                       				 	   DECIMAL(10,0);
  DECLARE v_fcc_gastos_legales_notariales_registro_ventas                        					   DECIMAL(10,0);
  DECLARE v_fcc_gastos_legales_impuesto_predial_inmuebles_escrr_entr                   				   DECIMAL(10,0);
  DECLARE v_fcc_gastos_legales_impuesto_ICA                                							   DECIMAL(10,0);
  DECLARE v_fcc_costo_total_antes_terreno_y_financieros                          					   DECIMAL(10,0);
  DECLARE v_fcc_valor_terreno_urbanizado                                 							   DECIMAL(10,0);
  DECLARE v_fcc_valor_terreno_urbanizado_valor_adquisicion                       					   DECIMAL(10,0);
  DECLARE v_fcc_valor_terreno_urbanizado_costos_urbanismo_otros                      			       DECIMAL(10,0);
  DECLARE v_fcc_comisiones_fiducia                                       							   DECIMAL(10,0);
  DECLARE v_fcc_comisiones_fiducia_preventas_administracion                              			   DECIMAL(10,0);
  DECLARE v_fcc_comisiones_fiducia_nuevo_hogar                                   					   DECIMAL(10,0);
  DECLARE v_fcc_gastos_financieros                                           						   DECIMAL(10,0);
  DECLARE v_fcc_gastos_financieros_intereses_credito_constructor                                       DECIMAL(10,0);
  DECLARE v_fcc_gastos_financieros_otros_costos_del_credito                                            DECIMAL(10,0);
  DECLARE v_fcc_gastos_financieros_correcion_monetaria_construccion                                    DECIMAL(10,0);
  DECLARE v_fcc_gastos_financieros_impto_transacciones_financieras                                     DECIMAL(10,0);
  DECLARE v_fcc_otros_costos_y_gastos                                                                  DECIMAL(10,0);
  DECLARE v_fcc_otros_costos_y_gastos_costos_y_gastos_1                                                DECIMAL(10,0);
  DECLARE v_fcc_otros_costos_y_gastos_costos_y_gastos_2                                                DECIMAL(10,0);
  DECLARE v_fcc_otros_costos_y_gastos_costos_y_gastos_3                                                DECIMAL(10,0);
  DECLARE v_fcc_reintegros_IVA_proyectos_vis                                                           DECIMAL(10,0);
  DECLARE v_fcc_costo_total_directos_e_indirectos                                                      DECIMAL(10,0);
  DECLARE v_fcc_total_egresos_sibn_correccion_monetaria                                                DECIMAL(10,0);
  DECLARE v_fcc_desembolsos_creditos_constructor_y_terreno                                             DECIMAL(10,0);
  DECLARE v_fcc_abonos_extraordinarios_creditos_constructor_y_terreno                                  DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas                                                                    DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_abonos_a_separacion                                                DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_cartera_cuota_inicial                                              DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_saldo_cuota_inicial_abono_esscritura                               DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_subsidio_VIS_ahorro_programado                                     DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_excedentes_credito_conpradores                                     DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_giros_directos_creditos_otras_entidades                            DECIMAL(10,0);
  DECLARE v_fcc_ingresos_por_ventas_ingresos_por_recibir_ventas_realizadas                             DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos_por_ventas_intereses                                                    DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos_por_ventas_intereses_intereses_subrogacion                              DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos_por_ventas_intereses_intereses_mora_no_aplica                           DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos_por_ventas_intereses_ofertas_comerciales_y_otros_ingresos               DECIMAL(10,0);
  DECLARE v_fcc_rendimientos_fideicomiso                                                               DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos                                                                         DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos1                                                                        DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos2                                                                        DECIMAL(10,0);
  DECLARE v_fcc_otros_ingresos3                                                                        DECIMAL(10,0);
  DECLARE v_fcc_ingresos_totales                                                                       DECIMAL(10,0);
  DECLARE v_fcc_flujo_neto_de_caja_ai_y_creditos_tesoreria                                             DECIMAL(10,0);
  DECLARE v_fcc_flujo_acumulado_de_caja1                                                                DECIMAL(10,0);
  DECLARE v_fcc_costo_creditos_de_tesoreria                                                            DECIMAL(10,0);
  DECLARE v_fcc_impuesto_de_renta                                                                      DECIMAL(10,0);
  DECLARE v_fcc_flujo_neto_de_caja                                                                     DECIMAL(10,0);
  DECLARE v_fcc_flujo_acumulado_de_caja                                                                DECIMAL(10,0);
  DECLARE v_fcc_proyeccion_ventas_unidades                                                             DECIMAL(10,0);
  DECLARE v_fcc_ventas_brutas                                                                          DECIMAL(10,0);
  DECLARE v_fcc_precio_promedio                                                                        DECIMAL(10,0);
  DECLARE v_fcc_proyeccion_entregas_unidades                                                           DECIMAL(10,0);
  DECLARE v_fcc_proyeccion_escrituras_valor                                                            DECIMAL(10,0);
  DECLARE v_fcc_escrituras_unidades                                                                    DECIMAL(10,0);
  DECLARE v_fcc_proyeccion_subrogaciones_valor                                                         DECIMAL(10,0);
  DECLARE v_fcc_vpn							                                                           DECIMAL(10,0);
  DECLARE v_fcc_tir_ea 						                                                           DECIMAL(10,0);
  DECLARE v_fcc_tir_em                                                                    			   DECIMAL(10,0);
  DECLARE v_fcc_tir_mod_ea                                                         					   DECIMAL(10,0);
  DECLARE v_fcc_tir_mod_em                                                                        	   DECIMAL(10,0);
  DECLARE v_finished 																				   integer default 0;
  
  
  
    
    DECLARE c_flujo_caja_consolidado CURSOR FOR
    SELECT CONS_ID
	,FLC_FECHA                                                                                         FLC_C_FECHA
    ,SUM(FLC_URBANISMO_INTERNO)                                                                        FLC_C_URBANISMO_INTERNO
    ,SUM(FLC_UI_PRESUPUESTO)                                                                           FLC_C_UI_PRESUPUESTO
    ,SUM(FLC_UI_INCREMENTOS)                                                                           FLC_C_UI_INCREMENTOS
    ,SUM(FLC_COSTOS_MATERIALES_MANO_OBRA)                                                              FLC_C_COSTOS_MATERIALES_MANO_OBRA
    ,SUM(FLC_CM_PRESUPUESTO)                                                                           FLC_C_CM_PRESUPUESTO
    ,SUM(FLC_CM_INCREMENTOS)                                                                           FLC_C_CM_INCREMENTOS
    ,SUM(FLC_GASTOS_IMPREVISTOS)                                                                       FLC_C_GASTOS_IMPREVISTOS
    ,SUM(FLC_COSTOS_POSTVENTA)                                                                         FLC_C_COSTOS_POSTVENTA
    ,SUM(FLC_COSTO_DIRECTO_CONSTRUCCION)                                                               FLC_C_COSTO_DIRECTO_CONSTRUCCION
    ,SUM(FLC_HONORARIOS_CONSTRUCCION)                                                                  FLC_C_HONORARIOS_CONSTRUCCION
    ,SUM(FLC_HC_HONORARIOS_CONSTRUCCION)                                                               FLC_C_HC_HONORARIOS_CONSTRUCCION
    ,SUM(FLC_HC_GASTOS_REEMBOLSABLES)                       										   FLC_C_HC_GASTOS_REEMBOLSABLES
    ,SUM(FLC_HONORARIOS_INTERVENTORIA)                                                                 FLC_C_HONORARIOS_INTERVENTORIA
    ,SUM(FLC_HI_HONORARIOS_INTERVENTORIA)                                                              FLC_C_HI_HONORARIOS_INTERVENTORIA
    ,SUM(FLC_HI_GASTOS_REEMBOSABLES)                                                                   FLC_C_HI_GASTOS_REEMBOSABLES
    ,SUM(FLC_OTROS_HONORARIOS)                                                                         FLC_C_OH_OTROS_HONORARIOS
    ,SUM(FLC_OH_OTROS_HONORARIOS)                                                                      FLC_C_OH_OTROS_HONORARIOS
    ,SUM(FLC_OH_GASTOS_REEMBOLSABLES)                                                                  FLC_C_OH_GASTOS_REEMBOLSABLES
    ,SUM(FLC_IMPUESTOS_Y_DERECHOS)                                                                     FLC_C_IMPUESTOS_Y_DERECHOS
    ,SUM(FLC_COSTO_TOTAL_CONSTRUCCION)                                                                 FLC_C_COSTO_TOTAL_CONSTRUCCION
    ,SUM(FLC_HONORARIOS_GERENCIA)                                                                      FLC_C_HONORARIOS_GERENCIA
    ,SUM(FLC_HG_HONORARIOS_GERENCIA)                                                                   FLC_C_HG_HONORARIOS_GERENCIA
    ,SUM(FLC_HG_GASTOS_REEMBOLSABLES)                                                                  FLC_C_HG_GASTOS_REEMBOLSABLES
    ,SUM(FLC_HONORARIOS_VENTAS)                                                                        FLC_C_HONORARIOS_VENTAS
    ,SUM(FLC_HV_HONORARIOS_VENTAS)                                                                     FLC_C_HV_HONORARIOS_VENTAS
    ,SUM(FLC_HV_GASTOS_REEMBOLSABLES)                                                                  FLC_C_HV_GASTOS_REEMBOLSABLES
    ,SUM(FLC_COSTOS_PROMOCION_Y_VENTAS)                                                                FLC_C_COSTOS_PROMOCION_Y_VENTAS
    ,SUM(FLC_CP_SALA_DE_VENTAS_UNIDADES_MODELO)                                                        FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO
    ,SUM(FLC_CP_GASTOS_PUBLICIDAD)                                                                     FLC_C_CP_GASTOS_PUBLICIDAD
    ,SUM(FLC_CP_GASTOS_SALA_DE_VENTAS)                                                                 FLC_C_CP_GASTOS_SALA_DE_VENTAS
    ,SUM(FLC_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR)                                                  FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR
    ,SUM(FLC_CP_COMISIONES_VENTAS)                                                                     FLC_C_CP_COMISIONES_VENTAS
    ,SUM(FLC_GASTOS_LEGALES)                                                                           FLC_C_GASTOS_LEGALES
    ,SUM(FLC_GL_HIPOTECAS_CREDITO_CONSTRUCTOR)                                                         FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR
    ,SUM(FLC_GL_NOTARIALES_REGISTRO_DE_VENTAS)                                                         FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS
    ,SUM(FLC_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA)                                              FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA
    ,SUM(FLC_GL_IMPUESTO_ICA)                                                                          FLC_C_GL_IMPUESTO_ICA
    ,SUM(FLC_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS)                                                  FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS
    ,SUM(FLC_VALOR_TERRENO_URBANIZADO)                                                                 FLC_C_VALOR_TERRENO_URBANIZADO
    ,SUM(FLC_VT_VALOR_ADQUISICION)                                                                     FLC_C_VT_VALOR_ADQUISICION
    ,SUM(FLC_VT_COSTOS_URBANISMO_Y_OTROS)                                                              FLC_C_VT_COSTOS_URBANISMO_Y_OTROS
    ,SUM(FLC_COMISIONES_FIDUCIA)                                                                       FLC_C_COMISIONES_FIDUCIA
    ,SUM(FLC_CF_PREVENTAS_Y_ADMINISTRACION)                                                            FLC_C_CF_PREVENTAS_Y_ADMINISTRACION
    ,SUM(FLC_CF_NUEVOGAR)                                                                              FLC_C_CF_NUEVOGAR
    ,SUM(FLC_GASTOS_FINANCIEROS)                                                                       FLC_C_GASTOS_FINANCIEROS
    ,SUM(FLC_GF_INTERESES_CREDITOS_CONSTRUCTOR)                                                        FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR
    ,SUM(FLC_GF_OTROS_COSTOS_CREDITO)                                                                  FLC_C_GF_OTROS_COSTOS_CREDITO
    ,SUM(FLC_GF_CORRECCION_MONETARIA_CONSTRUCCION)                                                     FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION
    ,SUM(FLC_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)                                                FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF
    ,SUM(FLC_OTROS_COSTOS_Y_GASTOS)                                                                    FLC_C_OTROS_COSTOS_Y_GASTOS
    ,SUM(FLC_OC_COSTOS_GASTOS1)                                                                        FLC_C_OC_COSTOS_GASTOS1
    ,SUM(FLC_OC_COSTOS_GASTOS2)                                                                        FLC_C_OC_COSTOS_GASTOS2
    ,SUM(FLC_OC_COSTOS_GASTOS3)                                                                        FLC_C_OC_COSTOS_GASTOS3
    ,SUM(FLC_REINTEGROS_IVA_PROYECTOS_VIS)                                                             FLC_C_REINTEGROS_IVA_PROYECTOS_VIS
    ,SUM(FLC_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)                 									   FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS
    ,SUM(FLC_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)             				 					   FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
    ,SUM(FLC_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)            								   FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
    ,SUM(FLC_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)       							   FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
    ,SUM(FLC_INGRESOS_POR_VENTAS)                         											   FLC_C_INGRESOS_POR_VENTAS
    ,SUM(FLC_IV_ABONOS_SEPARACION)                        												FLC_C_IV_ABONOS_SEPARACION
    ,SUM(FLC_IV_CARTERA_CUOTA_INICIAL)                      											FLC_C_IV_CARTERA_CUOTA_INICIAL
    ,SUM(FLC_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)              									FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA
    ,SUM(FLC_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)                 										FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
    ,SUM(FLC_IV_EXCEDENTES_CREDITO_COMPRADORES)                 										FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES
    ,SUM(FLC_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)           		 								FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
    ,SUM(FLC_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)             									FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
    ,SUM(FLC_OTROS_INGRESOS_VENTAS_INTERESES)                   										FLC_C_OTROS_INGRESOS_VENTAS_INTERESES
    ,SUM(FLC_OI_INTERESES_SUBROGACION)                      											FLC_C_OI_INTERESES_SUBROGACION
    ,SUM(FLC_OI_INTERESES_MORA)                         												FLC_C_OI_INTERESES_MORA
    ,SUM(FLC_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)               										FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS
    ,SUM(FLC_RENDIMIENTOS_FIDEICOMISO)                      											FLC_C_RENDIMIENTOS_FIDEICOMISO
    ,SUM(FLC_OTROS_INGRESOS)                          													FLC_C_OTROS_INGRESOS
    ,SUM(FLC_OI_INGRESOS1)                            													FLC_C_OI_INGRESOS1
    ,SUM(FLC_OI_INGRESOS2)                            													FLC_C_OI_INGRESOS2
    ,SUM(FLC_OI_INGRESOS3)                            													FLC_C_OI_INGRESOS3
    ,SUM(FLC_INGRESOS_TOTALES)                         			 										FLC_C_INGRESOS_TOTALES
    ,SUM(FLC_FLUJO_NETO_CAJA_CT)                        												FLC_C_FLUJO_NETO_CAJA_CT
    ,SUM(FLC_FLUJO_ACUMULADO_CAJA_CT)                       											FLC_C_FLUJO_ACUMULADO_CAJA_CT
    ,SUM(FLC_COSTO_CREDITOS_TESORERIA)                      											FLC_C_COSTO_CREDITOS_TESORERIA
    ,SUM(FLC_IMPUESTO_DE_RENTA)                         												FLC_C_IMPUESTO_DE_RENTA
    ,SUM(FLC_FLUJO_NETO_CAJA)                           												FLC_C_FLUJO_NETO_CAJA
    ,SUM(FLC_FLUJO_ACUMULADO_CAJA)                        												FLC_C_FLUJO_ACUMULADO_CAJA
    ,SUM(FLC_PROYECCION_VENTAS_UNIDADES)                    											FLC_C_PROYECCION_VENTAS_UNIDADES
    ,SUM(FLC_VENTAS_BRUTAS)                           													FLC_C_VENTAS_BRUTAS
    ,SUM(FLC_PRECIO_PROMEDIO)                           												FLC_C_PRECIO_PROMEDIO
    ,SUM(FLC_PROYECCION_ENTREGAS_UNIDADES)                    											FLC_C_PROYECCION_ENTREGAS_UNIDADES
    ,SUM(FLC_PROYECCION_ESCRITURAS_VALOR)                     											FLC_C_PROYECCION_ESCRITURAS_VALOR
    ,SUM(FLC_PROYECCION_ESCRITURAS_UNIDADES)                  											FLC_C_PROYECCION_ESCRITURAS_UNIDADES
    ,SUM(FLC_PROYECCION_SUBROGACIONES_VALOR)                  											FLC_C_PROYECCION_SUBROGACIONES_VALOR
    ,SUM(FLC_VPN)                                 														FLC_C_VPN
    ,SUM(FLC_TIR_EA)                              														FLC_C_TIR_EA
    ,SUM(FLC_TIR_EM)                              														FLC_C_TIR_EM
    ,SUM(FLC_TIR_MOD_EA)                            													FLC_C_TIR_MOD_EA
    ,SUM(FLC_TIR_MOD_EM)                            													FLC_C_C_TIR_MOD_EM
      FROM TB_SELECCION
          ,TB_FLUJO_CAJA
          ,TB_CONSOLIDADOS
     WHERE SEL_DET_PRO_ID IS NOT NULL
       AND SEL_DET_PRO_ID = FLC_DET_PRO_ID
       AND SEL_DET_ETAPA  = FLC_DET_ETAPA
       AND SEL_MODELO     = FLC_MODELO
       AND CONS_CONS      = 'N'
       AND SEL_CONS_ID  = 'N'
       AND FLC_FECHA BETWEEN CASE CONS_FEC_GEN_DES
                 WHEN '0000-00-00' THEN FLC_FECHA 
                 ELSE CONS_FEC_GEN_DES
                             END
       AND CASE CONS_FEC_GEN_HAS
                 WHEN '0000-00-00' THEN FLC_FECHA 
                 ELSE CONS_FEC_GEN_HAS
                             END
  GROUP BY FLC_FECHA;
  
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

   OPEN c_flujo_caja_consolidado;
   obtener_c_flujo_caja_consolidado: LOOP
   FETCH c_flujo_caja_consolidado INTO 
   v_fcc_cons_id                                                                 ,               
   v_fcc_fecha                                                                   ,               
   v_fcc_urbanismo_interno_materiales_mobra                                      ,         
   v_fcc_urbanismo_presupuesto                                                   ,     
   v_fcc_urbanismo_incrementos                                                   ,     
   v_fcc_costo_materiales_mano_obra                                              ,       
   v_fcc_costo_materiales_presupuesto                                            ,             
   v_fcc_costo_materiales_incremento                                             ,         
   v_fcc_gastos_imprevistos                                                      ,     
   v_fcc_costos_post_ventas                                                      ,       
   v_fcc_costo_directo_construccion                                              ,       
   v_fcc_honorarios_construccion                                                 ,       
   v_fcc_honorarios_construccion_honorarios_construccion                         ,           
   v_fcc_honorarios_construccion_gastos_reembolsables                            ,             
   v_fcc_honorarios_interventoria                                                , 
   v_fcc_honorarios_interventoria_honorarios_interventoria                       ,       
   v_fcc_honorarios_interventoria_gastos_reembolsables                           ,       
   v_fcc_otros_honorarios_disenios_otros                                         ,   
   v_fcc_otros_honorarios_disenios_otros_otros_honorarios_disenios_otros         ,           
   v_fcc_otros_honorarios_disenios_otros_gastos_reembolsables                    ,         
   v_fcc_impuestos_y_derechos                                                    , 
   v_fcc_costo_total_de_construccion                                             ,   
   v_fcc_honorarios_de_gerencia                                                  , 
   v_fcc_honorarios_de_gerencia_honorarios_gerencia                              ,     
   v_fcc_honorarios_de_gerencia_gastos_reembolsables                             ,       
   v_fcc_honorarios_de_ventas                                                    , 
   v_fcc_honorarios_de_ventas_honorarios_ventas                                  ,       
   v_fcc_honorarios_de_ventas_gastos_reembolsables                               ,     
   v_fcc_costos_promocion_ventas                                                 , 
   v_fcc_costos_promocion_ventas_sala_ventas_unidades_modelo                     ,               
   v_fcc_costos_promocion_ventas_gastos_publicidad                               ,               
   v_fcc_costos_promocion_ventas_gastos_sala_ventas                              ,       
   v_fcc_costos_promocion_ventas_administracion_unidades_x_entregar              ,         
   v_fcc_costos_promocion_ventas_comisiones_de_ventas                            ,         
   v_fcc_gastos_legales                                                          ,  
   v_fcc_gastos_legales_hipotecas_credito_constructor                            ,       
   v_fcc_gastos_legales_notariales_registro_ventas                               ,     
   v_fcc_gastos_legales_impuesto_predial_inmuebles_escrr_entr                    ,         
   v_fcc_gastos_legales_impuesto_ICA                                             ,   
   v_fcc_costo_total_antes_terreno_y_financieros                                 ,     
   v_fcc_valor_terreno_urbanizado                                                , 
   v_fcc_valor_terreno_urbanizado_valor_adquisicion                              ,     
   v_fcc_valor_terreno_urbanizado_costos_urbanismo_otros                         ,         
   v_fcc_comisiones_fiducia                                                      , 
   v_fcc_comisiones_fiducia_preventas_administracion                             ,         
   v_fcc_comisiones_fiducia_nuevo_hogar                                          ,     
   v_fcc_gastos_financieros                                                      ,   
   v_fcc_gastos_financieros_intereses_credito_constructor                        ,               
   v_fcc_gastos_financieros_otros_costos_del_credito                             ,               
   v_fcc_gastos_financieros_correcion_monetaria_construccion                     ,               
   v_fcc_gastos_financieros_impto_transacciones_financieras                      ,               
   v_fcc_otros_costos_y_gastos                                                   ,               
   v_fcc_otros_costos_y_gastos_costos_y_gastos_1                                 ,               
   v_fcc_otros_costos_y_gastos_costos_y_gastos_2                                 ,               
   v_fcc_otros_costos_y_gastos_costos_y_gastos_3                                 ,               
   v_fcc_reintegros_IVA_proyectos_vis                                            ,               
   v_fcc_costo_total_directos_e_indirectos                                       ,               
   v_fcc_total_egresos_sibn_correccion_monetaria                                 ,               
   v_fcc_desembolsos_creditos_constructor_y_terreno                              ,               
   v_fcc_abonos_extraordinarios_creditos_constructor_y_terreno                   ,               
   v_fcc_ingresos_por_ventas                                                     ,               
   v_fcc_ingresos_por_ventas_abonos_a_separacion                                 ,               
   v_fcc_ingresos_por_ventas_cartera_cuota_inicial                               ,               
   v_fcc_ingresos_por_ventas_saldo_cuota_inicial_abono_esscritura                ,               
   v_fcc_ingresos_por_ventas_subsidio_VIS_ahorro_programado                      ,               
   v_fcc_ingresos_por_ventas_excedentes_credito_conpradores                      ,               
   v_fcc_ingresos_por_ventas_giros_directos_creditos_otras_entidades             ,               
   v_fcc_ingresos_por_ventas_ingresos_por_recibir_ventas_realizadas              ,               
   v_fcc_otros_ingresos_por_ventas_intereses                                     ,               
   v_fcc_otros_ingresos_por_ventas_intereses_intereses_subrogacion               ,               
   v_fcc_otros_ingresos_por_ventas_intereses_intereses_mora_no_aplica            ,               
   v_fcc_otros_ingresos_por_ventas_intereses_ofertas_comerciales_y_otros_ingresos,               
   v_fcc_rendimientos_fideicomiso                                                ,               
   v_fcc_otros_ingresos                                                          ,               
   v_fcc_otros_ingresos1                                                         ,               
   v_fcc_otros_ingresos2                                                         ,               
   v_fcc_otros_ingresos3                                                         ,               
   v_fcc_ingresos_totales                                                        ,               
   v_fcc_flujo_neto_de_caja_ai_y_creditos_tesoreria                              ,               
   v_fcc_flujo_acumulado_de_caja1                                                 ,               
   v_fcc_costo_creditos_de_tesoreria                                             ,               
   v_fcc_impuesto_de_renta                                                       ,               
   v_fcc_flujo_neto_de_caja                                                      ,               
   v_fcc_flujo_acumulado_de_caja                                                 ,               
   v_fcc_proyeccion_ventas_unidades                                              ,               
   v_fcc_ventas_brutas                                                           ,               
   v_fcc_precio_promedio                                                         ,               
   v_fcc_proyeccion_entregas_unidades                                            ,               
   v_fcc_proyeccion_escrituras_valor                                             ,               
   v_fcc_escrituras_unidades                                                     ,               
   v_fcc_proyeccion_subrogaciones_valor                                          ,               
   v_fcc_vpn							                                         ,  
   v_fcc_tir_ea 						                                         ,
   v_fcc_tir_em                                                                  ,
   v_fcc_tir_mod_ea                                                              , 
   v_fcc_tir_mod_em                                                              ; 

IF v_finished = 1 THEN
                LEAVE obtener_c_flujo_caja_consolidado;
            END IF;   

INSERT INTO TB_C_FLUJO_CAJA (
  FLC_C_CONS_ID, 
  FLC_C_FECHA, 
  FLC_C_URBANISMO_INTERNO, 
  FLC_C_UI_PRESUPUESTO, 
  FLC_C_UI_INCREMENTOS, 
  FLC_C_COSTOS_MATERIALES_MANO_OBRA, 
  FLC_C_CM_PRESUPUESTO, 
  FLC_C_CM_INCREMENTOS, 
  FLC_C_GASTOS_IMPREVISTOS, 
  FLC_C_COSTOS_POSTVENTA, 
  FLC_C_COSTO_DIRECTO_CONSTRUCCION, 
  FLC_C_HONORARIOS_CONSTRUCCION, 
  FLC_C_HC_HONORARIOS_CONSTRUCCION, 
  FLC_C_HC_GASTOS_REEMBOLSABLES, 
  FLC_C_HONORARIOS_INTERVENTORIA, 
  FLC_C_HI_HONORARIOS_INTERVENTORIA, 
  FLC_C_HI_GASTOS_REEMBOSABLES,  
  FLC_C_OTROS_HONORARIOS, 
  FLC_C_OH_OTROS_HONORARIOS, 
  FLC_C_OH_GASTOS_REEMBOLSABLES, 
  FLC_C_IMPUESTOS_Y_DERECHOS, 
  FLC_C_COSTO_TOTAL_CONSTRUCCION, 
  FLC_C_HONORARIOS_GERENCIA, 
  FLC_C_HG_HONORARIOS_GERENCIA, 
  FLC_C_HG_GASTOS_REEMBOLSABLES, 
  FLC_C_HONORARIOS_VENTAS, 
  FLC_C_HV_HONORARIOS_VENTAS, 
  FLC_C_HV_GASTOS_REEMBOLSABLES, 
  FLC_C_COSTOS_PROMOCION_Y_VENTAS, 
  FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO, 
  FLC_C_CP_GASTOS_PUBLICIDAD, 
  FLC_C_CP_GASTOS_SALA_DE_VENTAS, 
  FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR, 
  FLC_C_CP_COMISIONES_VENTAS, 
  FLC_C_GASTOS_LEGALES, 
  FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR, 
  FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS, 
  FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA, 
  FLC_C_GL_IMPUESTO_ICA, 
  FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS, 
  FLC_C_VALOR_TERRENO_URBANIZADO, 
  FLC_C_VT_VALOR_ADQUISICION, 
  FLC_C_VT_COSTOS_URBANISMO_Y_OTROS, 
  FLC_C_COMISIONES_FIDUCIA, 
  FLC_C_CF_PREVENTAS_Y_ADMINISTRACION, 
  FLC_C_CF_NUEVOGAR, 
  FLC_C_GASTOS_FINANCIEROS, 
  FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR, 
  FLC_C_GF_OTROS_COSTOS_CREDITO, 
  FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION, 
  FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF, 
  FLC_C_OTROS_COSTOS_Y_GASTOS, 
  FLC_C_OC_COSTOS_GASTOS1, 
  FLC_C_OC_COSTOS_GASTOS2, 
  FLC_C_OC_COSTOS_GASTOS3, 
  FLC_C_REINTEGROS_IVA_PROYECTOS_VIS, 
  FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS, 
  FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA, 
  FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO, 
  FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO, 
  FLC_C_INGRESOS_POR_VENTAS, 
  FLC_C_IV_ABONOS_SEPARACION, 
  FLC_C_IV_CARTERA_CUOTA_INICIAL, 
  FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA, 
  FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO, 
  FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES, 
  FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES, 
  FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS, 
  FLC_C_OTROS_INGRESOS_VENTAS_INTERESES, 
  FLC_C_OI_INTERESES_SUBROGACION, 
  FLC_C_OI_INTERESES_MORA, 
  FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS, 
  FLC_C_RENDIMIENTOS_FIDEICOMISO, 
  FLC_C_OTROS_INGRESOS, 
  FLC_C_OI_INGRESOS1, 
  FLC_C_OI_INGRESOS2, 
  FLC_C_OI_INGRESOS3, 
  FLC_C_INGRESOS_TOTALES, 
  FLC_C_FLUJO_NETO_CAJA_CT, 
  FLC_C_FLUJO_ACUMULADO_CAJA_CT, 
  FLC_C_COSTO_CREDITOS_TESORERIA, 
  FLC_C_IMPUESTO_DE_RENTA, 
  FLC_C_FLUJO_NETO_CAJA, 
  FLC_C_FLUJO_ACUMULADO_CAJA, 
  FLC_C_PROYECCION_VENTAS_UNIDADES, 
  FLC_C_VENTAS_BRUTAS, 
  FLC_C_PRECIO_PROMEDIO, 
  FLC_C_PROYECCION_ENTREGAS_UNIDADES, 
  FLC_C_PROYECCION_ESCRITURAS_VALOR, 
  FLC_C_PROYECCION_ESCRITURAS_UNIDADES, 
  FLC_C_PROYECCION_SUBROGACIONES_VALOR, 
  FLC_C_VPN, 
  FLC_C_TIR_EA, 
  FLC_C_TIR_EM, 
  FLC_C_TIR_MOD_EA, 
  FLC_C_C_TIR_MOD_EM)
VALUES (
   v_fcc_cons_id,
   v_fcc_fecha, 
   v_fcc_urbanismo_interno_materiales_mobra,                      
   v_fcc_urbanismo_presupuesto, 
   v_fcc_urbanismo_incrementos,
   v_fcc_costo_materiales_mano_obra,
   v_fcc_costo_materiales_presupuesto, 
   v_fcc_costo_materiales_incremento, 
   v_fcc_gastos_imprevistos, 
   v_fcc_costos_post_ventas, 
   v_fcc_costo_directo_construccion, 
   v_fcc_honorarios_construccion, 
   v_fcc_honorarios_construccion_honorarios_construccion,
   v_fcc_honorarios_construccion_gastos_reembolsables, 
   v_fcc_honorarios_interventoria, 
   v_fcc_honorarios_interventoria_honorarios_interventoria, 
   v_fcc_honorarios_interventoria_gastos_reembolsables, 
   v_fcc_otros_honorarios_disenios_otros,  
   v_fcc_otros_honorarios_disenios_otros_otros_honorarios_disenios_otros, 
   v_fcc_otros_honorarios_disenios_otros_gastos_reembolsables, 
   v_fcc_impuestos_y_derechos, 
   v_fcc_costo_total_de_construccion, 
   v_fcc_honorarios_de_gerencia, 
   v_fcc_honorarios_de_gerencia_honorarios_gerencia, 
   v_fcc_honorarios_de_gerencia_gastos_reembolsables, 
   v_fcc_honorarios_de_ventas, 
   v_fcc_honorarios_de_ventas_honorarios_ventas, 
   v_fcc_honorarios_de_ventas_gastos_reembolsables, 
   v_fcc_costos_promocion_ventas, 
   v_fcc_costos_promocion_ventas_sala_ventas_unidades_modelo, 
   v_fcc_costos_promocion_ventas_gastos_publicidad, 
   v_fcc_costos_promocion_ventas_gastos_sala_ventas, 
   v_fcc_costos_promocion_ventas_administracion_unidades_x_entregar, 
   v_fcc_costos_promocion_ventas_comisiones_de_ventas, 
   v_fcc_gastos_legales, 
   v_fcc_gastos_legales_hipotecas_credito_constructor, 
   v_fcc_gastos_legales_notariales_registro_ventas, 
   v_fcc_gastos_legales_impuesto_predial_inmuebles_escrr_entr, 
   v_fcc_gastos_legales_impuesto_ICA, 
   v_fcc_costo_total_antes_terreno_y_financieros, 
   v_fcc_valor_terreno_urbanizado,
   v_fcc_valor_terreno_urbanizado_valor_adquisicion, 
   v_fcc_valor_terreno_urbanizado_costos_urbanismo_otros,
   v_fcc_comisiones_fiducia,         
   v_fcc_comisiones_fiducia_preventas_administracion,             
   v_fcc_comisiones_fiducia_nuevo_hogar,           
   v_fcc_gastos_financieros,                 
   v_fcc_gastos_financieros_intereses_credito_constructor,                               
   v_fcc_gastos_financieros_otros_costos_del_credito,                                    
   v_fcc_gastos_financieros_correcion_monetaria_construccion,                            
   v_fcc_gastos_financieros_impto_transacciones_financieras,                             
   v_fcc_otros_costos_y_gastos,                                                          
   v_fcc_otros_costos_y_gastos_costos_y_gastos_1,                                        
   v_fcc_otros_costos_y_gastos_costos_y_gastos_2,                                        
   v_fcc_otros_costos_y_gastos_costos_y_gastos_3,                                        
   v_fcc_reintegros_IVA_proyectos_vis,                                                   
   v_fcc_costo_total_directos_e_indirectos,                               
   v_fcc_total_egresos_sibn_correccion_monetaria,                                    
   v_fcc_desembolsos_creditos_constructor_y_terreno,                           
   v_fcc_abonos_extraordinarios_creditos_constructor_y_terreno,                             
   v_fcc_ingresos_por_ventas,                                                          
   v_fcc_ingresos_por_ventas_abonos_a_separacion,                                        
   v_fcc_ingresos_por_ventas_cartera_cuota_inicial,                                       
   v_fcc_ingresos_por_ventas_saldo_cuota_inicial_abono_esscritura,                               
   v_fcc_ingresos_por_ventas_subsidio_VIS_ahorro_programado,                                     
   v_fcc_ingresos_por_ventas_excedentes_credito_conpradores,                              
   v_fcc_ingresos_por_ventas_giros_directos_creditos_otras_entidades,                            
   v_fcc_ingresos_por_ventas_ingresos_por_recibir_ventas_realizadas,                             
   v_fcc_otros_ingresos_por_ventas_intereses,                             
   v_fcc_otros_ingresos_por_ventas_intereses_intereses_subrogacion,                              
   v_fcc_otros_ingresos_por_ventas_intereses_intereses_mora_no_aplica,                           
   v_fcc_otros_ingresos_por_ventas_intereses_ofertas_comerciales_y_otros_ingresos,               
   v_fcc_rendimientos_fideicomiso,                                        
   v_fcc_otros_ingresos,                                                   
   v_fcc_otros_ingresos1,                                                   
   v_fcc_otros_ingresos2,                                                  
   v_fcc_otros_ingresos3 ,   
   v_fcc_ingresos_totales,                                       
   v_fcc_flujo_neto_de_caja_ai_y_creditos_tesoreria,                                             
   v_fcc_flujo_acumulado_de_caja1,                                                   
   v_fcc_costo_creditos_de_tesoreria,                                                  
   v_fcc_impuesto_de_renta,                                                   
   v_fcc_flujo_neto_de_caja,                                        
   v_fcc_flujo_acumulado_de_caja,
   v_fcc_proyeccion_ventas_unidades,                                                   
   v_fcc_ventas_brutas,                                                  
   v_fcc_precio_promedio,                                                     
   v_fcc_proyeccion_entregas_unidades,                                        
   v_fcc_proyeccion_escrituras_valor,                                                   
   v_fcc_escrituras_unidades,                                                      
   v_fcc_proyeccion_subrogaciones_valor,  
   v_fcc_vpn,							                                                           
   v_fcc_tir_ea, 						                                                           
   v_fcc_tir_em ,                                                                   			   
   v_fcc_tir_mod_ea,                                                        					   
   v_fcc_tir_mod_em
);


   END LOOP obtener_c_flujo_caja_consolidado;         
  CLOSE c_flujo_caja_consolidado; 
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_MODELO_C`(V_CONS_ID VARCHAR(12))
BEGIN
CALL PROC_CONS_FLUJO_CAJA_TERRENO();
CALL PROC_CONS_OTROS_FLUJOS();
CALL PROC_FLUJO_CAJA();
CALL PROC_CONS_RESUMEN();

UPDATE TB_SELECCION
    SET SEL_CONS_ID = V_CONS_ID
  WHERE SEL_CONS_ID = 'N';


 UPDATE TB_CONSOLIDADOS
    SET CONS_CONS = 'S'
  WHERE CONS_ID   = V_CONS_ID;

END
