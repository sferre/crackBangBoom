<?php

class Usuario{

protected $id;
protected $email;
protected $password;
protected $username;
protected $edad;
protected $telefono;
protected $avatar;

public function setID(){
  $this->id = $id;
}

public function getID(){
  return $this->$id;
}

public function setEmail(){
  $this->email = $email;
}

public function getEmail(){
  return $this->$email;
}

public function setPassword(){
  $this->password = $password;
}

public function getPassword(){
  return $this->$password;
}

public function setUsername(){
  $this->username = $username;
}

public function getUsername(){
  return $this->$username;
}

public function setEdad(){
  $this->edad = $edad;
}

public function getEdad(){
  return $this->$edad;
}

public function setTelefono(){
  $this->telefono = $telefono;
}

public function getTelefono(){
  return $this->$telefono;
}

public function setAvatar(){
  $this->avatar = $avatar;
}

public function getAvatar(){
  return $this->$avatar;
}


public function __construct($email,$username,$edad,$avatar,$telefono="",$id=NULL)
{
  if($id == NULL){
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }else{
    $this->password = $password;
  }
  $this->email =$email;
  $this->username = $username;
  $this->edad = $edad;
  $this->telefono =$telefono;
  $this->avatar=$avatar;
  $this->id=$id;

}




}
