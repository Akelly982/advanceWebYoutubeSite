<?php
    session_start();
?>  
<!doctype html>
<html lang="en">

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
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgLight akMinHeight50"></div>
    
  <?php 
    
    $varItemId = $_GET["itemId"];
    $varItemName = $_GET["itemName"];
    
//    echo "Selected item Id = ".$varItemId."<br>"; 
//    echo "selected item Name = ".$varItemName ."<br>";
    
    include "database/connectSQLOO.php";
    
    $query = $conn->prepare("SELECT id,name,price,heroImgPath,dateStarted,description 
    FROM product 
    WHERE id = ".$varItemId);

    $query->execute();
    
    //store result
    $query -> bind_result($id,$name, $price, $heroImgPath, $dateAdded,$description);
    
    while ($query -> fetch()){
        $myId = $id;
        $myName = $name;
        $myPrice = $price;
        $myHeroImgPath = $heroImgPath;
        $myDesc = $description;
    }
    
    
//    // for testing purposes
//    echo "<br>";
//    
//    if (isset($myId)){
//        echo "id: " . $myId . "<br>";
//        echo "name: " . $myName . "<br>";
//        echo "price: " . $myPrice;
//    }else{
//        echo "cannot find item:" .$varItemId." / ".$varItemName;
//    }
    
    
    if (isset($myId)){
        // the page successfully found item
        ?>
        <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
        
<!--        image and description row -->
    <div class="container-fluid akBkgLight">
        <div class="row">
            <div class="col-md-2 akBkgLight"></div>
<!--            Item Image-->
            <div class="col-md-4 akBkgLight akHeight400">
                <?php
                    echo '<img src="images/productImages/'. $myHeroImgPath .'" class="akItemObjectFit">';
                ?>
            </div>
<!--            collapses to space between images and text -->
            <div class="col-md-1 akBkgLight akHeight20"></div>
<!--            text -->
            <div class="col-md-3 akBkgLight">
                <h3 class="akTextAccent"><?php echo $myName; ?></h3>
                <p class="akTextPrimary"><?php echo "Price: ".$myPrice; ?></p>
                <p class="akTextPrimary"><?php echo $myDesc; ?></p>
            </div>
            <div class="col-md-2 akBkgLight"></div>
        </div>
    </div> 
    
        <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
    
    
    <?php if (isset($_SESSION["id"])){ ?>
<!--    IF LOGGED IN *************************-->
        <div class="container-fluid akBkgLight">
            <div class="row">
                <div class="col-md-2 akBkgLight"></div>
                <div class="col-md-8 akHeight50 akBorderRadius20 akBkgPrimary akBorder3Accent">
                    <form method="post" action="database/productdetailAddToCart.php">
                        <div class="text-center akFlexRow">
                            <div class="akTextLight akPadding20">
            <!--                Radio Buttons-->
                                    <label class="radio-inline"><input type="radio" name="optradio" value="S">S</label>
                                    <label class="radio-inline"><input type="radio" name="optradio" value="M" checked>M</label>
                                    <label class="radio-inline"><input type="radio" name="optradio" value="L">L</label>
                                    <label class="radio-inline"><input type="radio" name="optradio" value="XL">XL</label>
                                    <label class="radio-inline"><input type="radio" name="optradio" value="XXL">XXL</label>
                            </div>
                            <div class="akPadding20">
                                <input type="number" min="1" max="10" name="quantity" value="1" id="numQuantity">
                            </div>
                            <div class="akPadding20">
                                <h3 class="akTextAccent">Total  cost: <p id="totalPrice"><?php echo $myPrice ?></p></h3>
                            </div>
                        </div>
                        <div class="akFlexRow akPaddingBottom20">
                            <div>
                                <button type="submit" class="btn akBkgAccent akTextLightHover akBold">Add to Cart</button>
<!--                                <button type="submit" class="btn akBkgAccent akTextLightHover akBold">Add to WishList</button>-->
    <!--                            hidden field adding item id for POST method-->
                                <input type="hidden" name="itemId" id="itemId" value="<?php echo $myId; ?>">
                                <input type="hidden" name="itemCost" id="itemCost" value="<?php echo $myPrice; ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 akBkgLight"></div>
            </div>
        </div> 
    <?php }else{ ?>
<!--    ELSE NOT LOGGED IN *****************************-->
            <div class="container-fluid akBkgLight">
                <div class="row">
                    <div class="col-md-2 akBkgTest"></div>
                    <div class="col-md-8 akHeight50 akBorderRadius20 akBkgPrimary akBorder3Accent text-center akFlexRow">
                        <h3 class="akTextAccent"> Log in to add items to cart for purchase.</h3>
                    </div>
                    <div class="col-md-2 akBkgTest"></div>
                </div>
            </div>
    <?php } ?> 
    
        <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>

    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>

    
    <?php
    }else{ ?>
<!--    ELSE ITEM COULD NOT BE FOUND ****************-->
    
        <!-- spacer   -->
        <div class="akBkgLight akMinHeight300"></div>
    
<!--        could not find the specific item-->
    <div class="container-fluid akBkgLight">
        <div class="text-center">
            <h2> Cannont find item: </h2>
            <h3> Item number: <?php echo $varItemId; ?></h3>
            <h3> Item name: <?php echo $varItemName; ?></h3>
        </div>   
    </div>
        <!-- spacer   -->
        <div class="akBkgLight akMinHeight300"></div>
    
<!--    below ending if statement-->
    <?php
    }
    ?>
    
    
</body>
    
<footer>
    <?php
    include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>