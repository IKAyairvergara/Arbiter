<?php


include "../../php/conexion.php";
$PAI_ID = $_GET['PAI_ID'];
$CIU_ID = $_GET['CIU_ID'];
$PRO_ID = $_GET['PRO_ID'];
$PROY_DESCRIPCION = $_GET['PROY_DESCRIPCION'];


echo $PAI_ID;
echo $CIU_ID;
echo $PRO_ID;
echo $PROY_DESCRIPCION;



	if($PAI_ID!="" && $CIU_ID!=""&& $PRO_ID!=""&& $PROY_DESCRIPCION!=""){
		$query = "INSERT INTO tb_proyecto (PRO_ID, PRO_DESCRIPCION, PRO_PAI_ID,PRO_CIU_ID) VALUES ('$PRO_ID', '$PROY_DESCRIPCION','$PAI_ID','$CIU_ID');";
		$result = $mysqli->query($query);
		if($result==false){
			print "<script>alert(\"los datos estan duplicados\");window.location='../AgregarProyectos2.php';</script>";
			}
		else{
			print "<script>alert(\"los datos se enviaron correctamente\");window.location='../../Proyectos/proyectos.php';</script>";
			}
		}

