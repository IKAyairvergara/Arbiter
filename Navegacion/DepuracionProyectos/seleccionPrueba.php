<?php	

		# Llamado de archivo para captura de datos
		require "depuracionProyectos.php";
		#Archivo de conexin 
		include "../../php/conexion.php";	
			#nivel de reporte de errores
			error_reporting(0);
			
			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        	  
			        	list($proyecto,$etapa,$modelo) = explode("**",$checkBox[$i]);
				
			         	$query="DELETE FROM tb_modelos WHERE MOD_DET_PRO_ID='$proyecto' AND MOD_DET_ETAPA='$etapa' AND MOD_MODELO='$modelo'"; 
						$delete_fct="DELETE  FROM tb_flujo_caja WHERE FLC_DET_PRO_ID= '$proyecto' AND FLC_DET_ETAPA=$etapa AND FLC_MODELO='$modelo' ";
						$delete_flc="DELETE  FROM tb_flujo_caja_terreno WHERE FCT_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa AND FCT_MODELO='$modelo'";
						$delete_res="DELETE  FROM tb_resumen WHERE RES_DET_PRO_ID= '$proyecto' AND RES_DET_ETAPA=$etapa AND RES_MODELO='$modelo'";
						$delete_ofl="DELETE  FROM tb_otros_flujos WHERE OFL_DET_PRO_ID= '$proyecto' AND OFL_DET_ETAPA=$etapa AND OFL_MODELO='$modelo'";
							
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
			    #echo "Completo";

			   if($resultados){
				print "<script>alert(\"\Depuracion Exitosa $i Campos Borrados\");window.location='depuracionProyectos.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR NO HA SELECCIONADO NINGUNA CASILLA!\");window.location='depuracionProyectos.php';</script>";
				}
			

?>