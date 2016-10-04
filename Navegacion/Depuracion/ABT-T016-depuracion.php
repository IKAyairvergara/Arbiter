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
<title>Depuracion</title>
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
 #p{position:absolute; left:640px; top:31px; width:162px; height:76px;cursor: pointer;}
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:821px; top:31px; width:167px; height:76px;cursor: pointer;}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}


#p2{position:absolute; left:195px; top:229px; width:313px; height:122px;cursor: pointer;}
#p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p3{position:absolute; left:195px; top:394px; width:499px; height:122px;cursor: pointer;}
#p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(depuracion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:31px;" title="">
	</div>
	<div style="background-image:url(depuracion_02.png); position:absolute; left:0px; top:31px; width:640px; height:198px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';"  style="background-image:url(depuracion_03.png); " title="">
	</div>
	<div style="background-image:url(depuracion_04.png); position:absolute; left:802px; top:31px; width:19px; height:737px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';"  style="background-image:url(depuracion_05.png); " title="">
	</div>
	<div style="background-image:url(depuracion_06.png); position:absolute; left:988px; top:31px; width:36px; height:737px;" title="">
	</div>
	<div style="background-image:url(depuracion_07.png); position:absolute; left:640px; top:107px; width:162px; height:287px;" title="">
	</div>
	<div style="background-image:url(depuracion_08.png); position:absolute; left:821px; top:107px; width:167px; height:661px;" title="">
	</div>
	<div style="background-image:url(depuracion_09.png); position:absolute; left:0px; top:229px; width:195px; height:539px;" title="">
	</div>
	<div id="p2" onClick="location.href='../DepuracionProyectos/ABT-T018-depuracionProyectos-U.php';" style="background-image:url(depuracion_10.png);" title="">
	</div>
	<div style="background-image:url(depuracion_11.png); position:absolute; left:508px; top:229px; width:132px; height:165px;" title="">
	</div>
	<div style="background-image:url(depuracion_12.png); position:absolute; left:195px; top:351px; width:313px; height:43px;" title="">
	</div>
	<div id="p3" onClick="location.href='../DepuracionConsolidados/ABT-T017-depuracionConsolidados-U.php';" style="background-image:url(depuracion_13.png);" title="">
	</div>
	<div style="background-image:url(depuracion_14.png); position:absolute; left:694px; top:394px; width:108px; height:374px;" title="">
	</div>
	<div style="background-image:url(depuracion_15.png); position:absolute; left:195px; top:516px; width:499px; height:252px;" title="">
	</div>
</div>
</body>
</html>