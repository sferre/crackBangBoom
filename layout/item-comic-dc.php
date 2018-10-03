<?php include('comics.php');

foreach ($charactersDC as $characterDC) { ?>

<div class="item">
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <a>
      <img src="<?php echo $characterDC['pic']; ?>" alt="">
      <!-- <img src="" alt="oferta"> -->
      </a>
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="price">
          <p><?php echo $characterDC['position']; ?></p>
        </div>
        <div class="title">
          <a><p><?php echo $characterDC['character']; ?></p></a>
        </div>
        <div class="edition">
          <p><i><?php echo $characterDC['likes'].' likes'; ?></i></p>
        </div>
    </div>

</div>

<?php } ?>
