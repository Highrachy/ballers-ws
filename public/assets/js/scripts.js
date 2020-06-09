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
var initMap = () => {
  var office = { lat: 6.4297284, lng: 3.4297021 };
  var map = new google.maps.Map(document.getElementById('contact-address-map'), { zoom: 18, center: office });
  var marker = new google.maps.Marker({
    position: office,
    map: map,
    // icon: ''
  });
}

$(document).ready(function () {
  $('#payment, #profile, #security').hide();

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
    var number = parseInt($(this).val().replace(/\D/g, ''), 10);
    number = (isNaN(number) ? 0 : number);
    $(this).val(number.toLocaleString());
  });

  //update the input & label value when slider is moved
  const rangeSliderDiv = document.querySelectorAll('.custom-range-div');
  Array.prototype.forEach.call(rangeSliderDiv, (slider) => {
    slider.querySelector('.custom-range').addEventListener('input', (event) => {
      var inputValue = removeCommasAndMakeNumber(event.target.value)
      slider.querySelector('label').innerHTML = 'NGN ' + formatToCurrency(inputValue);
      slider.querySelector('.form-control').value = formatToCurrency(inputValue);
    });
  });

  // update the slider thumb location & label when input value changes
  Array.prototype.forEach.call(rangeSliderDiv, (input) => {
    input.querySelector('.form-control').addEventListener('input', (event) => {
      const maxInputValue = removeCommasAndMakeNumber($(event.target).data('max-amount') || 1000000);
      var inputValue = removeCommasAndMakeNumber(event.target.value);
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

  $.ajax({
    type: 'POST',
    url: './includes/find-house.php',
    data: {
      load_state: true
    },
    success: function(data){
      data = JSON.parse(data);
      var text = "<option selected disabled>State</option>";

      for (let i = 0; i < data.length; i++) {
        text += `<option value="${data[i].state_id}">${data[i].state_name}</option>`;
      }

      state.html(text);
      area.prop('disabled', true);
      type.prop('disabled', true);
    }
  });

  state.on('change', function () {
    var stateID = $(this).val();
    if (stateID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          state_id: stateID
        },
        success: function(data){
          data = JSON.parse(data);
          var text = "<option selected disabled>Area</option>";

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

  area.on('change', function () {
    var areaID = $(this).val();
    var stateID = state.val();
    
    if (areaID) {
      $.ajax({
        type: 'POST',
        url: './includes/find-house.php',
        data: {
          area_id: areaID,
          state_id: stateID
        },
        success: function(data){
          data = JSON.parse(data);
          var text = "<option selected disabled>House Type</option>";

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
  $("#toggle-search-map").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $(this).html() == '<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>' ? $(this).html('<span><img src="./assets/img/icons/view-map-pin.svg" alt="view map"> &nbsp; View Map</span>') : $(this).html('<span><img src="./assets/img/icons/close-map-pin.svg" alt="view map"> &nbsp; Close Map</span>');
  });

});
