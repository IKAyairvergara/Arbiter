<?php 
    //creamos la sesion 
    session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
    if(!isset($_SESSION['user_id']))  
    { 
		header('Location: ../../index.php');  
        exit(); 
    } 
?>
<html>
<head>
<title>Agregar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
	
  #p{ position:absolute; left:821px; top:32px; width:167px; height:76px;cursor: pointer;}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:599px; top:32px; width:179px; height:76px;cursor: pointer;}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#ok:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
</style>
</head>
<body>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(agregar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(agregar_02.png); position:absolute; left:0px; top:32px; width:599px; height:126px;" title="">
	</div>
	<div id="p1" onClick="location.href='../DetalleProyecto/detalleProyecto.php';"style="background-image:url(agregar_03.png); " title="">
	</div>
	<div style="background-image:url(agregar_04.png); position:absolute; left:778px; top:32px; width:43px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';"style="background-image:url(agregar_05.png);" title="">
	</div>
	<div style="background-image:url(agregar_06.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(agregar_07.png); position:absolute; left:599px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_08.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_09.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_10.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<center>
	
	<br>
	<br>
	<form id="form1" name="form1" method="post" action="agregarDetalleProyecto.php">
	  <table class="tabla">
	  <tr>
	  	<td style="color: white; font-family:sans-serif;font-size:20;" >C&#243;digo Proyecto:</td>
	    <td>
        <select name='DET_PRO_ID' id='DET_PRO_ID' required>
				<?php
                include "../../php/conexion.php";
                $qr ="SELECT * FROM tb_proyecto"; 
                $i = 0;
                if ($resultado = $mysqli->query($qr)) {
                    while ($fila = $resultado->fetch_row()) {
                        echo "<option value='" .$fila[0]."''>";
                        echo $fila[1];  
                        echo "</option>";
                        }
                    }
                $mysqli->close();
                ?>	  
			</select>
        </td>
	  </tr>
	  <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;" >Etapa:</td>
	    <td>
        <input type="text" name="DET_ETAPA" id="DET_ETAPA" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/></td>
	  </tr>
	  <tr> 	
		<td style="color: white; font-family:sans-serif;font-size:20;" >Segmento:</td>
	    <td>
        <select name='DET_SEG_ID' id='DET_SEG_ID' required/>
				<?php
                include "../../php/conexion.php";
                $qr ="SELECT * FROM tb_segmento"; 
                $i = 0;
                if ($resultado = $mysqli->query($qr)) {
                    while ($fila = $resultado->fetch_row()) {
                        echo "<option value='" .$fila[0]."''>";
                        echo $fila[1];  
                        echo "</option>";
                        }
                    }
                $mysqli->close();
                ?>	  
			</select>
	    </td>
	  </tr>
	  <tr> 	
		<td style="color: white; font-family:sans-serif;font-size:20;" >Participaci&#243;n:</td>
	    <td>
        <select name='DET_PAR_ID' id='DET_PAR_ID' required>
				<?php
                include "../../php/conexion.php";
                $qr ="SELECT * FROM tb_participacion"; 
                $i = 0;
                if ($resultado = $mysqli->query($qr)) {
                    while ($fila = $resultado->fetch_row()) {
                        echo "<option value='" .$fila[0]."''>";
                        echo $fila[1];  
                        echo "</option>";
                        }
                    }
                $mysqli->close();
                ?>	  
			</select>
	    </td>
	  </tr>
	  <input id="ok" type="image" src='agregar_14.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
       
	</table>
	</form>
	</center>
		<?php 
			include "../../php/conexion.php";
				

			if(isset($_POST['DET_PRO_ID'])){
				
				$DET_PRO_ID=$_POST['DET_PRO_ID'];
			$DET_ETAPA=$_POST['DET_ETAPA']; 
			$DET_SEG_ID=$_POST['DET_SEG_ID'];
			$DET_PAR_ID=$_POST['DET_PAR_ID']; 		
				if($_POST["DET_ETAPA"]!=""){					
	     			$query = "INSERT INTO tb_detalle_proyecto (DET_PRO_ID, DET_ETAPA, DET_SEG_ID, DET_PAR_ID) VALUES ('$DET_PRO_ID', '$DET_ETAPA','$DET_SEG_ID','$DET_PAR_ID')";
					$result = $mysqli->query($query);
					if($result==false){
							print "<script>alert(\"los datos estan duplicados\");window.location='agregarDetalleProyecto.php';</script>";
							}
							else{
							print "<script>alert(\"los datos se enviaron correctamente\");window.location='../DetalleProyecto/detalleProyecto.php';</script>";
							}
		      
		   				}
			
				}
			$mysqli->close();
			
		?>
	</div>
	<div style="background-image:url(agregar_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_12.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(agregar_13.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(agregar_14.png); position:absolute; left:49px; top:671px; width:209px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(agregar_15.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(agregar_16.png); position:absolute; left:49px; top:747px; width:209px; height:21px;" title="">
	</div>
</div>
</body>
</html>