<?php session_start(); ?>
<html>
<head>
<title>Editar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
    if(!re.test(form.username.value)) {
      alert("Error: El nombre de usuario solo debe contener letras, numeros y guion bajo!");
      form.username.focus();
      return false;
    }

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
 #p1{
		position:absolute; left:596px; top:32px; width:179px; height:76px;cursor: pointer;
	}
#p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
 #p2{
    position:absolute; left:9px; top:270px; width:302px; height:76px;cursor: pointer;
  }
#p2:hover
  {
    opacity: 1.0;
    filter: alpha(opacity=100);
    transform: scale(1.12);
    transition-duration: 0.4s;
  }
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(editar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(editar_02.png); position:absolute; left:0px; top:32px; width:41px; height:126px;" title="">
	</div>
	<div style="background-image:url(editar_03.png); position:absolute; left:41px; top:32px; width:311px; height:76px;" title="">
	</div>
	<div style="background-image:url(editar_04.png); position:absolute; left:352px; top:32px; width:244px; height:126px;" title="">
	</div>
	<div id="p1" style="background-image:url(editar_05.png);" onclick="location.href='../Administrador/administrador.php'" title="">
	</div>
	<div style="background-image:url(editar_06.png); position:absolute; left:775px; top:32px; width:46px; height:126px;" title="">
	</div>
	<!--<div style="background-image:url(editar_07.png); position:absolute; left:821px; top:32px; width:167px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(editar_08.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(editar_09.png); position:absolute; left:41px; top:108px; width:311px; height:50px;" title="">
	</div>
	<div style="background-image:url(editar_10.png); position:absolute; left:596px; top:108px; width:179px; height:50px;" title="">
	</div>
	<div style="background-image:url(editar_11.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(editar_12.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(editar_13.png); position:absolute; left:36px; top:158px; width:954px; height:238px;" title="">
	</div>
	<div style="background-image:url(editar_14.png); position:absolute; left:990px; top:158px; width:34px; height:238px;" title="">
	</div>
	<div style="background-image:url(editar_15.png); position:absolute; left:36px; top:396px; width:5px; height:256px;" title="">
	</div>
	<div style="background-image:url(editar_16.png); position:absolute; left:41px; top:396px; width:951px; height:112px;" title="">
		<center>
		<form role="form" name="registro" onSubmit="return checkForm(this)" action="editarUsuario.php" method="post">
          <div class="form-group">
            <label style="color: white; font-family:sans-serif;font-size:20;" for="username">Nombre de usuario</label>
			
        		<select name='username' id='username' required>
        		<?php
				    include "../php/conexion.php";
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
          
                <div class="form-group">
            <label style="color: white; font-family:sans-serif;font-size:20;" for="fullname">Nombre Completo</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" required="">
          </div>
      
              <div class="form-group">
            <label style="color: white; font-family:sans-serif;font-size:20;" for="email">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required="">
          </div>
      
              <div class="form-group">
            <label style="color: white; font-family:sans-serif;font-size:20;" for="password">Contrase&ntilde;a</label>
            <input type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required="">
          </div>
      
              <div class="form-group">
            <label style="color: white; font-family:sans-serif;font-size:20;" for="confirm_password">Confirmar Contrase&ntilde;a</label>
            <input type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" required="">
          </div>

          <input id="p2" type="image" src='editar_22.png' name="aceptar"  value="aceptar"/>
      </form>
      <?php
	include "../php/conexion.php";

	


	//$update = "UPDATE TB_CIUDAD SET CIU_DESCRIPCION = '$SEG_DESCRIPCION', CIU_PAI_ID = '$CIUD_PAISES' WHERE CIU_ID = '$CIU_ID'";
	if(isset($_POST['username'])){
    $Usuario=$_POST['username'];
  $Nombre= $_POST['fullname'];
  $Correo=$_POST['email'];
  $Contrasenia=$_POST['password']; 
  $rol=$_POST['rol'];

    
		$update = "update user set fullname ='$Nombre' , email = '$Correo', password = '$Contrasenia', rol = '$rol'  where username ='$Usuario'";
		$resultado = $mysqli -> query($update);
		if($result==true){
			print "<script>alert(\"No se ha podido realizar el cambio\");window.location='editarUsuario.php';</script>";
			}
		else{
			print "<script>alert(\"\Cambio realizado con exito\");window.location='../Administrador/administrador.php';</script>";
			}
		}
	$mysqli->close();
?>
      </center>

	</div>
	<div style="background-image:url(editar_17.png); position:absolute; left:992px; top:396px; width:32px; height:372px;" title="">
	</div>
	<div style="background-image:url(editar_18.png); position:absolute; left:41px; top:508px; width:949px; height:144px;" title="">
	</div>
	<div style="background-image:url(editar_19.png); position:absolute; left:990px; top:508px; width:2px; height:260px;" title="">
	</div>
	<div style="background-image:url(editar_20.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(editar_21.png); position:absolute; left:36px; top:671px; width:13px; height:97px;" title="">
	</div>
	<!--<div style="background-image:url(editar_22.png); position:absolute; left:49px; top:671px; width:302px; height:76px;" title="">
	</div>-->
	<div style="background-image:url(editar_23.png); position:absolute; left:351px; top:671px; width:639px; height:97px;" title="">
	</div>
	<div style="background-image:url(editar_24.png); position:absolute; left:49px; top:747px; width:302px; height:21px;" title="">
	</div>
</div>

</body>
</html>