
	


<!-- saved from url=(0105)file:///C:/Users/MainNode/AppData/Local/Temp/Save%20For%20Web%20AI/importExport_011.tmp/importExport.html -->
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
		border: 0 none;
		position:absolute;
	    left:359px; top:473px; width:306px; height:62px;		
		background-image:url(importExport_18.png);
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
		 background-image:url(importExport_14.png); position:absolute; left:381px; top:376px; width:263px; height:53px;
	 
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
	 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:769px;">
	<div style="background-image:url(importExport_01.png); position:absolute; left:0px; top:0px; width:1024px; height:41px;" title="">
	</div>
	<div style="background-image:url(importExport_02.png); position:absolute; left:0px; top:41px; width:639px; height:235px;" title="">
	</div>
	<div id="p" onclick="location.href='../ParametrizacionInicial/ABT-T050-parametrizacionInicial-D.php';" style="background-image:url(importExport_03.png); position:absolute; left:639px; top:41px; width:162px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_04.png); position:absolute; left:801px; top:41px; width:32px; height:727px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(importExport_05.png); position:absolute; left:833px; top:41px; width:154px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_06.png); position:absolute; left:987px; top:41px; width:37px; height:727px;" title="">
	</div>
	<div style="background-image:url(importExport_07.png); position:absolute; left:639px; top:117px; width:162px; height:159px;" title="">
	</div>
	<div style="background-image:url(importExport_08.png); position:absolute; left:833px; top:117px; width:154px; height:651px;" title="">
	</div>
	<div style="background-image:url(importExport_09.png); position:absolute; left:0px; top:276px; width:298px; height:492px;" title="">
	</div>
	<div style="background-image:url(importExport_10.png); position:absolute; left:298px; top:276px; width:428px; height:39px;" title="">
	</div>
	<div style="background-image:url(importExport_11.png); position:absolute; left:726px; top:276px; width:75px; height:492px;" title="">
	</div>
	<div style="background-image:url(importExport_12.png); position:absolute; left:298px; top:315px; width:428px; height:61px;" title="">
	</div>
	<div style="background-image:url(importExport_13.png); position:absolute; left:298px; top:376px; width:83px; height:97px;" title="">
	</div>
	<div style="background-image:url(importExport_14.png); position:absolute; left:381px; top:376px; width:263px; height:53px;" title="">
	</div>
	<div style="background-image:url(importExport_15.png); position:absolute; left:644px; top:376px; width:82px; height:97px;" title="">
	</div>
	<div style="background-image:url(importExport_16.png); position:absolute; left:381px; top:429px; width:263px; height:44px;" title="">
	</div>
	<div style="background-image:url(importExport_17.png); position:absolute; left:298px; top:473px; width:61px; height:295px;" title="">
	</div>
	
	<div style="background-image:url(importExport_19.png); position:absolute; left:665px; top:473px; width:61px; height:295px;" title="">
	</div>
	<div style="background-image:url(importExport_20.png); position:absolute; left:359px; top:535px; width:306px; height:233px;" title="">
	</div>
	<form action="" method="post" enctype="multipart/form-data" name="form1">
	<div style="background-image:url(importExport_10.png); position:absolute; left:298px; top:276px; width:428px; height:39px;" title="">
	
	 <select name="INF_ID" style="left:107px; top:235px; width:428px; height:39px; font-size:20px ; font-family: verdana">
		  <option value="">Seleccione parametrizacion a importar</option>
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
	
			<div class="cargar">
				
			</div>
			<input type="file" name="archivo" id="archivo">
			
		<ul>

				

				<input type="submit" name="button" class="btn" id="button" value="";>	
			</form>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$sel=$_POST['INF_ID'];
				//subir la imagen del articulo
				$nameEXCEL = $_FILES['archivo']['name'];
				
				
				list($c,$d)= explode(".",$nameEXCEL);
			
				
				$tmpEXCEL = $_FILES['archivo']['tmp_name'];
				$extEXCEL = pathinfo($nameEXCEL);
				$urlnueva = "../../xls/55CN-001-CTRL_09.xls";

				$error_insert=0;
			
				
				if($d=="xlsx"){		
				//verificacion si se ha subido un archivo
				if(is_uploaded_file($tmpEXCEL)){
							copy($tmpEXCEL,$urlnueva);	
							
							
				
							require_once '../../PHPExcel/Classes/PHPExcel/IOFactory.php';
							
							
							
							$objPHPExcel = PHPExcel_IOFactory::load('../../xls/55CN-001-CTRL_09.xls');
							
							include "../../php/ABT-T000-conexion-U.php";	
								
								$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
								
								$ch=3;
								$error='';
	
								
    							if($sel== '1'){
    							    //---Paises
									
									
									$PAI_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PAI_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									
								while ($PAI_ID_CHECK!=null&&$PAI_DES_CHECK!=null) {
									
									$PAI_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PAI_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
								
								if ($PAI_ID_CHECK!=null&&$PAI_DES_CHECK!=null) {
									
								$insert_pai="INSERT INTO `tb_pais`(`PAI_ID`, `PAI_DESCRIPCION`) VALUES ('$PAI_ID_CHECK','$PAI_DES_CHECK')";
								
								if(!$resultado_pai= $mysqli -> query($insert_pai)){
									 $error=' ' . $mysqli->error;
									 
									
									 $insert_pai_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_pais","'.$error.'","NOW()")';
									 $resultado_pai_e= $mysqli -> query($insert_pai_error);
									
								}
								}
								
								
								
								else{
									
								if($PAI_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($PAI_DES_CHECK==null){
									$error='No DESC';
									
								}
								  $insert_pai_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_pais","$error","NOW()")';
										
									$resultado_pai_e= $mysqli -> query($insert_pai_error);
									
								}
								
								$ch++;
								}
								
								}	
    								
    							if($sel== '2'){
    								 //---Ciudades
									 
    								
									$CUI_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$CUI_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$CUI_PAI_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									
								while ($CUI_ID_CHECK!=null&&$CUI_DES_CHECK!=null&&$CUI_PAI_CHECK!=null) {
									
									$CUI_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$CUI_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$CUI_PAI_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									
								if ($CUI_ID_CHECK!=null&&$CUI_DES_CHECK!=null&&$CUI_PAI_CHECK!=null) {
									
								$insert_cui="INSERT INTO `tb_ciudad`(`CIU_ID`, `CIU_DESCRIPCION`, `CIU_PAI_ID`) VALUES ('$CUI_ID_CHECK','$CUI_DES_CHECK','$CUI_PAI_CHECK')";
								
								if(!$resultado_pai= $mysqli -> query($insert_cui)){
									$error=' ' . $mysqli->error;
									
									$insert_ciu_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_ciudad","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_ciu_error);
									 
									}
								
								}
								
								else{
									
								if($CUI_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($CUI_DES_CHECK==null){
									$error='No DESC';
									
								}
								else if($CUI_PAI_CHECK==null){
									$error='No ID Pais';
									
								}
								$insert_ciu_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_ciudad","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_ciu_error);
									
								}
								
								$ch++;
								}
								
								}	
								
    							if($sel== '3'){
    								 //---Segmentos
    								
									
									$SEG_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$SEG_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									
								while ($SEG_ID_CHECK!=null&&$SEG_DES_CHECK!=null) {
									
									$SEG_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$SEG_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
								
								if ($PAI_ID_CHECK!=null&&$SEG_DES_CHECK!=null) {
									
								$insert_seg="INSERT INTO `tb_segmento`(`SEG_ID`, `SEG_DESCRIPCION`) VALUES  ('$SEG_ID_CHECK','$SEG_DES_CHECK')";
								
								if(!$resultado_pai= $mysqli -> query($insert_seg)){
									 $error=$mysqli->error;
									 
									 $insert_seg_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_segmento","'.$error.'","NOW()")';
									
									 $resultado_seg_e= $mysqli -> query($insert_seg_error);
									 
									}
								
								}
								
								
								
								else{
									
								if($SEG_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($SEG_DES_CHECK==null){
									$error='No DESC';
									
								}
								 $insert_seg_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_segmento","'.$error.'","NOW()")';
									
									$resultado_seg_e= $mysqli -> query($insert_seg_error);
									
								}
								
								$ch++;
								}
								
								}
								
								
    							if($sel== '4'){
    								 //---Tipo Participacion
									
									
									$PAR_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PAR_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									
								while ($PAR_ID_CHECK!=null&&$PAR_DES_CHECK!=null) {
									
									$PAR_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PAR_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
								
								if ($PAR_ID_CHECK!=null&&$SEG_DES_CHECK!=null) {
									
								$insert_par="INSERT INTO `tb_participacion`(`PAR_ID`, `PAR_DESCRIPCION`) VALUES  ('$PAR_ID_CHECK','$PAR_DES_CHECK')";
								
								if(!$resultado_pai= $mysqli -> query($insert_par)){
									 $error=$mysqli->error;
									 
									  $insert_par_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_participacion","'.$error.'","NOW()")';
									
									 
									 $resultado_par_e= $mysqli -> query($insert_par_error);
									 
									}
								
								}
								
								
								
								else{
									
								if($PAR_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($PAR_DES_CHECK==null){
									$error='No DESC';
									
								}
								 $insert_par_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_participacion","'.$error.'","NOW()")';
									
									$resultado_par_e= $mysqli -> query($insert_par_error);
									
								}
								
								$ch++;
								}
								
								} 
								
    							if($sel== '5'){
    								 //---Proyectos
									 
									 
									
									$PRO_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PRO_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$PRO_PAI_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$PRO_CIU_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
									
								while ($PRO_ID_CHECK!=null&&$PRO_DES_CHECK!=null&&$PRO_PAI_ID!=null&&$PRO_CIU_ID!=null) {
									
									$PRO_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$PRO_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$PRO_PAI_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$PRO_CIU_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
								
								if ($PRO_ID_CHECK!=null&&$PRO_DES_CHECK!=null&&$PRO_PAI_ID!=null&&$PRO_CIU_ID!=null) {
									
								$insert_pro="INSERT INTO `tb_proyecto`(`PRO_ID`, `PRO_DESCRIPCION`, `PRO_PAI_ID`, `PRO_CIU_ID`) VALUES('$PRO_ID_CHECK','$PRO_DES_CHECK','$PRO_PAI_ID','$PRO_CIU_ID')";
								
								if(!$resultado_pai= $mysqli -> query($insert_pro)){
									 $error=$mysqli->error;
									 
									  $insert_pro_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_proyecto","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_pro_error);
									 
									}
								
								}
								
								else{
									
								if($PRO_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($PRO_DES_CHECK==null){
									$error='No DESC';
									
								}
								else if($PRO_PAI_ID==null){
									$error='No ID Pais';
									
								}
								else if($PRO_CIU_ID==null){
									$error='No ID Ciudad';
									
								}
								
								 $insert_pro_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_proyecto","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_pro_error);
									
								}
								
								$ch++;
								}
								
								}	
									 
    							
    							if($sel== '6'){
								
    							 //---Detalle Proyectos.
								
									
									$DES_PRO_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$DES_PRO_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$DES_PRO_SEG_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$DES_PRO_PAR_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
									
								while ($DES_PRO_ID_CHECK!=null&&$DES_PRO_DES_CHECK!=null&&$DES_PRO_SEG_ID!=null&&$DES_PRO_PAR_ID!=null) {
									
									$DES_PRO_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$DES_PRO_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$DES_PRO_SEG_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$DES_PRO_PAR_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
									
								if ($PRO_ID_CHECK!=null&&$PRO_DES_CHECK!=null&&$PRO_PAI_ID!=null&&$PRO_CIU_ID!=null) {
									
								$insert_det_pro="INSERT INTO `tb_detalle_proyecto`(`DET_PRO_ID`, `DET_ETAPA`, `DET_SEG_ID`, `DET_PAR_ID`) VALUES ('$DES_PRO_ID_CHECK','$DES_PRO_DES_CHECK','$DES_PRO_SEG_ID','$DES_PRO_PAR_ID')";
								
								if(!$resultado_pai= $mysqli -> query($insert_det_pro)){
									 $error=$mysqli->error;
									  $insert_det_pro_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_detalle_proyecto","'.$error.'","NOW()")';
									
									 
									 $resultado_cui_e= $mysqli -> query($insert_det_pro_error);
									 
									}
								
								}
								
								else{
									
								if($DES_PRO_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($DES_PRO_DES_CHECK==null){
									$error='No DESC';
									
								}
								else if($DES_PRO_SEG_ID==null){
									$error='No ID Segmento';
									
								}
								else if($DES_PRO_PAR_ID==null){
									$error='No ID Participacion';
									
								}
								  $insert_det_pro_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_detalle_proyecto","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_det_pro_error);
									
								}
								
								$ch++;
								}
								
								}		 
									 
    								
    							if($sel== '7'){
    								 //---Indicadores
								 	
									$IND_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$IND_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$IND_SEG_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$IND_PAR_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
									
								while ($IND_ID_CHECK!=null&&$IND_DES_CHECK!=null&&$IND_SEG_ID!=null&&$IND_PAR_ID!=null) {
									
									$IND_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$IND_DES_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									$IND_SEG_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $ch)->getValue();	
									$IND_PAR_ID = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $ch)->getValue();	
								
								if ($PRO_ID_CHECK!=null&&$PRO_DES_CHECK!=null&&$PRO_PAI_ID!=null&&$PRO_CIU_ID!=null) {
									
								$insert_ind="INSERT INTO `tb_indicador`(`IND_ID`, `IND_DESCRIPCION`, `IND_FECHA`, `IND_VALOR`) VALUES('$IND_ID_CHECK','$IND_DES_CHECK','$IND_SEG_ID','$IND_PAR_ID')";
								
								if(!$resultado_pai= $mysqli -> query($insert_cui)){
									 $error=$mysqli->error;
									   $insert_ind_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_indicador","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_ind_error);
									 
									}
								
								}
								
								else{
									
								if($IND_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($IND_DES_CHECK==null){
									$error='No DESC';
									
								}
								else if($IND_SEG_ID==null){
									$error='No ID Segmento';
									
								}
								else if($IND_PAR_ID==null){
									$error='No ID Participacion';
									
								}
								 $insert_ind_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_indicador","'.$error.'","NOW()")';
									
									 $resultado_cui_e= $mysqli -> query($insert_ind_error);
									
								}
								
								$ch++;
								}
								
								}
								
								
    							if($sel== '8'){
									//---Servidores
									$insert_ser_error="INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ('tb_servidor','$error','NOW()')";
									
									
									$SER_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$SER_RUTA_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
									
								while ($SER_ID_CHECK!=null&&$SER_RUTA_CHECK!=null) {
									
									$SER_ID_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $ch)->getValue();	
									$SER_RUTA_CHECK = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $ch)->getValue();	
								
								if ($SER_ID_CHECK!=null&&$SER_RUTA_CHECK!=null) {
									
								$insert_ser="INSERT INTO `tb_servidor`(`SER_PAI_CODIGO`, `SER_RUTA`) VALUES ('$SER_ID_CHECK','$SER_RUTA_CHECK')";
								
								if(!$resultado_pai= $mysqli -> query($insert_ser)){
									
									 $insert_ser_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_servidor","'.$error.'","NOW()")';
									
									 $error=$mysqli->error;
									 
									 $resultado_pai_e= $mysqli -> query($insert_ser_error);
									 
									}
								
								}
								
								
								
								else{
									
								if($SER_ID_CHECK==null){
									$error='No ID';
									
								}
								else if($SER_RUTA_CHECK==null){
									$error='No Ruta';
									
								}
								$insert_ser_error='INSERT INTO `tb_log`(`LOG_TABLA`, `LOG_ERROR`, `LOG_FECHA`) VALUES ("tb_servidor","'.$error.'","NOW()")';
									
									$resultado_pai_e= $mysqli -> query($insert_ser_error);
									
								}
								
								$ch++;
								}
								
								}	
    							
								
								
								echo '<script type="text/javascript">alert("Se ha subido satisfactoriamente los datos");</script>';
								}
				}
				else{
					echo '<script type="text/javascript">alert("Error en el tipo de archivo");</script>';
				}	
				
				}
				
		
		
		

				?>	
	
	
</div>
</body>
</html>