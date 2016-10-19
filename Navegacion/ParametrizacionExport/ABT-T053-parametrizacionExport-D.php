<?php
		ob_get_contents();
		ob_clean();
		#ob_implicit_flush(true);
		#ob_end_flush();
		#ob_start();
		#ob_flush();
		#flush();
		#ob_end_flush();
		error_reporting(0);	
		session_start();
		$_SESSION['contador']=0;
		$_SESSION['terminado']=0;
		$envio=$_POST['INF_ID'];
		$variable=$_POST['CONS_ID'];
		echo $envio;
		
		if($envio=="1"){
			header('Location: ABT-T057-Paises-D.php');
		}if($envio=="2"){
			header('Location: ABT-T054-Ciudades-D.php');
		}if($envio=="3"){
			header('Location: ABT-T060-Segmento-D.php');
		}if($envio=="4"){
			header('Location: ABT-T058-Participacion-D.php');
		}if($envio=="5"){
			header('Location: ABT-T059-Proyectos-D.php');
		}if($envio=="6"){
			header('Location: ABT-T055-DetalleProyecto-D.php');
		}if($envio=="7"){
			header('Location: ABT-T056-Indicadores-D.php');
		}if($envio=="8"){
			header('Location: ABT-T061-Servidores-D.php');
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
 input[type=submit]{
		background-image:url(importExport_21.png); 
		position:absolute; 
		left:359px; top:403px; 
		width:306px; 
		height:62px;" 
		title=""
	}

	input[type=submit]:hover
	{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		color: transparent;
		
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
	<div id="p" onclick="location.href='../ParametrizacionInicial/ABT-T050-parametrizacionInicial-D.php';" style="background-image:url(importExport_06.png); position:absolute; left:639px; top:41px; width:162px; height:76px;" title="">
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
	<div style="background-image:url(importExport_14.png); position:absolute; left:36px; top:157px; width:953px; height:119px;" title="">
	</div>
	<div style="background-image:url(importExport_15.png); position:absolute; left:989px; top:157px; width:35px; height:611px;" title="">
	</div>
	<div style="background-image:url(importExport_16.png); position:absolute; left:36px; top:276px; width:262px; height:375px;" title="">
	</div>
	<form action="" method="post" enctype="multipart/form-data" name="form1">
	<div style="background-image:url(importExport_17.png); position:absolute; left:298px; top:276px; width:428px; height:39px;" title="">
	 
	</div>
	<div style="background-image:url(importExport_18.png); position:absolute; left:726px; top:276px; width:263px; height:375px;" title="">
	</div>
	<div style="background-image:url(importExport_19.png); position:absolute; left:298px; top:315px; width:428px; height:88px;" title="">
	</div>
	<div style="background-image:url(importExport_20.png); position:absolute; left:298px; top:403px; width:61px; height:248px;" title="">
	</div>
	<div style="background-image:url(importExport_21.png); position:absolute; left:359px; top:403px; width:306px; height:62px;" title="">
	</div>
	<div style="background-image:url(importExport_22.png); position:absolute; left:665px; top:403px; width:61px; height:248px;" title="">
	</div>
	<div style="background-image:url(importExport_23.png); position:absolute; left:359px; top:465px; width:306px; height:186px;" title="">
	</div>
	<div style="background-image:url(importExport_24.png); position:absolute; left:36px; top:651px; width:953px; height:53px;" title="">
	</div>
	<div style="background-image:url(importExport_25.png); position:absolute; left:36px; top:704px; width:477px; height:64px;" title="">
	</div>
	<div style="background-image:url(importExport_26.png); position:absolute; left:513px; top:704px; width:471px; height:20px;" title="">
	</div>
	<div style="background-image:url(importExport_27.png); position:absolute; left:984px; top:704px; width:5px; height:64px;" title="">
	</div>
	<div style="background-image:url(importExport_28.png); position:absolute; left:513px; top:724px; width:471px; height:44px;" title="">
	</div>
	<form action="" method="post" enctype="multipart/form-data" name="form1">
	<div style="background-image:url(importExport_17.png); position:absolute; left:298px; top:276px; width:428px; height:39px;" title="">
	  <select name="INF_ID" style="left:107px; top:235px; width:428px; height:56px; font-size:20px ; font-family: verdana">
		  <option value="">Seleccione parametrizacion a exportar</option>
		  <option value="1">Paises</option>
		  <option value="2">Ciudades</option>
		  <option value="3">Segmentos</option>
		  <option value="4">Tipo Participacion</option>
		  <option value="5">Proyectos</option>
		  <option value="6">Detalle Proyectos</option>
		  <option value="7">Indicadores</option>
		  <option value="8">Servidores</option>
  
    
    </select>
	</div>
	<input type="submit" name="button" class="btn" id="button" value="";>	
	
		</form>
</div>
</body></html>