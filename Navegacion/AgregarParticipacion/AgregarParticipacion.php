<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: agregarParticipacion.php

==> DESCRIPCION: Pantalla que permite agregar una nueva participación a la parametrización de la información. La información se guarda en la base de datos

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->
<?php 
    //Se crea la sesion 
    session_start(); 
    //Se valida si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion regresará a login.php 
    if(!isset($_SESSION['user_id']))  
    { 
		header('Location: ../../index.php');  
        exit(); 
    } 
?>
<html>
<head>
<title>Agregar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
  #p{ position:absolute; left:821px; top:32px; width:167px; height:76px;cursor: pointer;}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:599px; top:32px; width:179px; height:76px;cursor: pointer;}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#ok:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
</style>
</head>
<body>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(agregar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(agregar_02.png); position:absolute; left:0px; top:32px; width:599px; height:126px;" title="">
	</div>
	<div id="p1" onClick="location.href='../Participacion/participacion.php';" style="background-image:url(agregar_03.png); " title="">
	</div>
	<div style="background-image:url(agregar_04.png); position:absolute; left:778px; top:32px; width:43px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(agregar_05.png);" title="">
	</div>
	<div style="background-image:url(agregar_06.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(agregar_07.png); position:absolute; left:599px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_08.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_09.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_10.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<center>
	<br>
	<br>
	<form id="form1" name="form1" method="post" action="agregarParticipacion.php">
	  <table class="tabla">
	  <tr>
	  	<td style="color: white; font-family:sans-serif;font-size:20;" >Codigo de Participacion:</td>
	    <td><label for="CIUD_ID"></label> <input type="text" name="CIUD_ID" id="CIUD_ID" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();"  required/></td>
	  </tr>
	  <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;">Descripcion de Participacion:</td>
	    <td><label for="CIUD_DESCRIPCION"></label> <input type="text" name="CIUD_DESCRIPCION" id="CIUD_DESCRIPCION" maxlength="30" onKeyUp="javascript:this.value=this.value.toUpperCase();"  required/></td>
	  </tr>
	  

	  <tr>
	    <td>&nbsp;</td>
	    <td align="right">

	    <input id="ok" type="image" src='agregar_14.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" required/>
	    </td>
	  </tr>
	</table>
	</form>
	</center>
		<?php 
			#Incluir archivo de conexion
			include "../../php/conexion.php";
				
				#Funcion para quitar las tildes de los elementos ingresados por el usuario
				function quitar_tildes($cadena) {
					$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
					$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
					$texto = str_replace($no_permitidas, $permitidas ,$cadena);
					return $texto;
				}
				
			# Se comprueba que las  variables posean informacion
		    if(isset($_POST['CIUD_ID'])&& isset($_POST["CIUD_DESCRIPCION"])){
				
				$CIUD_ID= $_POST['CIUD_ID'];
				$CIUD_ID2 = quitar_tildes($CIUD_ID);//quita tildes
				$CIUD_ID3 = strtoupper($CIUD_ID2); // Volver mayusculas las letras
				
				$CIUD_DESCRIPCION= $_POST['CIUD_DESCRIPCION'];
				$CIUD_DESCRIPCION2 = quitar_tildes($CIUD_DESCRIPCION);//quita tildes
				$CIUD_DESCRIPCION3 = strtoupper($CIUD_DESCRIPCION2); // Volver mayusculas las letras
				
				# Realizar inserción de la nueva participación en la base de datos 
				if($_POST["CIUD_ID"]!=""&& $_POST["CIUD_DESCRIPCION"]!=""){					
	     			$query = "INSERT INTO tb_participacion (PAR_ID, PAR_DESCRIPCION) VALUES ('$CIUD_ID3','$CIUD_DESCRIPCION3')";
		      		$result = $mysqli->query($query);
					if($result==false){
							print "<script>alert(\"los datos estan duplicados\");window.location='agregarParticipacion.php';</script>";
							}
							else{
							print "<script>alert(\"los datos se enviaron correctamente\");window.location='../Participacion/participacion.php';</script>";
							}
		      
		   }
			
			}
			#Cerrar Conexion
			$mysqli->close();
			
		?>

	</div>
	<div style="background-image:url(agregar_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_12.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(agregar_13.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(agregar_14.png); position:absolute; left:49px; top:671px; width:209px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(agregar_15.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(agregar_16.png); position:absolute; left:49px; top:747px; width:209px; height:21px;" title="">
	</div>
</div>
</body>
</html>