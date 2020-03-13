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
  <?php
    session_start();

    //Connecting to MongoDB database
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerceweb;
    $collection=$db->orders;
    $inventoryCollection=$db->inventory;
    
    $productArray = $_SESSION['productIDs']; //Retrieving ProductID array from session
    $customerID = $_SESSION['customerID']; //Retrieving customer ID from session
    $totalCost = $_SESSION['totalCost']; //Retrieving total cost from session
    $productArray = json_decode($_SESSION['productIDs'], true);  //Converting JSON string to PHP array 
    
    echo '<div id="checkoutConfirmationDiv">';
    if($_POST){ //Posting shipping details to database
        $insert= array(
            'customer_id' => trim($customerID, '"'),
            'email'=> $_POST['shippingemail'],
            'address'=> $_POST['shippingaddress'],
            'locality'=> $_POST['shippinglocality'],
            'country'=> $_POST['shippingcountry'],
            'orders'=> $productArray,
            'total_cost' => $totalCost
        );

        //Displaying confirmation message
        if($collection->insertOne($insert))
        {
          echo 'Your Order Has been Received, Thanks';
        }else{
          echo 'Order Failiure';
        }
    }else{
        echo 'No Details Entered';
    }

    echo '</div>';
    echo '<div id="checkoutConfirmationDivBtn">';
    echo '<a class="waves-effect waves-light btn modal-trigger" href="index.php" onclick="emptyCart()">Return To Home Page</a>';
    echo '</div>';
?>

<?php
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerceweb;
    $inventoryCollection=$db->inventory;

    for($i=0; $i<count($productArray); $i++){
      $productName = $productArray[$i]['name'];
      $productPlatform = $productArray[$i]['platform'];
      $qtyPurchased = $productArray[$i]['count'];

      //Updating stocks count
      $updateStocks = $inventoryCollection->updateOne(
        ['product_name'=> $productName, 'platform'=> $productPlatform], //Selecting product
        [ '$inc' => ['quantity'=> - $qtyPurchased]] //Decrementing stock by quantity purchased
      );
    }

    //Removing all session variables
    session_unset();

    //destroying the session
    session_destroy();
?>

<!-- Modals -->
<!-- Login modal -->
<?php 
  loginModal();
?>

<!-- Sign up modal -->
<?php 
  signUpModal();
?>

<!-- Purchase modal -->
<div id="purchased-modal" class="modal">
  <div class="modal-content">
    <div class="thankyou">
      <span class="details-title">Thank you for your purchase!</span>
    </div>
    <div class="close-button">
      <a class="btn waves-effect waves-light" href="index.php" type="submit" name="action">Close</a>
    </div>
  </div>
</div> 

<!-- scripts -->
<?php 
  scripts();
?>

<script src="js/checkout-confirmation.js"></script>

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