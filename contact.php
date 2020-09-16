<!doctype html>
<html lang="en">
<?php
    session_start();
?>  
<head>
    <title>Contact</title>
    <?php
    include 'modularContent/head/headLocal.php';
    ?>
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
    <script>
        $("#contactPg").addClass("active");   
    </script>
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgPrimary akMinHeight100"></div>
  

    <!--Intro text-->
    <div class="container-fluid text-center akBkgPrimary akMinHeight150">
        <h1 class="akTextAccent akBold"> CONTACT US </h1>
    </div>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    
    <div class="row akBkgLight">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="akMargin20"> Below is a contact form that you can fill out and it will send us an email regarding your inquiry. Please fell free to ask about anything regarding our products and or to give us feedback regarding the business/site.</h3>    
    </div>
    <div class="col-md-3"></div>
    </div>
    
        <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    <div class="row akBkgLight">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form></form>    
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