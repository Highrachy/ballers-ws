<?php
  $currentPage = 'faq';
  require_once('includes/header.php');
?>

<section class="faq-holding">
    <h1 class="faq-holding-heading">Frequently Asked Questions</h1>
    <h5 class="faq-holding-text">Are you looking for an answer to your questions about BALL? <br> Here we have compiled an overview of frequently asked questions we receive from our BALLers</h5>

    <section class="faq-holding-form col-lg-6 col-md-11 col-11">
        <form class="form-inline faq-form">
            <label class="sr-only" for="search">Search</label>
            <div class="input-group col-lg-8 col-md-8 col-12">
              <div class="input-group-prepend">
                <div class="input-group-text"><img src="./assets/img/icons/search-icon.png" class="input-icon" alt="location icon"></div>
              </div>
              <input type="text" class="form-control hold-input" id="search" placeholder="Search for a question...">
            </div>

            <div class="input-group col-lg-4 col-md-4 col-12">
                <button type="submit" class="btn btn-large faq-holding-search-btn">Search</button>
            </div>
        </form>
    </section>
</section>

<section class="faq-category">
    <h6 class="faq-category-text">or chooose a category to quickly find the help you need</h6>

    <div class="faq-category-slider">
      <div class="faq-category-slide" onclick="toggleQuestions('profile')">
            <img src="./assets/img/icons/profile-icon.png" class="faq-category-slide-img" alt="Profile Icon">
            <h5 class="faq-category-slide-text">Profile</h5>
      </div>
      <div class="faq-category-slide" onclick="toggleQuestions('getting-started')">
          <img src="./assets/img/icons/geting-started-icon.png" class="faq-category-slide-img" alt="Getting Started Icon">
          <h5 class="faq-category-slide-text">Getting Started</h5>
      </div>
      <div class="faq-category-slide" onclick="toggleQuestions('payment')">
          <img src="./assets/img/icons/payment-icon.png" class="faq-category-slide-img" alt="Payment Icon">
          <h5 class="faq-category-slide-text">Payment</h5>
      </div>
      <div class="faq-category-slide" onclick="toggleQuestions('security')">
          <img src="./assets/img/icons/security-icon.png" class="faq-category-slide-img" alt="Security Icon">
          <h5 class="faq-category-slide-text">Security</h5>
      </div>
    </div>
</section>

<!-- Getting started accordion -->
<section class="faq-option-category" id="getting-started">
    <h2 class="faq-option-category-heading">Getting Started</h2>
    <h5 class="faq-option-category-text">This are questions on the general topic on about BALL. Please go <br> through this section if you need your questions answered.</h5>

    <div class="col-lg-9 col-12 faq-option-category-accordion">
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
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What is special about BALL?
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
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span>  Is this a rent-to-own scheme?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
            No, BALL is a platform that you can use to enhance your eligibility to access available property acquisition options including rent-to-own, mortgages and spread payments.
            </div>
          </div>
        </div>

        <div class="card faq-card">
          <div class="card-header" id="headingFive">
            <a class="" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span>  How does BALL work?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
            It’s easy, just 1. Apply by filling the sign-up form 2. Begin to remit periodic payments in-line with your income streams 3. Convert your subscription by selecting your preferred form of property acquisition once your total amount is sufficient to access your dream home.
            </div>
          </div>
        </div>

        <div class="card faq-card">
          <div class="card-header" id="headingMillionaire">
            <a class="" data-toggle="collapse" href="#collapseMillionaire" aria-expanded="false" aria-controls="collapseMillionaire">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> Do I have to be a millionaire to BALL?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseMillionaire" class="collapse" aria-labelledby="headingMillionaire" data-parent="#accordion">
            <div class="card-body">
            No you do not, you can start from wherever you currently are financially. However, we assure you that BALLing will definitely take you millionaire status.
            </div>
          </div>
        </div>

      </div>
    </div>
</section>
<!-- /. Getting started accordion -->

