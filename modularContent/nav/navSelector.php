<!doctype html>
<html lang="en">
<?php
    // check if their is an active session by checking id
    if(session_status() == PHP_SESSION_ACTIVE){
        include 'notLoggedInNav.php';
    }else{
        include 'loggedInNav.php';
    }
?>
</html>