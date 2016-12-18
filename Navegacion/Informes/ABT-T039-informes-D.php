	<?php
	//Verificacion 

	if(isset($_POST['INF_ID'])){
	$envio=$_POST['INF_ID'];}
	if(isset($_POST['CONS_ID'])){
	$variable=$_POST['CONS_ID'];

	}
	else{
		$variable=" ";
	}
	if(isset($_POST['INF_ID']))
	{
		if($envio=="FlujoCajaTerreno"){
			header('Location:FlujoCajaterrenoExcel.php?dato='.$variable);
		}
		if($envio=="FlujoCaja"){
			header('Location:FlujoCajaExcel.php?dato='.$variable);
		}
		if($envio=="OtrosFlujos"){
			header('Location:OtrosFlujos.php?dato='.$variable);
		}
		if($envio=="Resumen"){
			header('Location:Resumen.php?dato='.$variable);
		}
	}
		?>
<html>
<head>
<title>Informes</title>
<meta http-equiv="Content-Type">
</head>
<link rel="shortcut icon" href="favicon.png">
<style>
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 #p{position:absolute; left:107px; top:515px; width:383px; height:111px; cursor: pointer}
 #p:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 #p1{position:absolute; left:518px; top:515px; width:373px; height:111px; cursor: pointer}
 #p1:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 #p2{position:absolute; left:270px; top:682px; width:197px; height:61px; cursor: pointer}
 #p2:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 #p3{position:absolute; left:54px; top:682px; width:184px; height:61px; cursor: pointer}
 #p3:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 #p4{position:absolute; left:622px; top:27px; width:172px; height:76px; cursor: pointer}
 #p4:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 #p5{position:absolute; left:818px; top:27px; width:168px; height:76px; cursor: pointer}
 #p5:hover
 {
 	opacity: 1.0;
 	filter: alpha(opacity=100);
 	transform: scale(1.12);
 	transition-duration: 0.4s;
 }
 input[type=submit]{
		border: 0 none;
		position:absolute;
		left:107px;
		top:515px;
		width:383px;
		height:111px;
		background-image: url(informes_15.png);
		opacity: 1.0 ;
		cursor:pointer;
	}

	input[type=submit]:hover
	{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		color: transparent;
		cursor:pointer;
	}
 </style>
<div style="position:absolute; left:10%; top:0px; width:1025px; height:769px;">
	<div style="background-image:url(informes_01.png); position:absolute; left:0px; top:0px; width:1025px; height:27px;" title="">
	</div>
	<div style="background-image:url(informes_02.png); position:absolute; left:0px; top:27px; width:622px; height:208px;" title="">
	</div>
	<div id="p4" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(informes_03.png);" title="">
	</div>
	<div style="background-image:url(informes_04.png); position:absolute; left:794px; top:27px; width:24px; height:208px;" title="">
	</div>
	<div id="p5" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(informes_05.png);" title="">
	</div>
	<div style="background-image:url(informes_06.png); position:absolute; left:986px; top:27px; width:39px; height:742px;" title="">
	</div>
	<div style="background-image:url(informes_07.png); position:absolute; left:622px; top:103px; width:172px; height:132px;" title="">
	</div>
	<div style="background-image:url(informes_08.png); position:absolute; left:818px; top:103px; width:168px; height:132px;" title="">
	</div>
	<div style="background-image:url(informes_09.png); position:absolute; left:0px; top:235px; width:107px; height:447px;" title="">
	</div>
	<div style="background-image:url(informes_10.png); position:absolute; left:107px; top:235px; width:784px; height:56px;" title="">
	</div>
	<div style="background-image:url(informes_11.png); position:absolute; left:891px; top:235px; width:95px; height:534px;" title="">
	</div>
	<div style="background-image:url(informes_12.png); position:absolute; left:107px; top:291px; width:784px; height:109px;" title="">
	</div>
	<div style="background-image:url(informes_13.png); position:absolute; left:107px; top:400px; width:784px; height:56px;" title="">
	</div>
	<div style="background-image:url(informes_14.png); position:absolute; left:107px; top:456px; width:784px; height:59px;" title="">
	</div>
	<div id="p" style="background-image:url(informes_15.png);" title="">
	</div>
	<div style="background-image:url(informes_16.png); position:absolute; left:490px; top:515px; width:28px; height:254px;" title="">
	</div>
	<div id="p1" style="background-image:url(informes_17.png);" title="">
	</div>
	<div style="background-image:url(informes_18.png); position:absolute; left:107px; top:626px; width:383px; height:56px;" title="">
	</div>
	<div style="background-image:url(informes_19.png); position:absolute; left:518px; top:626px; width:373px; height:143px;" title="">
	</div>
	<div style="background-image:url(informes_20.png); position:absolute; left:0px; top:682px; width:54px; height:87px;" title="">
	</div>
	
	<div style="background-image:url(informes_22.png); position:absolute; left:238px; top:682px; width:32px; height:87px;" title="">
	</div>
	
	<div style="background-image:url(informes_24.png); position:absolute; left:467px; top:682px; width:23px; height:87px;" title="">
	</div>
	<div style="background-image:url(informes_25.png); position:absolute; left:54px; top:743px; width:184px; height:26px;" title="">
	</div>
	<div style="background-image:url(informes_26.png); position:absolute; left:270px; top:743px; width:197px; height:26px;" title="">
	</div>
	

	
	<form action="" method="post" name="form1">
		<div style="background-image:url(informes_10.png); position:absolute; left:107px; top:235px; width:784px; height:56px;" title="">
         <select name="INF_ID" style="left:107px; top:235px; width:784px; height:56px; font-size:20px ; font-family: verdana">
		  <option value="">Seleccione Su Informe</option>
		  <option value="FlujoCajaTerreno">Flujo Caja Terreno</option>
		  <option value="FlujoCaja">Flujo Caja</option>
		  <option value="OtrosFlujos">Otros Flujos</option>
		  <option value="Resumen">Resumen</option>
    </select>
	</div>
	
	<div style="background-image:url(informes_13.png); position:absolute; left:107px; top:400px; width:784px; height:56px;" title="">
	<select name="CONS_ID" style="left:107px; top:400px; width:784px; height:56px; font-size:20px ; font-family: verdana">	
	<?php
		include "../../php/ABT-T000-conexion-U.php";
		$qr ="SELECT * FROM tb_consolidados";
        $i = 0;
        if ($resultado = $mysqli->query($qr)) {
        	while ($consolidados = $resultado->fetch_row()) {
            	echo "<option value='".$consolidados[0]."''>";
                echo $consolidados[1];
                echo "</option>";
                }
             }
        $mysqli->close();
        ?>
    </select>
	</div>
	
	
	<input type="submit" name="button" class="btn" value="">	
	
		</form>
</body>
</html>
