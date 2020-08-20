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
// php to html to java so cool
echo '<script type="text/javascript"> alert("db connection successfull") </script>';
?>
