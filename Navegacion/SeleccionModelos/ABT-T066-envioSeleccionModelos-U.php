<?php	
		require "ABT-T047-seleccionModelos-U.php";
		include "../../php/ABT-T000-conexion-U.php";	
		
		error_reporting(0);
			
			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        	  
			        	list($id,$etapa,$modelo) = explode("**",$checkBox[$i]); 
			         	$query="INSERT INTO tb_seleccion (SEL_C_CONS_ID,SEL_CONS_ID) VALUES ('".$checkBox[$i]."','N')";     
			            $resultados = $mysqli->query($query);     
			        }
			    #echo "Completo";

			    if($resultados){
				print "<script>alert(\"\Seleccion Exitosa\");window.location='../Seleccion/ABT-T046-seleccion.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR!\");window.location='ABT-T066-envioSeleccionModelos-U.php';</script>";
				}
			

?>