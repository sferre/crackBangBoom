<?php include('comics.php'); ?>

<?php
foreach ($wishes as $wishlist) {

 ?>

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="<?php echo $wishlist['cover']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p><?php echo $wishlist['title']; ?></p>
        </div>
        <div class="edition">
          <p><?php echo $wishlist['edition']; ?></p>
        </div>

    </div>
  </a>
</div>

<?php } ?>
