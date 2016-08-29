<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="bootstrap/css/normalize2.css">

    
        <link rel="stylesheet" href="bootstrap/css/style2.css">

  </head>

  <body>

    <div class="form">
        
        <div id="login">   
          <h1>Bienvenido de Nuevo</h1>
          
		  
          		<form role="form" name="login" action="/php/login1.php" method="post">
				
		 
		
		<form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
			
			 <input type="text" class="form-control" id="username" name="username" required autocomplete="off">
          </div>
		  
		  
          
		 
		  
		  
          <div class="field-wrap">
            <label>
			
			
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" class="form-control" id="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">&iquest; Olvid&oacute; su contraseña ?</a></p>
          
          <button type="submit" class="button button-block"/>Ingresar</button>
          <img src="/bootstrap/images/logoIKA.png">
          <img src="/bootstrap/images/logoColpatria.png">
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="bootstrap/js/index.js"></script>

    
    
    
  </body>
</html>
