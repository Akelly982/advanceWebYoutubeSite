<!doctype html>

<!--
<?php
//    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
//    $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//    echo "The URL of current page: ".$CurPageURL;
//    echo "The URL of current page: ".$CurPageURL;
//    echo "The URL of current page: ".$CurPageURL;
//    echo "The URL of current page: ".$CurPageURL;
//
//    $myCurrentPage = -1
?>
-->


<html lang="en">
    <nav class="navbar navbar-inverse navbar-fixed-top akBkgNav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<!--              the span here is used to create the hamburger icon on nav bar-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar akBkgTest"></span>                        
          </button>
          <a href="index.php"><img src="images/logo/BuiltQuicklyRugged.png" class="img-responsive akMaxHeight50 akPaddingRight20"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="" id="homePg"><a href="index.php">Home</a></li>
            <li class="" id="productsPg"><a href="products.php">Products</a></li>
            <li class="" id="aboutPg"><a href="about.php">About</a></li>
            <li class="" id="contactPg"><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
<!--              note their is a space befor the text to give spacing-->
            <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
          </ul>
        </div>
      </div>
    </nav>
    

</html>