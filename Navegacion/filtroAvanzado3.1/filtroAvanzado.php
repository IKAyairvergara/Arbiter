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
<title>Filtro Avanzado</title>

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
		left:632px; 
		top:40px; 
		width:162px; 
		height:76px; 
		cursor:pointer;
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
		left:826px; 
		top:40px; 
		width:154px; 
		height:76px; 
		cursor:pointer;
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
		left:46px; 
		top:687px; 
		width:172px; 
		height:49px; 
		cursor:pointer;
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
		left:281px; 
		top:687px; 
		width:173px; 
		height:49px; 
		cursor:pointer;
	}
	#p3:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}


</style>
<body>
	<form name="myform" action="" method="post">
		<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
			<div style="background-image:url(filtroAvanzado_01.png); position:absolute; left:0px; top:0px; width:1024px; height:40px;">
			</div>
			<div style="background-image:url(filtroAvanzado_02.png); position:absolute; left:0px; top:40px; width:632px; height:157px;">
			</div>
			<div id="p" onClick="location.href='../Seleccion2/seleccion.php';" style="background-image:url(filtroAvanzado_03.png);" >
			</div>
			<div style="background-image:url(filtroAvanzado_04.png); position:absolute; left:794px; top:40px; width:32px; height:157px;">
			</div>
			<div id="p1" style="background-image:url(filtroAvanzado_05.png);" onClick="location.href='../Bienvenido/bienvenido.php';">
			</div>
			<div style="background-image:url(filtroAvanzado_06.png); position:absolute; left:980px; top:40px; width:44px; height:728px;">
			</div>
			<div style="background-image:url(filtroAvanzado_07.png); position:absolute; left:632px; top:116px; width:162px; height:81px;">
			</div>
			<div style="background-image:url(filtroAvanzado_08.png); position:absolute; left:826px; top:116px; width:154px; height:81px;">
			</div>
			<div style="background-image:url(filtroAvanzado_09.png); position:absolute; left:0px; top:197px; width:389px; height:490px;">
			</div>
			<div style="background-image:url(filtroAvanzado_10.png); position:absolute; left:389px; top:197px; width:149px; height:30px;">
				<label>
					<input placeholder="Haga click para editar" id="company" name="company" tabindex="2" style="width:149px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_11.png); position:absolute; left:538px; top:197px; width:13px; height:571px;">
			</div>
			<div style="background-image:url(filtroAvanzado_12.png); position:absolute; left:551px; top:197px; width:101px; height:30px;">
				<select name="ritmoVentas" id="ritmoVentas" onchange="enabledisabletext()" style="left:800px; top:197px; width:101px;">
					<option>Seleccionar</option>
					<option value="Mayor">Mayor Que</option>
					<option value="Entre">Entre</option>
					<option value="Menor">Menor Que</option>
				</select>
			</div>

			<div style="background-image:url(filtroAvanzado_13.png); position:absolute; left:652px; top:197px; width:14px; height:571px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_14.png); position:absolute; left:666px; top:197px; width:76px; height:30px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="desdeRitmoVentas" name="desdeRitmoVentas" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_15.png); position:absolute; left:742px; top:197px; width:14px; height:571px;">
			</div>
			<div style="background-image:url(filtroAvanzado_16.png); position:absolute; left:756px; top:197px; width:75px; height:30px;">
				<label>
					<input type="number" placeholder="Valor" id="hastaRitmoVentas" name="hastaRitmoVentas" style="width:75px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_17.png); position:absolute; left:831px; top:197px; width:149px; height:571px;">
			</div>
			<div style="background-image:url(filtroAvanzado_18.png); position:absolute; left:389px; top:227px; width:149px; height:17px;">
			</div>
			<div style="background-image:url(filtroAvanzado_19.png); position:absolute; left:551px; top:227px; width:101px; height:17px;">
			</div>
			<div style="background-image:url(filtroAvanzado_20.png); position:absolute; left:666px; top:227px; width:76px; height:17px;">
			</div>
			<div style="background-image:url(filtroAvanzado_21.png); position:absolute; left:756px; top:227px; width:75px; height:17px;">
			</div>
			<div style="background-image:url(filtroAvanzado_22.png); position:absolute; left:389px; top:244px; width:149px; height:30px;">
				<label>
					<input placeholder="Haga click para editar" id="company" name="company" tabindex="2" style="width:149px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_23.png); position:absolute; left:551px; top:244px; width:101px; height:30px;">
				<select name="costoDirecto" id="costoDirecto" onchange="enabledisabletext()" style="left:800px; top:197px; width:101px;">
					<option>Seleccionar</option>
					<option value="Mayor">Mayor Que</option>
					<option value="Entre">Entre</option>
					<option value="Menor">Menor Que</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_24.png); position:absolute; left:666px; top:244px; width:76px; height:30px;">
				<label>
					<input type="number" placeholder="Valor" id="desdeCostoDirecto" name="desdeCostoDirecto" tabindex="2" style="width:76px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_25.png); position:absolute; left:756px; top:244px; width:75px; height:30px;">
				<label>
					<input type="number" placeholder="Valor" id="hastaCostoDirecto" name="hastaCostoDirecto" tabindex="2" style="width:76px; height:30px;">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_26.png); position:absolute; left:389px; top:274px; width:149px; height:16px;">
			</div>
			<div style="background-image:url(filtroAvanzado_27.png); position:absolute; left:551px; top:274px; width:101px; height:16px;">
			</div>
			<div style="background-image:url(filtroAvanzado_28.png); position:absolute; left:666px; top:274px; width:76px; height:16px;">
			</div>
			<div style="background-image:url(filtroAvanzado_29.png); position:absolute; left:756px; top:274px; width:75px; height:16px;">
			</div>
			<div style="background-image:url(filtroAvanzado_30.png); position:absolute; left:389px; top:290px; width:149px; height:31px;">
				<label>
					<input placeholder="Haga click para editar" id="company" name="company" tabindex="2" style="width:149px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_31.png); position:absolute; left:551px; top:290px; width:101px; height:31px;">
				<select name="vendibleVentas" id="vendibleVentas" onchange="enabledisabletext()" style="left:800px; top:197px; width:101px;">
					<option>Seleccionar</option>
					<option value="Mayor">Mayor Que</option>
					<option value="Entre">Entre</option>
					<option value="Menor">Menor Que</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_32.png); position:absolute; left:666px; top:290px; width:76px; height:31px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="desdeVendibleVentas" name="desdeVendibleVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_33.png); position:absolute; left:756px; top:290px; width:75px; height:31px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="hastaVendibleVentas" name="hastaVendibleVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_34.png); position:absolute; left:389px; top:321px; width:149px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_35.png); position:absolute; left:551px; top:321px; width:101px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_36.png); position:absolute; left:666px; top:321px; width:76px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_37.png); position:absolute; left:756px; top:321px; width:75px; height:19px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_38.png); position:absolute; left:389px; top:340px; width:149px; height:30px;">
				<label>
					<input placeholder="Haga click para editar" id="company" name="company" tabindex="2" style="width:149px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_39.png); position:absolute; left:551px; top:340px; width:101px; height:30px;">
				<select name="unidadCostoVentas" id="unidadCostoVentas" onchange="enabledisabletext()" style="left:800px; top:197px; width:101px;">
					<option>Seleccionar</option>
					<option value="Mayor">Mayor Que</option>
					<option value="Entre">Entre</option>
					<option value="Menor">Menor Que</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_40.png); position:absolute; left:666px; top:340px; width:76px; height:30px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="desdeUnidadCostoVentas" name="desdeUnidadCostoVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_41.png); position:absolute; left:756px; top:340px; width:75px; height:30px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="hastaUnidadCostoVentas" name="hastaUnidadCostoVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_42.png); position:absolute; left:389px; top:370px; width:149px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_43.png); position:absolute; left:551px; top:370px; width:101px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_44.png); position:absolute; left:666px; top:370px; width:76px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_45.png); position:absolute; left:756px; top:370px; width:75px; height:14px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_46.png); position:absolute; left:389px; top:384px; width:149px; height:30px;" title="">
				<label>
					<input placeholder="Haga click para editar" id="company" name="company" tabindex="2" style="width:149px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_47.png); position:absolute; left:551px; top:384px; width:101px; height:30px;">
				<select name="costoVentas" id="costoVentas" onchange="enabledisabletext()" style="left:800px; top:197px; width:101px;">
					<option>Seleccionar</option>
					<option value="Mayor">Mayor Que</option>
					<option value="Entre">Entre</option>
					<option value="Menor">Menor Que</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_48.png); position:absolute; left:666px; top:384px; width:76px; height:30px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="desdeCostoVentas" name="desdeCostoVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_49.png); position:absolute; left:756px; top:384px; width:75px; height:30px;" title="">
				<label>
					<input type="number" placeholder="Valor" id="hastaCostoVentas" name="hastaCostoVentas" tabindex="2" style="width:76px; height:30px">
				</label>
			</div>
			<div style="background-image:url(filtroAvanzado_50.png); position:absolute; left:389px; top:414px; width:149px; height:28px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_51.png); position:absolute; left:551px; top:414px; width:101px; height:354px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_52.png); position:absolute; left:666px; top:414px; width:76px; height:354px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_53.png); position:absolute; left:756px; top:414px; width:75px; height:354px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_54.png); position:absolute; left:389px; top:442px; width:149px; height:30px;" title="">
							<select tabindex="5" style="width:149px;">
					<option>Seleccionar</option>
					<option>Colombia</option>
					<option>Per&uacute;</option>
					<option>M&eacute;xico</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_55.png); position:absolute; left:389px; top:472px; width:149px; height:16px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_56.png); position:absolute; left:389px; top:488px; width:149px; height:31px;" title="">
										<select tabindex="5" style="width:149px;">
					<option>Seleccionar</option>
					<option>Bogot&aacute;</option>
					<option>Cali</option>
					<option>Medell&iacute;n</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_57.png); position:absolute; left:389px; top:519px; width:149px; height:17px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_58.png); position:absolute; left:389px; top:536px; width:149px; height:31px;" title="">
				<select tabindex="5" style="width:149px;">
					<option>Seleccionar</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_59.png); position:absolute; left:389px; top:567px; width:149px; height:16px;" title="">
			</div>
			<div style="background-image:url(filtroAvanzado_60.png); position:absolute; left:389px; top:583px; width:149px; height:31px;" title="">
				<select tabindex="5" style="width:149px;">
					<option>Seleccionar</option>
					<option>Con Socios</option>
					<option>Propio</option>
				</select>
			</div>
			<div style="background-image:url(filtroAvanzado_61.png); position:absolute; left:389px; top:614px; width:149px; height:73px;">
			</div>
			<div style="background-image:url(filtroAvanzado_62.png); position:absolute; left:0px; top:687px; width:46px; height:81px;">
			</div>
			<div id="p2" style="background-image:url(filtroAvanzado_63.png);" onclick="location.href='../Seleccion2/seleccion.php'">

			</div>
			<div style="background-image:url(filtroAvanzado_64.png); position:absolute; left:218px; top:687px; width:63px; height:81px;">
			</div>
			<div id="p3" style="background-image:url(filtroAvanzado_65.png);" onclick="location.href='http://modelo-c.distcol.com'"	>
			</div>
			<div style="background-image:url(filtroAvanzado_66.png); position:absolute; left:454px; top:687px; width:84px; height:81px;">
			</div>
			<div style="background-image:url(filtroAvanzado_67.png); position:absolute; left:46px; top:736px; width:172px; height:32px;">
			</div>
			<div style="background-image:url(filtroAvanzado_68.png); position:absolute; left:281px; top:736px; width:173px; height:32px;">
			</div>
		</div>
	</form>
