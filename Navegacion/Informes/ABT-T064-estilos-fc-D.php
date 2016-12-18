<?php
$BStyle = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		)
	);

$colorLetra = array(
	'font'  => array(
		'color' => array('rgb' => '918080'),

		));

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'F2F2F2'))));	





$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'4')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'5:'.$columnas[$c].'86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'81:'.$columnas[$c].'82')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'85:'.$columnas[$c].'86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'91:'.$columnas[$c].'93')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'94:'.$columnas[$c].'96')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'6:'.$columnas[$c].'7')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'9:'.$columnas[$c].'10')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'15:'.$columnas[$c].'16')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'18:'.$columnas[$c].'19')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'21:'.$columnas[$c].'22')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'26:'.$columnas[$c].'27')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'29:'.$columnas[$c].'30')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'32:'.$columnas[$c].'36')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'38:'.$columnas[$c].'41')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'44:'.$columnas[$c].'45')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'47:'.$columnas[$c].'48')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'50:'.$columnas[$c].'53')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'55:'.$columnas[$c].'57')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'64:'.$columnas[$c].'70')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'72:'.$columnas[$c].'74')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'77:'.$columnas[$c].'79')->applyFromArray($colorLetra);


							//Formato Separador con comas
$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3:'.$columnas[$c].'97')
->getNumberFormat()->setFormatCode('#,##0');

$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'3')
->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_MYMINUS);


$objPHPExcel->getActiveSheet()->getStyle($columnas[$c].'2')
->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('B5:B97')
->getNumberFormat()->setFormatCode('#,##0');

$objPHPExcel->getActiveSheet()->getStyle('C5:C97')
->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);   

$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setWidth(16);

				//Bordes
$abc = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_NONE
			)
		)
	);
$objPHPExcel->getDefaultStyle()->applyFromArray($abc);

$BStyle = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		)
	);

$styleArray = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		)
	);

$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('A5:A86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('A81:A82')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('A91:A93')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('A94:A96')->applyFromArray($BStyle);

				//B

$objPHPExcel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('B5:B86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('B81:B82')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('B85:B86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('B91:B93')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('B94:B96')->applyFromArray($BStyle);

				//C

$objPHPExcel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C5:C86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C81:C82')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C85:C86')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C91:C93')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C94:C96')->applyFromArray($BStyle);


$objPHPExcel->getActiveSheet()->getStyle('B88:B89')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('C88:C89')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('D88:D89')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('E88:E89')->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle('F88:F89')->applyFromArray($BStyle);


			//------------


$objPHPExcel->getActiveSheet()->getStyle('A13:'.$columnas[$c].'13')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('A42:'.$columnas[$c].'42')->applyFromArray($styleArray);


$objPHPExcel->getActiveSheet()->getStyle('A59:'.$columnas[$c].'59')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('A60:'.$columnas[$c].'60')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('A80:'.$columnas[$c].'80')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('A97:'.$columnas[$c].'97')->applyFromArray($styleArray);



				//Cambio color Letra
$blanco  = array(
	'font'  => array(
		'color' => array('rgb' => '000000'),

		));





				//--------Blanco

				// $objPHPExcel->getActiveSheet()->getStyle('E2:PXD2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);


$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A13')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);



$objPHPExcel->getActiveSheet()->getStyle('A24')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A42')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A59:A60')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A80:A82')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);


				//-----------Gris

$objPHPExcel->getActiveSheet()->getStyle('A6:A7')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A9:A10')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A15:A16')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A18:A19')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A21:A22')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A26:A27')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A29:A30')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A32:A36')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A38:A41')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A44:A45')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A47:A48')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A50:A53')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A55:A57')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A64:A70')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A72:A74')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('A77:A79')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B6:B7')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B9:B10')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B15:B16')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B18:B19')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B21:B22')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B26:B27')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B29:B30')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B32:B36')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B38:B41')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B44:B45')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B47:B48')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B50:B53')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B55:B57')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B64:B70')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B72:B74')->applyFromArray($colorLetra);

$objPHPExcel->getActiveSheet()->getStyle('B77:B79')->applyFromArray($colorLetra);


					//Cambio Color Celdas
$objPHPExcel->getActiveSheet()->getStyle('B88:F88')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'F2F2F2'))));	

$objPHPExcel->getActiveSheet()->getStyle('B89:F89')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'F2F2F2'))));					

$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '366092'))));			


$objPHPExcel->getActiveSheet()->getStyle('A3:A4')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));	



$objPHPExcel->getActiveSheet()->getStyle('A13')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));	

$objPHPExcel->getActiveSheet()->getStyle('A24')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));			

$objPHPExcel->getActiveSheet()->getStyle('A42')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));		

$objPHPExcel->getActiveSheet()->getStyle('A59:A60')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '366092'))));				


$objPHPExcel->getActiveSheet()->getStyle('A80:A82')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));						

$objPHPExcel->getActiveSheet()->getStyle('A85:A86')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => '4C82B8'))));			


$objPHPExcel->getActiveSheet()->getStyle('B3:B86')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'DCE6F1'))));

$objPHPExcel->getActiveSheet()->getStyle('B91:B97')->applyFromArray(
	array(
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'DCE6F1'))));		



					//Negrilla


$negrilla = array(
	'font' => array(
		'bold' => true
		)
	);

$objPHPExcel->getActiveSheet()->getStyle('A13:'.$columnas[$c].'13')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A24:'.$columnas[$c].'24')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A42:'.$columnas[$c].'42')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A59:'.$columnas[$c].'59')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A60:'.$columnas[$c].'60')->applyFromArray(
	$negrilla);

$objPHPExcel->getActiveSheet()->getStyle('A80:'.$columnas[$c].'80')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A81:'.$columnas[$c].'81')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A82:'.$columnas[$c].'82')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A85:'.$columnas[$c].'85')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A86:'.$columnas[$c].'86')->applyFromArray(
	$negrilla);	



$objPHPExcel->getActiveSheet()->getStyle('A91:'.$columnas[$c].'91')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A92:'.$columnas[$c].'92')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A93:'.$columnas[$c].'93')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A94:'.$columnas[$c].'94')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A95:'.$columnas[$c].'95')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A96:'.$columnas[$c].'96')->applyFromArray(
	$negrilla);	

$objPHPExcel->getActiveSheet()->getStyle('A97:'.$columnas[$c].'97')->applyFromArray(
	$negrilla);	




					//Combinar Celdas
$objPHPExcel->setActiveSheetIndex(0)
->mergeCells('A3:A4');

$objPHPExcel->setActiveSheetIndex(0)
->mergeCells('A1:C1');

$objPHPExcel->setActiveSheetIndex(0)
->mergeCells('B3:B4');


$objPHPExcel->getActiveSheet()->getStyle('C89:G89')
->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);

	$nCols = 500; //set the number of columns

	foreach (range(2, $nCols) as $col) {
		$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(true);                
	}


	PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);	


	?>