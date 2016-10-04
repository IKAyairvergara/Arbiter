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
<title>Seleccion Tipo Informe</title>

</head>
<link rel="shortcut icon" href="favicon.png">
	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }

 #p{position:absolute; left:622px; top:26px; width:172px; height:76px; cursor:pointer;}
 #p:hover
 {	
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p1{position:absolute;  left:818px; top:26px; width:168px; height:76px; cursor:pointer;}
 #p1:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }
 #p2{cursor: pointer; position:absolute; left:1px; top:172px; width:517px; height:458px;"}
 #p2:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);aa
   transition-duration: 0.4s;
 }
 #p3{cursor: pointer;position:absolute; left:518px; top:172px; width:373px; height:453px;"}
 #p3:hover
 {
   opacity: 1.0;
   filter: alpha(opacity=100);
   transform: scale(1.12);
   transition-duration: 0.4s;
 }

	 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1025px; height:769px;">
	<div style="background-image:url(Untitled-4_01.png); position:absolute; left:0px; top:0px; width:1025px; height:26px;" title="">
	</div>
	<div style="background-image:url(informes_30.png); position:absolute; left:0px; top:26px; width:622px; height:146px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';"  style="background-image:url(informes_03.png);">
	</div >
	<div style="background-image:url(Untitled-4_04.png); position:absolute; left:794px; top:26px; width:24px; height:146px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(informes_05.png);">
	</div>
	<div style="background-image:url(Untitled-4_06.png); position:absolute; left:986px; top:26px; width:39px; height:743px;" title="">
	</div>
	<div style="background-image:url(Untitled-4_07.png); position:absolute; left:622px; top:102px; width:172px; height:70px;" title="">
	</div>
	<div style="background-image:url(Untitled-4_08.png); position:absolute; left:818px; top:102px; width:168px; height:70px;" title="">
	</div>
	<div  style="background-image:url(Untitled-4_09.png); position:absolute; left:0px; top:172px; width:1px; height:597px;" title="">
	</div>
	<div id="p2" onclick="location.href='../Informes/ABT-T055-informesExcel-D.php';" style="background-image:url(Untitled-4_10.png);		">
	</div>
	<div id="p3" onclick="location.href='../Informes/ABT-T056-informesPDF-D.php';" style="background-image:url(Untitled-4_11.png);cursor: pointer; position:absolute; left:518px; top:172px; width:373px; height:453px;" >
	</div>
	<div style="background-image:url(Untitled-4_12.png); position:absolute; left:891px; top:172px; width:95px; height:597px;" title="">
	</div>
	<div style="background-image:url(Untitled-4_13.png); position:absolute; left:518px; top:625px; width:93px; height:5px;" title="">
	</div>
	<div style="background-image:url(Untitled-4_14.png); position:absolute; left:611px; top:625px; width:280px; height:144px;" title="">
	</div>
	<div style="background-image:url(Untitled-4_15.png); position:absolute; left:1px; top:630px; width:610px; height:139px;" title="">
	</div>
</div>
</body></html>