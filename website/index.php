<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome to the Shop</h1>
        <ul>
            <?php
            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);
            $products = $obj->products;

            foreach ($products as $product => $price) {
                echo "<li>$product = $price</li>";
            }
            ?>
        </ul>
    </body>
</html>