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

//Creamos un Array con algunos Usuarios de prueba
$User = [
	['NombreCompleto' => 'Marcos Cavanagh', 'NombreUsuario' => 'MarcosCav', 'PaisNacimiento' => 'AR', 'Email' => 'marcoscav@gmail.com', 'Avatar' => 'images/avatar.jpg', 'Password' => 'hola1234'],
	['NombreCompleto' => 'Marcos C', 'NombreUsuario' => 'Cav', 'PaisNacimiento' => 'AL', 'Email' => 'marcoscav@gmil.com', 'Avatar' => 'images/av.jpg', 'Password' => 'h34'],
	['NombreCompleto' => 'M Cavanagh', 'NombreUsuario' => 'Marcos', 'PaisNacimiento' => 'LR', 'Email' => 'marcoscav@gl.com', 'Avatar' => 'images/atar.jpg', 'Password' => 'h']
];

//Creamos un Array con todos los países ISO-3166-1 Alpha-2
$Countries = ["Argentina", "Bolivia", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador", "El Salvador", "España", "Estados Unidos", "Guatemala", "Guinea Ecuatorial", "Honduras", "México", "Nicaragua", "Panamá", "Paraguay", "Perú", "RepúblicaDominicana", "Uruguay", "Venezuela", "Otros Países", "Afganistán", "Albania", "Alemania", "Andorra", "Angola", "Anguilla", "Antártida", "Antigua y Barbuda", "Antillas Holandesas", "Arabia Saudí", "Argelia", "Armenia", "Aruba", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benin", "Bermudas", "Bielorrusia", "Birmania", "Bosnia y Herzegovina", "Botswana", "Brasil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "China", "Chipre", "Ciudad del Vaticano", "Comores", "Congo", "Congo, República Democrática del", "Corea", "Corea del Norte", "Costa de Marfíl", "Costa Rica", "Croacia (Hrvatska)", "Dinamarca", "Djibouti", "Dominica", "Egipto", "Emiratos Árabes Unidos", "Eritrea", "Eslovenia", "Estonia", "Etiopía", "Fiji", "Filipinas", "Finlandia", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guadalupe", "Guam", "Guayana", "Guayana Francesa", "Guinea", "Guinea-Bissau", "Haití", "Hungría", "India", "Indonesia", "Irak", "Irán", "Irlanda", "Isla Bouvet", "Isla de Christmas", "Islandia", "Islas Caimán", "Islas Cook", "Islas de Cocos o Keeling", "Islas Faroe", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "Islas Marshall", "Islas menores de Estados Unidos", "Islas Palau", "Islas Salomón", "Islas Svalbard y Jan Mayen", "Islas Tokelau", "Islas Turks y Caicos", "Islas Vírgenes (EEUU)", "Islas Vírgenes (Reino Unido)", "Islas Wallis y Futuna", "Israel", "Italia", "Jamaica", "Japón", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesotho", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macedonia, Ex-República Yugoslava de", "Madagascar", "Malasia", "Malawi", "Maldivas", "Malí", "Malta", "Marruecos", "Martinica", "Mauricio", "Mauritania", "Mayotte", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Nepal", "Níger", "Nigeria", "Niue", "Norfolk", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Países Bajos", "Papúa Nueva Guinea", "Paquistán", "Pitcairn", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República de Sudáfrica", "República Eslovaca", "Reunión", "Ruanda", "Rumania", "Rusia", "Sahara Occidental", "Saint Kitts y Nevis", "Samoa", "Samoa Americana", "San Marino", "San Vicente y Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri Lanka", "St Pierre y Miquelon", "Suazilandia", "Sudán", "Suecia", "Suiza", "Surinam", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "Territorios franceses del Sur", "Timor Oriental", "Togo", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uzbekistán", "Vanuatu", "Vietnam", "Yemen", "Yugoslavia", "Zambia", "Zimbabue"];

