<?php
//db configurations
require('./includes/config.php');


if((isset($_POST['fullname'])&& $_POST['fullname'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')) {

    $fullName = $mysqli->real_escape_string($_POST['fullname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['phone']);

    $sqlQuery = "INSERT INTO `visitors`(`fullName`, `email`, `phone`) VALUES ('$fullName','$email','$phone')";
    $message = "Fullname: $fullName \nEmail: $email \nPhone: $phone";

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    } else {
      require('./includes/sendmail.php');
    }
    
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Ballers Visitors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <div class="container">
        <div class="form-container col-md-7 col-sm-12">
          <div class="text-center">
            <img src="assets/img/logo.png" alt="" class="logo">
          </div>

          <h2 class="land text-center">Become a Landlord</h2>
          <p class="text-center">Join a community of insightful minds where you can own a home with ease.</p>
          <br>
          <p class="text-left">Pls fill out your details below to be notified when we launch.</p>

          <form method="POST" action="">
            <div class="form-group">
              <label for="fullname"><small>Fullname</small></label>
              <input type="text" class="form-control" id="" name="fullname" required>
              
              <label for="email"><small>Email Address</small></label>
              <input type="email" class="form-control" id="" name="email" required>
              
              <label for="phone"><small>Phone Number</small></label>
              <input type="text" class="form-control" id="" name="phone" required>
            </div>
            <button type="submit" class="btn submit-btn btn-lg">Submit</button>
          </form>

          <div class="col-sm-12">
            <br>
            <p class="text-center">Strategically build your wealth today.</p>
          </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

