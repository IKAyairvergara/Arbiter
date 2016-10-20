
<!-- saved from url=(0091)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/Seleccion_004/Seleccion.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Selecci&oacute;n</title>
</head>
<link rel="shortcut icon" href="favicon.png">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	cargar_paises();
	$("#pais").change(function(){dependencia_estado();});
	$("#estado").change(function(){dependencia_ciudad();});
	$("#estado").attr("disabled",true);
	$("#ciudad").attr("disabled",true);
});

function cargar_paises()
{
	$.get("scripts/cargar-paises.php", function(resultado){
		if(resultado == false)
		{
			//alert("Error");
			
		}
		else
		{
			$('#pais').append(resultado);			
		}
	});	
}
function dependencia_estado()
{
	var code = $("#pais").val();
	$.get("scripts/dependencia-estado.php", { code: code },
		function(resultado)
		{
			if(resultado == false)
			{
				//alert("Error");
				$("#estado").attr("disabled",true);
				document.getElementById("estado").options.length=1;
				$("#ciudad").attr("disabled",true);
				document.getElementById("ciudad").options.length=1;
			}
			else
			{
				$("#estado").attr("disabled",false);
				document.getElementById("estado").options.length=1;
				$('#estado').append(resultado);			
			}
		}

	);
}

function dependencia_ciudad()
{
	var code = $("#estado").val();
	$.get("scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			//alert("Error");
			$("#ciudad").attr("disabled",true);
		}
		else
		{
			$("#ciudad").attr("disabled",false);
			document.getElementById("ciudad").options.length=1;
			$('#ciudad').append(resultado);			
		}
	});	
	
}
</script>
	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }
	 #p1{position:absolute; left:639px; top:36px; width:161px; height:76px; cursor: pointer;}
	 #p1:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p2{position:absolute; left:832px; top:36px; width:155px; height:76px; cursor: pointer;}
	 #p2:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p3{ position:absolute; left:59px; top:499px; width:108px; height:36px; cursor: pointer;}
	 #p3:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p4{position:absolute; left:196px; top:499px; width:109px; height:36px; cursor: pointer;}
	 #p4:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p5{position:absolute; left:341px; top:499px; width:148px; height:36px; cursor: pointer;}
	 #p5:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p6{position:absolute; left:288px; top:683px; width:173px; height:49px;cursor: pointer;}
	 #p6:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	#p7{position:absolute; left:53px; top:683px; width:172px; height:49px;cursor: pointer;}
	#p7:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
		
	 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:769px;">
