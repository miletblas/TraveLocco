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
            Register new account
          </h4>
          <form autocomplete="off" action="" method="POST" class="form-box px-3">
            <input type="hidden" id="action" value="register">
            <div class="form-input">
              <span><i class="fa fa-user" style="color: #46806f"></i></span>
              <input type="text" name="" placeholder="Full Name" tabindex="10" id="username" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-envelope" style="color: #46806f"></i></span>
              <input type="text" name="" placeholder="Email" id="user_email" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-unlock-alt" style="color: #46806f"></i></span>
              <input type="password" name="" placeholder="Password" id="pass" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-phone" style="color: #46806f"></i></span>
              <input type="text" name="" placeholder="Contact No." id="contact" required>
            </div>

            <!-- <form autocomplete="off" action="" method="POST" class="sign-up-form">
            <input type="hidden" id="action" value="register">
            <h2 class="title">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" id="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="user_email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="pass" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Contact No." id="contact" required/>
            </div>
            <button type="button" class="btn" onclick="submitData();"><b>Register</b></button> -->

            <div class="mb-3">
              <button type="submit" onclick="submitData();" class="btn-block text-uppercase">
                Register
              </button>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Already have an account?
              <a href="login.php" class="register-link">
                Log in
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