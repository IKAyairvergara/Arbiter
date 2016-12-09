<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) && isset($_POST["password"])){
		if($_POST["username"]!=""&& $_POST["password"]!=""){
			include "index.php";
			include "conexion.php";
			
			##Verificar Credenciales ADMIN
			$usuario = $_POST['username'];
			$contrasenia = $_POST['password'];

			
			####FINN####
			

			$user_id=null;
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Credenciales Inválidas.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				if($usuario =="administrador"){
					print "<script>window.location='../Navegacion/Administrador/ABT-T001-administrador-D.php';</script>";
				}
				else{
					print "<script>window.location='../Navegacion/Bienvenido/ABT-T010-bienvenido.php';</script>";				
				}

			}
		}
	}
}



?>