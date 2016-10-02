BEGIN
  DECLARE v_fcc_c_cons_id                                                                                VARCHAR(12);
  DECLARE v_fcc_c_fecha                                                                                  date;
  DECLARE v_fcc_c_urbanismo_interno_materiales_mobra                                       			   DECIMAL(10,0);
  DECLARE v_fcc_c_urbanismo_presupuesto                                            					   DECIMAL(10,0);
  DECLARE v_fcc_c_urbanismo_incrementos                                          						   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_materiales_mano_obra                                           				   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_materiales_presupuesto                                                     	   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_materiales_incremento                                            				   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_imprevistos                                               					   DECIMAL(10,0);
  DECLARE v_fcc_c_costos_post_ventas                                                 					   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_directo_construccion                                           				   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_construccion                                            					   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_construccion_honorarios_construccion                              		   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_construccion_gastos_reembolsables                                  		   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_interventoria                                 							   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_interventoria_honorarios_interventoria                    				   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_interventoria_gastos_reembolsables                      					   DECIMAL(10,0);
  DECLARE v_fcc_c_otros_honorarios_disenios_otros                              						   DECIMAL(10,0);
  DECLARE v_fcc_c_otros_honorarios_disenios_otros_otros_honorarios_disenios_otros            			   DECIMAL(10,0);
  DECLARE v_fcc_c_otros_honorarios_disenios_otros_gastos_reembolsables                   				   DECIMAL(10,0);
  DECLARE v_fcc_c_impuestos_y_derechos                                   								   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_total_de_construccion                                							   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_gerencia                                 								   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_gerencia_honorarios_gerencia                       					   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_gerencia_gastos_reembolsables                        					   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_ventas                                   								   DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_ventas_honorarios_ventas                         					       DECIMAL(10,0);
  DECLARE v_fcc_c_honorarios_de_ventas_gastos_reembolsables                        					   DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas                                  							   DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas_sala_ventas_unidades_modelo                                    DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas_gastos_publicidad                                              DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas_gastos_sala_ventas                       				       DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas_administracion_unidades_x_entregar               			   DECIMAL(10,0);
  DECLARE v_fcc_c_costos_promocion_ventas_comisiones_de_ventas                       				   	   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_legales                                     									   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_legales_hipotecas_credito_constructor                       				 	   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_legales_notariales_registro_ventas                        					   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_legales_impuesto_predial_inmuebles_escrr_entr                   				   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_legales_impuesto_ICA                                							   DECIMAL(10,0);
  DECLARE v_fcc_c_costo_total_antes_terreno_y_financieros                          					   DECIMAL(10,0);
  DECLARE v_fcc_c_valor_terreno_urbanizado                                 							   DECIMAL(10,0);
  DECLARE v_fcc_c_valor_terreno_urbanizado_valor_adquisicion                       					   DECIMAL(10,0);
  DECLARE v_fcc_c_valor_terreno_urbanizado_costos_urbanismo_otros                      			       DECIMAL(10,0);
  DECLARE v_fcc_c_comisiones_fiducia                                       							   DECIMAL(10,0);
  DECLARE v_fcc_c_comisiones_fiducia_preventas_administracion                              			   DECIMAL(10,0);
  DECLARE v_fcc_c_comisiones_fiducia_nuevo_hogar                                   					   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_financieros                                           						   DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_financieros_intereses_credito_constructor                                       DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_financieros_otros_costos_del_credito                                            DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_financieros_correcion_monetaria_construccion                                    DECIMAL(10,0);
  DECLARE v_fcc_c_gastos_financieros_impto_transacciones_financieras                                     DECIMAL(10,0);
  DECLARE v_fcc_c_otros_costos_y_gastos                                                                  DECIMAL(10,0);
  DECLARE v_fcc_c_otros_costos_y_gastos_costos_y_gastos_1                                                DECIMAL(10,0);
  DECLARE v_fcc_c_otros_costos_y_gastos_costos_y_gastos_2                                                DECIMAL(10,0);
  DECLARE v_fcc_c_otros_costos_y_gastos_costos_y_gastos_3                                                DECIMAL(10,0);
  DECLARE v_fcc_c_reintegros_IVA_proyectos_vis                                                           DECIMAL(10,0);
  DECLARE v_fcc_c_costo_total_directos_e_indirectos                                                      DECIMAL(10,0);
  DECLARE v_fcc_c_total_egresos_sibn_correccion_monetaria                                                DECIMAL(10,0);
  DECLARE v_fcc_c_desembolsos_creditos_constructor_y_terreno                                             DECIMAL(10,0);
  DECLARE v_fcc_c_abonos_extraordinarios_creditos_constructor_y_terreno                                  DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas                                                                    DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_abonos_a_separacion                                                DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_cartera_cuota_inicial                                              DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_saldo_cuota_inicial_abono_esscritura                               DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_subsidio_VIS_ahorro_programado                                     DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_excedentes_credito_conpradores                                     DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_giros_directos_creditos_otras_entidades                            DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_por_ventas_ingresos_por_recibir_ventas_realizadas                             DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos_por_ventas_intereses                                                    DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos_por_ventas_intereses_intereses_subrogacion                              DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos_por_ventas_intereses_intereses_mora_no_aplica                           DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos_por_ventas_intereses_ofertas_comerciales_y_otros_ingresos               DECIMAL(10,0);
  DECLARE v_fcc_c_rendimientos_fideicomiso                                                               DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos                                                                         DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos1                                                                        DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos2                                                                        DECIMAL(10,0);
  DECLARE v_fcc_c_otros_ingresos3                                                                        DECIMAL(10,0);
  DECLARE v_fcc_c_ingresos_totales                                                                       DECIMAL(10,0);
  DECLARE v_fcc_c_flujo_neto_de_caja_ai_y_creditos_tesoreria                                             DECIMAL(10,0);
  DECLARE v_fcc_c_flujo_acumulado_de_caja1                                                                DECIMAL(10,0);
  DECLARE v_fcc_c_costo_creditos_de_tesoreria                                                            DECIMAL(10,0);
  DECLARE v_fcc_c_impuesto_de_renta                                                                      DECIMAL(10,0);
  DECLARE v_fcc_c_flujo_neto_de_caja                                                                     DECIMAL(10,0);
  DECLARE v_fcc_c_flujo_acumulado_de_caja                                                                DECIMAL(10,0);
  DECLARE v_fcc_c_proyeccion_ventas_unidades                                                             DECIMAL(10,0);
  DECLARE v_fcc_c_ventas_brutas                                                                          DECIMAL(10,0);
  DECLARE v_fcc_c_precio_promedio                                                                        DECIMAL(10,0);
  DECLARE v_fcc_c_proyeccion_entregas_unidades                                                           DECIMAL(10,0);
  DECLARE v_fcc_c_proyeccion_escrituras_valor                                                            DECIMAL(10,0);
  DECLARE v_fcc_c_escrituras_unidades                                                                    DECIMAL(10,0);
  DECLARE v_fcc_c_proyeccion_subrogaciones_valor                                                         DECIMAL(10,0);
  DECLARE v_fcc_c_vpn							                                                           DECIMAL(10,0);
  DECLARE v_fcc_c_tir_ea 						                                                           DECIMAL(10,0);
  DECLARE v_fcc_c_tir_em                                                                    			   DECIMAL(10,0);
  DECLARE v_fcc_c_tir_mod_ea                                                         					   DECIMAL(10,0);
  DECLARE v_fcc_c_tir_mod_em                                                                        	   DECIMAL(10,0);
  DECLARE v_finished 																				   integer default 0;
   

    DECLARE c_flujo_caja_consolidado CURSOR FOR
    SELECT CONS.CONS_ID
    ,CONS.FLC_C_FECHA
    ,SUM(CONS.FLC_C_FECHA)
    ,SUM(CONS.FLC_C_URBANISMO_INTERNO)
    ,SUM(CONS.FLC_C_UI_PRESUPUESTO)
    ,SUM(CONS.FLC_C_UI_INCREMENTOS)
    ,SUM(CONS.FLC_C_COSTOS_MATERIALES_MANO_OBRA)
    ,SUM(CONS.FLC_C_CM_PRESUPUESTO)
    ,SUM(CONS.FLC_C_CM_INCREMENTOS)
    ,SUM(CONS.FLC_C_GASTOS_IMPREVISTOS)
    ,SUM(CONS.FLC_C_COSTOS_POSTVENTA)
    ,SUM(CONS.FLC_C_COSTO_DIRECTO_CONSTRUCCION)
    ,SUM(CONS.FLC_C_HONORARIOS_CONSTRUCCION)
    ,SUM(CONS.FLC_C_HC_HONORARIOS_CONSTRUCCION)
    ,SUM(CONS.FLC_C_HC_GASTOS_REEMBOLSABLES)
    ,SUM(CONS.FLC_C_HONORARIOS_INTERVENTORIA)
    ,SUM(CONS.FLC_C_HI_HONORARIOS_INTERVENTORIA)
    ,SUM(CONS.FLC_C_HI_GASTOS_REEMBOSABLES)
    ,SUM(CONS.FLC_C_OTROS_HONORARIOS)
    ,SUM(CONS.FLC_C_OH_OTROS_HONORARIOS)
    ,SUM(CONS.FLC_C_OH_GASTOS_REEMBOLSABLES)
    ,SUM(CONS.FLC_C_IMPUESTOS_Y_DERECHOS)
    ,SUM(CONS.FLC_C_COSTO_TOTAL_CONSTRUCCION)
    ,SUM(CONS.FLC_C_HONORARIOS_GERENCIA)
    ,SUM(CONS.FLC_C_HG_HONORARIOS_GERENCIA)
    ,SUM(CONS.FLC_C_HG_GASTOS_REEMBOLSABLES)
    ,SUM(CONS.FLC_C_HONORARIOS_VENTAS)
    ,SUM(CONS.FLC_C_HV_HONORARIOS_VENTAS)
    ,SUM(CONS.FLC_C_HV_GASTOS_REEMBOLSABLES)
    ,SUM(CONS.FLC_C_COSTOS_PROMOCION_Y_VENTAS)
    ,SUM(CONS.FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO)
    ,SUM(CONS.FLC_C_CP_GASTOS_PUBLICIDAD)
    ,SUM(CONS.FLC_C_CP_GASTOS_SALA_DE_VENTAS)
    ,SUM(CONS.FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR)
    ,SUM(CONS.FLC_C_CP_COMISIONES_VENTAS)
    ,SUM(CONS.FLC_C_GASTOS_LEGALES)
    ,SUM(CONS.FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR)
    ,SUM(CONS.FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS)
    ,SUM(CONS.FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA)
    ,SUM(CONS.FLC_C_GL_IMPUESTO_ICA)
    ,SUM(CONS.FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS)
    ,SUM(CONS.FLC_C_VALOR_TERRENO_URBANIZADO)
    ,SUM(CONS.FLC_C_VT_VALOR_ADQUISICION)
    ,SUM(CONS.FLC_C_VT_COSTOS_URBANISMO_Y_OTROS)
    ,SUM(CONS.FLC_C_COMISIONES_FIDUCIA)
    ,SUM(CONS.FLC_C_CF_PREVENTAS_Y_ADMINISTRACION)
    ,SUM(CONS.FLC_C_CF_NUEVOGAR)
    ,SUM(CONS.FLC_C_GASTOS_FINANCIEROS)
    ,SUM(CONS.FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR)
    ,SUM(CONS.FLC_C_GF_OTROS_COSTOS_CREDITO)
    ,SUM(CONS.FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION)
    ,SUM(CONS.FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)
    ,SUM(CONS.FLC_C_OTROS_COSTOS_Y_GASTOS)
    ,SUM(CONS.FLC_C_OC_COSTOS_GASTOS1)
    ,SUM(CONS.FLC_C_OC_COSTOS_GASTOS2)
    ,SUM(CONS.FLC_C_OC_COSTOS_GASTOS3)
    ,SUM(CONS.FLC_C_REINTEGROS_IVA_PROYECTOS_VIS)
    ,SUM(CONS.FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)
    ,SUM(CONS.FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)
    ,SUM(CONS.FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)
    ,SUM(CONS.FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)
    ,SUM(CONS.FLC_C_INGRESOS_POR_VENTAS)
    ,SUM(CONS.FLC_C_IV_ABONOS_SEPARACION)
    ,SUM(CONS.FLC_C_IV_CARTERA_CUOTA_INICIAL)
    ,SUM(CONS.FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)
    ,SUM(CONS.FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)
    ,SUM(CONS.FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES)
    ,SUM(CONS.FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)
    ,SUM(CONS.FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)
    ,SUM(CONS.FLC_C_OTROS_INGRESOS_VENTAS_INTERESES)
    ,SUM(CONS.FLC_C_OI_INTERESES_SUBROGACION)
    ,SUM(CONS.FLC_C_OI_INTERESES_MORA)
    ,SUM(CONS.FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)
    ,SUM(CONS.FLC_C_RENDIMIENTOS_FIDEICOMISO)
    ,SUM(CONS.FLC_C_OTROS_INGRESOS)
    ,SUM(CONS.FLC_C_OI_INGRESOS1)
    ,SUM(CONS.FLC_C_OI_INGRESOS2)
    ,SUM(CONS.FLC_C_OI_INGRESOS3)
    ,SUM(CONS.FLC_C_INGRESOS_TOTALES)
    ,SUM(CONS.FLC_C_FLUJO_NETO_CAJA_CT)
    ,SUM(CONS.FLC_C_FLUJO_ACUMULADO_CAJA_CT)
    ,SUM(CONS.FLC_C_COSTO_CREDITOS_TESORERIA)
    ,SUM(CONS.FLC_C_IMPUESTO_DE_RENTA)
    ,SUM(CONS.FLC_C_FLUJO_NETO_CAJA)
    ,SUM(CONS.FLC_C_FLUJO_ACUMULADO_CAJA)
    ,SUM(CONS.FLC_C_PROYECCION_VENTAS_UNIDADES)
    ,SUM(CONS.FLC_C_VENTAS_BRUTAS)
    ,SUM(CONS.FLC_C_PRECIO_PROMEDIO)
    ,SUM(CONS.FLC_C_PROYECCION_ENTREGAS_UNIDADES)
    ,SUM(CONS.FLC_C_PROYECCION_ESCRITURAS_VALOR)
    ,SUM(CONS.FLC_C_PROYECCION_ESCRITURAS_UNIDADES)
    ,SUM(CONS.FLC_C_PROYECCION_SUBROGACIONES_VALOR)
    ,SUM(CONS.FLC_C_VPN)
    ,SUM(CONS.FLC_C_TIR_EA)
    ,SUM(CONS.FLC_C_TIR_EM)
    ,SUM(CONS.FLC_C_TIR_MOD_EA)
    FROM (SELECT CONS_ID
    	,FLC_FECHA                                                                                     FLC_C_FECHA
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
        ,SUM(FLC_HC_GASTOS_REEMBOLSABLES)                       					       FLC_C_HC_GASTOS_REEMBOLSABLES
        ,SUM(FLC_HONORARIOS_INTERVENTORIA)                                                                 FLC_C_HONORARIOS_INTERVENTORIA
        ,SUM(FLC_HI_HONORARIOS_INTERVENTORIA)                                                              FLC_C_HI_HONORARIOS_INTERVENTORIA
        ,SUM(FLC_HI_GASTOS_REEMBOSABLES)                                                                   FLC_C_HI_GASTOS_REEMBOSABLES
        ,SUM(FLC_OTROS_HONORARIOS)                                                                         FLC_C_OTROS_HONORARIOS
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
        ,SUM(FLC_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)                 				       FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS
        ,SUM(FLC_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)             				       FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
        ,SUM(FLC_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)            				       FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
        ,SUM(FLC_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)       			       FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
        ,SUM(FLC_INGRESOS_POR_VENTAS)                         					       FLC_C_INGRESOS_POR_VENTAS
        ,SUM(FLC_IV_ABONOS_SEPARACION)                        									FLC_C_IV_ABONOS_SEPARACION
        ,SUM(FLC_IV_CARTERA_CUOTA_INICIAL)                      								FLC_C_IV_CARTERA_CUOTA_INICIAL
        ,SUM(FLC_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)              						FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA
        ,SUM(FLC_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)                 							FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
        ,SUM(FLC_IV_EXCEDENTES_CREDITO_COMPRADORES)                 							FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES
        ,SUM(FLC_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)           		 					FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
        ,SUM(FLC_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)             						FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
        ,SUM(FLC_OTROS_INGRESOS_VENTAS_INTERESES)                   							FLC_C_OTROS_INGRESOS_VENTAS_INTERESES
        ,SUM(FLC_OI_INTERESES_SUBROGACION)                      								FLC_C_OI_INTERESES_SUBROGACION
        ,SUM(FLC_OI_INTERESES_MORA)                         									FLC_C_OI_INTERESES_MORA
        ,SUM(FLC_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)               							FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS
        ,SUM(FLC_RENDIMIENTOS_FIDEICOMISO)                      								FLC_C_RENDIMIENTOS_FIDEICOMISO
        ,SUM(FLC_OTROS_INGRESOS)                          										FLC_C_OTROS_INGRESOS
        ,SUM(FLC_OI_INGRESOS1)                            										FLC_C_OI_INGRESOS1
        ,SUM(FLC_OI_INGRESOS2)                            										FLC_C_OI_INGRESOS2
        ,SUM(FLC_OI_INGRESOS3)                            										FLC_C_OI_INGRESOS3
        ,SUM(FLC_INGRESOS_TOTALES)                         			 							FLC_C_INGRESOS_TOTALES
        ,SUM(FLC_FLUJO_NETO_CAJA_CT)                        									FLC_C_FLUJO_NETO_CAJA_CT
        ,SUM(FLC_FLUJO_ACUMULADO_CAJA_CT)                       								FLC_C_FLUJO_ACUMULADO_CAJA_CT
        ,SUM(FLC_COSTO_CREDITOS_TESORERIA)                      								FLC_C_COSTO_CREDITOS_TESORERIA
        ,SUM(FLC_IMPUESTO_DE_RENTA)                         									FLC_C_IMPUESTO_DE_RENTA
        ,SUM(FLC_FLUJO_NETO_CAJA)                           									FLC_C_FLUJO_NETO_CAJA
        ,SUM(FLC_FLUJO_ACUMULADO_CAJA)                        									FLC_C_FLUJO_ACUMULADO_CAJA
        ,SUM(FLC_PROYECCION_VENTAS_UNIDADES)                    								FLC_C_PROYECCION_VENTAS_UNIDADES
        ,SUM(FLC_VENTAS_BRUTAS)                           										FLC_C_VENTAS_BRUTAS
        ,SUM(FLC_PRECIO_PROMEDIO)                           									FLC_C_PRECIO_PROMEDIO
        ,SUM(FLC_PROYECCION_ENTREGAS_UNIDADES)                    								FLC_C_PROYECCION_ENTREGAS_UNIDADES
        ,SUM(FLC_PROYECCION_ESCRITURAS_VALOR)                     								FLC_C_PROYECCION_ESCRITURAS_VALOR
        ,SUM(FLC_PROYECCION_ESCRITURAS_UNIDADES)                  								FLC_C_PROYECCION_ESCRITURAS_UNIDADES
        ,SUM(FLC_PROYECCION_SUBROGACIONES_VALOR)                  								FLC_C_PROYECCION_SUBROGACIONES_VALOR
        ,SUM(FLC_VPN)                                 											FLC_C_VPN
        ,SUM(FLC_TIR_EA)                              											FLC_C_TIR_EA
        ,SUM(FLC_TIR_EM)                              											FLC_C_TIR_EM
        ,SUM(FLC_TIR_MOD_EA)                            										FLC_C_TIR_MOD_EA
        ,SUM(FLC_TIR_MOD_EM)  
         FROM tb_seleccion
             ,tb_flujo_caja
             ,tb_consolidados
        WHERE SEL_DET_PRO_ID IS NOT NULL
          AND SEL_DET_PRO_ID = FLC_DET_PRO_ID
          AND SEL_DET_ETAPA  = FLC_DET_ETAPA
          AND SEL_MODELO  = FLC_MODELO
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
    GROUP BY FLC_FECHA
      UNION ALL
      SELECT CONS_ID
    	,FLC_C_FECHA                                                                                         FLC_C_FECHA
        ,SUM(FLC_C_URBANISMO_INTERNO)                                                                        FLC_C_URBANISMO_INTERNO
        ,SUM(FLC_C_UI_PRESUPUESTO)                                                                           FLC_C_UI_PRESUPUESTO
        ,SUM(FLC_C_UI_INCREMENTOS)                                                                           FLC_C_UI_INCREMENTOS
        ,SUM(FLC_C_COSTOS_MATERIALES_MANO_OBRA)                                                              FLC_C_COSTOS_MATERIALES_MANO_OBRA
        ,SUM(FLC_C_CM_PRESUPUESTO)                                                                           FLC_C_CM_PRESUPUESTO
        ,SUM(FLC_C_CM_INCREMENTOS)                                                                           FLC_C_CM_INCREMENTOS
        ,SUM(FLC_C_GASTOS_IMPREVISTOS)                                                                       FLC_C_GASTOS_IMPREVISTOS
        ,SUM(FLC_C_COSTOS_POSTVENTA)                                                                         FLC_C_COSTOS_POSTVENTA
        ,SUM(FLC_C_COSTO_DIRECTO_CONSTRUCCION)                                                               FLC_C_COSTO_DIRECTO_CONSTRUCCION
        ,SUM(FLC_C_HONORARIOS_CONSTRUCCION)                                                                  FLC_C_HONORARIOS_CONSTRUCCION
        ,SUM(FLC_C_HC_HONORARIOS_CONSTRUCCION)                                                               FLC_C_HC_HONORARIOS_CONSTRUCCION
        ,SUM(FLC_C_HC_GASTOS_REEMBOLSABLES)                       										     FLC_C_HC_GASTOS_REEMBOLSABLES
        ,SUM(FLC_C_HONORARIOS_INTERVENTORIA)                                                                 FLC_C_HONORARIOS_INTERVENTORIA
        ,SUM(FLC_C_HI_HONORARIOS_INTERVENTORIA)                                                              FLC_C_HI_HONORARIOS_INTERVENTORIA
        ,SUM(FLC_C_HI_GASTOS_REEMBOSABLES)                                                                   FLC_C_HI_GASTOS_REEMBOSABLES
        ,SUM(FLC_C_OTROS_HONORARIOS)                                                                         FLC_C_OTROS_HONORARIOS
        ,SUM(FLC_C_OH_OTROS_HONORARIOS)                                                                      FLC_C_OH_OTROS_HONORARIOS
        ,SUM(FLC_C_OH_GASTOS_REEMBOLSABLES)                                                                  FLC_C_OH_GASTOS_REEMBOLSABLES
        ,SUM(FLC_C_IMPUESTOS_Y_DERECHOS)                                                                     FLC_C_IMPUESTOS_Y_DERECHOS
        ,SUM(FLC_C_COSTO_TOTAL_CONSTRUCCION)                                                                 FLC_C_COSTO_TOTAL_CONSTRUCCION
        ,SUM(FLC_C_HONORARIOS_GERENCIA)                                                                      FLC_C_HONORARIOS_GERENCIA
        ,SUM(FLC_C_HG_HONORARIOS_GERENCIA)                                                                   FLC_C_HG_HONORARIOS_GERENCIA
        ,SUM(FLC_C_HG_GASTOS_REEMBOLSABLES)                                                                  FLC_C_HG_GASTOS_REEMBOLSABLES
        ,SUM(FLC_C_HONORARIOS_VENTAS)                                                                        FLC_C_HONORARIOS_VENTAS
        ,SUM(FLC_C_HV_HONORARIOS_VENTAS)                                                                     FLC_C_HV_HONORARIOS_VENTAS
        ,SUM(FLC_C_HV_GASTOS_REEMBOLSABLES)                                                                  FLC_C_HV_GASTOS_REEMBOLSABLES
        ,SUM(FLC_C_COSTOS_PROMOCION_Y_VENTAS)                                                                FLC_C_COSTOS_PROMOCION_Y_VENTAS
        ,SUM(FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO)                                                        FLC_C_CP_SALA_DE_VENTAS_UNIDADES_MODELO
        ,SUM(FLC_C_CP_GASTOS_PUBLICIDAD)                                                                     FLC_C_CP_GASTOS_PUBLICIDAD
        ,SUM(FLC_C_CP_GASTOS_SALA_DE_VENTAS)                                                                 FLC_C_CP_GASTOS_SALA_DE_VENTAS
        ,SUM(FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR)                                                  FLC_C_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR
        ,SUM(FLC_C_CP_COMISIONES_VENTAS)                                                                     FLC_C_CP_COMISIONES_VENTAS
        ,SUM(FLC_C_GASTOS_LEGALES)                                                                           FLC_C_GASTOS_LEGALES
        ,SUM(FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR)                                                         FLC_C_GL_HIPOTECAS_CREDITO_CONSTRUCTOR
        ,SUM(FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS)                                                         FLC_C_GL_NOTARIALES_REGISTRO_DE_VENTAS
        ,SUM(FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA)                                              FLC_C_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA
        ,SUM(FLC_C_GL_IMPUESTO_ICA)                                                                          FLC_C_GL_IMPUESTO_ICA
        ,SUM(FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS)                                                  FLC_C_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS
        ,SUM(FLC_C_VALOR_TERRENO_URBANIZADO)                                                                 FLC_C_VALOR_TERRENO_URBANIZADO
        ,SUM(FLC_C_VT_VALOR_ADQUISICION)                                                                     FLC_C_VT_VALOR_ADQUISICION
        ,SUM(FLC_C_VT_COSTOS_URBANISMO_Y_OTROS)                                                              FLC_C_VT_COSTOS_URBANISMO_Y_OTROS
        ,SUM(FLC_C_COMISIONES_FIDUCIA)                                                                       FLC_C_COMISIONES_FIDUCIA
        ,SUM(FLC_C_CF_PREVENTAS_Y_ADMINISTRACION)                                                            FLC_C_CF_PREVENTAS_Y_ADMINISTRACION
        ,SUM(FLC_C_CF_NUEVOGAR)                                                                              FLC_C_CF_NUEVOGAR
        ,SUM(FLC_C_GASTOS_FINANCIEROS)                                                                       FLC_C_GASTOS_FINANCIEROS
        ,SUM(FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR)                                                        FLC_C_GF_INTERESES_CREDITOS_CONSTRUCTOR
        ,SUM(FLC_C_GF_OTROS_COSTOS_CREDITO)                                                                  FLC_C_GF_OTROS_COSTOS_CREDITO
        ,SUM(FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION)                                                     FLC_C_GF_CORRECCION_MONETARIA_CONSTRUCCION
        ,SUM(FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)                                                FLC_C_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF
        ,SUM(FLC_C_OTROS_COSTOS_Y_GASTOS)                                                                    FLC_C_OTROS_COSTOS_Y_GASTOS
        ,SUM(FLC_C_OC_COSTOS_GASTOS1)                                                                        FLC_C_OC_COSTOS_GASTOS1
        ,SUM(FLC_C_OC_COSTOS_GASTOS2)                                                                        FLC_C_OC_COSTOS_GASTOS2
        ,SUM(FLC_C_OC_COSTOS_GASTOS3)                                                                        FLC_C_OC_COSTOS_GASTOS3
        ,SUM(FLC_C_REINTEGROS_IVA_PROYECTOS_VIS)                                                             FLC_C_REINTEGROS_IVA_PROYECTOS_VIS
        ,SUM(FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS)                 									   FLC_C_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS
        ,SUM(FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA)             				 					   FLC_C_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA
        ,SUM(FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)            								   FLC_C_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
        ,SUM(FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO)       							   FLC_C_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO
        ,SUM(FLC_C_INGRESOS_POR_VENTAS)                         											   FLC_C_INGRESOS_POR_VENTAS
        ,SUM(FLC_C_IV_ABONOS_SEPARACION)                        												FLC_C_IV_ABONOS_SEPARACION
        ,SUM(FLC_C_IV_CARTERA_CUOTA_INICIAL)                      											FLC_C_IV_CARTERA_CUOTA_INICIAL
        ,SUM(FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA)              									FLC_C_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA
        ,SUM(FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)                 										FLC_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
        ,SUM(FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES)                 										FLC_C_IV_EXCEDENTES_CREDITO_COMPRADORES
        ,SUM(FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)           		 								FLC_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
        ,SUM(FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)             									FLC_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
        ,SUM(FLC_C_OTROS_INGRESOS_VENTAS_INTERESES)                   										FLC_C_OTROS_INGRESOS_VENTAS_INTERESES
        ,SUM(FLC_C_OI_INTERESES_SUBROGACION)                      											FLC_C_OI_INTERESES_SUBROGACION
        ,SUM(FLC_C_OI_INTERESES_MORA)                         												FLC_C_OI_INTERESES_MORA
        ,SUM(FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS)               										FLC_C_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS
        ,SUM(FLC_C_RENDIMIENTOS_FIDEICOMISO)                      											FLC_C_RENDIMIENTOS_FIDEICOMISO
        ,SUM(FLC_C_OTROS_INGRESOS)                          													FLC_C_OTROS_INGRESOS
        ,SUM(FLC_C_OI_INGRESOS1)                            													FLC_C_OI_INGRESOS1
        ,SUM(FLC_C_OI_INGRESOS2)                            													FLC_C_OI_INGRESOS2
        ,SUM(FLC_C_OI_INGRESOS3)                            													FLC_C_OI_INGRESOS3
        ,SUM(FLC_C_INGRESOS_TOTALES)                         			 										FLC_C_INGRESOS_TOTALES
        ,SUM(FLC_C_FLUJO_NETO_CAJA_CT)                        												FLC_C_FLUJO_NETO_CAJA_CT
        ,SUM(FLC_C_FLUJO_ACUMULADO_CAJA_CT)                       											FLC_C_FLUJO_ACUMULADO_CAJA_CT
        ,SUM(FLC_C_COSTO_CREDITOS_TESORERIA)                      											FLC_C_COSTO_CREDITOS_TESORERIA
        ,SUM(FLC_C_IMPUESTO_DE_RENTA)                         												FLC_C_IMPUESTO_DE_RENTA
        ,SUM(FLC_C_FLUJO_NETO_CAJA)                           												FLC_C_FLUJO_NETO_CAJA
        ,SUM(FLC_C_FLUJO_ACUMULADO_CAJA)                        												FLC_C_FLUJO_ACUMULADO_CAJA
        ,SUM(FLC_C_PROYECCION_VENTAS_UNIDADES)                    											FLC_C_PROYECCION_VENTAS_UNIDADES
        ,SUM(FLC_C_VENTAS_BRUTAS)                           													FLC_C_VENTAS_BRUTAS
        ,SUM(FLC_C_PRECIO_PROMEDIO)                           												FLC_C_PRECIO_PROMEDIO
        ,SUM(FLC_C_PROYECCION_ENTREGAS_UNIDADES)                    											FLC_C_PROYECCION_ENTREGAS_UNIDADES
        ,SUM(FLC_C_PROYECCION_ESCRITURAS_VALOR)                     											FLC_C_PROYECCION_ESCRITURAS_VALOR
        ,SUM(FLC_C_PROYECCION_ESCRITURAS_UNIDADES)                  											FLC_C_PROYECCION_ESCRITURAS_UNIDADES
        ,SUM(FLC_C_PROYECCION_SUBROGACIONES_VALOR)                  											FLC_C_PROYECCION_SUBROGACIONES_VALOR
        ,SUM(FLC_C_VPN)                                 														FLC_C_VPN
        ,SUM(FLC_C_TIR_EA)                              														FLC_C_TIR_EA
        ,SUM(FLC_C_TIR_EM)                              														FLC_C_TIR_EM
        ,SUM(FLC_C_TIR_MOD_EA)                            													FLC_C_TIR_MOD_EA
        ,SUM(FLC_C_C_TIR_MOD_EM)  
         FROM tb_seleccion
             ,tb_c_flujo_caja
             ,tb_consolidados
        WHERE SEL_C_CONS_ID IS NOT NULL
          AND SEL_C_CONS_ID = FLC_C_CONS_ID
          AND CONS_CONS      = 'N'
          AND SEL_CONS_ID  = 'N'
          AND FLC_C_FECHA BETWEEN CASE CONS_FEC_GEN_DES
              WHEN '0000-00-00' THEN FLC_C_FECHA 
              ELSE CONS_FEC_GEN_DES
                                END
          AND CASE CONS_FEC_GEN_HAS
              WHEN '0000-00-00' THEN FLC_C_FECHA 
              ELSE CONS_FEC_GEN_HAS
                                END
    GROUP BY FLC_C_FECHA) CONS
    GROUP BY CONS.FLC_C_FECHA;
  
  
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

