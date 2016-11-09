<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: agregarServidores.php

==> DESCRIPCION: Pantalla que permite agregar nuevos servidores a la parametrización de la informacion. La informacion se guarda en la base de datos

==> FECHA: Noviembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->

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
</head>
<link rel="shortcut icon" href="favicon.png">

<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 #p{position:absolute; left:821px; top:32px; width:168px; height:76px;cursor:pointer}
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
<body>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(Untitled-14_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_02.png); position:absolute; left:0px; top:32px; width:40px; height:126px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_03.png); position:absolute; left:40px; top:32px; width:391px; height:83px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_04.png); position:absolute; left:431px; top:32px; width:390px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(Untitled-14_05.png); " title="">
	</div>
	<div id="p1" onClick="location.href='../Servidores/ABT-T049-servidores-D.php';" style="background-image:url(editar2_08.png); " title="">
	</div>
	<div style="background-image:url(Untitled-14_06.png); position:absolute; left:989px; top:32px; width:35px; height:126px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_07.png); position:absolute; left:821px; top:108px; width:168px; height:50px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_08.png); position:absolute; left:40px; top:115px; width:391px; height:43px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_09.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_10.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<br>
	<br>
	<center>
		<form id="form1" name="form1" method="post" >
	  <table class="tabla">
	  <tr>
	  	<td style="color: white; font-family:sans-serif;font-size:20;"> Pa&#237;s Servidor </td>
				    <td><label for="PAI_SERV" required></label>
				    <select name='PAI_SERV' id='PAI_SERV' required>
						<?php
		                include "../../php/ABT-T000-conexion-U.php";
		                $qr ="SELECT * FROM tb_pais"; 
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
				  </tr><td>
	  </tr>
	  <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;">Ruta Servidor:</td>
	    <td><label for="SERV_DESCRIPCION"></label> <input type="text" name="SERV_DESCRIPCION" id="SERV_DESCRIPCION" maxlength="30" onKeyUp="javascript:this.value=this.value.toUpperCase();" required/></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td align="right">

	    <input id="ok" type="image" src='Untitled-14_14.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
	    </td>
	  </tr>
	</table>
	</form>
	</center>

		<?php 
			include "../../php/ABT-T000-conexion-U.php";			
				function quitar_tildes($cadena) {
					$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
					$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
					$texto = str_replace($no_permitidas, $permitidas ,$cadena);
					return $texto;
				}
				
						    
		    //Comprovamos si se han recivido datos del formulario
		    //Como vemos se lo utilizando el campo nombre
			
		    if(isset($_POST['PAI_SERV'])&&isset($_POST['SERV_DESCRIPCION'])){
				$SERV_DESCRIPCION= $_POST['SERV_DESCRIPCION'];
				$SERV_DESCRIPCION2 = quitar_tildes($SERV_DESCRIPCION);//quita tildes
				$SERV_DESCRIPCION3 = strtoupper($SERV_DESCRIPCION2);
				
				$PAI_SERV= $_POST['PAI_SERV'];
			
				if($_POST["PAI_SERV"]!=""&& $_POST["SERV_DESCRIPCION"]!=""){
					$query = "insert into tb_servidor (SER_PAI_CODIGO, SER_RUTA) values ('$PAI_SERV', '$SERV_DESCRIPCION3')";
					$result = $mysqli->query($query);
					if($result==false){
						print "<script>alert(\"Registro duplicado\");window.location='ABT-T005-agregarServidores-U.php';</script>";
							}
						else{
							print "<script>alert(\"los datos se enviaron correctamente\");window.location='../Servidores/ABT-T049-servidores-D.php';</script>";
							}
						}
					}

	    	$mysqli->close();
		?>

	</div>
	<div style="background-image:url(Untitled-14_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_12.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_13.png); position:absolute; left:36px; top:671px; width:14px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(Untitled-14_14.png); position:absolute; left:50px; top:671px; width:208px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(Untitled-14_15.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(Untitled-14_16.png); position:absolute; left:50px; top:747px; width:208px; height:21px;" title="">
	</div>
</div>
</body>
</html>