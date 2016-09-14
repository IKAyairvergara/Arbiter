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

<link href="StyleSheet.css" rel="stylesheet" />
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
  #p{position:absolute; left:821px; top:32px; width:168px; height:76px; cursor: pointer}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
} 
#p1{position:absolute; left:597px; top:33px; width:179px; height:76px; cursor: pointer}
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
	<div id="p1" onClick="location.href='../Segmentos/segmentos.php';" style="background-image:url(editar2_08.png); " title="">
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
	<CENTER>
	<form id="form1" name="form1" method="post" action="Editar2Segmentos.php">
 <table class="tabla">
  <tr>
  	<td style="color: white; font-family:sans-serif;font-size:20;">C&#243;digo Segmento </td>
    <td><label for="SEG_ID" required></label>
    <input type="text" name="SEG_ID" id="SEG_ID" maxlength="3" onKeyUp="javascript:this.value=this.value.toUpperCase();"  required/></td>
  </tr>
  <tr>
    <td style="color: white; font-family:sans-serif;font-size:20;" >Descripci&#243;n Segmento   </td>
    <td><label for="SEG_DESCRIPCION" required></label>
    <input type="text" name="SEG_DESCRIPCION" id="SEG_DESCRIPCION" maxlength="40" onKeyUp="javascript:this.value=this.value.toUpperCase();"  required/></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td align="right">
     <input id="ok" type="image" src='editar2_18.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
    </td>
  </tr>
</table>
</form>
</CENTER>
	<?php
	include "../../php/conexion.php";
	

	//$update = "UPDATE tb_ciudad SET CIU_DESCRIPCION = '$SEG_DESCRIPCION', CIU_PAI_ID = '$CIUD_PAISES' WHERE CIU_ID = '$CIU_ID'";
	if(isset($_POST['SEG_ID'])){
		
		$SEG_ID= $_POST['SEG_ID'];
		$SEG_DESCRIPCION=$_POST['SEG_DESCRIPCION'];   
	
		$update = "update tb_segmento set SEG_DESCRIPCION ='$SEG_DESCRIPCION' where SEG_ID='$SEG_ID'";
		$resultado = $mysqli -> query($update);
		if($result==true){
			print "<script>alert(\"no se a podido realizar el cambio\");window.location='Editar2Segmentos.php';</script>";
			}
		else{
			print "<script>alert(\"\Cambio realizado con exito\");window.location='../Segmentos/segmentos.php';</script>";
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
