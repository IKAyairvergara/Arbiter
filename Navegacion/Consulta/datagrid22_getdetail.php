<?php

  include 'conn.php';
  
  $itemid = $_REQUEST['itemid'];
  
  $rs = mysql_query("
            SELECT 
                            SEL_DET_PRO_ID           COD,
                            PRO_DESCRIPCION          NOMBRE,
                            SEL_MODELO               MODELO,
                            SEL_DET_ETAPA            ETAPA      

            FROM tb_seleccion,
                 tb_proyecto 
                        WHERE 
                             SEL_DET_PRO_ID=PRO_ID
						AND
						SEL_CONS_ID='$itemid'
                      
                             
                            ");
  $items = array();
  while($row = mysql_fetch_object($rs)){
    array_push($items, $row);
  }
  echo json_encode($items);


?>
