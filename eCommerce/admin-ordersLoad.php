<?php 
  include 'connection.php'; // includes connection.php

  // declaring function called 'allOrders'
  function allOrders($db){

    // declaring variable for 'orders' table location
    $collection = $db->orders;

    $cursor = $collection->find();

    // loop to find all orders
    foreach($cursor as $order) {
      $id = $order['_id'];
      $customer_id = $order['customer_id'];
      $email = $order['email'];
      $address = $order['address'];
      $locality = $order['locality'];
      $country = $order['country'];
      $orders = $order['orders'];
      $total_cost = $order['total_cost'];
     
      // echo's out the data for every order in the card
      echo '<div class="card card-space">
              <div class="card-body">
                <a href="admin-orderDelete.php?id=' .$id. '"  class="delete pull-right" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <h5 class="card-title">Order ID: '.$id.' </h5> 
                <p class="card-text order-card">Customer ID: '.$customer_id.' </p>
                <p class="card-text order-card">Customer Email: '.$email.'</p>
                <p class="card-text order-card">Customer Address: '.$address.'</p>
                <p class="card-text order-card">Customer Locality: '.$locality.'</p>
                <p class="card-text order-card">Customer Country: '.$country.'</p>';

      //if 'order' table finds an array
      if (count ($order['orders'])) 
      {
        echo '<hr/><p class="card-text font-weight-bold order-card">Customer Orders</p>';
        
        // nestd loop to loop through array in 'order' table
        foreach ($order['orders'] as $i)
        {
          $product_id = $i['product_id'];
          $name = $i['name'];
          $count = $i['count'];
          $price = $i['price'];
          $platform = $i['platform'];

          // echo's the data in the array to the card
          echo '  <hr/>
                  <p class="card-text order-card">Product ID: '.$product_id.'</p>
                  <p class="card-text order-card">Product Name: '.$name.'</p>
                  <p class="card-text order-card">Quantity: '.$count.'</p>
                  <p class="card-text order-card">Price Per Item: £'.$price.'</p>
                  <p class="card-text order-card">Platform: '.$platform.'</p>';
        }

        // echo's closing divs for card
        echo '<hr/>
              <p class="card-text font-weight-bold order-card">Total Cost:  £'. $total_cost.'</p>
              </div>
              </div>';
      }
    }
  }
?>