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
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connection successfull";
?>
</html>