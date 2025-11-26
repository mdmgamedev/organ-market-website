<?php
$requested_product_id = htmlspecialchars($_GET["product_id"]);

include("include/db.php");

$sql = "SELECT product_id,product_name,product_desc,product_price FROM products WHERE product_id = " . $requested_product_id . ";";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>product_name - Organ Market</title>
        <?php require ("include/head.php");?>

    </head>
    <body>
        <?php include ("include/navbar.php");?>
        <div class="productpage-grid">
            <div class="productpage-image-pane">
                <img src="res/products/product_1.png">
            </div>
            <div class="productpage-info-pane">
                <h1>product_name</h1>
                <h2></h2>
            </div>
        </div>
    </body>

</html>