INSERT INTO tb_c_flujo_caja (
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
  v_fcc_c_cons_id,                                                                                
   v_fcc_c_fecha,                                                                                  
   v_fcc_c_urbanismo_interno_materiales_mobra,                                       			   
   v_fcc_c_urbanismo_presupuesto,                                            					   
   v_fcc_c_urbanismo_incrementos,                                          						   
   v_fcc_c_costo_materiales_mano_obra,                                           				   
   v_fcc_c_costo_materiales_presupuesto,                                                     	   
   v_fcc_c_costo_materiales_incremento,                                            				   
   v_fcc_c_gastos_imprevistos,                                               					   
   v_fcc_c_costos_post_ventas,                                                 					   
   v_fcc_c_costo_directo_construccion,                                           				   
   v_fcc_c_honorarios_construccion,                                            					   
   v_fcc_c_honorarios_construccion_honorarios_construccion,                              		   
   v_fcc_c_honorarios_construccion_gastos_reembolsables,                                  		   
   v_fcc_c_honorarios_interventoria,                                							   
   v_fcc_c_honorarios_interventoria_honorarios_interventoria,                  				   
   v_fcc_c_honorarios_interventoria_gastos_reembolsables,                      					   
   v_fcc_c_otros_honorarios_disenios_otros,                             						   
   v_fcc_c_otros_honorarios_disenios_otros_otros_honorarios_disenios_otros,            			   
   v_fcc_c_otros_honorarios_disenios_otros_gastos_reembolsables,                   				   
   v_fcc_c_impuestos_y_derechos,                                   								   
   v_fcc_c_costo_total_de_construccion,                                							   
   v_fcc_c_honorarios_de_gerencia,                                 								   
   v_fcc_c_honorarios_de_gerencia_honorarios_gerencia,                       					   
   v_fcc_c_honorarios_de_gerencia_gastos_reembolsables ,                       					   
   v_fcc_c_honorarios_de_ventas,                                   								   
   v_fcc_c_honorarios_de_ventas_honorarios_ventas,                         					       
   v_fcc_c_honorarios_de_ventas_gastos_reembolsables ,                       					   
   v_fcc_c_costos_promocion_ventas,                                  							   
   v_fcc_c_costos_promocion_ventas_sala_ventas_unidades_modelo,                                    
   v_fcc_c_costos_promocion_ventas_gastos_publicidad,                                              
   v_fcc_c_costos_promocion_ventas_gastos_sala_ventas,                       				       
   v_fcc_c_costos_promocion_ventas_administracion_unidades_x_entregar,               			   
   v_fcc_c_costos_promocion_ventas_comisiones_de_ventas,                       				   	   
   v_fcc_c_gastos_legales,                                     									   
   v_fcc_c_gastos_legales_hipotecas_credito_constructor,                       				 	   
   v_fcc_c_gastos_legales_notariales_registro_ventas,                        					   
   v_fcc_c_gastos_legales_impuesto_predial_inmuebles_escrr_entr,                   				   
   v_fcc_c_gastos_legales_impuesto_ICA,                                							   
   v_fcc_c_costo_total_antes_terreno_y_financieros,                          					   
   v_fcc_c_valor_terreno_urbanizado,                                 							   
   v_fcc_c_valor_terreno_urbanizado_valor_adquisicion,                       					   
   v_fcc_c_valor_terreno_urbanizado_costos_urbanismo_otros,                      			       
   v_fcc_c_comisiones_fiducia,                                       							   
   v_fcc_c_comisiones_fiducia_preventas_administracion,                              			   
   v_fcc_c_comisiones_fiducia_nuevo_hogar,                                   					   
   v_fcc_c_gastos_financieros,                                          						   
   v_fcc_c_gastos_financieros_intereses_credito_constructor,                                       
   v_fcc_c_gastos_financieros_otros_costos_del_credito,                                            
   v_fcc_c_gastos_financieros_correcion_monetaria_construccion,                                    
   v_fcc_c_gastos_financieros_impto_transacciones_financieras,                                     
   v_fcc_c_otros_costos_y_gastos,                                                                  
   v_fcc_c_otros_costos_y_gastos_costos_y_gastos_1,                                                
   v_fcc_c_otros_costos_y_gastos_costos_y_gastos_2,                                                
   v_fcc_c_otros_costos_y_gastos_costos_y_gastos_3,                                                
   v_fcc_c_reintegros_IVA_proyectos_vis,                                                           
   v_fcc_c_costo_total_directos_e_indirectos,                                                      
   v_fcc_c_total_egresos_sibn_correccion_monetaria,                                                
   v_fcc_c_desembolsos_creditos_constructor_y_terreno,                                             
   v_fcc_c_abonos_extraordinarios_creditos_constructor_y_terreno,                                  
   v_fcc_c_ingresos_por_ventas,                                                                    
   v_fcc_c_ingresos_por_ventas_abonos_a_separacion ,                                               
   v_fcc_c_ingresos_por_ventas_cartera_cuota_inicial,                                              
   v_fcc_c_ingresos_por_ventas_saldo_cuota_inicial_abono_esscritura,                               
   v_fcc_c_ingresos_por_ventas_subsidio_VIS_ahorro_programado,                                     
   v_fcc_c_ingresos_por_ventas_excedentes_credito_conpradores ,                                    
   v_fcc_c_ingresos_por_ventas_giros_directos_creditos_otras_entidades,                            
   v_fcc_c_ingresos_por_ventas_ingresos_por_recibir_ventas_realizadas ,                            
   v_fcc_c_otros_ingresos_por_ventas_intereses,                                                    
   v_fcc_c_otros_ingresos_por_ventas_intereses_intereses_subrogacion ,                             
   v_fcc_c_otros_ingresos_por_ventas_intereses_intereses_mora_no_aplica,                           
   v_fcc_c_otros_ingresos_por_ventas_intereses_ofertas_comerciales_y_otros_ingresos ,              
   v_fcc_c_rendimientos_fideicomiso,                                                               
   v_fcc_c_otros_ingresos,                                                                         
   v_fcc_c_otros_ingresos1,                                                                        
   v_fcc_c_otros_ingresos2,                                                                        
   v_fcc_c_otros_ingresos3,                                                                        
   v_fcc_c_ingresos_totales,                                                                       
   v_fcc_c_flujo_neto_de_caja_ai_y_creditos_tesoreria,                                             
   v_fcc_c_flujo_acumulado_de_caja1,                                                                
   v_fcc_c_costo_creditos_de_tesoreria,                                                            
   v_fcc_c_impuesto_de_renta,                                                                      
   v_fcc_c_flujo_neto_de_caja,                                                                     
   v_fcc_c_flujo_acumulado_de_caja,                                                                
   v_fcc_c_proyeccion_ventas_unidades,                                                             
   v_fcc_c_ventas_brutas,                                                                          
   v_fcc_c_precio_promedio,                                                                        
   v_fcc_c_proyeccion_entregas_unidades,                                                           
   v_fcc_c_proyeccion_escrituras_valor,                                                           
   v_fcc_c_escrituras_unidades,                                                                    
   v_fcc_c_proyeccion_subrogaciones_valor,                                                         
   v_fcc_c_vpn,							                                                           
   v_fcc_c_tir_ea, 						                                                           
   v_fcc_c_tir_em,                                                                    			   
   v_fcc_c_tir_mod_ea,                                                         					   
   v_fcc_c_tir_mod_em
);


   END LOOP obtener_c_flujo_caja_consolidado;         
  CLOSE c_flujo_caja_consolidado; 
END