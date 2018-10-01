<?php

//Creamos las variables de los posibles errores
$errorNombreCompleto = '';
$errorUserName = '';
$errorCountry ='';
$errorEmail = '';
$errorAvatar = '';
$errorPassword = '';
$errorPassword2 = '';

//Creamos las variables de los valores temporales ante eventuales errores
$tempUserName = '';


//Creamos un Array con algunos Usuarios de prueba
$User = [
	['NombreCompleto' => 'Marcos Cavanagh', 'NombreUsuario' => 'MarcosCav', 'PaisNacimiento' => 'AR', 'Email' => 'marcoscav@gmail.com', 'Avatar' => 'images/avatar.jpg', 'Password' => 'hola1234'],
	['NombreCompleto' => 'Marcos C', 'NombreUsuario' => 'Cav', 'PaisNacimiento' => 'AL', 'Email' => 'marcoscav@gmil.com', 'Avatar' => 'images/av.jpg', 'Password' => 'h34'],
	['NombreCompleto' => 'M Cavanagh', 'NombreUsuario' => 'Marcos', 'PaisNacimiento' => 'LR', 'Email' => 'marcoscav@gl.com', 'Avatar' => 'images/atar.jpg', 'Password' => 'h']
];


//Empezamos con las Validaciones si existe info vía POST
if ($_POST){

//Creamos el var_dump para ver el resultado de nuestro Form
var_dump($_POST);

//Ahora si la validaciones propiamente dichas
	//Verificamos si el Nombre de Usuario es Válido y/o si Existe en nuestra BDD (Array)
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
	<title>Nuevo Usuario</title>
	<link rel="stylesheet" href="css/main-style.css">
	<link rel="stylesheet" href="css/styleforms.css">
</head>

<body class="formularios">
	<form action="login.php" method="post" id="login">
			<img class="logoform" src="images/icons/icon-cbb-02.svg" alt="logo" width="20%">
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
