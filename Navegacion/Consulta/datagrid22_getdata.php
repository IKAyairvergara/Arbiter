<?php
	$result = array();
<<<<<<< HEAD
	include 'conn.php';
	error_reporting(0);
	
	#$rs = mysql_query("select * from item where itemid in (select itemid from lineitem)");
	$rs = mysql_query("SELECT CONS_ID, CONS_DESCRIPCION , CONS_FEC_GEN_DES , CONS_FEC_GEN_HAS, CONS_PER, CONS_UNI_PRE FROM TB_CONSOLIDADOS");

=======
	
	include 'conn.php';
	
	$rs = mysql_query("SELECT * FROM TB_CONSOLIDADOS WHERE CONS_CONS = 'S';");
	
>>>>>>> 60676762f38f84fb69b6d2bc3e32a9bfe4157ef6
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	
	echo json_encode($items);
?>