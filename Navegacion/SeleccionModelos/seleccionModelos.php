<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: seleccionModelos.php

==> DESCRIPCION: Pantalla Seleccion Modelos

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
<title>Seleccion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
 #p{position:absolute; left:642px; top:42px; width:162px; height:76px; cursor:pointer}
 #p:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p1{position:absolute; left:836px; top:42px; width:154px; height:76px; cursor:pointer}
 #p1:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p2{cursor:pointer}
 #p2:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p3{position:absolute; left:269px; top:683px; width:197px; height:61px; cursor: pointer}
 #p3:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 </style>
 <form method="post" action="seleccionPrueba.php">
    <div style="position:absolute; left:10%; top:0px; width:1025px; height:769px;">
	<div style="background-image:url(proyectos_01.png); position:absolute; left:0px; top:0px; width:1025px; height:42px;" title="">
	</div>
	<div style="background-image:url(proyectos_02.png); position:absolute; left:0px; top:42px; width:642px; height:117px;" title="">
	</div>
	<div id="p" onclick="location.href='../Seleccion2/seleccion.php';" style="background-image:url(proyectos_03.png);" title="">
	</div>
	<div style="background-image:url(proyectos_04.png); position:absolute; left:804px; top:42px; width:32px; height:117px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(proyectos_05.png);" title="">
	</div>
	<div style="background-image:url(proyectos_06.png); position:absolute; left:990px; top:42px; width:35px; height:117px;" title="">
	</div>
	<div style="background-image:url(proyectos_07.png); position:absolute; left:642px; top:118px; width:162px; height:41px;" title="">
	</div>
	<div style="background-image:url(proyectos_08.png); position:absolute; left:836px; top:118px; width:154px; height:41px;" title="">
	</div>
	<div style="background-image:url(proyectos_09.png); position:absolute; left:0px; top:159px; width:39px; height:610px;" title="">
	</div>
	<div style="background-image:url(proyectos_10.png); position:absolute; left:39px; top:159px; width:953px; height:494px;overflow:auto;" title="">
	<!--<input type="submit" name="delete" value="Generar">-->
	<?php
			include "../../php/conexion.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "Select CONS_ID, CONS_DESCRIPCION FROM tb_consolidados";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0'>";  
	            echo "<tr align='center'>";  
				echo "<th>CONSOLIDADO ID";
				echo "<th>CONSOLIDADO DESCRIPCION";
				echo "<th>S";
				echo "</tr>"; 

			    while ($fila = $resultado->fetch_row()) {
			        echo "<tr align='center'>";  
				    echo "<td>$fila[0]";  
				    echo "<td>$fila[1]";
				    echo "<td>"."<input type='"."checkbox"."' name = 'proyecto[]' value='".$fila[0]."'>"."</td>";
				    echo "</tr>";	
			    }
			    echo "</table>";
			    echo "</center>";  
			    
			    ###echo "<td>". "<button value='".$fila[0]."'>"."Archivo Excel"."</button>"."<td>";
			    /* liberar el conjunto de resultados */
			    $resultado->close();
			}

			/* cerrar la conexión */
			$mysqli->close();
		?>
	 
	</div>
	<div style="background-image:url(proyectos_11.png); position:absolute; left:992px; top:159px; width:33px; height:610px;" title="">
	</div>
	<div style="background-image:url(proyectos_12.png); position:absolute; left:39px; top:653px; width:953px; height:30px;" title="">
	</div>
	<div style="background-image:url(proyectos_13.png); position:absolute; left:39px; top:683px; width:14px; height:86px;" title="">
	</div>
	<div style="background-image:url(proyectos_14.png); " title="">
	<input id="p2" type="image" src='proyectos_14.png' name="delete" id="delete" value="Generar" style="position:absolute; left:35px; top:680px; width:184px; height:61px;" />
	</div>
	<div style="background-image:url(proyectos_15.png); position:absolute; left:237px; top:683px; width:32px; height:86px;" title="">
	</div>
	<div style="background-image:url(proyectos_17.png); position:absolute; left:466px; top:683px; width:526px; height:86px;" title="">
	</div>
	<div style="background-image:url(proyectos_18.png); position:absolute; left:53px; top:744px; width:184px; height:25px;" title="">
	</div>
	<div style="background-image:url(proyectos_19.png); position:absolute; left:269px; top:744px; width:197px; height:25px;" title="">
	</div>
</div>
</form>
</body>
</html>
	