</body>
</html>
<script language="javascript">
	function enabledisabletext()
	{
		// INICIO RITMO VENTAS //
		if(document.myform.ritmoVentas.value=='Mayor')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=true;
			document.myform.hastaRitmoVentas.value=0;
		}
		if(document.myform.ritmoVentas.value=='Menor')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=true;
			document.myform.hastaRitmoVentas.value=0;
		}
		if(document.myform.ritmoVentas.value=='Entre')
		{
			document.myform.desdeRitmoVentas.disabled=false;
			document.myform.hastaRitmoVentas.disabled=false;
		}
		// FIN RITMO VENTAS //

		// INICIO VENDIBLE COSTO DIRECTO //
		if(document.myform.costoDirecto.value=='Mayor')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=true;
			document.myform.hastaCostoDirecto.value=0;
		}
		if(document.myform.costoDirecto.value=='Menor')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=true;
			document.myform.hastaCostoDirecto.value=0;
		}
		if(document.myform.costoDirecto.value=='Entre')
		{
			document.myform.desdeCostoDirecto.disabled=false;
			document.myform.hastaCostoDirecto.disabled=false;
		}
		// FIN VENDIBLE COSTO DIRECTO //

		// INICIO VENDIBLE VENTAS //
		if(document.myform.vendibleVentas.value=='Mayor')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=true;
			document.myform.hastaVendibleVentas.value=0;
		}
		if(document.myform.vendibleVentas.value=='Menor')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=true;
			document.myform.hastaVendibleVentas.value=0;
		}
		if(document.myform.vendibleVentas.value=='Entre')
		{
			document.myform.desdeVendibleVentas.disabled=false;
			document.myform.hastaVendibleVentas.disabled=false;
		}
		// FIN VENDIBLE VENTAS //

		// INICIO UNIDAD COSTO VENTAS //
		if(document.myform.unidadCostoVentas.value=='Mayor')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=true;
			document.myform.hastaUnidadCostoVentas.value=0;
		}
		if(document.myform.unidadCostoVentas.value=='Menor')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=true;
			document.myform.hastaUnidadCostoVentas.value=0;
		}
		if(document.myform.unidadCostoVentas.value=='Entre')
		{
			document.myform.desdeUnidadCostoVentas.disabled=false;
			document.myform.hastaUnidadCostoVentas.disabled=false;
		}
		// FIN UNIDAD COSTO VENTAS //

		// INICIO COSTO VENTAS //
		if(document.myform.costoVentas.value=='Mayor')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=true;
			document.myform.hastaCostoVentas.value=0;
		}
		if(document.myform.costoVentas.value=='Menor')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=true;
			document.myform.hastaCostoVentas.value=0;
		}
		if(document.myform.costoVentas.value=='Entre')
		{
			document.myform.desdeCostoVentas.disabled=false;
			document.myform.hastaCostoVentas.disabled=false;
		}
		// FIN COSTO VENTAS //
	}
</script>