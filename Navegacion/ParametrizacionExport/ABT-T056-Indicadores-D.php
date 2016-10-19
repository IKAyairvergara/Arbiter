<?php
    include "../../php/ABT-T000-conexion-U.php";
		
    $consulta = "SELECT `IND_ID`, `IND_DESCRIPCION`, `IND_FECHA`, `IND_VALOR` FROM `tb_indicador` WHERE 1";
		
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
					->setCellValue('A1','EXPORT INDICADORES')
					->setCellValue('A2','ID INDICADOR`')
					->setCellValue('B2','DESCRIPCION INDICADOR')
					->setCellValue('C2','FECHA')
					->setCellValue('D2','VALOR')
					;
	
			while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0) 
			->setCellValue('A'.$c,   $fila["IND_ID"])
			->setCellValue('B'.$c,   $fila["IND_DESCRIPCION"])
			->setCellValue('C'.$c,   $fila["IND_FECHA"])
			->setCellValue('D'.$c,   $fila["IND_VALOR"])
						;
						
			$c=$c+1;
			}	
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Indicadores');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		//$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ExportIndicadores.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print "<script>alert(\"No hay resultados para mostrar.\");window.location='ABT-T053-parametrizacionExport-D.php';</script>";
	}
?>
				