<?php


class User {

  private   $id;
  protected $nameUser;
  protected $nickUser;
  protected $emailUser;
  protected $countryUser;
  protected $avatarUser;
  protected $passUser;

  function __construct($nameUser,$nickUser,$emailUser,$countryUser,$passUser,$avatarUser='',$id = 'NULL') {

    if ($id == 'NULL') {
      $this->passUser = password_hash( $passUser , PASSWORD_DEFAULT );
    } else {
      $this->passUser = $passUser;
    }

    $this->nameUser = $nameUser;
    $this->nickUser = $nickUser;
    $this->emailUser = $emailUser;
    $this->countryUser = $countryUser;
    $this->avatarUser = $avatarUser;
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

  public function getCountryUser() {
    return $this->countryUser;
  }

  public function getAvatarUser() {
    return $this->avatarUser;
  }

  public function getPassUser() {
    return $this->passUser;
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

  public function setCountryUser($countryUser) {
    $this->countryUser = $countryUser;
  }

  public function setPassUser($passUser) {
    $this->passUser = $passUser;
  }

  public function setAvatarUser($avatarUser) {
    $this->avatarUser = $avatarUser;
  }

  public function setId($id) {
    $this->id = $id;
  }

}


 ?>
