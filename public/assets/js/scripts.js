// show questions based on slider on faq page
function toggleQuestions(id) {
  $('#payment, #profile, #security, #getting-started').hide();
  $('#' + id).show();
}

//function to format slider values to currency like format
function formatToCurrency(number) {
  return number.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ',');
}

function removeCommasAndMakeNumber(string) {
  return parseInt(string.replace(/,/g, ''));
}

// google maps initialization
function initMap() {
  let office = { lat: 6.4297284, lng: 3.4297021 };
  let map = new google.maps.Map(
    document.getElementById('contact-address-map'),
    { zoom: 18, center: office }
  );
  let marker = new google.maps.Marker({
    position: office,
    map: map,
    // icon: ''
  });
}

$(document).ready(function () {
  $('#payment, #profile, #security').hide();
  $('.search-ready-awesome-div').hide();
  $('.search-calculate-button').prop('disabled', true);

  // initialize popovers
  $(function () {
    $('[data-toggle="popover"]').popover();
  });

  let periodicChanged = false;
  let initialChanged = false;

  function enableSeachCalculateBtn(periodicChanged, initialChanged) {
    if (periodicChanged && initialChanged) {
      $('.search-calculate-button').prop('disabled', false);
    }
  }

  const MOBILE_WIDTH = 576;
  let popOverPlacement;
  if ($(window).width() < MOBILE_WIDTH) {
    popOverPlacement = 'top';
  } else {
    popOverPlacement = 'right';
  }

  $('#search-ready-awesome-spread').popover({
    html: true,
    trigger: 'focus hover',
    placement: popOverPlacement,
    title: 'Payment Method',
    content: `Based on your initial investment amount,
    Investment frequency,and the periodic investment amount you selected,
    you will likely be comfortably able to pay
    for a home with an extra credit option.
    <br>
    <a href="faq.php" target="_blank" class="search-ready-awesome-spread-popover-link">Learn more &#8594;</a>`,
  });

  // slick slider
  $('.benefits-slider').slick({
    speed: 1500,
    infinite: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 7000,
    slidesToScroll: 1,
    centerPadding: '0',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '1.5rem',
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
        },
      },
    ],
    prevArrow:
      '<span class="prev"><img src="./assets/img/icons/btn-prev.png" alt="previous-arrow" class="slider-prev arrow"></span>',
    nextArrow:
      '<span class="next"><img src="./assets/img/icons/btn-next.png" alt="next-arrow" class="slider-next arrow"></span>',
  });

  $('.faq-category-slider').slick({
    speed: 500,
    infinite: true,
    centerMode: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 4000,
    slidesToScroll: 1,
    centerPadding: '0',
    slidesToShow: 4,
    dots: true,
    customPaging: function (i) {
      return '<span class="faq-slider-dot" id=' + i + '>&nbsp;</span>';
    },
    useTransform: true,
    cssEase: 'ease-in-out',
    responsive: [
      {
        breakpoint: 992,
        dots: true,
        useTransform: true,
        cssEase: 'ease-in-out',
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 576,
        dots: true,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
        },
      },
    ],
  });

  //faq icon toggle
  $('.faq-card')
    .on('shown.bs.collapse', function () {
      $(this)
        .find('.faq-option-category-icon')
        .text((text) => (text === '-' ? '+' : '-'));
    })
    .on('hidden.bs.collapse', function () {
      $(this)
        .find('.faq-option-category-icon')
        .text((text) => (text === '+' ? '-' : '+'));
    });

  //function to format number input values to currency like format
  $('.investment-value-input').on('keyup', function () {
    let number = parseInt($(this).val().replace(/\D/g, ''), 10);
    number = isNaN(number) ? 0 : number;
    $(this).val(number.toLocaleString());
  });

  //update the input & label value when slider is moved
  const rangeSliderDiv = document.querySelectorAll('.custom-range-div');
  Array.prototype.forEach.call(rangeSliderDiv, (slider) => {
    slider.querySelector('.custom-range').addEventListener('input', (event) => {
      let inputValue = removeCommasAndMakeNumber(event.target.value);
      slider.querySelector('label').innerHTML =
        'NGN ' + formatToCurrency(inputValue);
      slider.querySelector('.form-control').value = formatToCurrency(
        inputValue
      );
    });
  });

  // update the slider thumb location & label when input value changes
  Array.prototype.forEach.call(rangeSliderDiv, (input) => {
    input.querySelector('.form-control').addEventListener('input', (event) => {
      const maxInputValue = removeCommasAndMakeNumber(
        $(event.target).data('max-amount') || 1000000
      );
      let inputValue = removeCommasAndMakeNumber(event.target.value);
      if (isNaN(inputValue)) {
        inputValue = 0;
      }
      if (inputValue > maxInputValue) {
        inputValue = maxInputValue;
      }
      input.querySelector('.custom-range').value = inputValue;
      input.querySelector('label').innerHTML =
        'NGN ' + formatToCurrency(inputValue);
      input.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

  // use ajax to update select options on index page
  const state = $('#state');
  const area = $('#area');
  const type = $('#type');

  const preSelectedState = state.data('current-value');
  const preSelectedArea = area.data('current-value');
  const preSelectedType = type.data('current-value');

  $.ajax({
    type: 'POST',
    url: './includes/find-house.php',
    data: {
      load_state: true,
    },
    success: function (data) {
      data = JSON.parse(data);
      let text = `<option selected disabled>${
        preSelectedState || 'State'
      }</option>`;

      for (let i = 0; i < data.length; i++) {
        text += `<option value="${data[i].state_id}">${data[i].state_name}</option>`;
      }

      state.html(text);
      area.prop('disabled', true);
      type.prop('disabled', true);
    },
  });

  // set area if it is preselected
  if (preSelectedArea) {
    area.html(
      `<option selected disabled>${preSelectedArea || 'Area'}</option>`
    );
  }

  state.on('change', function () {
    let stateID = $(this).val();
    if (stateID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          state_id: stateID,
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = '<option selected disabled>Area</option>';

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].area_id}">${data[i].area_name}</option>`;
          }

          if (data.message) {
            text = '<option selected disabled>No Area Available</option>';
          }

          area.html(text);
          type.html('<option value="">Select area</option>');
          area.prop('disabled', false);
          type.prop('disabled', true);
        },
      });
    } else {
      area.html('<option value="">Select state</option>');
      type.html('<option value="">Select area</option>');
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  // set type if it is preselected
  if (preSelectedType) {
    type.html(
      `<option selected disabled>${preSelectedType || 'House Type'}</option>`
    );
  }

  area.on('change', function () {
    let areaID = $(this).val();
    let stateID = state.val();

    if (areaID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          area_id: areaID,
          state_id: stateID,
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = '<option selected disabled>House Type</option>';

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].type}">${data[i].type}</option>`;
          }

          if (data.message) {
            text = '<option selected disabled>No House Available</option>';
          }

          type.html(text);
          type.prop('disabled', false);
        },
      });
    } else {
      area.html('<option value="">Select state</option>');
      type.html('<option value="">Select area</option>');
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  // toggle map on search page
  $('#toggle-search-map').click(function (e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
    $(this).html() ==
    '<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>'
      ? $(this).html(
          '<span><img src="./assets/img/icons/view-map-pin.svg" alt="view map"> &nbsp; View Map</span>'
        )
      : $(this).html(
          '<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>'
        );
  });

  // enable calculate button once form value changes
  $('.periodic-investment').change(function () {
    periodicChanged = true;
    enableSeachCalculateBtn(periodicChanged, initialChanged);
  });
  $('.initial-investment').change(function () {
    initialChanged = true;
    enableSeachCalculateBtn(periodicChanged, initialChanged);
  });
  $('.periodic-investment-input').on('input', function () {
    periodicChanged = true;
    enableSeachCalculateBtn(periodicChanged, initialChanged);
  });
  $('.initial-investment-input').on('input', function () {
    initialChanged = true;
    enableSeachCalculateBtn(periodicChanged, initialChanged);
  });

  $('.search-calculate-button').click(function () {
    const periodic = $('.periodic-investment').val();
    const initial = $('.initial-investment').val();
    const avgPropertyCost = removeCommasAndMakeNumber(
      $('.investment-value-input').data('max-amount')
    );
    const frequency = $("input[name='investment-frequency']:checked").val();

    const balance = avgPropertyCost - initial;
    let output = [];
    let recommendation = '';
    let recommendationNav = '';
    let recommendationBody = '';

    let popOverIcon = `<a tabindex="0" class="" id="search-ready-awesome-spread" role="button" data-toggle="popover">
                        <img src="./assets/img/icons/question-mark.svg" alt="payment">
                      </a>`;

    // Recommendations breakdown can be found here - https://docs.google.com/document/d/1gsomOY9qclUz9RzadN3ztJH4Y0ryGT-fukNBFLhJAIU/edit?pli=1#heading=h.yy9lcow7gkem

    const outrightPaymentPersonal =
      initial >= avgPropertyCost * 0.5 && balance / periodic < 6 / frequency;
    const completeSpreadPayment =
      initial >= avgPropertyCost * 0.2 &&
      balance / periodic > 6 / frequency &&
      balance / periodic <= 24 / frequency;
    const outrightMortgagePMI =
      initial >= avgPropertyCost * 0.25 &&
      balance / periodic > 24 / frequency &&
      avgPropertyCost + 2500000 - initial <= 45000000;
    const outrightMortgageNHF =
      initial >= avgPropertyCost * 0.1 &&
      avgPropertyCost + 2500000 - initial <= 15000000;
    const assistedMortgagePMI =
      periodic * frequency * 24 >= avgPropertyCost * 0.25 &&
      avgPropertyCost + 2500000 - initial > 15000000 &&
      avgPropertyCost + 2500000 - initial <= 45000000;
    const assistedMortgageNHF =
      periodic * frequency * 24 >= avgPropertyCost * 0.1 &&
      avgPropertyCost + 2500000 - initial <= 15000000;
    const rentToOwn =
      initial >= avgPropertyCost * 0.05 &&
      periodic >= avgPropertyCost * 0.01 &&
      balance / periodic <= 120 / frequency;
    const assistedRentToOwn =
      initial <= avgPropertyCost * 0.05 &&
      periodic >= avgPropertyCost * 0.01 &&
      balance / periodic <= 120 / frequency;
    const hybrid =
      initial <= avgPropertyCost * 0.05 &&
      periodic >= avgPropertyCost * 0.01 &&
      balance / periodic <= 24 / frequency;

    const packages = {
      outrightPayment: {
        title: `Outright Payment`,
        advice: `With no extra credit option, you're one step away from owning your home`,
      },
      spreadPayment: {
        title: `Spread Payment`,
        advice: `Pay as low as 20%, and spreading the remaining balance within`,
      },
      outrightPmiMortgage: {
        title: `PMI Mortgage`,
        advice: `You're eligible for a PMI mortgage`,
      },
      assistedPmiMortgage: {
        title: `PMI Mortgage`,
        advice: `You start BALLing and contribute to meet the required equity to secure a PMI mortgage and own your home`,
      },
      outrightNhfMortgage: {
        title: `NHF Mortgage`,
        advice: `You're eligible for a NHF mortgage`,
      },
      assistedNhfMortgage: {
        title: `NHF Mortgage`,
        advice: `Build your equity to acquire NHF mortgage`,
      },
      rentToOwn: {
        title: `Rent-to-own`,
        advice: `Just like rent, you can own your home. Rent to own.`,
      },
      assistedRentToOwn: {
        title: `Rent-to-own`,
        advice: `Build equity to start rent to own`,
      },
      hybrid: {
        title: `Hybrid`,
        advice: `A whole new solution that combines solutions to make owning your home a whole lot easier`,
      },
      ineligible: {
        title: `Ineligible`,
        advice: `You're almost there, keep contributing`,
      },
    };

    if (outrightPaymentPersonal) {
      output.push(packages.outrightPayment);
    }
    if (completeSpreadPayment) {
      output.push(packages.spreadPayment);
    }
    if (outrightMortgagePMI) {
      output.push(packages.outrightPmiMortgage);
    }
    if (!outrightMortgagePMI && assistedMortgagePMI) {
      output.push(packages.assistedPmiMortgage);
    }
    if (outrightMortgageNHF) {
      output.push(packages.outrightNhfMortgage);
    }
    if (!outrightMortgageNHF && assistedMortgageNHF) {
      output.push(packages.assistedNhfMortgage);
    }
    if (rentToOwn) {
      output.push(packages.rentToOwn);
    }
    if (!rentToOwn && assistedRentToOwn) {
      output.push(packages.assistedRentToOwn);
    }
    if (hybrid) {
      output.push(packages.hybrid);
    }
    if (
      !outrightPaymentPersonal &&
      !completeSpreadPayment &&
      !outrightMortgagePMI &&
      !assistedMortgagePMI &&
      !outrightMortgageNHF &&
      !assistedMortgageNHF &&
      !rentToOwn &&
      !assistedRentToOwn &&
      !hybrid
    ) {
      output.push(packages.ineligible);
    }

    for (let i = 0; i < output.length; i++) {
      if ($(window).width() < MOBILE_WIDTH) {
        recommendationBody += `<div class="card recommendation-card">
                                  <div class="card-header recommendation-card-header" id="recommendation-card-heading${i}">
                                    <a data-toggle="collapse" class="testing" href="#collapse${i}" aria-expanded="false" aria-controls="collapse${i}">
                                      <h6 class="mb-0">
                                        ${output[i].title}
                                        <img src="./assets/img/icons/question-mark.svg" alt="payment">
                                        <span class="recommendation-card-icon">
                                          <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.00024 0.499995C5.25624 0.499995 5.51224 0.597994 5.70724 0.792994L9.70724 4.79299C10.0982 5.18399 10.0982 5.81599 9.70724 6.20699C9.31624 6.59799 8.68424 6.59799 8.29324 6.20699L4.98824 2.90199L1.69524 6.08199C1.29624 6.46499 0.665238 6.45399 0.281239 6.05699C-0.102761 5.66 -0.0917617 5.026 0.305239 4.643L4.30524 0.780994C4.50024 0.592994 4.75024 0.499995 5.00024 0.499995Z" fill="#161D3F"/>
                                          </svg>
                                        </span>
                                      </h6>
                                    </a>
                                  </div>
                                  <div id="collapse${i}" class="collapse" aria-labelledby="heading${i}" data-parent="#accordion">
                                    <p class="recommendation-card-heading">Recommendation</p>
                                    <div class="card-body">${
                                      output[i].advice
                                    }</div>
                                    <p class="recommendation-card-target">Target:</p>
                                    <h4 class="recommendation-card-price">NGN ${formatToCurrency(
                                      avgPropertyCost
                                    )}</h4>
                                  </div>
                                </div>`;

        recommendation = `<div id="accordion">
                            ${recommendationBody}
                          </div>`;
      } else {
        recommendationNav += `<a class="nav-item nav-link ${
          i === 0 ? 'active' : ''
        }" id="nav-tab-${i}" data-toggle="tab" href="#nav-${i}" role="tab" aria-controls="nav-${i}" aria-selected="true">
                                ${output[i].title}
                                <img src="./assets/img/icons/question-mark.svg" alt="payment">
                              </a>`;
        recommendationBody += `<div class="tab-pane fade ${
          i === 0 ? 'active show' : ''
        }" id="nav-${i}" role="tabpanel" aria-labelledby="nav-tab-${i}">
                                <p class="recommendation-accordion-heading">Recommendation</p>
                                <p class="recommendation-accordion-body">${
                                  output[i].advice
                                }</p>
                              </div>`;

        recommendation = `<p>With an initial investment of <b>NGN ${formatToCurrency(
          initial
        )}</b>,<br> and a periodic contribution of <b>NGN ${formatToCurrency(
          periodic
        )}</b>.<br> You're a plan away from owning your home</p>
                          <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              ${recommendationNav}
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            ${recommendationBody}
                            <p class="recommendation-accordion-target">Target:</p>
                            <h4 class="recommendation-accordion-price">NGN ${formatToCurrency(
                              avgPropertyCost
                            )}</h4>
                          </div>`;
      }
    }

    $('.search-ready-awesome-recommendation').html(recommendation);
    $('.search-ready-awesome-div').slideDown(1000);

    output = [];
  });
});