<form  id="myform" name="myform" method = "post" action = "ABT-T065-envioDatosSeleccion-U.php">

	<div style="background-image:url(Seleccion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:36px;" title="">
	</div>
	<div style="background-image:url(Seleccion_02.png); position:absolute; left:0px; top:36px; width:639px; height:106px;" title="">
	</div>
	<div id="p1" style="background-image:url(Seleccion_03.png);" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" title="">
	</div>
	<div style="background-image:url(Seleccion_04.png); position:absolute; left:800px; top:36px; width:32px; height:154px;" title="">
	</div>
	<div id="p2" style="background-image:url(Seleccion_05.png);" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" title="">
	</div>
	<div style="background-image:url(Seleccion_06.png); position:absolute; left:987px; top:36px; width:37px; height:733px;" title="">
	</div>
	<div style="background-image:url(Seleccion_07.png); position:absolute; left:639px; top:112px; width:161px; height:78px;" title="">
	</div>
	<div style="background-image:url(Seleccion_08.png); position:absolute; left:832px; top:112px; width:155px; height:78px;" title="">
	</div>
	<div style="background-image:url(Seleccion_09.png); position:absolute; left:0px; top:142px; width:269px; height:357px;" title="">
	</div>
	<div style="background-image:url(Seleccion_10.png); position:absolute; left:269px; top:142px; width:211px; height:30px;" title="">
			<input type="text" maxlength="60" name="tituloinforme" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:269px; top:142px; width:211px; height:30px;font-family: verdana;" />
	</div>
	<div style="background-image:url(Seleccion_11.png); position:absolute; left:480px; top:142px; width:159px; height:133px;" title="">
	</div>
	<div style="background-image:url(Seleccion_12.png); position:absolute; left:269px; top:172px; width:211px; height:103px;" title="">
	</div>
	<div style="background-image:url(Seleccion_13.png); position:absolute; left:639px; top:190px; width:132px; height:579px;" title="">
	</div>
	<div style="background-image:url(Seleccion_14.png); position:absolute; left:771px; top:190px; width:210px; height:31px;" title="">
			<select name="periodicidad" style="left:771px; top:190px; width:210px; height:31px;" required>
						  <option value="Mensual">Mensual</option>
						  <option value="Bimensual">Bimensual</option>
						  <option value="Trimestral">Trimestral</option>
						  <option value="Semestral">Semestral</option>
						  <option value="Anual">Anual</option>
						  <option value="Quinquenio">Quinquenio</option>  
			</select>
	</div>
	<div style="background-image:url(Seleccion_15.png); position:absolute; left:981px; top:190px; width:6px; height:579px;" title="">
	</div>
	<div style="background-image:url(Seleccion_16.png); position:absolute; left:771px; top:221px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_17.png); position:absolute; left:771px; top:230px; width:210px; height:30px;" title="">
			<select name="unidadpresentacion" style="left:771px; top:230px; width:210px; height:30px;" required>
						  <option value="1">Miles</option>
						  <option value="1000">Pesos</option>
						  <option value="0.001">Millones</option>
			</select>
	</div>
	<div style="background-image:url(Seleccion_18.png); position:absolute; left:771px; top:260px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_19.png); position:absolute; left:771px; top:269px; width:210px; height:30px;" title="">
	
	<input type="number" maxlength="60" name="ritmoventas" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:771px; top:269px; width:210px; height:30px;" />
	</div>
	<div style="background-image:url(Seleccion_20.png); position:absolute; left:269px; top:275px; width:2px; height:224px;" title="">
	</div>
	<div style="background-image:url(Seleccion_21.png); position:absolute; left:271px; top:275px; width:211px; height:30px;" title="">
			<select id="pais" name="pais" style="left:271px; top:275px; width:211px; height:30px;">
            	<option value="0">Selecciona Un Indicador...</option>
        	</select>
	</div>
	<div style="background-image:url(Seleccion_22.png); position:absolute; left:482px; top:275px; width:157px; height:224px;" title="">
	</div>
	<div style="background-image:url(Seleccion_23.png); position:absolute; left:771px; top:299px; width:210px; height:10px;" title="">
	</div>
	<div style="background-image:url(Seleccion_24.png); position:absolute; left:271px; top:305px; width:211px; height:12px;" title="">
	</div>
	<div style="background-image:url(Seleccion_25.png); position:absolute; left:771px; top:309px; width:210px; height:30px;" title="">
			<input type="number" name="nuevohogar" step="0.01" maxlength="4" onkeypress="return justNumbers(event);" style="left:771px; top:309px; width:210px; height:30px;" placeholder="Ingrese porcentaje" />
	</div>
	<div style="background-image:url(Seleccion_26.png); position:absolute; left:271px; top:317px; width:211px; height:30px;" title="">
			<select id="estado" name="estado" style="left:271px; top:317px; width:211px; height:30px;">
            	<option value="0">Selecciona Una Fecha...</option>
        	</select>
	</div>
	<div style="background-image:url(Seleccion_27.png); position:absolute; left:771px; top:339px; width:210px; height:10px;" title="">
	</div>
	<div style="background-image:url(Seleccion_28.png); position:absolute; left:271px; top:347px; width:211px; height:11px;" title="">
	</div>
	<div style="background-image:url(Seleccion_29.png); position:absolute; left:771px; top:349px; width:210px; height:31px;" title="">
			<input type="text" maxlength="4" name="proyecto" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:771px; top:349px; width:210px; height:31px;" required />
	</div>
	<div style="background-image:url(Seleccion_30.png); position:absolute; left:271px; top:358px; width:211px; height:31px;" title="">
			<select id="ciudad" name="ciudad" style="left:271px; top:358px; width:211px; height:31px;">
            	<option value="0">Selecciona Un Valor...</option>
       		</select>
	</div>
	<div style="background-image:url(Seleccion_31.png); position:absolute; left:771px; top:380px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_32.png); position:absolute; left:271px; top:389px; width:211px; height:110px;" title="">
	</div>
	<div style="background-image:url(Seleccion_33.png); position:absolute; left:771px; top:389px; width:210px; height:31px;" title="">
			<input type="text" name="version" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:771px; top:389px; width:210px; height:31px;" required />
	</div>
	<div style="background-image:url(Seleccion_34.png); position:absolute; left:850px; top:420px; width:210px; height:63px;" title="">
	</div>
	<div style="background-image:url(Seleccion_35.png); position:absolute; left:771px; top:483px; width:1px; height:286px;" title="">
	</div>
	<div style="background-image:url(Seleccion_36.png); position:absolute; left:772px; top:483px; width:85px; height:30px;" title="">
			
			<input type="month" name="genedesde" id="genedesde" style="left:772px; top:483px; width:190px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_37.png); position:absolute; left:857px; top:483px; width:39px; height:286px;" title="">
	</div>
	<div style="background-image:url(Seleccion_38.png); position:absolute; left:980px; top:483px; width:85px; height:30px;" title="">
			
			<input type="month" name="genehasta" id="genehasta" style="left:980px; top:483px; width:190px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_39.png); position:absolute; left:0px; top:499px; width:59px; height:184px;" title="">
	</div>
	<div id="p3" onclick="location.href='../SeleccionProyectos/ABT-T048-seleccionProyectos-U.php';" style="background-image:url(Seleccion_40.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_41.png); position:absolute; left:167px; top:499px; width:29px; height:184px;" title="">
	</div>
	<div id="p4" onclick="location.href='../SeleccionModelos/ABT-T047-seleccionModelos-U.php';" style="background-image:url(Seleccion_42.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_43.png); position:absolute; left:305px; top:499px; width:36px; height:184px;" title="">
	</div>
	<div id="p5" onclick="location.href='../FiltroAvanzado/ABT-T037-filtroAvanzado-U.php';" style="background-image:url(Seleccion_44.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_45.png); position:absolute; left:489px; top:499px; width:150px; height:270px;" title="">
	</div>
	<div style="background-image:url(Seleccion_46.png); position:absolute; left:772px; top:513px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_47.png); position:absolute; left:896px; top:513px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_48.png); position:absolute; left:772px; top:522px; width:85px; height:31px;" title="">
			
			<input type="month" name="ventasdesde" id="ventasdesde" style="left:772px; top:522px; width:190px; height:31px">
	</div>
	<div style="background-image:url(Seleccion_49.png); position:absolute; left:980px; top:522px; width:85px; height:31px;" title="">
			
			<input type="month" name="ventashasta" id="ventashasta" style="left:980px; top:522px; width:190px; height:31px;">
	</div>
	<div style="background-image:url(Seleccion_50.png); position:absolute; left:59px; top:535px; width:108px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_51.png); position:absolute; left:196px; top:535px; width:109px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_52.png); position:absolute; left:341px; top:535px; width:148px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_53.png); position:absolute; left:772px; top:553px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_54.png); position:absolute; left:896px; top:553px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_55.png); position:absolute; left:772px; top:562px; width:85px; height:30px;" title="">
			
			<input type="month" name="constdesde" id="constdesde" style="left:772px; top:562px; width:190px; height:31px;">
	</div>
	<div style="background-image:url(Seleccion_56.png); position:absolute; left:980px; top:562px; width:85px; height:30px;" title="">
			
			<input type="month" name="consthasta" id="consthasta" style="left:980px; top:562px; width:190px; height:31px;">
	</div>
	<div style="background-image:url(Seleccion_57.png); position:absolute; left:772px; top:592px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_58.png); position:absolute; left:896px; top:592px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_59.png); position:absolute; left:772px; top:603px; width:85px; height:30px;" title="">
			
			<input type="month" name="prepdesde" id="prepdesde" style="left:772px; top:603px; width:190px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_60.png); position:absolute; left:980px; top:601px; width:85px; height:30px;" title="">
			
			<input type="month" name="prephasta" id="prephasta" style="left:980px; top:601px; width:190px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_61.png); position:absolute; left:772px; top:631px; width:85px; height:138px;" title="">
	</div>
	<div style="background-image:url(Seleccion_62.png); position:absolute; left:896px; top:631px; width:85px; height:138px;" title="">
	</div>
	<div style="background-image:url(Seleccion_63.png); position:absolute; left:0px; top:683px; width:53px; height:86px;" title="">
	</div>
	<!--<div id="p7" style="background-image:url(Seleccion_64.png); position:absolute; left:53px; top:683px; width:172px; height:49px;" title="">
	</div>-->
	<div style="background-image:url(Seleccion_65.png); position:absolute; left:225px; top:683px; width:63px; height:86px;" title="">
	</div>
	<div id="p6" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(Seleccion_66.png); " title="">
	</div>

	<div style="background-image:url(Seleccion_67.png); position:absolute; left:461px; top:683px; width:28px; height:86px;" title="">
	</div>
	<div style="background-image:url(Seleccion_68.png); position:absolute; left:53px; top:732px; width:172px; height:37px;" title="">
	</div>
	<div style="background-image:url(Seleccion_69.png); position:absolute; left:288px; top:732px; width:173px; height:37px;" title="">
	</div>
	
		<input id="p7" type="image" src='Seleccion_64.png' name="aceptar"  value="aceptar"/>
</form>

</div>
</body></html>