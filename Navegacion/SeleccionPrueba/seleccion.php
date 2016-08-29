<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA</title>
</head>
<body>
<div>
	
	<form id="form1" name="form1" method="post" action="EnvioDatos.php">

	<input type="submit" name="enviar" id="enviar" value="Enviar">
	<p>GENERACION</p>

		<input type="date" name="genedesde" style="left:218px; top:193px; width:130px; height:30px;" />

		<input type="date" name="genehasta" style="left:369px; top:193px; width:130px; height:30px;" />

	<p>VENTAS</p>
		
		<input type="date" name = "ventasdesde" style ="left:218px; top:242px; width:130px; height:30px;" />

		<input type="date" name = "ventashasta" style ="left:369px; top:242px; width:130px; height:30px;" />
	

	<p>CONTRUCCION</p>

		<input type="date" name="constdesde" style="left:218px; top:290px; width:130px; height:31px;"  />

		<input type="date" name="consthasta" style="left:369px; top:290px; width:130px; height:31px;" />

	<p>PRESUPUESTO</p>

		<input type="date" name="prepdesde" style="left:218px; top:340px; width:130px; height:30px;"  />

		<input type="date" name="prephasta" style="left:369px; top:340px; width:130px; height:30px;"  />

	<p>PERIODICIDAD</p>

		<select name="periodicidad" style="left:800px; top:193px; width:190px; height:30px;"  >
							  <option value="Mensual">Mensual</option>
							  <option value="Bimensual">Bimensual</option>
							  <option value="Trimestral">Trimestral</option>
							  <option value="Semestral">Semestral</option>
							  <option value="Anual">Anual</option>
							  <option value="Quinquenio">Quinquenio</option>  
		</select>
		
	<p>UNIDAD PRESENTACION</p>

		<select name="unidadpresentacion" style="left:800px; top:193px; width:190px; height:30px;" >
							  <option value="miles">Miles</option>
							  <option value="cientos">Cientos</option>
							  <option value="millones">Millones</option>
		</select>


	<p>MONEDA REEXPRESION</p>

	<input type="text" name="monedareexpresion" id="monedaree" maxlength="4" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:800px; top:244px; width:190px; height:30px;" />

	<p>RITMO VENTAS</p>

		<select style="left:800px; top:193px; width:190px; height:30px;"  name="ritmoventas" >
							 
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


	<p>%VENTAS NUEVO HOGAR</p>

		<input type="number" name="nuevohogar" step="0.01" maxlength="4" style="left:800px; top:385px; width:190px; height:30px;" placeholder="Ingrese porcentaje"  />


	<p>PROYECTO</p>

	<input type="text" maxlength="4" name="proyecto" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:800px; top:435px; width:190px; height:30px;" />

	<p>VERSION</p>

		<input type="text" name="version" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:800px; top:487px; width:190px; height:30px;" />

	<p>TITULO INFORME</p>

		<input type="text" maxlength="45" name="tituloinforme" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:288px; top:578px; width:699px; height:49px; font-size:20px ; font-family: verdana;" />
</div>
</body>
</html>

			

