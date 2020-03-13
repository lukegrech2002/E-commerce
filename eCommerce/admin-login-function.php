<?php

// MongoDB Driver
require __DIR__ . '/vendor/autoload.php';

$mongoClient = (new MongoDB\Client);

$db = $mongoClient->ecommerceweb;

// declaring variable for table 'admin'
$collection = $db->admin;

// taking in user input and sanitizing string, then declaring it as variable
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// new MongoDB client
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceweb;

// declaring find criteria to the user input
$findCr =[
    "username" => $username
];

// Searching collection with the criteria
$cursor = $collection->find($findCr);

// declared variables
$id = "";
$password1 = "";
$username1 = "";

// looping through 'admin' table to find the account
foreach($cursor as $admin) {
    $id = $admin['_id'];
    $username1 = $admin['username'];
    $password1 = $admin['password'];
}

// if the user inputted password/username does not match anything in the database
if(($password1 != $password) || ($username1 != $username))
{
    echo 'failed';
}

// if the password/username combination is found in the database
else if (($password1 === $password) && ($username1 === $username)) {
    echo 'success';
}

// any other error
else {
    echo 'other prob';
}
         
?>

