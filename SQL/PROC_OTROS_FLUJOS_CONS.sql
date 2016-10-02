-- ------------------------------------------------------------------------------------------------------------
-- IKA CONSULTORES S.A.S                                                                                    --
-- NOMBRE:  PROC_OTROS_FLUJOS_CONS                                                                          --
-- DESCRIPCION: Procedimiento almacenado para la consolidacion de modelos para el informe 'Otros Flujos'    --
-- PROYECTO: ARBITER                                                                                        --
-- OCTUBRE 2016                                                                                             --
-- ------------------------------------------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS PROC_OTROS_FLUJOS_CONS;
CREATE PROCEDURE PROC_OTROS_FLUJOS_CONS()
BEGIN
-- Declaracion de variables -- 
 DECLARE v_ofl_c_cons_id  				                                       VARCHAR(12);
 DECLARE v_ofl_c_fecha 					                                       DATE;
 DECLARE v_ofl_c_costo_construccion			                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_honorarios_colpatria			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_gastos_operacion_colpatria		                               DECIMAL(10,0); 
 DECLARE v_ofl_c_go_promotora_operacion			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_go_promotora_overhead			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_go_constructora_operacion		                               DECIMAL(10,0); 
 DECLARE v_ofl_c_go_constructora_overhead			                           DECIMAL(10,0); 
 DECLARE v_ofl_c_go_transacciones_inmobiliarias_operacion	                   DECIMAL(10,0); 
 DECLARE v_ofl_c_go_transacciones_inmobliarias_overhead                        DECIMAL(10,0); 
 DECLARE v_ofl_c_otros_pagos_efectuados_por_fiducia	                           DECIMAL(10,0); 
 DECLARE v_ofl_c_valor_terreno				                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_intereses_credito_constructor		                           DECIMAL(10,0); 
 DECLARE v_ofl_c_egresos_credito_constructor		                           DECIMAL(10,0); 
 DECLARE v_ofl_c_impuesto_transacciones_financieras_colpatria	               DECIMAL(10,0); 
 DECLARE v_ofl_c_comision_fiduciaria_nuevogar_sin_fiduciaria	               DECIMAL(10,0); 
 DECLARE v_ofl_c_otros_costos_y_gastos			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_aportes_efectivo_colpatria_fideicomisos	                   DECIMAL(10,0); 
 DECLARE v_ofl_c_reintegros_iva				                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_subtotal_egresos_colpatria		                               DECIMAL(10,0); 
 DECLARE v_ofl_c_traslados_fiducias_e_ingresos_totales	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_ingresos_ventas_colpatria		                               DECIMAL(10,0); 
 DECLARE v_ofl_c_desembolsos_credito_constructor_terreno	                   DECIMAL(10,0); 
 DECLARE v_ofl_c_traslados_liquidaciones_fideicomisos	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_otros_ingresos				                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_aportes_de_socios			                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_subtotal_ingresos			                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_caja_antes_de_reintegro_socios	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_reintegro_aportes_utilidades_socios	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_neto_caja_ct			                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_acumulado				                               DECIMAL(10,0); 
 DECLARE v_ofl_c_costo_credito_tesoreria			                           DECIMAL(10,0); 
 DECLARE v_ofl_c_impuesto_renta				                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_neto_caja				                               DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_acumulado_caja			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_vpn					                                       DECIMAL(10,0); 
 DECLARE v_ofl_c_tir_ea					                                       DECIMAL(10,0); 
 DECLARE v_ofl_c_tir_em					                                       DECIMAL(10,0); 
 DECLARE v_ofl_c_tir_mod_ea				                                       DECIMAL(10,0); 
 DECLARE v_ofl_c_tir_mod_em				                                       DECIMAL(10,0); 
 DECLARE v_ofl_c_valor_total_ventas			                                   DECIMAL(10,0); 
 DECLARE v_ofl_c_pagos_efectuados_fiducia_admon		                           DECIMAL(10,0); 
 DECLARE v_ofl_c_pe_intereses_credito_constructor		                       DECIMAL(10,0); 
 DECLARE v_ofl_c_pe_honorarios_visitas_obra_otros		                       DECIMAL(10,0); 
 DECLARE v_ofl_c_pe_abonos_extraordinarios_credito	                           DECIMAL(10,0); 
 DECLARE v_ofl_c_pe_pagos_terreno_efectuados_fiducia	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_pe_otros_pagos_efectuados_fiducia	                           DECIMAL(10,0); 
 DECLARE v_ofl_c_traslados_fondos_fiducia_constructora	                       DECIMAL(10,0); 
 DECLARE v_ofl_c_comision_fiduciaria_prreventas_admon	             		   DECIMAL(10,0); 
 DECLARE v_ofl_c_comision_fiduciaria_nuevogar		                           DECIMAL(10,0); 
 DECLARE v_ofl_c_impuesto_transacciones_financieras	                           DECIMAL(10,0); 
 DECLARE v_ofl_c_subtotal_egresos				                               DECIMAL(10,0); 
 DECLARE v_ofl_c_desembolsos_credito_constructor		                       DECIMAL(10,0); 
 DECLARE v_ofl_c_ingresos_ventas				                               DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_abonos_separacion			                               DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_cartera_cuota_inicial			    					   DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_saldo_cuota_inicial_abono_escritura						   DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_subsidio_vis_y_ahorro_programado						   DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_excedentes_credito_compradores							   DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_giros_directos_creditos_otras_entidades	 				   DECIMAL(10,0); 
 DECLARE v_ofl_c_iv_ingresos_por_recibir_ventas_realizadas					   DECIMAL(10,0); 
 DECLARE v_ofl_c_otros_ingresos_por_ventas								  	   DECIMAL(10,0); 
 DECLARE v_ofl_c_oi_intereses_subrogacion									   DECIMAL(10,0); 
 DECLARE v_ofl_c_oi_intereses_mora											   DECIMAL(10,0); 
 DECLARE v_ofl_c_oi_ofertas_comerciales_y_otros_ingresos					   DECIMAL(10,0); 
 DECLARE v_ofl_c_aportes_efectivo_colpatria_fideicomiso						   DECIMAL(10,0);
 DECLARE v_ofl_c_aportes_otros_socios_inversionistas						   DECIMAL(10,0); 
 DECLARE v_ofl_c_rendimientos_fideicomiso_capitalizacion					   DECIMAL(10,0); 
 DECLARE v_ofl_c_subtotal_ingresos_antes_rendimientos					       DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_neto_sin_rendimientos							 	   DECIMAL(10,0); 
 DECLARE v_ofl_c_rendimientos_fideicomiso									   DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_neto_fiduciaria										   DECIMAL(10,0); 
 DECLARE v_ofl_c_traslado_saldo_final_fiducia_liquidacion					   DECIMAL(10,0); 
 DECLARE v_ofl_c_flujo_acumulado_fiduciaria								       DECIMAL(10,0);
 DECLARE v_finished 														   INTEGER DEFAULT 0;

