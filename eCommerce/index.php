<!-- Head -->
<?php 
  include'common.php';
  head();
?>

<!-- Cookies Notification -->
<?php
if (isset($_GET['accept-cookies'])){ 
  setcookie('accept-cookies', 'true', time() + 31556925);
  header('Location: ./');
}
?>

<body>

<?php
  if(!isset($_COOKIE['accept-cookies'])){ // If cookie is not set
?>

<div class="cookie-banner">
  <div class="cookie-container">
    <p>GameStation makes use of cookies to ensure that we give you a great user experience. 
    We do not share cookie data or related user behaviour with any third party.</p>
    <a href="?accept-cookies" class="button">Accept</a>
  </div>  
</div>

<?php
}
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/cookies.js"></script>

<!-- Navigation -->
<?php 
  navigation();
?>

<!-- Main Container -->
<div class="container">

  <!-- Carousel -->
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="assets/images/cod.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="assets/images/heat.png"></a>
    <a class="carousel-item" href="#three!"><img src="assets/images/redDead.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="assets/images/spyro.jpg"></a>
  </div>

  <!-- Text -->
  <h2 id="custfav">Most Popular</h2>

  <!-- Product Container -->
  <div class="productContainer">
    <div class="row">

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/gtaCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Grand Theft Auto V</span>
            <span class="price">Price: </span>
            <p class="pricep">$30</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PC/Xbox/PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/odysseyCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Assassin's Creed Odyssey </span>
            <span class="price">Price: </span>
            <p class="pricep">$40</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PC/Xbox/PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/codCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Call of Duty: Modern Warfare</span>
            <span class="price">Price: </span>
            <p class="pricep">$60</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PC/Xbox/PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/overcookedCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Overcooked! 2</span>
            <span class="price">Price: </span>
            <p class="pricep">$20</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PC/Xbox/PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<!-- Map -->
<div class="map">
  <h2 id="where">Where to find us<h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.5983887434327!2d14.49319288199839!3d35.897876838214025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e454a99244079%3A0x9ad2a9f7041d444d!2six-Xatt+Ta&#39;+Xbiex%2C+Ta&#39;+Xbiex!5e0!3m2!1sen!2smt!4v1457561709361" allowfullscreen></iframe>
</div>

<!-- Modals -->
<!-- Login modal -->
<?php 
  loginModal();
?>

<!-- Sign up modal -->
<?php 
  signUpModal();
?>

<!-- footer -->
<?php 
  footer();
?>

<!-- scripts -->
<?php 
  scripts();
?>

<!-- Sidenav Script -->
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

<!-- Modal Script -->
<script>
    $(document).ready(function(){
    $('.modal').modal();
  });
</script>

<!-- Dropdown Script -->
<script>
$(document).ready(function(){
    $('select').formSelect();
  });
</script>

<!-- Carousel Script -->
<script>
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  autoplay();
  function autoplay() {
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 7000);
}
</script>

</body>
</html>