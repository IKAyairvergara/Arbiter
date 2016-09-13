<html>
<head>
<title>Editar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
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
	<div id="p1" onClick="location.href='../Indicadores/indicadores.php';" style="background-image:url(editar2_08.png); " title="">
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
    
    	

	<form id="form1" name="form1" method="post" action="Editar2Indicadores.php">
  <table class="tabla">
  <tr>
  	<td style="color: white; font-family:sans-serif;font-size:20;">Indicador a Modificar </td>
    <td><label for="CIUD_ID"></label> <input type="text" name="IND_ID" id="IND_ID" maxlength="4" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/ ></td>
  </tr>
   <tr>
    <td style="color: white; font-family:sans-serif;font-size:20;">Indicador Fecha</td>
    <td><label for="IND_FECHA"></label> <input type="date" name="IND_FECHA" id="IND_FECHA" required /></td>
  </tr>
  <tr>
    <td style="color: white; font-family:sans-serif;font-size:20;">Indicador Descripci&#243;n</td>
    <td><label for="CIUD_DESCRIPCION"></label> <input type="text" name="IND_DESCRIPCION" id="IND_DESCRIPCION" maxlength="30" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/></td>
  </tr>

     <tr>
    <td style="color: white; font-family:sans-serif;font-size:20;">Indicador Valor</td>
    <td><label for="IND_VALOR"></label> <input type='number' step=0.01 name="IND_VALOR" id="IND_VALOR" required /></td>
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
		include "../../php/conexion.php";
		
		function quitar_tildes($cadena) {
					$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
					$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
					$texto = str_replace($no_permitidas, $permitidas ,$cadena);
					return $texto;
				}

		$IND_ID= $_POST['IND_ID'];
		$IND_FECHA=$_POST['IND_FECHA'];
		$IND_DESCRIPCION=$_POST['IND_DESCRIPCION'];
		$IND_DESCRIPCION1 = quitar_tildes($IND_DESCRIPCION);
		$IND_DESCRIPCION2 = strtoupper($IND_DESCRIPCION1);


		$IND_VALOR=$_POST['IND_VALOR'];
		

		if(isset($_POST['IND_ID'])&& isset($_POST["IND_FECHA"])){
			if($_POST["IND_ID"]!="" && $_POST["IND_FECHA"]!=""){
				$update = "UPDATE tb_indicador SET IND_FECHA='$IND_FECHA', IND_DESCRIPCION='$IND_DESCRIPCION2', IND_VALOR='$IND_VALOR' WHERE IND_ID='$IND_ID' and IND_FECHA='$IND_FECHA'";
				$resultado = $mysqli -> query($update);
				if($resultado==false){
					print "<script>alert(\"El registro no puede ser editado\");window.location='Editar2Indicadores.php';</script>";
					}
				else{
					print "<script>alert(\"El registro se ha editado correctamente\");window.location='../Indicadores/indicadores.php';</script>";
					}
				}
			}
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
