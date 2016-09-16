<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: editarProyectos.php

==> DESCRIPCION: Pantalla que permite editar los proyectos parametrizados en el sistema.

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->

<?php 
    //Se crea la sesion  
    session_start(); 
    //Se valida si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion regresará a login.php
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
	<div id="p1" onClick="location.href='../Proyectos/proyectos.php';" style="background-image:url(editar2_08.png); " title="">
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
<form id="form1" name="form1" method="post" action="editarProyectos.php">
 <table class="tabla">
  <tr>
  	<td style="color: white; font-family:sans-serif;font-size:20;" >C&#243;digo Proyecto :</td>
    <td><label for="PRO_ID"></label> 
	 <select name='PRO_ID' id='PRO_ID' required>
		<?php
		# Incluir Conexion 
		include "../../php/conexion.php";
		# Consulta a la base de datos
		$qr ="SELECT * FROM tb_proyecto";
		# Mostrar resultados en combo Box
		if ($resultado = $mysqli->query($qr)) {
		 while ($fila = $resultado->fetch_row()) {

			        echo "<option value='" .$fila[0]."''>";
				    echo $fila[1];
				    echo "</option>";
			    }
			}
			$pro_id=$POST_['PRO_ID'];
	$mysqli->close();
		?>
		</select>
    </td>
  </tr>
     <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;">Descripci&#243;n Proyecto:</td>
	    <td><label for="PRO_DESCRIPCION"></label> <input type="text" name="PRO_DESCRIPCION" id="PRO_DESCRIPCION" maxlength="40" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/></td>
	 
	 </tr>
			<tr>
  			  	<td style="color: white; font-family:sans-serif;font-size:20;" >Codigo Pais Proyecto:</td>
					<td>
						<label for="pais"></label>
					        <select id="pais" name="pais">
					            <option value="0">Selecciona Uno...</option>
					        </select>
					</td>
			</tr>
			<tr>
			    <td style="color: white; font-family:sans-serif;font-size:20;" >Codigo Ciudad Proyecto:</td>
				    <td>
				   	    <label for="ETA"></label> 
					    <!--<input type="text" name="ETA" id="ETA" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/>-->
					    <select id="estado" name="estado">
				            <option value="0">Selecciona Uno...</option>
				        </select>
				    </td>
			</tr>    
   <tr>
    <td>&nbsp;</td>
    <td align="right">
    <input id="ok" type="image" src='editar2_18.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
    </td>
  </tr>
</table>
</form>
</center>

 <?php
 				#Incluir conexion 
			   	include "../../php/conexion.php";
			   	# Funcion para quitar tildes			
				function quitar_tildes($cadena) {
					$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
					$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
					$texto = str_replace($no_permitidas, $permitidas ,$cadena);
					return $texto;
				}
				
				
				if(isset($_POST['PRO_ID'])){
					
					$PRO_DESCRIPCION= $_POST['PRO_DESCRIPCION'];
				$PRO_DESCRIPCION2 = quitar_tildes($PRO_DESCRIPCION);//quita tildes
				$PRO_DESCRIPCION3 = strtoupper($PRO_DESCRIPCION2);
				
				$PRO_ID= $_POST['PRO_ID'];
				$PR_PA_ID=$_POST['pais'];  
				$PR_CI_ID=$_POST['estado'];
				
						# Actualizacion en la bd
						if($_POST["PRO_ID"]!=""){
								$update = "UPDATE tb_proyecto SET PRO_DESCRIPCION = '$PRO_DESCRIPCION3', PRO_PAI_ID = '$PR_PA_ID', PRO_CIU_ID = '$PR_CI_ID' WHERE PRO_ID = '$PRO_ID'";	
									$result = $mysqli -> query($update);
									if($result==true){
										print "<script>alert(\"Cambio Realizado Exitosamente\");window.location='../Proyectos/proyectos.php';</script>";
										}
									else{
										print "<script>alert(\"La ciudad y el país deben coincidir con los registrados inicialmente\");window.location='editarProyectos.php';</script>";
										}
									
						}
					}
						#cerrar conexion 
						$mysqli->close();
				?>

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