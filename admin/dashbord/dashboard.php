<?php
ini_set('display_errors','Off');
$host = "localhost";
$user="root";
$password = "";
$DB="sms2024";

$conn = mysqli_connect($host,$user,$password,$DB);

if(!$conn){
    die("Connection Error".mysqli_connect_error());
}

// $sql = "SELECT COUNT(*) as class FROM student";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     $row = $result->fetch_assoc();
//     echo "Number of Student " . $row["class"];
// } else {
//     echo "No users found in the student table";
// }

// Close connection
// $conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="./css/dashboard.css">
  <body>
 <!-- ****************************************************Navbar *************************************************************************** -->

 <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>

        <h1 id="create_class">CREATE ___CLASS</h1>
      
        <ul class="men11">
          <li class="m1"><a href="./dashboard.php"  class="navbar-brand m11 col" >Home</a></li>
          <li class="m1"><a href="./Class.php"     class="navbar-brand m11">Class</a></li>
          <li class="m1"><a href="./Student.php"   class="navbar-brand m11">Student </a></li>
          <li class="m1"><a href="./Result.php"    class="navbar-brand m11">Result</a></li>
          

        </ul>
      
    </div>
 
    <button type="button" class="btn btn-danger" OnClick="next()">Log Out</button>
  </nav>
  <script>
    function next(){
      window.location.href = "./logout.php";
    }
  </script>
 <!-- *****************************************************navbar end /******************************************************************************** -->
    <div class="borderbox">
     <ul class="bas">
      <li class="das1 "> Number of Class :<?php
      $sql = "SELECT COUNT(*) as class FROM class";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          // Output data of each row
          $row = $result->fetch_assoc();
          echo " " . $row["class"];
      } else {
          echo "No users found in the student table";
      }
      ?> </li>
      <li class="das1 "> Number of Student :<?php
      $sql = "SELECT COUNT(*) as class FROM student";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          // Output data of each row
          $row = $result->fetch_assoc();
          echo " " . $row["class"];
      } else {
          echo "No users found in the student table";
      }
      ?> </li>
      <li class="das1 "> Number of Result : <?php
      $sql = "SELECT COUNT(*) as roll FROM result";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          // Output data of each row
          $row = $result->fetch_assoc();
          echo " " . $row["roll"];
      } else {
          echo "No users found in the student table";
      }
      ?></li>
     </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>
