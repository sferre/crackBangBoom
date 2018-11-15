<?php
require_once('../autoload.php');

// $mail = $base->traerEmail('juan@juan.com');
//
// var_dump($mail);


if($auth->estoyLogueado()){
  echo "<h1> ESTA LOGUEADO! <H1>";
} else {
  echo ' no se logueo :( '
}

 ?>
