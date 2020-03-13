<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Orders"); // Header function is outputted and $title is defined 
outputNavbar(); //Navbar function is outputted
?>

<?php
include('admin-ordersLoad.php'); // includes admin-ordersLoad.php
?>

<div class="container-fluid">
    <!-- Div for responsive table -->
    <div class="table-wrapper table-responsive">
        <div class="table-title">
            <div class="row">
                <!-- Table title -->
                <div class="col-xl-11"><h2>Order Details</h2></div>
                <!-- Refresh button -->
                <a href="admin-orders.php" class="redbutton" role="button">Refresh</a>
            </div>
        </div>
        <?php 
            allOrders($db); // calling allOrders(); function from the included admin-ordersLoad.php file
        ?>
    </div>
</div>

<?php
outputFooter(); //Footer function is outputted
?>
