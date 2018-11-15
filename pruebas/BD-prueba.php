<?php


class BD {

  private $dsn = 'mysql:host=localhost;dbname=usuarios';
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

public function gardarUsuario(Usuario $usuario){
  $this->conex->prepare('INSERT INTO usuarios(username, edad, telefono, password, avatar, email) VALUE (:username, :edad, :telefono, :password, :avatar, :email)');

  $query->bindValue(':username', $usuario->getUsername());
  $query->bindValue(':edad', $usuario->getEdad());
  $query->bindValue(':telefono', $usuario->getTelefono());
  $query->bindValue(':password', $usuario->getPasswrod());
  $query->bindValue(':avatar', $usuario->getAvatar());
  $query->bindValue(':email', $usuario->getEmail());

  $query->execute();

  $id = $this->conex->lastInsertId();

  $Usuario->setId($id)

  return $usuario;

}
public function treaerPorEmail($email){
  $query = $this->conex->prepare('SELECT * FROM usuarios WHERE email = :email')
  $query->indvalue(":email",$email);
  $query->execute();
  $query->fetch(PDO::FETCH_OBJ);



}
public function traerTodos(){
 $query = $this->conex->query("SELECT * FROM usuarios");
 $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
 return $usuarios;
}

}
