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
        $s1=$_POST['s1'];
        $s2=$_POST['s2'];
        $s3=$_POST['s3'];
        $s4=$_POST['s4'];
        $s5=$_POST['s5'];
        $s6=$_POST['s6'];
        $s7=$_POST['s7'];

        $sql = "SELECT * FROM result WHERE  roll = '$roll' ";
        $result = $conn->query($sql);
     
        if ($result->num_rows == 1) {
            // Login successful
            $_SESSION['class']=$sel;
            $_SESSION["roll"] = $roll;
         
            // $_SERVER['name']=$name;
            // echo "<script>alert('Sucess User ')</script>";
            
            echo "<i class='col12'>This Result  is avalabe</i> ";
        } 
        else {
            $sql="INSERT INTO `result` (class,roll,s1,s2,s3,s4,s5,s6,s7) VALUE ('$sel','$roll','$s1','$s2','$s3','$s4','$s5','$s6','$s7')";
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
          <li class="m1"><a href="./Student.php"   class="navbar-brand m11 ">Student </a></li>
          <li class="m1"><a href="./Result.php"    class="navbar-brand m11 col">Result</a></li>
          

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
 <div class="" style="    width: 20cm;
    height: 20cm;
    background-color: rgb(43, 43, 43);
    border-radius: 30px;
    position: relative;
    left: 9cm;
    top: 1cm;">
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
            <span class="input-group-text">PHP  </span>
            <input type="text" aria-label="First name" class="form-control" name="s1" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">Python Programming  </span>
            <input type="text" aria-label="First name" class="form-control" name="s2" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">JAVA Programming  </span>
            <input type="text" aria-label="First name" class="form-control" name="s3" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">R Programming </span>
            <input type="text" aria-label="First name" class="form-control" name="s4" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">MySql DB</span>
            <input type="text" aria-label="First name" class="form-control" name="s5" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">Web Development </span>
            <input type="text" aria-label="First name" class="form-control" name="s6" required>
            <!-- <input type="text" aria-label="Last name" class="form-control"> -->
          </div>
        </li>
        <li class="f11">
          <div class="input-group">
            <span class="input-group-text">SoftwareDevelopment </span>
            <input type="text" aria-label="First name" class="form-control" name="s7" required>
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
