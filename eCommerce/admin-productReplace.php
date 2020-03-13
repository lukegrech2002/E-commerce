<?php
include 'connection.php'; // Includes connection.php

// declaring variable for location of 'inventory' table
$collection = $db->inventory;

// storing user input in declared variables
$product_name = filter_input(INPUT_POST, 'name');
$image = filter_input(INPUT_POST, 'image');
$quantity = filter_input(INPUT_POST, 'quantity');
$platform = filter_input(INPUT_POST, 'platform');
$creation_year = filter_input(INPUT_POST, 'year');
$price = filter_input(INPUT_POST, 'price');
$keywords = filter_input(INPUT_POST, 'keywords');
$id = filter_input(INPUT_POST, 'id');

// Getting product ID from 'edit' button in admin-productUpdate.php, declaring its variable
$replaceCr =[
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//making a php array with the data
$array =[
    "product_name" => $product_name,
    "image" => $image,
    "quantity" => $quantity,
    "platform" => $platform,
    "creation_year" => $creation_year,
    "price" => $price,
    "keywords" => $keywords,
];

// using array and criteria to replace the data in the table
$updateRes = $db->inventory->replaceOne($replaceCr, $array);

// if one document has been replaced
if ($updateRes->getModifiedCount() == 1)
{
    // go to admin-products.php
    header("Location: admin-products.php");
}

// other error
else {
    echo "Product Not Updated.";
}
?>