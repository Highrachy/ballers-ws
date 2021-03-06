<?php
// error_reporting(0);
function addActive($currentPage, $page){
  if ($currentPage == $page) {
    echo 'active';
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Ballers">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <title>Ballers: Become A Landlord</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="./site.webmanifest">
  <link rel="stylesheet" type="text/css" href="./assets/css/ballers.css">

  <script src="./assets/js/sweetalert2.all.min.js"></script>

</head>

<body>
  <!-- Header -->
  <header>
    <div class="navigation-wrap">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php"><img class="ballers-logo" src="./assets/img/logo/ballers-logo.png" alt="Ballers logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link <?php addActive($currentPage,'index') ?>" href="index.php">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php addActive($currentPage,'about') ?>" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php addActive($currentPage,'az') ?>" href="az.php">A-Z of BALL</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php addActive($currentPage,'faq') ?>" href="faq.php">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php addActive($currentPage,'contact') ?>" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sign-in" href="#">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link register btn" href="#">Register for free</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- /.Header -->
