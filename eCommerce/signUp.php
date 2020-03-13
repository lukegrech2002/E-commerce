<?php

if(isset($_POST['email']) && isset($_POST['fName']) && isset($_POST['sName']) && isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['locality']) && isset($_POST['country']) && isset($_POST['mobileNum']) && isset($_POST['password'])) {
    
    //receiveing of post
    $email = $_POST['email'];
    $fName = $_POST['fName'];
    $sName = $_POST['sName'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $locality = $_POST['locality'];
    $country = $_POST['country'];
    $mobileNum = $_POST['mobileNum'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "failedemail";
    }
    else if (!filter_var($fName, FILTER_SANITIZE_STRING)) {
        echo "failedname";
    }
    else if (!filter_var($sName, FILTER_SANITIZE_STRING)) {
        echo "failedsurname";
    }
    else if (!filter_var($dob, FILTER_SANITIZE_NUMBER_INT)) {
        echo "faileddob";
    }
    else if (!filter_var($locality, FILTER_SANITIZE_STRING)) {
        echo "failedlocality";
    }
    else if (!filter_var($country, FILTER_SANITIZE_STRING)) {
        echo "failedcountry";
    }
    else if (!filter_var($mobileNum, FILTER_SANITIZE_NUMBER_INT)) {
        echo "failedmobile";
    }
    else{
    //connection to database
    require __DIR__ . '/vendor/autoload.php';

    $mongoClient = (new MongoDB\Client);
        
    $db = $mongoClient->ecommerceweb;

    $collection = $db->customers;

    //user details array
    $dataArray = array(
        "first_name" => $fName,
        "last_name" => $sName,
        "date_of_birth" => $dob,
        "address" => $address,
        "locality" => $locality,
        "country" => $country,
        "email_address" => $email,
        "mobile_number" => $mobileNum,
        "password" => $password
    );
    
    //adding to database
    $insertResult = $collection->insertOne($dataArray);

    //specifying criteria
    $findCriteria = [
        "email_address" => $email,
    ];

    $reId =  "";
    $reEmail =  "";
    $reName =  "";
    $reSurname =  "";
    $reDOB =  "";
    $reAddress =  "";
    $reLocality =  "";
    $reCountry =  "";
    $reMobileNumber =  "";
    $rePassword =  "";

    $cursor = $collection->find($findCriteria);

    //assigning variables with retrieved data
    foreach($cursor as $cust){
        $reId = $cust['_id'];
        $reEmail = $cust['email_address'];
        $reName = $cust['first_name'];
        $reSurname = $cust['last_name'];
        $reDOB = $cust['date_of_birth'];
        $reAddress = $cust['address'];
        $reLocality = $cust['locality'];
        $reCountry = $cust['country'];
        $reMobileNumber = $cust['mobile_number'];
        $rePassword = $cust['password'];
    }

    //echoing of retrieved data
    $array = array($reId, $reEmail, $reName, $reSurname, $reDOB, $reAddress, $reLocality, $reCountry, $reMobileNumber);
    echo json_encode($array);
}
}
?>