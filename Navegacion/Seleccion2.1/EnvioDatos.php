<?php
						include "../../php/conexion.php";
						require "seleccion.php";
						error_reporting(0);

						if(isset($_POST['genedesde'])){
						
							
						// Variables Formulario
							$Genedesde = $_POST['genedesde'];
							$Genehasta = $_POST['genehasta'];
							$Ventasdesde = $_POST['ventasdesde'];
							$Ventashasta = $_POST['ventashasta'];
							$Constdesde = $_POST['constdesde'];
							$Consthasta = $_POST['consthasta'];
							$Prepdesde = $_POST['prepdesde'];
							$Prephasta = $_POST['prephasta'];
							$Periodicidad = $_POST['periodicidad'];
							$Unidadpre = $_POST['unidadpresentacion'];
							$Monedare = $_POST['monedaree'];
							$Ritmo = $_POST['ritmoventas'];
							$Nuevohogar = $_POST['nuevohogar'];
							$Proyecto = $_POST['proyecto'];
							$Version = $_POST['version'];
							$Tituloinf = $_POST['tituloinforme'];

							$CodigoID = $Proyecto."-CONS-".$Version;

							$query = "INSERT INTO TB_CONSOLIDADOS (CONS_ID, CONS_DESCRIPCION, CONS_FEC_GEN_DES, CONS_FEC_GEN_HAS, CONS_FEC_VEN_DES, CONS_FEC_VEN_HAS, CONS_FEC_CON_DES, CONS_FEC_CON_HAS, CONS_FEC_PRE_DES, CONS_FEC_PRE_HAS, CONS_PER, CONS_UNI_PRE, CONS_MON_REE, CONS_RIT_VEN, CONS_POR_VTA_NHO, CONS_VER) 
					      VALUES ('$CodigoID', '$Tituloinf', '$Genedesde', '$Genehasta', '$Ventasdesde','$Ventashasta','$Constdesde','$Consthasta','$Prepdesde','$Prephasta','$Periodicidad','$Unidadpre','$Monedare','$Ritmo','$Nuevohogar','$Version')";

					      $result = $mysqli->query($query);


					  if($result){
						print "<script>alert(\"Consolidacion Realizada Con Exito\");window.location='../Bienvenido/bienvenido.php';</script>";
						}
					  else{
							print "<script>alert(\"ERROR! -- El Proyecto y la Version Ya Existen!\");window.location='seleccion.php';</script>";
							}
						}
			
			?>