<!-- Payment accordion -->
<section class="faq-option-category" id="payment">
    <h2 class="faq-option-category-heading">Payment</h2>
    <h5 class="faq-option-category-text">These are payment related questions about BALL. Please go <br> through this section if you need your questions answered.</h5>

    <div class="col-lg-9 col-12 faq-option-category-accordion">
      <div id="accordion">

        <div class="card faq-card">
          <div class="card-header" id="headingSix">
            <a class="" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span>  How do I make my periodic payments?
                <span class="faq-option-category-icon first">&nbsp; - </span>
              </h5>
            </a>
          </div>
          <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              Via the payment gateway within your dashboard on this BALL platform.
            </div>
          </div>
        </div>

        <div class="card faq-card">
          <div class="card-header" id="headingSeven">
            <a class="" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> Can I upgrade my saving plan in the future?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">
            Yes you can, you are at liberty to alter your subscription amount to align with your reality which may mean an upward or downward review as convenient, you can also pause your contributions where unavoidable life requirements present themselves.
            </div>
          </div>
        </div>

      </div>
    </div>
</section>
<!-- /. Payment accordion -->

<!-- Profile accordion -->
<section class="faq-option-category" id="profile">
    <h2 class="faq-option-category-heading">Profile</h2>
    <h5 class="faq-option-category-text">These are profile related questions about BALL. Please go <br> through this section if you need your questions answered.</h5>

    <div class="col-lg-9 col-12 faq-option-category-accordion">
      <div id="accordion">

        <div class="card faq-card">
          <div class="card-header" id="headingEight">
            <a class="" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> How Do I Create <br> My Profile
                <span class="faq-option-category-icon first">&nbsp; - </span>
              </h5>
            </a>
          </div>
          <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordion">
            <div class="card-body">
            By completing the easy-to-fill application form. Kindly <a href="https://ballers.ng/register">click here</a>.
            </div>
          </div>
        </div>

        <div class="card faq-card">
          <div class="card-header" id="headingNine">
            <a class="" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What Can I Do <br> With My Profile?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
            <div class="card-body">
            You can do a multitude of things including check your amount contributed till date, see your amount earned, conduct property analysis, see a variety of acquisition options, and more.
            </div>
          </div>
        </div>

        <div class="card faq-card">
          <div class="card-header" id="headingRequirements">
            <a class="" data-toggle="collapse" href="#collapseRequirement" aria-expanded="false" aria-controls="collapseRequirement">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What documents do I have to supply to apply?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseRequirement" class="collapse" aria-labelledby="headingRequirement" data-parent="#accordion">
            <div class="card-body">
            To sign-up, all you need to do is fill the application form and select any of the available remittance options.
            </div>
          </div>
        </div>

      </div>
    </div>
</section>
<!-- /. Profile accordion -->

<!-- Security accordion -->
<section class="faq-option-category" id="security">
    <h2 class="faq-option-category-heading">Security</h2>
    <h5 class="faq-option-category-text">These are security related questions about BALL. Please go <br> through this section if you need your questions answered.</h5>

    <div class="col-lg-9 col-12 faq-option-category-accordion">
      <div id="accordion">

        <!-- <div class="card faq-card">
          <div class="card-header" id="headingTen">
            <a class="" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> How Secure Is <br> My Money?
                <span class="faq-option-category-icon first">&nbsp; - </span>
              </h5>
            </a>
          </div>
          <div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div> -->

        <div class="card faq-card">
          <div class="card-header" id="headingEleven">
            <a class="" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What Happens If I <br> Lose My Password
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
            <div class="card-body">
             You can reset your password by clicking on the reset password link. A link will be sent to your registered mail where you can change your password.
            </div>
          </div>
        </div>

      </div>
    </div>
</section>
<!-- /. Security accordion -->

<section class="faq-question">
    <h2 class="faq-question-heading">You still have a question?</h2>
    <h5 class="faq-question-text">If you cannot find answer to your question in our FAQ, you can <br> always contact us . We will be with you shortly!</h5>

    <div class="faq-question-contact col-12">
        <aside class="col-lg-4 col-md-5 col-12 faq-question-info-div">
            <img src="./assets/img/icons/phone-icon.png" alt="Phone icon">
            <h4 class="faq-question-info">+234 807 654 5543</h4>
            <p class="faq-question-info-small">We are always happy to help.</p>
        </aside>
        
        <aside class="col-lg-4 col-md-5 col-12 faq-question-info-div">
            <img src="./assets/img/icons/mail-icon.png" alt="Mail icon">
            <h4 class="faq-question-info">
              <a href="mailto:support@ballers.ng" target="_blank">support@ballers.ng</a>
            </h4>
            <p class="faq-question-info-small">The best way to get answer faster.</p>
        </aside>
    </div>
</section>

<?php require_once('includes/footer.php'); ?>
