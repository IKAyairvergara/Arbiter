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
<title>Bienvenido</title>
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
#p{position:absolute; left:691px; top:29px; width:271px; height:76px;}
#p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p1{position:absolute; left:63px; top:149px; width:209px; height:244px;}
#p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p2{position:absolute; left:416px; top:147px; width:207px; height:248px;}
#p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p3{position:absolute; left:752px; top:147px; width:207px; height:254px;}
#p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p4{position:absolute; left:64px; top:437px; width:207px; height:249px;}
#p4:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p5{position:absolute; left:416px; top:435px; width:207px; height:247px;}
#p5:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#p6{ position:absolute; left:752px; top:434px; width:207px; height:248px;}
#p6:hover
{
	opacity: 1.0 ;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}



</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(bienvenido_01.png); position:absolute; left:0px; top:0px; width:1024px; height:29px;" title="">
	</div>
	<div style="background-image:url(bienvenido_02.png); position:absolute; left:0px; top:29px; width:691px; height:118px;" title="">
	</div>
	<div id="p" onclick="location.href='../../index.php';"  style="background-image:url(bienvenido_03.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_04.png); position:absolute; left:962px; top:29px; width:62px; height:739px;" title="">
	</div>
	<div style="background-image:url(bienvenido_05.png); position:absolute; left:691px; top:105px; width:271px; height:42px;" title="">
	</div>
	<div style="background-image:url(bienvenido_06.png); position:absolute; left:0px; top:147px; width:416px; height:2px;" title="">
	</div>
	<div id="p2" onclick="location.href='../Seleccion/ABT-T046-seleccion.php';" style="background-image:url(bienvenido_07.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_08.png); position:absolute; left:623px; top:147px; width:129px; height:621px;" title="">
	</div>
	<div id="p3" onclick="location.href='../Carga/ABT-T011-carga-U.php';" style="background-image:url(bienvenido_09.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_10.png); position:absolute; left:959px; top:147px; width:3px; height:621px;" title="">
	</div>
	<div style="background-image:url(bienvenido_11.png); position:absolute; left:0px; top:149px; width:63px; height:619px;" title="">
	</div>
	<div id="p1" onclick="location.href='../ParametrizacionManAut/ABT-T051-ParametrizacionManAut-D.php';" style="background-image:url(bienvenido_12.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_13.png); position:absolute; left:272px; top:149px; width:144px; height:619px;" title="">
	</div>
	<div style="background-image:url(bienvenido_14.png); position:absolute; left:63px; top:393px; width:209px; height:44px;" title="">
	</div>
	<div style="background-image:url(bienvenido_15.png); position:absolute; left:416px; top:395px; width:207px; height:40px;" title="">
	</div>
	<div style="background-image:url(bienvenido_16.png); position:absolute; left:752px; top:401px; width:207px; height:33px;" title="">
	</div>
	<div id="p6" onclick="location.href='../InformesMain/ABT-T040-informesMain.php';" style="background-image:url(bienvenido_17.png); cursor:pointer;" title="">
	</div>
	<div id="p5" onclick="location.href='../Consulta/ABT-T015-consulta-D.php';" style="background-image:url(bienvenido_18.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_19.png); position:absolute; left:63px; top:437px; width:1px; height:331px;" title="">
	</div>
	<div id="p4" onclick="location.href='../Depuracion/ABT-T016-depuracion.php';" style="background-image:url(bienvenido_20.png); cursor:pointer;" title="">
	</div>
	<div style="background-image:url(bienvenido_21.png); position:absolute; left:271px; top:437px; width:1px; height:331px;" title="">
	</div>
	<div style="background-image:url(bienvenido_22.png); position:absolute; left:416px; top:682px; width:207px; height:86px;" title="">
	</div>
	<div style="background-image:url(bienvenido_23.png); position:absolute; left:752px; top:682px; width:207px; height:86px;" title="">
	</div>
	<div style="background-image:url(bienvenido_24.png); position:absolute; left:64px; top:686px; width:207px; height:82px;" title="">
	</div>
</div>
</body>
</html>
