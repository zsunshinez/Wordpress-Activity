 
 <?php
/* template Name: home */

get_header();

?>

<div class="container">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/cappu.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/frappe.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/latte.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="rectangle">

  <div class="menu"> 
  <a href="menu.html">

    <div class="typegroup">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/kape.jpg"style="width:300px;height:300px;">
  <div class="type"> What's New </div>

  <div class="typegroup">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/drinks.jpg" style="width:300px;height:300px;">
  <div class="type"> Drinks </div>

  <div class="typegroup">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/pastries1.jpg" style="width:300px;height:300px;">
  <div class="type"> Pastries </div>
</a>
   </div>

</div>
<?php get_footer(); ?>