<?php
session_start();
$a=$_SESSION['terminado'];
$b=$_SESSION['contador'];

echo 'Terminado '.$a.'<br>';

echo 'Contador '.$b.'<br>';

?>