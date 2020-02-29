<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Ballers: Become A Landlord [COMING SOON]</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <div class="container">
        <div class="form-container col-md-8 col-sm-12">
          <header class="text-center">
            <img src="assets/img/logo.png" alt="Ballers Logo" class="logo">
          </header>

          <section>
            <h1 class="title text-center">Become a Landlord</h1>
            <p class="text-center text-muted">Join a community of insightful minds where you can own a home with ease.</p>
          </section>

          <form data-toggle="validator" method="post" action="#" class="mt-5 pt-3">
            <p class="text-left">Pls fill out your details below to be notified when we launch.</p>

            <?php require_once('inc/sendmail.php'); ?>

            <div class="form-group mb-4">
              <label for="full_name" class="small mb-0">Full Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control col-md-9" name="full_name" placeholder="Enter your Full Name" required>
              <small class="help-block with-errors text-danger"></small>
            </div>

            <div class="form-group mb-4">
            <label for="email" class="small mb-0">Email Address <span class="text-danger">*</span></label>
              <input type="email" class="form-control col-md-9" name="email" placeholder="Enter you Email Addresss" required>
              <small class="help-block with-errors text-danger"></small>
            </div>

            <div class="form-group mb-4">
              <label for="phone"  class="small mb-0">Phone Number <span class="text-muted">(optional)</span> </label>
              <input type="text" class="form-control col-md-9" placeholder="Phone Number" name="phone">
              <small class="help-block with-errors text-danger"></small>
            </div>

            <button type="submit" class="btn submit-btn mt-2">Submit</button>
          </form>

          <footer class="col-sm-12 mt-5 pt-4 text-center">
            <small class="text-muted">Strategically build your wealth today.</small>
          </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  </body>
</html>
