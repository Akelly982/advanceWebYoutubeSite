<?php

    include 'connectSQLOO.php';

    $searchKeyword = $_POST["searchKey"];

    //get all categories
    $query = $conn->prepare("SELECT id,name,price,heroImgPath,dateStarted FROM product 
    WHERE name LIKE '%" . $searchKeyword . "%'");

    $query->execute();
    
    //store result
    $query -> bind_result($id,$name, $price, $heroImgPath, $dateAdded);
    
    //loop through each row
    while($query -> fetch()){
        echo '<div class="col-sm-4">
                <div class="akPanelPadding">
                    <div class="akPanelRadius akBkgPrimary akTextLight text-center">
                    <form method="get" action="productDetailPage.php">
                    <input type="hidden" name="itemId" value="'.$id.'">
                    <input type="hidden" name="itemName" value="'.$name.'">
                    <img src="images/productImages/'. $heroImgPath .'" class="img-responsive akTopRadius" style="width:100%" alt="Image" >
                    <button type="submit" class=" akTextLightHover akBtnItemDiscrete akBold akPaddingTop10">'. $name .'</button>
                    <p> Cost: $'. $price .'</p>
                    <br>
                    </form>
                    </div>
                </div>
            </div>' ;
    }



?>