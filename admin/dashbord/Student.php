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
        $sel=$_POST['sel'];
        $roll=$_POST['Roll'];
        $name=$_POST['Name'];

        $sql = "SELECT * FROM student WHERE  roll = '$roll' ";
        $result = $conn->query($sql);
     
        if ($result->num_rows == 1) {
            // Login successful
            $_SESSION['class']=$sel;
            $_SESSION["roll"] = $roll;
         
            // $_SERVER['name']=$name;
            // echo "<script>alert('Sucess User ')</script>";
            
            echo "<i class='col12'>This Student  is avalabe</i> ";
        } 
        else {
            $sql="INSERT INTO student (`class`,`roll`,`name`) VALUE ('$sel','$roll','$name')";
            $res=mysqli_query($conn,$sql);
            //  echo "<script>alert('Invalid User ')</script>";
            // header("Location:  admin.php");
        }

      ?>
<!doctype html>
<html lang="en">
  <head>
    <style>
      .col12{
        color:red;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="./css/Class.css">
  <body>
 <!-- ****************************************************Navbar *************************************************************************** -->

 <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>

        <h1 id="create_class">CREATE ___CLASS</h1>
      
        <ul class="men11">
          <li class="m1"><a href="./dashboard.php" class="navbar-brand m11 " >Home</a></li>
          <li class="m1"><a href="./Class.php"     class="navbar-brand m11 ">Class</a></li>
          <li class="m1"><a href="./Student.php"   class="navbar-brand m11 col">Student </a></li>
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
 <div class="form">
  <form action=""  method="POST">
    <ul class="f1">
    <li class="f11">
      <?php
            $query ="SELECT class FROM class";
            $result = $conn->query($query);
            if($result->num_rows> 0){
              $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
      ?>
        <div class="input-group">
          <span class="input-group-text">Select Class </span> 
          <select aria-label="First name" class="form-control" name="sel" required>
            <option>SELECT CLASS</option>
            <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['class']; ?> </option>
    <?php 
    }
   ?>
          </select>
          <!-- <input type="text" aria-label="First name" class="form-control" name="Roll" required> -->
          <!-- <input type="text" aria-label="Last name" class="form-control"> -->
        </div>
      </li>
      <li class="f11">
        <div class="input-group">
          <span class="input-group-text">Enter Roll No. </span> 
          <input type="text" aria-label="First name" class="form-control" name="Roll" required>
          <!-- <input type="text" aria-label="Last name" class="form-control"> -->
        </div>
      </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">Enter Name </span>
            <input type="text" aria-label="First name" class="form-control" name="Name" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>

      </li>
      <li class="f11">
        <button type="submit" class="btn btn-primary ad" name="submit">Submit</button>
      </li>
     </ul>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>
