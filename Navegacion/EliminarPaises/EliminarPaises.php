<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: eliminarPaises.php

==> DESCRIPCION: Pantalla que permite eliminar paises parametrizados en el sistema.

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
<title>Eliminar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }

 #p{position:absolute; left:821px; top:32px; width:167px; height:76px;cursor: pointer;}
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:595px; top:32px; width:179px; height:76px;cursor: pointer;}
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
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(eliminar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(eliminar_02.png); position:absolute; left:0px; top:32px; width:41px; height:126px;" title="">
	</div>
	<div style="background-image:url(eliminar_03.png); position:absolute; left:41px; top:32px; width:378px; height:76px;" title="">
	</div>
	<div style="background-image:url(eliminar_04.png); position:absolute; left:419px; top:32px; width:176px; height:126px;" title="">
	</div>
	<div id="p1" onClick="location.href='../Paises/paises.php';" style="background-image:url(eliminar_05.png); " title="">
	</div>
	<div style="background-image:url(eliminar_06.png); position:absolute; left:774px; top:32px; width:47px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(eliminar_07.png); " title="">
	</div>
	<div style="background-image:url(eliminar_08.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(eliminar_09.png); position:absolute; left:41px; top:108px; width:378px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_10.png); position:absolute; left:595px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_11.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_12.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(eliminar_13.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>	
	<center>
	<form method = "post" action = "EliminarPaises.php">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td style="color: white; font-family:sans-serif;font-size:20;" width = "100">Pais:</td>
    					<td><label for="CIUD_ID"></label>
                        <select name='CIUD_ID' id='CIUD_ID'> 
                        <?php
                        	#incluir conexion y servidor
							include "../../php/conexion.php";
							# consulta a la base de datos
							$qr ="SELECT * FROM tb_pais"; 
							$i = 0;
							#mostrar datos obtenidos en combo box
							if ($resultado = $mysqli->query($qr)) {
								while ($fila = $resultado->fetch_row()) {
									echo "<option value='" .$fila[0]."''>";
									echo $fila[1];  
									echo "</option>";
									}
								}
								#cerrar conexion
								$mysqli->close();
							?>
                            </select>
                        </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input id="ok" type="image" src='eliminar_17.png' name="delete" id="delete" value="delete" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
                        </td>
                     </tr>
                     
                  </table>
               </form>
               </center>

      
	<?php 
		#incluir conexion 
		include "../../php/conexion.php";
		#Validar Datos
			if(isset($_POST['CIUD_ID'])){
	$CIU_ID=$_POST['CIUD_ID'];}
			

	    if(isset($_POST['CIUD_ID'])){
			if($_POST["CIUD_ID"]!=""){
		  #enviar dato a eliminar a la base de datos
	      $query = "DELETE FROM tb_pais WHERE PAI_ID= '$CIU_ID'";
		  $result = $mysqli->query($query);
	       if($result==false){
				print "<script>alert(\"El registro no puede ser eliminado ya que contiene dependencias\");window.location='EliminarPaises.php';</script>";
				}
				else{
				print "<script>alert(\"Se ha Eliminado correctamente\");window.location='../Paises/paises.php';</script>";
							}
			}
	     }

    	$mysqli->close();
	?>
	</div>
	<div style="background-image:url(eliminar_14.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(eliminar_15.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(eliminar_16.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(eliminar_17.png); position:absolute; left:49px; top:671px; width:209px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(eliminar_18.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(eliminar_19.png); position:absolute; left:49px; top:747px; width:209px; height:21px;" title="">
	</div>
</div>
</body>
</html>