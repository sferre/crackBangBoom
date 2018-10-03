<?php include('comics.php');

foreach ($charactersMarvel as $characterMarvel) { ?>

<div class="item">
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <a>
      <img src="<?php echo $characterMarvel['pic']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
      </a>
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
      <div class="price">
        <p><?php echo $characterMarvel['position']; ?></p>
      </div>
      <div class="title">
        <a><p><?php echo $characterMarvel['character']; ?></p></a>
      </div>
      <div class="edition">
        <p><i><?php echo $characterMarvel['likes'].' likes'; ?></i></p>
      </div>
    </div>

</div>

<?php } ?>
