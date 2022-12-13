<?php
require 'function.php';
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/design.css">
  <link rel="icon" href="images/logo/logo-title.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"><a href="index.php" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 50%; height: 100%;"></a></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login into account
          </h4>
          <form autocomplete="off" action="" method="POST" class="form-box px-3">
            <input type="hidden" id="action" value="login">
            <div class="form-input">
              <span><i class="fa fa-envelope" style="color: #46806f"></i></span>
              <input type="text" name="" placeholder="Email Address" tabindex="10" id="user_email" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-unlock-alt" style="color: #46806f"></i></span>
              <input type="password" name="" placeholder="Password" id="pass" required>
            </div>

            <!-- <div class="mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                <label class="custom-control-label" for="cb1">Remember me</label>
              </div>
            </div> -->

            <div class="mb-3 ">
              <button type="submit" class="btn-block text-uppercase btn-log" onclick="submitData();">Log In</button>
            </div>

            <!-- <div class="text-right">
              <a href="#" class="forget-link">
                Forget Password?
              </a>
            </div> -->

            <!-- <div class="text-center mb-3">
              or login with
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-facebook">
                  facebook
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-google">
                  google
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-twitter">
                  twitter
                </a>
              </div>
            </div> -->

            <hr class="my-4">

            <div class="text-center mb-2">
              Don't have an account?
              <a href="register.php" class="register-link">
                Register here
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php require 'script.php'; ?>
</body>
</html>