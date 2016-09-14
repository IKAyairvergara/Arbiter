<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: participacion.php

==> DESCRIPCION: Pantalla participacion

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

======
-->
<?php 
    //creamos la sesion 
    session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
    if(!isset($_SESSION['user_id']))  
    { 
        header('Location: ../../index.php');  
        exit(); 
    } 
?>
<html>
<head>
<title>Tipo Participacion</title>
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

 #p{position:absolute; left:821px; top:32px; width:167px; height:76px;}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}

 #p1{position:absolute; left:624px; top:31px; width:180px; height:76px;}
   #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{position:absolute; left:45px; top:671px; width:76px; height:76px;}
   #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{position:absolute; left:195px; top:671px; width:76px; height:76px;}
   #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p4{position:absolute; left:346px; top:672px; width:76px; height:76px;}
   #p4:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p5{}
 #p6{}
 #p7{}
 #p8{}

</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(tipoParticipacion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:31px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_02.png); position:absolute; left:0px; top:31px; width:624px; height:127px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Parametrizacion/parametrizacion.php';" style="background-image:url(tipoParticipacion_03.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_04.png); position:absolute; left:804px; top:31px; width:220px; height:1px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_05.png); position:absolute; left:804px; top:32px; width:17px; height:126px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(tipoParticipacion_06.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_07.png); position:absolute; left:988px; top:32px; width:36px; height:736px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_08.png); position:absolute; left:624px; top:107px; width:180px; height:51px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_09.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_10.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_11.png); position:absolute; left:36px; top:158px; width:952px; height:494px; overflow: scroll;" title="">
	
	<?php
			include "../../php/conexion.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "SELECT PAR_ID, PAR_DESCRIPCION FROM tb_participacion ORDER BY PAR_ID";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0' >";  
	            echo "<tr align='center'>";  
				echo "<th>COD";  
				echo "<th>DESCRIPCIÓN";
				echo "</tr>"; 

			    while ($fila = $resultado->fetch_row()) {
			       //printf ("%s (%s)\n", $fila[0], $fila[1], $fila[2]);
			        echo "<tr align='center'>";  
				    echo "<td>$fila[0]";  
				    echo "<td>$fila[1]";
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
	<div style="background-image:url(tipoParticipacion_12.png); position:absolute; left:36px; top:652px; width:952px; height:19px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_13.png); position:absolute; left:36px; top:671px; width:9px; height:97px;" title="">
	</div>
	<div id="p2" onclick="location.href='../Editar2Participacion/Editar2Participacion.php';" style="background-image:url(tipoParticipacion_14.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_15.png); position:absolute; left:121px; top:671px; width:74px; height:97px;" title="">
	</div>
	<div id="p3" onclick="location.href='../AgregarParticipacion/AgregarParticipacion.php';" style="background-image:url(tipoParticipacion_16.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_17.png); position:absolute; left:271px; top:671px; width:717px; height:1px;" title="">
	</div>
	<div  style="background-image:url(tipoParticipacion_18.png);position:absolute; left:271px; top:672px; width:75px; height:96px; " title="">
	</div>
	<div id="p4" onclick="location.href='../EliminarParticipacion/EliminarParticipacion.php';" style="background-image:url(tipoParticipacion_19.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_20.png); position:absolute; left:422px; top:672px; width:566px; height:96px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_21.png); position:absolute; left:45px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_22.png); position:absolute; left:195px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(tipoParticipacion_23.png); position:absolute; left:346px; top:748px; width:76px; height:20px;" title="">
	</div>
</div>
</body>
</html>