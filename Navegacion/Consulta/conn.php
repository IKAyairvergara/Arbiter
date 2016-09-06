<?php

$conn = @mysql_connect('mysql.hostinger.co','u517611460_ika','Colombia2016*');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('u517611460_model', $conn);

?>