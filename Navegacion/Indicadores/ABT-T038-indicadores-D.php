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
<title>Indicadores</title>
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
 #p{position:absolute; left:621px; top:32px; width:179px; height:76px;} 
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:821px; top:32px; width:167px; height:76px;} 
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{position:absolute; left:50px; top:671px; width:76px; height:76px;}
  #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{position:absolute; left:200px; top:671px; width:76px; height:76px;}
  #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p4{position:absolute; left:350px; top:672px; width:76px; height:76px;}
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
 #p9{}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(indicadores_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(indicadores_02.png); position:absolute; left:0px; top:32px; width:621px; height:126px;" title="">
	</div>
	<div id="p" onclick="location.href='../Parametrizacion/ABT-T042-parametrizacion-D.php';" style="background-image:url(indicadores_03.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(indicadores_04.png); position:absolute; left:800px; top:32px; width:21px; height:126px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(indicadores_05.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(indicadores_06.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(indicadores_07.png); position:absolute; left:621px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(indicadores_08.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(indicadores_09.png); position:absolute; left:0px; top:158px; width:37px; height:610px;" title="">
	</div>
	<div style="background-image:url(indicadores_10.png); position:absolute; left:37px; top:158px; width:953px; height:494px; overflow: scroll;"  title="">
	
	<?php
		include "../../php/ABT-T000-conexion-U.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "select ind_id, ind_descripcion, ind_fecha,ind_valor  from tb_indicador";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0' >";  
	            echo "<tr align='center'>";  
				echo "<th>COD";  
				echo "<th>DESCRIPCIÓN";
				echo "<th>FECHA";   
				echo "<th>VALOR"; 
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
	<div style="background-image:url(indicadores_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(indicadores_12.png); position:absolute; left:37px; top:652px; width:953px; height:19px;" title="">
	</div>
	<div style="background-image:url(indicadores_13.png); position:absolute; left:37px; top:671px; width:13px; height:97px;" title="">
	</div>
	<div id="p2" onclick="location.href='../EditarIndicadores/ABT-T022-editarIndicadores-U.php'" style="background-image:url(indicadores_14.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(indicadores_15.png); position:absolute; left:126px; top:671px; width:74px; height:97px;" title="">
	</div>
	<div id="p3" onclick="location.href='../AgregarIndicadores/ABT-T004-agregarIndicadores-U.php'" style="background-image:url(indicadores_16.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(indicadores_17.png); position:absolute; left:276px; top:671px; width:714px; height:1px;" title="">
	</div>
	<div style="background-image:url(indicadores_18.png); position:absolute; left:276px; top:672px; width:74px; height:96px;" title="">
	</div>
	<div id="p4" onclick="location.href='../EliminarIndicadores/ABT-T031-eliminarIndicadores-U.php'" style="background-image:url(indicadores_19.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(indicadores_20.png); position:absolute; left:426px; top:672px; width:564px; height:96px;" title="">
	</div>
	<div style="background-image:url(indicadores_21.png); position:absolute; left:50px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(indicadores_22.png); position:absolute; left:200px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(indicadores_23.png); position:absolute; left:350px; top:748px; width:76px; height:20px;" title="">
	</div>
</div>
</body>
</html>