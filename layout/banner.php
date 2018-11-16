<div class="fullbanner">

  <!-- IMAGES -->

  <div class="image">
    <img src="../crackBangBoom/images/banner/1.jpg" alt="">
    <div class="text">Texto N°1</div>
  </div>

  <div class="image">
    <img src="../crackBangBoom/images/banner/2.jpg" alt="">
    <div class="text">Texto N°2</div>
  </div>

  <div class="image">
    <img src="../crackBangBoom/images/banner/3.jpg" alt="">
    <div class="text">Texto N°3</div>
  </div>

  <div class="image">
    <img src="../crackBangBoom/images/banner/4.jpg" alt="">
    <div class="text">Texto N°4</div>
  </div>

  <!-- BOTONES -->

  <a href="#" class="back"><img src="../crackBangBoom/images/icons/arrow.svg" alt="atrás"></a>
  <a href="#" class="forth"><img src="../crackBangBoom/images/icons/arrow.svg" style="transform: scaleX(-1);" alt="adelante"></a>

  <!-- PUNTOS -->

  <div class="dots">
    <span class="dot active" onclick="showImg(0)"><img src="../crackBangBoom/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(1)"><img src="../crackBangBoom/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(2)"><img src="../crackBangBoom/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(3)"><img src="../crackBangBoom/images/icons/dot.svg" alt=""></span>
  </div>

  <!-- PLAY/PAUSA -->

  <div class="button">
    <a href="#">
      PLAY
      <!-- <img src="" alt=""> -->
    </a>
  </div>

</div>

<script>

  window.onload = function () {
    var firstSelection = document.querySelector(".image");
    firstSelection.className += " selected";
  }

  var selected = 0;

  function showImg(n) {
    var img = document.getElementsByClassName("image");
    for (var i = 0; i < img.length; i++) {
      if ( img[i].className.includes("selected") ) {
        img[i].className = img[i].className.replace("selected","") ;
        break;
      }
    }
    selected = n;
    img[n].className += " selected";
  }

</script>

<!-- <div class="row content">

  <div class="col-12 slide">
    <a href="#" style="display:none;"><img src="images/icons/arrow.svg" class="arrow-right" alt=""></a>
    <img src="images/icons/icon-cbb.svg" alt="">
    <a href="#" style="display:none;"><img src="images/icons/arrow.svg" class="arrow-left" alt=""></a>
  </div>

  <div class="col-12 go-bottom">
    <div class="dots">
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
    </div>
  </div>

</div> -->
