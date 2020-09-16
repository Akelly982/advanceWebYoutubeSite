
<?php

    include 'connectSQLOO.php';

    //get all categories
    $query = $conn->prepare("SELECT usercartitems.userIdFk,usercartitems.id,quantity,size,cost,productIdFk,heroImgPath 
    FROM usercartitems,product
    where product.id = usercartitems.productIdFk AND userIdFk = ". $_SESSION['id']." ");

    $query->execute();
    
    //store result
    $query -> bind_result($userId, $myId, $quantity,$size, $cost, $productId, $heroImgPath);


    $itemIndex = 0;   //used to distinguish between items in the list

    //loop through each row
    while($query -> fetch()){
        echo '<div class="akPadding10 akFlexRow" id="cartItem'. $itemIndex .'">
                    <div class="akMargin20">
                        <button class="akBtnItemDiscreteBkgLight" id="cartItemButton'. $itemIndex .'"><h2 id="btnCartItemRemove" class="akBkgPrimary akTextLight akBorderRadius5 akMinWidth35 text-center">X</h2></button>
                    </div>
                    <div class="akMaxHeight200 akMaxWidth200">
                            <img src="images/productImages/'.$heroImgPath.'" class="akItemObjectFit  akBorderRadius20">
                    </div>
                    <div class="akPadding20">
                        <p class="akPadding5"> Quantity: '. $quantity .' </p>
                        <p class="akPadding5"> Size: '.$size.'</p>
                        <p class="akPadding5"> Cost: '.$cost.'</p>
                    </div>
                    <input type="hidden" value="'. $myId .'"
                    id="myCartTableId'. $itemIndex .'"></input>
                </div>';
        // wrote inline script for removing items from the cart
            //remove from db 
            //remove from view
        echo '<script>
                $("#cartItemButton'. $itemIndex .'").click(function(event){
                    event.preventDefault();
                    
                    var mytableId = '. $myId .';
                    $.ajax({
                        url:"database/removeFromUserCart.php",
                        method:"POST",
                        data : {tableId:mytableId}        
                    });
                    $("#cartItem'. $itemIndex .'").empty();
                });
             </script>';
        $itemIndex += 1;
    }



?>


<!--

<input type="hidden" value="cartItem'. $itemIndex .'"
                    id=myCartItem></input>-->
