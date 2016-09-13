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
<title>Consulta</title>
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
 #p{position:absolute; left:813px; top:33px; width:175px; height:76px;}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(Untitled-22_01.png); position:absolute; left:0px; top:0px; width:1024px; height:27px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_02.png); position:absolute; left:0px; top:27px; width:36px; height:741px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_03.png); position:absolute; left:36px; top:27px; width:75px; height:75px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_04.png); position:absolute; left:111px; top:27px; width:913px; height:6px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_05.png); position:absolute; left:111px; top:33px; width:702px; height:1px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Untitled-22_06.png); " title="">
	</div>
	<div style="background-image:url(Untitled-22_07.png); position:absolute; left:988px; top:33px; width:36px; height:735px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_08.png); position:absolute; left:111px; top:34px; width:27px; height:734px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_09.png); position:absolute; left:138px; top:34px; width:296px; height:62px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_10.png); position:absolute; left:434px; top:34px; width:379px; height:734px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_11.png); position:absolute; left:138px; top:96px; width:296px; height:672px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_12.png); position:absolute; left:36px; top:102px; width:75px; height:666px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_13.png); position:absolute; left:813px; top:109px; width:175px; height:659px;" title="">
	</div>
</div>
</body>
</html>