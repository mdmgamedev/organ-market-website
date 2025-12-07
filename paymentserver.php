<?php

$warehouseEmail = "plngang.kontakt37@gmail.com"; // not a real warehouse obviously
$productionEnvironment = false;
// Very unsafe code... definitely not production ready (this is a school project so fuck it)
$orderText = "";
$fullName = "";
$email = "";
$cardNumber = "";
$expiryDate = "";
$cvv = "";

$orderNumber = rand(1000000,9999999);

if(!$productionEnvironment) {
    die("Not a production environment! No mail server available");
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
    echo "No POST data received";
}

$orderMessage = "Your order has been successfully placed! Your order number is " . $orderNumber;
$warehouseOrderMessage = "New order #" . $orderNumber . " from " . $fullName . " (" . $email . ")\n\nOrder Details:\n" . $orderText . "\n\nPayment Info:\nCard: " . substr($cardNumber, -4) . "\nExpiry: " . $expiryDate . "\n\nDate: " . date("d/m/Y", time());

// Order confirmation for the customer
mail($email,"Order number " . $orderNumber . "placed",$orderMessage);

// Order information for the warehouse
mail($warehouseEmail,"Order number " . $orderNumber ."placed by " . $fullName . "on" . date("DDMMYYYY",time()) ."", $orderMessage);


?>