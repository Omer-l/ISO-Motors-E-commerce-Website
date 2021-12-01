<?php

//Include libraries
include('../vendor/autoload.php');
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->products;

//Extract the data that was sent to the server
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$brand = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$top_speed = filter_input(INPUT_POST, 'topspeed', FILTER_SANITIZE_STRING);
$keywords = filter_input(INPUT_POST, 'keywords', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "name" => $name, 
    "type" => $brand, 
    "price" => $price,
    "topspeed" => $top_speed,
    "keywords" => $keywords,
    "src" => "./img/cars/Merc/Mercedes A Class.png"
 ];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);
    
//Echo result back to user
if($insertResult->getInsertedCount()==1){
    echo 'Item added.';
    echo '<script>';
    echo ' alert("New Document id: "'  . $insertResult->getInsertedId(); ')';
    echo '</script>';
}
else {
    echo 'Error adding item';
}