DROP PROCEDURE IF EXISTS PROC_MODELO_C;
DELIMITER //
CREATE PROCEDURE PROC_MODELO_C (IN `V_CONS_ID` VARCHAR(12))  NO SQL
-- ------------------------------------------------------------------------------------------------------------
-- IKA CONSULTORES S.A.S                                                                                    --
-- NOMBRE:  PROC_FLUJO_CAJA_CONS                                                                            --
-- DESCRIPCION: Procedimiento almacenado para la consolidacion de modelos para el informe 'Flujo Caja'      --
-- PROYECTO: ARBITER                                                                                        --
-- OCTUBRE 2016                                                                                             --
-- ------------------------------------------------------------------------------------------------------------

BEGIN
CALL PROC_CONS_FLUJO_CAJA_TERRENO();
CALL PROC_CONS_OTROS_FLUJOS();
CALL PROC_CONS_FLUJO_CAJA();
CALL PROC_CONS_RESUMEN();

UPDATE tb_seleccion
    SET SEL_CONS_ID = V_CONS_ID
  WHERE SEL_CONS_ID = 'N';

UPDATE tb_filtro_avanzado
	SET FA_CONS = V_CONS_ID
  WHERE FA_CONS	 = 'N';

 UPDATE tb_consolidados
    SET CONS_CONS = 'S'
  WHERE CONS_ID   = V_CONS_ID;

END//	