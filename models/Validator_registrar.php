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
$tempNombreCompleto = '';
$tempUserName = '';
$tempCountry = '';
$tempEmail = '';

//Empezamos con las Validaciones si existe info vía POST
if ($_POST){

  //Creamos el var_dump para ver el resultado de nuestro Form
  //var_dump($_POST);

  //Emprolijamos el Nombre Completo
  $_POST["NombreCompleto"]=trim(ucwords($_POST["NombreCompleto"]));

  //Ahora si la validaciones propiamente dichas
  	//Si bien no juzgamos si el nombre empieza con un Número pedimos confirmación
  	if(empty($_POST["NombreCompleto"])) {
  		$errorNombreCompleto = 'Bang! Este es un campo requerido';
  	  }
  	if (ctype_digit( substr($_POST["NombreCompleto"], 0, 1))){
  		$errorNombreCompleto = 'Si tu Nombre realmente empieza con un Número por favor inserta una A al inicio';
  	} else { $tempNombreCompleto = $_POST["NombreCompleto"];
  	}

  	//Verificamos si el Nombre de Usuario es Válido y/o si Existe en nuestra BDD (Array)
  	if(empty($_POST["NombreUsuario"])) {
  		$errorUserName = 'Boom! Este es un campo requerido';
  	} else { $tempUserName = $_POST["NombreUsuario"];
  	}
  	//Verificamos si existe un Usuario con ese nombre en nuestra BDD (Array)
  	for ($i=0; $i<count($User); $i++) {
  	    if (in_array($_POST["NombreUsuario"], $User[$i])) {
  	        $errorUserName = 'Bang! Este Usuario ya existe';
  	    }
  	}

  	//Verificamos si el País seleccionado es válido y está en nuestro Array $Countries
  	if(in_array($_POST["PaisNacimiento"], $Countries) == "") {
  		$errorCountry = 'Boom! Por favor selecciona un país de la lista';
  	} else { $tempCountry = $_POST["PaisNacimiento"];
  	}

  	//Verificamos si el Email es válido
  	if (filter_var( $_POST['Email'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorEmail = 'Bang! El Correo es inválido';
  	} else { $tempEmail = $_POST['Email'];
  	}
  	if(empty($_POST["Email"])) {
  		$errorEmail = 'Bang! Este es un campo requerido';
  		}

  	//Verificamos si el Email ya existe	en nuestra BBD (Array)
  	for ($i=0; $i<count($User); $i++) {
  	    if (in_array($_POST["Email"], $User[$i])) {
  	        $errorEmail = 'Bang! Este Email ya esta registrado';
  	    }
  	}

  	//Verificamos si el formato de la imagen es el adecuado
  	//var_dump($_FILES);
  	if($_FILES["Avatar"]["error"] === 0 ) {
  		$ex = pathinfo($_FILES["Avatar"]["name"], PATHINFO_EXTENSION);
  		if( $ex == "jpg" || $ex == "png" || $ex == "svg"){
  			if (!is_dir('avatars') ) mkdir('avatars');
  			move_uploaded_file($_FILES['Avatar']['tmp_name'], 'avatars/'.$_POST['NombreUsuario'].'.'.$ex);
      }else{
        $errorAvatar = 'Boom! Los formatos válidos son .jpg, .png y .svg';
      }
    }

  	//Verificamso si la contraseñe tiene al menos 8 dígitos
  	if(strlen($_POST['Password'])<8){
  		$errorPassword = 'Boom! Tu constraseña debe tener al menos 8 caracteres';
  	}
  	if(empty($_POST['Password'])){
  		$errorPassword = 'Boom! Este es un campo requerido';
  	}

  	//Verificamos si la contraseña se escribió igual ambas veces
  	if(empty($_POST['Password2'])){
  		$errorPassword2 = 'Bang! Este es un campo requerido';
  	}
  	if($_POST['Password']!==$_POST['Password2']) {
  		$errorPassword2 = 'Bang! Las contraseñas deben coincidir';
  	}

   //$User = new User( $_POST['NombreCompleto'], $_POST['NombreUsuario'], $_POST['PaisNacimiento'], $_POST['Email'], $_POST['Avatar'], $_POST['Password']);

}
