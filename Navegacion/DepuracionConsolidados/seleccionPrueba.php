<?php		
		require "DepuracionConsolidados.php";
		include "../php/conexion.php";	
			
			
			error_reporting(0);


			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        
			        	list($proyecto,$etapa) = explode("**",$checkBox[$i]); 
			          $query="DELETE FROM TB_CONSOLIDADOS WHERE CONS_ID='$proyecto' AND CONS_DESCRIPCION='$etapa'";  
					
						$delete_fct="DELETE  FROM TB_C_FLUJO_CAJA WHERE FLC_C_CONS_ID= '$proyecto'";
						$delete_flc="DELETE  FROM TB_C_FLUJO_CAJA_TERRENO WHERE FCT_C_CONS_ID= '$proyecto' ";
						$delete_res="DELETE  FROM TB_C_RESUMEN WHERE RES_C_CONS_ID= '$proyecto' ";
						$delete_ofl="DELETE  FROM TB_C_OTROS_FLUJOS WHERE OFL_C_CONS_ID= '$proyecto' ";
							
			            $resultados = $mysqli->query($query);  

						if(!$resultado_res= $mysqli -> query($delete_fct)){
							//echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
								if(!$resultado_res= $mysqli -> query($delete_flc)){
						//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_res= $mysqli -> query($delete_res)){
						//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_res= $mysqli -> query($delete_ofl)){
						//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}	
			   
					}
			    if($resultados){
				print "<script>alert(\"\Depuracion Exitosa $i Campos Borrados\");window.location='DepuracionConsolidados.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR NO HA SELECCIONADO NINGUNA CASILLA!\");window.location='DepuracionConsolidados.php';</script>";
				}
			
					
?>