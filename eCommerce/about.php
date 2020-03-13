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
  <div id="about">
    <div class="container1">
      <h1>About us</h1>
      <div id="about-container">
        <img src="assets/images/logo2.png">
        <p>GameStation is a company that sells videogames for Xbox One, PS4 and PC over the internet through our website. It was founded in 2020 and is located in the small island of Malta. It is also one of the few companies that deliver videogame products worldwide.</p>
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

</body>
</html>