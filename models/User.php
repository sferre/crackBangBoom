<?php


class User {

  private $idUser;
  private $nameUser;
  private $nickUser;
  private $emailUser;
  private $birthUser;
  private $passUser;

  function __construct($nameUser,$nickUser,$emailUser,$birthUser,$passUser) {

    $this->nameUser = $nameUser;
    $this->nickUser = $nickUser;
    $this->emailUser = $emailUser;
    $this->birthUser = $birthUser;
    $this->passUser = $passUser;

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
