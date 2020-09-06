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
          <a href="index.php"><img src="images/logo/BuiltQuicklyRugged.png" class="img-responsive akMaxHeight50 akPaddingRight20"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
<!--                below added php to get user name on right-->
                <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["username"] ." "; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="sessions/sessionDestroy.php" id="logOutButton">Log out</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalCartView" >Cart</a></li>
                        </ul>
                </li>
          </ul>
        </div>
      </div>
    </nav>
    
                  <!-- #modalCartView -->
    <div class="modal fade" id="modalCartView" role="dialog">
        <div class="modal-dialog">

           Modal content
          <div class="modal-content akBkgLight">
            <div class="modal-header akBkgAccent">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo $_SESSION["username"] . "'s cart:"?></h4>
            </div>
            <div class="modal-body">
              <?php
                include "database/getUserCart.php";
              ?>  
            </div>
            <div class="modal-footer akBkgAccent">
              <button type="button" class="btn btn-default">Purchase</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>

    

</html>

</html>