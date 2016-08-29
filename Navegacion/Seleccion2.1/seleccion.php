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
	<!-- saved from url=(0091)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/Seleccion_002/Seleccion.html -->
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Selecci&oacute;n</title>

	</head>
	<link rel="shortcut icon" href="favicon.png">
	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }

	 #p1{position:absolute; left:341px; top:492px; width:148px; height:36px; cursor:pointer;}
	 #p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	 #p2{  position:absolute; left:639px; top:39px; width:162px; height:76px; cursor:pointer;} 
	  #p2:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	  #p3{ position:absolute; left:833px; top:39px; width:154px; height:76px; cursor:pointer;}
	  #p3:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p4{position:absolute; left:59px; top:492px; width:108px; height:36px;cursor: pointer;}
	#p4:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p5{position:absolute; left:196px; top:492px; width:109px; height:36px; cursor: pointer;}
	#p5:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p6{cursor: pointer;}
	#p6:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p7{position:absolute; left:288px; top:686px; width:173px; height:49px; cursor: pointer;}
	#p7:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	</style>
	<body>
	<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
				
					

					<form id="form1" name="form1" method="post" action="EnvioDatos.php">
					
					
					
					<div style="background-image:url(Seleccion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:39px;" title="">
						<!--<input type="submit" name="enviar" id="enviar" value="Enviar">-->
								
								

					</div>
					<div style="background-image:url(Seleccion_02.png); position:absolute; left:0px; top:39px; width:639px; height:154px;" title="">
					</div>
					<div id="p2" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Seleccion_03.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_04.png); position:absolute; left:801px; top:39px; width:32px; height:154px;" title="">
					</div>
					<div id="p3" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Seleccion_05.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_06.png); position:absolute; left:987px; top:39px; width:37px; height:729px;" title="">
					</div>
					<div style="background-image:url(Seleccion_07.png); position:absolute; left:639px; top:115px; width:162px; height:78px;" title="">
					</div>
					<div style="background-image:url(Seleccion_08.png); position:absolute; left:833px; top:115px; width:154px; height:78px;" title="">
					</div>
					<div style="background-image:url(Seleccion_09.png); position:absolute; left:0px; top:193px; width:218px; height:299px;" title="">
					</div>
					<div style="background-image:url(Seleccion_10.png); position:absolute; left:218px; top:193px; width:117px; height:30px;" title="">	
						
						<input type="date" name="genedesde" id="genedesde" style="left:218px; top:193px; width:120px; height:30px;"/>
					
					</div>
					<div style="background-image:url(Seleccion_11.png); position:absolute; left:329px; top:193px; width:40px; height:299px;" title="">
					</div>
					<div style="background-image:url(Seleccion_12.png); position:absolute; left:369px; top:193px; width:117px; height:30px;" title="">
						<input type="date" name="genehasta" style="left:369px; top:193px; width:120px; height:30px;">
					</div>
					<div style="background-image:url(Seleccion_13.png); position:absolute; left:480px; top:193px; width:320px; height:299px;" title="">
					</div>
					<div style="background-image:url(Seleccion_14.png); position:absolute; left:800px; top:193px; width:181px; height:30px;" title="">
					
					<select name="periodicidad" style="left:800px; top:193px; width:190px; height:30px;" required >
						  <option value="Mensual">Mensual</option>
						  <option value="Bimensual">Bimensual</option>
						  <option value="Trimestral">Trimestral</option>
						  <option value="Semestral">Semestral</option>
						  <option value="Anual">Anual</option>
						  <option value="Quinquenio">Quinquenio</option>  
					</select>

					</div>
					<div style="background-image:url(Seleccion_15.png); position:absolute; left:981px; top:193px; width:6px; height:385px;" title="">
					</div>
					<div style="background-image:url(Seleccion_16.png); position:absolute; left:218px; top:223px; width:111px; height:19px;" title="">
					</div>
					<div style="background-image:url(Seleccion_17.png); position:absolute; left:369px; top:223px; width:111px; height:19px;" title="">
					</div>
					<div style="background-image:url(Seleccion_18.png); position:absolute; left:800px; top:223px; width:181px; height:21px;" title="">
					</div>
					<div style="background-image:url(Seleccion_19.png); position:absolute; left:218px; top:242px; width:117px; height:30px;" title="">
						<input type="date" name="ventasdesde" style="left:218px; top:242px; width:130px; height:30px;" required/>
					</div>
					<div style="background-image:url(Seleccion_20.png); position:absolute; left:369px; top:242px; width:117px; height:30px;" title="">
						<input type="date" name="ventashasta" style="left:369px; top:242px; width:130px; height:30px;" required/>
					</div>
					<div style="background-image:url(Seleccion_21.png); position:absolute; left:800px; top:244px; width:181px; height:30px;" title="">
					<select name="unidadpresentacion" style="left:800px; top:193px; width:190px; height:30px;" required>
						  <option value="miles">Miles</option>
						  <option value="cientos">Cientos</option>
						  <option value="millones">Millones</option>
					</select>
					</div>
					<div style="background-image:url(Seleccion_22.png); position:absolute; left:218px; top:272px; width:111px; height:18px;" title="">
					</div>
					<div style="background-image:url(Seleccion_23.png); position:absolute; left:369px; top:272px; width:111px; height:18px;" title="">
					</div>
					<div style="background-image:url(Seleccion_24.png); position:absolute; left:800px; top:274px; width:181px; height:16px;" title="">
					</div>
					<div style="background-image:url(Seleccion_25.png); position:absolute; left:218px; top:290px; width:117px; height:31px;" title="">
						<input type="date" name="constdesde" style="left:218px; top:290px; width:130px; height:31px;" />
					</div>
					<div style="background-image:url(Seleccion_26.png); position:absolute; left:369px; top:290px; width:117px; height:31px;" title="">
						<input type="date" name="consthasta" style="left:369px; top:290px; width:130px; height:31px;" required/>
					</div>
					<div style="background-image:url(Seleccion_27.png); position:absolute; left:800px; top:290px; width:181px; height:31px;" title="">
						<input type="number" name="monedareexpresion" id="monedaree" maxlength="4" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);"  style="left:800px; top:244px; width:190px; height:30px;" required/>
					</div>
					<div style="background-image:url(Seleccion_28.png); position:absolute; left:218px; top:321px; width:111px; height:19px;" title="">
					</div>
					<div style="background-image:url(Seleccion_29.png); position:absolute; left:369px; top:321px; width:111px; height:19px;" title="">
					</div>
					<div style="background-image:url(Seleccion_30.png); position:absolute; left:800px; top:321px; width:181px; height:19px;" title="">
					</div>
					<div style="background-image:url(Seleccion_31.png); position:absolute; left:218px; top:340px; width:117px; height:30px;" title="">
						<input type="date" name="prepdesde" style="left:218px; top:340px; width:130px; height:30px;" required />
					</div>
					<div style="background-image:url(Seleccion_32.png); position:absolute; left:369px; top:340px; width:117px; height:30px;" title="">
						<input type="date" name="prephasta" style="left:369px; top:340px; width:130px; height:30px;" required />
					</div>
					<div style="background-image:url(Seleccion_33.png); position:absolute; left:800px; top:340px; width:181px; height:30px;" title="">
					<select style="left:800px; top:193px; width:190px; height:30px;"  name="ritmoventas" required>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
					</select>
					</div>
					<div style="background-image:url(Seleccion_34.png); position:absolute; left:218px; top:370px; width:111px; height:122px;" title="">
					</div>
					<div style="background-image:url(Seleccion_35.png); position:absolute; left:369px; top:370px; width:111px; height:122px;" title="">
					</div>
					<div style="background-image:url(Seleccion_36.png); position:absolute; left:800px; top:370px; width:181px; height:15px;" title="">
					</div>
					<div style="background-image:url(Seleccion_37.png); position:absolute; left:800px; top:385px; width:181px; height:30px;" title="">
					<input type="number" name="nuevohogar" step="0.01" maxlength="4" onkeypress="return justNumbers(event);" style="left:800px; top:385px; width:190px; height:30px;" placeholder="Ingrese porcentaje" required />
					</div>
					<div style="background-image:url(Seleccion_38.png); position:absolute; left:800px; top:415px; width:181px; height:20px;" title="">
					</div>
					<div style="background-image:url(Seleccion_39.png); position:absolute; left:800px; top:435px; width:181px; height:30px;" title="">
					<input type="text" maxlength="4" name="proyecto" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:800px; top:435px; width:190px; height:30px;" required/>
					</div>
					<div style="background-image:url(Seleccion_40.png); position:absolute; left:800px; top:465px; width:181px; height:22px;" title="">
					</div>
					<div style="background-image:url(Seleccion_41.png); position:absolute; left:800px; top:487px; width:181px; height:30px;" title="">
					<input type="text" name="version" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:800px; top:487px; width:190px; height:30px;" required/>
					</div>
					<div style="background-image:url(Seleccion_42.png); position:absolute; left:0px; top:492px; width:59px; height:194px;" title="">
					</div>
					<div id="p4"onclick="location.href='../SeleccionProyectos/seleccionProyectos.php';" style="background-image:url(Seleccion_43.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_44.png); position:absolute; left:167px; top:492px; width:29px; height:194px;" title="">
					</div>
					<div  id="p5"  onclick="location.href='../SeleccionModelos/seleccionModelos.php';" style="background-image:url(Seleccion_45.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_46.png); position:absolute; left:305px; top:492px; width:36px; height:86px;" title="">
					</div>
					<div id="p1" onclick="location.href='../filtroAvanzado3/filtroAvanzado.php';" style="background-image:url(Seleccion_47.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_48.png); position:absolute; left:489px; top:492px; width:311px; height:86px;" title="">
					</div>
					<div style="background-image:url(Seleccion_49.png); position:absolute; left:800px; top:517px; width:181px; height:61px;" title="">
					</div>
					<div style="background-image:url(Seleccion_50.png); position:absolute; left:59px; top:528px; width:108px; height:158px;" title="">
					</div>
					<div style="background-image:url(Seleccion_51.png); position:absolute; left:196px; top:528px; width:109px; height:50px;" title="">
					</div>
					<div style="background-image:url(Seleccion_52.png); position:absolute; left:341px; top:528px; width:148px; height:50px;" title="">
					</div>
					<div style="background-image:url(Seleccion_53.png); position:absolute; left:196px; top:578px; width:92px; height:108px;" title="">
					</div>
					<div style="background-image:url(Seleccion_54.png); position:absolute; left:288px; top:578px; width:699px; height:49px;" title="">

						<input type="text" maxlength="45" name="tituloinforme" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:288px; top:578px; width:699px; height:49px; font-size:20px ; font-family: verdana;" required/>

					</div>
					<div style="background-image:url(Seleccion_55.png); position:absolute; left:288px; top:627px; width:699px; height:59px;" title="">
					</div>
					<div style="background-image:url(Seleccion_56.png); position:absolute; left:0px; top:686px; width:53px; height:82px;" title="">
					</div>
					
					<div id="" style="position:absolute; left:53px; top:685px; width:172px; height:49px" title="">
					
					<input id="p6" type="image" src='Seleccion_57.png' name="enviar" id="enviar" value="enviar" style="left:53px; top:700px; width:172px; height:49px" />

					</div>
					<div style="background-image:url(Seleccion_58.png); position:absolute; left:225px; top:686px; width:63px; height:82px;" title="">
					</div>
					
					<div id="p7" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Seleccion_59.png);" title="">
					</div>
					<div style="background-image:url(Seleccion_60.png); position:absolute; left:461px; top:686px; width:526px; height:82px;" title="">
					</div>
					<div style="background-image:url(Seleccion_61.png); position:absolute; left:53px; top:735px; width:172px; height:33px;" title="">
					</div>
					<div style="background-image:url(Seleccion_62.png); position:absolute; left:288px; top:735px; width:173px; height:33px;" title="">
					</div>
				</form>	
		</div>
	</body>
</html>