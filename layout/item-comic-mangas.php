<?php include('comics.php'); ?>

<?php
foreach ($mangas as $manga) {
?>

<div class="item">

  <a href="show-item.php?seccion=mangas&id=<?php echo $manga['id']; ?>">
    <?php //echo $manga['id']; ?>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="<?php echo $manga['cover']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p><?php echo $manga['title']; ?></p>
        </div>
        <div class="edition">
          <p><?php echo $manga['edition']; ?>1</p>
        </div>
        <div class="price">
          <p><?php echo $manga['price']; ?></p>
        </div>
    </div>
  </a>
</div>

<?php } ?>
