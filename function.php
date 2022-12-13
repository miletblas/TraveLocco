<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelocco";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//IF
if(isset($_POST["action"])){
    if($_POST["action"] == "register"){
        register();
    }
    else if($_POST["action"] == "login"){
        login();
    }
    else if($_POST["action"] == "review"){
        review();
    }

}


//Register
    function register(){
        global $conn;

        $username = $_POST["username"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $contact = $_POST["contact"];

        if(empty($username) || empty($email) || empty($pass) || empty($contact)){
            echo "Please fill up the form";
            exit;
        }

        $user = mysqli_query($conn, "SELECT *  FROM useraccounts WHERE email = '$email'");
        if(mysqli_num_rows($user)>0){
            echo "Email already taken";
            exit;
        }

        $query = "INSERT INTO useraccounts VALUES('', '$username', '$contact', '$email', '$pass')";
        mysqli_query($conn, $query);
        echo "Registered Successfully\n";
        echo "Please proceed to Log In";
    }

    function login(){
        global $conn;

        $email = $_POST['email'];
        $pass = $_POST["pass"];
        $pass = password_verify($pass, $_POST["pass"]);

        $user = mysqli_query($conn, "SELECT *  FROM useraccounts WHERE email = '$email'");
        
        if(mysqli_num_rows($user)>0){
            $row = mysqli_fetch_assoc($user);
            if($pass == password_verify($pass, $row["password"])){
                echo "Log In Successfully";
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["user_ID"];
            }
            else{
                echo "Wrong password";
                exit;
            }
        }
        else{
            echo "User not Registered";
            exit;
        }
    }

    function review(){
        global $conn;

        $userReview = $_POST["userReview"];
        $rating = $_POST["rating"];
        $review = $_POST["review"];

        if(empty($userReview) || empty($rating) || empty($review)){
            echo "Please fill up the form";
            exit;
        }

        $query = "INSERT INTO reviews VALUES('', '$userReview', '$rating', '$review')";
        mysqli_query($conn, $query);
        echo "Comment successfully added";
    }
?>

