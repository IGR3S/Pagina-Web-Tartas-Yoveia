<?php 

    require_once("templates/header.php");

?>

<div class="carousel">
  <div class="carousel-track">
    <div class="slide">
      <img src="static/img/placeholder1.jpg" alt="">
      <div class="overlay"></div>
    </div>
    <div class="slide">
      <img src="static/img/placeholder2.jpg" alt="">
      <div class="overlay"></div>
    </div>
    <div class="slide">
      <img src="static/img/placeholder3.png" alt="">
      <div class="overlay"></div>
    </div>
  </div>

  <button class="btn prev"><i class="fa-solid fa-circle-chevron-left"></i></i></button>
  <button class="btn next"><i class="fa-solid fa-circle-chevron-right"></i></button>
</div>

<script src="carousel.js"></script>

<?php 

    require_once("templates/footer.php");

?>