<?php

if($_POST){

  $sqlinsert = 'INSERT INTO usuarios (nombre_completo, nombre_usuario, email_usuario, pais_nacimiento, pass_usuario) VALUES (:nombre_completo, :nombre_usuario, :email_usuario, :pais_nacimiento, :pass_usuario)';
  $ins = $conex->prepare($sqlinsert);
  $ins->bindValue(':nombre_completo', $_POST['NombreCompleto']);
  $ins->bindValue(':nombre_usuario', $_POST['NombreUsuario']);
  $ins->bindValue(':email_usuario', $_POST['Email']);
  $ins->bindValue(':pais_nacimiento', $_POST['PaisNacimiento']);
  //$ins->bindValue(':img_avatar', $_POST['Avatar']);
  $ins->bindValue(':pass_usuario', $_POST['Password']);
  $ins->execute();
}

//var_dump($usuarios);
