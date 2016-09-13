
<!-- saved from url=(0109)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/carga%20automatica_001/carga%20automatica.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Carga Autom&aacute;tica</title>
</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
 input[type=submit]{
	background-image:url(carga-automatica_14.png); position:absolute; left:321px; top:462px; width:383px; height:67px;
	 
	 
		border: 0 none;
		
		opacity: 1.0 ;
	}

	input[type=submit]:hover
	{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		color: transparent;
		
	}

	
input[type=file]{
		 background-image:url(carga-automatica_10.png); position:absolute; left:168px; top:309px; width:689px; height:62px;
	 
	 
		border: 0 none;
		
		opacity: 0 ;
		}

	input[type=file]:hover
	{
		opacity: 1.0 ;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		color: transparent;
			opacity: 0;
	}
	#p1{position:absolute; left:640px; top:42px; width:162px; height:76px;cursor: pointer;}
	#p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p2{position:absolute; left:823px; top:42px; width:165px; height:76px;cursor: pointer;}
	#p2:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}

</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(carga-automatica_01.png); position:absolute; left:0px; top:0px; width:1024px; height:42px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_02.png); position:absolute; left:0px; top:42px; width:640px; height:267px;" title="">
	</div>
	<div id="p1" style="background-image:url(carga-automatica_03.png);" onclick="location.href='../Carga/carga.php'" title="">
	</div>
	<div style="background-image:url(carga-automatica_04.png); position:absolute; left:802px; top:42px; width:21px; height:267px;" title="">
	</div>
	<div id="p2" style="background-image:url(carga-automatica_05.png);" onclick="location.href='../Bienvenido/bienvenido.php'" title="">
	</div>
	<div style="background-image:url(carga-automatica_06.png); position:absolute; left:988px; top:42px; width:36px; height:726px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_07.png); position:absolute; left:640px; top:118px; width:162px; height:191px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_08.png); position:absolute; left:823px; top:118px; width:165px; height:191px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_09.png); position:absolute; left:0px; top:309px; width:168px; height:459px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_10.png); position:absolute; left:168px; top:309px; width:689px; height:62px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_11.png); position:absolute; left:857px; top:309px; width:131px; height:459px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_12.png); position:absolute; left:168px; top:371px; width:689px; height:91px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_13.png); position:absolute; left:168px; top:462px; width:153px; height:306px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_14.png); position:absolute; left:321px; top:462px; width:383px; height:67px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_15.png); position:absolute; left:704px; top:462px; width:153px; height:306px;" title="">
	</div>
	<div style="background-image:url(carga-automatica_16.png); position:absolute; left:321px; top:529px; width:383px; height:239px;" title="">
	</div>
	<form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
        <input class="button" type="submit" value="" />
    </form>
 
<?php
ini_set('memory_limit', '-1');
 		

set_time_limit(0);
session_start();
error_reporting(0);	

function listar($ruta){
if (is_dir($ruta)) {
if ($dir = opendir($ruta)) {
echo "<p>";
while (($file = readdir($dir)) !== false) {
if ($file != "." && $file != "..") {
echo "<br>$file - " . filetype($ruta . $file); 
}
}
echo "</p>";
closedir($dir);
}
}
else
echo "<br>No es ruta valida";
} 
$done=0;
$sobre=0;
$errorproyecto =0;
$errornombre =0;
$errortipo=0;
$erroretapa=0;
$errorfind=0;
$count = 0;
$exito = 0;
$test=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach ($_FILES['files']['name'] as $i => $name) {
		if (strlen($_FILES['files']['name'][$i]) > 1) {
		//subir la imagen del articulo
		$_SESSION['contador']=$_SESSION['contador']+1;
		$test++;
		$nameEXCEL = $_FILES['files']['name'][$i];
				list($a,$b)= explode(" ",$nameEXCEL);
				
				list($c,$d)= explode(".",$nameEXCEL);
				list($proyecto,$etapa,$num1)= explode("-",$b);
		

		$tmpEXCEL = $_FILES['files']['tmp_name'][$i];
		$extEXCEL = pathinfo($nameEXCEL);
		$urlnueva = "../../xls/55CN-001-CTRL_09.xls";


			if($a=="CNS"){	

				if($d=="xlsx"){		
				//verificacion si se ha subido un archivo
					if(is_uploaded_file($tmpEXCEL)){
					copy($tmpEXCEL,$urlnueva);	
					require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
					$objPHPExcel = PHPExcel_IOFactory::load('../../xls/55CN-001-CTRL_09.xls');
					include "../../php/conexion.php";	
					$tb_proyecto = "SELECT * FROM tb_proyecto WHERE PRO_ID = '$proyecto'";
					$resultado_tb=$mysqli -> query($tb_proyecto);
					$nom_pro;


					//verificacion si existe o no el proyecto a subir	
					if($resultado_tb->num_rows <1 ){
					$errorproyecto++;
					}				
						else{
							while ($fila = $resultado_tb->fetch_array()) {
							$nom_pro=$fila['PRO_DESCRIPCION'];
							}

							$tb_etapa = "SELECT * FROM tb_detalle_proyecto WHERE DET_PRO_ID = '$proyecto' AND DET_ETAPA = $etapa";
							$resultado_et=$mysqli -> query($tb_etapa);

							//verificacion si existe o no la etapa del proyecto a subir

							if($resultado_et->num_rows <1 ){
							$erroretapa++;
							}			

							else{

							$pages=0;

							$check_model=0;
							//Verificacion Modelo A-B
							foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
							$worksheetTitle = $worksheet->getTitle();
							$pages++;

							if($worksheetTitle=="Resumen Comp."){
							$check_model++;

							}


							}		
							$modelo;
							$ofl_var;



							$loadedSheetNames = $objPHPExcel->getSheetNames();

							if($check_model==1){
							$modelo="A";
							$ofl_var=4;
							$ofl_i=4;
							$flc_i=4;
							//Verificacion de las hojas
							if(!$loadedSheetNames[0]=="Flujo Caja Terreno"){

							$errorfind++;	//print "<script>alert(\"Error en el momento de encontrar la hoja Flujo Caja Terreno\");</script>";
							exit;
							}

							if(!$loadedSheetNames[1]=="Flujo Caja"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Flujo Caja\");</script>";
							exit;
							}

							if(!$loadedSheetNames[2]=="Resumen"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Resumen\");</script>";
							exit;
							}

							if(!$loadedSheetNames[4]=="Otros Flujos"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Otros Flujos\");</script>";
							exit;
							}

							}

							else{
							$modelo="B";
							$ofl_var=3;
							$ofl_i=9;
							$flc_i=11;
							//Verificacion de las hojas
							if(!$loadedSheetNames[0]=="Flujo Caja Terreno"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Flujo Caja Terreno\");</script>";
							exit;
							}

							if(!$loadedSheetNames[1]=="P1-Flujo Caja"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Flujo Caja\");</script>";
							exit;
							}

							if(!$loadedSheetNames[2]=="P1-Resumen"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Resumen\");</script>";
							exit;
							}

							if(!$loadedSheetNames[3]=="P1-Otros Flujos"){

							$errorfind++;	//	print "<script>alert(\"Error en el momento de encontrar la hoja Otros Flujos\");</script>";
							exit;
							}



							}


							$check_overwrite_fct= "SELECT * FROM tb_flujo_caja_terreno WHERE FCT_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa";
							$check_overwrite_fc="SELECT * FROM tb_flujo_caja WHERE F_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa";

							//Verificacion si el usuario indico la sobreescritura de los datos
							$resultado_tb=$mysqli -> query($check_overwrite_fct);






							if($resultado_tb->num_rows >0 ){



							//Eliminacion de informacion para luego reemplazar
							$delete_fct="DELETE  FROM tb_flujo_caja WHERE FLC_DET_PRO_ID= '$proyecto' AND FLC_DET_ETAPA=$etapa AND FLC_MODELO='$modelo' ";
							$delete_flc="DELETE  FROM tb_flujo_caja_terreno WHERE FCT_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa AND FCT_MODELO='$modelo'";
							$delete_res="DELETE  FROM tb_resumen WHERE RES_DET_PRO_ID= '$proyecto' AND RES_DET_ETAPA=$etapa AND RES_MODELO='$modelo'";
							$delete_ofl="DELETE  FROM tb_otros_flujos WHERE OFL_DET_PRO_ID= '$proyecto' AND OFL_DET_ETAPA=$etapa AND OFL_MODELO='$modelo'";
							$delete_mod="DELETE  FROM tb_modelos WHERE MOD_DET_PRO_ID= '$proyecto' AND MOD_DET_ETAPA=$etapa AND MOD_MODELO='$modelo'";

							if(!$resultado_res= $mysqli -> query($delete_fct)){
							//echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_res= $mysqli -> query($delete_flc)){
							//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_res= $mysqli -> query($delete_res)){
							//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_res= $mysqli -> query($delete_ofl)){
							//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							if(!$resultado_mod= $mysqli -> query($delete_mod)){
							//echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}





							//---------Inicio Agregar datos			

							//Ingreso de la informacion teniendo en cuenta las distintas hojas
							//--------------------------Flujo Caja Terreno
							FlujoCajaTerreno($objPHPExcel,$proyecto,$etapa,$modelo,$mysqli);
							//--------------------------------FLUJO CAJA-----------------------
							FlujoCaja($objPHPExcel,$flc_i,$proyecto,$etapa,$modelo,$mysqli);
							//----------------------------------RESUMEN---------------------
							Resumen($objPHPExcel,$check_model,$proyecto,$etapa,$modelo,$mysqli);
							//---------------------OTROS FLUJOS-----------------------
							OtrosFlujos($objPHPExcel,$ofl_i,$ofl_var,$proyecto,$etapa,$modelo,$mysqli);	
							//------------Fin ingreso datos 

							$envio_Tb_modelos="INSERT INTO tb_modelos (MOD_DET_PRO_ID, MOD_DET_ETAPA, MOD_MODELO)
							VALUES ('$proyecto',$etapa,'$modelo')";	
							$resultado_mod=false;
							if(!$resultado_mod= $mysqli -> query($envio_Tb_modelos)){
							//		echo('There was an error running the query [' . $mysqli->error . '].</br>');

							}		IF($resultado_mod==TRUE){
								$sobre++;
								$exito++;
								$_SESSION['terminado']=$_SESSION['terminado']+1;
								$b=$b+1;
							
							//		echo '<script type="text/javascript">alert("Se ha subido el proyecto '.$nom_pro.' y la etapa '.$etapa.'");</script>';
							}

							}
							else{


							//---------Inicio Agregar datos			

							//Ingreso de la informacion teniendo en cuenta las distintas hojas

							//--------------------------Flujo Caja Terreno
							FlujoCajaTerreno($objPHPExcel,$proyecto,$etapa,$modelo,$mysqli);
							//--------------------------------FLUJO CAJA-----------------------
							FlujoCaja($objPHPExcel,$flc_i,$proyecto,$etapa,$modelo,$mysqli);
							//----------------------------------RESUMEN---------------------
							Resumen($objPHPExcel,$check_model,$proyecto,$etapa,$modelo,$mysqli);
							//---------------------OTROS FLUJOS-----------------------
							OtrosFlujos($objPHPExcel,$ofl_i,$ofl_var,$proyecto,$etapa,$modelo,$mysqli);	
							//------------Fin ingreso datos 


							$envio_Tb_modelos="INSERT INTO tb_modelos (MOD_DET_PRO_ID, MOD_DET_ETAPA, MOD_MODELO)
							VALUES ('$proyecto',$etapa,'$modelo')";

							$resultado_mod=false;
							if(!$resultado_mod= $mysqli -> query($envio_Tb_modelos)){
							//		echo('There was an error running the query [' . $mysqli->error . '].</br>');

							}		

							IF($resultado_mod==TRUE){
							$exito++;
							$_SESSION['terminado']=$_SESSION['terminado']+1;
							$b=$b+1;
						//	echo '<script type="text/javascript">alert("Se ha subido el proyecto '.$nom_pro.' y la etapa '.$etapa.'");</script>';
						
							}


							}
							}

							}
							}			
						}
					else{
				$errortipo++;
				}
				}





		else{
		$errornombre++;
		}






		//Verificacion de las fechas


$done=1;

		}
	}
	
}

if($test!=0) { 

	//echo '<script type="text/javascript">alert("Se ha subido el proyecto '.$nom_pro.' y la etapa '.$etapa.'");</script>';

	echo '<script type="text/javascript">alert(" Sobreescritos '. $sobre.'\n Error Proyecto No existe '.$errorproyecto.'\n Error Etapa no exite '.$erroretapa.' \n Error Nombre Invalido '.$errornombre.'\n Error tipo archivo '.$errortipo. '\n Error al encontrar una hoja '. $errorfind.'\n Archivos exitosos '.$exito.'");</script>';



}
			
	function cambiarFecha($fecha){
							
							list($mes,$anio) = explode("-",$fecha);
							switch ($mes) {
    							case 'Jan':
    							    $fechaF = "01/01/".$anio;
    								return $fechaF;
    								break;
    							case 'Feb':
    								$fechaF = "01/02/".$anio;
    								return $fechaF;
    								break;
    							case 'Mar':
    								$fechaF = "01/03/".$anio;
    								return $fechaF;
    								break;
    							case 'Apr':
    								$fechaF = "01/04/".$anio;
    								return $fechaF;
    								break;
    							case 'May':
    								$fechaF = "01/05/".$anio;
    								return $fechaF;
    								break;
    							case 'Jun':
    								$fechaF = "01/06/".$anio;
    								return $fechaF;
    								break;
    							case 'Jul':
    								$fechaF = "01/07/".$anio;
    								return $fechaF;
    								break;
    							case 'Aug':
    								$fechaF = "01/08/".$anio;
    								return $fechaF;
    								break;
    							case 'Sep':
    								$fechaF = "01/09/".$anio;
    								return $fechaF;
    								break;
    							case 'Oct':
    								$fechaF = "01/10/".$anio;
    								return $fechaF;
    								break;
    							case 'Nov':
    								$fechaF = "01/11/".$anio;
    								return $fechaF;
    								break;
    							case 'Dec':
    								$fechaF = "01/12/".$anio;
    								return $fechaF;
    								break;
    							default:
    								$fechaF = "FECHA INVALIDA";
    								return $fechaF;
    								break;
    						}

						}
				########## FIN -- FUNCION CONVERSION DE FECHAS -- FIN ################
	
	
				function FlujoCajaTerreno($objPHPExcel,$proyecto,$etapa,$modelo,$mysqli){
					
							
					//------------------------FLUJO CAJA TERRENO-------------------
								$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
								$fct_i=6;
								
								$fct_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 3)->getValue();	
								
								while ($fct_check!=null) {
								$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
								$fct_id=$proyecto;		
								$fct_det_etapa=$etapa;	
								$fct_modelo=$modelo;
								
								$fct_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 3)->getValue();	
								
								$fct_fecha=$objWorksheet->getCellByColumnAndRow($fct_i, 3)->getFormattedValue();
								$fct_fecha2=cambiarFecha($fct_fecha);
								
								$fct_fecha=$fct_fecha2;
							
							//Toma la informacion cenda por celda
							
								$fct_valor_adquisicion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 5)->getValue();	
								$fct_vap_anticipo_otros_pagos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 6)->getValue();	
								$fct_vap_abonos_pactados_por_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 7)->getValue();	
								$fct_costos_urbanismo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 8)->getValue();
								$fct_cu_inversion_mensual = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 9)->getValue();
								$fct_cu_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 10)->getValue();
								$fct_costos_infraestructura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 11)->getValue();
								$fct_ci_inversion_mensual = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 12)->getValue();
								$fct_ci_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 13)->getValue();
								$fct_ci_recuperacion_costos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 14)->getValue();
								$fct_gastos_imprevistos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 15)->getValue();
								$fct_costo_directo_urbanismo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 16)->getValue();
								$fct_honorarios_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 17)->getValue();
								$fct_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 18)->getValue();
								$fct_otros_honorarios_terceros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 19)->getValue();
								$fct_licencia_urbanismo_otros_costos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 20)->getValue();
								$fct_gastos_legales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 21)->getValue();
								$fct_gl_hipoteca_credito_compra_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 22)->getValue();
								$fct_gl_gastos_notariales_registro_compra_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 23)->getValue();
								$fct_gl_impuesto_predial = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 24)->getValue();
								$fct_gastos_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 25)->getValue();
								$fct_gf_intereses_credito_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 26)->getValue();
								$fct_gf_correccion_monetaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 27)->getValue();
								$fct_gf_otros_costos_credito_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 28)->getValue();
								$fct_gf_impuesto_transacciones_financieras = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 29)->getValue();
								$fct_otros_costos= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 30)->getValue();
								$fct_oc_costos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 31)->getValue();
								$fct_oc_costos2= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 32)->getValue();
								$fct_valor_terreno_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 33)->getValue();
								$fct_otros_gastos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 34)->getValue();
								$fct_og_otros_gastos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 35)->getValue();
								$fct_og_otros_gastos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 36)->getValue();
								$fct_valor_total_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 37)->getValue();
								$fct_total_egresos_sin_correccion_monetaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 38)->getValue();
								$fct_desembolso_credito_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 39)->getValue();
								$fct_abonos_al_credito = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 40)->getValue();
								$fct_aal_abonos_programados_credito_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 41)->getValue();
								$fct_aal_abonos_disponibilidad_caja_y_cancelacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 42)->getValue();
								$fct_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 43)->getValue();
								$fct_oi_otros_ingresos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 44)->getValue();
								$fct_oi_otros_ingresos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 45)->getValue();
								$fct_traslado_terreno_a_subproyectos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 46)->getValue();
								$fct_total_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 47)->getValue();
								$fct_flujo_neto_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 48)->getValue();
								$fct_flujo_acumulado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fct_i, 49)->getValue();
								$fct_vpn = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, 52)->getValue();
								$fct_tir_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 52)->getValue();
								$fct_tir_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 52)->getValue();
								$fct_tir_mod_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 52)->getValue();
								$fct_tir_mod_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 52)->getValue();

										//---------------Check Nulls---------------
								
								
										if($fct_valor_adquisicion==null){
											$fct_valor_adquisicion=0;
										}
										if($fct_vap_anticipo_otros_pagos==null){
											$fct_vap_anticipo_otros_pagos=0;
										}
										if($fct_vap_anticipo_otros_pagos==null){
											$fct_vap_anticipo_otros_pagos=0;
										}
										
										if($fct_vap_abonos_pactados_por_ventas ==null){
											$fct_vap_abonos_pactados_por_ventas =0;
										}
										
										if($fct_costos_urbanismo ==null){
											$fct_costos_urbanismo =0;
										}
										
										if($fct_cu_inversion_mensual ==null){
											$fct_cu_inversion_mensual =0;
										}
										
										if($fct_cu_incrementos==null){
											$fct_cu_incrementos=0;
										}
										
										if($fct_costos_infraestructura ==null){
											$fct_costos_infraestructura =0;
										}
										
										if($fct_ci_inversion_mensual ==null){
											$fct_ci_inversion_mensual =0;
										}
										
										if($fct_ci_incrementos ==null){
											$fct_ci_incrementos =0;
										}
										
										if($fct_ci_recuperacion_costos==null){
											$fct_ci_recuperacion_costos=0;
										}
										
										if($fct_gastos_imprevistos==null){
											$fct_gastos_imprevistos=0;
										}
										
										if($fct_costo_directo_urbanismo==null){
											$fct_costo_directo_urbanismo=0;
										}
										if($fct_honorarios_construccion==null){
											$fct_honorarios_construccion=0;
										}
										
										if($fct_honorarios_interventoria==null){
											$fct_honorarios_interventoria=0;
										}
										 
										if($fct_otros_honorarios_terceros==null){
											$fct_otros_honorarios_terceros=0;
										}
										
										if($fct_licencia_urbanismo_otros_costos==null){
											$fct_licencia_urbanismo_otros_costos=0;
										}
										
										if($fct_gastos_legales ==null){
											$fct_gastos_legales =0;
										}
										
										if($fct_gl_hipoteca_credito_compra_terreno==null){
											$fct_gl_hipoteca_credito_compra_terreno=0;
										}
										
										if($fct_gl_gastos_notariales_registro_compra_terreno==null){
											$fct_gl_gastos_notariales_registro_compra_terreno=0;
										}
										
										if($fct_gl_impuesto_predial ==null){
											$fct_gl_impuesto_predial =0;
										}
										
										if($fct_gastos_financieros==null){
											$fct_gastos_financieros=0;
										}
										
										if($fct_gf_intereses_credito_terreno==null){
											$fct_gf_intereses_credito_terreno=0;
										}
										
										if($fct_gf_correccion_monetaria==null){
											$fct_gf_correccion_monetaria=0;
										}
										 
										if($fct_gf_otros_costos_credito_terreno==null){
											$fct_gf_otros_costos_credito_terreno=0;
										}
										
										if($fct_gf_impuesto_transacciones_financieras==null){
											$fct_gf_impuesto_transacciones_financieras=0;
										}
										
										if($fct_otros_costos==null){
											$fct_otros_costos=0;
										}
										
										if($fct_oc_costos1==null){
											$fct_oc_costos1=0;
										}
										
										if($fct_oc_costos2==null){
											$fct_oc_costos2=0;
										}
										
										if($fct_valor_terreno_urbanizado==null){
											$fct_valor_terreno_urbanizado=0;
										}
										
										if($fct_otros_gastos==null){
											$fct_otros_gastos=0;
										}
										 
										if($fct_og_otros_gastos1==null){
											$fct_og_otros_gastos1=0;
										}
										
										if($fct_og_otros_gastos2 ==null){
											$fct_og_otros_gastos2 =0;
										}
										
										if($fct_valor_total_terreno ==null){
											$fct_valor_total_terreno =0;
										}
										
										if($fct_total_egresos_sin_correccion_monetaria==null){
											$fct_total_egresos_sin_correccion_monetaria=0;
										}
										
										if($fct_desembolso_credito_terreno==null){
											$fct_desembolso_credito_terreno=0;
										}
										
										if($fct_abonos_al_credito==null){
											$fct_abonos_al_credito=0;
										}
										
										if($fct_aal_abonos_programados_credito_terreno==null){
											$fct_aal_abonos_programados_credito_terreno=0;
										}
										
										if($fct_aal_abonos_disponibilidad_caja_y_cancelacion==null){
											$fct_aal_abonos_disponibilidad_caja_y_cancelacion=0;
										}
										
										if($fct_otros_ingresos==null){
											$fct_otros_ingresos=0;
										}
										 
										if($fct_oi_otros_ingresos1==null){
											$fct_oi_otros_ingresos1=0;
										}
										
										if($fct_oi_otros_ingresos2==null){
											$fct_oi_otros_ingresos2=0;
										}
										
										if($fct_traslado_terreno_a_subproyectos==null){
											$fct_traslado_terreno_a_subproyectos=0;
										}
										
										if($fct_total_ingresos==null){
											$fct_total_ingresos=0;
										}
										
										if($fct_flujo_neto_caja==null){
											$fct_flujo_neto_caja=0;
										}
										
										if($fct_flujo_acumulado ==null){
											$fct_flujo_acumulado =0;
										}
										
										if($fct_vpn ==null){
											$fct_vpn =0;
										}
										
										if($fct_tir_ea ==null){
											$fct_tir_ea =0;
										}
										   
										if($fct_tir_em==null){
											$fct_tir_em=0;
										}
										
										if($fct_tir_mod_ea==null){
											$fct_tir_mod_ea=0;
										}
										
										if($fct_tir_mod_em==null){
											$fct_tir_mod_em=0;
										}
									//---------------Check Nulls---------------
								
								//Insercion de datos
								
								$envio_Tb_Flujo_Caja_Terreno="	INSERT INTO tb_flujo_caja_terreno(FCT_DET_PRO_ID, FCT_DET_ETAPA, FCT_MODELO, FCT_FECHA, 
								FCT_VALOR_ADQUISICION_PAGOS, FCT_VAP_ANTICIPO_OTROS_PAGOS, FCT_VAP_ABONOS_PACTADOS_POR_VENTAS, 
								FCT_COSTOS_URBANISMO, FCT_CU_INCREMENTOS, FCT_CU_INVERSION_MENSUAL, 
								FCT_COSTOS_INFRAESTRUCTURA, FCT_CI_INCREMENTOS, FCT_CI_RECUPERACION_COSTOS, 
								FCT_CI_INVERSION_MENSUAL, FCT_GASTOS_IMPREVISTOS, FCT_COSTO_DIRECTO_URBANISMO, FCT_HONORARIOS_CONSTRUCCION, 
								FCT_HONORARIOS_INTERVENTORIA, FCT_OTROS_HONORARIOS_TERCEROS, FCT_LICENCIA_URBANISMO_OTROS_COSTOS, FCT_GASTOS_LEGALES, 
								FCT_GL_HIPOTECA_CREDITO_COMPRA_TERRENO, FCT_GL_GASTOS_NOTARIALES_REGISTRO_COMPRA_TERRENO, FCT_GL_IMPUESTO_PREDIAL, 
								FCT_GASTOS_FINANCIEROS, FCT_GF_INTERESES_CREDITO_TERRENO, FCT_GF_CORRECION_MONETARIA, FCT_GF_OTROS_COSTOS_CREDITO_TERRENO, 
								FCT_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS, FCT_OTROS_COSTOS, FCT_OC_COSTOS1, FCT_OC_COSTOS2, FCT_VALOR_TERRENO_URBANIZADO, 
								FCT_OTROS_GASTOS, FCT_OG_OTROS_GASTOS1, FCT_OG_OTROS_GASTOS2, FCT_VALOR_TOTAL_TERRENO, FCT_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA, 
								FCT_DESEMBOLSOS_CREDITO_TERRENO, FCT_ABONOS_AL_CREDITO, FCT_AAL_ABONOS_PROGRAMADOS_CREDITO_TERRENO, 
								FCT_AAL_ABONOS_DISPONIBILIDAD_CAJA_Y_CANCELACION, FCT_OTROS_INGRESOS, FCT_OI_OTROS_INGRESOS1, FCT_OI_OTROS_INGRESOS2,
								FCT_TRASLADO_TERRENO_A_SUBPROYECTOS, FCT_TOTAL_INGRESOS, FCT_FLUJO_NETO_CAJA, FCT_FLUJO_ACUMULADO, FCT_VPN, FCT_TIR_EA,
								 FCT_TIR_EM, FCT_TIR_MOD_EA, FCT_TIR_MOD_EM) 
								 
								 
								 VALUES ( '$fct_id',$fct_det_etapa,'$fct_modelo',DATE_FORMAT('$fct_fecha','%d/%m/%y'),
								 $fct_valor_adquisicion,$fct_vap_anticipo_otros_pagos,$fct_vap_abonos_pactados_por_ventas,
								 $fct_costos_urbanismo,$fct_cu_incrementos,$fct_cu_inversion_mensual,
								 $fct_costos_infraestructura,$fct_ci_incrementos,$fct_ci_recuperacion_costos,
								 $fct_ci_inversion_mensual,$fct_gastos_imprevistos,$fct_costo_directo_urbanismo,$fct_honorarios_construccion,
								 $fct_honorarios_interventoria,$fct_otros_honorarios_terceros,$fct_licencia_urbanismo_otros_costos,$fct_gastos_legales,
								 $fct_gl_hipoteca_credito_compra_terreno,$fct_gl_gastos_notariales_registro_compra_terreno,$fct_gl_impuesto_predial,
								 $fct_gastos_financieros, $fct_gf_intereses_credito_terreno,$fct_gf_correccion_monetaria,$fct_gf_otros_costos_credito_terreno,
								 $fct_gf_impuesto_transacciones_financieras,$fct_otros_costos,$fct_oc_costos1,$fct_oc_costos2,$fct_valor_terreno_urbanizado,
								 $fct_otros_gastos,$fct_og_otros_gastos1,$fct_og_otros_gastos2,$fct_valor_total_terreno,$fct_total_egresos_sin_correccion_monetaria,
								 $fct_desembolso_credito_terreno,$fct_abonos_al_credito,$fct_aal_abonos_programados_credito_terreno,
								 $fct_aal_abonos_disponibilidad_caja_y_cancelacion,$fct_otros_ingresos,$fct_oi_otros_ingresos1,$fct_oi_otros_ingresos2,
								 $fct_traslado_terreno_a_subproyectos,$fct_total_ingresos,$fct_flujo_neto_caja,$fct_flujo_acumulado,$fct_vpn,$fct_tir_ea,
								 $fct_tir_em,$fct_tir_mod_ea,$fct_tir_mod_em)";
			 
									
									
									if(!$resultado_fct=$mysqli -> query($envio_Tb_Flujo_Caja_Terreno)){
								//	echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
									
								
								$fct_i++;
								}
									//------------------------FLUJO CAJA TERRENO-------------------
				}
								
				function FlujoCaja($objPHPExcel,$flc_i,$proyecto,$etapa,$modelo,$mysqli){
					
					require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
							
						$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
								
								$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 3)->getValue();	
								
							//Toma la informacion cenda por celda
								while ($flc_check!=null) {
									
								$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
								$flc_id=$proyecto;		
								$flc_det_etapa=$etapa;
								$flc_modelo=$modelo;
								
								$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 3)->getValue();	
								
								$flc_fecha=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 3)->getFormattedValue();	
								$flc_fecha2=cambiarFecha($flc_fecha);
								$flc_fecha=$flc_fecha2;
								$flc_urbanismo_interno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 5)->getValue();	
								$flc_ui_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 6)->getValue();	
								$flc_ui_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 7)->getValue();	
								$flc_costo_materiales_mano_obra = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 8)->getValue();
								$flc_cm_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 9)->getValue();
								$flc_cm_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 10)->getValue();
								$flc_gastos_imprevistos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 11)->getValue();
								$flc_costos_postventa = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 12)->getValue();
								$flc_costo_directo_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 13)->getValue();
								$flc_honorarios_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 14)->getValue();
								$flc_hc_honorarios_contruccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 15)->getValue();
								$flc_hc_gastos_reembolsable = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 16)->getValue();
								$flc_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 17)->getValue();
								$flc_hi_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 18)->getValue();
								$flc_hi_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 19)->getValue();
								$flc_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 20)->getValue();
								$flc_oh_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 21)->getValue();
								$flc_oh_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 22)->getValue();
								$flc_impuestos_y_derechos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 23)->getValue();
								$flc_costo_total_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 24)->getValue();
								$flc_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 25)->getValue();
								$flc_hg_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 26)->getValue();
								$flc_hg_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 27)->getValue();
								$flc_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 28)->getValue();
								$flc_hv_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 29)->getValue();
								$flc_hv_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 30)->getValue();
								$flc_costos_promocion_y_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 31)->getValue();
								$flc_cp_sala_de_ventas_unidades_modelo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 32)->getValue();
								$flc_cp_gastos_publicidad = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 33)->getValue();
								$flc_cp_gastos_sala_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 34)->getValue();
								$flc_cp_administracion_unidades_por_entregar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 35)->getValue();
								$flc_cp_comisiones_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 36)->getValue();
								$flc_gastos_legales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 37)->getValue();
								$flc_gl_hipotecas_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 38)->getValue();
								$flc_gl_notariales_registro_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 39)->getValue();
								$flc_gl_impuesto_predia_inmuebles_por_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 40)->getValue();
								$flc_gl_impuesto_ICA = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 41)->getValue();
								$flc_costo_total_antes_terreno_y_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 42)->getValue();
								$flc_valor_terreno_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 43)->getValue();
								$flc_vt_valor_adquisicion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 44)->getValue();
								$flc_vt_costos_urbanismo_y_otros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 45)->getValue();
								$flc_comisiones_fiducia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 46)->getValue();
								$flc_cf_preventas_y_administracion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 47)->getValue();
								$flc_cf_nuevogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 48)->getValue();
								$flc_gastos_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 49)->getValue();
								$flc_gf_intereses_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 50)->getValue();
								$flc_gf_otros_costos_credito = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 51)->getValue();
								$flc_gf_correccion_monetaria_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 52)->getValue();
								$flc_gf_impuesto_transacciones_financieras = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 53)->getValue();
								$flc_otros_costos_y_gastos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 54)->getValue();
								$flc_oc_costos_gastos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 55)->getValue();
								$flc_oc_costos_gastos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 56)->getValue();
								$flc_oc_costos_gastos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 57)->getValue();
								$flc_reintegros_iva_proyectos_vis = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 58)->getValue();
								$flc_costo_total_directos_e_indirectos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 59)->getValue();
								$flc_total_egresos_sin_correccion_monetaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 60)->getValue();
								$flc_desembolsos_creditos_constructor_y_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 61)->getValue();
								$flc_abonos_extraordinarios_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 62)->getValue();
								$flc_ingresos_por_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 63)->getValue();
								$flc_iv_abonos_separacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 64)->getValue();
								$flc_iv_cartera_cuota_inicial = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 65)->getValue();
								$flc_iv_saldo_cuota_inicial_y_abono_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 66)->getValue();
								$flc_iv_subsidio_vis_y_ahorro_programado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 67)->getValue();
								$flc_iv_excedentes_credito_compradores = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 68)->getValue();
								$flc_iv_giros_directos_creditos_otras_entidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 69)->getValue();
								$flc_iv_ingresos_por_recibir_ventas_realizadas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 70)->getValue();
								$flc_otros_ingresos_ventas_intereses = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 71)->getValue();
								$flc_oi_intereses_subrogacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 72)->getValue();
								$flc_oi_intereses_mora = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 73)->getValue();
								$flc_oi_ofertas_comerciales_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 74)->getValue();
								$flc_rendimientos_fideicomiso = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 75)->getValue();
								$flc_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 76)->getValue();
								$flc_oi_ingresos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 77)->getValue();
								$flc_oi_ingresos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 78)->getValue();
								$flc_oi_ingresos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 79)->getValue();
								$flc_ingresos_totales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 80)->getValue();
								$flc_flujo_neto_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 81)->getValue();
								$flc_flujo_acumulado_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 82)->getValue();
								$flc_costo_credito_tesoreria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 83)->getValue();
								$flc_impuesto_de_renta = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 84)->getValue();
								$flc_flujo_neto_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 85)->getValue();
								$flc_flujo_acumulado_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 86)->getValue();
								$flc_proyeccion_ventas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 91)->getValue();
								$flc_ventas_brutas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 92)->getValue();
								$flc_precio_promedio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 93)->getValue();
								$flc_proyeccion_entregas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 94)->getValue();
								$flc_proyeccion_escrituras_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 95)->getValue();
								$flc_proyeccion_escrituras_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 96)->getValue();
								$flc_proyeccion_subrogaciones_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($flc_i, 97)->getValue();
								$flc_vpn = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, 89)->getValue();
								$flc_tir_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
								$flc_tir_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 89)->getValue();
								$flc_tir_mod_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 89)->getValue();
								$flc_tir_mod_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 89)->getValue();
								
						//---------------Check Nulls---------------
										
								if($flc_urbanismo_interno==null){
									$flc_urbanismo_interno=0;
								}
								if($flc_ui_presupuesto==null){
									$flc_ui_presupuesto=0;
								}
								if($flc_ui_incrementos==null){
									$flc_ui_incrementos=0;
								}
								if($flc_costo_materiales_mano_obra==null){
									$flc_costo_materiales_mano_obra=0;
								}
								if($flc_cm_presupuesto==null){
									$flc_cm_presupuesto=0;
								}
								if($flc_cm_incrementos==null){
									$flc_cm_incrementos=0;
								}
								if($flc_gastos_imprevistos==null){
									$flc_gastos_imprevistos=0;
								}
								if($flc_costos_postventa==null){
									$flc_costos_postventa=0;
								}
								if($flc_costo_directo_construccion==null){
									$flc_costo_directo_construccion=0;
								}
								if($flc_honorarios_construccion==null){
									$flc_honorarios_construccion=0;
								}
								if($flc_hc_honorarios_contruccion==null){
									$flc_hc_honorarios_contruccion=0;
								}
								if($flc_hc_gastos_reembolsable==null){
									$flc_hc_gastos_reembolsable=0;
								}
								if($flc_honorarios_construccion==null){
									$flc_honorarios_construccion=0;
								}
								if($flc_hc_honorarios_contruccion==null){
									$flc_hc_honorarios_contruccion=0;
								}
								if($flc_hc_gastos_reembolsable==null){
									$flc_hc_gastos_reembolsable=0;
								}
								if($flc_honorarios_interventoria==null){
									$flc_honorarios_interventoria=0;
								}
								if($flc_hi_honorarios_interventoria==null){
									$flc_hi_honorarios_interventoria=0;
								}
								if($flc_hi_gastos_reembolsables==null){
									$flc_hi_gastos_reembolsables=0;
								}
								if($flc_otros_honorarios==null){
									$flc_otros_honorarios=0;
								}
								if($flc_oh_otros_honorarios==null){
									$flc_oh_otros_honorarios=0;
								}
								if($flc_oh_gastos_reembolsables==null){
									$flc_oh_gastos_reembolsables=0;
								}
								if($flc_impuestos_y_derechos==null){
									$flc_impuestos_y_derechos=0;
								}
								if($flc_costo_total_construccion==null){
									$flc_costo_total_construccion=0;
								}
								if($flc_honorarios_gerencia==null){
								$flc_honorarios_gerencia=0;
								}
								if($flc_hg_honorarios_gerencia==null){
									$flc_hg_honorarios_gerencia=0;
								}
								if($flc_hg_gastos_reembolsables==null){
									$flc_hg_gastos_reembolsables=0;
								}
								if($flc_honorarios_ventas==null){
									$flc_honorarios_ventas=0;
								}
								if($flc_hv_honorarios_ventas==null){
									$flc_hv_honorarios_ventas=0;
								}
								if($flc_hv_gastos_reembolsables==null){
									$flc_hv_gastos_reembolsables=0;
								}
								if($flc_costos_promocion_y_ventas==null){
									$flc_costos_promocion_y_ventas=0;
								}
								if($flc_cp_sala_de_ventas_unidades_modelo==null){
									$flc_cp_sala_de_ventas_unidades_modelo=0;
								}
								if($flc_cp_gastos_publicidad==null){
									$flc_cp_gastos_publicidad=0;
								}
								if($flc_cp_gastos_sala_de_ventas==null){
									$flc_cp_gastos_sala_de_ventas=0;
								}
								if($flc_cp_administracion_unidades_por_entregar==null){
									$flc_cp_administracion_unidades_por_entregar=0;
								}
								if($flc_cp_comisiones_ventas==null){
									$flc_cp_comisiones_ventas=0;
								}
								if($flc_gastos_legales==null){
									$flc_gastos_legales=0;
								}
								if($flc_gl_hipotecas_credito_constructor==null){
									$flc_gl_hipotecas_credito_constructor=0;
								}
								if($flc_gl_notariales_registro_de_ventas==null){
									$flc_gl_notariales_registro_de_ventas=0;
								}
								if($flc_gl_impuesto_predia_inmuebles_por_escritura==null){
									$flc_gl_impuesto_predia_inmuebles_por_escritura=0;
								}
								if($flc_gl_impuesto_ICA==null){
									$flc_gl_impuesto_ICA=0;
								}
								if($flc_costo_total_antes_terreno_y_financieros==null){
									$flc_costo_total_antes_terreno_y_financieros=0;
								}
								if($flc_valor_terreno_urbanizado==null){
									$flc_valor_terreno_urbanizado=0;
								}
								if($flc_vt_valor_adquisicion==null){
									$flc_vt_valor_adquisicion=0;
								}
								if($flc_vt_costos_urbanismo_y_otros==null){
									$flc_vt_costos_urbanismo_y_otros=0;
								}
								if($flc_comisiones_fiducia==null){
									$flc_comisiones_fiducia=0;
								}
								if($flc_cf_preventas_y_administracion==null){
									$flc_cf_preventas_y_administracion=0;
								}
								if($flc_cf_nuevogar==null){
									$flc_cf_nuevogar=0;
								}
								if($flc_gastos_financieros==null){
									$flc_gastos_financieros=0;
								}
								if($flc_gf_intereses_creditos_constructor==null){
									$flc_gf_intereses_creditos_constructor=0;
								}
								if($flc_gf_otros_costos_credito==null){
									$flc_gf_otros_costos_credito=0;
								}
								if($flc_gf_correccion_monetaria_construccion==null){
									$flc_gf_correccion_monetaria_construccion=0;
								}
								if($flc_gf_impuesto_transacciones_financieras==null){
									$flc_gf_impuesto_transacciones_financieras=0;
								}
								if($flc_otros_costos_y_gastos==null){
									$flc_otros_costos_y_gastos=0;
								}
								if($flc_oc_costos_gastos1==null){
									$flc_oc_costos_gastos1=0;
								}
								if($flc_oc_costos_gastos2==null){
									$flc_oc_costos_gastos2=0;
								}
								if($flc_oc_costos_gastos3==null){
									$flc_oc_costos_gastos3=0;
								}
								if($flc_reintegros_iva_proyectos_vis==null){
									$flc_reintegros_iva_proyectos_vis=0;
								}
								if($flc_costo_total_directos_e_indirectos==null){
									$flc_costo_total_directos_e_indirectos=0;
								}
								if($flc_total_egresos_sin_correccion_monetaria==null){
									$flc_total_egresos_sin_correccion_monetaria=0;
								}
								if($flc_desembolsos_creditos_constructor_y_terreno==null){
									$flc_desembolsos_creditos_constructor_y_terreno=0;
								}
								if($flc_abonos_extraordinarios_creditos_constructor==null){
									$flc_abonos_extraordinarios_creditos_constructor=0;
								}
								if($flc_ingresos_por_ventas==null){
									$flc_ingresos_por_ventas=0;
								}
								if($flc_iv_abonos_separacion==null){
									$flc_iv_abonos_separacion=0;
								}
								if($flc_iv_cartera_cuota_inicial==null){
									$flc_iv_cartera_cuota_inicial=0;
								}
								if($flc_iv_saldo_cuota_inicial_y_abono_escritura==null){
									$flc_iv_saldo_cuota_inicial_y_abono_escritura=0;
								}
								if($flc_iv_subsidio_vis_y_ahorro_programado==null){
									$flc_iv_subsidio_vis_y_ahorro_programado=0;
								}
								if($flc_iv_excedentes_credito_compradores==null){
									$flc_iv_excedentes_credito_compradores=0;
								}
								if($flc_iv_giros_directos_creditos_otras_entidades==null){
									$flc_iv_giros_directos_creditos_otras_entidades=0;
								}
								if($flc_iv_ingresos_por_recibir_ventas_realizadas==null){
									$flc_iv_ingresos_por_recibir_ventas_realizadas=0;
								}
								if($flc_otros_ingresos_ventas_intereses==null){
									$flc_otros_ingresos_ventas_intereses=0;
								}
								if($flc_oi_intereses_subrogacion==null){
									$flc_oi_intereses_subrogacion=0;
								}
								if($flc_oi_intereses_mora==null){
									$flc_oi_intereses_mora=0;
								}
								if($flc_oi_ofertas_comerciales_otros_ingresos==null){
									$flc_oi_ofertas_comerciales_otros_ingresos=0;
								}
								if($flc_rendimientos_fideicomiso==null){
									$flc_rendimientos_fideicomiso=0;
								}
								if($flc_otros_ingresos==null){
									$flc_otros_ingresos=0;
								}
								if($flc_oi_ingresos1==null){
									$flc_oi_ingresos1=0;
								}
								if($flc_oi_ingresos2==null){
									$flc_oi_ingresos2=0;
								}
								if($flc_oi_ingresos3==null){
									$flc_oi_ingresos3=0;
								}
								if($flc_ingresos_totales==null){
									$flc_ingresos_totales=0;
								}
								if($flc_flujo_neto_caja_ct==null){
									$flc_flujo_neto_caja_ct=0;
								}
								if($flc_flujo_acumulado_caja_ct==null){
									$flc_flujo_acumulado_caja_ct=0;
								}
								if($flc_costo_credito_tesoreria==null){
									$flc_costo_credito_tesoreria=0;
								}
								
								if($flc_impuesto_de_renta==null){
									$flc_impuesto_de_renta=0;
								}
								if($flc_flujo_neto_caja==null){
									$flc_flujo_neto_caja=0;
								}
								if($flc_flujo_acumulado_caja==null){
									$flc_flujo_acumulado_caja=0;
								}
								if($flc_proyeccion_ventas_unidades==null){
									$flc_proyeccion_ventas_unidades=0;
								}
								if($flc_ventas_brutas==null){
									$flc_ventas_brutas=0;
								}
								if($flc_precio_promedio==null){
									$flc_precio_promedio=0;
								}
								if($flc_proyeccion_entregas_unidades==null){
									$flc_proyeccion_entregas_unidades=0;
								}
								if($flc_proyeccion_escrituras_valor==null){
									$flc_proyeccion_escrituras_valor=0;
								}
								if($flc_proyeccion_escrituras_unidades==null){
									$flc_proyeccion_escrituras_unidades=0;
								}
								if($flc_proyeccion_subrogaciones_valor==null){
									$flc_proyeccion_subrogaciones_valor=0;
								}
								if($flc_vpn==null){
									$flc_vpn=0;
								}
								if($flc_tir_ea==null){
									$flc_tir_ea=0;
								}
								if($flc_tir_em==null){
									$flc_tir_em=0;
								}
								if($flc_tir_mod_ea==null){
									$flc_tir_mod_ea=0;
								}
								if($flc_tir_mod_em==null){
									$flc_tir_mod_em=0;
								}
								
								//---------------Check Nulls---------------
								
								//Insercion de datos 
									$envio_Tb_Flujo_Caja="INSERT INTO tb_flujo_caja (FLC_DET_PRO_ID, FLC_DET_ETAPA, FLC_MODELO, FLC_FECHA, FLC_URBANISMO_INTERNO, 
									FLC_UI_PRESUPUESTO, FLC_UI_INCREMENTOS, FLC_COSTOS_MATERIALES_MANO_OBRA, FLC_CM_PRESUPUESTO, FLC_CM_INCREMENTOS, 
									FLC_GASTOS_IMPREVISTOS, FLC_COSTOS_POSTVENTA, FLC_COSTO_DIRECTO_CONSTRUCCION, 
									FLC_HONORARIOS_CONSTRUCCION, FLC_HC_HONORARIOS_CONSTRUCCION, FLC_HC_GASTOS_REEMBOLSABLES,	
									FLC_HONORARIOS_INTERVENTORIA, FLC_HI_HONORARIOS_INTERVENTORIA, FLC_HI_GASTOS_REEMBOSABLES, FLC_OTROS_HONORARIOS, 
									FLC_OH_OTROS_HONORARIOS, FLC_OH_GASTOS_REEMBOLSABLES, FLC_IMPUESTOS_Y_DERECHOS, FLC_COSTO_TOTAL_CONSTRUCCION, 
									FLC_HONORARIOS_GERENCIA, FLC_HG_HONORARIOS_GERENCIA, FLC_HG_GASTOS_REEMBOLSABLES, FLC_HONORARIOS_VENTAS, 
									FLC_HV_HONORARIOS_VENTAS, FLC_HV_GASTOS_REEMBOLSABLES, FLC_COSTOS_PROMOCION_Y_VENTAS, FLC_CP_SALA_DE_VENTAS_UNIDADES_MODELO, 
									FLC_CP_GASTOS_PUBLICIDAD, FLC_CP_GASTOS_SALA_DE_VENTAS, FLC_CP_ADMINISTRACION_UNIDADES_POR_ENTREGAR, FLC_CP_COMISIONES_VENTAS, 
									FLC_GASTOS_LEGALES, FLC_GL_HIPOTECAS_CREDITO_CONSTRUCTOR, FLC_GL_NOTARIALES_REGISTRO_DE_VENTAS, 
									FLC_GL_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURA, FLC_GL_IMPUESTO_ICA, FLC_COSTO_TOTAL_ANTES_TERRENO_Y_FINANCIEROS, 
									FLC_VALOR_TERRENO_URBANIZADO, FLC_VT_VALOR_ADQUISICION, FLC_VT_COSTOS_URBANISMO_Y_OTROS, FLC_COMISIONES_FIDUCIA, 
									FLC_CF_PREVENTAS_Y_ADMINISTRACION, FLC_CF_NUEVOGAR, FLC_GASTOS_FINANCIEROS, FLC_GF_INTERESES_CREDITOS_CONSTRUCTOR, 
									FLC_GF_OTROS_COSTOS_CREDITO, FLC_GF_CORRECCION_MONETARIA_CONSTRUCCION,
									FLC_GF_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF, FLC_OTROS_COSTOS_Y_GASTOS, FLC_OC_COSTOS_GASTOS1, FLC_OC_COSTOS_GASTOS2,
									FLC_OC_COSTOS_GASTOS3, FLC_REINTEGROS_IVA_PROYECTOS_VIS, FLC_COSTO_TOTAL_DIRECTOS_E_INDIRECTOS,
									FLC_TOTAL_EGRESOS_SIN_CORRECCION_MONETARIA, FLC_DESEMBOLSOS_CREDITOS_CONSTRUCTOR_Y_TERRENO,
									FLC_ABONOS_EXTRAORDINARIOS_CREDITOS_CONSTRUCTOR_Y_TERRENO, FLC_INGRESOS_POR_VENTAS, FLC_IV_ABONOS_SEPARACION, 
									FLC_IV_CARTERA_CUOTA_INICIAL, FLC_IV_SALDO_CUOTA_INICIAL_Y_ABONO_ESCRITURA, FLC_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO, 
									FLC_IV_EXCEDENTES_CREDITO_COMPRADORES, FLC_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES, FLC_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS,
									FLC_OTROS_INGRESOS_VENTAS_INTERESES, FLC_OI_INTERESES_SUBROGACION, FLC_OI_INTERESES_MORA, FLC_OI_OFERTAS_COMERCIALES_OTROS_INGRESOS, 
									FLC_RENDIMIENTOS_FIDEICOMISO, FLC_OTROS_INGRESOS, FLC_OI_INGRESOS1, FLC_OI_INGRESOS2, FLC_OI_INGRESOS3, FLC_INGRESOS_TOTALES,
									FLC_FLUJO_NETO_CAJA_CT, FLC_FLUJO_ACUMULADO_CAJA_CT, FLC_COSTO_CREDITOS_TESORERIA, FLC_IMPUESTO_DE_RENTA, FLC_FLUJO_NETO_CAJA,
									FLC_FLUJO_ACUMULADO_CAJA, FLC_PROYECCION_VENTAS_UNIDADES, FLC_VENTAS_BRUTAS, FLC_PRECIO_PROMEDIO, FLC_PROYECCION_ENTREGAS_UNIDADES,
									FLC_PROYECCION_ESCRITURAS_VALOR, FLC_PROYECCION_ESCRITURAS_UNIDADES, FLC_PROYECCION_SUBROGACIONES_VALOR, FLC_VPN, 
									FLC_TIR_EA, FLC_TIR_EM, FLC_TIR_MOD_EA, FLC_TIR_MOD_EM
									
									) 
									VALUES ('$flc_id',$flc_det_etapa,'$flc_modelo',DATE_FORMAT('$flc_fecha','%d/%m/%y'),$flc_urbanismo_interno,
									$flc_ui_presupuesto,$flc_ui_incrementos,$flc_costo_materiales_mano_obra,$flc_cm_presupuesto,$flc_cm_incrementos,
									$flc_gastos_imprevistos,$flc_costos_postventa,$flc_costo_directo_construccion,
									$flc_honorarios_construccion, $flc_hc_honorarios_contruccion,$flc_hc_gastos_reembolsable, 
									$flc_honorarios_interventoria,$flc_hi_honorarios_interventoria,$flc_hi_gastos_reembolsables, $flc_otros_honorarios,
									$flc_oh_otros_honorarios,$flc_oh_gastos_reembolsables,$flc_impuestos_y_derechos,$flc_costo_total_construccion,
									$flc_honorarios_gerencia,$flc_hg_honorarios_gerencia,$flc_hg_gastos_reembolsables,$flc_honorarios_ventas,
									$flc_hv_honorarios_ventas,$flc_hv_gastos_reembolsables,$flc_costos_promocion_y_ventas,$flc_cp_sala_de_ventas_unidades_modelo,
									$flc_cp_gastos_publicidad,$flc_cp_gastos_sala_de_ventas,$flc_cp_administracion_unidades_por_entregar,$flc_cp_comisiones_ventas,
									$flc_gastos_legales,$flc_gl_hipotecas_credito_constructor,$flc_gl_notariales_registro_de_ventas,
									$flc_gl_impuesto_predia_inmuebles_por_escritura,$flc_gl_impuesto_ICA,$flc_costo_total_antes_terreno_y_financieros,
									$flc_valor_terreno_urbanizado,$flc_vt_valor_adquisicion,$flc_vt_costos_urbanismo_y_otros,$flc_comisiones_fiducia,
									$flc_cf_preventas_y_administracion,$flc_cf_nuevogar,$flc_gastos_financieros,$flc_gf_intereses_creditos_constructor,
									$flc_gf_otros_costos_credito,$flc_gf_correccion_monetaria_construccion,
									$flc_gf_impuesto_transacciones_financieras,$flc_otros_costos_y_gastos,$flc_oc_costos_gastos1,$flc_oc_costos_gastos2,
									$flc_oc_costos_gastos3,$flc_reintegros_iva_proyectos_vis,$flc_costo_total_directos_e_indirectos,
									$flc_total_egresos_sin_correccion_monetaria,$flc_desembolsos_creditos_constructor_y_terreno,
									$flc_abonos_extraordinarios_creditos_constructor,$flc_ingresos_por_ventas,$flc_iv_abonos_separacion,
									$flc_iv_cartera_cuota_inicial,$flc_iv_saldo_cuota_inicial_y_abono_escritura,$flc_iv_subsidio_vis_y_ahorro_programado,
									$flc_iv_excedentes_credito_compradores,$flc_iv_giros_directos_creditos_otras_entidades,$flc_iv_ingresos_por_recibir_ventas_realizadas,
									$flc_otros_ingresos_ventas_intereses,$flc_oi_intereses_subrogacion,$flc_oi_intereses_mora,$flc_oi_ofertas_comerciales_otros_ingresos,
									$flc_rendimientos_fideicomiso,$flc_otros_ingresos,$flc_oi_ingresos1,$flc_oi_ingresos2,$flc_oi_ingresos3,$flc_ingresos_totales,
									$flc_flujo_neto_caja_ct,$flc_flujo_acumulado_caja_ct,$flc_costo_credito_tesoreria,$flc_impuesto_de_renta,$flc_flujo_neto_caja,
									$flc_flujo_acumulado_caja,$flc_proyeccion_ventas_unidades,$flc_ventas_brutas,$flc_precio_promedio,$flc_proyeccion_entregas_unidades,
									$flc_proyeccion_escrituras_valor,$flc_proyeccion_escrituras_unidades,$flc_proyeccion_subrogaciones_valor,$flc_vpn,
									$flc_tir_ea,$flc_tir_em,$flc_tir_mod_ea,$flc_tir_mod_em											
									)";
									
									if(!$resultado_flc = $mysqli -> query($envio_Tb_Flujo_Caja)){
									//echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
								
									
									$flc_i++;
								}
								
								
								
									//--------------------------------FLUJO CAJA-----------------------	
				}
				
			function Resumen($objPHPExcel,$check_model,$proyecto,$etapa,$modelo,$mysqli){
					
					require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
							
						if($check_model==1){
						//$modelo="A";
						
					
					
					//Toma la informacion cenda por celda
					
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(2);
							$res_id=$proyecto;		
							$res_det_etapa=$etapa;
							$res_modelo=$modelo;
							$res_temp= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 3)->getValue();
							list($temp_null, $res_fecha)= explode(" ",$res_temp);
							$res_total_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 6)->getValue();	
							$res_area_promedio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 7)->getValue();	
							$res_total_area_construida = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 8)->getValue();
							$res_total_area_vendible = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 9)->getValue();	
							$res_area_util_lote = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 10)->getValue();	
							$res_densidad = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 11)->getValue();
							$res_lote_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 12)->getValue();	
							$res_numero_parqueos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 13)->getValue();	
							$res_relacion_parqueos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 14)->getValue();	
							$res_numero_depositos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 15)->getValue();	
							$res_fecha_inicio_f_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 16)->getValue();	
							$res_fecha_inicio_f_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 17)->getValue();	
							$res_ritmo_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 18)->getValue();
							$res_punto_equilobrio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 19)->getValue();
							$res_tasa_promedio_precios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 20)->getValue();	
							$res_ventas_nuevo_hogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 21)->getValue();	
							$res_fecha_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 22)->getValue();	
							$res_tasa_promedio_incremento = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 23)->getValue();
									
							$res_c_tot_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 27)->getValue();	
							$res_c_tot_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 28)->getValue();
							$res_c_tot_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 29)->getValue();	
							$res_c_tot_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 30)->getValue();	
							$res_c_tot_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 31)->getValue();
							$res_c_tot_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 32)->getValue();	
							$res_c_tot_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 33)->getValue();
							$res_c_tot_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 34)->getValue();	
							$res_c_tot_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 35)->getValue();	
							$res_c_tot_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 36)->getValue();
							$res_c_tot_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 37)->getValue();	
							$res_c_tot_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 38)->getValue();	
							$res_c_tot_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 39)->getValue();	
							$res_c_tot_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 40)->getValue();	
							$res_c_tot_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 41)->getValue();
							$res_c_tot_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 42)->getValue();
							$res_c_tot_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 43)->getValue();	
							$res_c_tot_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 44)->getValue();	
							$res_c_tot_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 45)->getValue();	
							$res_c_tot_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 46)->getValue();	
							$res_c_tot_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 47)->getValue();	
							$res_c_tot_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 48)->getValue();
							$res_c_tot_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 49)->getValue();	
							$res_c_tot_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 50)->getValue();	
							$res_c_tot_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 51)->getValue();	
							$res_c_tot_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 52)->getValue();	
							$res_c_tot_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 53)->getValue();
							$res_c_tot_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 54)->getValue();	
							$res_c_tot_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 55)->getValue();	
							$res_c_tot_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 56)->getValue();	
							$res_c_tot_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 57)->getValue();	
							$res_c_tot_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 58)->getValue();	
							$res_c_tot_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 59)->getValue();
							$res_c_tot_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 60)->getValue();	
							$res_c_tot_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 61)->getValue();	
							$res_c_tot_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 62)->getValue();	
							$res_c_tot_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 63)->getValue();	
							$res_c_tot_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 64)->getValue();	
							$res_c_tot_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 65)->getValue();
							$res_c_tot_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 66)->getValue();	
							$res_c_tot_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 67)->getValue();	
							$res_c_tot_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 68)->getValue();	
							$res_c_tot_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 69)->getValue();	
							$res_c_tot_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 70)->getValue();	
							$res_c_tot_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 71)->getValue();
							$res_c_tot_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 72)->getValue();	
							$res_c_tot_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 73)->getValue();	
							$res_c_tot_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 74)->getValue();	
							$res_c_tot_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 75)->getValue();	
							$res_c_tot_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 76)->getValue();
							$res_c_tot_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 77)->getValue();
							$res_c_tot_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 78)->getValue();
							$res_c_tot_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 79)->getValue();
							$res_c_tot_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 80)->getValue();	
							$res_c_tot_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 81)->getValue();	
							$res_c_tot_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 82)->getValue();	
							$res_c_tot_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 83)->getValue();	
							$res_c_tot_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 84)->getValue();	
							$res_c_tot_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 85)->getValue();	
							$res_c_tot_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 86)->getValue();	
							$res_c_tot_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 87)->getValue();	
							$res_c_tot_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 88)->getValue();
							$res_c_tot_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
							$res_c_tot_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 90)->getValue();
							$res_c_tot_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 91)->getValue();
							$res_c_tot_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 92)->getValue();
							$res_c_tot_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 93)->getValue();	
							$res_c_tot_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 94)->getValue();	
							$res_c_tot_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 95)->getValue();	
							$res_c_tot_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 96)->getValue();	
							$res_c_tot_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 98)->getValue();	
							$res_c_tot_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 99)->getValue();	
							$res_c_tot_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 100)->getValue();	
							$res_c_tot_tir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 102)->getValue();
							$res_c_tot_vpn =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 103)->getValue();	
							$res_c_tot_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 105)->getValue();	
							$res_c_tot_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 106)->getValue();	
							$res_c_tot_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 107)->getValue();	
							$res_c_tot_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 108)->getValue();	
							$res_c_tot_tir_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 110)->getValue();	
							$res_c_tot_vpn_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 111)->getValue();
						 	$res_c_porc_vent_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 27)->getValue();	
							$res_c_porc_vent_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 28)->getValue();
							$res_c_porc_vent_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 29)->getValue();	
							$res_c_porc_vent_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 30)->getValue();	
							$res_c_porc_vent_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 31)->getValue();
							$res_c_porc_vent_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 32)->getValue();	
							$res_c_porc_vent_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 33)->getValue();
							$res_c_porc_vent_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 34)->getValue();	
							$res_c_porc_vent_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 35)->getValue();	
							$res_c_porc_vent_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 36)->getValue();
							$res_c_porc_vent_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 37)->getValue();	
							$res_c_porc_vent_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 38)->getValue();	
							$res_c_porc_vent_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 39)->getValue();	
							$res_c_porc_vent_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 40)->getValue();	
							$res_c_porc_vent_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 41)->getValue();
							$res_c_porc_vent_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 42)->getValue();
							$res_c_porc_vent_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 43)->getValue();	
							$res_c_porc_vent_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 44)->getValue();	
							$res_c_porc_vent_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 45)->getValue();	
							$res_c_porc_vent_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 46)->getValue();	
							$res_c_porc_vent_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 47)->getValue();	
							$res_c_porc_vent_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 48)->getValue();
							$res_c_porc_vent_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 49)->getValue();	
							$res_c_porc_vent_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 50)->getValue();	
							$res_c_porc_vent_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 51)->getValue();	
							$res_c_porc_vent_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 52)->getValue();	
							$res_c_porc_vent_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 53)->getValue();
							$res_c_porc_vent_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 54)->getValue();	
							$res_c_porc_vent_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 55)->getValue();	
							$res_c_porc_vent_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 56)->getValue();	
							$res_c_porc_vent_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 57)->getValue();	
							$res_c_porc_vent_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 58)->getValue();	
							$res_c_porc_vent_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 59)->getValue();
							$res_c_porc_vent_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 60)->getValue();	
							$res_c_porc_vent_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 61)->getValue();	
							$res_c_porc_vent_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 62)->getValue();	
							$res_c_porc_vent_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 63)->getValue();	
							$res_c_porc_vent_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 64)->getValue();	
							$res_c_porc_vent_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 65)->getValue();
							$res_c_porc_vent_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 66)->getValue();	
							$res_c_porc_vent_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 67)->getValue();	
							$res_c_porc_vent_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 68)->getValue();	
							$res_c_porc_vent_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 69)->getValue();	
							$res_c_porc_vent_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 70)->getValue();	
							$res_c_porc_vent_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 71)->getValue();
							$res_c_porc_vent_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 72)->getValue();	
							$res_c_porc_vent_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 73)->getValue();	
							$res_c_porc_vent_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 74)->getValue();	
							$res_c_porc_vent_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 75)->getValue();	
							$res_c_porc_vent_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 76)->getValue();
							$res_c_porc_vent_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 77)->getValue();
							$res_c_porc_vent_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 78)->getValue();
							$res_c_porc_vent_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 79)->getValue();
							$res_c_porc_vent_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 80)->getValue();	
							$res_c_porc_vent_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 81)->getValue();	
							$res_c_porc_vent_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 82)->getValue();	
							$res_c_porc_vent_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 83)->getValue();	
							$res_c_porc_vent_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 84)->getValue();	
							$res_c_porc_vent_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 85)->getValue();	
							$res_c_porc_vent_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 86)->getValue();	
							$res_c_porc_vent_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 87)->getValue();	
							$res_c_porc_vent_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 88)->getValue();
							$res_c_porc_vent_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 89)->getValue();
							$res_c_porc_vent_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 90)->getValue();
							$res_c_porc_vent_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 91)->getValue();
							$res_c_porc_vent_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 92)->getValue();
							$res_c_porc_vent_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 93)->getValue();	
							$res_c_porc_vent_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 94)->getValue();	
							$res_c_porc_vent_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 95)->getValue();	
							$res_c_porc_vent_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 96)->getValue();	
							$res_c_porc_vent_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 98)->getValue();	
							$res_c_porc_vent_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 99)->getValue();	
							$res_c_porc_vent_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 100)->getValue();	
							$res_c_porc_vent_tir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 102)->getValue();
							$res_c_porc_vent_vpn =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 103)->getValue();	
							$res_c_porc_vent_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 105)->getValue();	
							$res_c_porc_vent_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 106)->getValue();	
							$res_c_porc_vent_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 107)->getValue();	
							$res_c_porc_vent_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 108)->getValue();	
							$res_c_porc_vent_tir_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 110)->getValue();	
							$res_c_porc_vent_vpn_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 111)->getValue();
						 	$res_c_vr_m_con_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 27)->getValue();	
							$res_c_vr_m_con_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 28)->getValue();
							$res_c_vr_m_con_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 29)->getValue();	
							$res_c_vr_m_con_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 30)->getValue();	
							$res_c_vr_m_con_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 31)->getValue();
							$res_c_vr_m_con_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 32)->getValue();	
							$res_c_vr_m_con_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 33)->getValue();
							$res_c_vr_m_con_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 34)->getValue();	
							$res_c_vr_m_con_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 35)->getValue();	
							$res_c_vr_m_con_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 36)->getValue();
							$res_c_vr_m_con_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 37)->getValue();	
							$res_c_vr_m_con_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 38)->getValue();	
							$res_c_vr_m_con_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 39)->getValue();	
							$res_c_vr_m_con_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 40)->getValue();	
							$res_c_vr_m_con_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 41)->getValue();
							$res_c_vr_m_con_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 42)->getValue();
							$res_c_vr_m_con_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 43)->getValue();	
							$res_c_vr_m_con_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 44)->getValue();	
							$res_c_vr_m_con_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 45)->getValue();	
							$res_c_vr_m_con_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 46)->getValue();	
							$res_c_vr_m_con_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 47)->getValue();	
							$res_c_vr_m_con_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 48)->getValue();
							$res_c_vr_m_con_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 49)->getValue();	
							$res_c_vr_m_con_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 50)->getValue();	
							$res_c_vr_m_con_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 51)->getValue();	
							$res_c_vr_m_con_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 52)->getValue();	
							$res_c_vr_m_con_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 53)->getValue();
							$res_c_vr_m_con_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 54)->getValue();	
							$res_c_vr_m_con_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 55)->getValue();	
							$res_c_vr_m_con_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 56)->getValue();	
							$res_c_vr_m_con_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 57)->getValue();	
							$res_c_vr_m_con_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 58)->getValue();	
							$res_c_vr_m_con_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 59)->getValue();
							$res_c_vr_m_con_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 60)->getValue();	
							$res_c_vr_m_con_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 61)->getValue();	
							$res_c_vr_m_con_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 62)->getValue();	
							$res_c_vr_m_con_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 63)->getValue();	
							$res_c_vr_m_con_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 64)->getValue();	
							$res_c_vr_m_con_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 65)->getValue();
							$res_c_vr_m_con_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 66)->getValue();	
							$res_c_vr_m_con_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 67)->getValue();	
							$res_c_vr_m_con_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 68)->getValue();	
							$res_c_vr_m_con_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 69)->getValue();	
							$res_c_vr_m_con_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 70)->getValue();	
							$res_c_vr_m_con_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 71)->getValue();
							$res_c_vr_m_con_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 72)->getValue();	
							$res_c_vr_m_con_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 73)->getValue();	
							$res_c_vr_m_con_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 74)->getValue();	
							$res_c_vr_m_con_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 75)->getValue();	
							$res_c_vr_m_con_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 76)->getValue();
							$res_c_vr_m_con_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 77)->getValue();
							$res_c_vr_m_con_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 78)->getValue();
							$res_c_vr_m_con_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 79)->getValue();
							$res_c_vr_m_con_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 80)->getValue();	
							$res_c_vr_m_con_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 81)->getValue();	
							$res_c_vr_m_con_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 82)->getValue();	
							$res_c_vr_m_con_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 83)->getValue();	
							$res_c_vr_m_con_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 84)->getValue();	
							$res_c_vr_m_con_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 85)->getValue();	
							$res_c_vr_m_con_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 86)->getValue();	
							$res_c_vr_m_con_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 87)->getValue();	
							$res_c_vr_m_con_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 88)->getValue();
							$res_c_vr_m_con_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 89)->getValue();
							$res_c_vr_m_con_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 90)->getValue();
							$res_c_vr_m_con_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 91)->getValue();
							$res_c_vr_m_con_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 92)->getValue();
							$res_c_vr_m_con_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 93)->getValue();	
							$res_c_vr_m_con_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 94)->getValue();	
							$res_c_vr_m_con_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 95)->getValue();	
							$res_c_vr_m_con_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 96)->getValue();	
							$res_c_vr_m_con_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 98)->getValue();	
							$res_c_vr_m_con_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 99)->getValue();	
							$res_c_vr_m_con_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 100)->getValue();	
							$res_c_vr_m_ven_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 27)->getValue();	
							$res_c_vr_m_ven_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 28)->getValue();
							$res_c_vr_m_ven_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 29)->getValue();	
							$res_c_vr_m_ven_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 30)->getValue();	
							$res_c_vr_m_ven_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 31)->getValue();
							$res_c_vr_m_ven_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 32)->getValue();	
							$res_c_vr_m_ven_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 33)->getValue();
							$res_c_vr_m_ven_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 34)->getValue();	
							$res_c_vr_m_ven_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 35)->getValue();	
							$res_c_vr_m_ven_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 36)->getValue();
							$res_c_vr_m_ven_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 37)->getValue();	
							$res_c_vr_m_ven_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 38)->getValue();	
							$res_c_vr_m_ven_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 39)->getValue();	
							$res_c_vr_m_ven_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 40)->getValue();	
							$res_c_vr_m_ven_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 41)->getValue();
							$res_c_vr_m_ven_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 42)->getValue();
							$res_c_vr_m_ven_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 43)->getValue();	
							$res_c_vr_m_ven_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 44)->getValue();	
							$res_c_vr_m_ven_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 45)->getValue();	
							$res_c_vr_m_ven_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 46)->getValue();	
							$res_c_vr_m_ven_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 47)->getValue();	
							$res_c_vr_m_ven_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 48)->getValue();
							$res_c_vr_m_ven_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 49)->getValue();	
							$res_c_vr_m_ven_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 50)->getValue();	
							$res_c_vr_m_ven_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 51)->getValue();	
							$res_c_vr_m_ven_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 52)->getValue();	
							$res_c_vr_m_ven_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 53)->getValue();
							$res_c_vr_m_ven_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 54)->getValue();	
							$res_c_vr_m_ven_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 55)->getValue();	
							$res_c_vr_m_ven_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 56)->getValue();	
							$res_c_vr_m_ven_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 57)->getValue();	
							$res_c_vr_m_ven_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 58)->getValue();	
							$res_c_vr_m_ven_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 59)->getValue();
							$res_c_vr_m_ven_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 60)->getValue();	
							$res_c_vr_m_ven_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 61)->getValue();	
							$res_c_vr_m_ven_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 62)->getValue();	
							$res_c_vr_m_ven_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 63)->getValue();	
							$res_c_vr_m_ven_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 64)->getValue();	
							$res_c_vr_m_ven_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 65)->getValue();
							$res_c_vr_m_ven_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 66)->getValue();	
							$res_c_vr_m_ven_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 67)->getValue();	
							$res_c_vr_m_ven_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 68)->getValue();	
							$res_c_vr_m_ven_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 69)->getValue();	
							$res_c_vr_m_ven_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 70)->getValue();	
							$res_c_vr_m_ven_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 71)->getValue();
							$res_c_vr_m_ven_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 72)->getValue();	
							$res_c_vr_m_ven_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 73)->getValue();	
							$res_c_vr_m_ven_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 74)->getValue();	
							$res_c_vr_m_ven_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 75)->getValue();	
							$res_c_vr_m_ven_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 76)->getValue();
							$res_c_vr_m_ven_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 77)->getValue();
							$res_c_vr_m_ven_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 78)->getValue();
							$res_c_vr_m_ven_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 79)->getValue();
							$res_c_vr_m_ven_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 80)->getValue();	
							$res_c_vr_m_ven_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 81)->getValue();	
							$res_c_vr_m_ven_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 82)->getValue();	
							$res_c_vr_m_ven_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 83)->getValue();	
							$res_c_vr_m_ven_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 84)->getValue();	
							$res_c_vr_m_ven_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 85)->getValue();	
							$res_c_vr_m_ven_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 86)->getValue();	
							$res_c_vr_m_ven_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 87)->getValue();	
							$res_c_vr_m_ven_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 88)->getValue();
							$res_c_vr_m_ven_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 89)->getValue();
							$res_c_vr_m_ven_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 90)->getValue();
							$res_c_vr_m_ven_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 91)->getValue();
							$res_c_vr_m_ven_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 92)->getValue();
							$res_c_vr_m_ven_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 93)->getValue();	
							$res_c_vr_m_ven_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 94)->getValue();	
							$res_c_vr_m_ven_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 95)->getValue();	
							$res_c_vr_m_ven_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 96)->getValue();	
							$res_c_vr_m_ven_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 98)->getValue();	
							$res_c_vr_m_ven_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 99)->getValue();	
							$res_c_vr_m_ven_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 100)->getValue();	
							
							$res_c_vr_uni_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 27)->getValue();	
							$res_c_vr_uni_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 28)->getValue();
							$res_c_vr_uni_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 29)->getValue();	
							$res_c_vr_uni_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 30)->getValue();	
							$res_c_vr_uni_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 31)->getValue();
							$res_c_vr_uni_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 32)->getValue();	
							$res_c_vr_uni_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 33)->getValue();
							$res_c_vr_uni_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 34)->getValue();	
							$res_c_vr_uni_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 35)->getValue();	
							$res_c_vr_uni_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 36)->getValue();
							$res_c_vr_uni_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 37)->getValue();	
							$res_c_vr_uni_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 38)->getValue();	
							$res_c_vr_uni_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 39)->getValue();	
							$res_c_vr_uni_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 40)->getValue();	
							$res_c_vr_uni_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 41)->getValue();
							$res_c_vr_uni_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 42)->getValue();
							$res_c_vr_uni_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 43)->getValue();	
							$res_c_vr_uni_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 44)->getValue();	
							$res_c_vr_uni_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 45)->getValue();	
							$res_c_vr_uni_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 46)->getValue();	
							$res_c_vr_uni_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 47)->getValue();	
							$res_c_vr_uni_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 48)->getValue();
							$res_c_vr_uni_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 49)->getValue();	
							$res_c_vr_uni_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 50)->getValue();	
							$res_c_vr_uni_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 51)->getValue();	
							$res_c_vr_uni_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 52)->getValue();	
							$res_c_vr_uni_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 53)->getValue();
							$res_c_vr_uni_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 54)->getValue();	
							$res_c_vr_uni_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 55)->getValue();	
							$res_c_vr_uni_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 56)->getValue();	
							$res_c_vr_uni_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 57)->getValue();	
							$res_c_vr_uni_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 58)->getValue();	
							$res_c_vr_uni_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 59)->getValue();
							$res_c_vr_uni_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 60)->getValue();	
							$res_c_vr_uni_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 61)->getValue();	
							$res_c_vr_uni_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 62)->getValue();	
							$res_c_vr_uni_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 63)->getValue();	
							$res_c_vr_uni_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 64)->getValue();	
							$res_c_vr_uni_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 65)->getValue();
							$res_c_vr_uni_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 66)->getValue();	
							$res_c_vr_uni_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 67)->getValue();	
							$res_c_vr_uni_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 68)->getValue();	
							$res_c_vr_uni_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 69)->getValue();	
							$res_c_vr_uni_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 70)->getValue();	
							$res_c_vr_uni_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 71)->getValue();
							$res_c_vr_uni_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 72)->getValue();	
							$res_c_vr_uni_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 73)->getValue();	
							$res_c_vr_uni_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 74)->getValue();	
							$res_c_vr_uni_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 75)->getValue();	
							$res_c_vr_uni_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 76)->getValue();
							$res_c_vr_uni_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 77)->getValue();
							$res_c_vr_uni_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 78)->getValue();
							$res_c_vr_uni_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 79)->getValue();
							$res_c_vr_uni_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 80)->getValue();	
							$res_c_vr_uni_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 81)->getValue();	
							$res_c_vr_uni_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 82)->getValue();	
							$res_c_vr_uni_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 83)->getValue();	
							$res_c_vr_uni_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 84)->getValue();	
							$res_c_vr_uni_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 85)->getValue();	
							$res_c_vr_uni_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 86)->getValue();	
							$res_c_vr_uni_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 87)->getValue();	
							$res_c_vr_uni_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 88)->getValue();
							$res_c_vr_uni_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 89)->getValue();
							$res_c_vr_uni_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 90)->getValue();
							$res_c_vr_uni_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 91)->getValue();
							$res_c_vr_uni_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 92)->getValue();
							$res_c_vr_uni_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 93)->getValue();	
							$res_c_vr_uni_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 94)->getValue();	
							$res_c_vr_uni_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 95)->getValue();	
							$res_c_vr_uni_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 96)->getValue();	
							$res_c_vr_uni_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 98)->getValue();	
							$res_c_vr_uni_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 99)->getValue();	
							$res_c_vr_uni_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 100)->getValue();	
							
							
							
							
							
								//----------------------------------RESUMEN---------------------	
					if($res_total_unidades==null||is_string ($res_total_unidades)){$res_total_unidades=0;}
										if($res_area_promedio_unidad==null||is_string ($res_area_promedio_unidad)){$res_area_promedio_unidad=0;}
										if($res_total_area_construida==null||is_string ($res_total_area_construida)){$res_total_area_construida=0;}
										if($res_total_area_vendible==null||is_string ($res_total_area_vendible)){$res_total_area_vendible=0;}
										if($res_area_util_lote_asignada_subproyecto==null||is_string ($res_area_util_lote_asignada_subproyecto)){$res_area_util_lote_asignada_subproyecto=0;}
										if($res_densidad_indice_ocupacion==null||is_string ($res_densidad_indice_ocupacion)){$res_densidad_indice_ocupacion=0;}
										if($res_valor_metro_cuadrado_lote_urbanizado==null||is_string ($res_valor_metro_cuadrado_lote_urbanizado)){$res_valor_metro_cuadrado_lote_urbanizado=0;}
										if($res_numero_parqueos==null||is_string ($res_numero_parqueos)){$res_numero_parqueos=0;}
										if($res_relacion_parqueos_numero_parqueos_por_unidad==null||is_string ($res_relacion_parqueos_numero_parqueos_por_unidad)){$res_relacion_parqueos_numero_parqueos_por_unidad=0;}
										if($res_numero_depositos==null||is_string ($res_numero_depositos)){$res_numero_depositos=0;}
										if($res_fecha_inicio_y_terminacion_ventas==null||is_string ($res_fecha_inicio_y_terminacion_ventas)){$res_fecha_inicio_y_terminacion_ventas=0;}
										if($res_fecha_inicio_y_terminacion_construccion==null||is_string ($res_fecha_inicio_y_terminacion_construccion)){$res_fecha_inicio_y_terminacion_construccion=0;}
										if($res_ritmo_ventas_mensual_promedio==null||is_string ($res_ritmo_ventas_mensual_promedio)){$res_ritmo_ventas_mensual_promedio=0;}
										if($res_punto_equilibrio_unidades==null||is_string ($res_punto_equilibrio_unidades)){$res_punto_equilibrio_unidades=0;}
										if($res_tasa_promedio_incremento_precios==null||is_string ($res_tasa_promedio_incremento_precios)){$res_tasa_promedio_incremento_precios=0;}
										if($res_porcentaje_ventas_nuevogar==null||is_string ($res_porcentaje_ventas_nuevogar)){$res_porcentaje_ventas_nuevogar=0;}
										if($res_fecha_presupuesto==null||is_string ($res_fecha_presupuesto)){$res_fecha_presupuesto=0;}
										if($res_tasa_promedio_incremento_presupuesto==null||is_string ($res_tasa_promedio_incremento_presupuesto)){$res_tasa_promedio_incremento_presupuesto=0;}
										if($res_c_tot_ui==null){
					$res_c_tot_ui=0;
					}
					if($res_c_tot_uip==null){
					$res_c_tot_uip=0;
					}
					if($res_c_tot_uii==null){
					$res_c_tot_uii=0;
					}
					if($res_c_tot_cm==null){
					$res_c_tot_cm=0;
					}
					if($res_c_tot_cmp==null){
					$res_c_tot_cmp=0;
					}
					if($res_c_tot_cmi==null){
					$res_c_tot_cmi=0;
					}
					if($res_c_tot_gi==null){
					$res_c_tot_gi=0;
					}
					if($res_c_tot_cp==null){
					$res_c_tot_cp=0;
					}
					if($res_c_tot_cd==null){
					$res_c_tot_cd=0;
					}
					if($res_c_tot_cd_hc==null){
					$res_c_tot_cd_hc=0;
					}
					if($res_c_tot_cd_hc_hc==null){
					$res_c_tot_cd_hc_hc=0;
					}
					if($res_c_tot_cd_hc_gr==null){
					$res_c_tot_cd_hc_gr=0;
					}
					if($res_c_tot_cd_hi==null){
					$res_c_tot_cd_hi=0;
					}
					if($res_c_tot_cd_hi_hi==null){
					$res_c_tot_cd_hi_hi=0;
					}
					if($res_c_tot_cd_hi_gr==null){
					$res_c_tot_cd_hi_gr=0;
					}
					if($res_c_tot_cd_oh==null){
					$res_c_tot_cd_oh=0;
					}
					if($res_c_tot_cd_oh_oh==null){
					$res_c_tot_cd_oh_oh=0;}
					if($res_c_tot_cd_oh_gr==null){
					$res_c_tot_cd_oh_gr=0;}
					if($res_c_tot_cd_id==null){
					$res_c_tot_cd_id=0;}
					if($res_c_tot_ct==null){
					$res_c_tot_ct=0;}
					if($res_c_tot_ct_hg==null){
					$res_c_tot_ct_hg=0;}
					if($res_c_tot_ct_hg_hg==null){
					$res_c_tot_ct_hg_hg=0;}
					if($res_c_tot_ct_hg_gr==null){
					$res_c_tot_ct_hg_gr=0;}
					if($res_c_tot_ct_hv==null){
					$res_c_tot_ct_hv=0;}
					if($res_c_tot_ct_hv_hv==null){
					$res_c_tot_ct_hv_hv=0;}
					if($res_c_tot_ct_hv_gr==null){
					$res_c_tot_ct_hv_gr=0;}
					if($res_c_tot_ct_cp==null){
					$res_c_tot_ct_cp=0;}
					if($res_c_tot_ct_cp_sv==null){
					$res_c_tot_ct_cp_sv=0;}
					if($res_c_tot_ct_cp_gp==null){
					$res_c_tot_ct_cp_gp=0;}
					if($res_c_tot_ct_cp_gs==null){
					$res_c_tot_ct_cp_gs=0;}
					if($res_c_tot_ct_cp_au==null){
					$res_c_tot_ct_cp_au=0;}
					if($res_c_tot_ct_cp_cv==null){
					$res_c_tot_ct_cp_cv=0;}
					if($res_c_tot_ct_gl==null){
					$res_c_tot_ct_gl=0;}
					if($res_c_tot_ct_gl_hc==null){
					$res_c_tot_ct_gl_hc=0;}
					if($res_c_tot_ct_gl_nr==null){$res_c_tot_ct_gl_nr=0;}
					if($res_c_tot_ct_gl_ip==null){$res_c_tot_ct_gl_ip=0;}
					if($res_c_tot_ct_gl_ic==null){$res_c_tot_ct_gl_ic=0;}
					if($res_c_tot_ca==null){$res_c_tot_ca=0;}
					if($res_c_tot_ca_vt==null){$res_c_tot_ca_vt=0;}
					if($res_c_tot_ca_vt_pv==null){$res_c_tot_ca_vt_pv=0;}
					if($res_c_tot_ca_vt_op==null){$res_c_tot_ca_vt_op=0;}
					if($res_c_tot_ca_cf==null){$res_c_tot_ca_cf=0;}
					if($res_c_tot_ca_cf_pa==null){$res_c_tot_ca_cf_pa=0;}
					if($res_c_tot_ca_cf_nh==null){$res_c_tot_ca_cf_nh=0;}
					if($res_c_tot_ca_gf==null){$res_c_tot_ca_gf=0;}
					if($res_c_tot_ca_gf_ic==null){$res_c_tot_ca_gf_ic=0;}
					if($res_c_tot_ca_gf_oc==null){$res_c_tot_ca_gf_oc=0;}
					if($res_c_tot_ca_gf_cm==null){$res_c_tot_ca_gf_cm=0;}
					if($res_c_tot_ca_gf_it==null){$res_c_tot_ca_gf_it=0;}
					if($res_c_tot_ca_oc==null){$res_c_tot_ca_oc=0;}
					if($res_c_tot_ca_oc_oc1==null){$res_c_tot_ca_oc_oc1=0;}
					if($res_c_tot_ca_oc_oc2==null){$res_c_tot_ca_oc_oc2=0;}
					if($res_c_tot_ca_oc_oc3==null){$res_c_tot_ca_oc_oc3=0;}
					if($res_c_tot_ca_ri==null){$res_c_tot_ca_ri=0;}
					if($res_c_tot_ci==null){$res_c_tot_ci=0;}
					if($res_c_tot_ci_vb==null){$res_c_tot_ci_vb=0;}
					if($res_c_tot_ci_ov==null){$res_c_tot_ci_ov=0;}
					if($res_c_tot_ci_ov_is==null){$res_c_tot_ci_ov_is=0;}
					if($res_c_tot_ci_ov_im==null){$res_c_tot_ci_ov_im=0;}
					if($res_c_tot_ci_ov_oc==null){$res_c_tot_ci_ov_oc=0;}
					if($res_c_tot_ci_rf==null){$res_c_tot_ci_rf=0;}
					if($res_c_tot_ci_oi==null){$res_c_tot_ci_oi=0;}
					if($res_c_tot_ci_oi_oi1==null){$res_c_tot_ci_oi_oi1=0;}
					if($res_c_tot_ci_oi_oi2==null){$res_c_tot_ci_oi_oi2=0;}
					if($res_c_tot_ci_oi_oi3==null){$res_c_tot_ci_oi_oi3=0;}
					if($res_c_tot_it==null){$res_c_tot_it=0;}
					if($res_c_tot_up==null){$res_c_tot_up=0;}
					if($res_c_tot_up_cc==null){$res_c_tot_up_cc=0;}
					if($res_c_tot_up_ir==null){$res_c_tot_up_ir=0;}
					if($res_c_tot_up2==null){$res_c_tot_up2=0;}
					if($res_c_tot_cv==null){$res_c_tot_cv=0;}
					if($res_c_tot_vt==null){$res_c_tot_vt=0;}
					if($res_c_tot_cvg==null){$res_c_tot_cvg=0;}
					if($res_c_tot_tir==null){$res_c_tot_tir=0;}
					if($res_c_tot_vpn==null){$res_c_tot_vpn=0;}
					if($res_c_tot_uc==null){$res_c_tot_uc=0;}
					if($res_c_tot_uc_co==null){$res_c_tot_uc_co=0;}
					if($res_c_tot_uc_ti==null){$res_c_tot_uc_ti=0;}
					if($res_c_tot_uc_pr==null){$res_c_tot_uc_pr=0;}
					if($res_c_tot_tir_c==null){$res_c_tot_tir_c=0;}
					if($res_c_tot_vpn_c==null){$res_c_tot_vpn_c=0;}
					if($res_c_porc_vent_ui==null){$res_c_porc_vent_ui=0;}
					if($res_c_porc_vent_uip==null){$res_c_porc_vent_uip=0;}
					if($res_c_porc_vent_uii==null){$res_c_porc_vent_uii=0;}
					if($res_c_porc_vent_cm==null){$res_c_porc_vent_cm=0;}
					if($res_c_porc_vent_cmp==null){$res_c_porc_vent_cmp=0;}
					if($res_c_porc_vent_cmi==null){$res_c_porc_vent_cmi=0;}
					if($res_c_porc_vent_gi==null){$res_c_porc_vent_gi=0;}
					if($res_c_porc_vent_cp==null){$res_c_porc_vent_cp=0;}
					if($res_c_porc_vent_cd==null){$res_c_porc_vent_cd=0;}
					if($res_c_porc_vent_cd_hc==null){$res_c_porc_vent_cd_hc=0;}
					if($res_c_porc_vent_cd_hc_hc==null){$res_c_porc_vent_cd_hc_hc=0;}
					if($res_c_porc_vent_cd_hc_gr==null){$res_c_porc_vent_cd_hc_gr=0;}
					if($res_c_porc_vent_cd_hi==null){$res_c_porc_vent_cd_hi=0;}
					if($res_c_porc_vent_cd_hi_hi==null){$res_c_porc_vent_cd_hi_hi=0;}
					if($res_c_porc_vent_cd_hi_gr==null){$res_c_porc_vent_cd_hi_gr=0;}
					if($res_c_porc_vent_cd_oh==null){$res_c_porc_vent_cd_oh=0;}
					if($res_c_porc_vent_cd_oh_oh==null){$res_c_porc_vent_cd_oh_oh=0;}
					if($res_c_porc_vent_cd_oh_gr==null){$res_c_porc_vent_cd_oh_gr=0;}
					if($res_c_porc_vent_cd_id==null){$res_c_porc_vent_cd_id=0;}
					if($res_c_porc_vent_ct==null){$res_c_porc_vent_ct=0;}
					if($res_c_porc_vent_ct_hg==null){$res_c_porc_vent_ct_hg=0;}
					if($res_c_porc_vent_ct_hg_hg==null){$res_c_porc_vent_ct_hg_hg=0;}
					if($res_c_porc_vent_ct_hg_gr==null){$res_c_porc_vent_ct_hg_gr=0;}
					if($res_c_porc_vent_ct_hv==null){$res_c_porc_vent_ct_hv=0;}
					if($res_c_porc_vent_ct_hv_hv==null){$res_c_porc_vent_ct_hv_hv=0;}
					if($res_c_porc_vent_ct_hv_gr==null){$res_c_porc_vent_ct_hv_gr=0;}
					if($res_c_porc_vent_ct_cp==null){$res_c_porc_vent_ct_cp=0;}
					if($res_c_porc_vent_ct_cp_sv==null){$res_c_porc_vent_ct_cp_sv=0;}
					if($res_c_porc_vent_ct_cp_gp==null){$res_c_porc_vent_ct_cp_gp=0;}
					if($res_c_porc_vent_ct_cp_gs==null){$res_c_porc_vent_ct_cp_gs=0;}
					if($res_c_porc_vent_ct_cp_au==null){$res_c_porc_vent_ct_cp_au=0;}
					if($res_c_porc_vent_ct_cp_cv==null){$res_c_porc_vent_ct_cp_cv=0;}
					if($res_c_porc_vent_ct_gl==null){$res_c_porc_vent_ct_gl=0;}
					if($res_c_porc_vent_ct_gl_hc==null){$res_c_porc_vent_ct_gl_hc=0;}
					if($res_c_porc_vent_ct_gl_nr==null){$res_c_porc_vent_ct_gl_nr=0;}
					if($res_c_porc_vent_ct_gl_ip==null){$res_c_porc_vent_ct_gl_ip=0;}
					if($res_c_porc_vent_ct_gl_ic==null){$res_c_porc_vent_ct_gl_ic=0;}
					if($res_c_porc_vent_ca==null){$res_c_porc_vent_ca=0;}
					if($res_c_porc_vent_ca_vt==null){$res_c_porc_vent_ca_vt=0;}
					if($res_c_porc_vent_ca_vt_pv==null){$res_c_porc_vent_ca_vt_pv=0;}
					if($res_c_porc_vent_ca_vt_op==null){$res_c_porc_vent_ca_vt_op=0;}
					if($res_c_porc_vent_ca_cf==null){$res_c_porc_vent_ca_cf=0;}
					if($res_c_porc_vent_ca_cf_pa==null){$res_c_porc_vent_ca_cf_pa=0;}
					if($res_c_porc_vent_ca_cf_nh==null){$res_c_porc_vent_ca_cf_nh=0;}
					if($res_c_porc_vent_ca_gf==null){$res_c_porc_vent_ca_gf=0;}
					if($res_c_porc_vent_ca_gf_ic==null){$res_c_porc_vent_ca_gf_ic=0;}
					if($res_c_porc_vent_ca_gf_oc==null){$res_c_porc_vent_ca_gf_oc=0;}
					if($res_c_porc_vent_ca_gf_cm==null){$res_c_porc_vent_ca_gf_cm=0;}
					if($res_c_porc_vent_ca_gf_it==null){$res_c_porc_vent_ca_gf_it=0;}
					if($res_c_porc_vent_ca_oc==null){$res_c_porc_vent_ca_oc=0;}
					if($res_c_porc_vent_ca_oc_oc1==null){$res_c_porc_vent_ca_oc_oc1=0;}
					if($res_c_porc_vent_ca_oc_oc2==null){$res_c_porc_vent_ca_oc_oc2=0;}
					if($res_c_porc_vent_ca_oc_oc3==null){$res_c_porc_vent_ca_oc_oc3=0;}
					if($res_c_porc_vent_ca_ri==null){$res_c_porc_vent_ca_ri=0;}
					if($res_c_porc_vent_ci==null){$res_c_porc_vent_ci=0;}
					if($res_c_porc_vent_ci_vb==null){$res_c_porc_vent_ci_vb=0;}
					if($res_c_porc_vent_ci_ov==null){$res_c_porc_vent_ci_ov=0;}
					if($res_c_porc_vent_ci_ov_is==null){$res_c_porc_vent_ci_ov_is=0;}
					if($res_c_porc_vent_ci_ov_im==null){$res_c_porc_vent_ci_ov_im=0;}
					if($res_c_porc_vent_ci_ov_oc==null){$res_c_porc_vent_ci_ov_oc=0;}
					if($res_c_porc_vent_ci_rf==null){$res_c_porc_vent_ci_rf=0;}
					if($res_c_porc_vent_ci_oi==null){$res_c_porc_vent_ci_oi=0;}
					if($res_c_porc_vent_ci_oi_oi1==null){$res_c_porc_vent_ci_oi_oi1=0;}
					if($res_c_porc_vent_ci_oi_oi2==null){$res_c_porc_vent_ci_oi_oi2=0;}
					if($res_c_porc_vent_ci_oi_oi3==null){$res_c_porc_vent_ci_oi_oi3=0;}
					if($res_c_porc_vent_it==null){$res_c_porc_vent_it=0;}
					if($res_c_porc_vent_up==null){$res_c_porc_vent_up=0;}
					if($res_c_porc_vent_up_cc==null){$res_c_porc_vent_up_cc=0;}
					if($res_c_porc_vent_up_ir==null){$res_c_porc_vent_up_ir=0;}
					if($res_c_porc_vent_up2==null){$res_c_porc_vent_up2=0;}
					if($res_c_porc_vent_cv==null){$res_c_porc_vent_cv=0;}
					if($res_c_porc_vent_vt==null){$res_c_porc_vent_vt=0;}
					if($res_c_porc_vent_cvg==null){$res_c_porc_vent_cvg=0;}
					if($res_c_porc_vent_tir==null){$res_c_porc_vent_tir=0;}
					if($res_c_porc_vent_vpn==null){$res_c_porc_vent_vpn=0;}
					if($res_c_porc_vent_uc==null){$res_c_porc_vent_uc=0;}
					if($res_c_porc_vent_uc_co==null){$res_c_porc_vent_uc_co=0;}
					if($res_c_porc_vent_uc_ti==null){$res_c_porc_vent_uc_ti=0;}
					if($res_c_porc_vent_uc_pr==null){$res_c_porc_vent_uc_pr=0;}
					if($res_c_porc_vent_tir_c==null){$res_c_porc_vent_tir_c=0;}
					if($res_c_porc_vent_vpn_c==null){$res_c_porc_vent_vpn_c=0;}
					if($res_c_vr_m_con_ui==null){$res_c_vr_m_con_ui=0;}
					if($res_c_vr_m_con_uip==null){$res_c_vr_m_con_uip=0;}
					if($res_c_vr_m_con_uii==null){$res_c_vr_m_con_uii=0;}
					if($res_c_vr_m_con_cm==null){$res_c_vr_m_con_cm=0;}
					if($res_c_vr_m_con_cmp==null){$res_c_vr_m_con_cmp=0;}
					if($res_c_vr_m_con_cmi==null){$res_c_vr_m_con_cmi=0;}
					if($res_c_vr_m_con_gi==null){$res_c_vr_m_con_gi=0;}
					if($res_c_vr_m_con_cp==null){$res_c_vr_m_con_cp=0;}
					if($res_c_vr_m_con_cd==null){$res_c_vr_m_con_cd=0;}
					if($res_c_vr_m_con_cd_hc==null){$res_c_vr_m_con_cd_hc=0;}
					if($res_c_vr_m_con_cd_hc_hc==null){$res_c_vr_m_con_cd_hc_hc=0;}
					if($res_c_vr_m_con_cd_hc_gr==null){$res_c_vr_m_con_cd_hc_gr=0;}
					if($res_c_vr_m_con_cd_hi==null){$res_c_vr_m_con_cd_hi=0;}
					if($res_c_vr_m_con_cd_hi_hi==null){$res_c_vr_m_con_cd_hi_hi=0;}
					if($res_c_vr_m_con_cd_hi_gr==null){$res_c_vr_m_con_cd_hi_gr=0;}
					if($res_c_vr_m_con_cd_oh==null){$res_c_vr_m_con_cd_oh=0;}
					if($res_c_vr_m_con_cd_oh_oh==null){$res_c_vr_m_con_cd_oh_oh=0;}
					if($res_c_vr_m_con_cd_oh_gr==null){$res_c_vr_m_con_cd_oh_gr=0;}
					if($res_c_vr_m_con_cd_id==null){$res_c_vr_m_con_cd_id=0;}
					if($res_c_vr_m_con_ct==null){$res_c_vr_m_con_ct=0;}
					if($res_c_vr_m_con_ct_hg==null){$res_c_vr_m_con_ct_hg=0;}
					if($res_c_vr_m_con_ct_hg_hg==null){$res_c_vr_m_con_ct_hg_hg=0;}
					if($res_c_vr_m_con_ct_hg_gr==null){$res_c_vr_m_con_ct_hg_gr=0;}
					if($res_c_vr_m_con_ct_hv==null){$res_c_vr_m_con_ct_hv=0;}
					if($res_c_vr_m_con_ct_hv_hv==null){$res_c_vr_m_con_ct_hv_hv=0;}
					if($res_c_vr_m_con_ct_hv_gr==null){$res_c_vr_m_con_ct_hv_gr=0;}
					if($res_c_vr_m_con_ct_cp==null){$res_c_vr_m_con_ct_cp=0;}
					if($res_c_vr_m_con_ct_cp_sv==null){$res_c_vr_m_con_ct_cp_sv=0;}
					if($res_c_vr_m_con_ct_cp_gp==null){$res_c_vr_m_con_ct_cp_gp=0;}
					if($res_c_vr_m_con_ct_cp_gs==null){$res_c_vr_m_con_ct_cp_gs=0;}
					if($res_c_vr_m_con_ct_cp_au==null){$res_c_vr_m_con_ct_cp_au=0;}
					if($res_c_vr_m_con_ct_cp_cv==null){$res_c_vr_m_con_ct_cp_cv=0;}
					if($res_c_vr_m_con_ct_gl==null){$res_c_vr_m_con_ct_gl=0;}
					if($res_c_vr_m_con_ct_gl_hc==null){$res_c_vr_m_con_ct_gl_hc=0;}
					if($res_c_vr_m_con_ct_gl_nr==null){$res_c_vr_m_con_ct_gl_nr=0;}
					if($res_c_vr_m_con_ct_gl_ip==null){$res_c_vr_m_con_ct_gl_ip=0;}
					if($res_c_vr_m_con_ct_gl_ic==null){$res_c_vr_m_con_ct_gl_ic=0;}
					if($res_c_vr_m_con_ca==null){$res_c_vr_m_con_ca=0;}
					if($res_c_vr_m_con_ca_vt==null){$res_c_vr_m_con_ca_vt=0;}
					if($res_c_vr_m_con_ca_vt_pv==null){$res_c_vr_m_con_ca_vt_pv=0;}
					if($res_c_vr_m_con_ca_vt_op==null){$res_c_vr_m_con_ca_vt_op=0;}
					if($res_c_vr_m_con_ca_cf==null){$res_c_vr_m_con_ca_cf=0;}
					if($res_c_vr_m_con_ca_cf_pa==null){$res_c_vr_m_con_ca_cf_pa=0;}
					if($res_c_vr_m_con_ca_cf_nh==null){$res_c_vr_m_con_ca_cf_nh=0;}
					if($res_c_vr_m_con_ca_gf==null){$res_c_vr_m_con_ca_gf=0;}
					if($res_c_vr_m_con_ca_gf_ic==null){$res_c_vr_m_con_ca_gf_ic=0;}
					if($res_c_vr_m_con_ca_gf_oc==null){$res_c_vr_m_con_ca_gf_oc=0;}
					if($res_c_vr_m_con_ca_gf_cm==null){$res_c_vr_m_con_ca_gf_cm=0;}
					if($res_c_vr_m_con_ca_gf_it==null){$res_c_vr_m_con_ca_gf_it=0;}
					if($res_c_vr_m_con_ca_oc==null){$res_c_vr_m_con_ca_oc=0;}
					if($res_c_vr_m_con_ca_oc_oc1==null){$res_c_vr_m_con_ca_oc_oc1=0;}
					if($res_c_vr_m_con_ca_oc_oc2==null){$res_c_vr_m_con_ca_oc_oc2=0;}
					if($res_c_vr_m_con_ca_oc_oc3==null){$res_c_vr_m_con_ca_oc_oc3=0;}
					if($res_c_vr_m_con_ca_ri==null){$res_c_vr_m_con_ca_ri=0;}
					if($res_c_vr_m_con_ci==null){$res_c_vr_m_con_ci=0;}
					if($res_c_vr_m_con_ci_vb==null){$res_c_vr_m_con_ci_vb=0;}
					if($res_c_vr_m_con_ci_ov==null){$res_c_vr_m_con_ci_ov=0;}
					if($res_c_vr_m_con_ci_ov_is==null){$res_c_vr_m_con_ci_ov_is=0;}
					if($res_c_vr_m_con_ci_ov_im==null){$res_c_vr_m_con_ci_ov_im=0;}
					if($res_c_vr_m_con_ci_ov_oc==null){$res_c_vr_m_con_ci_ov_oc=0;}
					if($res_c_vr_m_con_ci_rf==null){$res_c_vr_m_con_ci_rf=0;}
					if($res_c_vr_m_con_ci_oi==null){$res_c_vr_m_con_ci_oi=0;}
					if($res_c_vr_m_con_ci_oi_oi1==null){$res_c_vr_m_con_ci_oi_oi1=0;}
					if($res_c_vr_m_con_ci_oi_oi2==null){$res_c_vr_m_con_ci_oi_oi2=0;}
					if($res_c_vr_m_con_ci_oi_oi3==null){$res_c_vr_m_con_ci_oi_oi3=0;}
					if($res_c_vr_m_con_it==null){$res_c_vr_m_con_it=0;}
					if($res_c_vr_m_con_up==null){$res_c_vr_m_con_up=0;}
					if($res_c_vr_m_con_up_cc==null){$res_c_vr_m_con_up_cc=0;}
					if($res_c_vr_m_con_up_ir==null){$res_c_vr_m_con_up_ir=0;}
					if($res_c_vr_m_con_up2==null){$res_c_vr_m_con_up2=0;}
					if($res_c_vr_m_con_cv==null){$res_c_vr_m_con_cv=0;}
					if($res_c_vr_m_con_vt==null){$res_c_vr_m_con_vt=0;}
					if($res_c_vr_m_ven_ui==null){$res_c_vr_m_ven_ui=0;}
					if($res_c_vr_m_ven_uip==null){$res_c_vr_m_ven_uip=0;}
					if($res_c_vr_m_ven_uii==null){$res_c_vr_m_ven_uii=0;}
					if($res_c_vr_m_ven_cm==null){$res_c_vr_m_ven_cm=0;}
					if($res_c_vr_m_ven_cmp==null){$res_c_vr_m_ven_cmp=0;}
					if($res_c_vr_m_ven_cmi==null){$res_c_vr_m_ven_cmi=0;}
					if($res_c_vr_m_ven_gi==null){$res_c_vr_m_ven_gi=0;}
					if($res_c_vr_m_ven_cp==null){$res_c_vr_m_ven_cp=0;}
					if($res_c_vr_m_ven_cd==null){$res_c_vr_m_ven_cd=0;}
					if($res_c_vr_m_ven_cd_hc==null){$res_c_vr_m_ven_cd_hc=0;}
					if($res_c_vr_m_ven_cd_hc_hc==null){$res_c_vr_m_ven_cd_hc_hc=0;}
					if($res_c_vr_m_ven_cd_hc_gr==null){$res_c_vr_m_ven_cd_hc_gr=0;}
					if($res_c_vr_m_ven_cd_hi==null){$res_c_vr_m_ven_cd_hi=0;}
					if($res_c_vr_m_ven_cd_hi_hi==null){$res_c_vr_m_ven_cd_hi_hi=0;}
					if($res_c_vr_m_ven_cd_hi_gr==null){$res_c_vr_m_ven_cd_hi_gr=0;}
					if($res_c_vr_m_ven_cd_oh==null){$res_c_vr_m_ven_cd_oh=0;}
					if($res_c_vr_m_ven_cd_oh_oh==null){$res_c_vr_m_ven_cd_oh_oh=0;}
					if($res_c_vr_m_ven_cd_oh_gr==null){$res_c_vr_m_ven_cd_oh_gr=0;}
					if($res_c_vr_m_ven_cd_id==null){$res_c_vr_m_ven_cd_id=0;}
					if($res_c_vr_m_ven_ct==null){$res_c_vr_m_ven_ct=0;}
					if($res_c_vr_m_ven_ct_hg==null){$res_c_vr_m_ven_ct_hg=0;}
					if($res_c_vr_m_ven_ct_hg_hg==null){$res_c_vr_m_ven_ct_hg_hg=0;}
					if($res_c_vr_m_ven_ct_hg_gr==null){$res_c_vr_m_ven_ct_hg_gr=0;}
					if($res_c_vr_m_ven_ct_hv==null){$res_c_vr_m_ven_ct_hv=0;}
					if($res_c_vr_m_ven_ct_hv_hv==null){$res_c_vr_m_ven_ct_hv_hv=0;}
					if($res_c_vr_m_ven_ct_hv_gr==null){$res_c_vr_m_ven_ct_hv_gr=0;}
					if($res_c_vr_m_ven_ct_cp==null){$res_c_vr_m_ven_ct_cp=0;}
					if($res_c_vr_m_ven_ct_cp_sv==null){$res_c_vr_m_ven_ct_cp_sv=0;}
					if($res_c_vr_m_ven_ct_cp_gp==null){$res_c_vr_m_ven_ct_cp_gp=0;}
					if($res_c_vr_m_ven_ct_cp_gs==null){$res_c_vr_m_ven_ct_cp_gs=0;}
					if($res_c_vr_m_ven_ct_cp_au==null){$res_c_vr_m_ven_ct_cp_au=0;}
					if($res_c_vr_m_ven_ct_cp_cv==null){$res_c_vr_m_ven_ct_cp_cv=0;}
					if($res_c_vr_m_ven_ct_gl==null){$res_c_vr_m_ven_ct_gl=0;}
					if($res_c_vr_m_ven_ct_gl_hc==null){$res_c_vr_m_ven_ct_gl_hc=0;}
					if($res_c_vr_m_ven_ct_gl_nr==null){$res_c_vr_m_ven_ct_gl_nr=0;}
					if($res_c_vr_m_ven_ct_gl_ip==null){$res_c_vr_m_ven_ct_gl_ip=0;}
					if($res_c_vr_m_ven_ct_gl_ic==null){$res_c_vr_m_ven_ct_gl_ic=0;}
					if($res_c_vr_m_ven_ca==null){$res_c_vr_m_ven_ca=0;}
					if($res_c_vr_m_ven_ca_vt==null){$res_c_vr_m_ven_ca_vt=0;}
					if($res_c_vr_m_ven_ca_vt_pv==null){$res_c_vr_m_ven_ca_vt_pv=0;}
					if($res_c_vr_m_ven_ca_vt_op==null){$res_c_vr_m_ven_ca_vt_op=0;}
					if($res_c_vr_m_ven_ca_cf==null){$res_c_vr_m_ven_ca_cf=0;}
					if($res_c_vr_m_ven_ca_cf_pa==null){$res_c_vr_m_ven_ca_cf_pa=0;}
					if($res_c_vr_m_ven_ca_cf_nh==null){$res_c_vr_m_ven_ca_cf_nh=0;}
					if($res_c_vr_m_ven_ca_gf==null){$res_c_vr_m_ven_ca_gf=0;}
					if($res_c_vr_m_ven_ca_gf_ic==null){$res_c_vr_m_ven_ca_gf_ic=0;}
					if($res_c_vr_m_ven_ca_gf_oc==null){$res_c_vr_m_ven_ca_gf_oc=0;}
					if($res_c_vr_m_ven_ca_gf_cm==null){$res_c_vr_m_ven_ca_gf_cm=0;}
					if($res_c_vr_m_ven_ca_gf_it==null){$res_c_vr_m_ven_ca_gf_it=0;}
					if($res_c_vr_m_ven_ca_oc==null){$res_c_vr_m_ven_ca_oc=0;}
					if($res_c_vr_m_ven_ca_oc_oc1==null){$res_c_vr_m_ven_ca_oc_oc1=0;}
					if($res_c_vr_m_ven_ca_oc_oc2==null){$res_c_vr_m_ven_ca_oc_oc2=0;}
					if($res_c_vr_m_ven_ca_oc_oc3==null){$res_c_vr_m_ven_ca_oc_oc3=0;}
					if($res_c_vr_m_ven_ca_ri==null){$res_c_vr_m_ven_ca_ri=0;}
					if($res_c_vr_m_ven_ci==null){$res_c_vr_m_ven_ci=0;}
					if($res_c_vr_m_ven_ci_vb==null){$res_c_vr_m_ven_ci_vb=0;}
					if($res_c_vr_m_ven_ci_ov==null){$res_c_vr_m_ven_ci_ov=0;}
					if($res_c_vr_m_ven_ci_ov_is==null){$res_c_vr_m_ven_ci_ov_is=0;}
					if($res_c_vr_m_ven_ci_ov_im==null){$res_c_vr_m_ven_ci_ov_im=0;}
					if($res_c_vr_m_ven_ci_ov_oc==null){$res_c_vr_m_ven_ci_ov_oc=0;}
					if($res_c_vr_m_ven_ci_rf==null){$res_c_vr_m_ven_ci_rf=0;}
					if($res_c_vr_m_ven_ci_oi==null){$res_c_vr_m_ven_ci_oi=0;}
					if($res_c_vr_m_ven_ci_oi_oi1==null){$res_c_vr_m_ven_ci_oi_oi1=0;}
					if($res_c_vr_m_ven_ci_oi_oi2==null){$res_c_vr_m_ven_ci_oi_oi2=0;}
					if($res_c_vr_m_ven_ci_oi_oi3==null){$res_c_vr_m_ven_ci_oi_oi3=0;}
					if($res_c_vr_m_ven_it==null){$res_c_vr_m_ven_it=0;}
					if($res_c_vr_m_ven_up==null){$res_c_vr_m_ven_up=0;}
					if($res_c_vr_m_ven_up_cc==null){$res_c_vr_m_ven_up_cc=0;}
					if($res_c_vr_m_ven_up_ir==null){$res_c_vr_m_ven_up_ir=0;}
					if($res_c_vr_m_ven_up2==null){$res_c_vr_m_ven_up2=0;}
					if($res_c_vr_m_ven_cv==null){$res_c_vr_m_ven_cv=0;}
					if($res_c_vr_m_ven_vt==null){$res_c_vr_m_ven_vt=0;}
					if($res_c_vr_uni_ui==null){$res_c_vr_uni_ui=0;}
					if($res_c_vr_uni_uip==null){$res_c_vr_uni_uip=0;}
					if($res_c_vr_uni_uii==null){$res_c_vr_uni_uii=0;}
					if($res_c_vr_uni_cm==null){$res_c_vr_uni_cm=0;}
					if($res_c_vr_uni_cmp==null){$res_c_vr_uni_cmp=0;}
					if($res_c_vr_uni_cmi==null){$res_c_vr_uni_cmi=0;}
					if($res_c_vr_uni_gi==null){$res_c_vr_uni_gi=0;}
					if($res_c_vr_uni_cp==null){$res_c_vr_uni_cp=0;}
					if($res_c_vr_uni_cd==null){$res_c_vr_uni_cd=0;}
					if($res_c_vr_uni_cd_hc==null){$res_c_vr_uni_cd_hc=0;}
					if($res_c_vr_uni_cd_hc_hc==null){$res_c_vr_uni_cd_hc_hc=0;}
					if($res_c_vr_uni_cd_hc_gr==null){$res_c_vr_uni_cd_hc_gr=0;}
					if($res_c_vr_uni_cd_hi==null){$res_c_vr_uni_cd_hi=0;}
					if($res_c_vr_uni_cd_hi_hi==null){$res_c_vr_uni_cd_hi_hi=0;}
					if($res_c_vr_uni_cd_hi_gr==null){$res_c_vr_uni_cd_hi_gr=0;}
					if($res_c_vr_uni_cd_oh==null){$res_c_vr_uni_cd_oh=0;}
					if($res_c_vr_uni_cd_oh_oh==null){$res_c_vr_uni_cd_oh_oh=0;}
					if($res_c_vr_uni_cd_oh_gr==null){$res_c_vr_uni_cd_oh_gr=0;}
					if($res_c_vr_uni_cd_id==null){$res_c_vr_uni_cd_id=0;}
					if($res_c_vr_uni_ct==null){$res_c_vr_uni_ct=0;}
					if($res_c_vr_uni_ct_hg==null){$res_c_vr_uni_ct_hg=0;}
					if($res_c_vr_uni_ct_hg_hg==null){$res_c_vr_uni_ct_hg_hg=0;}
					if($res_c_vr_uni_ct_hg_gr==null){$res_c_vr_uni_ct_hg_gr=0;}
					if($res_c_vr_uni_ct_hv==null){$res_c_vr_uni_ct_hv=0;}
					if($res_c_vr_uni_ct_hv_hv==null){$res_c_vr_uni_ct_hv_hv=0;}
					if($res_c_vr_uni_ct_hv_gr==null){$res_c_vr_uni_ct_hv_gr=0;}
					if($res_c_vr_uni_ct_cp==null){$res_c_vr_uni_ct_cp=0;}
					if($res_c_vr_uni_ct_cp_sv==null){$res_c_vr_uni_ct_cp_sv=0;}
					if($res_c_vr_uni_ct_cp_gp==null){$res_c_vr_uni_ct_cp_gp=0;}
					if($res_c_vr_uni_ct_cp_gs==null){$res_c_vr_uni_ct_cp_gs=0;}
					if($res_c_vr_uni_ct_cp_au==null){$res_c_vr_uni_ct_cp_au=0;}
					if($res_c_vr_uni_ct_cp_cv==null){$res_c_vr_uni_ct_cp_cv=0;}
					if($res_c_vr_uni_ct_gl==null){$res_c_vr_uni_ct_gl=0;}
					if($res_c_vr_uni_ct_gl_hc==null){$res_c_vr_uni_ct_gl_hc=0;}
					if($res_c_vr_uni_ct_gl_nr==null){$res_c_vr_uni_ct_gl_nr=0;}
					if($res_c_vr_uni_ct_gl_ip==null){$res_c_vr_uni_ct_gl_ip=0;}
					if($res_c_vr_uni_ct_gl_ic==null){$res_c_vr_uni_ct_gl_ic=0;}
					if($res_c_vr_uni_ca==null){$res_c_vr_uni_ca=0;}
					if($res_c_vr_uni_ca_vt==null){$res_c_vr_uni_ca_vt=0;}
					if($res_c_vr_uni_ca_vt_pv==null){$res_c_vr_uni_ca_vt_pv=0;}
					if($res_c_vr_uni_ca_vt_op==null){$res_c_vr_uni_ca_vt_op=0;}
					if($res_c_vr_uni_ca_cf==null){$res_c_vr_uni_ca_cf=0;}
					if($res_c_vr_uni_ca_cf_pa==null){$res_c_vr_uni_ca_cf_pa=0;}
					if($res_c_vr_uni_ca_cf_nh==null){$res_c_vr_uni_ca_cf_nh=0;}
					if($res_c_vr_uni_ca_gf==null){$res_c_vr_uni_ca_gf=0;}
					if($res_c_vr_uni_ca_gf_ic==null){$res_c_vr_uni_ca_gf_ic=0;}
					if($res_c_vr_uni_ca_gf_oc==null){$res_c_vr_uni_ca_gf_oc=0;}
					if($res_c_vr_uni_ca_gf_cm==null){$res_c_vr_uni_ca_gf_cm=0;}
					if($res_c_vr_uni_ca_gf_it==null){$res_c_vr_uni_ca_gf_it=0;}
					if($res_c_vr_uni_ca_oc==null){$res_c_vr_uni_ca_oc=0;}
					if($res_c_vr_uni_ca_oc_oc1==null){$res_c_vr_uni_ca_oc_oc1=0;}
					if($res_c_vr_uni_ca_oc_oc2==null){$res_c_vr_uni_ca_oc_oc2=0;}
					if($res_c_vr_uni_ca_oc_oc3==null){$res_c_vr_uni_ca_oc_oc3=0;}
					if($res_c_vr_uni_ca_ri==null){$res_c_vr_uni_ca_ri=0;}
					if($res_c_vr_uni_ci==null){$res_c_vr_uni_ci=0;}
					if($res_c_vr_uni_ci_vb==null){$res_c_vr_uni_ci_vb=0;}
					if($res_c_vr_uni_ci_ov==null){$res_c_vr_uni_ci_ov=0;}
					if($res_c_vr_uni_ci_ov_is==null){$res_c_vr_uni_ci_ov_is=0;}
					if($res_c_vr_uni_ci_ov_im==null){$res_c_vr_uni_ci_ov_im=0;}
					if($res_c_vr_uni_ci_ov_oc==null){$res_c_vr_uni_ci_ov_oc=0;}
					if($res_c_vr_uni_ci_rf==null){$res_c_vr_uni_ci_rf=0;}
					if($res_c_vr_uni_ci_oi==null){$res_c_vr_uni_ci_oi=0;}
					if($res_c_vr_uni_ci_oi_oi1==null){$res_c_vr_uni_ci_oi_oi1=0;}
					if($res_c_vr_uni_ci_oi_oi2==null){$res_c_vr_uni_ci_oi_oi2=0;}
					if($res_c_vr_uni_ci_oi_oi3==null){$res_c_vr_uni_ci_oi_oi3=0;}
					if($res_c_vr_uni_it==null){$res_c_vr_uni_it=0;}
					if($res_c_vr_uni_up==null){$res_c_vr_uni_up=0;}
					if($res_c_vr_uni_up_cc==null){$res_c_vr_uni_up_cc=0;}
					if($res_c_vr_uni_up_ir==null){$res_c_vr_uni_up_ir=0;}
					if($res_c_vr_uni_up2==null){$res_c_vr_uni_up2=0;}
					if($res_c_vr_uni_cv==null){$res_c_vr_uni_cv=0;}
					if($res_c_vr_uni_vt==null){$res_c_vr_uni_vt=0;}
		
			//----------------------------------RESUMEN---------------------
							
							//Insercion de datos
							$envio_Tb_Resumen="INSERT INTO tb_resumen (
							RES_DET_PRO_ID,
							RES_DET_ETAPA,
								RES_MODELO,
								RES_FECHA,
								RES_TOTAL_UNIDADES,
								RES_AREA_PROMEDIO_UNIDAD,
								RES_TOTAL_AREA_CONSTRUIDA,
								RES_TOTAL_AREA_VENDIBLE,
								RES_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO,
								RES_DENSIDAD_INDICE_OCUPACION,
								RES_VALOR_METRO_CUADRADO_LOTE_URBANIZADO,
								RES_NUMERO_PARQUEOS,
								RES_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD,
								RES_NUMERO_DEPOSITOS,
								RES_FECHA_INICIO_Y_TERMINACION_VENTAS,
								RES_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION,
								RES_RITMO_VENTAS_MENSUAL_PROMEDIO,
								RES_PUNTO_EQUILIBRIO_UNIDADES,
								RES_TASA_PROMEDIO_INCREMENTO_PRECIOS,
								RES_PORCENTAJE_VENTAS_NUEVOGAR,
								RES_FECHA_PRESUPUESTO,
								RES_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO,
								RES_C_TOT_UI,
								RES_C_TOT_UIP,
								RES_C_TOT_UII,
								RES_C_TOT_CM,
								RES_C_TOT_CMP,
								RES_C_TOT_CMI,
								RES_C_TOT_GI,
								RES_C_TOT_CP,
								RES_C_TOT_CD,
								RES_C_TOT_CD_HC,
								RES_C_TOT_CD_HC_HC,
								RES_C_TOT_CD_HC_GR,
								RES_C_TOT_CD_HI,
								RES_C_TOT_CD_HI_HI,
								RES_C_TOT_CD_HI_GR,
								RES_C_TOT_CD_OH,
								RES_C_TOT_CD_OH_OH,
								RES_C_TOT_CD_OH_GR,
								RES_C_TOT_CD_ID,
								RES_C_TOT_CT,
								RES_C_TOT_CT_HG,
								RES_C_TOT_CT_HG_HG,
								RES_C_TOT_CT_HG_GR,
								RES_C_TOT_CT_HV,
								RES_C_TOT_CT_HV_HV,
								RES_C_TOT_CT_HV_GR,
								RES_C_TOT_CT_CP,
								RES_C_TOT_CT_CP_SV,
								RES_C_TOT_CT_CP_GP,
								RES_C_TOT_CT_CP_GS,
								RES_C_TOT_CT_CP_AU,
								RES_C_TOT_CT_CP_CV,
								RES_C_TOT_CT_GL,
								RES_C_TOT_CT_GL_HC,
								RES_C_TOT_CT_GL_NR,
								RES_C_TOT_CT_GL_IP,
								RES_C_TOT_CT_GL_IC,
								RES_C_TOT_CA,
								RES_C_TOT_CA_VT,
								RES_C_TOT_CA_VT_PV,
								RES_C_TOT_CA_VT_OP,
								RES_C_TOT_CA_CF,
								RES_C_TOT_CA_CF_PA,
								RES_C_TOT_CA_CF_NH,
								RES_C_TOT_CA_GF,
								RES_C_TOT_CA_GF_IC,
								RES_C_TOT_CA_GF_OC,
								RES_C_TOT_CA_GF_CM,
								RES_C_TOT_CA_GF_IT,
								RES_C_TOT_CA_OC,
								RES_C_TOT_CA_OC_OC1,
								RES_C_TOT_CA_OC_OC2,
								RES_C_TOT_CA_OC_OC3,
								RES_C_TOT_CA_RI,
								RES_C_TOT_CI,
								RES_C_TOT_CI_VB,
								RES_C_TOT_CI_OV,
								RES_C_TOT_CI_OV_IS,
								RES_C_TOT_CI_OV_IM,
								RES_C_TOT_CI_OV_OC,
								RES_C_TOT_CI_RF,
								RES_C_TOT_CI_OI,
								RES_C_TOT_CI_OI_OI1,
								RES_C_TOT_CI_OI_OI2,
								RES_C_TOT_CI_OI_OI3,
								RES_C_TOT_IT,
								RES_C_TOT_UP,
								RES_C_TOT_UP_CC,
								RES_C_TOT_UP_IR,
								RES_C_TOT_UP2,
								RES_C_TOT_CV,
								RES_C_TOT_VT,
								RES_C_TOT_CVG,
								RES_C_TOT_TIR,
								RES_C_TOT_VPN,
								RES_C_TOT_UC,
								RES_C_TOT_UC_CO,
								RES_C_TOT_UC_TI,
								RES_C_TOT_UC_PR,
								RES_C_TOT_TIR_C,
								RES_C_TOT_VPN_C,
								RES_C_PORC_VENT_UI,
								RES_C_PORC_VENT_UIP,
								RES_C_PORC_VENT_UII,
								RES_C_PORC_VENT_CM,
								RES_C_PORC_VENT_CMP,
								RES_C_PORC_VENT_CMI,
								RES_C_PORC_VENT_GI,
								RES_C_PORC_VENT_CP,
								RES_C_PORC_VENT_CD,
								RES_C_PORC_VENT_CD_HC,
								RES_C_PORC_VENT_CD_HC_HC,
								RES_C_PORC_VENT_CD_HC_GR,
								RES_C_PORC_VENT_CD_HI,
								RES_C_PORC_VENT_CD_HI_HI,
								RES_C_PORC_VENT_CD_HI_GR,
								RES_C_PORC_VENT_CD_OH,
								RES_C_PORC_VENT_CD_OH_OH,
								RES_C_PORC_VENT_CD_OH_GR,
								RES_C_PORC_VENT_CD_ID,
								RES_C_PORC_VENT_CT,
								RES_C_PORC_VENT_CT_HG,
								RES_C_PORC_VENT_CT_HG_HG,
								RES_C_PORC_VENT_CT_HG_GR,
								RES_C_PORC_VENT_CT_HV,
								RES_C_PORC_VENT_CT_HV_HV,
								RES_C_PORC_VENT_CT_HV_GR,
								RES_C_PORC_VENT_CT_CP,
								RES_C_PORC_VENT_CT_CP_SV,
								RES_C_PORC_VENT_CT_CP_GP,
								RES_C_PORC_VENT_CT_CP_GS,
								RES_C_PORC_VENT_CT_CP_AU,
								RES_C_PORC_VENT_CT_CP_CV,
								RES_C_PORC_VENT_CT_GL,
								RES_C_PORC_VENT_CT_GL_HC,
								RES_C_PORC_VENT_CT_GL_NR,
								RES_C_PORC_VENT_CT_GL_IP,
								RES_C_PORC_VENT_CT_GL_IC,
								RES_C_PORC_VENT_CA,
								RES_C_PORC_VENT_CA_VT,
								RES_C_PORC_VENT_CA_VT_PV,
								RES_C_PORC_VENT_CA_VT_OP,
								RES_C_PORC_VENT_CA_CF,
								RES_C_PORC_VENT_CA_CF_PA,
								RES_C_PORC_VENT_CA_CF_NH,
								RES_C_PORC_VENT_CA_GF,
								RES_C_PORC_VENT_CA_GF_IC,
								RES_C_PORC_VENT_CA_GF_OC,
								RES_C_PORC_VENT_CA_GF_CM,
								RES_C_PORC_VENT_CA_GF_IT,
								RES_C_PORC_VENT_CA_OC,
								RES_C_PORC_VENT_CA_OC_OC1,
								RES_C_PORC_VENT_CA_OC_OC2,
								RES_C_PORC_VENT_CA_OC_OC3,
								RES_C_PORC_VENT_CA_RI,
								RES_C_PORC_VENT_CI,
								RES_C_PORC_VENT_CI_VB,
								RES_C_PORC_VENT_CI_OV,
								RES_C_PORC_VENT_CI_OV_IS,
								RES_C_PORC_VENT_CI_OV_IM,
								RES_C_PORC_VENT_CI_OV_OC,
								RES_C_PORC_VENT_CI_RF,
								RES_C_PORC_VENT_CI_OI,
								RES_C_PORC_VENT_CI_OI_OI1,
								RES_C_PORC_VENT_CI_OI_OI2,
								RES_C_PORC_VENT_CI_OI_OI3,
								RES_C_PORC_VENT_IT,
								RES_C_PORC_VENT_UP,
								RES_C_PORC_VENT_UP_CC,
								RES_C_PORC_VENT_UP_IR,
								RES_C_PORC_VENT_UP2,
								RES_C_PORC_VENT_CV,
								RES_C_PORC_VENT_VT,
								RES_C_PORC_VENT_CVG,
								RES_C_PORC_VENT_TIR,
								RES_C_PORC_VENT_VPN,
								RES_C_PORC_VENT_UC,
								RES_C_PORC_VENT_UC_CO,
								RES_C_PORC_VENT_UC_TI,
								RES_C_PORC_VENT_UC_PR,
								RES_C_PORC_VENT_TIR_C,
								RES_C_PORC_VENT_VPN_C,
								RES_C_VR_M_CON_UI,
								RES_C_VR_M_CON_UIP,
								RES_C_VR_M_CON_UII,
								RES_C_VR_M_CON_CM,
								RES_C_VR_M_CON_CMP,
								RES_C_VR_M_CON_CMI,
								RES_C_VR_M_CON_GI,
								RES_C_VR_M_CON_CP,
								RES_C_VR_M_CON_CD,
								RES_C_VR_M_CON_CD_HC,
								RES_C_VR_M_CON_CD_HC_HC,
								RES_C_VR_M_CON_CD_HC_GR,
								RES_C_VR_M_CON_CD_HI,
								RES_C_VR_M_CON_CD_HI_HI,
								RES_C_VR_M_CON_CD_HI_GR,
								RES_C_VR_M_CON_CD_OH,
								RES_C_VR_M_CON_CD_OH_OH,
								RES_C_VR_M_CON_CD_OH_GR,
								RES_C_VR_M_CON_CD_ID,
								RES_C_VR_M_CON_CT,
								RES_C_VR_M_CON_CT_HG,
								RES_C_VR_M_CON_CT_HG_HG,
								RES_C_VR_M_CON_CT_HG_GR,
								RES_C_VR_M_CON_CT_HV,
								RES_C_VR_M_CON_CT_HV_HV,
								RES_C_VR_M_CON_CT_HV_GR,
								RES_C_VR_M_CON_CT_CP,
								RES_C_VR_M_CON_CT_CP_SV,
								RES_C_VR_M_CON_CT_CP_GP,
								RES_C_VR_M_CON_CT_CP_GS,
								RES_C_VR_M_CON_CT_CP_AU,
								RES_C_VR_M_CON_CT_CP_CV,
								RES_C_VR_M_CON_CT_GL,
								RES_C_VR_M_CON_CT_GL_HC,
								RES_C_VR_M_CON_CT_GL_NR,
								RES_C_VR_M_CON_CT_GL_IP,
								RES_C_VR_M_CON_CT_GL_IC,
								RES_C_VR_M_CON_CA,
								RES_C_VR_M_CON_CA_VT,
								RES_C_VR_M_CON_CA_VT_PV,
								RES_C_VR_M_CON_CA_VT_OP,
								RES_C_VR_M_CON_CA_CF,
								RES_C_VR_M_CON_CA_CF_PA,
								RES_C_VR_M_CON_CA_CF_NH,
								RES_C_VR_M_CON_CA_GF,
								RES_C_VR_M_CON_CA_GF_IC,
								RES_C_VR_M_CON_CA_GF_OC,
								RES_C_VR_M_CON_CA_GF_CM,
								RES_C_VR_M_CON_CA_GF_IT,
								RES_C_VR_M_CON_CA_OC,
								RES_C_VR_M_CON_CA_OC_OC1,
								RES_C_VR_M_CON_CA_OC_OC2,
								RES_C_VR_M_CON_CA_OC_OC3,
								RES_C_VR_M_CON_CA_RI,
								RES_C_VR_M_CON_CI,
								RES_C_VR_M_CON_CI_VB,
								RES_C_VR_M_CON_CI_OV,
								RES_C_VR_M_CON_CI_OV_IS,
								RES_C_VR_M_CON_CI_OV_IM,
								RES_C_VR_M_CON_CI_OV_OC,
								RES_C_VR_M_CON_CI_RF,
								RES_C_VR_M_CON_CI_OI,
								RES_C_VR_M_CON_CI_OI_OI1,
								RES_C_VR_M_CON_CI_OI_OI2,
								RES_C_VR_M_CON_CI_OI_OI3,
								RES_C_VR_M_CON_IT,
								RES_C_VR_M_CON_UP,
								RES_C_VR_M_CON_UP_CC,
								RES_C_VR_M_CON_UP_IR,
								RES_C_VR_M_CON_UP2,
								RES_C_VR_M_CON_CV,
								RES_C_VR_M_CON_VT,
								RES_C_VR_M_VEN_UI,
								RES_C_VR_M_VEN_UIP,
								RES_C_VR_M_VEN_UII,
								RES_C_VR_M_VEN_CM,
								RES_C_VR_M_VEN_CMP,
								RES_C_VR_M_VEN_CMI,
								RES_C_VR_M_VEN_GI,
								RES_C_VR_M_VEN_CP,
								RES_C_VR_M_VEN_CD,
								RES_C_VR_M_VEN_CD_HC,
								RES_C_VR_M_VEN_CD_HC_HC,
								RES_C_VR_M_VEN_CD_HC_GR,
								RES_C_VR_M_VEN_CD_HI,
								RES_C_VR_M_VEN_CD_HI_HI,
								RES_C_VR_M_VEN_CD_HI_GR,
								RES_C_VR_M_VEN_CD_OH,
								RES_C_VR_M_VEN_CD_OH_OH,
								RES_C_VR_M_VEN_CD_OH_GR,
								RES_C_VR_M_VEN_CD_ID,
								RES_C_VR_M_VEN_CT,
								RES_C_VR_M_VEN_CT_HG,
								RES_C_VR_M_VEN_CT_HG_HG,
								RES_C_VR_M_VEN_CT_HG_GR,
								RES_C_VR_M_VEN_CT_HV,
								RES_C_VR_M_VEN_CT_HV_HV,
								RES_C_VR_M_VEN_CT_HV_GR,
								RES_C_VR_M_VEN_CT_CP,
								RES_C_VR_M_VEN_CT_CP_SV,
								RES_C_VR_M_VEN_CT_CP_GP,
								RES_C_VR_M_VEN_CT_CP_GS,
								RES_C_VR_M_VEN_CT_CP_AU,
								RES_C_VR_M_VEN_CT_CP_CV,
								RES_C_VR_M_VEN_CT_GL,
								RES_C_VR_M_VEN_CT_GL_HC,
								RES_C_VR_M_VEN_CT_GL_NR,
								RES_C_VR_M_VEN_CT_GL_IP,
								RES_C_VR_M_VEN_CT_GL_IC,
								RES_C_VR_M_VEN_CA,
								RES_C_VR_M_VEN_CA_VT,
								RES_C_VR_M_VEN_CA_VT_PV,
								RES_C_VR_M_VEN_CA_VT_OP,
								RES_C_VR_M_VEN_CA_CF,
								RES_C_VR_M_VEN_CA_CF_PA,
								RES_C_VR_M_VEN_CA_CF_NH,
								RES_C_VR_M_VEN_CA_GF,
								RES_C_VR_M_VEN_CA_GF_IC,
								RES_C_VR_M_VEN_CA_GF_OC,
								RES_C_VR_M_VEN_CA_GF_CM,
								RES_C_VR_M_VEN_CA_GF_IT,
								RES_C_VR_M_VEN_CA_OC,
								RES_C_VR_M_VEN_CA_OC_OC1,
								RES_C_VR_M_VEN_CA_OC_OC2,
								RES_C_VR_M_VEN_CA_OC_OC3,
								RES_C_VR_M_VEN_CA_RI,
								RES_C_VR_M_VEN_CI,
								RES_C_VR_M_VEN_CI_VB,
								RES_C_VR_M_VEN_CI_OV,
								RES_C_VR_M_VEN_CI_OV_IS,
								RES_C_VR_M_VEN_CI_OV_IM,
								RES_C_VR_M_VEN_CI_OV_OC,
								RES_C_VR_M_VEN_CI_RF,
								RES_C_VR_M_VEN_CI_OI,
								RES_C_VR_M_VEN_CI_OI_OI1,
								RES_C_VR_M_VEN_CI_OI_OI2,
								RES_C_VR_M_VEN_CI_OI_OI3,
								RES_C_VR_M_VEN_IT,
								RES_C_VR_M_VEN_UP,
								RES_C_VR_M_VEN_UP_CC,
								RES_C_VR_M_VEN_UP_IR,
								RES_C_VR_M_VEN_UP2,
								RES_C_VR_M_VEN_CV,
								RES_C_VR_M_VEN_VT,
								RES_C_VR_UNI_UI,
								RES_C_VR_UNI_UIP,
								RES_C_VR_UNI_UII,
								RES_C_VR_UNI_CM,
								RES_C_VR_UNI_CMP,
								RES_C_VR_UNI_CMI,
								RES_C_VR_UNI_GI,
								RES_C_VR_UNI_CP,
								RES_C_VR_UNI_CD,
								RES_C_VR_UNI_CD_HC,
								RES_C_VR_UNI_CD_HC_HC,
								RES_C_VR_UNI_CD_HC_GR,
								RES_C_VR_UNI_CD_HI,
								RES_C_VR_UNI_CD_HI_HI,
								RES_C_VR_UNI_CD_HI_GR,
								RES_C_VR_UNI_CD_OH,
								RES_C_VR_UNI_CD_OH_OH,
								RES_C_VR_UNI_CD_OH_GR,
								RES_C_VR_UNI_CD_ID,
								RES_C_VR_UNI_CT,
								RES_C_VR_UNI_CT_HG,
								RES_C_VR_UNI_CT_HG_HG,
								RES_C_VR_UNI_CT_HG_GR,
								RES_C_VR_UNI_CT_HV,
								RES_C_VR_UNI_CT_HV_HV,
								RES_C_VR_UNI_CT_HV_GR,
								RES_C_VR_UNI_CT_CP,
								RES_C_VR_UNI_CT_CP_SV,
								RES_C_VR_UNI_CT_CP_GP,
								RES_C_VR_UNI_CT_CP_GS,
								RES_C_VR_UNI_CT_CP_AU,
								RES_C_VR_UNI_CT_CP_CV,
								RES_C_VR_UNI_CT_GL,
								RES_C_VR_UNI_CT_GL_HC,
								RES_C_VR_UNI_CT_GL_NR,
								RES_C_VR_UNI_CT_GL_IP,
								RES_C_VR_UNI_CT_GL_IC,
								RES_C_VR_UNI_CA,
								RES_C_VR_UNI_CA_VT,
								RES_C_VR_UNI_CA_VT_PV,
								RES_C_VR_UNI_CA_VT_OP,
								RES_C_VR_UNI_CA_CF,
								RES_C_VR_UNI_CA_CF_PA,
								RES_C_VR_UNI_CA_CF_NH,
								RES_C_VR_UNI_CA_GF,
								RES_C_VR_UNI_CA_GF_IC,
								RES_C_VR_UNI_CA_GF_OC,
								RES_C_VR_UNI_CA_GF_CM,
								RES_C_VR_UNI_CA_GF_IT,
								RES_C_VR_UNI_CA_OC,
								RES_C_VR_UNI_CA_OC_OC1,
								RES_C_VR_UNI_CA_OC_OC2,
								RES_C_VR_UNI_CA_OC_OC3,
								RES_C_VR_UNI_CA_RI,
								RES_C_VR_UNI_CI,
								RES_C_VR_UNI_CI_VB,
								RES_C_VR_UNI_CI_OV,
								RES_C_VR_UNI_CI_OV_IS,
								RES_C_VR_UNI_CI_OV_IM,
								RES_C_VR_UNI_CI_OV_OC,
								RES_C_VR_UNI_CI_RF,
								RES_C_VR_UNI_CI_OI,
								RES_C_VR_UNI_CI_OI_OI1,
								RES_C_VR_UNI_CI_OI_OI2,
								RES_C_VR_UNI_CI_OI_OI3,
								RES_C_VR_UNI_IT,
								RES_C_VR_UNI_UP,
								RES_C_VR_UNI_UP_CC,
								RES_C_VR_UNI_UP_IR,
								RES_C_VR_UNI_UP2,
								RES_C_VR_UNI_CV,
								RES_C_VR_UNI_VT)
								
							VALUES ('$res_id',
										$res_det_etapa,
										'$res_modelo',
										'$res_fecha',
										$res_total_unidades,
										$res_area_promedio_unidad,
										$res_total_area_construida,
										$res_total_area_vendible,
										$res_area_util_lote_asignada_subproyecto,
										$res_densidad_indice_ocupacion,
										$res_valor_metro_cuadrado_lote_urbanizado,
										$res_numero_parqueos,
										$res_relacion_parqueos_numero_parqueos_por_unidad,
										$res_numero_depositos,
										'$res_fecha_inicio_y_terminacion_ventas',
										'$res_fecha_inicio_y_terminacion_construccion',
										$res_ritmo_ventas_mensual_promedio,
										'$res_punto_equilibrio_unidades',
										$res_tasa_promedio_incremento_precios,
										$res_porcentaje_ventas_nuevogar,
										'$res_fecha_presupuesto',
										$res_tasa_promedio_incremento_presupuesto,
										$res_c_tot_ui,
								$res_c_tot_uip,
								$res_c_tot_uii,
								$res_c_tot_cm,
								$res_c_tot_cmp,
								$res_c_tot_cmi,
								$res_c_tot_gi,
								$res_c_tot_cp,
								$res_c_tot_cd,
								$res_c_tot_cd_hc,
								$res_c_tot_cd_hc_hc,
								$res_c_tot_cd_hc_gr,
								$res_c_tot_cd_hi,
								$res_c_tot_cd_hi_hi,
								$res_c_tot_cd_hi_gr,
								$res_c_tot_cd_oh,
								$res_c_tot_cd_oh_oh,
								$res_c_tot_cd_oh_gr,
								$res_c_tot_cd_id,
								$res_c_tot_ct,
								$res_c_tot_ct_hg,
								$res_c_tot_ct_hg_hg,
								$res_c_tot_ct_hg_gr,
								$res_c_tot_ct_hv,
								$res_c_tot_ct_hv_hv,
								$res_c_tot_ct_hv_gr,
								$res_c_tot_ct_cp,
								$res_c_tot_ct_cp_sv,
								$res_c_tot_ct_cp_gp,
								$res_c_tot_ct_cp_gs,
								$res_c_tot_ct_cp_au,
								$res_c_tot_ct_cp_cv,
								$res_c_tot_ct_gl,
								$res_c_tot_ct_gl_hc,
								$res_c_tot_ct_gl_nr,
								$res_c_tot_ct_gl_ip,
								$res_c_tot_ct_gl_ic,
								$res_c_tot_ca,
								$res_c_tot_ca_vt,
								$res_c_tot_ca_vt_pv,
								$res_c_tot_ca_vt_op,
								$res_c_tot_ca_cf,
								$res_c_tot_ca_cf_pa,
								$res_c_tot_ca_cf_nh,
								$res_c_tot_ca_gf,
								$res_c_tot_ca_gf_ic,
								$res_c_tot_ca_gf_oc,
								$res_c_tot_ca_gf_cm,
								$res_c_tot_ca_gf_it,
								$res_c_tot_ca_oc,
								$res_c_tot_ca_oc_oc1,
								$res_c_tot_ca_oc_oc2,
								$res_c_tot_ca_oc_oc3,
								$res_c_tot_ca_ri,
								$res_c_tot_ci,
								$res_c_tot_ci_vb,
								$res_c_tot_ci_ov,
								$res_c_tot_ci_ov_is,
								$res_c_tot_ci_ov_im,
								$res_c_tot_ci_ov_oc,
								$res_c_tot_ci_rf,
								$res_c_tot_ci_oi,
								$res_c_tot_ci_oi_oi1,
								$res_c_tot_ci_oi_oi2,
								$res_c_tot_ci_oi_oi3,
								$res_c_tot_it,
								$res_c_tot_up,
								$res_c_tot_up_cc,
								$res_c_tot_up_ir,
								$res_c_tot_up2,
								$res_c_tot_cv,
								$res_c_tot_vt,
								$res_c_tot_cvg,
								$res_c_tot_tir,
								$res_c_tot_vpn,
								$res_c_tot_uc,
								$res_c_tot_uc_co,
								$res_c_tot_uc_ti,
								$res_c_tot_uc_pr,
								$res_c_tot_tir_c,
								$res_c_tot_vpn_c,
								$res_c_porc_vent_ui,
								$res_c_porc_vent_uip,
								$res_c_porc_vent_uii,
								$res_c_porc_vent_cm,
								$res_c_porc_vent_cmp,
								$res_c_porc_vent_cmi,
								$res_c_porc_vent_gi,
								$res_c_porc_vent_cp,
								$res_c_porc_vent_cd,
								$res_c_porc_vent_cd_hc,
								$res_c_porc_vent_cd_hc_hc,
								$res_c_porc_vent_cd_hc_gr,
								$res_c_porc_vent_cd_hi,
								$res_c_porc_vent_cd_hi_hi,
								$res_c_porc_vent_cd_hi_gr,
								$res_c_porc_vent_cd_oh,
								$res_c_porc_vent_cd_oh_oh,
								$res_c_porc_vent_cd_oh_gr,
								$res_c_porc_vent_cd_id,
								$res_c_porc_vent_ct,
								$res_c_porc_vent_ct_hg,
								$res_c_porc_vent_ct_hg_hg,
								$res_c_porc_vent_ct_hg_gr,
								$res_c_porc_vent_ct_hv,
								$res_c_porc_vent_ct_hv_hv,
								$res_c_porc_vent_ct_hv_gr,
								$res_c_porc_vent_ct_cp,
								$res_c_porc_vent_ct_cp_sv,
								$res_c_porc_vent_ct_cp_gp,
								$res_c_porc_vent_ct_cp_gs,
								$res_c_porc_vent_ct_cp_au,
								$res_c_porc_vent_ct_cp_cv,
								$res_c_porc_vent_ct_gl,
								$res_c_porc_vent_ct_gl_hc,
								$res_c_porc_vent_ct_gl_nr,
								$res_c_porc_vent_ct_gl_ip,
								$res_c_porc_vent_ct_gl_ic,
								$res_c_porc_vent_ca,
								$res_c_porc_vent_ca_vt,
								$res_c_porc_vent_ca_vt_pv,
								$res_c_porc_vent_ca_vt_op,
								$res_c_porc_vent_ca_cf,
								$res_c_porc_vent_ca_cf_pa,
								$res_c_porc_vent_ca_cf_nh,
								$res_c_porc_vent_ca_gf,
								$res_c_porc_vent_ca_gf_ic,
								$res_c_porc_vent_ca_gf_oc,
								$res_c_porc_vent_ca_gf_cm,
								$res_c_porc_vent_ca_gf_it,
								$res_c_porc_vent_ca_oc,
								$res_c_porc_vent_ca_oc_oc1,
								$res_c_porc_vent_ca_oc_oc2,
								$res_c_porc_vent_ca_oc_oc3,
								$res_c_porc_vent_ca_ri,
								$res_c_porc_vent_ci,
								$res_c_porc_vent_ci_vb,
								$res_c_porc_vent_ci_ov,
								$res_c_porc_vent_ci_ov_is,
								$res_c_porc_vent_ci_ov_im,
								$res_c_porc_vent_ci_ov_oc,
								$res_c_porc_vent_ci_rf,
								$res_c_porc_vent_ci_oi,
								$res_c_porc_vent_ci_oi_oi1,
								$res_c_porc_vent_ci_oi_oi2,
								$res_c_porc_vent_ci_oi_oi3,
								$res_c_porc_vent_it,
								$res_c_porc_vent_up,
								$res_c_porc_vent_up_cc,
								$res_c_porc_vent_up_ir,
								$res_c_porc_vent_up2,
								$res_c_porc_vent_cv,
								$res_c_porc_vent_vt,
								$res_c_porc_vent_cvg,
								$res_c_porc_vent_tir,
								$res_c_porc_vent_vpn,
								$res_c_porc_vent_uc,
								$res_c_porc_vent_uc_co,
								$res_c_porc_vent_uc_ti,
								$res_c_porc_vent_uc_pr,
								$res_c_porc_vent_tir_c,
								$res_c_porc_vent_vpn_c,
								$res_c_vr_m_con_ui,
								$res_c_vr_m_con_uip,
								$res_c_vr_m_con_uii,
								$res_c_vr_m_con_cm,
								$res_c_vr_m_con_cmp,
								$res_c_vr_m_con_cmi,
								$res_c_vr_m_con_gi,
								$res_c_vr_m_con_cp,
								$res_c_vr_m_con_cd,
								$res_c_vr_m_con_cd_hc,
								$res_c_vr_m_con_cd_hc_hc,
								$res_c_vr_m_con_cd_hc_gr,
								$res_c_vr_m_con_cd_hi,
								$res_c_vr_m_con_cd_hi_hi,
								$res_c_vr_m_con_cd_hi_gr,
								$res_c_vr_m_con_cd_oh,
								$res_c_vr_m_con_cd_oh_oh,
								$res_c_vr_m_con_cd_oh_gr,
								$res_c_vr_m_con_cd_id,
								$res_c_vr_m_con_ct,
								$res_c_vr_m_con_ct_hg,
								$res_c_vr_m_con_ct_hg_hg,
								$res_c_vr_m_con_ct_hg_gr,
								$res_c_vr_m_con_ct_hv,
								$res_c_vr_m_con_ct_hv_hv,
								$res_c_vr_m_con_ct_hv_gr,
								$res_c_vr_m_con_ct_cp,
								$res_c_vr_m_con_ct_cp_sv,
								$res_c_vr_m_con_ct_cp_gp,
								$res_c_vr_m_con_ct_cp_gs,
								$res_c_vr_m_con_ct_cp_au,
								$res_c_vr_m_con_ct_cp_cv,
								$res_c_vr_m_con_ct_gl,
								$res_c_vr_m_con_ct_gl_hc,
								$res_c_vr_m_con_ct_gl_nr,
								$res_c_vr_m_con_ct_gl_ip,
								$res_c_vr_m_con_ct_gl_ic,
								$res_c_vr_m_con_ca,
								$res_c_vr_m_con_ca_vt,
								$res_c_vr_m_con_ca_vt_pv,
								$res_c_vr_m_con_ca_vt_op,
								$res_c_vr_m_con_ca_cf,
								$res_c_vr_m_con_ca_cf_pa,
								$res_c_vr_m_con_ca_cf_nh,
								$res_c_vr_m_con_ca_gf,
								$res_c_vr_m_con_ca_gf_ic,
								$res_c_vr_m_con_ca_gf_oc,
								$res_c_vr_m_con_ca_gf_cm,
								$res_c_vr_m_con_ca_gf_it,
								$res_c_vr_m_con_ca_oc,
								$res_c_vr_m_con_ca_oc_oc1,
								$res_c_vr_m_con_ca_oc_oc2,
								$res_c_vr_m_con_ca_oc_oc3,
								$res_c_vr_m_con_ca_ri,
								$res_c_vr_m_con_ci,
								$res_c_vr_m_con_ci_vb,
								$res_c_vr_m_con_ci_ov,
								$res_c_vr_m_con_ci_ov_is,
								$res_c_vr_m_con_ci_ov_im,
								$res_c_vr_m_con_ci_ov_oc,
								$res_c_vr_m_con_ci_rf,
								$res_c_vr_m_con_ci_oi,
								$res_c_vr_m_con_ci_oi_oi1,
								$res_c_vr_m_con_ci_oi_oi2,
								$res_c_vr_m_con_ci_oi_oi3,
								$res_c_vr_m_con_it,
								$res_c_vr_m_con_up,
								$res_c_vr_m_con_up_cc,
								$res_c_vr_m_con_up_ir,
								$res_c_vr_m_con_up2,
								$res_c_vr_m_con_cv,
								$res_c_vr_m_con_vt,
								$res_c_vr_m_ven_ui,
								$res_c_vr_m_ven_uip,
								$res_c_vr_m_ven_uii,
								$res_c_vr_m_ven_cm,
								$res_c_vr_m_ven_cmp,
								$res_c_vr_m_ven_cmi,
								$res_c_vr_m_ven_gi,
								$res_c_vr_m_ven_cp,
								$res_c_vr_m_ven_cd,
								$res_c_vr_m_ven_cd_hc,
								$res_c_vr_m_ven_cd_hc_hc,
								$res_c_vr_m_ven_cd_hc_gr,
								$res_c_vr_m_ven_cd_hi,
								$res_c_vr_m_ven_cd_hi_hi,
								$res_c_vr_m_ven_cd_hi_gr,
								$res_c_vr_m_ven_cd_oh,
								$res_c_vr_m_ven_cd_oh_oh,
								$res_c_vr_m_ven_cd_oh_gr,
								$res_c_vr_m_ven_cd_id,
								$res_c_vr_m_ven_ct,
								$res_c_vr_m_ven_ct_hg,
								$res_c_vr_m_ven_ct_hg_hg,
								$res_c_vr_m_ven_ct_hg_gr,
								$res_c_vr_m_ven_ct_hv,
								$res_c_vr_m_ven_ct_hv_hv,
								$res_c_vr_m_ven_ct_hv_gr,
								$res_c_vr_m_ven_ct_cp,
								$res_c_vr_m_ven_ct_cp_sv,
								$res_c_vr_m_ven_ct_cp_gp,
								$res_c_vr_m_ven_ct_cp_gs,
								$res_c_vr_m_ven_ct_cp_au,
								$res_c_vr_m_ven_ct_cp_cv,
								$res_c_vr_m_ven_ct_gl,
								$res_c_vr_m_ven_ct_gl_hc,
								$res_c_vr_m_ven_ct_gl_nr,
								$res_c_vr_m_ven_ct_gl_ip,
								$res_c_vr_m_ven_ct_gl_ic,
								$res_c_vr_m_ven_ca,
								$res_c_vr_m_ven_ca_vt,
								$res_c_vr_m_ven_ca_vt_pv,
								$res_c_vr_m_ven_ca_vt_op,
								$res_c_vr_m_ven_ca_cf,
								$res_c_vr_m_ven_ca_cf_pa,
								$res_c_vr_m_ven_ca_cf_nh,
								$res_c_vr_m_ven_ca_gf,
								$res_c_vr_m_ven_ca_gf_ic,
								$res_c_vr_m_ven_ca_gf_oc,
								$res_c_vr_m_ven_ca_gf_cm,
								$res_c_vr_m_ven_ca_gf_it,
								$res_c_vr_m_ven_ca_oc,
								$res_c_vr_m_ven_ca_oc_oc1,
								$res_c_vr_m_ven_ca_oc_oc2,
								$res_c_vr_m_ven_ca_oc_oc3,
								$res_c_vr_m_ven_ca_ri,
								$res_c_vr_m_ven_ci,
								$res_c_vr_m_ven_ci_vb,
								$res_c_vr_m_ven_ci_ov,
								$res_c_vr_m_ven_ci_ov_is,
								$res_c_vr_m_ven_ci_ov_im,
								$res_c_vr_m_ven_ci_ov_oc,
								$res_c_vr_m_ven_ci_rf,
								$res_c_vr_m_ven_ci_oi,
								$res_c_vr_m_ven_ci_oi_oi1,
								$res_c_vr_m_ven_ci_oi_oi2,
								$res_c_vr_m_ven_ci_oi_oi3,
								$res_c_vr_m_ven_it,
								$res_c_vr_m_ven_up,
								$res_c_vr_m_ven_up_cc,
								$res_c_vr_m_ven_up_ir,
								$res_c_vr_m_ven_up2,
								$res_c_vr_m_ven_cv,
								$res_c_vr_m_ven_vt,
								$res_c_vr_uni_ui,
								$res_c_vr_uni_uip,
								$res_c_vr_uni_uii,
								$res_c_vr_uni_cm,
								$res_c_vr_uni_cmp,
								$res_c_vr_uni_cmi,
								$res_c_vr_uni_gi,
								$res_c_vr_uni_cp,
								$res_c_vr_uni_cd,
								$res_c_vr_uni_cd_hc,
								$res_c_vr_uni_cd_hc_hc,
								$res_c_vr_uni_cd_hc_gr,
								$res_c_vr_uni_cd_hi,
								$res_c_vr_uni_cd_hi_hi,
								$res_c_vr_uni_cd_hi_gr,
								$res_c_vr_uni_cd_oh,
								$res_c_vr_uni_cd_oh_oh,
								$res_c_vr_uni_cd_oh_gr,
								$res_c_vr_uni_cd_id,
								$res_c_vr_uni_ct,
								$res_c_vr_uni_ct_hg,
								$res_c_vr_uni_ct_hg_hg,
								$res_c_vr_uni_ct_hg_gr,
								$res_c_vr_uni_ct_hv,
								$res_c_vr_uni_ct_hv_hv,
								$res_c_vr_uni_ct_hv_gr,
								$res_c_vr_uni_ct_cp,
								$res_c_vr_uni_ct_cp_sv,
								$res_c_vr_uni_ct_cp_gp,
								$res_c_vr_uni_ct_cp_gs,
								$res_c_vr_uni_ct_cp_au,
								$res_c_vr_uni_ct_cp_cv,
								$res_c_vr_uni_ct_gl,
								$res_c_vr_uni_ct_gl_hc,
								$res_c_vr_uni_ct_gl_nr,
								$res_c_vr_uni_ct_gl_ip,
								$res_c_vr_uni_ct_gl_ic,
								$res_c_vr_uni_ca,
								$res_c_vr_uni_ca_vt,
								$res_c_vr_uni_ca_vt_pv,
								$res_c_vr_uni_ca_vt_op,
								$res_c_vr_uni_ca_cf,
								$res_c_vr_uni_ca_cf_pa,
								$res_c_vr_uni_ca_cf_nh,
								$res_c_vr_uni_ca_gf,
								$res_c_vr_uni_ca_gf_ic,
								$res_c_vr_uni_ca_gf_oc,
								$res_c_vr_uni_ca_gf_cm,
								$res_c_vr_uni_ca_gf_it,
								$res_c_vr_uni_ca_oc,
								$res_c_vr_uni_ca_oc_oc1,
								$res_c_vr_uni_ca_oc_oc2,
								$res_c_vr_uni_ca_oc_oc3,
								$res_c_vr_uni_ca_ri,
								$res_c_vr_uni_ci,
								$res_c_vr_uni_ci_vb,
								$res_c_vr_uni_ci_ov,
								$res_c_vr_uni_ci_ov_is,
								$res_c_vr_uni_ci_ov_im,
								$res_c_vr_uni_ci_ov_oc,
								$res_c_vr_uni_ci_rf,
								$res_c_vr_uni_ci_oi,
								$res_c_vr_uni_ci_oi_oi1,
								$res_c_vr_uni_ci_oi_oi2,
								$res_c_vr_uni_ci_oi_oi3,
								$res_c_vr_uni_it,
								$res_c_vr_uni_up,
								$res_c_vr_uni_up_cc,
								$res_c_vr_uni_up_ir,
								$res_c_vr_uni_up2,
								$res_c_vr_uni_cv,
								$res_c_vr_uni_vt
							)";
								
							if(!$resultado_res= $mysqli -> query($envio_Tb_Resumen)){
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							
							//----------------------------------RESUMEN---------------------
							
															
					}

							else{
								//$modelo="B";
								
							
							
							//Toma la informacion cenda por celda
							
									$objWorksheet = $objPHPExcel->setActiveSheetIndex(2);
									$res_id=$proyecto;		
									$res_det_etapa=$etapa;
									$res_modelo=$modelo;
									$res_temp= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 3)->getValue();
									list($temp_null,$res_fecha)= explode(" ",$res_temp);
									$res_total_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 6)->getValue();	
									$res_area_promedio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 7)->getValue();	
									$res_total_area_construida = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 8)->getValue();
									$res_total_area_vendible = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 9)->getValue();	
									$res_area_util_lote = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 10)->getValue();	
									$res_densidad = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 11)->getValue();
									$res_lote_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 12)->getValue();	
									$res_numero_parqueos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 13)->getValue();	
									$res_relacion_parqueos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 14)->getValue();	
									$res_numero_depositos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 15)->getValue();	
									$res_fecha_inicio_f_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 16)->getValue();	
									$res_fecha_inicio_f_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 17)->getValue();	
									$res_ritmo_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 18)->getValue();
									$res_punto_equilobrio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 19)->getValue();
									$res_tasa_promedio_precios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 20)->getValue();	
									$res_ventas_nuevo_hogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 21)->getValue();	
									$res_fecha_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 22)->getValue();	
									$res_tasa_promedio_incremento = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 23)->getValue();
									
									
									$res_c_tot_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 27)->getValue();	
									$res_c_tot_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 28)->getValue();
									$res_c_tot_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 29)->getValue();	
									$res_c_tot_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 30)->getValue();	
									$res_c_tot_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 31)->getValue();
									$res_c_tot_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 32)->getValue();	
									$res_c_tot_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 33)->getValue();
									$res_c_tot_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 34)->getValue();	
									$res_c_tot_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 35)->getValue();	
									$res_c_tot_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 36)->getValue();
									$res_c_tot_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 37)->getValue();	
									$res_c_tot_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 38)->getValue();	
									$res_c_tot_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 39)->getValue();	
									$res_c_tot_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 40)->getValue();	
									$res_c_tot_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 41)->getValue();
									$res_c_tot_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 42)->getValue();
									$res_c_tot_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 43)->getValue();	
									$res_c_tot_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 44)->getValue();	
									$res_c_tot_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 45)->getValue();	
									$res_c_tot_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 46)->getValue();	
									$res_c_tot_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 47)->getValue();	
									$res_c_tot_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 48)->getValue();
									$res_c_tot_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 49)->getValue();	
									$res_c_tot_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 50)->getValue();	
									$res_c_tot_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 51)->getValue();	
									$res_c_tot_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 52)->getValue();	
									$res_c_tot_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 53)->getValue();
									$res_c_tot_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 54)->getValue();	
									$res_c_tot_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 55)->getValue();	
									$res_c_tot_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 56)->getValue();	
									$res_c_tot_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 57)->getValue();	
									$res_c_tot_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 58)->getValue();	
									$res_c_tot_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 59)->getValue();
									$res_c_tot_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 60)->getValue();	
									$res_c_tot_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 61)->getValue();	
									$res_c_tot_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 62)->getValue();	
									$res_c_tot_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 63)->getValue();	
									$res_c_tot_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 64)->getValue();	
									$res_c_tot_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 65)->getValue();
									$res_c_tot_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 66)->getValue();	
									$res_c_tot_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 67)->getValue();	
									$res_c_tot_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 68)->getValue();	
									$res_c_tot_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 69)->getValue();	
									$res_c_tot_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 70)->getValue();	
									$res_c_tot_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 71)->getValue();
									$res_c_tot_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 72)->getValue();	
									$res_c_tot_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 73)->getValue();	
									$res_c_tot_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 74)->getValue();	
									$res_c_tot_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 75)->getValue();	
									$res_c_tot_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 76)->getValue();
									$res_c_tot_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 77)->getValue();
									$res_c_tot_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 78)->getValue();
									$res_c_tot_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 79)->getValue();
									$res_c_tot_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 80)->getValue();	
									$res_c_tot_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 81)->getValue();	
									$res_c_tot_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 82)->getValue();	
									$res_c_tot_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 83)->getValue();	
									$res_c_tot_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 84)->getValue();	
									$res_c_tot_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 85)->getValue();	
									$res_c_tot_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 86)->getValue();	
									$res_c_tot_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 87)->getValue();	
									$res_c_tot_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 88)->getValue();
									$res_c_tot_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
									$res_c_tot_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 90)->getValue();
									$res_c_tot_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 91)->getValue();
									$res_c_tot_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 92)->getValue();
									$res_c_tot_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 93)->getValue();	
									$res_c_tot_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 94)->getValue();	
									$res_c_tot_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 95)->getValue();	
									$res_c_tot_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 96)->getValue();	
									$res_c_tot_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 98)->getValue();	
									$res_c_tot_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 99)->getValue();	
									$res_c_tot_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 100)->getValue();	
									$res_c_tot_tir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 102)->getValue();
									$res_c_tot_vpn =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 103)->getValue();	
									$res_c_tot_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 105)->getValue();	
									$res_c_tot_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 106)->getValue();	
									$res_c_tot_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 107)->getValue();	
									$res_c_tot_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 108)->getValue();	
									$res_c_tot_tir_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 110)->getValue();	
									$res_c_tot_vpn_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 111)->getValue();
									
									$res_c_porc_vent_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 27)->getValue();	
									$res_c_porc_vent_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 28)->getValue();
									$res_c_porc_vent_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 29)->getValue();	
									$res_c_porc_vent_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 30)->getValue();	
									$res_c_porc_vent_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 31)->getValue();
									$res_c_porc_vent_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 32)->getValue();	
									$res_c_porc_vent_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 33)->getValue();
									$res_c_porc_vent_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 34)->getValue();	
									$res_c_porc_vent_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 35)->getValue();	
									$res_c_porc_vent_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 36)->getValue();
									$res_c_porc_vent_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 37)->getValue();	
									$res_c_porc_vent_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 38)->getValue();	
									$res_c_porc_vent_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 39)->getValue();	
									$res_c_porc_vent_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 40)->getValue();	
									$res_c_porc_vent_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 41)->getValue();
									$res_c_porc_vent_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 42)->getValue();
									$res_c_porc_vent_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 43)->getValue();	
									$res_c_porc_vent_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 44)->getValue();	
									$res_c_porc_vent_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 45)->getValue();	
									$res_c_porc_vent_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 46)->getValue();	
									$res_c_porc_vent_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 47)->getValue();	
									$res_c_porc_vent_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 48)->getValue();
									$res_c_porc_vent_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 49)->getValue();	
									$res_c_porc_vent_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 50)->getValue();	
									$res_c_porc_vent_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 51)->getValue();	
									$res_c_porc_vent_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 52)->getValue();	
									$res_c_porc_vent_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 53)->getValue();
									$res_c_porc_vent_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 54)->getValue();	
									$res_c_porc_vent_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 55)->getValue();	
									$res_c_porc_vent_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 56)->getValue();	
									$res_c_porc_vent_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 57)->getValue();	
									$res_c_porc_vent_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 58)->getValue();	
									$res_c_porc_vent_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 59)->getValue();
									$res_c_porc_vent_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 60)->getValue();	
									$res_c_porc_vent_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 61)->getValue();	
									$res_c_porc_vent_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 62)->getValue();	
									$res_c_porc_vent_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 63)->getValue();	
									$res_c_porc_vent_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 64)->getValue();	
									$res_c_porc_vent_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 65)->getValue();
									$res_c_porc_vent_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 66)->getValue();	
									$res_c_porc_vent_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 67)->getValue();	
									$res_c_porc_vent_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 68)->getValue();	
									$res_c_porc_vent_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 69)->getValue();	
									$res_c_porc_vent_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 70)->getValue();	
									$res_c_porc_vent_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 71)->getValue();
									$res_c_porc_vent_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 72)->getValue();	
									$res_c_porc_vent_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 73)->getValue();	
									$res_c_porc_vent_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 74)->getValue();	
									$res_c_porc_vent_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 75)->getValue();	
									$res_c_porc_vent_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 76)->getValue();
									$res_c_porc_vent_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 77)->getValue();
									$res_c_porc_vent_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 78)->getValue();
									$res_c_porc_vent_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 79)->getValue();
									$res_c_porc_vent_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 80)->getValue();	
									$res_c_porc_vent_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 81)->getValue();	
									$res_c_porc_vent_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 82)->getValue();	
									$res_c_porc_vent_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 83)->getValue();	
									$res_c_porc_vent_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 84)->getValue();	
									$res_c_porc_vent_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 85)->getValue();	
									$res_c_porc_vent_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 86)->getValue();	
									$res_c_porc_vent_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 87)->getValue();	
									$res_c_porc_vent_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 88)->getValue();
									$res_c_porc_vent_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 89)->getValue();
									$res_c_porc_vent_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 90)->getValue();
									$res_c_porc_vent_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 91)->getValue();
									$res_c_porc_vent_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 92)->getValue();
									$res_c_porc_vent_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 93)->getValue();	
									$res_c_porc_vent_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 94)->getValue();	
									$res_c_porc_vent_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 95)->getValue();	
									$res_c_porc_vent_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 96)->getValue();	
									$res_c_porc_vent_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 98)->getValue();	
									$res_c_porc_vent_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 99)->getValue();	
									$res_c_porc_vent_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 100)->getValue();	
									$res_c_porc_vent_tir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 102)->getValue();
									$res_c_porc_vent_vpn =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 103)->getValue();	
									$res_c_porc_vent_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 105)->getValue();	
									$res_c_porc_vent_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 106)->getValue();	
									$res_c_porc_vent_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 107)->getValue();	
									$res_c_porc_vent_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 108)->getValue();	
									$res_c_porc_vent_tir_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 110)->getValue();	
									$res_c_porc_vent_vpn_c =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 111)->getValue();
									
									
									$res_c_vr_m_con_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 27)->getValue();	
									$res_c_vr_m_con_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 28)->getValue();
									$res_c_vr_m_con_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 29)->getValue();	
									$res_c_vr_m_con_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 30)->getValue();	
									$res_c_vr_m_con_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 31)->getValue();
									$res_c_vr_m_con_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 32)->getValue();	
									$res_c_vr_m_con_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 33)->getValue();
									$res_c_vr_m_con_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 34)->getValue();	
									$res_c_vr_m_con_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 35)->getValue();	
									$res_c_vr_m_con_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 36)->getValue();
									$res_c_vr_m_con_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 37)->getValue();	
									$res_c_vr_m_con_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 38)->getValue();	
									$res_c_vr_m_con_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 39)->getValue();	
									$res_c_vr_m_con_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 40)->getValue();	
									$res_c_vr_m_con_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 41)->getValue();
									$res_c_vr_m_con_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 42)->getValue();
									$res_c_vr_m_con_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 43)->getValue();	
									$res_c_vr_m_con_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 44)->getValue();	
									$res_c_vr_m_con_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 45)->getValue();	
									$res_c_vr_m_con_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 46)->getValue();	
									$res_c_vr_m_con_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 47)->getValue();	
									$res_c_vr_m_con_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 48)->getValue();
									$res_c_vr_m_con_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 49)->getValue();	
									$res_c_vr_m_con_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 50)->getValue();	
									$res_c_vr_m_con_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 51)->getValue();	
									$res_c_vr_m_con_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 52)->getValue();	
									$res_c_vr_m_con_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 53)->getValue();
									$res_c_vr_m_con_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 54)->getValue();	
									$res_c_vr_m_con_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 55)->getValue();	
									$res_c_vr_m_con_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 56)->getValue();	
									$res_c_vr_m_con_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 57)->getValue();	
									$res_c_vr_m_con_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 58)->getValue();	
									$res_c_vr_m_con_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 59)->getValue();
									$res_c_vr_m_con_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 60)->getValue();	
									$res_c_vr_m_con_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 61)->getValue();	
									$res_c_vr_m_con_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 62)->getValue();	
									$res_c_vr_m_con_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 63)->getValue();	
									$res_c_vr_m_con_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 64)->getValue();	
									$res_c_vr_m_con_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 65)->getValue();
									$res_c_vr_m_con_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 66)->getValue();	
									$res_c_vr_m_con_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 67)->getValue();	
									$res_c_vr_m_con_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 68)->getValue();	
									$res_c_vr_m_con_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 69)->getValue();	
									$res_c_vr_m_con_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 70)->getValue();	
									$res_c_vr_m_con_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 71)->getValue();
									$res_c_vr_m_con_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 72)->getValue();	
									$res_c_vr_m_con_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 73)->getValue();	
									$res_c_vr_m_con_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 74)->getValue();	
									$res_c_vr_m_con_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 75)->getValue();	
									$res_c_vr_m_con_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 76)->getValue();
									$res_c_vr_m_con_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 77)->getValue();
									$res_c_vr_m_con_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 78)->getValue();
									$res_c_vr_m_con_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 79)->getValue();
									$res_c_vr_m_con_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 80)->getValue();	
									$res_c_vr_m_con_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 81)->getValue();	
									$res_c_vr_m_con_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 82)->getValue();	
									$res_c_vr_m_con_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 83)->getValue();	
									$res_c_vr_m_con_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 84)->getValue();	
									$res_c_vr_m_con_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 85)->getValue();	
									$res_c_vr_m_con_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 86)->getValue();	
									$res_c_vr_m_con_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 87)->getValue();	
									$res_c_vr_m_con_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 88)->getValue();
									$res_c_vr_m_con_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 89)->getValue();
									$res_c_vr_m_con_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 90)->getValue();
									$res_c_vr_m_con_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 91)->getValue();
									$res_c_vr_m_con_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 92)->getValue();
									$res_c_vr_m_con_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 93)->getValue();	
									$res_c_vr_m_con_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 94)->getValue();	
									$res_c_vr_m_con_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 95)->getValue();	
									$res_c_vr_m_con_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 96)->getValue();	
									$res_c_vr_m_con_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 98)->getValue();	
									$res_c_vr_m_con_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 99)->getValue();	
									$res_c_vr_m_con_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 100)->getValue();	
									
									$res_c_vr_m_ven_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 27)->getValue();	
									$res_c_vr_m_ven_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 28)->getValue();
									$res_c_vr_m_ven_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 29)->getValue();	
									$res_c_vr_m_ven_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 30)->getValue();	
									$res_c_vr_m_ven_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 31)->getValue();
									$res_c_vr_m_ven_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 32)->getValue();	
									$res_c_vr_m_ven_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 33)->getValue();
									$res_c_vr_m_ven_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 34)->getValue();	
									$res_c_vr_m_ven_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 35)->getValue();	
									$res_c_vr_m_ven_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 36)->getValue();
									$res_c_vr_m_ven_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 37)->getValue();	
									$res_c_vr_m_ven_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 38)->getValue();	
									$res_c_vr_m_ven_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 39)->getValue();	
									$res_c_vr_m_ven_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 40)->getValue();	
									$res_c_vr_m_ven_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 41)->getValue();
									$res_c_vr_m_ven_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 42)->getValue();
									$res_c_vr_m_ven_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 43)->getValue();	
									$res_c_vr_m_ven_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 44)->getValue();	
									$res_c_vr_m_ven_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 45)->getValue();	
									$res_c_vr_m_ven_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 46)->getValue();	
									$res_c_vr_m_ven_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 47)->getValue();	
									$res_c_vr_m_ven_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 48)->getValue();
									$res_c_vr_m_ven_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 49)->getValue();	
									$res_c_vr_m_ven_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 50)->getValue();	
									$res_c_vr_m_ven_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 51)->getValue();	
									$res_c_vr_m_ven_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 52)->getValue();	
									$res_c_vr_m_ven_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 53)->getValue();
									$res_c_vr_m_ven_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 54)->getValue();	
									$res_c_vr_m_ven_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 55)->getValue();	
									$res_c_vr_m_ven_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 56)->getValue();	
									$res_c_vr_m_ven_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 57)->getValue();	
									$res_c_vr_m_ven_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 58)->getValue();	
									$res_c_vr_m_ven_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 59)->getValue();
									$res_c_vr_m_ven_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 60)->getValue();	
									$res_c_vr_m_ven_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 61)->getValue();	
									$res_c_vr_m_ven_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 62)->getValue();	
									$res_c_vr_m_ven_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 63)->getValue();	
									$res_c_vr_m_ven_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 64)->getValue();	
									$res_c_vr_m_ven_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 65)->getValue();
									$res_c_vr_m_ven_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 66)->getValue();	
									$res_c_vr_m_ven_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 67)->getValue();	
									$res_c_vr_m_ven_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 68)->getValue();	
									$res_c_vr_m_ven_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 69)->getValue();	
									$res_c_vr_m_ven_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 70)->getValue();	
									$res_c_vr_m_ven_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 71)->getValue();
									$res_c_vr_m_ven_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 72)->getValue();	
									$res_c_vr_m_ven_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 73)->getValue();	
									$res_c_vr_m_ven_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 74)->getValue();	
									$res_c_vr_m_ven_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 75)->getValue();	
									$res_c_vr_m_ven_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 76)->getValue();
									$res_c_vr_m_ven_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 77)->getValue();
									$res_c_vr_m_ven_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 78)->getValue();
									$res_c_vr_m_ven_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 79)->getValue();
									$res_c_vr_m_ven_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 80)->getValue();	
									$res_c_vr_m_ven_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 81)->getValue();	
									$res_c_vr_m_ven_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 82)->getValue();	
									$res_c_vr_m_ven_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 83)->getValue();	
									$res_c_vr_m_ven_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 84)->getValue();	
									$res_c_vr_m_ven_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 85)->getValue();	
									$res_c_vr_m_ven_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 86)->getValue();	
									$res_c_vr_m_ven_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 87)->getValue();	
									$res_c_vr_m_ven_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 88)->getValue();
									$res_c_vr_m_ven_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 89)->getValue();
									$res_c_vr_m_ven_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 90)->getValue();
									$res_c_vr_m_ven_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 91)->getValue();
									$res_c_vr_m_ven_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 92)->getValue();
									$res_c_vr_m_ven_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 93)->getValue();	
									$res_c_vr_m_ven_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 94)->getValue();	
									$res_c_vr_m_ven_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 95)->getValue();	
									$res_c_vr_m_ven_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 96)->getValue();	
									$res_c_vr_m_ven_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 98)->getValue();	
									$res_c_vr_m_ven_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 99)->getValue();	
									$res_c_vr_m_ven_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 100)->getValue();	
									$res_c_vr_uni_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 27)->getValue();	
									
									$res_c_eje_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 27)->getValue();	
									$res_c_eje_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 28)->getValue();
									$res_c_eje_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 29)->getValue();	
									$res_c_eje_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 30)->getValue();	
									$res_c_eje_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 31)->getValue();
									$res_c_eje_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 32)->getValue();	
									$res_c_eje_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 33)->getValue();
									$res_c_eje_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 34)->getValue();	
									$res_c_eje_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 35)->getValue();	
									$res_c_eje_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 36)->getValue();
									$res_c_eje_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 37)->getValue();	
									$res_c_eje_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 38)->getValue();	
									$res_c_eje_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 39)->getValue();	
									$res_c_eje_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 40)->getValue();	
									$res_c_eje_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 41)->getValue();
									$res_c_eje_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 42)->getValue();
									$res_c_eje_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 43)->getValue();	
									$res_c_eje_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 44)->getValue();	
									$res_c_eje_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 45)->getValue();	
									$res_c_eje_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 46)->getValue();	
									$res_c_eje_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 47)->getValue();	
									$res_c_eje_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 48)->getValue();
									$res_c_eje_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 49)->getValue();	
									$res_c_eje_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 50)->getValue();	
									$res_c_eje_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 51)->getValue();	
									$res_c_eje_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 52)->getValue();	
									$res_c_eje_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 53)->getValue();
									$res_c_eje_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 54)->getValue();	
									$res_c_eje_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 55)->getValue();	
									$res_c_eje_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 56)->getValue();	
									$res_c_eje_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 57)->getValue();	
									$res_c_eje_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 58)->getValue();	
									$res_c_eje_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 59)->getValue();
									$res_c_eje_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 60)->getValue();	
									$res_c_eje_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 61)->getValue();	
									$res_c_eje_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 62)->getValue();	
									$res_c_eje_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 63)->getValue();	
									$res_c_eje_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 64)->getValue();	
									$res_c_eje_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 65)->getValue();
									$res_c_eje_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 66)->getValue();	
									$res_c_eje_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 67)->getValue();	
									$res_c_eje_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 68)->getValue();	
									$res_c_eje_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 69)->getValue();	
									$res_c_eje_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 70)->getValue();	
									$res_c_eje_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 71)->getValue();
									$res_c_eje_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 72)->getValue();	
									$res_c_eje_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 73)->getValue();	
									$res_c_eje_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 74)->getValue();	
									$res_c_eje_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 75)->getValue();	
									$res_c_eje_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 76)->getValue();
									$res_c_eje_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 77)->getValue();
									$res_c_eje_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 78)->getValue();
									$res_c_eje_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 79)->getValue();
									$res_c_eje_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 80)->getValue();	
									$res_c_eje_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 81)->getValue();	
									$res_c_eje_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 82)->getValue();	
									$res_c_eje_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 83)->getValue();	
									$res_c_eje_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 84)->getValue();	
									$res_c_eje_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 85)->getValue();	
									$res_c_eje_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 86)->getValue();	
									$res_c_eje_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 87)->getValue();	
									$res_c_eje_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 88)->getValue();
									$res_c_eje_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 89)->getValue();
									$res_c_eje_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 90)->getValue();
									$res_c_eje_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 91)->getValue();
									$res_c_eje_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 92)->getValue();
									$res_c_eje_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 93)->getValue();	
									$res_c_eje_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 94)->getValue();	
									$res_c_eje_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 95)->getValue();	
									$res_c_eje_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 96)->getValue();	
									$res_c_eje_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 98)->getValue();	
									$res_c_eje_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 99)->getValue();	
									$res_c_eje_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 100)->getValue();
									
									$res_c_eje_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 105)->getValue();	
									$res_c_eje_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 106)->getValue();	
									$res_c_eje_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 107)->getValue();	
									$res_c_eje_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 108)->getValue();
									
									
									$res_c_porc_tot_ui = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 27)->getValue();	
									$res_c_porc_tot_uip = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 28)->getValue();
									$res_c_porc_tot_uii =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 29)->getValue();	
									$res_c_porc_tot_cm = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 30)->getValue();	
									$res_c_porc_tot_cmp = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 31)->getValue();
									$res_c_porc_tot_cmi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 32)->getValue();	
									$res_c_porc_tot_gi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 33)->getValue();
									$res_c_porc_tot_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 34)->getValue();	
									$res_c_porc_tot_cd =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 35)->getValue();	
									$res_c_porc_tot_cd_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 36)->getValue();
									$res_c_porc_tot_cd_hc_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 37)->getValue();	
									$res_c_porc_tot_cd_hc_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 38)->getValue();	
									$res_c_porc_tot_cd_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 39)->getValue();	
									$res_c_porc_tot_cd_hi_hi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 40)->getValue();	
									$res_c_porc_tot_cd_hi_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 41)->getValue();
									$res_c_porc_tot_cd_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 42)->getValue();
									$res_c_porc_tot_cd_oh_oh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 43)->getValue();	
									$res_c_porc_tot_cd_oh_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 44)->getValue();	
									$res_c_porc_tot_cd_id =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 45)->getValue();	
									$res_c_porc_tot_ct =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 46)->getValue();	
									$res_c_porc_tot_ct_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 47)->getValue();	
									$res_c_porc_tot_ct_hg_hg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 48)->getValue();
									$res_c_porc_tot_ct_hg_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 49)->getValue();	
									$res_c_porc_tot_ct_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 50)->getValue();	
									$res_c_porc_tot_ct_hv_hv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 51)->getValue();	
									$res_c_porc_tot_ct_hv_gr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 52)->getValue();	
									$res_c_porc_tot_ct_cp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 53)->getValue();
									$res_c_porc_tot_ct_cp_sv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 54)->getValue();	
									$res_c_porc_tot_ct_cp_gp =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 55)->getValue();	
									$res_c_porc_tot_ct_cp_gs =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 56)->getValue();	
									$res_c_porc_tot_ct_cp_au =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 57)->getValue();	
									$res_c_porc_tot_ct_cp_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 58)->getValue();	
									$res_c_porc_tot_ct_gl =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 59)->getValue();
									$res_c_porc_tot_ct_gl_hc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 60)->getValue();	
									$res_c_porc_tot_ct_gl_nr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 61)->getValue();	
									$res_c_porc_tot_ct_gl_ip =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 62)->getValue();	
									$res_c_porc_tot_ct_gl_ic =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 63)->getValue();	
									$res_c_porc_tot_ca =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 64)->getValue();	
									$res_c_porc_tot_ca_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 65)->getValue();
									$res_c_porc_tot_ca_vt_pv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 66)->getValue();	
									$res_c_porc_tot_ca_vt_op =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 67)->getValue();	
									$res_c_porc_tot_ca_cf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 68)->getValue();	
									$res_c_porc_tot_ca_cf_pa =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 69)->getValue();	
									$res_c_porc_tot_ca_cf_nh =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 70)->getValue();	
									$res_c_porc_tot_ca_gf =  $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 71)->getValue();
									$res_c_porc_tot_ca_gf_ic = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 72)->getValue();	
									$res_c_porc_tot_ca_gf_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 73)->getValue();	
									$res_c_porc_tot_ca_gf_cm =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 74)->getValue();	
									$res_c_porc_tot_ca_gf_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 75)->getValue();	
									$res_c_porc_tot_ca_oc = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 76)->getValue();
									$res_c_porc_tot_ca_oc_oc1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 77)->getValue();
									$res_c_porc_tot_ca_oc_oc2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 78)->getValue();
									$res_c_porc_tot_ca_oc_oc3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 79)->getValue();
									$res_c_porc_tot_ca_ri =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 80)->getValue();	
									$res_c_porc_tot_ci =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 81)->getValue();	
									$res_c_porc_tot_ci_vb =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 82)->getValue();	
									$res_c_porc_tot_ci_ov =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 83)->getValue();	
									$res_c_porc_tot_ci_ov_is =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 84)->getValue();	
									$res_c_porc_tot_ci_ov_im =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 85)->getValue();	
									$res_c_porc_tot_ci_ov_oc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 86)->getValue();	
									$res_c_porc_tot_ci_rf =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 87)->getValue();	
									$res_c_porc_tot_ci_oi =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 88)->getValue();
									$res_c_porc_tot_ci_oi_oi1 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 89)->getValue();
									$res_c_porc_tot_ci_oi_oi2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 90)->getValue();
									$res_c_porc_tot_ci_oi_oi3 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 91)->getValue();
									$res_c_porc_tot_it =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 92)->getValue();
									$res_c_porc_tot_up =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 93)->getValue();	
									$res_c_porc_tot_up_cc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 94)->getValue();	
									$res_c_porc_tot_up_ir =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 95)->getValue();	
									$res_c_porc_tot_up2 =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 96)->getValue();	
									$res_c_porc_tot_cv =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 98)->getValue();	
									$res_c_porc_tot_vt =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 99)->getValue();	
									$res_c_porc_tot_cvg =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 100)->getValue();
									
									$res_c_porc_tot_uc =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 105)->getValue();	
									$res_c_porc_tot_uc_co =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 106)->getValue();	
									$res_c_porc_tot_uc_ti =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 107)->getValue();	
									$res_c_porc_tot_uc_pr =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, 108)->getValue();
									
									
									
									
										//Check Nulls
										if($res_total_unidades==null||is_string ($res_total_unidades)){$res_total_unidades=0;}
										if($res_area_promedio_unidad==null||is_string ($res_area_promedio_unidad)){$res_area_promedio_unidad=0;}
										if($res_total_area_construida==null||is_string ($res_total_area_construida)){$res_total_area_construida=0;}
										if($res_total_area_vendible==null||is_string ($res_total_area_vendible)){$res_total_area_vendible=0;}
										if($res_area_util_lote_asignada_subproyecto==null||is_string ($res_area_util_lote_asignada_subproyecto)){$res_area_util_lote_asignada_subproyecto=0;}
										if($res_densidad_indice_ocupacion==null||is_string ($res_densidad_indice_ocupacion)){$res_densidad_indice_ocupacion=0;}
										if($res_valor_metro_cuadrado_lote_urbanizado==null||is_string ($res_valor_metro_cuadrado_lote_urbanizado)){$res_valor_metro_cuadrado_lote_urbanizado=0;}
										if($res_numero_parqueos==null||is_string ($res_numero_parqueos)){$res_numero_parqueos=0;}
										if($res_relacion_parqueos_numero_parqueos_por_unidad==null||is_string ($res_relacion_parqueos_numero_parqueos_por_unidad)){$res_relacion_parqueos_numero_parqueos_por_unidad=0;}
										if($res_numero_depositos==null||is_string ($res_numero_depositos)){$res_numero_depositos=0;}
										if($res_fecha_inicio_y_terminacion_ventas==null||is_string ($res_fecha_inicio_y_terminacion_ventas)){$res_fecha_inicio_y_terminacion_ventas=0;}
										if($res_fecha_inicio_y_terminacion_construccion==null||is_string ($res_fecha_inicio_y_terminacion_construccion)){$res_fecha_inicio_y_terminacion_construccion=0;}
										if($res_ritmo_ventas_mensual_promedio==null||is_string ($res_ritmo_ventas_mensual_promedio)){$res_ritmo_ventas_mensual_promedio=0;}
										if($res_punto_equilibrio_unidades==null||is_string ($res_punto_equilibrio_unidades)){$res_punto_equilibrio_unidades=0;}
										if($res_tasa_promedio_incremento_precios==null||is_string ($res_tasa_promedio_incremento_precios)){$res_tasa_promedio_incremento_precios=0;}
										if($res_porcentaje_ventas_nuevogar==null||is_string ($res_porcentaje_ventas_nuevogar)){$res_porcentaje_ventas_nuevogar=0;}
										if($res_fecha_presupuesto==null||is_string ($res_fecha_presupuesto)){$res_fecha_presupuesto=0;}
										if($res_tasa_promedio_incremento_presupuesto==null||is_string ($res_tasa_promedio_incremento_presupuesto)){$res_tasa_promedio_incremento_presupuesto=0;}
										if($res_c_tot_ui==null||is_string ($res_c_tot_ui)){$res_c_tot_ui=0;}
										if($res_c_tot_uip==null||is_string ($res_c_tot_uip)){$res_c_tot_uip=0;}
										if($res_c_tot_uii==null||is_string ($res_c_tot_uii)){$res_c_tot_uii=0;}
										if($res_c_tot_cm==null||is_string ($res_c_tot_cm)){$res_c_tot_cm=0;}
										if($res_c_tot_cmp==null||is_string ($res_c_tot_cmp)){$res_c_tot_cmp=0;}
										if($res_c_tot_cmi==null||is_string ($res_c_tot_cmi)){$res_c_tot_cmi=0;}
										if($res_c_tot_gi==null||is_string ($res_c_tot_gi)){$res_c_tot_gi=0;}
										if($res_c_tot_cp==null||is_string ($res_c_tot_cp)){$res_c_tot_cp=0;}
										if($res_c_tot_cd==null||is_string ($res_c_tot_cd)){$res_c_tot_cd=0;}
										if($res_c_tot_cd_hc==null||is_string ($res_c_tot_cd_hc)){$res_c_tot_cd_hc=0;}
										if($res_c_tot_cd_hc_hc==null||is_string ($res_c_tot_cd_hc_hc)){$res_c_tot_cd_hc_hc=0;}
										if($res_c_tot_cd_hc_gr==null||is_string ($res_c_tot_cd_hc_gr)){$res_c_tot_cd_hc_gr=0;}
										if($res_c_tot_cd_hi==null||is_string ($res_c_tot_cd_hi)){$res_c_tot_cd_hi=0;}
										if($res_c_tot_cd_hi_hi==null||is_string ($res_c_tot_cd_hi_hi)){$res_c_tot_cd_hi_hi=0;}
										if($res_c_tot_cd_hi_gr==null||is_string ($res_c_tot_cd_hi_gr)){$res_c_tot_cd_hi_gr=0;}
										if($res_c_tot_cd_oh==null||is_string ($res_c_tot_cd_oh)){$res_c_tot_cd_oh=0;}
										if($res_c_tot_cd_oh_oh==null||is_string ($res_c_tot_cd_oh_oh)){$res_c_tot_cd_oh_oh=0;}
										if($res_c_tot_cd_oh_gr==null||is_string ($res_c_tot_cd_oh_gr)){$res_c_tot_cd_oh_gr=0;}
										if($res_c_tot_cd_id==null||is_string ($res_c_tot_cd_id)){$res_c_tot_cd_id=0;}
										if($res_c_tot_ct==null||is_string ($res_c_tot_ct)){$res_c_tot_ct=0;}
										if($res_c_tot_ct_hg==null||is_string ($res_c_tot_ct_hg)){$res_c_tot_ct_hg=0;}
										if($res_c_tot_ct_hg_hg==null||is_string ($res_c_tot_ct_hg_hg)){$res_c_tot_ct_hg_hg=0;}
										if($res_c_tot_ct_hg_gr==null||is_string ($res_c_tot_ct_hg_gr)){$res_c_tot_ct_hg_gr=0;}
										if($res_c_tot_ct_hv==null||is_string ($res_c_tot_ct_hv)){$res_c_tot_ct_hv=0;}
										if($res_c_tot_ct_hv_hv==null||is_string ()){$res_c_tot_ct_hv_hv=0;}
										if($res_c_tot_ct_hv_gr==null||is_string ($res_c_tot_ct_hv_gr)){$res_c_tot_ct_hv_gr=0;}
										if($res_c_tot_ct_cp==null||is_string ($res_c_tot_ct_cp)){$res_c_tot_ct_cp=0;}
										if($res_c_tot_ct_cp_sv==null||is_string ($res_c_tot_ct_cp_sv)){$res_c_tot_ct_cp_sv=0;}
										if($res_c_tot_ct_cp_gp==null||is_string ($res_c_tot_ct_cp_gp)){$res_c_tot_ct_cp_gp=0;}
										if($res_c_tot_ct_cp_gs==null||is_string ($res_c_tot_ct_cp_gs)){$res_c_tot_ct_cp_gs=0;}
										if($res_c_tot_ct_cp_au==null||is_string ($res_c_tot_ct_cp_au)){$res_c_tot_ct_cp_au=0;}
										if($res_c_tot_ct_cp_cv==null||is_string ($res_c_tot_ct_cp_cv)){$res_c_tot_ct_cp_cv=0;}
										if($res_c_tot_ct_gl==null||is_string ($res_c_tot_ct_gl)){$res_c_tot_ct_gl=0;}
										if($res_c_tot_ct_gl_hc==null||is_string ($res_c_tot_ct_gl_hc)){$res_c_tot_ct_gl_hc=0;}
										if($res_c_tot_ct_gl_nr==null||is_string ($res_c_tot_ct_gl_nr)){$res_c_tot_ct_gl_nr=0;}
										if($res_c_tot_ct_gl_ip==null||is_string ($res_c_tot_ct_gl_ip)){$res_c_tot_ct_gl_ip=0;}
										if($res_c_tot_ct_gl_ic==null||is_string ($res_c_tot_ct_gl_ic)){$res_c_tot_ct_gl_ic=0;}
										if($res_c_tot_ca==null||is_string ($res_c_tot_ca)){$res_c_tot_ca=0;}
										if($res_c_tot_ca_vt==null||is_string ($res_c_tot_ca_vt)){$res_c_tot_ca_vt=0;}
										if($res_c_tot_ca_vt_pv==null||is_string ($res_c_tot_ca_vt_pv)){$res_c_tot_ca_vt_pv=0;}
										if($res_c_tot_ca_vt_op==null||is_string ($res_c_tot_ca_vt_op)){$res_c_tot_ca_vt_op=0;}
										if($res_c_tot_ca_cf==null||is_string ($res_c_tot_ca_cf)){$res_c_tot_ca_cf=0;}
										if($res_c_tot_ca_cf_pa==null||is_string ($res_c_tot_ca_cf_pa)){$res_c_tot_ca_cf_pa=0;}
										if($res_c_tot_ca_cf_nh==null||is_string ($res_c_tot_ca_cf_nh)){$res_c_tot_ca_cf_nh=0;}
										if($res_c_tot_ca_gf==null||is_string ($res_c_tot_ca_gf)){$res_c_tot_ca_gf=0;}
										if($res_c_tot_ca_gf_ic==null||is_string ($res_c_tot_ca_gf_ic)){$res_c_tot_ca_gf_ic=0;}
										if($res_c_tot_ca_gf_oc==null||is_string ($res_c_tot_ca_gf_oc)){$res_c_tot_ca_gf_oc=0;}
										if($res_c_tot_ca_gf_cm==null||is_string ($res_c_tot_ca_gf_cm)){$res_c_tot_ca_gf_cm=0;}
										if($res_c_tot_ca_gf_it==null||is_string ($res_c_tot_ca_gf_it)){$res_c_tot_ca_gf_it=0;}
										if($res_c_tot_ca_oc==null||is_string ($res_c_tot_ca_oc)){$res_c_tot_ca_oc=0;}
										if($res_c_tot_ca_oc_oc1==null||is_string ($res_c_tot_ca_oc_oc1)){$res_c_tot_ca_oc_oc1=0;}
										if($res_c_tot_ca_oc_oc2==null||is_string ($res_c_tot_ca_oc_oc2)){$res_c_tot_ca_oc_oc2=0;}
										if($res_c_tot_ca_oc_oc3==null||is_string ($res_c_tot_ca_oc_oc3)){$res_c_tot_ca_oc_oc3=0;}
										if($res_c_tot_ca_ri==null||is_string ($res_c_tot_ca_ri)){$res_c_tot_ca_ri=0;}
										if($res_c_tot_ci==null||is_string ($res_c_tot_ci)){$res_c_tot_ci=0;}
										if($res_c_tot_ci_vb==null||is_string ($res_c_tot_ci_vb)){$res_c_tot_ci_vb=0;}
										if($res_c_tot_ci_ov==null||is_string ($res_c_tot_ci_ov)){$res_c_tot_ci_ov=0;}
										if($res_c_tot_ci_ov_is==null||is_string ($res_c_tot_ci_ov_is)){$res_c_tot_ci_ov_is=0;}
										if($res_c_tot_ci_ov_im==null||is_string ($res_c_tot_ci_ov_im)){$res_c_tot_ci_ov_im=0;}
										if($res_c_tot_ci_ov_oc==null||is_string ($res_c_tot_ci_ov_oc)){$res_c_tot_ci_ov_oc=0;}
										if($res_c_tot_ci_rf==null||is_string ($res_c_tot_ci_rf)){$res_c_tot_ci_rf=0;}
										if($res_c_tot_ci_oi==null||is_string ($res_c_tot_ci_oi)){$res_c_tot_ci_oi=0;}
										if($res_c_tot_ci_oi_oi1==null||is_string ($res_c_tot_ci_oi_oi1)){$res_c_tot_ci_oi_oi1=0;}
										if($res_c_tot_ci_oi_oi2==null||is_string ($res_c_tot_ci_oi_oi2)){$res_c_tot_ci_oi_oi2=0;}
										if($res_c_tot_ci_oi_oi3==null||is_string ($res_c_tot_ci_oi_oi3)){$res_c_tot_ci_oi_oi3=0;}
										if($res_c_tot_it==null||is_string ($res_c_tot_it)){$res_c_tot_it=0;}
										if($res_c_tot_up==null||is_string ($res_c_tot_up)){$res_c_tot_up=0;}
										if($res_c_tot_up_cc==null||is_string ($res_c_tot_up_cc)){$res_c_tot_up_cc=0;}
										if($res_c_tot_up_ir==null||is_string ($res_c_tot_up_ir)){$res_c_tot_up_ir=0;}
										if($res_c_tot_up2==null||is_string ($res_c_tot_up2)){$res_c_tot_up2=0;}
										if($res_c_tot_cv==null||is_string ($res_c_tot_cv)){$res_c_tot_cv=0;}
										if($res_c_tot_vt==null||is_string ($res_c_tot_vt)){$res_c_tot_vt=0;}
										if($res_c_tot_cvg==null||is_string ($res_c_tot_cvg)){$res_c_tot_cvg=0;}
										if($res_c_tot_tir==null||is_string ($res_c_tot_tir)){$res_c_tot_tir=0;}
										if($res_c_tot_vpn==null||is_string ($res_c_tot_vpn)){$res_c_tot_vpn=0;}
										if($res_c_tot_uc==null||is_string ($res_c_tot_uc)){$res_c_tot_uc=0;}
										if($res_c_tot_uc_co==null||is_string ($res_c_tot_uc_co)){$res_c_tot_uc_co=0;}
										if($res_c_tot_uc_ti==null||is_string ($res_c_tot_uc_ti)){$res_c_tot_uc_ti=0;}
										if($res_c_tot_uc_pr==null||is_string ($res_c_tot_uc_pr)){$res_c_tot_uc_pr=0;}
										if($res_c_tot_tir_c==null||is_string ($res_c_tot_tir_c)){$res_c_tot_tir_c=0;}
										if($res_c_tot_vpn_c==null||is_string ($res_c_tot_vpn_c)){$res_c_tot_vpn_c=0;}
										if($res_c_porc_vent_ui==null||is_string ($res_c_porc_vent_ui)){$res_c_porc_vent_ui=0;}
										if($res_c_porc_vent_uip==null||is_string ($res_c_porc_vent_uip)){$res_c_porc_vent_uip=0;}
										if($res_c_porc_vent_uii==null||is_string ($res_c_porc_vent_uii)){$res_c_porc_vent_uii=0;}
										if($res_c_porc_vent_cm==null||is_string ($res_c_porc_vent_cm)){$res_c_porc_vent_cm=0;}
										if($res_c_porc_vent_cmp==null||is_string ($res_c_porc_vent_cmp)){$res_c_porc_vent_cmp=0;}
										if($res_c_porc_vent_cmi==null||is_string ($res_c_porc_vent_cmi)){$res_c_porc_vent_cmi=0;}
										if($res_c_porc_vent_gi==null||is_string ($res_c_porc_vent_gi)){$res_c_porc_vent_gi=0;}
										if($res_c_porc_vent_cp==null||is_string ($res_c_porc_vent_cp)){$res_c_porc_vent_cp=0;}
										if($res_c_porc_vent_cd==null||is_string ($res_c_porc_vent_cd)){$res_c_porc_vent_cd=0;}
										if($res_c_porc_vent_cd_hc==null||is_string ($res_c_porc_vent_cd_hc)){$res_c_porc_vent_cd_hc=0;}
										if($res_c_porc_vent_cd_hc_hc==null||is_string ($res_c_porc_vent_cd_hc_hc)){$res_c_porc_vent_cd_hc_hc=0;}
										if($res_c_porc_vent_cd_hc_gr==null||is_string ($res_c_porc_vent_cd_hc_gr)){$res_c_porc_vent_cd_hc_gr=0;}
										if($res_c_porc_vent_cd_hi==null||is_string ($res_c_porc_vent_cd_hi)){$res_c_porc_vent_cd_hi=0;}
										if($res_c_porc_vent_cd_hi_hi==null||is_string ($res_c_porc_vent_cd_hi_hi)){$res_c_porc_vent_cd_hi_hi=0;}
										if($res_c_porc_vent_cd_hi_gr==null||is_string ($res_c_porc_vent_cd_hi_gr)){$res_c_porc_vent_cd_hi_gr=0;}
										if($res_c_porc_vent_cd_oh==null||is_string ($res_c_porc_vent_cd_oh)){$res_c_porc_vent_cd_oh=0;}
										if($res_c_porc_vent_cd_oh_oh==null||is_string ($res_c_porc_vent_cd_oh_oh)){$res_c_porc_vent_cd_oh_oh=0;}
										if($res_c_porc_vent_cd_oh_gr==null||is_string ($res_c_porc_vent_cd_oh_gr)){$res_c_porc_vent_cd_oh_gr=0;}
										if($res_c_porc_vent_cd_id==null||is_string ($res_c_porc_vent_cd_id)){$res_c_porc_vent_cd_id=0;}
										if($res_c_porc_vent_ct==null||is_string ($res_c_porc_vent_ct)){$res_c_porc_vent_ct=0;}
										if($res_c_porc_vent_ct_hg==null||is_string ($res_c_porc_vent_ct_hg)){$res_c_porc_vent_ct_hg=0;}
										if($res_c_porc_vent_ct_hg_hg==null||is_string ($res_c_porc_vent_ct_hg_hg)){$res_c_porc_vent_ct_hg_hg=0;}
										if($res_c_porc_vent_ct_hg_gr==null||is_string ($res_c_porc_vent_ct_hg_gr)){$res_c_porc_vent_ct_hg_gr=0;}
										if($res_c_porc_vent_ct_hv==null||is_string ($res_c_porc_vent_ct_hv)){$res_c_porc_vent_ct_hv=0;}
										if($res_c_porc_vent_ct_hv_hv==null||is_string ($res_c_porc_vent_ct_hv_hv)){$res_c_porc_vent_ct_hv_hv=0;}
										if($res_c_porc_vent_ct_hv_gr==null||is_string ($res_c_porc_vent_ct_hv_gr)){$res_c_porc_vent_ct_hv_gr=0;}
										if($res_c_porc_vent_ct_cp==null||is_string ($res_c_porc_vent_ct_cp)){$res_c_porc_vent_ct_cp=0;}
										if($res_c_porc_vent_ct_cp_sv==null||is_string ($res_c_porc_vent_ct_cp_sv)){$res_c_porc_vent_ct_cp_sv=0;}
										if($res_c_porc_vent_ct_cp_gp==null||is_string ($res_c_porc_vent_ct_cp_gp)){$res_c_porc_vent_ct_cp_gp=0;}
										if($res_c_porc_vent_ct_cp_gs==null||is_string ($res_c_porc_vent_ct_cp_gs)){$res_c_porc_vent_ct_cp_gs=0;}
										if($res_c_porc_vent_ct_cp_au==null||is_string ($res_c_porc_vent_ct_cp_au)){$res_c_porc_vent_ct_cp_au=0;}
										if($res_c_porc_vent_ct_cp_cv==null||is_string ($res_c_porc_vent_ct_cp_cv)){$res_c_porc_vent_ct_cp_cv=0;}
										if($res_c_porc_vent_ct_gl==null||is_string ($res_c_porc_vent_ct_gl)){$res_c_porc_vent_ct_gl=0;}
										if($res_c_porc_vent_ct_gl_hc==null||is_string ($res_c_porc_vent_ct_gl_hc)){$res_c_porc_vent_ct_gl_hc=0;}
										if($res_c_porc_vent_ct_gl_nr==null||is_string ($res_c_porc_vent_ct_gl_nr)){$res_c_porc_vent_ct_gl_nr=0;}
										if($res_c_porc_vent_ct_gl_ip==null||is_string ($res_c_porc_vent_ct_gl_ip)){$res_c_porc_vent_ct_gl_ip=0;}
										if($res_c_porc_vent_ct_gl_ic==null||is_string ($res_c_porc_vent_ct_gl_ic)){$res_c_porc_vent_ct_gl_ic=0;}
										if($res_c_porc_vent_ca==null||is_string ($res_c_porc_vent_ca)){$res_c_porc_vent_ca=0;}
										if($res_c_porc_vent_ca_vt==null||is_string ($res_c_porc_vent_ca_vt)){$res_c_porc_vent_ca_vt=0;}
										if($res_c_porc_vent_ca_vt_pv==null||is_string ($res_c_porc_vent_ca_vt_pv)){$res_c_porc_vent_ca_vt_pv=0;}
										if($res_c_porc_vent_ca_vt_op==null||is_string ($res_c_porc_vent_ca_vt_op)){$res_c_porc_vent_ca_vt_op=0;}
										if($res_c_porc_vent_ca_cf==null||is_string ($res_c_porc_vent_ca_cf)){$res_c_porc_vent_ca_cf=0;}
										if($res_c_porc_vent_ca_cf_pa==null||is_string ($res_c_porc_vent_ca_cf_pa)){$res_c_porc_vent_ca_cf_pa=0;}
										if($res_c_porc_vent_ca_cf_nh==null||is_string ($res_c_porc_vent_ca_cf_nh)){$res_c_porc_vent_ca_cf_nh=0;}
										if($res_c_porc_vent_ca_gf==null||is_string ($res_c_porc_vent_ca_gf)){$res_c_porc_vent_ca_gf=0;}
										if($res_c_porc_vent_ca_gf_ic==null||is_string ($res_c_porc_vent_ca_gf_ic)){$res_c_porc_vent_ca_gf_ic=0;}
										if($res_c_porc_vent_ca_gf_oc==null||is_string ($res_c_porc_vent_ca_gf_oc)){$res_c_porc_vent_ca_gf_oc=0;}
										if($res_c_porc_vent_ca_gf_cm==null||is_string ($res_c_porc_vent_ca_gf_cm)){$res_c_porc_vent_ca_gf_cm=0;}
										if($res_c_porc_vent_ca_gf_it==null||is_string ($res_c_porc_vent_ca_gf_it)){$res_c_porc_vent_ca_gf_it=0;}
										if($res_c_porc_vent_ca_oc==null||is_string ($res_c_porc_vent_ca_oc)){$res_c_porc_vent_ca_oc=0;}
										if($res_c_porc_vent_ca_oc_oc1==null||is_string ($res_c_porc_vent_ca_oc_oc1)){$res_c_porc_vent_ca_oc_oc1=0;}
										if($res_c_porc_vent_ca_oc_oc2==null||is_string ($res_c_porc_vent_ca_oc_oc2)){$res_c_porc_vent_ca_oc_oc2=0;}
										if($res_c_porc_vent_ca_oc_oc3==null||is_string ($res_c_porc_vent_ca_oc_oc3)){$res_c_porc_vent_ca_oc_oc3=0;}
										if($res_c_porc_vent_ca_ri==null||is_string ($res_c_porc_vent_ca_ri)){$res_c_porc_vent_ca_ri=0;}
										if($res_c_porc_vent_ci==null||is_string ($res_c_porc_vent_ci)){$res_c_porc_vent_ci=0;}
										if($res_c_porc_vent_ci_vb==null||is_string ($res_c_porc_vent_ci_vb)){$res_c_porc_vent_ci_vb=0;}
										if($res_c_porc_vent_ci_ov==null||is_string ($res_c_porc_vent_ci_ov)){$res_c_porc_vent_ci_ov=0;}
										if($res_c_porc_vent_ci_ov_is==null||is_string ($res_c_porc_vent_ci_ov_is)){$res_c_porc_vent_ci_ov_is=0;}
										if($res_c_porc_vent_ci_ov_im==null||is_string ($res_c_porc_vent_ci_ov_im)){$res_c_porc_vent_ci_ov_im=0;}
										if($res_c_porc_vent_ci_ov_oc==null||is_string ($res_c_porc_vent_ci_ov_oc)){$res_c_porc_vent_ci_ov_oc=0;}
										if($res_c_porc_vent_ci_rf==null||is_string ($res_c_porc_vent_ci_rf)){$res_c_porc_vent_ci_rf=0;}
										if($res_c_porc_vent_ci_oi==null||is_string ($res_c_porc_vent_ci_oi)){$res_c_porc_vent_ci_oi=0;}
										if($res_c_porc_vent_ci_oi_oi1==null||is_string ($res_c_porc_vent_ci_oi_oi1)){$res_c_porc_vent_ci_oi_oi1=0;}
										if($res_c_porc_vent_ci_oi_oi2==null||is_string ($res_c_porc_vent_ci_oi_oi2)){$res_c_porc_vent_ci_oi_oi2=0;}
										if($res_c_porc_vent_ci_oi_oi3==null||is_string ($res_c_porc_vent_ci_oi_oi3)){$res_c_porc_vent_ci_oi_oi3=0;}
										if($res_c_porc_vent_it==null||is_string ($res_c_porc_vent_it)){$res_c_porc_vent_it=0;}
										if($res_c_porc_vent_up==null||is_string ($res_c_porc_vent_up)){$res_c_porc_vent_up=0;}
										if($res_c_porc_vent_up_cc==null||is_string ($res_c_porc_vent_up_cc)){$res_c_porc_vent_up_cc=0;}
										if($res_c_porc_vent_up_ir==null||is_string ($res_c_porc_vent_up_ir)){$res_c_porc_vent_up_ir=0;}
										if($res_c_porc_vent_up2==null||is_string ($res_c_porc_vent_up2)){$res_c_porc_vent_up2=0;}
										if($res_c_porc_vent_cv==null||is_string ($res_c_porc_vent_cv)){$res_c_porc_vent_cv=0;}
										if($res_c_porc_vent_vt==null||is_string ($res_c_porc_vent_vt)){$res_c_porc_vent_vt=0;}
										if($res_c_porc_vent_cvg==null||is_string ($res_c_porc_vent_cvg)){$res_c_porc_vent_cvg=0;}
										if($res_c_porc_vent_tir==null||is_string ($res_c_porc_vent_tir)){$res_c_porc_vent_tir=0;}
										if($res_c_porc_vent_vpn==null||is_string ($res_c_porc_vent_vpn)){$res_c_porc_vent_vpn=0;}
										if($res_c_porc_vent_uc==null||is_string ($res_c_porc_vent_uc)){$res_c_porc_vent_uc=0;}
										if($res_c_porc_vent_uc_co==null||is_string ($res_c_porc_vent_uc_co)){$res_c_porc_vent_uc_co=0;}
										if($res_c_porc_vent_uc_ti==null||is_string ($res_c_porc_vent_uc_ti)){$res_c_porc_vent_uc_ti=0;}
										if($res_c_porc_vent_uc_pr==null||is_string ($res_c_porc_vent_uc_pr)){$res_c_porc_vent_uc_pr=0;}
										if($res_c_porc_vent_tir_c==null||is_string ($res_c_porc_vent_tir_c)){$res_c_porc_vent_tir_c=0;}
										if($res_c_porc_vent_vpn_c==null||is_string ($res_c_porc_vent_vpn_c)){$res_c_porc_vent_vpn_c=0;}
										if($res_c_vr_m_con_ui==null||is_string ($res_c_vr_m_con_ui)){$res_c_vr_m_con_ui=0;}
										if($res_c_vr_m_con_uip==null||is_string ($res_c_vr_m_con_uip)){$res_c_vr_m_con_uip=0;}
										if($res_c_vr_m_con_uii==null||is_string ($res_c_vr_m_con_uii)){$res_c_vr_m_con_uii=0;}
										if($res_c_vr_m_con_cm==null||is_string ($res_c_vr_m_con_cm)){$res_c_vr_m_con_cm=0;}
										if($res_c_vr_m_con_cmp==null||is_string ($res_c_vr_m_con_cmp)){$res_c_vr_m_con_cmp=0;}
										if($res_c_vr_m_con_cmi==null||is_string ($res_c_vr_m_con_cmi)){$res_c_vr_m_con_cmi=0;}
										if($res_c_vr_m_con_gi==null||is_string ($res_c_vr_m_con_gi)){$res_c_vr_m_con_gi=0;}
										if($res_c_vr_m_con_cp==null||is_string ($res_c_vr_m_con_cp)){$res_c_vr_m_con_cp=0;}
										if($res_c_vr_m_con_cd==null||is_string ($res_c_vr_m_con_cd)){$res_c_vr_m_con_cd=0;}
										if($res_c_vr_m_con_cd_hc==null||is_string ($res_c_vr_m_con_cd_hc)){$res_c_vr_m_con_cd_hc=0;}
										if($res_c_vr_m_con_cd_hc_hc==null||is_string ($res_c_vr_m_con_cd_hc_hc)){$res_c_vr_m_con_cd_hc_hc=0;}
										if($res_c_vr_m_con_cd_hc_gr==null||is_string ($res_c_vr_m_con_cd_hc_gr)){$res_c_vr_m_con_cd_hc_gr=0;}
										if($res_c_vr_m_con_cd_hi==null||is_string ($res_c_vr_m_con_cd_hi)){$res_c_vr_m_con_cd_hi=0;}
										if($res_c_vr_m_con_cd_hi_hi==null||is_string ($res_c_vr_m_con_cd_hi_hi)){$res_c_vr_m_con_cd_hi_hi=0;}
										if($res_c_vr_m_con_cd_hi_gr==null||is_string ($res_c_vr_m_con_cd_hi_gr)){$res_c_vr_m_con_cd_hi_gr=0;}
										if($res_c_vr_m_con_cd_oh==null||is_string ($res_c_vr_m_con_cd_oh)){$res_c_vr_m_con_cd_oh=0;}
										if($res_c_vr_m_con_cd_oh_oh==null||is_string ($res_c_vr_m_con_cd_oh_oh)){$res_c_vr_m_con_cd_oh_oh=0;}
										if($res_c_vr_m_con_cd_oh_gr==null||is_string ($res_c_vr_m_con_cd_oh_gr)){$res_c_vr_m_con_cd_oh_gr=0;}
										if($res_c_vr_m_con_cd_id==null||is_string ($res_c_vr_m_con_cd_id)){$res_c_vr_m_con_cd_id=0;}
										if($res_c_vr_m_con_ct==null||is_string ($res_c_vr_m_con_ct)){$res_c_vr_m_con_ct=0;}
										if($res_c_vr_m_con_ct_hg==null||is_string ($res_c_vr_m_con_ct_hg)){$res_c_vr_m_con_ct_hg=0;}
										if($res_c_vr_m_con_ct_hg_hg==null||is_string ($res_c_vr_m_con_ct_hg_hg)){$res_c_vr_m_con_ct_hg_hg=0;}
										if($res_c_vr_m_con_ct_hg_gr==null||is_string ($res_c_vr_m_con_ct_hg_gr)){$res_c_vr_m_con_ct_hg_gr=0;}
										if($res_c_vr_m_con_ct_hv==null||is_string ($res_c_vr_m_con_ct_hv)){$res_c_vr_m_con_ct_hv=0;}
										if($res_c_vr_m_con_ct_hv_hv==null||is_string ($res_c_vr_m_con_ct_hv_hv)){$res_c_vr_m_con_ct_hv_hv=0;}
										if($res_c_vr_m_con_ct_hv_gr==null||is_string ($res_c_vr_m_con_ct_hv_gr)){$res_c_vr_m_con_ct_hv_gr=0;}
										if($res_c_vr_m_con_ct_cp==null||is_string ($res_c_vr_m_con_ct_cp)){$res_c_vr_m_con_ct_cp=0;}
										if($res_c_vr_m_con_ct_cp_sv==null||is_string ($res_c_vr_m_con_ct_cp_sv)){$res_c_vr_m_con_ct_cp_sv=0;}
										if($res_c_vr_m_con_ct_cp_gp==null||is_string ($res_c_vr_m_con_ct_cp_gp)){$res_c_vr_m_con_ct_cp_gp=0;}
										if($res_c_vr_m_con_ct_cp_gs==null||is_string ($res_c_vr_m_con_ct_cp_gs)){$res_c_vr_m_con_ct_cp_gs=0;}
										if($res_c_vr_m_con_ct_cp_au==null||is_string ($res_c_vr_m_con_ct_cp_au)){$res_c_vr_m_con_ct_cp_au=0;}
										if($res_c_vr_m_con_ct_cp_cv==null||is_string ($res_c_vr_m_con_ct_cp_cv)){$res_c_vr_m_con_ct_cp_cv=0;}
										if($res_c_vr_m_con_ct_gl==null||is_string ($res_c_vr_m_con_ct_gl)){$res_c_vr_m_con_ct_gl=0;}
										if($res_c_vr_m_con_ct_gl_hc==null||is_string ($res_c_vr_m_con_ct_gl_hc)){$res_c_vr_m_con_ct_gl_hc=0;}
										if($res_c_vr_m_con_ct_gl_nr==null||is_string ($res_c_vr_m_con_ct_gl_nr)){$res_c_vr_m_con_ct_gl_nr=0;}
										if($res_c_vr_m_con_ct_gl_ip==null||is_string ($res_c_vr_m_con_ct_gl_ip)){$res_c_vr_m_con_ct_gl_ip=0;}
										if($res_c_vr_m_con_ct_gl_ic==null||is_string ($res_c_vr_m_con_ct_gl_ic)){$res_c_vr_m_con_ct_gl_ic=0;}
										if($res_c_vr_m_con_ca==null||is_string ($res_c_vr_m_con_ca)){$res_c_vr_m_con_ca=0;}
										if($res_c_vr_m_con_ca_vt==null||is_string ($res_c_vr_m_con_ca_vt)){$res_c_vr_m_con_ca_vt=0;}
										if($res_c_vr_m_con_ca_vt_pv==null||is_string ($res_c_vr_m_con_ca_vt_pv)){$res_c_vr_m_con_ca_vt_pv=0;}
										if($res_c_vr_m_con_ca_vt_op==null||is_string ($res_c_vr_m_con_ca_vt_op)){$res_c_vr_m_con_ca_vt_op=0;}
										if($res_c_vr_m_con_ca_cf==null||is_string ($res_c_vr_m_con_ca_cf)){$res_c_vr_m_con_ca_cf=0;}
										if($res_c_vr_m_con_ca_cf_pa==null||is_string ($res_c_vr_m_con_ca_cf_pa)){$res_c_vr_m_con_ca_cf_pa=0;}
										if($res_c_vr_m_con_ca_cf_nh==null||is_string ($res_c_vr_m_con_ca_cf_nh)){$res_c_vr_m_con_ca_cf_nh=0;}
										if($res_c_vr_m_con_ca_gf==null||is_string ($res_c_vr_m_con_ca_gf)){$res_c_vr_m_con_ca_gf=0;}
										if($res_c_vr_m_con_ca_gf_ic==null||is_string ($res_c_vr_m_con_ca_gf_ic)){$res_c_vr_m_con_ca_gf_ic=0;}
										if($res_c_vr_m_con_ca_gf_oc==null||is_string ($res_c_vr_m_con_ca_gf_oc)){$res_c_vr_m_con_ca_gf_oc=0;}
										if($res_c_vr_m_con_ca_gf_cm==null||is_string ($res_c_vr_m_con_ca_gf_cm)){$res_c_vr_m_con_ca_gf_cm=0;}
										if($res_c_vr_m_con_ca_gf_it==null||is_string ($res_c_vr_m_con_ca_gf_it)){$res_c_vr_m_con_ca_gf_it=0;}
										if($res_c_vr_m_con_ca_oc==null||is_string ($res_c_vr_m_con_ca_oc)){$res_c_vr_m_con_ca_oc=0;}
										if($res_c_vr_m_con_ca_oc_oc1==null||is_string ($res_c_vr_m_con_ca_oc_oc1)){$res_c_vr_m_con_ca_oc_oc1=0;}
										if($res_c_vr_m_con_ca_oc_oc2==null||is_string ($res_c_vr_m_con_ca_oc_oc2)){$res_c_vr_m_con_ca_oc_oc2=0;}
										if($res_c_vr_m_con_ca_oc_oc3==null||is_string ($res_c_vr_m_con_ca_oc_oc3)){$res_c_vr_m_con_ca_oc_oc3=0;}
										if($res_c_vr_m_con_ca_ri==null||is_string ($res_c_vr_m_con_ca_ri)){$res_c_vr_m_con_ca_ri=0;}
										if($res_c_vr_m_con_ci==null||is_string ($res_c_vr_m_con_ci)){$res_c_vr_m_con_ci=0;}
										if($res_c_vr_m_con_ci_vb==null||is_string ($res_c_vr_m_con_ci_vb)){$res_c_vr_m_con_ci_vb=0;}
										if($res_c_vr_m_con_ci_ov==null||is_string ($res_c_vr_m_con_ci_ov)){$res_c_vr_m_con_ci_ov=0;}
										if($res_c_vr_m_con_ci_ov_is==null||is_string ($res_c_vr_m_con_ci_ov_is)){$res_c_vr_m_con_ci_ov_is=0;}
										if($res_c_vr_m_con_ci_ov_im==null||is_string ($res_c_vr_m_con_ci_ov_im)){$res_c_vr_m_con_ci_ov_im=0;}
										if($res_c_vr_m_con_ci_ov_oc==null||is_string ($res_c_vr_m_con_ci_ov_oc)){$res_c_vr_m_con_ci_ov_oc=0;}
										if($res_c_vr_m_con_ci_rf==null||is_string ($res_c_vr_m_con_ci_rf)){$res_c_vr_m_con_ci_rf=0;}
										if($res_c_vr_m_con_ci_oi==null||is_string ($res_c_vr_m_con_ci_oi)){$res_c_vr_m_con_ci_oi=0;}
										if($res_c_vr_m_con_ci_oi_oi1==null||is_string ($res_c_vr_m_con_ci_oi_oi1)){$res_c_vr_m_con_ci_oi_oi1=0;}
										if($res_c_vr_m_con_ci_oi_oi2==null||is_string ($res_c_vr_m_con_ci_oi_oi2)){$res_c_vr_m_con_ci_oi_oi2=0;}
										if($res_c_vr_m_con_ci_oi_oi3==null||is_string ($res_c_vr_m_con_ci_oi_oi3)){$res_c_vr_m_con_ci_oi_oi3=0;}
										if($res_c_vr_m_con_it==null||is_string ($res_c_vr_m_con_it)){$res_c_vr_m_con_it=0;}
										if($res_c_vr_m_con_up==null||is_string ($res_c_vr_m_con_up)){$res_c_vr_m_con_up=0;}
										if($res_c_vr_m_con_up_cc==null||is_string ($res_c_vr_m_con_up_cc)){$res_c_vr_m_con_up_cc=0;}
										if($res_c_vr_m_con_up_ir==null||is_string ($res_c_vr_m_con_up_ir)){$res_c_vr_m_con_up_ir=0;}
										if($res_c_vr_m_con_up2==null||is_string ($res_c_vr_m_con_up2)){$res_c_vr_m_con_up2=0;}
										if($res_c_vr_m_con_cv==null||is_string ($res_c_vr_m_con_cv)){$res_c_vr_m_con_cv=0;}
										if($res_c_vr_m_con_vt==null||is_string ($res_c_vr_m_con_vt)){$res_c_vr_m_con_vt=0;}
										if($res_c_vr_m_ven_ui==null||is_string ($res_c_vr_m_ven_ui)){$res_c_vr_m_ven_ui=0;}
										if($res_c_vr_m_ven_uip==null||is_string ($res_c_vr_m_ven_uip)){$res_c_vr_m_ven_uip=0;}
										if($res_c_vr_m_ven_uii==null||is_string ($res_c_vr_m_ven_uii)){$res_c_vr_m_ven_uii=0;}
										if($res_c_vr_m_ven_cm==null||is_string ($res_c_vr_m_ven_cm)){$res_c_vr_m_ven_cm=0;}
										if($res_c_vr_m_ven_cmp==null||is_string ($res_c_vr_m_ven_cmp)){$res_c_vr_m_ven_cmp=0;}
										if($res_c_vr_m_ven_cmi==null||is_string ($res_c_vr_m_ven_cmi)){$res_c_vr_m_ven_cmi=0;}
										if($res_c_vr_m_ven_gi==null||is_string ($res_c_vr_m_ven_gi)){$res_c_vr_m_ven_gi=0;}
										if($res_c_vr_m_ven_cp==null||is_string ($res_c_vr_m_ven_cp)){$res_c_vr_m_ven_cp=0;}
										if($res_c_vr_m_ven_cd==null||is_string ($res_c_vr_m_ven_cd)){$res_c_vr_m_ven_cd=0;}
										if($res_c_vr_m_ven_cd_hc==null||is_string ($res_c_vr_m_ven_cd_hc)){$res_c_vr_m_ven_cd_hc=0;}
										if($res_c_vr_m_ven_cd_hc_hc==null||is_string ($res_c_vr_m_ven_cd_hc_hc)){$res_c_vr_m_ven_cd_hc_hc=0;}
										if($res_c_vr_m_ven_cd_hc_gr==null||is_string ($res_c_vr_m_ven_cd_hc_gr)){$res_c_vr_m_ven_cd_hc_gr=0;}
										if($res_c_vr_m_ven_cd_hi==null||is_string ($res_c_vr_m_ven_cd_hi)){$res_c_vr_m_ven_cd_hi=0;}
										if($res_c_vr_m_ven_cd_hi_hi==null||is_string ($res_c_vr_m_ven_cd_hi_hi)){$res_c_vr_m_ven_cd_hi_hi=0;}
										if($res_c_vr_m_ven_cd_hi_gr==null||is_string ($res_c_vr_m_ven_cd_hi_gr)){$res_c_vr_m_ven_cd_hi_gr=0;}
										if($res_c_vr_m_ven_cd_oh==null||is_string ($res_c_vr_m_ven_cd_oh)){$res_c_vr_m_ven_cd_oh=0;}
										if($res_c_vr_m_ven_cd_oh_oh==null||is_string ($res_c_vr_m_ven_cd_oh_oh)){$res_c_vr_m_ven_cd_oh_oh=0;}
										if($res_c_vr_m_ven_cd_oh_gr==null||is_string ($res_c_vr_m_ven_cd_oh_gr)){$res_c_vr_m_ven_cd_oh_gr=0;}
										if($res_c_vr_m_ven_cd_id==null||is_string ($res_c_vr_m_ven_cd_id)){$res_c_vr_m_ven_cd_id=0;}
										if($res_c_vr_m_ven_ct==null||is_string ($res_c_vr_m_ven_ct)){$res_c_vr_m_ven_ct=0;}
										if($res_c_vr_m_ven_ct_hg==null||is_string ($res_c_vr_m_ven_ct_hg)){$res_c_vr_m_ven_ct_hg=0;}
										if($res_c_vr_m_ven_ct_hg_hg==null||is_string ($res_c_vr_m_ven_ct_hg_hg)){$res_c_vr_m_ven_ct_hg_hg=0;}
										if($res_c_vr_m_ven_ct_hg_gr==null||is_string ($res_c_vr_m_ven_ct_hg_gr)){$res_c_vr_m_ven_ct_hg_gr=0;}
										if($res_c_vr_m_ven_ct_hv==null||is_string ($res_c_vr_m_ven_ct_hv)){$res_c_vr_m_ven_ct_hv=0;}
										if($res_c_vr_m_ven_ct_hv_hv==null||is_string ($res_c_vr_m_ven_ct_hv_hv)){$res_c_vr_m_ven_ct_hv_hv=0;}
										if($res_c_vr_m_ven_ct_hv_gr==null||is_string ($res_c_vr_m_ven_ct_hv_gr)){$res_c_vr_m_ven_ct_hv_gr=0;}
										if($res_c_vr_m_ven_ct_cp==null||is_string ($res_c_vr_m_ven_ct_cp)){$res_c_vr_m_ven_ct_cp=0;}
										if($res_c_vr_m_ven_ct_cp_sv==null||is_string ($res_c_vr_m_ven_ct_cp_sv)){$res_c_vr_m_ven_ct_cp_sv=0;}
										if($res_c_vr_m_ven_ct_cp_gp==null||is_string ($res_c_vr_m_ven_ct_cp_gp)){$res_c_vr_m_ven_ct_cp_gp=0;}
										if($res_c_vr_m_ven_ct_cp_gs==null||is_string ($res_c_vr_m_ven_ct_cp_gs)){$res_c_vr_m_ven_ct_cp_gs=0;}
										if($res_c_vr_m_ven_ct_cp_au==null||is_string ($res_c_vr_m_ven_ct_cp_au)){$res_c_vr_m_ven_ct_cp_au=0;}
										if($res_c_vr_m_ven_ct_cp_cv==null||is_string ($res_c_vr_m_ven_ct_cp_cv)){$res_c_vr_m_ven_ct_cp_cv=0;}
										if($res_c_vr_m_ven_ct_gl==null||is_string ($res_c_vr_m_ven_ct_gl)){$res_c_vr_m_ven_ct_gl=0;}
										if($res_c_vr_m_ven_ct_gl_hc==null||is_string ($res_c_vr_m_ven_ct_gl_hc)){$res_c_vr_m_ven_ct_gl_hc=0;}
										if($res_c_vr_m_ven_ct_gl_nr==null||is_string ($res_c_vr_m_ven_ct_gl_nr)){$res_c_vr_m_ven_ct_gl_nr=0;}
										if($res_c_vr_m_ven_ct_gl_ip==null||is_string ($res_c_vr_m_ven_ct_gl_ip)){$res_c_vr_m_ven_ct_gl_ip=0;}
										if($res_c_vr_m_ven_ct_gl_ic==null||is_string ($res_c_vr_m_ven_ct_gl_ic)){$res_c_vr_m_ven_ct_gl_ic=0;}
										if($res_c_vr_m_ven_ca==null||is_string ($res_c_vr_m_ven_ca)){$res_c_vr_m_ven_ca=0;}
										if($res_c_vr_m_ven_ca_vt==null||is_string ($res_c_vr_m_ven_ca_vt)){$res_c_vr_m_ven_ca_vt=0;}
										if($res_c_vr_m_ven_ca_vt_pv==null||is_string ($res_c_vr_m_ven_ca_vt_pv)){$res_c_vr_m_ven_ca_vt_pv=0;}
										if($res_c_vr_m_ven_ca_vt_op==null||is_string ($res_c_vr_m_ven_ca_vt_op)){$res_c_vr_m_ven_ca_vt_op=0;}
										if($res_c_vr_m_ven_ca_cf==null||is_string ($res_c_vr_m_ven_ca_cf)){$res_c_vr_m_ven_ca_cf=0;}
										if($res_c_vr_m_ven_ca_cf_pa==null||is_string ($res_c_vr_m_ven_ca_cf_pa)){$res_c_vr_m_ven_ca_cf_pa=0;}
										if($res_c_vr_m_ven_ca_cf_nh==null||is_string ($res_c_vr_m_ven_ca_cf_nh)){$res_c_vr_m_ven_ca_cf_nh=0;}
										if($res_c_vr_m_ven_ca_gf==null||is_string ($res_c_vr_m_ven_ca_gf)){$res_c_vr_m_ven_ca_gf=0;}
										if($res_c_vr_m_ven_ca_gf_ic==null||is_string ($res_c_vr_m_ven_ca_gf_ic)){$res_c_vr_m_ven_ca_gf_ic=0;}
										if($res_c_vr_m_ven_ca_gf_oc==null||is_string ($res_c_vr_m_ven_ca_gf_oc)){$res_c_vr_m_ven_ca_gf_oc=0;}
										if($res_c_vr_m_ven_ca_gf_cm==null||is_string ($res_c_vr_m_ven_ca_gf_cm)){$res_c_vr_m_ven_ca_gf_cm=0;}
										if($res_c_vr_m_ven_ca_gf_it==null||is_string ($res_c_vr_m_ven_ca_gf_it)){$res_c_vr_m_ven_ca_gf_it=0;}
										if($res_c_vr_m_ven_ca_oc==null||is_string ($res_c_vr_m_ven_ca_oc)){$res_c_vr_m_ven_ca_oc=0;}
										if($res_c_vr_m_ven_ca_oc_oc1==null||is_string ($res_c_vr_m_ven_ca_oc_oc1)){$res_c_vr_m_ven_ca_oc_oc1=0;}
										if($res_c_vr_m_ven_ca_oc_oc2==null||is_string ($res_c_vr_m_ven_ca_oc_oc2)){$res_c_vr_m_ven_ca_oc_oc2=0;}
										if($res_c_vr_m_ven_ca_oc_oc3==null||is_string ($res_c_vr_m_ven_ca_oc_oc3)){$res_c_vr_m_ven_ca_oc_oc3=0;}
										if($res_c_vr_m_ven_ca_ri==null||is_string ($res_c_vr_m_ven_ca_ri)){$res_c_vr_m_ven_ca_ri=0;}
										if($res_c_vr_m_ven_ci==null||is_string ($res_c_vr_m_ven_ci)){$res_c_vr_m_ven_ci=0;}
										if($res_c_vr_m_ven_ci_vb==null||is_string ($res_c_vr_m_ven_ci_vb)){$res_c_vr_m_ven_ci_vb=0;}
										if($res_c_vr_m_ven_ci_ov==null||is_string ($res_c_vr_m_ven_ci_ov)){$res_c_vr_m_ven_ci_ov=0;}
										if($res_c_vr_m_ven_ci_ov_is==null||is_string ($res_c_vr_m_ven_ci_ov_is)){$res_c_vr_m_ven_ci_ov_is=0;}
										if($res_c_vr_m_ven_ci_ov_im==null||is_string ($res_c_vr_m_ven_ci_ov_im)){$res_c_vr_m_ven_ci_ov_im=0;}
										if($res_c_vr_m_ven_ci_ov_oc==null||is_string ($res_c_vr_m_ven_ci_ov_oc)){$res_c_vr_m_ven_ci_ov_oc=0;}
										if($res_c_vr_m_ven_ci_rf==null||is_string ($res_c_vr_m_ven_ci_rf)){$res_c_vr_m_ven_ci_rf=0;}
										if($res_c_vr_m_ven_ci_oi==null||is_string ($res_c_vr_m_ven_ci_oi)){$res_c_vr_m_ven_ci_oi=0;}
										if($res_c_vr_m_ven_ci_oi_oi1==null||is_string ($res_c_vr_m_ven_ci_oi_oi1)){$res_c_vr_m_ven_ci_oi_oi1=0;}
										if($res_c_vr_m_ven_ci_oi_oi2==null||is_string ($res_c_vr_m_ven_ci_oi_oi2)){$res_c_vr_m_ven_ci_oi_oi2=0;}
										if($res_c_vr_m_ven_ci_oi_oi3==null||is_string ($res_c_vr_m_ven_ci_oi_oi3)){$res_c_vr_m_ven_ci_oi_oi3=0;}
										if($res_c_vr_m_ven_it==null||is_string ($res_c_vr_m_ven_it)){$res_c_vr_m_ven_it=0;}
										if($res_c_vr_m_ven_up==null||is_string ($res_c_vr_m_ven_up)){$res_c_vr_m_ven_up=0;}
										if($res_c_vr_m_ven_up_cc==null||is_string ($res_c_vr_m_ven_up_cc)){$res_c_vr_m_ven_up_cc=0;}
										if($res_c_vr_m_ven_up_ir==null||is_string ($res_c_vr_m_ven_up_ir)){$res_c_vr_m_ven_up_ir=0;}
										if($res_c_vr_m_ven_up2==null||is_string ($res_c_vr_m_ven_up2)){$res_c_vr_m_ven_up2=0;}
										if($res_c_vr_m_ven_cv==null||is_string ($res_c_vr_m_ven_cv)){$res_c_vr_m_ven_cv=0;}
										if($res_c_vr_m_ven_vt==null||is_string ($res_c_vr_m_ven_vt)){$res_c_vr_m_ven_vt=0;}
										if($res_c_eje_ui==null||is_string ($res_c_eje_ui)){$res_c_eje_ui=0;}
										if($res_c_eje_uip==null||is_string ($res_c_eje_uip)){$res_c_eje_uip=0;}
										if($res_c_eje_uii==null||is_string ($res_c_eje_uii)){$res_c_eje_uii=0;}
										if($res_c_eje_cm==null||is_string ($res_c_eje_cm)){$res_c_eje_cm=0;}
										if($res_c_eje_cmp==null||is_string ($res_c_eje_cmp)){$res_c_eje_cmp=0;}
										if($res_c_eje_cmi==null||is_string ($res_c_eje_cmi)){$res_c_eje_cmi=0;}
										if($res_c_eje_gi==null||is_string ($res_c_eje_gi)){$res_c_eje_gi=0;}
										if($res_c_eje_cp==null||is_string ($res_c_eje_cp)){$res_c_eje_cp=0;}
										if($res_c_eje_cd==null||is_string ($res_c_eje_cd)){$res_c_eje_cd=0;}
										if($res_c_eje_cd_hc==null||is_string ($res_c_eje_cd_hc)){$res_c_eje_cd_hc=0;}
										if($res_c_eje_cd_hc_hc==null||is_string ($res_c_eje_cd_hc_hc)){$res_c_eje_cd_hc_hc=0;}
										if($res_c_eje_cd_hc_gr==null||is_string ($res_c_eje_cd_hc_gr)){$res_c_eje_cd_hc_gr=0;}
										if($res_c_eje_cd_hi==null||is_string ($res_c_eje_cd_hi)){$res_c_eje_cd_hi=0;}
										if($res_c_eje_cd_hi_hi==null||is_string ($res_c_eje_cd_hi_hi)){$res_c_eje_cd_hi_hi=0;}
										if($res_c_eje_cd_hi_gr==null||is_string ($res_c_eje_cd_hi_gr)){$res_c_eje_cd_hi_gr=0;}
										if($res_c_eje_cd_oh==null||is_string ($res_c_eje_cd_oh)){$res_c_eje_cd_oh=0;}
										if($res_c_eje_cd_oh_oh==null||is_string ($res_c_eje_cd_oh_oh)){$res_c_eje_cd_oh_oh=0;}
										if($res_c_eje_cd_oh_gr==null||is_string ($res_c_eje_cd_oh_gr)){$res_c_eje_cd_oh_gr=0;}
										if($res_c_eje_cd_id==null||is_string ($res_c_eje_cd_id)){$res_c_eje_cd_id=0;}
										if($res_c_eje_ct==null||is_string ($res_c_eje_ct)){$res_c_eje_ct=0;}
										if($res_c_eje_ct_hg==null||is_string ($res_c_eje_ct_hg)){$res_c_eje_ct_hg=0;}
										if($res_c_eje_ct_hg_hg==null||is_string ($res_c_eje_ct_hg_hg)){$res_c_eje_ct_hg_hg=0;}
										if($res_c_eje_ct_hg_gr==null||is_string ($res_c_eje_ct_hg_gr)){$res_c_eje_ct_hg_gr=0;}
										if($res_c_eje_ct_hv==null||is_string ($res_c_eje_ct_hv)){$res_c_eje_ct_hv=0;}
										if($res_c_eje_ct_hv_hv==null||is_string ($res_c_eje_ct_hv_hv)){$res_c_eje_ct_hv_hv=0;}
										if($res_c_eje_ct_hv_gr==null||is_string ($res_c_eje_ct_hv_gr)){$res_c_eje_ct_hv_gr=0;}
										if($res_c_eje_ct_cp==null||is_string ($res_c_eje_ct_cp)){$res_c_eje_ct_cp=0;}
										if($res_c_eje_ct_cp_sv==null||is_string ($res_c_eje_ct_cp_sv)){$res_c_eje_ct_cp_sv=0;}
										if($res_c_eje_ct_cp_gp==null||is_string ($res_c_eje_ct_cp_gp)){$res_c_eje_ct_cp_gp=0;}
										if($res_c_eje_ct_cp_gs==null||is_string ($res_c_eje_ct_cp_gs)){$res_c_eje_ct_cp_gs=0;}
										if($res_c_eje_ct_cp_au==null||is_string ($res_c_eje_ct_cp_au)){$res_c_eje_ct_cp_au=0;}
										if($res_c_eje_ct_cp_cv==null||is_string ($res_c_eje_ct_cp_cv)){$res_c_eje_ct_cp_cv=0;}
										if($res_c_eje_ct_gl==null||is_string ($res_c_eje_ct_gl)){$res_c_eje_ct_gl=0;}
										if($res_c_eje_ct_gl_hc==null||is_string ($res_c_eje_ct_gl_hc)){$res_c_eje_ct_gl_hc=0;}
										if($res_c_eje_ct_gl_nr==null||is_string ($res_c_eje_ct_gl_nr)){$res_c_eje_ct_gl_nr=0;}
										if($res_c_eje_ct_gl_ip==null||is_string ($res_c_eje_ct_gl_ip)){$res_c_eje_ct_gl_ip=0;}
										if($res_c_eje_ct_gl_ic==null||is_string ($res_c_eje_ct_gl_ic)){$res_c_eje_ct_gl_ic=0;}
										if($res_c_eje_ca==null||is_string ($res_c_eje_ca)){$res_c_eje_ca=0;}
										if($res_c_eje_ca_vt==null||is_string ($res_c_eje_ca_vt)){$res_c_eje_ca_vt=0;}
										if($res_c_eje_ca_vt_pv==null||is_string ($res_c_eje_ca_vt_pv)){$res_c_eje_ca_vt_pv=0;}
										if($res_c_eje_ca_vt_op==null||is_string ($res_c_eje_ca_vt_op)){$res_c_eje_ca_vt_op=0;}
										if($res_c_eje_ca_cf==null||is_string ($res_c_eje_ca_cf)){$res_c_eje_ca_cf=0;}
										if($res_c_eje_ca_cf_pa==null||is_string ($res_c_eje_ca_cf_pa)){$res_c_eje_ca_cf_pa=0;}
										if($res_c_eje_ca_cf_nh==null||is_string ($res_c_eje_ca_cf_nh)){$res_c_eje_ca_cf_nh=0;}
										if($res_c_eje_ca_gf==null||is_string ($res_c_eje_ca_gf)){$res_c_eje_ca_gf=0;}
										if($res_c_eje_ca_gf_ic==null||is_string ($res_c_eje_ca_gf_ic)){$res_c_eje_ca_gf_ic=0;}
										if($res_c_eje_ca_gf_oc==null||is_string ($res_c_eje_ca_gf_oc)){$res_c_eje_ca_gf_oc=0;}
										if($res_c_eje_ca_gf_cm==null||is_string ($res_c_eje_ca_gf_cm)){$res_c_eje_ca_gf_cm=0;}
										if($res_c_eje_ca_gf_it==null||is_string ($res_c_eje_ca_gf_it)){$res_c_eje_ca_gf_it=0;}
										if($res_c_eje_ca_oc==null||is_string ($res_c_eje_ca_oc)){$res_c_eje_ca_oc=0;}
										if($res_c_eje_ca_oc_oc1==null||is_string ($res_c_eje_ca_oc_oc1)){$res_c_eje_ca_oc_oc1=0;}
										if($res_c_eje_ca_oc_oc2==null||is_string ($res_c_eje_ca_oc_oc2)){$res_c_eje_ca_oc_oc2=0;}
										if($res_c_eje_ca_oc_oc3==null||is_string ($res_c_eje_ca_oc_oc3)){$res_c_eje_ca_oc_oc3=0;}
										if($res_c_eje_ca_ri==null||is_string ($res_c_eje_ca_ri)){$res_c_eje_ca_ri=0;}
										if($res_c_eje_ci==null||is_string ($res_c_eje_ci)){$res_c_eje_ci=0;}
										if($res_c_eje_ci_vb==null||is_string ($res_c_eje_ci_vb)){$res_c_eje_ci_vb=0;}
										if($res_c_eje_ci_ov==null||is_string ($res_c_eje_ci_ov)){$res_c_eje_ci_ov=0;}
										if($res_c_eje_ci_ov_is==null||is_string ($res_c_eje_ci_ov_is)){$res_c_eje_ci_ov_is=0;}
										if($res_c_eje_ci_ov_im==null||is_string ($res_c_eje_ci_ov_im)){$res_c_eje_ci_ov_im=0;}
										if($res_c_eje_ci_ov_oc==null||is_string ($res_c_eje_ci_ov_oc)){$res_c_eje_ci_ov_oc=0;}
										if($res_c_eje_ci_rf==null||is_string ($res_c_eje_ci_rf)){$res_c_eje_ci_rf=0;}
										if($res_c_eje_ci_oi==null||is_string ($res_c_eje_ci_oi)){$res_c_eje_ci_oi=0;}
										if($res_c_eje_ci_oi_oi1==null||is_string ($res_c_eje_ci_oi_oi1)){$res_c_eje_ci_oi_oi1=0;}
										if($res_c_eje_ci_oi_oi2==null||is_string ($res_c_eje_ci_oi_oi2)){$res_c_eje_ci_oi_oi2=0;}
										if($res_c_eje_ci_oi_oi3==null||is_string ($res_c_eje_ci_oi_oi3)){$res_c_eje_ci_oi_oi3=0;}
										if($res_c_eje_it==null||is_string ($res_c_eje_it)){$res_c_eje_it=0;}
										if($res_c_eje_up==null||is_string ($res_c_eje_up)){$res_c_eje_up=0;}
										if($res_c_eje_up_cc==null||is_string ($res_c_eje_up_cc)){$res_c_eje_up_cc=0;}
										if($res_c_eje_up_ir==null||is_string ($res_c_eje_up_ir)){$res_c_eje_up_ir=0;}
										if($res_c_eje_up2==null||is_string ($res_c_eje_up2)){$res_c_eje_up2=0;}
										if($res_c_eje_cv==null||is_string ($res_c_eje_cv)){$res_c_eje_cv=0;}
										if($res_c_eje_vt==null||is_string ($res_c_eje_vt)){$res_c_eje_vt=0;}
										if($res_c_eje_cvg==null||is_string ($res_c_eje_cvg)){$res_c_eje_cvg=0;}
										if($res_c_eje_uc==null||is_string ($res_c_eje_uc)){$res_c_eje_uc=0;}
										if($res_c_eje_uc_co==null||is_string ($res_c_eje_uc_co)){$res_c_eje_uc_co=0;}
										if($res_c_eje_uc_ti==null||is_string ($res_c_eje_uc_ti)){$res_c_eje_uc_ti=0;}
										if($res_c_eje_uc_pr==null||is_string ($res_c_eje_uc_pr)){$res_c_eje_uc_pr=0;}
										if($res_c_porc_tot_ui==null||is_string ($res_c_porc_tot_ui)){$res_c_porc_tot_ui=0;}
										if($res_c_porc_tot_uip==null||is_string ($res_c_porc_tot_uip)){$res_c_porc_tot_uip=0;}
										if($res_c_porc_tot_uii==null||is_string ($res_c_porc_tot_uii)){$res_c_porc_tot_uii=0;}
										if($res_c_porc_tot_cm==null||is_string ($res_c_porc_tot_cm)){$res_c_porc_tot_cm=0;}
										if($res_c_porc_tot_cmp==null||is_string ($res_c_porc_tot_cmp)){$res_c_porc_tot_cmp=0;}
										if($res_c_porc_tot_cmi==null||is_string ($res_c_porc_tot_cmi)){$res_c_porc_tot_cmi=0;}
										if($res_c_porc_tot_gi==null||is_string ($res_c_porc_tot_gi)){$res_c_porc_tot_gi=0;}
										if($res_c_porc_tot_cp==null||is_string ($res_c_porc_tot_cp)){$res_c_porc_tot_cp=0;}
										if($res_c_porc_tot_cd==null||is_string ($res_c_porc_tot_cd)){$res_c_porc_tot_cd=0;}
										if($res_c_porc_tot_cd_hc==null||is_string ($res_c_porc_tot_cd_hc)){$res_c_porc_tot_cd_hc=0;}
										if($res_c_porc_tot_cd_hc_hc==null||is_string ($res_c_porc_tot_cd_hc_hc)){$res_c_porc_tot_cd_hc_hc=0;}
										if($res_c_porc_tot_cd_hc_gr==null||is_string ($res_c_porc_tot_cd_hc_gr)){$res_c_porc_tot_cd_hc_gr=0;}
										if($res_c_porc_tot_cd_hi==null||is_string ($res_c_porc_tot_cd_hi)){$res_c_porc_tot_cd_hi=0;}
										if($res_c_porc_tot_cd_hi_hi==null||is_string ($res_c_porc_tot_cd_hi_hi)){$res_c_porc_tot_cd_hi_hi=0;}
										if($res_c_porc_tot_cd_hi_gr==null||is_string ($res_c_porc_tot_cd_hi_gr)){$res_c_porc_tot_cd_hi_gr=0;}
										if($res_c_porc_tot_cd_oh==null||is_string ($res_c_porc_tot_cd_oh)){$res_c_porc_tot_cd_oh=0;}
										if($res_c_porc_tot_cd_oh_oh==null||is_string ($res_c_porc_tot_cd_oh_oh)){$res_c_porc_tot_cd_oh_oh=0;}
										if($res_c_porc_tot_cd_oh_gr==null||is_string ($res_c_porc_tot_cd_oh_gr)){$res_c_porc_tot_cd_oh_gr=0;}
										if($res_c_porc_tot_cd_id==null||is_string ($res_c_porc_tot_cd_id)){$res_c_porc_tot_cd_id=0;}
										if($res_c_porc_tot_ct==null||is_string ($res_c_porc_tot_ct)){$res_c_porc_tot_ct=0;}
										if($res_c_porc_tot_ct_hg==null||is_string ($res_c_porc_tot_ct_hg)){$res_c_porc_tot_ct_hg=0;}
										if($res_c_porc_tot_ct_hg_hg==null||is_string ($res_c_porc_tot_ct_hg_hg)){$res_c_porc_tot_ct_hg_hg=0;}
										if($res_c_porc_tot_ct_hg_gr==null||is_string ($res_c_porc_tot_ct_hg_gr)){$res_c_porc_tot_ct_hg_gr=0;}
										if($res_c_porc_tot_ct_hv==null||is_string ($res_c_porc_tot_ct_hv)){$res_c_porc_tot_ct_hv=0;}
										if($res_c_porc_tot_ct_hv_hv==null||is_string ($res_c_porc_tot_ct_hv_hv)){$res_c_porc_tot_ct_hv_hv=0;}
										if($res_c_porc_tot_ct_hv_gr==null||is_string ($res_c_porc_tot_ct_hv_gr)){$res_c_porc_tot_ct_hv_gr=0;}
										if($res_c_porc_tot_ct_cp==null||is_string ($res_c_porc_tot_ct_cp)){$res_c_porc_tot_ct_cp=0;}
										if($res_c_porc_tot_ct_cp_sv==null||is_string ($res_c_porc_tot_ct_cp_sv)){$res_c_porc_tot_ct_cp_sv=0;}
										if($res_c_porc_tot_ct_cp_gp==null||is_string ($res_c_porc_tot_ct_cp_gp)){$res_c_porc_tot_ct_cp_gp=0;}
										if($res_c_porc_tot_ct_cp_gs==null||is_string ($res_c_porc_tot_ct_cp_gs)){$res_c_porc_tot_ct_cp_gs=0;}
										if($res_c_porc_tot_ct_cp_au==null||is_string ($res_c_porc_tot_ct_cp_au)){$res_c_porc_tot_ct_cp_au=0;}
										if($res_c_porc_tot_ct_cp_cv==null||is_string ($res_c_porc_tot_ct_cp_cv)){$res_c_porc_tot_ct_cp_cv=0;}
										if($res_c_porc_tot_ct_gl==null||is_string ($res_c_porc_tot_ct_gl)){$res_c_porc_tot_ct_gl=0;}
										if($res_c_porc_tot_ct_gl_hc==null||is_string ($res_c_porc_tot_ct_gl_hc)){$res_c_porc_tot_ct_gl_hc=0;}
										if($res_c_porc_tot_ct_gl_nr==null||is_string ($res_c_porc_tot_ct_gl_nr)){$res_c_porc_tot_ct_gl_nr=0;}
										if($res_c_porc_tot_ct_gl_ip==null||is_string ($res_c_porc_tot_ct_gl_ip)){$res_c_porc_tot_ct_gl_ip=0;}
										if($res_c_porc_tot_ct_gl_ic==null||is_string ($res_c_porc_tot_ct_gl_ic)){$res_c_porc_tot_ct_gl_ic=0;}
										if($res_c_porc_tot_ca==null||is_string ($res_c_porc_tot_ca)){$res_c_porc_tot_ca=0;}
										if($res_c_porc_tot_ca_vt==null||is_string ($res_c_porc_tot_ca_vt)){$res_c_porc_tot_ca_vt=0;}
										if($res_c_porc_tot_ca_vt_pv==null||is_string ($res_c_porc_tot_ca_vt_pv)){$res_c_porc_tot_ca_vt_pv=0;}
										if($res_c_porc_tot_ca_vt_op==null||is_string ($res_c_porc_tot_ca_vt_op)){$res_c_porc_tot_ca_vt_op=0;}
										if($res_c_porc_tot_ca_cf==null||is_string ($res_c_porc_tot_ca_cf)){$res_c_porc_tot_ca_cf=0;}
										if($res_c_porc_tot_ca_cf_pa==null||is_string ($res_c_porc_tot_ca_cf_pa)){$res_c_porc_tot_ca_cf_pa=0;}
										if($res_c_porc_tot_ca_cf_nh==null||is_string ($res_c_porc_tot_ca_cf_nh)){$res_c_porc_tot_ca_cf_nh=0;}
										if($res_c_porc_tot_ca_gf==null||is_string ($res_c_porc_tot_ca_gf)){$res_c_porc_tot_ca_gf=0;}
										if($res_c_porc_tot_ca_gf_ic==null||is_string ($res_c_porc_tot_ca_gf_ic)){$res_c_porc_tot_ca_gf_ic=0;}
										if($res_c_porc_tot_ca_gf_oc==null||is_string ($res_c_porc_tot_ca_gf_oc)){$res_c_porc_tot_ca_gf_oc=0;}
										if($res_c_porc_tot_ca_gf_cm==null||is_string ($res_c_porc_tot_ca_gf_cm)){$res_c_porc_tot_ca_gf_cm=0;}
										if($res_c_porc_tot_ca_gf_it==null||is_string ($res_c_porc_tot_ca_gf_it)){$res_c_porc_tot_ca_gf_it=0;}
										if($res_c_porc_tot_ca_oc==null||is_string ($res_c_porc_tot_ca_oc)){$res_c_porc_tot_ca_oc=0;}
										if($res_c_porc_tot_ca_oc_oc1==null||is_string ($res_c_porc_tot_ca_oc_oc1)){$res_c_porc_tot_ca_oc_oc1=0;}
										if($res_c_porc_tot_ca_oc_oc2==null||is_string ($res_c_porc_tot_ca_oc_oc2)){$res_c_porc_tot_ca_oc_oc2=0;}
										if($res_c_porc_tot_ca_oc_oc3==null||is_string ($res_c_porc_tot_ca_oc_oc3)){$res_c_porc_tot_ca_oc_oc3=0;}
										if($res_c_porc_tot_ca_ri==null||is_string ($res_c_porc_tot_ca_ri)){$res_c_porc_tot_ca_ri=0;}
										if($res_c_porc_tot_ci==null||is_string ($res_c_porc_tot_ci)){$res_c_porc_tot_ci=0;}
										if($res_c_porc_tot_ci_vb==null||is_string ($res_c_porc_tot_ci_vb)){$res_c_porc_tot_ci_vb=0;}
										if($res_c_porc_tot_ci_ov==null||is_string ($res_c_porc_tot_ci_ov)){$res_c_porc_tot_ci_ov=0;}
										if($res_c_porc_tot_ci_ov_is==null||is_string ($res_c_porc_tot_ci_ov_is)){$res_c_porc_tot_ci_ov_is=0;}
										if($res_c_porc_tot_ci_ov_im==null||is_string ($res_c_porc_tot_ci_ov_im)){$res_c_porc_tot_ci_ov_im=0;}
										if($res_c_porc_tot_ci_ov_oc==null||is_string ($res_c_porc_tot_ci_ov_oc)){$res_c_porc_tot_ci_ov_oc=0;}
										if($res_c_porc_tot_ci_rf==null||is_string ($res_c_porc_tot_ci_rf)){$res_c_porc_tot_ci_rf=0;}
										if($res_c_porc_tot_ci_oi==null||is_string ($res_c_porc_tot_ci_oi)){$res_c_porc_tot_ci_oi=0;}
										if($res_c_porc_tot_ci_oi_oi1==null||is_string ($res_c_porc_tot_ci_oi_oi1)){$res_c_porc_tot_ci_oi_oi1=0;}
										if($res_c_porc_tot_ci_oi_oi2==null||is_string ($res_c_porc_tot_ci_oi_oi2)){$res_c_porc_tot_ci_oi_oi2=0;}
										if($res_c_porc_tot_ci_oi_oi3==null||is_string ($res_c_porc_tot_ci_oi_oi3)){$res_c_porc_tot_ci_oi_oi3=0;}
										if($res_c_porc_tot_it==null||is_string ($res_c_porc_tot_it)){$res_c_porc_tot_it=0;}
										if($res_c_porc_tot_up==null||is_string ($res_c_porc_tot_up)){$res_c_porc_tot_up=0;}
										if($res_c_porc_tot_up_cc==null||is_string ($res_c_porc_tot_up_cc)){$res_c_porc_tot_up_cc=0;}
										if($res_c_porc_tot_up_ir==null||is_string ($res_c_porc_tot_up_ir)){$res_c_porc_tot_up_ir=0;}
										if($res_c_porc_tot_up2==null||is_string ($res_c_porc_tot_up2)){$res_c_porc_tot_up2=0;}
										if($res_c_porc_tot_cv==null||is_string ($res_c_porc_tot_cv)){$res_c_porc_tot_cv=0;}
										if($res_c_porc_tot_vt==null||is_string ($res_c_porc_tot_vt)){$res_c_porc_tot_vt=0;}
										if($res_c_porc_tot_cvg==null||is_string ($res_c_porc_tot_cvg)){$res_c_porc_tot_cvg=0;}
										if($res_c_porc_tot_uc==null||is_string ($res_c_porc_tot_uc)){$res_c_porc_tot_uc=0;}
										if($res_c_porc_tot_uc_co==null||is_string ($res_c_porc_tot_uc_co)){$res_c_porc_tot_uc_co=0;}
										if($res_c_porc_tot_uc_ti==null||is_string ($res_c_porc_tot_uc_ti)){$res_c_porc_tot_uc_ti=0;}
										if($res_c_porc_tot_uc_pr==null||is_string ($res_c_porc_tot_uc_pr)){$res_c_porc_tot_uc_pr=0;}
										
									//----------------------------------RESUMEN---------------------
					
					//Insercion de datos 481
									$envio_Tb_Resumen="INSERT INTO tb_resumen (
										RES_DET_PRO_ID,
										RES_DET_ETAPA,
										RES_MODELO,
										RES_FECHA,
										RES_TOTAL_UNIDADES,
										RES_AREA_PROMEDIO_UNIDAD,
										RES_TOTAL_AREA_CONSTRUIDA,
										RES_TOTAL_AREA_VENDIBLE,
										RES_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO,
										RES_DENSIDAD_INDICE_OCUPACION,
										RES_VALOR_METRO_CUADRADO_LOTE_URBANIZADO,
										RES_NUMERO_PARQUEOS,
										RES_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD,
										RES_NUMERO_DEPOSITOS,
										RES_FECHA_INICIO_Y_TERMINACION_VENTAS,
										RES_FECHA_INICIO_Y_TERMINACION_CONSTRUCCION,
										RES_RITMO_VENTAS_MENSUAL_PROMEDIO,
										RES_PUNTO_EQUILIBRIO_UNIDADES,
										RES_TASA_PROMEDIO_INCREMENTO_PRECIOS,
										RES_PORCENTAJE_VENTAS_NUEVOGAR,
										RES_FECHA_PRESUPUESTO,
										RES_TASA_PROMEDIO_INCREMENTO_PRESUPUESTO,
										RES_C_TOT_UI,
										RES_C_TOT_UIP,
										RES_C_TOT_UII,
										RES_C_TOT_CM,
										RES_C_TOT_CMP,
										RES_C_TOT_CMI,
										RES_C_TOT_GI,
										RES_C_TOT_CP,
										RES_C_TOT_CD,
										RES_C_TOT_CD_HC,
										RES_C_TOT_CD_HC_HC,
										RES_C_TOT_CD_HC_GR,
										RES_C_TOT_CD_HI,
										RES_C_TOT_CD_HI_HI,
										RES_C_TOT_CD_HI_GR,
										RES_C_TOT_CD_OH,
										RES_C_TOT_CD_OH_OH,
										RES_C_TOT_CD_OH_GR,
										RES_C_TOT_CD_ID,
										RES_C_TOT_CT,
										RES_C_TOT_CT_HG,
										RES_C_TOT_CT_HG_HG,
										RES_C_TOT_CT_HG_GR,
										RES_C_TOT_CT_HV,
										RES_C_TOT_CT_HV_HV,
										RES_C_TOT_CT_HV_GR,
										RES_C_TOT_CT_CP,
										RES_C_TOT_CT_CP_SV,
										RES_C_TOT_CT_CP_GP,
										RES_C_TOT_CT_CP_GS,
										RES_C_TOT_CT_CP_AU,
										RES_C_TOT_CT_CP_CV,
										RES_C_TOT_CT_GL,
										RES_C_TOT_CT_GL_HC,
										RES_C_TOT_CT_GL_NR,
										RES_C_TOT_CT_GL_IP,
										RES_C_TOT_CT_GL_IC,
										RES_C_TOT_CA,
										RES_C_TOT_CA_VT,
										RES_C_TOT_CA_VT_PV,
										RES_C_TOT_CA_VT_OP,
										RES_C_TOT_CA_CF,
										RES_C_TOT_CA_CF_PA,
										RES_C_TOT_CA_CF_NH,
										RES_C_TOT_CA_GF,
										RES_C_TOT_CA_GF_IC,
										RES_C_TOT_CA_GF_OC,
										RES_C_TOT_CA_GF_CM,
										RES_C_TOT_CA_GF_IT,
										RES_C_TOT_CA_OC,
										RES_C_TOT_CA_OC_OC1,
										RES_C_TOT_CA_OC_OC2,
										RES_C_TOT_CA_OC_OC3,
										RES_C_TOT_CA_RI,
										RES_C_TOT_CI,
										RES_C_TOT_CI_VB,
										RES_C_TOT_CI_OV,
										RES_C_TOT_CI_OV_IS,
										RES_C_TOT_CI_OV_IM,
										RES_C_TOT_CI_OV_OC,
										RES_C_TOT_CI_RF,
										RES_C_TOT_CI_OI,
										RES_C_TOT_CI_OI_OI1,
										RES_C_TOT_CI_OI_OI2,
										RES_C_TOT_CI_OI_OI3,
										RES_C_TOT_IT,
										RES_C_TOT_UP,
										RES_C_TOT_UP_CC,
										RES_C_TOT_UP_IR,
										RES_C_TOT_UP2,
										RES_C_TOT_CV,
										RES_C_TOT_VT,
										RES_C_TOT_CVG,
										RES_C_TOT_TIR,
										RES_C_TOT_VPN,
										RES_C_TOT_UC,
										RES_C_TOT_UC_CO,
										RES_C_TOT_UC_TI,
										RES_C_TOT_UC_PR,
										RES_C_TOT_TIR_C,
										RES_C_TOT_VPN_C,
										RES_C_PORC_VENT_UI,
										RES_C_PORC_VENT_UIP,
										RES_C_PORC_VENT_UII,
										RES_C_PORC_VENT_CM,
										RES_C_PORC_VENT_CMP,
										RES_C_PORC_VENT_CMI,
										RES_C_PORC_VENT_GI,
										RES_C_PORC_VENT_CP,
										RES_C_PORC_VENT_CD,
										RES_C_PORC_VENT_CD_HC,
										RES_C_PORC_VENT_CD_HC_HC,
										RES_C_PORC_VENT_CD_HC_GR,
										RES_C_PORC_VENT_CD_HI,
										RES_C_PORC_VENT_CD_HI_HI,
										RES_C_PORC_VENT_CD_HI_GR,
										RES_C_PORC_VENT_CD_OH,
										RES_C_PORC_VENT_CD_OH_OH,
										RES_C_PORC_VENT_CD_OH_GR,
										RES_C_PORC_VENT_CD_ID,
										RES_C_PORC_VENT_CT,
										RES_C_PORC_VENT_CT_HG,
										RES_C_PORC_VENT_CT_HG_HG,
										RES_C_PORC_VENT_CT_HG_GR,
										RES_C_PORC_VENT_CT_HV,
										RES_C_PORC_VENT_CT_HV_HV,
										RES_C_PORC_VENT_CT_HV_GR,
										RES_C_PORC_VENT_CT_CP,
										RES_C_PORC_VENT_CT_CP_SV,
										RES_C_PORC_VENT_CT_CP_GP,
										RES_C_PORC_VENT_CT_CP_GS,
										RES_C_PORC_VENT_CT_CP_AU,
										RES_C_PORC_VENT_CT_CP_CV,
										RES_C_PORC_VENT_CT_GL,
										RES_C_PORC_VENT_CT_GL_HC,
										RES_C_PORC_VENT_CT_GL_NR,
										RES_C_PORC_VENT_CT_GL_IP,
										RES_C_PORC_VENT_CT_GL_IC,
										RES_C_PORC_VENT_CA,
										RES_C_PORC_VENT_CA_VT,
										RES_C_PORC_VENT_CA_VT_PV,
										RES_C_PORC_VENT_CA_VT_OP,
										RES_C_PORC_VENT_CA_CF,
										RES_C_PORC_VENT_CA_CF_PA,
										RES_C_PORC_VENT_CA_CF_NH,
										RES_C_PORC_VENT_CA_GF,
										RES_C_PORC_VENT_CA_GF_IC,
										RES_C_PORC_VENT_CA_GF_OC,
										RES_C_PORC_VENT_CA_GF_CM,
										RES_C_PORC_VENT_CA_GF_IT,
										RES_C_PORC_VENT_CA_OC,
										RES_C_PORC_VENT_CA_OC_OC1,
										RES_C_PORC_VENT_CA_OC_OC2,
										RES_C_PORC_VENT_CA_OC_OC3,
										RES_C_PORC_VENT_CA_RI,
										RES_C_PORC_VENT_CI,
										RES_C_PORC_VENT_CI_VB,
										RES_C_PORC_VENT_CI_OV,
										RES_C_PORC_VENT_CI_OV_IS,
										RES_C_PORC_VENT_CI_OV_IM,
										RES_C_PORC_VENT_CI_OV_OC,
										RES_C_PORC_VENT_CI_RF,
										RES_C_PORC_VENT_CI_OI,
										RES_C_PORC_VENT_CI_OI_OI1,
										RES_C_PORC_VENT_CI_OI_OI2,
										RES_C_PORC_VENT_CI_OI_OI3,
										RES_C_PORC_VENT_IT,
										RES_C_PORC_VENT_UP,
										RES_C_PORC_VENT_UP_CC,
										RES_C_PORC_VENT_UP_IR,
										RES_C_PORC_VENT_UP2,
										RES_C_PORC_VENT_CV,
										RES_C_PORC_VENT_VT,
										RES_C_PORC_VENT_CVG,
										RES_C_PORC_VENT_TIR,
										RES_C_PORC_VENT_VPN,
										RES_C_PORC_VENT_UC,
										RES_C_PORC_VENT_UC_CO,
										RES_C_PORC_VENT_UC_TI,
										RES_C_PORC_VENT_UC_PR,
										RES_C_PORC_VENT_TIR_C,
										RES_C_PORC_VENT_VPN_C,
										RES_C_VR_M_CON_UI,
										RES_C_VR_M_CON_UIP,
										RES_C_VR_M_CON_UII,
										RES_C_VR_M_CON_CM,
										RES_C_VR_M_CON_CMP,
										RES_C_VR_M_CON_CMI,
										RES_C_VR_M_CON_GI,
										RES_C_VR_M_CON_CP,
										RES_C_VR_M_CON_CD,
										RES_C_VR_M_CON_CD_HC,
										RES_C_VR_M_CON_CD_HC_HC,
										RES_C_VR_M_CON_CD_HC_GR,
										RES_C_VR_M_CON_CD_HI,
										RES_C_VR_M_CON_CD_HI_HI,
										RES_C_VR_M_CON_CD_HI_GR,
										RES_C_VR_M_CON_CD_OH,
										RES_C_VR_M_CON_CD_OH_OH,
										RES_C_VR_M_CON_CD_OH_GR,
										RES_C_VR_M_CON_CD_ID,
										RES_C_VR_M_CON_CT,
										RES_C_VR_M_CON_CT_HG,
										RES_C_VR_M_CON_CT_HG_HG,
										RES_C_VR_M_CON_CT_HG_GR,
										RES_C_VR_M_CON_CT_HV,
										RES_C_VR_M_CON_CT_HV_HV,
										RES_C_VR_M_CON_CT_HV_GR,
										RES_C_VR_M_CON_CT_CP,
										RES_C_VR_M_CON_CT_CP_SV,
										RES_C_VR_M_CON_CT_CP_GP,
										RES_C_VR_M_CON_CT_CP_GS,
										RES_C_VR_M_CON_CT_CP_AU,
										RES_C_VR_M_CON_CT_CP_CV,
										RES_C_VR_M_CON_CT_GL,
										RES_C_VR_M_CON_CT_GL_HC,
										RES_C_VR_M_CON_CT_GL_NR,
										RES_C_VR_M_CON_CT_GL_IP,
										RES_C_VR_M_CON_CT_GL_IC,
										RES_C_VR_M_CON_CA,
										RES_C_VR_M_CON_CA_VT,
										RES_C_VR_M_CON_CA_VT_PV,
										RES_C_VR_M_CON_CA_VT_OP,
										RES_C_VR_M_CON_CA_CF,
										RES_C_VR_M_CON_CA_CF_PA,
										RES_C_VR_M_CON_CA_CF_NH,
										RES_C_VR_M_CON_CA_GF,
										RES_C_VR_M_CON_CA_GF_IC,
										RES_C_VR_M_CON_CA_GF_OC,
										RES_C_VR_M_CON_CA_GF_CM,
										RES_C_VR_M_CON_CA_GF_IT,
										RES_C_VR_M_CON_CA_OC,
										RES_C_VR_M_CON_CA_OC_OC1,
										RES_C_VR_M_CON_CA_OC_OC2,
										RES_C_VR_M_CON_CA_OC_OC3,
										RES_C_VR_M_CON_CA_RI,
										RES_C_VR_M_CON_CI,
										RES_C_VR_M_CON_CI_VB,
										RES_C_VR_M_CON_CI_OV,
										RES_C_VR_M_CON_CI_OV_IS,
										RES_C_VR_M_CON_CI_OV_IM,
										RES_C_VR_M_CON_CI_OV_OC,
										RES_C_VR_M_CON_CI_RF,
										RES_C_VR_M_CON_CI_OI,
										RES_C_VR_M_CON_CI_OI_OI1,
										RES_C_VR_M_CON_CI_OI_OI2,
										RES_C_VR_M_CON_CI_OI_OI3,
										RES_C_VR_M_CON_IT,
										RES_C_VR_M_CON_UP,
										RES_C_VR_M_CON_UP_CC,
										RES_C_VR_M_CON_UP_IR,
										RES_C_VR_M_CON_UP2,
										RES_C_VR_M_CON_CV,
										RES_C_VR_M_CON_VT,
										RES_C_VR_M_VEN_UI,
										RES_C_VR_M_VEN_UIP,
										RES_C_VR_M_VEN_UII,
										RES_C_VR_M_VEN_CM,
										RES_C_VR_M_VEN_CMP,
										RES_C_VR_M_VEN_CMI,
										RES_C_VR_M_VEN_GI,
										RES_C_VR_M_VEN_CP,
										RES_C_VR_M_VEN_CD,
										RES_C_VR_M_VEN_CD_HC,
										RES_C_VR_M_VEN_CD_HC_HC,
										RES_C_VR_M_VEN_CD_HC_GR,
										RES_C_VR_M_VEN_CD_HI,
										RES_C_VR_M_VEN_CD_HI_HI,
										RES_C_VR_M_VEN_CD_HI_GR,
										RES_C_VR_M_VEN_CD_OH,
										RES_C_VR_M_VEN_CD_OH_OH,
										RES_C_VR_M_VEN_CD_OH_GR,
										RES_C_VR_M_VEN_CD_ID,
										RES_C_VR_M_VEN_CT,
										RES_C_VR_M_VEN_CT_HG,
										RES_C_VR_M_VEN_CT_HG_HG,
										RES_C_VR_M_VEN_CT_HG_GR,
										RES_C_VR_M_VEN_CT_HV,
										RES_C_VR_M_VEN_CT_HV_HV,
										RES_C_VR_M_VEN_CT_HV_GR,
										RES_C_VR_M_VEN_CT_CP,
										RES_C_VR_M_VEN_CT_CP_SV,
										RES_C_VR_M_VEN_CT_CP_GP,
										RES_C_VR_M_VEN_CT_CP_GS,
										RES_C_VR_M_VEN_CT_CP_AU,
										RES_C_VR_M_VEN_CT_CP_CV,
										RES_C_VR_M_VEN_CT_GL,
										RES_C_VR_M_VEN_CT_GL_HC,
										RES_C_VR_M_VEN_CT_GL_NR,
										RES_C_VR_M_VEN_CT_GL_IP,
										RES_C_VR_M_VEN_CT_GL_IC,
										RES_C_VR_M_VEN_CA,
										RES_C_VR_M_VEN_CA_VT,
										RES_C_VR_M_VEN_CA_VT_PV,
										RES_C_VR_M_VEN_CA_VT_OP,
										RES_C_VR_M_VEN_CA_CF,
										RES_C_VR_M_VEN_CA_CF_PA,
										RES_C_VR_M_VEN_CA_CF_NH,
										RES_C_VR_M_VEN_CA_GF,
										RES_C_VR_M_VEN_CA_GF_IC,
										RES_C_VR_M_VEN_CA_GF_OC,
										RES_C_VR_M_VEN_CA_GF_CM,
										RES_C_VR_M_VEN_CA_GF_IT,
										RES_C_VR_M_VEN_CA_OC,
										RES_C_VR_M_VEN_CA_OC_OC1,
										RES_C_VR_M_VEN_CA_OC_OC2,
										RES_C_VR_M_VEN_CA_OC_OC3,
										RES_C_VR_M_VEN_CA_RI,
										RES_C_VR_M_VEN_CI,
										RES_C_VR_M_VEN_CI_VB,
										RES_C_VR_M_VEN_CI_OV,
										RES_C_VR_M_VEN_CI_OV_IS,
										RES_C_VR_M_VEN_CI_OV_IM,
										RES_C_VR_M_VEN_CI_OV_OC,
										RES_C_VR_M_VEN_CI_RF,
										RES_C_VR_M_VEN_CI_OI,
										RES_C_VR_M_VEN_CI_OI_OI1,
										RES_C_VR_M_VEN_CI_OI_OI2,
										RES_C_VR_M_VEN_CI_OI_OI3,
										RES_C_VR_M_VEN_IT,
										RES_C_VR_M_VEN_UP,
										RES_C_VR_M_VEN_UP_CC,
										RES_C_VR_M_VEN_UP_IR,
										RES_C_VR_M_VEN_UP2,
										RES_C_VR_M_VEN_CV,
										RES_C_VR_M_VEN_VT,
										RES_C_EJE_UI,
										RES_C_EJE_UIP,
										RES_C_EJE_UII,
										RES_C_EJE_CM,
										RES_C_EJE_CMP,
										RES_C_EJE_CMI,
										RES_C_EJE_GI,
										RES_C_EJE_CP,
										RES_C_EJE_CD,
										RES_C_EJE_CD_HC,
										RES_C_EJE_CD_HC_HC,
										RES_C_EJE_CD_HC_GR,
										RES_C_EJE_CD_HI,
										RES_C_EJE_CD_HI_HI,
										RES_C_EJE_CD_HI_GR,
										RES_C_EJE_CD_OH,
										RES_C_EJE_CD_OH_OH,
										RES_C_EJE_CD_OH_GR,
										RES_C_EJE_CD_ID,
										RES_C_EJE_CT,
										RES_C_EJE_CT_HG,
										RES_C_EJE_CT_HG_HG,
										RES_C_EJE_CT_HG_GR,
										RES_C_EJE_CT_HV,
										RES_C_EJE_CT_HV_HV,
										RES_C_EJE_CT_HV_GR,
										RES_C_EJE_CT_CP,
										RES_C_EJE_CT_CP_SV,
										RES_C_EJE_CT_CP_GP,
										RES_C_EJE_CT_CP_GS,
										RES_C_EJE_CT_CP_AU,
										RES_C_EJE_CT_CP_CV,
										RES_C_EJE_CT_GL,
										RES_C_EJE_CT_GL_HC,
										RES_C_EJE_CT_GL_NR,
										RES_C_EJE_CT_GL_IP,
										RES_C_EJE_CT_GL_IC,
										RES_C_EJE_CA,
										RES_C_EJE_CA_VT,
										RES_C_EJE_CA_VT_PV,
										RES_C_EJE_CA_VT_OP,
										RES_C_EJE_CA_CF,
										RES_C_EJE_CA_CF_PA,
										RES_C_EJE_CA_CF_NH,
										RES_C_EJE_CA_GF,
										RES_C_EJE_CA_GF_IC,
										RES_C_EJE_CA_GF_OC,
										RES_C_EJE_CA_GF_CM,
										RES_C_EJE_CA_GF_IT,
										RES_C_EJE_CA_OC,
										RES_C_EJE_CA_OC_OC1,
										RES_C_EJE_CA_OC_OC2,
										RES_C_EJE_CA_OC_OC3,
										RES_C_EJE_CA_RI,
										RES_C_EJE_CI,
										RES_C_EJE_CI_VB,
										RES_C_EJE_CI_OV,
										RES_C_EJE_CI_OV_IS,
										RES_C_EJE_CI_OV_IM,
										RES_C_EJE_CI_OV_OC,
										RES_C_EJE_CI_RF,
										RES_C_EJE_CI_OI,
										RES_C_EJE_CI_OI_OI1,
										RES_C_EJE_CI_OI_OI2,
										RES_C_EJE_CI_OI_OI3,
										RES_C_EJE_IT,
										RES_C_EJE_UP,
										RES_C_EJE_UP_CC,
										RES_C_EJE_UP_IR,
										RES_C_EJE_UP2,
										RES_C_EJE_CV,
										RES_C_EJE_VT,
										RES_C_EJE_CVG,
										RES_C_EJE_UC,
										RES_C_EJE_UC_CO,
										RES_C_EJE_UC_TI,
										RES_C_EJE_UC_PR,
										RES_C_PORC_TOT_UI,
										RES_C_PORC_TOT_UIP,
										RES_C_PORC_TOT_UII,
										RES_C_PORC_TOT_CM,
										RES_C_PORC_TOT_CMP,
										RES_C_PORC_TOT_CMI,
										RES_C_PORC_TOT_GI,
										RES_C_PORC_TOT_CP,
										RES_C_PORC_TOT_CD,
										RES_C_PORC_TOT_CD_HC,
										RES_C_PORC_TOT_CD_HC_HC,
										RES_C_PORC_TOT_CD_HC_GR,
										RES_C_PORC_TOT_CD_HI,
										RES_C_PORC_TOT_CD_HI_HI,
										RES_C_PORC_TOT_CD_HI_GR,
										RES_C_PORC_TOT_CD_OH,
										RES_C_PORC_TOT_CD_OH_OH,
										RES_C_PORC_TOT_CD_OH_GR,
										RES_C_PORC_TOT_CD_ID,
										RES_C_PORC_TOT_CT,
										RES_C_PORC_TOT_CT_HG,
										RES_C_PORC_TOT_CT_HG_HG,
										RES_C_PORC_TOT_CT_HG_GR,
										RES_C_PORC_TOT_CT_HV,
										RES_C_PORC_TOT_CT_HV_HV,
										RES_C_PORC_TOT_CT_HV_GR,
										RES_C_PORC_TOT_CT_CP,
										RES_C_PORC_TOT_CT_CP_SV,
										RES_C_PORC_TOT_CT_CP_GP,
										RES_C_PORC_TOT_CT_CP_GS,
										RES_C_PORC_TOT_CT_CP_AU,
										RES_C_PORC_TOT_CT_CP_CV,
										RES_C_PORC_TOT_CT_GL,
										RES_C_PORC_TOT_CT_GL_HC,
										RES_C_PORC_TOT_CT_GL_NR,
										RES_C_PORC_TOT_CT_GL_IP,
										RES_C_PORC_TOT_CT_GL_IC,
										RES_C_PORC_TOT_CA,
										RES_C_PORC_TOT_CA_VT,
										RES_C_PORC_TOT_CA_VT_PV,
										RES_C_PORC_TOT_CA_VT_OP,
										RES_C_PORC_TOT_CA_CF,
										RES_C_PORC_TOT_CA_CF_PA,
										RES_C_PORC_TOT_CA_CF_NH,
										RES_C_PORC_TOT_CA_GF,
										RES_C_PORC_TOT_CA_GF_IC,
										RES_C_PORC_TOT_CA_GF_OC,
										RES_C_PORC_TOT_CA_GF_CM,
										RES_C_PORC_TOT_CA_GF_IT,
										RES_C_PORC_TOT_CA_OC,
										RES_C_PORC_TOT_CA_OC_OC1,
										RES_C_PORC_TOT_CA_OC_OC2,
										RES_C_PORC_TOT_CA_OC_OC3,
										RES_C_PORC_TOT_CA_RI,
										RES_C_PORC_TOT_CI,
										RES_C_PORC_TOT_CI_VB,
										RES_C_PORC_TOT_CI_OV,
										RES_C_PORC_TOT_CI_OV_IS,
										RES_C_PORC_TOT_CI_OV_IM,
										RES_C_PORC_TOT_CI_OV_OC,
										RES_C_PORC_TOT_CI_RF,
										RES_C_PORC_TOT_CI_OI,
										RES_C_PORC_TOT_CI_OI_OI1,
										RES_C_PORC_TOT_CI_OI_OI2,
										RES_C_PORC_TOT_CI_OI_OI3,
										RES_C_PORC_TOT_IT,
										RES_C_PORC_TOT_UP,
										RES_C_PORC_TOT_UP_CC,
										RES_C_PORC_TOT_UP_IR,
										RES_C_PORC_TOT_UP2,
										RES_C_PORC_TOT_CV,
										RES_C_PORC_TOT_VT,
										RES_C_PORC_TOT_CVG,
										RES_C_PORC_TOT_UC,
										RES_C_PORC_TOT_UC_CO,
										RES_C_PORC_TOT_UC_TI,
										RES_C_PORC_TOT_UC_PR)
										
										VALUES (
										'$res_id',
										$res_det_etapa,
										'$res_modelo',
										'$res_fecha',
										$res_total_unidades,
										$res_area_promedio_unidad,
										$res_total_area_construida,
										$res_total_area_vendible,
										$res_area_util_lote_asignada_subproyecto,
										$res_densidad_indice_ocupacion,
										$res_valor_metro_cuadrado_lote_urbanizado,
										$res_numero_parqueos,
										$res_relacion_parqueos_numero_parqueos_por_unidad,
										$res_numero_depositos,
										'$res_fecha_inicio_y_terminacion_ventas',
										'$res_fecha_inicio_y_terminacion_construccion',
										$res_ritmo_ventas_mensual_promedio,
										'$res_punto_equilibrio_unidades',
										$res_tasa_promedio_incremento_precios,
										$res_porcentaje_ventas_nuevogar,
										'$res_fecha_presupuesto',
										$res_tasa_promedio_incremento_presupuesto,
										$res_c_tot_ui,
										$res_c_tot_uip,
										$res_c_tot_uii,
										$res_c_tot_cm,
										$res_c_tot_cmp,
										$res_c_tot_cmi,
										$res_c_tot_gi,
										$res_c_tot_cp,
										$res_c_tot_cd,
										$res_c_tot_cd_hc,
										$res_c_tot_cd_hc_hc,
										$res_c_tot_cd_hc_gr,
										$res_c_tot_cd_hi,
										$res_c_tot_cd_hi_hi,
										$res_c_tot_cd_hi_gr,
										$res_c_tot_cd_oh,
										$res_c_tot_cd_oh_oh,
										$res_c_tot_cd_oh_gr,
										$res_c_tot_cd_id,
										$res_c_tot_ct,
										$res_c_tot_ct_hg,
										$res_c_tot_ct_hg_hg,
										$res_c_tot_ct_hg_gr,
										$res_c_tot_ct_hv,
										$res_c_tot_ct_hv_hv,
										$res_c_tot_ct_hv_gr,
										$res_c_tot_ct_cp,
										$res_c_tot_ct_cp_sv,
										$res_c_tot_ct_cp_gp,
										$res_c_tot_ct_cp_gs,
										$res_c_tot_ct_cp_au,
										$res_c_tot_ct_cp_cv,
										$res_c_tot_ct_gl,
										$res_c_tot_ct_gl_hc,
										$res_c_tot_ct_gl_nr,
										$res_c_tot_ct_gl_ip,
										$res_c_tot_ct_gl_ic,
										$res_c_tot_ca,
										$res_c_tot_ca_vt,
										$res_c_tot_ca_vt_pv,
										$res_c_tot_ca_vt_op,
										$res_c_tot_ca_cf,
										$res_c_tot_ca_cf_pa,
										$res_c_tot_ca_cf_nh,
										$res_c_tot_ca_gf,
										$res_c_tot_ca_gf_ic,
										$res_c_tot_ca_gf_oc,
										$res_c_tot_ca_gf_cm,
										$res_c_tot_ca_gf_it,
										$res_c_tot_ca_oc,
										$res_c_tot_ca_oc_oc1,
										$res_c_tot_ca_oc_oc2,
										$res_c_tot_ca_oc_oc3,
										$res_c_tot_ca_ri,
										$res_c_tot_ci,
										$res_c_tot_ci_vb,
										$res_c_tot_ci_ov,
										$res_c_tot_ci_ov_is,
										$res_c_tot_ci_ov_im,
										$res_c_tot_ci_ov_oc,
										$res_c_tot_ci_rf,
										$res_c_tot_ci_oi,
										$res_c_tot_ci_oi_oi1,
										$res_c_tot_ci_oi_oi2,
										$res_c_tot_ci_oi_oi3,
										$res_c_tot_it,
										$res_c_tot_up,
										$res_c_tot_up_cc,
										$res_c_tot_up_ir,
										$res_c_tot_up2,
										$res_c_tot_cv,
										$res_c_tot_vt,
										$res_c_tot_cvg,
										$res_c_tot_tir,
										$res_c_tot_vpn,
										$res_c_tot_uc,
										$res_c_tot_uc_co,
										$res_c_tot_uc_ti,
										$res_c_tot_uc_pr,
										$res_c_tot_tir_c,
										$res_c_tot_vpn_c,
										$res_c_porc_vent_ui,
										$res_c_porc_vent_uip,
										$res_c_porc_vent_uii,
										$res_c_porc_vent_cm,
										$res_c_porc_vent_cmp,
										$res_c_porc_vent_cmi,
										$res_c_porc_vent_gi,
										$res_c_porc_vent_cp,
										$res_c_porc_vent_cd,
										$res_c_porc_vent_cd_hc,
										$res_c_porc_vent_cd_hc_hc,
										$res_c_porc_vent_cd_hc_gr,
										$res_c_porc_vent_cd_hi,
										$res_c_porc_vent_cd_hi_hi,
										$res_c_porc_vent_cd_hi_gr,
										$res_c_porc_vent_cd_oh,
										$res_c_porc_vent_cd_oh_oh,
										$res_c_porc_vent_cd_oh_gr,
										$res_c_porc_vent_cd_id,
										$res_c_porc_vent_ct,
										$res_c_porc_vent_ct_hg,
										$res_c_porc_vent_ct_hg_hg,
										$res_c_porc_vent_ct_hg_gr,
										$res_c_porc_vent_ct_hv,
										$res_c_porc_vent_ct_hv_hv,
										$res_c_porc_vent_ct_hv_gr,
										$res_c_porc_vent_ct_cp,
										$res_c_porc_vent_ct_cp_sv,
										$res_c_porc_vent_ct_cp_gp,
										$res_c_porc_vent_ct_cp_gs,
										$res_c_porc_vent_ct_cp_au,
										$res_c_porc_vent_ct_cp_cv,
										$res_c_porc_vent_ct_gl,
										$res_c_porc_vent_ct_gl_hc,
										$res_c_porc_vent_ct_gl_nr,
										$res_c_porc_vent_ct_gl_ip,
										$res_c_porc_vent_ct_gl_ic,
										$res_c_porc_vent_ca,
										$res_c_porc_vent_ca_vt,
										$res_c_porc_vent_ca_vt_pv,
										$res_c_porc_vent_ca_vt_op,
										$res_c_porc_vent_ca_cf,
										$res_c_porc_vent_ca_cf_pa,
										$res_c_porc_vent_ca_cf_nh,
										$res_c_porc_vent_ca_gf,
										$res_c_porc_vent_ca_gf_ic,
										$res_c_porc_vent_ca_gf_oc,
										$res_c_porc_vent_ca_gf_cm,
										$res_c_porc_vent_ca_gf_it,
										$res_c_porc_vent_ca_oc,
										$res_c_porc_vent_ca_oc_oc1,
										$res_c_porc_vent_ca_oc_oc2,
										$res_c_porc_vent_ca_oc_oc3,
										$res_c_porc_vent_ca_ri,
										$res_c_porc_vent_ci,
										$res_c_porc_vent_ci_vb,
										$res_c_porc_vent_ci_ov,
										$res_c_porc_vent_ci_ov_is,
										$res_c_porc_vent_ci_ov_im,
										$res_c_porc_vent_ci_ov_oc,
										$res_c_porc_vent_ci_rf,
										$res_c_porc_vent_ci_oi,
										$res_c_porc_vent_ci_oi_oi1,
										$res_c_porc_vent_ci_oi_oi2,
										$res_c_porc_vent_ci_oi_oi3,
										$res_c_porc_vent_it,
										$res_c_porc_vent_up,
										$res_c_porc_vent_up_cc,
										$res_c_porc_vent_up_ir,
										$res_c_porc_vent_up2,
										$res_c_porc_vent_cv,
										$res_c_porc_vent_vt,
										$res_c_porc_vent_cvg,
										$res_c_porc_vent_tir,
										$res_c_porc_vent_vpn,
										$res_c_porc_vent_uc,
										$res_c_porc_vent_uc_co,
										$res_c_porc_vent_uc_ti,
										$res_c_porc_vent_uc_pr,
										$res_c_porc_vent_tir_c,
										$res_c_porc_vent_vpn_c,
										$res_c_vr_m_con_ui,
										$res_c_vr_m_con_uip,
										$res_c_vr_m_con_uii,
										$res_c_vr_m_con_cm,
										$res_c_vr_m_con_cmp,
										$res_c_vr_m_con_cmi,
										$res_c_vr_m_con_gi,
										$res_c_vr_m_con_cp,
										$res_c_vr_m_con_cd,
										$res_c_vr_m_con_cd_hc,
										$res_c_vr_m_con_cd_hc_hc,
										$res_c_vr_m_con_cd_hc_gr,
										$res_c_vr_m_con_cd_hi,
										$res_c_vr_m_con_cd_hi_hi,
										$res_c_vr_m_con_cd_hi_gr,
										$res_c_vr_m_con_cd_oh,
										$res_c_vr_m_con_cd_oh_oh,
										$res_c_vr_m_con_cd_oh_gr,
										$res_c_vr_m_con_cd_id,
										$res_c_vr_m_con_ct,
										$res_c_vr_m_con_ct_hg,
										$res_c_vr_m_con_ct_hg_hg,
										$res_c_vr_m_con_ct_hg_gr,
										$res_c_vr_m_con_ct_hv,
										$res_c_vr_m_con_ct_hv_hv,
										$res_c_vr_m_con_ct_hv_gr,
										$res_c_vr_m_con_ct_cp,
										$res_c_vr_m_con_ct_cp_sv,
										$res_c_vr_m_con_ct_cp_gp,
										$res_c_vr_m_con_ct_cp_gs,
										$res_c_vr_m_con_ct_cp_au,
										$res_c_vr_m_con_ct_cp_cv,
										$res_c_vr_m_con_ct_gl,
										$res_c_vr_m_con_ct_gl_hc,
										$res_c_vr_m_con_ct_gl_nr,
										$res_c_vr_m_con_ct_gl_ip,
										$res_c_vr_m_con_ct_gl_ic,
										$res_c_vr_m_con_ca,
										$res_c_vr_m_con_ca_vt,
										$res_c_vr_m_con_ca_vt_pv,
										$res_c_vr_m_con_ca_vt_op,
										$res_c_vr_m_con_ca_cf,
										$res_c_vr_m_con_ca_cf_pa,
										$res_c_vr_m_con_ca_cf_nh,
										$res_c_vr_m_con_ca_gf,
										$res_c_vr_m_con_ca_gf_ic,
										$res_c_vr_m_con_ca_gf_oc,
										$res_c_vr_m_con_ca_gf_cm,
										$res_c_vr_m_con_ca_gf_it,
										$res_c_vr_m_con_ca_oc,
										$res_c_vr_m_con_ca_oc_oc1,
										$res_c_vr_m_con_ca_oc_oc2,
										$res_c_vr_m_con_ca_oc_oc3,
										$res_c_vr_m_con_ca_ri,
										$res_c_vr_m_con_ci,
										$res_c_vr_m_con_ci_vb,
										$res_c_vr_m_con_ci_ov,
										$res_c_vr_m_con_ci_ov_is,
										$res_c_vr_m_con_ci_ov_im,
										$res_c_vr_m_con_ci_ov_oc,
										$res_c_vr_m_con_ci_rf,
										$res_c_vr_m_con_ci_oi,
										$res_c_vr_m_con_ci_oi_oi1,
										$res_c_vr_m_con_ci_oi_oi2,
										$res_c_vr_m_con_ci_oi_oi3,
										$res_c_vr_m_con_it,
										$res_c_vr_m_con_up,
										$res_c_vr_m_con_up_cc,
										$res_c_vr_m_con_up_ir,
										$res_c_vr_m_con_up2,
										$res_c_vr_m_con_cv,
										$res_c_vr_m_con_vt,
										$res_c_vr_m_ven_ui,
										$res_c_vr_m_ven_uip,
										$res_c_vr_m_ven_uii,
										$res_c_vr_m_ven_cm,
										$res_c_vr_m_ven_cmp,
										$res_c_vr_m_ven_cmi,
										$res_c_vr_m_ven_gi,
										$res_c_vr_m_ven_cp,
										$res_c_vr_m_ven_cd,
										$res_c_vr_m_ven_cd_hc,
										$res_c_vr_m_ven_cd_hc_hc,
										$res_c_vr_m_ven_cd_hc_gr,
										$res_c_vr_m_ven_cd_hi,
										$res_c_vr_m_ven_cd_hi_hi,
										$res_c_vr_m_ven_cd_hi_gr,
										$res_c_vr_m_ven_cd_oh,
										$res_c_vr_m_ven_cd_oh_oh,
										$res_c_vr_m_ven_cd_oh_gr,
										$res_c_vr_m_ven_cd_id,
										$res_c_vr_m_ven_ct,
										$res_c_vr_m_ven_ct_hg,
										$res_c_vr_m_ven_ct_hg_hg,
										$res_c_vr_m_ven_ct_hg_gr,
										$res_c_vr_m_ven_ct_hv,
										$res_c_vr_m_ven_ct_hv_hv,
										$res_c_vr_m_ven_ct_hv_gr,
										$res_c_vr_m_ven_ct_cp,
										$res_c_vr_m_ven_ct_cp_sv,
										$res_c_vr_m_ven_ct_cp_gp,
										$res_c_vr_m_ven_ct_cp_gs,
										$res_c_vr_m_ven_ct_cp_au,
										$res_c_vr_m_ven_ct_cp_cv,
										$res_c_vr_m_ven_ct_gl,
										$res_c_vr_m_ven_ct_gl_hc,
										$res_c_vr_m_ven_ct_gl_nr,
										$res_c_vr_m_ven_ct_gl_ip,
										$res_c_vr_m_ven_ct_gl_ic,
										$res_c_vr_m_ven_ca,
										$res_c_vr_m_ven_ca_vt,
										$res_c_vr_m_ven_ca_vt_pv,
										$res_c_vr_m_ven_ca_vt_op,
										$res_c_vr_m_ven_ca_cf,
										$res_c_vr_m_ven_ca_cf_pa,
										$res_c_vr_m_ven_ca_cf_nh,
										$res_c_vr_m_ven_ca_gf,
										$res_c_vr_m_ven_ca_gf_ic,
										$res_c_vr_m_ven_ca_gf_oc,
										$res_c_vr_m_ven_ca_gf_cm,
										$res_c_vr_m_ven_ca_gf_it,
										$res_c_vr_m_ven_ca_oc,
										$res_c_vr_m_ven_ca_oc_oc1,
										$res_c_vr_m_ven_ca_oc_oc2,
										$res_c_vr_m_ven_ca_oc_oc3,
										$res_c_vr_m_ven_ca_ri,
										$res_c_vr_m_ven_ci,
										$res_c_vr_m_ven_ci_vb,
										$res_c_vr_m_ven_ci_ov,
										$res_c_vr_m_ven_ci_ov_is,
										$res_c_vr_m_ven_ci_ov_im,
										$res_c_vr_m_ven_ci_ov_oc,
										$res_c_vr_m_ven_ci_rf,
										$res_c_vr_m_ven_ci_oi,
										$res_c_vr_m_ven_ci_oi_oi1,
										$res_c_vr_m_ven_ci_oi_oi2,
										$res_c_vr_m_ven_ci_oi_oi3,
										$res_c_vr_m_ven_it,
										$res_c_vr_m_ven_up,
										$res_c_vr_m_ven_up_cc,
										$res_c_vr_m_ven_up_ir,
										$res_c_vr_m_ven_up2,
										$res_c_vr_m_ven_cv,
										$res_c_vr_m_ven_vt,
										$res_c_eje_ui,
										$res_c_eje_uip,
										$res_c_eje_uii,
										$res_c_eje_cm,
										$res_c_eje_cmp,
										$res_c_eje_cmi,
										$res_c_eje_gi,
										$res_c_eje_cp,
										$res_c_eje_cd,
										$res_c_eje_cd_hc,
										$res_c_eje_cd_hc_hc,
										$res_c_eje_cd_hc_gr,
										$res_c_eje_cd_hi,
										$res_c_eje_cd_hi_hi,
										$res_c_eje_cd_hi_gr,
										$res_c_eje_cd_oh,
										$res_c_eje_cd_oh_oh,
										$res_c_eje_cd_oh_gr,
										$res_c_eje_cd_id,
										$res_c_eje_ct,
										$res_c_eje_ct_hg,
										$res_c_eje_ct_hg_hg,
										$res_c_eje_ct_hg_gr,
										$res_c_eje_ct_hv,
										$res_c_eje_ct_hv_hv,
										$res_c_eje_ct_hv_gr,
										$res_c_eje_ct_cp,
										$res_c_eje_ct_cp_sv,
										$res_c_eje_ct_cp_gp,
										$res_c_eje_ct_cp_gs,
										$res_c_eje_ct_cp_au,
										$res_c_eje_ct_cp_cv,
										$res_c_eje_ct_gl,
										$res_c_eje_ct_gl_hc,
										$res_c_eje_ct_gl_nr,
										$res_c_eje_ct_gl_ip,
										$res_c_eje_ct_gl_ic,
										$res_c_eje_ca,
										$res_c_eje_ca_vt,
										$res_c_eje_ca_vt_pv,
										$res_c_eje_ca_vt_op,
										$res_c_eje_ca_cf,
										$res_c_eje_ca_cf_pa,
										$res_c_eje_ca_cf_nh,
										$res_c_eje_ca_gf,
										$res_c_eje_ca_gf_ic,
										$res_c_eje_ca_gf_oc,
										$res_c_eje_ca_gf_cm,
										$res_c_eje_ca_gf_it,
										$res_c_eje_ca_oc,
										$res_c_eje_ca_oc_oc1,
										$res_c_eje_ca_oc_oc2,
										$res_c_eje_ca_oc_oc3,
										$res_c_eje_ca_ri,
										$res_c_eje_ci,
										$res_c_eje_ci_vb,
										$res_c_eje_ci_ov,
										$res_c_eje_ci_ov_is,
										$res_c_eje_ci_ov_im,
										$res_c_eje_ci_ov_oc,
										$res_c_eje_ci_rf,
										$res_c_eje_ci_oi,
										$res_c_eje_ci_oi_oi1,
										$res_c_eje_ci_oi_oi2,
										$res_c_eje_ci_oi_oi3,
										$res_c_eje_it,
										$res_c_eje_up,
										$res_c_eje_up_cc,
										$res_c_eje_up_ir,
										$res_c_eje_up2,
										$res_c_eje_cv,
										$res_c_eje_vt,
										$res_c_eje_cvg,
										$res_c_eje_uc,
										$res_c_eje_uc_co,
										$res_c_eje_uc_ti,
										$res_c_eje_uc_pr,
										$res_c_porc_tot_ui,
										$res_c_porc_tot_uip,
										$res_c_porc_tot_uii,
										$res_c_porc_tot_cm,
										$res_c_porc_tot_cmp,
										$res_c_porc_tot_cmi,
										$res_c_porc_tot_gi,
										$res_c_porc_tot_cp,
										$res_c_porc_tot_cd,
										$res_c_porc_tot_cd_hc,
										$res_c_porc_tot_cd_hc_hc,
										$res_c_porc_tot_cd_hc_gr,
										$res_c_porc_tot_cd_hi,
										$res_c_porc_tot_cd_hi_hi,
										$res_c_porc_tot_cd_hi_gr,
										$res_c_porc_tot_cd_oh,
										$res_c_porc_tot_cd_oh_oh,
										$res_c_porc_tot_cd_oh_gr,
										$res_c_porc_tot_cd_id,
										$res_c_porc_tot_ct,
										$res_c_porc_tot_ct_hg,
										$res_c_porc_tot_ct_hg_hg,
										$res_c_porc_tot_ct_hg_gr,
										$res_c_porc_tot_ct_hv,
										$res_c_porc_tot_ct_hv_hv,
										$res_c_porc_tot_ct_hv_gr,
										$res_c_porc_tot_ct_cp,
										$res_c_porc_tot_ct_cp_sv,
										$res_c_porc_tot_ct_cp_gp,
										$res_c_porc_tot_ct_cp_gs,
										$res_c_porc_tot_ct_cp_au,
										$res_c_porc_tot_ct_cp_cv,
										$res_c_porc_tot_ct_gl,
										$res_c_porc_tot_ct_gl_hc,
										$res_c_porc_tot_ct_gl_nr,
										$res_c_porc_tot_ct_gl_ip,
										$res_c_porc_tot_ct_gl_ic,
										$res_c_porc_tot_ca,
										$res_c_porc_tot_ca_vt,
										$res_c_porc_tot_ca_vt_pv,
										$res_c_porc_tot_ca_vt_op,
										$res_c_porc_tot_ca_cf,
										$res_c_porc_tot_ca_cf_pa,
										$res_c_porc_tot_ca_cf_nh,
										$res_c_porc_tot_ca_gf,
										$res_c_porc_tot_ca_gf_ic,
										$res_c_porc_tot_ca_gf_oc,
										$res_c_porc_tot_ca_gf_cm,
										$res_c_porc_tot_ca_gf_it,
										$res_c_porc_tot_ca_oc,
										$res_c_porc_tot_ca_oc_oc1,
										$res_c_porc_tot_ca_oc_oc2,
										$res_c_porc_tot_ca_oc_oc3,
										$res_c_porc_tot_ca_ri,
										$res_c_porc_tot_ci,
										$res_c_porc_tot_ci_vb,
										$res_c_porc_tot_ci_ov,
										$res_c_porc_tot_ci_ov_is,
										$res_c_porc_tot_ci_ov_im,
										$res_c_porc_tot_ci_ov_oc,
										$res_c_porc_tot_ci_rf,
										$res_c_porc_tot_ci_oi,
										$res_c_porc_tot_ci_oi_oi1,
										$res_c_porc_tot_ci_oi_oi2,
										$res_c_porc_tot_ci_oi_oi3,
										$res_c_porc_tot_it,
										$res_c_porc_tot_up,
										$res_c_porc_tot_up_cc,
										$res_c_porc_tot_up_ir,
										$res_c_porc_tot_up2,
										$res_c_porc_tot_cv,
										$res_c_porc_tot_vt,
										$res_c_porc_tot_cvg,
										$res_c_porc_tot_uc,
										$res_c_porc_tot_uc_co,
										$res_c_porc_tot_uc_ti,
										$res_c_porc_tot_uc_pr
										)";
										
									if(!$resultado_res= $mysqli -> query($envio_Tb_Resumen)){
									echo('There was an error running the query [' . $mysqli->error . '].</br>');
									}
									
						}
					}
			
				function OtrosFlujos($objPHPExcel,$ofl_i,$ofl_var,$proyecto,$etapa,$modelo,$mysqli){
					
					require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
		
					$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
							

							$ofl_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 3)->getValue();

								while ($ofl_check!=null) {
								
									$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
								
									//Toma la informacion cenda por celda	
										$ofl_id=$proyecto;		
										$ofl_det_etapa=$etapa;
										$ofl_modelo=$modelo;
										
										$ofl_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 3)->getValue();
										
										$ofl_fecha=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 3)->getFormattedValue();
										$ofl_fecha2=cambiarFecha($ofl_fecha);
										$ofl_fecha=$ofl_fecha2;
										
										$ofl_costo_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 7)->getValue();
										$ofl_honorarios_colpatria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 8)->getValue();
										$ofl_gastos_operacion_colpatria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 9)->getValue();
										$ofl_go_promotora_operacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 10)->getValue();
										$ofl_go_promotora_overhead = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 11)->getValue();
										$ofl_go_constructora_operacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 12)->getValue();
										$ofl_go_constructora_overhead  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 13)->getValue();
										$ofl_go_transacciones_inmobiliarias_operacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 14)->getValue();
										$ofl_go_transacciones_inmobliarias_overhead = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 15)->getValue();
										$ofl_otros_pagos_efectuados_por_fiducia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 16)->getValue();
										$ofl_valor_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 17)->getValue();
										$ofl_egresos_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 18)->getValue();
										//====No esta en excel ===//
										//$ofl_intereses_credito_constructor
										//====FIN ===//
										$ofl_impuesto_transacciones_financieras_colpatria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 19)->getValue();
										$ofl_comision_fiduciaria_nuevogar_sin_fiduciaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 20)->getValue();
										$ofl_otros_costos_y_gastos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 21)->getValue();
										$ofl_aportes_efectivo_colpatria_fideicomiso = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 22)->getValue();
										$ofl_reintegros_iva = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 23)->getValue();
										$ofl_subtotal_egresos_colpatria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 24)->getValue();
										$ofl_traslados_fiducias_e_ingresos_totales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 25)->getValue();
										$ofl_ingresos_ventas_colpatria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 26)->getValue();
										$ofl_desembolsos_credito_constructor_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 27)->getValue();
										$ofl_traslados_liquidaciones_fideicomisos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 28)->getValue();
										$ofl_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 29)->getValue();
										$ofl_aportes_de_socios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 30)->getValue();
										$ofl_subtotal_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 31)->getValue();
										$ofl_flujo_caja_antes_de_reintegro_socios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 32)->getValue();
										$ofl_reintegro_aportes_utilidades_socios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 33)->getValue();
										$ofl_flujo_neto_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 34)->getValue();
										$ofl_flujo_acumulado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 35)->getValue();
										$ofl_costo_credito_tesoreria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 36)->getValue();
										$ofl_impuesto_renta  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 37)->getValue();
										$ofl_flujo_neto_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 38)->getValue();
										$ofl_flujo_acumulado_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 39)->getValue();
										$ofl_vpn = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 42)->getValue();
										$ofl_tir_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 42)->getValue();
										$ofl_tir_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 42)->getValue();
										$ofl_tir_mod_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 42)->getValue();
										$ofl_tir_mod_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 42)->getValue();
										$ofl_valor_total_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 44)->getValue();
										$ofl_pagos_efectuados_fiducia_admon = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 72)->getValue();
										$ofl_pe_intereses_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 73)->getValue();
										$ofl_pe_honorarios_visitas_obra_otros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 74)->getValue();
										$ofl_pe_abonos_extraordinarios_credito  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 75)->getValue();
										$ofl_pe_pagos_terreno_efectuados_fiducia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 76)->getValue(); 
										$ofl_pe_otros_pagos_efectuados_fiducia  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 77)->getValue();
										$ofl_traslados_fondos_fiducia_constructora = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 78)->getValue();
										$ofl_comision_fiduciaria_prreventas_admon  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 79)->getValue();
										$ofl_comision_fiduciaria_nuevogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 80)->getValue();
										$ofl_impuesto_transacciones_financieras  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 81)->getValue();
										$ofl_subtotal_egresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 82)->getValue();
										$ofl_desembolsos_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 83)->getValue();
										$ofl_ingresos_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 84)->getValue();
										$ofl_iv_abonos_separacion  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 85)->getValue();
										$ofl_iv_cartera_cuota_inicial  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 86)->getValue();
										$ofl_iv_saldo_cuota_inicial_abono_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 87)->getValue();
										$ofl_iv_subsidio_vis_y_ahorro_programado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 88)->getValue();
										$ofl_iv_excedentes_credito_compradores = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 89)->getValue();
										$ofl_iv_giros_directos_creditos_otras_entidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 90)->getValue();
										$ofl_iv_ingresos_por_recibir_ventas_realizadas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 91)->getValue();
										$ofl_otros_ingresos_por_ventas  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 92)->getValue();
										$ofl_oi_intereses_subrogacion  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 93)->getValue();
										$ofl_oi_intereses_mora = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 94)->getValue();
										$ofl_oi_ofertas_comerciales_y_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 95)->getValue();
										$ofl_aportes_efectivo_colpatria_fideicomiso  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 96)->getValue();
										//====No esta en excel ===//
										//$ofl_aportes_otros_socios_inversionistas
										//====FIN ===//
										$ofl_rendimientos_fideicomiso_capitalizacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 98)->getValue(); 
										$ofl_subtotal_ingresos_antes_rendimientos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 99)->getValue();
										$ofl_flujo_neto_sin_rendimientos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 100)->getValue();
										$ofl_rendimientos_fideicomiso = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 101)->getValue();
										$ofl_flujo_neto_fiduciaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 102)->getValue();
										$ofl_traslado_saldo_final_fiducia_liquidacion  = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 103)->getValue();
										$ofl_flujo_acumulado_fiduciaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 104)->getValue();
										
										
										
										//---------------Check Nulls---------------
													
									
										
										if($ofl_costo_construccion==null){
											$ofl_costo_construccion=0;
										}
										
										if($ofl_honorarios_colpatria==null){
											$ofl_honorarios_colpatria=0;
										}
										
										if($ofl_gastos_operacion_colpatria==null){
											$ofl_gastos_operacion_colpatria=0;
										}
										if($ofl_go_promotora_operacion==null){
											$ofl_go_promotora_operacion=0;
										}
										if($ofl_go_promotora_overhead==null){
											$ofl_go_promotora_overhead=0;
										}
										if($ofl_go_constructora_operacion==null){
											$ofl_go_constructora_operacion=0;
										}
										if($ofl_go_constructora_overhead==null){
											$ofl_go_constructora_overhead=0;
										}
										if($ofl_go_transacciones_inmobiliarias_operacion==null){
											$ofl_go_transacciones_inmobiliarias_operacion=0;
										}
										if($ofl_go_transacciones_inmobliarias_overhead==null){
											$ofl_go_transacciones_inmobliarias_overhead=0;
										}
										if($ofl_otros_pagos_efectuados_por_fiducia==null){
											$ofl_otros_pagos_efectuados_por_fiducia=0;
										}
										if($ofl_valor_terreno==null){
											$ofl_valor_terreno=0;
										}
										if($ofl_egresos_credito_constructor==null){
											$ofl_egresos_credito_constructor=0;
										}	
										if($ofl_impuesto_transacciones_financieras_colpatria==null){
											$ofl_impuesto_transacciones_financieras_colpatria=0;
										}
										if($ofl_comision_fiduciaria_nuevogar_sin_fiduciaria==null){
											$ofl_comision_fiduciaria_nuevogar_sin_fiduciaria=0;
										}
										if($ofl_otros_costos_y_gastos==null){
											$ofl_otros_costos_y_gastos=0;
										}
										if($ofl_aportes_efectivo_colpatria_fideicomiso==null){
											$ofl_aportes_efectivo_colpatria_fideicomiso=0;
										}
										if($ofl_reintegros_iva==null){
											$ofl_reintegros_iva=0;
										}
										if($ofl_subtotal_egresos_colpatria==null){
											$ofl_subtotal_egresos_colpatria=0;
										}
										if($ofl_traslados_fiducias_e_ingresos_totales==null){
											$ofl_traslados_fiducias_e_ingresos_totales=0;
										}
										if($ofl_ingresos_ventas_colpatria==null){
											$ofl_ingresos_ventas_colpatria=0;
										}
										if($ofl_desembolsos_credito_constructor_terreno==null){
											$ofl_desembolsos_credito_constructor_terreno=0;
										}
										if($ofl_traslados_liquidaciones_fideicomisos==null){
											$ofl_traslados_liquidaciones_fideicomisos=0;
										}
										if($ofl_otros_ingresos==null){
											$ofl_otros_ingresos=0;
										}
										if($ofl_aportes_de_socios==null){
											$ofl_aportes_de_socios=0;
										}
										if($ofl_subtotal_ingresos==null){
											$ofl_subtotal_ingresos=0;
										}
										if($ofl_flujo_caja_antes_de_reintegro_socios==null){
											$ofl_flujo_caja_antes_de_reintegro_socios=0;
										}
										if($ofl_reintegro_aportes_utilidades_socios==null){
											$ofl_reintegro_aportes_utilidades_socios=0;
										}
										if($ofl_flujo_neto_caja_ct==null){
											$ofl_flujo_neto_caja_ct=0;
										}
										if($ofl_flujo_acumulado==null){
											$ofl_flujo_acumulado=0;
										}
										if($ofl_costo_credito_tesoreria==null){
											$ofl_costo_credito_tesoreria=0;
										}
										if($ofl_impuesto_renta==null){
											$ofl_impuesto_renta=0;
										}
										if($ofl_flujo_neto_caja==null){
											$ofl_flujo_neto_caja=0;
										}
										if($ofl_flujo_acumulado_caja==null){
											$ofl_flujo_acumulado_caja=0;
										}
										if($ofl_vpn==null){
											$ofl_vpn=0;
										}
										if($ofl_tir_ea==null){
											$ofl_tir_ea=0;
										}
										if($ofl_tir_em==null){
											$ofl_tir_em=0;
										}
										if($ofl_tir_mod_ea==null){
											$ofl_tir_mod_ea=0;
										}
										if($ofl_tir_mod_em==null){
											$ofl_tir_mod_em=0;
										}
										if($ofl_valor_total_ventas==null){
											$ofl_valor_total_ventas=0;
										}
										if($ofl_pagos_efectuados_fiducia_admon==null){
											$ofl_pagos_efectuados_fiducia_admon=0;
										}
										if($ofl_pe_intereses_credito_constructor==null){
											$ofl_pe_intereses_credito_constructor=0;
										}
										if($ofl_pe_honorarios_visitas_obra_otros==null){
											$ofl_pe_honorarios_visitas_obra_otros=0;
										}
										if($ofl_pe_abonos_extraordinarios_credito==null){
											$ofl_pe_abonos_extraordinarios_credito=0;
										}
										if($ofl_pe_pagos_terreno_efectuados_fiducia==null){
											$ofl_pe_pagos_terreno_efectuados_fiducia=0;
										}
										if($ofl_pe_otros_pagos_efectuados_fiducia==null){
											$ofl_pe_otros_pagos_efectuados_fiducia=0;
										}
										if($ofl_traslados_fondos_fiducia_constructora==null){
											$ofl_traslados_fondos_fiducia_constructora=0;
										}
										if($ofl_comision_fiduciaria_prreventas_admon==null){
											$ofl_comision_fiduciaria_prreventas_admon=0;
										}
										if($ofl_comision_fiduciaria_nuevogar==null){
											$ofl_comision_fiduciaria_nuevogar=0;
										}
										if($ofl_impuesto_transacciones_financieras==null){
											$ofl_impuesto_transacciones_financieras=0;
										}
										if($ofl_subtotal_egresos==null){
											$ofl_subtotal_egresos=0;
										}
										if($ofl_desembolsos_credito_constructor==null){
											$ofl_desembolsos_credito_constructor=0;
										}
										if($ofl_ingresos_ventas==null){
											$ofl_ingresos_ventas=0;
										}
										if($ofl_iv_abonos_separacion==null){
											$ofl_iv_abonos_separacion=0;
										}
										if($ofl_iv_cartera_cuota_inicial==null){
											$ofl_iv_cartera_cuota_inicial=0;
										}
										if($ofl_iv_saldo_cuota_inicial_abono_escritura==null){
											$ofl_iv_saldo_cuota_inicial_abono_escritura=0;
										}
										if($ofl_iv_subsidio_vis_y_ahorro_programado==null){
											$ofl_iv_subsidio_vis_y_ahorro_programado=0;
										}
										if($ofl_iv_excedentes_credito_compradores==null){
											$ofl_iv_excedentes_credito_compradores=0;
										}
										if($ofl_iv_giros_directos_creditos_otras_entidades==null){
											$ofl_iv_giros_directos_creditos_otras_entidades=0;
										}
										if($ofl_iv_ingresos_por_recibir_ventas_realizadas==null){
											$ofl_iv_ingresos_por_recibir_ventas_realizadas=0;
										}
										if($ofl_otros_ingresos_por_ventas==null){
											$ofl_otros_ingresos_por_ventas=0;
										}
										if($ofl_oi_intereses_subrogacion==null){
											$ofl_oi_intereses_subrogacion=0;
										}
										if($ofl_oi_intereses_mora==null){
											$ofl_oi_intereses_mora=0;
										}
										if($ofl_oi_ofertas_comerciales_y_otros_ingresos==null){
											$ofl_oi_ofertas_comerciales_y_otros_ingresos=0;
										}
										if($ofl_aportes_efectivo_colpatria_fideicomiso==null){
											$ofl_aportes_efectivo_colpatria_fideicomiso=0;
										}
										//====No esta en excel ===//
										
										//$ofl_aportes_otros_socios_inversionistas
										
										//====FIN ===//
										
										if($ofl_rendimientos_fideicomiso_capitalizacion==null){
											$ofl_rendimientos_fideicomiso_capitalizacion=0;
										} 
										if($ofl_subtotal_ingresos_antes_rendimientos==null){
											$ofl_subtotal_ingresos_antes_rendimientos=0;
										}
										if($ofl_flujo_neto_sin_rendimientos==null){
											$ofl_flujo_neto_sin_rendimientos=0;
										}
									   if($ofl_rendimientos_fideicomiso==null){
											$ofl_rendimientos_fideicomiso=0;
										}
										  if($ofl_flujo_neto_fiduciaria==null){
											$ofl_flujo_neto_fiduciaria=0;
										}
										  if($ofl_traslado_saldo_final_fiducia_liquidacion==null){
											$ofl_traslado_saldo_final_fiducia_liquidacion=0;
										}
										if($ofl_flujo_acumulado_fiduciaria==null){
											$ofl_flujo_acumulado_fiduciaria=0;
										}
										
										
										//---------------Check Nulls---------------
						
						
						//Insercion de datos
						$envio_Tb_Otros_Flujos="INSERT INTO tb_otros_flujos (OFL_DET_PRO_ID, OFL_DET_ETAPA, OFL_MODELO, OFL_FECHA, OFL_COSTO_CONSTRUCCION, OFL_HONORARIOS_COLPATRIA, OFL_GASTOS_OPERACION_COLPATRIA, 
							OFL_GO_PROMOTORA_OPERACION, OFL_GO_PROMOTORA_OVERHEAD, OFL_GO_CONSTRUCTORA_OPERACION, OFL_GO_CONSTRUCTORA_OVERHEAD, OFL_GO_TRANSACCIONES_INMOBILIARIAS_OPERACION,
							OFL_GO_TRANSACCIONES_INMOBLIARIAS_OVERHEAD, OFL_OTROS_PAGOS_EFECTUADOS_POR_FIDUCIA, OFL_VALOR_TERRENO, 
							OFL_EGRESOS_CREDITO_CONSTRUCTOR, OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS_COLPATRIA, OFL_COMISION_FIDUCIARIA_NUEVOGAR_SIN_FIDUCIARIA,OFL_OTROS_COSTOS_Y_GASTOS,
							OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISOS, OFL_REINTEGROS_IVA, OFL_SUBTOTAL_EGRESOS_COLPATRIA, OFL_TRASLADOS_FIDUCIAS_E_INGRESOS_TOTALES,
							OFL_INGRESOS_VENTAS_COLPATRIA, OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR_TERRENO, OFL_TRASLADOS_LIQUIDACIONES_FIDEICOMISOS, OFL_OTROS_INGRESOS,OFL_APORTES_DE_SOCIOS, 
							OFL_SUBTOTAL_INGRESOS,OFL_FLUJO_CAJA_ANTES_DE_REINTEGRO_SOCIOS,OFL_REINTEGRO_APORTES_UTILIDADES_SOCIOS,OFL_FLUJO_NETO_CAJA_CT,OFL_FLUJO_ACUMULADO,
							OFL_COSTO_CREDITO_TESORERIA,OFL_IMPUESTO_RENTA,OFL_FLUJO_NETO_CAJA,OFL_FLUJO_ACUMULADO_CAJA,OFL_VPN,OFL_TIR_EA, OFL_TIR_EM, OFL_TIR_MOD_EA, OFL_TIR_MOD_EM, 
							OFL_VALOR_TOTAL_VENTAS, OFL_PAGOS_EFECTUADOS_FIDUCIA_ADMON, OFL_PE_INTERESES_CREDITO_CONSTRUCTOR, OFL_PE_HONORARIOS_VISITAS_OBRA_OTROS, 
							OFL_PE_ABONOS_EXTRAORDINARIOS_CREDITO, OFL_PE_PAGOS_TERRENO_EFECTUADOS_FIDUCIA, OFL_PE_OTROS_PAGOS_EFECTUADOS_FIDUCIA, OFL_TRASLADOS_FONDOS_FIDUCIA_CONSTRUCTORA,
							OFL_COMISION_FIDUCIARIA_PRREVENTAS_ADMON, OFL_COMISION_FIDUCIARIA_NUEVOGAR, OFL_IMPUESTO_TRANSACCIONES_FINANCIERAS, OFL_SUBTOTAL_EGRESOS,
							OFL_DESEMBOLSOS_CREDITO_CONSTRUCTOR,OFL_INGRESOS_VENTAS,OFL_IV_ABONOS_SEPARACION, OFL_IV_CARTERA_CUOTA_INICIAL, OFL_IV_SALDO_CUOTA_INICIAL_ABONO_ESCRITURA,
							OFL_IV_SUBSIDIO_VIS_Y_AHORRO_PROGRAMADO, OFL_IV_EXCEDENTES_CREDITO_COMPRADORES, OFL_IV_GIROS_DIRECTOS_CREDITOS_OTRAS_ENTIDADES, 
							OFL_IV_INGRESOS_POR_RECIBIR_VENTAS_REALIZADAS, OFL_OTROS_INGRESOS_POR_VENTAS, OFL_OI_INTERESES_SUBROGACION, OFL_OI_INTERESES_MORA,
							OFL_OI_OFERTAS_COMERCIALES_Y_OTROS_INGRESOS, OFL_APORTES_EFECTIVO_COLPATRIA_FIDEICOMISO, 
							OFL_RENDIMIENTOS_FIDEICOMISO_CAPITALIZACION, OFL_SUBTOTAL_INGRESOS_ANTES_RENDIMIENTOS, OFL_FLUJO_NETO_SIN_RENDIMIENTOS, OFL_RENDIMIENTOS_FIDEICOMISO,
							OFL_FLUJO_NETO_FIDUCIARIA, OFL_TRASLADO_SALDO_FINAL_FIDUCIA_LIQUIDACION, OFL_FLUJO_ACUMULADO_FIDUCIARIA)
							VALUES ('$ofl_id',
									$ofl_det_etapa,
									'$ofl_modelo',
									DATE_FORMAT('$ofl_fecha','%d/%m/%y'),
									$ofl_costo_construccion,
									$ofl_honorarios_colpatria,
									$ofl_gastos_operacion_colpatria,
									$ofl_go_promotora_operacion, 
									$ofl_go_promotora_overhead, 
									$ofl_go_constructora_operacion, 
									$ofl_go_constructora_overhead, 
									$ofl_go_transacciones_inmobiliarias_operacion,
									$ofl_go_transacciones_inmobliarias_overhead, 
									$ofl_otros_pagos_efectuados_por_fiducia, 
									$ofl_valor_terreno, 
									
									$ofl_egresos_credito_constructor, 
									$ofl_impuesto_transacciones_financieras_colpatria, 
									$ofl_comision_fiduciaria_nuevogar_sin_fiduciaria,
									$ofl_otros_costos_y_gastos,
									$ofl_aportes_efectivo_colpatria_fideicomiso, 
									$ofl_reintegros_iva,
									$ofl_subtotal_egresos_colpatria, 
									$ofl_traslados_fiducias_e_ingresos_totales,
									$ofl_ingresos_ventas_colpatria,
									$ofl_desembolsos_credito_constructor_terreno, 
									$ofl_traslados_liquidaciones_fideicomisos, 
									$ofl_otros_ingresos,
									$ofl_aportes_de_socios,
									$ofl_subtotal_ingresos,
									$ofl_flujo_caja_antes_de_reintegro_socios,
									$ofl_reintegro_aportes_utilidades_socios,
									$ofl_flujo_neto_caja_ct,
									$ofl_flujo_acumulado,
									$ofl_costo_credito_tesoreria,
									$ofl_impuesto_renta,
									$ofl_flujo_neto_caja,
									$ofl_flujo_acumulado_caja,
									$ofl_vpn,
									$ofl_tir_ea,
									$ofl_tir_em,
									$ofl_tir_mod_ea, 
									$ofl_tir_mod_em,
									$ofl_valor_total_ventas,
									$ofl_pagos_efectuados_fiducia_admon, 
									$ofl_pe_intereses_credito_constructor, 
									$ofl_pe_honorarios_visitas_obra_otros,
									$ofl_pe_abonos_extraordinarios_credito,
									$ofl_pe_pagos_terreno_efectuados_fiducia, 
									$ofl_pe_otros_pagos_efectuados_fiducia,
									$ofl_traslados_fondos_fiducia_constructora,
									$ofl_comision_fiduciaria_prreventas_admon, 
									$ofl_comision_fiduciaria_nuevogar, 
									$ofl_impuesto_transacciones_financieras, 
									$ofl_subtotal_egresos,
									$ofl_desembolsos_credito_constructor,
									$ofl_ingresos_ventas,
									$ofl_iv_abonos_separacion,
									$ofl_iv_cartera_cuota_inicial,
									$ofl_iv_saldo_cuota_inicial_abono_escritura,
									$ofl_iv_subsidio_vis_y_ahorro_programado,
									$ofl_iv_excedentes_credito_compradores,
									$ofl_iv_giros_directos_creditos_otras_entidades,
									$ofl_iv_ingresos_por_recibir_ventas_realizadas, 
									$ofl_otros_ingresos_por_ventas,
									$ofl_oi_intereses_subrogacion,
									$ofl_oi_intereses_mora,
									$ofl_oi_ofertas_comerciales_y_otros_ingresos,
									$ofl_aportes_efectivo_colpatria_fideicomiso,
									
									$ofl_rendimientos_fideicomiso_capitalizacion,
									$ofl_subtotal_ingresos_antes_rendimientos,
									$ofl_flujo_neto_sin_rendimientos,
									$ofl_rendimientos_fideicomiso,
									$ofl_flujo_neto_fiduciaria,
									$ofl_traslado_saldo_final_fiducia_liquidacion, 
									$ofl_flujo_acumulado_fiduciaria
							)";
							
									
									if(!$resultado_ofl= $mysqli -> query($envio_Tb_Otros_Flujos)){
									//echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
									$ofl_i++;
								}
				}
				
	

				
				
						
				?>	
	

</div>
</body></html>