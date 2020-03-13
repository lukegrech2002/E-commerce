<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Dashboard"); // Header function is outputted and $title is defined 
outputNavbar(); //Navbar function is outputted
?>
<!-- Cards deck feature -->
<div class="cards text-center">
    <div class="card-deck m-auto">
        <div class="card m-3 ml-5">
            <!-- Body of first card -->
            <div class="card-body p-5">
                <!-- Heading -->
                <h5 class="card-title mb-5">Users</h5>
                <p class="card-text">View all customer information here.</p>
                <!-- Button with link to view more information -->
                <a href="admin-users.php" class="redbutton">View all Users</a>
            </div>
        </div>
        <div class="card m-3">
            <div class="card-body p-5">
                <h5 class="card-title mb-5">Orders</h5>
                <p class="card-text">View all orders and their details here.</p>
                <a href="admin-orders.php" class="redbutton">View all Orders</a>
            </div>
        </div>
        <div class="card m-3 mr-5">
            <div class="card-body p-5">
                <h5 class="card-title mb-5">Products</h5>
                <p class="card-text">View, update, add and delete products here.</p>
                <a href="admin-products.php" class="redbutton">View all Products</a>
            </div>
        </div>
    </div>
</div>
<?php
outputFooter(); //Footer function is outputted
?>