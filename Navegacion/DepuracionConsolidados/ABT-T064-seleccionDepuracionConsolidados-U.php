<?php		
		require "ABT-T017-depuracionConsolidados-U.php";
		include "../../php/ABT-T000-conexion-U.php";	
			
			
			error_reporting(0);


			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        
			        	list($proyecto,$etapa) = explode("**",$checkBox[$i]); 
			          $query="DELETE FROM tb_consolidados WHERE CONS_ID='$proyecto' AND CONS_DESCRIPCION='$etapa'";  
					
						$delete_fct="DELETE  FROM tb_c_flujo_caja WHERE FLC_C_CONS_ID= '$proyecto'";
						$delete_flc="DELETE  FROM tb_c_flujo_caja_TERRENO WHERE FCT_C_CONS_ID= '$proyecto' ";
						$delete_res="DELETE  FROM tb_c_resumen WHERE RES_C_CONS_ID= '$proyecto' ";
						$delete_ofl="DELETE  FROM tb_c_otros_flujos WHERE OFL_C_CONS_ID= '$proyecto' ";
							
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
				print "<script>alert(\"\Depuracion Exitosa $i Campos Borrados\");window.location='ABT-T017-depuracionConsolidados-U.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR NO HA SELECCIONADO NINGUNA CASILLA!\");window.location='ABT-T017-depuracionConsolidados-U.php';</script>";
				}
			
					
?>