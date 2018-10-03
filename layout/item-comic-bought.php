<?php include('comics.php'); ?>

<?php
foreach ($boughts as $bought) {

 ?>

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="<?php echo $bought['cover']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p><?php echo $bought['title']; ?></p>
        </div>
        <div class="edition">
          <p><?php echo $bought['edition']; ?></p>
        </div>

    </div>
  </a>
</div>

<?php } ?>
