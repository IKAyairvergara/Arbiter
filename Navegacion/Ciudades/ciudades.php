<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: ciudades.php

==> DESCRIPCION: Pantalla que permite visualizar las ciudades parametrizadas en el sistema.

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
<title>Ciudades</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link href="../../bootstrap/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../../bootstrap/js/tablecloth.js"></script>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 #p{position:absolute; left:821px; top:32px; width:167px; height:76px;}
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:609px; top:33px; width:179px; height:76px;}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{position:absolute; left:50px; top:671px; width:76px; height:77px;}
  #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{position:absolute; left:200px; top:671px; width:76px; height:77px;}
  #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p4{position:absolute; left:350px; top:672px; width:76px; height:77px;}
  #p4:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(ciudades_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(ciudades_02.png); position:absolute; left:0px; top:32px; width:39px; height:126px;" title="">
	</div>
	<div style="background-image:url(ciudades_03.png); position:absolute; left:39px; top:32px; width:427px; height:76px;" title="">
	</div>
	<div style="background-image:url(ciudades_04.png); position:absolute; left:466px; top:32px; width:355px; height:1px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(ciudades_05.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(ciudades_06.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(ciudades_07.png); position:absolute; left:466px; top:33px; width:143px; height:125px;" title="">
	</div>
	<div  id="p1" onclick="location.href='../Parametrizacion/parametrizacion.php';" style="background-image:url(ciudades_08.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(ciudades_09.png); position:absolute; left:788px; top:33px; width:33px; height:125px;" title="">
	</div>
	<div style="background-image:url(ciudades_10.png); position:absolute; left:39px; top:108px; width:427px; height:50px;" title="">
	</div>
	<div style="background-image:url(ciudades_11.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(ciudades_12.png); position:absolute; left:609px; top:109px; width:179px; height:49px;" title="">
	</div>
	<div style="background-image:url(ciudades_13.png); position:absolute; left:0px; top:158px; width:37px; height:610px;" title="">
	</div>
	<div style="background-image:url(ciudades_14.png); position:absolute; left:37px; top:158px; width:953px; height:494px; overflow:scroll;" title="">
	<?php

		# Se incluye el archivo de conexion
		include "../../php/conexion.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}
			# Consulta a la base de datos JOIN entre  paises y ciudades
			$consulta = "SELECT A.CIU_PAI_ID, B.PAI_DESCRIPCION, A.CIU_ID, A.CIU_DESCRIPCION  FROM tb_ciudad A LEFT JOIN tb_pais B on A.CIU_PAI_ID=B.PAI_ID
ORDER BY B.PAI_DESCRIPCION, A.CIU_DESCRIPCION";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0' >";  
	            echo "<tr align='center'>";  
				echo "<th>COD PAÍS";  
				echo "<th>PAÍS";
				echo "<th>COD CIUDAD";   
				echo "<th>CIUDAD";
				echo "</tr>"; 

			    while ($fila = $resultado->fetch_row()) {
			       //printf ("%s (%s)\n", $fila[0], $fila[1], $fila[2]);
			        echo "<tr align='center'>";  
				    echo "<td>$fila[0]";  
				    echo "<td>$fila[1]";
				    echo "<td>$fila[2]";
				    echo "<td>$fila[3]";
				    echo "</tr>";
			    }
			    echo "</table>";
			    echo "</center>";  

			    /* liberar el conjunto de resultados */
			    $resultado->close();
			}

			/* cerrar la conexión */
			$mysqli->close();
	 	?>

	</div>
	<div style="background-image:url(ciudades_15.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(ciudades_16.png); position:absolute; left:37px; top:652px; width:953px; height:19px;" title="">
	</div>
	<div style="background-image:url(ciudades_17.png); position:absolute; left:37px; top:671px; width:13px; height:97px;" title="">
	</div>
	<div id="p2" onclick="location.href='../EditarCiudades/editarCiudades.php'" style="background-image:url(ciudades_18.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(ciudades_19.png); position:absolute; left:126px; top:671px; width:74px; height:97px;" title="">
	</div>
	<div id="p3" onclick="location.href='../AgregarCiudades/agregarCiudades.php'" style="background-image:url(ciudades_20.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(ciudades_21.png); position:absolute; left:276px; top:671px; width:714px; height:1px;" title="">
	</div>
	<div style="background-image:url(ciudades_22.png); position:absolute; left:276px; top:672px; width:74px; height:96px;" title="">
	</div>
	<div id="p4" onclick="location.href='../EliminarCiudades/eliminarCiudades.php'" style="background-image:url(ciudades_23.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(ciudades_24.png); position:absolute; left:426px; top:672px; width:564px; height:96px;" title="">
	</div>
	<div style="background-image:url(ciudades_25.png); position:absolute; left:50px; top:748px; width:76px; height:20px;" title="">
	</div>
	<div style="background-image:url(ciudades_26.png); position:absolute; left:200px; top:748px; width:76px; height:20px;" title="">
	</div>
	<div style="background-image:url(ciudades_27.png); position:absolute; left:350px; top:749px; width:76px; height:19px;" title="">
	</div>
</div>
</body>
</html>