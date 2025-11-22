<?php
$servername = "localhost";
$username = "root"; // default MySQL username
$password = "Ms22Ms11";     // THIS IS LOCAL TESTING ONLY - change password to production passwrd
$dbname = "my_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
