<html>
<head>
<title>Agregar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
  #p{ position:absolute; left:821px; top:32px; width:167px; height:76px;cursor: pointer;}
   #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
 #p1{position:absolute; left:599px; top:32px; width:179px; height:76px;cursor: pointer;}
  #p1:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
#ok:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(agregar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(agregar_02.png); position:absolute; left:0px; top:32px; width:599px; height:126px;" title="">
	</div>
	<div id="p1" onClick="location.href='../Proyectos/proyectos.php';" style="background-image:url(agregar_03.png); " title="">
	</div>
	<div style="background-image:url(agregar_04.png); position:absolute; left:778px; top:32px; width:43px; height:126px;" title="">
	</div>
	<div id="p" onClick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(agregar_05.png);" title="">
	</div>
	<div style="background-image:url(agregar_06.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(agregar_07.png); position:absolute; left:599px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_08.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(agregar_09.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_10.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
	<br>
	<br>
	<center>
    <?php 
session_start();
mysql_connect("mysql.hostinger.co","u517611460_ika","Colombia2016*") or die("No se puede conectar");
mysql_select_db("u517611460_model") or die ("No se ha podido seleccionar la Base de Datos");
//Recuperacion de las variables convertidas en sesiones

$PAI_ID=$_SESSION['PAI_ID2']=@$_REQUEST['PAI_ID']; 
$str = $PAI_ID;
$PAI_ID =explode('|', $str, 2);

$CIUD_ID=$_SESSION['CIUD_ID2']=@$_REQUEST['CIUD_ID'];
$str = $CIUD_ID;
$CIUD_ID =explode('|', $str, 2);

$PRO_ID=$_SESSION['PRO_ID']=$_GET['PRO_ID'];

$PROY_DESCRIPCION=$_SESSION['PROY_DESCRIPCION']=$_GET['PROY_DESCRIPCION']; 



?>

<form  name="form1" id="form1">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2"> 
                       <tr>
                       <td style="color: white; font-family:sans-serif;font-size:20;"> Pa&#237;s</td>
                       <td style="color: white; font-family:sans-serif;font-size:20;">
                       		<?php 
//QUERY COMBO 1
$query="select * from TB_PAIS"; 
$res=mysql_query($query);
?>

<select name="PAI_ID" onChange="this.form.submit()" >
	<?php if($PAI_ID[0]!=''){	?> 
    <option value="<?php echo $PAI_ID[0]."|".$PAI_ID[1]; ?>"><?php echo $PAI_ID[1]; ?></option>
	<?php 	} else { ?>
    <option > Elige</option><?php }?>
	<?php while($row=mysql_fetch_array($res))
    {?>
	<option value="<?php echo $row['PAI_ID']."|".$row['PAI_DESCRIPCION']?>"> <?php echo htmlentities($row['PAI_DESCRIPCION']);?></option>
	<?php 
	} 
	?>
</select>

</td>
</tr>
<tr>
<td style="color: white; font-family:sans-serif;font-size:20;"> Ciudad:</td>
<td style="color: white; font-family:sans-serif;font-size:20;">                        
<?php 
//QUERY COMBO 2
$query2="select * from TB_CIUDAD WHERE CIU_PAI_ID='$PAI_ID[0]'"; 
$res2=mysql_query($query2);
?>

<select name="CIUD_ID"  onchange="this.form.submit()">
     <?php if($CIUD_ID[0]!=''){	?> 
    <option value="<?php echo $CIUD_ID[0]."|".$CIUD_ID[1]; ?>"><?php echo $CIUD_ID[1]; ?></option><?php 	} else { ?>
    <option > Elige</option><?php }?>
        <?php while($row2=mysql_fetch_array($res2))
        {
		?>
        <option value="<?php echo $row2['CIU_ID']."|".$row2['CIU_DESCRIPCION']?>"><?php echo htmlentities($row2['CIU_DESCRIPCION']);//revisar si es columna do db?></option> 
        <?php 
		} 
    
		?>
</select>
                          </td>
                            </tr>
                            <tr>
	  	<td style="color: white; font-family:sans-serif;font-size:20;">Código de Proyecto:</td>
	    <td><label for="CIUD_ID"></label> <input type="text" name="PRO_ID" id="PRO_ID" maxlength="4" onKeyUp="javascript:this.value=this.value.toUpperCase();"  value=""<?php echo $PRO_ID;?>></td>
	  </tr>
	  <tr>
	    <td style="color: white; font-family:sans-serif;font-size:20;">Descripción de Proyecto:</td>
	    <td><label for="PROY_DESCRIPCION"></label> <input type="text" name="PROY_DESCRIPCION" id="PROY_DESCRIPCION" maxlength="30" onKeyUp="javascript:this.value=this.value.toUpperCase();" onBlur="this.form.submit()" value=""<?php  echo $PROY_DESCRIPCION;?>></td>
	  </tr> 
                       <tr>
                       <td style="color: white; font-family:sans-serif;font-size:20;"> Pa&#237;s</td>
                       <td style="color: white; font-family:sans-serif;font-size:20;">
                            <tr>
                            <td>
                            
                            </td>
                            </tr>
                            </table>
                            </form>
                            

                                                           
                            </p>
                            
                            <a href="AgregarProyectos3.php/?PAI_ID=<?php echo $PAI_ID[0]?>&CIU_ID=<?php echo $CIUD_ID[0]?>&PRO_ID=<?php echo $PRO_ID; ?>&PROY_DESCRIPCION=<?php echo $PROY_DESCRIPCION ?>">
                            <input type="image" src='agregar_14.png' name="enviar" id="enviar" value="Enviar" style="position:absolute; left:14px; top:513px; width:208px; height:76px;" />
                            </a>

	<div style="background-image:url(agregar_11.png); position:absolute; left:990px; top:158px; width:34px; height:610px;" title="">
	</div>
	<div style="background-image:url(agregar_12.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(agregar_13.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(agregar_14.png); position:absolute; left:49px; top:671px; width:209px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(agregar_15.png); position:absolute; left:258px; top:671px; width:732px; height:97px;" title="">
	</div>
	<div style="background-image:url(agregar_16.png); position:absolute; left:49px; top:747px; width:209px; height:21px;" title="">
	</div>
</div>
</body>
</html>