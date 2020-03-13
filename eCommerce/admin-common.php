<?php
// Function for outputting the Header
function outputHeader ($title) {
echo    '<!DOCTYPE html>';
echo    '<html lang="en">';
echo    '<head>';
echo        '<meta charset="UTF-8">';
echo        '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            // Link to Bootstrap
echo        '<link rel="stylesheet" href="css/bootstrap.css">';
            // Link to Stylesheet
echo        '<link rel="stylesheet" href="css/admin-style.css">';
            // Link to jQuery
echo        '<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>';
            // Link to JavaScript files
echo        '<script src="js/bootstrap.js"></script>';
echo        '<script src="js/validate.js"></script>';
echo        '<script src="js/admin-login.js"></script>';
            // Link to AJAX
echo        '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
echo        '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo        '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';
            // Link to Icon pack
echo        '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
echo        '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
echo        '<title>' . $title . '</title>';
echo    '</head>';
echo    '<body>';
}
function outputNavbar() {
echo    '<div class="content">';
echo    '<div class="heading">';
echo        '<nav class="navbar navbar-expand-lg navbar-light">';
                // Making the Logo image a link to the Dashboard
echo            '<a class="navbar-brand" href="admin-dashboard.php">';
echo                '<img src="assets/images/logo-short.png" width="35" height="35" alt="Logo">';
echo            '</a>';
                // Bootstrap's Hamburger menu for responsiveness
echo            '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
echo                '<span class="navbar-toggler-icon"></span>';
echo            '</button>';
echo            '<div class="collapse navbar-collapse justify-content-end" id="navbarNav">';
echo                '<ul class="navbar-nav ">';
                        // Navigation links start here
echo                    '<li class="nav-item">';
echo                        '<a class="nav-link" href="admin-users.php">Users</a>';
echo                    '</li>';
echo                    '<li class="nav-item">';
echo                        '<a class="nav-link" href="admin-orders.php">Orders</a>';
echo                    '</li>';
echo                    '<li class="nav-item">';
echo                       '<a class="nav-link" href="admin-products.php">Products</a>';
echo                    '</li>';
echo                '</ul>';
echo            '</div>';
echo        '</nav>';
echo    '</div>';
}

function outputFooter(){
echo            '</div>';
                // Simple footer
echo            '<div class="foot">';
echo                '<p>Website designed by Sara Hamilton, Damon Sims and Luke Grech.</p>';
echo            '</div>';
echo        '</body>';
echo    '</html>';
}

?>


