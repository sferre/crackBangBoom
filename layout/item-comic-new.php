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
          <p><?php echo $novedad['title']; ?></p>
        </div>
        <div class="edition">
          <p><?php echo $novedad['edition']; ?></p>
        </div>
        <div class="price">
          <p><?php echo $novedad['price']; ?></p>
        </div>
    </div>
  </a>
</div>

<?php } ?>
