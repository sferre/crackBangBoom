<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom!</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/contact-style.css">
  </head>
  <body>

    <div id="desktop-container">

    <!--HEADER-->
    <?php include('layout/header.php'); ?>

    </div>

    <div class="container-fluid contact-principal">
    <!--Formulario -->
      <form class="contact-form" action="contact.php" method="post">

        <!--Titulo -->
        <div class="row-justify-content-center titulo-contact">
          <h1 clas="col-12">CONTACTO</h1>
          <p>Dejanos tus mensaje, duda o consulta despues de la señal... PIIIIP!</p>
        </div>
        <!--Datos del Formulario -->
        <label for=""> Nombre:</label>
          <br>
            <input type="text" name="name" value="">
          <br>
        <label>E-Mail:</label>
          <br>
            <input type="text" name="email" value="">
          <br>
        <label for=""> Asunto:</label>
          <br>
            <input type="text" name="asunto" value="">
          <br>
        <label for=""> Mensaje: </label>
          <br>
            <textarea name="comments" placeholder=" Dejanos tu comentario aquí "></textarea>
              <!-- <span> <?php echo $errorComentario; ?> </span> -->
          <br>
        <div class="row justify-content-center">
            <button class="col-4" type="submit" class="button">  Enviar! </button>
        </div>

      </form>

    </div>

  <div id="desktop-container">

    <!--FOOTER-->
    <div class="container-fluid">
      <?php include('layout/footer.php'); ?>
    </div>

  </div>

  </body>
</html>
