
<!-- wrapper for search content -->
<div class="" id="page-content-wrapper">
    <div class="container-fluid">

        <section class="search-holding">
            <div class="row">
                <div class="col-lg-1 col-12"></div>
                <div class="col-lg-10 col-12 search-holding-property">

                    <a href="#toggle-search-map" class="btn toggle-search-map" id="toggle-search-map">
                        <span><img src="./assets/img/icons/view-map-pin.svg" alt="view map"> &nbsp; View Map</span>
                    </a>
                    
                    <h5 class="search-holding-title">&#9432; Average property price</h5>
                    <h1 class="search-holding-property-heading">NGN <?php echo $avg_price_formatted?></h1>
                    <h5 class="search-holding-property-text">
                        <img src="./assets/img/icons/location-gray.svg" alt="location" class="search-holding-property-icon">
                        <?php echo $area.", ".$state?>
                    </h5>
                    &nbsp;&nbsp;&nbsp;
                    <h5 class="search-holding-property-text">
                        <img src="./assets/img/icons/house-gray.svg" alt="house" class="search-holding-property-icon">
                        <?php echo $type?>
                    </h5>

                    <br>
                    <div class="search-holding-property-range">
                        <img src="./assets/img/dashed-line.svg" alt="dashed line" class="search-holding-property-range-track">
                        <br>
                        <h5 class="search-holding-property-range-price">NGN <?php echo $min_price_formatted?></h5>
                        
                        <h5 class="search-holding-property-range-text">&#9432; Property price range of the selected location</h5>
                        
                        <h5 class="search-holding-property-range-price">NGN <?php echo $max_price_formatted?></h5>
                    </div>
                </div>
                <div class="col-lg-1 col-12"></div>
            </div>
        </section>

        <section class="search-ready">
            <h3 class="search-ready-heading">Define your eligibility</h3>
            <p class="search-ready-text">Fill in the details below to  define your eligibility to owning this property</p>

            <form action="" method="post">
                <div class="row search-ready-investments">

                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 search-ready-step investment-initial">
                        <h5 class="search-ready-step-heading">Initial investment amount</h5>
                        <p class="search-ready-step-text">Use the scroll bar or type in <br> the desired amount</p>

                        <div class="row custom-range-div">
                            <div class="form-group col-sm-6 col-12">
                                <label for="initial-investment">NGN 500,000</label>
                                <input type="range" class="custom-range" id="initial-investment" min="100000" max="<?php echo $max_price ?>" step="10000" value="500000">
                            </div>

                            <div class="input-group col-sm-6 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="initial-investment">NGN</span>
                                </div>
                                <input type="text" class="form-control investment-value-input" name="initial-investment"  placeholder="500,000" data-max-amount="<?php echo $max_price_formatted ?>"  aria-label="Username" aria-describedby="initial-investment">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>

                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 search-ready-step investment-frequency">
                        <h5 class="search-ready-step-heading">Investment Frequency</h5>
                        <p class="search-ready-step-text">Select one of the options below</p>

                        <div class="btn-group-toggle investment-options investment-options-quaterly" data-toggle="buttons">
                            <label class="col-sm-3 col-12 btn btn-secondary option-btn">
                                <input type="radio" name="investment-frequency" value="monthly" id="option1" autocomplete="off"> Monthly
                            </label>

                            <label class="col-sm-1 col-12"></label>

                            <label class="col-sm-3 col-12 btn btn-secondary option-btn option-btn-quaterly active">
                                <input type="radio" name="investment-frequency" value="quarterly" id="option2" autocomplete="off" checked> Quarterly
                            </label>

                            <label class="col-sm-1 col-12"></label>

                            <label class="col-sm-3 col-12 btn btn-secondary option-btn">
                                <input type="radio" name="investment-frequency" value="voluntarily" id="option3" autocomplete="off"> Voluntarily
                            </label>

                            <label class="col-sm-1 col-12"></label>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>

                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 search-ready-step investment-periodic">
                        <h5 class="search-ready-step-heading">Periodic investment amount</h5>
                        <p class="search-ready-step-text">Use the scroll bar or type in <br> your desired amount</p>


                        <div class="row custom-range-div">
                            <div class="form-group col-sm-6 col-12">
                                <label for="periodic-investment">NGN 100,000</label>
                                <input type="range" class="custom-range" id="periodic-investment" min="50000" max="<?php echo $max_price ?>" step="5000" value="100000">
                            </div>

                            <div class="input-group col-sm-6 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">NGN</span>
                                </div>
                                <input type="text" class="form-control investment-value-input" name="periodic-investment" placeholder="100,000" data-max-amount="<?php echo $max_price_formatted ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>

                </div>

                <div class="row search-calculate">
                    <div class="col-lg-4 mx-auto">
                        <button class="btn search-calculate-button" type="submit" name="calculate-investment">Calculate</button>
                    </div>
                </div>

            </form>

            <div class="row search-ready-investments">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 search-ready-awesome">
                    <h3 class="search-ready-heading">Awesome!</h3>
                    <p class="search-ready-text">You’re just one plan away from owning your home. <br> Consider one of the plans below.</p>

                    <a tabindex="0" class="btn" id="search-ready-awesome-spread" role="button" data-toggle="popover">
                        <h5 class="search-ready-awesome-spread-text">Spread Payment <img src="./assets/img/icons/question-mark.svg" alt="spread payment"></h5>
                    </a>
                    <br>

                    <button class="btn search-ready-awesome-eligibility"><span>&#8592;</span> Eligibility status</button>
                    <button class="btn search-ready-awesome-create">Create free account</button>
                    <p class="search-ready-text-small">Open a free account and own your dream home</p>
                </div>
                <div class="col-lg-2"></div>
            </div>

        </section>

    </div>
</div>
<!-- wrapper for search content end -->

<?php
    echo "<script>
            function searchResultMap() {
                var point = { lat: ".$latitude.", lng: ".$longitude." };
                var map = new google.maps.Map(document.getElementById('sidemap-nav'), { zoom: 12, center: point });
                var marker = new google.maps.Marker({
                position: point,
                map: map,
                icon: './assets/img/icons/map-marker-icon.png'
                });
            }
        </script>";
    echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key='.MAP_API_KEY.'&callback=searchResultMap"></script>';
    
?>
