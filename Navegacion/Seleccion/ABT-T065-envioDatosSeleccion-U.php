<?php
						require "ABT-T046-seleccion.php";
						include "../../php/ABT-T000-conexion-U.php";
						#$mysqli = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model");
						error_reporting(0);
						
						$query2 = "SELECT * FROM tb_seleccion WHERE SEL_CONS_ID = 'N';";
						$Resultado2 = $mysqli->query($query2);
						
						if(mysqli_num_rows($Resultado2)>0){

							if(isset($_POST['proyecto'])){
							
									// Variables Formulario
									
										// ---------------- Generacion
										$Genedesde = $_POST['genedesde'];
										$Genedesde1='0000-00-00';
										if($Genedesde!=''){
										$Genedesde1 =$Genedesde."-01";
										}
										
										$Genehasta = $_POST['genehasta'];
										$Genehasta1='0000-00-00';
										if($Genehasta!=''){
										$Genehasta1 =$Genehasta."-01";
										}
										
										// ----------- Venta
										$Ventasdesde = $_POST['ventasdesde'];
										$Ventasdesde1='0000-00-00';
										if($Ventasdesde!=''){
										$Ventasdesde1 =$Ventasdesde."-01";
										}

										$Ventashasta = $_POST['ventashasta'];
										$Ventashasta1='0000-00-00';
										if($Ventashasta!=''){
										$Ventashasta1 =$Ventashasta."-01";
										}
										// -------------Construccion
										$Constdesde = $_POST['constdesde'];
										$Constdesde1='0000-00-00';
										if($Constdesde!=''){
										$Constdesde1 =$Constdesde."-01";
										}
										

										$Consthasta = $_POST['consthasta'];
										$Consthasta1='0000-00-00';
										if($Consthasta!=''){
										$Consthasta1 =$Consthasta."-01";
										}
										// -----------------Presupuesto
										$Prepdesde = $_POST['prepdesde'];
										$Prepdesde1='0000-00-00';
										if($Prepdesde!=''){
										$Prepdesde1 =$Prepdesde."-01";
										}

										$Prephasta = $_POST['prephasta'];
										$Prephasta1='0000-00-00';
										if($Prephasta!=''){
										$Prephasta1 =$Prephasta."-01";
										}

										//-------------Otros Datos
										$Periodicidad = $_POST['periodicidad'];
										
										$Unidadpre = $_POST['unidadpresentacion'];
										
										$Monedare = $_POST['pais'];
										
										$Fecha='0000-00-00';
										if($_POST['estado']!=''){
										$Fecha = $_POST['estado'];
										}
										
										$Valor='0';
										if($_POST['ciudad']!=''){
										$Valor = $_POST['ciudad'];
										}
										
										$Ritmo='0';
										if($_POST['ritmoventas']!=''){
										$Ritmo = $_POST['ritmoventas'];
										}
										
										$Nuevohogar='0';
										if($_POST['nuevohogar']!=''){
										$Nuevohogar = $_POST['nuevohogar'];
										}
										
										$Proyecto = $_POST['proyecto'];
										
										$Version = $_POST['version'];
										
										$Tituloinf = $_POST['tituloinforme'];

										$CodigoID = $Proyecto."-CONS-".$Version;

										$query = "INSERT INTO tb_consolidados (CONS_ID, CONS_DESCRIPCION, CONS_FEC_GEN_DES, CONS_FEC_GEN_HAS, 
										CONS_FEC_VEN_DES, CONS_FEC_VEN_HAS, CONS_FEC_CON_DES, CONS_FEC_CON_HAS,
										CONS_FEC_PRE_DES, CONS_FEC_PRE_HAS, CONS_PER, CONS_UNI_PRE, 
										CONS_IND_ID_REE, CONS_IND_FECHA_REE, CONS_IND_VALOR_REE , CONS_RIT_VEN, CONS_POR_VTA_NHO, 
										CONS_VER, CONS_CONS) 
								      VALUES ('$CodigoID', '$Tituloinf', '$Genedesde1', '$Genehasta1',
									  '$Ventasdesde1','$Ventashasta1','$Constdesde1','$Consthasta1',
									  '$Prepdesde1','$Prephasta1','$Periodicidad','$Unidadpre',
									  '$Monedare','$Fecha','$Valor','$Ritmo','$Nuevohogar',
									  '$Version','N');";
									    

								      $result = $mysqli->query($query);


								  if($result){
									// echo('CODIGO ID SELECCIONADO [' . $CodigoID. '].</br>');
									$query1 = "CALL PROC_MODELO_C('$CodigoID')";
									$result1 = $mysqli->query($query1);
									print "<script>alert(\"Los datos han sido correctamente enviados\");window.location='../Bienvenido/ABT-T010-bienvenido.php';</script>";

									}
								  else{
										// print "<script>alert(\"Error Datos duplicados!!!\");window.location='ABT-T046-seleccion.php';</script>";
										echo('There was an error running the query [' . $mysqli->error . '].</br>');
										}

								
								
								#if($result1){
									#print "<script>alert(\"PROCEDIMIENTO ALMACENADO REALIZADO\");</script>";
									#}
								  #else{
										#print "<script>alert(\"Error!!!\");window.location='seleccion.php';</script>";
										#echo('There was an error running the query [' . $mysqli->error . '].</br>');
										#}

							
						    }							
						}
					    else{
							print "<script>alert(\"No ha Seleccionado Proyectos y/o Modelos\");</script>";
						}

					?>