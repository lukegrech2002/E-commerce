<?php 
include 'connection.php'; // Includes connection.php

// declaring variable for location of 'inventory' table
$collection = $db->inventory;

// getting product ID from 'delete' button in admin-productsLoad.php
$id = $_GET['id'];

// declaring criteria that includes the ID
$updateCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

// updating document from table with the matching criteria
$cursor = $db->inventory->find($updateCriteria);

// looping through 'inventory' table and echo's a new page, where the data is putputted in the form of a form
foreach ($cursor as $prod)
{
    include('admin-common.php');
    outputHeader("Admin | Edit Product");
    outputNavbar(); 
    echo '
    <div class="container-fluid">
    <div class="table-wrapper table-responsive">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Edit Product</h2>
                <h5>Product ID: ' . $prod['_id'] . ' </h5></div>
            </div>
        </div>
        <div class="addnew">
            <form onsubmit="return isEmpty() && allNum()" action="admin-productReplace.php" method="POST"> 
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Platform</th>
                            <th>Year</th>
                            <th>Price ($)</th>
                            <th>Keywords</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" id="product_name" name="name" value="' . $prod['product_name'] . '"></td>
                            <td><input type="text" id="image" name="image" value="' . $prod['image'] . '"></td>
                            <td><input type="text" id="quantity" name="quantity" value="' . $prod['quantity'] . '"></td>
                            <td><input type="text" id="platform" name="platform" value="' . $prod['platform'] . '"></td>
                            <td><input type="text" id="creation_year" name="year" value="' . $prod['creation_year'] . '"></td>
                            <td><input type="text" id="price" name="price" value="' . $prod['price'] . '"></td>
                            <td><input type="text" id="keywords" name="keywords" value="' . $prod['keywords'] . '"></td>
                        </tr>
                        <tr><td><input type="hidden" id="id" name="id" value="' . $prod['_id'] . '"></td></tr>
                    </tbody>
                </table>
                <div class="col text-center">
                    <input class="redbutton" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
    <p class="text-center" id="msgerror"> </p>
</div>';

    outputFooter(); 
}

?>