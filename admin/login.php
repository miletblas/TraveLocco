<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background-color: #c9efc7;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/transparent-logo.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form autocomplete="off" action="" method="POST">
          <div class="divider d-flex align-items-center my-4">
            <h4 class="text-center fw-bold mx-3 mb-0" style="color:#551E19">Welcome to TraveLocco</h4>
          </div>
        
          <input type="hidden" id="action" value="login">
          <!-- Username input -->
          <div class="form-outline mb-4">
            <label class="form-label">Username:</label>
            <input type="text" id="admin_name" class="form-control form-control-lg" placeholder="Enter username" value="">
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label">Password:</label>
            <input type="password" id="admin_pass" class="form-control form-control-lg" placeholder="Enter password" value="">
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-lg" onclick="submitData();"
              style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#528265; color: white">Login</button>
          </div>
        </form>
        
        <?php require 'script.php'; ?>
        
      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>
</section>


  
  </body>
</html>