<?php
//configurations
include('Mail.php'); 
require('config.php');

if((isset($_POST['fullname'])&& $_POST['fullname'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')) {

    $fullName = $mysqli->real_escape_string($_POST['fullname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['phone']);

    $sqlQuery = "INSERT INTO `visitors`(`fullName`, `email`, `phone`) VALUES ('$fullName','$email','$phone')";

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    } else {
      require('sendmail.php');
    }
    
}

?>


<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <title>Form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST">
        <input type="text" name="fullname" placeholder="Fullname" required="">
        <input type="email" name="email" placeholder="Email Address" required="">
        <input type="text" name="phone" placeholder="Phone no" required="">
        <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
