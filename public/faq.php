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

        <div class="card">
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
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>

        <div class="card">
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
              Balling is an experience, a choice for a quality lifestyle and a legacy, generations to come will benefit from an easy decision you make today.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <a class="" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> What is the minimum <br> amount to invest?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFour">
            <a class="" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> How secured are <br> my savings?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <a class="" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> Can I upgrade my saving <br> plan in the future?
                <span class="faq-option-category-icon">&nbsp; + </span>
              </h5>
            </a>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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

        <div class="card">
          <div class="card-header" id="headingSix">
            <a class="" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <h5 class="mb-0 faq-card-heading">
                <span class="faq-black-dot">&#9679; &nbsp;&nbsp;</span> How Do I Pay
                <span class="faq-option-category-icon first">&nbsp; - </span>
              </h5>
            </a>
          </div>
          <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>

        <div class="card">
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
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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

        <div class="card">
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
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            </div>
          </div>
        </div>

        <div class="card">
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
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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

        <div class="card">
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
        </div>

        <div class="card">
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
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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
        <div class="col-lg-3 col-md-5 col-12 faq-question-info-div">
            <img src="./assets/img/icons/phone-icon.png" alt="Phone icon">
            <h4 class="faq-question-info">+234 807 654 5543</h4>
            <p class="faq-question-info-small">We are always happy to help.</p>
        </div>
        &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;
        <div class="col-lg-3 col-md-5 col-12 faq-question-info-div">
            <img src="./assets/img/icons/mail-icon.png" alt="Mail icon">
            <h4 class="faq-question-info">
              <a href="mailto:support@ballers.ng" target="_blank">support@ballers.ng</a>
            </h4>
            <p class="faq-question-info-small">The best way to get answer faster.</p>
        </div>
    </div>
</section>

<?php require_once('includes/footer.php'); ?>
