// show questions based on slider on faq page
function toggleQuestions(id) {
  $('#payment, #profile, #security, #getting-started').hide();
  $("#" + id).show();
}

//function to format slider values to currency like format
function formatToCurrency(number) {
  return number.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}

function removeCommasAndMakeNumber(string) {
  return parseInt(string.replace(/,/g, ''));
}

// google maps initialization
function initMap() {
  let office = { lat: 6.4297284, lng: 3.4297021 };
  let map = new google.maps.Map(document.getElementById('contact-address-map'), { zoom: 18, center: office });
  let marker = new google.maps.Marker({
    position: office,
    map: map,
    // icon: ''
  });
}

$(document).ready(function () {
  $('#payment, #profile, #security').hide();
  $(".search-ready-awesome-div").hide();

  // initialize popovers
  $(function () {
    $('[data-toggle="popover"]').popover()
  });

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
    <a href="faq.php" target="_blank" class="search-ready-awesome-spread-popover-link">Learn more &#8594;</a>`
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
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1
        }
      }
    ],
    prevArrow: '<span class="prev"><img src="./assets/img/icons/btn-prev.png" alt="previous-arrow" class="slider-prev arrow"></span>',
    nextArrow: '<span class="next"><img src="./assets/img/icons/btn-next.png" alt="next-arrow" class="slider-next arrow"></span>'
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
      return '<span class="faq-slider-dot" id=' + i + ">&nbsp;</span>";
    },
    useTransform: true,
    cssEase: "ease-in-out",
    responsive: [
      {
        breakpoint: 992,
        dots: true,
        useTransform: true,
        cssEase: "ease-in-out",
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        dots: true,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1
        }
      }
    ]
  });

  //faq icon toggle
  $('.card').on('shown.bs.collapse', function () {
    $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '-' ? '+' : '-');
  }).on('hidden.bs.collapse', function () {
    $(this).find('.faq-icon, .faq-option-category-icon').text((text) => text === '+' ? '-' : '+');
  });

  //function to format number input values to currency like format
  $(".investment-value-input").on('keyup', function () {
    let number = parseInt($(this).val().replace(/\D/g, ''), 10);
    number = (isNaN(number) ? 0 : number);
    $(this).val(number.toLocaleString());
  });

  //update the input & label value when slider is moved
  const rangeSliderDiv = document.querySelectorAll('.custom-range-div');
  Array.prototype.forEach.call(rangeSliderDiv, (slider) => {
    slider.querySelector('.custom-range').addEventListener('input', (event) => {
      let inputValue = removeCommasAndMakeNumber(event.target.value)
      slider.querySelector('label').innerHTML = 'NGN ' + formatToCurrency(inputValue);
      slider.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

  // update the slider thumb location & label when input value changes
  Array.prototype.forEach.call(rangeSliderDiv, (input) => {
    input.querySelector('.form-control').addEventListener('input', (event) => {
      const maxInputValue = removeCommasAndMakeNumber($(event.target).data('max-amount') || 1000000);
      let inputValue = removeCommasAndMakeNumber(event.target.value);
      if (isNaN(inputValue)) {
        inputValue = 0;
      }
      if (inputValue > maxInputValue) {
        inputValue = maxInputValue;
      }
      input.querySelector('.custom-range').value = inputValue;
      input.querySelector('label').innerHTML = 'NGN ' + formatToCurrency(inputValue);
      input.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

  // use ajax to update select options on index page
  const state = $("#state");
  const area = $("#area");
  const type = $("#type");

  const preSelectedState = state.data('current-value');
  const preSelectedArea = area.data('current-value');
  const preSelectedType = type.data('current-value');

  $.ajax({
    type: 'POST',
    url: './includes/find-house.php',
    data: {
      load_state: true
    },
    success: function (data) {
      data = JSON.parse(data);
      let text = `<option selected disabled>${preSelectedState || 'State'}</option>`;

      for (let i = 0; i < data.length; i++) {
        text += `<option value="${data[i].state_id}">${data[i].state_name}</option>`;
      }

      state.html(text);
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  // set area if it is preselected
  if (preSelectedArea) {
    area.html(`<option selected disabled>${preSelectedArea || 'Area'}</option>`)
  }

  state.on('change', function () {
    let stateID = $(this).val();
    if (stateID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          state_id: stateID
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = "<option selected disabled>Area</option>";

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].area_id}">${data[i].area_name}</option>`;
          }

          if (data.message) {
            text = "<option selected disabled>No Area Available</option>";
          }

          area.html(text);
          type.html('<option value="">Select area</option>');
          area.prop('disabled', false);
          type.prop('disabled', true);
        }
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
    type.html(`<option selected disabled>${preSelectedType || 'House Type'}</option>`)
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
          state_id: stateID
        },
        success: function (data) {
          data = JSON.parse(data);
          let text = "<option selected disabled>House Type</option>";

          for (let i = 0; i < data.length; i++) {
            text += `<option value="${data[i].type}">${data[i].type}</option>`;
          }

          if (data.message) {
            text = "<option selected disabled>No House Available</option>";
          }

          type.html(text);
          type.prop('disabled', false);
        }
      });
    } else {
      area.html('<option value="">Select state</option>');
      type.html('<option value="">Select area</option>');
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  // toggle map on search page
  $("#toggle-search-map").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $(this).html() == '<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>' ? $(this).html('<span><img src="./assets/img/icons/view-map-pin.svg" alt="view map"> &nbsp; View Map</span>') : $(this).html('<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>');
  });

  $('.search-calculate-button').click(function(){
    const periodic = $('.periodic-investment').val();
    const initial = $('.initial-investment').val();
    const avgPropertyCost = removeCommasAndMakeNumber($('.investment-value-input').data('max-amount'));
    const frequency = $("input[name='investment-frequency']:checked").val();

    let balance = avgPropertyCost - initial;
    let output;
    let paymentType;
    
    let outrightPersonal = initial >= (avgPropertyCost * 0.5) && balance / periodic < 6 / frequency;
    let immediatePrivate = initial >= (avgPropertyCost * 0.25) && (avgPropertyCost <= 45000000);
    let outrightMortgage = initial >= (avgPropertyCost * 0.25);
    let directSpread = initial >= (avgPropertyCost * 0.2) && balance / periodic > 6 / frequency && balance / periodic <= 24 / frequency;
    let immediateFederal = initial >= (avgPropertyCost * 0.1) && (avgPropertyCost <= 15000000) && balance / periodic <= 12 / frequency;
    let spreadFederal = initial >= (avgPropertyCost * 0.01) && (avgPropertyCost <= 15000000) && balance / periodic <= 24 / frequency;
    let rentToOwn = initial >= (avgPropertyCost * 0.05) && balance / periodic <= 120 / frequency;
    let spreadPrivate = initial >= (avgPropertyCost * 0.025) && (avgPropertyCost <= 45000000) && balance / periodic <= 24 / frequency;
    

    if (outrightPersonal) { // 50%
      paymentType = 'Personal Outright Payment';
    } else if (immediatePrivate) { // 25% < 45m
      paymentType = 'Private Immediate Equity';
    } else if (outrightMortgage) { // 25%
      paymentType = 'Mortgage Outright Payment';
    } else if (directSpread) { // 20%
      paymentType = 'Direct Spread Payment';
    } else if (immediateFederal) { // 10% < 15m
      paymentType = 'Federal Immediate Equity';
    } else if (spreadFederal) { // 1% < 15m
      paymentType = 'Federal Spread Equity';
    } else if (spreadPrivate) { // 2.5% < 45m
      paymentType = 'Private Spread Equity';
    } else if (rentToOwn) { // 5%
      paymentType = 'Rent to own package';
    } else { // 1%
      paymentType = 'Hybrid Outright Payment';
    }

    output = `${paymentType} <img src="./assets/img/icons/question-mark.svg" alt="payment">`
    $('.search-ready-awesome-spread-text').html(output);
    $(".search-ready-awesome-div").show(1000);
  });

});
