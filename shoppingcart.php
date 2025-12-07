<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart - Organ Market</title>
        <?php require("include/head.php"); ?>
        <script src="js/shoppingcart.js"></script>
    </head>

    <body>
        <?php include("include/navbar.php"); ?>
        <div class="shoppingcart-container">
            <h1>Your Shopping Cart</h1>
            <div class="shoppingcart-items">
                <!-- Shopping cart items will be loaded here -->
                <ul id="shoppingcart-list">
                    <li class="shoppingcart-item">
                        <h1>Product Name</h1>
                        <p>Quantity: 1</p>
                        <p>Price: $10.00</p>
                        <button class="remove-item-button"><i class="fa fa-trash"></i></button>
                    </li>
                </ul>
            </div>
        </div>
        <?php include("include/footer.php"); ?>    
    </body>
</html>