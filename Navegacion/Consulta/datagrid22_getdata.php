<?php
	$result = array();
	
	include 'conn.php';
	
	$rs = mysql_query("SELECT * FROM TB_CONSOLIDADOS WHERE CONS_CONS = 'S';");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	
	echo json_encode($items);
?>