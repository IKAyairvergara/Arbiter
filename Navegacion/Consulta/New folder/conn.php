<?php

$conn = mysql_connect('localhost','u517611460_ika','Colombia2016*');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('arbiter', $conn);

?>