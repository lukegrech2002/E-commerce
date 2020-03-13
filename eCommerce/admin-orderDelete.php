<?php 
include 'connection.php'; // Includes connection.php

// declaring variable to 'orders' table
$collection = $db->orders;

// gets the ID from the 'delete' button 
$id = $_GET['id'];

// declaring criteria for the id
$deleteCritera = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

// deleting the order for the matching criteria
$delete = $db->orders->deleteOne($deleteCritera);

// if one order is deleted, reload the page
if($delete->getDeletedCount()==1)
{
    header("Location: admin-orders.php");
}

// other error
else {
    echo "Error deleting order.";
}
  
?>