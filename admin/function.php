<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "travelocco");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "login"){
    login();
  }
}

// LOGIN
function login(){
  global $conn;

  $admin_name = $_POST["admin_name"];
  $admin_pass = $_POST["admin_pass"];

  $admin = mysqli_query($conn, "SELECT * FROM admins WHERE admin_name = '$admin_name'");

  if(mysqli_num_rows($admin) > 0){

    $row = mysqli_fetch_assoc($admin);

    if($admin_pass == $row['admin_pass']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>
