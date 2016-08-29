<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="favicon.png">
<script type="text/javascript" src="../../bootstrap/js/jquery-latest.js"></script> 
<script type="text/javascript" src="../../bootstrap/js/jquery.tablesorter.js"></script> 
<link href="../../bootstrap/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../../bootstrap/js/tablecloth.js"></script>

<script type="text/javascript">	
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
 
 $(document).ready(function() 
    { 
        $("#myTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
    } 
); 



</script>
<style type="text/css">

#p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}

#myTable{cursor: pointer;}
</style>


<head>
	<title>Table Sorter Consolidados</title>
</head>
<body>

<div>

<?php
			#$mysqli = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model");
			include "../../php/conexion.php";
			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Falló la conexión: %s\n", mysqli_connect_error());
			    exit();
			}

			$consulta = "SELECT 
			 CONS_ID,
			 CONS_DESCRIPCION, 
			 CONS_FEC_GEN_DES, 
			 CONS_FEC_GEN_HAS, 
			 CONS_FEC_VEN_DES, 
			 CONS_FEC_VEN_HAS, 
			 CONS_FEC_CON_DES, 
			 CONS_FEC_CON_HAS, 
			 CONS_FEC_PRE_DES, 
			 CONS_FEC_PRE_HAS, 
			 CONS_PER, 
			 CONS_UNI_PRE, 
			 CONS_RIT_VEN, 
			 CONS_POR_VTA_NHO, 
			 CONS_VER, 
			 CONS_CONS, 
			 CONS_IND_ID_REE, 
			 CONS_IND_FECHA_REE, 
			 CONS_IND_VALOR_REE 
			 FROM TB_CONSOLIDADOS";

			if ($resultado = $mysqli->query($consulta)) {

			    /* obtener el array de objetos */
			    echo "<center>";
			    echo "<table id='myTable' class='tablesorter'>"; 
			    echo "<thead>";
	            echo "<tr align='center'>";  
				echo "<th>ID CONSOLIDADO";  
				echo "<th>DESCRIPCION";
				echo "<th>GENERACION DESDE";   
				echo "<th>GENERACION HASTA"; 
				echo "<th>VENTAS DESDE";   
				echo "<th>VENTAS HASTA";
				echo "<th>CONSTRUCCION DESDE";   
				echo "<th>CONSTRUCCION HASTA";
				echo "<th>PRESUPUESTO DESDE";   
				echo "<th>PRESUPUESTO HASTA";
				echo "<th>PERIODICIDAD";
				echo "<th>UNIDAD PRESENTACION";
				echo "<th>RITMO VENTAS";
				echo "<th>% VENTAS NUEVO HOGAR";
				echo "<th>VERSION";
				echo "<th>MONEDA RE-EXPRESION";
				echo "<th>FECHA";
				echo "<th>VALOR";
				echo "</tr>";
				echo "</thead>"; 
				echo "<tbody>";
			    while ($fila = $resultado->fetch_row()) {
			       //printf ("%s (%s)\n", $fila[0], $fila[1], $fila[2]);
			         
			        echo "<tr align='center'>";  
				    echo "<td>$fila[0]";  
				    echo "<td>$fila[1]";
				    echo "<td>$fila[2]";
				    echo "<td>$fila[3]";
				    echo "<td>$fila[4]";  
				    echo "<td>$fila[5]";
				    echo "<td>$fila[6]";
				    echo "<td>$fila[7]";
				    echo "<td>$fila[8]";  
				    echo "<td>$fila[9]";
				    echo "<td>$fila[10]";
				    echo "<td>$fila[11]";
				    echo "<td>$fila[12]";  
				    echo "<td>$fila[13]";
				    echo "<td>$fila[14]";
				    echo "<td>$fila[15]";
				    echo "<td>$fila[16]";  
				    echo "<td>$fila[17]";
				    
			    }
			    echo "</tbody>";
			    echo "</table>";
			    echo "</center>";  

			    /* liberar el conjunto de resultados */
			    $resultado->close();
			}

			/* cerrar la conexión */
			$mysqli->close();
	 	?>	

</div>

</body>
</html>