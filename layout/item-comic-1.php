<?php include('comics.php'); ?>

<?php
foreach ($novedades as $novedad) {

 ?>

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="<?php echo $novedad['cover']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>Wonder Woman</p>
        </div>
        <div class="edition">
          <p>ISSUE #01</p>
        </div>
        <div class="price">
          <p>$99.99</p>
        </div>
    </div>
  </a>
</div>

<?php } ?>
