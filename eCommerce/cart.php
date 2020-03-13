<!-- Head -->
<?php 
  include'common.php';
  head();
?>

<body>

<!-- Navigation -->
<?php 
   navigation();
?>

<!-- Main Container -->
<div class="container">
  <!-- Text -->
  <h2 id="cartTitle">Cart</h2>

  <!-- Cart Product -->
  <div id="card">
  </div>

  <!-- Order Total and Empty Cart -->
  <div id="totalCost">
    <div class="total">
      <div class="col s12 m7">
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <span class="card-title">Order Total:</span>
              <span id="price"></span>
            </div>
            <div class="card-action">
              <a id="proceedToCheckout"></a>
              <a class="waves-effect waves-light btn modal-trigger" onclick="emptyCart()" href="#empty-cart">Empty Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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

<script src="js/cart.js"></script>

<!-- Sidenav Script -->
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

<!-- Modal script -->
<script>
    $(document).ready(function(){
    $('.modal').modal();
    $('#purchased-modal').modal({
		dismissible: false
	  });
  });
</script>

<!-- Dropdown Script -->
<script>
$(document).ready(function(){
    $('select').formSelect();
  });
</script>
  
</body>
</html>