
<?php 
		require "../modelo/modelo.php";
		$objModelo =  new Modelo();
			
		if(isset($_POST["guardar"])){
			$nombre=$_POST["Nombre"];				
			$objModelo->insertar($nombre);
		}
		
		if(isset($_POST["delete"])){	
			foreach($_POST as $valor){						
					if(is_numeric($valor)){
						//echo " ".$valor."<br/>";
						$objModelo->borrar($valor);
					} 
			}
			header("Location: ../vista/index.php");										
		}
			
									
?>

	