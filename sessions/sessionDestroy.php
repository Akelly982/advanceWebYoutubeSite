<?php
    session_start();
?>
<!doctypehtml>
<html lang="en">
<?php
    session_destroy();
    header("Location: ../index.php");
?>
</html>
    