//Empezamos con las Validaciones si existe info vía POST
if ($_POST){

//Creamos el var_dump para ver el resultado de nuestro Form
var_dump($_POST);

//Emprolijamos el Nombre Completo
$_POST["NombreCompleto"]=trim(ucwords($_POST["NombreCompleto"]));

//Ahora si la validaciones propiamente dichas
	//Si bien no juzgamos si el nombre empieza con un Número pedimos confirmación
	if(empty($_POST["NombreCompleto"])) {
		$errorNombreCompleto = 'Este es un campo requerido';
	  }
	if (ctype_digit( substr($_POST["NombreCompleto"], 0, 1))){
		$errorNombreCompleto = 'Si tu Nombre realmente empieza con un Número por favor inserta una A al inicio';
	} else { $tempNombreCompleto = $_POST["NombreCompleto"];
	}

	//Verificamos si el Nombre de Usuario es Válido y/o si Existe en nuestra BDD (Array)
	if(empty($_POST["NombreUsuario"])) {
		$errorUserName = 'Este es un campo requerido';
	} else { $tempUserName = $_POST["NombreUsuario"];
	}
	//IMPO: Ver como hacer que no se repitan usuarios vs el ARRAY




	//Verificamos si el País seleccionado es válido y está en nuestro Array $Countries
	if(in_array($_POST["PaisNacimiento"], $Countries) == "") {
		$errorCountry = 'Por favor selecciona un país de la lista';
	} else { $tempCountry = $_POST["PaisNacimiento"];
	}

	//Verificamos si el Email es válido y/o ya Existe en nuestra BBD (Array)
	if (filter_var( $_POST['Email'] , FILTER_VALIDATE_EMAIL )===false) {
    $errorEmail = 'El Correo es inválido';
	} else { $tempEmail = $_POST['Email'];
	}
	if(empty($_POST["Email"])) {
		$errorEmail = 'Este es un campo requerido';
		}
	//IMPO: Ver como hacer que no se repitan Mails vs el ARRAY



	//Verificamos si el formato de la imagen es el adecuado
	var_dump($_FILES);
	if($_FILES["Avatar"]["error"] === 0 ) {
		$ex = pathinfo($_FILES["Avatar"]["name"], PATHINFO_EXTENSION);
		if( $ex == "jpg" || $ex == "png" || $ex == "svg"){
			move_uploaded_file($_FILES['Avatar']['tmp_name'], 'avatars/'.$_POST['NombreUsuario'].'.'.$ex);
    }else{
      $errorAvatar = 'Los formatos válidos son .jpg, .png y .svg';
    }
  }

	//Verificamso si la contraseñe tiene al menos 8 dígitos
	if(strlen($_POST['Password'])<8){
		$errorPassword = 'Tu constraseña debe tener al menos 8 caracteres';
	}
	if(empty($_POST['Password'])){
		$errorPassword = 'Este es un campo requerido';
	}

	//Verificamos si la contraseña se escribió igual ambas veces
	if(empty($_POST['Password2'])){
		$errorPassword2 = 'Este es un campo requerido';
	}
	if($_POST['Password']!==$_POST['Password2']) {
		$errorPassword2 = 'Las contraseñas deben coincidir';
	}

	/*foreach ($User as $_POST["NombreUsuario"] ) {
		$errorUserName = 'Ups! ese Nombre de Usuario ya está en uso :(';
		break;
	}*/
 //$User = new User( $_POST['NombreCompleto'], $_POST['NombreUsuario'], $_POST['PaisNacimiento'], $_POST['Email'], $_POST['Avatar'], $_POST['Password']);

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
	<form action="register.php" method="post" id="register" enctype="multipart/form-data">
			<img class="logoform" src="images/icons/icon-cbb-02.svg" alt="logo" width="20%">
		  <br>
		<div class="form">
			<h1 class="titulo">¡Sumate a nuestra Comunidad!</h1>
				<br>
			<div>
					<label>Nombre Completo
						<input type="text" name="NombreCompleto" placeholder="Nombre y Apellido" autofocus value="<?php echo $tempNombreCompleto ?>">
					</label>
					<label class="error">	<?php echo $errorNombreCompleto; ?>
					</label>
			</div>
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
					<label>País de Nacimiento
						<input type="text" list="countries" name="PaisNacimiento" placeholder="Escribe y Selecciona un País" value="<?php echo $tempCountry ?>">
			      <datalist id="countries">
			        <option disabled="disabled">Países Habla Hispana</option>
							<option value="Argentina">Argentina</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Chile">Chile</option>
							<option value="Colombia">Colombia</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cuba">Cuba</option>
							<option value="Ecuador">Ecuador</option>
							<option value="El Salvador">El Salvador</option>
							<option value="España">España</option>
							<option value="Estados Unidos">Estados Unidos</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
							<option value="Honduras">Honduras</option>
							<option value="México">México</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Panamá">Panamá</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Perú">Perú</option>
							<option value="República Dominicana">República Dominicana</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Otros Países">Otros Países</option>
							<option value="Afganistán">Afganistán</option>
							<option value="Albania">Albania</option>
							<option value="Alemania">Alemania</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antártida">Antártida</option>
							<option value="Antigua y Barbuda">Antigua y Barbuda</option>
							<option value="Antillas Holandesas">Antillas Holandesas</option>
							<option value="Arabia Saudí">Arabia Saudí</option>
							<option value="Argelia">Argelia</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaiyán">Azerbaiyán</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrein">Bahrein</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Bélgica">Bélgica</option>
							<option value="Belice">Belice</option>
							<option value="Benin">Benin</option>
							<option value="Bermudas">Bermudas</option>
							<option value="Bielorrusia">Bielorrusia</option>
							<option value="Birmania">Birmania</option>
							<option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Brasil">Brasil</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Bután">Bután</option>
							<option value="Cabo Verde">Cabo Verde</option>
							<option value="Camboya">Camboya</option>
							<option value="Camerún">Camerún</option>
							<option value="Canadá">Canadá</option>
							<option value="Chad">Chad</option>
							<option value="China">China</option>
							<option value="Chipre">Chipre</option>
							<option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
							<option value="Comores">Comores</option>
							<option value="Congo">Congo</option>
							<option value="Congo, República Democrática del">Congo, República Democrática del</option>
							<option value="Corea">Corea</option>
							<option value="Corea del Norte">Corea del Norte</option>
							<option value="Costa de Marfíl">Costa de Marfíl</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
							<option value="Dinamarca">Dinamarca</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Egipto">Egipto</option>
							<option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Eslovenia">Eslovenia</option>
							<option value="Estonia">Estonia</option>
							<option value="Etiopía">Etiopía</option>
							<option value="Fiji">Fiji</option>
							<option value="Filipinas">Filipinas</option>
							<option value="Finlandia">Finlandia</option>
							<option value="Francia">Francia</option>
							<option value="Gabón">Gabón</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Granada">Granada</option>
							<option value="Grecia">Grecia</option>
							<option value="Groenlandia">Groenlandia</option>
							<option value="Guadalupe">Guadalupe</option>
							<option value="Guam">Guam</option>
							<option value="Guayana">Guayana</option>
							<option value="Guayana Francesa">Guayana Francesa</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Haití">Haití</option>
							<option value="Hungría">Hungría</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Irak">Irak</option>
							<option value="Irán">Irán</option>
							<option value="Irlanda">Irlanda</option>
							<option value="Isla Bouvet">Isla Bouvet</option>
							<option value="Isla de Christmas">Isla de Christmas</option>
							<option value="Islandia">Islandia</option>
							<option value="Islas Caimán">Islas Caimán</option>
							<option value="Islas Cook">Islas Cook</option>
							<option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
							<option value="Islas Faroe">Islas Faroe</option>
							<option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
							<option value="Islas Malvinas">Islas Malvinas</option>
							<option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
							<option value="Islas Marshall">Islas Marshall</option>
							<option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
							<option value="Islas Palau">Islas Palau</option>
							<option value="Islas Salomón">Islas Salomón</option>
							<option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
							<option value="Islas Tokelau">Islas Tokelau</option>
							<option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
							<option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
							<option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
							<option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
							<option value="Israel">Israel</option>
							<option value="Italia">Italia</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japón">Japón</option>
							<option value="Jordania">Jordania</option>
							<option value="Kazajistán">Kazajistán</option>
							<option value="Kenia">Kenia</option>
							<option value="Kirguizistán">Kirguizistán</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Laos">Laos</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Letonia">Letonia</option>
							<option value="Líbano">Líbano</option>
							<option value="Liberia">Liberia</option>
							<option value="Libia">Libia</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lituania">Lituania</option>
							<option value="Luxemburgo">Luxemburgo</option>
							<option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malasia">Malasia</option>
							<option value="Malawi">Malawi</option>
							<option value="Maldivas">Maldivas</option>
							<option value="Malí">Malí</option>
							<option value="Malta">Malta</option>
							<option value="Marruecos">Marruecos</option>
							<option value="Martinica">Martinica</option>
							<option value="Mauricio">Mauricio</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Micronesia">Micronesia</option>
							<option value="Moldavia">Moldavia</option>
							<option value="Mónaco">Mónaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Níger">Níger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk">Norfolk</option>
							<option value="Noruega">Noruega</option>
							<option value="Nueva Caledonia">Nueva Caledonia</option>
							<option value="Nueva Zelanda">Nueva Zelanda</option>
							<option value="Omán">Omán</option>
							<option value="Países Bajos">Países Bajos</option>
							<option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
							<option value="Paquistán">Paquistán</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Polinesia Francesa">Polinesia Francesa</option>
							<option value="Polonia">Polonia</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Reino Unido">Reino Unido</option>
							<option value="República Centroafricana">República Centroafricana</option>
							<option value="República Checa">República Checa</option>
							<option value="República de Sudáfrica">República de Sudáfrica</option>
							<option value="República Eslovaca">República Eslovaca</option>
							<option value="Reunión">Reunión</option>
							<option value="Ruanda">Ruanda</option>
							<option value="Rumania">Rumania</option>
							<option value="Rusia">Rusia</option>
							<option value="Sahara Occidental">Sahara Occidental</option>
							<option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
							<option value="Samoa">Samoa</option>
							<option value="Samoa Americana">Samoa Americana</option>
							<option value="San Marino">San Marino</option>
							<option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
							<option value="Santa Helena">Santa Helena</option>
							<option value="Santa Lucía">Santa Lucía</option>
							<option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
							<option value="Senegal">Senegal</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leona">Sierra Leona</option>
							<option value="Singapur">Singapur</option>
							<option value="Siria">Siria</option>
							<option value="Somalia">Somalia</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
							<option value="Suazilandia">Suazilandia</option>
							<option value="Sudán">Sudán</option>
							<option value="Suecia">Suecia</option>
							<option value="Suiza">Suiza</option>
							<option value="Surinam">Surinam</option>
							<option value="Tailandia">Tailandia</option>
							<option value="Taiwán">Taiwán</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Tayikistán">Tayikistán</option>
							<option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
							<option value="Timor Oriental">Timor Oriental</option>
							<option value="Togo">Togo</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad y Tobago">Trinidad y Tobago</option>
							<option value="Túnez">Túnez</option>
							<option value="Turkmenistán">Turkmenistán</option>
							<option value="Turquía">Turquía</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Ucrania">Ucrania</option>
							<option value="Uganda">Uganda</option>
							<option value="Uzbekistán">Uzbekistán</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vietnam">Vietnam</option>
							<option value="Yemen">Yemen</option>
							<option value="Yugoslavia">Yugoslavia</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabue">Zimbabue</option>
			      </datalist>
					</label>
				  <label class="error"> <?php echo $errorCountry; ?>
					</label>
			</div>
				<br>
			<div>
					<label>E-Mail
						<input type="email" name="Email" value="<?php echo $tempEmail ?>">
					</label>
					<label class="error"> <?php echo $errorEmail; ?>
					</label>
			</div>
				<br>
			<div>
					<label>Imagen de Perfil
						<input type="file" name="Avatar" placeholder="Elegí una Imagen">
					</label>
					<label class="error"> <?php echo $errorAvatar; ?>
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
			    <label>Repetir Constraseña
			      <input type="password" name="Password2">
					</label>
					<label class="error"> <?php echo $errorPassword2; ?>
			    </lebel>
			</div>
				<br>
			<div>
					<button type="submit" class:"button">
						Registrarme!
					</button>
			    <button type="reset">
						Volver a Empezar
					</button>
			</div>
		</div>
	</form>
</body>
</html>
