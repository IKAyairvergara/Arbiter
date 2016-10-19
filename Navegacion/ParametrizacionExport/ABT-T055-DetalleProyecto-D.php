<?php
    include "../../php/ABT-T000-conexion-U.php";
		
    $consulta = "SELECT `DET_PRO_ID`, `DET_ETAPA`, `DET_SEG_ID`, `DET_PAR_ID` FROM `tb_detalle_proyecto` WHERE 1";
		
	$resultado = $conexion->query($consulta);
	
	
			
	
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../PHPExcel/Classes/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		
		$c=3;
	
	if($resultado->num_rows > 0 ){
		
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1','EXPORT DETALLE PROYECTO')
					->setCellValue('A2','ID DETALLE PROYECTO')
					->setCellValue('B2','ETAPA PROYECTO')
					->setCellValue('C2','ID SEGMENTO')
					->setCellValue('D2','ID PARTICIPACION')
					;
	
			while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0) 
			->setCellValue('A'.$c,   $fila["DET_PRO_ID"])
			->setCellValue('B'.$c,   $fila["DET_ETAPA"])
			->setCellValue('C'.$c,   $fila["DET_SEG_ID"])
			->setCellValue('D'.$c,   $fila["DET_PAR_ID"])
						;
						
			$c=$c+1;
			}

$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setAutoSize(true);   
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(2)->setAutoSize(true);   
	$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(3)->setAutoSize(true);   
			
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('DetalleProyectos');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ExportDetalleProyectos.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T053-parametrizacionExport-D.php';</script>";
	}
?>
				