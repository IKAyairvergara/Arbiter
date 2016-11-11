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
<!-- saved from url=(0105)file:///C:/Users/MainNode/AppData/Local/Temp/Save%20For%20Web%20AI/importExport_003.tmp/importExport.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ciudades</title>

</head>
<link rel="shortcut icon" href="favicon.png">

	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }
	  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
	 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:769px;">
	<div style="background-image:url(importExport_01.png); position:absolute; left:0px; top:0px; width:1024px; height:41px;" title="">
	</div>
	<div style="background-image:url(importExport_02.png); position:absolute; left:0px; top:41px; width:639px; height:242px;" title="">
	</div>
	<div id="p" onclick="location.href='../ParametrizacionManAut/ABT-T051-ParametrizacionManAut-D.php';" style="background-image:url(importExport_03.png); position:absolute; left:639px; top:41px; width:162px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_04.png); position:absolute; left:801px; top:41px; width:32px; height:242px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(importExport_05.png); position:absolute; left:833px; top:41px; width:154px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_06.png); position:absolute; left:987px; top:41px; width:37px; height:727px;" title="">
	</div>
	<div style="background-image:url(importExport_07.png); position:absolute; left:639px; top:117px; width:162px; height:166px;" title="">
	</div>
	<div style="background-image:url(importExport_08.png); position:absolute; left:833px; top:117px; width:154px; height:651px;" title="">
	</div>
	<div style="background-image:url(importExport_09.png); position:absolute; left:0px; top:283px; width:198px; height:485px;" title="">
	</div>
	<div id="p" onclick="location.href='../ParametrizacionImport/ABT-T052-parametrizacionImport-D.php';"  style="background-image:url(importExport_10.png); position:absolute; left:198px; top:283px; width:216px; height:273px;" title="">
	</div>
	<div  style="background-image:url(importExport_11.png); position:absolute; left:414px; top:283px; width:198px; height:485px;" title="">
	</div>
	<div id="p" onclick="location.href='../ParametrizacionExport/ABT-T053-parametrizacionExport-D.php';"   style="background-image:url(importExport_12.png); position:absolute; left:612px; top:283px; width:216px; height:273px;" title="">
	</div>
	<div style="background-image:url(importExport_13.png); position:absolute; left:828px; top:283px; width:5px; height:485px;" title="">
	</div>
	<div style="background-image:url(importExport_14.png); position:absolute; left:198px; top:556px; width:216px; height:212px;" title="">
	</div>
	<div style="background-image:url(importExport_15.png); position:absolute; left:612px; top:556px; width:216px; height:212px;" title="">
	</div>
</div>
</body></html>