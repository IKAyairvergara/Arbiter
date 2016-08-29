<?php		
		require "seleccionProyectos.php";
		include "../php/conexion.php";
			
			
			error_reporting(0);


			$checkBox = $_POST['proyecto'];

			for ($i=0; $i<sizeof($checkBox); $i++)
			        {
			        
			        	list($id,$etapa,$modelo) = explode("**",$checkBox[$i]); 
			          	$query="INSERT INTO TB_SELECCION (SEL_DET_PRO_ID, SEL_DET_ETAPA, SEL_MODELO, SEL_CONS_ID) VALUES ('$id','$etapa' ,'$modelo', 'N')";
						$resultados=$mysqli->query($query);
			        }
			   

			    if($resultados){
				print "<script>alert(\"\Seleccion Exitosa\");window.location='../Seleccion2/seleccion.php';</script>";
				}
			    else{
				print "<script>alert(\"ERROR!\");window.location='seleccionProyectos.php';</script>";
				}
			

?>