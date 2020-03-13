<?php 
  include 'connection.php'; // Includes connection.php

  // declaring function
  function allUsers($db){

    // declaring variable for location of 'customers' table
    $collection = $db->customers;

    $cursor = $collection->find();

    // looping through all users in 'customer' table and declares the data as variables
    foreach($cursor as $user) {
      $id = $user['_id'];
      $first_name = $user['first_name'];
      $last_name = $user['last_name'];
      $date_of_birth = $user['date_of_birth'];
      $address = $user['address'];
      $locality = $user['locality'];
      $country = $user['country'];
      $email_address = $user['email_address'];
      $mobile_number = $user['mobile_number'];
      
      //echo's the data in the form of a table
      echo '<tr>
      <td>' .$id. '</td>
      <td>'.$first_name.'</td>
      <td>'.$last_name.'</td>
      <td>'.$date_of_birth.'</td>
      <td>'.$address.'</td>
      <td>'.$locality.'</td>
      <td>'.$country.'</td>
      <td>'.$email_address.'</td>
      <td>'.$mobile_number.'</td>
      </tr>';
   
    }
  }


?>