
<?php

    include 'connectSQLOO.php';

    //get all categories
    $query = $conn->prepare("SELECT usercartitems.userIdFk,quantity,size,cost,productIdFk,heroImgPath 
    FROM usercartitems,product
    where product.id = usercartitems.productIdFk AND userIdFk = ". $_SESSION['id']." ");

    $query->execute();
    
    //store result
    $query -> bind_result($userId, $quantity,$size, $cost, $productId, $heroImgPath);


    
    //loop through each row
    while($query -> fetch()){
        echo '<div class="akPadding10 akFlexRow">
                    <div class="akMargin20">
                        <h2 id="btnCartItemRemove" class="akBkgPrimary akTextLight akBorderRadius5 akMinWidth35 text-center">X</h2>
                    </div>
                    <div class="akMaxHeight200 akMaxWidth200">
                            <img src="images/productImages/'.$heroImgPath.'" class="akItemObjectFit  akBorderRadius20">
                    </div>
                    <div class="akPadding20">
                        <p class="akPadding5"> Quantity: '. $quantity .' </p>
                        <p class="akPadding5"> Size: '.$size.'</p>
                        <p class="akPadding5"> Cost: '.$cost.'</p>
                    </div>
                </div>';
    }



?>