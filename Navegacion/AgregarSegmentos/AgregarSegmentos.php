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
<script>
function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[A-Za-z]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
</script>
<link rel="shortcut icon" href="favicon.png">
<link href="StyleSheet.css" rel="stylesheet" />
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
  #p{ position:absolute; left:821px; top:32px; width:167px; height:76px; cursor: pointer}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:599px; top:32px; width:179px; height:76px; cursor: pointer}
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
	<div id="p1" onClick="location.href='../Segmentos/segmentos.php';" style="background-image:url(agregar_03.png); " title="">
	</div>
	<div style="background-image:url(agregar_04.png); position:absolute; left:778px; top:32px; width:43px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(agregar_05.png);" title="">
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
	<br>
	<form id="form1" name="form1" method="post" action="AgregarSegmentos.php">
	  <table class="tabla">
	  <tr>
	  	<td style="color: white; font-family:sans-serif;font-size:20;">C&#243;digo Segmento:</td>
	    <td><label for="CIUD_ID"></label>
	    <input type="text" name="CIUD_ID" id="CIUD_ID" maxlength="3" onKeyUp="javascript:this.value=this.value.toUpperCase();" onKeyPress="return val(event)"  required/></td>
	  </tr>
	  <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;" >Descripci&#243;n Segmento:</td>
	    <td><label for="SEG_DESCRIPCION"></label>
	    <input type="text" name="SEG_DESCRIPCION" id="SEG_DESCRIPCION" maxlength="40" onKeyUp="javascript:this.value=this.value.toUpperCase();"  required/></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td align="right">

	    <input id="ok" type="image" src='agregar_14.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
	    </td>
	  </tr>
	</table>
	</form>
		<?php
			include "../../php/conexion.php";
				function quitar_tildes($cadena) {
					$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
					$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
					$texto = str_replace($no_permitidas, $permitidas ,$cadena);
					return $texto;
				}
				

		    if(isset($_POST['CIUD_ID'])&& isset($_POST["SEG_DESCRIPCION"])){
				
				$CIUD_ID= $_POST['CIUD_ID'];
				$CIUD_ID2 = quitar_tildes($CIUD_ID);//quita tildes
				$CIUD_ID3 = strtoupper($CIUD_ID2);

				$SEG_DESCR= $_POST['SEG_DESCRIPCION'];
				$SEG_DESCR2 = quitar_tildes($SEG_DESCR);//quita tildes
				$SEG_DESCR3 = strtoupper($SEG_DESCR2);
				
					if($_POST["CIUD_ID"]!=""&& $_POST["SEG_DESCRIPCION"]!=""){
						
					  $query = "INSERT INTO tb_segmento (SEG_ID, SEG_DESCRIPCION) VALUES ('$CIUD_ID3', '$SEG_DESCR3')";
		      $result = $mysqli->query($query);
		          		if($result==false){
							print "<script>alert(\"los datos estan duplicados\");window.location='AgregarSegmentos.php';</script>";
							}
							else{
							print "<script>alert(\"los datos se enviaron correctamente\");window.location='../Segmentos/segmentos.php';</script>";
							}

		   }

			}
			$mysqli->close();

		?>
	  </center>
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
