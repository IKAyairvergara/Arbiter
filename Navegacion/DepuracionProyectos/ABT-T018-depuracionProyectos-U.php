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
<title>Proyectos</title>
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
 #p{position:absolute; left:834px; top:41px; width:154px; height:76px;}
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:640px; top:41px; width:162px; height:76px;}
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
	<div style="background-image:url(proyectos_01.png); position:absolute; left:0px; top:0px; width:1024px; height:41px;" title="">
	</div>
	<div style="background-image:url(proyectos_02.png); position:absolute; left:0px; top:41px; width:640px; height:117px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Depuracion/ABT-T016-depuracion.php';" style="background-image:url(proyectos_03.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(proyectos_04.png); position:absolute; left:802px; top:41px; width:32px; height:117px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(proyectos_05.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(proyectos_06.png); position:absolute; left:988px; top:41px; width:36px; height:117px;" title="">
	</div>
	<div style="background-image:url(proyectos_07.png); position:absolute; left:640px; top:117px; width:162px; height:41px;" title="">
	</div>
	<div style="background-image:url(proyectos_08.png); position:absolute; left:834px; top:117px; width:154px; height:41px;" title="">
	</div>
	<div style="background-image:url(proyectos_09.png); position:absolute; left:0px; top:158px; width:37px; height:610px;" title="">
	</div>
	
	<form method="post" action="ABT-T065-seleccionDepuracionProyectos-U.php">
	<div style="background-image:url(proyectos_10.png); position:absolute; left:37px; top:158px; width:953px; height:494px; overflow: scroll;" title="">
			
			
			

			<?php
			include "../../php/ABT-T000-conexion-U.php";

			/* comprobar la conexion */
			if (mysqli_connect_errno()) {
			    printf("Fallo la conexion: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "SELECT MOD_DET_PRO_ID, MOD_DET_ETAPA, PRO_DESCRIPCION, PAI_DESCRIPCION, CIU_DESCRIPCION,SEG_DESCRIPCION,MOD_MODELO
            FROM tb_modelos
            ,tb_proyecto
            ,tb_detalle_proyecto
            ,tb_pais
            ,tb_ciudad
            ,tb_segmento
                 WHERE MOD_DET_PRO_ID= PRO_ID
					     AND PRO_ID = DET_PRO_ID
					     AND MOD_DET_ETAPA = DET_ETAPA
					     AND PRO_PAI_ID = PAI_ID
					     AND PRO_CIU_ID = CIU_ID
					     AND DET_SEG_ID = SEG_ID ";

		if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table border = '1' cellspacing='0' cellpadding='0'>";  
	            echo "<tr align='center'>";  
				echo "<th>COD";  
				echo "<th>ETAPA";
				echo "<th>PROYECTO";
				echo "<th>PAIS";
				echo "<th>CIUDAD";
				echo "<th>SEGMENTO";
				echo "<th>MOD";
				echo "<th>S";
				echo "</tr>"; 

			    while ($fila = $resultado->fetch_row()) {
			        echo "<tr align='center'>";  
				    echo "<td>$fila[0]";  
				    echo "<td>$fila[1]";
				    echo "<td>$fila[2]";  
				    echo "<td>$fila[3]";
				    echo "<td>$fila[4]";  
				    echo "<td>$fila[5]";
				    echo "<td>$fila[6]";  
					#echo "<td>". "<input name='checkbok[]'  type='"."checkbox"."' value='".$fila[0]."'"." value1='".$fila[1]."'".">"."</td>";
					echo "<td>"."<input type='"."checkbox"."' name = '"."proyecto[]"."' value='".$fila[0]."**".$fila[1]."**".$fila[6]."' >"."</td>";
				    echo "</tr>";	
			    }
			    echo "</table>";
			    echo "</center>";  

			    ###echo "<td>". "<button value='".$fila[0]."'>"."Archivo Excel"."</button>"."<td>";
			    /* liberar el conjunto de resultados */
			    $resultado->close();
			}
			

			/* cerrar la conexion */
			$mysqli->close();
	 	?>

	</div>
	<input id="p2" type="image" src='Untitled-1_14.png' name="delete" id="delete" value="Generar" style="position:absolute; left:50px; top:674px; width:184px; height:61px;" />
	
	</div>
	</form>
	<div style="background-image:url(proyectos_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(proyectos_12.png); position:absolute; left:37px; top:652px; width:953px; height:19px;" title="">
	</div>
	<div style="background-image:url(proyectos_13.png); position:absolute; left:37px; top:671px; width:13px; height:97px;" title="">
	</div>
	
	<div style="background-image:url(proyectos_15.png); position:absolute; left:126px; top:671px; width:74px; height:97px;" title="">
	</div>
	
	<div style="background-image:url(proyectos_17.png); position:absolute; left:276px; top:671px; width:714px; height:1px;" title="">
	</div>
	<div style="background-image:url(proyectos_18.png); position:absolute; left:276px; top:672px; width:74px; height:96px;" title="">
	</div>
	
	<div style="background-image:url(proyectos_20.png); position:absolute; left:426px; top:672px; width:564px; height:96px;" title="">
	</div>
	<div style="background-image:url(proyectos_21.png); position:absolute; left:50px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(proyectos_22.png); position:absolute; left:200px; top:747px; width:76px; height:21px;" title="">
	</div>
	<div style="background-image:url(proyectos_23.png); position:absolute; left:350px; top:748px; width:76px; height:20px;" title="">
	</div>
</div>
</body>
</html>