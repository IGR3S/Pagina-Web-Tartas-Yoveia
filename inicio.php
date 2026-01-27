<?php
$css = "inicio";
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

  <div class="carousel-text">
    <h1>Bienvenido a Tartas Yoveia</h1>
    <p>Este texto no se mueve con las slides</p>
  </div>

  <button class="btn prev"><i class="fa-solid fa-circle-chevron-left"></i></i></button>
  <button class="btn next"><i class="fa-solid fa-circle-chevron-right"></i></button>
</div>

<script src="carousel.js"></script>

<h1 class="titulos"> <i class="fa-solid fa-cake-candles"></i> Las mas vendidas <i class="fa-solid fa-cake-candles"></i> </h1>

<div class="masVendidasCaja">
  <div id="descripcionTecnica">
    <p><strong>Nombre de tarta</strong></p>
    <p>Descripcion brebe sobre la tarta <br>a poder ser de varias lineas</p>
    <p>Icono ya sea gluten free o sin azucar</p>
    <p><strong>Precio en €</strong></p>
  </div>
  <img id="masVendidas" src="static/img/placeholder3.png" alt="">
</div>
<div class="masVendidasCaja">
  <div id="descripcionTecnica">
    <p><strong>Nombre de tarta</strong></p>
    <p>Descripcion brebe sobre la tarta <br>a poder ser de varias lineas</p>
    <p>Icono ya sea gluten free o sin azucar</p>
    <p><strong>Precio en €</strong></p>
  </div>
  <img id="masVendidas" src="static/img/placeholder3.png" alt="">
</div>
<div class="masVendidasCaja">
  <div id="descripcionTecnica">
    <p><strong>Nombre de tarta</strong></p>
    <p>Descripcion brebe sobre la tarta <br>a poder ser de varias lineas</p>
    <p>Icono ya sea gluten free o sin azucar</p>
    <p><strong>Precio en €</strong></p>
  </div>
  <img id="masVendidas" src="static/img/placeholder3.png" alt="">
</div>
<div class="masVendidasCaja">
  <div id="descripcionTecnica">
    <p><strong>Nombre de tarta</strong></p>
    <p>Descripcion brebe sobre la tarta <br>a poder ser de varias lineas</p>
    <p>Icono ya sea gluten free o sin azucar</p>
    <p><strong>Precio en €</strong></p>
  </div>
  <img id="masVendidas" src="static/img/placeholder3.png" alt="">
</div>

<?php

require_once("templates/footer.php");

?>