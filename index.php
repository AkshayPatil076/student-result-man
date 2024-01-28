<?php
// ini_set('display_errors','Off');
$host = "localhost";
$user="root";
$password = "";
$DB="sms2024";

$conn = mysqli_connect($host,$user,$password,$DB);

if(!$conn){
    die("Connection Error".mysqli_connect_error());
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./admin/dashbord/css/Class.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- *****************************Navbar************************************************************ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Student-Result</a>

        </div>
      </nav>
    <!-- ****************************navbar end ******************************************************************* -->
    <!-- *************************************Form **************************************************************************** -->
    <div class="form">
  <form action="studentresult.php"  method="POST">
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
          <select aria-label="First name" class="form-control" name="class" required>
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
          <input type="text" aria-label="First name" class="form-control" name="roll" required>
          <!-- <input type="text" aria-label="Last name" class="form-control"> -->
        </div>
      </li>
    

      <li class="f11">
        <button type="submit" class="btn btn-primary ad" name="submit">Submit</button>
      </li>
     </ul>
  </form>
</div>
    <!-- **************************************form end ************************************************************************ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
