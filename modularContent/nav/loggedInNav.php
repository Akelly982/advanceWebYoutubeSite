<!doctype html>
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
          <a href="index.php"><img src="images/wireframe512_256.png" class="img-responsive akMaxHeight50 akPaddingRight20"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
<!--                below added php to get user name on right-->
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["username"] ." "; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="sessions/sessionDestroy.php" id="logOutButton">Log out</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

</html>