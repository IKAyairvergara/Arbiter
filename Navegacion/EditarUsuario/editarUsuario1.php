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
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(Untitled-15_01.png); position:absolute; left:0px; top:0px; width:1024px; height:31px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_02.png); position:absolute; left:0px; top:31px; width:41px; height:127px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_03.png); position:absolute; left:41px; top:31px; width:311px; height:76px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_04.png); position:absolute; left:352px; top:31px; width:672px; height:1px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_05.png); position:absolute; left:352px; top:32px; width:469px; height:126px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_06.png); position:absolute; left:821px; top:32px; width:167px; height:76px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_07.png); position:absolute; left:988px; top:32px; width:36px; height:126px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_08.png); position:absolute; left:41px; top:107px; width:311px; height:51px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_09.png); position:absolute; left:821px; top:108px; width:167px; height:50px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_10.png); position:absolute; left:0px; top:158px; width:36px; height:610px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_11.png); position:absolute; left:36px; top:158px; width:954px; height:142px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_12.png); position:absolute; left:990px; top:158px; width:34px; height:142px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_13.png); position:absolute; left:36px; top:300px; width:6px; height:352px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_14.png); position:absolute; left:42px; top:300px; width:950px; height:208px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_15.png); position:absolute; left:992px; top:300px; width:32px; height:468px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_16.png); position:absolute; left:42px; top:508px; width:948px; height:144px;" title="">

			<form role="form" name="registro" onSubmit="return checkForm(this)" action="editarUsuario.php" method="post">
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
			<label> Nombre de Usuario a modificar <span class="req">*</span></label>
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
            <label for="fullname">Nombre Completo</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" required="">
          </div>
      
              <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required="">
          </div>
      
              <div class="form-group">
            <label for="password">Contrase&ntilde;a</label>
            <input type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required="">
          </div>
      
              <div class="form-group">
            <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
            <input type="password" title="La contraseña debe contener minimo 6 caracteres, incluyendo MAYUSCULAS - minusculas y numeros" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" required="">
          </div>

          <button type="submit" class="btn btn-default">Registrar</button>
      </form>

      <?php
	include "../php/conexion.php";

	$Usuario=$_POST['username'];
	$Nombre= $_POST['fullname'];
	$Correo=$_POST['email'];
	$Contrasenia=$_POST['password']; 
	$rol=$_POST['rol'];


	//$update = "UPDATE TB_CIUDAD SET CIU_DESCRIPCION = '$SEG_DESCRIPCION', CIU_PAI_ID = '$CIUD_PAISES' WHERE CIU_ID = '$CIU_ID'";
	if(isset($_POST['username'])){
		$update = "update user set fullname ='$Nombre' , email = '$Correo', password = '$Contrasenia', rol = '$rol'  where username ='$Usuario'";
		$resultado = $mysqli -> query($update);
		if($result==true){
			print "<script>alert(\"No se ha podido realizar el cambio\");window.location='Editar2Segmentos.php';</script>";
			}
		else{
			print "<script>alert(\"\Cambio realizado con exito\");window.location='../Segmentos/segmentos.php';</script>";
			}
		}
	$mysqli->close();
?>
		

	</div>
	<div style="background-image:url(Untitled-15_17.png); position:absolute; left:990px; top:508px; width:2px; height:260px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_18.png); position:absolute; left:36px; top:652px; width:954px; height:19px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_19.png); position:absolute; left:36px; top:671px; width:14px; height:97px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_20.png); position:absolute; left:50px; top:671px; width:302px; height:76px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_21.png); position:absolute; left:352px; top:671px; width:638px; height:97px;" title="">
	</div>
	<div style="background-image:url(Untitled-15_22.png); position:absolute; left:50px; top:747px; width:302px; height:21px;" title="">
	</div>
</div>
<script src="js/valida_registro.js"></script>
</body>
</html>