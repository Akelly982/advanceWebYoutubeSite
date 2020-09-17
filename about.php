<!doctype html>
<html lang="en">
<?php
    session_start();
?>  
<head>
    <title>About</title>
    <?php
    include 'modularContent/head/headLocal.php';
    ?>
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
    <script>
        $("#aboutPg").addClass("active");   
    </script>
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgPrimary akMinHeight100"></div>
  

    <!--Intro text-->
    <div class="container-fluid text-center akBkgPrimary akMinHeight150">
        <h1 class="akTextAccent akBold"> ABOUT US </h1>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
<!--    the team title-->
    <div class="container-fluid akBkgLight">
        <div class="text-center akBkgPrimary akBorderRadius10 akMaxWidth200 akMarginLeft200">
            <h2 class="akTextLight akPaddingTop10 akPaddingBottom10"> The Team </h2>
        </div>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight50"></div>
    
<!--    Carousel   -->
<div class="row akBkgLight">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php
         include 'modularContent/extra/carouselEmployees.php';
        ?>
    </div>
    <div class="col-md-3"></div>
</div>    


    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    
    <!--    what we do title-->
<!-- attempt to center......
    <div class="akFlex akBkgLight">
        <div class="text-center akBkgPrimary akMinWidth400 akBorderRadius10 akAlignJustifyCenter">
            <h2 class="akTextLight akPaddingTop10 akPaddingBottom10">Our Goals </h2>
        </div>
    </div>

    additionaly you can use col-md-2 col-md-offset-5 centers it to col 6 and 7
-->
    
    <div class="akBkgLight">
        <div class="container-fluid text-center akBkgPrimary akBorderRadius10 akMaxWidth400">
            <h2 class="akTextLight akPaddingTop10 akPaddingBottom10"> Our Goals </h2>
        </div>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight50"></div>
    
    <div class="row akBkgLight">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="akMargin20">As content creators on on youtube we strive to bring fun interesting video's to our viewers. Here on our site however you can buy merch to help support our youtube channel to help us bring you more videos.</h3>    
    </div>
    <div class="col-md-3"></div>
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