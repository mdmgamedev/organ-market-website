<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php require("include/head.php"); ?>
        <title>Checkout - Organ Market</title>
    </head>
    <body>
        <?php include("include/navbar.php"); ?>
        <div class="checkout-screen">
            <h1>Checkout</h1>
            <ul id="checkout-items-list">
                <!-- Checkout items will be loaded here -->
            </ul>
            <h2>Total: $<span id="checkout-total-amount">0.00</span></h2>
            <button id="confirm-purchase-button">Confirm Purchase</button>
        </div>
        <script src="js/checkout.js"></script>
    </body>
</html>