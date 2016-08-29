<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrar datos marcados con checkbox PHP</title>
</head>
<body>
    <form method="post"  action="seleccionPrueba.php">
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
                    $mysqli = new mysqli("mysql.hostinger.co", "u517611460_ika", "Colombia2016*", "u517611460_model");

                    /* comprobar la conexión */
                    if (mysqli_connect_errno()) {
                        printf("Falló la conexión: %s\n", mysqli_connect_error());
                        exit();
                    }

                    $consulta = "Select MOD_DET_PRO_ID, MOD_DET_ETAPA, MOD_MODELO FROM TB_MODELOS";

                    if ($resultado = $mysqli->query($consulta)) {

                        /* obtener el array de objetos */
                        echo "<center>";
                        echo "<table border = '1' cellspacing='0' cellpadding='0'>";  
                        echo "<tr align='center'>";  
                        echo "<th>ID";
                        echo "<th>ETAPA";
                        echo "<th>MOD_MODELO";
                        echo "<th>S";
                        echo "</tr>"; 

                        while ($fila = $resultado->fetch_row()) {
                            echo "<tr align='center'>";  
                            echo "<td>$fila[0]";  
                            echo "<td>$fila[1]";
                            echo "<td>$fila[2]";
                            echo "<td>"."<input type='"."checkbox"."' name = '"."proyecto[]"."' value='".$fila[0]."**".$fila[1]."**".$fila[2]."' >"."</td>";
                            #echo "<td>"."<input type='"."checkbox"."' name = '"."proyecto[]"."' value='".$fila[0]."'>"."</td>";
                            echo "</tr>";   
                        }
                        echo "</table>";
                        echo "</center>";  
                        echo "</form>";

                        ###echo "<td>". "<button value='".$fila[0]."'>"."Archivo Excel"."</button>"."<td>";
                        /* liberar el conjunto de resultados */
                        $resultado->close();
                    }

                ?>

    </div>
    </form>
</body>3
</html>