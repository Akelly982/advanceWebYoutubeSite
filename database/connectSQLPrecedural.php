<!doctype html>
<html lang="en">
<?php

//         (servername,username,password)
// for mySQL in XAMPP it is  (localhost,root,empty)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advancedwebsite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "connection successfull"
?>
</html>