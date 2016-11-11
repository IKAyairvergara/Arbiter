
<!-- saved from url=(0105)file:///C:/Users/MainNode/AppData/Local/Temp/Save%20For%20Web%20AI/importExport_006.tmp/importExport.html -->
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
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Parametrizacion</title>

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
	<div style="background-image:url(importExport_01.png); position:absolute; left:0px; top:0px; width:1024px; height:37px;" title="">
	</div>
	<div style="background-image:url(importExport_02.png); position:absolute; left:0px; top:37px; width:37px; height:120px;" title="">
	</div>
	<div style="background-image:url(importExport_03.png); position:absolute; left:37px; top:37px; width:379px; height:80px;" title="">
	</div>
	<div style="background-image:url(importExport_04.png); position:absolute; left:416px; top:37px; width:608px; height:4px;" title="">
	</div>
	<div style="background-image:url(importExport_05.png); position:absolute; left:416px; top:41px; width:223px; height:116px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(importExport_06.png); position:absolute; left:639px; top:41px; width:162px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_07.png); position:absolute; left:801px; top:41px; width:32px; height:116px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(importExport_08.png); position:absolute; left:833px; top:41px; width:154px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_09.png); position:absolute; left:987px; top:41px; width:37px; height:116px;" title="">
	</div>
	<div style="background-image:url(importExport_10.png); position:absolute; left:37px; top:117px; width:379px; height:40px;" title="">
	</div>
	<div style="background-image:url(importExport_11.png); position:absolute; left:639px; top:117px; width:162px; height:40px;" title="">
	</div>
	<div style="background-image:url(importExport_12.png); position:absolute; left:833px; top:117px; width:154px; height:40px;" title="">
	</div>
	<div style="background-image:url(importExport_13.png); position:absolute; left:0px; top:157px; width:36px; height:611px;" title="">
	</div>
	<div style="background-image:url(importExport_14.png); position:absolute; left:36px; top:157px; width:952px; height:139px;" title="">
	</div>
	<div style="background-image:url(importExport_15.png); position:absolute; left:988px; top:157px; width:36px; height:611px;" title="">
	</div>
	<div style="background-image:url(importExport_16.png); position:absolute; left:36px; top:296px; width:200px; height:355px;" title="">
	</div>
	<div id="p" onclick="location.href='../Parametrizacion/ABT-T042-parametrizacion-D.php';"  style="background-image:url(importExport_17.png); position:absolute; left:236px; top:296px; width:150px; height:263px;" title="">
	</div>
	<div style="background-image:url(importExport_18.png); position:absolute; left:386px; top:296px; width:189px; height:355px;" title="">
	</div>
	<div id="p" onclick="location.href='../ParametrizacionInicial/ABT-T050-parametrizacionInicial-D.php';" style="background-image:url(importExport_19.png); position:absolute; left:575px; top:296px; width:213px; height:263px;" title="">
	</div>
	<div style="background-image:url(importExport_20.png); position:absolute; left:788px; top:296px; width:200px; height:355px;" title="">
	</div>
	<div style="background-image:url(importExport_21.png); position:absolute; left:236px; top:559px; width:150px; height:92px;" title="">
	</div>
	<div style="background-image:url(importExport_22.png); position:absolute; left:575px; top:559px; width:213px; height:92px;" title="">
	</div>
	<div style="background-image:url(importExport_23.png); position:absolute; left:36px; top:651px; width:952px; height:53px;" title="">
	</div>
	<div style="background-image:url(importExport_24.png); position:absolute; left:36px; top:704px; width:476px; height:64px;" title="">
	</div>
	<div style="background-image:url(importExport_25.png); position:absolute; left:512px; top:704px; width:472px; height:20px;" title="">
	</div>
	<div style="background-image:url(importExport_26.png); position:absolute; left:984px; top:704px; width:4px; height:64px;" title="">
	</div>
	<div style="background-image:url(importExport_27.png); position:absolute; left:512px; top:724px; width:472px; height:44px;" title="">
	</div>
</div>
</body></html>