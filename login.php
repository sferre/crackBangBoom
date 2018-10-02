<?php

//Creamos las variables de los posibles errores
$errorUserName = '';
$errorPassword = '';

//Creamos las variables de los valores temporales ante eventuales errores
$tempUserName = '';

//Empezamos con las Validaciones si existe info vía POST
if ($_POST){

//Creamos el var_dump para ver el resultado de nuestro Form
var_dump($_POST);

//Ahora si la validaciones propiamente dichas
	//Verificamos si se escribió un Nombre de Usuario
	if(empty($_POST["NombreUsuario"])) {
		$errorUserName = 'Este es un campo requerido';
	} else { $tempUserName = $_POST["NombreUsuario"];
	}
	//IMPO: Ver como hacer que no se repitan usuarios vs el ARRAY

	//Verificamso si la contraseñe tiene al menos 8 dígitos
	if(strlen($_POST['Password'])<8){
		$errorPassword = 'Tu constraseña debe tener al menos 8 caracteres';
	}
	if(empty($_POST['Password'])){
		$errorPassword = 'Este es un campo requerido';
	}

}

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

			<form class="contact-form" action="login.php" method="post" id="login">

					<!--Titulo -->
	        <div class="row titulo-contact">
	          <h1 class="col-12">¡Loggeate!</h1>
	        </div>

					<!--Datos del Formulario -->
					<label>Nombre de Usuario:
							<input type="text" name="NombreUsuario" value="<?php echo $tempUserName ?>">
					</label>

					<label class="erroresx"><?php echo $errorUserName; ?></label>



					<label>Constraseña:
					    <input class="inputsx" type="password" name="Password" >
					</label>

					<label class="erroresx"><?php echo $errorPassword; ?></label>



					<button type="submit" class:"button">
						Ingresar
					</button>

					<button type="reset">
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
