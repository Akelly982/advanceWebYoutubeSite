<?php
    include "connectSQLOO.php";

    //get all categories
    $query = $conn->prepare("SELECT id,categoryName FROM category");
    $query->execute();
    
    //store result
    $query -> bind_result($id, $categoryName);
    
    //loop through each row
    while($query -> fetch()){
        echo '<li><p id="btnCategory'. $categoryName .'" href="#" class="akTextLight akTextLightHover">' .$categoryName. '</p></li>';
    }

                            
?>