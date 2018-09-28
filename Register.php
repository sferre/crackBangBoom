<?php

$errorNombreCompleto = '';
$errorUserName = '';
$errorCountry ='';
$errorEmail = '';
$errorAvatar = '';
$errorPassword = '';
$errorPassword2 = '';
$Usuarios = [
	['NombreCompleto' => 'Marcos Cavanagh', 'NombreUsuario' => 'MarcosCav', 'PaisNacimiento' => 'AR', 'Email' => 'marcoscav@gmail.com', 'Avatar' => 'images/avatar.jpg', 'Password' => 'hola1234'],
];
$Paises = [];

if ($_POST){

var_dump($_POST);


$_POST["NombreCompleto"]=trim(ucwords($_POST["NombreCompleto"]));


	if (ctype_digit( substr($_POST["NombreCompleto"], 0, 1))){
		$errorNombreCompleto= 'Si tu Nombre realmente empieza con un Número por favor inserta una A al inicio';
		}

	foreach ($Usuarios as $_POST["NombreUsuario"] ) {
		$errorUserName = 'Ups! ese Nombre de Usuario ya está en uso :(';
		break;
	}

	//foreach ($Paises as $_POST["PaisNacimiento"] ) { } else {
	//	$errorCountry = 'Ups! Fijate de seleccionar un país en la lista';
	//	break;
	//}

	if (is_int($_POST["ratingPelicula"])) {
		$errorRating = 'Rating inválido';
	}

	if (is_numeric($_POST["premios"])) {
		$errorPremios = 'La cantidad no es válida';
	}

	if (is_numeric($_POST["duracion"])) {
		$errorDuracion = 'La cantidad no es válida';
	}

	if (validateDate($_POST["fecha"])) {
		# code...
	}

}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nuevo Usuario</title>
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link rel="stylesheet" href="css/styleforms.css">
</head>

<body class="formularios">

	<form action="Register.php" method="post">
		<h1>¡Sumate a nuestra Comunidad!</h1>

		<label>Nombre Completo
			<input type="text" name="NombreCompleto" placeholder="Nombre y Apellido"required>
			<?php echo $errorNombreCompleto; ?>
		</label>
<br><br>
		<label>Nombre de Usuario
			<input type="text" name="NombreUsuario" required>
			<?php echo $errorUserName; ?>
		</label>
