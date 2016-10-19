<?php

if(!empty($_POST)){
	if(isset($_POST["username1"]) &&isset($_POST["email1"]) &&isset($_POST["password1"]) ){
		if($_POST["username1"]!=""&&$_POST["email1"]!=""&&$_POST["password1"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from tb_usuario where US_USERNAME=\"$_POST[username]\" or US_CORREO=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into tb_usuario(username,email,password) value (\"$_POST[username]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro ingresado con exito\");window.location='../home.php';</script>";
			}
		}
	}
}

?>