
<!-- saved from url=(0105)file:///C:/Users/MainNode/AppData/Local/Temp/Save%20For%20Web%20AI/importExport_012.tmp/importExport.html -->
<?php 
    //creamos la sesion 
session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
if(!isset($_SESSION['user_id']))  
{ 
	header('Location: ../../index.php');  
	exit(); 
}  
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Editar</title>

</head>
<link rel="shortcut icon" href="favicon.png">

<script>

  function validarPasswd(){

    var p1 = document.getElementById("password").value;
    var p2 = document.getElementById("confirm_password").value;

    if (p1 != p2) 
    {
      alert("Las contraseñas deben coincidir");
      return false;
    } else {
      //alert("Todo esta correcto");
      return true; 
    }
  }

  function checkForm(form){

    if(form.username.value == "") {
      alert("Error: El nombre de usuario no puede estar vacio !");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
   

    if(form.password.value != "" && form.password.value == form.confirm_password.value) {
      if(form.password.value.length < 6) {
        alert("Error: La contraseña debe contener minimo 6 caracteres!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: La contraseña debe ser diferente del nombre de usuario!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: La contraseña debe contenter minimo uno numero (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: La contraseña debe contener minimo una letra en minuscula (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: La contraseña debe contener minimo una letra en mayuscula (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Las contraseñas no coinciden!");
      form.password.focus();
      return false;
    }

    alert("Su contraseña es: " + form.password.value);
    return true;
  }

  </script>
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }
</style>
<style type="text/css">
body
 {
     background-image: url(blue.jpg);
     background-size: 100% 300%;
     background-repeat: no-repeat;
 }

	  #p:hover
{
	opacity: 1.0;
	filter: alpha(opacity=100);
	transform: scale(1.12);
	transition-duration: 0.4s;
}
</style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:769px;">
	<div style="background-image:url(importExport_01.png); position:absolute; left:0px; top:0px; width:1024px; height:33px;" title="">
	</div>
	<div style="background-image:url(importExport_02.png); position:absolute; left:0px; top:33px; width:642px; height:217px;" title="">
	</div>
	<div id="p" onclick="location.href='../Administrador/ABT-T001-administrador-D.php';" style="background-image:url(importExport_03.png); position:absolute; left:642px; top:33px; width:162px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_04.png); position:absolute; left:804px; top:33px; width:32px; height:735px;" title="">
	</div>
	<div  id="p" onclick="location.href='../Administrador/ABT-T001-administrador-D.php';" style="background-image:url(importExport_05.png); position:absolute; left:836px; top:33px; width:154px; height:76px;" title="">
	</div>
	<div style="background-image:url(importExport_06.png); position:absolute; left:990px; top:33px; width:34px; height:735px;" title="">
	</div>
	<div style="background-image:url(importExport_07.png); position:absolute; left:642px; top:109px; width:162px; height:141px;" title="">
	</div>
	<div style="background-image:url(importExport_08.png); position:absolute; left:836px; top:109px; width:154px; height:659px;" title="">
	</div>
	<div style="background-image:url(importExport_09.png); position:absolute; left:0px; top:250px; width:468px; height:100px;" title="">
	</div>
	<form role="form" name="registro" onSubmit="return checkForm(this)" action="ABT-T028-editarUsuario-U.php" method="post">
        
	<div style="background-image:url(importExport_10.png); position:absolute; left:468px; top:250px; width:330px; height:36px;" title="">
	
	<select style="position:absolute;width:330px;   height:36px;" name='username' id='username' required>
        		<?php
				    include "../../php/ABT-T000-conexion-U.php";
				    $qr ="SELECT * FROM user"; 
				        $i = 0;
				            if ($resultado = $mysqli->query($qr)) {
				                 while ($fila = $resultado->fetch_row()) {
				                    echo "<option value='" .$fila[2]."''>";
				                     echo $fila[2];  
				                     echo "</option>";
				                }
				            }
				   $mysqli->close();
				 ?>	  
        		</select>
	
	</div>
	<div style="background-image:url(importExport_11.png); position:absolute; left:798px; top:250px; width:6px; height:518px;" title="">
	</div>
	<div style="background-image:url(importExport_12.png); position:absolute; left:468px; top:286px; width:330px; height:14px;" title="">
	</div>
	<div style="background-image:url(importExport_13.png); position:absolute; left:468px; top:300px; width:330px; height:37px;" title="">
	 <input style="position:absolute;width:330px;  height:36px;" type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" required="">
         
	</div>
	<div style="background-image:url(importExport_14.png); position:absolute; left:468px; top:337px; width:330px; height:13px;" title="">
	</div>
	<div style="background-image:url(importExport_15.png); position:absolute; left:0px; top:350px; width:467px; height:309px;" title="">
	</div>
	<div style="background-image:url(importExport_16.png); position:absolute; left:467px; top:350px; width:330px; height:37px;" title="">
	  <input style="position:absolute;width:330px; height:36px;" type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required="">
    </div>
	<div style="background-image:url(importExport_17.png); position:absolute; left:797px; top:350px; width:1px; height:418px;" title="">
	</div>
	<div style="background-image:url(importExport_18.png); position:absolute; left:467px; top:387px; width:330px; height:17px;" title="">
	</div>
	<div style="background-image:url(importExport_19.png); position:absolute; left:467px; top:404px; width:330px; height:36px;" title="">
	  <input style="position:absolute;width:330px; height:36px;" type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required="">
    </div>
	<div style="background-image:url(importExport_20.png); position:absolute; left:467px; top:440px; width:330px; height:13px;" title="">
	</div>
	<div style="background-image:url(importExport_21.png); position:absolute; left:467px; top:453px; width:330px; height:37px;" title="">
	 <input style="position:absolute;width:330px; height:36px;" type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" required="">
   </div>
	<div style="background-image:url(importExport_22.png); position:absolute; left:467px; top:490px; width:330px; height:278px;" title="">
	 </div>
	<div style="background-image:url(importExport_23.png); position:absolute; left:0px; top:659px; width:79px; height:109px;" title="">
	</div>
	<div style=" position:absolute; left:79px; top:659px; width:227px; height:76px;" title="">
	 <input id="p2" type="image" src='importExport_24.png' name="aceptar"  value="aceptar"/>
	</div>
	
	 </form>
	 
	 
	<div style="background-image:url(importExport_25.png); position:absolute; left:306px; top:659px; width:161px; height:109px;" title="">
	</div>
	<div style="background-image:url(importExport_26.png); position:absolute; left:79px; top:735px; width:227px; height:33px;" title="">
	</div>
</div>

 <?php
  include "../../php/ABT-T000-conexion-U.php";
				  
	


	//$update = "UPDATE tb_ciudad SET CIU_DESCRIPCION = '$SEG_DESCRIPCION', CIU_PAI_ID = '$CIUD_PAISES' WHERE CIU_ID = '$CIU_ID'";
	if(isset($_POST['username'])){
    $Usuario=$_POST['username'];
  $Nombre= $_POST['fullname'];
  $Correo=$_POST['email'];
  $Contrasenia=$_POST['password']; 
  $rol=$_POST['rol'];

    
		$update = "update user set fullname ='$Nombre' , email = '$Correo', password = '$Contrasenia', rol = '$rol'  where username ='$Usuario'";
		$resultado = $mysqli -> query($update);
		if($result==true){
			print "<script>alert(\"No se ha podido realizar el cambio\");window.location='ABT-T028-editarUsuario-U.php';</script>";
			}
		else{
			print "<script>alert(\"\Cambio realizado con exito\");window.location='../Administrador/ABT-T001-administrador-D.php';</script>";
			}
		}
	$mysqli->close();
?>
</body></html>