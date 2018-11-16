<footer class="row">

  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

  <div class="socialmedia col-12">
    <ul>
      <li><a href="#"><span class="ion-social-facebook"></span></a></li>
      <li><a href="#"><span class="ion-social-twitter"></span></a></li>
      <li><a href="#"><span class="ion-social-instagram"></span></a></li>
      <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
    </ul>
  </div>

  <div class="bottom-menu col-12">
    <?php
    if (!$auth->estoyLogueado()) {
     ?>
    <a href="sobre-nosotros.php">Sobre nosotros</a> | <a href="faq.php">FAQs</a> | <a href="contact.php">Contacto</a> | <a href="login.php">Ingresar</a> | <a href="register.php">Registrarme</a>
  <?php } else { ?>
    <a href="sobre-nosotros.php">Sobre nosotros</a> | <a href="faq.php">FAQs</a> | <a href="contact.php">Contacto</a> | <a href="logout.php">Logout</a> | <a href="user_profile.php">Mi Perfil</a>
  <?php } ?>
  </div>

  <div class="signature col-12">
    © Grupo N°4
  </div>

</footer>
