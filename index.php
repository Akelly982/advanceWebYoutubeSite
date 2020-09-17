<!doctype html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <title>Home</title>
    <?php
    include 'modularContent/head/headLocal.php';
    ?>
    <title>Home</title>
    <meta name="author" content="Aidan Kelly">
    <meta name="description" content="LanyardEngine, clothing, shirt, hoodie">
    <meta name="keywords" content="boltShirt, "
<!--    description is where search engine looks for SEO-->
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
    <script>
        $("#homePg").addClass("active");   
    </script>
</navigation>

    
<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgLight akMinHeight50"></div>
    <div>
        <img src="images/Hero/akHero.png"  class="img-responsive" style="width:100%">
    </div>

    <!--Intro text-->
    <div class="container-fluid text-center akBkgPrimary akMinHeight150 akPaddingTop10">
        <h1 class="akTextAccent"> Recently added </h1>
        <p class="akTextLight">Be the first to buy the newest merch</p>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    <!--  recently added list    -->
    <div class="akBkgLight">
        <div class="container">    
            <div class="row">
                <?php
                    include 'database/getProductsRecentlyAdded.php';
                ?>
            </div>
        </div>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    

</body>
    
<footer>
    <?php
        include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>