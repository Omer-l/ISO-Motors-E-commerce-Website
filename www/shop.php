<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Shop");
//NAVBAR
outputBannerNavigation("Shop");

?>
<div class="dropdown" id="shopProduct">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Sort Price by
        </button>

        <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Low to High</a>
                <a class="dropdown-item" href="#">High to Low</a>
        </div>
</div>
<h2>Search for Products</h2>
        <div>
            <input type="text" id="SearchInput">
            <button id="SearchButton">Search</button>
        </div>
        
        <h2>Recommendations</h2>
        <div id="RecomendationDiv"></div>
        <script  type='module'>
            "use strict";

            //Import recommender class
            import {Recommender} from './recommender.js';

            //Create recommender object - it loads its state from local storage
            let recommender = new Recommender();
            
            /* Set up button to call search function. We have to do it here 
                because search() is not visible outside the module. */
            document.getElementById("SearchButton").onclick = search;
            
            //Display recommendation
            window.onload = showRecommendation;
            
            //Searches for products in database
            function search(){
                //Extract the search text
                let searchText = document.getElementById("SearchInput").value;
                
                //Add the search keyword to the recommender
                recommender.addKeyword(searchText);
                showRecommendation();
                
                //#FIXME# PERFORM SEARCH FOR PRODUCTS
            }
            
            //Display the recommendation in the document
            function showRecommendation(){
                document.getElementById("RecomendationDiv").innerHTML = recommender.getTopKeyword();
            }
        </script>
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
$findCriteria = [
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
        echo '<td><button style="float: right;" onclick=\'addToBasket(""\'>';
        echo '<img class="addButtonImg" width=70 src="./img/basket-icon.png"></button></td>';
        echo '   </div>';
        echo '</div>';
}
?>



<!-- end body and output footer -->
<?php outputFooter() ?>