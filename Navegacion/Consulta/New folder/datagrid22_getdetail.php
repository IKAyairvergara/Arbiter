<?php

	include 'conn.php';
	
	$itemid = $_REQUEST['itemid'];
	
	$rs = mysql_query("select SEL_DET_PRO_ID,SEL_DET_ETAPA,SEL_MODELO,PRO_DESCRIPCION from tb_seleccion,tb_proyecto where SEL_CONS_ID='$itemid' AND SEL_DET_PRO_ID=PRO_ID");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);


?>
