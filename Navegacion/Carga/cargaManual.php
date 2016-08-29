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
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Carga Manual</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Norton">
    <!-- Styles -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<meta name="robots" content="noindex,follow" />

</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }

span {
    color:#c0392b;
    font-weight:700
}

h2 {
    font-size:35px;
    margin-left:-20px;
    text-align:left
}

nav {
    width:28.09%;
    margin:0 auto;
    display:block
}

nav a {
    font-size:19px;
    display:inline-block;
    text-align:center;
    font-family:'Lato',sans-serif;
    color:#c0392b;
    font-weight:400;
    padding:5px 15px;
    text-transform:uppercase;
    border-radius:2px;
    letter-spacing:1px;
    text-decoration:none;
    margin-right:10px;
    border:2px solid #ecf0f1;
    margin-bottom: 10px;
    border-radius:none
}

nav a.active,nav a:hover {
    background:#ecf0f1;
    color:#c0392b
}
.wrapper ul {
  padding-left: 0;
}
ul li {
    list-style:none;
    margin:10px auto;
    font-family:'Lato';
    position:relative
}

ul li:after {
    content:'';
    position:absolute;
    width:35px;
    height:35px;
    border:4px solid #fff;
    border-radius:6px;
    left:-12px;
    z-index:-1
}

#p{position:absolute; left:242px; top:291px; width:546px; height:89px;}
#p:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
#p1{position:absolute; left:304px; top:626px; width:423px; height:49px;}
#p1:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
#p2{ position:absolute; left:640px; top:41px; width:162px; height:76px;}
#p2:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
#p3{position:absolute; left:823px; top:41px; width:165px; height:76px;}
#p3:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
#p4{position:absolute; left:64px; top:437px; width:207px; height:249px;}
#p4:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
#p5{position:absolute; left:416px; top:435px; width:207px; height:247px;}
#p5:hover
{
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
}
#p6{ position:absolute; left:752px; top:434px; width:207px; height:248px;}
#p6:hover
{
    opacity: 1.0 ;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
}

/* Custom Icons For Checkbox */
label {
    cursor:pointer;
    color:#c0392b;
    margin:5px 0;
    padding-left:40px;
    position:relative;
    font-size:30px;
    -webkit-transition:.2s linear;
    -moz-transition:.2s linear;
    -o-transition:.2s linear;
    transition:.2s linear
}

label:before,label:after {
    content:'';
    left:11px;
    width:3px;
    bottom:0;
    background:#fcff00;
    position:absolute;
    top:0
}

label:before {
    transform:rotate(45deg);
    transform-origin:0 14px;
    height:0;
    -webkit-transition:.2s linear;
    -moz-transition:.2s linear;
    -o-transition:.2s linear;
    transition:.2s linear
}

label:after {
    transform:rotate(-45deg);
    transform-origin:0 20px;
    height:0;
    -webkit-transition:.2s linear .2s;
    -moz-transition:.2s linear .2s;
    -o-transition:.2s linear .2s;
    transition:.2s linear .2s
}

input[type="checkbox"] {
    display:none
}

input[type="checkbox"]:checked + label:after,input[type="checkbox"]:checked + label:before {
    height:100%
}

input[type="checkbox"]:checked + label {
    color:#fff
}


@media screen and (max-width: 480px){
 nav a{
    margin: 10px 0;
    padding: 10px;
 }
 div.wrapper[style] {
  width: 60% !important;
}
}


#upload-file-container {
   background: url(carga-manual_10.png) no-repeat;
   on
}

#upload-file-container input {
   filter: alpha(opacity=0);
   opacity: 0;
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
    cursor: pointer;
}
 </style>
<body>

	

