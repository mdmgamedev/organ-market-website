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

                    </li>
                </ul>
            </div>
            <div id="shoppingcart-total">
                <h1>Total: $<span id="shoppingcart-total-amount">0.00</span></h1>
                <button onclick="proceedToCheckout()" id="checkout-button">Proceed to Checkout</button>
            </div>
        </div>
        <?php include("include/footer.php"); ?>    
    </body>
</html>