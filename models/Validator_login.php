<?php

//Creamos las variables de los posibles errores
$errorUserName = '';
$errorPassword = '';
$action ='';

//Creamos las variables de los valores temporales ante eventuales errores
$tempUserName = '';

//Empezamos con las Validaciones si existe info vía POST
if ($_POST){

//Creamos el var_dump para ver el resultado de nuestro Form
//var_dump($_POST);

//Validaciones
	//Verificamos si se escribió un Nombre de Usuario
	if($_POST["NombreUsuario"]!= "admin"){
		$errorUserName = 'Bang! No encontramos ese usuario, Registrate!';
	}
	if(empty($_POST["NombreUsuario"])) {
		$errorUserName = 'Bang! Este es un campo requerido';
	} else { $tempUserName = $_POST["NombreUsuario"];
	}

	//Verificamso si se escribió una Contraseña
	if(empty($_POST['Password'])){
		$errorPassword = 'Boom! Este es un campo requerido';
	}

	//Validacion de Usuario y Constraseña "Casero"
	if($_POST["NombreUsuario"] == "admin"){
		$action = 'index.php';
	} else { $action = 'login.php';
	}
}
