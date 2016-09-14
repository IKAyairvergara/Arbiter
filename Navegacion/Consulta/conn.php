<?php

<<<<<<< HEAD
$conn = @mysql_connect('mysql.hostinger.co','u517611460_ika','Colombia2016*');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('u517611460_model', $conn);
=======
$conn = mysql_connect('localhost','u517611460_ika','Colombia2016*');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('arbiter', $conn);
>>>>>>> 60676762f38f84fb69b6d2bc3e32a9bfe4157ef6

?>