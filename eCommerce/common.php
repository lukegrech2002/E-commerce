<?php
//head
function head(){
    echo '<!doctype html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">'; //materialize stylesheet
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">'; //font awesome
    echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';//Materialize Icons
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">'; //normalize stylesheet
    echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">'; //google fonts
    echo '<link rel="stylesheet" href="css/stylesheet.css">'; //local stylesheet
    echo '<title>Game Station</title>';
    echo '</head>';
}

//navigation function
function navigation(){
    echo '<header>';
    echo '<nav>';
    echo '<div class="container">';
    echo '<div id="logo-nav">';
    echo '<img src="assets/images/logo.png" alt="logo">';
    echo '</div>';
    echo '<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>';
    echo '<div class="hide-nav">';
    echo '<ul>';
    echo '<li><a href="index.php">Home</a></li>';
    echo '<li><a href="about.php">About</a></li>';
    echo '<li><a href="products.php">Products</a></li>';
    echo '<li><a class="modal-trigger" onclick="return checkLogin();" href="account.php">Account</a></li>';
    echo '<li><a href="cart.php">Cart</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '<ul class="sidenav" id="mobile-demo">';
    echo '<div id="logo-sidenav">';
    echo '<img src="assets/images/logo.png" alt="logo">';
    echo '</div>';
    echo '<li><a href="index.php">Home</a></li>';
    echo '<li><a href="about.php">About</a></li>';
    echo '<li><a href="products.php">Products</a></li>';
    echo '<li><a class="modal-trigger" onclick="return checkLogin();" href="account.php">Account</a></li>';
    echo '<li><a href="cart.php">Cart</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
}

//login modal function
function loginModal(){
    echo '<div id="signin-modal" class="modal">';
    echo '<div class="modal-content">';
    echo '<div class="input-form">';    
    echo '<form method="post">';
    echo '<label>Email:</label>';
    echo '<input id="emailIn" type="text"/>';
    echo '<label>Password:</label>';
    echo '<input id="passwordIn" type="password"/>';
    echo '<div class="signin-button">';
    echo '<a class="btn waves-effect waves-light btn modal-trigger" id="login_button" type="submit">Sign in</a>';
    echo '</div>';
    echo "<p id='outputIn'></p>";
    echo '</form>';
    echo '</div>';
    echo '<div class="signup-button">';
    echo '<label>New Customer?</label>'; 
    echo '<a class="waves-effect waves-light btn modal-trigger" href="#signup-modal">Sign up</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

//signup modal function
function signUpModal(){
    echo '<div id="signup-modal" class="modal">';
    echo '<div class="modal-content">';
    echo '<div class="input-form">';    
    echo '<form method="post">';
    echo '<label>Email:</label>';
    echo '<input id="emailUp" name="email" type="email"/>';
    echo '<label>First name:</label>';
    echo '<input id="firstnameUp" type="text"/>';
    echo '<label>Surname:</label>';
    echo '<input id="surnameUp" type="text"/>';
    echo '<label>Date of birth(dd-mm-yyyy):</label>';
    echo '<input id="dobUp" type="text"/>';
    echo '<label>Address:</label>';
    echo '<input id="addressUp" type="text"/>';
    echo '<label>Locality:</label>';
    echo '<input id="localityUp" type="text"/>';
    echo '<label>Country:</label>';
    echo '<input id="countryUp" type="text"/>';
    echo '<label>Mobile number:</label>';
    echo '<input id="mobileUp" type="text"/>';
    echo '<label>Password:</label>';
    echo '<input id="passwordUp" type="password"/>';
    echo '<label>Confirm Password:</label>';
    echo '<input id="confirmPassword" type="password"/>';
    echo '<div class="signupmodal-button">';
    echo '<a class="btn waves-effect waves-light btn modal-trigger" id="signup_button" type="submit">Sign up</a>';
    echo '</div>';
    echo '</form>';
    echo '<p id="output"></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

//footer modal function
function footer(){
    echo '<footer class="page-footer">';
    echo '<a id = "facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>';
    echo '<a id = "instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>';
    echo '<a id = "twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>';
    echo '</footer>';
}

//scripts function
function scripts(){
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';
    echo '<script src="js/loginCheck.js"></script>';
    echo '<script src="js/signInScript.js"></script>';
    echo '<script src="js/signUpScript.js"></script>';
}
?>