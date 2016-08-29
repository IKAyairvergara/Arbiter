<?php
		include "../modelo/modelo.php";
		$objModelo=new Modelo();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrar datos marcados con checkbox PHP</title>
</head>
<body>
    <form method="post"  action="../control/controlador.php">
    	<div style="text-align:center;">
        <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif">
        	<b><i>Borrar datos marcados con checkbox PHP</i></b>
        </font>
        <br />
        <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">
        	<a href="http://codigoweblibre.tk" target="_blank">http://codigoweblibre.tk</a>
        </font>
     <hr>
    <table align="center">
    	<tr>
        	<th>Ingrese un dato</th>
            <td><input type="text" name="Nombre" id="Nombre" value=""/></td>              
        </tr>    
    	<tr>            
            <td><input type="submit" name="guardar" value="Guardar"></td> 
            <td><input type="submit" name="delete" value="Borrar"></td>             	                                               	                         
        </tr>	
    </table>
    <?php
		$objModelo->listar();		
	?>
    </div>
    </form>
</body>
</html>