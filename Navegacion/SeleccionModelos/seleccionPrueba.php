<?php	
		require "seleccionModelos.php";
		include "../php/conexion.php";	
		
			error_reporting(0);
			
			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        	  
			        	list($id,$etapa,$modelo) = explode("**",$checkBox[$i]); 
			         	$query="INSERT INTO TB_SELECCION (SEL_C_CONS_ID,SEL_CONS_ID) VALUES ('".$checkBox[$i]."','N')";     
			            $resultados = $mysqli->query($query);     
			        }
			    #echo "Completo";

			    if($resultados){
				print "<script>alert(\"\Seleccion Exitosa\");window.location='../Seleccion2/seleccion.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR!\");window.location='seleccionModelos.php';</script>";
				}
			

?>