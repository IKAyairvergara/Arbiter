<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: filtroAvanzado.php

==> DESCRIPCION: Pantalla que permite completar datos adicionales para un consolidado.

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->

<?php 
    //Se crea la sesion  
session_start(); 
    //Se valida si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion regresará a login.php
if(!isset($_SESSION['user_id']))  
{ 
	header('Location: ../../index.php');  
	exit(); 
} 
?>
<!-- saved from url=(0101)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/filtroAvanzado_009/filtroAvanzado.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Filtro Avanzado</title>

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
				alert("El Proyecto no tiene etapas registradas");
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
					alert("Error el país no tiene ciudades registradas");
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

/*function dependencia_ciudad()
 {
	var code = $("#estado").val();
	$.get("scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#ciudad").attr("disabled",false);
			document.getElementById("ciudad").options.length=1;
			$('#ciudad').append(resultado);			
		}
	});	
	
}
*/

</script>

<style type="text/css">
	body
	{
		background-image: url(blue.jpg);
		background-size: 100% 300%;
		background-repeat: no-repeat;
	}

	#p1{position:absolute; left:628px; top:20px; width:162px; height:76px;cursor:pointer;
	}
	#p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p2{ position:absolute; left:822px; top:20px; width:154px; height:76px;cursor:pointer;
	}
	#p2:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p3{ cursor:pointer;
	}
	#p3:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p3{position:absolute; left:277px; top:667px; width:173px; height:49px;cursor:pointer;
	}
	#p3:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p4{position:absolute; left:42px; top:667px; width:172px; height:49px;cursor:pointer;
	}
	#p4:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p{
		
		cursor:pointer;
	}
	#p:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}

