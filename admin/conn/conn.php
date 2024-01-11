<?php
    $host = "localhost";
    $user="root";
    $password = "";
    $DB="sms2024"

    $conn = mysqli_connect($host,$user,$password,$DB);

    if(!$conn){
        die("Connection Error".mysqli_connect_error());
    }
    // echo "yes";
?>  