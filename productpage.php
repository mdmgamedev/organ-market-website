<?php
$requested_product_id = htmlspecialchars($_GET["product_id"]);

$product_name = "default";
$product_desc = "default";
$product_price = 0.00;
$product_stock = 0;

include("include/db.php");

if(!is_numeric($requested_product_id)) {
    die("Invalid ID");
}
$sql = "SELECT product_id,product_name,product_desc,product_price,product_stock FROM products WHERE product_id = " . $requested_product_id . ";";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $product_name = $row['product_name'];
    $product_desc = $row['product_desc'];
    $product_price = $row['product_price'];
    $product_stock = $row['product_stock'];
} else {
    echo "Product not found.";
}

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title><?php echo $product_name;?> - Organ Market</title>
        <?php require ('include/head.php');?>

    </head>
    <body>
        <?php include ("include/navbar.php");?>
        <div class="productpage-grid">
            <div class="productpage-image-pane">
                <img src="res/products/<?php echo "product-" . $requested_product_id . ".png" ?>">
            </div>
            <div class="productpage-info-pane">
                <h1><?php echo $product_name;?></h1>
                <hr>
                <h2><?php if($product_stock < 50) { echo  "<span class=\"red-text\">Only "; }?><?php echo $product_stock?> currently in stock <?php if($product_stock < 50) { echo  "</span> "; } ?></h2>
                <hr>
                <h2 class="price-display">Price: $<?php echo $product_price;?></h2>
                <div class="button-container">
                    <button class="buy-button">Buy</button>
                    <button class="add-to-cart-button">Add to cart</button>
                </div>
            </div>
            <div class="productpage-desc-pane">
                <div class="productpage-desc-container">
                    <div class="description">
                        product description
                    </div>
                    <div class="shipping-and-payment">
                        payment options
                    </div>
                </div>
            </div>
        </div>
        <?php include ("include/footer.php");?>
    </body>

</html>