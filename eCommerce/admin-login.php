<?php include('admin-common.php'); // Includes the admin-common.php 
outputHeader("Admin | Log In"); // Header function is outputted and $title is defined 
?>

    <!-- Centering the login on the screen -->
    <div class="center-login d-flex justify-content-center align-items-center">
        <div class=" wrapper">
            <form class="mb-0"  method="POST">
                <!-- Label and input for Username -->
                <div class="form-group col text-center">
                    <label class="text-center" for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <!-- Label and input for Password -->
                <div class="form-group col text-center">
                    <label class="text-center" for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <!-- Red Submit button that redirects admin to the dashboard -->
                <div class="col text-center">
                    <a id="login-button" type = "submit" class="redbutton">Sign In</a>
                    <p class="text-center" id ="error"></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>