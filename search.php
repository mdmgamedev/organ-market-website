<?php
include("include/db.php");

$search_query = isset($_GET["search"]) ? $_GET["search"] : '';

$sql = "SELECT * FROM products WHERE product_name LIKE ?";
$stmt = $conn->prepare($sql);
$like_search = "%" . $search_query . "%";
$stmt->bind_param("s", $like_search);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search - Organ Market</title>
        <?php include ("include/head.php");?>
    </head>
    <body>
        <?php include ("include/navbar.php");?>
        <div class="grid-container">
            <div class="grid-item-full-small">
                <h1>Search</h1>
                <form class="searchbar" action="search.php" method="GET">
                    <input name="search" type="text">
                    <input type="submit">
                </form>
            </div>
            <div class="grid-item-full-big">
            <?php
                if ($result->num_rows > 0) {
                    echo "<ul class=\"search-results-list\">";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . htmlspecialchars($row['product_name']) . " - $" . htmlspecialchars($row['product_price']) . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No results found.</p>";
                }
                ?>
        </div>
        </div>
    </body>
</html>