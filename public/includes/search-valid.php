<section class="search-holding">
    <h5 class="search-holding-title">Average prices in the selected location is being displayed</h5>

    <div class="col-lg-12 search-holding-description">
        <h1 class="search-holding-description-heading">NGN <?php echo $avg_price?></h1>
        <h5 class="search-holding-description-text">
            <img src="./assets/img/icons/location-white.svg" alt="location" class="search-holding-description-icon">
            <?php echo $area.", ".$state?>
        </h5>
        &nbsp;&nbsp;&nbsp;
        <h5 class="search-holding-description-text">
            <img src="./assets/img/icons/house-white.svg" alt="house" class="search-holding-description-icon">
            <?php echo $type?>
        </h5>
    </div>

    <div class="row search-valid-page-form">
        <form class="form-inline">

            <div class="col-lg-4 col-sm-6">
                <div class="col-sm-7 col-6 search-valid-page-form-label">
                    <label class="" for="location">Average price in</label>
                </div>
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="./assets/img/icons/location.png" class="input-icon" alt="location icon">
                        </div>
                    </div>
                    <input type="text" class="form-control search-valid-page-form-input" id="location" value="<?php echo $area.", ".$state?>">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="col-sm-5 col-4 search-valid-page-form-label">
                    <label class="" for="housetype">House type</label>
                </div>
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="./assets/img/icons/house.png" class="input-icon" alt="house icon">
                        </div>
                    </div>
                    <select class="form-control custom-select search-valid-page-form-input" id="housetype">
                        <option>House type</option>
                        <option selected value=""><?php echo $type?></option>
                    </select>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="col-12">
                    <button type="submit" class="btn btn-large search-valid-page-form-submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <hr>
</section>
<section class="search-ready">
    <h3 class="search-ready-heading">Know when your home would be ready</h3>
    <p class="search-ready-text">Fill in the details below to  know when your home would be ready</p>

    <div class="row search-ready-investments">
        <div class="col-lg-3 search-ready-step investment-frequency">
            <h5 class="search-ready-step-heading">Investment Frequency</h5>
            <p class="search-ready-step-text">Select one of the options below</p>

            <div class="btn-group-toggle investment-options row" data-toggle="buttons">
                <label class="col-lg-12 col-sm-3 btn btn-secondary option-btn">
                    <input type="radio" name="investment-frequency" id="option1" autocomplete="off"> Monthly
                </label>

                <label class="col-lg-12 col-sm-3 btn btn-secondary option-btn option-btn-quaterly active">
                    <input type="radio" name="investment-frequency" id="option2" autocomplete="off" checked> Quarterly
                </label>

                <label class="col-lg-12 col-sm-3 btn btn-secondary option-btn">
                    <input type="radio" name="investment-frequency" id="option3" autocomplete="off"> Voluntarily
                </label>
            </div>
        </div>

        <div class="col-lg-3 search-ready-step investment-initial">
            <h5 class="search-ready-step-heading">Initial investment amount</h5>
            <p class="search-ready-step-text">Use the scroll bar or type in <br> the desired amount</p>

            <div class="row custom-range-div">
                <div class="form-group col-lg-12 col-sm-6">
                    <label for="initial-investment">NGN 500,000</label>
                    <input type="range" class="custom-range" id="initial-investment" name="" min="100000" max="30000000" step="10000" value="500000">
                </div>

                <div class="input-group col-lg-12 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text">NGN</span>
                    </div>
                    <input type="text" class="form-control investment-value-input" placeholder="500,000" data-max-amount="30,000,000">
                </div>
            </div>
        </div>

        <div class="col-lg-3 search-ready-step investment-periodic">
            <h5 class="search-ready-step-heading">Periodic investment amount</h5>
            <p class="search-ready-step-text">Use the scroll bar or type in <br> your desired amount</p>


            <div class="row custom-range-div">
                <div class="form-group col-lg-12 col-sm-6">
                    <label for="periodic-investment">NGN 100,000</label>
                    <input type="range" class="custom-range" id="periodic-investment" name="" min="50000" max="5000000" step="5000" value="100000">
                </div>

                <div class="input-group col-lg-12 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text">NGN</span>
                    </div>
                    <input type="text" class="form-control investment-value-input" placeholder="100,000" data-max-amount="5,000,000">
                </div>
            </div>
        </div>

    </div>

    <div class="row search-calculate">
        <div class="col-lg-4 mx-auto">
            <button class="btn search-calculate-button">Calculate</button>
            <p class="">Results are based on market research done in 2020</p>
        </div>
    </div>

</section>
