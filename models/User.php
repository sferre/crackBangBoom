<?php


class User {

  private   $id;
  protected $idUser;
  protected $nameUser;
  protected $nickUser;
  protected $emailUser;
  protected $birthUser;
  protected $passUser;

  function __construct($nameUser,$nickUser,$emailUser,$birthUser,$passUser,$id = 'NULL') {

    if ($id == 'NULL') {
      $this->pass = password_hass( $pass , PASSWORD_DEFAULT );
    } else {
      $this->passUser = $passUser;
    }
    
    $this->nameUser = $nameUser;
    $this->nickUser = $nickUser;
    $this->emailUser = $emailUser;
    $this->birthUser = $birthUser;
    }

  //GET
  public function getId() {
    return $this->id;
  }

  public function getNameUser() {
    return $this->nameUser;
  }

  public function getNickUser() {
    return $this->nickUser;
  }

  public function getEmailUser() {
    return $this->emailUser;
  }

  public function getBirthUser() {
    return $this->birthUser;
  }

  public function getPassUser() {
    return $this->birthUser;
  }

  //SET
  public function setNameUser($nameUser) {
    $this->nameUser = $nameUser;
  }

  public function setNickUser($nickUser) {
    $this->nickUser = $nickUser;
  }

  public function setEmailUser($emailUser) {
    $this->emailUser = $emailUser;
  }

  public function setBirthUser($birthUser) {
    $this->birthUser = $birthUser;
  }

  public function setPassUser($birthUser) {
    $this->birthUser = $birthUser;
  }


}


 ?>
