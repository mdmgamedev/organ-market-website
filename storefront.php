<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Products - Organ Market</title>
        <?php require ("include/head.php");?> 
    </head>

    <body>
        <?php include ("include/navbar.php");?>

        <div class="grid-container">
            <div class="grid-item-full">
                <h1 class="title-left">Products</h1>
                <p class="para-left">We sell every organ, ranging from real human kidneys all the way to synthetic lungs</p>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=1"> <!-- Just a test link -->
                        <h1>Kidney</h1>
                        <p>Our best selling product</p>
                        <p>Price: $250.000</p>
                    </a>
                </div>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=2"> <!-- Just a test link -->
                        <h1>Lung</h1>
                        <p>A crucial breathing organ</p>
                        <p>Price: $180.000</p>
                    </a>
                </div>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=3"> <!-- Just a test link -->
                        <h1>Liver</h1>
                        <p>Important digestive system part</p>
                        <p>Price: $600.000</p>
                    </a>
                </div>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=4"> <!-- Just a test link -->
                        <h1>Blood Bag (1L)</h1>
                        <p>Crucial for your bloodstream</p>
                        <p>Price: $800</p>
                    </a>
                </div>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=5"> <!-- Just a test link -->
                        <h1>Heart</h1>
                        <p>The core of your body's blood system</p>
                        <p>Price: $800.000</p>
                    </a>
                </div>
            </div>
            <div class="grid-item-1-3-big">
                <div class="product-link">
                    <img src="res/placeholder.jpg" width="120px">
                    <a href="productpage.php?product_id=6"> <!-- Just a test link -->
                        <h1>Human Skin (1m2)</h1>
                        <p>Your body's protective film</p>
                        <p>Price: $4.500</p>
                    </a>
                </div>
            </div>
        </div>
        <?php include ("include/footer.php");?>
    </body>
</html>