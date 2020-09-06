
<?php
    if(isset($_SESSION["id"])) {
        include 'loggedInNav.php';
    } else {
        include 'notLoggedInNav.php';
    }
?>

