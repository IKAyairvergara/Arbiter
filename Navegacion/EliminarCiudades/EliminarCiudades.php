<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: eliminarCiudades.php

==> DESCRIPCION: Pantalla que permite eliminar ciudades parametrizadas en el sistema.

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
<title>Eliminar Ciudades </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="favicon.png">
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

 #p{position:absolute; left:821px; top:32px; width:167px; height:76px;cursor: pointer;}
 #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:595px; top:32px; width:179px; height:76px;cursor: pointer;}
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
 #p2{}
 #p3{}
 #p4{}
 #p5{}
 #p6{}
 #p7{}

</style>


</head>
<body>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(eliminar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(eliminar_02.png); position:absolute; left:0px; top:32px; width:41px; height:126px;" title="">
	</div>
	<div style="background-image:url(eliminar_03.png); position:absolute; left:41px; top:32px; width:378px; height:76px;" title="">
	</div>
	<div style="background-image:url(eliminar_04.png); position:absolute; left:419px; top:32px; width:176px; height:126px;" title="">
	</div>
	<div id="p1" onClick="location.href='../Ciudades/ciudades.php';" style="background-image:url(eliminar_05.png); " title="">
	</div>
	<div style="background-image:url(eliminar_06.png); position:absolute; left:774px; top:32px; width:47px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(eliminar_07.png); " title="">
	</div>
	<div style="background-image:url(eliminar_08.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(eliminar_09.png); position:absolute; left:41px; top:108px; width:378px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_10.png); position:absolute; left:595px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_11.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(eliminar_12.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(eliminar_13.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	 <form method = "post" action = "eliminarCiudades.php">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2"> 
                     <tr>
                       <td style="color: white; font-family:sans-serif;font-size:20;"> Pa&#237;s</td>
						<td>
						<label for="pais"></label>
					        <select id="pais" name="pais">
					            <option value="0">Selecciona Uno...</option>
					        </select>
					   </td>
					   </tr>

					 <tr>
						<td style="color: white; font-family:sans-serif;font-size:20;"> Ciudad:</td>
					    <td>
					    <label for="ETA"></label> 
					    <!--<input type="text" name="ETA" id="ETA" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/>-->
					        <select id="estado" name="estado">
					            <option value="0">Selecciona Uno...</option>
					        </select>
					    </td>
         
                        </td>
                     </tr>
                       <tr>
                        <td width = "100"> </td>
                        <td>
                           
						  <input id="ok" type="image" src='eliminar_17.png' name="delete" id="delete" value="delete" style="position:absolute; left:14px; top:510px; width:208px; height:76px;" />
                         
                        </td>
                     </tr>
                   </table>
              </center>
                   
			<?php 
			#Incluir conexion 
			include "../../php/conexion.php";
			#verificar datos
			if(isset($_POST['pais'])){
			$PAIS=$_POST['pais'];}
	
	
	
			if(isset($_POST['estado'])){
			$CIUDAD=$_POST['estado'];}
	
					

			     if(isset($_POST['pais'])){
					if($_POST["pais"]!=""){
						#enviar consulta a la base de datos
					  $query = "DELETE FROM tb_ciudad WHERE CIU_DESCRIPCION = '$CIUDAD' AND CIU_PAI_ID= '$PAIS' ";
					  $result = $mysqli->query($query);
						   if($result==false){
								#print "<script>alert(\"El registro no puede ser eliminado ya que contiene dependencias\");window.location='eliminarCiudades.php';</script>";
								echo('There was an error running the query [' . $mysqli->error . '].</br>');
								}
							else{
								print "<script>alert(\"Se ha Eliminado correctamente\");window.location='../Ciudades/ciudades.php';</script>";
								}
							}
			     		}

		    	$mysqli->close();
			?>
	</div>
	<div style="background-image:url(eliminar_14.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(eliminar_15.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(eliminar_16.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(eliminar_17.png); position:absolute; left:49px; top:671px; width:209px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(eliminar_18.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(eliminar_19.png); position:absolute; left:49px; top:747px; width:209px; height:21px;" title="">
	</div>
</div>
</body>
</html>