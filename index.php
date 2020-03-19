<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Ballers: Become A Landlord [COMING SOON]</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src='assets/js/sweetalert2.all.min.js'></script>

  </head>
  <body>
    <div class="container">

        <!-- Header -->
        <header>
          <nav class="navbar">
              <a class="navbar-brand" href="#">
                <img src="./assets/img/logo.png" class="logo" alt="ballers_logo">
              </a>
              <h5 class="text-right nav-text">Strategically build your wealth today.</h5>
              <h5 class="text-right nav-text-mobile">Become a Landlord</h5>
          </nav>
        </header>
        <!-- /.Header -->

        <!-- Holding Page -->
        <section class="holding">
            <h4 class="ball-full-text d-none d-md-block">BECOME A LANDLORD</h4>
            <br><br>
            <h1 class="coming-soon">COMING SOON</h1>
            <p class="drop-text">Drop your details below to be contacted <br> once the Ballers platform is live</p>
            <span  id="notification-form"></span>
        </section>
        <!-- /.Holding Page -->

        <!-- Notification Form -->
        <aside class="contact-form col-md-10">
          <p class="drop-text-2">Pls fill out your details below to be notified when we launch.</p>
          <form data-toggle="validator" method="post" action="">
            <div class="row">
              <div class="col-md-9">
                <div class="row">

                  <?php require_once('inc/sendmail.php'); ?>

                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    <label for="full_name">Full name *</label>
                    <small class="help-block with-errors text-danger"></small>
                  </div>

                  <div class="form-group col-md-4">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <label for="email">Email *</label>
                    <small class="help-block with-errors text-danger"></small>
                  </div>

                  <div class="form-group col-md-4 optional">
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                    <label for="phone">Phone</label>
                  </div>
                </div>
              </div>
              <div class="col-md-3 text-center">
                <button type="submit" class="btn btn-lg contact-btn">Submit</button>
              </div>
            </div>
          </form>
        </aside>
        <!-- /.Notification Form -->

        <!-- What is Ballers -->
        <section class="text-center what-is pt-5">
          <div class="position-relative">
            <a class="bounce-image mt-n5 ml-n3" href="#down">
              <img src="./assets/img/arrow-down.png" alt="arrow-down" class="arrow-down">
            </a>
          </div>
          <h2 class="header_small" id="down" >WHAT IS BALL?</h2>
          <h3 class="header_bold mb-5">Game-changing service <br> that makes owning <br> your home easier</h3>
        </section>
        <!-- What is Ballers -->

        <!-- Easiest way to own a home -->
        <section class="row pb-5 own-home">
          <div class="col-md-6 col-sm-12 text-center">
            <img src="./assets/img/home-love.png" alt="home-love" class="home-love">
          </div>
          <div class="col-md-6 text-left easy">
            <h3 class="easy-head">The easiest way to own a home</h3>
            <div class="easy-body mt-4 mb-3 row">
              <p class="col-md-10 pr-4">
                We make owning a home simpler and achievable.
                With BALL unique saving plan tailored to you and your financial position,
                owning a home has never been easier.
              </p>
            </div>
            <a href="#notification-form" class="btn btn-lg btn-get-notified">Get Notified!</a>
          </div>
        </section>
        <!-- /.Easiest way to own a home -->

        <!-- Part of a Prestigious Community -->
        <section class="row mt-5 community">
          <div class="col-md-6 text-center like-small">
            <img src="./assets/img/room-like.png" alt="room-like" class="home-love">
          </div>
          <div class="col-md-6 text-right easy">
            <h3 class="easy-head">Be part of a prestigious community</h3>
            <div class="easy-body mt-4 mb-3 row">
              <p class="col-md-9 pl-4 offset-md-3 text-right easy-text-mobile">
                What’s a home without family.
                Our community provides the love of a family,
                from sharing of advice to
                mentorship and many more.
              </p>
            </div>
            <a href="#notification-form" class="btn btn-lg btn-get-notified">Get Notified!</a>
          </div>
          <div class="col-md-6 text-center like-big">
            <img src="./assets/img/room-like.png" alt="room-like" class="home-love">
          </div>
        </section>
        <!-- /.Part of a Prestigious Community -->
    </div>
    <!-- /. Container -->

    <section class="landlord row mt-5 d-none d-md-flex">
        <div class="col-md-6 be-landlord">
          <h3 class="landlord-head">Become a landlord</h3>
          <p class="landlord-text">Join a community of insightful minds <br> where you can own a home with ease.</p>
          <a href="#notification-form" class="btn btn-lg landlord-btn">Get Notified!</a>
        </div>

        <div class="col-md-6 text-center key-div">
          <img src="./assets/img/hand-key.png" alt="hand-key" class="hand-key">
        </div>
    </section>

    <!-- Footer -->
    <footer class="row footer">
      <div class="col-md-12">
        <h5 class="footer-text">An initiative of </h5><img src="./assets/img/highrachy_logo.png" alt="highrachy_logo" class="highrachy-logo-footer">

        <img src="./assets/img/logo.png" alt="ballers_logo" class="baller-logo-footer">
      </div>
    </footer>
    <!-- /.Footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  </body>
</html>
