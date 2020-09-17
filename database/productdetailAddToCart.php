<?php
    session_start();
    header('Location: ../index.php');
?>

<!doctype html>
<html lang="en">
    
    <?php
        include 'connectSQLOO.php';
        
        //set parameters need perameters from POST
        $itemId = $_POST["itemId"];
        $size = $_POST["optradio"];
        $quantity = $_POST["quantity"];
        $totalCost = $quantity * $_POST["itemCost"];
        $userId = $_SESSION["id"];
    
//        echo("initial: " . $_POST['itemCost']) . "<br>";
//        echo("bound: " . $totalCost . "<br>");
    
        // echo out details to ensure correct
        echo "Item's to be added: <br> ";
        echo "Item id: " . $itemId . "<br>";
        echo $size . "<br>";
        echo $quantity . "<br>";
        echo $totalCost . "<br>";
        echo "User id: " . $_SESSION["id"] . "<br>";
    
//        die("Stop here ");
    
        //start querying
        // create prepare() == template / query with no values 
        $myQuery = $conn->prepare("INSERT INTO usercartitems (quantity, size, cost, userIdFk, productIdFk) VALUES(?,?,?,?,?)");
    
        //bind parameters to the query
        $myQuery->bind_param("isdii", $quantity, $size, $totalCost, $userId, $itemId);
            

        echo "<br>";

        // run the query
        $result = $myQuery->execute();
        //check result of query
        if (!$result){
            die("Error: " .$conn->connect_error);
        }else{
            echo "db Insert successfull";
        }


        //close Query
        $myQuery->close();

        //close db connection
        mysqli_close($conn);  //$conn comes from include connectSQL above

    ?>
</html>