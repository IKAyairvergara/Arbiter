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
  
  SELECT CONS.CONS_ID
,CONS.RES_C_FECHA
 ,SUM(CONS.RES_C_TOTAL_UNIDADES)
 ,SUM(CONS.RES_C_AREA_PROMEDIO_UNIDAD)
 ,SUM(CONS.RES_C_TOTAL_AREA_CONSTRUIDA)
 ,SUM(CONS.RES_C_TOTAL_AREA_VENDIBLE)
 ,SUM(CONS.RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO)
 ,SUM(CONS.RES_C_DENSIDAD_INDICE_OCUPACION)
 ,SUM(CONS.RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO)
 ,SUM(CONS.RES_C_NUMERO_PARQUEOS)
 ,SUM(CONS.RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD)
 ,SUM(CONS.RES_C_NUMERO_DEPOSITOS)
 ,CONS.RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS
 ,CONS.RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION
 ,SUM(CONS.RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO)
 ,SUM(CONS.RES_C_PUNTO_EQUILIBRIO_UNIDADES)
 ,SUM(CONS.RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS)
 ,SUM(CONS.RES_C_PORCENTAJE_VENTAS_NUEVOGAR)
 ,CONS.RES_C_FECHA_PRESUPUESTO
 ,SUM(CONS.RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO)
 ,SUM(CONS.RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA)
 ,SUM(CONS.RES_C_PRESUPUESTO)
 ,SUM(CONS.RES_C_INCREMENTOS)
 ,SUM(CONS.RES_C_COSTO_MATERIAL) 
 ,SUM(CONS.RES_C_PRESUPUESTO2)
 ,SUM(CONS.RES_C_INCREMENTOS2)
 ,SUM(CONS.RES_C_GASTOS_IMPREVISTOS)
 ,SUM(CONS.RES_C_COSTOS_POST_VENTAS)
 ,SUM(CONS.RES_C_COSTO_DIRECTO_CONSTRUCCION)
 ,SUM(CONS.RES_C_HONORARIOS_CONSTRUCCION)
 ,SUM(CONS.RES_C_HONORARIOS_CONSTRUCCION2)
 ,SUM(CONS.RES_C_GASTOS_REEMBOLSABLES)
 ,SUM(CONS.RES_C_HONORARIOS_INTERVENTORIA)
 ,SUM(CONS.RES_C_HONORARIOS_INTERVENTORIA2)
 ,SUM(CONS.RES_C_GASTOS_REEMBOLSABLES2)
 ,SUM(CONS.RES_C_OTROS_HONORARIOS_DISENOS_OTROS)
 ,SUM(CONS.RES_C_OTROS_HONORARIOS_DISENOS_OTROS2)
 ,SUM(CONS.RES_C_GASTOS_REEMBOLSABLES3)
 ,SUM(CONS.RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION)
 ,SUM(CONS.RES_C_COSTO_TOTAL_CONSTRUCCION)
 ,SUM(CONS.RES_C_HONORARIOS_GERENCIA)
 ,SUM(CONS.RES_C_HONORARIOS_GERENCIA2)
 ,SUM(CONS.RES_C_GASTOS_REEMBOLSABLES4)
 ,SUM(CONS.RES_C_HONORARIOS_VENTAS)
 ,SUM(CONS.RES_C_HONORARIOS_VENTAS2)
 ,SUM(CONS.RES_C_GASTOS_REEMBOLSABLES5)
 ,SUM(CONS.RES_C_COSTOS_PROMOCION_Y_VENTAS)
 ,SUM(CONS.RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION)
 ,SUM(CONS.RES_C_GASTOS_PUBLICIDAD)
 ,SUM(CONS.RES_C_GASTOS_SALA_VENTAS)
 ,SUM(CONS.RES_C_ADMON_UNIDADES_POR_ENTREGAR)
 ,SUM(CONS.RES_C_COMISIONES_VENTAS)
 ,SUM(CONS.RES_C_GASTOS_LEGALES)
 ,SUM(CONS.RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR)
 ,SUM(CONS.RES_C_NOTARIALES_REGISTRO_DE_VENTAS)
 ,SUM(CONS.RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR)
 ,SUM(CONS.RES_C_IMPUESTO_ICA)
 ,SUM(CONS.RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS)
 ,SUM(CONS.RES_C_VALOR_TERENO_URBANIZADO)
 ,SUM(CONS.RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO)
 ,SUM(CONS.RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION)
 ,SUM(CONS.RES_C_COMISIONES_FIDUCIA)
 ,SUM(CONS.RES_C_PREVENTAS_Y_ADMON)
 ,SUM(CONS.RES_C_NUEVOGAR)
 ,SUM(CONS.RES_C_GASTOS_FINANCIEROS)
 ,SUM(CONS.RES_C_INTERESES_CREDITO_CONSTRUCTOR)
 ,SUM(CONS.RES_C_OTROS_COSTOS_CREDITO)
 ,SUM(CONS.RES_C_CORRECCION_MONETARIA)
 ,SUM(CONS.RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)
 ,SUM(CONS.RES_C_OTROS_COSTOS_Y_GASTOS)
 ,SUM(CONS.RES_C_GASTO1)
 ,SUM(CONS.RES_C_GASTO2)
 ,SUM(CONS.RES_C_GASTO3)
 ,SUM(CONS.RES_C_REINTEGROS_IVA_PROYECTOS_VIS)
 ,SUM(CONS.RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS)
 ,SUM(CONS.RES_C_VENTAS_BRUTAS)
 ,SUM(CONS.RES_C_OTROS_INGRESOS_VENTAS)
 ,SUM(CONS.RES_C_INTERESES_SUBROGACION)
 ,SUM(CONS.RES_C_INTERESES_MORA)
 ,SUM(CONS.RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS)
 ,SUM(CONS.RES_C_RENDIMIENTOS_FIDEICOMISO)
 ,SUM(CONS.RES_C_OTROS_INGRESOS)
 ,SUM(CONS.RES_C_INGRESOS1)
 ,SUM(CONS.RES_C_INGRESOS2)
 ,SUM(CONS.RES_C_INGRESOS3)
 ,SUM(CONS.RES_C_INGRESOS_TOTALES)
 ,SUM(CONS.RES_C_UTILIDAD_PROYECTO)
 ,SUM(CONS.RES_C_COSTO_CREDITO_TESORERIA)
 ,SUM(CONS.RES_C_IMPUESTO_RENTA)
 ,SUM(CONS.RES_C_UTILIDAD_PROYECTO2)
 ,SUM(CONS.RES_C_COSTO_VENTAS_GESTION)
 ,SUM(CONS.RES_C_VALOR_TERRENO_LIBROS)
 ,SUM(CONS.RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES)
 ,SUM(CONS.RES_C_TIR_EA)
 ,SUM(CONS.RES_C_VPN_TASA_DESCUENTO)
 ,SUM(CONS.RES_C_UTILIDAD_COLPATRIA)
 ,SUM(CONS.RES_C_CONSTRUCTORA)
 ,SUM(CONS.RES_C_TRANSACCIONES_INMOBILIARIAS)
 ,SUM(CONS.RES_C_PROMOTORA)
 ,SUM(CONS.RES_C_TIR_COLAPTRIA_EA)
 ,SUM(CONS.RES_C_TIR_COLPATRIA_EM)
 ,SUM(CONS.RES_C_PORC_VEN_UI   )
 ,SUM(CONS.RES_C_PORC_VEN_UIP)
 ,SUM(CONS.RES_C_PORC_VEN_UII)
 ,SUM(CONS.RES_C_PORC_VEN_CM)
 ,SUM(CONS.RES_C_PORC_VEN_CMP)
 ,SUM(CONS.RES_C_PORC_VEN_CMI)
 ,SUM(CONS.RES_C_PORC_VEN_GI)
 ,SUM(CONS.RES_C_PORC_VEN_CP)
 ,SUM(CONS.RES_C_PORC_VEN_CD)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HC)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HC_HC)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HC_GR)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HI)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HI_HI)
 ,SUM(CONS.RES_C_PORC_VEN_CD_HI_GR)
