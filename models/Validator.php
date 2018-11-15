<?php

$Countries = ["Argentina", "Bolivia", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador", "El Salvador", "España", "Estados Unidos", "Guatemala", "Guinea Ecuatorial", "Honduras", "México", "Nicaragua", "Panamá", "Paraguay", "Perú", "RepúblicaDominicana", "Uruguay", "Venezuela", "Otros Países", "Afganistán", "Albania", "Alemania", "Andorra", "Angola", "Anguilla", "Antártida", "Antigua y Barbuda", "Antillas Holandesas", "Arabia Saudí", "Argelia", "Armenia", "Aruba", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benin", "Bermudas", "Bielorrusia", "Birmania", "Bosnia y Herzegovina", "Botswana", "Brasil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "China", "Chipre", "Ciudad del Vaticano", "Comores", "Congo", "Congo, República Democrática del", "Corea", "Corea del Norte", "Costa de Marfíl", "Costa Rica", "Croacia (Hrvatska)", "Dinamarca", "Djibouti", "Dominica", "Egipto", "Emiratos Árabes Unidos", "Eritrea", "Eslovenia", "Estonia", "Etiopía", "Fiji", "Filipinas", "Finlandia", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guadalupe", "Guam", "Guayana", "Guayana Francesa", "Guinea", "Guinea-Bissau", "Haití", "Hungría", "India", "Indonesia", "Irak", "Irán", "Irlanda", "Isla Bouvet", "Isla de Christmas", "Islandia", "Islas Caimán", "Islas Cook", "Islas de Cocos o Keeling", "Islas Faroe", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "Islas Marshall", "Islas menores de Estados Unidos", "Islas Palau", "Islas Salomón", "Islas Svalbard y Jan Mayen", "Islas Tokelau", "Islas Turks y Caicos", "Islas Vírgenes (EEUU)", "Islas Vírgenes (Reino Unido)", "Islas Wallis y Futuna", "Israel", "Italia", "Jamaica", "Japón", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesotho", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macedonia, Ex-República Yugoslava de", "Madagascar", "Malasia", "Malawi", "Maldivas", "Malí", "Malta", "Marruecos", "Martinica", "Mauricio", "Mauritania", "Mayotte", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Nepal", "Níger", "Nigeria", "Niue", "Norfolk", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Países Bajos", "Papúa Nueva Guinea", "Paquistán", "Pitcairn", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República de Sudáfrica", "República Eslovaca", "Reunión", "Ruanda", "Rumania", "Rusia", "Sahara Occidental", "Saint Kitts y Nevis", "Samoa", "Samoa Americana", "San Marino", "San Vicente y Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri Lanka", "St Pierre y Miquelon", "Suazilandia", "Sudán", "Suecia", "Suiza", "Surinam", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "Territorios franceses del Sur", "Timor Oriental", "Togo", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uzbekistán", "Vanuatu", "Vietnam", "Yemen", "Yugoslavia", "Zambia", "Zimbabue"];


class Validator{

  private $errores =[];

  public function validarDatos($data, BD $bd){

    if($data['NombreCompleto']== ""){
      $this->errores['NombreCompleto'] ="Bang! Este es un campo requerido";
    }

    if(ctype_digit( substr($data['NombreCompleto'], 0, 1))){
      $this->errores['NombreCompleto'] ='No eres un Robot, tu Nombre no puede empezar con un número';
  	} else { $tempNombreCompleto = $_POST["NombreCompleto"];
    }

    //Verificamos si el Nombre de Usuario es Válido
  	if(empty($data['NombreUsuario'])) {
  		$this->errores['NombreUsuario'] = 'Boom! Este es un campo requerido';
  	} else { $tempUserName = $_POST["NombreUsuario"];
  	}
    //Verificar si existe en la BD

    //Verificamos si el País seleccionado es válido y está en nuestro Array $Countries
    if(in_array($data['PaisNacimiento'], $Countries) == "") {
      $this->errores['PaisNacimiento'] = 'Boom! Por favor selecciona un país de la lista';
    } else { $tempCountry = $_POST["PaisNacimiento"];
    }

    //Verificamos si el Email es válido
  	if (filter_var($data['Email'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorEmail = 'Bang! El Correo es inválido';
  	} else { $tempEmail = $_POST['Email'];
  	}

  	if(empty($data["Email"])) {
  		$this->errores['Email'] = 'Bang! Este es un campo requerido';
  		}

    if($db->traerPorMail($data['Email']) != NULL){
      $this->errores['Email'] = "Este mail ya se encuentra registrado"
    }

    //Verificamos si la password es válida
    if (empty($data["Password"])) {
			$this->errores["password"] = 'Boom! Este es un campo requerido';
		}

    if (strlen($data["Password"])<8) {
			$this->errores["password"] = 'Boom! Tu constraseña debe tener al menos 8 caracteres';
		}

		if ($informacion["Password2"] == "") {
			$this->errores["Password2"] = 'Bang! Este es un campo requerido';
		}

		if ($data["password"] !== $data["Password2"]) {
			$this->errores["password2"] = 'Bang! Las contraseñas deben coincidir';
		}

    return $errores;
  }

//  public function validarLogin($data, BD $bd){

  //  if(

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
