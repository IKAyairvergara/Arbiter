<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: detalleProyecto.php

==> DESCRIPCION: Pantalla que permite visualizar el detalle de los proyectos parametrizados en el sistema.

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
<title>Detalle Proyecto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link rel="shortcut icon" href="favicon.png">
<link href="../../bootstrap/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../../bootstrap/js/tablecloth.js"></script>
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 #p{position:absolute; left:834px; top:41px; width:154px; height:76px;cursor:pointer}
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:640px; top:41px; width:162px; height:76px;cursor:pointer}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{position:absolute; left:50px; top:671px; width:76px; height:76px;cursor:pointer;}
  #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{position:absolute; left:200px; top:671px; width:76px; height:76px;cursor:pointer}
  #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p4{position:absolute; left:350px; top:672px; width:76px; height:76px;cursor: pointer;}
  #p4:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p5{}
 #p6{}

</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(detalleProyecto_01.png); position:absolute; left:0px; top:0px; width:1024px; height:41px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_02.png); position: relative; position:absolute; left:0px; top:41px; width:640px; height:117px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Parametrizacion/parametrizacion.php';" style="background-image:url(detalleProyecto_03.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_04.png); position:absolute; left:802px; top:41px; width:32px; height:117px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(detalleProyecto_05.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_06.png); position:absolute; left:988px; top:41px; width:36px; height:117px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_07.png); position:absolute; left:640px; top:117px; width:162px; height:41px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_08.png); position:absolute; left:834px; top:117px; width:154px; height:41px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_09.png); position:absolute; left:0px; top:158px; width:37px; height:610px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_10.png); position:absolute; left:37px; top:158px; width:953px; height:494px; overflow:scroll;" title="">
		<?php
		# Se llama la conexion al servidor y a la bd
		include "../../php/conexion.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "SELECT A.DET_PRO_ID,B.PRO_DESCRIPCION ,A.DET_ETAPA,C.SEG_DESCRIPCION ,D.PAR_DESCRIPCION FROM  tb_detalle_proyecto A
LEFT JOIN tb_proyecto B ON B.PRO_ID= A.DET_PRO_ID
LEFT JOIN tb_segmento C ON C.SEG_ID=A.DET_SEG_ID
LEFT JOIN tb_participacion D ON D.PAR_ID=A.DET_PAR_ID";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0' top>";
	            echo "<tr align='center'>";
				echo "<th>COD";
				echo "<th>PROYECTO";
				echo "<th>ETAPA";
				echo "<th>SEGMENTO";
				echo "<th>P / S";
				echo "</tr>";

			    while ($fila = $resultado->fetch_row()) {
			       //printf ("%s (%s)\n", $fila[0], $fila[1], $fila[2]);
			        echo "<tr align='center'>";
				    echo "<td>$fila[0]";
				    echo "<td>$fila[1]";
				    echo "<td>$fila[2]";
				    echo "<td>$fila[3]";
				    echo "<td>$fila[4]";
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
	<div style="background-image:url(detalleProyecto_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_12.png); position:absolute; left:37px; top:652px; width:953px; height:19px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_13.png); position:absolute; left:37px; top:671px; width:13px; height:97px;" title="">
	</div>
	<div id="p2" onclick="location.href='../EditarDetalleProyecto/editarDetalleProyecto.php';" style="background-image:url(detalleProyecto_14.png)" title="">
	</div>
	<div style="background-image:url(detalleProyecto_15.png); position:absolute; left:126px; top:671px; width:74px; height:97px;" title="">
	</div>
	<div id="p3" onclick="location.href='../AgregarDetalleProyecto/agregarDetalleProyecto.php';"style="background-image:url(detalleProyecto_16.png);" title="">
	</div>
	<div style="background-image:url(detalleProyecto_17.png); position:absolute; left:276px; top:671px; width:714px; height:1px;" title="">
	</div>
	<div  style="background-image:url(detalleProyecto_18.png);position:absolute; left:276px; top:672px; width:74px; height:96px;" title="">
	</div>
	<div id="p4" onclick="location.href='../EliminarDetalleProyecto/eliminarDetalleProyecto.php';" style="background-image:url(detalleProyecto_19.png);" title="">
	</div>
	<div style="background-image:url(detalleProyecto_20.png); position:absolute; left:426px; top:672px; width:564px; height:96px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_21.png); position:absolute; left:50px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_22.png); position:absolute; left:200px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(detalleProyecto_23.png); position:absolute; left:350px; top:748px; width:76px; height:20px;" title="">
	</div>
</div>
</body>
</html>
