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
<title>Depuracion</title>
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
 #p{position:absolute; left:640px; top:41px; width:162px; height:76px; cursor:pointer}
 #p:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p1{position:absolute; left:834px; top:41px; width:154px; height:76px; cursor:pointer}
 #p1:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p2{}
 #p2:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 </style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(Untitled-1_01.png); position:absolute; left:0px; top:0px; width:1024px; height:42px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_02.png); position:absolute; left:0px; top:42px; width:642px; height:116px;" title="">
	</div>
	<div id="p" onclick="location.href='../Depuracion/depuracion.php';" style="background-image:url(Untitled-1_03.png);" title="">
	</div>
	<div style="background-image:url(Untitled-1_04.png); position:absolute; left:804px; top:42px; width:32px; height:116px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Untitled-1_05.png);" title="">
	</div>
	<div style="background-image:url(Untitled-1_06.png); position:absolute; left:990px; top:42px; width:34px; height:116px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_07.png); position:absolute; left:642px; top:118px; width:162px; height:40px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_08.png); position:absolute; left:836px; top:118px; width:154px; height:40px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_09.png); position:absolute; left:0px; top:158px; width:39px; height:610px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_10.png); position:absolute; left:39px; top:158px; width:953px; height:494px; overflow:scroll;" title="">
	
	<form method="post" action="seleccionPrueba.php">
	
	
	
	<?php
	//No Se Organiza el php del html debido a que necesita el php para mostrar la informacion de la bd
				include "../../php/conexion.php";

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}
			
			$consulta = "Select CONS_ID, CONS_DESCRIPCION FROM TB_CONSOLIDADOS";

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
				 
				    echo "<td>"."<input type='"."checkbox"."' name = '"."proyecto[]"."' value='".$fila[0]."**".$fila[1]."' >"."</td>";
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
	<input id="p2" type="image" src='Untitled-1_14.png' name="delete" id="delete" value="Generar" style="position:absolute; left:50px; top:674px; width:184px; height:61px;" />
		
	</div>
		
		 </form>
		
	</div>
	<div style="background-image:url(Untitled-1_11.png); position:absolute; left:992px; top:158px; width:32px; height:610px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_12.png); position:absolute; left:39px; top:652px; width:953px; height:30px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_13.png); position:absolute; left:39px; top:682px; width:4px; height:86px;" title="">
	</div>
	
	<div style="background-image:url(Untitled-1_15.png); position:absolute; left:240px; top:682px; width:752px; height:86px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_16.png); position:absolute; left:43px; top:743px; width:197px; height:25px;" title="">
	</div>
</div>
</body>
</html>
