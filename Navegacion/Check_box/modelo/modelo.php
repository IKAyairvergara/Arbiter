<?php 
		require "../conexion/conexion.php";		
		class Modelo{				
		var $conn;
		var $conexion;		
		function Modelo(){		
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();			
		}	
		//--------------------------------------------------------------------------------------------------------------------------		
		function insertar($nombreRon){			
			$sql="INSERT INTO TB_SELECCION (SEL_DET_PRO_ID,SEL_DET_ETAPA,SEL_MODELO) values ('".$nombreRon."','1','A')";
			mysqli_query($this->conn, $sql);
			header("Location: ../vista/index.php");
		}
		//--------------------------------------------------------------------------------------------------------------------------		
		function borrar($id){
			$sql="INSERT INTO TB_SELECCION (SEL_DET_PRO_ID,SEL_DET_ETAPA,SEL_MODELO) values ('".$id."','1','A')";	
			mysqli_query($this->conn, $sql);			
		}
		function listar(){
			$sql="select * from TB_CONSOLIDADOS";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			echo "<center><table>";
			echo "<tr bgcolor='#EC1564'><th></th><th>Id</th><th>Nombre</th></tr>";
			while ($row = mysqli_fetch_row($rs)){
				if($i%2==0){
					echo "<tr style='background: #8CD299;'>";
				}else {
						echo "<tr>";
					}	
				echo "<th><input type='checkbox' name='".$row[0]."' value='".$row[0]."'></th>";	
				echo "<th>";		
				echo $row[0];
				echo "</th>";
				echo "<th>";
				echo $row[1];		
				echo "</th>";					
				echo "</tr>";
				$i++;
			}	
			echo "</table></center>";
		}
	}
			
?>				



