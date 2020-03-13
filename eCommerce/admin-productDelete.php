<?php 
include 'connection.php'; // inclused connection.php

// declaring variable for location of 'inventory' table
$collection = $db->inventory;

// getting product ID from 'delete' button in admin-productsLoad.php
$id = $_GET['id'];

// declaring criteria that includes the ID
$deleteCritera = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

// deleteing document from table with the matching criteria
$delete = $db->inventory->deleteOne($deleteCritera);

// if one document is deleted
if($delete->getDeletedCount()==1)
{
    // reload page
    header("Location: admin-products.php");
}

// other error
else {
    echo "Error deleting product.";
}
  
?>