<?php include('comics.php'); ?>

<?php
foreach ($historys as $history) {

 ?>

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="<?php echo $history['cover']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p><?php echo $history['title']; ?></p>
        </div>
        <div class="edition">
          <p><?php echo $history['edition']; ?></p>
        </div>

    </div>
  </a>
</div>

<?php } ?>
