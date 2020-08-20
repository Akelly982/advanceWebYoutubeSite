<?php
    session_start();
?>

<!doctype html>
<html lang="en">

    <?php
    session_destroy();
    header("Location: ../index.php");
    ?>
    
    
</html>