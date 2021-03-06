<?php
  $currentPage = 'index';
  require_once('includes/header.php');
?>
  <!-- Holding -->
  <section class="holding">

    <section class="holding-inner">
      <h1 class="holding-heading">Become <br> a LandLord</h1>
      <h6 class="holding-mid">We make owning a home simpler and achievable.</h6>
    </section>

    <section class="col-lg-8 col-11 holding-form">
      <?php require_once('includes/dynamic-select-form.php'); ?>
    </section>

    <h6 class="holding-small">The only realistic burden free process of owning your ideal home.</h6>

  </section>
  <!-- /.Holding -->

  <!-- About Ball -->
  <section class="about-ball row">
    <div class="col-sm-6 col-12 text-center home-img">
      <img src="./assets/img/home.png" class="home" alt="home image">
      <img src="./assets/img/home-tab.png" class="home-tab" alt="home image">
    </div>
    <div class="col-sm-6 col-12 about">
      <h6 class="about-ball-title">ABOUT BALL</h6>
      <h2 class="about-ball-heading">Game-changing service <br> that makes owning <br> your home easier</h2>
      <p class="about-ball-text">We make owning a home simpler and achievable. <br> With BALL unique saving plan tailored to you and your <br> financial position,owning a home has never been easier.</p>
      <button class="btn btn-lg big-button">LEARN MORE</button>
    </div>
  </section>
  <!-- /.About Ball -->

  <!-- Benefits -->
  <section class="benefits">
    <h6 class="benefits-title">BENEFITS</h6>
    <h2 class="benefits-heading">Why Ballers is Special</h2>

    <div class="benefits-slider">
      <div class="slide">
        <img src="./assets/img/icons/income.png" class="slide-image" alt="Recurring Income">
        <h4 class="slide-header">Recurring Income</h4>
        <p class="slide-body">You can create several income generating streams from just becoming a member; referral income (the best in the industry), bonus points, interest on your contribution.</p>
      </div>

      <div class="slide">
        <img src="./assets/img/icons/estates.png" class="slide-image" alt="Existing estates">
        <h4 class="slide-header">Existing Estates</h4>
        <p class="slide-body">We brought you the I-Factor and then Blissville, you can clearly see that our mantra is value driven quality real estate that enhances your overall living experience.</p>
      </div>

      <div class="slide">
        <img src="./assets/img/icons/credible.png" class="slide-image" alt="Credibility">
        <h4 class="slide-header">Credibility</h4>
        <p class="slide-body">Powered by a team of seasoned professionals with extensive track record.</p>
      </div>

      <div class="slide">
        <img src="./assets/img/icons/investment.png" class="slide-image" alt="Investment Oriented">
        <h4 class="slide-header">Investment Oriented</h4>
        <p class="slide-body">For every contribution you make you get immediate bonus points that can easily be redeemed for a wide range of relaxing and sumptuous social activities.</p>
      </div>

      <div class="slide">
        <img src="./assets/img/icons/fluid.png" class="slide-image" alt="Fluidity and Flexibility">
        <h4 class="slide-header">Fluidity &amp; Flexibility</h4>
        <p class="slide-body">You can choose any amount to contribute once you have started and you can pause or exit the scheme if so desired.</p>
      </div>
    </div>
  </section>
  <!-- /.Benefits -->

  <!-- How it works -->
  <section class="works row">
    <div class="col-lg-6 col-sm-12"></div>
    <div class="col-lg-6 col-sm-12">
      <h6 class="how-title">HOW IT WORKS</h6>
    </div>
    <div class="col-lg-6 col-sm-6 phone-div">
      <img src="./assets/img/phone.png" alt="phone" class="phone">
    </div>

    <div class="col-lg-6 col-sm-6">
      <h2 class="how-heading">BALLing is as easy as ABC</h2>

      <div class="row">
        <div class="col-2 circle-line">
          <img src="./assets/img/icons/circle-line.png" class="circle-line-img" alt="circle line">
        </div>
        <div class="stage-div col-10">
          <h3 class="how-head"><span class="bold-letter">A</span>pply now</h3>
          <p class="how-text">Take control of your destiny and create a worthy legacy by filling our short registration form.</p>
        </div>

        <div class="col-2 circle-line">
          <img src="./assets/img/icons/circle-line.png" class="circle-line-img" alt="circle line">
        </div>
        <div class="stage-div col-10">
          <h3 class="how-head"><span class="bold-letter">B</span>egin periodic contribution</h3>
          <p class="how-text">Cultivate the habit of contribution today and reap the rewards forever with BALLers.</p>
        </div>

        <div class="col-2 circle-line">
          <img src="./assets/img/icons/circle.png" class="circle-img" alt="circle">
        </div>
        <div class="stage-div col-10">
          <h3 class="how-head"><span class="bold-letter">C</span>onvert to home ownership</h3>
          <p class="how-text">Convert structure to extended mortgage plan at affordable rates from 6% per annum.</p>
        </div>

        <div class="col-2"></div>
        <div class="col-10">
          <button class="btn btn-lg big-button">SIGN UP NOW</button>
        </div>
      </div>

    </div>
  </section>
  <!-- /.How it works -->

  <!-- FAQ -->
  <section class="faq">
    <h6 class="faq-title">FAQs</h6>
    <h2 class="faq-heading">Your questions <br> Answered</h2>
    <div class="row">
      <div class="col-lg-3 col-sm-2 col-12"></div>
      <div class="col-lg-9 col-sm-10 col-12 faq-option-category-accordion">
        <div id="accordion">

          <div class="card faq-card">
            <div class="card-header" id="headingOne">
              <a class="" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h5 class="mb-0 faq-card-heading">
                  <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What is BALL?
                  <span class="faq-option-category-icon first">&nbsp; - </span>
                </h5>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                BALL is an acronym for Become A Landlord. It is an online platform that you can use to plan your income properly and define a clear step-by-step process that will take you from your current financial position to owning your dream home.
              </div>
            </div>
          </div>

          <div class="card faq-card">
            <div class="card-header" id="headingTwo">
              <a class="" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0 faq-card-heading">
                  <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What is special about <br> BALL?
                  <span class="faq-option-category-icon">&nbsp; + </span>
                </h5>
              </a>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                BALL is the only platform that gives you the flexibility to make convenient contributions towards owning your home inline with your income. BALL also avails you with a myriad of benefits including additional income via our referral program, and access to vast real estate knowledge via our community.
              </div>
            </div>
          </div>

          <div class="card faq-card">
            <div class="card-header" id="headingThree">
              <a class="" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0 faq-card-heading">
                  <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> Why should I subscribe to the BALL platform?
                  <span class="faq-option-category-icon">&nbsp; + </span>
                </h5>
              </a>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
              BALL is not for everyone, but if you are keen on owning your home in the shortest possible time with the least amount of stress then you should sign up.
              </div>
            </div>
          </div>

          <div class="card faq-card">
            <div class="card-header" id="headingFour">
              <a class="" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h5 class="mb-0 faq-card-heading">
                  <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What is the minimum <br> amount to invest?
                  <span class="faq-option-category-icon">&nbsp; + </span>
                </h5>
              </a>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
              You can begin your subscription with as low as N50,000.00 with additional monthly payments of N10,000.00
              </div>
            </div>
          </div>

          <div class="card faq-card">
            <div class="card-header" id="headingFive">
              <a class="" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0 faq-card-heading">
                  <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> How long does it take for <br> me to own a home?
                  <span class="faq-option-category-icon">&nbsp; + </span>
                </h5>
              </a>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                The duration is based on several parameters including your disposable income, availability of savings that can be contributed at the beginning of the BALLing experience, type of home and Location of the property. However, if you have a substantial amount saved and can make significant monthly contributions, you can be handed the keys to your new home in less than 2 years.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>
  <!-- /.FAQ -->

  <!-- Community gallery -->
  <section class="gallery">
    <h6 class="gallery-title">COMMUNITY GALLERY</h6>
    <h2 class="gallery-heading">Take a deep dive into <br> what your home looks like</h2>
    <button class="btn btn-lg big-button">SIGN UP NOW</button>
  </section>
  <!-- /.Community gallery -->

  <?php require_once('includes/footer.php'); ?>
