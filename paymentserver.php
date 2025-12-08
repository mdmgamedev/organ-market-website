<html>
    <head>
        <meta charset="utf-8">
        <title>Payment Processing</title>
        <?php require("include/head.php");?>
    </head>
    <body>
        <?php include("include/navbar.php");?>
        <?php

$warehouseEmail = "plngang.kontakt37@gmail.com"; // not a real warehouse obviously
$productionEnvironment = true; //  deployment flag
// Very unsafe code... definitely not production ready (this is a school project so fuck it)
$orderText = "";
$fullName = "";
$email = "";
$cardNumber = "";
$expiryDate = "";
$cvv = "";


if(!$productionEnvironment) {
    die("This code can only be executed in a production environment");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    
    $orderText = $data['orderData'];
    $fullName = $data['full-name'];
    $email = $data['email'];
    $cardNumber = $data['card-number'];
    $expiryDate = $data['expiry-date'];
    $cvv = $data['cvv'];
} else {
    echo "No order data received. <a style=\"color:white;\" href=\"index.php\">Return to homepage</a>ow m";
}

// $orderMessage = "Your order has been successfully placed! ";
// $warehouseOrderMessage = "New order from " . $fullName . " (" . $email . ")\n\nOrder Details:\n" . $orderText . "\n\nPayment Info:\nCard: " . substr($cardNumber, -4) . "\nExpiry: " . $expiryDate . "\n\nDate: " . date("d/m/Y", time());

// Order confirmation for the customer (to be implemented)
// mail($email,"Order number " . $orderNumber . "placed",$orderMessage);

// Order information for the warehouse (to be implemented)
// mail($warehouseEmail,"Order number " . $orderNumber ."placed by " . $fullName . "on" . date("DDMMYYYY",time()) ."", $orderMessage);

// Send order to mysql
include("include/db.php");

$sql = "INSERT INTO `orders` ( `order_content`, `order_fullname`, `order_email`, `order_cardnum`, `order_cardexp`, `order_cvv`) VALUES ('".$orderText."', '".$fullName."', '".$email."', '".$cardNumber."', '".$expiryDate."', '".$cvv."')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>You have paid!</h1><br/><a style=\"color:white;\" href=\"index.php\">Return to homepage</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>
        <?php include ("include/footer.php");?>
    </body>
</html>