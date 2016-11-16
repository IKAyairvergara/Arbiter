<?php

  include 'conn.php';
  
  $itemid = $_REQUEST['itemid'];
  
  $rs = mysql_query("
                       SELECT 
                          SEL_DET_PRO_ID           COD,
                          PRO_DESCRIPCION          NOMBRE,
                          SEL_MODELO               MODELO,
                          SEL_DET_ETAPA            ETAPA      

						FROM TB_SELECCION,
                        TB_PROYECTO 
                        WHERE SEL_DET_PRO_ID IS NOT NULL
						AND SEL_DET_PRO_ID=PRO_ID
                        AND 
                        SEL_CONS_ID='$itemid'
                   
				   UNION
					
                      SELECT 
                         SEL_C_CONS_ID              COD,
                         CONS_DESCRIPCION           NOMBRE,
                         'N/A '                     MODELO,
                         'N/A '                     ETAPA                         
              
					FROM TB_SELECCION,
                      TB_CONSOLIDADOS 
                        WHERE SEL_C_CONS_ID IS NOT NULL
                        AND SEL_C_CONS_ID = CONS_ID
                        AND SEL_CONS_ID = '$itemid'                        
						");
  $items = array();
  while($row = mysql_fetch_object($rs)){
    array_push($items, $row);
  }
  echo json_encode($items);


?>
