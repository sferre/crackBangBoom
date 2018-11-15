<?php

class BD {

  private $dsn = 'mysql:host=localhost;dbname=cbb';
  private $user = 'root';
  private $pass = 'root';
  private $opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
  private $conex;

  function __construct() {
    try {
        //me conecto a la BD
        $this->conex = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        // $query = $conex->query('SELECT * FROM usuarios');
        // $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

      }catch( PDOException $ex ){
          // echo 'Error con la BD, contacta con el administrador del sistema';
          echo 'El error es:'. $ex->getMessage();
      }
  }

  public function guardarUsuario(Usuario $usuario){
    $query->$this->conex->prepare('INSERT INTO usuarios(idusuarios,nombre_completo,nombre_usuario,email_usuario,pais_nacimiento,img_avatar,pass_usuario) VALUE (:idusuarios,:nombre_completo,:nombre_usuario,:email_usuario,:pais_nacimiento,:img_avatar,:pass_usuario)');

    $query->bindValue(':idusuarios', $usuario->getId());
    $query->bindValue(':nombre_completo', $usuario->getNameUser());
    $query->bindValue(':nombre_usuario', $usuario->getNickUser());
    $query->bindValue(':email_usuario', $usuario->getEmailUser());
    $query->bindValue(':pais_nacimiento', $usuario->getCountryUser());
    $query->bindValue(':img_avatar', $usuario->getAvatarUser());
    $query->bindValue(':pass_usuario', $usuario->getPassUser());

    $query->execute();

    // guardo el ultimo ID guardado, metodo que ya viene con la base
    $id = $this->conex->lastInsertId();

    //setId es un metodo de User.php
    $usuario->setId($id);

    return $usuario;

  }




}