-- Inicio de consulta general --
  DECLARE c_otros_flujos CURSOR FOR
  SELECT CONS.CONS_ID
  ,CONS.OFL_C_C_FECHA                                                           
  ,SUM(CONS.OFL_C_COSTO_CONSTRUCCION)                                                   
  ,SUM(CONS.OFL_C_HONORARIOS_COLPATRIA)                                                   
  ,SUM(CONS.OFL_C_GASTOS_OPERACION_COLPATRIA)                                             
  ,SUM(CONS.OFL_C_GO_PROMOTORA_OPERACION)                                                 
  ,SUM(CONS.OFL_C_GO_PROMOTORA_OVERHEAD)                                                  
  ,SUM(CONS.OFL_C_GO_CONSTRUCTORA_OPERACION)                                                
  ,SUM(CONS.OFL_C_GO_CONSTRUCTORA_OVERHEAD)                                                 
  ,SUM(CONS.OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION)                                     
  ,SUM(CONS.OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD)                                     
  ,SUM(CONS.OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA)                                       
  ,SUM(CONS.OFL_C_VALOR_TERRENO)                                                        
  ,SUM(CONS.OFL_C_INTERESES_CREDITO_CONSTRUCTOR)                                           
  ,SUM(CONS.OFL_C_EGRESOS_CREDITO_CONSTRUCTOR)                                            
  ,SUM(CONS.OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA)                               
  ,SUM(CONS.OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA)                                
  ,SUM(CONS.OFL_C_OTROS_COSTOS_Y_GASTOS)                                                
  ,SUM(CONS.OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS)                                    
  ,SUM(CONS.OFL_C_REINTEGROS_IVA)                                                      
  ,SUM(CONS.OFL_C_SUBTOTAL_EGRESOS_COLPATRIA)                                             
  ,SUM(CONS.OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES)                                      
  ,SUM(CONS.OFL_C_INGRESOS_VENTAS_COLPATRIA)                                                
  ,SUM(CONS.OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO)                                   
  ,SUM(CONS.OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS)                                     
  ,SUM(CONS.OFL_C_OTROS_INGRESOS)                                                      
  ,SUM(CONS.OFL_C_APORTES_DE_SOCIOS)                                                      
  ,SUM(CONS.OFL_C_SUBTOTAL_INGRESOS)                                                      
  ,SUM(CONS.OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS)                                       
  ,SUM(CONS.OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS)                                      
  ,SUM(CONS.OFL_C_FLUJO_NETO_CAJA_CT)                                                   
  ,SUM(CONS.OFL_C_FLUJO_ACUMULADO)                                                      
  ,SUM(CONS.OFL_C_COSTO_CREDITO_TESORERIA)     
  ,SUM(CONS.OFL_C_IMPUESTO_RENTA)        
  ,SUM(CONS.OFL_C_FLUJO_NETO_CAJA)       
  ,SUM(CONS.OFL_C_FLUJO_ACUMULADO_CAJA)        
  ,SUM(CONS.OFL_C_VPN)           
  ,SUM(CONS.OFL_C_TIR_EA)          
  ,SUM(CONS.OFL_C_TIR_EM)          
  ,SUM(CONS.OFL_C_TIR_MOD_EA)          
  ,SUM(CONS.OFL_C_TIR_MOD_EM)          
  ,SUM(CONS.OFL_C_VALOR_TOTAL_VENTAS)        
  ,SUM(CONS.OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON)    
  ,SUM(CONS.OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR)    
  ,SUM(CONS.OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS)    
  ,SUM(CONS.OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO)   
  ,SUM(CONS.OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA)  
  ,SUM(CONS.OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA)   
  ,SUM(CONS.OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA)   
  ,SUM(CONS.OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON)    
  ,SUM(CONS.OFL_C_COMISION_FIDUCIARIA_NUEVOGAR)      
  ,SUM(CONS.OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS)    
  ,SUM(CONS.OFL_C_SUBTOTAL_EGRESOS)        
  ,SUM(CONS.OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR)   
  ,SUM(CONS.OFL_C_INGRESOS_VENTAS)       
  ,SUM(CONS.OFL_C_IV_ABONOS_SEPARACION)        
  ,SUM(CONS.OFL_C_IV_CARTERA_CUOTA_INICIAL)      
  ,SUM(CONS.OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA)  
  ,SUM(CONS.OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)  
  ,SUM(CONS.OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES)   
  ,SUM(CONS.OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)  
  ,SUM(CONS.OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS) 
  ,SUM(CONS.OFL_C_OTROS_INGRESOS_POR_VENTAS)     
  ,SUM(CONS.OFL_C_OI_INTERESES_SUBROGACION)      
  ,SUM(CONS.OFL_C_OI_INTERESES_MORA)       
  ,SUM(CONS.OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS) 
  ,SUM(CONS.OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO)  
  ,SUM(CONS.OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS)   
  ,SUM(CONS.OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION) 
  ,SUM(CONS.OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS)    
  ,SUM(CONS.OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS)     
  ,SUM(CONS.OFL_C_RENDIMIENTOS_FIDEICOMISO)      
  ,SUM(CONS.OFL_C_FLUJO_NETO_FIDUCIARIA)       
  ,SUM(CONS.OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION) 
  ,SUM(CONS.OFL_C_FLUJO_ACUMULADO_FIDUCIARIA)      
