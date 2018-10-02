<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
      <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" href="css/main-style.css">
      <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil!</title>
  </head>
  <body>
      <!--HEADER-->
      <?php include('layout/header.php'); ?>

      <div class="container-fluid">
         <h1 class="tituloPerfil">Mi Perfil</h1>
        <div class="row perfil">

            <!--Imagen del usuario-->
            <div class="col-4 img-perfil">
              <img src="images/icons/profile-pic.jpg" alt="">
            </div>
            <!--Info Personal del usuario-->
            <div class="col-8 info-personal">
              <div class="row">
                <div class="col-12 nombre-usuario misDatos">
                  <h1>Nombre Completo :</h1> 
                  <p>Pepe pipo </p>
                  <h1>Nombre de Usuario :</h1>
                  <p>Zaraza</p>
                  <h1>Pais de Nacimiento :</h1>
                  <p>Santa Lucia</p>
                  <h1>E-Mail :</h1>
                  <p>pepe123@gmail.com</p>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 edit-info-personal">
            <ul class="col-12">
              <li><a class=""href="#">Editar Info</a></li>
              <li><a class=""href="#">Sing Out</a></li>
            </ul>

          </div>
        <!--Info del usuario en la WEB-->
        <div class="row info-web">

          <div class="info-compras">
            <a href="#"> <p>Compras</p> </a>
            <p> Todas tus compras realizadas</p>
          </div>

          <div class="info-list">
            <a href="#"> <p>Wish List</p> </a>
            <p> Favoritos guardados</p>
          </div>

          <div class="info-pago">
              <a href="#"> <p>Método de pago</p> </a>
              <p>Editar o agregar método de pago</p>
          </div>
        </div>

        <!--FOOTER-->
        <div class="container-fluid">
          <?php include('layout/footer.php'); ?>
        </div>

      </div>


  </body>
</html>
