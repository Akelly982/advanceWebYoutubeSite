<!doctype html>
<html lang="en">
    
    <?php 
        //start session
        session_start();
        echo "session started";
        // set user id to session
        $_SESSION["userId"] = $userId;
    ?>
    
</html>