FROM (
    SELECT CONS_ID
    ,OFL_C_FECHA								                                           OFL_C_FECHA
 	,SUM(OFL_C_COSTO_CONSTRUCCION)				                                           OFL_C_C_COSTO_CONSTRUCCION
 	,SUM(OFL_HONORARIOS_COLPATRIA)				                                           OFL_C_HONORARIOS_COLPATRIA
 	,SUM(OFL_GASTOS_OPERACION_COLPATRIA)			                                       OFL_C_GASTOS_OPERACION_COLPATRIA
 	,SUM(OFL_GO_PROMOTORA_OPERACION)			                                           OFL_C_GO_PROMOTORA_OPERACION
 	,SUM(OFL_GO_PROMOTORA_OVERHEAD)				                                           OFL_C_GO_PROMOTORA_OVERHEAD
 	,SUM(OFL_GO_CONSTRUCTORA_OPERACION)			                                           OFL_C_GO_CONSTRUCTORA_OPERACIONOFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_GO_CONSTRUCTORA_OVERHEAD)			                                           OFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION)	                                   OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION
 	,SUM(OFL_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD)	                                   OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD
 	,SUM(OFL_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA)		                                   OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA
 	,SUM(OFL_VALOR_TERRENO)					                                               OFL_C_VALOR_TERRENO
 	,SUM(OFL_INTERESES_CREDITO_CONSTRUCTOR)			                                       OFL_C_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_EGRESOS_CREDITO_CONSTRUCTOR)			                                       OFL_C_EGRESOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA)	                               OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA
 	,SUM(OFL_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA)	                               OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA
 	,SUM(OFL_OTROS_COSTOS_Y_GASTOS)				                                           OFL_C_OTROS_COSTOS_Y_GASTOS
 	,SUM(OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS)	                                   OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS
 	,SUM(OFL_REINTEGROS_IVA)				                                               OFL_C_REINTEGROS_IVA
 	,SUM(OFL_SUBTOTAL_EGRESOS_COLPATRIA)			                                       OFL_C_SUBTOTAL_EGRESOS_COLPATRIA
 	,SUM(OFL_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES)		                                   OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES
 	,SUM(OFL_INGRESOS_VENTAS_COLPATRIA)			                                           OFL_C_INGRESOS_VENTAS_COLPATRIA
 	,SUM(OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO)	                                   OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO
 	,SUM(OFL_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS)		                                   OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS
 	,SUM(OFL_OTROS_INGRESOS)				                                               OFL_C_OTROS_INGRESOS
 	,SUM(OFL_APORTES_DE_SOCIOS)				                                               OFL_C_APORTES_DE_SOCIOS
 	,SUM(OFL_SUBTOTAL_INGRESOS)				                                               OFL_C_SUBTOTAL_INGRESOS
 	,SUM(OFL_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS)		                                   OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS
 	,SUM(OFL_REINTEGRO_APORTES_UTILIDADES_SOCIOS)		                                   OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS
 	,SUM(OFL_FLUJO_NETO_CAJA_CT)				                                           OFL_C_FLUJO_NETO_CAJA_CT
 	,SUM(OFL_FLUJO_ACUMULADO)				                                               OFL_C_FLUJO_ACUMULADO
 	,SUM(OFL_COSTO_CREDITO_TESORERIA)			                                           OFL_C_COSTO_CREDITO_TESORERIA
 	,SUM(OFL_IMPUESTO_RENTA)				                                               OFL_C_IMPUESTO_RENTA
 	,SUM(OFL_FLUJO_NETO_CAJA)				                                               OFL_C_FLUJO_NETO_CAJA
 	,SUM(OFL_FLUJO_ACUMULADO_CAJA)				                                           OFL_C_FLUJO_ACUMULADO_CAJA
 	,SUM(OFL_VPN)						                                                   OFL_C_VPN
 	,SUM(OFL_TIR_EA)					                                                   OFL_C_TIR_EA
 	,SUM(OFL_TIR_EM)					                                                   OFL_C_TIR_EM
 	,SUM(OFL_TIR_MOD_EA)					                                               OFL_C_TIR_MOD_EA
 	,SUM(OFL_TIR_MOD_EM)					                                               OFL_C_TIR_MOD_EM
 	,SUM(OFL_VALOR_TOTAL_VENTAS)				                                           OFL_C_VALOR_TOTAL_VENTAS
 	,SUM(OFL_PAGOS_EFECTUADOS_FIDUCIA_ADMON)		                                       OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON
 	,SUM(OFL_PE_INTERESES_CREDITO_CONSTRUCTOR)		                                       OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_PE_HONORARIOS_VISITAS_OBRA_OTROS)		                                       OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS
 	,SUM(OFL_PE_ABONOS_EXTRAORDINARIOS_CREDITO)		                                       OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO
 	,SUM(OFL_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA)		                                   OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA
 	,SUM(OFL_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA)		                                       OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA
 	,SUM(OFL_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA)		                                   OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA
 	,SUM(OFL_COMISION_FIDUCIARIA_PRREVENTAS_ADMON)		                                   OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON
 	,SUM(OFL_COMISION_FIDUCIARIA_NUEVOGAR)			                                       OFL_C_COMISION_FIDUCIARIA_NUEVOGAR
 	,SUM(OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS)		                                   OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS
 	,SUM(OFL_SUBTOTAL_EGRESOS)				                                               OFL_C_SUBTOTAL_EGRESOS
 	,SUM(OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR)		                                       OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_INGRESOS_VENTAS)				                                               OFL_C_INGRESOS_VENTAS
 	,SUM(OFL_IV_ABONOS_SEPARACION)				                                           OFL_C_IV_CARTERA_CUOTA_INICIAL
 	,SUM(OFL_IV_CARTERA_CUOTA_INICIAL)			                                           OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA
 	,SUM(OFL_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA)	                                   OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
 	,SUM(OFL_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)		                                   OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES
 	,SUM(OFL_IV_EXCEDENTES_CREDITO_COMPRADORES)		                                       OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
 	,SUM(OFL_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)	                               OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
 	,SUM(OFL_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)          	                       OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_OTROS_INGRESOS_POR_VENTAS)			                                           OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_OI_INTERESES_SUBROGACION)			                                           OFL_C_OI_INTERESES_SUBROGACION
 	,SUM(OFL_OI_INTERESES_MORA)				                                               OFL_C_OI_INTERESES_MORA
 	,SUM(OFL_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS)	                                   OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS
 	,SUM(OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO)	                                   OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO
 	,SUM(OFL_APORTES_OTROS_SOCIOS_INVERSIONISTAS)		                                   OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS
 	,SUM(OFL_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION)	                                   OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION
 	,SUM(OFL_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS)		                                   OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS
 	,SUM(OFL_FLUJO_NETO_SIN_RENDIMIENTOS)			                                       OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS
 	,SUM(OFL_RENDIMIENTOS_FIDEICOMISO)			                                           OFL_C_RENDIMIENTOS_FIDEICOMISO
 	,SUM(OFL_FLUJO_NETO_FIDUCIARIA)				                                           OFL_C_FLUJO_NETO_FIDUCIARIA
 	,SUM(OFL_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION)	                                   OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION
 	,SUM(OFL_FLUJO_ACUMULADO_FIDUCIARIA)			                                       OFL_C_FLUJO_ACUMULADO_FIDUCIARIA
      FROM tb_seleccion
          ,tb_c_otros_flujos
          ,tb_consolidados
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
  GROUP BY OFL_FECHA
  
