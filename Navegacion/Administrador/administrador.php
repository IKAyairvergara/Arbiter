
<!-- 
=======================================================================================================================
==> TITULO DE ARCHIVO: administrador.php

==> DESCRIPCION: Panel principal del módulo de administrador para visualizacion de usuarios existentes en el sistema

==> FECHA: Septiembre de 2016

==> AUTOR: IKA CONSULTORES

==> PROYECTO: ARBITER 

==> TECNOLOGÍA USADA: PHP 7.0 - HTML5 - CSS - JavaScript - SQL 

=======================================================================================================================
-->

<!-- saved from url=(0099)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/usuariosActivos/usuariosActivos.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Usuarios Activos</title>

</head>
<link href="../../bootstrap/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../../bootstrap/js/tablecloth.js"></script>
<link rel="shortcut icon" href="favicon.png">

	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }
	#p1{position:absolute; left:48px; top:660px; width:76px; height:76px;cursor: pointer;}
	#p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p2{position:absolute; left:198px; top:661px; width:76px; height:76px;cursor: pointer;}
	#p2:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p3{position:absolute; left:355px; top:660px; width:76px; height:76px;cursor: pointer;}
	#p3:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}
	#p4{position:absolute; left:691px; top:29px; width:271px; height:76px;cursor: pointer;}
	#p4:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
	}


	 </style>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(usuariosActivos_01.png); position:absolute; left:0px; top:0px; width:1024px; height:31px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_02.png); position:absolute; left:0px; top:31px; width:638px; height:116px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_04.png); position:absolute; left:800px; top:31px; width:32px; height:116px;" title="">
	</div>
	<div id="p4" style="background-image:url(usuariosActivos_05.png);" onclick="location.href='../../index.php';" title="">
	</div>
	<div style="background-image:url(usuariosActivos_06.png); position:absolute; left:987px; top:31px; width:37px; height:116px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_07.png); position:absolute; left:638px; top:107px; width:162px; height:40px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_08.png); position:absolute; left:832px; top:107px; width:155px; height:40px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_09.png); position:absolute; left:0px; top:147px; width:36px; height:621px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_10.png); position:absolute; left:36px; top:147px; width:952px; height:494px; overflow:scroll;" title="">
		<?php
    
      #Llamar Archivo de Conexión
      include "../../php/conexion.php";
     
      #Consulta a la tabla de usuarios del sistema
      $query = "SELECT fullname, username, email, password, created_at  FROM user";

      #Crear tabla dinámica para mostrar los datos en estructura table html
      if ($resultado = $mysqli->query($query)) {

          /* obtener el array de objetos */
          echo "<center>";
          echo "<table border = '1' cellspacing='0' cellpadding='0' >";  
          echo "<tr align='center'>";  
          echo "<th>Nombre Completo";  
          echo "<th>Usuario";
          echo "<th>Email";   
          echo "<th>Contraseña"; 
          echo "<th>Fecha Creacion";
          echo "</tr>"; 

          while ($fila = $resultado->fetch_row()) {
             
            echo "<tr align='center'>";  
            echo "<td>$fila[0]";  
            echo "<td>$fila[1]";
            echo "<td>$fila[2]";
            echo "<td>$fila[3]";
            echo "<td>$fila[4]";
            echo "</tr>";
          }
          echo "</table>";
          echo "</center>";  

          /* liberar el conjunto de resultados */
          $resultado->close();
      }

      /* cerrar la conexión */
      $mysqli->close();
    ?>
	</div>
	<div style="background-image:url(usuariosActivos_11.png); position:absolute; left:988px; top:147px; width:36px; height:621px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_12.png); position:absolute; left:36px; top:641px; width:952px; height:19px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_13.png); position:absolute; left:36px; top:660px; width:12px; height:108px;" title="">
	</div>
	<div id="p1" style="background-image:url(usuariosActivos_14.png);" onclick="location.href='../AgregarUsuario/crearUsuario.php';"  title="">
			
	</div>
	<div style="background-image:url(usuariosActivos_15.png); position:absolute; left:124px; top:660px; width:231px; height:1px;" title="">
	</div>
	<div id="p3" style="background-image:url(usuariosActivos_16.png); " onclick="location.href='../EditarUsuario/editarUsuario.php';" title="">
	
	</div>
	<div style="background-image:url(usuariosActivos_17.png); position:absolute; left:431px; top:660px; width:557px; height:108px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_18.png); position:absolute; left:124px; top:661px; width:74px; height:107px;" title="">
	</div>
	<div id="p2" style="background-image:url(usuariosActivos_19.png); " onclick="location.href='../EliminarUsuario/eliminarUsuario.php';" title="">
	


	</div>
	<div style="background-image:url(usuariosActivos_20.png); position:absolute; left:274px; top:661px; width:81px; height:107px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_21.png); position:absolute; left:48px; top:736px; width:76px; height:32px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_22.png); position:absolute; left:355px; top:736px; width:76px; height:32px;" title="">
	</div>
	<div style="background-image:url(usuariosActivos_23.png); position:absolute; left:198px; top:737px; width:76px; height:31px;" title="">
	</div>
</div>
</body></html>