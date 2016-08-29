<!DOCTYPE HTML>

<html>
	<head>
		<title>Modelo C</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="shortcut icon" href="favicon.png">	
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>inicio de sesion</h2>
							<p>
							
						<!-- formulario -->
						<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username"></label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" style="text-align:center;">
		  </div>
		  <div class="form-group">
		    <label for="password"></label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" style="text-align:center;">
		  </div>
			<br>
			<br>
		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>

                            
                            </p>
							<ul><a href="registro.php" class="button special">crear usuario</a></ul>
                            <div>
                            <img src="images/logoIKA.png" width="179" height="57">
                            <img src="images/locoColpatria.PNG" width="179" height="57"> </div>
						</div>
					</section>

				<!-- One -->			
			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>

			<script src="js/main.js"></script>
            <script src="js/valida_login.js"></script>

	</body>
</html>