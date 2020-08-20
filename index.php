<?php
session_start();
?>
<!doctype html>
<html lang="en">
    
<head>
    <title>Home</title>
    <?php
    include 'modularContent/head/headLocal.php';
    ?>
    
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
</navigation>

    
<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgLight akMinHeight50"></div>
    <div>
        <img src="images/wireframe1920_512.png"  class="img-responsive" style="width:100%">
    </div>

    <!--Intro text-->
    <div class="container-fluid text-center akBkgPrimary akMinHeight150 akPaddingTop10">
        <h1 class="akTextAccent"> Recently added </h1>
        <p class="akTextLight">Be the first to buy the      newest merch</p>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    <!--  recently added list    -->
    <?php
        for($i=0; $i<3; $i++){
            include 'modularContent/itemView.php';
        }
    ?>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
</body>
    
<footer>
    <?php
    include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>