<!-- Head -->
<?php 
  include'common.php';
  head();
?>

<script>
if(sessionStorage.getItem("currentUser")===null) {
  window.location.href = "index.php";
}
</script>

<body>

<!-- Navigation -->
<?php 
  navigation();
?>

<!-- Main Container -->
<div class="container">

  <!-- Text -->
  <h2 id="accountTitle">Account Details</h2>

  <!-- Account info Container -->
  <div class="accountInfo">
    <ul id=details>
      <li><span class="accInfo">Email: </span><span id="emailSpan"></span></li>
      <li><span class="accInfo">Name: </span><span id="nameSpan"></span></li>
      <li><span class="accInfo">Surname: </span><span id="surnameSpan"></span></li>
      <li><span class="accInfo">Date of Birth: </span><span id="dobSpan"></span></li>
      <li><span class="accInfo">Address: </span><span id="addressSpan"></span></il>
      <li><span class="accInfo">Locality: </span><span id="localitySpan"></span></li>
      <li><span class="accInfo">Country: </span><span id="countrySpan"></span></li>
      <li><span class="accInfo">Mobile Number: </span><span id="numberSpan"></span></li>
    </ul>
    <a class="btn waves-effect waves-light btn modal-trigger" href="#update-modal">Update details</a>
    <a class="btn waves-effect waves-light btn" id="logout_button">Sign out</a>
  </div>

  <!-- Update details modal -->
  <div id="update-modal" class="modal">
    <div class="modal-content">
      <div class="input-form">  
        <form method="post">
          <label>Email:</label>
          <input id="emailUpdate" name="email" type="email"/>
          <label>First name:</label>
          <input id="firstnameUpdate" type="text"/>
          <label>Surname:</label>
          <input id="surnameUpdate" type="text"/>
          <label>Date of birth(dd-mm-yyyy):</label>
          <input id="dobUpdate" type="text"/>
          <label>Address:</label>
          <input id="addressUpdate" type="text"/>
          <label>Locality:</label>
          <input id="localityUpdate" type="text"/>
          <label>Country:</label>
          <input id="countryUpdate" type="text"/>
          <label>Mobile number:</label>
          <input id="mobileUpdate" type="text"/>
          <label>Password:</label>
          <input id="passwordUpdate" type="password"/>
          <label>Confirm Password:</label>
          <input id="confirmPasswordUpdate" type="password"/>
          <div class="signupmodal-button">
            <a class="btn waves-effect waves-light btn" id="update_button" type="submit">Update details</a>
          </div>
        </form>
      <p id="outputUpdate"></p>
      </div>
    </div>
  </div>

  <!-- Populate fields script -->
  <script type="text/javascript">
    var retrievedCurrentUser = JSON.parse(sessionStorage.getItem("currentUser"));
    var id = retrievedCurrentUser[0].$oid;

    document.getElementById("emailSpan").innerHTML = retrievedCurrentUser[1];
    document.getElementById("emailUpdate").value = retrievedCurrentUser[1];
    document.getElementById("nameSpan").innerHTML = retrievedCurrentUser[2];
    document.getElementById("firstnameUpdate").value = retrievedCurrentUser[2];
    document.getElementById("surnameSpan").innerHTML = retrievedCurrentUser[3];
    document.getElementById("surnameUpdate").value = retrievedCurrentUser[3];
    document.getElementById("dobSpan").innerHTML = retrievedCurrentUser[4];  
    document.getElementById("dobUpdate").value = retrievedCurrentUser[4]; 
    document.getElementById("addressSpan").innerHTML = retrievedCurrentUser[5];
    document.getElementById("addressUpdate").value = retrievedCurrentUser[5];  
    document.getElementById("localitySpan").innerHTML = retrievedCurrentUser[6];  
    document.getElementById("localityUpdate").value = retrievedCurrentUser[6]; 
    document.getElementById("countrySpan").innerHTML = retrievedCurrentUser[7];  
    document.getElementById("countryUpdate").value = retrievedCurrentUser[7];  
    document.getElementById("numberSpan").innerHTML = retrievedCurrentUser[8];  
    document.getElementById("mobileUpdate").value = retrievedCurrentUser[8];  
  </script>

  <!-- Text -->
  <h2 id="suggested">Suggested for you</h2>

  <!-- Suggested Container -->
  <div class="suggestedForYou">
    <div class="row">

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

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/spidermanCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Marvels Spiderman</span>
            <span class="price">Price: </span>
            <p class="pricep">$30</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

      <!-- Product -->
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="assets/images/heatCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Need for Speed Heat:</span>
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
            <img src="assets/images/unchartedCard.jpg">
          </div>
          <div class="card-content">
            <span class="card-title">Uncharted 4</span>
            <span class="price">Price: </span>
            <p class="pricep">$40</p>
            <span class="platform">Platform: </span>
            <p class="platformp">PS4</p>
            <a class="waves-effect waves-light btn modal-trigger" href="#details-modal">Read more</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Text -->
  <h2 id="purchaseHistory">Purchase History</h2>

  <!-- History Cointainer -->
  <div class="history">
    <div class="row">

    <ul class="collapsible" id="orderHistory"></ul>
      
    </div>
  </div>

</div>

<!-- footer -->
<?php 
  footer();
?>

<!-- scripts -->
<?php 
  scripts();
?>
<script src="js/signOut.js"></script>
<script src="js/updateScript.js"></script>
<script src="js/historyScript.js"></script>

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