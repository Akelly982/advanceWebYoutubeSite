<!doctype html>
<html lang="en">

    <?php 
    
    // result php needs connection to the server
    include 'connectSQLOO.php';
  
        
    
    //start querying
    // create prepare() == template / query with no values 
    $myQuery = $conn->prepare("INSERT INTO users (email, username, password, firstName, lastName) VALUES(?, ?, ?, ?, ?)");
    
    //bind parameters to the query
    $myQuery->bind_param("sssss", $email, $username, $password, $fname, $lname);
    
    
    
    //set parameters to above    
    $email = $_POST["email"];       // this connects the the name="fname" in the input field
    $username = $_POST["username"];
    // password hash to make it more secure (has is a one way method) encrypts for db
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT); //second argument is how to hash password their and different types
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    
    echo "<br>";
    
    // run the query
    $result = $myQuery->execute();
    //check result of query
    if (!$result){
        die("Error: " .$conn->connect_error);
    }else{
        echo "db Insert successfull";
    }
    
    
    //close Query
    $myQuery->close();
    
    //close db connection
    mysqli_close($conn);  //$conn comes from include connectSQL above
        
    header('Location: ../index.php');
    ?>

</html>