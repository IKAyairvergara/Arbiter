<?php
 $connect = mysqli_connect("mysql.hostinger.co","u517611460_ika","Colombia2016*");
 include ("PHPExcel/IOFactory.php");
 $html="<table border='1'>";
 $objPHPExcel = PHPExcel_IOFactory::load('example.xls');
 foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
 {
      $highestRow = $worksheet->getHighestRow();
      for ($row=2; $row<=$highestRow; $row++)
      {
           $html.="<tr>";
           $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
           $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
           $sql = "INSERT INTO TB_LOG(LOG_NOMBRE, LOG_ID) VALUES ('".$name."', '".$email."')";
           mysqli_query($connect, $sql);
           $html.= '<td>'.$name.'</td>';
           $html .= '<td>'.$email.'</td>';
           $html .= "</tr>";
      }
 }
 $html .= '</table>';
 echo $html;
 echo '<br />Data Inserted';
 ?>
