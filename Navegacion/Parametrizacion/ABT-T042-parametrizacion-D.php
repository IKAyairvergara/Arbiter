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
<title>Parametrizacion</title>
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

 #p{position:absolute; left:817px; top:36px; width:168px; height:76px;cursor: pointer;}
 #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:606px; top:37px; width:179px; height:76px;cursor: pointer;}
 #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{position:absolute; left:87px; top:165px; width:136px; height:192px;cursor: pointer;}
 #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{position:absolute; left:321px; top:164px; width:136px; height:193px;cursor: pointer;}
 #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p4{ position:absolute; left:540px; top:164px; width:166px; height:199px;cursor: pointer;}
 #p4:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p5{position:absolute; left:766px; top:164px; width:182px; height:239px;cursor: pointer;}
 #p5:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p6{position:absolute; left:84px; top:451px; width:142px; height:198px;cursor: pointer;}
 #p6:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p7{position:absolute; left:321px; top:450px; width:136px; height:239px;cursor: pointer;}
 #p7:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p8{position:absolute; left:541px; top:450px; width:164px; height:192px;cursor: pointer;}
 #p8:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p9 {position:absolute; left:781px; top:450px; width:153px; height:192px; cursor:pointer;}
 #p9:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}


</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(parametrizacion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:36px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_02.png); position:absolute; left:0px; top:36px; width:817px; height:1px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(parametrizacion_03.png);" title="">
	</div>
	<div style="background-image:url(parametrizacion_04.png); position:absolute; left:985px; top:36px; width:39px; height:732px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_05.png); position:absolute; left:0px; top:37px; width:606px; height:127px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(parametrizacion_06.png);" title="">
	</div>
	<div style="background-image:url(parametrizacion_07.png); position:absolute; left:785px; top:37px; width:32px; height:127px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_08.png); position:absolute; left:817px; top:112px; width:168px; height:52px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_09.png); position:absolute; left:606px; top:113px; width:179px; height:51px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_10.png); position:absolute; left:0px; top:164px; width:321px; height:1px;" title="">
	</div>
	<div id="p3" onclick="location.href='../Ciudades/ABT-T014-ciudades-D.php';"  style="background-image:url(parametrizacion_11.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_12.png); position:absolute; left:457px; top:164px; width:83px; height:604px;" title="">
	</div>
	<div id="p4" onclick="location.href='../Segmentos/ABT-T045-segmentos-D.php';" style="background-image:url(parametrizacion_13.png);" title="">
	</div>
	<div style="background-image:url(parametrizacion_14.png); position:absolute; left:706px; top:164px; width:60px; height:604px;" title="">
	</div>
	<div id="p5" onclick="location.href='../Participacion/ABT-T043-participacion-D.php';" style="background-image:url(parametrizacion_15.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_16.png); position:absolute; left:948px; top:164px; width:37px; height:604px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_17.png); position:absolute; left:0px; top:165px; width:87px; height:286px;" title="">
	</div>
	<div id="p2" onclick="location.href='../Paises/ABT-T041-paises-D.php';" style="background-image:url(parametrizacion_18.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_19.png); position:absolute; left:223px; top:165px; width:98px; height:286px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_20.png); position:absolute; left:87px; top:357px; width:136px; height:94px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_21.png); position:absolute; left:321px; top:357px; width:136px; height:93px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_22.png); position:absolute; left:540px; top:363px; width:166px; height:87px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_23.png); position:absolute; left:766px; top:403px; width:182px; height:47px;" title="">
	</div>
	<div id="p7" onclick="location.href='../DetalleProyecto/ABT-T019-detalleProyecto-D.php';" style="background-image:url(parametrizacion_24.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_25.png); position:absolute; left:540px; top:450px; width:1px; height:318px;" title="">
	</div>
	<div id="p8" onclick="location.href='../Indicadores/ABT-T038-indicadores-D.php';"  style="background-image:url(parametrizacion_26.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_27.png); position:absolute; left:705px; top:450px; width:1px; height:318px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_28.png); position:absolute; left:766px; top:450px; width:15px; height:318px;" title="">
	</div>
	<div id="p9" onclick="location.href='../Servidores/ABT-T049-servidores-D.php';" style="background-image:url(parametrizacion_29.png);">
	</div>
	<div style="background-image:url(parametrizacion_30.png); position:absolute; left:934px; top:450px; width:14px; height:318px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_31.png); position:absolute; left:0px; top:451px; width:84px; height:317px;" title="">
	</div>
	<div id="p6" onclick="location.href='../Proyectos/ABT-T044-proyectos-D.php';" style="background-image:url(parametrizacion_32.png); " title="">
	</div>
	<div style="background-image:url(parametrizacion_33.png); position:absolute; left:226px; top:451px; width:95px; height:317px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_34.png); position:absolute; left:541px; top:642px; width:164px; height:126px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_35.png); position:absolute; left:781px; top:642px; width:153px; height:126px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_36.png); position:absolute; left:84px; top:649px; width:142px; height:119px;" title="">
	</div>
	<div style="background-image:url(parametrizacion_37.png); position:absolute; left:321px; top:689px; width:136px; height:79px;" title="">
	</div>
</div>
</body>
</html>