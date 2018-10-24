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



}


 ?>
