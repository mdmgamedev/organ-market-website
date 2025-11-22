<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Organ Market</title> 
        <?php require ("include/head.php");?>
    </head>

    <body>

        <!-- Navbar + hamburger menu (on mobile) -->
        <?php include ("include/navbar.php");?>


        <div class="grid-container">

            <!--
            grid-item-full: stretches across the entire grid
            grid-item-full-big: same as grid-item-full but with 400px height
            grid-item-1-3: stretches across 33% of the grid 
            grid-item-2-3: stretches across 67% of the grid 
            -->

            <div class="grid-item-full-big">
                <div class="contentblock-horizontal">
                    <div>
                        <h1 class="title-left">The place to purchase human body parts</h1>
                        <p class="para-left">Discover our broad selection of human and/or synthetic organs</p>
                    </div>
                    <div class="image-container">
                        <img src="res/homepage-image.png" width="375px">
                    </div>
                </div>
            </div>

            <div class="grid-item-1-3">
                <h1>Products</h1>
                <p>Our huge selection of human organs</p>
                <button>Go to shop</button>
            </div>

            <div class="grid-item-1-3">
                <h1>Info</h1>
                <p>Everything you need to know about the process</p>
                <button>Learn more</button>
            </div>

            <div class="grid-item-1-3">
                <h1>Legality</h1>
                <p>Everything is 100% legal (I hope so)</p>
                <button>Read the Terms</button>
            </div> 

        </div>

        <?php include ("include/footer.php");?>
    </body>
</html>