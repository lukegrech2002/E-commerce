<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Users"); // Header function is outputted and $title is defined 
outputNavbar(); //Navbar function is outputted
?>

<?php
include('admin-usersLoad.php'); // Includes the admin-usersLoad.php
?>

<div class="container-fluid">
    <!-- Div for resposive table -->
    <div class="table-wrapper table-responsive">
        <div class="table-title">
            <div class="row">
                <!-- Table title -->
                <div class="col-xl-11"><h2>User Details</h2></div>
                <!-- Refresh button -->
                <a href="admin-users.php" class="redbutton pull-right" role="button">Refresh</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <!-- Table Header rows -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Locality</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                allUsers($db); // Calls allUsers(); function from included admin-usersLoad.php file
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
outputFooter(); //Footer function is outputted
?>

