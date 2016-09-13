<?php session_start(); ?>
<html>
  <head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css" />
  </head>
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

  <body>
      <section id="banner">
    <div class="inner">
      <div class="container">
      <h2>Registro</h2>
      
      <form role="form" name="registro" onSubmit="return checkForm(this)" action="editarUsuario.php" method="post">
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
			<label> Nombre de Usuario a modificar <span class="req">*</span></label>
        		<select name='username' id='username' required>
        		<?php
				    include "../../php/conexion.php";
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
    </div>
        </div>
        </section>       

    <script src="js/valida_registro.js"></script>
  </body>
</html>

<?php
	include "../../php/conexion.php";

	$Usuario=$_POST['username'];
	$Nombre= $_POST['fullname'];
	$Correo=$_POST['email'];
	$Contrasenia=$_POST['password']; 
	$rol=$_POST['rol'];


	//$update = "UPDATE tb_ciudad SET CIU_DESCRIPCION = '$SEG_DESCRIPCION', CIU_PAI_ID = '$CIUD_PAISES' WHERE CIU_ID = '$CIU_ID'";
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

