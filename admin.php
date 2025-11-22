<?php
// Start session
session_start();

// Hardcoded credentials (for demonstration only)
$admin_user = "admin";
$admin_pass = "admin";

$current_user = "";

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        $current_user = $username;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}

// Redirect to login page if not logged in
if (!isset($_SESSION['admin_logged_in'])):
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
    </head>
    <body>
        <h1>Admin Login</h1>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="post" action="">
            <label>Username: <input type="text" name="username" required></label><br><br>
            <label>Password: <input type="password" name="password" required></label><br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </body>
</html>

<?php
exit;
endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <?php include 'include/db.php'; ?>
    </head>
    <body>
        <h1>Welcome, <?php echo($current_user);?>!</h1>
        <h2>Add new product</h2>
        <form method="post" action="">
            <label>Product Name: <input type="text" name="product_name" required></label><br><br>
            <label>Product Desc: <input type="text" name="product_desc" required></label><br><br>
            <label>Price: <input type="number" step="0.01" name="product_price" required></label><br><br>
            <button type="submit" name="add_product">Add Product</button>
        </form>

        <p><a href="?logout=1">Logout</a></p>
    </body>
</html>
