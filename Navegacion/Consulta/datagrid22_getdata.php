<?php
	$result = array();
	include 'conn.php';
	error_reporting(0);
	
	#$rs = mysql_query("select * from item where itemid in (select itemid from lineitem)");
	$rs = mysql_query("SELECT CONS_ID, CONS_DESCRIPCION , CONS_FEC_GEN_DES , CONS_FEC_GEN_HAS, CONS_PER, CONS_UNI_PRE FROM TB_CONSOLIDADOS");

	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	
	echo json_encode($items);
?>