UNION ALL

    SELECT CONS_ID
    ,OFL_C_FECHA								                                            OFL_C_FECHA
 	,SUM(OFL_C_C_COSTO_CONSTRUCCION)				                                        OFL_C_C_COSTO_CONSTRUCCION
 	,SUM(OFL_C_HONORARIOS_COLPATRIA)				                                        OFL_C_HONORARIOS_COLPATRIA
 	,SUM(OFL_C_GASTOS_OPERACION_COLPATRIA)			                                        OFL_C_GASTOS_OPERACION_COLPATRIA
 	,SUM(OFL_C_GO_PROMOTORA_OPERACION)			                                            OFL_C_GO_PROMOTORA_OPERACION
 	,SUM(OFL_C_GO_PROMOTORA_OVERHEAD)				                                        OFL_C_GO_PROMOTORA_OVERHEAD
 	,SUM(OFL_C_GO_CONSTRUCTORA_OPERACION)			                                        OFL_C_GO_CONSTRUCTORA_OPERACIONOFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_C_GO_CONSTRUCTORA_OVERHEAD)			                                        OFL_C_GO_CONSTRUCTORA_OVERHEAD
 	,SUM(OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION)	                                OFL_C_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION
 	,SUM(OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD)	                                    OFL_C_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD
 	,SUM(OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA)		                                    OFL_C_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA
 	,SUM(OFL_C_VALOR_TERRENO)					                                            OFL_C_VALOR_TERRENO
 	,SUM(OFL_C_INTERESES_CREDITO_CONSTRUCTOR)			                                    OFL_C_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_C_EGRESOS_CREDITO_CONSTRUCTOR)			                                        OFL_C_EGRESOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA)	                            OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA
 	,SUM(OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA)	                                OFL_C_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA
 	,SUM(OFL_C_OTROS_COSTOS_Y_GASTOS)				                                        OFL_C_OTROS_COSTOS_Y_GASTOS
 	,SUM(OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS)	                                    OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS
 	,SUM(OFL_C_REINTEGROS_IVA)				                                                OFL_C_REINTEGROS_IVA
 	,SUM(OFL_C_SUBTOTAL_EGRESOS_COLPATRIA)			                                        OFL_C_SUBTOTAL_EGRESOS_COLPATRIA
 	,SUM(OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES)		                                OFL_C_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES
 	,SUM(OFL_C_INGRESOS_VENTAS_COLPATRIA)			                                        OFL_C_INGRESOS_VENTAS_COLPATRIA
 	,SUM(OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO)	                                    OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO
 	,SUM(OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS)		                                OFL_C_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS
 	,SUM(OFL_C_OTROS_INGRESOS)				                                                OFL_C_OTROS_INGRESOS
 	,SUM(OFL_C_APORTES_DE_SOCIOS)				                                            OFL_C_APORTES_DE_SOCIOS
 	,SUM(OFL_C_SUBTOTAL_INGRESOS)				                                            OFL_C_SUBTOTAL_INGRESOS
 	,SUM(OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS)		                                OFL_C_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS
 	,SUM(OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS)		                                    OFL_C_REINTEGRO_APORTES_UTILIDADES_SOCIOS
 	,SUM(OFL_C_FLUJO_NETO_CAJA_CT)				                                            OFL_C_FLUJO_NETO_CAJA_CT
 	,SUM(OFL_C_FLUJO_ACUMULADO)				                                                OFL_C_FLUJO_ACUMULADO
 	,SUM(OFL_C_COSTO_CREDITO_TESORERIA)			                                            OFL_C_COSTO_CREDITO_TESORERIA
 	,SUM(OFL_C_IMPUESTO_RENTA)				                                                OFL_C_IMPUESTO_RENTA
 	,SUM(OFL_C_FLUJO_NETO_CAJA)				                                                OFL_C_FLUJO_NETO_CAJA
 	,SUM(OFL_C_FLUJO_ACUMULADO_CAJA)				                                        OFL_C_FLUJO_ACUMULADO_CAJA
 	,SUM(OFL_C_VPN)						                                                    OFL_C_VPN
 	,SUM(OFL_C_TIR_EA)					                                                    OFL_C_TIR_EA
 	,SUM(OFL_C_TIR_EM)					                                                    OFL_C_TIR_EM
 	,SUM(OFL_C_TIR_MOD_EA)					OFL_C_TIR_MOD_EA
 	,SUM(OFL_C_TIR_MOD_EM)					OFL_C_TIR_MOD_EM
 	,SUM(OFL_C_VALOR_TOTAL_VENTAS)				OFL_C_VALOR_TOTAL_VENTAS
 	,SUM(OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON)		OFL_C_PAGOS_EFECTUADOS_FIDUCIA_ADMON
 	,SUM(OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR)		OFL_C_PE_INTERESES_CREDITO_CONSTRUCTOR
 	,SUM(OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS)		OFL_C_PE_HONORARIOS_VISITAS_OBRA_OTROS
 	,SUM(OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO)		OFL_C_PE_ABONOS_EXTRAORDINARIOS_CREDITO
 	,SUM(OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA)		OFL_C_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA
 	,SUM(OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA)		OFL_C_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA
 	,SUM(OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA)		OFL_C_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA
 	,SUM(OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON)		OFL_C_COMISION_FIDUCIARIA_PRREVENTAS_ADMON
 	,SUM(OFL_C_COMISION_FIDUCIARIA_NUEVOGAR)			OFL_C_COMISION_FIDUCIARIA_NUEVOGAR
 	,SUM(OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS)		OFL_C_IMPUESTO_TRANSACCIONES_FINANCIERAS
 	,SUM(OFL_C_SUBTOTAL_EGRESOS)				OFL_C_SUBTOTAL_EGRESOS
 	,SUM(OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR)		OFL_C_DESEMBOLSOS_CREDITO_CONSTRUCTOR
 	,SUM(OFL_C_INGRESOS_VENTAS)				OFL_C_INGRESOS_VENTAS
 	,SUM(OFL_C_IV_ABONOS_SEPARACION)				OFL_C_IV_CARTERA_CUOTA_INICIAL
 	,SUM(OFL_C_IV_CARTERA_CUOTA_INICIAL)			OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA
 	,SUM(OFL_C_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA)	OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO
 	,SUM(OFL_C_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO)		OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES
 	,SUM(OFL_C_IV_EXCEDENTES_CREDITO_COMPRADORES)		OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES
 	,SUM(OFL_C_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES)	OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS
 	,SUM(OFL_C_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS)	OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_C_OTROS_INGRESOS_POR_VENTAS)			OFL_C_OTROS_INGRESOS_POR_VENTAS
 	,SUM(OFL_C_OI_INTERESES_SUBROGACION)			OFL_C_OI_INTERESES_SUBROGACION
 	,SUM(OFL_C_OI_INTERESES_MORA)				OFL_C_OI_INTERESES_MORA
 	,SUM(OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS)	OFL_C_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS
 	,SUM(OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO)	OFL_C_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO
 	,SUM(OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS)		OFL_C_APORTES_OTROS_SOCIOS_INVERSIONISTAS
 	,SUM(OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION)	OFL_C_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION
 	,SUM(OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS)		OFL_C_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS
 	,SUM(OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS)			OFL_C_FLUJO_NETO_SIN_RENDIMIENTOS
 	,SUM(OFL_C_RENDIMIENTOS_FIDEICOMISO)			OFL_C_RENDIMIENTOS_FIDEICOMISO
 	,SUM(OFL_C_FLUJO_NETO_FIDUCIARIA)				OFL_C_FLUJO_NETO_FIDUCIARIA
 	,SUM(OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION)	OFL_C_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION
 	,SUM(OFL_C_FLUJO_ACUMULADO_FIDUCIARIA)			OFL_C_FLUJO_ACUMULADO_FIDUCIARIA
      FROM tb_seleccion
          ,tb_c_otros_flujos
          ,tb_consolidados
     WHERE SEL_C_CONS_ID IS NOT NULL
       AND SEL_C_CONS_ID = OFL_C_CONS_ID
       AND CONS_CONS      = 'N'    
       AND SEL_CONS_ID  = 'N'
       AND OFL_C_FECHA BETWEEN CASE CONS_FEC_GEN_DES
       			     WHEN '0000-00-00' THEN OFL_C_FECHA 
       			     ELSE CONS_FEC_GEN_DES
                             END
       AND CASE CONS_FEC_GEN_HAS
       			     WHEN '0000-00-00' THEN OFL_C_FECHA 
       			     ELSE CONS_FEC_GEN_HAS
                             END
  GROUP BY OFL_C_FECHA)
  GROUP BY CONS.OFL_C_FECHA;
  
  -- UNION ALL END
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

  OPEN C_OTROS_FLUJOS;  
  obtener_c_otros_flujos: LOOP
  FETCH C_OTROS_FLUJOS INTO v_ofl_c_c_cons_id,
			    v_ofl_c_fecha,
			    v_ofl_c_costo_construccion, 
			    v_ofl_c_honorarios_colpatria, 
			    v_ofl_c_gastos_operacion_colpatria, 
			    v_ofl_c_go_promotora_operacion, 
			    v_ofl_c_go_promotora_overhead, 
			    v_ofl_c_go_constructora_operacion, 
			    v_ofl_c_go_constructora_overhead, 
			    v_ofl_c_go_transacciones_inmobiliarias_operacion, 
			    v_ofl_c_go_transacciones_inmobliarias_overhead, 
			    v_ofl_c_otros_pagos_efectuados_por_fiducia, 
			    v_ofl_c_valor_terreno, 
			    v_ofl_c_intereses_credito_constructor, 
			    v_ofl_c_egresos_credito_constructor, 
			    v_ofl_c_impuesto_transacciones_financieras_colpatria, 
			    v_ofl_c_comision_fiduciaria_nuevogar_sin_fiduciaria, 
			    v_ofl_c_otros_costos_y_gastos, 
			    v_ofl_c_aportes_efectivo_colpatria_fideicomisos, 
			    v_ofl_c_reintegros_iva, 
			    v_ofl_c_subtotal_egresos_colpatria, 
			    v_ofl_c_traslados_fiducias_e_ingresos_totales, 
			    v_ofl_c_ingresos_ventas_colpatria, 
			    v_ofl_c_desembolsos_credito_constructor_terreno, 
			    v_ofl_c_traslados_liquidaciones_fideicomisos, 
			    v_ofl_c_otros_ingresos, v_ofl_c_aportes_de_socios, 
			    v_ofl_c_subtotal_ingresos, 
			    v_ofl_c_flujo_caja_antes_de_reintegro_socios, 
			    v_ofl_c_reintegro_aportes_utilidades_socios, 
			    v_ofl_c_flujo_neto_caja_ct, 
			    v_ofl_c_flujo_acumulado, 
			    v_ofl_c_costo_credito_tesoreria, 
			    v_ofl_c_impuesto_renta, 
			    v_ofl_c_flujo_neto_caja, 
			    v_ofl_c_flujo_acumulado_caja, 
			    v_ofl_c_vpn, 
			    v_ofl_c_tir_ea, 
			    v_ofl_c_tir_em, 
			    v_ofl_c_tir_mod_ea, 
			    v_ofl_c_tir_mod_em, 
			    v_ofl_c_valor_total_ventas, 
			    v_ofl_c_pagos_efectuados_fiducia_admon, 
			    v_ofl_c_pe_intereses_credito_constructor, 
			    v_ofl_c_pe_honorarios_visitas_obra_otros, 
			    v_ofl_c_pe_abonos_extraordinarios_credito, 
			    v_ofl_c_pe_pagos_terreno_efectuados_fiducia, 
			    v_ofl_c_pe_otros_pagos_efectuados_fiducia, 
			    v_ofl_c_traslados_fondos_fiducia_constructora, 
			    v_ofl_c_comision_fiduciaria_prreventas_admon, 
			    v_ofl_c_comision_fiduciaria_nuevogar, 
			    v_ofl_c_impuesto_transacciones_financieras, 
			    v_ofl_c_subtotal_egresos, 
			    v_ofl_c_desembolsos_credito_constructor, 
			    v_ofl_c_ingresos_ventas, v_ofl_c_iv_abonos_separacion, 
			    v_ofl_c_iv_cartera_cuota_inicial, 
			    v_ofl_c_iv_saldo_cuota_inicial_abono_escritura, 
			    v_ofl_c_iv_subsidio_vis_y_ahorro_programado, 
			    v_ofl_c_iv_excedentes_credito_compradores, 
			    v_ofl_c_iv_giros_directos_creditos_otras_entidades, 
			    v_ofl_c_iv_ingresos_por_recibir_ventas_realizadas, 
			    v_ofl_c_otros_ingresos_por_ventas, 
			    v_ofl_c_oi_intereses_subrogacion, 
			    v_ofl_c_oi_intereses_mora, 
			    v_ofl_c_oi_ofertas_comerciales_y_otros_ingresos, 
			    v_ofl_c_aportes_efectivo_colpatria_fideicomiso,
			    v_ofl_c_aportes_otros_socios_inversionistas, 
			    v_ofl_c_rendimientos_fideicomiso_capitalizacion, 
			    v_ofl_c_subtotal_ingresos_antes_rendimientos, 
			    v_ofl_c_flujo_neto_sin_rendimientos, 
			    v_ofl_c_rendimientos_fideicomiso, 
			    v_ofl_c_flujo_neto_fiduciaria, 
			    v_ofl_c_traslado_saldo_final_fiducia_liquidacion, 
			    v_ofl_c_flujo_acumulado_fiduciaria;
  IF v_finished = 1 THEN
     LEAVE obtener_c_otros_flujos;
  END IF;

  INSERT INTO tb_c_otros_flujos(OFL_C_CONS_ID,
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
 			VALUES (
				v_ofl_c_c_cons_id,
 				v_ofl_c_fecha,
 				v_ofl_c_costo_construccion,
 				v_ofl_c_honorarios_colpatria, 
				v_ofl_c_gastos_operacion_colpatria, 
				v_ofl_c_go_promotora_operacion, 
				v_ofl_c_go_promotora_overhead, 
				v_ofl_c_go_constructora_operacion, 
				v_ofl_c_go_constructora_overhead, 
				v_ofl_c_go_transacciones_inmobiliarias_operacion, 
				v_ofl_c_go_transacciones_inmobliarias_overhead, 
				v_ofl_c_otros_pagos_efectuados_por_fiducia, 
				v_ofl_c_valor_terreno, 
				v_ofl_c_egresos_credito_constructor, 
				v_ofl_c_impuesto_transacciones_financieras_colpatria, 
				v_ofl_c_comision_fiduciaria_nuevogar_sin_fiduciaria, 
				v_ofl_c_otros_costos_y_gastos, 
				v_ofl_c_aportes_efectivo_colpatria_fideicomisos, 
				v_ofl_c_reintegros_iva, 
				v_ofl_c_subtotal_egresos_colpatria, 
				v_ofl_c_traslados_fiducias_e_ingresos_totales, 
				v_ofl_c_ingresos_ventas_colpatria, 
				v_ofl_c_desembolsos_credito_constructor_terreno, 
				v_ofl_c_traslados_liquidaciones_fideicomisos, 
				v_ofl_c_otros_ingresos, v_ofl_c_aportes_de_socios, 
				v_ofl_c_subtotal_ingresos, 
				v_ofl_c_flujo_caja_antes_de_reintegro_socios, 
				v_ofl_c_reintegro_aportes_utilidades_socios, 
				v_ofl_c_flujo_neto_caja_ct, 
				v_ofl_c_flujo_acumulado, 
				v_ofl_c_costo_credito_tesoreria, 
				v_ofl_c_impuesto_renta, 
				v_ofl_c_flujo_neto_caja, 
				v_ofl_c_flujo_acumulado_caja, 
				v_ofl_c_vpn, 
				v_ofl_c_tir_ea, 
				v_ofl_c_tir_em, 
				v_ofl_c_tir_mod_ea, 
				v_ofl_c_tir_mod_em, 
				v_ofl_c_valor_total_ventas, 
				v_ofl_c_pagos_efectuados_fiducia_admon, 
				v_ofl_c_pe_intereses_credito_constructor, 
				v_ofl_c_pe_honorarios_visitas_obra_otros, 
				v_ofl_c_pe_abonos_extraordinarios_credito, 
				v_ofl_c_pe_pagos_terreno_efectuados_fiducia, 
				v_ofl_c_pe_otros_pagos_efectuados_fiducia, 
				v_ofl_c_traslados_fondos_fiducia_constructora, 
				v_ofl_c_comision_fiduciaria_prreventas_admon, 
				v_ofl_c_comision_fiduciaria_nuevogar, 
				v_ofl_c_impuesto_transacciones_financieras, 
				v_ofl_c_subtotal_egresos, 
				v_ofl_c_desembolsos_credito_constructor, 
				v_ofl_c_ingresos_ventas, v_ofl_c_iv_abonos_separacion, 
				v_ofl_c_iv_cartera_cuota_inicial, 
				v_ofl_c_iv_saldo_cuota_inicial_abono_escritura, 
				v_ofl_c_iv_subsidio_vis_y_ahorro_programado, 
				v_ofl_c_iv_excedentes_credito_compradores, 
				v_ofl_c_iv_giros_directos_creditos_otras_entidades, 
				v_ofl_c_iv_ingresos_por_recibir_ventas_realizadas, 
				v_ofl_c_otros_ingresos_por_ventas, 
				v_ofl_c_oi_intereses_subrogacion, 
				v_ofl_c_oi_intereses_mora, 
				v_ofl_c_oi_ofertas_comerciales_y_otros_ingresos, 
				v_ofl_c_aportes_efectivo_colpatria_fideicomiso,
				v_ofl_c_aportes_otros_socios_inversionistas, 
				v_ofl_c_rendimientos_fideicomiso_capitalizacion, 
				v_ofl_c_subtotal_ingresos_antes_rendimientos, 
				v_ofl_c_flujo_neto_sin_rendimientos, 
				v_ofl_c_rendimientos_fideicomiso, 
				v_ofl_c_flujo_neto_fiduciaria, 
				v_ofl_c_traslado_saldo_final_fiducia_liquidacion, 
				v_ofl_c_flujo_acumulado_fiduciaria);
  END LOOP obtener_c_otros_flujos;				  
  CLOSE C_OTROS_FLUJOS; 
END