<br><br>
		<label>País de Nacimiento
			<input list="countries" name="PaisNacimiento" placeholder="Selecciona un País" required>
      <datalist id="countries">
        <option disabled="disabled">Países Habla Hispana</option>
        <option value="AR">Argentina</option>
        <option value="BO">Bolivia</option>
        <option value="CL">Chile</option>
        <option value="CO">Colombia</option>
        <option value="CR">Costa Rica</option>
        <option value="CU">Cuba</option>
        <option value="EC">Ecuador</option>
        <option value="SV">El Salvador</option>
        <option value="ES">España</option>
        <option value="US">Estados Unidos</option>
        <option value="GT">Guatemala</option>
        <option value="GQ">Guinea Ecuatorial</option>
        <option value="HN">Honduras</option>
        <option value="MX">México</option>
        <option value="NI">Nicaragua</option>
        <option value="PA">Panamá</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Perú</option>
        <option value="DO">República Dominicana</option>
        <option value="UY">Uruguay</option>
        <option value="VE">Venezuela</option>
        <option disabled="disabled">Otros Países</option>
        <option value="AF">Afganistán</option>
        <option value="AL">Albania</option>
        <option value="DE">Alemania</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antártida</option>
        <option value="AG">Antigua y Barbuda</option>
        <option value="AN">Antillas Holandesas</option>
        <option value="SA">Arabia Saudí</option>
        <option value="DZ">Argelia</option>
        <option value="AM">Armenia</option>
        <option value="AW">Aruba</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="AZ">Azerbaiyán</option>
        <option value="BS">Bahamas</option>
        <option value="BH">Bahrein</option>
        <option value="BD">Bangladesh</option>
        <option value="BB">Barbados</option>
        <option value="BE">Bélgica</option>
        <option value="BZ">Belice</option>
        <option value="BJ">Benin</option>
        <option value="BM">Bermudas</option>
        <option value="BY">Bielorrusia</option>
        <option value="MM">Birmania</option>
        <option value="BA">Bosnia y Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BR">Brasil</option>
        <option value="BN">Brunei</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="BT">Bután</option>
        <option value="CV">Cabo Verde</option>
        <option value="KH">Camboya</option>
        <option value="CM">Camerún</option>
        <option value="CA">Canadá</option>
        <option value="TD">Chad</option>
        <option value="CN">China</option>
        <option value="CY">Chipre</option>
        <option value="VA">Ciudad del Vaticano</option>
        <option value="KM">Comores</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, República Democrática del</option>
        <option value="KR">Corea</option>
        <option value="KP">Corea del Norte</option>
        <option value="CI">Costa de Marfíl</option>
        <option value="CR">Costa Rica</option>
        <option value="HR">Croacia (Hrvatska)</option>
        <option value="DK">Dinamarca</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="EG">Egipto</option>
        <option value="AE">Emiratos Árabes Unidos</option>
        <option value="ER">Eritrea</option>
        <option value="SI">Eslovenia</option>
        <option value="EE">Estonia</option>
        <option value="ET">Etiopía</option>
        <option value="FJ">Fiji</option>
        <option value="PH">Filipinas</option>
        <option value="FI">Finlandia</option>
        <option value="FR">Francia</option>
        <option value="GA">Gabón</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GD">Granada</option>
        <option value="GR">Grecia</option>
        <option value="GL">Groenlandia</option>
        <option value="GP">Guadalupe</option>
        <option value="GU">Guam</option>
        <option value="GY">Guayana</option>
        <option value="GF">Guayana Francesa</option>
        <option value="GN">Guinea</option>
        <option value="GW">Guinea-Bissau</option>
        <option value="HT">Haití</option>
        <option value="HU">Hungría</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IQ">Irak</option>
        <option value="IR">Irán</option>
        <option value="IE">Irlanda</option>
        <option value="BV">Isla Bouvet</option>
        <option value="CX">Isla de Christmas</option>
        <option value="IS">Islandia</option>
        <option value="KY">Islas Caimán</option>
        <option value="CK">Islas Cook</option>
        <option value="CC">Islas de Cocos o Keeling</option>
        <option value="FO">Islas Faroe</option>
        <option value="HM">Islas Heard y McDonald</option>
        <option value="FK">Islas Malvinas</option>
        <option value="MP">Islas Marianas del Norte</option>
        <option value="MH">Islas Marshall</option>
        <option value="UM">Islas menores de Estados Unidos</option>
        <option value="PW">Islas Palau</option>
        <option value="SB">Islas Salomón</option>
        <option value="SJ">Islas Svalbard y Jan Mayen</option>
        <option value="TK">Islas Tokelau</option>
        <option value="TC">Islas Turks y Caicos</option>
        <option value="VI">Islas Vírgenes (EEUU)</option>
        <option value="VG">Islas Vírgenes (Reino Unido)</option>
        <option value="WF">Islas Wallis y Futuna</option>
        <option value="IL">Israel</option>
        <option value="IT">Italia</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japón</option>
        <option value="JO">Jordania</option>
        <option value="KZ">Kazajistán</option>
        <option value="KE">Kenia</option>
        <option value="KG">Kirguizistán</option>
        <option value="KI">Kiribati</option>
        <option value="KW">Kuwait</option>
        <option value="LA">Laos</option>
        <option value="LS">Lesotho</option>
        <option value="LV">Letonia</option>
        <option value="LB">Líbano</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libia</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lituania</option>
        <option value="LU">Luxemburgo</option>
        <option value="MK">Macedonia, Ex-República Yugoslava de</option>
        <option value="MG">Madagascar</option>
        <option value="MY">Malasia</option>
        <option value="MW">Malawi</option>
        <option value="MV">Maldivas</option>
        <option value="ML">Malí</option>
        <option value="MT">Malta</option>
        <option value="MA">Marruecos</option>
        <option value="MQ">Martinica</option>
        <option value="MU">Mauricio</option>
        <option value="MR">Mauritania</option>
        <option value="YT">Mayotte</option>
        <option value="FM">Micronesia</option>
        <option value="MD">Moldavia</option>
        <option value="MC">Mónaco</option>
        <option value="MN">Mongolia</option>
        <option value="MS">Montserrat</option>
        <option value="MZ">Mozambique</option>
        <option value="NA">Namibia</option>
        <option value="NR">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="NE">Níger</option>
        <option value="NG">Nigeria</option>
        <option value="NU">Niue</option>
        <option value="NF">Norfolk</option>
        <option value="NO">Noruega</option>
        <option value="NC">Nueva Caledonia</option>
        <option value="NZ">Nueva Zelanda</option>
        <option value="OM">Omán</option>
        <option value="NL">Países Bajos</option>
        <option value="PG">Papúa Nueva Guinea</option>
        <option value="PK">Paquistán</option>
        <option value="PN">Pitcairn</option>
        <option value="PF">Polinesia Francesa</option>
        <option value="PL">Polonia</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="UK">Reino Unido</option>
        <option value="CF">República Centroafricana</option>
        <option value="CZ">República Checa</option>
        <option value="ZA">República de Sudáfrica</option>
        <option value="SK">República Eslovaca</option>
        <option value="RE">Reunión</option>
        <option value="RW">Ruanda</option>
        <option value="RO">Rumania</option>
        <option value="RU">Rusia</option>
        <option value="EH">Sahara Occidental</option>
        <option value="KN">Saint Kitts y Nevis</option>
        <option value="WS">Samoa</option>
        <option value="AS">Samoa Americana</option>
        <option value="SM">San Marino</option>
        <option value="VC">San Vicente y Granadinas</option>
        <option value="SH">Santa Helena</option>
        <option value="LC">Santa Lucía</option>
        <option value="ST">Santo Tomé y Príncipe</option>
        <option value="SN">Senegal</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leona</option>
        <option value="SG">Singapur</option>
        <option value="SY">Siria</option>
        <option value="SO">Somalia</option>
        <option value="LK">Sri Lanka</option>
        <option value="PM">St Pierre y Miquelon</option>
        <option value="SZ">Suazilandia</option>
        <option value="SD">Sudán</option>
        <option value="SE">Suecia</option>
        <option value="CH">Suiza</option>
        <option value="SR">Surinam</option>
        <option value="TH">Tailandia</option>
        <option value="TW">Taiwán</option>
        <option value="TZ">Tanzania</option>
        <option value="TJ">Tayikistán</option>
        <option value="TF">Territorios franceses del Sur</option>
        <option value="TP">Timor Oriental</option>
        <option value="TG">Togo</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad y Tobago</option>
        <option value="TN">Túnez</option>
        <option value="TM">Turkmenistán</option>
        <option value="TR">Turquía</option>
        <option value="TV">Tuvalu</option>
        <option value="UA">Ucrania</option>
        <option value="UG">Uganda</option>
        <option value="UZ">Uzbekistán</option>
        <option value="VU">Vanuatu</option>
        <option value="VN">Vietnam</option>
        <option value="YE">Yemen</option>
        <option value="YU">Yugoslavia</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabue</option>
      </datalist>
      <?php echo $errorCountry; ?>
		</label>
<br><br>
		<label>E-Mail
			<input type="email" name="Email" required>
			<?php echo $errorEmail; ?>
		</label>
<br><br>
		<label>Imagen de Perfil
			<input type="file" name="Avatar" placeholder="Elegí una Imagen">
			<?php echo $errorAvatar; ?>
		</label>
<br><br>
		<label>Constraseña
      <input type="password" name="Password" >
      <?php echo $errorPassword; ?>
    </lebel>
<br><br>
    <label>Repetir Constraseña
      <input type="password" name="Password2">
      <?php echo $errorPassword2; ?>
    </lebel>

<br><br>

		<button type="submit">
			Registrarme!
		</button>
    <button type="reset">
			Volver a Empezar
		</button>

	</form>
</body>
</html>
