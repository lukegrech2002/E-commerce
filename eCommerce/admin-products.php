<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Products"); // Header function is outputted and $title is defined 
outputNavbar(); //Navbar function is outputted
?>

<?php
include('admin-productsLoad.php'); // Includes admin-productsLoad.php
?>

<div class="container-fluid">
    <!-- Responsive table -->
    <div class="table-wrapper table-responsive"> 
        <div class="table-title table2title">
            <div class="row">
                <!-- Table title -->
                <div class="col-xl-10"><h2>Product Details</h2></div>
                <!-- New product button -->
                <a href="admin-new.php" class="redbutton pull-right" role="button">Add New Product</a>
                <!-- Refresh button -->
                <a href="admin-products.php" class="redbutton pull-right" role="button">Refresh</a>
            </div>
        </div>
        <div class="products">
            <table class="table table-striped table-bordered">
                <thead>
                    <!-- Table Header rows -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Platform</th>
                        <th>Year</th>
                        <th>Price (£)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Table Data rows -->
                <?php 
                    allProducts($db); // calling allProducts() function from admin-productsLoad.php
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
outputFooter(); //Footer function is outputted
?>
