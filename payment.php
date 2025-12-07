<?php
if (isset($_GET['checkout'])) {
    $checkoutValues = (array) $_GET['checkout'];
    $orderText = '';
    foreach ($checkoutValues as $value) {
        $orderText .= ''. $value .'';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment - Organ Market</title>
        <meta charset="utf-8">
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                background-color: #3b4a78;
                color: white;
                margin: 0;
                padding: 0;
            }

            /* Payment Container */
            .payment-container {
                max-width: 500px;
                margin: 50px auto;
                padding: 30px;
                background-color: #2c3a70;
                border-radius: 12px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
            }

            /* Form Rows */
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="email"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: none;
                border-radius: 6px;
                box-sizing: border-box;
            }

            /* Expiry and CVV Row */
            .small-row {
                display: flex;
                gap: 20px;
            }

            .small-row div {
                flex: 1;
            }

            /* Button Styles */
            #pay-button {
                width: 100%;
                padding: 12px;
                background-color: #5c5cff;
                border: none;
                border-radius: 6px;
                color: white;
                font-size: 16px;
                cursor: pointer;
            }

            #pay-button:hover {
                background-color: #4848ff;
            }

            /* Responsive */
            @media (max-width: 480px) {
                .small-row {
                    flex-direction: column;
                }
            }
        </style>
    </head>
    <body>
        <form action="/paymentserver.php" method="post">
            <input type="hidden" name="orderData" value="<?php echo htmlspecialchars($orderText); ?>">
            <div class="payment-container">
                <h1>Payment Information</h1>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" placeholder="Full Name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>

                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>

                <div class="small-row">
                    <div>
                        <label for="expiry-date">Expiry Date</label>
                        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
                    </div>
                    <div>
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="123" required>
                    </div>
                </div>

                <button type="submit" id="pay-button">Pay Now</button>
            </div>
        </form>
    </body>
</html>
