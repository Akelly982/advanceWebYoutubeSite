<!doctype html>
<html lang="en">
    <?php
//    $index = 5;  
//    for ($i=0; $i<10; $i++){
//        echo "counter ". $index  . "<br>";
//        $index += 1;
//    }
       
    
    
    // strval($index)
    ?>
</html>

<!--
<script>
    $("#cartItemButton'. $itemIndex .'").click(function(event){
        event.preventDefault();
        var mytableId = '. $myId .';
        $.ajax({
                url:"database/removeFromUserCart.php",
                method:"POST",
                data : {tableId:mytableId},        
        });
        $("#cartItem'. $itemIndex .'").empty();
    }):
</script>-->


<?php

    include 'database/connectSQLOO.php';


    //tableId:'. $myId .'
    //set vars
    $userCartItemId = 27;

    //get all categories
    $query = $conn->prepare("DELETE FROM usercartitems WHERE id = ?");
   
    //bind parameters to the query
    $query->bind_param("i", $userCartItemId);


    // run the query
    $result = $query->execute();
    //check result of query
    if (!$result){
        die("Error: " .$conn->connect_error);
    }else

    //close Query
    $query->close();
    
    //close db connection
    mysqli_close($conn);

?>
