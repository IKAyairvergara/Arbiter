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
<head>
  <title>Agregar</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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


<link rel="shortcut icon" href="favicon.png">
<style type="text/css">
  body
  {
   background-image: url(blue.jpg);
   background-size: 100% 300%;
   background-repeat: no-repeat;
 }
 #p1{
  position:absolute; left:599px; top:32px; width:179px; height:76px;cursor: pointer;
}
#p1:hover
{
  opacity: 1.0;
  filter: alpha(opacity=100);
  transform: scale(1.12);
  transition-duration: 0.4s;
}



#p2{
  position:absolute; left:29px; top:510px; width:209px; height:76px;cursor: pointer;
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
	<div style="background-image:url(agregar_01.png); position:absolute; left:0px; top:0px; width:1024px; height:32px;" title="">
	</div>
	<div style="background-image:url(agregar_02.png); position:absolute; left:0px; top:32px; width:599px; height:126px;" title="">
	</div>
	<div id="p1" style="background-image:url(agregar_03.png);" onclick="location.href='../Administrador/administrador.php'" title="">
	</div>
	<div style="background-image:url(agregar_04.png); position:absolute; left:778px; top:32px; width:43px; height:126px;" title="">
	</div>
	<!--<div style="background-image:url(agregar_05.png); position:absolute; left:821px; top:32px; width:167px; height:76px;" title="">
</div>-->
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
   <form role="form" name="registro" onSubmit="return checkForm(this)" action="ABT-T009-agregarUsuario-U.php" method="post">
    <div class="form-group">
      <label style="color: white; font-family:sans-serif;font-size:20;" for="username">Nombre de usuario</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required="">
    </div>
    
    <div class="form-group">
      <label  style="color: white; font-family:sans-serif;font-size:20;" for="fullname">Nombre Completo</label>
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

    <input id="p2" type="image" src='agregar_14.png' name="aceptar"  value="aceptar"/>
  </form>
</center>
<?php

if(!empty($_POST)){
  if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
    if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
      include "../../php/ABT-T000-conexion-U.php";
      
      $found=false;
      $sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
      $query = $con->query($sql1);
      
      while ($r=$query->fetch_array()) {
        $found=true;
        break;
      }
      

      if($found){
        print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");</script>";
      }

      $a=isset($_POST["password"]);
      $b=isset($_POST["confirm_password"]);
      
      if($a!=$b){
       print "<script>alert(\"Error!, La contraseña no coincide\");</script>";
     }

     $sql = "insert into user (username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
     
     $query = $con->query($sql);
     
     if($query!=null){
      print "<script>alert(\"Registro ingresado con exito\");window.location='../Administrador/ABT-T001-administrador-D.php';</script>";
    }
  }
}
}

?>

</div>
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
<script src="js/valida_registro.js"></script>
</body>
</html>