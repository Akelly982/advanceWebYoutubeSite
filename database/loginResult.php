<!doctype html>
<html lang="en">

    <?php
    
    
    
    //connect to db
    include 'connectSQLOO.php';
    
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    // set up query
    $myQuery = "SELECT id,email,password,firstName, lastName,username FROM users WHERE email = '" .$email. "'LIMIT 1";
    // get the rows from query
    $result = mysqli_query($conn, $myQuery);
    
    
    if (mysqli_num_rows($result) > 0){   //if not empty
        // output data of each row
        $row = mysqli_fetch_array($result);
        //pasword verify will hash password to verify password
        if (password_verify($password, $row["password"])){  //if password == password for row
            echo "<br> Welcome ".$row["firstName"].", your password is correct";
            echo "<br> you user id is: " . $row["id"];
            
            //start session
            session_start();
            echo "<br> session started";
            // set user id to session
            $_SESSION["id"] = $row["id"];
            $_SESSION["firstName"] = $row["firstName"];
            $_SESSION["lastName"] = $row["lastName"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            
            //return to home
            header('Location: ../index.php');
            
            
            
        }else{
            echo "<br> incorrect password";
            
        }
    }
    
    
    

    ?>

</html>