</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(carga-manual_01.png); position:absolute; left:0px; top:0px; width:1024px; height:41px;" title="">
	</div>
	<div style="background-image:url(carga-manual_02.png); position:absolute; left:0px; top:41px; width:640px; height:250px;" title="">
	</div>
	<div id="p2" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(carga-manual_03.png);" title="">
	</div>
	<div style="background-image:url(carga-manual_04.png); position:absolute; left:802px; top:41px; width:21px; height:727px;" title="">
	</div>
	<div id="p3" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(carga-manual_05.png); " title="">
	</div>
	<div style="background-image:url(carga-manual_06.png); position:absolute; left:988px; top:41px; width:36px; height:727px;" title="">
	</div>
	<div style="background-image:url(carga-manual_07.png); position:absolute; left:640px; top:117px; width:162px; height:174px;" title="">
	</div>
	<div style="background-image:url(carga-manual_08.png); position:absolute; left:823px; top:117px; width:165px; height:651px;" title="">
	</div>
	<div style="background-image:url(carga-manual_09.png); position:absolute; left:0px; top:291px; width:242px; height:477px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(carga-manual_10.png);" title="">
	</div>
	<div style="background-image:url(carga-manual_11.png); position:absolute; left:788px; top:291px; width:14px; height:477px;" title="">
	</div>
	<div style="background-image:url(carga-manual_12.png); position:absolute; left:242px; top:380px; width:546px; height:246px;" title="">
	</div>
	<div style="background-image:url(carga-manual_13.png); position:absolute; left:242px; top:626px; width:62px; height:142px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(carga-manual_14.png);" title="">
	</div>
	<div style="background-image:url(carga-manual_15.png); position:absolute; left:727px; top:626px; width:61px; height:142px;" title="">
	</div>
	<div style="background-image:url(carga-manual_16.png); position:absolute; left:304px; top:675px; width:423px; height:93px;" title="">
	</div>




 
   <form action="" method="post" enctype="multipart/form-data" name="form1">
	
		
			  
			  
			<div id="upload-file-container" style="position:absolute; left:242px; top:291px; width:546px; height:89px;">

			<input  type="file" name="archivo" id="archivo">
			
			</div>
			
							
				<ul>

					<div class="wrapper" style="position:absolute; left:395px; top:507px; width:179px; height:76px;">
					<li>
						<input type="radio" name="radio" value="s"  checked />
						<label >Si</label>
					</li>

					<div class="wrapper2"">
					<li>
						<input type="radio" name="radio" value="n"  /> 
						<label >No</label>
					</li>
				</ul> 
				
				
				
			<div style="position:absolute; left:304px; top:626px; width:423px; height:49px;">
     
					  
			
				
		
		<input type="submit" name="button" class="btn" id="button" value="Actualizar Base de Datos">	
		</div>	 
		
		</form>
		
			<?php
			if(isset($_POST['radio'])){
				//subir la imagen del articulo
				$nameEXCEL = $_FILES['archivo']['name'];
				list($a,$b)= explode(" ",$nameEXCEL);
				
				
				list($proyecto,$etapa,$num1)= explode("-",$b);
				
				
				$tmpEXCEL = $_FILES['archivo']['tmp_name'];
				$extEXCEL = pathinfo($nameEXCEL);
				$urlnueva = "../../xls/55CN-001-CTRL_09.xls";			
				if(is_uploaded_file($tmpEXCEL)){
					copy($tmpEXCEL,$urlnueva);	
					
				}
				else{
				print "<script>alert(\"No ha cargado ningun archivo\");</script>";
				
				}
				
				
			}
		
			
				if(isset($_POST['radio'])){
					require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
					
					$reemplazar=($_POST['radio']);
					
					$objPHPExcel = PHPExcel_IOFactory::load('../../xls/55CN-001-CTRL_09.xls');
					
					
					$mysqli = new mysqli("localhost", "u517611460_ika", "Colombia2016*", "u517611460_model"); 
						
							
					$tb_proyecto = "SELECT * FROM TB_PROYECTO WHERE PRO_ID = '$proyecto'";
					$resultado_tb=$mysqli -> query($tb_proyecto);
					
					
					
					if($resultado_tb->num_rows <1 ){
						print "<script>alert(\"El proyecto no existe \");</script>";
						
						echo $nameEXCEL;
					}				
					else{
						
					$tb_etapa = "SELECT * FROM TB_DETALLE_PROYECTO WHERE DET_PRO_ID = '$proyecto' AND DET_ETAPA = $etapa";
					$resultado_et=$mysqli -> query($tb_etapa);
					
					if($resultado_et->num_rows <1 ){
						print "<script>alert(\"La etapa no existe\");</script>";
						}			
					
					else{
						
					
					$check_model=0;
					foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
					$worksheetTitle = $worksheet->getTitle();
					
					if($worksheetTitle=="Resumen Comp."){
						$check_model++;
						
					}
					
					
					}		
					$modelo;
					
					$ofl_var;
					if($check_model==1){
						$modelo="A";
						$ofl_var=3;
						$ofl_i=4;
					}
					else{
					$modelo="B";
					$ofl_var=3;
					$ofl_i=9;
					}
						
					
					$check_overwrite= "SELECT * FROM TB_FLUJO_CAJA_TERRENO WHERE FCT_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa";
					$resultado_tb=$mysqli -> query($check_overwrite);
					
					
					
					if($resultado_tb->num_rows >0 ){
					
						if($reemplazar=="s" ){
					
						$delete_fct="DELETE  FROM TB_FLUJO_CAJA WHERE FLC_DET_PRO_ID= '$proyecto' AND FLC_DET_ETAPA=$etapa AND FLC_MODELO='$modelo' ";
						$delete_flc="DELETE  FROM TB_FLUJO_CAJA_TERRENO WHERE FCT_DET_PRO_ID= '$proyecto' AND FCT_DET_ETAPA=$etapa AND FCT_MODELO='$modelo'";
						$delete_res="DELETE  FROM TB_RESUMEN WHERE RES_DET_PRO_ID= '$proyecto' AND RES_DET_ETAPA=$etapa AND RES_MODELO='$modelo'";
						$delete_ofl="DELETE  FROM TB_OTROS_FLUJOS WHERE OFL_DET_PRO_ID= '$proyecto' AND OFL_DET_ETAPA=$etapa AND OFL_MODELO='$modelo'";
						
						$A=$mysqli -> query($delete_fct);
						$A=$mysqli -> query($delete_flc);
						$A=$mysqli -> query($delete_res);
						$A=$mysqli -> query($delete_ofl);
						
						

					
					//---------Inicio Agregar datos			
					
					echo $modelo."</br>";
					echo $ofl_var."</br>";
					echo $check_model."</br>";	
					
					
					
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
						
						$envio_Tb_Flujo_Caja_Terreno="	INSERT INTO TB_FLUJO_CAJA_TERRENO(FCT_DET_PRO_ID, FCT_DET_ETAPA, FCT_MODELO, FCT_FECHA, 
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
						 
						 
						 VALUES ( '$fct_id',$fct_det_etapa,'$fct_modelo','$fct_fecha',
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
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							
						
						$fct_i++;
						}
						echo "Insert Flujo Caja Terreno </br>";						
							//------------------------FLUJO CAJA TERRENO-------------------
					
					
					//--------------------------------FLUJO CAJA-----------------------
				

						$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
						$fcl_i=11;
						
						$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getValue();	
						
					
						while ($flc_check!=null) {
							
						$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
						$flc_id=$proyecto;		
						$flc_det_etapa=$etapa;
						$flc_modelo=$modelo;
						
						$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getValue();	
						
						$flc_fecha=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getFormattedValue();	
						$flc_fecha2=cambiarFecha($flc_fecha);
						$flc_fecha=$flc_fecha2;
						$flc_urbanismo_interno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 5)->getValue();	
						$flc_ui_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 6)->getValue();	
						$flc_ui_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 7)->getValue();	
						$flc_costo_materiales_mano_obra = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 8)->getValue();
						$flc_cm_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 9)->getValue();
						$flc_cm_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 10)->getValue();
						$flc_gastos_imprevistos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 11)->getValue();
						$flc_costos_postventa = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 12)->getValue();
						$flc_costo_directo_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 13)->getValue();
						$flc_honorarios_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 14)->getValue();
						$flc_hc_honorarios_contruccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 15)->getValue();
						$flc_hc_gastos_reembolsable = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 16)->getValue();
						$flc_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 17)->getValue();
						$flc_hi_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 18)->getValue();
						$flc_hi_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 19)->getValue();
						$flc_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 20)->getValue();
						$flc_oh_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 21)->getValue();
						$flc_oh_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 22)->getValue();
						$flc_impuestos_y_derechos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 23)->getValue();
						$flc_costo_total_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 24)->getValue();
						$flc_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 25)->getValue();
						$flc_hg_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 26)->getValue();
						$flc_hg_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 27)->getValue();
						$flc_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 28)->getValue();
						$flc_hv_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 29)->getValue();
						$flc_hv_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 30)->getValue();
						$flc_costos_promocion_y_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 31)->getValue();
						$flc_cp_sala_de_ventas_unidades_modelo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 32)->getValue();
						$flc_cp_gastos_publicidad = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 33)->getValue();
						$flc_cp_gastos_sala_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 34)->getValue();
						$flc_cp_administracion_unidades_por_entregar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 35)->getValue();
						$flc_cp_comisiones_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 36)->getValue();
						$flc_gastos_legales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 37)->getValue();
						$flc_gl_hipotecas_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 38)->getValue();
						$flc_gl_notariales_registro_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 39)->getValue();
						$flc_gl_impuesto_predia_inmuebles_por_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 40)->getValue();
						$flc_gl_impuesto_ICA = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 41)->getValue();
						$flc_costo_total_antes_terreno_y_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 42)->getValue();
						$flc_valor_terreno_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 43)->getValue();
						$flc_vt_valor_adquisicion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 44)->getValue();
						$flc_vt_costos_urbanismo_y_otros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 45)->getValue();
						$flc_comisiones_fiducia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 46)->getValue();
						$flc_cf_preventas_y_administracion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 47)->getValue();
						$flc_cf_nuevogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 48)->getValue();
						$flc_gastos_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 49)->getValue();
						$flc_gf_intereses_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 50)->getValue();
						$flc_gf_otros_costos_credito = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 51)->getValue();
						$flc_gf_correccion_monetaria_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 52)->getValue();
						$flc_gf_impuesto_transacciones_financieras = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 53)->getValue();
						$flc_otros_costos_y_gastos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 54)->getValue();
						$flc_oc_costos_gastos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 55)->getValue();
						$flc_oc_costos_gastos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 56)->getValue();
						$flc_oc_costos_gastos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 57)->getValue();
						$flc_reintegros_iva_proyectos_vis = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 58)->getValue();
						$flc_costo_total_directos_e_indirectos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 59)->getValue();
						$flc_total_egresos_sin_correccion_monetaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 60)->getValue();
						$flc_desembolsos_creditos_constructor_y_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 61)->getValue();
						$flc_abonos_extraordinarios_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 62)->getValue();
						$flc_ingresos_por_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 63)->getValue();
						$flc_iv_abonos_separacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 64)->getValue();
						$flc_iv_cartera_cuota_inicial = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 65)->getValue();
						$flc_iv_saldo_cuota_inicial_y_abono_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 66)->getValue();
						$flc_iv_subsidio_vis_y_ahorro_programado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 67)->getValue();
						$flc_iv_excedentes_credito_compradores = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 68)->getValue();
						$flc_iv_giros_directos_creditos_otras_entidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 69)->getValue();
						$flc_iv_ingresos_por_recibir_ventas_realizadas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 70)->getValue();
						$flc_otros_ingresos_ventas_intereses = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 71)->getValue();
						$flc_oi_intereses_subrogacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 72)->getValue();
						$flc_oi_intereses_mora = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 73)->getValue();
						$flc_oi_ofertas_comerciales_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 74)->getValue();
						$flc_rendimientos_fideicomiso = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 75)->getValue();
						$flc_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 76)->getValue();
						$flc_oi_ingresos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 77)->getValue();
						$flc_oi_ingresos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 78)->getValue();
						$flc_oi_ingresos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 79)->getValue();
						$flc_ingresos_totales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 80)->getValue();
						$flc_flujo_neto_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 81)->getValue();
						$flc_flujo_acumulado_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 82)->getValue();
						$flc_costo_credito_tesoreria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 83)->getValue();
						$flc_impuesto_de_renta = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 84)->getValue();
						$flc_flujo_neto_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 85)->getValue();
						$flc_flujo_acumulado_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 86)->getValue();
						$flc_proyeccion_ventas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 91)->getValue();
						$flc_ventas_brutas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 92)->getValue();
						$flc_precio_promedio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 93)->getValue();
						$flc_proyeccion_entregas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 94)->getValue();
						$flc_proyeccion_escrituras_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 95)->getValue();
						$flc_proyeccion_escrituras_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 96)->getValue();
						$flc_proyeccion_subrogaciones_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 97)->getValue();
						$flc_vpn = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, 89)->getValue();
						$flc_tir_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
						$flc_tir_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 89)->getValue();
						$flc_tir_mod_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 89)->getValue();
						$flc_tir_mod_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 89)->getValue();
						
				//---------------Check Nulls---------------
								
						if($flc_urbanismo_interno==null){
							$flc_urbanismo_interno=0;
						}
						if($flc_presupuesto==null){
							$flc_presupuesto=0;
						}
						if($flc_incrementos==null){
							$flc_incrementos=0;
						}
						if($flc_costo_materiales==null){
							$flc_costo_materiales=0;
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
						
						
							$envio_Tb_Flujo_Caja="INSERT INTO TB_FLUJO_CAJA (FLC_DET_PRO_ID, FLC_DET_ETAPA, FLC_MODELO, FLC_FECHA, FLC_URBANISMO_INTERNO, 
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
							VALUES ('$flc_id',$flc_det_etapa,'$flc_modelo','$flc_fecha',$flc_urbanismo_interno,
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
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
						
							
							$fcl_i++;
						}
						
						echo "Insert Flujo Caja </br>";			
						
							//--------------------------------FLUJO CAJA-----------------------	
								
					//----------------------------------RESUMEN---------------------
						$objWorksheet = $objPHPExcel->setActiveSheetIndex(2);
							$res_id=$proyecto;		
							$res_det_etapa=$etapa;
							$res_modelo=$modelo;
							$res_temp= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 1)->getValue();
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
							$res_urbanismo_interno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 27)->getValue();	
							$res_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 28)->getValue();
							$res_incrementos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 29)->getValue();	
							$res_costo_materiales_mano_obra = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 30)->getValue();	
							$res_presupuesto2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 31)->getValue();
							$res_incrementos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 32)->getValue();	
							$res_gastos_imprevistos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 33)->getValue();
							$res_costos_post_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 34)->getValue();	
							$res_costo_directo_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 35)->getValue();	
							$res_honorarios_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 36)->getValue();
							$res_honorarios_construccion2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 37)->getValue();	
							$res_gastos_reembolsables=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 38)->getValue();	
							$res_honorarios_interventoria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 39)->getValue();	
							$res_honorarios_interventoria2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 40)->getValue();	
							$res_gastos_reembolsables2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 41)->getValue();
							$res_otros_honorarios=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 42)->getValue();
							$res_otros_honorarios2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 43)->getValue();	
							$res_gastos_reembolsables3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 44)->getValue();	
							$res_impuestos_derechos_licencias =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 45)->getValue();	
							$res_costo_total_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 46)->getValue();	
							$res_honorarios_gerencia=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 47)->getValue();	
							$res_honorarios_gerencia2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 48)->getValue();
							$res_gastos_reembolsables4=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 49)->getValue();	
							$res_honorarios_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 50)->getValue();	
							$res_honorarios_ventas2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 51)->getValue();	
							$res_gastos_reembolsables5=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 52)->getValue();	
							$res_costos_promocion_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 53)->getValue();
							$res_sala_ventas_modelo_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 54)->getValue();	
							$res_gastos_publicidad=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 55)->getValue();	
							$res_gastos_sala_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 56)->getValue();	
							$res_administracion_unidades_entregar=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 57)->getValue();	
							$res_comisiones_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 58)->getValue();	
							$res_gastos_legales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 59)->getValue();
							$res_hipotecas_credito_constructor=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 60)->getValue();	
							$res_notariales_registro_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 61)->getValue();	
							$res_impuestos_predial_escrituras=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 62)->getValue();	
							$res_impuestos_ICA=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 63)->getValue();	
							$res_costo_total_antes_terreno_financiero=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 64)->getValue();	
							$res_valor_terreno_urbanizado=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 65)->getValue();
							$res_pagos_porcentaje_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 66)->getValue();	
							$res_otros_pagos_costos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 67)->getValue();	
							$res_comiciones_fiducia=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 68)->getValue();	
							$res_preventas_administracion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 69)->getValue();	
							$res_nuevogar=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 70)->getValue();	
							$res_gastos_financieros=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 71)->getValue();
							$res_intereses_credito_constructor=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 72)->getValue();	
							$res_otros_costos_credito=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 73)->getValue();	
							$res_correccion_monetaria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 74)->getValue();	
							$res_impto_transacciones_financieras=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 75)->getValue();	
							$res_otros_costos_gastos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 76)->getValue();
							$res_otros_gastos= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 77)->getValue();
							$res_otros_gastos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 78)->getValue();
							$res_otros_gastos3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 79)->getValue();
							$res_reintegros_iva=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 80)->getValue();	
							$res_costo_total_directo_indirecto=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 81)->getValue();	
							$res_ventas_brutas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 82)->getValue();	
							$res_otros_ingresos_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 83)->getValue();	
							$res_intereses_subrogacion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 84)->getValue();	
							$res_intereses_mora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 85)->getValue();	
							$res_ofertas_comerciales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 86)->getValue();	
							$res_rendimientos_fideicomiso=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 87)->getValue();	
							$res_otros_ingresos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 88)->getValue();
							$res_ingresos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
							$res_ingresos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 90)->getValue();
							$res_ingresos3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 91)->getValue();
							$res_ingresos_totales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 92)->getValue();
							$res_utilidad_proyecto=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 93)->getValue();	
							$res_costo_creditos_tesoreria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 94)->getValue();	
							$res_impuestos_renta=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 95)->getValue();	
							$res_utilidad_proyecto2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 96)->getValue();	
							$res_costo_ventas_gestion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 98)->getValue();	
							$res_valor_terreno_libros=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 99)->getValue();	
							$res_costo_ventas_gestion_sin_interes=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 100)->getValue();	
							$res_tir_em=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 102)->getValue();
							$res_tir_ea=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 102)->getValue();
							$res_vpn_tasa_descuento=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 103)->getValue();	
							$res_utilidad_colpatria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 105)->getValue();	
							$res_constructora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 106)->getValue();	
							$res_transacciones_inmobiliarias=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 107)->getValue();	
							$res_promotora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 108)->getValue();	
							$res_tir_colpatria_em=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 110)->getValue();	
							$res_tir_colpatria_ea=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 110)->getValue();
							$res_vpn_colpatria_tasa_descuento=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 111)->getValue();
							
							
								//----------------------------------RESUMEN---------------------	
					if($res_total_unidades==null){
						$res_total_unidades=0;
					}
						if($res_area_promedio==null){
						$res_area_promedio=0;
					}
						if($res_total_area_construida==null){
						$res_total_area_construida=0;
					}
						if($res_total_area_vendible==null){
						$res_total_area_vendible=0;
					}
						if($res_area_util_lote==null){
						$res_area_util_lote=0;
					}
						if($res_densidad==null){
						$res_densidad=0;
					}
						if($res_lote_urbanizado==null){
						$res_lote_urbanizado=0;
					}
						if($res_numero_parqueos==null){
						$res_numero_parqueos=0;
					}
						if($res_relacion_parqueos==null){
						$res_relacion_parqueos=0;
					}
						if($res_numero_depositos==null){
						$res_numero_depositos=0;
					}
						if($res_ritmo_ventas==null){
						$res_ritmo_ventas=0;
					}
						if($res_urbanismo_interno==null){
						$res_urbanismo_interno=0;
					}if($res_presupuesto==null){
						$res_presupuesto=0;
					}
						if($res_incrementos==null){
						$res_incrementos=0;
					}
						if($res_costo_materiales_mano_obra==null){
						$res_costo_materiales_mano_obra=0;
					}
						if($res_presupuesto2==null){
						$res_presupuesto2=0;
					}
						if($res_incrementos2==null){
						$res_incrementos2=0;
					}
						if($res_gastos_imprevistos==null){
						$res_gastos_imprevistos=0;
					}
						if($res_costos_post_ventas==null){
						$res_costos_post_ventas=0;
					}
						if($res_costo_directo_construccion==null){
						$res_costo_directo_construccion=0;
					}
						if($res_honorarios_construccion==null){
						$res_honorarios_construccion=0;
					}
						if($res_honorarios_construccion2==null){
						$res_honorarios_construccion2=0;
					}
						if($res_gastos_reembolsables==null){
						$res_gastos_reembolsables=0;
					}
						if($res_honorarios_interventoria==null){
						$res_honorarios_interventoria=0;
					}if($res_honorarios_interventoria2==null){
						$res_honorarios_interventoria2=0;
					}
						if($res_gastos_reembolsables2==null){
						$res_gastos_reembolsables2=0;
					}
						if($res_otros_honorarios==null){
						$res_otros_honorarios=0;
					}
						if($res_otros_honorarios2==null){
						$res_otros_honorarios2=0;
					}
						if($res_gastos_reembolsables3==null){
						$res_gastos_reembolsables3=0;
					}
						if($res_impuestos_derechos_licencias==null){
						$res_impuestos_derechos_licencias=0;
					}
						if($res_costo_total_construccion==null){
						$res_costo_total_construccion=0;
					}
						if($res_honorarios_gerencia==null){
						$res_honorarios_gerencia=0;
					}
						if($res_honorarios_gerencia2==null){
						$res_honorarios_gerencia2=0;
					}
						if($res_gastos_reembolsables4==null){
						$res_gastos_reembolsables4=0;
					}
						if($res_honorarios_ventas==null){
						$res_honorarios_ventas=0;
					}
						if($res_honorarios_ventas2==null){
						$res_honorarios_ventas2=0;
					}if($res_gastos_reembolsables5==null){
						$res_gastos_reembolsables5=0;
					}
						if($res_costos_promocion_ventas==null){
						$res_costos_promocion_ventas=0;
					}
						if($res_sala_ventas_modelo_construccion==null){
						$res_sala_ventas_modelo_construccion=0;
					}
						if($res_gastos_publicidad==null){
						$res_gastos_publicidad=0;
					}
						if($res_gastos_sala_ventas==null){
						$res_gastos_sala_ventas=0;
					}
						if($res_administracion_unidades_entregar==null){
						$res_administracion_unidades_entregar=0;
					}
						if($res_comisiones_ventas==null){
						$res_comisiones_ventas=0;
					}
						if($res_gastos_legales==null){
						$res_gastos_legales=0;
					}
						if($res_hipotecas_credito_constructor==null){
						$res_hipotecas_credito_constructor=0;
					}
						if($res_notariales_registro_ventas==null){
						$res_notariales_registro_ventas=0;
					}
						if($res_impuestos_predial_escrituras==null){
						$res_impuestos_predial_escrituras=0;
					}
						if($res_impuestos_ICA==null){
						$res_impuestos_ICA=0;
					}if($res_costo_total_antes_terreno_financiero==null){
						$res_costo_total_antes_terreno_financiero=0;
					}
						if($res_valor_terreno_urbanizado==null){
						$res_valor_terreno_urbanizado=0;
					}
						if($res_pagos_porcentaje_ventas==null){
						$res_pagos_porcentaje_ventas=0;
					}
						if($res_otros_pagos_costos==null){
						$res_otros_pagos_costos=0;
					}
						if($res_comiciones_fiducia==null){
						$res_comiciones_fiducia=0;
					}
						if($res_otros_pagos_costos==null){
						$res_otros_pagos_costos=0;
					}
						if($res_comiciones_fiducia==null){
						$res_comiciones_fiducia=0;
					}
						if($res_preventas_administracion==null){
						$res_preventas_administracion=0;
					}
						if($res_nuevogar==null){
						$res_nuevogar=0;
					}
						if($res_gastos_financieros==null){
						$res_gastos_financieros=0;
					}
						if($res_intereses_credito_constructor==null){
						$res_intereses_credito_constructor=0;
					}
						if($res_otros_costos_credito==null){
						$res_otros_costos_credito=0;
					}if($res_correccion_monetaria==null){
						$res_correccion_monetaria=0;
					}
						if($res_impto_transacciones_financieras==null){
						$res_impto_transacciones_financieras=0;
					}
						if($res_otros_costos_gastos==null){
						$res_otros_costos_gastos=0;
					}
						if($res_otros_gastos==null){
						$res_otros_gastos=0;
					}
						if($res_otros_gastos2==null){
						$res_otros_gastos2=0;
					}
						if($res_otros_gastos3==null){
						$res_otros_gastos3=0;
					}
						if($res_reintegros_iva==null){
						$res_reintegros_iva=0;
					}
						if($res_costo_total_directo_indirecto==null){
						$res_costo_total_directo_indirecto=0;
					}
						if($res_ventas_brutas==null){
						$res_ventas_brutas=0;
					}
						if($res_otros_ingresos==null){
						$res_otros_ingresos=0;
					}
						if($res_intereses_subrogacion==null){
						$res_intereses_subrogacion=0;
					}
						if($res_intereses_mora==null){
						$res_intereses_mora=0;
					}if($res_ofertas_comerciales==null){
						$res_ofertas_comerciales=0;
					}
						if($res_rendimientos_fideicomiso==null){
						$res_rendimientos_fideicomiso=0;
					}
						if($res_otros_ingresos_ventas==null){
						$res_otros_ingresos_ventas=0;
					}
						if($res_ingresos==null){
						$res_ingresos=0;
					}
						if($res_ingresos2==null){
						$res_ingresos2=0;
					}
						if($res_ingresos3==null){
						$res_ingresos3=0;
					}
						if($res_ingresos_totales==null){
						$res_ingresos_totales=0;
					}
						if($res_utilidad_proyecto==null){
						$res_utilidad_proyecto=0;
					}
						if($res_costo_creditos_tesoreria==null){
						$res_costo_creditos_tesoreria=0;
					}
						if($res_utilidad_proyecto2==null){
						$res_utilidad_proyecto2=0;
					}
						if($res_costo_ventas_gestion==null){
						$res_costo_ventas_gestion=0;
					}
						if($res_valor_terreno_libros==null){
						$res_valor_terreno_libros=0;
					}
						if($res_costo_ventas_gestion_sin_interes==null){
							$res_costo_ventas_gestion_sin_interes=0;
					}
						if($res_tir_ea==null){
							$res_tir_ea=0;
						}		
					if($res_tir_em==null){
							$res_tir_em=0;
						}		
					if($res_vpn_tasa_descuento==null){
							$res_vpn_tasa_descuento=0;
						}		
					if($res_utilidad_colpatria==null){
							$res_utilidad_colpatria=0;
						}		
					if($res_constructora==null){
							$res_constructora=0;
						}		
					if($res_transacciones_inmobiliarias==null){
							$res_transacciones_inmobiliarias=0;
						}		
					if($res_promotora==null){
							$res_promotora=0;
						}		
					if($res_tir_colpatria_em==null){
							$res_tir_colpatria_em=0;
						}		
					if($res_tir_colpatria_ea==null){
							$res_tir_colpatria_ea=0;
						}		
					if($res_vpn_colpatria_tasa_descuento==null){
							$res_vpn_colpatria_tasa_descuento=0;
						}		
		
			//----------------------------------RESUMEN---------------------
								$envio_Tb_Resumen="INSERT INTO TB_RESUMEN (RES_DET_PRO_ID,RES_DET_ETAPA,
								RES_MODELO,RES_FECHA,RES_TOTAL_UNIDADES,RES_AREA_PROMEDIO_UNIDAD,RES_TOTAL_AREA_CONSTRUIDA,
								RES_TOTAL_AREA_VENDIBLE,RES_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO,
								RES_DENSIDAD_INDICE_OCUPACION,RES_VALOR_METRO_CUADRADO_LOTE_URBANIZADO,					
								RES_NUMERO_PARQUEOS,RES_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD,RES_NUMERO_DEPOSITOS,
								RES_RITMO_VENTAS_MENSUAL_PROMEDIO,RES_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA,RES_PRESUPUESTO,
								RES_INCREMENTOS,RES_COSTO_MATERIALES_MANO_OBRA,RES_PRESUPUESTO2,RES_INCREMENTOS2,RES_GASTOS_IMPREVISTOS,
								RES_COSTOS_POST_VENTAS,RES_COSTO_DIRECTO_CONSTRUCCION,RES_HONORARIOS_CONSTRUCCION,RES_HONORARIOS_CONSTRUCCION2,
								RES_GASTOS_REEMBOLSABLES,RES_HONORARIOS_INTERVENTORIA, RES_HONORARIOS_INTERVENTORIA2,
								RES_GASTOS_REEMBOLSABLES2,RES_OTROS_HONORARIOS_DISEÑOS_OTROS,RES_OTROS_HONORARIOS_DISEÑOS_OTROS2,RES_GASTOS_REEMBOLSABLES3,
								RES_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION,RES_COSTO_TOTAL_CONSTRUCCION,RES_HONORARIOS_GERENCIA,RES_HONORARIOS_GERENCIA2,
								RES_GASTOS_REEMBOLSABLES4,RES_HONORARIOS_VENTAS,RES_HONORARIOS_VENTAS2,RES_GASTOS_REEMBOLSABLES5,RES_COSTOS_PROMOCION_Y_VENTAS,
								RES_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION,RES_GASTOS_PUBLICIDAD,RES_GASTOS_SALA_VENTAS,RES_ADMON_UNIDADES_POR_ENTREGAR,
								RES_COMISIONES_VENTAS,RES_GASTOS_LEGALES,RES_HIPOTECAS_CREDITO_CONSTRUCTOR,RES_NOTARIALES_REGISTRO_DE_VENTAS,RES_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR,
								RES_IMPUESTO_ICA,RES_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS,RES_VALOR_TERENO_URBANIZADO,RES_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO,
								RES_OTROS_PAGOS_COSTOS_MAS_VALORIZACION,RES_COMISIONES_FIDUCIA,RES_PREVENTAS_Y_ADMON, RES_NUEVOGAR,
								RES_GASTOS_FINANCIEROS,RES_INTERESES_CREDITO_CONSTRUCTOR,RES_OTROS_COSTOS_CREDITO,RES_CORRECCION_MONETARIA,
								RES_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF,RES_OTROS_COSTOS_Y_GASTOS,RES_GASTO1,RES_GASTO2,RES_GASTO3,
								RES_REINTEGROS_IVA_PROYECTOS_VIS,RES_COSTO_TOTAL_DIRECTOS_INDIRECTOS,RES_VENTAS_BRUTAS,RES_OTROS_INGRESOS_VENTAS,
								RES_INTERESES_SUBROGACION,RES_INTERESES_MORA,RES_OFERTAS_COMERCIALES_OTROS_INGRESOS,RES_RENDIMIENTOS_FIDEICOMISO,
								RES_OTROS_INGRESOS,RES_INGRESOS1,RES_INGRESOS2,RES_INGRESOS3,RES_INGRESOS_TOTALES,
								RES_UTILIDAD_PROYECTO,RES_COSTO_CREDITO_TESORERIA,RES_IMPUESTO_RENTA,RES_UTILIDAD_PROYECTO2,RES_COSTO_VENTAS_GESTION,
								RES_VALOR_TERRENO_LIBROS,RES_COSTO_VENTAS_GESTION_SIN_INTERESES,RES_TIR_EA,RES_TIR_EM,
								RES_VPN_TASA_DESCUENTO,RES_UTILIDAD_COLPATRIA,RES_CONSTRUCTORA,RES_TRANSACCIONES_INMOBILIARIAS,RES_PROMOTORA,
								RES_TIR_COLAPTRIA_EA,RES_TIR_COLPATRIA_EM,RES_VPN_COLPATRIA_TASA_DESCUENTO
								) 
							VALUES ('$res_id',$res_det_etapa,'$res_modelo','$res_fecha',$res_total_unidades,$res_area_promedio,$res_total_area_construida,
								$res_total_area_vendible, $res_area_util_lote,$res_densidad,$res_lote_urbanizado,
								$res_numero_parqueos,$res_relacion_parqueos,$res_numero_depositos,
								$res_ritmo_ventas,$res_urbanismo_interno,$res_presupuesto,
								$res_incrementos,$res_costo_materiales_mano_obra,$res_presupuesto2,$res_incrementos2,$res_gastos_imprevistos,
								$res_costos_post_ventas,$res_costo_directo_construccion,$res_honorarios_construccion,$res_honorarios_construccion2,
								$res_gastos_reembolsables,$res_honorarios_interventoria,$res_honorarios_interventoria2,
								$res_gastos_reembolsables2,$res_otros_honorarios,$res_otros_honorarios2,$res_gastos_reembolsables3,
								$res_impuestos_derechos_licencias,$res_costo_total_construccion,$res_honorarios_gerencia,$res_honorarios_gerencia2,
								$res_gastos_reembolsables4,$res_honorarios_ventas,$res_honorarios_ventas2,$res_gastos_reembolsables5,$res_costos_promocion_ventas,
								$res_sala_ventas_modelo_construccion,$res_gastos_publicidad,$res_gastos_sala_ventas,$res_administracion_unidades_entregar,
								$res_comisiones_ventas,$res_gastos_legales,$res_hipotecas_credito_constructor,$res_notariales_registro_ventas,$res_impuestos_predial_escrituras,
								$res_impuestos_ICA,$res_costo_total_antes_terreno_financiero,$res_valor_terreno_urbanizado,$res_pagos_porcentaje_ventas,
								$res_otros_pagos_costos, $res_comiciones_fiducia,$res_preventas_administracion,$res_nuevogar,
								$res_gastos_financieros,$res_intereses_credito_constructor,$res_otros_costos_credito,$res_correccion_monetaria,
								$res_impto_transacciones_financieras,$res_otros_costos_gastos,
								$res_otros_gastos,$res_otros_gastos2,$res_otros_gastos3,
								$res_reintegros_iva,$res_costo_total_directo_indirecto, $res_ventas_brutas,$res_otros_ingresos,
								$res_intereses_subrogacion,$res_intereses_mora,$res_ofertas_comerciales,$res_rendimientos_fideicomiso,
								$res_otros_ingresos_ventas,$res_ingresos,$res_ingresos2,$res_ingresos3,$res_ingresos_totales,
								$res_utilidad_proyecto,$res_costo_creditos_tesoreria,$res_impuestos_renta,$res_utilidad_proyecto2,$res_costo_ventas_gestion,
								$res_valor_terreno_libros,$res_costo_ventas_gestion_sin_interes,
								$res_tir_ea,$res_tir_em,$res_vpn_tasa_descuento,$res_utilidad_colpatria,$res_constructora,$res_transacciones_inmobiliarias,$res_promotora,
								$res_tir_colpatria_em,$res_tir_colpatria_ea,$res_vpn_colpatria_tasa_descuento
							)";
								
							if(!$resultado_res= $mysqli -> query($envio_Tb_Resumen)){
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							
							//----------------------------------RESUMEN---------------------
							
						echo "Insert RESUMEN--------------------- </br>";									
					
						//--------------------------------OTROS FLUJOS OFL_-----------------------	
						
							$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
						
						
						
						
						$ofl_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 3)->getValue();

						while ($ofl_check!=null) {
						
							$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
						
								
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
				
				$envio_Tb_Otros_Flujos="INSERT INTO TB_OTROS_FLUJOS (OFL_DET_PRO_ID, OFL_DET_ETAPA, OFL_MODELO, OFL_FECHA, OFL_COSTO_CONSTRUCCION, OFL_HONORARIOS_COLPATRIA, OFL_GASTOS_OPERACION_COLPATRIA, 
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
							'$ofl_fecha',
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
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							$ofl_i++;
						}
					
						echo "Insert Otros Flujos </br>";								
					
					
					
					
					
					echo "FIN -----";
					  
					  
						
						

							echo $reemplazar;
					
					}
					
					else{
						
							print "<script>alert(\"Ha seleccionado la opcion de no reemplazar\");</script>";
					
					}
					
					}
					
					else{

					
					//---------Inicio Agregar datos			
					
					echo $modelo."</br>";
					echo $ofl_var."</br>";
					echo $check_model."</br>";	
					
					
					
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
						
						$envio_Tb_Flujo_Caja_Terreno="	INSERT INTO TB_FLUJO_CAJA_TERRENO(FCT_DET_PRO_ID, FCT_DET_ETAPA, FCT_MODELO, FCT_FECHA, 
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
						 
						 
						 VALUES ( '$fct_id',$fct_det_etapa,'$fct_modelo','$fct_fecha',
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
							echo('There was an error running the query [' . $mysqli->error . ']');
							}
							
						
						$fct_i++;
						}
						echo "Insert Flujo Caja Terreno </br>";						
							//------------------------FLUJO CAJA TERRENO-------------------
					
					
					//--------------------------------FLUJO CAJA-----------------------
				

						$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
						$fcl_i=11;
						
						$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getValue();	
						
					
						while ($flc_check!=null) {
							
						$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);
						$flc_id=$proyecto;		
						$flc_det_etapa=$etapa;
						$flc_modelo=$modelo;
						
						$flc_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getValue();	
						
						$flc_fecha=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 3)->getFormattedValue();	
						$flc_fecha2=cambiarFecha($flc_fecha);
						$flc_fecha=$flc_fecha2;
						$flc_urbanismo_interno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 5)->getValue();	
						$flc_ui_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 6)->getValue();	
						$flc_ui_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 7)->getValue();	
						$flc_costo_materiales_mano_obra = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 8)->getValue();
						$flc_cm_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 9)->getValue();
						$flc_cm_incrementos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 10)->getValue();
						$flc_gastos_imprevistos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 11)->getValue();
						$flc_costos_postventa = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 12)->getValue();
						$flc_costo_directo_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 13)->getValue();
						$flc_honorarios_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 14)->getValue();
						$flc_hc_honorarios_contruccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 15)->getValue();
						$flc_hc_gastos_reembolsable = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 16)->getValue();
						$flc_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 17)->getValue();
						$flc_hi_honorarios_interventoria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 18)->getValue();
						$flc_hi_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 19)->getValue();
						$flc_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 20)->getValue();
						$flc_oh_otros_honorarios = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 21)->getValue();
						$flc_oh_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 22)->getValue();
						$flc_impuestos_y_derechos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 23)->getValue();
						$flc_costo_total_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 24)->getValue();
						$flc_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 25)->getValue();
						$flc_hg_honorarios_gerencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 26)->getValue();
						$flc_hg_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 27)->getValue();
						$flc_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 28)->getValue();
						$flc_hv_honorarios_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 29)->getValue();
						$flc_hv_gastos_reembolsables = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 30)->getValue();
						$flc_costos_promocion_y_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 31)->getValue();
						$flc_cp_sala_de_ventas_unidades_modelo = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 32)->getValue();
						$flc_cp_gastos_publicidad = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 33)->getValue();
						$flc_cp_gastos_sala_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 34)->getValue();
						$flc_cp_administracion_unidades_por_entregar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 35)->getValue();
						$flc_cp_comisiones_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 36)->getValue();
						$flc_gastos_legales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 37)->getValue();
						$flc_gl_hipotecas_credito_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 38)->getValue();
						$flc_gl_notariales_registro_de_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 39)->getValue();
						$flc_gl_impuesto_predia_inmuebles_por_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 40)->getValue();
						$flc_gl_impuesto_ICA = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 41)->getValue();
						$flc_costo_total_antes_terreno_y_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 42)->getValue();
						$flc_valor_terreno_urbanizado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 43)->getValue();
						$flc_vt_valor_adquisicion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 44)->getValue();
						$flc_vt_costos_urbanismo_y_otros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 45)->getValue();
						$flc_comisiones_fiducia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 46)->getValue();
						$flc_cf_preventas_y_administracion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 47)->getValue();
						$flc_cf_nuevogar = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 48)->getValue();
						$flc_gastos_financieros = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 49)->getValue();
						$flc_gf_intereses_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 50)->getValue();
						$flc_gf_otros_costos_credito = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 51)->getValue();
						$flc_gf_correccion_monetaria_construccion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 52)->getValue();
						$flc_gf_impuesto_transacciones_financieras = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 53)->getValue();
						$flc_otros_costos_y_gastos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 54)->getValue();
						$flc_oc_costos_gastos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 55)->getValue();
						$flc_oc_costos_gastos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 56)->getValue();
						$flc_oc_costos_gastos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 57)->getValue();
						$flc_reintegros_iva_proyectos_vis = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 58)->getValue();
						$flc_costo_total_directos_e_indirectos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 59)->getValue();
						$flc_total_egresos_sin_correccion_monetaria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 60)->getValue();
						$flc_desembolsos_creditos_constructor_y_terreno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 61)->getValue();
						$flc_abonos_extraordinarios_creditos_constructor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 62)->getValue();
						$flc_ingresos_por_ventas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 63)->getValue();
						$flc_iv_abonos_separacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 64)->getValue();
						$flc_iv_cartera_cuota_inicial = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 65)->getValue();
						$flc_iv_saldo_cuota_inicial_y_abono_escritura = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 66)->getValue();
						$flc_iv_subsidio_vis_y_ahorro_programado = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 67)->getValue();
						$flc_iv_excedentes_credito_compradores = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 68)->getValue();
						$flc_iv_giros_directos_creditos_otras_entidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 69)->getValue();
						$flc_iv_ingresos_por_recibir_ventas_realizadas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 70)->getValue();
						$flc_otros_ingresos_ventas_intereses = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 71)->getValue();
						$flc_oi_intereses_subrogacion = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 72)->getValue();
						$flc_oi_intereses_mora = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 73)->getValue();
						$flc_oi_ofertas_comerciales_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 74)->getValue();
						$flc_rendimientos_fideicomiso = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 75)->getValue();
						$flc_otros_ingresos = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 76)->getValue();
						$flc_oi_ingresos1 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 77)->getValue();
						$flc_oi_ingresos2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 78)->getValue();
						$flc_oi_ingresos3 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 79)->getValue();
						$flc_ingresos_totales = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 80)->getValue();
						$flc_flujo_neto_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 81)->getValue();
						$flc_flujo_acumulado_caja_ct = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 82)->getValue();
						$flc_costo_credito_tesoreria = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 83)->getValue();
						$flc_impuesto_de_renta = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 84)->getValue();
						$flc_flujo_neto_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 85)->getValue();
						$flc_flujo_acumulado_caja = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 86)->getValue();
						$flc_proyeccion_ventas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 91)->getValue();
						$flc_ventas_brutas = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 92)->getValue();
						$flc_precio_promedio = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 93)->getValue();
						$flc_proyeccion_entregas_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 94)->getValue();
						$flc_proyeccion_escrituras_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 95)->getValue();
						$flc_proyeccion_escrituras_unidades = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 96)->getValue();
						$flc_proyeccion_subrogaciones_valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($fcl_i, 97)->getValue();
						$flc_vpn = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, 89)->getValue();
						$flc_tir_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
						$flc_tir_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, 89)->getValue();
						$flc_tir_mod_ea = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, 89)->getValue();
						$flc_tir_mod_em = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, 89)->getValue();
						
				//---------------Check Nulls---------------
								
						if($flc_urbanismo_interno==null){
							$flc_urbanismo_interno=0;
						}
						if($flc_presupuesto==null){
							$flc_presupuesto=0;
						}
						if($flc_incrementos==null){
							$flc_incrementos=0;
						}
						if($flc_costo_materiales==null){
							$flc_costo_materiales=0;
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
						
						
							$envio_Tb_Flujo_Caja="INSERT INTO TB_FLUJO_CAJA (FLC_DET_PRO_ID, FLC_DET_ETAPA, FLC_MODELO, FLC_FECHA, FLC_URBANISMO_INTERNO, 
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
							VALUES ('$flc_id',$flc_det_etapa,'$flc_modelo','$flc_fecha',$flc_urbanismo_interno,
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
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
						
							
							$fcl_i++;
						}
						
						echo "Insert Flujo Caja </br>";			
						
							//--------------------------------FLUJO CAJA-----------------------	
								
					//----------------------------------RESUMEN---------------------
						$objWorksheet = $objPHPExcel->setActiveSheetIndex(2);
							$res_id=$proyecto;		
							$res_det_etapa=$etapa;
							$res_modelo=$modelo;
							$res_temp= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 1)->getValue();
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
							$res_urbanismo_interno = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 27)->getValue();	
							$res_presupuesto = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 28)->getValue();
							$res_incrementos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 29)->getValue();	
							$res_costo_materiales_mano_obra = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 30)->getValue();	
							$res_presupuesto2 = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 31)->getValue();
							$res_incrementos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 32)->getValue();	
							$res_gastos_imprevistos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 33)->getValue();
							$res_costos_post_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 34)->getValue();	
							$res_costo_directo_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 35)->getValue();	
							$res_honorarios_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 36)->getValue();
							$res_honorarios_construccion2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 37)->getValue();	
							$res_gastos_reembolsables=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 38)->getValue();	
							$res_honorarios_interventoria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 39)->getValue();	
							$res_honorarios_interventoria2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 40)->getValue();	
							$res_gastos_reembolsables2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 41)->getValue();
							$res_otros_honorarios=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 42)->getValue();
							$res_otros_honorarios2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 43)->getValue();	
							$res_gastos_reembolsables3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 44)->getValue();	
							$res_impuestos_derechos_licencias =$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 45)->getValue();	
							$res_costo_total_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 46)->getValue();	
							$res_honorarios_gerencia=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 47)->getValue();	
							$res_honorarios_gerencia2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 48)->getValue();
							$res_gastos_reembolsables4=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 49)->getValue();	
							$res_honorarios_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 50)->getValue();	
							$res_honorarios_ventas2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 51)->getValue();	
							$res_gastos_reembolsables5=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 52)->getValue();	
							$res_costos_promocion_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 53)->getValue();
							$res_sala_ventas_modelo_construccion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 54)->getValue();	
							$res_gastos_publicidad=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 55)->getValue();	
							$res_gastos_sala_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 56)->getValue();	
							$res_administracion_unidades_entregar=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 57)->getValue();	
							$res_comisiones_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 58)->getValue();	
							$res_gastos_legales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 59)->getValue();
							$res_hipotecas_credito_constructor=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 60)->getValue();	
							$res_notariales_registro_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 61)->getValue();	
							$res_impuestos_predial_escrituras=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 62)->getValue();	
							$res_impuestos_ICA=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 63)->getValue();	
							$res_costo_total_antes_terreno_financiero=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 64)->getValue();	
							$res_valor_terreno_urbanizado=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 65)->getValue();
							$res_pagos_porcentaje_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 66)->getValue();	
							$res_otros_pagos_costos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 67)->getValue();	
							$res_comiciones_fiducia=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 68)->getValue();	
							$res_preventas_administracion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 69)->getValue();	
							$res_nuevogar=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 70)->getValue();	
							$res_gastos_financieros=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 71)->getValue();
							$res_intereses_credito_constructor=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 72)->getValue();	
							$res_otros_costos_credito=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 73)->getValue();	
							$res_correccion_monetaria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 74)->getValue();	
							$res_impto_transacciones_financieras=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 75)->getValue();	
							$res_otros_costos_gastos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 76)->getValue();
							$res_otros_gastos= $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 77)->getValue();
							$res_otros_gastos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 78)->getValue();
							$res_otros_gastos3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 79)->getValue();
							$res_reintegros_iva=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 80)->getValue();	
							$res_costo_total_directo_indirecto=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 81)->getValue();	
							$res_ventas_brutas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 82)->getValue();	
							$res_otros_ingresos_ventas=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 83)->getValue();	
							$res_intereses_subrogacion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 84)->getValue();	
							$res_intereses_mora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 85)->getValue();	
							$res_ofertas_comerciales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 86)->getValue();	
							$res_rendimientos_fideicomiso=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 87)->getValue();	
							$res_otros_ingresos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 88)->getValue();
							$res_ingresos=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 89)->getValue();
							$res_ingresos2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 90)->getValue();
							$res_ingresos3=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 91)->getValue();
							$res_ingresos_totales=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 92)->getValue();
							$res_utilidad_proyecto=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 93)->getValue();	
							$res_costo_creditos_tesoreria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 94)->getValue();	
							$res_impuestos_renta=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 95)->getValue();	
							$res_utilidad_proyecto2=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 96)->getValue();	
							$res_costo_ventas_gestion=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 98)->getValue();	
							$res_valor_terreno_libros=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 99)->getValue();	
							$res_costo_ventas_gestion_sin_interes=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 100)->getValue();	
							$res_tir_em=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 102)->getValue();
							$res_tir_ea=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 102)->getValue();
							$res_vpn_tasa_descuento=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 103)->getValue();	
							$res_utilidad_colpatria=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 105)->getValue();	
							$res_constructora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 106)->getValue();	
							$res_transacciones_inmobiliarias=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 107)->getValue();	
							$res_promotora=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 108)->getValue();	
							$res_tir_colpatria_em=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 110)->getValue();	
							$res_tir_colpatria_ea=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, 110)->getValue();
							$res_vpn_colpatria_tasa_descuento=$objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, 111)->getValue();
							
							
								//----------------------------------RESUMEN---------------------	
					if($res_total_unidades==null){
						$res_total_unidades=0;
					}
						if($res_area_promedio==null){
						$res_area_promedio=0;
					}
						if($res_total_area_construida==null){
						$res_total_area_construida=0;
					}
						if($res_total_area_vendible==null){
						$res_total_area_vendible=0;
					}
						if($res_area_util_lote==null){
						$res_area_util_lote=0;
					}
						if($res_densidad==null){
						$res_densidad=0;
					}
						if($res_lote_urbanizado==null){
						$res_lote_urbanizado=0;
					}
						if($res_numero_parqueos==null){
						$res_numero_parqueos=0;
					}
						if($res_relacion_parqueos==null){
						$res_relacion_parqueos=0;
					}
						if($res_numero_depositos==null){
						$res_numero_depositos=0;
					}
						if($res_ritmo_ventas==null){
						$res_ritmo_ventas=0;
					}
						if($res_urbanismo_interno==null){
						$res_urbanismo_interno=0;
					}if($res_presupuesto==null){
						$res_presupuesto=0;
					}
						if($res_incrementos==null){
						$res_incrementos=0;
					}
						if($res_costo_materiales_mano_obra==null){
						$res_costo_materiales_mano_obra=0;
					}
						if($res_presupuesto2==null){
						$res_presupuesto2=0;
					}
						if($res_incrementos2==null){
						$res_incrementos2=0;
					}
						if($res_gastos_imprevistos==null){
						$res_gastos_imprevistos=0;
					}
						if($res_costos_post_ventas==null){
						$res_costos_post_ventas=0;
					}
						if($res_costo_directo_construccion==null){
						$res_costo_directo_construccion=0;
					}
						if($res_honorarios_construccion==null){
						$res_honorarios_construccion=0;
					}
						if($res_honorarios_construccion2==null){
						$res_honorarios_construccion2=0;
					}
						if($res_gastos_reembolsables==null){
						$res_gastos_reembolsables=0;
					}
						if($res_honorarios_interventoria==null){
						$res_honorarios_interventoria=0;
					}if($res_honorarios_interventoria2==null){
						$res_honorarios_interventoria2=0;
					}
						if($res_gastos_reembolsables2==null){
						$res_gastos_reembolsables2=0;
					}
						if($res_otros_honorarios==null){
						$res_otros_honorarios=0;
					}
						if($res_otros_honorarios2==null){
						$res_otros_honorarios2=0;
					}
						if($res_gastos_reembolsables3==null){
						$res_gastos_reembolsables3=0;
					}
						if($res_impuestos_derechos_licencias==null){
						$res_impuestos_derechos_licencias=0;
					}
						if($res_costo_total_construccion==null){
						$res_costo_total_construccion=0;
					}
						if($res_honorarios_gerencia==null){
						$res_honorarios_gerencia=0;
					}
						if($res_honorarios_gerencia2==null){
						$res_honorarios_gerencia2=0;
					}
						if($res_gastos_reembolsables4==null){
						$res_gastos_reembolsables4=0;
					}
						if($res_honorarios_ventas==null){
						$res_honorarios_ventas=0;
					}
						if($res_honorarios_ventas2==null){
						$res_honorarios_ventas2=0;
					}if($res_gastos_reembolsables5==null){
						$res_gastos_reembolsables5=0;
					}
						if($res_costos_promocion_ventas==null){
						$res_costos_promocion_ventas=0;
					}
						if($res_sala_ventas_modelo_construccion==null){
						$res_sala_ventas_modelo_construccion=0;
					}
						if($res_gastos_publicidad==null){
						$res_gastos_publicidad=0;
					}
						if($res_gastos_sala_ventas==null){
						$res_gastos_sala_ventas=0;
					}
						if($res_administracion_unidades_entregar==null){
						$res_administracion_unidades_entregar=0;
					}
						if($res_comisiones_ventas==null){
						$res_comisiones_ventas=0;
					}
						if($res_gastos_legales==null){
						$res_gastos_legales=0;
					}
						if($res_hipotecas_credito_constructor==null){
						$res_hipotecas_credito_constructor=0;
					}
						if($res_notariales_registro_ventas==null){
						$res_notariales_registro_ventas=0;
					}
						if($res_impuestos_predial_escrituras==null){
						$res_impuestos_predial_escrituras=0;
					}
						if($res_impuestos_ICA==null){
						$res_impuestos_ICA=0;
					}if($res_costo_total_antes_terreno_financiero==null){
						$res_costo_total_antes_terreno_financiero=0;
					}
						if($res_valor_terreno_urbanizado==null){
						$res_valor_terreno_urbanizado=0;
					}
						if($res_pagos_porcentaje_ventas==null){
						$res_pagos_porcentaje_ventas=0;
					}
						if($res_otros_pagos_costos==null){
						$res_otros_pagos_costos=0;
					}
						if($res_comiciones_fiducia==null){
						$res_comiciones_fiducia=0;
					}
						if($res_otros_pagos_costos==null){
						$res_otros_pagos_costos=0;
					}
						if($res_comiciones_fiducia==null){
						$res_comiciones_fiducia=0;
					}
						if($res_preventas_administracion==null){
						$res_preventas_administracion=0;
					}
						if($res_nuevogar==null){
						$res_nuevogar=0;
					}
						if($res_gastos_financieros==null){
						$res_gastos_financieros=0;
					}
						if($res_intereses_credito_constructor==null){
						$res_intereses_credito_constructor=0;
					}
						if($res_otros_costos_credito==null){
						$res_otros_costos_credito=0;
					}if($res_correccion_monetaria==null){
						$res_correccion_monetaria=0;
					}
						if($res_impto_transacciones_financieras==null){
						$res_impto_transacciones_financieras=0;
					}
						if($res_otros_costos_gastos==null){
						$res_otros_costos_gastos=0;
					}
						if($res_otros_gastos==null){
						$res_otros_gastos=0;
					}
						if($res_otros_gastos2==null){
						$res_otros_gastos2=0;
					}
						if($res_otros_gastos3==null){
						$res_otros_gastos3=0;
					}
						if($res_reintegros_iva==null){
						$res_reintegros_iva=0;
					}
						if($res_costo_total_directo_indirecto==null){
						$res_costo_total_directo_indirecto=0;
					}
						if($res_ventas_brutas==null){
						$res_ventas_brutas=0;
					}
						if($res_otros_ingresos==null){
						$res_otros_ingresos=0;
					}
						if($res_intereses_subrogacion==null){
						$res_intereses_subrogacion=0;
					}
						if($res_intereses_mora==null){
						$res_intereses_mora=0;
					}if($res_ofertas_comerciales==null){
						$res_ofertas_comerciales=0;
					}
						if($res_rendimientos_fideicomiso==null){
						$res_rendimientos_fideicomiso=0;
					}
						if($res_otros_ingresos_ventas==null){
						$res_otros_ingresos_ventas=0;
					}
						if($res_ingresos==null){
						$res_ingresos=0;
					}
						if($res_ingresos2==null){
						$res_ingresos2=0;
					}
						if($res_ingresos3==null){
						$res_ingresos3=0;
					}
						if($res_ingresos_totales==null){
						$res_ingresos_totales=0;
					}
						if($res_utilidad_proyecto==null){
						$res_utilidad_proyecto=0;
					}
						if($res_costo_creditos_tesoreria==null){
						$res_costo_creditos_tesoreria=0;
					}
						if($res_utilidad_proyecto2==null){
						$res_utilidad_proyecto2=0;
					}
						if($res_costo_ventas_gestion==null){
						$res_costo_ventas_gestion=0;
					}
						if($res_valor_terreno_libros==null){
						$res_valor_terreno_libros=0;
					}
						if($res_costo_ventas_gestion_sin_interes==null){
							$res_costo_ventas_gestion_sin_interes=0;
					}
						if($res_tir_ea==null){
							$res_tir_ea=0;
						}		
					if($res_tir_em==null){
							$res_tir_em=0;
						}		
					if($res_vpn_tasa_descuento==null){
							$res_vpn_tasa_descuento=0;
						}		
					if($res_utilidad_colpatria==null){
							$res_utilidad_colpatria=0;
						}		
					if($res_constructora==null){
							$res_constructora=0;
						}		
					if($res_transacciones_inmobiliarias==null){
							$res_transacciones_inmobiliarias=0;
						}		
					if($res_promotora==null){
							$res_promotora=0;
						}		
					if($res_tir_colpatria_em==null){
							$res_tir_colpatria_em=0;
						}		
					if($res_tir_colpatria_ea==null){
							$res_tir_colpatria_ea=0;
						}		
					if($res_vpn_colpatria_tasa_descuento==null){
							$res_vpn_colpatria_tasa_descuento=0;
						}		
		
			//----------------------------------RESUMEN---------------------
								$envio_Tb_Resumen="INSERT INTO TB_RESUMEN (RES_DET_PRO_ID,RES_DET_ETAPA,
								RES_MODELO,RES_FECHA,RES_TOTAL_UNIDADES,RES_AREA_PROMEDIO_UNIDAD,RES_TOTAL_AREA_CONSTRUIDA,
								RES_TOTAL_AREA_VENDIBLE,RES_AREA_UTIL_LOTE_ASIGNADA_SUBPROYECTO,
								RES_DENSIDAD_INDICE_OCUPACION,RES_VALOR_METRO_CUADRADO_LOTE_URBANIZADO,					
								RES_NUMERO_PARQUEOS,RES_RELACION_PARQUEOS_NUMERO_PARQUEOS_POR_UNIDAD,RES_NUMERO_DEPOSITOS,
								RES_RITMO_VENTAS_MENSUAL_PROMEDIO,RES_URBANISMO_INTERNO_COSTO_MATERIALES_MANO_OBRA,RES_PRESUPUESTO,
								RES_INCREMENTOS,RES_COSTO_MATERIALES_MANO_OBRA,RES_PRESUPUESTO2,RES_INCREMENTOS2,RES_GASTOS_IMPREVISTOS,
								RES_COSTOS_POST_VENTAS,RES_COSTO_DIRECTO_CONSTRUCCION,RES_HONORARIOS_CONSTRUCCION,RES_HONORARIOS_CONSTRUCCION2,
								RES_GASTOS_REEMBOLSABLES,RES_HONORARIOS_INTERVENTORIA, RES_HONORARIOS_INTERVENTORIA2,
								RES_GASTOS_REEMBOLSABLES2,RES_OTROS_HONORARIOS_DISEÑOS_OTROS,RES_OTROS_HONORARIOS_DISEÑOS_OTROS2,RES_GASTOS_REEMBOLSABLES3,
								RES_IMPUESTOS_DERECHOS_LICENCIAS_CONSTRUCCION,RES_COSTO_TOTAL_CONSTRUCCION,RES_HONORARIOS_GERENCIA,RES_HONORARIOS_GERENCIA2,
								RES_GASTOS_REEMBOLSABLES4,RES_HONORARIOS_VENTAS,RES_HONORARIOS_VENTAS2,RES_GASTOS_REEMBOLSABLES5,RES_COSTOS_PROMOCION_Y_VENTAS,
								RES_SALA_VENTAS_Y_UNIDADES_MODELO_CONSTRUCCION,RES_GASTOS_PUBLICIDAD,RES_GASTOS_SALA_VENTAS,RES_ADMON_UNIDADES_POR_ENTREGAR,
								RES_COMISIONES_VENTAS,RES_GASTOS_LEGALES,RES_HIPOTECAS_CREDITO_CONSTRUCTOR,RES_NOTARIALES_REGISTRO_DE_VENTAS,RES_IMPUESTO_PREDIAL_INMUEBLES_POR_ESCRITURAR,
								RES_IMPUESTO_ICA,RES_COSTO_TOTAL_ANTES_TERRENO_FINANCIEROS,RES_VALOR_TERENO_URBANIZADO,RES_PAGOS_PORCENTAJE_VENTAS_NETO_ANTICIPO,
								RES_OTROS_PAGOS_COSTOS_MAS_VALORIZACION,RES_COMISIONES_FIDUCIA,RES_PREVENTAS_Y_ADMON, RES_NUEVOGAR,
								RES_GASTOS_FINANCIEROS,RES_INTERESES_CREDITO_CONSTRUCTOR,RES_OTROS_COSTOS_CREDITO,RES_CORRECCION_MONETARIA,
								RES_IMPUESTO_TRANSACCIONES_FINANCIERAS_ITF,RES_OTROS_COSTOS_Y_GASTOS,RES_GASTO1,RES_GASTO2,RES_GASTO3,
								RES_REINTEGROS_IVA_PROYECTOS_VIS,RES_COSTO_TOTAL_DIRECTOS_INDIRECTOS,RES_VENTAS_BRUTAS,RES_OTROS_INGRESOS_VENTAS,
								RES_INTERESES_SUBROGACION,RES_INTERESES_MORA,RES_OFERTAS_COMERCIALES_OTROS_INGRESOS,RES_RENDIMIENTOS_FIDEICOMISO,
								RES_OTROS_INGRESOS,RES_INGRESOS1,RES_INGRESOS2,RES_INGRESOS3,RES_INGRESOS_TOTALES,
								RES_UTILIDAD_PROYECTO,RES_COSTO_CREDITO_TESORERIA,RES_IMPUESTO_RENTA,RES_UTILIDAD_PROYECTO2,RES_COSTO_VENTAS_GESTION,
								RES_VALOR_TERRENO_LIBROS,RES_COSTO_VENTAS_GESTION_SIN_INTERESES,RES_TIR_EA,RES_TIR_EM,
								RES_VPN_TASA_DESCUENTO,RES_UTILIDAD_COLPATRIA,RES_CONSTRUCTORA,RES_TRANSACCIONES_INMOBILIARIAS,RES_PROMOTORA,
								RES_TIR_COLAPTRIA_EA,RES_TIR_COLPATRIA_EM,RES_VPN_COLPATRIA_TASA_DESCUENTO
								) 
							VALUES ('$res_id',$res_det_etapa,'$res_modelo','$res_fecha',$res_total_unidades,$res_area_promedio,$res_total_area_construida,
								$res_total_area_vendible, $res_area_util_lote,$res_densidad,$res_lote_urbanizado,
								$res_numero_parqueos,$res_relacion_parqueos,$res_numero_depositos,
								$res_ritmo_ventas,$res_urbanismo_interno,$res_presupuesto,
								$res_incrementos,$res_costo_materiales_mano_obra,$res_presupuesto2,$res_incrementos2,$res_gastos_imprevistos,
								$res_costos_post_ventas,$res_costo_directo_construccion,$res_honorarios_construccion,$res_honorarios_construccion2,
								$res_gastos_reembolsables,$res_honorarios_interventoria,$res_honorarios_interventoria2,
								$res_gastos_reembolsables2,$res_otros_honorarios,$res_otros_honorarios2,$res_gastos_reembolsables3,
								$res_impuestos_derechos_licencias,$res_costo_total_construccion,$res_honorarios_gerencia,$res_honorarios_gerencia2,
								$res_gastos_reembolsables4,$res_honorarios_ventas,$res_honorarios_ventas2,$res_gastos_reembolsables5,$res_costos_promocion_ventas,
								$res_sala_ventas_modelo_construccion,$res_gastos_publicidad,$res_gastos_sala_ventas,$res_administracion_unidades_entregar,
								$res_comisiones_ventas,$res_gastos_legales,$res_hipotecas_credito_constructor,$res_notariales_registro_ventas,$res_impuestos_predial_escrituras,
								$res_impuestos_ICA,$res_costo_total_antes_terreno_financiero,$res_valor_terreno_urbanizado,$res_pagos_porcentaje_ventas,
								$res_otros_pagos_costos, $res_comiciones_fiducia,$res_preventas_administracion,$res_nuevogar,
								$res_gastos_financieros,$res_intereses_credito_constructor,$res_otros_costos_credito,$res_correccion_monetaria,
								$res_impto_transacciones_financieras,$res_otros_costos_gastos,
								$res_otros_gastos,$res_otros_gastos2,$res_otros_gastos3,
								$res_reintegros_iva,$res_costo_total_directo_indirecto, $res_ventas_brutas,$res_otros_ingresos,
								$res_intereses_subrogacion,$res_intereses_mora,$res_ofertas_comerciales,$res_rendimientos_fideicomiso,
								$res_otros_ingresos_ventas,$res_ingresos,$res_ingresos2,$res_ingresos3,$res_ingresos_totales,
								$res_utilidad_proyecto,$res_costo_creditos_tesoreria,$res_impuestos_renta,$res_utilidad_proyecto2,$res_costo_ventas_gestion,
								$res_valor_terreno_libros,$res_costo_ventas_gestion_sin_interes,
								$res_tir_ea,$res_tir_em,$res_vpn_tasa_descuento,$res_utilidad_colpatria,$res_constructora,$res_transacciones_inmobiliarias,$res_promotora,
								$res_tir_colpatria_em,$res_tir_colpatria_ea,$res_vpn_colpatria_tasa_descuento
							)";
								
							if(!$resultado_res= $mysqli -> query($envio_Tb_Resumen)){
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							
							//----------------------------------RESUMEN---------------------
							
						echo "Insert RESUMEN--------------------- </br>";									
					
						//--------------------------------OTROS FLUJOS OFL_-----------------------	
						
							$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
						
						
						
						
						$ofl_check = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($ofl_i, 3)->getValue();

						while ($ofl_check!=null) {
						
							$objWorksheet = $objPHPExcel->setActiveSheetIndex($ofl_var);
						
								
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
				
				$envio_Tb_Otros_Flujos="INSERT INTO TB_OTROS_FLUJOS (OFL_DET_PRO_ID, OFL_DET_ETAPA, OFL_MODELO, OFL_FECHA, OFL_COSTO_CONSTRUCCION, OFL_HONORARIOS_COLPATRIA, OFL_GASTOS_OPERACION_COLPATRIA, 
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
							'$ofl_fecha',
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
							echo('There was an error running the query [' . $mysqli->error . '].</br>');
							}
							$ofl_i++;
						}
					
						echo "Insert Otros Flujos </br>";								
					
					
					
					
					
					echo "FIN -----";
					  
					  
					}
				}
			}			
		}			
					########## FUNCION CONVERSION DE FECHAS ################
					function cambiarFecha($fecha)
						{
							list($mes,$anio) = explode("-",$fecha);

						

    						switch ($mes) {
    							case 'Jan':
    							    $fechaF = "01-01-".$anio;
    								return $fechaF;
    								break;
    							case 'Feb':
    								$fechaF = "01-02-".$anio;
    								return $fechaF;
    								break;
    							case 'Mar':
    								$fechaF = "01-03-".$anio;
    								return $fechaF;
    								break;
    							case 'Apr':
    								$fechaF = "01-04-".$anio;
    								return $fechaF;
    								break;
    							case 'May':
    								$fechaF = "01-05-".$anio;
    								return $fechaF;
    								break;
    							case 'Jun':
    								$fechaF = "01-06-".$anio;
    								return $fechaF;
    								break;
    							case 'Jul':
    								$fechaF = "01-07-".$anio;
    								return $fechaF;
    								break;
    							case 'Aug':
    								$fechaF = "01-08-".$anio;
    								return $fechaF;
    								break;
    							case 'Sep':
    								$fechaF = "01-09-".$anio;
    								return $fechaF;
    								break;
    							case 'Oct':
    								$fechaF = "01-10-".$anio;
    								return $fechaF;
    								break;
    							case 'Nov':
    								$fechaF = "01-11-".$anio;
    								return $fechaF;
    								break;
    							case 'Dec':
    								$fechaF = "01-12-".$anio;
    								return $fechaF;
    								break;
    							default:
    								$fechaF = "FECHA INVALIDA";
    								return $fechaF;
    								break;
    						}

						}
				########## FIN -- FUNCION CONVERSION DE FECHAS -- FIN ################
					
				
						
				?>	
	



</div>

</div>	

</div>
		

</body>
</html>






