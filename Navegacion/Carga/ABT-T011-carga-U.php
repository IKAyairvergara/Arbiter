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
<title>Carga</title>
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
 #p{
 	position:absolute; 
 	left:682px; 
 	top:35px; 
 	width:76px; 
 	height:76px;
 	cursor: pointer;
 }
  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{
 	position:absolute; 
 	left:912px; 
 	top:34px; 
    width:76px; 
    height:76px;
    cursor: pointer;
 }
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p2{
 	 position:absolute; 
 	 left:245px; 
 	 top:218px; 
 	 width:122px; 
 	 height:122px;
 	 cursor: pointer;
 }
  #p2:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p3{
 	position:absolute; 
 	left:245px; 
 	top:440px; 
 	width:122px; 
 	height:122px;
 	cursor: pointer;
 }
  #p3:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}

 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0%; width:100%; height:100%;">
	<div style="background-image:url(Untitled-1_01.png); position:absolute; left:0px; top:0px; width:1024px; height:27px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_02.png); position:absolute; left:0px; top:27px; width:36px; height:741px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_03.png); position:absolute; left:36px; top:27px; width:75px; height:76px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_04.png); position:absolute; left:111px; top:27px; width:913px; height:7px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_05.png); position:absolute; left:111px; top:34px; width:801px; height:1px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(Untitled-1_06.png); " title="">
	</div>
	<div style="background-image:url(Untitled-1_07.png); position:absolute; left:988px; top:34px; width:36px; height:734px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_08.png); position:absolute; left:111px; top:35px; width:27px; height:733px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_09.png); position:absolute; left:138px; top:35px; width:197px; height:76px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_10.png); position:absolute; left:335px; top:35px; width:347px; height:29px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(Untitled-1_11.png); " title="">
	</div>
	<div style="background-image:url(Untitled-1_12.png); position:absolute; left:758px; top:35px; width:154px; height:28px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_13.png); position:absolute; left:758px; top:63px; width:64px; height:184px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_14.png); position:absolute; left:822px; top:63px; width:65px; height:20px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_15.png); position:absolute; left:887px; top:63px; width:25px; height:705px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_16.png); position:absolute; left:335px; top:64px; width:251px; height:154px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_17.png); position:absolute; left:586px; top:64px; width:73px; height:20px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_18.png); position:absolute; left:659px; top:64px; width:23px; height:183px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_19.png); position:absolute; left:822px; top:83px; width:65px; height:685px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_20.png); position:absolute; left:586px; top:84px; width:73px; height:163px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_21.png); position:absolute; left:36px; top:103px; width:75px; height:665px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_22.png); position:absolute; left:912px; top:110px; width:76px; height:658px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_23.png); position:absolute; left:138px; top:111px; width:197px; height:107px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_24.png); position:absolute; left:682px; top:111px; width:76px; height:136px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_25.png); position:absolute; left:138px; top:218px; width:107px; height:550px;" title="">
	</div>
	<div id="p2" onclick="location.href='../CargaAutomatica/ABT-T012-cargaAutomatica-U.php';" style="background-image:url(Untitled-1_26.png);" title="">
	</div>
	<div style="background-image:url(Untitled-1_27.png); position:absolute; left:367px; top:218px; width:219px; height:29px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_28.png); position:absolute; left:367px; top:247px; width:30px; height:521px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_29.png); position:absolute; left:397px; top:247px; width:387px; height:48px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_30.png); position:absolute; left:784px; top:247px; width:38px; height:521px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_31.png); position:absolute; left:397px; top:295px; width:387px; height:181px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_32.png); position:absolute; left:245px; top:340px; width:122px; height:100px;" title="">
	</div>
	<div id="p3" onclick="location.href='../CargaManual/ABT-T013-cargaManual-U.php';" style="background-image:url(Untitled-1_33.png); " title="">
	</div>
	<div style="background-image:url(Untitled-1_34.png); position:absolute; left:397px; top:476px; width:288px; height:48px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_35.png); position:absolute; left:685px; top:476px; width:99px; height:292px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_36.png); position:absolute; left:397px; top:524px; width:288px; height:244px;" title="">
	</div>
	<div style="background-image:url(Untitled-1_37.png); position:absolute; left:245px; top:562px; width:122px; height:206px;" title="">
	</div>
</div>
</body>
</html>