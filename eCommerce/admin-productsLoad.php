<?php 
  include 'connection.php'; // Includes connection.php

  // declaring function
  function allProducts($db){

    // declaring variable for location of 'inventory' table
    $collection = $db->inventory;

    // variable for finding all documents
    $cursor = $collection->find();

    // looping through all documents and declaring them
    foreach($cursor as $prod) {
      $id = $prod['_id'];
      $title = $prod['product_name'];
      $quantity = $prod['quantity'];
      $year = $prod['creation_year'];
      $price = $prod['price'];
      $path = $prod['image'];
      $platform = $prod['platform'];

      // echo's the data in a form of a table
      // edit and delete buttons that hold the corresponding ID is also created and the ID is passed to the link
      echo '<tr>
      <td>' .$id. '</td>
      <td>'.$title.'</td>
      <td>'.$path.'</td>
      <td>'.$quantity.'</td>
      <td>'.$platform.'</td>
      <td>'.$year.'</td>
      <td>'.$price.'</td>
      <td>
      <a href="admin-productUpdate.php?id=' .$id. '" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
      <a href="admin-productDelete.php?id=' .$id. '"  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
      </td>
      </tr>';
    }
  }
?>