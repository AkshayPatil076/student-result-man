
<!doctype html>
<html lang="en">
  <head>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styleadmin.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- *****************************Navbar************************************************************ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Admin Login</a>

        </div>
      </nav>
    <!-- ****************************navbar end ******************************************************************* -->
    <!-- *************************************Form **************************************************************************** -->
      <div class="form1">

    <form action="./login.php" method="POST">
        <div class="mb-3 form-floating">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='username'>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 form-floating">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
        </div>
   
        <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
      </form>
      </div>
    <!-- **************************************form end ************************************************************************ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
