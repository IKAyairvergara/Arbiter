<html>
<head>
<title>Eliminar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }

 #p{position:absolute; left:821px; top:32px; width:167px; height:76px;}
 #p1{position:absolute; left:595px; top:32px; width:179px; height:76px;}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(eliminar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(eliminar_02.png); position:absolute; left:0px; top:32px; width:41px; height:126px;" title="">
	</div>
	<div style="background-image:url(eliminar_03.png); position:absolute; left:41px; top:32px; width:378px; height:76px;" title="">
	</div>
	<div style="background-image:url(eliminar_04.png); position:absolute; left:419px; top:32px; width:176px; height:126px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Segmentos/segmentos.php';" style="background-image:url(eliminar_05.png); " title="">
	</div>
	<div style="background-image:url(eliminar_06.png); position:absolute; left:774px; top:32px; width:47px; height:126px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(eliminar_07.png); " title="">
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
	<form method = "post" action = "EliminarSegmentos.php">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">Código de Segmento:</td>
    					<td><label for="IND_ID"></label> 
    					<input type="text" name="IND_ID" id="IND_ID" placeholder="CO" required style="width: 60px; height: 30px; font-size: 15pt" /></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input type="image" src='eliminar_17.png' name="delete" id="delete" value="delete" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
                        </td>
                     </tr>
                     
                  </table>
               </form>

      
	<?php 
		$mysqli = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model");
			
			$CIU_ID= $_POST['IND_ID'];

	    if(isset($_POST['IND_ID'])){

	      $query = "DELETE FROM TB_SEGMENTO WHERE SEG_ID= '$CIU_ID'";
	      $mysqli->query($query);

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