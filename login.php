<?php

require("autoload.php");
require("models/Validator_login.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom! - Login</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/contact-style.css">
    <link rel="stylesheet" type="text/css" href="css/faq-style.css">
  </head>
  <body>

    <div id="desktop-container">

      <!--HEADER-->
      <?php include('layout/header.php'); ?>

    </div>

    <div class="container-fluid contact-principal">

			<form class="contact-form" action="<?php echo $action; ?>" method="post" id="login">

					<!--Titulo -->
	        <div class="row titulo-contact">
	          <h1 class="col-12">¡Loggeate!</h1>
						<p class="col-12">¿Aún no tenes cuenta? <a href="register.php">REGISTRATE!</a></p>
	        </div>
					<br>

					<!--Datos del Formulario -->
					<label>Nombre de Usuario:</label>
						<br>
							<input type="text" name="NombreUsuario" value="<?php echo $tempUserName ?>">
						<br>
					<label class="error"><?php echo $errorUserName; ?></label>
					<br>


					<label>Constraseña:</label>
						<br>
					    <input type="password" name="Password" >
						<br>
					<label class="error"><?php echo $errorPassword; ?></label>
					<br>

					<button type="submit" class:"btn-first">
						Ingresar
					</button>

					<button type="reset" class:"btn-last">
						Olvide Mi Constraseña
					</button>


			</form>

    </div>


    <div id="desktop-container">

      <!--FOOTER-->
      <div class="container-fluid">
        <?php include('layout/footer.php'); ?>
      </div>

    </div>

  </body>
</html>
