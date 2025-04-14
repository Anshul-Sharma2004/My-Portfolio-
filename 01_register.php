<?php

if (isset($_POST['uname']) && isset($_POST['umail']) && isset($_POST['upwd']) && isset($_POST['ucity'])) {

    $user_name = $_POST['uname'];
    $user_email = $_POST['umail'];
    $user_password = $_POST['upwd'];
    $user_city = $_POST['ucity'];

    $servername = 'localhost';
    $username = 'root';
    $password = '@Nshul123';
    $dbname = "portPhp";

    $conn = new mysqli($servername, $username, $password, $dbname);

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Database connection successful!";
    }

    $sql="INSERT INTO userlogin (U_NAME, U_EMAIL,U_PASSWORD,U_CITY) VALUES ('$user_name', '$user_email', '$user_password', '$user_city')";
    $result=$conn->query($sql);
    if($result===true){
        header("Location:http://localhost/portPhp/login.php");
        exit();
        }
        else{
            echo "sorry re-enter the data";
        }
       
       
        $conn->close();
    
    }else{
        echo "values will not set";
    }


?>
