<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
    
    //receiveing of post
    $email = $_POST['email'];
    $password = $_POST['password'];

    //email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "failed";
    }
    else{

        //specifying criteria
        $findCriteria = [
            "email_address" => $email,
            "password" => $password,
        ];
        
        //connection to database
        require __DIR__ . '/vendor/autoload.php';

        $mongoClient = (new MongoDB\Client);
        
        $db = $mongoClient->ecommerceweb;

        $collection = $db->customers;

        $cursor = $collection->find($findCriteria);
        
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
        if($email == $reEmail && $password == $rePassword){
            $array = array($reId, $reEmail, $reName, $reSurname, $reDOB, $reAddress, $reLocality, $reCountry, $reMobileNumber);
            echo json_encode($array);
        }
        else{
            echo "failed";
        }
    }
}         
?>

