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
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/main-style.css">
	<link rel="stylesheet" href="css/styleforms.css">
</head>

<body class="formularios">
	<form action="login.php" method="post" id="login">
			<br>
		<div class="form">
			<h1 class="titulo">¡Loggeate!</h1>
				<br>
			<div>
					<label>Nombre de Usuario
						<input type="text" name="NombreUsuario" value="<?php echo $tempUserName ?>">
					</label>
					<label class="error">	<?php echo $errorUserName; ?>
					</label>
			</div>
				<br>
			<div>
					<label>Constraseña
			      <input type="password" name="Password" >
					</label>
					<label class="error"> <?php echo $errorPassword; ?>
			    </lebel>
			</div>
				<br>
			<div>
					<button type="submit" class:"button">
						Ingresar
					</button>
			    <button type="reset">
						Olvide Mi Constraseña
					</button>
			</div>
		</div>
	</form>
</body>
</html>
