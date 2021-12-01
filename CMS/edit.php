<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Edit");
//NAVBAR
outputBannerNavigation("Edit");
?>
<div style="background-color: white; right: 50%;">

 
    <body>
            <form action="additem.php" method="post">
            name: <input type="text" name="name" required>
            Model: <input type="text" name="type" required>
            price: <input type="text" name="price" required>
            topspeed: <input type="text" name="topspeed" required>
            keywords: <input type="text" name="keywords" required>
            <input type="submit">
        </form>
        </form>
    </body>
    </div>
    <form action="edit.php" method="post">
    <div style="background-color: black; right: 50%;">
        <input type="text" placeholder="Enter item name here"
                style="background-color: black; color: white; height: 100px; width:  400px; font-size: large;">
        <button class="container-fluid" type="button"
                style="background-color: black; color: white; height: 80px; width:  250px; font-size: large">Search</button>
        <button type="submit" class="btn btn-lg" style="">Add New Item</button>
        </div>
        </form>
<?php

//Include libraries
include('../vendor/autoload.php');
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Extract the data that was sent to the server
$name= filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = 
[
    "name" => $name, 
 ];

//Find all of the customers that match  this criteria
$cursor = $db->products->find($findCriteria);
$allProducts = $db->products->find();

//Output the results
foreach ($allProducts as $prod)
{
        echo '<script>';
        echo 'console.log('. json_encode( 'check' ) .')';
        echo '</script>';
        echo '<div id="shopProduct" style="float: left;" class="container-fluid">';
        echo '<img src="' .$prod["src"]. '" id="productImg">';
        echo '<div class="container" style="float: right;">';
        echo ''.$prod["name"].' <br>';
        echo 'Model: '.$prod["type"].'<br>';
        echo 'Price: '.$prod["price"].'<br>';
        echo 'Speed: '.$prod["topspeed"].'<br>';      
        echo '<button type="submit" class="btn btn-lg" style="float: right;">Edit</button>';
        echo '<button type="submit" class="btn btn-lg" style="float: right;">Remove</button>>';
        echo '   </div>';
        echo '</div>';
}
?>
