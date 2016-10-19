<?php
include "../../php/ABT-T000-conexion-U.php";
                     $periodo = "SELECT CONS_PER FROM tb_consolidados WHERE CONS_ID ='SVSB-CONS-01'";
					 $consulta= $mysqli->query($periodo); 
				     if ($consulta) {
						  while ($fila = $consulta->fetch_row()) {  
							  $periodicidad = $fila[0];
						  }
					 }
					else{
						 $periodicidad = 0;
					 }
?>