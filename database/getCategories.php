<?php
    include "alertConnectSQLOO.php";

    //get all categories
    $query = $conn->prepare("SELECT id,categoryName FROM category");
    $query->execute();
    
    //store result
    $query -> bind_result($id, $categoryName);
    
    //loop through each row
    while($query -> fetch()){
        echo '<li><a href="#" class="akTextLight akTextLightHover">' .$categoryName. '</a></li>';
    }

    


        //return ECHO needs to look like this
            //<li><a href="#" class="akTextLight akTextLightHover">catagory1</a></li>
            //<li><a href="#" class="akTextLight akTextLightHover">catagory2</a></li>
                            
?>