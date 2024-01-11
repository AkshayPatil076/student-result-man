<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="./css/Result.css">
  <body>
 <!-- ****************************************************Navbar *************************************************************************** -->

 <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>

        <h1 id="create_class">CREATE ___CLASS</h1>
      
        <ul class="men11">
          <li class="m1"><a href="./dashboard.php" class="navbar-brand m11 " >Home</a></li>
          <li class="m1"><a href="./Class.php"     class="navbar-brand m11 ">Class</a></li>
          <li class="m1"><a href="./Student.php"   class="navbar-brand m11">Student </a></li>
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
 
    
    <div class="form">
      <form action="">
        <ul class="f1">
          <li class="f11">
            <div class="input-group">
              <span class="input-group-text">Select Class</span>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Class</option>
                <option value="1">BCA</option>
                <option value="2">BSC</option>
                <option value="3">BCS</option>
              </select>
            </div>
            
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">Enter Roll Number</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">C Programming</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">WEB TECHNOLOGY</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">DSA</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">Python Programming</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">R Programming </span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">JAVA Programming</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
            <li class="f11">
              <div class="input-group">
                <span class="input-group-text">Software Development</span>
                <input type="text" aria-label="First name" class="form-control">
                <!-- <input type="text" aria-label="Last name" class="form-control"> -->
              </div>
            </li>
          </li>
          <li class="f11">
            <button type="button" class="btn btn-primary ad">Primary</button>
          </li>
         </ul>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>