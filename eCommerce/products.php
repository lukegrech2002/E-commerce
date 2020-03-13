<!-- Head -->
<?php 
  include'common.php';
  include'productsLoad.php';
  head();
?>

<body>

<!-- Navigation -->
<?php 
  navigation();
?>

<!-- Main Container -->
<div class="container">

  <!-- Search -->
  <div class="searchdiv">
    <input id="search" type="search" placeholder=" Search Games...">
    <div id="dropDown" class="input-field col s12">
      <select id="filter">
        <option value="null" disabled selected>Platform</option>
        <option value="all">All</option>
        <option value="pc">PC</option>
        <option value="xbox">XBOX</option>
        <option value="ps4">PS4</option>
      </select>
    </div>
    <div id="dropDown" class="input-field col s12">
      <select id="filterPrice">
        <option value="" disabled selected>Price</option>
        <option value="1">Low to High</option>
        <option value="2">High to Low</option>
      </select>
    </div>
  </div>

  <!-- Product Container -->
  <div class="productContainer">
    <div class="row" id="content">
      <!-- Product -->
      <?php 
        allProducts($db);
      ?>
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
<script src="js/searchScript.js"></script>
<script src="js/filterPlatformScript.js"></script>
<script src="js/filterPriceScript.js"></script>
<script src="js/cart.js"></script>

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

</body>
</html>