<?php

class Auth{

pulic function __construct() {

  session_start();
}

public function loguear($email){

$_SESSION['logueado'] = $email;

}

public function estaLogueado()
{
  return isset ($_SESSION['logueado']);

}

public function recordame ($email){
  setcookie('logueado', $email, time()+3600)
}

public function logout() {
  setcookie('logueado', NULL, time()-1);
  session_destroy();
}

public function usuarioLogueado($base){
  if ($this->estaLogueado()) {
    $base->treaerPorEmail($_SESSION['logueado']);
  }
  return $logueado;
} else { return NULL }
}