,SUM(CONS.RES_C_PORC_VEN_CD_OH)
,SUM(CONS.RES_C_PORC_VEN_CD_OH_OH)
,SUM(CONS.RES_C_PORC_VEN_CD_OH_GR)
,SUM(CONS.RES_C_PORC_VEN_CD_ID)
,SUM(CONS.RES_C_PORC_VEN_CT)
,SUM(CONS.RES_C_PORC_VEN_CT_HG)
,SUM(CONS.RES_C_PORC_VEN_CT_HG_HG)
,SUM(CONS.RES_C_PORC_VEN_CT_HG_GR)
,SUM(CONS.RES_C_PORC_VEN_CT_HV)
,SUM(CONS.RES_C_PORC_VEN_CT_HV_HV)
,SUM(CONS.RES_C_PORC_VEN_CT_HV_GR)
,SUM(CONS.RES_C_PORC_VEN_CT_CP)
,SUM(CONS.RES_C_PORC_VEN_CT_CP_SV)
,SUM(CONS.RES_C_PORC_VEN_CT_CP_GP)
,SUM(CONS.RES_C_PORC_VEN_CT_CP_GS)
,SUM(CONS.RES_C_PORC_VEN_CT_CP_AU)
,SUM(CONS.RES_C_PORC_VEN_CT_CP_CV)
,SUM(CONS.RES_C_PORC_VEN_CT_GL)
,SUM(CONS.RES_C_PORC_VEN_CT_GL_HC)
,SUM(CONS.RES_C_PORC_VEN_CT_GL_NR)
,SUM(CONS.RES_C_PORC_VEN_CT_GL_IP)
,SUM(CONS.RES_C_PORC_VEN_CT_GL_IC)
,SUM(CONS.RES_C_PORC_VEN_CA)
,SUM(CONS.RES_C_PORC_VEN_CA_VT)
,SUM(CONS.RES_C_PORC_VEN_CA_VT_PV)
,SUM(CONS.RES_C_PORC_VEN_CA_VT_OP)
,SUM(CONS.RES_C_PORC_VEN_CA_CF)
,SUM(CONS.RES_C_PORC_VEN_CA_CF_PA)
,SUM(CONS.RES_C_PORC_VEN_CA_CF_NH)
,SUM(CONS.RES_C_PORC_VEN_CA_GF)
,SUM(CONS.RES_C_PORC_VEN_CA_GF_IC)
,SUM(CONS.RES_C_PORC_VEN_CA_GF_OC)
,SUM(CONS.RES_C_PORC_VEN_CA_GF_CM)
,SUM(CONS.RES_C_PORC_VEN_CA_GF_IT)
,SUM(CONS.RES_C_PORC_VEN_CA_OC)
,SUM(CONS.RES_C_PORC_VEN_CA_OC_OC1)
,SUM(CONS.RES_C_PORC_VEN_CA_OC_OC2)
,SUM(CONS.RES_C_PORC_VEN_CA_OC_OC3)
,SUM(CONS.RES_C_PORC_VEN_CA_RI)
,SUM(CONS.RES_C_PORC_VEN_CI)
,SUM(CONS.RES_C_PORC_VEN_CI_VB)
,SUM(CONS.RES_C_PORC_VEN_CI_OV)
,SUM(CONS.RES_C_PORC_VEN_CI_OV_IS)
,SUM(CONS.RES_C_PORC_VEN_CI_OV_IM)
,SUM(CONS.RES_C_PORC_VEN_CI_OV_OC)
,SUM(CONS.RES_C_PORC_VEN_CI_RF)
,SUM(CONS.RES_C_PORC_VEN_CI_OI)
,SUM(CONS.RES_C_PORC_VEN_CI_OI_OI1)
,SUM(CONS.RES_C_PORC_VEN_CI_OI_OI2)
,SUM(CONS.RES_C_PORC_VEN_CI_OI_OI3)
,SUM(CONS.RES_C_PORC_VEN_IT)
,SUM(CONS.RES_C_PORC_VEN_UP)
,SUM(CONS.RES_C_PORC_VEN_UP_CC)
,SUM(CONS.RES_C_PORC_VEN_UP_IR)
,SUM(CONS.RES_C_PORC_VEN_UP2)
,SUM(CONS.RES_C_PORC_VEN_CV)
,SUM(CONS.RES_C_PORC_VEN_VT)
,SUM(CONS.RES_C_PORC_VEN_CVG)
,SUM(CONS.RES_C_PORC_VEN_TIR)
,SUM(CONS.RES_C_PORC_VEN_VPN)
,SUM(CONS.RES_C_PORC_VEN_UC)
,SUM(CONS.RES_C_PORC_VEN_UC_CO)
,SUM(CONS.RES_C_PORC_VEN_UC_TI)
,SUM(CONS.RES_C_PORC_VEN_UC_PR)
,SUM(CONS.RES_C_PORC_VEN_TIR_C)
,SUM(CONS.RES_C_PORC_VEN_VPN_C)
,SUM(CONS.RES_C_VR_M_CON_UI)
,SUM(CONS.RES_C_VR_M_CON_UIP)
,SUM(CONS.RES_C_VR_M_CON_UII)
,SUM(CONS.RES_C_VR_M_CON_CM)
,SUM(CONS.RES_C_VR_M_CON_CMP)
,SUM(CONS.RES_C_VR_M_CON_CMI)
,SUM(CONS.RES_C_VR_M_CON_GI)
,SUM(CONS.RES_C_VR_M_CON_CP)
,SUM(CONS.RES_C_VR_M_CON_CD)
,SUM(CONS.RES_C_VR_M_CON_CD_HC)
,SUM(CONS.RES_C_VR_M_CON_CD_HC_HC)
,SUM(CONS.RES_C_VR_M_CON_CD_HC_GR)
,SUM(CONS.RES_C_VR_M_CON_CD_HI)
,SUM(CONS.RES_C_VR_M_CON_CD_HI_HI)
,SUM(CONS.RES_C_VR_M_CON_CD_HI_GR)
,SUM(CONS.RES_C_VR_M_CON_CD_OH)
,SUM(CONS.RES_C_VR_M_CON_CD_OH_OH)
,SUM(CONS.RES_C_VR_M_CON_CD_OH_GR)
,SUM(CONS.RES_C_VR_M_CON_CD_ID)
,SUM(CONS.RES_C_VR_M_CON_CT)
,SUM(CONS.RES_C_VR_M_CON_CT_HG)
,SUM(CONS.RES_C_VR_M_CON_CT_HG_HG)
,SUM(CONS.RES_C_VR_M_CON_CT_HG_GR)
,SUM(CONS.RES_C_VR_M_CON_CT_HV)
,SUM(CONS.RES_C_VR_M_CON_CT_HV_HV)
,SUM(CONS.RES_C_VR_M_CON_CT_HV_GR)
,SUM(CONS.RES_C_VR_M_CON_CT_CP)
,SUM(CONS.RES_C_VR_M_CON_CT_CP_SV)
,SUM(CONS.RES_C_VR_M_CON_CT_CP_GP)
,SUM(CONS.RES_C_VR_M_CON_CT_CP_GS)
,SUM(CONS.RES_C_VR_M_CON_CT_CP_AU)
,SUM(CONS.RES_C_VR_M_CON_CT_CP_CV)
,SUM(CONS.RES_C_VR_M_CON_CT_GL)
,SUM(CONS.RES_C_VR_M_CON_CT_GL_HC)
,SUM(CONS.RES_C_VR_M_CON_CT_GL_NR)
,SUM(CONS.RES_C_VR_M_CON_CT_GL_IP)
,SUM(CONS.RES_C_VR_M_CON_CT_GL_IC)
,SUM(CONS.RES_C_VR_M_CON_CA)
,SUM(CONS.RES_C_VR_M_CON_CA_VT)
,SUM(CONS.RES_C_VR_M_CON_CA_VT_PV)
,SUM(CONS.RES_C_VR_M_CON_CA_VT_OP)
,SUM(CONS.RES_C_VR_M_CON_CA_CF)
,SUM(CONS.RES_C_VR_M_CON_CA_CF_PA)
,SUM(CONS.RES_C_VR_M_CON_CA_CF_NH)
,SUM(CONS.RES_C_VR_M_CON_CA_GF)
,SUM(CONS.RES_C_VR_M_CON_CA_GF_IC)
,SUM(CONS.RES_C_VR_M_CON_CA_GF_OC)
,SUM(CONS.RES_C_VR_M_CON_CA_GF_CM)
,SUM(CONS.RES_C_VR_M_CON_CA_GF_IT)
,SUM(CONS.RES_C_VR_M_CON_CA_OC)
,SUM(CONS.RES_C_VR_M_CON_CA_OC_OC1)
,SUM(CONS.RES_C_VR_M_CON_CA_OC_OC2)
,SUM(CONS.RES_C_VR_M_CON_CA_OC_OC3)
,SUM(CONS.RES_C_VR_M_CON_CA_RI)
,SUM(CONS.RES_C_VR_M_CON_CI)
,SUM(CONS.RES_C_VR_M_CON_CI_VB)
,SUM(CONS.RES_C_VR_M_CON_CI_OV)
,SUM(CONS.RES_C_VR_M_CON_CI_OV_IS)
,SUM(CONS.RES_C_VR_M_CON_CI_OV_IM)
,SUM(CONS.RES_C_VR_M_CON_CI_OV_OC)
,SUM(CONS.RES_C_VR_M_CON_CI_RF)
,SUM(CONS.RES_C_VR_M_CON_CI_OI)
,SUM(CONS.RES_C_VR_M_CON_CI_OI_OI1)
,SUM(CONS.RES_C_VR_M_CON_CI_OI_OI2)
,SUM(CONS.RES_C_VR_M_CON_CI_OI_OI3)
,SUM(CONS.RES_C_VR_M_CON_IT)
,SUM(CONS.RES_C_VR_M_CON_UP)
,SUM(CONS.RES_C_VR_M_CON_UP_CC)
,SUM(CONS.RES_C_VR_M_CON_UP_IR)
,SUM(CONS.RES_C_VR_M_CON_UP2)
,SUM(CONS.RES_C_VR_M_CON_CV)
,SUM(CONS.RES_C_VR_M_CON_VT)
,SUM(CONS.RES_C_VR_M_VEN_UI)
,SUM(CONS.RES_C_VR_M_VEN_UIP)
,SUM(CONS.RES_C_VR_M_VEN_UII)
,SUM(CONS.RES_C_VR_M_VEN_CM)
,SUM(CONS.RES_C_VR_M_VEN_CMP)
,SUM(CONS.RES_C_VR_M_VEN_CMI)
,SUM(CONS.RES_C_VR_M_VEN_GI)
,SUM(CONS.RES_C_VR_M_VEN_CP)
,SUM(CONS.RES_C_VR_M_VEN_CD)
,SUM(CONS.RES_C_VR_M_VEN_CD_HC)
,SUM(CONS.RES_C_VR_M_VEN_CD_HC_HC)
,SUM(CONS.RES_C_VR_M_VEN_CD_HC_GR)
,SUM(CONS.RES_C_VR_M_VEN_CD_HI)
,SUM(CONS.RES_C_VR_M_VEN_CD_HI_HI)
,SUM(CONS.RES_C_VR_M_VEN_CD_HI_GR)
,SUM(CONS.RES_C_VR_M_VEN_CD_OH)
,SUM(CONS.RES_C_VR_M_VEN_CD_OH_OH)
,SUM(CONS.RES_C_VR_M_VEN_CD_OH_GR)
,SUM(CONS.RES_C_VR_M_VEN_CD_ID)_ID
,SUM(CONS.RES_C_VR_M_VEN_CT)
,SUM(CONS.RES_C_VR_M_VEN_CT_HG)
,SUM(CONS.RES_C_VR_M_VEN_CT_HG_HG)
,SUM(CONS.RES_C_VR_M_VEN_CT_HG_GR)
,SUM(CONS.RES_C_VR_M_VEN_CT_HV)
,SUM(CONS.RES_C_VR_M_VEN_CT_HV_HV)
,SUM(CONS.RES_C_VR_M_VEN_CT_HV_GR)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP_SV)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP_GP)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP_GS)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP_AU)
,SUM(CONS.RES_C_VR_M_VEN_CT_CP_CV)
,SUM(CONS.RES_C_VR_M_VEN_CT_GL)
,SUM(CONS.RES_C_VR_M_VEN_CT_GL_HC)
,SUM(CONS.RES_C_VR_M_VEN_CT_GL_NR)
,SUM(CONS.RES_C_VR_M_VEN_CT_GL_IP)
,SUM(CONS.RES_C_VR_M_VEN_CT_GL_IC)
,SUM(CONS.RES_C_VR_M_VEN_CA)
,SUM(CONS.RES_C_VR_M_VEN_CA_VT)
,SUM(CONS.RES_C_VR_M_VEN_CA_VT_PV)
,SUM(CONS.RES_C_VR_M_VEN_CA_VT_OP)
,SUM(CONS.RES_C_VR_M_VEN_CA_CF)
,SUM(CONS.RES_C_VR_M_VEN_CA_CF_PA)
,SUM(CONS.RES_C_VR_M_VEN_CA_CF_NH)
,SUM(CONS.RES_C_VR_M_VEN_CA_GF)
,SUM(CONS.RES_C_VR_M_VEN_CA_GF_IC)
,SUM(CONS.RES_C_VR_M_VEN_CA_GF_OC)
,SUM(CONS.RES_C_VR_M_VEN_CA_GF_CM)
,SUM(CONS.RES_C_VR_M_VEN_CA_GF_IT)
,SUM(CONS.RES_C_VR_M_VEN_CA_OC)
,SUM(CONS.RES_C_VR_M_VEN_CA_OC_OC1)
,SUM(CONS.RES_C_VR_M_VEN_CA_OC_OC2)
,SUM(CONS.RES_C_VR_M_VEN_CA_OC_OC3)
,SUM(CONS.RES_C_VR_M_VEN_CA_RI)
,SUM(CONS.RES_C_VR_M_VEN_CI)
,SUM(CONS.RES_C_VR_M_VEN_CI_VB)
,SUM(CONS.RES_C_VR_M_VEN_CI_OV)
,SUM(CONS.RES_C_VR_M_VEN_CI_OV_IS)
,SUM(CONS.RES_C_VR_M_VEN_CI_OV_IM)
,SUM(CONS.RES_C_VR_M_VEN_CI_OV_OC)
,SUM(CONS.RES_C_VR_M_VEN_CI_RF)
,SUM(CONS.RES_C_VR_M_VEN_CI_OI)
,SUM(CONS.RES_C_VR_M_VEN_CI_OI_OI1)
,SUM(CONS.RES_C_VR_M_VEN_CI_OI_OI2)
,SUM(CONS.RES_C_VR_M_VEN_CI_OI_OI3)
,SUM(CONS.RES_C_VR_M_VEN_IT)
,SUM(CONS.RES_C_VR_M_VEN_UP)
,SUM(CONS.RES_C_VR_M_VEN_UP_CC)
,SUM(CONS.RES_C_VR_M_VEN_UP_IR)
,SUM(CONS.RES_C_VR_M_VEN_UP2)
,SUM(CONS.RES_C_VR_M_VEN_CV)
,SUM(CONS.RES_C_VR_M_VEN_VT)
,SUM(CONS.RES_C_VR_UNI_UI)
,SUM(CONS.RES_C_VR_UNI_UIP)
,SUM(CONS.RES_C_VR_UNI_UII)
,SUM(CONS.RES_C_VR_UNI_CM)
,SUM(CONS.RES_C_VR_UNI_CMP)
,SUM(CONS.RES_C_VR_UNI_CMI)                                      
,SUM(CONS.RES_C_VR_UNI_GI)
,SUM(CONS.RES_C_VR_UNI_CP)
,SUM(CONS.RES_C_VR_UNI_CD)
,SUM(CONS.RES_C_VR_UNI_CD_HC)
,SUM(CONS.RES_C_VR_UNI_CD_HC_HC)
,SUM(CONS.RES_C_VR_UNI_CD_HC_GR)
,SUM(CONS.RES_C_VR_UNI_CD_HI)                                      
,SUM(CONS.RES_C_VR_UNI_CD_HI_HI)
,SUM(CONS.RES_C_VR_UNI_CD_HI_GR)
,SUM(CONS.RES_C_VR_UNI_CD_OH)
,SUM(CONS.RES_C_VR_UNI_CD_OH_OH)
,SUM(CONS.RES_C_VR_UNI_CD_OH_GR)
,SUM(CONS.RES_C_VR_UNI_CD_ID)
,SUM(CONS.RES_C_VR_UNI_CT)
,SUM(CONS.RES_C_VR_UNI_CT_HG)
,SUM(CONS.RES_C_VR_UNI_CT_HG_HG)
,SUM(CONS.RES_C_VR_UNI_CT_HG_GR)
,SUM(CONS.RES_C_VR_UNI_CT_HV)
,SUM(CONS.RES_C_VR_UNI_CT_HV_HV)
,SUM(CONS.RES_C_VR_UNI_CT_HV_GR)
,SUM(CONS.RES_C_VR_UNI_CT_CP)
,SUM(CONS.RES_C_VR_UNI_CT_CP_SV)
,SUM(CONS.RES_C_VR_UNI_CT_CP_GP)
,SUM(CONS.RES_C_VR_UNI_CT_CP_GS)
,SUM(CONS.RES_C_VR_UNI_CT_CP_AU)
,SUM(CONS.RES_C_VR_UNI_CT_CP_CV)
,SUM(CONS.RES_C_VR_UNI_CT_GL)
,SUM(CONS.RES_C_VR_UNI_CT_GL_HC)
,SUM(CONS.RES_C_VR_UNI_CT_GL_NR)
,SUM(CONS.RES_C_VR_UNI_CT_GL_IP)
,SUM(CONS.RES_C_VR_UNI_CT_GL_IC)
,SUM(CONS.RES_C_VR_UNI_CA)
,SUM(CONS.RES_C_VR_UNI_CA_VT)
,SUM(CONS.RES_C_VR_UNI_CA_VT_PV)
,SUM(CONS.RES_C_VR_UNI_CA_VT_OP)
,SUM(CONS.RES_C_VR_UNI_CA_CF)
,SUM(CONS.RES_C_VR_UNI_CA_CF_PA)
,SUM(CONS.RES_C_VR_UNI_CA_CF_NH)
,SUM(CONS.RES_C_VR_UNI_CA_GF)
,SUM(CONS.RES_C_VR_UNI_CA_GF_IC)
,SUM(CONS.RES_C_VR_UNI_CA_GF_OC)
,SUM(CONS.RES_C_VR_UNI_CA_GF_CM)
,SUM(CONS.RES_C_VR_UNI_CA_GF_IT)
,SUM(CONS.RES_C_VR_UNI_CA_OC)
,SUM(CONS.RES_C_VR_UNI_CA_OC_OC1)
,SUM(CONS.RES_C_VR_UNI_CA_OC_OC2)
,SUM(CONS.RES_C_VR_UNI_CA_OC_OC3)
,SUM(CONS.RES_C_VR_UNI_CA_RI)
,SUM(CONS.RES_C_VR_UNI_CI)
,SUM(CONS.RES_C_VR_UNI_CI_VB)
,SUM(CONS.RES_C_VR_UNI_CI_OV)
,SUM(CONS.RES_C_VR_UNI_CI_OV_IS)
,SUM(CONS.RES_C_VR_UNI_CI_OV_IM)
,SUM(CONS.RES_C_VR_UNI_CI_OV_OC)
,SUM(CONS.RES_C_VR_UNI_CI_RF)
,SUM(CONS.RES_C_VR_UNI_CI_OI)
,SUM(CONS.RES_C_VR_UNI_CI_OI_OI1)
,SUM(CONS.RES_C_VR_UNI_CI_OI_OI2)
,SUM(CONS.RES_C_VR_UNI_CI_OI_OI3)
,SUM(CONS.RES_C_VR_UNI_IT)
,SUM(CONS.RES_C_VR_UNI_UP)
,SUM(CONS.RES_C_VR_UNI_UP_CC)
,SUM(CONS.RES_C_VR_UNI_UP_IR)
,SUM(CONS.RES_C_VR_UNI_UP2)
,SUM(CONS.RES_C_VR_UNI_CV)
,SUM(CONS.RES_C_VR_UNI_VT)
,SUM(CONS.RES_C_EJE_UI)
,SUM(CONS.RES_C_EJE_UIP)
,SUM(CONS.RES_C_EJE_UII)
,SUM(CONS.RES_C_EJE_CM)
,SUM(CONS.RES_C_EJE_CMP)
,SUM(CONS.RES_C_EJE_CMI)
,SUM(CONS.RES_C_EJE_GI)
,SUM(CONS.RES_C_EJE_CP)
,SUM(CONS.RES_C_EJE_CD)
,SUM(CONS.RES_C_EJE_CD_HC)
,SUM(CONS.RES_C_EJE_CD_HC_HC)
,SUM(CONS.RES_C_EJE_CD_HC_GR)
,SUM(CONS.RES_C_EJE_CD_HI)
,SUM(CONS.RES_C_EJE_CD_HI_HI)
,SUM(CONS.RES_C_EJE_CD_HI_GR)
,SUM(CONS.RES_C_EJE_CD_OH)
,SUM(CONS.RES_C_EJE_CD_OH_OH)
,SUM(CONS.RES_C_EJE_CD_OH_GR)
,SUM(CONS.RES_C_EJE_CD_ID)
,SUM(CONS.RES_C_EJE_CT)
,SUM(CONS.RES_C_EJE_CT_HG)
,SUM(CONS.RES_C_EJE_CT_HG_HG)
,SUM(CONS.RES_C_EJE_CT_HG_GR)
,SUM(CONS.RES_C_EJE_CT_HV)
,SUM(CONS.RES_C_EJE_CT_HV_HV)
,SUM(CONS.RES_C_EJE_CT_HV_GR)
,SUM(CONS.RES_C_EJE_CT_CP)
,SUM(CONS.RES_C_EJE_CT_CP_SV)
,SUM(CONS.RES_C_EJE_CT_CP_GP)
,SUM(CONS.RES_C_EJE_CT_CP_GS)
,SUM(CONS.RES_C_EJE_CT_CP_AU)
,SUM(CONS.RES_C_EJE_CT_CP_CV)
,SUM(CONS.RES_C_EJE_CT_GL)
,SUM(CONS.RES_C_EJE_CT_GL_HC)
,SUM(CONS.RES_C_EJE_CT_GL_NR)
,SUM(CONS.RES_C_EJE_CT_GL_IP)
,SUM(CONS.RES_C_EJE_CT_GL_IC)
,SUM(CONS.RES_C_EJE_CA)
,SUM(CONS.RES_C_EJE_CA_VT)
,SUM(CONS.RES_C_EJE_CA_VT_PV)
,SUM(CONS.RES_C_EJE_CA_VT_OP)
,SUM(CONS.RES_C_EJE_CA_CF)
,SUM(CONS.RES_C_EJE_CA_CF_PA)
,SUM(CONS.RES_C_EJE_CA_CF_NH)
,SUM(CONS.RES_C_EJE_CA_GF)
,SUM(CONS.RES_C_EJE_CA_GF_IC)
,SUM(CONS.RES_C_EJE_CA_GF_OC)
,SUM(CONS.RES_C_EJE_CA_GF_CM)
,SUM(CONS.RES_C_EJE_CA_GF_IT)
,SUM(CONS.RES_C_EJE_CA_OC)
,SUM(CONS.RES_C_EJE_CA_OC_OC1)
,SUM(CONS.RES_C_EJE_CA_OC_OC2)
,SUM(CONS.RES_C_EJE_CA_OC_OC3)
,SUM(CONS.RES_C_EJE_CA_RI)
,SUM(CONS.RES_C_EJE_CI)
,SUM(CONS.RES_C_EJE_CI_VB)
,SUM(CONS.RES_C_EJE_CI_OV)
,SUM(CONS.RES_C_EJE_CI_OV_IS)
,SUM(CONS.RES_C_EJE_CI_OV_IM)
,SUM(CONS.RES_C_EJE_CI_OV_OC)
,SUM(CONS.RES_C_EJE_CI_RF)
,SUM(CONS.RES_C_EJE_CI_OI)
,SUM(CONS.RES_C_EJE_CI_OI_OI1)
,SUM(CONS.RES_C_EJE_CI_OI_OI2)
,SUM(CONS.RES_C_EJE_CI_OI_OI3)
,SUM(CONS.RES_C_EJE_IT)
,SUM(CONS.RES_C_EJE_UP)
,SUM(CONS.RES_C_EJE_UP_CC)
,SUM(CONS.RES_C_EJE_UP_IR)
,SUM(CONS.RES_C_EJE_UP2)
,SUM(CONS.RES_C_EJE_CV)
,SUM(CONS.RES_C_EJE_VT)
,SUM(CONS.RES_C_EJE_CVG)
  
  
  
  FROM(SELECT CONS_ID
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
         
   
   FROM tb_seleccion
          ,tb_resumen
          ,tb_consolidados
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
							
							GROUP BY RES_FECHA
							
							UNION ALL
							
							
	SELECT CONS_ID
,RES_C_FECHA
 ,SUM(RES_C_TOTAL_UNIDADES)
 ,SUM(RES_C_AREA_PROMEDIO_UNIDAD)
 ,SUM(RES_C_TOTAL_AREA_CONSTRUIDA)
 ,SUM(RES_C_TOTAL_AREA_VENDIBLE)
 ,SUM(RES_C_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO)
 ,SUM(RES_C_DENSIDAD_INDICE_OCUPACION)
 ,SUM(RES_C_VALOR_METRO_CUADRADO_LOTE_URBANIZADO)
 ,SUM(RES_C_NUMERO_PARQUEOS)
 ,SUM(RES_C_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD)
 ,SUM(RES_C_NUMERO_DEPOSITOS)
 ,RES_C_FECHA_INICIO_Y_TERMINACION_VENTAS
 ,RES_C_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION
 ,SUM(RES_C_RITMO_VENTAS_MENSUAL_PROMEDIO)
 ,SUM(RES_C_PUNTO_EQUILIBRIO_UNIDADES)
 ,SUM(RES_C_TASA_PROMEDIO_INCREMENTO_PRECIOS)
 ,SUM(RES_C_PORCENTAJE_VENTAS_NUEVOGAR)
 ,RES_C_FECHA_PRESUPUESTO
 ,SUM(RES_C_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO)
 ,SUM(RES_C_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA)
 ,SUM(RES_C_PRESUPUESTO)
 ,SUM(RES_C_INCREMENTOS)
 ,SUM(RES_C_COSTO_MATERIALES_MANO_OBRA) RES_C_COSTO_MATERIAL
 ,SUM(RES_C_PRESUPUESTO2)
 ,SUM(RES_C_INCREMENTOS2)
 ,SUM(RES_C_GASTOS_IMPREVISTOS)
 ,SUM(RES_C_COSTOS_POST_VENTAS)
 ,SUM(RES_C_COSTO_DIRECTO_CONSTRUCCION)
 ,SUM(RES_C_HONORARIOS_CONSTRUCCION)
 ,SUM(RES_C_HONORARIOS_CONSTRUCCION2)
 ,SUM(RES_C_GASTOS_REEMBOLSABLES)
 ,SUM(RES_C_HONORARIOS_INTERVENTORIA)
 ,SUM(RES_C_HONORARIOS_INTERVENTORIA2)
 ,SUM(RES_C_GASTOS_REEMBOLSABLES2)
 ,SUM(RES_C_OTROS_HONORARIOS_DISENOS_OTROS)
 ,SUM(RES_C_OTROS_HONORARIOS_DISENOS_OTROS2)
 ,SUM(RES_C_GASTOS_REEMBOLSABLES3)
 ,SUM(RES_C_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION)
 ,SUM(RES_C_COSTO_TOTAL_CONSTRUCCION)
 ,SUM(RES_C_HONORARIOS_GERENCIA)
 ,SUM(RES_C_HONORARIOS_GERENCIA2)
 ,SUM(RES_C_GASTOS_REEMBOLSABLES4)
 ,SUM(RES_C_HONORARIOS_VENTAS)
 ,SUM(RES_C_HONORARIOS_VENTAS2)
 ,SUM(RES_C_GASTOS_REEMBOLSABLES5)
 ,SUM(RES_C_COSTOS_PROMOCION_Y_VENTAS)
 ,SUM(RES_C_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION)
 ,SUM(RES_C_GASTOS_PUBLICIDAD)
 ,SUM(RES_C_GASTOS_SALA_VENTAS)
 ,SUM(RES_C_ADMON_UNIDADES_POR_ENTREGAR)
 ,SUM(RES_C_COMISIONES_VENTAS)
 ,SUM(RES_C_GASTOS_LEGALES)
 ,SUM(RES_C_HIPOTECAS_CREDITO_CONSTRUCTOR)
 ,SUM(RES_C_NOTARIALES_REGISTRO_DE_VENTAS)
 ,SUM(RES_C_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR)
 ,SUM(RES_C_IMPUESTO_ICA)
 ,SUM(RES_C_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS)
 ,SUM(RES_C_VALOR_TERENO_URBANIZADO)
 ,SUM(RES_C_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO)
 ,SUM(RES_C_OTROS_PAGOS_COSTOS_MAS_VALORIZACION)
 ,SUM(RES_C_COMISIONES_FIDUCIA)
 ,SUM(RES_C_PREVENTAS_Y_ADMON)
 ,SUM(RES_C_NUEVOGAR)
 ,SUM(RES_C_GASTOS_FINANCIEROS)
 ,SUM(RES_C_INTERESES_CREDITO_CONSTRUCTOR)
 ,SUM(RES_C_OTROS_COSTOS_CREDITO)
 ,SUM(RES_C_CORRECCION_MONETARIA)
 ,SUM(RES_C_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF)
 ,SUM(RES_C_OTROS_COSTOS_Y_GASTOS)
 ,SUM(RES_C_GASTO1)
 ,SUM(RES_C_GASTO2)
 ,SUM(RES_C_GASTO3)
 ,SUM(RES_C_REINTEGROS_IVA_PROYECTOS_VIS)
 ,SUM(RES_C_COSTO_TOTAL_DIRECTOS_INDIRECTOS)
 ,SUM(RES_C_VENTAS_BRUTAS)
 ,SUM(RES_C_OTROS_INGRESOS_VENTAS)
 ,SUM(RES_C_INTERESES_SUBROGACION)
 ,SUM(RES_C_INTERESES_MORA)
 ,SUM(RES_C_OFERTAS_COMERCIALES_OTROS_INGRESOS)
 ,SUM(RES_C_RENDIMIENTOS_FIDEICOMISO)
 ,SUM(RES_C_OTROS_INGRESOS)
 ,SUM(RES_C_INGRESOS1)
 ,SUM(RES_C_INGRESOS2)
 ,SUM(RES_C_INGRESOS3)
 ,SUM(RES_C_INGRESOS_TOTALES)
 ,SUM(RES_C_UTILIDAD_PROYECTO)
 ,SUM(RES_C_COSTO_CREDITO_TESORERIA)
 ,SUM(RES_C_IMPUESTO_RENTA)
 ,SUM(RES_C_UTILIDAD_PROYECTO2)
 ,SUM(RES_C_COSTO_VENTAS_GESTION)
 ,SUM(RES_C_VALOR_TERRENO_LIBROS)
 ,SUM(RES_C_COSTO_VENTAS_GESTION_SIN_INTERESES)
 ,SUM(RES_C_TIR_EA)
 ,SUM(RES_C_VPN_TASA_DESCUENTO)
 ,SUM(RES_C_UTILIDAD_COLPATRIA)
 ,SUM(RES_C_CONSTRUCTORA)
 ,SUM(RES_C_TRANSACCIONES_INMOBILIARIAS)
 ,SUM(RES_C_PROMOTORA)
 ,SUM(RES_C_TIR_COLAPTRIA_EA)
 ,SUM(RES_C_TIR_COLPATRIA_EM)
 ,SUM(RES_C_PORC_VEN_UI   )
 ,SUM(RES_C_PORC_VEN_UIP)
 ,SUM(RES_C_PORC_VEN_UII)
 ,SUM(RES_C_PORC_VEN_CM)
 ,SUM(RES_C_PORC_VEN_CMP)
 ,SUM(RES_C_PORC_VEN_CMI)
 ,SUM(RES_C_PORC_VEN_GI)
 ,SUM(RES_C_PORC_VEN_CP)
 ,SUM(RES_C_PORC_VEN_CD)
 ,SUM(RES_C_PORC_VEN_CD_HC)
 ,SUM(RES_C_PORC_VEN_CD_HC_HC)
 ,SUM(RES_C_PORC_VEN_CD_HC_GR)
 ,SUM(RES_C_PORC_VEN_CD_HI)
 ,SUM(RES_C_PORC_VEN_CD_HI_HI)
 ,SUM(RES_C_PORC_VEN_CD_HI_GR)
,SUM(RES_C_PORC_VEN_CD_OH)
,SUM(RES_C_PORC_VEN_CD_OH_OH)
,SUM(RES_C_PORC_VEN_CD_OH_GR)
,SUM(RES_C_PORC_VEN_CD_ID)
,SUM(RES_C_PORC_VEN_CT)
,SUM(RES_C_PORC_VEN_CT_HG)
,SUM(RES_C_PORC_VEN_CT_HG_HG)
,SUM(RES_C_PORC_VEN_CT_HG_GR)
,SUM(RES_C_PORC_VEN_CT_HV)
,SUM(RES_C_PORC_VEN_CT_HV_HV)
,SUM(RES_C_PORC_VEN_CT_HV_GR)
,SUM(RES_C_PORC_VEN_CT_CP)
,SUM(RES_C_PORC_VEN_CT_CP_SV)
,SUM(RES_C_PORC_VEN_CT_CP_GP)
,SUM(RES_C_PORC_VEN_CT_CP_GS)
,SUM(RES_C_PORC_VEN_CT_CP_AU)
,SUM(RES_C_PORC_VEN_CT_CP_CV)
,SUM(RES_C_PORC_VEN_CT_GL)
,SUM(RES_C_PORC_VEN_CT_GL_HC)
,SUM(RES_C_PORC_VEN_CT_GL_NR)
,SUM(RES_C_PORC_VEN_CT_GL_IP)
,SUM(RES_C_PORC_VEN_CT_GL_IC)
,SUM(RES_C_PORC_VEN_CA)
,SUM(RES_C_PORC_VEN_CA_VT)
,SUM(RES_C_PORC_VEN_CA_VT_PV)
,SUM(RES_C_PORC_VEN_CA_VT_OP)
,SUM(RES_C_PORC_VEN_CA_CF)
,SUM(RES_C_PORC_VEN_CA_CF_PA)
,SUM(RES_C_PORC_VEN_CA_CF_NH)
,SUM(RES_C_PORC_VEN_CA_GF)
,SUM(RES_C_PORC_VEN_CA_GF_IC)
,SUM(RES_C_PORC_VEN_CA_GF_OC)
,SUM(RES_C_PORC_VEN_CA_GF_CM)
,SUM(RES_C_PORC_VEN_CA_GF_IT)
,SUM(RES_C_PORC_VEN_CA_OC)
,SUM(RES_C_PORC_VEN_CA_OC_OC1)
,SUM(RES_C_PORC_VEN_CA_OC_OC2)
,SUM(RES_C_PORC_VEN_CA_OC_OC3)
,SUM(RES_C_PORC_VEN_CA_RI)
,SUM(RES_C_PORC_VEN_CI)
,SUM(RES_C_PORC_VEN_CI_VB)
,SUM(RES_C_PORC_VEN_CI_OV)
,SUM(RES_C_PORC_VEN_CI_OV_IS)
,SUM(RES_C_PORC_VEN_CI_OV_IM)
,SUM(RES_C_PORC_VEN_CI_OV_OC)
,SUM(RES_C_PORC_VEN_CI_RF)
,SUM(RES_C_PORC_VEN_CI_OI)
,SUM(RES_C_PORC_VEN_CI_OI_OI1)
,SUM(RES_C_PORC_VEN_CI_OI_OI2)
,SUM(RES_C_PORC_VEN_CI_OI_OI3)
,SUM(RES_C_PORC_VEN_IT)
,SUM(RES_C_PORC_VEN_UP)
,SUM(RES_C_PORC_VEN_UP_CC)
,SUM(RES_C_PORC_VEN_UP_IR)
,SUM(RES_C_PORC_VEN_UP2)
,SUM(RES_C_PORC_VEN_CV)
,SUM(RES_C_PORC_VEN_VT)
,SUM(RES_C_PORC_VEN_CVG)
,SUM(RES_C_PORC_VEN_TIR)
,SUM(RES_C_PORC_VEN_VPN)
,SUM(RES_C_PORC_VEN_UC)
,SUM(RES_C_PORC_VEN_UC_CO)
,SUM(RES_C_PORC_VEN_UC_TI)
,SUM(RES_C_PORC_VEN_UC_PR)
,SUM(RES_C_PORC_VEN_TIR_C)
,SUM(RES_C_PORC_VEN_VPN_C)
,SUM(RES_C_VR_M_CON_UI)
,SUM(RES_C_VR_M_CON_UIP)
,SUM(RES_C_VR_M_CON_UII)
,SUM(RES_C_VR_M_CON_CM)
,SUM(RES_C_VR_M_CON_CMP)
,SUM(RES_C_VR_M_CON_CMI)
,SUM(RES_C_VR_M_CON_GI)
,SUM(RES_C_VR_M_CON_CP)
,SUM(RES_C_VR_M_CON_CD)
,SUM(RES_C_VR_M_CON_CD_HC)
,SUM(RES_C_VR_M_CON_CD_HC_HC)
,SUM(RES_C_VR_M_CON_CD_HC_GR)
,SUM(RES_C_VR_M_CON_CD_HI)
,SUM(RES_C_VR_M_CON_CD_HI_HI)
,SUM(RES_C_VR_M_CON_CD_HI_GR)
,SUM(RES_C_VR_M_CON_CD_OH)
,SUM(RES_C_VR_M_CON_CD_OH_OH)
,SUM(RES_C_VR_M_CON_CD_OH_GR)
,SUM(RES_C_VR_M_CON_CD_ID)
,SUM(RES_C_VR_M_CON_CT)
,SUM(RES_C_VR_M_CON_CT_HG)
,SUM(RES_C_VR_M_CON_CT_HG_HG)
,SUM(RES_C_VR_M_CON_CT_HG_GR)
,SUM(RES_C_VR_M_CON_CT_HV)
,SUM(RES_C_VR_M_CON_CT_HV_HV)
,SUM(RES_C_VR_M_CON_CT_HV_GR)
,SUM(RES_C_VR_M_CON_CT_CP)
,SUM(RES_C_VR_M_CON_CT_CP_SV)
,SUM(RES_C_VR_M_CON_CT_CP_GP)
,SUM(RES_C_VR_M_CON_CT_CP_GS)
,SUM(RES_C_VR_M_CON_CT_CP_AU)
,SUM(RES_C_VR_M_CON_CT_CP_CV)
,SUM(RES_C_VR_M_CON_CT_GL)
,SUM(RES_C_VR_M_CON_CT_GL_HC)
,SUM(RES_C_VR_M_CON_CT_GL_NR)
,SUM(RES_C_VR_M_CON_CT_GL_IP)
,SUM(RES_C_VR_M_CON_CT_GL_IC)
,SUM(RES_C_VR_M_CON_CA)
,SUM(RES_C_VR_M_CON_CA_VT)
,SUM(RES_C_VR_M_CON_CA_VT_PV)
,SUM(RES_C_VR_M_CON_CA_VT_OP)
,SUM(RES_C_VR_M_CON_CA_CF)
,SUM(RES_C_VR_M_CON_CA_CF_PA)
,SUM(RES_C_VR_M_CON_CA_CF_NH)
,SUM(RES_C_VR_M_CON_CA_GF)
,SUM(RES_C_VR_M_CON_CA_GF_IC)
,SUM(RES_C_VR_M_CON_CA_GF_OC)
,SUM(RES_C_VR_M_CON_CA_GF_CM)
,SUM(RES_C_VR_M_CON_CA_GF_IT)
,SUM(RES_C_VR_M_CON_CA_OC)
,SUM(RES_C_VR_M_CON_CA_OC_OC1)
,SUM(RES_C_VR_M_CON_CA_OC_OC2)
,SUM(RES_C_VR_M_CON_CA_OC_OC3)
,SUM(RES_C_VR_M_CON_CA_RI)
,SUM(RES_C_VR_M_CON_CI)
,SUM(RES_C_VR_M_CON_CI_VB)
,SUM(RES_C_VR_M_CON_CI_OV)
,SUM(RES_C_VR_M_CON_CI_OV_IS)
,SUM(RES_C_VR_M_CON_CI_OV_IM)
,SUM(RES_C_VR_M_CON_CI_OV_OC)
,SUM(RES_C_VR_M_CON_CI_RF)
,SUM(RES_C_VR_M_CON_CI_OI)
,SUM(RES_C_VR_M_CON_CI_OI_OI1)
,SUM(RES_C_VR_M_CON_CI_OI_OI2)
,SUM(RES_C_VR_M_CON_CI_OI_OI3)
,SUM(RES_C_VR_M_CON_IT)
,SUM(RES_C_VR_M_CON_UP)
,SUM(RES_C_VR_M_CON_UP_CC)
,SUM(RES_C_VR_M_CON_UP_IR)
,SUM(RES_C_VR_M_CON_UP2)
,SUM(RES_C_VR_M_CON_CV)
,SUM(RES_C_VR_M_CON_VT)
,SUM(RES_C_VR_M_VEN_UI)
,SUM(RES_C_VR_M_VEN_UIP)
,SUM(RES_C_VR_M_VEN_UII)
,SUM(RES_C_VR_M_VEN_CM)
,SUM(RES_C_VR_M_VEN_CMP)
,SUM(RES_C_VR_M_VEN_CMI)
,SUM(RES_C_VR_M_VEN_GI)
,SUM(RES_C_VR_M_VEN_CP)
,SUM(RES_C_VR_M_VEN_CD)
,SUM(RES_C_VR_M_VEN_CD_HC)
,SUM(RES_C_VR_M_VEN_CD_HC_HC)
,SUM(RES_C_VR_M_VEN_CD_HC_GR)
,SUM(RES_C_VR_M_VEN_CD_HI)
,SUM(RES_C_VR_M_VEN_CD_HI_HI)
,SUM(RES_C_VR_M_VEN_CD_HI_GR)
,SUM(RES_C_VR_M_VEN_CD_OH)
,SUM(RES_C_VR_M_VEN_CD_OH_OH)
,SUM(RES_C_VR_M_VEN_CD_OH_GR)
,SUM(RES_C_VR_M_VEN_CD_ID)_ID
,SUM(RES_C_VR_M_VEN_CT)
,SUM(RES_C_VR_M_VEN_CT_HG)
,SUM(RES_C_VR_M_VEN_CT_HG_HG)
,SUM(RES_C_VR_M_VEN_CT_HG_GR)
,SUM(RES_C_VR_M_VEN_CT_HV)
,SUM(RES_C_VR_M_VEN_CT_HV_HV)
,SUM(RES_C_VR_M_VEN_CT_HV_GR)
,SUM(RES_C_VR_M_VEN_CT_CP)
,SUM(RES_C_VR_M_VEN_CT_CP_SV)
,SUM(RES_C_VR_M_VEN_CT_CP_GP)
,SUM(RES_C_VR_M_VEN_CT_CP_GS)
,SUM(RES_C_VR_M_VEN_CT_CP_AU)
,SUM(RES_C_VR_M_VEN_CT_CP_CV)
,SUM(RES_C_VR_M_VEN_CT_GL)
,SUM(RES_C_VR_M_VEN_CT_GL_HC)
,SUM(RES_C_VR_M_VEN_CT_GL_NR)
,SUM(RES_C_VR_M_VEN_CT_GL_IP)
,SUM(RES_C_VR_M_VEN_CT_GL_IC)
,SUM(RES_C_VR_M_VEN_CA)
,SUM(RES_C_VR_M_VEN_CA_VT)
,SUM(RES_C_VR_M_VEN_CA_VT_PV)
,SUM(RES_C_VR_M_VEN_CA_VT_OP)
,SUM(RES_C_VR_M_VEN_CA_CF)
,SUM(RES_C_VR_M_VEN_CA_CF_PA)
,SUM(RES_C_VR_M_VEN_CA_CF_NH)
,SUM(RES_C_VR_M_VEN_CA_GF)
,SUM(RES_C_VR_M_VEN_CA_GF_IC)
,SUM(RES_C_VR_M_VEN_CA_GF_OC)
,SUM(RES_C_VR_M_VEN_CA_GF_CM)
,SUM(RES_C_VR_M_VEN_CA_GF_IT)
,SUM(RES_C_VR_M_VEN_CA_OC)
,SUM(RES_C_VR_M_VEN_CA_OC_OC1)
,SUM(RES_C_VR_M_VEN_CA_OC_OC2)
,SUM(RES_C_VR_M_VEN_CA_OC_OC3)
,SUM(RES_C_VR_M_VEN_CA_RI)
,SUM(RES_C_VR_M_VEN_CI)
,SUM(RES_C_VR_M_VEN_CI_VB)
,SUM(RES_C_VR_M_VEN_CI_OV)
,SUM(RES_C_VR_M_VEN_CI_OV_IS)
,SUM(RES_C_VR_M_VEN_CI_OV_IM)
,SUM(RES_C_VR_M_VEN_CI_OV_OC)
,SUM(RES_C_VR_M_VEN_CI_RF)
,SUM(RES_C_VR_M_VEN_CI_OI)
,SUM(RES_C_VR_M_VEN_CI_OI_OI1)
,SUM(RES_C_VR_M_VEN_CI_OI_OI2)
,SUM(RES_C_VR_M_VEN_CI_OI_OI3)
,SUM(RES_C_VR_M_VEN_IT)
,SUM(RES_C_VR_M_VEN_UP)
,SUM(RES_C_VR_M_VEN_UP_CC)
,SUM(RES_C_VR_M_VEN_UP_IR)
,SUM(RES_C_VR_M_VEN_UP2)
,SUM(RES_C_VR_M_VEN_CV)
,SUM(RES_C_VR_M_VEN_VT)
,SUM(RES_C_VR_UNI_UI)
,SUM(RES_C_VR_UNI_UIP)
,SUM(RES_C_VR_UNI_UII)
,SUM(RES_C_VR_UNI_CM)
,SUM(RES_C_VR_UNI_CMP)
,SUM(RES_C_VR_UNI_CMI)                                      
,SUM(RES_C_VR_UNI_GI)
,SUM(RES_C_VR_UNI_CP)
,SUM(RES_C_VR_UNI_CD)
,SUM(RES_C_VR_UNI_CD_HC)
,SUM(RES_C_VR_UNI_CD_HC_HC)
,SUM(RES_C_VR_UNI_CD_HC_GR)
,SUM(RES_C_VR_UNI_CD_HI)                                      
,SUM(RES_C_VR_UNI_CD_HI_HI)
,SUM(RES_C_VR_UNI_CD_HI_GR)
,SUM(RES_C_VR_UNI_CD_OH)
,SUM(RES_C_VR_UNI_CD_OH_OH)
,SUM(RES_C_VR_UNI_CD_OH_GR)
,SUM(RES_C_VR_UNI_CD_ID)
,SUM(RES_C_VR_UNI_CT)
,SUM(RES_C_VR_UNI_CT_HG)
,SUM(RES_C_VR_UNI_CT_HG_HG)
,SUM(RES_C_VR_UNI_CT_HG_GR)
,SUM(RES_C_VR_UNI_CT_HV)
,SUM(RES_C_VR_UNI_CT_HV_HV)
,SUM(RES_C_VR_UNI_CT_HV_GR)
,SUM(RES_C_VR_UNI_CT_CP)
,SUM(RES_C_VR_UNI_CT_CP_SV)
,SUM(RES_C_VR_UNI_CT_CP_GP)
,SUM(RES_C_VR_UNI_CT_CP_GS)
,SUM(RES_C_VR_UNI_CT_CP_AU)
,SUM(RES_C_VR_UNI_CT_CP_CV)
,SUM(RES_C_VR_UNI_CT_GL)
,SUM(RES_C_VR_UNI_CT_GL_HC)
,SUM(RES_C_VR_UNI_CT_GL_NR)
,SUM(RES_C_VR_UNI_CT_GL_IP)
,SUM(RES_C_VR_UNI_CT_GL_IC)
,SUM(RES_C_VR_UNI_CA)
,SUM(RES_C_VR_UNI_CA_VT)
,SUM(RES_C_VR_UNI_CA_VT_PV)
,SUM(RES_C_VR_UNI_CA_VT_OP)
,SUM(RES_C_VR_UNI_CA_CF)
,SUM(RES_C_VR_UNI_CA_CF_PA)
,SUM(RES_C_VR_UNI_CA_CF_NH)
,SUM(RES_C_VR_UNI_CA_GF)
,SUM(RES_C_VR_UNI_CA_GF_IC)
,SUM(RES_C_VR_UNI_CA_GF_OC)
,SUM(RES_C_VR_UNI_CA_GF_CM)
,SUM(RES_C_VR_UNI_CA_GF_IT)
,SUM(RES_C_VR_UNI_CA_OC)
,SUM(RES_C_VR_UNI_CA_OC_OC1)
,SUM(RES_C_VR_UNI_CA_OC_OC2)
,SUM(RES_C_VR_UNI_CA_OC_OC3)
,SUM(RES_C_VR_UNI_CA_RI)
,SUM(RES_C_VR_UNI_CI)
,SUM(RES_C_VR_UNI_CI_VB)
,SUM(RES_C_VR_UNI_CI_OV)
,SUM(RES_C_VR_UNI_CI_OV_IS)
,SUM(RES_C_VR_UNI_CI_OV_IM)
,SUM(RES_C_VR_UNI_CI_OV_OC)
,SUM(RES_C_VR_UNI_CI_RF)
,SUM(RES_C_VR_UNI_CI_OI)
,SUM(RES_C_VR_UNI_CI_OI_OI1)
,SUM(RES_C_VR_UNI_CI_OI_OI2)
,SUM(RES_C_VR_UNI_CI_OI_OI3)
,SUM(RES_C_VR_UNI_IT)
,SUM(RES_C_VR_UNI_UP)
,SUM(RES_C_VR_UNI_UP_CC)
,SUM(RES_C_VR_UNI_UP_IR)
,SUM(RES_C_VR_UNI_UP2)
,SUM(RES_C_VR_UNI_CV)
,SUM(RES_C_VR_UNI_VT)
,SUM(RES_C_EJE_UI)
,SUM(RES_C_EJE_UIP)
,SUM(RES_C_EJE_UII)
,SUM(RES_C_EJE_CM)
,SUM(RES_C_EJE_CMP)
,SUM(RES_C_EJE_CMI)
,SUM(RES_C_EJE_GI)
,SUM(RES_C_EJE_CP)
,SUM(RES_C_EJE_CD)
,SUM(RES_C_EJE_CD_HC)
,SUM(RES_C_EJE_CD_HC_HC)
,SUM(RES_C_EJE_CD_HC_GR)
,SUM(RES_C_EJE_CD_HI)
,SUM(RES_C_EJE_CD_HI_HI)
,SUM(RES_C_EJE_CD_HI_GR)
,SUM(RES_C_EJE_CD_OH)
,SUM(RES_C_EJE_CD_OH_OH)
,SUM(RES_C_EJE_CD_OH_GR)
,SUM(RES_C_EJE_CD_ID)
,SUM(RES_C_EJE_CT)
,SUM(RES_C_EJE_CT_HG)
,SUM(RES_C_EJE_CT_HG_HG)
,SUM(RES_C_EJE_CT_HG_GR)
,SUM(RES_C_EJE_CT_HV)
,SUM(RES_C_EJE_CT_HV_HV)
,SUM(RES_C_EJE_CT_HV_GR)
,SUM(RES_C_EJE_CT_CP)
,SUM(RES_C_EJE_CT_CP_SV)
,SUM(RES_C_EJE_CT_CP_GP)
,SUM(RES_C_EJE_CT_CP_GS)
,SUM(RES_C_EJE_CT_CP_AU)
,SUM(RES_C_EJE_CT_CP_CV)
,SUM(RES_C_EJE_CT_GL)
,SUM(RES_C_EJE_CT_GL_HC)
,SUM(RES_C_EJE_CT_GL_NR)
,SUM(RES_C_EJE_CT_GL_IP)
,SUM(RES_C_EJE_CT_GL_IC)
,SUM(RES_C_EJE_CA)
,SUM(RES_C_EJE_CA_VT)
,SUM(RES_C_EJE_CA_VT_PV)
,SUM(RES_C_EJE_CA_VT_OP)
,SUM(RES_C_EJE_CA_CF)
,SUM(RES_C_EJE_CA_CF_PA)
,SUM(RES_C_EJE_CA_CF_NH)
,SUM(RES_C_EJE_CA_GF)
,SUM(RES_C_EJE_CA_GF_IC)
,SUM(RES_C_EJE_CA_GF_OC)
,SUM(RES_C_EJE_CA_GF_CM)
,SUM(RES_C_EJE_CA_GF_IT)
,SUM(RES_C_EJE_CA_OC)
,SUM(RES_C_EJE_CA_OC_OC1)
,SUM(RES_C_EJE_CA_OC_OC2)
,SUM(RES_C_EJE_CA_OC_OC3)
,SUM(RES_C_EJE_CA_RI)
,SUM(RES_C_EJE_CI)
,SUM(RES_C_EJE_CI_VB)
,SUM(RES_C_EJE_CI_OV)
,SUM(RES_C_EJE_CI_OV_IS)
,SUM(RES_C_EJE_CI_OV_IM)
,SUM(RES_C_EJE_CI_OV_OC)
,SUM(RES_C_EJE_CI_RF)
,SUM(RES_C_EJE_CI_OI)
,SUM(RES_C_EJE_CI_OI_OI1)
,SUM(RES_C_EJE_CI_OI_OI2)
,SUM(RES_C_EJE_CI_OI_OI3)
,SUM(RES_C_EJE_IT)
,SUM(RES_C_EJE_UP)
,SUM(RES_C_EJE_UP_CC)
,SUM(RES_C_EJE_UP_IR)
,SUM(RES_C_EJE_UP2)
,SUM(RES_C_EJE_CV)
,SUM(RES_C_EJE_VT)
,SUM(RES_C_EJE_CVG)

   FROM tb_seleccion
          ,tb_c_resumen
          ,tb_consolidados
	      WHERE SEL_C_CONS_ID IS NOT NULL
		  AND SEL_C_CONS_ID = RES_C_CONS_ID
          AND CONS_CONS      = 'N'
		  AND SEL_CONS_ID  = 'N'
		  AND RES_C_FECHA BETWEEN CASE CONS_FEC_GEN_DES
          WHEN '0000-00-00' THEN RES_C_FECHA 
          ELSE CONS_FEC_GEN_DES
                            END
      AND CASE CONS_FEC_GEN_HAS
          WHEN '0000-00-00' THEN RES_C_FECHA 
          ELSE CONS_FEC_GEN_HAS
                            END
							
							GROUP BY RES_C_FECHA) CONS
							GROUP BY CONS.RES_C_FECHA;
 
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