<?php
    //Start session management

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $email= filter_input(INPUT_POST, 'logusername', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'logpassword', FILTER_SANITIZE_STRING);    

    //Connect to MongoDB and select database
    include('../../../vendor/autoload.php');
	$mongoClient = (new MongoDB\Client);//Create instance of MongoDB client
	$db = $mongoClient->ecommerce;
	
    //Create a PHP array with our search criteria
    $findCriteria = [ "logusername" => $email];

    //Find all of the customers that match  this criteria
    $resultArray = $db->customer->find($findCriteria)->toArray();

    //Check that there is exactly one customer
    if(count($resultArray) == 0){
        echo 'Customer email not found';
        return;
    }
    else if(count($resultArray) > 1){
        echo 'Database error: Multiple customers have same email address.';
        return;
    }
   
    //Get customer and check password
    $customer = $resultArray[0];
    if($customer['password'] != $password){
        echo 'Password incorrect.';
        return;
    }
        
    //Start session for this user
    $_SESSION['loggedInUserEmail'] = $email;
    //Start session  management
     session_start();
    
    //Set a session variable
    $_SESSION["loggedInUserEmail"] = 'David Gamez';
  
    //Inform web page that login is successful
    header('Location: ../../loginreg.php');
    echo '<script>';
    echo ' alert("Login successful"' . $_SESSION["loggedInUserEmail"]; ')';
    echo '</script>';
   
	
    