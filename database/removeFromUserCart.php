<?php

    include 'connectSQLOO.php';


    //tableId:'. $myId .'
    //set vars
    $userCartItemId = $_POST["tableId"];

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