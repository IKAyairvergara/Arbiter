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
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Servidores</title>
<link href="../../bootstrap/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../../bootstrap/js/tablecloth.js"></script>
</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 #p{position:absolute; left:640px; top:35px; width:162px; height:76px;cursor: pointer;}
 #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:821px; top:35px; width:168px; height:76px; cursor: pointer;}
 #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p2{position:absolute; left:50px; top:671px; width:354px; height:76px;cursor: pointer;}
#p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}

 </style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(servidores_01.png); position:absolute; left:0px; top:0px; width:1024px; height:35px;" title="">
	</div>
	<div style="background-image:url(servidores_02.png); position:absolute; left:0px; top:35px; width:640px; height:123px;" title="">
	</div>
	<div id="p" onClick="location.href='../Parametrizacion/parametrizacion.php';"  style="background-image:url(servidores_03.png); " title="">
	</div>
	<div style="background-image:url(servidores_04.png); position:absolute; left:802px; top:35px; width:19px; height:123px;" title="">
	</div>
	<div id="p1" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(servidores_05.png); " title="">
	</div>
	<div style="background-image:url(servidores_06.png); position:absolute; left:989px; top:35px; width:35px; height:733px;" title="">
	</div>
	<div style="background-image:url(servidores_07.png); position:absolute; left:640px; top:111px; width:162px; height:47px;" title="">
	</div>
	<div style="background-image:url(servidores_08.png); position:absolute; left:821px; top:111px; width:168px; height:47px;" title="">
	</div>
	<div style="background-image:url(servidores_09.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(servidores_10.png); position:absolute; left:36px; top:158px; width:953px; height:494px;" title="">
	<?php
	include "../../php/conexion.php";

      

		
			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "SELECT SER_PAI_CODIGO, SER_RUTA  FROM tb_servidor ";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0' >";  
	            echo "<tr align='center'>";  
				echo "<th>COD PAÍS SERVIDOR";  
				echo "<th>RUTA SERVIDOR";
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
	<div style="background-image:url(servidores_11.png); position:absolute; left:36px; top:652px; width:953px; height:19px;" title="">
	</div>
	<div style="background-image:url(servidores_12.png); position:absolute; left:36px; top:671px; width:14px; height:97px;" title="">
	</div>
	<div id="p2" onClick="location.href='../Editar2Servidores/editar2Servidores.php';" style="background-image:url(servidores_13.png); " title="">
	</div>
	<div style="background-image:url(servidores_14.png); position:absolute; left:404px; top:671px; width:585px; height:97px;" title="">
	</div>
	<div style="background-image:url(servidores_15.png); position:absolute; left:50px; top:747px; width:354px; height:21px;" title="">
	</div>
</div>
</body>
</html>
