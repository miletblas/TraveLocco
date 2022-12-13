<?php
require 'function.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Travelocco</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="images/logo/logo-title.png">
    <link rel="stylesheet" href="css/styles1.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
      
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #C9EFC7; padding: 10px 100px 10px 100px">
    <a class="navbar-brand" href="index.php"><img src="images/logo/logo-solo1.png" alt="Travelocco logo" style="width: 150px"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId" style="font-size: 110%;">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=home#destination">Destinations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=flights">Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
        </ul>



<!-- Account -->
        <ul class="navbar-nav">
            <?php
                if(isset($_SESSION["id"])){
                    $id = $_SESSION["id"];
                    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM useraccounts WHERE user_ID = $id"));

                    // echo $user["user_name"];
                    echo "<li class='nav-item'>
                            <a href='logout.php' class='nav-link'>" . $user['user_name'] . " <i class='fa fa-power-off'></i></a>
                          </li>";
                }
                else{
            ?>
            <!-- <li class="nav-item">
                Button Login trigger modal
                <a class="nav-link" data-toggle="modal" data-target="#loginId">Log In</a>
            </li>
            <li class="nav-item">
                Button Login trigger modal
                <a class="nav-link" data-toggle="modal" data-target="#registerId">Register</a>
            </li>  -->

            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
            </li>

            <?php
                }
            ?>
            
        </ul>
    </div>
  </nav>
  
  <?php require 'script.php'; ?>
  