<?php
session_start();
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms2024";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
 
    // You should properly sanitize and validate user inputs before using them in queries to prevent SQL injection.
    $sql = "SELECT * FROM admin WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
    $result = $conn->query($sql);
 
    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION["username"] = $enteredUsername;
        header("Location:  ./dashbord/dashboard.php"); // Redirect to a dashboard or protected page
    } 
    else {
        
        // echo "<script>alert('Invalid User ')</script>";
        header("Location:  admin.php");
    }
}
 
$conn->close();
?>
?>