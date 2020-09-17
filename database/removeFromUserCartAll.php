<?php
    header('Location: ../index.php');
    //reloads page so i dont have to worry about emptying list manualy in front of user

    include 'connectSQLOO.php';


    $userId = $_POST["userId"];

    //get all categories
    $query = $conn->prepare("DELETE FROM usercartitems WHERE userIdFk = ?");
   
    //bind parameters to the query
    $query->bind_param("i", $userId);


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

    exit(); // stops running this code in the bkg

?>