<?php

//Include libraries
include('../../../vendor/autoload.php');
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->customer;

//Extract the data that was sent to the server
$name= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$postcode = filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phonenumber = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "username" => $name, 
    "country" => $country,
    "address" => $address,
    "postcode" => $postcode,
    "email" => $email, 
    "phone" => $phonenumber,
    "password" => $password
 ];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);
    
//Echo result back to user
if($insertResult->getInsertedCount()==1){
    header('Location: ../../loginreg.php');
    echo '<script>';
    echo ' New document id: ' . $insertResult->getInsertedId();
    echo '</script>';
    echo 'Customer added.';
    
}
else {
    echo 'Error adding customer';
}