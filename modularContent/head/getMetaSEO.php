<?php

    include 'database/connectSQLOO.php';

    //get all categories
    $query = $conn->prepare("SELECT name 
FROM product");

    $query->execute();
    
    //store result
    $query -> bind_result($name);
    

    echo '<meta name="keywords" content=';
        
    //loop through each row
    while($query -> fetch()){
        echo " ".$name.",";
    }

    echo '>';

?>