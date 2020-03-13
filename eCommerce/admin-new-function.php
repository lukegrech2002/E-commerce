<?php
include 'connection.php'; // includes connection.php

// declaring variable to 'inventory' table
$collection = $db->inventory;

// taking user input from form
$product_name = filter_input(INPUT_POST, 'name');
$image = filter_input(INPUT_POST, 'image');
$quantity = filter_input(INPUT_POST, 'quantity');
$platform = filter_input(INPUT_POST, 'platform');
$creation_year = filter_input(INPUT_POST, 'year');
$price = filter_input(INPUT_POST, 'price');
$keywords = filter_input(INPUT_POST, 'keywords');

// placing data into a php array
$array =[
    "product_name" => $product_name,
    "image" => $image,
    "quantity" => $quantity,
    "platform" => $platform,
    "creation_year" => $creation_year,
    "price" => $price,
    "keywords" => $keywords,
];

// inserting the php array into the database
$insertResult = $collection->insertOne($array);

// if one document has been added, go to admin-products.php
if ($insertResult->getInsertedCount() == 1)
{
    header("Location: admin-products.php");
}

// other error
else {
    echo "Product Not Added.";
}
?>