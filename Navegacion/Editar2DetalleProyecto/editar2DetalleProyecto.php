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
<title>Editar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	cargar_paises();
	$("#pais").change(function(){dependencia_estado();});
	$("#estado").change(function(){dependencia_ciudad();});
	$("#estado").attr("disabled",true);
	$("#ciudad").attr("disabled",true);
});

function cargar_paises()
{
	$.get("scripts/cargar-paises.php", function(resultado){
		if(resultado == false)
		{
			alert("El Proyecto no tiene etapas registradas");
		}
		else
		{
			$('#pais').append(resultado);			
		}
	});	
}
function dependencia_estado()
{
	var code = $("#pais").val();
	$.get("scripts/dependencia-estado.php", { code: code },
		function(resultado)
		{
			if(resultado == false)
			{
				alert("Error el país no tiene ciudades registradas");
			}
			else
			{
				$("#estado").attr("disabled",false);
				document.getElementById("estado").options.length=1;
				$('#estado').append(resultado);			
			}
		}

	);
}

/*function dependencia_ciudad()
 {
	var code = $("#estado").val();
	$.get("scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#ciudad").attr("disabled",false);
			document.getElementById("ciudad").options.length=1;
			$('#ciudad').append(resultado);			
		}
	});	
	
}
*/

</script>
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
  #p{position:absolute; left:821px; top:32px; width:168px; height:76px; cursor:pointer}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}

 #p1{position:absolute; left:597px; top:33px; width:179px; height:76px; cursor:pointer}
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
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(editar2_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(editar2_02.png); position:absolute; left:0px; top:32px; width:42px; height:126px;" title="">
	</div>
	<div style="background-image:url(editar2_03.png); position:absolute; left:42px; top:32px; width:310px; height:76px;" title="">
	</div>
	<div style="background-image:url(editar2_04.png); position:absolute; left:352px; top:32px; width:469px; height:1px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(editar2_05.png); " title="">
	</div>
	<div style="background-image:url(editar2_06.png); position:absolute; left:989px; top:32px; width:35px; height:126px;" title="">
	</div>
	<div style="background-image:url(editar2_07.png); position:absolute; left:352px; top:33px; width:245px; height:125px;" title="">
	</div>
	<div id="p1" onClick="location.href='../DetalleProyecto/detalleProyecto.php';" style="background-image:url(editar2_08.png); " title="">
	</div>
	<div style="background-image:url(editar2_09.png); position:absolute; left:776px; top:33px; width:45px; height:125px;" title="">
	</div>
	<div style="background-image:url(editar2_10.png); position:absolute; left:42px; top:108px; width:310px; height:50px;" title="">
	</div>
	<div style="background-image:url(editar2_11.png); position:absolute; left:821px; top:108px; width:168px; height:50px;" title="">
	</div>
	<div style="background-image:url(editar2_12.png); position:absolute; left:597px; top:109px; width:179px; height:49px;" title="">
	</div>
	<div style="background-image:url(editar2_13.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(editar2_14.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<br>
	<br>
	<center>
	<form id="form1" name="form1" method="post" action="editar2DetalleProyecto.php">
  <table class="tabla">
  <tr>
  	<td style="color: white; font-family:sans-serif;font-size:20;" >Proyecto:</td>
	<td>
	<label for="pais"></label>
        <select id="pais" name="pais">
            <option value="0">Selecciona Uno...</option>
        </select>
   </td>
  </tr>
  <tr>
    <td style="color: white; font-family:sans-serif;font-size:20;" >Etapa:</td>
    <td>
    <label for="ETA"></label> 
    <!--<input type="text" name="ETA" id="ETA" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/>-->
        <select id="estado" name="estado">
            <option value="0">Selecciona Uno...</option>
        </select>
    </td>
  </tr>
  <tr>
  	<td style="color: white; font-family:sans-serif;font-size:20;" >Segmento</td>
    <td>
	    <label for="SEG"></label>
	    
	    <select name='SEG' id='SEG'>
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
    <td style="color: white; font-family:sans-serif;font-size:20;" >Tipo Participaci&#243;n </td>
    <td>
	    <label for="PP"></label>
	    
	    <select name='PP' id='PP'>
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
		<?php 
			include "../../php/conexion.php";
				
				



		     if(isset($_POST['pais'])){
				 $CIU_ID= $_POST['pais'];
				$ETA= $_POST['estado'];
				$SEG= $_POST['SEG'];
				$PP= $_POST['PP'];
				 
				if($_POST["pais"]!=""){
				  $query = "UPDATE tb_detalle_proyecto SET DET_SEG_ID = '$SEG', DET_PAR_ID='$PP'  WHERE DET_ETAPA = '$ETA' AND DET_PRO_ID = '$CIU_ID'";
				  $result = $mysqli->query($query);
					   if($result==false){
							print "<script>alert(\"ERROR\");window.location='editar2DetalleProyecto.php';</script>";
							}
						else{
							print "<script>alert(\"Se ha Actualizado correctamente\");window.location='../DetalleProyecto/detalleProyecto.php';</script>";
							}
						}
		     		}

	    	$mysqli->close();
		?>
  <tr>
    <td>&nbsp;</td>
    <td align="right">
    <input id="ok"type="image" src='editar2_18.png' name="enviar" id="enviar" value="enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
    </td>
  </tr>
</table>
</form>
</center>


	</div>
	<div style="background-image:url(editar2_15.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(editar2_16.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(editar2_17.png); position:absolute; left:36px; top:671px; width:14px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(editar2_18.png); position:absolute; left:50px; top:671px; width:208px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(editar2_19.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(editar2_20.png); position:absolute; left:50px; top:747px; width:208px; height:21px;" title="">
	</div>
</div>
</body>
</html>