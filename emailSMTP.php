<?php
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 

 
// Create an instance of PHPMailer class 
function bookedFlight($flight_ID, $book_name, $book_cp_no, $recipientAddress, $destination){
    $senderEmail = 'traveloccoph@gmail.com';
    $appPassw = 'jqugjmyfztzxcyzc';

    $mail = new PHPMailer;

    // SMTP configuration
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Host     = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $senderEmail;
    $mail->Password = $appPassw;
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;
    //465
    //587

    // Sender info 
    $mail->setFrom($senderEmail); 
    //$mail->addReplyTo('reply@example.com', 'SenderName'); 
     
    // Add a recipient
    $mail->addAddress($recipientAddress); 
     
    // Email subject 
    $mail->Subject = 'TraveLocco PH'; 
     
    // Set email format to HTML 
    $mail->isHTML(true); 
     
    // Email body content 
    $mailContent = ' 
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">TRAVELOCCO PH</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white"><a target = "_blank" href="https://goo.gl/maps/Nxw1rUUAF65bWBVk6">CLSU, Munoz, Nueva Ecija, Philippines</a></p>
                        <p class="text-white">+63 969 1849 419</p>
                        <p class="text-white">+63 938 4529 221</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice:</h2>
                    <p class="sub-heading">Flight ID: '. $flight_ID .' </p>
                    <p class="sub-heading">Order Date: '. date("Y-m-d h:i:sa") .' </p>

                </div>
                <div class="col-7">
                    <p class="sub-heading">Full Name: '.$book_name.'</p>
                    <p class="sub-heading">Contact Number: '.$book_cp_no.'  </p>
                    <p class="sub-heading">Email Address: '. $recipientAddress .' </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Booked Flight</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Flight</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$destination['departure_name'].' - '.$destination['arrival_name'].'</td>
                        <td>'.$destination['price'].'</td>
                        <td>1</td>
                        <td>'.$destination['price'].'</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Online Banking</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2022 - Traveloccoph. All rights reserved. 
                <a href="https://www.fundaofwebit.com/" class="float-right">www.traveloccoph.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>'; 
    $mail->Body = $mailContent; 
     
    // Send email 
    if(!$mail->send()){ 
        echo '<script>alert("Message could not be sent. Mailer Error: '.$mail->ErrorInfo . '");</script>';
    }else{ 
        echo '<script>alert("Booked Successfully! Message has been sent.");</script>'; 
    }
}

 ?>



