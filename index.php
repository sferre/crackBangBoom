<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>WebComics</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
  </head>

  <body>

    <!--HEADER-->
    <?php include('layout/header.php'); ?>

    <!--BANNER-->
    <div class="container-fluid ">
      <div class="row banner">
        <div class="col-12">
          Banner
        </div>
      </div>
    </div>

    <!--CONTENIDO-->
    <div class="container-fluid">

      <!--Sección de Novedades-->
      <div class="row red section">
        <div class="name-section col-12">
          Novedades
        </div>
        <div class="col-12 comic-section">
          <div class="allitems">

            <!--LISTADO DE COMICS-->
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>

          </div>
        </div>
      </div>

      <!--Sección de Géneros-->
      <div class="row blue section">
        <div class="name-section col-12">
          Generos
        </div>
        <div class="comic-section col-12">
          <div class="allitems">

            <!--LISTADO DE COMICS-->
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>
            <?php include('layout/item-comic.php'); ?>

          </div>
        </div>
      </div>

      <!--Sección de Doble-->
      <div class="row section no-gap">

        <!--Lo más popular de Marvel-->
        <div class="gray subsection col-12">
          <div class="group-a row">
            <div class="name-section col-12">
              Lo más popular de Marvel
            </div>
            <div class="comic-section col-12">
              <div class="allitems">

                <!--LISTADO DE COMICS-->
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>

              </div>
            </div>
          </div>
        </div>

        <!--Lo más popular de DC-->
        <div class="gray subsection col-12">
          <div class="group-b row">
            <div class="name-section col-12">
              Lo más popular de DC
            </div>
            <div class="comic-section col-12">
              <div class="allitems">

                <!--LISTADO DE COMICS-->
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>
                <?php include('layout/item-comic.php'); ?>

              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!--FOOTER-->
    <div class="container-fluid">
      <?php include('layout/footer.php'); ?>
    </div>

  </body>


</html>