</style>
<form name="myform" id="myform" action="" method="post">
	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
			<div style="background-image:url(filtroAvanzado_01.png); position:absolute; left:0px; top:0px; width:1024px; height:20px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_02.png); position:absolute; left:0px; top:20px; width:628px; height:157px;" title="">
			</div>
			<div id="p1" style="background-image:url(filtroAvanzado_03.png);" onclick="location.href='../Seleccion/ABT-T046-seleccion.php'" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_04.png); position:absolute; left:790px; top:20px; width:32px; height:157px;" title="">
			</div>
			<div id="p2" style="background-image:url(filtroAvanzado_05.png); " onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php'" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_06.png); position:absolute; left:976px; top:20px; width:48px; height:748px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_07.png); position:absolute; left:628px; top:96px; width:162px; height:81px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_08.png); position:absolute; left:822px; top:96px; width:154px; height:81px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_100.png); position:absolute; left:0px; top:177px; width:389px; height:490px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_10.png); position:absolute; left:390px; top:177px; width:123px; height:30px;" title="">
				<select name="ritmoVentas" id="ritmoVentas" onChange="enabledisabletext()" style="left:390px; top:177px; width:123px; height:30px;">
					<option value="*">TODOS</option>
					<option value=">">Mayor Que</option>
					<option value="<>">Entre</option>
					<option value="<">Menor Que</option>
					<option value="==">Igual a</option>
				</select>

			</div>
			<div style="background-image:url(filtroAvanzado_11.png); position:absolute; left:513px; top:177px; width:26px; height:591px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_12.png); position:absolute; left:539px; top:177px; width:131px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="desdeRitmoVentas" name="desdeRitmoVentas" style="width:131px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_13.pngg); position:absolute; left:670px; top:177px; width:25px; height:591px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_14.png); position:absolute; left:695px; top:177px; width:132px; height:30px;">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="hastaRitmoVentas" name="hastaRitmoVentas" tabindex="2" style="width:132px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_15.png); position:absolute; left:827px; top:177px; width:149px; height:591px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_16.png); position:absolute; left:390px; top:207px; width:123px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_17.png); position:absolute; left:539px; top:207px; width:131px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_18.png); position:absolute; left:695px; top:207px; width:132px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_19.png); position:absolute; left:390px; top:224px; width:123px; height:31px;" title="">
				<select name="costoDirecto" id="costoDirecto"  onChange="enabledisabletext()" style="left:390px; top:224px; width:123px; height:31px;">
					<option value="*">TODOS</option>
					<option value=">">Mayor Que</option>
					<option value="<>">Entre</option>
					<option value="<">Menor Que</option>
					<option value="==">Igual a</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_20.png); position:absolute; left:539px; top:224px; width:131px; height:31px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="desdeCostoDirecto" name="desdeCostoDirecto" tabindex="2" style="width:131px; height:31px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_21.png); position:absolute; left:695px; top:224px; width:132px; height:31px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="hastaCostoDirecto" name="hastaCostoDirecto" tabindex="2" style="width:132px; height:31px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_22.png); position:absolute; left:390px; top:255px; width:123px; height:16px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_23.png); position:absolute; left:539px; top:255px; width:131px; height:16px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_24.png); position:absolute; left:695px; top:255px; width:132px; height:16px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_25.png); position:absolute; left:390px; top:271px; width:123px; height:30px;" title="">
				<select name="vendibleVentas" id="vendibleVentas"  onChange="enabledisabletext()" style="left:390px; top:271px; width:123px; height:30px;">
					<option value="*">TODOS</option>
					<option value=">">Mayor Que</option>
					<option value="<>">Entre</option>
					<option value="<">Menor Que</option>
					<option value="==">Igual a</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_26.png); position:absolute; left:539px; top:271px; width:131px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="desdeVendibleVentas" name="desdeVendibleVentas" tabindex="2" style="width:131px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_27.png); position:absolute; left:695px; top:271px; width:132px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="hastaVendibleVentas" name="hastaVendibleVentas" tabindex="2" style="width:132px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_28.png); position:absolute; left:390px; top:301px; width:123px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_29.png); position:absolute; left:539px; top:301px; width:131px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_30.png); position:absolute; left:695px; top:301px; width:132px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_31.png); position:absolute; left:390px; top:320px; width:123px; height:30px;" title="">
				<select name="unidadCostoVentas" id="unidadCostoVentas"  onChange="enabledisabletext()" style="left:390px; top:320px; width:123px; height:30px;">
					<option value="*">TODOS</option>
					<option value=">">Mayor Que</option>
					<option value="<>">Entre</option>
					<option value="<">Menor Que</option>
					<option value="==">Igual a</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_32.png); position:absolute; left:539px; top:320px; width:131px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="desdeUnidadCostoVentas" name="desdeUnidadCostoVentas" tabindex="2" style="width:131px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_33.png); position:absolute; left:695px; top:320px; width:132px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="hastaUnidadCostoVentas" name="hastaUnidadCostoVentas" tabindex="2" style="width:132px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_34.png); position:absolute; left:390px; top:350px; width:123px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_35.png); position:absolute; left:539px; top:350px; width:131px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_36.png); position:absolute; left:695px; top:350px; width:132px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_37.png); position:absolute; left:390px; top:364px; width:123px; height:30px;" title="">
				<select name="costoVentas" id="costoVentas"  onChange="enabledisabletext()" style="left:390px; top:364px; width:123px; height:30px;">
					<option value="*">TODOS</option>
					<option value=">">Mayor Que</option>
					<option value="<>">Entre</option>
					<option value="<">Menor Que</option>
					<option value="==">Igual a</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_38.png); position:absolute; left:539px; top:364px; width:131px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="desdeCostoVentas" name="desdeCostoVentas" tabindex="2" style="width:131px; height:30px;">
				</label>	`
			</div>
			<div style="background-image:url(filtroAvanzado_39.png); position:absolute; left:695px; top:364px; width:132px; height:30px;" title="">
				<label>
					<input type="number" step="0.01" placeholder="Valor" id="hastaCostoVentas" name="hastaCostoVentas" tabindex="2" style="width:132px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_40.png); position:absolute; left:390px; top:394px; width:123px; height:28px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_41.png); position:absolute; left:539px; top:394px; width:131px; height:374px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_42.png); position:absolute; left:695px; top:394px; width:132px; height:374px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_43.png); position:absolute; left:0px; top:422px; width:389px; height:245px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_44.png); position:absolute; left:389px; top:422px; width:123px; height:30px;" title="">
				
				<select id="pais" name="pais" style="left:389px; top:442px; width:123px; height:30px;">
				<option value="*">TODOS</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_45.png); position:absolute; left:512px; top:422px; width:1px; height:346px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_46.png); position:absolute; left:389px; top:452px; width:123px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_47.png); position:absolute; left:389px; top:469px; width:123px; height:30px;" title="">
				
				<select id="estado" name="estado" style="left:389px; top:469px; width:123px; height:30px;">
					<option value="*">TODOS</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_48.png); position:absolute; left:389px; top:499px; width:123px; height:18px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_49.png); position:absolute; left:389px; top:517px; width:123px; height:30px;" title="">
				
				<select name='IND_ID' id='IND_ID' style="left:389px; top:536px; width:123px; height:30px;" required>
					<?php
					include "../../php/ABT-T000-conexion-U.php";
					$qr ="SELECT * FROM tb_segmento"; 
					$i = 0;
				echo '<option value="*">TODOS</option>';
					if ($resultado = $mysqli->query($qr)) {
						while ($fila = $resultado->fetch_row()) {
							echo "<option value='" .$fila[0]."''>";
							echo $fila[1];  
							echo "</option>";
						}
					}
					$mysqli->close();
					?>	  
				</select>

			</div>
			<div style="background-image:url(filtroAvanzado_50.png); position:absolute; left:389px; top:547px; width:123px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_51.png); position:absolute; left:389px; top:564px; width:123px; height:30px;" title="">
				
				<select name='PAR_ID' id='PAR_ID' style="left:389px; top:583px; width:123px; height:30px;" required>
					<?php
					include "../../php/ABT-T000-conexion-U.php";
					$qr ="SELECT * FROM tb_participacion"; 
					$i = 0;
					echo '<option value="*">TODOS</option>';
					if ($resultado = $mysqli->query($qr)) {
						while ($fila = $resultado->fetch_row()) {
							echo "<option value='" .$fila[0]."''>";
							echo $fila[1];  
							echo "</option>";
						}
					}
					$mysqli->close();
					?>	  
				</select>
				

			</div>
			<div style="background-image:url(filtroAvanzado_52.png); position:absolute; left:389px; top:594px; width:123px; height:73px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_53.png); position:absolute; left:0px; top:667px; width:42px; height:101px;" title="">
			</div>
	<!--<div  id="p4" style="background-image:url(filtroAvanzado_54.png);" title="">
</div>-->
<div style="background-image:url(filtroAvanzado_55.png); position:absolute; left:214px; top:667px; width:63px; height:101px;" title="">
</div>
<div id="p3" style="background-image:url(filtroAvanzado_56.png);"  onclick="location.href='../Seleccion/ABT-T046-seleccion.php'" title="">
	
</div>
<div style="background-image:url(filtroAvanzado_57.png); position:absolute; left:450px; top:667px; width:62px; height:101px;" title="">
</div>
<div style="background-image:url(filtroAvanzado_58.png); position:absolute; left:42px; top:716px; width:172px; height:52px;" title="">
</div>
<div style="background-image:url(filtroAvanzado_59.png); position:absolute; left:277px; top:716px; width:173px; height:52px;" title="">
</div>

<input id="p4" type="image" src='filtroAvanzado_54.png' name="aceptar"  value="aceptar"/>	
</div>
</form>
<?php 
include "../../php/ABT-T000-conexion-U.php";
				#$mysqli = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model");
				 ##Variables

error_reporting(0);

if(isset($_POST['pais'])){
	if($_POST["pais"]!=""){
		
		
		//----1
		$Ritmo_CBX= $_POST['ritmoVentas'];
		$Ritmo_Desde= $_POST['desdeRitmoVentas'];
		$Ritmo_Hasta= $_POST['hastaRitmoVentas'];

		$RES_RITMO_VENTAS_MENSUAL_PROMEDIO='RES_RITMO_VENTAS_MENSUAL_PROMEDIO';
		if($Ritmo_Hasta==null){
			$Ritmo_Hasta=0;
		}
		
		$ritmoVentas=' ';
		
		$ritmoVentas=casos($Ritmo_CBX,$Ritmo_Desde,$Ritmo_Hasta,$RES_RITMO_VENTAS_MENSUAL_PROMEDIO);
		
		// ---2
		$Valor_Ve_CostoDirecto_CBX= $_POST['costoDirecto'];
		$Valor_Ve_CostoDirecto_Desde= $_POST['desdeCostoDirecto'];
		$Valor_Ve_CostoDirecto_Hasta= $_POST['hastaCostoDirecto'];

		$RES_C_VR_M_VEN_CD='RES_C_VR_M_VEN_CD';
		
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		
		$costoDirecto=' ';
		
		$costoDirecto=casos($Valor_Ve_CostoDirecto_CBX,$Valor_Ve_CostoDirecto_Desde,$Valor_Ve_CostoDirecto_Hasta,$RES_C_VR_M_VEN_CD);
			
		// ---3
		$Valor_Vend_Ventas_CBX= $_POST['vendibleVentas'];
		$Valor_Vend_Ventas_Desde= $_POST['desdeVendibleVentas'];
		$Valor_Vend_Ventas_Hasta= $_POST['hastaVendibleVentas'];
		
		$RES_C_VR_M_VEN_CI_VB='RES_C_VR_M_VEN_CI_VB';
		
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		
		$vendibleVentas=' ';
		
		$vendibleVentas=casos($Valor_Vend_Ventas_CBX,$Valor_Vend_Ventas_Desde,$Valor_Vend_Ventas_Hasta,$RES_C_VR_M_VEN_CI_VB);
	
			// ---4
		$Valor_Un_Costo_Ventas_CBX= $_POST['unidadCostoVentas'];
		$Valor_Un_Costo_Ventas_Desde= $_POST['desdeUnidadCostoVentas'];
		$Valor_Un_Costo_Ventas_Hasta= $_POST['hastaUnidadCostoVentas'];
		
		$RES_C_TOT_CI_VB='ROUND(RES_C_TOT_CI_VB/RES_TOTAL_UNIDADES,2)';
		
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		
		
		
		$unidadCostoVentas=' ';
		
		$unidadCostoVentas=casos($Valor_Un_Costo_Ventas_CBX,$Valor_Un_Costo_Ventas_Desde,$Valor_Un_Costo_Ventas_Hasta,$RES_C_TOT_CI_VB);
	
		
		// ---5
		$Costo_Ventas_CBX= $_POST['costoVentas'];
		$Costo_Ventas_Desde= $_POST['desdeCostoVentas'];
		$Costo_Ventas_Hasta= $_POST['hastaCostoVentas'];
		
		$RES_C_PORC_VENT_CV='RES_C_PORC_VENT_CV';
		
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		
		$costoVentas=' ';
		
		$costoVentas=casos($Costo_Ventas_CBX,$Costo_Ventas_Desde,$Costo_Ventas_Hasta,$RES_C_PORC_VENT_CV);
	
		
		$Pais= $_POST['pais'];
		$Estado= $_POST['estado'];
		$Segmento= $_POST['IND_ID'];
		$Participacion= $_POST['PAR_ID'];

		if($Participacion=='03'){
			$Participacion='*';
		}
		
		
		
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		if($Valor_Vend_Ventas_Hasta==null){
			$Valor_Vend_Ventas_Hasta=0;
		}
		if($Valor_Un_Costo_Ventas_Hasta==null){
			$Valor_Un_Costo_Ventas_Hasta=0;
		}
		if($Costo_Ventas_Hasta==null){
			$Costo_Ventas_Hasta=0;
		}
		

		$sel_cui="SELECT CIU_ID FROM tb_ciudad WHERE CIU_DESCRIPCION='$Estado'";
		
		$result1 = $mysqli->query($sel_cui);

		$Ciudad='';
		while ($fila = $result1->fetch_array()) {
			$Ciudad=$fila['CIU_ID'];
			
		}


		$Segmento= $_POST['IND_ID'];
		$Participacion= $_POST['PAR_ID'];

		if($Ritmo_Hasta==null){
			$Ritmo_Hasta=0;
		}
		if($Valor_Ve_CostoDirecto_Hasta==null){
			$Valor_Ve_CostoDirecto_Hasta=0;
		}
		if($Valor_Vend_Ventas_Hasta==null){
			$Valor_Vend_Ventas_Hasta=0;
		}
		if($Valor_Un_Costo_Ventas_Hasta==null){
			$Valor_Un_Costo_Ventas_Hasta=0;
		}
		if($Costo_Ventas_Hasta==null){
			$Costo_Ventas_Hasta=0;
		}
		$sel_pais="AND PRO_PAI_ID = '$Pais' ";
		
		if($Pais=='*'){
			$sel_pais=" ";
		}
		
		$sel_ciudad="AND PRO_CIU_ID = '$Ciudad' ";
		
		if($Ciudad==''){
			$sel_ciudad=" ";
		}
		
		$sel_parti="AND DET_PAR_ID = '$Participacion' ";
		
		if($Participacion=='*'){
			$sel_parti=" ";
		}
		
		$sel_segmento="AND DET_SEG_ID = '$Segmento' ";
		
		if($Segmento=='*'){
			$sel_segmento=" ";
		}
		
		$sel = "SELECT RES_DET_PRO_ID,RES_DET_ETAPA,RES_MODELO
		FROM tb_resumen
		,tb_proyecto
		,tb_detalle_proyecto
		,tb_modelos
		WHERE RES_DET_PRO_ID = PRO_ID 
		AND PRO_ID = DET_PRO_ID
		AND DET_PRO_ID = MOD_DET_PRO_ID
		AND DET_ETAPA = MOD_DET_ETAPA
		AND RES_DET_ETAPA=MOD_DET_ETAPA
		$sel_pais 
		$sel_ciudad 
		$sel_parti 
		$sel_segmento 
		$ritmoVentas 
		$costoDirecto 
		$vendibleVentas 
		$unidadCostoVentas 
		$costoVentas"; 
		$a='';
		$result = $mysqli->query($sel);
		if($result->num_rows > 0 ){
		while ($fila = $result->fetch_array()) {
			 $id=$fila['RES_DET_PRO_ID'];
			 $et=$fila['RES_DET_ETAPA'];
			 $mod=$fila['RES_MODELO'];
			 $a=$fila['RES_DET_PRO_ID'];
			
			 $ins="INSERT INTO tb_seleccion(SEL_DET_PRO_ID,SEL_DET_ETAPA,SEL_MODELO,SEL_CONS_ID) VALUES('$id','$et','$mod','N')";
							
			
			$ins1 = $mysqli->query($ins);
			
			
		}



		
		if($ins1){
			print "<script>alert(\"\Seleccion Exitosa\");window.location='../Seleccion/ABT-T046-seleccion.php';</script>";
			
		}
		// else{
			// print "<script>alert(\"There was an error running the query [' . $mysqli->error . '].</br>\");</script>";
			// echo('There was an error running the query [' . $mysqli->error . '].</br>');
		// }
	}
else{
	print "<script>alert('No se encontraron resultados con los parametos insertados');</script>";
	
}
	}
	/*
							if($result){
								print "<script>alert(\"Se han ingresado correctamente los elementos\");</script>";
							}
							else{
								print "<script>alert(\"Error\");</script>";
								echo('There was an error running the query [' . $mysqli->error . '].</br>');
								}
							}
							*/
						}
						$mysqli->close();
						
						
						function casos($a,$b,$c,$d){
							$e;
							if($a=='>'){
								$e="AND $d > $b ";
								
							}
							
							else if($a=='<>'){
								$e="AND $d BETWEEN $b AND $c ";
							}
							else if($a=='<'){
								$e="AND $d < $b ";
							}
							else if($a=='=='){
								$e="AND $d = $b ";
							}
							else if($a=='*'){
								$e="  ";
							}
							
							return $e;
							

						}
						?>

						<script language="javascript">

							function enabledisabletext()
							{
		// INICIO RITMO VENTAS //
		if(document.myform.ritmoVentas.value=='>')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=true;
			document.myform.hastaRitmoVentas.value=0;
		}
		if(document.myform.ritmoVentas.value=='<')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=true;
			document.myform.hastaRitmoVentas.value=0;
		}
		if(document.myform.ritmoVentas.value=='<>')
		{	
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=false;
		}
		if(document.myform.ritmoVentas.value=='==')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=true;
			document.myform.hastaRitmoVentas.value=0;
		}
		// FIN RITMO VENTAS //

		// INICIO VENDIBLE COSTO DIRECTO //
		if(document.myform.costoDirecto.value=='>')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=true;
			document.myform.hastaCostoDirecto.value=0;
		}
		if(document.myform.costoDirecto.value=='<')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=true;
			document.myform.hastaCostoDirecto.value=0;
		}
		if(document.myform.costoDirecto.value=='<>')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=false;
		}
		if(document.myform.costoDirecto.value=='==')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=true;
			document.myform.hastaCostoDirecto.value=0;
		}
		// FIN VENDIBLE COSTO DIRECTO //

		// INICIO VENDIBLE VENTAS //
		if(document.myform.vendibleVentas.value=='>')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=true;
			document.myform.hastaVendibleVentas.value=0;
		}
		if(document.myform.vendibleVentas.value=='<')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=true;
			document.myform.hastaVendibleVentas.value=0;
		}
		if(document.myform.vendibleVentas.value=='<>')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=false;
		}
		if(document.myform.vendibleVentas.value=='==')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=true;
			document.myform.hastaVendibleVentas.value=0;
		}
		// FIN VENDIBLE VENTAS //

		// INICIO UNIDAD COSTO VENTAS //
		if(document.myform.unidadCostoVentas.value=='>')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=true;
			document.myform.hastaUnidadCostoVentas.value=0;
		}
		if(document.myform.unidadCostoVentas.value=='<')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=true;
			document.myform.hastaUnidadCostoVentas.value=0;
		}
		if(document.myform.unidadCostoVentas.value=='<>')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=false;
		}
		
		if(document.myform.unidadCostoVentas.value=='==')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=true;
			document.myform.hastaUnidadCostoVentas.value=0;
		}
		// FIN UNIDAD COSTO VENTAS //

		// INICIO COSTO VENTAS //
		if(document.myform.costoVentas.value=='>')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=true;
			document.myform.hastaCostoVentas.value=0;
		}
		if(document.myform.costoVentas.value=='<')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=true;
			document.myform.hastaCostoVentas.value=0;
		}
		if(document.myform.costoVentas.value=='<>')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=false;
		}
		if(document.myform.costoVentas.value=='==')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=true;
			document.myform.hastaCostoVentas.value=0;
		}
		// FIN COSTO VENTAS //
	}
</script>

</body>
</html>