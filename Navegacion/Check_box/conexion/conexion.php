<?php 

		class Conexion{
			var $host;
			var $usuario;
			var $contrasena;
			var $baseDatos;
		
			function Conexion(){
				$this->host="mysql.hostinger.co"; //
				$this->usuario="u517611460_ika"; //usuario que tengas definido
				$this->contrasena="Colombia2016*"; //contraseña que tengas definidad
				$this->baseDatos="u517611460_model"; //base de datos personas, si quieres utilizar otra base de datos solamente cambiala
			}
			
			function conectarse(){
				$enlace = mysqli_connect($this->host, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
					//echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
				mysqli_close($enlace); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
			}
		}

?>
