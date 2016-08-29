<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
error_reporting(E_STRICT);
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');



/** Include PHPExcel */
require_once '../../PHPExcel/Classes/PHPExcel.php';


//	Change these values to select the Rendering library that you wish to use
//		and its directory location on your server
//$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
$rendererLibrary = 'mPDF5.7';
//$rendererLibrary = 'dompdf';
$rendererLibraryPath = dirname(__FILE__).'/'. $rendererLibrary;


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$i=0;


// Add some data
  while ($i < 10) {

    // Add new sheet
    $objWorkSheet = $objPHPExcel->createSheet($i); //Setting index when creating

    //Write cells
    $objWorkSheet->setCellValue('A1', 'Hello'.$i)
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

    // Rename sheet
    $objWorkSheet->setTitle("$i");

    $i++;
    }



// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');
$objPHPExcel->getActiveSheet()->setShowGridLines(false);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


if (!PHPExcel_Settings::setPdfRenderer(
		$rendererName,
		$rendererLibraryPath
	)) {
	die(
		'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		'<br />' .
		'at the top of this script as appropriate for your directory structure'
	);
}



// Redirect output to a client’s web browser (PDF)
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="1.pdf"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');

$objWriter->writeAllSheets();

$objWriter->save('php://output');
exit;

