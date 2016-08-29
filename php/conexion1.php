<?php

function conexion(){

$host="mysql.hostinger.co";
$user="u517611460_ika";
$password="Colombia2016*";
$db="u517611460_model";
$con = new mysqli($host,$user,$password,$db);

 if (!$con){

  die('Could not connect: ' . mysqli_error());
 }
 mysqli_select_db("u517611460_model", $con);

 return($con);

}

?>