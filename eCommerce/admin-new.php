<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Add Product"); // Header function is outputted and $title is defined 
outputNavbar(); //Navbar function is outputted
?>

<div class="container-fluid">
    <!-- Div for responsive table -->
    <div class="table-wrapper table-responsive">
        <div class="table-title">
            <div class="row">
                <!-- Table title -->
                <div class="col-sm-8"><h2>Add a New Product</h2></div>
            </div>
        </div>
        <div class="addnew">
            <!-- Form that includes JavaScript validation -->
            <form onsubmit="return isEmpty() && allNum()"  action="admin-new-function.php" method="POST"> 
                <table class="table table-bordered">
                    <thead>
                        <!-- Table Heading row -->
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
                        <!-- Table Data rows -->
                        <tr>
                            <td><input type="text" id="product_name" name="name"></td>
                            <td><input type="text" id="image" name="image"></td>
                            <td><input type="text" id="quantity" name="quantity"></td>
                            <td><input type="text" id="platform" name="platform"></td>
                            <td><input type="text" id="creation_year" name="year"></td>
                            <td><input type="text" id="price" name="price"></td>
                            <td><input type="text" id="keywords" name="keywords"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Center aligned button -->
                <div class="col text-center">
                    <input class="redbutton" type="submit" value="Add Product">
                </div>
            </form>
        </div>
    </div>
    <!-- Center aligned error message that changes according to JavaScript -->
    <p class="text-center" id="msgerror"> </p>
</div>


<?php
outputFooter(); //Footer function is outputted
?>

