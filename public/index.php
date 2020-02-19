<?php
require('config.php');
global $success;
$register_success = false;
$contact_us_success = false;
define('REGISTRATION', 'Registration');
define('CONTACT_US', 'Contact Us');
# -- Form Submission
$data = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();

    $data['form_name'] = Form::assign('form_name', 'req');
    $data['full_name'] = Form::assign('full_name', 'req', 'Full Name');
    $data['email'] = Form::assign('email');
    $data['phone'] = Form::assign('phone', 'req', 'Phone');
    if (Form::exist('message')) {
        $data['message'] = Form::assign('message', 'req', 'Message');
    }

    # -- Get Form Errors
    $errors = array_merge(Form::get_errors(), $errors);

    if (empty($errors)) {
        extract($data);

        $ourEmail = "haruna@highrachy.com"; //TODO: change to nnamdi email
        $ourName = "Highrachy Investment and Technology";


        //Compulsory Variables
        //1. $name   2. $email  3.subject   4. $message
        // $message is set to empty in this file

        $details = "";
        $details .= "<strong>Full Name :</strong> ".$full_name. "<br>";
        $details .= "<strong>Email  :</strong> ".$email. "<br>";
        $details .= "<strong>Phone  :</strong> ".$phone . "<br>";
        if (isset($message)) {
            $details .= "<strong>Message :</strong> ".$message. "<br>";
        } else {
            $message = "";
        }

        $subject = "$form_name ($full_name)";
        $message="";
        //End of Compulsory

        if (Email::send_mail($email, $subject, $message, $details)) {
            $success = "Your form has been successfully submitted. We will get back to you within 24 hours";
            if (form_name == REGISTRATION) {
                $register_success = true;
            } else {
                $contact_us_success = true;
            }
            $_POST = array();
            Form::clear_values();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/app.css" />
  <script src="https://kit.fontawesome.com/cacf1041dc.js" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <title>Ballers</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-uppercase" href="#"><img src="assets/img/logo.png" alt="Ballers Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav  align-items-center ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#register">Register</a>
            <a class="nav-item nav-link" href="#contact-us">Contact Us</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <!-- HOME BG -->
    <section class="position-relative">
      <div class="home-bg">
        <div class="caption" data-aos="fade-right">
          <div class="container">
            <div class="row align-items-center vh-100">
              <div class="col-lg-10">
                <h1 class="text-white font-weight-normal">
                  The gateway to <br><strong class="typed">own your DREAM HOUSE</strong>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SEARCH BALLERS -->
    <section class="mt-5 mb-5 mt-lg-6 mb-lg-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <div class="lead mt-2" data-aos="fade-up">
              <h2 class="title text-uppercase">Become A Land Lord (BALL)</h2>
              <div class="row">
                <div class="col-lg-8 col-md-10 offset-md-1 offset-lg-2">
                  <p class="lead">The only realistic burden free process of owning your ideal home. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row gutter-1" data-aos="fade-up" data-aos-delay="300">
              <div class="form-group col-lg-5 col-md-4">
                <select class="form-control form-control-lg selectpicker" data-live-search="true" title="Location">
                  <option>Blissville : Off Dreamworld Africana Way, Lekki</option>
                  <option>Blissville 02: Osapa, Lekki</option>
                  <option>Blissville 03: Ologolo, Lekki phase 2</option>
                </select>
              </div>
              <div class=" form-group col-lg-5 col-md-4">
                <select class="form-control form-control-lg selectpicker" data-live-search="true" title="Property Type">
                  <option>1 bedroom flat</option>
                  <option>2 bedroom flat</option>
                  <option>3 bedroom</option>
                  <option>4 bedroom </option>
                </select>
              </div>
              <div class="form-group col-lg-2 col-md-4">
                <a href="" class="btn btn-lg btn-block btn-primary"><i class="fas fa-search"></i> Search</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- BALLERS IS AS EASY AS ABC -->
    <section class="spacer bg-gray-2">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 col-md-8" data-aos="fade-right">
            <h2>BALLing is as easy as ABC</h2>
            <h3 class="subtitle text-blue mt-4 mb-4">
              Buy a home in a community that works by investing via a system that works.
            </h3>
            <p class="lead mb-3">
              We guide you through the entire process which is customized specially for you.
            </p>
          </div>
          <div class="col-lg-6" data-aos="zoom-in-left" data-aos-delay="500">
            <img src="assets/img/easy-balling.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <!-- Steps -->
      <section class="pt-6">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="800">
            <!-- Step 1 -->
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-auto col-md-12">

                  <!-- Step -->
                  <div class="row no-gutters align-items-center mb-md-5">
                    <div class="col-auto">

                      <a href="#!" class="btn btn-sm circled-number opacity-1">
                        <span>1</span>
                      </a>

                    </div>
                    <div class="col">

                      <hr class="d-none d-md-block hr--2">

                    </div>
                  </div> <!-- / .row -->

                </div>
                <div class="col col-md-12 ml-n5 ml-md-0">

                  <!-- Heading -->
                  <h3 class="step-header">
                    Complete your application.
                  </h3>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-0 step-header__content">
                    Take control of your destiny and create a worthy legacy by filling our short registration form.
                  </p>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Step 2 -->
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-auto col-md-12">

                  <!-- Step -->
                  <div class="row no-gutters align-items-center mb-md-5">
                    <div class="col-auto">

                      <a href="#!" class="btn btn-sm circled-number opacity-1">
                        <span>2</span>
                      </a>

                    </div>
                    <div class="col">

                      <hr class="d-none d-md-block hr--2">

                    </div>
                  </div> <!-- / .row -->

                </div>
                <div class="col col-md-12 ml-n5 ml-md-0">

                  <!-- Heading -->
                  <h3 class="step-header">
                    Begin periodic contribution
                  </h3>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-0 step-header__content">
                    Cultivate the habit of contribution today and reap the rewards forever with BALLers.
                  </p>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Step 3 -->
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-auto col-md-12">

                  <!-- Step -->
                  <div class="row no-gutters align-items-center mb-md-5">
                    <div class="col-auto">

                      <a href="#!" class="btn btn-sm circled-number opacity-1">
                        <span>3</span>
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </div>
                <div class="col col-md-12 ml-n5 ml-md-0">

                  <!-- Heading -->
                  <h3 class="step-header">
                    Become a Landlord
                  </h3>

                  <!-- Text -->
                  <p class="text-muted mb-0 step-header__content">
                    Convert structure to extended mortgage plan at affordable rates from 6% per annum.
                  </p>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Get Started -->
            <div class="col-12 pt-5 pt-lg-6">
              <a href="#register" class="btn btn-primary btn-normal">Get Started</a>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>
    </section>

    <!-- WHY BALLERS IS SPECIAL -->
    <section class="spacer-top">
      <div class="container">
        <h2 class="text-center" data-aos="fade-down">Why Ballers is Special</h2>
        <h4 class="offset-sm-1 col-sm-10 offset-md-2 col-md-8 subtitle mt-3 mb-6 text-center" data-aos="fade-down">
          Balling is an experience, a choice for a quality lifestyle and a legacy, generations to come will benefit from
          an easy decision you make today.
        </h4>
        <div class="row no-gutters align-items-md-center text-center text-md-left">
          <div class="card order-2 col-lg-6 ml--100" data-aos="fade-left" data-aos-delay="400">
            <div class="card-body p-3 py-5 p-md-5">
              <h6 class="text-danger font-weight-light">Expanding the class - Boujee</h6>
              <h3 class="special">Become A Land Lord</h3>
              <p class="text-muted">
                Take a stand, create your legacy today. Seamless home ownership access for the value-oriented.
              </p>
            </div>
          </div>
          <div class="order-1 col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <img alt="Image placeholder" src="assets/img/why-baller-is-special.png" style="background-color: gray"
              class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

    <!-- WHY BALLERS IS SPECIAL  CARDS -->
    <section class="spacer-bottom">
      <div class="container">
        <section class="mt-5 mt-lg-7" data-aos="fade-up" data-aos-delay="600">
          <div id="whyBallersIsSpecialCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#whyBallersIsSpecialCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#whyBallersIsSpecialCarousel" data-slide-to="1"></li>
              <li data-target="#whyBallersIsSpecialCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Row 1 -->
                <div class="row">
                  <div class="col">
                    <div class="card-group shadow-sm">
                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-redo"></i></div>
                          <h5 class="mt-2 mb-0">Recurring income</h5>
                          <p class="text-muted mt-2 mb-0">You can create several income generating streams from just
                            becoming
                            a member; referral income (the best in the industry), bonus points, interest on your
                            contribution.
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                          <h5 class="mt-2 mb-0">Credibility</h5>
                          <p class="text-muted mt-2 mb-0">Powered by a team of seasoned professionals with extensive
                            track
                            record.
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-city"></i></div>
                          <h5 class="mt-2 mb-0">Existing Estates</h5>
                          <p class="text-muted mt-2 mb-0">We brought you the IFactor and then Blissville, you can
                            clearly see
                            that our mantra is value driven quality real estate.
                          </p>
                        </div>
                      </aside>

                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <!-- Row 2 -->
                <div class="row mt-2">
                  <div class="col">
                    <div class="card-group shadow-sm">
                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-money-check-alt"></i></div>
                          <h5 class="mt-2 mb-0">Investment Oriented</h5>
                          <p class="text-muted mt-2 mb-0">For every contribution you make you get immediate bonus points
                            that can easily be redeemed for a wide range of relaxing and sumptuous social activities
                            including; Movies tickets, Healthy meals, and even casual spending.
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-birthday-cake"></i></div>
                          <h5 class="mt-2 mb-0">Eat your cake and have it</h5>
                          <p class="text-muted mt-2 mb-0">Contribute and still have bonuses to enjoy your daily fun
                            spots immediately.
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-book-reader"></i></div>
                          <h5 class="mt-2 mb-0">Access to our knowledge community</h5>
                          <p class="text-muted mt-2 mb-0">We expose you to a wide range of real estate advise that will
                            ensure you make only the wisest decision and get to the top fast.
                          </p>
                        </div>
                      </aside>

                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <!-- Row 3 -->
                <div class="row mt-2">
                  <div class="col">
                    <div class="card-group shadow-sm">
                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-credit-card"></i></div>
                          <h5 class="mt-2 mb-0">Ballers Gift Card</h5>
                          <p class="text-muted mt-2 mb-0"> Our Ballers Card gives you access to prestigious events
                            including
                            our annual summer Jam
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fa fa-water"></i></div>
                          <h5 class="mt-2 mb-0">Fluidity and Flexibility</h5>
                          <p class="text-muted mt-2 mb-0">you can choose any amount to contribute once you have started
                            and
                            you can pause or exit the scheme if so desired.
                          </p>
                        </div>
                      </aside>

                      <!-- Special Card -->
                      <aside class="card bg-special-card">
                        <div class="card-body">
                          <div class="icon"><i class="fas fa-umbrella"></i></div>
                          <h5 class="mt-2 mb-0">Insurance Packages</h5>
                          <p class="text-muted mt-2 mb-0">Our mortgages avail you with insurance packages that ensure
                            cushioned protection against life perils including; job loss or loss of life.
                          </p>
                        </div>
                      </aside>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#whyBallersIsSpecialCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#whyBallersIsSpecialCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
      </div>
    </section>

    <!-- WHO ARE BALLERS -->
    <section class="spacer-top bg-gray-2">
      <div class="container">
        <section data-aos="fade-up">
          <h2 class="text-center">Who Are Ballers</h2>
          <h4 class="offset-sm-1 col-sm-10 offset-md-2 col-md-8 subtitle mt-4 mb-5 text-center">
            A platform that enables her members seamless to access owning quality homes in well planned communities in a
            sustainable way.
          </h4>
        </section data-aos="fade-up">
        <div class="text-center" data-aos="zoom-in-up" data-aos-delay="300">
          <img alt="Image placeholder" src="assets/img/who-are-ballers.png" class="img-fluid">
        </div>
      </div>
    </section>

    <!-- BALLERS LIST -->
    <section class="spacer-bottom bg-gray-2">
      <div class="container">
        <div class="row">
          <div class="col" data-aos="zoom-in-down" data-aos-delay="300">
            <div class="card-group shadow-sm">
              <div class="card bg-soft">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fa fa-users"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="counter mr-1">~300</span></h3>
                  <!-- Text -->
                  <p class="mb-0">Members</p>
                </div>
              </div>
              <div class="card bg-soft border-left">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fas fa-building"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="counter mr-1">24+</span></h3>
                  <!-- Text -->
                  <p class="mb-0">Houses</p>
                </div>
              </div>
              <div class="card bg-soft border-left">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fa fa-map-marker-alt"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="counter mr-1">120</span></h3>
                  <!-- Text -->
                  <p class="mb-0">Locations</p>
                </div>
              </div>
            </div>
            <div class="card-group shadow-sm">
              <div class="card border-top bg-soft">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fas fa-phone-square"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="mr-1">24/7</span></h3><!-- Text -->
                  <p class="mb-0">Customer Service</p>
                </div>
              </div>
              <div class="card bg-soft border-top border-left">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fas fa-user-friends"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="counter mr-1">~50</span></h3>
                  <!-- Text -->
                  <p class="mb-0">Peoples join everyday</p>
                </div>
              </div>
              <div class="card bg-soft border-top border-left">
                <div class="card-body text-center p-5">
                  <div class="icon"><i class="fas fa-chart-line"></i></div><!-- Heading -->
                  <h3 class="font-weight-normal mt-3 mb-0"><span class="counter mr-1">25</span></h3>
                  <!-- Text -->
                  <p class="mb-0">Investors</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Registration Form -->
    <section id="register" class="register spacer">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <form class="mt-5" method="post" action="#register" data-aos="fade-up" data-toggle="validator"
              data-aos-delay="300">
              <h2 class="text-center">Register Now</h2>
              <h4 class="subtitle col-md-10 offset-md-1 text-center">Take control of your destiny and create a worthy
                legacy, build your wealth today and climb up the societal hierarchy. You have a lot more power that you
                want to believe.</h4>
              <div class="offset-md-1 col-md-10 mt-3 mb-3">
                <?php
                if ($register_success) {
                    Alert::display();
                }  ?>
              </div>
              <div class="form-group">
                <label for="full_name">Full Name*</label>
                <?php Form::text('full_name', '', array("class" => "form-control", "placeholder" =>"Full Name", "required" =>"true")) ?>
                <?php Form::show_info('full_name') ?>
              </div>
              <div class="form-group">
                <label for="email">Email*</label>
                <?php Form::email('email', '', array("class" => "form-control", "placeholder" =>"Your Email", "required" =>"true")) ?>
                <?php Form::show_info('email') ?>
              </div>
              <div class="form-group">
                <label for="phone">Phone*</label>
                <?php Form::text('phone', '', array("class" => "form-control", "placeholder" =>"Phone Number", "required" =>"true")) ?>
                <?php Form::show_info('phone') ?>
              </div>
              <?php Form::hidden('form_name', REGISTRATION." Form") ?>
              <button type="submit" class="btn btn-primary pl-4 pr-4 pt-3 pb-3 mt-3">Register Now</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- JOIN NOW -->
    <section class="join-now">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-white" data-aos="fade-right">
            <h3>Only great minds can BALL. <br /> <small>
                Ball if your dare. Set yourself ahead of the crowd, begin the BALLing
                experience today.
              </small>
            </h3>
          </div>
          <div class="col-md-6 text-md-right mt-4 mt-md-0" data-aos="fade-left">
            <a href="#register" class="btn btn-xl btn-outline-light">Join Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact US -->
    <section id="contact-us" class="bg-gray container-fluid overflow-hidden">
      <div class="row">
        <div class="col-lg-6 ml-lg-n4" style="height: 960px">
          <div class="google-map">
            <iframe class="img-cover img-fluid" id="gmap_canvas"
              src="https://maps.google.com/maps?q=6%C2%B026'19.5%22N%203%C2%B028'19.5%22E&t=&z=17&ie=UTF8&iwloc=&output=embed"
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
          </div>
        </div>
        <div class="col-lg-6 pr-5 pl-5 pr-lg-8 pl-lg-6 pb-5">
          <h2 class="mt-6 text-center" data-aos="fade-up">Have any Questions?</h2>
          <p class="lead text-center" data-aos="fade-up" data-aos-delay="100">Cultivate the habit today and reap the
            rewards forever. If you have any questions, don't hesistate to write us a message now!</p>
          <form class="mt-5" method="post" action="#contact-us" data-aos="fade-up" data-toggle="validator"
            data-aos-delay="300">
            <div class="offset-md-1 col-md-10 mt-3 mb-3">
              <?php if ($contact_us_success) {
                    Alert::display();
                }  ?>
            </div>
            <div class="form-group">
              <label for="full_name">Full Name*</label>
              <?php Form::text('full_name', '', array("class" => "form-control", "placeholder" =>"Full Name", "required" =>"true")) ?>
              <?php Form::show_info('full_name') ?>
            </div>
            <div class="form-group">
              <label for="email">Email*</label>
              <?php Form::email('email', '', array("class" => "form-control", "placeholder" =>"Your Email", "required" =>"true")) ?>
              <?php Form::show_info('email') ?>
            </div>
            <div class="form-group">
              <label for="phone">Phone*</label>
              <?php Form::text('phone', '', array("class" => "form-control", "placeholder" =>"Phone Number", "required" =>"true")) ?>
              <?php Form::show_info('phone') ?>
            </div>
            <div class="form-group">
              <label for="message">Message*</label>
              <?php Form::textarea('message', '', array('class' => 'form-control' , 'placeholder' => 'Your Message', "required" =>"true")) ?>
              <?php Form::show_info('message') ?>
            </div>
            <?php Form::hidden('form_name', REGISTRATION.' Form') ?>
            <button type="submit" class="btn btn-primary pl-4 pr-4 pt-3 pb-3 mt-3">Send Message</button>
          </form>
        </div>
      </div> <!-- / .row -->
    </section>

  </main>

  <footer class="pt-6 pt-md-8 bg-gray-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

          <!-- Brand -->
          <img src="./assets/img/logo.png" alt="Ballers Logo" class="footer-brand img-fluid mb-2">

          <!-- Text -->
          <h6 class="text-gray mb-2">
            Become A Land Lord
          </h6>

          <!-- Social -->
          <ul class="list-unstyled list-inline list-social mt-4 mb-6 mb-md-0">
            <li class="list-inline-item list-social-item mr-3">
              <a href="#!" class="text-decoration-none">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item list-social-item mr-3">
              <a href="#!" class="text-decoration-none">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item list-social-item mr-3">
              <a href="#!" class="text-decoration-none">
                <i class="fab fa-instagram"></i> </a>
            </li>
            <li class="list-inline-item list-social-item">
              <a href="#!" class="text-decoration-none">
                <i class="fab fa-youtube"></i> </a>
            </li>
          </ul>

        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">

          <!-- Heading -->
          <h6 class="text-uppercase">
            Contact Us
          </h6>

          <p class="text-muted">
            5th Floor, Ibukun House,<br />
            No.70 Adetokunbo Ademola Street,<br />
            Victoria Island, Lagos
          </p>

          <p class="text-muted">
            0802-833-7440
          </p>

          <p class="text-muted">
            sales@ballers.com
          </p>

        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">

          <!-- Heading -->
          <h6 class="text-uppercase mt-4 mt-md-0">
            About Us
          </h6>

          <p class="text-muted">Owning a home made easy and fun. Changing the way people look at real estate, Still
            packing wealth but now accessible to the prestigious mind that truly appreciates the value of owning a home.
          </p>

        </div>
        <div class="col-12 pt-6 pb-3" data-aos="fade-left">
          <div class="text-right">
            <p class="text-muted small">Powered by <img src="assets/img/highrachy.png" alt="Highrachy Logo"></p>
          </div>
        </div>

      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <!-- AOS -->
  <link rel="stylesheet" href="assets/js/aos/aos.css">
  <script src="assets/js/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.12/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.12/dist/js/bootstrap-select.min.js"></script>

  <!-- Typed -->
  <script src="assets/js/typed.min.js"></script>
  <script>
    var typed = new Typed('.typed', {
      strings: ["", "Become A Land Lord", "own your DREAM HOUSE", ],
      typeSpeed: 160,
      loop: true
    });
  </script>

  <script src="assets/js/bootstrap-validator/bootstrap.validator.min.js"></script>
</body>

</html>
