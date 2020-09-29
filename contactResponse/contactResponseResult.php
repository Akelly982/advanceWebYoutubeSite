<?php
    header('Location: ../index.php');

    // set up email mail sending
    // Using the ini_set()
    //ini_set("SMTP","smtp-mail.outlook.com");
    //ini_set("sendmail_from", "my@email.com");
    //ini_set("smtp_port", "587");
    //ini_set("auth_username","yourEmail");
    //ini_set("auth_password","yourPassword");
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $note = $_POST["note"];
    //$date = date("Y/m/d");
    $date = "2021/07/02";
    
    //testing values
    echo "name: " . $name;
    echo "<br>";
    echo "email: " . $email;
    echo "<br>";
    echo "phone: " . $phone;
    echo "<br>";
    echo "note: " . $note;
    echo "<br>";
    echo "date: " . $date;
    echo "<br>";

    //$myMessage = $name." ".$email." ".$phone." ".$note;
    
    //echo $myMessage;

    // send email
    //mail("yourEmail@hotmail.com","yourSubject",$message);
    
     



    //send to db
    include "../database/connectSQLOO.php";
    
    //start querying
    // create prepare() == template / query with no values 
    $myQuery = $conn->prepare("INSERT INTO contactresponse (name, email, phone, message, date) VALUES(?, ?, ?, ?, ?)");
    
    //bind parameters to the query
    $myQuery->bind_param("ssiss", $name, $email, $phone, $note, $date);
    
    
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
    


?>


<?php
//// Using the ini_set()
//ini_set("SMTP", "mail.zend.com");
//ini_set("sendmail_from", "shlomo@zend.com");
////ini_set("smtp_port", "25");
//
//// The message
//$message = "The mail message was sent with the following mail setting:\r\nSMTP = mail.zend.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";
//
//// Send
//$headers = "From: shlomo@zend.com";
//
//mail('shlomo@zend.com', 'My Subject', $message, $headers);
//
//echo "Check your email now....<BR>";
?>
