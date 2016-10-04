<?php		
		require "ABT-T048-seleccionProyectos-U.php";
		include "../../php/conexion.php";
			
			
			error_reporting(0);


			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        
			        	list($id,$etapa,$modelo) = explode("**",$checkBox[$i]); 
			          	$query="INSERT INTO tb_seleccion (SEL_DET_PRO_ID, SEL_DET_ETAPA, SEL_MODELO, SEL_CONS_ID) VALUES ('$id','$etapa' ,'$modelo', 'N')";
						$resultados=$mysqli->query($query);
			        }
			   

			    if($resultados){
				print "<script>alert(\"\Seleccion Exitosa\");window.location='../Seleccion/ABT-T046-seleccion.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR!\");window.location='ABT-T048-seleccionProyectos-U.php';</script>";
				#printf("Errormessage: %s\n", $mysqli->error);

				}
			

?>