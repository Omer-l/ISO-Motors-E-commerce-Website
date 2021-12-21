<!DOCTYPE html>
<html>
    <head>
        <title>Basket Demo</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="basket.js"></script>
    </head>
    <body>
        <h1>Shopping Website</h1>

        <!-- PHP loads product information -->        
        <?php

        //Connect to MongoDB and select database
        require __DIR__ . '/vendor/autoload.php';
        $mongoClient = (new MongoDB\Client);
        $db = $mongoClient->ecommerce;
        
        //Find all products
        $products = $db->products->find();

        //Output results onto page
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th><th>Description</th><th></th></tr>';
        foreach ($products as $document) {
            echo '<tr>';
            echo '<td>' . $document["name"] . "</td>";
            echo '<td>' . $document["type"] . "</td>";
            echo '<td>' . $document["price"] . "</td>";
            echo '<td><button onclick=\'addToBasket("' . $document["name"] . '", "' . $document["price"] . '")\'>';
            echo '<img class="addButtonImg" width=20 src="./img/basket-icon.png"></button></td>';
            echo '</tr>';
        }
        echo '</table>';

        ?>
        
        <!-- Displays contents of basket -->    
        <h2>Basket</h2>
        <div id="basketDiv"></div>
    
    </body>
</html>
        