<!DOCTYPE html>
 
<html lang="es">
 
<head>
  <title>Eliminar Usuario</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="estilos.css" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>
 
<body>
   <div>
     <form role="form" name="registro" action="eliminarUsuario.php" method="post">
            <div>
              <label> Nombre de Usuario a eliminar <span class="req">*</span></label>
              	<select name='username' id='username' required>
				 <?php
				    include "../../php/conexion.php";
				    $qr ="SELECT * FROM user"; 
				        $i = 0;
				            if ($resultado = $mysqli->query($qr)) {
				                 while ($fila = $resultado->fetch_row()) {
				                    echo "<option value='" .$fila[2]."''>";
				                     echo $fila[2];  
				                     echo "</option>";
				                }
				            }
				   $mysqli->close();
				 ?>	  
				</select>
            </div>
		<input type="submit" value="Enviar" />
     </form>
   </div>
</body>
</html>

<?php 
		include "../../php/conexion.php";
		
		$Usuario= $_POST['username'];

	    if(isset($_POST['username'])){
			if($_POST["username"]!=""){

	      $query = "DELETE FROM user WHERE username= '$Usuario'";
		  $result = $mysqli->query($query);
	       if($result==false){
				print "<script>alert(\"El registro no puede ser eliminado ya que contiene dependencias\");window.location='EliminarSegmentos.php';</script>";
				}
				else{
				print "<script>alert(\"Se ha Eliminado correctamente\");window.location='../Segmentos/segmentos.php';</script>";
							}
			}
	     }

    	$mysqli->close();
?>